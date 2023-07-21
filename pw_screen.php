<? 
	session_start(); 
?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GENEVA:Change Your Mood by GENEVA Sound</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
        <link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
      
      
        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="js/main.js"></script>

        <style>
		body {
      font-family: 'Pretendard-Regular';
    }

    section {
      visibility: visible !important;
      margin: 300px auto !important;
      width: 500px !important;
      height: auto;
      text-align: center;
      font-size: 1.2rem;

    }

    #join2 input {
      padding: 10px;
      margin: 20px auto;
      outline: none;
    }

    #write_button input {
      display: inline-block;
      width: 250px;
      height: 45px;
      text-align: center;
      line-height: 45px;
      margin: 5px 0;
      background: #101010;
      color: #fff;
      border: none;
      outline: none;
    }
        </style>
      </head>


		</head>
	<body><header>
    <div class="main">
      <ul class="logo"><a href="main.html"><img src="img/logo.png" alt="logo"></a></ul>

      <div class="pcmenu pc">
        <ul class="pcmenutext">
          <li><a href="#">Story</a></li>
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

        <li class="mem pc"><img src="img/mem.png" alt="mem"></li>


      </ul>



    </div>
  </header>

  <!-- 메뉴 -->
  <div class="menu">
    <ul class="menutext">
      <div class="php">
        <span class="login"><a href="#">Login</a></span>
        <span class="member"><a href="member.html">Sign up</a></span>
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

<section> 
   
<div id="join_mem">

        <form  name="member_form" method="post" action="pw_search.php"> 
		
			
			<div id="join2">
			<ul>
			<li>  <p> <label for="pid" class="b1">ID</label><input type="text" id="pid" name="id"></p></li>
			<li><label for="a2" class="b2">HP</label>
			<input type="tel" class="hp" name="hp"> </li>
					</ul>
			</div>
			<div id="write_button"><input type="submit" value="제출하기"></div>
							
		</div>
			</form>
			</div>
  
</section> 

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