<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js">
  </script>


  <style>
    body {
      background-color: whitesmoke;
    }

    .email-input {

      position: relative;
    }

    .email-input input[type="checkbox"] {
      position: absolute;
      top: 35%;
      right: 10px;
      transform: translate(-50%);
      z-index: 1;
    }
  </style>

</head>

<body>

  <section>
    <div class="container mt-5 pt-5">

      <div class="col-12 col-sm-8 col-md-4 m-auto">
        <div class="card">
          <div class="card-body" style="height: 450px;">


            <form action="../controller/register-Query.php" method="post" id="register-confirm">
              <div class="text-center mt-3">
                <img class="mt-4 mb-4" src="../image/danawa_RGB.png" height="50" alt="logo" />
              </div>

              <!-- email input 칸 -->
              <div class="email-input">
                <input type="text" name="email" id="email" class="form-control my-3 py-2" placeholder="email" style="opacity: 0.5;">
                <input type="checkbox" id="email-check" value="확인">
              </div>

              <!-- 이름 적는 칸 -->
              <input type="text" name="username" id="username" class="form-control my-3 py-2" placeholder="username" style="opacity: 0.5;">


              <!-- password input 칸  -->
              <input type="password" name="password" id="password" class="form-control my-3 py-2" placeholder="pasword" style="opacity: 0.5;">

              <!-- password-confirm input 칸  -->
              <input type="password" name="password-confirm" id="password-confirm" class="form-control my-3 py-2" placeholder="password-confirm" style="opacity: 0.5;">

              <!--  로그인 버튼 -->
              <div class="d-grid gap-2" style="margin-top: 10px;">
                <button id=btn-register class="btn btn-primary" type="button">회원가입</button>
              </div>

              <div class="text-center mt-2">
                <a class="aho" href="123" style="text-decoration:none; font-size:12px; color:darkgray">비밀번호 변경</a>
                <span style="color: darkgray; font-size:12px;">|</span>
                <a href="../view/login.php" style="text-decoration:none; font-size:12px; color:darkgray">로그인 하기</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    // 이메일 체크박스 예외처리 및 ajax 통신
    $('#email-check').click(function() {
      if ($('#email').val() == '') {
        alert("이메일을 입력해주세요");
        $('#email').focus();
        $("input:checkbox[id='email-check']").prop("checked", false);
        return;
      }
      if ($('#email-check').is(':checked')) {
        $.ajax({
          url: "../controller/register-check.php",
          data: {
            email: $('#email').val()
          },
          method: "POST",
          dataType: "json",
          // ajax 통신에 성공했다면.
          success: function(response) {
            if (response.result === "exist") {
              alert("이미 사용중인 이메일입니다.");
              $('#email').val('');
              $('#email').focus();
              $("input:checkbox[id='email-check']").prop("checked", false);
            } else if (response.result == "inValidEmail") {
              alert("이메일 형식이 옳바르지 않습니다.");
              $('#email').val('');
              $('#email').focus();
              $("input:checkbox[id='email-check']").prop("checked", false);

            } else {
              alert("사용 가능한 이메일 입니다!");
              $('#username').focus();
            }
          },
          // 실패했다면.
          error: function(xhr, status, error) {
            console.error("요청실패 ", error)
          }
        })
      }
    })

    // 회원가입 버튼을 눌렸을때 예외 처리 해보기.
    $('#btn-register').on("click", function() {

      // 이메일 중복 체크 안되었으면 return 
      if (!$('#email-check').is(':checked')) {
        alert("이메일 중복 체크해주세요!");
        return;
      }
      // 이름 기입 안하면 return 
      if ($('#username').val() == '') {
        alert("이름을 입력해주세요 !");
        $('#username').focus();
        return;
      }
      // password 기입 안하면 return 
      if ($('#password').val() == '') {
        alert("비밀번호를 입력해주세요 !");
        $('#password').focus();
        return;
      }
      //password 일치하지 않으면 return
      if ($('#password').val() != $('#password-confirm').val()) {
        alert("비밀번호가 일치하지 않습니다");
        $('#password-confirm').focus();
        $('#password-confirm').val('');
        return;
      }
      $('#register-confirm').submit();
    })
  </script>
</body>

</html>