<!DOCTYPE HTML>
<html>

 <?php
$servername="localhost";
$username="root";
$password="";
$db="timetable";
$conn = new mysqli($servername, $username, $password, $db);
$a=$_POST['mark1'];
$b=$_POST['mark2'];
$c=$_POST['mark3'];
$d=$_POST['roll'];
        
		$sql = "insert into mech(m1,m2,m3,roll_no) VALUES('$a','$b','$c','$d')";
    
        
if ($conn->query($sql)==TRUE)
{
 echo " Updated  Success";
} 
else
{
    echo "  user not available";
}

$conn->close();
?>
</div>
</body>
</html>