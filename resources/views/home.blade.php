@extends('/komponen/master')

@section("content")
<!DOCTYPE html>
<html>
  <head>
      <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  </head>
  <style>
            body{background-color:#A63F0C}
        </style>
  <body>
    <div class="card" style="width:auto; height:250px">
                <img src="{{asset('/img/Ruang Baca.jpg')}}" class="card-img img-fluid img-rounded h-100" style="object-fit: cover;height:auto">
                <div class="card-img-overlay">
                    <h5 class="card-title text-center align-middle text-white m-auto pt-5" style="font-size:50px;text-shadow: 1px 3px 8px grey">@yield('judulheader')</h5>
                </div>
        </div>
    <div class="container">
        <h1><p class="text-warning">Welcome to Ruang Baca Kita</p></h1>
        <hr/>
        <h5><p class="bg-warning text-white">Membaca bagi pikiran seperti olahraga bagi tubuh.

        Cintai aku dengan membaca, aku akan mencintaimu dengan menulis.

        Membaca tanpa berpikir adalah nol besar.

        Kesalahan terbesar dalam belajar adalah kebanyakan membaca minim tindakan.

        Ini bukan tentang masalah membaca, tetapi tentang cara berpikir.

        Tidak perlu kata untuk menungkapkan rasa. Karena senja, cukup membaca mata.

        Aku mengikuti perkembanganmu. Membaca semua keluh kesahmu.</p></h5>
    </div>
  </body>
</html>
@endsection