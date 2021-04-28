<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="/js/jquery-3.6.0.min.js"></script>
    <title>Simulasi</title>
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
                        <a class="nav-link px-4" aria-current="page" href="/simulasi">HomeCoy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/simulasi">Simulasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" aria-current="page" href="/simulasi">About</a>
                    </li>
                </ul>
                <div class="d-flex ml-2">
                    <button class="btn btn-outline-light" type="submit"><a href="<?= base_url() ?>//dasboard/pembelian">Login</a></button>
                </div>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content'); ?>