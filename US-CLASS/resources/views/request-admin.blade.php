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
          <a class="navbar-brand text-primary-emphasis fw-semibold fs-2 font-monospace" href="{{url('operator')}}">US CLASS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('operator')}}">Admin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('jadwalA')}}">Jadwal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('requestList')}}">Request</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
                <a class="navbar-brand text-primary-emphasis fs-2 font-monospace" href="#">Universitas Siliwangi</a>
                <img src="{{asset('body/unsil.png')}}" class="" style="width: 55px">
            </form>
          </div>
        </div>
      </nav>

      <div class="container text-center mt-5 pb-3 pt-5">
        <h1>Daftar Pengajuan</h1>
      </div>

            <div class="row mt-2 mb-2 justify-content-center border shadow w-75 mx-auto">
                @foreach ($kelas as $item)
                        <a href="{{url('detailRequest', $item->id)}}" class="col-2 btn btn-success fs-5 p-2 m-2" style="width:7em">
                            {{$item->namaKelas}} <br>
                            <span style="font-size: 12px"> {{$item->waktu}} </span>
                        </a>
                @endforeach
            </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>