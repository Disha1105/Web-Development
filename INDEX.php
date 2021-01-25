<html>
<head>
<title>Welcome to PHP</title>
<style>
.form{
          
          background-image: url(./images/P.jpg);
            width: 60%;
            padding: 20px;
            margin-left:250px;
            margin-top:50px;
            border-radius:50px;
        }
        h1{
            text-align:center;
        }
        form{
            font-weight: 600;
        }
        form input{
            border: 1px solid grey;
            padding: 10px;
            border-radius: 7px;
            margin-left: 40px;
            text-align:center;
        }
        form input:first-child{
            margin-left: 45px; 
            text-align:center;           
        }
        table{
            margin-top:50px;
            margin-left:250px;
            border: 5px solid black;
            border-collapse: collapse;
            /* display:none; */
        }
        table,th,td{
            border-collapse:collapse;
            border:5px solid grey;
            padding:10px;
            text-align: left; 
        }
        th{
            colspan:4;
        }
</style>
</head>
<body>
<div class="form">
    <h1>Form</h1>
<form method="POST">
        NAME <input type="text" name="name" placeholder="Enter your Name" required><br><br>
        EMAIL <input type="email" name="mail" placeholder="Enter your Email" required><br><br>
        CONTACT <input type="text" name="contact" placeholder="Enter your Contact" required style="margin-left:15px;"><br><br>
        CITY <input type="text" name="city" placeholder="Enter your City" required style="margin-left:60px;"><br><br>
        COURSE <input type="text" name="course" placeholder="Enter your course" required style="margin-left:28px;"><br><br>
        INTEREST <input type="checkbox" id="int1" name="int1" value="coding">
                        <label for="int1"> CODING</label>
                        <input type="checkbox" id="int1" name="int1" value="reading">
                        <label for="int1"> READING</label>
                        <input type="checkbox" id="int1" name="int1" value="swimming">
                        <label for="int1"> SWIMMING</label>
                        <input type="checkbox" id="int1" name="int1" value="playng">
                        <label for="int1"> PLAYING</label><br>
        <input type="submit" value="Submit" name="submit" id="btn" style="margin-left:150px;text-align:center ">
    </form>
</div>     
<?php
if(isset($_GET['submit'])){
    $name=$_GET['name'];
    $email=$_GET['mail'];
    $contact=$_GET['contact'];
    $city=$_GET['city'];
    $course=$_GET['course'];
    $interest=$_GET['interest'];
    echo "<table><tr><th >Name</th><th>Email</th><th>Contact</th><th>City</th><th>Course</th><th>Interest</th></tr>
    <tr><td>$name</td><td>$email</td><td>$contact</td><td>$city</td><td>$course</td><td>$interest</td></tr></table>";
}
?>
<script>
var btn=document.getElementById('btn');
btn.addEventListener('click',function(){
if(table.style.display==="none"){
    table.style.display="block";
}
})
</script>
</body>
</html>