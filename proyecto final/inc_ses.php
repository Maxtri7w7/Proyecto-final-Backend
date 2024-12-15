<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login with Background Carousel</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="public/css/style.css" />
  </head>
  <body>
    <!-- Background Carousel -->
    <div
      id="carouselExample"
      class="carousel slide carousel-fade"
      data-bs-ride="carousel"
      data-bs-interval="3000"
    >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="public/img/pueblo guarani1.jpeg"
            class="d-block w-100"
            alt="First Image"
          />
        </div>
        <div class="carousel-item">
          <img
            src="public/img/pueblo guarani2.jpeg"
            class="d-block w-100"
            alt="Second Image"
          />
        </div>
        <div class="carousel-item">
          <img
            src="public/img/pueblo guarani 3.png"
            class="d-block w-100"
            alt="Third Image"
          />
        </div>
      </div>
    </div>

    <!-- Login Container -->
    <div class="login-container bg-light bg-opacity-75 p-4 rounded shadow">
      <h1 class="text-center mb-4">Page Name</h1>
      <form action="/your-login-processor" method="POST">
        <div class="mb-3">
          <input
            type="text"
            name="username"
            placeholder="Username"
            class="form-control"
            required
          />
        </div>
        <div class="mb-3">
          <input
            type="password"
            name="password"
            placeholder="Password"
            class="form-control"
            required
          />
        </div>
      </form>
      <a href="productosadm.php" ><button   class="btn btn-primary w-100">iniciar sesión</button></a>
    </div>
    
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
