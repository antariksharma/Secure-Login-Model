<?php require_once('includes/header.php'); ?>
    
        <!--Navigation Bar-->
        <?php require_once('includes/nav.php'); ?>

        <!--Main Page Content-->
        <div class="container">
        <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-4">
                        <div class="card-title">
                            <h2 class="text-center py-4"> Upload for Evaluation Here </h2>
                            <hr>
                            <?//php upload();
                               if (!loggedin())
                               {
                                header("location:login.php");
                               }
                               ;
                                ?>
                            <div id="success_msg"></div>
                        </div>
                            <div class="card-body">
                                <!-- <form method="POST" id="item-form">
                                    <input type="text" name="ItemN" placeholder="Item Name" class="form-control mb-2 py-2" id="ItemN">
                                    <input type="text" name="ItemD" placeholder="Item Description" class="form-control mb-2 py-2" id="ItemD">
                                </form> -->

                            <div class="card-body"> 
                                <form action="upload.php" method="post" enctype="multipart/form-data">
                                <input type="text" name="ItemN" placeholder="Item Name" class="form-control mb-2 py-2" id="ItemN" required>
                                <input type="text" name="ItemD" placeholder="Item Description" class="form-control mb-2 py-2" id="ItemD" required>
                                <br>
                                <label for = "contact_method"> Preferred method of contact:</label>
                                <select id = "contactMethod" name = "contactMethod">
                                    <option value = "Email">Email</option>
                                    <option value = "Phone Number">Phone Number</option>
                                </select>

                                <br> <br>
                                Select image to upload:
                                 <input type="file" name="fileToUpload" id="fileToUpload" required>
                                <input type="submit" value="Upload Image" name="submit">
                                </form> 
                            </div>


                            </div>     
                        </div>
                  </div>
            </div>
        </div>

<?php require_once('includes/footer.php'); ?>