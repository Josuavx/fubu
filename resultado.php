<?php 
session_start();

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
 <h1>corpo</h1>
 <?php 
 //if(isset($_SESSION['usuario']))
//	print_r($_SESSION['usuario']);
// echo $_SESSION["resultado"];
// echo $_SESSION["mensagem"];
// echo $_SESSION["informacao"];
 ?>
</body>
</html>

<!-- header('Location: http://'. $_SERVER['HTTP_HOST'].'/page2.php', true, 303) -->