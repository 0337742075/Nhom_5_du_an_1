<?php 
    session_start();
    ob_start();
    if (!isset($_SESSION["giohang"])) {
        $_SESSION["giohang"]=[];
    }


    include 'DAO/pdo.php';
    include 'DAO/sanpham.php';
    include 'DAO/giohang.php';
    include 'DAO/user.php';
    include './VIEW/header.php';
    //data dành cho sản phẩm
    $dssp_new=get_dssp_new();
    $dssp_best=get_dssp_best();
    $dssp_view=get_dssp_view();

    if (!isset($_GET['pg'])) {
        include './VIEW/home.php';
    }else{
        switch ($_GET['pg']) {
            case 'sanpham':   
                if(isset($_POST["timkiem"])&&($_POST["timkiem"])){
                    $kyw=$_POST["kyw"];
                }else{
                    $kyw="";
                }
                $dssp=get_dssp($kyw);
                include './VIEW/sanpham.php';
                break;
            case 'sanphamchitiet':   
                if (isset($_GET['idpro'])) {
                    $id=$_GET['idpro'];
                    $spchitiet= get_sp_by_id($id);
                    $iddm=$spchitiet['iddm'];
                    $splienquan= get_dssp_splienquan($iddm,$id,4);
                    include './VIEW/sanphamchitiet.php';
                }else{
                    include './VIEW/home.php';
                }
                
                break;
            case 'addcart':
                if (isset($_POST["addcart"])) {
                $name=$_POST["name"];
                $img=$_POST["img"];
                $price=$_POST["price"];
                $soluong=$_POST["soluong"];
                $sp=array("name"=>$name,"img"=>$img,"price"=>$price,"soluong"=>$soluong);
                array_push($_SESSION["giohang"],$sp);
                
                // echo var_dump($_SESSION["giohang"],$sp);
                header('location: index.php?pg=viewcart');
                }
                // include './VIEW/gioithieu.php';
                break;
            case 'viewcart':
                if (isset($_GET['del'])&&($_GET['del']==1)) {
                    unset($_SESSION['giohang']);
                    header('location: index.php');
                }else{
                    if ($_SESSION['giohang']) {
                        $tongdonhang=get_tongdonhang();
                    }
                        $giatrivoucher=0;
                    if (isset($_GET['voucher'])&&($_GET['voucher']==1)) {
                        $tongdonhang=$_POST['tongdonhang'];
                        $mavoucher=$_POST['mavoucher'];
                        #so sánh với databay giá trị về 
                        $giatrivoucher=10;                   
                    }
                        $thanhtoan=$tongdonhang - $giatrivoucher;
                    include './VIEW/viewcart.php';
                }
                
                break;
            case 'login':
                #input
             
                if (isset($_POST['dangnhap'])&&($_POST['dangnhap'])) {
                    $username=$_POST["username"];
                    $password=$_POST["password"];
                

                //xl 
                $kq=checkuser($username,$password);
                if (is_array($kq)&&count($kq)>0){
                    $_SESSION['s_user']=$kq;
                    header('location: index.php');
                    
                }else{
                    $tb="Tài khoản không tồn tại!";
                    $_SESSION['tb_dangnhap']=$tb;
                    header('location: index.php?pg=dangnhap');
                }


                // dăng xuất
                
                }
                break;
            case 'logout':
                if (isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
                    unset($_SESSION['s_user']);
                }
                header('location: index.php');
                break;



            case 'myaccount':
                if (isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
                    include './VIEW/myaccount.php';
                }
                
                break;
            
            
            
            case 'dangnhap':

                include './VIEW/dangnhap.php';
                break;



            case 'adduser':
                # xác định gái trị đầu vào
                if (isset($_POST['dangky'])&&($_POST['dangky'])) {
                    $username=$_POST["username"];
                    $password=$_POST["password"];
                    $email=$_POST["email"];
                }
                # xử lý
                user_insert($username, $password, $email);
                include './VIEW/dangnhap.php';
                break;


            case 'updateuser':
                # xác định gái trị đầu vào
                if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                    $username=$_POST["username"];
                    $password=$_POST["password"];
                    $email=$_POST["email"];
                    $diachi=$_POST["diachi"];
                    $dienthoai=$_POST["dienthoai"];
                    $id=$_POST["id"];
                    $role=0;

                    user_update($username, $password, $email, $diachi, $dienthoai, $role, $id);
                    include './VIEW/myaccount_confirm.php';
                }
                
                

                break;


            case 'dangky':
                include './VIEW/dangky.php';
                break;

                
            case 'gioithieu':
                include './VIEW/gioithieu.php';
                break;
            
            default:
                include './VIEW/home.php';
                break;
        }
    }

    include './VIEW/footer.php';
?>