<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>แสดงตารางสูตรคูณ</title>
</head>
<body class="bg-light">
    <div class="container my-5">
        <h1 class="text-center mb-4">ตารางสูตรคูณ</h1>
        <form method="POST" class="text-center mb-5">
            <label for="number" class="form-label h4">กรอกแม่สูตรคูณ:</label>
            <input type="number" id="number" name="number" class="form-control w-25 mx-auto" required>
            <button type="submit" class="btn btn-primary mt-3">แสดงตาราง</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $number = intval($_POST['number']); // รับค่าแม่สูตรคูณจาก FORM
            echo "<h2 class='text-center mb-4'>ตารางสูตรคูณแม่ $number</h2>";
            echo "<div class='row justify-content-center'>";
            echo "<div class='col-md-6'>";
            echo "<table class='table table-bordered table-striped text-center'>";
            echo "<thead class='table-dark'><tr><th>สูตร</th><th>ผลลัพธ์</th></tr></thead>";
            echo "<tbody>";

            for ($i = 1; $i <= 12; $i++) {
                $result = $number * $i;
                echo "<tr><td>$number × $i</td><td>$result</td></tr>";
            }

            echo "</tbody>";
            echo "</table>";
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
