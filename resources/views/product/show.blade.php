<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produk | {{ $title }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
        <div class="card-header bg-success">
        Detail Produk
        </div> <div class="card-body">
                <ul class="list-group list-group-flush"> 
                    <li class="list-group-item" align="middle">
                    <img width="100px" height="100px" src="{{asset('storage/'.$product->gambar)}}" align="middle"></li>
                    <li class="list-group-item"><b>Nama Produk: </b>{{$product->nama}}</li> 
                    <li class="list-group-item"><b>Deskripsi Produk: </b>{{$product->deskripsi}}</li> 
                     </ul>
        </div>
            <a class="btn btn-success mt-3" href="{{ route('product.index') }}">Kembali</a>
        </div>
    </div>
</div>
</body>
</html>