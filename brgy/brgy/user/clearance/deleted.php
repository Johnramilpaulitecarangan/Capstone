<?php 
        
        include_once("../../connections/connection.php");

        $con = connection();
            
        if(isset($_POST['delete'])){

        $id = $_POST['id'];
        $sql = "DELETE FROM tblclearance WHERE id = '$id' ";
        $con->query($sql) or die ($con->error);
        

        echo'<script>window.location.href = "../tabClearance.php"</script>';

}

?>