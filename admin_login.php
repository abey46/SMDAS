<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="bg-img-admin">
<?php include 'header.html';?>
<br>
<center>
<img src="images/kuptm-logo.png" alt="KUPTM" class="avatar">
<h1 style="color:white;">Welcome Admin</h1>
<h2 style="color:white;">Secure Multi Door Access System</h2>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
</center>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="proc_admin_login.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/admin_icon.jpg" alt="ADMIN TEAM" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Admin ID</b></label>
      <input type="text" placeholder="Enter Username" name="admin_id" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="admin_pwd" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
