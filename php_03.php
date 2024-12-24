<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h1 class="text-center mb-4">แสดงตารางสูตรคูณ</h1>
                        <form method="POST">
                            <div class="mb-3">
                                <label for="number" class="form-label">กรอกแม่สูตรคูณ:</label>
                                <input type="number" id="number" name="number" class="form-control" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">แสดงผล</button>
                            </div>
                        </form>
                        <hr>
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            $number = intval($_POST['number']);
                            echo "<h2 class='text-center'>สูตรคูณแม่ $number</h2>";
                            echo "<div class='result mt-4'>";
                            for ($i = 1; $i <= 12; $i++) {
                                echo "<p class='text-center'>$number x $i = " . ($number * $i) . "</p>";
                            }
                            echo "</div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
