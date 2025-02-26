@extends('layouts.default_with_menu')

@section('content')
    <div class="container my-5">
        <form action="{{ route('insert') }}" method="post">
            @csrf
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="category" class="form-label">Category Name</label>
                        <input type="text" name="category_name" class="form-control" id="category" required>
                    </div>
                </div>
            </div>
            <button type="button" id="btn-add-product" class="btn btn-primary mb-3">
                + เพิ่ม product
            </button>
            <div class="row" id="add-product"></div>
            <div class="row mt-3">
                <button class="btn btn-success" type="submit">บันทึก</button>
            </div>
        </form>
        <table class="table table-striped mt-4">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Category Name</th>
                    <th>Product Name</th>
                    <th>User Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $index => $product)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->user->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- โหลด jQuery -->
    <script>
        $(document).ready(function(){
            var count = 1;
            $('#btn-add-product').on('click', function(){
                $("#add-product").append(`
                <div class="mt-3 col-6">
                    <label class="form-label product-label">${count++}. Product Name
                        <button type="button" class="btn btn-danger btn-delete-product">ลบ</button>
                    </label>
                    <input type="text" name="product_name[]" class="form-control" required>
                </div>
                `);
            });

            // ฟังก์ชันลบรายการที่เพิ่มเข้ามา
            $(document).on('click', '.btn-delete-product', function(){
                $(this).closest('.col-6').remove();
            });
        });
    </script>
@endsection
