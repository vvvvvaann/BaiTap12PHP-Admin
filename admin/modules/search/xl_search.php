<td valign="top" class="tdmain">
    <b style="color: red;">[ Ket qua tim kiem! ]</b> <br /> <br />
    <?php
    $name = $_POST['name'];
    $str = mysqli_query($conn, "SELECT * FROM tbl_product WHERE name LIKE '%$name%'");
    $tongsodong = mysqli_num_rows($str);
    if ($tongsodong == 0) {
    ?>
    Khong tim thay san pham nao!
    <?php }
    if ($tongsodong > 0) {
    ?>
    <table width="100%" border="0">
        <tr>
            <?php
                $d = 0;
                while ($rows = mysqli_fetch_array($str)) {
                    $d = $d + 1;
                ?>
            <td width="150" align="center">
                <a href="index.php?mod=product&act=detail&id=<?php echo $rows['id']; ?>">
                    <img src="<?php echo $rows['photo']; ?>" width="100" height="100">
                    <br />
                    <b> <?php echo truncateString($rows['name'], 40, true); ?> </b>
                    <br />
                </a>
                Gia: <b style="color: red;"> <?php echo number_format($rows['price']); ?> </b> d
                <br />
            </td>
            <?php
                    if ($d % 4 == 0) {
                        echo "</tr>";
                    }
                }
                ?>
    </table>
</td>
<?php } ?>