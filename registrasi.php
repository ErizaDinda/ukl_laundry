<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Sign Up</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="container">
        <main class="form-signin">
        <form action="proses_registrasi.php" method="POST" enctype="multipart/form-data">
        <form>
        <img class="mb-4" src="foto/eriza.png" alt="" width="200">
            <h1 class="h3 mb-3 fw-normal">Please Sign Up</h1>
            <div class="form-floating">
            <input type="text" class="form-control"
            name="nama" placeholder="Name" required>
            <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating">
            <input type="username" class="form-control" id="username" 
            name="username" placeholder="Username" required>
            <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" 
            name="password" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
            </div>
            <button class="w-100 btn btn-lg text-white" style="background-color: #E7A1B0;" type="submit">Register</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
        </form>
        </main>
    </div>
  </body>
</html>