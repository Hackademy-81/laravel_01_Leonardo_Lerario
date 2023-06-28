<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

</head>

<body>


    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Clash Royal shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/prodotti">Prodotti</a>
                    <li class="nav-item">
                        <a class="nav-link" href="/squadrone">Squadrone</a>
                    </li>
                    </li>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">I nostri prodotti</h1>
            </div>
            @foreach ($products as $prodotto)
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{$prodotto["img"]}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$prodotto["name"]}}</h5>
                          <p class="card-text">{{$prodotto["descrizione"]}}</p>
                        </div>
                      </div>
                </div>
            @endforeach
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
