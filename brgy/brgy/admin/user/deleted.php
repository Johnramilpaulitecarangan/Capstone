<?php 
        
        include_once("../../connections/connection.php");

        $con = connection();
            
        if(isset($_POST['delete'])){

        $id = $_POST['id'];
        $sql = "DELETE FROM users WHERE id = '$id' ";
        $con->query($sql) or die ($con->error);
        

        echo '<script>alert("Successfully Deleted")</script>';
        echo'<script>window.location.href = "../user.php"</script>';

}

?>