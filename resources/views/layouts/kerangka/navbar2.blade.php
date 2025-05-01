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
      <h3 class="me-5 pe-5">BADUTNEWS</h3>

      <div class="navbar-nav ms-auto pe-3 ">
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link btn bg-light ps-3 pe-3" href="{{ route('login') }}">Login</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        @endguest
          </div>

  </div>
</nav>
 {{-- NAV BRAND AKHIR --}}
  <nav class="nav bg-dark text-light">
    <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
    <a class="nav-link  text-light" href="#">Link</a>
    <a class="nav-link  text-light" href="#">Link</a>
  </nav>

  <nav class="navbar bg-light">
    <div class="container">
      <marquee behavior="" direction=""> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, iste odit nobis perspiciatis facilis iure provident qui ratione eum, quidem ex at nostrum repellendus quibusdam numquam itaque reiciendis sit! Voluptatibus? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias, temporibus. Neque quasi quaerat voluptatibus sed possimus ab ipsa eligendi, accusamus quod? Fugiat rem quas velit. Deleniti, iure. Earum, ad molestiae!</marquee>
  </nav>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</html>