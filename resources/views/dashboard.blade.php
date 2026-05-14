<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Admin</title>

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
            height:55px;
            object-fit:contain;
        }

        .logo h5{
            color:white;
            font-size:14px;
            line-height:20px;
            margin:0;
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
            transition:0.3s;
            font-size:15px;
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
            padding:30px;
        }

        .title{
            font-size:32px;
            font-weight:bold;
            margin-bottom:30px;
        }

        /* CARD */

        .card-stat{
            border:none;
            border-radius:18px;
            background:white;
            box-shadow:0 2px 10px rgba(0,0,0,0.05);
            padding:20px;
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

        .small-text{
            font-size:14px;
            color:gray;
            margin-bottom:5px;
        }

        .number{
            font-size:36px;
            font-weight:bold;
            margin:0;
        }

        .desc{
            color:#666;
            font-size:15px;
        }

        .quick-menu{
            margin-top:30px;
        }

        .quick-btn{
            display:flex;
            align-items:center;
            gap:10px;
            padding:15px 20px;
            border-radius:15px;
            background:white;
            text-decoration:none;
            color:#222;
            box-shadow:0 2px 10px rgba(0,0,0,0.05);
            transition:0.3s;
        }

        .quick-btn:hover{
            transform:translateY(-3px);
            color:#1447e6;
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

            <a href="/dashboard" class="active">
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

            <a href="/peta-persebaran">
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
            Dashboard Admin
        </div>

        <!-- CARD -->

        <div class="row">

            <!-- DBD -->

            <div class="col-md-4 mb-4">

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

            <div class="col-md-4 mb-4">

                <div class="card-stat">

                    <div class="card-flex">

                        <div>

                            <div class="small-text">
                                Total Malaria
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

            <div class="col-md-4 mb-4">

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
                                Wilayah
                            </div>

                        </div>

                        <div class="icon-card bg-blue">
                            <i class="fa fa-map"></i>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- QUICK MENU -->

        <div class="quick-menu">

            <div class="row">

                <div class="col-md-6 mb-4">

                    <a href="/data-kasus" class="quick-btn">

                        <i class="fa fa-database"></i>

                        Kelola Data Kasus

                    </a>

                </div>

              

            </div>

        </div>

    </div>

</body>

</html>