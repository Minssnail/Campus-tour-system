$mysql_server_name='localhost';
$mysql_username='root'; 
$mysql_password='986546'; 
$mysql_database='bus';
$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; 
 mysql_query("set names 'utf8'"); 
 mysql_select_db($mysql_database); 
 $sql ="select * from news "; 
 $result = mysql_query($sql,$conn);
