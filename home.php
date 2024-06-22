<?php
session_start();
require_once("../conn.php");

if (!isset($_SESSION['valid'])) 
{
  header("location: home.php");
}
else
{
  $username = $_SESSION['valid'];
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
<style>
* {
    box-sizing: border-box;
}
body {
    margin: 0;
    font-family: Arial, sans-serif;
}

.menu {
    overflow: hidden;
    background-color: #d4ffd4;
}
.menu a {
    float: left;
    display: block;
    color: #000000;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    cursor: pointer;
}
.menu a:hover {
    background-color: #375737;
    color: rgb(255, 255, 255);
}
.content {
    padding: 20px;
    display: none;
    position: relative;
}
.content.active {
    display: block;
}
.close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    background-color: red;
    color: white;
    border: none;
    border-radius: 50%;
    cursor: pointer;
    font-size: 16px;
    line-height: 16px;
    padding: 4px 8px;
}
@media screen and (max-width: 800px) {
    .menu a {
        float: none;
        width: 100%;
    }
}
</style>
</head>
<body style="background-color:#ffffff;">

<div class="menu">
    <a href="setup.php">Set Up</a>
    <a href="transaction.php">Transaction</a>
    <a href="reports.php">Reports</a>
    <a href="about.php">About</a>

                                        <a href="logout.php"><i
                                            class="bi bi-arrow-right-square">&nbsp;&nbsp;</i>Log Out</a>
                                        
                
</div>

<?php
$section = isset($_GET['section']) ? $_GET['section'] : ''; // Get the section from URL parameter
?>

<div class="content <?php if($section === 'setup' || $section === 'transaction' || $section === 'reports' || $section === 'about') echo 'active'; ?>" id="setup">
    <button class="close-btn" onclick="window.location.href='?section='">&times;</button>
    <h2>Set Up</h2>
    <p>This is the setup section.</p>
</div>
<div class="content <?php if($section === 'transaction') echo 'active'; ?>" id="transaction">
    <button class="close-btn" onclick="window.location.href='?section='">&times;</button>
    <h2>Transaction</h2>
    <p>This is the transaction section.</p>
</div>
<div class="content <?php if($section === 'reports') echo 'active'; ?>" id="reports">
    <button class="close-btn" onclick="window.location.href='?section='">&times;</button>
    <h2>Reports</h2>
    <p>This is the reports section.</p>
</div>
<div class="content <?php if($section === 'about') echo 'active'; ?>" id="about">
    <button class="close-btn" onclick="window.location.href='?section='">&times;</button>
    <h2>About</h2>
    <p>This is the about section.</p>
</div>

<script>
function showContent(section) {
    hideAllContent();
    document.getElementById(section).classList.add('active');
}
function hideContent(section) {
    document.getElementById(section).classList.remove('active');
}
function hideAllContent() {
    var contents = document.getElementsByClassName('content');
    for (var i = 0; i < contents.length; i++) {
        contents[i].classList.remove('active');
    }
}
</script>
</body>
</html>