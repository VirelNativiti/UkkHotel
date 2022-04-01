<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- JavaScript Bundle with Popper  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
    
    <!-- My style -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- My js -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <title>Document</title>
    <script type="text/javascript">
        {
            window.print()
        }
    </script>
</head>
<body>
  <div class="container" style="margin-left: 0;">
    <img src="{{ asset('adminlte/img/logo.jpg') }}" style="width: 100px; height: 100px;">
  </div>
<h1 class="ml-3 text-center">Great Hotel</h1>
<h5 class="ml-3 text-center">Room Reservation</h5>
    <table class="table-bordered table ml-4">
              <tr>
                <th>Guest Name</th>
                <th>Check in</th>
                <th>Check out</th>
                <th>Room type</th>
                <th>Number of rooms</th>
              </tr>
              <tr>
                <td><div>{{ $pemesanan[0]->nama_tamu }}</div></td>
                <td><div>{{ $pemesanan[0]->tgl_checkin }}</div</td>
                <td><div>{{ $pemesanan[0]->tgl_checkout }}</div></td>
                <td><div>{{ $pemesanan[0]->tipe_kamar}}</div></td>
                <td><div>{{ $pemesanan[0]->jumlah_kamar }}</div></td>
              </tr>
            </table>
    </body>
</html>