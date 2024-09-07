<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $page_name }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   {{-- @if (false)
    hi
    @else
    bey
   @endif  --}}
   
    <div class="container mt-5">
        <h2 class="text-center mb-4">Category List</h2>
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Main Category</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example Data Row -->
                @foreach ($categories as $category)
                    
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description ?? '---' }}</td>
                        <td>{{ $category->parentCategory != null ? $category->parentCategory->name : '---' }}</td>
                    </tr>
                @endforeach
             
                <!-- More rows can be added here -->
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
