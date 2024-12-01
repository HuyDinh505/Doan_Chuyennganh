   <?php
        session_start();
        ob_start();
        include "../model/";
        if((isset($_POST['dangnhap']))&($_POST['dangnhap'])){
            $email=$_POST['Email'];
            $pass=$_POST['PasswordHash'];
        }
   ?>
   <main>
    <div class="container d-flex justify-content-center align-items-center">
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <h2 class="text-center">ĐĂNG NHẬP TÀI KHOẢN</h2>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input class="form-control" type="text" id="email" placeholder="Nhập Email" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mật khẩu</label>
            <input class="form-control" type="password" id="password" placeholder="Nhập mật khẩu" name="pass">
        </div>
        <div>
            <button type="button" class="btn btn-success" style="width: 100%;" name="dangnhap">ĐĂNG NHẬP</button>
        </div>
        <p class="text-center mt-2">
            Bạn chưa có tài khoản? <a href="index?act=register_ntd">Đăng ký</a>
        </p>
      </form>
      </div>
    </div>
    </main>
