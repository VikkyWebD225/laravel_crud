<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    

    <div class="card text-center">
        <div class="card-header">
          Student Registration
        </div>
        <div class="card-body">
         
            <form  method="post" action="{{route('created')}}" enctype="multipart/form-data">
            @csrf
            @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

@if(session()->has('error'))
<div class="alert alert-danger">
    {{ session()->get('error') }}
</div>
@endif
                {{-- @if(session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif  --}}
              
                

                Image : <input type="file"  name="image"><br/><br/>
                Enter the First name : <input type="text" name="first" ><br/><br/>
                Enter the Last name : <input type="text" name="second"><br/><br/>
                DOB : <input type="text" name="dob"><br/><br/>
                Mobileno : <input type="number" name="mobile"><br/><br/>
                Gender : <input type="text" name="gender"><br/><br/>

                <input type="submit" name="submit" value="Submit" class="btn btn-primary">

            </form>

           

          
        </div>
       
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>