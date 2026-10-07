<!DOCTYPE html>
<html>
<head>
    <litle>Home Laravel</title>
</head>
<body>

    <h1>Halo, {{ $nama }}!</h1>

    <h2>Mata Kuliah</h2>

    <ul>
        @foreach ($matakuliah as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>

</body>
</html>