<?php 
        
        include_once("../../connections/connection.php");

        $con = connection();
            
$id = $_POST['id'];

$sql = "select * from residents where id=".$id;
$result = mysqli_query($con,$sql);

 

    
while( $row = mysqli_fetch_array($result) ){
    ?>
   
<style>
            
            </style>
   <div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
               
				<div class="tab-content p-4 p-md-5">
					<div class="tab-pane fade show active" id="account" >
       
    <!-- <label><b>Images: </b> &nbsp;</label> <input type="file" name="image" id="profile-img" size="50"  required /> -->
                           
    <div class="img">
  

    <button data-id='<?php echo $row['id']; ?>' class="editpic las la-pen">PICTURE</button>
    <?php echo '<img src="data:image;base64,'.base64_encode($row['photo']).'" alt="image" style="width: 450px; height: 450px; margin: 25px;">'; ?>  <!-- <img src="" id="profile-img-tag" width="100%"  />
									</br>
                                    <script type="text/javascript">
                                        function readURL(input) {
                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();
                                                
                                                reader.onload = function (e) {
                                                    $('#profile-img-tag').attr('src', e.target.result);
                                                }
                                                reader.readAsDataURL(input.files[0]);
                                            }
                                        }
                                        $("#profile-img").change(function(){
                                            readURL(this);
                                        });
                                    </script> -->
                                    <script>
    
    $(document).ready(function(){
                $('.editpic').click(function(){
                    var id = $(this).data('id');
                    $.ajax({
                        url: 'resident/editpic.php',
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
<?php include ("../modal/pic.php"); ?>
    </div>
    </div></div></div></div>

<?php } ?>