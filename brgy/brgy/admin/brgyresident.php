<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Residents</title>
    
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

 
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <?php include "topbar.php" ?>
    <?php include "sidebar.php" ?>
</head>
<style>
    
    h1{
        text-align: center;
    }
	.tab_bar{
        border-bottom: 1px solid #000000;
        height: 64px;
        margin-right: 5px;
    }
    .tab_bar ul{
		
        list-style: none;
        width: 100%;
    }
    .tab_bar ul li{
        float: left;
        font-size: 16px;
         font-weight: bold;
    }
    .tab_bar ul li a{
		
        text-decoration: none;
        color: #000000;
        background: #6db1e4;
        border: 1px solid #000000;
	
  
        padding: 20px 20px 18px 20px;
       border-top-right-radius: 10px;
        border-top-left-radius: 10px;
        -moz-border-radius-topleft: 10px;
        -moz-border-radius-topright: 10px;
        width: 100%;
        display: block;
        text-align: center;
		
    }
    .tab_bar ul li a:hover{
        background: #96e0e9;
        margin: 2px;
      
    }

    .tab_bar ul li a#onlink{
        background: #ffffff;
        color:#000000;
        border-bottom: 2px solid white;
		z-index: 99;
    }
    .tab_bar ul li a#onlink:hover{
        background: skyblue;
        color:#000000;
        margin: 2px;
		
    }
    .main_container1{
        padding: 20px;
        border: 1px solid #000000;
       margin-right: 5px;
        border-top: none;
        background: #ffffff
    }


td,
th {
    border: 1px solid rgb(190, 190, 190);
  
}
.add{
  
  float: right;
  margin-right: 20px;
  margin-top: 30px;
  background: skyblue;
        
       
      
}
.pic{
    border: none;
    background: none;
}










</style>
<body>
<div class="main">



<h1>List Of Barangay Residents</h1>


<div class="tab_bar">
    <ul >
   
        <li ><a href="brgyresidenthead.php"  >Household Head</a></li>
        <li ><a href="brgyresident.php" id="onlink"   >Barangay Residents</a></li>
       
    </ul>
    <button class="add las la-plus">Add New </button>
</div>
<div class="main_container1">
<div class="table-responsive">
	<table class="table">
		<thead>
			<tr>
				<th>HH#</th>
                <th>Photo</th>
				<th>Name</th>
				<th>Purok</th>
				<th>Birthday</th>
				<th>age</th>
				<th>Contact#</th>
                <th>Voter</th>
				<th>Action</th>
			</tr>
		</thead>
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
		<tbody>
        <?php
$con=mysqli_connect('localhost','root','','barangaysystem');
$res=mysqli_query($con,"select * from residents");
while($row=mysqli_fetch_assoc($res)){?>
			<tr>
				<td><?php echo $row['hh']?></td>
              
                <td><button data-id='<?php echo $row['id']; ?>' class="pic"><?php echo '<img src="data:image;base64,'.base64_encode($row['photo']).'" alt="image" style="width: 50px; height: 50px;">'; ?></button></td>
          
            
				<td><?php echo $row['firstname']." ".$row['middlename']." ".$row['lastname'];?></td>
				<td><?php echo $row['purok']?></td>
				<td ><?php echo $row['birthday']?></td>
				<td><?php echo $row['age']?></td>
				<td><?php echo $row['contactnumber']?></td>
                <td><?php echo $row['voter']?></td>
				<td>
				<button data-id='<?php echo $row['id']; ?>' class="edit las la-pen"></button>
                <button data-id='<?php echo $row['id']; ?>' class="delete las la-trash"></button>
                <button data-id='<?php echo $row['id']; ?>' class="view las la-eye"></button></td>
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
                        url: 'resident/add.php',
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
                        url: 'resident/edit.php',
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
                        url: 'resident/delete.php',
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
                        url: 'resident/view.php',
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
                        url: 'resident/pic.php',
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
<?php include ("modal/pic.php"); ?>
<?php include ("modal/add.php"); ?>
<?php include ("modal/edit.php"); ?>
<?php include ("modal/delete.php"); ?>
<?php include ("modal/view.php"); ?>

  <!-- age -->

</body>
</html>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
             <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     