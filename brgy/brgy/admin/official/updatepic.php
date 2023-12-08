<?php 
        
        include_once("../../connections/connection.php");

        $con = connection();



if(isset($_POST['update'])){
    $id =$_POST['id'];
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

    $sql = "UPDATE official SET  photo = '$file'   WHERE id = '$id' ";



    $con->query($sql) or die ($con->error);


    echo '<script>alert("Successfully Updated")</script>';
echo'<script>window.location.href = "../brgyofficial.php"</script>';




}

?>