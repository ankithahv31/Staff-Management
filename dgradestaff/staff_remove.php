<!DOCTYPE html>
<html>
<head>
    <title>Admin - Manage staffs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            text-align: center;
            background-color:lightpink;
            color: black;
            padding: 20px 0;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        .center {
            text-align: center;
            margin-top: 20px;
        }
        input[type="text"],
        input[type="submit"] {
            padding: 10px 20px; /* Adjust padding to make input and button bigger */
            font-size: 16px;
        }
        
        
        </STYLE>
</head>
<body>
<header>
    <h1>MANAGE STAFF</h1>
    
    <nav>
      <ul>
       
        <li><a href="staffdetails.php">MANAGE STAFF</a></li>
        <li><a href="add_staff.php">ADD STAFF</a></li>
       <li><a href="view.php">VIEW STAFF</a></li>
       <li><a href="login.php">LOGOUT</a></li>
        
      </ul>
    </nav>
    </header>
</body>
        </html>

<?php
require('config.php');?>
<?php 
if(isset($_POST['delete'])) {
    $id = $_POST['id'];
    
    $sql = "DELETE FROM staff WHERE id='$id'";
    $con->query($sql);
}
$staff = $con->query("SELECT * FROM  staff");
        ?>
        
        <div class="center">  
<h2>Delete staff</h2>
    <form method="POST">
        staff ID: <input type="text" name="id" required><br>
        <input type="submit" name="delete" value="Delete staff">
    </form>
</div>
    <?php
        
        