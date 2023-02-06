<html>
    <head>
        <title>Data nilai siswa</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{$nama}}</h1>
        <br>
        @foreach($nilai as $val)
            <div class="alert alert-info d-inline-block">
                {{$val}}
            </div>
        @endforeach
        </div>
        <div class="container text-center mt-3 pt-3 bg-white">
            <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{$nama}}</h1>
            <br>
            @foreach($nilai as $val)
                @if (($val >= 0) and ($val < 50))
                <div class="alert alert-success d-inline-block">
                    {{$val}}
                </div>
                @endif
            @endforeach    
        </div>
</body>
</html>