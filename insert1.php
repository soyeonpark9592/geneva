<? session_start(); ?>
<meta charset="utf-8">
<?

    $userid=$_POST['userid'];
	$username=$_SESSION['username'];
	// $username=$_POST['name'];
	// $usernick=$_POST['nick'];
	$subject=$_POST['subject'];
	$content=$_POST['content'];
	//$regist_day=$_POST['regist_day'];
	//$is_html=$_POST['is_html'];

	//if(!$userid) {
		if(!$_SESSION['userid'] ){
		echo("
		<script>
	     window.alert('로그인 후 이용해 주세요.')
	     history.go(-1)
	   </script>
		");
		exit;
	}

	//if(!$subject) {
		if(!$_POST['subject'] ){
		echo("
	   <script>
	     window.alert('제목을 입력하세요.')
	     history.go(-1)
	   </script>
		");
	 exit;
	}

	//if(!$content) {
		if(!$_POST['content'] ){
		echo("
	   <script>
	     window.alert('내용을 입력하세요.')
	     history.go(-1)
	   </script>
		");
	 exit;
	}

	$regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장
	include "dbconn.php";       // dconn.php 파일을 불러옴

	
$mode=$_GET['modify'];
$num=$_GET['num'];

if (isset($_GET["mode"]))
    $mode = $_GET["mode"];
  else
    $mode = "";


	if ($mode=="modify")
	{
		$sql = "update board set subject='$subject', content='$content' where num=$num";
	}
	else
	{
		if ($html_ok=="y")
		{
			$is_html = "y";
		}
		else
		{
			$is_html = "";
			$content = htmlspecialchars($content);
		}

		$sql = "insert into board (id, name, subject, content, regist_day, hit) ";
		$sql .= "values('$userid', '$username', '$subject', '$content', '$regist_day', 0)";
	}

	mysqli_query( $connect,$sql);  // $sql 에 저장된 명령 실행
	mysqli_close($connect);                // DB 연결 끊기

	echo "
	   <script>
	    location.href = 'boardlist.php?page=$page';
	   </script>
	";
?>

<!--  

htmlspecialchars :
문자열에서 특정한 특수 문자를 HTML 엔티티로 변환한다. 
이함수를 사용하면 악성 사용자로 부터 XSS 공격을 방지 할 수 있음

[특수문자]   [변환한 문자]
&(앰퍼샌드)   &amp;
""(겹따옴표)   &quot;

''(홑따옴표)    &#039;

<(미만)   &lt;

>(이상)    &gt;

-->

  
