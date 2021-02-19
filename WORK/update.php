<?php
include('config.php');
?>

<?php
$id = (isset($_GET['id']) ? $_GET['id'] : '');
$sql = "SELECT * FROM `users` WHERE ID='$id'";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
$username = $row['username'];
$email = $row['email'];
$gender = $row['gender'];
$city = $row['city'];
?>
<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $sql = "UPDATE `users` SET username='$username', email='$email', gender='$gender', city='$city' WHERE ID='$id'";
    if(mysqli_query($conn, $sql)){
        echo "Data updated successfully...";
        header("Location:details.php");
    }
    else{
        echo "Updation failed..";
    }
}
?>
<html>
<head>
    <title>HTML form</title>
    <style>
        div{
            width:400px;
            height:300px;
            padding:50px;
            margin-top: 10%;
            margin-left:35%;
            margin-right:30%;
            border:2px solid rgb(3, 3, 39);
            float:center;
        }
    </style>
</head>
<body>
    <div>
        <form method="POST" action="update.php?id=<?php echo "$id"?>">
            <h1>Fill the updated value</h1>
            Username <input type="text" name="username" value = <?php echo "$username" ?> placeholder="Enter Your Username" required><br><br>
            E-Mail <input type="email" name="email" value = <?php echo "$email" ?> placeholder="Enter Your E-Mail" required><br><br>
            Select Gender - 
            Male <input type="radio" name="gender" value="M" <?php if($gender=="M") {echo "checked";} ?>><br>
            Female <input type="radio" name="gender" value="F" <?php if($gender=="F"){echo "checked";} ?>><br><br>
            Select Your City - <select name="city">
                <option value="Dehradun" <?php if($city=="Dehradun"){echo "selected";}?>>DEHRADUN</option>
                <option value="Delhi" <?php if($city=="Delhi"){echo "selected";}?>>DELHI</option>
                <option value="Nanital" <?php if($city=="Nanital"){echo "selected";}?>>NAINITAL</option>
                <option value="Mussoorie" <?php if($city=="Mussoorie"){echo "selected";}?>>MUSSOORIE</option>
                <option value  = "Jaipur" <?php if($city=="Jaipur"){echo "selected";}?>>JAIPUR</option>
                <option value="Patna" <?php if($city=="Patna"){echo "selected";}?> >PATNA</option>
                <option value="Goa" <?php if($city=="Goa"){echo "selected";}?>>GOA</option>
                <option value="Mumbai" <?php if($city=="Mumbai"){echo "selected";}?>>Mumbai</option>
                <option value="Banglore" <?php if($city=="Banglore"){echo "selected";}?>>BANGLORE</option>
                <option value  = "Udaipur" <?php if($city=="Udaipur"){echo "selected";}?>>UDAIPUR</option>
            </select>
            <br><br>
            <input type="submit" name="submit" placeholder="UPDATE">
        </form>
    </div>
</body>
</html>
