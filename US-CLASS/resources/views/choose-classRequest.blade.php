<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>US CLASS</title>
</head>
<body style="background-image: url('body.jpg');">

    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary-subtle">
        <div class="container-fluid">
          <a class="navbar-brand text-primary-emphasis fw-semibold fs-2 font-monospace" href="#">US CLASS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">227006051@student.unsil.ac.id</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
                <a class="navbar-brand text-primary-emphasis fs-2 font-monospace" href="#">Universitas Siliwangi</a>
              <button class="btn btn-outline-success" type="submit">Logo</button>
            </form>
          </div>
        </div>
      </nav>

    <form action="{{url('sentRequest', $kelas->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container mt-5 mb-2 w-50 rounded shadow" style="border: 1px solid black">
            <div class="mt-3 mb-1 row w-75">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama Pengaju :</label>
                <div class="col-sm-10">
                  <input type="text"  class="form-control" id="staticEmail" placeholder="Nama pengaju" name="pengaju">
                </div>
            </div>
            <div class="mt-3 mb-1 row">
                <label for="staticEmail" class="col-sm-2 col-form-label w-25">Pemakaian Pada Waktu :</label>
                <div class="col-sm-10 w-75">
                  <input type="date" name="tanggalm" class="m-2">
                  <input type="time" name="waktum" class="me-4">
                  <label for="staticEmail" class="col-sm-2 col-form-label w-25">Sampai Dengan :</label>
                  <input type="time" name="waktus">
                </div>

                
            </div>
            <div class="mt-3 mb-1 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Digunakan Untuk :</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="staticEmail" placeholder="Misal : Perkuliahan" name="usedFor">
                </div>
                <div class="container text-end mt-2 mb-2 mx-1">
                    <input type="submit" class="btn btn-primary w-25">
                </div>

            </div>
        </div>
    </form>

    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>