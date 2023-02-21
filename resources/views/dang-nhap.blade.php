<!DOCTYPE html>
<html lang="en">

<head>
    <title>Đăng nhập</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Glassy Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>

    <link rel="stylesheet" href="Login/css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" href="Login/css/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700" rel="stylesheet">
</head>

<body>
    <!--header-->
    <div class="header-w3l">
        <h1>Đăng nhập</h1>
    </div>
    <!--//header-->
    <!--main-->
    <div class="main-w3layouts-agileinfo">
        <!--form-stars-here-->
        <div class="wthree-form">
            <h2>Điền đầy đủ các thông tin trước khi đăng nhập</h2>
            <form action="{{ route('.handle-Login')}}" method="POST">
                @csrf
                <div class="form-sub-w3">
                    <input type="text" name="username" placeholder="Tên đăng nhập " class="@error('username') is-invalid @enderror"/>
                    <div class="icon-w3">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    @error('username')
                    <div style="color:red;">{{ $message }}</div><br>
                    @enderror
                </div>
                <div class="form-sub-w3">
                    <input type="password" name="password" placeholder="Mật khẩu" />
                    <div class="icon-w3">
                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                    </div>
                    @error('password')
                    <div style="color:red;">{{ $message }}</div><br>
                    @enderror
                </div>
                <label class="anim">
                    <input type="checkbox" name="remember_token" class="checkbox">
                    <span>Nhớ mật khẩu</span>
                    <a href="#">Quên mật khẩu</a>
                </label>
                @if(session('Error'))
                <p style="color:red">{{session('Error')}}</p>
                @endif
                <div class="clear"></div>
                <div class="submit-agileits">
                    <input type="submit" value="Đăng nhập">
                </div>
            </form>
            <div class="icon-flat-form">
                <a href="/login-facebook/Facebook" class="fa fa-facebook"></a>
                <a href="/login-google/Google" class="fa fa-google"></a>
            </div>

        </div>
        <!--//form-ends-here-->

    </div>
    <!--//main-->
    <!--footer-->
    <div class="footer">
        <p>&copy; 2017 Glassy Login Form. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a>
        </p>
    </div>
    <!--//footer-->
</body>

</html>