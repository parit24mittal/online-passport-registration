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
        
 $db =  mysql_select_db( "user",$conn);
 if(!$db)
 {
echo "could not select database";
 }
 
$a=$_POST["username"];
$b=$_POST["no"];
$query ="SELECT stat,count(*) FROM status WHERE name='$a'  AND APPNO=$b ";
 
  
 
$result = mysql_query($query,$conn);
if(!$result)
{
    echo "could not execute query plzz try again later";
}


 
While($row=mysql_fetch_array($result))
{
$answer=$row["stat"];
$answer1=$row["count(*)"];
}
if($answer1==0)
{
    echo" either your  name or application no is wrong or u have not registerd for passport yet";
}
else
    {
    if($answer=="")
    {
        echo "your passport application is under process";
    }
    else
    {

 echo $answer;
}

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