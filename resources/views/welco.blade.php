<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        

        
    </head>
    <body class="antialiased">
        <div class="container mt-5">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="card shadow-lg">
        <div class="card-body">
          <h3 class="card-title text-center mb-5">Login</h3>
          <form>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Masukkan email">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Masukkan password">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="rememberMe">
              <label class="form-check-label" for="rememberMe">Ingat saya</label>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

    </body>
</html>
