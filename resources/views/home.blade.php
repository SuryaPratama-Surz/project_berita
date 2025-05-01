<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
          <title>Admin BADUTNEWS</title>
      <!-- Fonts & Bootstrap -->
      <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

                <style>

                  .navbar-brand {
                    font-weig ht: bold;

                    top: 0;
                    left: 0;
                    bottom: 0;
                  }

                  .card-title {
                    font-size: 1.7rem;
                    font-weight: 300;
                    font-family:Arial, Helvetica, sans-serif
                  }

                  .card-body img {
                    max-width: 300px;
                  }


                

                  .sidebar {
                    position: fixed;
                    top: 66px;
                    left: 0;
                    bottom: 0;
                    width: 250px;
                    background-color: #343a40;
                    color: #fff;
                    padding-top: 20px;
                    padding-left: 15px;
                  }

                  .sidebar a {
                    color: #fff;
                    padding: 10px 15px;
                    display: flex;
                    text-decoration: none;
                    font-weight: 600;
                  }

                  .sidebar a:hover {
                    background-color: #495057;
                  }

                  .main-content {
                    margin-left: 250px;
                    padding: 20px;
                  }
                </style>
              </head>
              <body>

                <!-- Navbar -->
                <nav>
                  @include('layouts.kerangka.navbar')
                </nav>

                <!-- Sidebar -->
                <aside>
                  @include('layouts.kerangka.sidebar')
                </aside>

                <!-- Main Content -->
                <div class="main-content">
                  <div class="container mt-5">
                    <div class="row mb-4">
                      <div class="col text-left">
                       <h2>DASHBOARD ADMIN - BADUTNEWS</h2>
                      </div>
                    </div>

                    <div class="row text-center">
                      <div class="col-md-3 mb-4">
                        <div class="card">
                          <div class="card-body bg-success rounded">
                            <h3 class="card-title text-light">DATA PENGGUNA</h3>
                            <p class="card-text text-light ">0 DATA</p>
                            <a href="{{ route('pengguna.index') }}" class="btn btn-dark">LIHAT DATA</a>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-3 mb-4">
                        <div class="card">
                          <div class="card-body bg-info card-shadow rounded">
                            <h3 class="card-title text-light">DATA KATEGORI</h3>
                            <p class="card-text text-light ">0 DATA</p>
                            <a href="{{ route('pengguna.index') }}" class="btn btn-dark">LIHAT DATA</a>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-3 mb-4">
                        <div class="card">
                          <div class="card-body bg-danger card-shadow rounded">
                            <h3 class="card-title text-light">DATA PENULIS</h3>
                            <p class="card-text text-light ">0 DATA</p>
                            <a href="{{ route('pengguna.index') }}" class="btn btn-dark">LIHAT DATA</a>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-3 mb-4">
                        <div class="card">
                          <div class="card-body bg-warning card-shadow rounded">
                            <h3 class="card-title text-light">ARTIKEL / NEWS</h3>
                            <p class="card-text text-light ">0 DATA</p>
                            <a href="{{ route('pengguna.index') }}" class="btn btn-dark">LIHAT DATA</a>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"                  integrity="sha384-w76A2z02tPqdjT+e4F8IL1iNnFsAka5x5Jr74D7zNylE+9z1FMvxhZRm7FZ8V8bF"              crossorigin="anonymous"></script>
</body>
</html>
