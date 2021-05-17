<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?= base_url() ?>/plugins/fontawesome-free/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title><?= $title; ?></title>
</head>

<body style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-danger bg-gradient">
        <div class="container">
            <a class="navbar-brand " href="#"><img style="width: 32%;" src="/img/LOGOCMw.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mr-auto mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link px-4" aria-current="page" href="/simulasi">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/simulasi">Simulasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" aria-current="page" href="/simulasi">About</a>
                    </li>
                </ul>
                <div class="d-flex ml-2">
                    <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#exampleModalLogin">
                        Login
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <!-- modal login form -->
    <div class="modal fade" id="exampleModalLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header bg-success text-white">Login Form</div>
                                    <div class="card-body">
                                        <label for="username">Username</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                            <input type="text" class="form-control" placeholder="Entry Your Username" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <label for="password">Password</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                            <input type="password" class="form-control" placeholder="Entry Your Password" aria-label="Password" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a href="<?= base_url() ?>/dashboard" target="_blank"><button type="button" class="btn btn-success">Login</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->

    <?= $this->renderSection('content'); ?>