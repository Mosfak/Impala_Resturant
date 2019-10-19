<style>
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #000;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
	border-radius:20px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
#sp
{
	padding:10px;
}
</style>
<div id="column">
		
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="topnav" id="myTopnav">
  <p id="sp"><a href="index.php">Home</a></p>
  <p id="sp"><a href="track.php">Track Booking</a></p>
  <p id="sp"><a href="contact.php">Contact</a></p>
  <p id="sp"><a href="about.php">About</a></p>
</div>
</div>

<div id="main">
  <span style="font-size:20px;cursor:pointer" onclick="openNav()"><img src="Assets/images/social/pup.png" width="50"></span>
</div>
</div>

	 <script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>