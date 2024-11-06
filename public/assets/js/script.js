// Get the modal and buttons
const modal = document.getElementById('myModal');
const openModalBtn = document.getElementById('openModalBtn');
const closeModalBtn = document.getElementById('closeModalBtn');




// When the user clicks the button, open the modal
openModalBtn.addEventListener('click', function() {
    modal.style.display = 'block'; // Show the modal
});

// When the user clicks on <span> (x), close the modal
closeModalBtn.addEventListener('click', function() {
    modal.style.display = 'none'; // Hide the modal
});

// When the user clicks anywhere outside of the modal, close it
window.addEventListener('click', function(event) {
    if (event.target === modal) {
        modal.style.display = 'none'; // Hide the modal if clicked outside
    }
});


// ============================= UPDATE ==================================
