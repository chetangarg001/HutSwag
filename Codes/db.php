<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?PHP
$name=$_REQUEST["t1"];
$phone=$_REQUEST["t2"];
$city=$_REQUEST["t3"];
$address=$_REQUEST["t4"];
$feed=$_REQUEST["t5"];
$CONNECTION=mysqli_connect("localhost","root","root","project");
if(!$CONNECTION)
{
die("Couldn't connect to server");
}
echo "Connected Successfully";
$sql_query="insert into my_shop(cname, cphone, ccity, cadd, cfeed)values('$name','$phone','$city','$address','$feed')";

if(!mysqli_query($CONNECTION,$sql_query))
{
echo "record not inserted";
}
else
{
echo "<center><h1>THANK YOU FOR YOUR VALUABLE FEEDBACK!</h1></center>";
}
mysqli_close($CONNECTION);
?>
</body>
</html>
