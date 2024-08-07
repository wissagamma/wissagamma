<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Paket XL</title>
    <style>
        body {
            font-family: "Roboto", sans-serif;
            background: linear-gradient(135deg, #0033cc, #66b3ff); /* Gradien biru */
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }
        .container {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 16px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            padding: 20px;
            max-width: 800px;
            width: 100%;
            text-align: center;
            position: relative;
            color: #333;
        }
        .container::before {
            content: "";
            position: absolute;
            top: -20%;
            left: -20%;
            width: 150%;
            height: 150%;
            background: rgba(0, 0, 0, 0.1);
            border-radius: 50%;
            transform: rotate(-30deg);
            z-index: 0;
            pointer-events: none;
        }
        .title {
            font-size: 28px;
            font-weight: 700;
            color: #007bff;
            margin: 0;
            position: relative;
            z-index: 1;
        }
        .active-period {
            font-size: 18px;
            color: #333;
            background: #f8f9fa;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 10px;
            position: relative;
            z-index: 1;
        }
        .section {
            margin-top: 30px;
            text-align: left;
        }
        .section .section-title {
            font-size: 22px;
            margin-bottom: 15px;
            color: #333;
            position: relative;
            z-index: 1;
        }
        .item {
            font-size: 18px;
            padding: 10px 15px;
            border-radius: 10px;
            background: #f1f3f4;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background-color 0.3s ease, transform 0.3s ease;
            position: relative;
            z-index: 1;
        }
        .item:hover {
            background: #e2e6ea;
            transform: scale(1.02);
        }
        .note {
            font-size: 18px;
            font-weight: 600;
            color: #dc3545;
            margin-top: 20px;
            text-align: center;
            position: relative;
            z-index: 1;
        }
        .note::before {
            content: "❗ ";
        }
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }
        .title {
            animation: pulse 1s infinite;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">++</div>
        <div class="active-period">⌛ Masa Aktif 29/30 hari</div>

        <div class="section">
            <div class="section-title">📡 A:</div>
            <a href="https://wa.me/6287722400030?text=Order%20kuota%2012GB%2020K" class="item">
                <span>📦 12GB</span>
                <span>20K</span>
            </a>
            <a href="https://wa.me/087722400030?text=Order%20kuota%2024GB%2030K" class="item">
                <span>📦 24GB</span>
                <span>30K</span>
            </a>
            <a href="https://wa.me/087722400030?text=Order%20kuota%2036GB%2040K" class="item">
                <span>📦 36GB</span>
                <span>40K</span>
            </a>
            <a href="https://wa.me/087722400030?text=Order%20kuota%2048GB%2050K" class="item">
                <span>📦 48GB</span>
                <span>50K</span>
            </a>
            <a href="https://wa.me/087722400030?text=Order%20kuota%2060GB%2060K" class="item">
                <span>📦 60GB</span>
                <span>60K</span>
            </a>
            <a href="https://wa.me/087722400030?text=Order%20kuota%2072GB%2070K" class="item">
                <span>📦 72GB</span>
                <span>70K</span>
            </a>
            <a href="https://wa.me/087722400030?text=Order%20kuota%2084GB%2080K" class="item">
                <span>📦 84GB</span>
                <span>80K</span>
            </a>
            <a href="https://wa.me/087722400030?text=Order%20kuota%2096GB%2090K" class="item">
                <span>📦 96GB</span>
                <span>90K</span>
            </a>
            <a href="https://wa.me/087722400030?text=Order%20kuota%20108GB%20100K" class="item">
                <span>📦 108GB</span>
                <span>100K</span>
            </a>
            <a href="https://wa.me/087722400030?text=Order%20kuota%20120GB%20110K" class="item">
                <span>📦 120GB</span>
                <span>110K</span>
            </a>
        </div>

        <div class="section">
            <div class="section-title">📡 B:</div>
            <a href="https://wa.me/087722400030?text=Order%20kuota%2010GB%2018K" class="item">
                <span>📦 10GB</span>
                <span>18K</span>
            </a>
            <a href="https://wa.me/087722400030?text=Order%20kuota%2020GB%2025K" class="item">
                <span>📦 20GB</span>
                <span>25K</span>
            </a>
            <a href="https://wa.me/087722400030?text=Order%20kuota%2030GB%2035K" class="item">
                <span>📦 30GB</span>
                <span>35K</span>
            </a>
        </div>

        <div class="note">No Garansi</div>
        <div class="note">Paket Bisa Sewaktu-waktu Hilang</div>
        <div class="note">Membeli = Setuju</div>
    </div>
</body>
</html>
