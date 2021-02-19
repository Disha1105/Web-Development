<?php
if(isset($_POST['submit'])){
    echo "Gender ".$_POST["gender"]."<br>";
}
else{
    echo "<h3 style='text-align: center;'>Please Fill The Form and Submit By Clicking Submit Button.</h3>";
}
?>

<!DOCTYPE html>
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
        <form method="POST" action="form.php">
            <h1>   Fill the form with correct details...   </h1>
            Username <input type="text" name="username" placeholder="Enter Your Username" required><br><br>
            E-Mail <input type="email" name="email" placeholder="Enter Your E-Mail" required><br><br>
            Select Gender - 
            Male <input type="radio" name="gender" value="M" checked>
            Female <input type="radio" name="gender" value="F"><br><br>
            Select Your City - <select name="city">
                <option value="Dehradun" selected>DEHRADUN</option>
                <option value="Delhi">DELHI</option>
                <option value="Nanital">NAINITAL</option>
                <option value="Mussoorie">MUSSOORIE</option>
                <option value  = "Jaipur">JAIPUR</option>
                <option value="Patna" >PATNA</option>
                <option value="Goa">GOA</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Banglore">BANGLORE</option>
                <option value  = "Udaipur">UDAIPUR</option>
            </select>
            <br><br>
            <input type="submit" name="submit" placeholder="SUBMIT">
        </form>
    </div>
</body>
</html>
