<?php
// FILE: bai3_loops.php
$n = isset($_GET["n"]) ? (int)$_GET["n"] : 0;
?>
<!DOCTYPE html>
<html lang="vi">
<head><meta charset="UTF-8"><title>Bài 3 - Vòng lặp</title></head>
<body>
    <h3>ĐÂY LÀ BÀI 3: VÒNG LẶP</h3> <form>
        Nhập n: <input type="number" name="n" value="<?php echo $n; ?>">
        <button type="submit">Thực hiện</button>
    </form>
    <hr>
    
    <b>A) Bảng cửu chương:</b><br>
    <table border="1" cellpadding="5" style="border-collapse:collapse">
    <?php
    for($i=1; $i<=9; $i++) {
        echo "<tr>";
        for($j=1; $j<=9; $j++) echo "<td>$j x $i = ".($i*$j)."</td>";
        echo "</tr>";
    }
    ?>
    </table>
    <br>

    <b>B) Tổng chữ số của <?php echo $n; ?>:</b>
    <?php
    $temp = abs($n); $sum = 0;
    while($temp > 0) {
        $sum += $temp % 10;
        $temp = (int)($temp / 10);
    }
    echo " => <b>$sum</b>";
    ?>
    <br><br>

    <b>C) Số lẻ từ 1 đến <?php echo $n; ?>:</b><br>
    <?php
    for($k=1; $k<=$n; $k++) {
        if($k > 15) { echo "... (Dừng do > 15)"; break; }
        if($k % 2 == 0) continue;
        echo "$k ";
    }
    ?>
    <p><a href="/LAB03_20230797/index.php">Quay về trang chủ</a></p>
</body>
</html>