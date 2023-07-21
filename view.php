<? 
	session_start(); 

	include "dbconn.php";

  $num=$_GET['num'];
  $page=$_GET['page'];

	$sql = "select * from board where num=$num";
	$result = mysqli_query( $connect,$sql);

    $row = mysqli_fetch_array($result);       
      // 하나의 레코드 가져오기
	
	$item_num     = $row['num'];
	$item_id      = $row['id'];
	$item_name    = $row['name'];
	$item_hit     = $row['hit'];

    $item_date    = $row['regist_day'];

	$item_subject = str_replace(" ", "&nbsp;", $row['subject']);

	$item_content = $row['content'];
	$is_html      = $row['is_html'];

	if ($is_html!="y")
	{
		$item_content = str_replace(" ", "&nbsp;", $item_content);
		$item_content = str_replace("\n", "<br>", $item_content);
	}	

	$new_hit = $item_hit + 1;

	$sql = "update board set hit=$new_hit where num=$num";   // 글 조회수 증가시킴
	mysqli_query( $connect,$sql);
?>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GENEVA:Change Your Mood by GENEVA Sound</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/base.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/react.css">
  <link href="css/common.css" rel="stylesheet" type="text/css" media="all">
<link href="css/greet.css" rel="stylesheet" type="text/css" media="all">
  <link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">


  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="js/main.js"></script>
<script>
    function del(href) 
    {
        if(confirm("한번 삭제한 자료는 복구할 방법이 없습니다.\n\n정말 삭제하시겠습니까?")) {
                document.location.href = href;
        }
    }
</script>

<style>
    body header .main .icon .form form{
      transform: translate(12px,11px);
    }

    body header .main .icon .form form #input.open{
      transform: translateY(-10px);
    }
  </style>

</head>

<body>

<header>
    <div class="main">
      <ul class="logo"><a href="main.html"><img src="img/logo.png" alt="logo"></a></ul>

      <div class="pcmenu pc">
        <ul class="pcmenutext">
          <li><a href="#">Decon</a>
            <ul class="pcsub">
              <li><a href="#">Decon S</a></li>
              <li><a href="#">Decon M</a></li>
            </ul>
          </li>

          <li><a href="#">Model</a>
            <ul class="pcsub">
              <li><a href="#">Model S</a></li>
              <li><a href="#">Model M</a></li>
              <li><a href="#">Model L</a></li>
              <li><a href="#">Model XL</a></li>
            </ul>
          </li>

          <li><a href="#">Touring</a>
            <ul class="pcsub">
              <li><a href="#">Touring XS</a></li>
              <li><a href="#">Touring S+</a></li>
              <li><a href="#">Touring M</a></li>
              <li><a href="#">Touring XL</a></li>
            </ul>
          </li>

          <li><a href="boardlist.php">Board</a></li>



        </ul>

      </div>

      <ul class="icon">
        <li class="form">
          <form action="form_search" action="" method="get">
            <input type="text" id="input" class="input" placeholder="search items..." />

            <span id="trigger" class="submit"><img src="img/search.png" alt="search"></span>
          </form>
        </li>

        <li class="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </li>

        <li class="mem pc"><? include "top_login1.php"; ?> </li>


      </ul>



    </div>
  </header>

  <!-- 메뉴 -->
  <div class="menu">
    <ul class="menutext">
      <div class="php">
        <span class="login"><? include "top_login2.php"; ?></span>
        <span class="member"><a href="member_form.php">Sign up</a></span>
      </div>


      <li><a href="#">Decon Series<button></button></a>
        <ul class="sub">
          <li><a href="#">Decon S</a></li>
          <li><a href="#">Decon M</a></li>
        </ul>
      </li>

      <li><a href="#">Model Series<button></button></a>
        <ul class="sub">
          <li><a href="#">Model S</a></li>
          <li><a href="#">Model M</a></li>
          <li><a href="#">Model L</a></li>
          <li><a href="#">Model XL</a></li>
        </ul>
      </li>

      <li><a href="#">Touring Series<button></button></a>
        <ul class="sub">
          <li><a href="#">Touring XS</a></li>
          <li><a href="#">Touring S+</a></li>
          <li><a href="#">Touring M</a></li>
          <li><a href="#">Touring XL</a></li>
        </ul>
      </li>

      <li class="board"><a href="boardlist.php">Board</a></li>

    </ul>

  </div>

<div id="wrap">

  <div id="content">
	

	<div id="col2">
        
		<div id="title">Board</div>

		<div id="view_comment"> &nbsp;</div>

		<div id="view_title">
			<div id="view_title1"><?= $item_subject ?></div><div id="view_title2"><?= $item_id ?> | 조회 : <?= $item_hit ?>  
			                      | <?= $item_date ?> </div>	
		</div>

		<div id="view_content">
			<?= $item_content ?>
		</div>

		<div id="view_button">
				<a href="boardlist.php?page=<?=$page?>">목록</a>&nbsp;
<? 

$userid=$_SESSION['userid'];
$item_id=$_SESSION['userid'];
	if($userid==$item_id || $userlevel==1 || $userid=="admin")
	{
?>
				<a href="modify_form.php?num=<?=$num?>&page=<?=$page?>">수정</a>&nbsp;
				<a href="javascript:del('delete.php?num=<?=$num?>')">삭제</a>&nbsp;
<?
	}
?>
<? 
//	if($_SESSION['userid'])
	if($userid)
	{
?>
				<a href="write_form.php">글쓰기</a>
<?
	}
?>
		</div>

		<div class="clear"></div>

	</div> <!-- end of col2 -->
  </div> <!-- end of content -->
</div> <!-- end of wrap -->

<footer>
    <div class="content">
      <ul class="contenttop">
        <li>회사소개 |</li>
        <li>이용약관 |</li>
        <li>개인정보 |</li>
        <li>협찬/제휴 |</li>
        <li>고객센터</li>
      </ul>

      <ul>구매 문의:02-549-0717<br>
        A/S문의: 02-2234-8804
      </ul>

      <ul>
        수입원 및 A/S: 극동음향(주)<br>
        공식판매처: 사운드코어<br>
        주소: 서울시 강남구 논현로 735 태양빌딩 3F<br>
      </ul>

    </div>

  </footer>

</body>
</html>
