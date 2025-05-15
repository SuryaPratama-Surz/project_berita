<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit kategori</title>
    <style>
        /* Tambahkan styling untuk sidebar */
        .sidebar {
            position: fixed;
            top: 66px;
            left: 0;
            width: 250px;
            height: 100%;
            background-color: #343a40;
            color: white;
            padding-top: 20px;
        }
        .sidebar a {
            color: white;
            padding: 10px 15px;
            display: block;
            text-decoration: none;
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

    @include('layouts.kerangka.navbar')
    @include('layouts.kerangka.sidebar')
    

    <!-- Main content -->
    <div class="main-content">
        <div class="container mt-5">
            <h2 class="fw-bold">Edit Artikel</h2>
            
        
            <form action="{{ route('peminjaman.update' , $pinjam->id) }}" method="POST" enctype="multipart/form-data" class="forms-sample">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="exampleInputEmail3">Nama Peminjam</label>
                    <input type="text" class="form-control @error('nama_peminjam') is-invalid @enderror" name="nama_peminjam"
                      value="{{ $pinjam->nama_peminjam }}" placeholder="Masukan Nama Peminjam" id="putih" style="color: #000; background-color: #f5f5f5;">
                    @error('nama_peminjam')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail3">Jumlah</label>
                    <input type="number" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah"
                      value="{{ $pinjam->jumlah }}" placeholder="Masukan Jumlah" id="putih" style="color: #000; background-color: #f5f5f5;">
                    @error('jumlah')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail3">Tanggal Peminjam</label>
                    <input type="date" class="form-control @error('tglpinjam') is-invalid @enderror" name="tglpinjam"
                      value="{{ $pinjam->tglpinjam }}" placeholder="Masukan Tanggal" id="putih" style="color: #000; background-color: #f5f5f5;">
                    @error('tglpinjam')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
               </div>

               <div class="form-group">
                <label for="exampleInputEmail3">Tanggal Kembali</label>
                <input type="date" class="form-control @error('tglkembali') is-invalid @enderror" name="tglkembali"
                  value="{{ $pinjam->tglkembali }}" placeholder="Masukan Tanggal" id="putih" style="color: #000; background-color: #f5f5f5;">
                @error('tglkembali')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
               </div>

               <div class="form-group">
                <label for="exampleInputPassword4">Status</label>
                <select name="status" class="form-control" id="" value="{{ $pinjam->status }}"
                    style="color: #000; background-color: #f5f5f5;">
                    <option value="Sedang Dipinjam">Sedang Dipinjam</option>
                    <option value="Sudah Dikembalikan">Sudah Dikembalikan</option>
                </select>
            </div>

        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
