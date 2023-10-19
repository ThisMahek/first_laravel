<!DOCTYPE html>
<html lang="en">



<head>
  
  <title>Test Admin Penal</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{url('admin/css/app.min.css')}}">
  <link rel="stylesheet" href="{{url('admin/bundles/jqvmap/dist/jqvmap.min.css')}}">
  <link rel="stylesheet" href="{{url('admin/bundles/weather-icon/css/weather-icons.min.css')}}">
  <link rel="stylesheet" href="{{url('admin/bundles/weather-icon/css/weather-icons-wind.min.css')}}">
  <link rel="stylesheet" href="{{url('admin/bundles/summernote/summernote-bs4.css')}}">
  <!-- T CSS -->
  <link rel="stylesheet" href="{{url('admin/css/style.css')}}">
  <link rel="stylesheet" href="{{url('admin/css/components.css')}}">
  
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{url('admin/css/custom.css')}}">
  <link rel='shortcut icon' type='image/x-icon' href="{{url('admin/img/logo3.png')}}" />
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
  <!-- <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
 
</head>

<script>
  
  
        function preview(image){
                    var filePath = image.value;
                    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
                    if(!allowedExtensions.exec(filePath)){
                        alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
                        fileInput.value = '';
                        return false;
                    }else{
                        //Image preview
                        if (image.files && image.files[0]) {
            				var reader = new FileReader();
            				reader.onload = function (e){
            					$('.image')
            						.attr('src', e.target.result)
            						.width(200)
            						.height(120);
            				};
            				reader.readAsDataURL(image.files[0]);
            		 }
                    }
           
    	}
    </script>
<style>
  .checked {
  color: orange;
}
.feather 
{
    color: white!important;
 
}
.bg-purple {
    background-color: orange !important;
    color: #fff;
}
.btn-primary{
  background-color: navy!important;

}
.regular-price {
    color: #666!important;
    font-size: 11px;
    font-weight: 500;
    line-height: 15px;
    text-decoration: line-through;
    font-size:14px;
}
</style>
<body>
<div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar" style="background-color:navy">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
          <h5 style="color:white"> Welcome to Admin penal</h5>
          </ul>
        </div> 
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="{{url('admin/img/user.png')}}"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello Admin</div>
              <a href="{{url('userprofile')}}" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
              <div class="dropdown-divider"></div>
              <a href="auth-login.html"class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  function logout(urll) {
    event.preventDefault();
    const url = urll
    swal({
      title: 'Are you sure?',
      text: 'You want to log out!',
      icon: 'warning',
      buttons: ["Cancel", "Yes!"],
    }).then(function (value) {
      if (value) {
        window.location.href = url;
      }
    });
  }  
</script>
      
     