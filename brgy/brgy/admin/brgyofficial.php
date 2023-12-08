<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin/navigation.css">
	<link rel="stylesheet" href="../css/admin/form.css">
 

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <?php include "topbar.php" ?>
    <?php include "sidebar.php" ?>
</head>
<style>
 
	td,th,tr {
    border: 1px solid #ddd;
    font-size:15pt;
}
.pic{
	border: none; 
  background: none;
}
.main_container1{
    margin-right: 10px;
}

.add{
                        background: skyblue;
                    }
</style>
<body>
<div class="main">



  <link href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">

<h1>List of Barangay official</h1>



<div class="main_container1">
<div class="table-responsive">
	<table class="table">
  <thead>
  <tr>
    <button class="add las la-plus">Add Official</button>
         
</tr>
   <tr style="text-align:center; background: #009cd5;">
       <th  >Photo</th>
       <th >Complete Name</th>
       <th >Position</th>

       <th >Actions</th>
   </tr>
   </thead>
		<tbody>
        <?php
$con=mysqli_connect('localhost','root','','barangaysystem');
$res=mysqli_query($con,"select * from official");
while($row=mysqli_fetch_assoc($res)){?>
			 <tr>
                 <style>
                    .delete{
                        background: red;
                    }
                    .edit{
                        background: blue;
                    }
                    .view{
                        background: green;
                    }
                 </style>            
       <td><button data-id='<?php echo $row['id']; ?>' class="pic"><?php echo '<img src="data:image;base64,'.base64_encode($row['photo']).'" alt="image" style="width: 50px; height: 50px;">'; ?></button></td>
                <td><?php echo $row['firstName'].' '.$row['middleName'].' '.$row['lastName'].' '.$row['exName'];?></td>
                                
           <td><?php echo $row['position'];?></td>
    
           <td><button data-id='<?php echo $row['id']; ?>'id="edit" class="edit las la-pen"></button>
           <button data-id='<?php echo $row['id']; ?>' id="delete" class="delete las la-trash"></button>
           <button data-id='<?php echo $row['id']; ?>' id="view" class="view las la-eye"></button>
                    
                             </td>
                             </tr>
			<?php } ?>
		</thead>
	  </table>
</div>
</div>
</div> 
<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" ></script>
  <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script>
  $(document).ready( function () {
		$('.table').DataTable();
  });
  </script>  
  
  <script>
    
    $(document).ready(function(){
                $('.add').click(function(){
                    var id = $(this).data('id');
                    $.ajax({
                        url: 'official/add.php',
                        type: 'post',
                        data: {id: id},
                        success: function(response){ 
                            $('.modaladd-body').html(response); 
                            $('#empModaladd').modal('show'); 
                        }
                    });
                });
            });
</script>
  <script>
    
    $(document).ready(function(){
                $('.edit').click(function(){
                    var id = $(this).data('id');
                    $.ajax({
                        url: 'official/edit.php',
                        type: 'post',
                        data: {id: id},
                        success: function(response){ 
                            $('.modaledit-body').html(response); 
                            $('#empModaledit').modal('show'); 
                        }
                    });
                });
            });
</script> 
<script>
    
    $(document).ready(function(){
                $('.delete').click(function(){
                    var id = $(this).data('id');
                    $.ajax({
                        url: 'official/delete.php',
                        type: 'post',
                        data: {id: id},
                        success: function(response){ 
                            $('.modaldelete-body').html(response); 
                            $('#empModaldelete').modal('show'); 
                        }
                    });
                });
            });
</script> 
<script>
    
    $(document).ready(function(){
                $('.view').click(function(){
                    var id = $(this).data('id');
                    $.ajax({
                        url: 'official/view.php',
                        type: 'post',
                        data: {id: id},
                        success: function(response){ 
                            $('.modalview-body').html(response); 
                            $('#empModalview').modal('show'); 
                        }
                    });
                });
            });
</script> 
<script>
    
    $(document).ready(function(){
                $('.pic').click(function(){
                    var id = $(this).data('id');
                    $.ajax({
                        url: 'official/pic.php',
                        type: 'post',
                        data: {id: id},
                        success: function(response){ 
                            $('.modalpic-body').html(response); 
                            $('#empModalpic').modal('show'); 
                        }
                    });
                });
            });
</script> 
<?php include ("modal/add.php"); ?>
<?php include ("modal/edit.php"); ?>
<?php include ("modal/delete.php"); ?>
<?php include ("modal/view.php"); ?>
<?php include ("modal/pic.php"); ?>
  <!-- age -->

</body>
</html>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
             <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    