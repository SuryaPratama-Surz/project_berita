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

    {{-- NAV BRAND --}}
    <nav class="navbar bg-info">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/#') }}">
            <img src="{{ asset('img/logo.png') }}" width="60px" class="d-inline-block align-text-top">
        </a>
      <h3>BADUTNEWS</h3>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
  </div>
</nav>
 {{-- NAV BRAND AKHIR --}}
  <nav class="nav bg-dark text-light">
    <a class="nav-link active text-light" aria-current="page" href="#">Active</a>
    <a class="nav-link  text-light" href="#">Link</a>
    <a class="nav-link  text-light" href="#">Link</a>
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </nav>

  <nav class="navbar bg-light">
    <div class="container">
      <marquee behavior="" direction=""> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, iste odit nobis perspiciatis facilis iure provident qui ratione eum, quidem ex at nostrum repellendus quibusdam numquam itaque reiciendis sit! Voluptatibus? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias, temporibus. Neque quasi quaerat voluptatibus sed possimus ab ipsa eligendi, accusamus quod? Fugiat rem quas velit. Deleniti, iure. Earum, ad molestiae!</marquee>
  </nav>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>