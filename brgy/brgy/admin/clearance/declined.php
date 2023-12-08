<?php 
        
        include_once("../../connections/connection.php");

        $con = connection();
$id =$_POST['id'];


if(isset($_POST['decline'])){

        

    $status =$_POST['status'];
    $comment =$_POST['comment'];

    $sql = "UPDATE tblclearance SET  status = '$status' , comment = '$comment'  WHERE id = '$id' ";

    $con->query($sql) or die ($con->error);


    echo '<script>alert("Successfully Updated")</script>';
echo'<script>window.location.href = "../tabclearance.php"</script>';

}

?>