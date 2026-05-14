<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>Data Kecamatan</title>

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
            padding:25px;
        }

        .header{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:25px;
        }

        .title{
            font-size:32px;
            font-weight:bold;
        }

        .btn-tambah{
            background:#2166ff;
            color:white;
            border:none;
            padding:10px 18px;
            border-radius:10px;
            font-size:14px;
            font-weight:500;
        }

        /* CARD */

        .card-table{
            background:white;
            border-radius:20px;
            padding:25px;
            box-shadow:0 2px 10px rgba(0,0,0,0.05);
        }

        /* TABLE */

        table{
            width:100%;
            vertical-align:middle !important;
        }

        table th{
            font-size:15px;
            padding:15px;
            background:#f8f9fc;
        }

        table td{
            padding:15px;
            font-size:15px;
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

            <a href="/data-kecamatan" class="active">
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

        <div class="header">

            <div class="title">
                Data Kecamatan
            </div>

         

        </div>

        <!-- TABLE -->

        <div class="card-table">

            <table class="table">

                <thead>

                    <tr>
                        <th>No</th>
                        <th>Nama Kecamatan</th>
                        <th>Puskesmas</th>
                        <th>Jumlah Penduduk</th>
                    </tr>

                </thead>

                <tbody>

                    @foreach($kecamatan as $item)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>

                        <td>
                            {{ $item->nama_kecamatan }}
                        </td>

                        <td>

                            @if($item->nama_kecamatan == 'Ternate Selatan')
                                Kalumata, Gambesi

                            @elseif($item->nama_kecamatan == 'Ternate Tengah')
                                Bahari Berkesan, Kota, Kalumpang

                            @elseif($item->nama_kecamatan == 'Ternate Utara')
                                Siko

                            @elseif($item->nama_kecamatan == 'Pulau Ternate')
                                Jambula

                            @elseif($item->nama_kecamatan == 'Ternate Barat')
                                Sulamadaha
                            @endif

                        </td>

                        <td>

                            @if($item->nama_kecamatan == 'Ternate Selatan')
                                73.658

                            @elseif($item->nama_kecamatan == 'Ternate Tengah')
                                65.787

                            @elseif($item->nama_kecamatan == 'Ternate Utara')
                                38.190

                            @elseif($item->nama_kecamatan == 'Pulau Ternate')
                                9.119

                            @elseif($item->nama_kecamatan == 'Ternate Barat')
                                9.385
                            @endif

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</body>
</html>