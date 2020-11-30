@extends('/komponen/master2')

<!DOCTYPE html>
<html>
  <head>
      <title>Ruang Baca Pras Dan Rafi</title>
  </head>
  <style>
            body{background-color:#A63F0C}
        </style>
  <body>
  @section('konten')
    <div class="container">
          <div class="card" style="width:auto; height:250px">
            <img src="img/Library.jpg" alt="Ruang Baca Internetmu Idupin dong!!!!!" class="card-img img-fluid img-rounded h-100" style="object-fit: cover;height:auto">
            <div class="card-img-overlay">
            <h5 class="card-title text-center align-middle text-white m-auto pt-5" style="font-size:50px;text-shadow: 1px 3px 8px grey"></h5>
            </div>
          </div>
          <h1><p class="text-dark">Welcome to Ruang Baca Pras dan Rafi</p></h1>
        <hr/>
        <h5><p class="font-weight-bold">“Some books leave us free and some books make us free.” — Ralph Waldo Emerson</p></h5>
    </div>
  @endsection
  </body>
</html>