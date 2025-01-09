<?php
// Initialize any PHP variables or functions here
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "About City of Jombang"; ?></title>
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <?php
    // Header section
    $navigationItems = [
        'deskripsi' => 'Deskripsi Kota',
        'makanan' => 'Makanan Khas',
        'wisata' => 'Tempat Wisata',
        'pondok' => 'Pondok Pesantren'
    ];
    ?>

    <header>
        <div class="header-container">
            <img src="logo.png" alt="Logo Kota Jombang" class="logo">
            <img src="santri.png" alt="Logo Kota Jombang" class="logo">
        </div>
        <nav>
            <ul>
                <?php foreach ($navigationItems as $id => $text): ?>
                    <li><a href="#<?php echo $id; ?>"><?php echo $text; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>

    <?php
    // Define content arrays
    $deskripsiContent = [
        'Jombang adalah kabupaten yang terletak di Provinsi Jawa Timur, dikenal sebagai "Kota Santri" dengan banyak pondok pesantren. Secara geografis, Jombang berada di lokasi strategis, menjadi penghubung utama antara kota-kota besar di Jawa Timur. Kabupaten Jombang memiliki sejarah yang beragam, salah satunya yakni sebagai tempat kelahiran Presiden ke-4 Indonesia, Abdurrahman Wahid (Gus Dur). Selain itu, Jombang juga dikenal dengan julukan “Kota Santri” karena menjadi pusat pendidikan agama islam dengan banyak pondok pesantren berpengaruh, seperti Pondok Pesantren Tebuireng, yang didirikan oleh KH. Hasyim Asy’ari, pendiri Nahdlatul Ulama (NU)',
        'Sebagai bentuk komitmen Bangga Melayani Bangsa, pemerintah Kabupaten Jombang terus berupaya mengefektifkan proses perijinan penanaman modal bagi investor. Dalam hal infrastruktur, ragam proyek pembangunan perwajahan Kota Jombang dipusatkan di wilayah Kecamatan Jombang. Pembangunan infrastruktur strategis tersebut di antaranya adalah revitalisasi Alun-Alun Jombang dan pengerjaan rehabilitasi drainase dan trotoar Jl KH Wahid Hasyim. Ada pula pembangunan sentra pedagang kaki lima (PKL) di Jl KH Ahmad Dahlan. Harapan dari adanya pembangunan tersebut adalah demi memberikan pelayanan terbaik serta penunjang pergerakan perekonomian bagi masyarakat. Bukan hanya di pusat kota, Pemerintah Kabupaten Jombang akan terus membangun infrastruktur dan perekonomian di seluruh Kabupaten Jombang. Kami mengundang anda untuk berkunjung dan berinvestasi di Kabupaten Jombang.',
        'Sebagai kota yang terus berkembang, Jombang juga memiliki potensi di bidang pendidikan dan pelatihan, dengan berbagai lembaga pendidikan formal dan non-formal yang menawarkan berbagai program keahlian. Dengan adanya kerjasama antara pemerintah daerah, lembaga pendidikan, dan dunia usaha, Jombang berupaya untuk menciptakan sumber daya manusia yang berkualitas dan siap bersaing di era global. Dengan komitmen tersebut, Kabupaten Jombang tidak hanya menjadi tempat tinggal yang nyaman, tetapi juga menjadi ladang peluang bagi para pencari kerja dan pengusaha yang ingin berkembang di wilayah ini. Mari bergabung dan saksikan sendiri kemajuan Kabupaten Jombang yang berlandaskan pada nilai-nilai agama dan budaya yang kental.',
    ];

    $makananKhas = [
        [
            'image' => 'lontong kikil.jpg',
            'title' => 'Lontong Kikil',
            'description' => 'Lontong kikil Jombang adalah hidangan khas dari Jombang, Jawa Timur, yang memadukan lontong (nasi yang dikukus dalam bungkus daun pisang) dengan kikil (bagian kaki sapi yang kenyal). Kuahnya biasanya berwarna kuning kecokelatan karena menggunakan kunyit sebagai bumbu, dan memiliki cita rasa gurih pedas yang khas dari rempah-rempah seperti serai, lengkuas, dan daun jeruk. Hidangan ini sering disajikan dengan sambal, kecap manis, dan taburan bawang goreng, menciptakan perpaduan rasa yang menggugah selera.',
            'maps_link' => 'https://www.google.com/maps/search/Lontong+Kikil+Jombang/'
        ],
        [
            'image' => 'pecel pincuk.jpg',
            'title' => 'Pecel Pincuk',
            'description' => 'Pecel pincuk Jombang adalah salah satu sajian tradisional khas Jombang yang terdiri dari aneka sayuran segar seperti kacang panjang, tauge, bayam, dan kangkung yang disiram dengan bumbu kacang khas yang pedas-gurih. Uniknya, pecel ini disajikan di atas daun pisang yang dilipat menjadi pincuk, menambah aroma alami pada makanan. Terkadang, pecel pincuk Jombang juga dilengkapi dengan lauk tambahan seperti tempe goreng, rempeyek, atau tahu. Kesederhanaan penyajian dan kelezatan rasanya menjadikan pecel pincuk Jombang sebagai salah satu hidangan favorit masyarakat setempat dan wisatawan.',
            'maps_link' => 'https://www.google.com/maps/search/Pecel+Pincuk+Jombang/'
        ],
        [
            'image' => 'rawon rosobo.jpg',
            'title' => 'rawon rosobo',
            'description' => 'Rawon Rosobo adalah salah satu kuliner legendaris dari Jombang, yang terkenal karena kelezatan kuah hitamnya yang kaya rempah. Berasal dari daerah Rosobo, Jombang, hidangan ini menggunakan kluwek sebagai bahan utama untuk memberikan warna hitam khas pada kuahnya. Daging sapi empuk menjadi isi utama, yang disajikan bersama nasi, taoge, dan telur asin. Rasa gurih dan aroma rempah seperti serai, daun jeruk, dan lengkuas menjadikan Rawon Rosobo sangat diminati oleh masyarakat setempat maupun wisatawan. Kuliner ini sering disantap sebagai sarapan atau hidangan utama sepanjang hari.',
            'maps_link' => 'https://maps.app.goo.gl/JUV4hXRbectXriPC7'
        ],
        [
            'image' => 'sate kampret.jpg',
            'title' => 'sate kampret',
            'description' => 'Sate Kampret adalah hidangan khas Jombang yang terkenal dengan keunikannya. Berbeda dari sate ayam atau kambing pada umumnya, Sate Kampret menggunakan daging kelelawar sebagai bahan utamanya. Daging kelelawar memiliki tekstur yang lembut dengan cita rasa gurih dan khas, dipercaya mengandung banyak khasiat, termasuk untuk kesehatan. Daging kelelawar yang dipilih biasanya berasal dari kelelawar pemakan buah, yang lebih aman dikonsumsi dan memiliki aroma yang tidak terlalu menyengat. Proses pembuatannya mirip dengan sate pada umumnya, yaitu dipotong-potong, ditusuk, dan dibakar di atas arang, lalu disajikan dengan bumbu kacang atau kecap.',
            'maps_link' => 'https://maps.app.goo.gl/sRBKJiVzE96vPA726'
        ],
        [
            'image' => 'sego krawu.jpg',
            'title' => 'sego krawu',
            'description' => 'Sego Krawu adalah hidangan khas dari Jombang, Jawa Timur, yang terdiri dari nasi putih hangat yang disajikan dengan beragam lauk-pauk dan sambal yang gurih serta pedas. Biasanya, Sego Krawu dilengkapi dengan serundeng (parutan kelapa yang digoreng dengan bumbu rempah), daging sapi suwir berbumbu khas, serta tempe goreng, paru, atau lauk lain sesuai selera. Hidangan ini sering disajikan dengan bumbu petis yang kaya rasa, menambah kelezatan cita rasanya. Sego Krawu terkenal karena kesederhanaannya, namun memiliki rasa yang khas dan menggugah selera, menjadikannya salah satu makanan favorit di daerah Jombang.',
            'maps_link' => 'https://maps.app.goo.gl/hwZpatSrkwnXmpao7'
        ],
        [
            'image' => 'sambel wader.jpg',
            'title' => 'sambel wader',
            'description' => 'Sambel Wader adalah hidangan khas Jombang yang menyajikan ikan wader, sejenis ikan kecil air tawar, yang digoreng kering hingga renyah dan disajikan dengan sambal pedas. Ikan wader yang digoreng memberikan tekstur garing dan rasa gurih yang khas, sementara sambal yang digunakan biasanya berbahan dasar cabai, tomat, bawang merah, bawang putih, dan terasi, menciptakan perpaduan rasa pedas, gurih, dan sedikit manis. Hidangan ini sering dinikmati bersama nasi hangat, menjadikannya pilihan yang pas untuk hidangan sehari-hari atau sebagai pelengkap dalam berbagai acara makan. Sambel Wader tidak hanya menawarkan rasa yang lezat tetapi juga memberikan pengalaman menikmati kuliner tradisional yang khas dari Jombang.',
            'maps_link' => 'https://maps.app.goo.gl/6jKPJCT5fEXgBMYK9'
        ],
        // Add other food items similarly
    ];

    $tempatWisata = [
        [
            'image' => 'air terjun tretes.jpg',
            'title' => 'Air Terjun Tretes',
            'description' => 'Air Terjun Tretes, yang terletak di kawasan Jombang, Jawa Timur, adalah salah satu destinasi wisata alam yang menakjubkan. Dikenal karena keindahan alamnya yang memukau, air terjun ini memiliki ketinggian sekitar 30 meter, dikelilingi oleh hutan tropis yang lebat dan udara segar. Suara gemericik air yang jatuh dari ketinggian menciptakan suasana damai, menjadikannya tempat ideal untuk bersantai dan menikmati keindahan alam. Selain itu, akses menuju air terjun ini relatif mudah, dan pengunjung dapat menikmati trekking ringan melalui jalur yang dikelilingi oleh pepohonan hijau. Air Terjun Tretes tidak hanya menawarkan keindahan visual, tetapi juga pengalaman rekreasi yang menyegarkan bagi para pelancong',
            'maps_link' => 'https://maps.app.goo.gl/hLf4FpURpouopMP98" target="_blank" class="map-link'
        ],
        [
            'image' => 'candi arimbi.jpg',
            'title' => 'Candi Arimbi',
            'description' => 'Candi Arimbi adalah situs bersejarah yang terletak di Jombang, Jawa Timur, dan merupakan salah satu peninggalan arkeologi yang penting dari zaman Hindu-Buddha. Diperkirakan dibangun pada abad ke-10, candi ini memiliki arsitektur yang khas dengan batu andesit dan relief yang indah, menggambarkan kisah-kisah dalam agama Hindu. Candi Arimbi dikenal dengan bentuknya yang unik dan posisi strategisnya yang menghadap ke arah pegunungan, memberikan pemandangan alam yang menawan. Meskipun tidak sebesar candi-candi lain di Indonesia, Candi Arimbi memiliki nilai sejarah dan budaya yang tinggi, menjadikannya tempat menarik untuk dipelajari dan dikunjungi, terutama bagi para pecinta sejarah dan arkeologi.',
            'maps_link' => 'https://maps.app.goo.gl/1NmmEppy3j6bw1BV9" target="_blank" class="map-link'
        ],
        [
            'image' => 'wisata religi makam gusdur.jpg',
            'title' => 'Makam Gus Dur',
            'description' => 'Wisata religi makam Gus Dur, atau KH. Abdurrahman Wahid, terletak di Jombang, Jawa Timur, dan merupakan tempat ziarah yang sangat dihormati oleh para pengikutnya dan masyarakat umum. Gus Dur, yang juga dikenal sebagai presiden ke-4 Republik Indonesia, adalah sosok yang karismatik dan dianggap sebagai tokoh pluralisme serta toleransi antarumat beragama. Makamnya berada di kompleks pesantren Tebu Ireng, di mana beliau menghabiskan sebagian besar hidupnya mengembangkan ajaran Islam yang moderat. Di sekitar makam, pengunjung dapat menemukan berbagai simbol dan pesan perdamaian yang menjadi warisan Gus Dur. Tempat ini tidak hanya menjadi lokasi ziarah, tetapi juga sebagai pusat refleksi dan diskusi mengenai nilai-nilai kebangsaan dan kemanusiaan yang diperjuangkan oleh Gus Dur.',
            'maps_link' => 'https://maps.app.goo.gl/MjjRDShkMTXSPuf26" target="_blank" class="map-link'
        ],
        [
            'image' => 'kampung djawi.jpeg',
            'title' => 'Kampung Djawi',
            'description' => 'Kampung Djawi adalah destinasi wisata unik di Jombang yang menawarkan pengalaman wisata budaya dan alam dengan nuansa tradisional Jawa. Tempat ini didesain dengan arsitektur khas Jawa, lengkap dengan rumah joglo, dekorasi antik, serta suasana pedesaan yang asri. Pengunjung dapat menikmati berbagai aktivitas menarik seperti berenang di kolam alami, bermain permainan tradisional, hingga mengikuti workshop membatik atau belajar gamelan. Kampung Djawi juga menyediakan fasilitas untuk outbond, gathering, dan kegiatan edukatif lainnya. Selain itu, suasana yang tenang dan udara yang sejuk menjadikan Kampung Djawi tempat yang ideal untuk relaksasi, sekaligus mengenal lebih dekat budaya Jawa di tengah pesona alam pedesaan Jombang.',
            'maps_link' => 'https://maps.app.goo.gl/mmwV48RfdEfPAK9R6" target="_blank" class="map-link'
        ],
        [
            'image' => 'taman kebon ratu.jpg',
            'title' => 'Taman Kebon Ratu',
            'description' => 'Taman Kebon Ratu adalah salah satu destinasi wisata keluarga di Jombang yang menawarkan suasana alam yang hijau dan asri. Terletak di kawasan pedesaan yang tenang, taman ini dilengkapi dengan beragam fasilitas rekreasi seperti area bermain anak, kolam renang, dan gazebo untuk bersantai. Taman ini juga memiliki area kebun yang luas dengan berbagai jenis tanaman hias dan pohon rindang, menciptakan suasana yang sejuk dan nyaman. Taman Kebon Ratu sering dijadikan tempat piknik oleh keluarga, serta lokasi untuk mengadakan acara-acara komunitas atau kegiatan edukatif tentang alam. Dengan suasana yang tenang dan fasilitas yang lengkap, Taman Kebon Ratu menjadi pilihan favorit bagi warga lokal maupun wisatawan untuk melepas penat dan menikmati keindahan alam Jombang.',
            'maps_link' => 'https://maps.app.goo.gl/Q1MWuUmfdePr5Brv9" target="_blank" class="map-link'
        ],
        [
            'image' => 'pemandian sumber boto.jpg',
            'title' => 'Pemandian Sumberboto',
            'description' => 'Pemandian Sumberboto adalah destinasi wisata alam yang populer di Jombang, terkenal dengan kolam pemandian alami yang jernih dan segar. Terletak di kawasan perbukitan dengan suasana yang sejuk, Sumberboto menawarkan air yang bersumber langsung dari mata air pegunungan, menjadikannya tempat yang ideal untuk berendam dan melepas penat. Selain kolam pemandian, kawasan ini juga dikelilingi oleh pepohonan rindang dan alam yang hijau, menciptakan suasana tenang yang cocok untuk rekreasi bersama keluarga. Di sekitar area pemandian, terdapat fasilitas seperti tempat makan, gazebo, dan area bermain anak, membuat kunjungan ke Sumberboto semakin menyenangkan. Pemandian ini tidak hanya menyajikan keindahan alam, tetapi juga memberikan pengalaman menyegarkan yang khas dari pegunungan Jombang.',
            'maps_link' => 'https://maps.app.goo.gl/nXSGTsx3s5FEEWoF7" target="_blank" class="map-link'
        ],
        // Add other tourist spots similarly
    ];

    $pondokPesantren = [
        [
            'image' => 'pondok tebuireng.jpg',
            'title' => 'Pondok Tebuireng',
            'description' =>'Pondok Pesantren Tebuireng adalah salah satu lembaga pendidikan Islam tertua dan paling berpengaruh di Indonesia, terletak di Jombang, Jawa Timur. Didirikan oleh KH. Hasyim Asyari pada tahun 1916, pesantren ini memiliki peran penting dalam pengembangan pendidikan agama dan sosial di masyarakat. Tebuireng dikenal sebagai pusat studi Islam yang mengajarkan berbagai disiplin ilmu, termasuk fikih, tafsir, dan tasawuf. Selain pendidikan formal, pesantren ini juga aktif dalam kegiatan sosial dan keagamaan, menjadikannya tempat yang strategis untuk mencetak generasi penerus yang memiliki pemahaman agama yang kuat dan komitmen terhadap nilai-nilai sosial. Dengan pengaruhnya yang luas, Tebuireng menjadi simbol keberagaman dan toleransi dalam tradisi Islam di Indonesia.',
            'maps_link' => 'https://maps.app.goo.gl/rJCMkF2aYinThjsg8'
        ],
        [
            'image' => 'pondok darul ulum.jpg',
            'title' => 'Pondok Darul Ulum',
            'description' => 'Pondok Pesantren Darul Ulum terletak di Jombang, Jawa Timur, dan dikenal sebagai salah satu lembaga pendidikan Islam yang berkomitmen untuk mendidik generasi muda dalam ilmu agama dan umum. Didirikan pada tahun 1946, pesantren ini telah berperan aktif dalam pengembangan pendidikan Islam di daerah tersebut. Darul Ulum menawarkan berbagai program pendidikan yang mencakup pengajaran kitab kuning, akidah, serta keterampilan hidup, sehingga santri tidak hanya mendapatkan pengetahuan agama, tetapi juga keterampilan praktis yang berguna di masyarakat. Selain itu, pesantren ini sering mengadakan kegiatan sosial, seperti pengajian dan bakti sosial, untuk memperkuat hubungan antara santri dan masyarakat. Dengan pendekatan yang holistik, Pondok Pesantren Darul Ulum berupaya mencetak generasi yang tidak hanya berilmu, tetapi juga memiliki karakter yang baik dan siap berkontribusi dalam pembangunan bangsa.',
            'maps_link' => 'https://maps.app.goo.gl/LDrBFog6wWzo5a1q7',
        ],
        [
            'image' => 'pondok almuhajirin.jpg',
            'title' => 'Pondok Almuhajirin.jph',
            'description' => 'Pondok Pesantren Al-Muhajirin yang terletak di Jombang, Jawa Timur, merupakan salah satu lembaga pendidikan Islam yang dikenal dengan pendekatan pendidikan yang komprehensif dan holistik. Didirikan dengan tujuan untuk mencetak santri yang tidak hanya memahami ilmu agama secara mendalam, tetapi juga mampu mengaplikasikannya dalam kehidupan sehari-hari, Al-Muhajirin menawarkan kurikulum yang menggabungkan pendidikan agama dan umum. Pesantren ini memiliki berbagai program pembelajaran, mulai dari pengajaran kitab kuning hingga keterampilan praktis, yang dirancang untuk mempersiapkan santri menghadapi tantangan di era modern. Selain fokus pada pendidikan, Pondok Pesantren Al-Muhajirin juga aktif dalam kegiatan dakwah dan sosial, mendorong santri untuk berkontribusi positif bagi masyarakat sekitar dan menjunjung tinggi nilai-nilai Islam yang rahmatan lil-alamin.',
            'maps_link' => 'https://maps.app.goo.gl/cMmACpqnZiyAFtDL7',
        ],
        [
            'image' => 'ponpes alfatah.png',
            'title' => 'Pondok Pesantren Alfatah',
            'description' => 'Pondok Pesantren Al Fatah adalah lembaga pendidikan Islam yang berlokasi di Jombang, Jawa Timur, yang dikenal dengan komitmennya dalam mencetak generasi muda yang berakhlak mulia dan berpengetahuan luas. Didirikan dengan tujuan untuk mengajarkan ilmu agama serta keterampilan kehidupan, pesantren ini menawarkan berbagai program pendidikan yang meliputi pengajian kitab kuning, pengembangan keterampilan, serta pendidikan umum. Dengan suasana yang kondusif dan lingkungan yang mendukung, Pondok Pesantren Al Fatah memberikan fasilitas lengkap bagi santrinya, termasuk asrama, perpustakaan, dan ruang belajar yang memadai. Pesantren ini juga aktif dalam berbagai kegiatan sosial dan dakwah, menjadikannya sebagai pusat pengembangan komunitas yang berlandaskan nilai-nilai Islam. Melalui pendidikan yang holistik, Pondok Pesantren Al Fatah bertujuan untuk melahirkan generasi yang tidak hanya cerdas secara akademis tetapi juga memiliki karakter yang baik dan kepedulian sosial yang tinggi.',
            'maps_link' => 'https://maps.app.goo.gl/BzsnxCfq3VgWqSa58',
        ],
        [
            'image' => 'ponpes alhikmah.jpg',
            'title' => 'Pondok Pesantren Alhikmah',
            'description' => 'Pondok Pesantren Al Hikmah adalah lembaga pendidikan Islam yang terletak di Jombang, Jawa Timur, yang memiliki misi untuk mendidik generasi muda dengan landasan ilmu agama yang kuat serta nilai-nilai moral yang tinggi. Didirikan dengan tujuan untuk menyediakan pendidikan yang komprehensif, pesantren ini menawarkan berbagai program yang mencakup pengajian kitab kuning, bahasa Arab, serta pelajaran umum yang relevan dengan kebutuhan masyarakat modern. Dengan fasilitas yang memadai, seperti asrama, ruang belajar, dan area untuk kegiatan ekstrakurikuler, Pondok Pesantren Al Hikmah menciptakan lingkungan belajar yang kondusif bagi para santri. Selain fokus pada pendidikan, pesantren ini juga aktif dalam kegiatan sosial dan dakwah, sehingga para santri dapat berkontribusi positif dalam masyarakat. Melalui pendekatan pendidikan yang terpadu, Pondok Pesantren Al Hikmah berkomitmen untuk menghasilkan individu yang tidak hanya cerdas secara akademis tetapi juga berakhlak mulia dan siap menghadapi tantangan zaman.',
            'maps_link' => 'https://maps.app.goo.gl/5zVWS16JRbbE1gsV6',
        ],
        [
            'image' => 'ponpes bahrul ulum.jpg',
            'title' => 'Pondok Pesantren Bahrul Ulum',
            'description' => 'Pondok Pesantren Bahrul Ulum adalah salah satu lembaga pendidikan Islam terkemuka yang terletak di Jombang, Jawa Timur. Didirikan pada tahun 1910 oleh KH. Hasyim Asyari, pesantren ini telah berperan penting dalam pengembangan pendidikan dan dakwah Islam di Indonesia. Dengan kurikulum yang menggabungkan pendidikan agama dan umum, Pondok Pesantren Bahrul Ulum tidak hanya fokus pada pengajaran kitab kuning, tetapi juga mempersiapkan santrinya untuk menghadapi tantangan zaman modern. Pesantren ini dikenal dengan tradisi belajar yang kuat, suasana yang kondusif, serta banyaknya alumni yang berkontribusi dalam berbagai bidang, baik di dalam negeri maupun di luar negeri. Melalui berbagai program dan kegiatan, Pondok Pesantren Bahrul Ulum terus berkomitmen untuk mencetak generasi yang memiliki pengetahuan agama yang mendalam serta keterampilan yang relevan dengan kebutuhan masyarakat saat ini.',
            'maps_link' => 'https://maps.app.goo.gl/VUnxo6zPZsW8DboNA',
        ],
        // Add other pesantren similarly
    ];
    ?>

    <!-- Deskripsi Kota -->
    <section id="deskripsi">
        <h2>Deskripsi Kota Jombang</h2>
        <?php foreach ($deskripsiContent as $paragraph): ?>
            <p><?php echo $paragraph; ?></p>
        <?php endforeach; ?>
    </section>

    <!-- Makanan Khas -->
    <section id="makanan">
        <h2>Makanan Khas Jombang</h2>
        <div data-aos="zoom-in" class="grid-container">
            <?php foreach ($makananKhas as $makanan): ?>
                <div class="grid-item">
                    <img src="<?php echo $makanan['image']; ?>" alt="<?php echo $makanan['title']; ?>">
                    <h3><?php echo $makanan['title']; ?></h3>
                    <p><?php echo $makanan['description']; ?></p>
                    <a href="<?php echo $makanan['maps_link']; ?>" target="_blank" class="map-link">Cari di Google Maps</a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Tempat Wisata -->
    <section id="wisata">
        <h2>Tempat Wisata di Jombang</h2>
        <div data-aos="zoom-in" class="grid-container">
            <?php foreach ($tempatWisata as $wisata): ?>
                <div class="grid-item">
                    <img src="<?php echo $wisata['image']; ?>" alt="<?php echo $wisata['title']; ?>">
                    <h3><?php echo $wisata['title']; ?></h3>
                    <p><?php echo $wisata['description']; ?></p>
                    <a href="<?php echo $wisata['maps_link']; ?>" target="_blank" class="map-link">Lihat di Google Maps</a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Pondok Pesantren -->
    <section id="pondok">
        <h2>Pondok Pesantren di Jombang</h2>
        <div data-aos="zoom-in" class="grid-container">
            <?php foreach ($pondokPesantren as $pondok): ?>
                <div class="grid-item">
                    <img src="<?php echo $pondok['image']; ?>" alt="<?php echo $pondok['title']; ?>">
                    <h3><?php echo $pondok['title']; ?></h3>
                    <p><?php echo $pondok['description']; ?></p>
                    <a href="<?php echo $pondok['maps_link']; ?>" target="_blank" class="map-link">Cari di Google Maps</a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

