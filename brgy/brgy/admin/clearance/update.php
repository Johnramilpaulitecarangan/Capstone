<?php 
        
        include_once("../../connections/connection.php");

        $con = connection();
$id =$_POST['id'];


if(isset($_POST['update'])){

        

 
    $purpose =$_POST['purpose'];
    $purok =$_POST['purok'];
    $comment =$_POST['comment'];

    $sql = "UPDATE tblclearance SET  purpose = '$purpose', purok = '$purok', comment = '$comment' WHERE id = '$id' ";


    $con->query($sql) or die ($con->error);


    echo '<script>alert("Successfully Updated")</script>';
echo'<script>window.location.href = "../tabClearance.php"</script>';

}

?>