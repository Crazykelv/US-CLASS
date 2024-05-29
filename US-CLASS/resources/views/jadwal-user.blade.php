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
                <a class="nav-link active" aria-current="page" href="{{url('/')}}">227006051@student.unsil.ac.id</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('jadwalU')}}">Jadwal</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
                <a class="navbar-brand text-primary-emphasis fs-2 font-monospace" href="#">Universitas Siliwangi</a>
              <button class="btn btn-outline-success" type="submit">Logo</button>
            </form>
          </div>
        </div>
      </nav>

      <div class="container text-center mt-5 pb-3 pt-5">
        <h1>Jadwal Kelas</h1>
      </div>

            <div class="row mt-2 mb-2 justify-content-center border shadow w-75 mx-auto text-center">
                <h3 class="mt-3">Senin</h3>
                @if ($senin->isEmpty())
                    <div class="col-2 btn btn-success fs-5 p-4 m-2" style="width:8em">
                        <span class="fs-4"> Kosong </span>
                    </div>
                @else
                @foreach ($senin as $item)
                        <a href="{{url('', $item->id)}}" class="col-2 btn btn-success fs-5 p-4 m-2" style="width:8em">
                            {{$item->namaRuangan}} <br>
                            <span style="font-size: 12px"> {{$item->waktu}} </span>
                        </a>
                @endforeach
                @endif
            </div>
            <div class="row mt-2 mb-2 justify-content-center border shadow w-75 mx-auto text-center">
                <h3 class="mt-3">Selasa</h3>
                @if ($selasa->isEmpty())
                    <div class="col-2 btn btn-success fs-5 p-4 m-2" style="width:8em">
                        <span class="fs-4"> Kosong </span>
                    </div>
                @else
                @foreach ($selasa as $item)
                        <a href="{{url('', $item->id)}}" class="col-2 btn btn-success fs-5 p-4 m-2" style="width:8em">
                            {{$item->namaRuangan}} <br>
                            <span style="font-size: 12px"> {{$item->waktu}} </span>
                        </a>
                @endforeach
                @endif
            </div>
            <div class="row mt-2 mb-2 justify-content-center border shadow w-75 mx-auto text-center">
                <h3 class="mt-3">Rabu</h3>
                @if ($rabu->isEmpty())
                    <div class="col-2 btn btn-success fs-5 p-4 m-2" style="width:8em">
                        <span class="fs-4"> Kosong </span>
                    </div>
                @else
                @foreach ($rabu as $item)
                        <a href="{{url('', $item->id)}}" class="col-2 btn btn-success fs-5 p-4 m-2" style="width:8em">
                            {{$item->namaRuangan}} <br>
                            <span style="font-size: 12px"> {{$item->waktu}} </span>
                        </a>
                @endforeach
                @endif
            </div>
            <div class="row mt-2 mb-2 justify-content-center border shadow w-75 mx-auto text-center">
                <h3 class="mt-3">Kamis</h3>
                @if ($kamis->isEmpty())
                    <div class="col-2 btn btn-success fs-5 p-4 m-2" style="width:8em">
                        <span class="fs-4"> Kosong </span>
                    </div>
                @else
                @foreach ($kamis as $item)
                        <a href="{{url('', $item->id)}}" class="col-2 btn btn-success fs-5 p-4 m-2" style="width:8em">
                            {{$item->namaRuangan}} <br>
                            <span style="font-size: 12px"> {{$item->waktu}} </span>
                        </a>
                @endforeach
                @endif
            </div>
            <div class="row mt-2 mb-2 justify-content-center border shadow w-75 mx-auto text-center">
                <h3 class="mt-3">Jumat</h3>
                @if ($jumat->isEmpty())
                    <div class="col-2 btn btn-success fs-5 p-4 m-2" style="width:8em">
                        <span class="fs-4"> Kosong </span>
                    </div>
                @else
                @foreach ($jumat as $item)
                        <a href="{{url('', $item->id)}}" class="col-2 btn btn-success fs-5 p-4 m-2" style="width:8em">
                            {{$item->namaRuangan}} <br>
                            <span style="font-size: 12px"> {{$item->waktu}} </span>
                        </a>
                @endforeach
                @endif
            </div>
            <div class="row mt-2 mb-2 justify-content-center border shadow w-75 mx-auto text-center">
                <h3 class="mt-3">Sabtu</h3>
                @if ($sabtu->isEmpty())
                    <div class="col-2 btn btn-success fs-5 p-4 m-2" style="width:8em">
                        <span class="fs-4"> Kosong </span>
                    </div>
                @else
                @foreach ($sabtu as $item)
                        <a href="{{url('', $item->id)}}" class="col-2 btn btn-success fs-5 p-4 m-2" style="width:8em">
                            {{$item->namaRuangan}} <br>
                            <span class="fs-4"> Kosong </span>
                        </a>
                @endforeach
                @endif
            </div>
            <div class="row mt-2 mb-2 justify-content-center border shadow w-75 mx-auto text-center">
                <h3 class="mt-3">Minggu</h3>
                @if ($minggu->isEmpty())
                    <div class="col-2 btn btn-success fs-5 p-4 m-2" style="width:8em">
                        <span class="fs-4"> Kosong </span>
                    </div>
                @else
                @foreach ($minggu as $item)
                        <a href="{{url('', $item->id)}}" class="col-2 btn btn-success fs-5 p-4 m-2" style="width:8em">
                            {{$item->namaRuangan}} <br>
                            <span style="font-size: 12px"> {{$item->waktu}} </span>
                        </a>
                @endforeach
                @endif
            </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>