<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>Informasi Penyakit</title>

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

        /* HERO */

        .hero{
            background:linear-gradient(
            rgba(7,27,82,0.8),
            rgba(7,27,82,0.8)),
            url('https://images.unsplash.com/photo-1584036561566-baf8f5f1b144');

            background-size:cover;
            background-position:center;

            color:white;
            padding:70px 30px;
            text-align:center;
        }

        .hero h1{
            font-size:45px;
            font-weight:bold;
        }

        .hero p{
            font-size:18px;
            margin-top:15px;
        }

        /* CONTENT */

        .content{
            padding:40px 30px;
        }

        /* CARD */

        .info-card{
            background:white;
            border-radius:20px;
            padding:25px;
            box-shadow:0 2px 10px rgba(0,0,0,0.05);
            height:100%;
        }

        .info-icon{
            width:70px;
            height:70px;
            border-radius:18px;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:30px;
            margin-bottom:20px;
        }

        .bg-red{
            background:#ffeaea;
            color:#ff3b3b;
        }

        .bg-green{
            background:#e9fff0;
            color:#1ea84b;
        }

        .bg-blue{
            background:#eaf1ff;
            color:#2166ff;
        }

        .card-title{
            font-size:24px;
            font-weight:bold;
            margin-bottom:15px;
        }

        .card-text{
            color:#666;
            line-height:30px;
        }

        /* LEGEND */

        .legend{
            margin-top:40px;
            background:white;
            padding:25px;
            border-radius:20px;
            box-shadow:0 2px 10px rgba(0,0,0,0.05);
        }

        .legend-item{
            display:flex;
            align-items:center;
            margin-bottom:15px;
        }

        .legend-color{
            width:25px;
            height:25px;
            border-radius:6px;
            margin-right:15px;
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

            <div>

                <a class="nav-link d-inline"
                href="/">

                    Dashboard

                </a>

                <a class="nav-link d-inline"
                href="/persebaran">

                    Peta Persebaran

                </a>

                <a class="nav-link d-inline fw-bold"
                href="/informasi">

                    Informasi

                </a>

            </div>

        </div>

    </nav>

    <!-- HERO -->

    <div class="hero">

        <h1>
            Informasi Penyakit
        </h1>

        <p>
            Edukasi mengenai penyakit DBD dan Malaria
            serta tingkat risiko persebarannya
            di Pulau Ternate
        </p>

    </div>

    <!-- CONTENT -->

    <div class="content">

        <div class="row">

            <!-- DBD -->

            <div class="col-md-4 mb-4">

                <div class="info-card">

                    <div class="info-icon bg-red">

                        <i class="fa fa-virus"></i>

                    </div>

                    <div class="card-title">

                        Demam Berdarah (DBD)

                    </div>

                    <div class="card-text">

                        DBD merupakan penyakit yang
                        disebabkan oleh virus dengue
                        dan ditularkan melalui gigitan
                        nyamuk Aedes aegypti.

                        <br><br>

                        Gejala umum:
                        demam tinggi, sakit kepala,
                        nyeri otot, dan ruam kulit.

                    </div>

                </div>

            </div>

            <!-- MALARIA -->

            <div class="col-md-4 mb-4">

                <div class="info-card">

                    <div class="info-icon bg-green">

                        <i class="fa fa-bug"></i>

                    </div>

                    <div class="card-title">

                        Penyakit Malaria

                    </div>

                    <div class="card-text">

                        Malaria merupakan penyakit
                        akibat parasit Plasmodium
                        yang ditularkan melalui
                        gigitan nyamuk Anopheles.

                        <br><br>

                        Gejala umum:
                        demam, menggigil,
                        sakit kepala, dan lemas.

                    </div>

                </div>

            </div>

            <!-- SISTEM -->

            <div class="col-md-4 mb-4">

                <div class="info-card">

                    <div class="info-icon bg-blue">

                        <i class="fa fa-map-location-dot"></i>

                    </div>

                    <div class="card-title">

                        Tentang Sistem

                    </div>

                    <div class="card-text">

                        Sistem informasi ini dibuat
                        untuk membantu masyarakat
                        dalam mengetahui persebaran
                        penyakit DBD dan Malaria
                        berdasarkan wilayah kecamatan
                        di Pulau Ternate.

                    </div>

                </div>

            </div>

        </div>

        <!-- LEGEND -->

        <div class="legend">

            <h3 class="mb-4">
                Keterangan Tingkat Risiko
            </h3>

            <div class="legend-item">

                <div class="legend-color"
                style="background:#62ff5e;"></div>

                Risiko Rendah

            </div>

            <div class="legend-item">

                <div class="legend-color"
                style="background:#ffe14d;"></div>

                Risiko Sedang

            </div>

            <div class="legend-item">

                <div class="legend-color"
                style="background:#ff5c5c;"></div>

                Risiko Tinggi

            </div>

        </div>

    </div>

</body>

</html>