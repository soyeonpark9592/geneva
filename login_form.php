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
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
        <link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
      
      
        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="js/main.js"></script>

        <style>
          section{visibility: visible!important;}
          
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

<section> 
    <div class="login">
         <div id="box">
         <h2>LogIn</h2>
         <form class="cf" action="login.php" method="post">
            <div id="form">
                
                <ul id="id"><input type="text" name="id" id="id" placeholder="아이디를 입력해주세요."></ul>
                
                <ul id="id"><input type="password" name="pass" id="pass" placeholder="비밀번호를 입력해주세요." ></ul>

                <ul id="id3">

                 <li>
                  <input type="checkbox" class="check" id="chk">
                  <label for="chk">아이디 저장</label>
                 </li>

                 <li><a href="id_screen.php">아이디 찾기 ㅣ</a></li>
                 <li><a href="pw_screen.php">비밀번호 찾기</a></li>


                </ul>

                <ul id="button">
                    <!-- <input type="submit" value="로그인" class="btn"><br> -->
                    <input class="log" href="#" type="submit" value="로그인"><br>
                    
                    <a href="member_form.php">회원가입</a>
                   
                </ul>

            
             </div>
          </form>

         </div>
        
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