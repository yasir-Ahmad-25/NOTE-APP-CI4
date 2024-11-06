<?= $this->extend('Layouts/main.php'); ?>

<?= $this->section('content'); ?>
    <div class="container shadow-sm border border-secondary rounded mt-4">
    <form action="" method="post" enctype="multipart/form-data" class="p-2">
        <h3 class="text-center fw-semobold">R E G I S T E R A T I O N <i class="fa-solid fa-id-card" style="color: #74C0FC;"></i></h3>
        <hr>

        <!-- SERVER Message -->
        <?php if(isset($validation)): ?>
            <div class="form-group text-danger">
                <?= $validation->listErrors() ?>
            </div>
        <?php endif; ?>

        <div class="row">
            <!-- User Details Section -->
            <div class="col-md-12">
                
                <div class="form-group mt-2">
                    <label for="#">Username</label>
                    <input type="text" class="form-control" name="username" value="<?= set_value('username')?>" placeholder="Enter your lastname">
                </div>

                <div class="form-group mt-2">
                    <label for="#">Email</label>
                    <input type="email" class="form-control" name="Email" value="<?= set_value('Email')?>" placeholder="Enter your Email">
                </div>

                <div class="form-group mt-2">
                    <label for="#">Password</label>
                    <input type="password" class="form-control" name="password" value="<?= set_value('password')?>" placeholder="Enter your password">
                </div>

                <div class="form-group mt-2">
                    <label for="#">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirm" value="<?= set_value('password_confirm')?>" placeholder="confirm your password">
                </div>

                <button type="submit" class="btn w-100 mt-2" style="background-color: #74C0FC">REGISTER</button>
            </div>
        </div>

        <div class="container text-center mt-3">
            <p>I have already an account <span><a href="Login">Login</a></span></p>
        </div>
    </form>

<!-- JavaScript to Preview the Image -->
<script>
    // Get the image and file input elements
    const profileImageInput = document.getElementById('profile_image');
    const profilePreview = document.getElementById('profilePreview');

    // When the image is clicked, trigger the file input click
    profilePreview.addEventListener('click', function() {
        profileImageInput.click();  // Trigger the file input dialog
    });

    // When a file is selected, update the image preview
    profileImageInput.addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            
            // When the file is loaded, update the preview image
            reader.onload = function(e) {
                profilePreview.src = e.target.result; // Set the src to the base64-encoded image
            };
            
            // Read the file as a data URL
            reader.readAsDataURL(file);
        }
    });
</script>


    </div>
<?= $this->endSection('content'); ?>