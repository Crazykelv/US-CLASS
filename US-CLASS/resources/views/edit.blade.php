<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Buat Kelas</title>
</head>
<body>
    
    <form action="{{url('addEditedKelas', $kelas->id)}}" method="POST" enctype="multipart/form-data" class="container w-25 mt-5 p-5 border shadow">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Digunakan Pada</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="lokasi" value="{{$kelas->lokasi}}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Ketersediaan</label>
            <select type="text" class="form-control" id="exampleFormControlInput1" name="ketersediaan">
                <option>Pilih</option>
                <option value="1">Dipakai</option>
                <option value="0">Tidak Dipakai</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Digunakan Oleh</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="usedBy" value="{{$kelas->usedBy}}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Digunakan Untuk</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="usedFor" value="{{$kelas->usedFor}}">
        </div>
        <input type="submit">
        <input type="reset">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>