

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" class="model__container model__container--login
                js-model-container--login" method="POST">
                <div class="model__container-top">
                    <div class="model__header">
                        <div class="model__register">Đăng nhập</div>
                        <div class="model__login js-model-register"
                            onclick="md_register();">Đăng ký</div>
                    </div>
                    <div class="model__body">
                        <div class="model__ipt-ctn">
                            <input type="text" class="model__ipt-username"
                                placeholder="Email/Số điện thoại/Tên đăng nhập" name="username">
                        </div>
                        <div class="model__ipt-ctn">
                            <input type="text" class="model__ipt-username"
                                placeholder="Mật khẩu" name="password">
                        </div>
                    </div>
                    <div class="model__policy model__policy--login">
                        <p class="model__policy-content">
                            <a href="#" class="model__foget-pass">Quên mật khẩu</a>
                            <a href="#" class="model__can-help">Cần trợ giúp?</a>
                        </p>
                    </div>
                    <div class="model__model-btns">
                        <button class="btn model__btn-comback js-model-comback" name="trolai">Trở
                            lại</button>
                        <button type="submit" class="btn model__btn-register" name="dangnhap">Đăng nhập</button>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="model__container-bottom">
                    <div class="model__footer">
                        <a href="https://www.facebook.com/"
                            class="model__footer-sms">
                            <i class="model__icon-sms fa-brands fa-rocketchat"></i><span
                                class="model__sms">SMS</span>
                        </a>
                        <a
                            href="https://www.facebook.com/profile.php?id=100082891537512"
                            class="model__footer-fb">
                            <i class="model__icon-fb fa-brands fa-facebook"></i>Kết
                            nối với Facebook
                        </a>
                        <a href="https://www.facebook.com/"
                            class="model__footer-gg">
                            <i class="model__icon-gg fa-brands fa-google-plus"></i>Kết
                            nối với Google
                        </a>
                    </div>
                </div>
            </form>
</body>
<?php
    $conn = mysqli_connect("localhost","root","","manager");
    if($conn){
        echo("đang nhap thanh cong");
    } else {
        echo("đang nhap khong cong");
    }
    if(isset($_POST['dangnhap'])){
        $u = $_POST['username'];
        echo $u;
        $p = $_POST['password'];
        $sql = "select * from manager where username='$u' and password='$p'";
        $rs = mysqli_query($conn, $sql);
        if(mysqli_num_rows($rs)){
            echo('Đăng nhập thành công');
        } else {
            echo('Đăng nhập thất bại');
        }
    }
    ?>
</html>