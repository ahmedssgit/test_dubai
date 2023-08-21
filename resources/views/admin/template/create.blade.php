
<!doctype html>
@extends('admin.layout.head')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

@extends('admin.layout.aside')
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>template  Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
<div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">template</h1>
                </div>
                <div class="card-body">
                   
                    <form action="{{ route('admin.template.add') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title"  class="form-label">title</label>
                            <input type="text" name="title" class="form-control" id="title" >
                        </div>
                       
                        <div class="mb-3">
                            <label>Select tasks:</label><br>
                            @foreach ($task as $i) 
                            <label>
                                <input type="checkbox" name="tasks[]" value="{{ $i->id }}">
                                {{ $i->title }}
                            </label><br>
                            @endforeach
                        </div>
                        
                        
                        
                      
                        <div class="mb-3">
                            <div class="d-grid">
                                <button class="btn btn-primary">submit</button>
                            </div>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</body>
</html>