<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\NoteModel;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'page_title' => "N O T E - A P P 📑"
        ];
        $userId = session()->get('id');

        // create instances of the database models
        $model = new UserModel();
        $note_Model = new NoteModel();

        // query builder 
        $user = $model->find($userId);
        $notes = $note_Model->where('user_id',$userId)->where('status','True')->findAll();


        $data['user'] = $user;
        $data['notes'] = $notes;


        return view('Notes_view',$data);
    }

    public function Register(){
        $data = [
            'page_title' => "Registeration Page"
        ];

        $model = new UserModel();
        helper(['form']);
       

        if($this->request->getMethod() === 'POST'){
            // let's validate data
            $rules = [
                'username' => 'required|is_unique[users.username]',
                'Email' => 'required|valid_email|is_unique[users.Email]',
                'password' => 'required',
                'password_confirm' => 'matches[password]',
            ];
            // 
            if($this->validate($rules)){

               
                // get the inputs value
                $newData = [
                    'username' => $this->request->getVar('username'),
                    'Email' => $this->request->getVar('Email'),
                    'password' => $this->request->getVar('password'),
                ];
    
                   $model->save($newData);
                   $data['validation'] = $this->validator;
                   return redirect()->to(base_url('/Login'));
            }else{
                $data['validation'] = $this->validator;
                return view('Regsiter_view', $data);
            }

        }

        return view('Regsiter_view', $data);
    }

    public function Login(){

        $data = [
            'page_title' => 'L O G I N',
        ];
        helper(['form']);

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        

        $model = new UserModel();
        if($this->request->getMethod() === "POST"){

            // Let's make validation rules
            $rules = [
                'username' => 'required',
                'password' => 'required|validateUser[username,password]',
            ];
    
            $errors = [
                'password' => [
                    'validateUser' => 'EMAIL OR PASSWORD IS WRONG'
                ]
            ];


           if($this->validate($rules)){

            // initialize database
    
                $user = $model->where('username', $username)->first();
                $this->setUserSession($user);
                return redirect()->to(base_url('/'));
            }else{
                $data['validation'] = $this->validator;
                return view('Login_view', $data);
           }
        }

        return view('Login_view',$data);

    }

    private function setUserSession($user){
        $data = [
            'id' => $user['id'],
            'Email' => $user['Email'],
            'username' => $user['username'],
            'isLoggedIn' => true
        ];

        session()->set($data);
        return true;
    }

    // create Note

    public function createNote(){
        $data = [
            'page_title' => "N O T E - A P P 📑"
        ];
        $userId = session()->get('id');


        $model = new UserModel();
        $note_Model = new NoteModel();


        $user = $model->find($userId);
        $data['user'] = $user;
        
        // let's get how many notes that this user has created 
        $note_created = $note_Model->where('user_id', $userId)->countAllResults();
        $new_Note_Added = $note_created + 1;

        if($this->request->getMethod() === 'POST'){

            $NoteField = $this->request->getVar('Note_Field');
            // store data to the Database
            $newData = [
                'user_id' => $userId,
                'note' => $NoteField,
                'status' => "True"
                // 'notes_created' => $new_Note_Added
            ];

            $updateNoteNumber = [
                'id' => $userId,
                'notes_created' => $new_Note_Added
            ];
            // return 'Notes were: '.$note_created. ' updated to: '.$new_Note_Added;
            $note_Model->save($newData);
            $model->save($updateNoteNumber);
            return redirect()->to(base_url('/'));
        }else{
            return "<h1 class='text-center mt-5'> FAILED TO SAVE DATA </h1>";
        }

        return view('Notes_view',$data);

        // return "data posted succesfully";
    }

    // read Each Note
    // public function readNote($noteId){
    //     $data = [
    //         'page_title' => "N O T E - A P P 📑"
    //     ];

    //     $userId = session()->get('id');
    //     $note_Model = new NoteModel();

    //     $note = $note_Model->find($noteId);

    //     $data['note'] = $note;
    //     return view('updateNote_view',$data);
    // }

    // update Note
    public function updateNote($noteId){
        $data = [
            'page_title' => "N O T E - A P P 📑"
        ];

        $userId = session()->get('id');
        $note_Model = new NoteModel();

        $note = $note_Model->find($noteId);

        $data['note'] = $note;
        // return view('updateNote_view',$data);
        if($this->request->getMethod() === 'POST'){

            $rules = [
                'Note_Field' => 'required'
            ];

            $updatedData = [
                'id' => $noteId,
                'note' => $this->request->getVar('Note_Field')
            ];

            // store data to DB
            $note_Model->save($updatedData);
            return redirect()->to(base_url('/'));
        }
        return view('updateNote_view',$data);
    }

    // Delete Note
    public function DeleteNote($noteId){
        $data = [
            'page_title' => "N O T E - A P P 📑"
        ];

        $userId = session()->get('id');
        $note_Model = new NoteModel();

        $note = $note_Model->find($noteId);

        $data['note'] = $note;
        // return view('updateNote_view',$data);
        // if($this->request->getMethod() === 'POST'){

            $rules = [
                'Note_Field' => 'required'
            ];

            $updatedData = [
                'id' => $noteId,
                'status' => 'False'
            ];

            // store data to DB
            $note_Model->save($updatedData);
            return redirect()->to(base_url('/'));
        // }
        // return view('updateNote_view',$data);
    }

    // Logout
    public function Logout(){
        session()->destroy();
        return redirect()->to(base_url('Login'));
    }
}
