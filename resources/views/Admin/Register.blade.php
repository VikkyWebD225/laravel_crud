<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registration User</title>
</head>

<body>

    <h1 align="center">Registration Panel</h1>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">Login</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

        </div>
    </nav>

    <div class="container">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        @if(session()->has('fail'))
            <div class="alert alert-danger">
                {{ session()->get('fail') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <div class="card" style="margin-top:30px">
                    <div class="card-header text-center">
                        Register Now
                    </div>
                    <div class="card-body">

                        <form method="post" action="{{route('register-User')}}">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>

                                <input type="text" name="email" value="{{ old('email') }}" required>
                                <span class="text-danger">@error('email'){{$message}}@enderror</span>
                                
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password" required>

                                <span class="text-danger">@error('password'){{$message}}@enderror</span>


                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Address</label>
                                <input type="text" name="address" required>

                                <span class="text-danger">@error('address'){{$message}}@enderror</span>


                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Phoneno</label>
                                <input type="number" name="phoneno" required>

                                <span class="text-danger">@error('phoneno'){{$message}}@enderror</span>


                            </div>






                        <center>
                        <button type="submit" class="btn btn-primary">Register</button>
                       <br/>
                       <a href="login">Allready user!! Login Here</a>
                        </center> 




                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>