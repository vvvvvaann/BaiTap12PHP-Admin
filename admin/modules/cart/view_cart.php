<td class="tdmain">
    <table border="1" style="width: 100%;">
        <tr>
            <th>Ten san pham</th>
            <th>Gia</th>
            <th> </th>
        </tr>
        <?php
        $cart = $_SESSION['cart'];
        $str = "SELECT * FROM tbl_product WHERE id IN ($cart)";
        $result = mysqli_query($conn, $str);
        $total = 0;
        while ($rows = mysqli_fetch_array($result)) {
            $total = $total + $rows['price'];
        ?>
        <tr>
            <td>
                <?php echo $rows['name']; ?>
            </td>
            <td>
                <font color="red"><?php echo $rows['price']; ?></font>
            </td>
            <td style="text-align: center;">
                <a href="index.php?mod=cart&act=del_cart&id=<?php echo $rows['id']; ?>">[Xoa]</a>
            </td>

        </tr>
        <?php
        }
        ?>
        <tr>
            <th style="text-align: right;" colspan="2">Tong tien </th>
            <td>
                <?php
                $t = number_format($total);
                echo " $t d";
                ?>
            </td>
        </tr>
    </table>
</td>