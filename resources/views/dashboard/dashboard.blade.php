<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="{{ asset('/')}}assets/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
  
</head>
  <body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container ">
        <a class="navbar-brand fs-4 fw-bold d-flex me-auto" href="#">LARAVEL DEBBY</a>
          <div class="navbar-nav">
            <div class="profile d-flex">
              <a class="nav-link active d-flex" href="#"><i class="fas fa-user-circle fa-lg me-2 d-flex align-items-center"></i>Username</a>
            </div>
          </div>
        </div>
      </div>
    </nav>
    {{-- end navbar --}}
{{-- contect --}}
<div class="mt-5">
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-row ">
                <h2 class="d-flex me-auto">Data User</h2> 
                <button type="button" class="btn btn-sm btn-success fs-6 p1">
                 <span><a href="{{ Route('user.create')}}" style="color: #fff; text-decoration: none;"><i class="fas fa-user-plus me-2"></i>Add User</a></span>
                </button> 
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id</th>
                        <th scope="col">Username</th>
                        {{-- <th scope="col">Password</th> --}}
                        <th scope="col">Email</th>
                        
                      </tr>
                    </thead>    
                    <tbody>
                      @foreach ($data_user as $row)
                        <tr>
                          <th>{{ $loop -> iteration }}</th>
                          <td>{{ $row['id'] }}</td>
                          <td>{{ $row ['username'] }}</td>
                          {{-- <td>{{ $row ['password'] }}</td> --}}
                          <td>{{ $row ['email'] }}</td>
                          
                          <td class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-warning" type="button">
                              <span ><a href="{{ Route('user.edit', $row['id']) }}" style="color: #fff; text-decoration: none;"><i class="fas fa-solid fa-user-pen  me-2"></i>Edit</a></span>
                            </button>
                            <button class="btn btn-danger" type="button">
                              <span><a href="{{ Route('user.delete', $row['id']) }}" style="color: #fff; text-decoration: none;" onclick="return confirm('Apakah yakin  menghapus data?')"><i class="fa-solid fa-trash-can me-2"></i>Hapus</a></span>
                            </button>
                        </td>                        
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
          </div>
    </div>
</div>
{{-- end-contect --}}
    <script src="{{ asset('/')}}assets/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>