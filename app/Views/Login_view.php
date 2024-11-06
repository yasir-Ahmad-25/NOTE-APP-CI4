<?= $this->extend('Layouts/main.php'); ?>

<?= $this->section('content'); ?>
    <div class="container shadow-sm border border-secondary rounded mt-4">
        <form action="" method="post" class="p-2">
            <h3 class="text-center fw-semobold">L O G I N <i class="fa-solid fa-id-card" style="color: #74C0FC;"></i></h3>
            <hr>

            <!-- SERVER Message -->
            <?php if(isset($validation)): ?>
                <div class="form-group text-danger">
                    <?= $validation->listErrors() ?>
                </div>
            <?php endif; ?>
            
            <div class="form-group mt-2">
                <label for="#">username</label>
                <input type="text" class="form-control" name="username" value="<?= set_value('username')?>" placeholder="Enter your username">
            </div>

            <div class="form-group mt-2">
                <label for="#">password</label>
                <input type="password" class="form-control" name="password" value="<?= set_value('password')?>" placeholder="Enter your password">
            </div>

            <button type="submit" class="btn w-100 mt-2" style="background-color: #74C0FC">LOGIN</button>

            <div class="container text-center">
                <p>don't have An Account <span><a href="register">create New Account</a></span></p>
            </div>
        </form>
    </div>
<?= $this->endSection('content'); ?>