// Check if session is not registered, redirect back to main page.
// Put this code in first line of web page.
// <?php
// session_start();
// if(!session_is_registered(myusername)){
// header("location:main_login.php");
// }
// ?>

<html>
<body>
Login Successful
<h1>Strona g³ówna</h1>h1>
<?php 
	if(isset($_SESSION['prawid_uzyt'])){
		echo 'U¿ytkownik zalaogowany jako: '.$_SESSION['prawid_uzyt'].'<br />';
		echo '<a href="logout.php">Wylogowanie</a><br />';
	}
	else{
		if(isset($myusername)){
			echo 'Zalogowanie niemo¿liwe.<br />';
		}
		else{
			echo 'Uzytkownik nie zalogowany.<br />';
		//	header("location:main_login.php");
		}	
	}
?>
</body>
</html>