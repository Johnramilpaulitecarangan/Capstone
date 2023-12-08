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
             <form action="residenthead/updatepic.php" method="post" enctype="multipart/form-data">

    <label><b>Images: </b> &nbsp;</label><input type="file" name="image"  id="profile-img" size="50"  required />
    <div class="img"> <img src="" id="profile-img-tag" width="100%"  />
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
                                    </script>
                                    </div>
                                    <input type="reset" value="RESET" class="button">
                                <input type="submit" name="update" value="SUBMIT" class="button">
                                <input type="hidden" name="id" value="<?php echo $row['id'];?>"required>
                   

                                    </form>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    
<?php } ?>