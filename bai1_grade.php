<?php
// FILE: bai1_grade.php
// Lấy tham số score từ URL hoặc Form
$score = isset($_GET["score"]) ? $_GET["score"] : null;
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài 1 - Phân loại điểm</title>
    <style>body { font-family: sans-serif; padding: 20px; }</style>
</head>
<body>
    <h3>Bài 1: Phân loại điểm (if/elseif/else)</h3>

    <form method="GET" action="">
        <label>Nhập điểm:</label>
        <input type="number" step="0.1" name="score" value="<?php echo htmlspecialchars($score); ?>" placeholder="Ví dụ: 8.5">
        <button type="submit">Xếp loại</button>
    </form>
    <br>

    <div style="background: #e3f2fd; padding: 15px; border-left: 5px solid #2196f3;">
        <?php
        // Nếu chưa nhập điểm thì nhắc nhở
        if ($score === null || $score === "") {
            echo "Hãy nhập điểm và nhấn nút Xếp loại.";
        } else {
            // Ép kiểu sang số thực để so sánh
            $s = (float)$score;

            // 1. Kiểm tra tính hợp lệ
            if ($s < 0 || $s > 10) {
                echo "<strong style='color:red'>Lỗi: Điểm không hợp lệ (Phải từ 0 đến 10).</strong>";
            } else {
                // 2. Logic xếp loại theo yêu cầu
                $xeploai = "";
                if ($s >= 8.5) {
                    $xeploai = "Giỏi";
                } elseif ($s >= 7.0) {
                    $xeploai = "Khá";
                } elseif ($s >= 5.0) {
                    $xeploai = "Trung bình";
                } else {
                    $xeploai = "Yếu";
                }

                // 3. Hiển thị kết quả đúng mẫu: "Điểm: X – Xếp loại: ..."
                echo "<strong>Điểm: $s – Xếp loại: $xeploai</strong>";
            }
        }
        ?>
    </div>

    <br>
    <hr>
    <p>
        <a href="/LAB03_20230797/index.php" style="text-decoration: none; font-weight: bold; color: green;">
            ⬅️ Quay về trang chủ
        </a>
    </p>
</body>
</html>