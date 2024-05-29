<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>US CLASS</title>
    <style>
        .centered {
            position: absolute;
            transition: opacity 0.5s ease-in-out;
        }

        #div2 {
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.5s ease-in-out, visibility 0s linear 0.5s;
        }

        #div2.show {
            opacity: 1;
            visibility: visible;
            transition: opacity 0.5s ease-in-out;
        }
    </style>
</head>
<body style="background-image: url('body.jpg');">

    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary-subtle">
        <div class="container-fluid">
          <a class="navbar-brand text-primary-emphasis fw-semibold fs-2 font-monospace" href="{{url('c1')}}">US CLASS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('c1Jadwal', $kelas->id)}}">Jadwal</a>
              </li>
              <li class="nav-item">
            </ul>
            <form class="d-flex" role="search">
                <a class="navbar-brand text-primary-emphasis fs-2 font-monospace" href="#">Universitas Siliwangi</a>
                <img src="{{asset('body/unsil.png')}}" style="width: 55px">
            </form>
          </div>
        </div>
      </nav>

    <div class="container mt-5 pt-5 m-5 p-5">
        <br><br>
    </div>

    <div id="welcome" class="container text-center w-75">
        <h1 class="">Welcome to US CLASS</h1>
    </div>

    <div id="div2" class="container mt-5 pt-2 text-center w-50">
        <h1 class="mb-5">Welcome to US CLASS</h1>
        <div class="row justify-content-center">
            <div class="col-6 rounded shadow p-5 me-5 mb-2 btn btn-success" style="width: 35%;">
                <a href="{{ url('confirmation', $kelas->id) }}" class="btn text-light fs-4" id="confirmButton">Konfirmasi Kelas</a>
            </div>
            <div class="col-6 rounded shadow p-5 ms-5 mb-2 btn btn-success" style="width: 35%">
                <a href="{{ url('c1Request', $kelas->id) }}" class="btn text-light fs-4">Pengajuan Kelas</a>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('welcome').addEventListener('click', function() {
            document.getElementById('welcome').style.opacity = '0';
            setTimeout(function() {
                document.getElementById('welcome').style.display = 'none';
                document.getElementById('div2').classList.add('show');
            }, 500);
        });

        document.getElementById('confirmButton').addEventListener('click', function(event) {
            event.preventDefault();
            alert('Konfirmasi kelas berhasil!');
            window.location.href = this.href; 
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
