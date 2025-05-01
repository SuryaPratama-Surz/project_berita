<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Dashboard BADUTNEWS</title>

              <!-- Fonts & Bootstrap -->
              <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

              <style>
                body {
                  background-color: #f8f9fa;
                }

                .navbar-brand {
                  font-weig ht: bold;

                  top: 0;
                  left: 0;
                  bottom: 0;
                }

                .card-title {
                  font-size: 1.2rem;
                  font-weight: 600;
                }

                .card-body img {
                  max-width: 100px;
                }

                .dashboard-title {
                  font-size: 1.5rem;
                  font-weight: bold;
                  color: #333;
                }

                .card {
                  transition: 0.3s;
                }

                .card:hover {
                  transform: scale(1.02);
                  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
                }

                /* Sidebar */
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

                /* Main Content */
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
                    <div class="col text-center">
                      <div class="dashboard-title">HALAMAN DATA PENGGUNA</div>
                    </div>
                  </div>
                  
                
                        <div class="container">
                            <h2 class="mb-4">Data Pengguna</h2>

                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            <!-- Tombol untuk menambah pengguna -->
                            <a href="{{ route('pengguna.create') }}" class="btn btn-primary mb-3">Tambah Pengguna</a>

                            <!-- Tabel Daftar Pengguna -->
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pengguna as $key => $data)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td class="text-center">
                                                <!-- Tombol Edit -->
                                                <a href="{{ route('pengguna.edit', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                                <!-- Tombol Hapus -->
                                                <form action="{{ route('pengguna.destroy', $data->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                   

                
                </div>
              </div>

              <!-- Scripts: Bootstrap Bundle (with Popper) -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js                  integrity="sha384-w76A2z02tPqdjT+e4F8IL1iNnFsAka5x5Jr74D7zNylE+9z1FMvxhZRm7FZ8V8bF"              crossorigin="anonymous"></script>
    </body>
  </html>
