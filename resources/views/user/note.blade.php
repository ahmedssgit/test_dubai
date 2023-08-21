<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Add Note</h1>
        <form action="{{ route('customer.add_note', $id) }}" method="POST">
            @csrf <!-- Add CSRF token -->
            <div class="mb-3">
                <input type="text" name="note" id="note" class="form-control" placeholder="Enter note...">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
