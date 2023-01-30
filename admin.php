<?php require_once('includes/header.php'); ?>
    
        <!--Navigation Bar-->
        <?php require_once('includes/nav.php'); ?>

        <!--Main Page Content-->
        <div class="container">
            <div class="card mt-5">
                <div class="card-title">
                    <div class="card-body">
                        <h2 class="text-center"> 
                        <?php 
                        
                        if(logged_in())
                        {
                        
                            echo '<div class="alert alert-success"> Click on the following link for submitting your evaluation <a href="admin2.php">Click Here to Submit</a></div>';
                            //header("location:admin2.php");
                        }
                        else
                        {
                            header("location:login.php");
                        }
                        
                        ?> </h2>
                    </div>
                </div>
            </div>
        </div>

<?php require_once('includes/footer.php'); ?>