
<link rel="stylesheet" type="text/css" href="/css/style.css">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
<script type="text/javascript" src="/js/app.js"></script>
<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>


<html>
    <head>
        <title>Pengajuan Replacement Class</title>
    </head>
    <body>
        
        <style>
            container {
                width: 100%;
                text-align: left;
            }
            row {
                width: 100%;
            }
        </style>
        <br>
        <div class="float">
        <img src="images/uph.png">
        </div>
        <div class = "float">
        <h3>
            Amelia Tanwijaya 
            03081200036
        </h3>
        </div>
        <hr>
        <table class="table table-hover container">
          <thead>
            <tr>
              <th scope="col">Transaksi_ID</th>
              <th scope="col">Product_ID</th>
              <th scope="col">Product_Nama</th>
              <th scope="col">Voucher_ID</th>
              <th scope="col">Voucher_Judul</th>
              <th scope="col">Voucher_Deskripsi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($query as $rpl)
            <tr>
              <th scope="row">{{$rpl->Transaksi_ID}}</th>
              <td>{{$rpl->Product_ID}}</td>
              <td>{{$rpl->Product_Nama}}</td>
              <td>{{$rpl->Voucher_ID}}</td>
              <td>{{$rpl->Voucher_Judul}}</td>
              <td>{{$rpl->Voucher_Deskripsi}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <a href="querypdf" class="btn btn-primary btn-lg disabled" role="button" aria-disabled="true">Cetak PDF</a>
    </body>
</html>