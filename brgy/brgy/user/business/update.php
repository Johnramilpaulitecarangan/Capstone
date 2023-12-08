<?php 
        
        include_once("../../connections/connection.php");

        $con = connection();
$id =$_POST['id'];


if(isset($_POST['update'])){

        


    $businessName =$_POST['businessName'];
    $businessType =$_POST['businessType'];


    $sql = "UPDATE tblbusiness SET  businessName = '$businessName', businessType = '$businessType' WHERE id = '$id' ";


    $con->query($sql) or die ($con->error);


    echo '<script>alert("Successfully Updated")</script>';
echo'<script>window.location.href = "../tabBusiness.php"</script>';

}

?>