<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $this->renderSection("title") ?></title>

    <style>
        .text-left {
            text-align: left !important;
        }
        .gradient {
            background: linear-gradient(90deg, rgba(241,28,109,1) 0%, rgba(255,129,64,1) 100%);
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark gradient mb-3">
        <div class="container">
            <a class="navbar-brand" href="#">TaskApp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="/">Home</a>
                    <a class="nav-link" href="/tasks">Tasks</a>
                    <a class="nav-link" href="/tasks/new">New Task</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">

    

        <?php if(session()->has('warning')): ?>
            <div class="alert alert-warning">
                <?= session('warning') ?>
            </div>
        <?php endif; ?>

        <?php if(session()->has('info')): ?>
            <div class="alert alert-info">
                <?= session('info') ?>
            </div>
        <?php endif; ?>

        <?= $this->renderSection("content") ?>
    </div>
    
</body>
</html>