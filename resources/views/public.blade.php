<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistem Monitoring DBD & Malaria</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

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
        }

        .navbar-brand:hover{
            color:white;
        }

        .nav-link{
            color:white !important;
            margin-left:20px;
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
            padding:80px 30px;
            text-align:center;
        }

        .hero h1{
            font-size:48px;
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

        .card-stat{
            border:none;
            border-radius:18px;
            background:white;
            box-shadow:0 2px 10px rgba(0,0,0,0.05);
            padding:20px;
            height:100%;
        }

        .card-flex{
            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        .icon-card{
            width:60px;
            height:60px;
            border-radius:15px;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:25px;
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

        .bg-purple{
            background:#f4eaff;
            color:#8a3ffc;
        }

        .small-text{
            font-size:14px;
            color:gray;
            margin-bottom:5px;
        }

        .number{
            font-size:38px;
            font-weight:bold;
            margin:0;
        }

        .desc{
            color:#666;
            font-size:15px;
        }

        .chart-img{
            width:100%;
            margin-top:15px;
        }

        .section-title{
            font-size:28px;
            font-weight:bold;
            margin-bottom:25px;
        }

    </style>

</head>

<body>

    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg navbar-custom">

        <div class="container-fluid">

            <a class="navbar-brand" href="#">
                SISTEM MONITORING DBD & MALARIA
            </a>

            <div>

                <a class="nav-link d-inline" href="#">
                    Dashboard
                </a>

                <a class="nav-link d-inline" href="/persebaran">
                    Peta Persebaran
                </a>

                <a class="nav-link d-inline" href="/informasi">
                    Informasi
                </a>

            </div>

        </div>

    </nav>

    <!-- HERO -->

    <div class="hero">

        <h1>
            Monitoring Persebaran DBD & Malaria
        </h1>

        <p>
            Sistem informasi geografis untuk memantau
            persebaran penyakit DBD dan Malaria di Pulau Ternate
        </p>

    </div>

    <!-- CONTENT -->

    <div class="content">

        <div class="section-title">
            Statistik Kasus
        </div>

        <div class="row">

            <!-- DBD -->

            <div class="col-md-3 mb-4">

                <div class="card-stat">

                    <div class="card-flex">

                        <div>

                            <div class="small-text">
                                Total Kasus DBD
                            </div>

                            <h1 class="number">
                                {{ $dbd }}
                            </h1>

                            <div class="desc">
                                Kasus
                            </div>

                        </div>

                        <div class="icon-card bg-red">
                            <i class="fa fa-virus"></i>
                        </div>

                    </div>

                </div>

            </div>

            <!-- MALARIA -->

            <div class="col-md-3 mb-4">

                <div class="card-stat">

                    <div class="card-flex">

                        <div>

                            <div class="small-text">
                                Total Kasus Malaria
                            </div>

                            <h1 class="number">
                                {{ $malaria }}
                            </h1>

                            <div class="desc">
                                Kasus
                            </div>

                        </div>

                        <div class="icon-card bg-green">
                            <i class="fa fa-bug"></i>
                        </div>

                    </div>

                </div>

            </div>

            <!-- KECAMATAN -->

            <div class="col-md-3 mb-4">

                <div class="card-stat">

                    <div class="card-flex">

                        <div>

                            <div class="small-text">
                                Total Kecamatan
                            </div>

                            <h1 class="number">
                                {{ $kecamatan }}
                            </h1>

                            <div class="desc">
                                Kecamatan
                            </div>

                        </div>

                        <div class="icon-card bg-blue">
                            <i class="fa fa-map"></i>
                        </div>

                    </div>

                </div>

            </div>

            

        </div>

        <!-- GRAFIK -->

        <div class="row">

            <div class="col-md-7 mb-4">

                <div class="card-stat">

                    <h5 class="mb-3">
                        Grafik Kasus Berdasarkan Kecamatan
                    </h5>

                    <img
                    class="chart-img"
                    src="https://quickchart.io/chart?c={
                    type:'bar',
                    data:{
                    labels:[
                    'Ternate Utara',
                    'Ternate Tengah',
                    'Ternate Selatan',
                    'Ternate Barat',
                    'Pulau Ternate'
                    ],
                    datasets:[
                    {
                    label:'DBD',
                    backgroundColor:'red',
                    data:[28,60,54,5,1]
                    },
                    {
                    label:'Malaria',
                    backgroundColor:'green',
                    data:[2,7,1,0,0]
                    }
                    ]
                    }
                    }">

                </div>

            </div>

            <div class="col-md-5 mb-4">

        <div class="card-stat">

            <h5 class="mb-4">
                Distribusi Kasus DBD
            </h5>

            <img
            class="chart-img"
            src="https://quickchart.io/chart?c={
            type:'doughnut',
            data:{
            labels:[
            'Ternate Utara',
            'Ternate Tengah',
            'Ternate Selatan',
            'Ternate Barat',
            'Pulau Ternate'
            ],
            datasets:[{
            data:[28,60,54,5,1]
            }]
            },
            options:{
plugins:{
datalabels:{
color:'white',
font:{
size:18,
weight:'bold'
}
}
}
}
            }">
                    
        </div>

    </div>

        </div>

        <!-- INFORMASI -->

        <div class="card-stat">

            <h5 class="mb-3">
                Informasi Sistem
            </h5>

            <p class="text-secondary mb-0">

                Sistem monitoring ini digunakan untuk
                menampilkan informasi persebaran penyakit
                DBD dan Malaria di Pulau Ternate berbasis
                Sistem Informasi Geografis (SIG). Data yang
                ditampilkan berasal dari hasil monitoring
                pada setiap kecamatan.

            </p>

        </div>

    </div>

</body>

</html>