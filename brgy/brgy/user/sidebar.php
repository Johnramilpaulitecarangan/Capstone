
        <div class="sidebar1">
            <div class="sidebar-menu1">
                <center class="profile1">
                  <img src="../img/atate.png" alt="atate.img"style="height: 60px; " srcset="">
                   <h1>Barangay Atate</h1>
                </center>
                <li class="item1">
                    <a href="home.php" class="menu-btn1">
                        <i class="las la-chalkboard-teacher"></i><span>HOME PAGE</span>
                    </a>
                </li>
               


                </style>
                <li class="item1">
                <button  class="menu-btn3">
                <i class="las la-receipt"></i><span>REQUEST FORMS</span>&nbsp;&nbsp;<i class="fas fa-chevron-down drop-down"></i>
                </button>
                        <div class="sub-menu2">
                        <a href="certificate.php">Brgy Certificate</a>
                            <a href="business.php">Business Permit</a>
                            <a href="clearance.php">Brgy Clearance</a>
                            <a href="indigency.php">Brgy Indigency</a>
                        </div>
                </li>
                
               
                </button>
                       
              
                <li class="item1">
                    <a href="reservation.php" class="menu-btn1">
                    <i class="las la-clipboard"></i><span>GYM RESERVATION</span>
                    </a>
                </li>
                <li class="item1">
                    <a href="tabReservation.php" class="menu-btn1">
                    <i class="las la-receipt"></i><span>REQUEST UPDATE</span>
                    </a>
                </li>
                <li class="item1">
                    <a href="personalacc.php" class="menu-btn1">
                    <i class="las la-user"></i><span>PERSONAL</span>
                    </a>
                </li>
               
                
                
            </div>
        </div>
   
    </div>
  
    <script>
var dropdown = document.getElementsByClassName("menu-btn2");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
<script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("menu-btn3");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
