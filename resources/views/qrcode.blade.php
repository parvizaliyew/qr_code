<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Article</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body>

    <div class="container mt-4">

       @foreach ($articles as $item)
        <div class="card">
            <div class="card-body">
                {!! QrCode::size(300)->generate("https://myhoteltest.site/article/?t=" . $item->token) !!}
            </div>
        </div>
        @endforeach



    </div>
    
</body>
</html>
