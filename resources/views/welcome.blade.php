<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Laravel UTS UAS</title>

    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>

    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family:Arial,sans-serif;
    }

    body{
        background:#f3f3f3;
    }

    /* ================= SIDEBAR ================= */

    .sidebar{
        width:240px;
        height:100vh;
        background:#111;
        color:white;
        position:fixed;
        left:0;
        top:0;
    }

    .profile{
        text-align:center;
        padding:30px 15px;
        border-bottom:1px solid rgba(255,255,255,.2);
    }

   .profile img{
    width:100px;
    height:100px;
    border-radius:50%;
    object-fit:cover;
    border:3px solid #b48a3d;
    margin-bottom:15px;
}

    .profile h3{
        font-family:'Cinzel', serif;
        color:#b48a3d;
        margin-bottom:10px;
    }

    .profile p{
    font-family:'Cinzel', serif;
    font-size:16px;
    line-height:30px;
    color:white;
    letter-spacing:1px;
}

    .menu{
        margin-top:30px;
    }

    .menu a{
        display:block;
        padding:18px 25px;
        color:white;
        text-decoration:none;
        transition:.3s;
        font-size:16px;
        font-family:'Cinzel', serif;

    }

    .menu a:hover{
        background:#b48a3d;
    }

    /* ================= MAIN ================= */

    .main{
        margin-left:240px;
        padding:30px;
    }

    /* Banner */

    .banner{
        height:270px;
        background:#111;
        border-radius:10px;
        position:relative;
        overflow:hidden;
    }

    .overlay{
        width:100%;
        height:100%;
        background:rgba(0,0,0,.55);

        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
        color:white;
    }

    .overlay h1{
    font-family:'Cinzel', serif;
    font-size:50px;
    font-weight:600;
    letter-spacing:10px;
    text-transform:uppercase;
    color:#b48a3d;
    text-shadow:2px 2px 6px rgba(0,0,0,0.5);
}

.overlay p{
    font-family:'Cinzel', serif;
    font-size:18px;
    letter-spacing:5px;
    margin-top:12px;
    color:white;
}

    /* Header */

    .header{

        background:white;

        margin-top:25px;

        padding:25px;

        border-radius:10px;

        box-shadow:0 5px 15px rgba(0,0,0,.1);

    }

    .header h1{

        margin-bottom:10px;
        font-family:'Cinzel', serif;
        color:#222;

    }

    .header p{

        color:#666;

    }

    /* Card */

    .cards{

        display:flex;

        gap:30px;

        margin-top:30px;

        flex-wrap:wrap;

    }

    .card{

        width:300px;

        background:white;

        padding:30px;

        border-radius:10px;

        text-align:center;

        box-shadow:0 5px 15px rgba(0,0,0,.1);

        transition:.3s;

    }

    .card:hover{

        transform:translateY(-8px);

    }

    .card h2{

        font-family:'Cinzel', serif;
        margin-bottom:15px;
        
        color:#222;

    }

    .card p{

        color:#666;

        margin-bottom:20px;

    }

    .btn{

        display:inline-block;

        text-decoration:none;

        color:white;

        background:#111;

        padding:12px 28px;

        border-radius:5px;

        transition:.3s;

    }

    .btn:hover{

        background:#b48a3d;

    }

    </style>

</head>

<body>

<!-- Sidebar -->

<div class="sidebar">

    <div class="profile">

       <img src="{{ asset('images/profile.jpeg') }}" alt="Foto Profil">

        <h3>Profil Mahasiswa</h3>

        <p>
            Nama : Tika Daiyati <br>
            NPM : 1412240089 <br>
            Kelas : B / 2024
        </p>

    </div>

    <div class="menu">

        <a href="/uts">📘 UTS</a>

        <a href="/uas">📗 UAS</a>

    </div>

</div>

<!-- Main -->

<div class="main">

    <div class="banner">

        <div class="overlay">

            <h1>PROJECT UAS PEMROGRAMAN WEB</h1>

            <p>Teknik Informatika</p>

        </div>

    </div>

    <div class="header">

        <h1>Selamat Datang</h1>

        <p>Dashboard Laravel Project UTS & UAS</p>

    </div>

    <div class="cards">

        <div class="card">

            <h2>UTS</h2>

            <p>Halaman Project UTS</p>

            <a href="/uts" class="btn">Buka</a>

        </div>

        <div class="card">

            <h2>UAS</h2>

            <p>Halaman Project UAS</p>

            <a href="/uas" class="btn">Buka</a>

        </div>

    </div>

</div>

</body>
</html>