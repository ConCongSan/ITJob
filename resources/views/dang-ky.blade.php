<!DOCTYPE html>
<html lang="en">

<head>
    <title>ĐĂNG KÝ</title>
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
    <!-- Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="Register/css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" href="Register/css/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- //css files -->
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700" rel="stylesheet">
    <!-- //web-fonts -->
</head>

<body>
    <!--header-->
    <div class="header-w3l">
        <h1>Đăng ký</h1>
    </div>
    <!--//header-->
    <!--main-->
    <div class="main-w3layouts-agileinfo">
        <!--form-stars-here-->
        <div class="wthree-form">
            <h2>Điền đầy đủ các thông tin trước khi đăng ký</h2>
            <form action="{{ route('.handle-Register') }}" method="post">
                @csrf
                <div class="form-sub-w3">
                    <input type="text" name="name" placeholder="Họ và tên " />
                </div>
                @error('name')
                <div style="color:red;">{{ $message }}</div><br>
                @enderror
                <div class="form-sub-w3">
                    <input type="text" name="email" placeholder="Email " />
                </div>
                @error('email')
                <div style="color:red;">{{ $message }}</div><br>
                @enderror
                <div class="form-sub-w3">
                    <input type="text" name="phone" placeholder="Số điện thoại " />
                </div>
                @error('phone')
                <div style="color:red;">{{ $message }}</div><br>
                @enderror
                <div class="form-sub-w3">
                    <input type="text" name="username" placeholder="Tên đăng nhập " />
                </div>
                @error('username')
                <div style="color:red;">{{ $message }}</div><br>
                @enderror
                <div class="form-sub-w3">
                    <input type="password" name="password" placeholder="Mật khẩu " />
                </div>
                @error('password')
                <div style="color:red;">{{ $message }}</div><br>
                @enderror
                <div class="form-sub-w3">
                    <input type="password" name="password_confirmation" placeholder="Nhập lại mật khẩu " />
                </div>
                @error('password_confirmation')
                <div style="color:red;">{{ $message }}</div><br>
                @enderror
                @if(session('Error'))
                <p style="color:red">{{session('Error')}}</p>
                @endif
                <div>
                    <p style="font-weight:bold">Vai trò tham gia:</p>
                    <div style="display:flex;justify-content:space-between;"> 
                        <div style="font-weight:bold">
                            <input type="radio" id="Ungvien" name="type" value="Ungvien">
                            <label for="html">Ứng viên</label><br>
                        </div>
                        <div style="font-weight:bold">
                            <input type="radio" id="Nhatuyendung" name="type" value="Nhatuyendung">
                            <label for="css">Nhà tuyển dụng</label><br>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="submit-agileits">
                    <input type="submit" value="Đăng kí">
                </div>
            </form>
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