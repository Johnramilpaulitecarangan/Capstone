<?php   include_once("../../connections/connection.php");
        $con = connection();       
$id = $_POST['id'];
$sql = "select * from residents where id=".$id;
$result = mysqli_query($con,$sql); 
while( $row = mysqli_fetch_array($result) ){
?>
<style>
    table{
        width: 98%;
        margin: 5px;
        padding: 2px;
     
    }
    th,td{
        margin: 50px;
        padding: 5px;
    }
    caption{
    background: whitesmoke;
   text-align: center;
   caption-side: top;
   font-weight: bold; 
    }
</style>

<div class="container mt-5">
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
                
<table>
<caption>List Of The Members Of HouseHold Number <br><?php echo $row['hh'];?><caption>
              
    <thead> 
        <tr> 
            <th>Photo</th>   
            <th>Name</th>
            <th>Age</th>   
            <th>Relation</th>   
            <th>Voter</th>                                
        </tr> 
        <tr>  
            <th><?php echo '<img src="data:image;base64,'.base64_encode($row['photo']).'" alt="image" style="width: 50px; height: 50px;">'; ?></th>     
            <th><?php echo $row['firstname']. ' '. $row['middlename'].' ' .$row['lastname'].' ' .$row['exname'].'.';?></th>
            <th> <?php echo $row['age'];?></th>   
            <th> <?php echo $row['relation'];?></th>   
            <th> <?php echo $row['voter'];?></th>                                
        </tr>  
     </thead>  
                  
 
                      
   
<?php 
$h = $row['hh'];
}
$con=mysqli_connect('localhost','root','','barangaysystem');
$res=mysqli_query($con,"select * from residents where position != 'Head Family' && hh =".$h);
while($row=mysqli_fetch_assoc($res)){
?>

    
    <tbody>
        <tr>
        <td><?php echo '<img src="data:image;base64,'.base64_encode($row['photo']).'" alt="image" style="width: 50px; height: 50px;">'; ?></td>
        <td><?php echo $row['firstname']. ' '. $row['middlename'].' ' .$row['lastname'].' ' .$row['exname'].'.';?></td>
        <td><?php echo $row['age'];?></td>
        <td><?php echo $row['relation'];?></td>
        <td><?php echo $row['voter'];?></td>
        </tr>
        <?php } ?>
    </tbody>
    </table>
</div>
</div>


                       



  
   
 