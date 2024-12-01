<main>
    <div class="container d-flex justify-content-center align-items-center">
      <form action="">
        <h2 class="text-center">ĐĂNG KÝ TÀI KHOẢN CHO NHÀ TUYỂN DỤNG</h2>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input class="form-control" type="text" id="email" placeholder="Nhập Email">
            <div id="emailError" style="color: red; display: none;">Email không được để trống</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mật khẩu</label>
            <input class="form-control" type="password" id="password" placeholder="Nhập mật khẩu">
            <div id="passwordError" style="color: red; display: none;">Mật khẩu không được để trống</div>
        </div>
        <div class="mb-3">
            <label for="repassword" class="form-label">Nhập lại mật khẩu</label>
            <input class="form-control" type="password" id="repassword" placeholder="Nhập lại mật khẩu">
            <div id="repasswordError" style="color: red; display: none;">Mật khẩu không được để trống</div>
        </div>
        <h2 class="text-center"> thông tin công ty</h2>
        <div class="mb-3">
            <label for="tentc" class="form-label">tên công ty</label>
            <input class="form-control" type="text" id="tenct" placeholder="Nhập tên công ty">
            <div id="repasswordError" style="color: red; display: none;">tên công ty không dược để trống </div>
        </div>
        <div class="mb-3">
            <label for="sonhanvien" class="form-label">số nhân viên</label>
            <input class="form-control" type="text" id="sonhanvien" placeholder="Nhập số lượng nhân viên">
            <div id="repasswordError" style="color: red; display: none;">số lượng nhân viên không được để trống </div>
        </div>
        <label for="địa chỉ" class="form-label">địa chỉ</label>
        <div class="mb-3">
            <select display: inline-block name="quocgia" id="" >
                  <option value="viecnam" >Việt Nam</option>
            </select>
            <select display: inline-block name="tinh" id="" >
                  <option value="" >chọn tĩnh/ Thành phố</option>
            </select>
            <select display: inline-block name="quan" id="" >
                  <option value="" >chọn quận huyện</option>
            </select>
        </div>
        <div>
            <button type="button" class="btn btn-success" style="width: 100%;">ĐĂNG KÝ</button>
        </div>
        <p class="text-center mt-2">
            bạn đã có tài khoản <a href="login_ntd.html">ĐĂNG NHẬP</a>
        </p>
      </form>
      </div>
    </div>
    </main>
