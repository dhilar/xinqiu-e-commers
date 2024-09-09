<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.head-LandingPage')
    @include('layout.navbar-section')
    <style>
        .section-about {
            display: flex;
            align-items: flex-start; /* Align items to the top */
            gap: 50px; /* Increase space between heading and description */
        }
        .section-about h1 {
            margin-right: 20px; /* Space to the right of the heading */
            font-size: 2.5rem; /* Adjust the font size as needed */
            line-height: 1.2; /* Line height to make the text closer */
        }
        .section-about p {
            flex: 1; /* Ensure the paragraph takes up the remaining space */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="section-about">
                <h1>Tentang</h1>
                <p>
                    PT Xinqiu Electric Vehicle adalah perusahaan yang bergerak di bidang produksi dan distribusi motor listrik yang ramah lingkungan. Kami berkomitmen untuk menghadirkan solusi transportasi yang berkelanjutan dan inovatif bagi masyarakat Indonesia. Dengan teknologi canggih dan desain yang modern, produk kami tidak hanya efisien dalam penggunaan energi, tetapi juga membantu mengurangi dampak negatif terhadap lingkungan. Kami percaya bahwa kendaraan listrik adalah masa depan transportasi, dan kami berdedikasi untuk memberikan produk terbaik dan layanan unggul kepada pelanggan kami. Melalui penelitian dan pengembangan yang terus-menerus, kami bertujuan untuk menjadi pemimpin di industri kendaraan listrik dan memberikan kontribusi positif bagi lingkungan dan masyarakat.
                </p>
            </div>
        </div>
        <div class="vision-mission">
            <div class="vision">
                <h2>VISI</h2>
                <p>Menjadi perusahaan terdepan dalam inovasi kendaraan listrik ramah lingkungan yang mendukung mobilitas berkelanjutan dan fokus pada kualitas produk untuk kepuasan pelanggan.</p>
            </div>
            <div class="mission">
                <h2>MISI</h2>
                <ul>
                    <li>Mengembangkan dan memproduksi motor listrik berkualitas tinggi yang efisien, aman, dan ramah lingkungan.</li>
                    <li>Mengintegrasikan teknologi terkini untuk menciptakan kendaraan listrik yang unggul dan bersaing.</li>
                    <li>Mendorong penggunaan energi terbarukan dalam proses produksi dan operasional perusahaan.</li>
                    <li>Meningkatkan kesadaran dan edukasi masyarakat tentang manfaat kendaraan listrik untuk lingkungan dan kesehatan.</li>
                    <li>Memberikan layanan pelanggan yang prima dan berkelanjutan, serta mendukung komunitas pengguna motor listrik.</li>
                    <li>Berkontribusi pada pengurangan emisi karbon dan pencemaran lingkungan melalui produk-produk inovatif.</li>
                </ul>
            </div>
        </div>
    </div>
</body>
@include('layout.script-LandingPage')
</html>
