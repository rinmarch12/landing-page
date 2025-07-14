<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CleanOZ - Gas Tipis Pakai CleanOZ!</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background: #f8f9fa;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, #4CAF50 0%, #45a049 100%);
            color: white;
            padding: 60px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://cdn.scalev.id/Image/_80DHjOh15B-7JCgbxr9fvoGNEeow1etLsnhm-ELi7s/1740124810449-headline_LP_scalev.webp') center/cover;
            opacity: 0.3;
        }

        .header-content {
            position: relative;
            z-index: 2;
        }

        .headline {
            font-size: 3.5rem;
            font-weight: bold;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            animation: fadeInUp 1s ease-out;
        }

        .subheadline {
            font-size: 1.5rem;
            margin-bottom: 30px;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        /* Hero Images */
        .hero-images {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin: 60px 0;
        }

        .hero-image {
            text-align: center;
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .hero-image:hover {
            transform: translateY(-10px);
        }

        .hero-image img {
            width: 100%;
            max-width: 250px;
            height: 200px;
            object-fit: cover;
            border-radius: 15px;
            margin-bottom: 20px;
        }

        .hero-image h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: #4CAF50;
        }

        .hero-image p {
            color: #666;
            font-size: 0.95rem;
        }

        /* Problem Section */
        .problem-section {
            background: linear-gradient(135deg, #FF9800 0%, #f57c00 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
        }

        .problem-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 40px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .problem-content {
            font-size: 1.3rem;
            line-height: 1.8;
            max-width: 800px;
            margin: 0 auto;
        }

        .problem-highlight {
            display: flex;
            justify-content: center;
            margin: 40px 0;
        }

        .problem-highlight img {
            max-width: 300px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        .problem-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .problem-item {
            background: rgba(255,255,255,0.1);
            padding: 30px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
            transition: transform 0.3s ease;
        }

        .problem-item:hover {
            transform: translateY(-5px);
        }

        .problem-item h3 {
            font-size: 1.2rem;
            margin-bottom: 15px;
            color: #fff;
        }

        /* Solution Section */
        .solution-section {
            background: linear-gradient(135deg, #4CAF50 0%, #45a049 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
        }

        .solution-title {
            font-size: 2.8rem;
            font-weight: bold;
            margin-bottom: 40px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .solution-content {
            font-size: 1.4rem;
            line-height: 1.8;
            max-width: 900px;
            margin: 0 auto;
        }

        .solution-visual {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin: 50px 0;
        }

        .solution-visual img {
            width: 100%;
            max-width: 200px;
            height: 150px;
            object-fit: cover;
            border-radius: 15px;
            margin: 0 auto;
        }

        .solution-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .step {
            background: rgba(255,255,255,0.1);
            padding: 30px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
            transition: transform 0.3s ease;
        }

        .step:hover {
            transform: translateY(-5px);
        }

        .step-number {
            font-size: 2rem;
            font-weight: bold;
            color: #FF9800;
            margin-bottom: 15px;
        }

        .step h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #fff;
        }

        /* Benefits Section */
        .benefits-section {
            background: white;
            padding: 80px 0;
        }

        .benefits-title {
            font-size: 2.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 60px;
            color: #4CAF50;
        }

        .benefits-intro {
            text-align: center;
            margin-bottom: 50px;
        }

        .benefits-intro img {
            max-width: 400px;
            margin-bottom: 30px;
            border-radius: 15px;
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
        }

        .benefit-card {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            border-left: 5px solid #4CAF50;
        }

        .benefit-card:hover {
            transform: translateY(-10px);
        }

        .benefit-icon {
            font-size: 3rem;
            color: #4CAF50;
            margin-bottom: 20px;
        }

        .benefit-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 15px;
            color: #333;
        }

        .benefit-description {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #666;
        }

        /* Process Section */
        .process-section {
            background: linear-gradient(135deg, #FF9800 0%, #f57c00 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
        }

        .process-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 40px;
        }

        .process-visual {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 30px;
            margin: 50px 0;
            flex-wrap: wrap;
        }

        .process-visual img {
            max-width: 300px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        .process-tagline {
            margin: 30px 0;
        }

        .process-tagline img {
            max-width: 400px;
            border-radius: 15px;
        }

        /* Product Section */
        .product-section {
            background: white;
            padding: 80px 0;
            text-align: center;
        }

        .product-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 40px;
            color: #4CAF50;
        }

        .product-showcase {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin: 50px 0;
        }

        .product-image {
            text-align: center;
        }

        .product-image img {
            width: 100%;
            max-width: 300px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
            margin-bottom: 20px;
        }

        .product-features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .feature {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 15px;
            border-left: 5px solid #4CAF50;
            transition: transform 0.3s ease;
        }

        .feature:hover {
            transform: translateY(-5px);
        }

        .feature h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #4CAF50;
        }

        .feature p {
            color: #666;
        }

        /* Testimonial Section */
        .testimonial-section {
            background: linear-gradient(135deg, #4CAF50 0%, #45a049 100%);
            color: white;
            padding: 80px 0;
        }

        .testimonial-title {
            font-size: 2.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 60px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        .testimonial-card {
            background: rgba(255,255,255,0.1);
            padding: 30px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
            transition: transform 0.3s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
        }

        .testimonial-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .testimonial-card p {
            color: #fff;
            font-size: 1.1rem;
        }

        .expert-testimony {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .expert-card {
            background: rgba(255,255,255,0.1);
            padding: 20px;
            border-radius: 15px;
            text-align: center;
        }

        .expert-card img {
            width: 100%;
            max-width: 200px;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        /* Special Promo Section */
        .promo-section {
            background: linear-gradient(135deg, #FF9800 0%, #f57c00 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
        }

        .promo-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 40px;
        }

        .promo-showcase {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin: 50px 0;
        }

        .promo-item {
            background: rgba(255,255,255,0.1);
            padding: 30px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }

        .promo-item img {
            width: 100%;
            max-width: 200px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .promo-button {
            margin: 30px 0;
        }

        .promo-button img {
            max-width: 400px;
            border-radius: 15px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .promo-button img:hover {
            transform: scale(1.05);
        }

        /* Quality Section */
        .quality-section {
            background: white;
            padding: 80px 0;
            text-align: center;
        }

        .quality-icons {
            display: flex;
            justify-content: center;
            gap: 50px;
            margin: 50px 0;
            flex-wrap: wrap;
        }

        .quality-icon {
            text-align: center;
        }

        .quality-icon img {
            width: 100px;
            height: 100px;
            object-fit: contain;
            margin-bottom: 20px;
        }

        .quality-icon h3 {
            color: #4CAF50;
            font-size: 1.2rem;
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, #4CAF50 0%, #45a049 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
        }

        .cta-title {
            font-size: 2.8rem;
            font-weight: bold;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .cta-subtitle {
            font-size: 1.5rem;
            margin-bottom: 40px;
            line-height: 1.6;
        }

        .cta-button {
            background: linear-gradient(135deg, #FF9800 0%, #f57c00 100%);
            color: white;
            padding: 20px 50px;
            font-size: 1.5rem;
            font-weight: bold;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 10px 30px rgba(255,152,0,0.3);
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(255,152,0,0.4);
        }

        /* Footer */
        .footer {
            background: #333;
            color: white;
            padding: 60px 0;
            text-align: center;
        }

        .footer-content {
            font-size: 1.3rem;
            line-height: 1.8;
            max-width: 800px;
            margin: 0 auto;
        }

        .footer-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #4CAF50;
            margin-bottom: 20px;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeInUp 1s ease-out;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .headline {
                font-size: 2.5rem;
            }
            
            .subheadline {
                font-size: 1.2rem;
            }
            
            .problem-title,
            .solution-title,
            .benefits-title,
            .testimonial-title,
            .cta-title {
                font-size: 2rem;
            }
            
            .hero-images {
                grid-template-columns: 1fr;
            }
            
            .benefits-grid {
                grid-template-columns: 1fr;
            }
            
            .problem-list {
                grid-template-columns: 1fr;
            }
            
            .solution-steps {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .product-features {
                grid-template-columns: 1fr;
            }

            .process-visual {
                flex-direction: column;
            }

            .quality-icons {
                flex-direction: column;
                gap: 30px;
            }
        }

        @media (max-width: 480px) {
            .solution-steps {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <section class="header">
        <div class="container">
            <div class="header-content">
                <h1 class="headline">Boros Bensin Bikin Dompet Tipis?<br>Gas Tipis Pakai CleanOZ!</h1>
                <p class="subheadline">Tiga Tetes Bukan Cuma Irit, Tapi Bikin Mesin Enteng, Suara Halus, Dan Hemat Biaya Servis!</p>
            </div>
        </div>
    </section>

    <!-- Hero Images -->
    <section class="container">
        <div class="hero-images">
            <div class="hero-image">
                <img src="https://cdn.scalev.id/Image/WjYbTMfsRQ5_95XzAAe9aI8H88dv77H0suUWZm2CRds/1740110069436-images_3499951710837471855.webp" alt="Pria dengan helm">
                <h3>Rakyat Kecil Harus Kuat</h3>
                <p>Setiap hari ngerit di jalanan, cari nafkah, kirim barang, jemput anak</p>
            </div>
            <div class="hero-image">
                <img src="https://cdn.scalev.id/Image/QQQNvdOkiaZRyltWjQn4EnaN9xHGy0XeigGPFxCA0M4/1740105013385-images_1065611710837501574.webp" alt="Perempuan di mobil">
                <h3>Bukan Cuma Soal Bensin</h3>
                <p>Tapi soal bisa bertahan hidup di tengah krisis</p>
            </div>
            <div class="hero-image">
                <img src="https://cdn.scalev.id/Image/oiiCjAT8xHQxQgLuPn4ctVEv706whauBQh45YvrmG20/1740105134573-images_5337321732158161632.webp" alt="Mobil dan motor">
                <h3>Untuk Semua Kendaraan</h3>
                <p>Motor, mobil, bahkan mesin kapal bisa pakai CleanOZ</p>
            </div>
        </div>
    </section>

    <!-- Problem Section -->
    <section class="problem-section">
        <div class="container">
            <h2 class="problem-title">Pernah Ngerasa Gaji Habis Cuma Buat Isi Bensin?</h2>
            <div class="problem-content">
                <p>Tarikan motor makin berat. Dompet makin sesak. Hidup rasanya diem di tempat.</p>
                <p>Padahal setiap hari harus ngerit di jalanan. Cari nafkah. Kirim barang. Jemput anak.</p>
                <p><strong>Apa nggak capek kalau semua tenaga habis cuma buat bayar bensin?</strong></p>
            </div>
            
            <div class="problem-highlight">
                <img src="https://cdn.scalev.id/Image/sfeKLm-8W4HKyeFU-Xyiisf50OPX1ygZwsxotFeCTfI/1740105354536-images_5739451732158302543.webp" alt="Belum lagi servisnya mahal">
            </div>
            
            <div class="problem-list">
                <div class="problem-item">
                    <h3>🔥 Bensin Makin Mahal</h3>
                    <p>Kerja nggak bisa berhenti, tapi biaya bensin terus naik</p>
                </div>
                <div class="problem-item">
                    <h3>⚙️ Mesin Makin Berat</h3>
                    <p>Tarikan berat, keluar biaya servis makin mahal</p>
                </div>
                <div class="problem-item">
                    <h3>💸 Susah Nabung</h3>
                    <p>Udah irit-irit, tetap habis cuma buat jalan terus</p>
                </div>
                <div class="problem-item">
                    <h3>😰 Capek Terus</h3>
                    <p>Kerja kayak nggak pernah cukup, dompet tetep tipis</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Solution Section -->
    <section class="solution-section">
        <div class="container">
            <h2 class="solution-title">CleanOZ Hadir Bukan Cuma Buat Irit Bensin</h2>
            <div class="solution-content">
                <p><strong>CleanOZ adalah cara rakyat kecil ngelawan krisis.</strong></p>
                <p>Tetesin CleanOZ ke tangki bensin → Mesin bersih → BBM lebih irit → Tarikan enteng → Dompet lebih aman.</p>
                <p>Ini bukan sulap. Ini solusi.</p>
            </div>

            <div class="solution-visual">
                <img src="https://cdn.scalev.id/Image/wijkG_a0jrZu4ntCS0HPe_DlPBhraNvnKtyP0PgVCZA/1740106104066-images_3206411710837598710.webp" alt="Duo pengguna">
                <img src="https://cdn.scalev.id/Image/ETsHqlrVrZCbMi483GPNVxFUsNabaV9Ut58QZsRMgu4/1740106243766-images_6700911731659328824.webp" alt="Pria dengan motor">
                <img src="https://cdn.scalev.id/Image/JUtBttAUoiW87a5FtXQkrp4Vh50Av4WGh6aq6qt_gzw/save.gif" alt="Animasi mesin">
            </div>

            <div class="solution-steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <h3>Tetes ke Tangki</h3>
                    <p>Cukup 3 tetes per liter BBM</p>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <h3>Mesin Bersih</h3>
                    <p>Membersihkan sisa pembakaran</p>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <h3>BBM Irit</h3>
                    <p>Hemat 20-40% bensin</p>
                </div>
                <div class="step">
                    <div class="step-number">4</div>
                    <h3>Dompet Aman</h3>
                    <p>Sisa uang buat tabungan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="process-section">
        <div class="container">
            <h2 class="process-title">"Gas Tipis, Anti Krisis"</h2>
            <div class="process-visual">
                <img src="https://cdn.scalev.id/Image/d6J120s-MAiouxwubFFk9xShj-AJvDmWrm-jYqFC0Fg/1740105489408-images_8188821710837559593.webp" alt="Pria jempol">
            </div>
            <div class="process-tagline">
                <img src="https://cdn.scalev.id/Image/MjYBC7IGUliElkbaZky37VUhorw2pbHcGVNUkqUxkrc/1740106279429-images_4952631732158101589.webp" alt="Bisnis jadi irit">
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits-section">
        <div class="container">
            <h2 class="benefits-title">Kenapa Harus CleanOZ?</h2>
            <div class="benefits-intro">
                <img src="https://cdn.scalev.id/Image/MZGHOcb98E9E4mUDGEbmI30LUn8nFqbPhcAfIl_xvMM/1740125254719-icon_benefit.webp" alt="Benefit CleanOZ">
            </div>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">⛽</div>
                    <h3 class="benefit-title">Bensin Jadi Jauh Lebih Irit</h3>
                    <p class="benefit-description">Penghematan BBM hingga 20-40% (tergantung kondisi kendaraan), cocok untuk kendaraan pribadi, usaha, hingga mesin kapal.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">🚀</div>
                    <h3 class="benefit-title">Tarikan Mesin Enteng & Responsif</h3>
                    <p class="benefit-description">Mesin lebih ringan saat akselerasi, tenaga lebih maksimal, nyaman saat bawa beban berat atau tanjakan.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">🔇</div>
                    <h3 class="benefit-title">Suara Mesin Lebih Halus & Senyap</h3>
                    <p class="benefit-description">Mengurangi suara kasar, bikin mesin lebih halus dan tenang saat dipacu.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">🛡️</div>
                    <h3 class="benefit-title">Mencegah Kerusakan Mesin</h3>
                    <p class="benefit-description">Membersihkan sisa pembakaran dan mencegah kerak karbon yang menempel di piston dan ruang bakar.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">⚡</div>
                    <h3 class="benefit-title">Ngga Perlu Nunggu Lama</h3>