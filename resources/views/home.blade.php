<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>HALO</title>
</head>
<body>

    @include('layouts.kerangka.navbar')
    @include('layouts.kerangka.sidebar')


    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <div class="container fw-bold">
        <div class="row">
            <div class="col mt-5">
            <div class="card">
                <div class="card-body huge">
                  DASHBOARD ADMIN
                   <img src="{{ asset('/img/logo.jpg') }}" alt="" width="30"> 
                   SURNEWS.ID
                </div>
               </div>
              </div>
        </div>
    </div>

    <div class="container text-break">
        <div class="row">
            <div class="col-3 mt-5">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">DATA PENGGUNA TERDATA</h5>
                          <p class="card-text">0 DATA</p>
                          <a href="{{ route('pengguna.index') }}" class="btn btn-success">LIHAT DATA</a>
                        </div>
                    </div>
            </div>

            <div class="col-3 mt-5">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">DATA KATEGORI</h5>
                      <p class="card-text">0 DATA</p>
                      <a href="#" class="btn btn-success">LIHAT DATA</a>
                    </div>
                </div>
           </div>
           <div class="col-3 mt-5">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">DATA BERITA</h5>
                  <p class="card-text">0 DATA</p>
                  <a href="#" class="btn btn-success">LIHAT DATA</a>
                </div>
            </div>
          </div>

          <div class="col-3 mt-5">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">DATA BERITA</h5>
                  <p class="card-text">0 DATA</p>
                  <a href="#" class="btn btn-success">LIHAT DATA</a>
                </div>
            </div>
          </div>

        </div>

        
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>