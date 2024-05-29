<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>US CLASS</title>
</head>
<body style="background-image: url('body.jpg');">

  <nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary-subtle">
    <div class="container-fluid">
      <a class="navbar-brand text-primary-emphasis fw-semibold fs-2 font-monospace" href="{{url('/')}}">US CLASS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/')}}">227006051@student.unsil.ac.id</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('jadwalU')}}">Jadwal</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
            <a class="navbar-brand text-primary-emphasis fs-2 font-monospace" href="#">Universitas Siliwangi</a>
            <img src="{{asset('body/unsil.png')}}" class="" style="width: 55px">
        </form>
      </div>
    </div>
  </nav>

    <div class="container text-center mt-5">
        <h1 class="fs-1"> Halaman Request </h1>
    </div>
    <div class="container text-center mt-3">
        <span>Silakan pilih kelas yang akan diajukan untuk dipinjam</span>
    </div>
    <div style="border: 2px solid rgb(133, 203, 212)" class="container text-center mt-2 rounded">
        <div style="border: 2px solid rgb(133, 203, 212)" class="container text-center mt-1 pt-5 pb-5 mb-1 rounded">
            <div class="row mt-2 mb-2 justify-content-center">
                @foreach ($kelas as $item)
                        <a href="{{url('classRequest', $item->id)}}" class="col-2 btn btn-success fs-5 p-4 m-2">
                            {{$item->namaRuangan}}
                        </a>
                @endforeach
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>