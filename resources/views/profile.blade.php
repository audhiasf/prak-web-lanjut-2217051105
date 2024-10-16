
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Profile</title>
</head>
<style>
        body {
            background-color: #D2E0FB;
        }

        hr{
            color: #55679C;
            border-width: 2px; /* Remove default border */
            margin: 20px 0;
        }
        .profile-card {
            margin: 50px auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
        }
        .profile-img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 32px;
            margin-top: 10px;

        }
        .profile-info {
            text-align: center;
        }
        .profile-info h1 {
            font-size: 1.8rem;
            margin-bottom: 10px;
        }
        .profile-info p {
            font-size: 1.2rem;
            padding: 10px;
            border: 2px solid #8EACCD;
            border-radius: 20px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile-card text-center">
            <section class="jumbotron text-center">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col-2">
                        <a href="{{ url('/user') }}" style="text-decoration: none; color:#7C93C3;"><i class="bi bi-arrow-left-circle" style="font-size: 2.5rem;"></i></a>
                    </div>
                    <div class="col-8">
                        <h1 class="display-4 mb-3">Profile</h1>
                    </div>
                </div>
                <hr class="my-4">
            </div>
                
                @if ($user->foto)
                    <img src="{{ asset('assets/upload/img/'. $user->foto) }}" alt="Profile Image" class="profile-img img-fluid">
                @else
                    <img src="{{ asset('assets/img/profile.png') }}" alt="Default Profile Image" class="profile-img img-fluid">
                @endif

                <div class="profile-info">
                    <p class="lead">{{ $user->nama }}</p>
                    <p class="lead">{{$user->npm}}</p>
                    <p class="lead">{{ $user->nama_kelas ?? 'Kelas tidak ditemukan' }}</p>
                </div>
                
                <hr class="my-4">
                <a class="btn btn-sm " style="background-color: #7C93C3; color: white;" href="https://github.com/audhiasf" role="button">Github</a>
                <a class="btn btn-sm " style="background-color: #7C93C3; color: white;" href="https://www.instagram.com/audhiaaaaa" role="button">Instagram</a>

            </section>
        <div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>