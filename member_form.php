<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GENEVA:Change Your Mood by GENEVA Sound</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/member.css">
        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="js/main.js"></script>
        
 <script>
 function check_id()
   {
     window.open("check_id.php?id=" + document.member_form.id.value,
         "IDcheck",
          "left=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");
   }


function check_input()
   {
    // const re1 = /^[a-zA-Z0-9]{4,12}$/ ;  //가능하다
    const re1 =/^(?=.*[a-zA-Z])(?=.*[0-9]).{6,10}$/;
    const id=document.member_form.id.value;
    if (!document.member_form.id.value)
    {
          alert("아이디를 입력하세요");    
          document.member_form.id.focus();
          return;

    }else if(!re1.test(id)){ 
        alert("6~10자의 영문자,숫자를 혼합해서 사용할 수 있습니다");
    return false;
     }


      if (!document.member_form.pass.value)
      {
          alert("비밀번호를 입력하세요");    
          document.member_form.pass.focus();
          return;
      }

      if (!document.member_form.pass1.value)
      {
          alert("비밀번호확인을 입력하세요");    
          document.member_form.pass1.focus();
          return;
      }

      if (document.member_form.pass.value != 
            document.member_form.pass1.value)
      {
          alert("비밀번호가 일치하지 않습니다.\n다시 입력해주세요.");    
          document.member_form.pass.focus();
          document.member_form.pass.select();
          return;
      }



      if (!document.member_form.name.value)
      {
          alert("이름을 입력하세요");    
          document.member_form.name.focus();
          return;
      }

      
      if (!document.member_form.email.value)
      {
          alert("Email을 입력하세요");    
          document.member_form.email.focus();
          return;
      }

      // 이메일 체크
const email=document.member_form.email.value;

const re=/^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/;
if (!re.test(email)) {
    alert("@를 포함해서 입력해주세요");
    return false;
        
    }


      if (!document.member_form.hp.value)
      {
          alert("휴대폰 번호를 입력하세요");    
          document.member_form.hp.focus();
          return;
      }




    



      //휴대전화번호 체크
const hp1=document.member_form.hp.value;
const re2= /^01([0|1|6|7|8|9])-?([0-9]{3,4})-?([0-9]{4})$/;
if (!re2.test(hp1)) {
          alert('휴대전화번호를 다시 입력해주세요.'); 
          return false;
      }





          
      document.member_form.submit();
   }

   function reset_form()
   {
      document.member_form.id.value = "";
      document.member_form.pass.value = "";
      document.member_form.pass_confirm.value = "";
      document.member_form.name.value = "";
      document.member_form.hp.value = "";
         document.member_form.email.value = "";
	  
      document.member_form.id.focus();

      return;
   }
</script>

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

          <li class="board"><a href="boardlist.php">Board</a></li>



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

  <section>
    <fieldset>
       <div>
        <h2>회원가입</h2>
        <form name="member_form" method="post" action="insert.php">
        <table class="join_table">
            <tr>
                <td>
                    <label for="id">아이디<br>(6자 이상)</label>
                </td>
                <td>
                    <input type="text" id="id" name="id" required placeholder="아이디를 입력해주세요.">
                </td>
                <td>
                    <button class="dobulecheck" onclick="check_id()">중복확인</button>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="pass">비밀번호</label>
                </td>
                <td>
                    <input type="password" id="pass" name="pass" required placeholder="비밀번호를 입력해주세요.">
                </td>
                <td></td>
            </tr>
            <tr>
                <td><label for="pass1">비밀번호<br>(확인)</label></td>
                <td><input type="password" id="pass1" name="pass1" required placeholder="한번 더 입력해주세요."></td>
                <td></td>
            </tr>
            <tr>
                <td><label for="name">이름</label></td>
                <td><input type="text" id="name" name="name" required placeholder="이름을 입력해주세요."></td>
                <td></td>
            </tr>
            <tr>
                <td><label for="email">이메일주소</label></td>
                <td><input type="text" id="email" name="email" required placeholder="예:onulhoi@onul.com"></td>
            </tr>
            <tr>
                <td><label for="hp">휴대폰</label></td>
                <td><input type="tel" id="hp" name="hp" required placeholder="숫자만 입력해주세요."></td>
            </tr>
        </table>



       <div>
        <h2>약관 전체동의</h2>
        <ul class="mc3">
            <li>
                <input type="checkbox" value="agree" name="chk1" id="agree01" required>
                <label for="agree01">모두 동의합니다.</label>
            </li>
            <li>
                <input type="checkbox" value="agree" name="chk1" id="agree02" required>
                <label for="agree02">이용약관 필수 동의 <span>자세히보기</span></label>
            </li>
            <li>
                <input type="checkbox" value="agree" name="chk1" id="agree03" required>
                <label for="agree03">개인정보처리방침 필수 동의 <span>자세히보기</span></label>
                
            </li>
        </ul>
        </div>

        <div class="submit">
          <a href="main.html" onclick="reset_form()">돌아가기</a>
          <a href="javascript:void(0)" onclick="check_input()">가입하기</a>
        </div>

        </form>

       </div>
       
    </fieldset>
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