<!-- Kritik dan Saran -->
<section id="kritik-saran">
    <h2>Kritik dan Saran</h2>
    <form action="submit_feedback.php" method="POST" class="kritik-saran-form">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="pesan">Pesan Anda:</label>
        <textarea id="pesan" name="pesan" rows="5" required></textarea>

        <button type="submit">Kirim</button>
    </form>
</section>

    <?php
    // Footer content
    $contactInfo = [
        ['name' => 'Fizra Azka Sifa', 'phone' => '+62 823-2339-3455'],
        ['name' => 'Muhammad Nizar Amirul Haq', 'phone' => '+62 813-3192-4261'],
        ['name' => 'Aura Fitrah Shaqinah', 'phone' => '+62 856-0717-0584']
    ];

    $socialMedia = [
        ['name' => 'Instagram 1', 'url' => 'https://www.instagram.com/firzaazzs?igsh=MWZlcXVwaDRzMTRuMg=='],
        ['name' => 'Instagram 2', 'url' => 'https://www.instagram.com/nzarlhq?igsh=MWtrdmRlaGJ6Nzh4dg=='],
        ['name' => 'Instagram 3', 'url' => 'https://www.instagram.com/tashameong?igsh=MTBmZHUxenM0NHIyaw==']
    ];
    ?>

    <footer>
        <div>
            <p>About City of Jombang</p>
            <p>Jombang is a city located in East Java, Indonesia, known for its rich cultural heritage and historical significance.</p>
        </div>
        <div>
            <h4>Contact Us</h4>
            <?php foreach ($contactInfo as $contact): ?>
                <p>Phone: <?php echo $contact['phone']; ?> (<?php echo $contact['name']; ?>)</p>
            <?php endforeach; ?>
        </div>
        <div>
            <h4>Follow Us</h4>
            <?php foreach ($socialMedia as $social): ?>
                <a href="<?php echo $social['url']; ?>" target="_blank" aria-label="Follow us on Instagram"><?php echo $social['name']; ?></a>
            <?php endforeach; ?>
        </div>
    </footer>

    <script src="script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>