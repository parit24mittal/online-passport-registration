
<html>
    <head>
   <script type="text/javascript">  

        
     </script>   
    </head> 
    <body>
     <?php
     
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
 
$a=$_POST["username"];
$b=$_POST["password"];
$query ="SELECT count(*) FROM USERLOGIN WHERE USERNAME='$a'  AND PASSWORD='$b'";
 
  
 
$result = mysql_query($query,$conn);
if(!$result)
{
    echo "query failed:";
}
While($row=mysql_fetch_array($result))
{
$answer=$row["count(*)"];
}
 if($answer==0) 
              {
                 echo "wrong username or password";
              }
              else
              {
                    Header("Location: userhomepage.html");
              }

mysql_close($conn);
        
   ?> 
       
        
    </body>
</html>

