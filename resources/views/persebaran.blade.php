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

        /* NAVBAR */

        .navbar-custom{
            background:#071b52;
            padding:15px 30px;
        }

        .navbar-brand{
            color:white;
            font-weight:bold;
            font-size:20px;
            text-decoration:none;
        }

        .navbar-brand:hover{
            color:white;
        }

        .nav-link{
            color:white !important;
            margin-left:20px;
            text-decoration:none;
            font-weight:500;
        }

        .nav-link:hover{
            color:#cfd8ff !important;
        }

        .navbar-toggler{
            border:none;
        }

        .navbar-toggler:focus{
            box-shadow:none;
        }

        .navbar-toggler-icon{
            filter: brightness(0) invert(1);
        }

        /* CONTENT */

        .content{
            padding:35px;
        }

        .title{
            font-size:40px;
            font-weight:bold;
            margin-bottom:25px;
        }

        /* BUTTON */

        .btn-map{
            border:none;
            padding:12px 22px;
            border-radius:12px;
            background:white;
            margin-right:10px;
            margin-bottom:15px;
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
            padding:25px;
            box-shadow:0 2px 10px rgba(0,0,0,0.05);
        }

        .map-img{
            width:100%;
            border-radius:15px;
        }

        .map-title{
            font-size:24px;
            font-weight:bold;
            margin-bottom:20px;
        }

        .map-desc{
            color:#666;
            margin-top:18px;
            line-height:28px;
            font-size:16px;
        }

    </style>

</head>

<body>

    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg navbar-custom">

        <div class="container-fluid">

            <a class="navbar-brand" href="/">

                SISTEM MONITORING DBD & MALARIA

            </a>

            <button class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse"
            id="navbarNav">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">

                        <a class="nav-link"
                        href="/">

                            Dashboard

                        </a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link fw-bold"
                        href="/persebaran">

                            Peta Persebaran

                        </a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link"
                        href="/informasi">

                            Informasi

                        </a>

                    </li>

                </ul>

            </div>

        </div>

    </nav>

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

        <!-- CARD -->

        <div class="map-card">

            <div class="map-title">

                Visualisasi Persebaran Penyakit

            </div>

            <!-- DBD -->

            <div id="dbd">

                <img
                src="{{ asset('assets/img/dbd.png') }}"
                class="map-img">

                <div class="map-desc">

                    Peta persebaran DBD menunjukkan
                    wilayah dengan jumlah kasus tertinggi
                    berdasarkan kecamatan di Pulau Ternate.

                </div>

            </div>

            <!-- MALARIA -->

            <div id="malaria"
            style="display:none;">

                <img
                src="{{ asset('assets/img/malaria.png') }}"
                class="map-img">

                <div class="map-desc">

                    Peta persebaran malaria menunjukkan
                    wilayah dengan tingkat penyebaran
                    malaria berdasarkan data kasus
                    pada setiap kecamatan.

                </div>

            </div>

            <!-- RISIKO -->

            <div id="risiko"
            style="display:none;">

                <img
                src="{{ asset('assets/img/risiko.png') }}"
                class="map-img">

                <div class="map-desc">

                    Peta tingkat risiko digunakan untuk
                    melihat wilayah dengan kategori
                    risiko rendah, sedang, dan tinggi
                    terhadap persebaran penyakit.

                </div>

            </div>

        </div>

    </div>

    <!-- SCRIPT -->

    <script>

        function showMap(id, button){

            // SEMBUNYIKAN SEMUA

            document.getElementById('dbd')
            .style.display='none';

            document.getElementById('malaria')
            .style.display='none';

            document.getElementById('risiko')
            .style.display='none';

            // TAMPILKAN YANG DIPILIH

            document.getElementById(id)
            .style.display='block';

            // HAPUS ACTIVE BUTTON

            let buttons =
            document.querySelectorAll('.btn-map');

            buttons.forEach(btn => {

                btn.classList.remove('active-map');

            });

            // ACTIVE BUTTON

            button.classList.add('active-map');

        }

    </script>

    <!-- Bootstrap JS -->

    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>