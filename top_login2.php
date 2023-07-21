  
	  <?
    if(!$_SESSION['username'] )
	{
?>
      	  <a href="login_form.php">Login</a>
<?
	}
	else
	{
?>
		<a href="logout.php">Logout</a> 
<?
	}
?>



	