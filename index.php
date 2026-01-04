<?php
// FILE: index.php
require_once "functions.php"; 

$action = $_GET["action"] ?? "home";
$a = isset($_GET['a']) ? (int)$_GET['a'] : 0;
$b = isset($_GET['b']) ? (int)$_GET['b'] : 0;
$n = isset($_GET['n']) ? (int)$_GET['n'] : 0;
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Lab 03 - Trang chủ</title>
    <style>body { font-family: sans-serif; padding: 20px; }</style>
</head>
<body>
    <h2>LAB03 - Mini Utility & Bài tập</h2>
    
    <div style="background: #f0f0f0; padding: 10px;">
        <p><strong>1. Test Hàm (Bài 4 & 5):</strong>
            <a href="?action=max&a=10&b=22">Max(10,22)</a> |
            <a href="?action=min&a=10&b=22">Min(10,22)</a> |
            <a href="?action=prime&n=17">Prime(17)</a> |
            <a href="?action=fact&n=6">Fact(6)</a> |
            <a href="?action=gcd&a=12&b=18">GCD(12,18)</a>
        </p>
        <hr>
        <p><strong>2. Bài tập riêng lẻ:</strong><br>
            <a href="/LAB03_20230797/bai1_grade.php">👉 Bài 1: Xếp loại</a> |
            <a href="/LAB03_20230797/bai2_calc.php">👉 Bài 2: Máy tính</a> |
            <a href="/LAB03_20230797/bai3_loops.php">👉 Bài 3: Vòng lặp</a>
        </p>
    </div>

    <div style="margin-top: 20px; border: 1px solid #ccc; padding: 10px;">
        <?php
        switch ($action) {
            case 'max': echo "Max($a, $b) = <strong>" . max2($a, $b) . "</strong>"; break;
            case 'min': echo "Min($a, $b) = <strong>" . min2($a, $b) . "</strong>"; break;
            case 'prime': echo "Số $n " . (isPrime($n) ? "LÀ" : "KHÔNG PHẢI") . " số nguyên tố"; break;
            case 'fact': echo "$n! = <strong>" . factorial($n) . "</strong>"; break;
            case 'gcd': echo "UCLN($a, $b) = <strong>" . gcd($a, $b) . "</strong>"; break;
            default: echo "Chào mừng! Hãy chọn chức năng ở trên.";
        }
        ?>
    </div>
</body>
</html>