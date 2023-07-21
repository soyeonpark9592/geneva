<? 
	session_start(); 
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

          <li><a href="#">Board</a></li>



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

      <li class="story"><a href="#">Story</a></li>
      <li><a href="#">Decon Series<button></button></a>
        <ul class="sub">
          <li><a href="#">Decon S</a></li>
          <li><a href="#">Decon M</a></li>
        </ul>
      </li>

      <li><a href="#">Classic Series<button></button></a>
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


    </ul>

  </div>

<?

	include "dbconn.php";

	$mode = $_GET['search'];
	 $page = $_GET['page'];
	// $num = $_GET['num'];
	 $find = $_POST['find'];
	 $search = $_POST['search'];


	if (isset($_GET["mode"]))
    $mode = $_GET["mode"];
  else
    $mode = "";
/*
  if (isset($_GET["search"]))
    $search = $_GET["search"];
  else
    $search = "";

	if (isset($_GET["find"]))
    $find = $_GET["find"];
  else
    $find = "";
*/





	/*
       원하는 컬럼명($find)  
	   원하는 컬럼값 ($search) : 검색할 단어

	   select name="find"

	   input name='search'
	   $find like '%$search%';

	   $find=$_POST['find'];
	   $search=$_POST['search'];
	*/


	$scale=10;			// 한 화면에 표시되는 글 수


    if($mode == "search")
	{

		if(!$search)
		{
			echo("
				<script>
				 window.alert('검색할 단어를 입력해 주세요!');
			     history.go(-1);
				</script>
			");
			exit;
		}
	/*
        if($find == 'subject'){
			$find = '제목';
		}else if($find == 'content'){
			$find='내용';
		}else if($find == 'nick') {
			$find = '별명';
		}else if($find == 'name'){
			$find = '이름';
		}
		*/

		$sql = "select * from board where $find like '%$search%' order by num desc";
	
	}
	else
	{
		$sql = "select * from board order by num desc";
	}

	$result = mysqli_query( $connect,$sql);

	$total_record = mysqli_num_rows($result); // 전체 글 수

	// 전체 페이지 수($total_page) 계산 
	if ($total_record % $scale == 0)     
		$total_page = floor($total_record/$scale);      
	else
		$total_page = floor($total_record/$scale) + 1; 
 
	if (!$page)                 // 페이지번호($page)가 0 일 때
		$page = 1;              // 페이지 번호를 1로 초기화
 
	// 표시할 페이지($page)에 따라 $start 계산  
	$start = ($page - 1) * $scale;      

	$number = $total_record - $start;
?>


<div id="wrap">
 

	<div id="col2">
        
		<div id="title">
			BOARD
		</div>

		<form  name="board_form" method="post" action="boardlist.php?mode=search"> 
		<div id="list_search">
			<div id="list_search1">▷ 총 <?= $total_record ?> 개의 게시물이 있습니다. </div>
      <div class="search-box">
			<div id="list_search3">
				<select name="find">
                    <option value='subject'>제목</option>
                    <option value='content'>내용</option>
                    <option value='id'>ID</option>
				</select></div>
				<div id="list_search4"><input type="text" name="search"></div>
                    <div id="list_search5"><input type="submit" value="검색"></div>
		</div>
    </div>
		</form>

		<div class="clear"></div>

		<div id="list_top_title">
			<ul>
				<li id="list_title1">번호</li>
				<li id="list_title2">제목</li>
				<li id="list_title3">글쓴이</li>
				<li id="list_title4">등록일</li>
				<li id="list_title5">조회</li>
			</ul>		
		</div>

		<div id="list_content">
<?		
   for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)                    
   {
      mysqli_data_seek($result, $i);       
      // 가져올 레코드로 위치(포인터) 이동  
      $row = mysqli_fetch_array($result);       
      // 하나의 레코드 가져오기
	
	  $item_num     = $row['num'];
	  $item_id      = $row['id'];
	  $item_name    = $row['name'];
  	  $item_nick    = $row['nick'];
	  $item_hit     = $row['hit'];

      $item_date    = $row['regist_day'];
	  $item_date = substr($item_date, 0, 10);  

	  $item_subject = str_replace(" ", "&nbsp;", $row['subject']);

?>
			<div id="list_item">
				<div id="list_item1"><?= $number ?></div>
				<div id="list_item2"><a href="view.php?num=<?=$item_num?>&page=<?=$page?>"><?= $item_subject ?></a></div>
				<div id="list_item3"><?= $item_id ?></div>
				<div id="list_item4"><?= $item_date ?></div>
				<div id="list_item5"><?= $item_hit ?></div>
			</div>
<?
   	   $number--;
   }
?>
			<div id="page_button">
				<div id="page_num"> ◀ 이전 &nbsp;&nbsp;&nbsp;&nbsp; 
<?
   // 게시판 목록 하단에 페이지 링크 번호 출력
   for ($i=1; $i<=$total_page; $i++)
   {
		if ($page == $i)     // 현재 페이지 번호 링크 안함
		{
			echo "<b> $i </b>";
		}
		else
		{ 
			echo "<a href='boardlist.php?page=$i'> $i </a>";
		}      
   }
?>			
			&nbsp;&nbsp;&nbsp;&nbsp;다음 ▶
				</div>
				<div id="button">
					<a href="boardlist.php?page=<?=$page?>">목록</a>&nbsp;
<? 
	//if($userid)
	if($_SESSION['userid'] )
	{
?>
		<a href="write_form.php">글쓰기</a>
<?
	}
?>
				</div>
			</div> 
		
        </div> 

		<div class="clear"></div>

	</div> 
  </div> 

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
