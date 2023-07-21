<?
           session_start();
?>
	 <p>
	  <?
    if(!$_SESSION['username'] )
	{
?>
         <a href="login_form.php"><img src="img/mem.png" alt="mem"></a>
<?
	}
	else
	{
?>
		<?=$_SESSION['username']?> | 
		<a href="logout.php">Logout</a> 
<?
	}
?>
	  </p> 
  
	