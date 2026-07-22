<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maison Tika Imperial | Luxe Edition</title>
    <style>
        :root {
            --gold: #c9a227;
            --gold-bright: #f0d78c;
            --cream: #fbfaf7;
            --dark: #0d0d0d;
            --white: #ffffff;
            --transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Didot", "Playfair Display", serif;
        }

        body {
            background-color: var(--cream);
            color: #2b2115;
            overflow-x: hidden;
        }

        /* --- HEADER PRESTIGE --- */
        header {
            height: 45vh;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                        url('https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=1600');
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            border-bottom: 2px solid var(--gold);
        }

        header h1 {
            font-size: clamp(30px, 6vw, 60px);
            letter-spacing: 20px;
            color: var(--white);
            text-transform: uppercase;
            font-weight: 300;
            text-shadow: 0 10px 20px rgba(0,0,0,0.5);
        }

        header p {
            color: var(--gold);
            letter-spacing: 10px;
            font-size: 14px;
            margin-top: 20px;
            text-transform: uppercase;
        }

        /* --- NAVIGATION LOGIC --- */
        input[name="nav"] { display: none; }

        .main-container {
            display: flex;
            max-width: 1400px;
            margin: -80px auto 60px;
            position: relative;
            z-index: 100;
            padding: 0 30px;
        }

        /* --- SIDEBAR MENU --- */
        nav {
            width: 300px;
            background: var(--dark);
            height: fit-content;
            box-shadow: 25px 25px 50px rgba(0,0,0,0.15);
            padding: 50px 0;
            border: 1px solid rgba(201, 162, 39, 0.3);
            position: sticky;
            top: 20px;
        }

        nav label {
            display: block;
            padding: 20px 40px;
            color: #d8c9a3;
            text-transform: uppercase;
            letter-spacing: 4px;
            font-size: 12px;
            cursor: pointer;
            transition: var(--transition);
            position: relative;
            border-left: 2px solid transparent;
            margin-bottom: 5px;
        }

        nav label:hover {
            color: var(--white);
            background: rgba(201, 162, 39, 0.05);
            padding-left: 50px;
        }

        #tab-beranda:checked ~ .main-container label[for="tab-beranda"],
        #tab-profil:checked ~ .main-container label[for="tab-profil"],
        #tab-buku:checked ~ .main-container label[for="tab-buku"],
        #tab-fashion:checked ~ .main-container label[for="tab-fashion"],
        #tab-gaming:checked ~ .main-container label[for="tab-gaming"],
        #tab-kontak:checked ~ .main-container label[for="tab-kontak"] {
            background: linear-gradient(to right, rgba(201, 162, 39, 0.2), transparent);
            color: var(--gold-bright);
            border-left: 2px solid var(--gold);
            padding-left: 55px;
            font-weight: bold;
        }

        /* --- CONTENT AREA --- */
        .content-area {
            flex: 1;
            background: rgba(255, 255, 255, 0.98);
            margin-left: 50px;
            padding: 70px;
            box-shadow: 0 30px 60px rgba(0,0,0,0.05);
            border: 1px solid rgba(201, 162, 39, 0.1);
            min-height: 800px;
        }

        .tab-content {
            display: none;
            animation: slideUpFade 1s ease-out;
        }

        @keyframes slideUpFade {
            from { opacity: 0; transform: translateY(30px); filter: blur(5px); }
            to { opacity: 1; transform: translateY(0); filter: blur(0); }
        }

        #tab-beranda:checked ~ .main-container #isi-beranda,
        #tab-profil:checked ~ .main-container #isi-profil,
        #tab-buku:checked ~ .main-container #isi-buku,
        #tab-fashion:checked ~ .main-container #isi-fashion,
        #tab-gaming:checked ~ .main-container #isi-gaming,
        #tab-formulir:checked ~ .main-container #isi-formulir,
        #tab-kontak:checked ~ .main-container #isi-kontak {
            display: block;
        }

        /* --- COMPONENTS --- */
        h2 {
            font-size: 40px;
            text-transform: uppercase;
            letter-spacing: 8px;
            margin-bottom: 50px;
            color: var(--dark);
            font-weight: 300;
            text-align: center;
        }

        .banner-frame {
            border: 1px solid var(--gold);
            padding: 10px;
            margin-bottom: 40px;
            background: var(--white);
        }

        .banner-img {
            width: 100%;
            height: 500px;
            object-fit: cover;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .premium-card {
            background: var(--dark);
            padding: 40px 20px;
            color: white;
            text-align: center;
            border: 1px solid var(--gold);
            transition: var(--transition);
        }

        .premium-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(201, 162, 39, 0.2);
        }

        .premium-card img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            margin-bottom: 25px;
            border: 1px solid rgba(255,255,255,0.1);
        }

        .price-tag {
            color: var(--gold);
            font-size: 18px;
            font-weight: bold;
            margin-top: 15px;
            display: block;
            letter-spacing: 2px;
        }

        .info-box {
            padding: 40px;
            border: 1px solid #e8dfcf;
            margin-bottom: 40px;
            background: #fff;
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 900px) {
            .main-container { flex-direction: column; margin-top: 20px; }
            nav { width: 100%; margin-bottom: 30px; }
            .content-area { margin-left: 0; padding: 40px; }
        }

        #isi-formulir{
    background-color: #f4f4f4;
    padding: 30px;
    border-radius: 10px;
}

