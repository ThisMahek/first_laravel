<html>

<head>
  <title>Admin Login</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

          
  <div class="container-fluid">
    <div class="row"
  
      style="background:url('{{url('admin/img/bg2.jpg')}}') min-height:720px;padding-top:180px;padding-bottom:100px;">
      <div class="col-sm-6">
        <div class="row" style="min-height:300px;">
          <div class="col-sm-1">

          </div>
         
          <div class="col-sm-10" style="background-color:rgba(0,0,0,0.5);padding:20px 0px;">
         
            <p class="text-center"><img src="{{url('admin/img/logo3.png')}}" height="100px" />
            </p>
            <form action="{{url('ProcessLoginAdmin')}}" method="post">
              @csrf
            <div class="row">
              <div class="col-sm-2"></div>
              <div class="col-sm-8">
        
                  <input type="email" name="email" placeholder="Admin Id" class="form-control" />
                  <span style="color:white">@error('email')
                    {{$message}}
                    @enderror</span>
                  <br />
                 <x-input  type="password" name="password" lable="please enter password"/>
                 <x-input  type="password" name="confirmpassword" lable="please enter password"/>
                  <input type="submit" value="Login" class="btn btn-primary btn-block" /><br />
               
              </div>
              </form>
              <div class="col-sm-2"></div>
            </div>


          </div>
          <div class="col-sm-1"></div>


        </div>
      </div>
      <div class="col-sm-6 text-center" style="padding-top:60px;">
        <p style="font-weight:bold;font-size:50px;">Admin Login</p>
        <hr />
        <h1>Test</h1>
      </div>

    </div>
  </div>
</body>

</html>
