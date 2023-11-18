<?php
    function viewcart(){
        $html_cart='';
        $i=1;
        foreach ($_SESSION['giohang'] as $sp) {
            extract($sp);
            $tt=(Int)$price*(Int)$soluong;
            $html_cart.='
            <tr>
                        <td>'.$i.'</td>
                        <td><img src="img/'.$img.'" alt="" width="100"></td>
                        <td>'.$name.'</td>
                        <td>'.$price.'</td>
                        <td>'.$soluong.'</td>
                        <td>'.$tt.'</td>
                        <td><a href="#">Xóa</a></td>
                    </tr>';
                    $i++;
        }
        return $html_cart;
    }
    function get_tongdonhang(){
        $tong=0  ;
        foreach ($_SESSION['giohang'] as $sp) {
            extract($sp);
            $tt=(Int)$price*(Int)$soluong;
            $tong+=$tt;
        }
        return $tong;
    }
?>