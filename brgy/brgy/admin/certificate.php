<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin/navigation.css">
    <link rel="stylesheet" href="../css/admin/form.css">

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <?php include "topbar.php" ?>
    <?php include "sidebar.php" ?>
</head>
<style>
          td,
th {
    border: 1px solid rgb(190, 190, 190);
   
    color: black;
}

</style>
<style>
  .add{
    background: lightgreen;
  }
  td a button{
    background: lightgreen;
  }
</style>
<body>
<div class="main">
<?php
$con=mysqli_connect('localhost','root','','barangaysystem');
$res=mysqli_query($con,"select * from residents");
?>


  <link href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">

  <h1>Requesting of Barangay Certificate</h1>
  <button class="add las la-print"><a href="certificate/brgy_certificateall.php" >Print All</a></button>
<div class="main_container1">
<div class="table-responsive">
	<table class="table">
		<thead>
    <tr style="text-align:center; background: #009cd5;">
			
        <th>Request Button</th>
        <th>Photo</th>
          <th>First Name</th>
          <th>Middle Name</th>
          <th>Last Name</th>
          <th>Purok</th>
      
        </tr>
			
		</thead>
		<tbody>
			<?php while($row=mysqli_fetch_assoc($res)){?>
				<tr>
        <td><a href="certificate/brgy_certificate.php?ID=<?php echo $row['id'];?>"><input type="hidden" id="request" style="color: Blue"  ><button class="las la-print"></button></input></a> </td>
        <td><?php echo '<img src="data:image;base64,'.base64_encode($row['photo']).'" alt="image" style="width: 50px; height: 50px;">'; ?></td>
            <td><?php echo $row['firstname'];?></td>
            <td><?php echo $row['middlename'];?></td>
            <td><?php echo $row['lastname'];?></td>
            <td><?php echo $row['purok']; ?></td>
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
</div>    
</body>
</html>