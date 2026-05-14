<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>Login Admin</title>

    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
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
    margin: 0;
    padding: 0;

    height:100vh;


    background:
    linear-gradient(
    rgba(0,0,0,0.3),
    rgba(0,0,0,0.4)
    ),

    url('{{ asset("assets/img/ternate_2.jpg") }}');

    background-size:cover;
    background-position:center;
    background-repeat: no-repeat;

    display:flex;
    justify-content:center;
    align-items:center;

}

/* CONTAINER */

.container-login{

    width:90%;
    max-width:1400px;

    display:flex;
    justify-content:space-between;
    align-items:center;

}

/* LEFT */

.left-content{

    width:50%;
    color:white;

}

.logo{

    width:110px;
    margin-bottom:25px;

}

/* TITLE */

.title{

    font-size:34px;
    font-weight:700;
    line-height:55px;
    margin-bottom:25px;

    text-transform:uppercase;

}

/* SUBTITLE */

.subtitle{

    font-size:20px;
    font-weight:400;

}

/* LOGIN BOX */

.login-box{

    width:420px;

    background:white;

    padding:45px;

    border-radius:20px;

    box-shadow:0 5px 20px rgba(0,0,0,0.2);

}

.login-title{

    text-align:center;

    font-size:28px;
    font-weight:bold;

    margin-bottom:35px;

}

/* INPUT */

.form-control{

    height:55px;
    font-size:18px;

}

.input-group-text{

    background:white;
    font-size:20px;

}

/* BUTTON */

.btn-login{

    width:100%;
    height:55px;

    border:none;
    border-radius:12px;

    background:#1456ff;

    color:white;

    font-size:20px;
    font-weight:600;

    margin-top:10px;

}

/* RESPONSIVE */

@media(max-width:992px){

    .container-login{

        flex-direction:column;
        text-align:center;
        gap:40px;

    }

    .left-content{

        width:100%;

    }

    .title{

        font-size:28px;
        line-height:45px;

    }

}

</style>
</head>

<body>

    <div class="container-login">

        <!-- LEFT -->

        <div class="left-content">

            <!-- LOGO DEFAULT -->

            <img
src="{{ asset('assets/img/ternate.png') }}"
class="logo">

            <div class="title">

                SISTEM INFORMASI<br>

                MONITORING PERSEBARAN<br>

                PENYAKIT DBD DAN MALARIA<br>

                DI PULAU TERNATE

            </div>

            <div class="subtitle">

                Masuk untuk mengakses dashboard admin

            </div>

        </div>

        <!-- LOGIN -->

        <div class="login-box">

            <div class="login-title">
                Login Admin
            </div>

            @if(session('error'))

                <div class="alert alert-danger">

                    {{ session('error') }}

                </div>

            @endif

            <form action="/login" method="POST">

                @csrf

                <!-- USERNAME -->

                <div class="input-group mb-4">

                    <span class="input-group-text">

                        <i class="fa fa-user"></i>

                    </span>

                    <input type="text"
                    class="form-control"
                    name="username"
                    placeholder="Username">

                </div>

                <!-- PASSWORD -->

                <div class="input-group mb-4">

                    <span class="input-group-text">

                        <i class="fa fa-lock"></i>

                    </span>

                    <input type="password"
                    class="form-control"
                    name="password"
                    placeholder="Password">

                </div>

                <button class="btn-login">
                    Login
                </button>

            </form>

        </div>

    </div>

</body>

</html>