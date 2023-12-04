<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     @include('layouts.navbar')
    <div class="container">
    <table class="table">
      <thead>
        <br>
        <tr>
            <th scope="col" class="table-danger">Tanggal Penjualan</th>
            <th scope="col" class="table-danger">Pelanggan Id</th>
            <th scope="col" class="table-danger">Total Harga</th>
            <th scope="col" class="table-danger">Opsi</th>
        </tr>
      </thead>
      @foreach($penjualan as $penjualan)
        <tbody>
        <tr>
            <td class="table-info">{{$penjualan->TanggalPenjualan}}</td>
            <td class="table-info">{{$penjualan->PelangganID}}</td>
            <td class="table-info">{{$penjualan->TotalHarga}}</td>
          <td>
            <a type="button"class="btn btn-secondary" href={{url("/detail/$penjualan->PenjualanID")}}>Detail</a>
          </td
            </form>
          </td>
        </tbody>
      @endforeach
    </table>
  </div>
</body>
</html>
