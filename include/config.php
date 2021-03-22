<meta charset="utf-8">
<?php 
    $host='localhost';
    $username='root';
    $db='cms';
	$password='';
	
	$conn=mysqli_connect($host,$username,$password,$db);
	
	if(!$conn)
	{
		echo('error');
	}
	
	
	function close_db()
	{
		Global $conn;
		mysqli_close($conn);
	}
?>

