<?php 
        
        include_once("../../connections/connection.php");

        $con = connection();
            
$id = $_POST['id'];

$sql = "select * from residents where id=".$id;
$result = mysqli_query($con,$sql);

 

    
while( $row = mysqli_fetch_array($result) ){
    ?>
<style>
    .col1{
        display: flex;
    justify-content: space-around;
    }
</style>
<div>    <form action="resident/update.php" method="post" enctype="multipart/form-data">
            <div class="col1"> 
                    <div class="field"><div class="title">Personal Details</div>
                        
                      

                      
                    
                        <div class="input-field">
                            <label>First Name:</label>
                            <input type="text" name="firstname"value="<?php echo $row['firstname'];?>" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Middle Name:</label>
                            <input type="text" name="middlename" value="<?php echo $row['middlename'];?>" >
                        </div>
                        <div class="input-field">
                            <label>Last Name:</label>
                            <input type="text" name="lastname"  value="<?php echo $row['lastname'];?>" required >

                        </div>
                        <div class="input-field">
                            <label>Extention Name:</label>
                            <input type="text" name="exname" value="<?php echo $row['exname'];?>">
                        </div>

                        
                        
                    
                        <div class="input-field">
                            <label>Gender:</label>
							<select name="gender" id="gender" ?>">
                        <option  value="Male" <?php echo ($row['gender'] == "Male")? 'Selected' : '';?> >Male</option>
                        <option  value="Female" <?php echo ($row['gender'] == "Female")? 'Selected' : '';?> >Female</option>
            </select>
                        </div>

                        <div class="input-field">
                            <label>Birthday:</label>
                            <input type="text" id="nu_datebirth" name="birthday" value="<?php echo $row['birthday'];?>"required>
                        </div>
                    
                        <div class="input-field">
                            <label>Age:</label>
                            <input type="text"  name="age" id="a_ge" class="nu_field" readonly/>
                        </div>
                        
                        
                        <div class="input-field">
                            <label>Birth Place:</label>
                            <input type="text" name="placebirth" value="<?php echo $row['placebirth'];?>" required>
                        </div>
                    
                        <div class="input-field">
                            <label>Contact NUmber:</label>
                            <input type="text"  name="contactnumber" id="contactnumber" value="<?php echo $row['contactnumber'];?>"class="nu_field" />
                        </div>

                        <div class="input-field">
                            <label>Email:</label>
                            <input type="email"  name="email" id="email" class="nu_field" value="<?php echo $row['email'];?>" required>
                        </div>

                     

                        <div class="input-field">
                            <label>Civil Status:</label>
            <select name="status" id="status" ?>">
                        <option  value="Single"<?php echo ($row['status'] == "Single")? 'Selected' : '';?> >Single</option>
                        <option  value="Married" <?php echo ($row['status'] == "Married")? 'Selected' : '';?> >Married</option>
                        <option  value="Divorced" <?php echo ($row['status'] == "Divorced")? 'Selected' : '';?> >Divorced</option>
                        <option  value="Widow" <?php echo ($row['status'] == "Widow")? 'Selected' : '';?> >Widow</option>
            </select>
                        </div>

                        <div class="input-field">
                            <label>Religion:</label>
                            <input type="text"  name="religion" id="religion" value="<?php echo $row['religion'];?>" required class="nu_field"/>
                        </div>

                    </div><div class="field">
                    <div class="title"> Address</div>
                    
                        
                        <div class="input-field">
                            <label>Purok</label>
                            <select name="purok" id="purok" ?>">
            <option  value="1" <?php echo ($row['purok'] == "1")? 'Selected' : '';?> >1</option>
            <option  value="2" <?php echo ($row['purok'] == "2")? 'Selected' : '';?> >2</option>
            <option  value="3" <?php echo ($row['purok'] == "3")? 'Selected' : '';?> >3</option>
            <option  value="4" <?php echo ($row['purok'] == "4")? 'Selected' : '';?> >4</option>
            <option  value="5" <?php echo ($row['purok'] == "5")? 'Selected' : '';?> >5</option>
            <option  value="6" <?php echo ($row['purok'] == "6")? 'Selected' : '';?> >6</option>
            <option  value="7" <?php echo ($row['purok'] == "7")? 'Selected' : '';?> >7</option>
            </select>
                        </div>
                        <div class="input-field">
                            <label>Household Number</label>
                            <input type="text" name="hh" value="<?php echo $row['hh'];?>" required>
                        </div>
                        <div class="input-field">
                            <label>Relation:</label>
						
                            <select name="relation" id="relation" ?>">
                        <option  value="Wife" <?php echo ($row['relation'] == "Wife")? 'Selected' : '';?> >Wife</option>
                        <option  value="Son" <?php echo ($row['relation'] == "Son")? 'Selected' : '';?> >Son</option>
                        <option  value="Daughter" <?php echo ($row['relation'] == "Daughter")? 'Selected' : '';?> >Daughter</option>
            </select>
                        </div>

                    <div class="title">Other information</div>
                    
                        
                        <div class="input-field">
                            <label>School:</label>
                            <select name="school" id="school" ?>">
                        <option  value="In" <?php echo ($row['school'] == "In")? 'Selected' : '';?> >In</option>
                        <option  value="Out" <?php echo ($row['school'] == "Out")? 'Selected' : '';?> >Out</option>
            </select>
                            
                        </div>
                    
                        <div class="input-field">
                            <label>Educational:</label>
                            <select name="educational" id="educational" ?>">
                        <option  value="Elementary" <?php echo ($row['educational'] == "Elementary")? 'Selected' : '';?> >Elementary</option>
                        <option  value="High school, undergrad" <?php echo ($row['educational'] == "High school, undergrad")? 'Selected' : '';?> >High school, undergrad</option>
                        <option  value="High school graduate" <?php echo ($row['educational'] == "High school graduate")? 'Selected' : '';?> >High school graduate</option>
                        <option  value="College, undergrad" <?php echo ($row['educational'] == "College, undergrad")? 'Selected' : '';?> >College, undergrad</option>
                        <option  value="Vocational" <?php echo ($row['educational'] == "Vocational")? 'Selected' : '';?> >Vocational</option>
                        <option  value="Bachelor’s degree" <?php echo ($row['educational'] == "Bachelor’s degree")? 'Selected' : '';?> >Bachelor’s degree</option>
                        <option  value="Master’s degree" <?php echo ($row['educational'] == "Master’s degree")? 'Selected' : '';?> >Master’s degree</option>
                        <option  value="Doctorate degree" <?php echo ($row['educational'] == "Doctorate degree")? 'Selected' : '';?> >Doctorate degree</option>
            </select>
                            
                                    </div>
                    
                        <div class="input-field">
                            <label>Employment:</label>
                            <select name="employment" id="employment" ?>">
                        <option  value="Government" <?php echo ($row['employment'] == "Government")? 'Selected' : '';?> >Government</option>
                        <option  value="Public" <?php echo ($row['employment'] == "Public")? 'Selected' : '';?> >Public</option>
            </select>
                            
                        </div>
                    
                        <div class="input-field">
                            <label>Occupation:</label>
                            <input type="text" name="occupation" value="<?php echo $row['occupation'];?>" required>
                        </div>
                    
                        <div class="input-field">
                            <label>Income:</label>
                            <input type="text" name="income" value="<?php echo $row['income'];?>"required>
                           
                        </div>
                    
                        <div class="input-field">
                            <label>Voter:</label>
                            <select name="voter" id="voter" ?>">
                        <option  value="YES" <?php echo ($row['voter'] == "YES")? 'Selected' : '';?> >YES</option>
                        <option  value="NO" <?php echo ($row['voter'] == "NO")? 'Selected' : '';?> >NO</option>
            </select>
                            
                        </div>
                        <label><b>Images: </b> &nbsp;</label>
                           <input type="file" name="image" id="profile-img" size="50"  required />
                                    <img src="" id="profile-img-tag" width="100px"  />
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

<script>
 $(function() {
    $("#nu_datebirth").datepicker({
    onSelect: function(value, ui) {
        var today = new Date(),
            age = today.getFullYear() - ui.selectedYear;
        $('#a_ge').val(age);
    },
       
    dateFormat: 'dd-mm-yy',changeMonth: true,changeYear: true,yearRange:"c-100:c+0"
    });
      
});
  </script>   
                        
                    </div></div>
                   
                    
						
						
                    <input type="reset" value="RESET" class="button">
                                <input type="submit" name="submit" value="SUBMIT" class="button">
                        
                    </div>
                   
                     
                </form>
      

       </div>
    <?php } ?>
   
 