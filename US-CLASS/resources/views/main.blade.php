<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>US CLASS</title>
</head>
<body>
  <div class="imgbody">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand text-primary-emphasis fw-semibold fs-2 font-monospace" href="{{url('operator')}}">US CLASS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link btn" aria-current="page" href="{{url('/')}}">227006051@student.unsil.ac.id</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{url('jadwalU')}}">Jadwal</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
              <a class="navbar-brand text-primary-emphasis fs-2 font-monospace" href="#">Universitas Siliwangi</a>
            <img src="body/unsil.png" class="" style="width: 55px">
          </form>
        </div>
      </div>
    </nav>

  <div class="container text-center mt-4">
      <h1 class="fs-1">Live Overview</h1>
  </div>

  <div style="border: 2px solid rgb(133, 203, 212)" class="container text-center mt-5 rounded">
      <div style="border: 2px solid rgb(133, 203, 212)" class="container text-center mt-1 pt-5 pb-5 mb-1 rounded">
          <div class="row mt-2 mb-2 justify-content-center">
              @foreach ($kelas as $item)
                  @if ($item->ketersediaan == 0)
                      <a href="{{url('select', $item->id)}}" class="col-2 btn btn-success fs-5 p-4 m-2">
                          {{$item->namaRuangan}}
                      </a>
                      @else
                      <a href="{{url('select', $item->id)}}" class="col-2 btn btn-danger fs-5 p-4 m-2">
                          {{$item->namaRuangan}}
                      </a>
                  @endif
              @endforeach
          </div>
      </div>
  </div>

  <div class="container text-end mb-5 mt-3">
      <a href="{{url('userRequest')}}" class="btn btn-primary">
          Pengajuan Peminjaman Kelas
      </a>
  </div>

  @foreach ($select as $select)
  <div class="container mt-5 mb-5 w-50 rounded shadow" style="border: 1px solid black ">
      <div class="mt-3 mb-1 row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Nama Kelas :</label>
          <div class="col-sm-10">
            <span type="text" readonly class="form-control" id="staticEmail" value="email@example.com">{{$select->namaRuangan}}</span>
          </div>
      </div>
      <div class="mt-3 mb-1 row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Fasilitas :</label>
          <div class="col-sm-10">
            <span type="text" readonly class="form-control" id="staticEmail" value="email@example.com">{{$select->fasilitas}}</span>
          </div>
      </div>
      <div class="mt-3 mb-1 row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Ketersediaan :</label>
          <div class="col-sm-10">
              @if ($select->ketersediaan == 0)
                  <span type="text" readonly class="form-control text-success" id="staticEmail" value="email@example.com">Tersedia</span>
              @else
                  <span type="text" readonly class="form-control text-danger" id="staticEmail" value="email@example.com">Tidak Tersedia</span>
              @endif
          </div>
      </div>
      <div class="mt-3 mb-1 row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Digunakan Oleh :</label>
          <div class="col-sm-10">
            <span type="text" readonly class="form-control" id="staticEmail" value="email@example.com">{{$select->usedBy}}</span>
          </div>
      </div>
      <div class="mt-3 mb-1 row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Digunakan Pada</label>
          <div class="col-sm-10">
            <span type="text" readonly class="form-control" id="staticEmail" value="email@example.com">{{$select->lokasi}}</span>
          </div>
      </div>
      <div class="mt-3 mb-1 row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Digunakan Untuk :</label>
          <div class="col-sm-10">
            <span type="text" readonly class="form-control" id="staticEmail" value="email@example.com">{{$select->usedFor}}</span>
          </div>
      </div>
  </div>
  @endforeach
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>