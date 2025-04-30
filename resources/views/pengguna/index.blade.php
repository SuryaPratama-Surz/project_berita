<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>USER</title>
</head>
<body>

    @include('layouts.kerangka.navbar')

    <div class="container fw-bold text-break">
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

    <div class="container mt-5">
    <div class="card-body ms-5">
        <div class="col">
          <div class="table-responsive">
              <table class="table">
                  <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col" class="text-center">Action</th>
                      </tr>
                  </thead>
                  @php $no = 1; @endphp
                  @foreach ($pengguna as $data)
                  <tbody>
                    <tr>
                      <th scope="row">{{ $no++ }}</th>
                      <td>{{ $data->name }}</td>
                      <td>{{ $data->email }}</td>


                      <td class="text-center col-4">
                        <form action="{{ route('pengguna.destroy', $data->id) }}" method="POST" onsubmit="return confirm('Anda ingin menghapus data tersebut?');">
                          <a href="{{ route('pengguna.edit', $data->id) }}" class="btn btn-sm btn-primary">Edit</a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
              </table>
                <div class="ms-2 mt-3">
                <a href="{{ route('pengguna.create') }}" class="btn btn-sm btn-success">Add</a>
                </div>
          </div>
          <!-- /.table-responsive -->
      </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>