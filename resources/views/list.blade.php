<!DOCTYPE html>
<html>
<head>
    <title>Student Data</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <!-- Add Button at Top -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Student Data</h2>
        <a href="{{route('add')}}" class="btn btn-success">Add Student</a>
    </div>

    <!-- Responsive Table -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table">
            <tr>
                <td>id</td>
                <td>name</td>
                <td>adress</td>
                <td>enroll</td>
                <td>aadhar</td>
                <td>date</td>
                <td>bg</td>
                <td>phone</td>
            </tr>
            @foreach($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->address}}</td>
                <td>{{$student->enroll}}</td>
                <td>{{$student->aadhar}}</td>
                <td>{{$student->date}}</td>
                <td>{{$student->bg}}</td>
                <td>{{$student->phone}}</td>
                <td>
                <div class="btn btn-primary">EDIT</div>
                <div class="btn btn-danger">DELETE</div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>