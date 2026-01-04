<?php
// FILE: bai2_calc.php
$a = isset($_GET["a"]) ? (float)$_GET["a"] : 0;
$b = isset($_GET["b"]) ? (float)$_GET["b"] : 0;
$op = $_GET["op"] ?? "add";
?>
<!DOCTYPE html>
<html lang="vi">
<head><meta charset="UTF-8"><title>Bài 2 - Máy tính</title></head>
<body>
    <h1>ĐÂY LÀ BÀI 2: MÁY TÍNH</h1> <form>
        <input name="a" value="<?php echo $a; ?>" placeholder="Nhập a">
        <select name="op">
            <option value="add" <?php if($op=='add') echo 'selected';?>>+</option>
            <option value="sub" <?php if($op=='sub') echo 'selected';?>>-</option>
            <option value="mul" <?php if($op=='mul') echo 'selected';?>>*</option>
            <option value="div" <?php if($op=='div') echo 'selected';?>>/</option>
        </select>
        <input name="b" value="<?php echo $b; ?>" placeholder="Nhập b">
        <button type="submit">Tính ngay</button>
    </form>
    <br>
    
    <div style="background: #e0f7fa; padding: 10px; border: 1px solid blue;">
        <?php
        switch($op){
            case 'add': echo "Kết quả: $a + $b = <b>".($a+$b)."</b>"; break;
            case 'sub': echo "Kết quả: $a - $b = <b>".($a-$b)."</b>"; break;
            case 'mul': echo "Kết quả: $a * $b = <b>".($a*$b)."</b>"; break;
            case 'div': 
                if($b==0) echo "<b style='color:red'>Lỗi: Không chia được cho 0</b>";
                else echo "Kết quả: $a / $b = <b>".($a/$b)."</b>"; 
                break;
        }
        ?>
    </div>
    <p><a href="index.php">Quay về trang chủ</a></p>
</body>
</html>