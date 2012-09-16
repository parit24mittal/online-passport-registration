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
 
$a=$_POST["fname"];
$b=$_POST["surname"];
$c=$_POST["fathersname"];
$d=$_POST["mothersname"];
$e=$_POST["age"];
$f=$_POST["pob"];
$g=$_POST["dob"];

$i=$_POST["nationality"];
$j=$_POST["permanentaddress"];
$k=$_POST["office"];
$v=rand();
if($_POST["sex"]=='')
{
    echo "please choose the sex ";
}
else
{
    $h=$_POST["sex"];
$query ="INSERT INTO APPLYPASSPORT  VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k',$v);";

  
 
$result = mysql_query($query,$conn);
if(!$result)
{
    echo "query failed:";
}
else
{
    echo "your application no is-".$v."<br>";
    echo "you have successfully registered for passport";
    
}


mysql_close($conn);
$connn = mysql_connect("localhost","root", "");
        if(!$connn)
        {
echo "could not connnect to server";
        }
        
 $db =  mysql_select_db( "user",$connn);
 if(!$db)
 {
echo "could not select database";
 }
 
$m=$_POST["fname"];
$n=$v;

$query ="INSERT INTO status VALUES ('$m',$n,'');";

  
 
mysql_query($query,$connn);


mysql_close($connn);
}
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

