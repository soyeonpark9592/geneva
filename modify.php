<?
    session_start();
?>
<meta charset="utf-8">
<?

/* 추가한곳*/
// $id = $_POST['id']; 
$userid=$_POST['id'];
   $pass = $_POST['pass'];  
   $name = $_POST['name'];
   $email = $_POST['email'];
   $hp = $_POST['hp'];


    
   include "dbconn.php";      
   	     mysqli_query($connect,'set names utf8');  

    $sql = "update member set pass='$pass', name='$name' , ";
    $sql .= "hp='$hp', email='$email' where id='$_SESSION[userid]'";
	//위  문장 수정한것
//	 $sql .= "nick='$nick', hp='$hp', email='$email', regist_day='$regist_day' where id='$userid'"; 원본
 
//나중에 삭제할것
/*echo $sql;  //위의 결과 메시지확인하기
exit;// 위와 같이 작성*/
//나중에 삭제할 내용 끝



 $result = mysqli_query( $connect,$sql) ;

   mysqli_close($connect);                
   echo "
	   <script>
	    location.href = 'main.html';
	   </script>
	";
?>
