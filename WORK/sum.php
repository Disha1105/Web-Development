<?php
if(isset($_POST['submit']))
{
    $sum = $_POST['v1'] + $_POST['v2'];
    echo "Sum is $sum";
}
else{
    echo "no input";
}
?>
<html>
<head>
    <title>Sum of digits</title>
    <style>
    </style>
</head>
<body>
   <form method="POST" action="sum.php">
       variable 1 <input type="text" name="v1" required>
       variable 2 <input type="text" name="v2" required>
       <input type="submit" name="submit">
    </form>   
</body>
</html>