<?php
  require_once('includes/header.php');
?>
        <!--Navigation Bar-->
        <?php require_once('includes/nav.php'); ?>



        <!--Main Page Content-->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-4">
                        <div class="card-title">
                            <h2 class="text-center py-4"> Signup Form </h2>
                            <hr>
                            <?php form_validation(); ?>
                            <div id="success_msg"></div>
                        </div>
                            <div class="card-body">
                                <form method="POST" id="signup_form">
                                    <input type="text" name="FName" placeholder="First Name" class="form-control mb-2 py-2" id="FName" required>
                                    <input type="text" name="LName" placeholder="Last Name" class="form-control mb-2 py-2" id="LName" required>
                                    <input type="text" name="UName" placeholder=" User Name" class="form-control mb-2 py-2" id="UName" required>
                                    <input type="email" name="Email" placeholder=" Email" class="form-control mb-2 py-2" id="Email" required>
                                    <input type="password" name="password" placeholder=" Password" class="form-control mb-2 py-2" id="Password" required>
                                    <input type="password" name="cpassword" placeholder=" Confirm  Password" class="form-control mb-2 py-2" id="cpassword" required>
                            </div>
                            <div class="card-footer" id="btn_signup">
                                    <button class="btn btn-success float-right" name="btn_signup"> Signup </button>
                                </form>
                            </div>
                  </div>
            </div>
        </div>

<?php require_once('includes/footer.php'); ?>
