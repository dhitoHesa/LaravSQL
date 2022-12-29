<head>
    {{-- Styles --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Profiles</title>
</head>
<body class="bg-primary">
    <div class="container">
        <ul class="mt-4 p-4">
            @foreach ($val as $val)
                <li class="card mb-3"  style="width: 25rem">
                    <div class="card-body">
                        <p class="mb-0"><b>Nama:</b> {{$val['nama']}}</p>
                        <p class="mb-0"><b>Jurusan:</b> {{$val['jurusan']}}</p>
                        <p><b>Sekolah:</b> {{$val['sekolah']}}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>