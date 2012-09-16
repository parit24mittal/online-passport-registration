<html>
    
<body style="background-color:burlywood">
<h1 style="text-align:center">welcome to online passport registration!!!!</h1>
<img  src="images.jpg" height="220px" width="1350px"/>
<p style="text-align:center;font-size:25px">
<?php

$conn = mysql_connect("localhost","root", "");
        if(!$conn)
        {
echo "could not connnect to server";
        }
        
 $db =  mysql_select_db( "complaints",$conn);
 if(!$db)
 {
echo "could not select database";
 }
 
$a=$_POST["appno"];
$b=$_POST["comp"];
$query ="INSERT INTO complaint values ($a,'$b')";

 $result = mysql_query($query,$conn);
 
if(!$result)
{
     echo "wrong application no";
}
else
{
    echo "your complaint have been successfully submitted";
}


 


mysql_close($conn);
?>
</p>
<footer>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<p style="text-align:center;font-size:15px">
<img src="emblom.jpg" align="center" width="60" height="50" />
<br>
<b>Note:site maintained and designed by ministry of external affairs gov of india.</b>
</p>
</footer>
</body>
</html>
