<?php
$connection = mysql_connect("localhost","root", "");
        if(!$connection)
        {
echo "could not connnect to server";
        }
        
 $db =  mysql_select_db( "user",$connection);
 if(!$db)
 {
echo "could not select database";
 }
 
$a=$_POST["fname"];
$b=$_POST["age"];
$c=$_POST["emailaddress"];
$d=$_POST["sex"];
$e=$_POST["nationality"];
$f=$_POST["question"];
$g=$_POST["ans"];
$h=$_POST["dob"];
$i=$_POST["username"];
$j=$_POST["password"];
$query ="INSERT INTO NEWUSER VALUES ('$a',$b,'$c','$d','$e','$f','$g','$h','$i','$j');";
  
 
$result = mysql_query($query,$connection);
if(!$result)
{
    echo "query failed:";
}

mysql_close($connection);
$conn = mysql_connect("localhost","root", "");
        if(!$conn)
        {
echo "could not connnect to server";
        }
        
 $db =  mysql_select_db( "login",$conn);
 if(!$db)
 {
echo "could not select database";
 }
 

$m=$_POST["username"];
$n=$_POST["password"];
$query ="INSERT INTO USERLOGIN VALUES ('$m','$n');";
  
 
$result1 = mysql_query($query,$conn);
if(!$result1)
{
    echo "query failed:";
}
else
{
     Header("Location: verification.html");
    
}

mysql_close($conn);
?>
