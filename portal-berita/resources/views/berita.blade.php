<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Berita</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Portal Berita</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($beritas as $berita)
            <div class="p-4 border rounded">
                <h2 class="text-lg font-bold mb-2">{{ $berita->judul }}</h2>
                <p>{{ $berita->konten }}</p>
            </div>
            @endforeach
        </div>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