#isi-formulir .container{
    width: 700px;
    margin: 40px auto;
    background-color: white;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
}

#isi-formulir h2{
    text-align: center;
    margin-bottom: 20px;
}

#isi-formulir table{
    width: 100%;
}

#isi-formulir td{
    padding: 10px;
    vertical-align: top;
}

#isi-formulir input[type=text],
#isi-formulir input[type=date],
#isi-formulir textarea,
#isi-formulir select{
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

#isi-formulir textarea{
    resize: none;
}

#isi-formulir .radio{
    width: auto;
}

#isi-formulir input[type=radio]{
    width: auto !important;
    appearance: radio !important;
    -webkit-appearance: radio !important;
}
#isi-formulir .btn{
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    color: white;
}

#isi-formulir .submit{
    background-color: #007bff;
}

#isi-formulir .reset{
    background-color: #dc3545;
}

#isi-formulir input[type=radio]{
    width: auto;
    margin-right: 5px;
}
    </style>
</head>
<body>

    <header>
        <h1>MAISON TIKA</h1>
        <p>Imperial Lifestyle • Est. 2026</p>
    </header>

    <input type="radio" name="nav" id="tab-beranda" checked>
    <input type="radio" name="nav" id="tab-profil">
    <input type="radio" name="nav" id="tab-buku">
    <input type="radio" name="nav" id="tab-fashion">
    <input type="radio" name="nav" id="tab-gaming">
    <input type="radio" name="nav" id="tab-formulir">
    <input type="radio" name="nav" id="tab-kontak">

    <div class="main-container">
        <nav>
            <label for="tab-beranda">Beranda</label>
            <label for="tab-profil">Profil</label>
            <label for="tab-buku">Buku</label>
            <label for="tab-fashion">Fashion</label>
            <label for="tab-gaming">Gaming</label>
            <label for="tab-formulir">Formulir</label>
            <label for="tab-kontak">Kontak</label>
        </nav>

        <main class="content-area">
            
            <div id="isi-beranda" class="tab-content">
                <h2>The Grand Hall</h2>
                <div class="banner-frame">
                    <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?w=1200&auto=format&fit=crop&q=80" class="banner-img">
                </div>
                <p style="font-size: 22px; font-style: italic; text-align: center; color: #555; line-height: 2;">
                    "Selamat datang di Maison Tika Imperial. Tempat di mana kemewahan bertemu dengan kenyamanan yang tak tertandingi."
                </p>
            </div>

            <div id="isi-profil" class="tab-content">
                <h2>Our Heritage</h2>
                <div class="info-box">
                    <h3>Tentang Produk Kami</h3>
                    <p style="line-height: 1.8; text-align: justify;">
                        Maison Tika Imperial menghadirkan kurasi produk premium yang melampaui sekadar fungsi. Setiap koleksi fashion kami dirancang oleh tangan-tangan ahli menggunakan material terbaik untuk menonjolkan karisma pemakainya. Koleksi literatur kami dipilih untuk memperkaya intelektualitas, sementara lini perangkat gaming kami menggabungkan performa mutakhir dengan estetika yang elegan.
                    </p>
                </div>
                <div class="info-box">
                    <h3>Visi</h3>
                    <p>Menjadi simbol global untuk gaya hidup mewah yang berkelanjutan.</p>
                </div>
            </div>

            <div id="isi-buku" class="tab-content">
                <h2>Le Library</h2>
                <div class="grid">
                    <div class="premium-card">
                        <img src="https://images.unsplash.com/photo-1535398089889-dd807df1dfaa?w=600&auto=format&fit=crop&q=60" alt="Imperial Book Selection">
                        <h3 style="letter-spacing: 3px;">The Collector's Edition</h3>
                        <span class="price-tag">IDR 400.000</span>
                    </div>
                </div>
            </div>

            <div id="isi-fashion" class="tab-content">
                <h2>The Atelier</h2>
                <div class="grid">
                    <div class="premium-card">
                        <img src="https://images.unsplash.com/photo-1568252542512-9fe8fe9c87bb?w=600&auto=format&fit=crop&q=60" alt="Luxe Fashion Selection">
                        <h3 style="letter-spacing: 3px;">Imperial Gown</h3>
                        <span class="price-tag">IDR 1.000.000</span>
                    </div>
                </div>
            </div>

            <div id="isi-gaming" class="tab-content">
                <h2>Gaming Suite</h2>
                <div class="grid">
                    <div class="premium-card">
                        <img src="https://images.unsplash.com/photo-1660855551740-4474188debdb?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                        <h3 style="letter-spacing: 3px;">Luxury Gear Pro</h3>
                        <span class="price-tag">IDR 4.000,000</span>
                    </div>
                </div>
            </div>

            <div id="isi-formulir" class="tab-content">
                <div class="container">

    <h2>Formulir Pendaftaran UNIROW</h2>

    <form action="/proses" method="POST">
        @csrf

        <table>

            <tr>
                <td width="35%">Nama</td>
                <td width="5%">:</td>
                <td>
                    <input type="text" name="nama">
                </td>


            </tr>

            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td>
                    <input type="text" name="tempat_lahir">
                </td>
            </tr>

            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <input type="date" name="tanggal_lahir">
                </td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    

                    <input type="radio" name="jk" value="Laki-laki"> Laki-laki
                

                    <input type="radio" name="jk" value="Perempuan"> Perempuan
                

                </td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <textarea name="alamat" rows="3"></textarea>
                </td>
            </tr>

            <tr>
                <td>Sekolah Asal</td>
                <td>:</td>
                <td>

                    <input class="radio" type="radio" name="sekolah" value="SMA">
                    SMA

                    <input class="radio" type="radio" name="sekolah" value="MA">
                    MA

                    <input class="radio" type="radio" name="sekolah" value="SMK">
                    SMK

                </td>
            </tr>

            <tr>
                <td colspan="3">
                    <b>Nilai UAN</b>
                </td>
            </tr>

            <tr>
                <td>Matematika</td>
                <td>:</td>
                <td>
                    <input type="text" name="mtk">
                </td>
            </tr>

            <tr>
                <td>Bahasa Inggris</td>
                <td>:</td>
                <td>
                    <input type="text" name="bing">
                </td>
            </tr>

            <tr>
                <td>Bahasa Indonesia</td>
                <td>:</td>
                <td>
                    <input type="text" name="bindo">
                </td>
            </tr>

            <tr>
                <td colspan="3">
                    <b>Jurusan Dipilih</b>
                </td>
            </tr>

            <tr>
                <td>Pilihan 1</td>
                <td>:</td>
                <td>

                    <select name="jur1">
                        <option>TEKNIK INFORMATIKA</option>
                        <option>SISTEM INFORMASI</option>
                    </select>

                </td>
            </tr>

            <tr>
                <td>Pilihan 2</td>
                <td>:</td>
                <td>

                    <select name="jur2">
                        <option>TEKNIK INFORMATIKA</option>
                        <option>SISTEM INFORMASI</option>
                    </select>

                </td>
            </tr>

            <tr>
                <td>Alasan Masuk</td>
                <td>:</td>
                <td>

                    <textarea name="alasan" rows="5"></textarea>

                </td>
            </tr>

            <tr>
                <td colspan="3" align="right">

                    <input 
                        type="submit" 
                        value="Daftar"
                        class="btn submit"
                    >

                    <input 
                        type="reset"
                        value="Cancel"
                        class="btn reset"
                    >

                </td>
            </tr>

        </table>

    </form>

</div>

</div>



   

            <div id="isi-kontak" class="tab-content">
                <h2>Concierge</h2>
                <div style="text-align: center; padding: 60px; border: 1px solid var(--gold); background: #fff;">
                    <p style="font-size: 20px; letter-spacing: 2px; line-height: 3;">
                        <span style="color: var(--gold);">PHONE:</span> +62 888 0161 3237<br>
                        <span style="color: var(--gold);">EMAIL:</span> tikadaiyatii@gmail.com<br>
                        <span style="color: var(--gold);">LOKASI:</span> Paris — Jakarta
                    </p>
                </div>
            </div>

        </main>
    </div>

    <footer style="text-align: center; padding: 50px; color: #999; font-size: 11px; letter-spacing: 4px;">
        &copy; 2026 MAISON TIKA IMPERIAL • L'Art de Vivre
    </footer>

</body>
</html>