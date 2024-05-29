<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Buat Kelas</title>
</head>
<body>
    
    <form action="{{url('addKelas')}}" method="POST" enctype="multipart/form-data" class="container">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Kelas</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="nama">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Lokasi Ruangan</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="lokasi">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Fasilitas</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="fasilitas">
        </div>
        <input type="submit">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>