<?php require_once('includes/header.php');?>

    <?php require_once('includes/nav.php'); ?>

    <?php
// Include the database configuration file
if (logged_in()){
    // Get images from the database
    $query = $con->query("SELECT * FROM users ORDER BY uploaded_on DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" />
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php }
}
else
{
    header("location:login.php");
}


 ?>


<?php require_once('includes/footer.php'); ?>