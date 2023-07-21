<? 
	session_start(); 
	include "dbconn.php";
	$num=$_GET['num'];

	$sql = "select * from board where num=$num";
	$result = mysqli_query( $connect,$sql);

	$row = mysqli_fetch_array($result);       	
	$item_subject     = $row['subject'];
	$item_content     = $row['content'];
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

      <li class="board"><a href="#">Board</a></li>


    </ul>

  </div>


<div id="wrap">
  

  <div id="content">
	

	<div id="col2">        
		<div id="title">Board</div>

		<div class="clear"></div>

		<div id="write_form_title">게시글 수정	</div>

		<div class="clear"></div>
		<form  name="board_form" method="post" action="insert1.php?mode=modify&num=<?=$num?>&page=<?=$page?>"> 
		<div id="write_form">
			<div class="write_line"></div>
			<div id="write_row1">
				<div class="col1"> ID </div>
				<div class="col2"><?=$_SESSION['usernid']?></div>
			</div>
			<div class="write_line"></div>
			<div id="write_row2"><div class="col1"> 제목   </div>
			                     <div class="col2"><input type="text" name="subject" value="<?=$item_subject?>" ></div>
			</div>
			<div class="write_line"></div>
			<div id="write_row3"><div class="col1"> 내용   </div>
			                     <div class="col2"><textarea name="content"><?=$item_content?></textarea></div>
			</div>
			<div class="write_line"></div>
		</div>

		<div id="write_button">
                <input type="submit" value="완료">&nbsp;
                <a href="boardlist.php?page=<?=$page?>">목록</a>
          </div>
		</form>

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