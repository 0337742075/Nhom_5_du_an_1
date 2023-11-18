<?php
    if (isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
        extract($_SESSION['s_user']);
    }

?>

<style>
.form-container {
  max-width: 400px;
  margin: 100px 40% 100px;;
  padding: 20px;
  background-color: #f2f2f2;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.form-container h3 {
  text-align: center;
  margin-bottom: 20px;
}

.form-container input[type="text"],
.form-container input[type="password"],
.form-container input[type="email"] {
  width: 100%;
  padding: 12px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.form-container input[type="submit"] {
  background-color: #4caf50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
}

.form-container input[type="submit"]{
  background-color: #088178;
}
</style>




<div class="form-container">

   <form action="index.php?pg=updateuser" method="post">
      <h3>Tài khoản của bạn</h3>
        
        Tên đăng nhập:<input type="text" id="fname" value="<?=$username?>" name="username" placeholder="Tên đăng nhập">

        Tên đăng nhập:<input type="password" id="lname" value="<?=$password?>" name="password" placeholder="Nhập mật khẩu">
      
        Họ và tên:<input type="text" id=lname value="<?=$ten?>" name="diachi" placeholder="Nhập Họ và tên của bạn">
      
        Địa chỉ:<input type="text" id=lname value="<?=$diachi?>" name="diachi" placeholder="Nhập địa chỉ của bạn">

        Email:<input type="text" id="lname" value="<?=$email?>" name="email" placeholder="Xác nhận mật khẩu">

        Số điện thoại:<input type="text" id=lname value="<?=$dienthoai?>" name="dienthoai" placeholder="Nhập số điện thoại của bạn">
        
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="submit" name="capnhat" value="Cập Nhật" class="form-btn">



     
   </form>

</div>