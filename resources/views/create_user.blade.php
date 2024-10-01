<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<style>
    body{
       background-color: #D2E0FB;
    }

    .btn-custom {
        background-color: #7C93C3;
        color: white;
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    .btn-custom:hover {
        background-color: #536493;
        border-color: #004085;
        color: white;
    }
    
</style>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4" style="width: 30rem;">
            <h2 class="text-center mb-4">Form Create User</h2>
            <form action="{{ route('user.store') }}" method="POST"> 
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama:</label>
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan Nama">
                    @foreach($errors->get('nama') as $msg)
                        <p class="text-danger">Nama Harus Diisi</p>
                    @endforeach     
                </div>
                <div class="mb-3">
                    <label for="npm" class="form-label">NPM:</label>
                    <input type="text" id="npm" name="npm" class="form-control" placeholder="Masukkan NPM">
                    @foreach($errors->get('npm') as $msg)
                        <p class="text-danger">NPM Harus Diisi</p>
                    @endforeach 
                </div>
                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas:</label>
                    <select name="kelas_id" id="kelas_id" class="form-select" >
                        <option value="" disabled selected>Pilih Kelas</option>
                        @foreach($kelas as $kelasItem)
                        <option value="{{$kelasItem->id}}">{{$kelasItem->nama_kelas}}</option>
                        @endforeach
                    </select>
                    @foreach($errors->get('kelas_id') as $msg)
                        <p class="text-danger">Kelas Harus Dipilih</p>
                    @endforeach                 
                </div>
                <div class="text-center">
                    <input type="submit" class="btn btn-custom" value="Submit">
                </div>
            </form>
        </div>
    </div>

    <!-- Link to Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
