<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    {{-- FOREACH --}}
    <div class="d-flex flex-row text-center justify-content-around m-5">
        @foreach ($productInfo as $info)
            <div class="card my-3">
                <div class="card-body">
                    <h2 class="card-title" style="font-size: 2vw">{{ $info['name'] }}</h2>
                    @if ($info['status'] == 'R') {

                    }

                    @endif
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
