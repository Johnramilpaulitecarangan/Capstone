<?php 
        
        include_once("../../connections/connection.php");

        $con = connection();
            
        if(isset($_POST['delete'])){

        $id = $_POST['id'];
        $sql = "DELETE FROM official WHERE id = '$id' ";
        $con->query($sql) or die ($con->error);
        

        echo '<script>alert("Successfully Deleted")</script>';
        echo'<script>window.location.href = "../brgyofficial.php"</script>';

}

?>
