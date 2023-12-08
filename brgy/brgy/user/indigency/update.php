<?php 
        
        include_once("../../connections/connection.php");

        $con = connection();
$id =$_POST['id'];


if(isset($_POST['update'])){

        


    $purpose =$_POST['purpose'];
  


    $sql = "UPDATE tblindigency SET  purpose = '$purpose' WHERE id = '$id' ";


    $con->query($sql) or die ($con->error);


    echo '<script>alert("Successfully Updated")</script>';
echo'<script>window.location.href = "../tabIndigency.php"</script>';

}

?>