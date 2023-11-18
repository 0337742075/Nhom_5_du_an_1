<style>
   /* Style for the form container */
.form-container {
    width: 400px;
    margin: 100px 40% 100px;
    text-align: center;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background: #f9f9f9;
}

/* Style for the form heading */
.form-container h3 {
    font-size: 24px;
    color: #333;
}

/* Style for form inputs and select */
.form-container input[type="text"],
.form-container input[type="password"],
.form-container input[type="email"],
.form-container select {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

/* Style for the submit button */
.form-container input[type="submit"] {
    background: #088178;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

/* Style for the "Đăng nhập" link */
.form-container p a {
    text-decoration: none;
    color: #007bff;
}

/* Style for the "Đăng nhập" link on hover */
.form-container p a:hover {
    text-decoration: underline;
}

</style>
   
<div class="form-container">

   <form action="index.php?pg=adduser" method="post">
      <h3>Đăng ký</h3>
      
      <input type="text" id="fname" name="username" placeholder="Tên Đăng Nhập"><br>

      <input type="password" id="lname" name="password" placeholder="Nhập mật khẩu"><br>

      <input type="password" id="lname" name="password" placeholder="Xác nhận mật khẩu"><br>

      <input type="email" id=lname name="email" placeholder="Nhập email của bạn"><br>

      <select name="user_type">
         <option value="user">Người dùng</option>
         <option value="admin">Quản trị viên</option>
      </select><br>
      <input type="submit" name="dangky" value="Đăng ký" class="form-btn">
      
      <p>Bạn có tài khoản chưa?<a href="index.php?pg=dangnhap">Đăng nhập</a></p>
   </form>

</div>

