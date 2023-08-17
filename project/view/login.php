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
    </style>
</head>

<body>

    <section>
        <div class="container mt-5 pt-5">

            <div class="col-12 col-sm-8 col-md-4 m-auto">
                <div class="card">
                    <div class="card-body" style="height: 450px;">
                        <form action="" method="post" id="login-submit">
                            <div class="text-center mt-3">
                                <img class="mt-4 mb-4" src="../image/danawa_RGB.png" height="50" alt="logo" />
                            </div>

                            <!-- emailInput -->
                            <input type="text" name="email" id="email" class="form-control my-3 py-2" placeholder="email" style="opacity: 0.5;">

                            <!-- passwordInput -->
                            <input type="password" name="password" id="password" class="form-control my-3 py-2" placeholder="pasword" style="opacity: 0.5;">

                            <div class="d-grid gap-2" style="margin-top: 10px;">
                                <button class="btn btn-primary" id="btn-login" type="button">로그인</button>
                            </div>
                            <div class="text-center mt-2">
                                <a class="aho" href="123" style="text-decoration:none; font-size:12px; color:darkgray">비밀번호 변경</a>
                                <span style="color: darkgray; font-size:12px;">|</span>
                                <a href="./register.php" style="text-decoration:none; font-size:12px; color:darkgray">회원가입</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(function() {
            $('#btn-login').on('click', function() {
                if ($('#email').val() == '') {
                    alert("이메일을 입력해주세요");
                    $('#email').focus();
                    return;
                }
                if ($('#password').val() == '') {
                    alert("비밀번호를 입력해주세요");
                    $('#password').focus();
                    return;
                }
                $.ajax({
                    url: "../controller/login-query.php",
                    data: {
                        email: $('#email').val(),
                        password: $('#password').val()
                    },
                    method: "POST",
                    dataType: "json",
                    success: function(response) {
                        console.log(response);
                        if (response.result == "login_fail") {
                            alert("아이디 혹은 비밀번호를 확인해주세요!");
                            $('#email').val('');
                            $('#password').val('');
                            $('#email').focus();
                            return false;
                        } else {
                            alert("로그인 성공!");
                            self.location.href = "./main.php";
                        }
                    },
                    error: function(xhr, status, err) {
                        console.log("로그인 페이지 통신에 실패하였습니다");
                        console.error("요청실패", error);
                    }
                })
            })
        })
    </script>

</body>

</html>