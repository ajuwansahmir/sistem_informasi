<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>Data Kasus</title>

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

        /* BUTTON */

        .btn-tambah{
            background:#2166ff;
            color:white;
            border:none;
            padding:10px 18px;
            border-radius:10px;
            font-size:14px;
            font-weight:500;
        }

        .btn-tambah:hover{
            background:#1447e6;
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

        /* BADGE */

        .badge-dbd{
            background:#ffeaea;
            color:#ff3b3b;
            padding:8px 18px;
            border-radius:20px;
            font-size:14px;
            font-weight:bold;
        }

        .badge-malaria{
            background:#e9fff0;
            color:#1ea84b;
            padding:8px 18px;
            border-radius:20px;
            font-size:14px;
            font-weight:bold;
        }

        /* ACTION BUTTON */

        .aksi{
            display:flex;
            gap:8px;
        }

        .btn-edit{
            width:38px;
            height:38px;
            border:none;
            border-radius:10px;
            background:#ffc107;
            color:white;
        }

        .btn-delete{
            width:38px;
            height:38px;
            border:none;
            border-radius:10px;
            background:#dc3545;
            color:white;
            text-decoration:none;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .btn-edit:hover,
        .btn-delete:hover{
            opacity:0.9;
        }

    </style>

</head>

<body>

    <!-- SIDEBAR -->

    <div class="sidebar">

        <div class="logo">

            <img
            src="{{ asset('assets/img/ternate.png') }}"
            width="55">

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

            <a href="/data-kasus" class="active">
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

        <div class="header">

            <div class="title">
                Data Kasus
            </div>

            <button
            class="btn-tambah"
            data-bs-toggle="modal"
            data-bs-target="#tambahModal">

                + Tambah Data

            </button>

        </div>

        <!-- TABLE -->

        <div class="card-table">

            <table class="table">

                <thead>

                    <tr>

                        <th>No</th>
                        <th>Kecamatan</th>
                        <th>DBD</th>
                        <th>Malaria</th>
                        <th>Aksi</th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($kasus as $item)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>

                        <td>
                            {{ $item->nama_kecamatan }}
                        </td>

                        <td>

                            <span class="badge-dbd">

                                {{ $item->dbd ?? 0 }}

                            </span>

                        </td>

                        <td>

                            <span class="badge-malaria">

                                {{ $item->malaria ?? 0 }}

                            </span>

                        </td>

                        <td>

                            <div class="aksi">

                                <button
                                class="btn-edit"
                                data-bs-toggle="modal"
                                data-bs-target="#edit{{ $item->id_kecamatan }}">

                                    <i class="fa fa-pen"></i>

                                </button>

                                <a
                                href="/hapus-kasus/{{ $item->id_kecamatan }}"
                                class="btn-delete">

                                    <i class="fa fa-trash"></i>

                                </a>

                            </div>

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>





    <!-- MODAL TAMBAH -->

    <div class="modal fade"
    id="tambahModal">

        <div class="modal-dialog">

            <div class="modal-content">

                <form
                action="/tambah-kasus"
                method="POST">

                    @csrf

                    <div class="modal-header">

                        <h5 class="modal-title">

                            Tambah Data Kasus

                        </h5>

                        <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal">

                        </button>

                    </div>

                    <div class="modal-body">

                        <select
                        name="id_kecamatan"
                        class="form-control mb-3"
                        required>

                            <option value="">
                                Pilih Kecamatan
                            </option>

                            @foreach(DB::table('kecamatan')->get() as $kec)

                            <option
                            value="{{ $kec->id_kecamatan }}">

                                {{ $kec->nama_kecamatan }}

                            </option>

                            @endforeach

                        </select>

                        <input
                        type="number"
                        name="dbd"
                        class="form-control mb-3"
                        placeholder="Jumlah DBD"
                        required>

                        <input
                        type="number"
                        name="malaria"
                        class="form-control"
                        placeholder="Jumlah Malaria"
                        required>

                    </div>

                    <div class="modal-footer">

                        <button
                        type="submit"
                        class="btn btn-primary">

                            Simpan

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>





    <!-- MODAL EDIT -->

    @foreach($kasus as $item)

    <div class="modal fade"
    id="edit{{ $item->id_kecamatan }}">

        <div class="modal-dialog">

            <div class="modal-content">

                <form
                action="/edit-kasus/{{ $item->id_kecamatan }}"
                method="POST">

                    @csrf

                    <div class="modal-header">

                        <h5 class="modal-title">

                            Edit Data Kasus

                        </h5>

                        <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal">

                        </button>

                    </div>

                    <div class="modal-body">

                        <input
                        type="text"
                        class="form-control mb-3"
                        value="{{ $item->nama_kecamatan }}"
                        readonly>

                        <input
                        type="number"
                        name="dbd"
                        class="form-control mb-3"
                        value="{{ $item->dbd ?? 0 }}"
                        required>

                        <input
                        type="number"
                        name="malaria"
                        class="form-control"
                        value="{{ $item->malaria ?? 0 }}"
                        required>

                    </div>

                    <div class="modal-footer">

                        <button
                        type="submit"
                        class="btn btn-warning">

                            Update

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

    @endforeach





    <!-- Bootstrap JS -->

    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>