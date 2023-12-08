<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" ></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>

</head>
<style>
    

.wrapper1 .header1{
    z-index: 1;
    background: #22232A;
    position: fixed;
    width: calc(100% - 0%);
    height: 70px;
    display: flex;
    top: 0;
    background-color: #003462;
}
.wrapper1 .header1 .header-menu1{
    width: calc(100% - 0%);
    height: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-right:20px;
   margin-top: -10px;
}
.wrapper1 .header1 .header-menu1 .title1{
    color: #fff;
    font-size: 25px;
    text-transform: uppercase;
 
}







.wrapper1 .sidebar1{
    z-index: 999;
    background: #003462;
    position: fixed;
    top: 0px;
    margin-left: -10px;

    width: 275px;
   height: 100%;
  
    overflow-y: auto;
}
.wrapper1 .sidebar1 .sidebar-menu1{
    overflow: hidden;
}
.wrapper1 .sidebar1 .sidebar-menu1 .profile1{
   
    margin-top: 15px;
}
.wrapper1 .sidebar1 .sidebar-menu1 .profile1 h2{
    color: white;
    margin-top: -4px;
    font-size: 25px;
}
.wrapper1 .sidebar1 .sidebar-menu1 .item1 {
    width: 250px;
    overflow: hidden;
    margin-top: -4px;
}
.wrapper1 .sidebar1 .sidebar-menu1 .item1 .menu-btn1 {
    display: block;
    color: #fff;
    
    position: relative;
   padding-left: 10px;
   margin-left: 30px;
   font-size: 18px;
    text-decoration: none;
    font-weight: 600;
}
.wrapper1 .sidebar1 .sidebar-menu1 .item1 .menu-btn1 span{
    margin-left: 10px;
    
}
.wrapper1 .sidebar1 .sidebar-menu1 .item1 .menu-btn1:hover{
    color: lightseagreen;
    border-left: 5px solid white;
  
  
}




.wrapper1 .sidebar1 .sidebar-menu1 .item1 .menu-btn3 span{
    margin-left: 10px;
    color: #fff;
}
.wrapper1 .sidebar1 .sidebar-menu1 .item1 .menu-btn3:hover{
    color: lightseagreen;
    border-left: 5px solid white;
  
}
.wrapper1 .sidebar1 .sidebar-menu1 .item1 .menu-btn3 {
    margin-left: 20px;
    color: #fff;
    position: relative;
    padding-top: 10px;
    padding-bottom: 10px;
    margin-left: 10px;
    margin-top: 10px;
    margin-bottom: -5px;
    background: #003462;
    border: none;
    font-size: 18px;
    text-decoration: none;
    font-weight: 600;
   cursor: pointer;
  
}
.wrapper1 .sidebar1 .sidebar-menu1 .item1 .menu-btn3 :hover{
    color: lightseagreen;
}

.wrapper1 .sidebar1 .sidebar-menu1 .item1 .sub-menu2 a{
    display: block;
    position: relative;
    color: #fff;
    border-radius: 4px;
   text-align: center;
    font-size: 18px;
    margin-left: 50px;
    background: lightseagreen;
    padding: 10px;
    text-decoration: none;
    transition: 0.3s;
  
}
.wrapper1 .sidebar1 .sidebar-menu1 .item1 .sub-menu2 a:hover{
    border-bottom: 2px solid white;
    margin-left: 50px;
}
.sub-menu2{
    display:none;
}
.wrapper1 .sidebar1 .sidebar-menu1 .item1 .sub-menu2 a:hover{
    background: #55B1F0;
}












.wrapper1 .nav_right1{
    margin-left: 66%;
    padding: 21px 12px 0px 4px;
}
.wrapper1 .nav_right1 ul li span{
    border-bottom: 1px solid #4CCEE8;
	cursor: pointer;
	color: #fff;
	font-size: 14px;
	position: relative;
}
.wrapper1 .nav_right1 ul li span:hover{
    color: lightblue;
}
.wrapper1 .nav_right1 ul li:hover {
    color: #cefffc;
}


.wrapper1 .dd_menu1 {
    position: absolute;
    top: 48px;
    display: flex;
    background: #fff;
    box-shadow: 0px 0px 3px rgba(0,0,0,0.25);
    display: none;
    height: 30%;
    width: 139px;
}


.wrapper1 .dd_menu1 .dd_right1{
   padding: 0 45px;
}
.wrapper1 .dd_menu1 .dd_right1:hover{
    background: lightblue;
    color: red;
    border-radius: 80px 21px 100px 1px
}
.wrapper1 .dd_menu1  a{
    text-decoration: none;
}
.wrapper1 .dd_menu1 li{
	color: #868686;
}

.wrapper1 .dd_menu1:before{
	content: "";
	position: absolute;
	top: 0px;
	right: 30px;
	border: 10px solid;
	border-color: transparent;
} 
.wrapper1 .dd_main1.active .dd_menu1{
	display: flex;
    border-radius: 80px 21px 100px 1px;
    margin-top: 8px;
}
.main{
    padding-top: 100px;
    margin-left:300px;
}

</style>
<body>

    <div class="wrapper1">
    
        <div class="header1">
            <div class="header-menu1">
                <div class="title1"> </div>
                <div class="sidebar-btn1">
       
                </div>
               
                <div class="nav_right1">
			<ul>
            <style>
                    .nr_li {
                        list-style: none;
                    }
                </style>
				<li class="nr_li dd_main1">
                    
                <span><b>ADMINISTRATIVE &nbsp;</b><i class="fas fa-sign-out"></i></span>
					
					<div class="dd_menu1">
						
						<a href="logoutAdmin.php" class="dd_right1">
                   
                                 Logout
					
                            </a>
					</div>
				</li>
				
			</ul>
		</div>

            </div>
        </div>
        <script>
        var dd_main = document.querySelector(".dd_main1");
        dd_main.addEventListener("click", function(){
	    this.classList.toggle("active");
        })
        </script>
        
        