<?php
session_start();





?>
<!-- Including header -->
<?php include 'modules/inc/header.php'; ?>

<!-- Including sidebar -->
<?php include 'modules/inc/sidebar.php'; ?>

<!--**********************************
            Content body start
        ***********************************-->

<div class="login-form-bg h-100 my-5">
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-xl-6">
                <div class="form-input-content">
                    <div class="card login-form mb-0">
                        <div class="card-body pt-5">

                            <form class="mt-5 mb-5 text-dark login-input" action="modules/register/update-password.php" method="POST">
                                <input type="hidden" name="id" value="<?= $_SESSION['id'] ?>">
                                <div class="form-group">
                                    <p>Current Password</p>
                                    <input type="text" class="input form-control px-1 " style="border:1px solid black ;" name="current_password" required>
                                </div>
                                <div class="form-group">
                                    <p>New Password</p>
                                    <input type="text" class="input form-control px-1" style="border:1px solid black ;" name="new_password" required>
                                </div>
                                <div class="form-group">
                                    <p>Confirm New Password</p>
                                    <input type="number" class="input form-control px-1" style="border:1px solid black ;" name="conf_new_password" required>
                                </div>


                                <button class="btn login-form__btn submit w-100" type="submit">Change Password</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--**********************************
            Content body end
        ***********************************-->


<!-- Including footer -->
<?php include 'modules/inc/footer.php'; ?>