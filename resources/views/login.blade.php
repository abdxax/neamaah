<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link  rel="stylesheet" href="css/style.css">
</head>
<body dir="rtl" class="loginsect">
<div class="container-fluid " >
    <div class="row justify-content-center ">
        <div class="col-12 logo-login">
        <img src="image/webImage/logo2.png">
        </div>
        <div class="col-12 col-sm-6 col-md-3 ">

            <form method="POST" class="form-conta">
                <h3 class="text-center">
                    تسجيل دخول
                </h3>
                @if($msg=Session::get('msg'))

                    <div class="col-12">
                        <div class="alert alert-danger text-center ">{{$msg}}</div>
                    </div>
                @endif
                @if($errors->any())
                    <div class="alert alert-danger login-box">
                        <p>الرجاء ادخال البريد الالكتروني و كلمة المرور </p>
                    </div>
                @endif
                @csrf
                <input type="email" name="email" placeholder="البريد الالكتروني" class="form-control"><br>

                <input type="password" name="password" placeholder="كلمة المرور " class="form-control"><br>
                <input type="submit" class="btn btn-info btn-block btn-login" value="تسجيل دخول ">
            </form>
        </div>
    </div>


</div>
<div class="login-footer">
    <img src="image/webImage/hailtest.png" width="220px" height="220px">
</div>
</body>
</html>
