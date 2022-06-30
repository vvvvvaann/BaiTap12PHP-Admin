<td class="tdmain">
    <?php
    $id = $_GET['id'];
    $str = "SELECT * FROM tbl_news WHERE id=$id";
    $result = mysqli_query($conn, $str);
    $rows = mysqli_fetch_array($result);
    ?>
    <center>
        <img src="<?php echo $rows['photo']; ?>" width="500" align="center" /><br />
        <font style="font-size: 18px; font-weight: bold; color: blue;">
            <?php echo $rows['title']; ?>
        </font> <br />
        <?php echo $rows['detail']; ?>
    </center>
</td>