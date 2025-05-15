<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>BERITA</title>

</head>
<body>

    <!-- Navbar -->
    <nav>
        @include('layouts.kerangka.navbar2')
    </nav>

    <!-- Main content -->
    <main>
        
      <div class="container mt-5">
        <div class="row">
            <!-- Berita Utama -->
            @foreach ($artikels as $data)
                @if ($data->id_artikel == 1)
                <div class="col-md-8">
                   <div class="card">
                       <img src="{{ asset('images/artikel/' . $data->foto) }}" alt="Berita Image" class="card-img-top">
                       <div class="card-body">
                           <h2 class="fw-bold mt-3">{{ $data->judul }}</h2>
                           <p class="mt-3">{{ $data->isi }}</p>
                           <a href="{{ asset('show.blade.php') }}" class="btn btn-primary mt-3">Baca Selengkapnya</a>
                       </div>
                   </div>
                </div>
                @endif
            @endforeach

            <!-- Artikel Terbaru -->
            <div class="col-md-4">
                <h4 class="fw-bold mb-3">Artikel Terbaru</h4>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Artikel 1</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="btn btn-link">Baca Selengkapnya</a>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">Artikel 2</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, rerum, cupiditate similique iste esse id maiores quisquam dicta veniam molestiae molestias ea maxime aut perferendis voluptatem vitae saepe! Tenetur, minus!.</p>
                        <a href="#" class="btn btn-link">Baca Selengkapnya</a>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">Artikel 3</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam nihil repudiandae fugit officia beatae tempora dolorum quisquam qui nobis rem dicta cupiditate enim eum, reprehenderit, atque aspernatur inventore vitae ullam? tristique urna nec tortor hendrerit, sit amet consectetur erat vestibulum.</p>
                        <a href="#" class="btn btn-link">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </main>


    @include('layouts.kerangka.footer')
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
