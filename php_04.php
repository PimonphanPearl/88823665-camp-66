<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>เลขคู่หรือเลขคี่</title>
</head>
<body class="bg-light">
    <div class="container my-5">
        <h1 class="text-center mb-4">ตรวจสอบเลขคู่หรือเลขคี่</h1>
        <form method="POST" class="text-center mb-5">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <label for="start" class="form-label h5">เริ่มต้นที่:</label>
                    <input type="number" id="start" name="start" class="form-control" required>
                </div>
                <div class="col-md-4">
                    <label for="end" class="form-label h5">สิ้นสุดที่:</label>
                    <input type="number" id="end" name="end" class="form-control" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">แสดงผล</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $start = intval($_POST['start']); // รับค่าจุดเริ่มต้น
            $end = intval($_POST['end']);     // รับค่าจุดสิ้นสุด

            if ($start <= $end) {
                echo "<h2 class='text-center mb-4'>ผลลัพธ์จาก $start ถึง $end</h2>";
                echo "<div class='text-center'>";
                for ($i = $start; $i <= $end; $i++) {
                    if ($i % 2 === 0) {
                        echo "<p>$i เป็นเลขคู่</p>";
                    } else {
                        echo "<p>$i เป็นเลขคี่</p>";
                    }
                }
                echo "</div>";
            } else {
                echo "<div class='alert alert-danger text-center'>กรุณากรอกค่าเริ่มต้นให้น้อยกว่าค่าสิ้นสุด</div>";
            }
        }
        ?>
    </div>
</body>
</html>
