
<div class="px-3">
  <h2>Register</h2>

  <form action="./Register/KhachHangDangKy" method="POST">
    <div class="form-group">
      <label for="exampleInputUsername1">Username</label>
      <input type="text" name="username" class="form-control" id="exampleInputUsername1" placeholder="Enter Username">
      <div id="check"></div>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" required>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Password" required>
    </div>
    <div class="form-group">
      <label for="exampleInputName1">Họ tên</label>
      <input type="text" name="hoten" class="form-control" id="exampleInputName1" placeholder="Enter Password" required>
    </div>
    <div class="form-group">
      <label for="exampleInputAddress1">Địa chỉ</label>
      <input type="text" name="diachi" class="form-control" id="exampleInputAddress1" placeholder="Enter Password" required>
    </div>
    <button id="register" type="submit" name="register" class="btn btn-outline-primary">Register</button>
  </form>

  <?php if (isset($data["result"])) {?>
    <h3><?php if($data["result"]== 0){
      echo "đăng ký thành công";
    }else{
      echo "đăng ký thất bại";
    }
    ?></h3>
  <?php } ?>
</div>