<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman About</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/blog">blog</a>
    <a href="/contact">contact</a>
    <h1>Blog</h1>

    <div class="container">
        <div class="bagian-kiri">
            <img src="img/perubahan_iklilm.jpeg" alt="">
            <p>Penulis : {{ $penulis }} {{ $tanggal }}</p>
            <h3>Dampak Perubahan Iklim pada Kesehatan Masyarakat</h3>
            <p>Perubahan iklim memiliki dampak yang signifikan terhadap kesehatan masyarakat di seluruh dunia.
                Peningkatan suhu global, cuaca ekstrem, dan perubahan pola hujan menyebabkan banyak masalah kesehatan
                baru yang harus dihadapi. Misalnya, gelombang panas yang berkepanjangan dapat meningkatkan risiko
                serangan jantung dan dehidrasi, terutama pada populasi rentan seperti anak-anak dan lansia. Selain itu,
                perubahan iklim memperburuk kualitas udara dan meningkatkan penyebaran penyakit yang ditularkan melalui
                air dan serangga, seperti malaria dan demam berdarah.</p>
        </div>
        <div class="bagian-kanan">
            <img src="img/technology.jpeg" alt="">
            <p>Penulis : {{ $penulis }} {{ $tanggal }}</p>
            <h3>Pentingnya pendidikan teknologi</h3>
            Pendidikan teknologi menjadi sangat penting di era digital saat ini. Dengan pesatnya perkembangan teknologi,
            banyak pekerjaan yang mulai beralih menggunakan alat digital dan otomatisasi. Pendidikan teknologi bukan
            hanya membantu siswa untuk memahami cara menggunakan perangkat lunak atau perangkat keras, tetapi juga
            mengajarkan keterampilan kritis seperti pemecahan masalah, kreativitas, dan kemampuan berpikir komputasional
            yang sangat dibutuhkan di dunia kerja modern. Selain itu, pendidikan teknologi membantu mengurangi
            kesenjangan digital, sehingga semua individu memiliki kesempatan yang sama untuk berkontribusi dalam
            masyarakat yang semakin terdigitalisasi.
        </div>
    </div>
</body>

</html>
