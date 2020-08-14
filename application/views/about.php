
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title><?php echo $title;?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <style>
        html,
body {
  height: 100%;
  /* background-color :; */
}

body {
  display: -ms-flexbox;
  display: -webkit-box;
  display: flex;
  -ms-flex-align: center;
  -ms-flex-pack: center;
  -webkit-box-align: center;
  align-items: center;
  -webkit-box-pack: center;
  justify-content: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.card{
  width: 500px;
  margin-top:60px;
}
.mb-4 {
  width: 150px;
  height:150px;
}
    </style>

  </head>

  <body class="text-center" style="background-color:aliceblue">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="<?php echo site_url('dashboard/home')?>">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo site_url('dashboard/login')?>">Login <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('dashboard/reggister');?>">Reggister</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('dashboard/about')?>">About</a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    

    <div class="card">
  <div class="card-body">
  <form class="form-signin">
      <img class="mb-4" src="https://www.brandcrowd.com/gallery/brands/pictures/picture15304055508719.png" alt="" width="72" height="72">
      <!-- <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1> -->
      <label for="inputEmail" class="sr-only">Username</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
      <br>
      <label for="inputPassword" class="sr-only">Total Berat</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Total Berat" required>
      <div class="checkbox mb-3">
      </div>
       <label for="inputEmail" class="sr-only">jenis pakaian</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Jenis Pakaian" required autofocus>
      <br>
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Simpan</button>
    </form>
  </div>
</div>
  </body>
</html>
