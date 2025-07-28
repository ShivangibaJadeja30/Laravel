{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h2>Form Submission</h2>
    <form action="{{ route('store') }}" method="POST">
        @csrf <!-- CSRF Token for Laravel -->

        <!-- Name -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        @error('name')
          {{ $message }}
        @enderror
        <br><br>

        <!-- Address -->
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>
        @error('address')
          {{ $message }}
        @enderror
        <br><br>

        <!-- Enroll -->
        <label for="enroll">Enroll Number:</label>
        <input type="number" id="enroll" name="enroll" required>
        @error('enroll')
          {{ $message }}
        @enderror
        <br><br>

        <!-- Aadhar -->
        <label for="aadhar">Aadhar Number:</label>
        <input type="number" id="aadhar" name="aadhar" required>
        @error('aadhar')
          {{ $message }}
        @enderror
        <br><br>

        <!-- Date -->
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
        @error('date')
          {{ $message }}
        @enderror
        <br><br>

        <!-- Blood Group -->
        <label for="bg">Blood Group:</label>
        <input type="text" id="bg" name="bg" required>
        @error('bg')
          {{ $message }}
        @enderror
        <br><br>

        <!-- Phone -->
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required>
        @error('phone')
          {{ $message }}
        @enderror
        <br><br>

        <!-- Submit Button -->
        <button type="submit">Submit</button>
    </form>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4 text-center">Form Submission</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('store') }}" method="POST" class="row g-3">
        @csrf

        <!-- Name -->
        <div class="col-md-6">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Address -->
        <div class="col-md-6">
            <label for="address" class="form-label">Address:</label>
            <input type="text" id="address" name="address" class="form-control" value="{{ old('address') }}" required>
            @error('address')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Enroll -->
        <div class="col-md-6">
            <label for="enroll" class="form-label">Enroll Number:</label>
            <input type="number" id="enroll" name="enroll" class="form-control" value="{{ old('enroll') }}" required>
            @error('enroll')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Aadhar -->
        <div class="col-md-6">
            <label for="aadhar" class="form-label">Aadhar Number:</label>
            <input type="number" id="aadhar" name="aadhar" class="form-control" value="{{ old('aadhar') }}" required>
            @error('aadhar')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Date -->
        <div class="col-md-6">
            <label for="date" class="form-label">Date:</label>
            <input type="date" id="date" name="date" class="form-control" value="{{ old('date') }}" required>
            @error('date')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Blood Group -->
        <div class="col-md-6">
            <label for="bg" class="form-label">Blood Group:</label>
            <input type="text" id="bg" name="bg" class="form-control" value="{{ old('bg') }}" required>
            @error('bg')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Phone -->
        <div class="col-md-6">
            <label for="phone" class="form-label">Phone:</label>
            <input type="tel" id="phone" name="phone" class="form-control" value="{{ old('phone') }}" required>
            @error('phone')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary px-4">Submit</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
