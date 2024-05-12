<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <style>
    /* Custom styles */
    body {
      background-color: #f8f9fa;
    }
    .card {
      background-color: #F8D082;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .card-header {
      background-color: #E65C19;
      color: #fff; 
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }
    .btn-primary {
      background-color: #E65C19;
      border-color: #E65C19;
    }
    .btn-primary:hover {
      background-color: #FDA403;
      border-color: #FDA403;
    }
    .alert-success {
      background-color: #d4edda; 
      border-color: #c3e6cb;
      color: #155724; 
    }
  </style>
</head>
<body>
<div class="row justify-content-center mt-5">
  <div class="col-lg-4">
    <div class="card">
      <div class="card-header">
        <!-- Register title -->
        <h1 class="card-title">Register</h1>
      </div>
      <div class="card-body">
        <!-- Display success message if present -->
        @if(Session::has('success'))
          <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
          </div>
        @endif
        <!-- Registration form -->
        <form action="{{ route('register') }}" method="POST">
          @csrf
          <!-- Name input field -->
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="John Doe" required>
          </div>
          <!-- Email input field -->
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
          </div>
          <!-- Password input field -->
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" required>
          </div>
          <!-- Register button -->
          <div class="mb-3">
            <div class="d-grid">
              <button class="btn btn-primary">Register</button>
            </div>
          </div>
          <!-- Link to login page -->
          <div class="mb-3">
            <p class="text-center">Already have an account? <a href="{{ route('login') }}">Login here</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>
