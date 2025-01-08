<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สูตรคูณ</title>
    <!-- Include Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <h1>ตารางสูตรคูณ</h1>
            <form method="post" action="{{ url('/mycontroller') }}" class="mb-4">
                @csrf
                <div class="mb-3">
                    <label for="myinput" class="form-label">ป้อนแม่สูตรคูณ:</label>
                    <input type="text" name="myinput" class="form-control" value="{{ $input }}">
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>

            @if(isset($multiplicationTable))
                <h2 class="text-center">ผลลัพธ์:</h2>
                <div class="fs-3">
                    @foreach($multiplicationTable as $key => $value)
                        <p>{{ $input }} x {{ $key }} = {{ $value }}</p>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
