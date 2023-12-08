<?php 
        
        include_once("../../connections/connection.php");

        $con = connection();
$id =$_POST['id'];


if(isset($_POST['update'])){

        

    $name =$_POST['name'];
    $businessName =$_POST['businessName'];
    $businessType =$_POST['businessType'];
    $purok =$_POST['purok'];
    $comment =$_POST['comment'];

    $sql = "UPDATE tblbusiness SET  name = '$name' , businessName = '$businessName', businessType = '$businessType', purok = '$purok', comment = '$comment' WHERE id = '$id' ";


    $con->query($sql) or die ($con->error);


    echo '<script>alert("Successfully Updated")</script>';
echo'<script>window.location.href = "../tabbusiness.php"</script>';

}

?>