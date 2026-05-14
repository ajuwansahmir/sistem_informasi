<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>Peta Persebaran</title>

    <!-- Bootstrap -->

    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet">

    <!-- Font Awesome -->

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:#f4f6fb;
        }

        /* SIDEBAR */

        .sidebar{
            width:230px;
            height:100vh;
            background:#071b52;
            position:fixed;
            left:0;
            top:0;
            padding:20px 15px;
        }

        .logo{
            display:flex;
            align-items:center;
            gap:10px;
            margin-bottom:30px;
        }

        .logo img{
            width:55px;
        }

        .logo h5{
            color:white;
            font-size:14px;
            line-height:20px;
        }

        .menu a{
            display:flex;
            align-items:center;
            gap:12px;
            color:white;
            text-decoration:none;
            padding:13px 15px;
            border-radius:12px;
            margin-bottom:10px;
        }

        .menu a:hover{
            background:#1447e6;
        }

        .menu .active{
            background:#1447e6;
        }

        /* CONTENT */

        .content{
            margin-left:230px;
            padding:25px;
        }

        .title{
            font-size:32px;
            font-weight:bold;
            margin-bottom:25px;
        }

        /* BUTTON */

        .btn-map{
            border:none;
            padding:12px 20px;
            border-radius:12px;
            background:white;
            margin-right:10px;
            font-weight:bold;
            box-shadow:0 2px 10px rgba(0,0,0,0.05);
            transition:0.3s;
        }

        .btn-map:hover{
            background:#1447e6;
            color:white;
        }

        .active-map{
            background:#1447e6;
            color:white;
        }

        /* CARD */

        .map-card{
            background:white;
            border-radius:20px;
            padding:20px;
            margin-top:25px;
            box-shadow:0 2px 10px rgba(0,0,0,0.05);
        }

        .map-img{
            width:100%;
            border-radius:15px;
        }

    </style>

</head>

<body>

    <!-- SIDEBAR -->

    <div class="sidebar">

        <div class="logo">

            <img src="{{ asset('assets/img/ternate.png') }}">

            <h5>
                SISTEM MONITORING<br>
                DBD & MALARIA
            </h5>

        </div>

        <div class="menu">

            <a href="/dashboard">
                <i class="fa fa-home"></i>
                Dashboard
            </a>

            <a href="/data-kasus">
                <i class="fa fa-database"></i>
                Data Kasus
            </a>

            <a href="/data-kecamatan">
                <i class="fa fa-map"></i>
                Data Kecamatan
            </a>

         

            <a href="/peta-persebaran" class="active">
                <i class="fa fa-map-location-dot"></i>
                Peta Persebaran
            </a>

            <a href="/logout">
                <i class="fa fa-right-from-bracket"></i>
                Logout
            </a>

        </div>

    </div>

    <!-- CONTENT -->

    <div class="content">

        <div class="title">
            Peta Persebaran Penyakit
        </div>

        <!-- BUTTON -->

        <div>

            <button
            class="btn-map active-map"
            onclick="showMap('dbd', this)">

                Persebaran DBD

            </button>

            <button
            class="btn-map"
            onclick="showMap('malaria', this)">

                Persebaran Malaria

            </button>

            <button
            class="btn-map"
            onclick="showMap('risiko', this)">

                Tingkat Risiko

            </button>

        </div>

        <!-- MAP CARD -->

        <div class="map-card">

            <!-- DBD -->

            <img
            id="dbd"
            class="map-img"
            src="{{ asset('assets/img/dbd.png') }}">

            <!-- MALARIA -->

            <img
            id="malaria"
            class="map-img"
            src="{{ asset('assets/img/malaria.png') }}"
            style="display:none;">

            <!-- RISIKO -->

            <img
            id="risiko"
            class="map-img"
            src="{{ asset('assets/img/risiko.png') }}"
            style="display:none;">

        </div>

    </div>

    <!-- SCRIPT -->

    <script>

        function showMap(id, button){

            // SEMBUNYIKAN SEMUA GAMBAR

            document.getElementById('dbd')
            .style.display='none';

            document.getElementById('malaria')
            .style.display='none';

            document.getElementById('risiko')
            .style.display='none';

            // TAMPILKAN GAMBAR DIPILIH

            document.getElementById(id)
            .style.display='block';

            // HAPUS ACTIVE SEMUA BUTTON

            let buttons =
            document.querySelectorAll('.btn-map');

            buttons.forEach(btn => {
                btn.classList.remove('active-map');
            });

            // ACTIVE BUTTON YANG DIPILIH

            button.classList.add('active-map');

        }

    </script>

</body>

</html>