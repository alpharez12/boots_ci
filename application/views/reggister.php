<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/boostsrap.min.css') ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Register</title>
</head>

<body style="background-color: aliceblue;">
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


<div class="container" style="margin-left:30px;margin-top:80px;">
        <div class="row justify-content-center">
            <div class="col-lg-7">

                <div class="card p-4 shadow-lg border-0 mt-4">
                    
                    <h4 class="py-3 text-center">REGISTER</h4>
                    <form action="<?php echo site_url('dashboard/simpan_data') ?>" method="POST" enctype="multipart/form-data">
                        <div class="from-group row">
                            <div class="col-md-6">
                                <input name="First_Name" type="text" placeholder="First Name" class="form-control rounded-pill my-2" style="font-size : 0.8rem">
                            </div>
                            <div class="col-md-6">
                                <input name="Last_Name" type="text" placeholder="Last Name" class="form-control rounded-pill my-2" style="font-size : 0.8rem">
                            </div>
                        </div>
                        <div class="from-group">
                            <input name="Email" type="text" placeholder="Email" class="form-control rounded-pill my-2" style="font-size : 0.8rem">
                        </div>
                        <div class="from-group row">
                            <div class="col-md-6">
                                <input name="Password" type="password" placeholder="Password" class="form-control rounded-pill my-2" style="font-size : 0.8rem">
                            </div>
                            <div class="col-md-6">
                                <input name="Re-Password" type="password" placeholder="Re-Password" class="form-control rounded-pill my-2" style="font-size : 0.8rem">
                            </div>
                        </div>
                        <div class="from-group">
                            <div class="custom-control custom-checkbox small">
                                <input type="checkbox" id="CustomCheckbox1" class="custom-control-input">
                                <label for="CustomCheckbox1" class="custom-control-label my-2"> I have read
                                    agreement and
                                    privacy policy</label>
                            </div>
                        </div>
                        <div class="from-group">
                            <a href="<?= base_url('dashboard/login');?>" class="btn btn-primary rounded-pill btn-block my-3" style="font-size : 0.8rem">
                                Register </a>
                        </div>
                    </form>

                    <p class="my-3 text-center small"><a href="<?= base_url('dashboard/login');?>">Login Here</a></p>
                </div>

            </div>
        </div>
    </div>
</body>

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&display=swap">

</html>