<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>siDORA | Sistem Donor Darah</title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url("img/logo.png") ?>">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="<?= base_url('vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <style>
        
        body{
            overflow-x:hidden
        }

        .main-bg{
            width:100%;
            height:60em;
        }

        a{
            text-decoration:none;   
        }

        .main-bg::after{
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6); 
            z-index: 0; 
        }

        #navbar{
            
        }

        .home-container1{
            top:210px
        }

        .home-main{
            width:75%;
        }

        .scrolled{
            background-color:white;
            color:gray !important;
            border-bottom:gray 1px solid
        }

        .scrolled p{
            color:black
        }

        .scrolled a{
            color:black
        }

        .tentang1{
            height:80vh;
            padding:8em 0em;
            display:flex;
            justify-self: center;
            align-items:center
        }

        .tentang2{
            height:90vh;
            padding:8em 0em;
            display:flex;
            justify-self: center;
            align-items:center
        }

        .syarat{
            height:50em;
            padding:8em 0em
        }

        .testimoni{
            height:80em;
            padding:8em 0em
        }

        @media (max-width: 640px){
            #navbar{
                width:100%;
                padding:0em 2em
            }

            .home-container1{
                top:320px
            }

            .home-main{
                width:100%;
            }

            .tentang1{
                height:80em;
                padding:0em 2em;
                display:flex;
                flex-direction:column;
                justify-self: center;
                align-items:center
            }

            .tentang2 {
                height:90em;
                padding:0em 2em;
                display:flex;
                flex-direction:column;
                justify-self: center;
                align-items:center
            }
            .syarat{
                height:90em;
                padding:8em 0em
            }
            .testimoni{
                height:150em;
                padding:8em 0em
            }
        }

        @media (min-width: 642px) and (max-width: 768px){
            #navbar{
                width:100%
            }
            .home-container1{
                top:120px
            }

            .home-main{
                width:100%;
            }

            .tentang1{
                height:70em;
                padding:0em 2em;
                display:flex;
                flex-direction:column;
                justify-self: center;
                align-items:center
            }

            .tentang2 {
                height:80em;
                padding:0em 2em;
                display:flex;
                flex-direction:column;
                justify-self: center;
                align-items:center
            }
            .syarat{
                height:60em;
                padding:8em 0em
            }
            .testimoni{
                height:120em;
                padding:8em 0em
            }
        }

        @media (min-width:769px) and (max-width: 1154px){
            .tentang1{
                height:50em;
                padding:0em 2em;
               
            }

            .tentang2 {
                height:60em;
                padding:0em 2em;
                
            }
        }


    </style>
</head>
<body>   
    <!-- navbar -->
    <header>
        <div class="w-full h-12 z-10 fixed bg-[#00b9ac] d-flex justify-content-end align-items-center px-24 max-[640px]:px-2 ">
            <div class='flex gap-6 max-[640px]:gap-2'>
                <div class='d-flex flex-row align-items-center'>
                    <i class='far fa-envelope text-white fs-3 mx-2'></i>
                    <p class='text-white max-[640px]:text-sm'>Info@rspersahabatan.co.id</p>
                </div>
                <div class='d-flex flex-row align-items-center'>
                    <i class='fas fa-mobile text-white fs-3 mx-2'></i>
                    <p class='text-white  max-[640px]:text-sm'>IGD (021)22392211</p>
                </div>
                <div class='d-flex flex-row align-items-center'>
                    <i class="fab fa-whatsapp text-white fs-3 mx-2"></i>
                    
                    <p class='text-white '>087822345567</p>
                </div>
            </div>
        </div>
    </header>
    <!-- navbar -->

    <!-- Navbar 2 -->
    <header>
        <div id='navbar' class="border-bottom top-12 menu w-full max-[640px]:w-1/2 py-4 px-6 d-flex align-items-center position-fixed z-3 bg-white text-gray-600 justify-content-between  transition-all max-[640px]:px-2 " style='height:5em'>
            <div class='d-flex align-items-center gap-2 logo'>               
                <img src='<?= base_url("img/logo.png") ?>' class='h-14 w-14 rounded-full' />
                <p class='fs-3'>siDORA</p>
            </div>

            <div class=' gap-4 max-[640px]:hidden min-[641px]:flex'>
                <?php foreach($menu as $mainmenu): ?>
                    <div class='p-4'>
                        <a href='#<?= strtolower($mainmenu)  ?>' class=' fs-5 transition-all brightness-20 hover:font-bold'> <?= strtoupper($mainmenu) ?> </a>
                    </div>
                <?php endforeach ?>
            
            </div>

            <div class='hidden max-[640px]:flex cursor-pointer active:scale-150' >
                <i class='fa fa-bars text-2xl' id='btn-bar'></i>
            </div>

        </div>

        <div class='bg-white w-full h-64 fixed top-[124px] z-10 border hidden max-[640px]:flex flex-col' id='menu-dropdown' style='display:none'>
                <?php foreach($menu as $mainmenu): ?>
                    <div class='p-3'>
                        <a href='#<?= strtolower($mainmenu)  ?>' class=' text-md transition-all brightness-20 hover:font-bold'> <?= strtoupper($mainmenu) ?> </a>
                    </div>
                <?php endforeach ?>
        </div>
    </header>
    <!-- end navbar 2 -->

    <!-- home main text -->
    <main id='home'>
        <div  class='position-relative main-bg px-32 py-24 max-[640px]:px-0 max-[640px]:py-0' style='background-image:url("<?= base_url("img/gp.jpeg.jpg") ?>");background-size:cover;background-repeat:no-repeat;background-attachment:fixed'>
            <div data-aos='fade-up' class="home-main  position-relative z-2 home-container1 max-[640px]:text-center"  style=''>
                <h2 class='text-white mb-3 fw-bold text-[3.6rem] max-[640px]:text-[1.6rem]' >Setetes Darah Anda, Sejuta Harapan Bagi Mereka yang Membutuhkan.</h2>
                <p class='text-white mb-5 text-[1.6rem] max-[640px]:text-[1.2rem]' >Bergabunglah dengan kami dan jadilah pahlawan bagi sesama.</p>
                <a href='<?= base_url("login") ?>'>
                    <button class='btn btn-outline-light btn-lg'>Donor sekarang</button>
                </a>
            </div>
        </div>
    </main>
    <!-- end home -->

    <!-- tentang -->
    <section id='tentang'>
        <div class='container-sm gap-5 tentang1' style=''>
            <div data-aos='fade-right' class='w-1/2 max-[640px]:w-full max-[768px]:w-full d-flex justify-content-center align-items-center'>
                <img src='<?= base_url("img/bg-home.jpg")?>'  class='w-[40em] h-[30em] max-[640px]:w-[20em] max-[640px]:h-[20em]' />
            </div>
            <div data-aos='fade-left' class='w-1/2 max-[640px]:w-full max-[768px]:w-full'>
                <h3 class='mb-3 fw-bold' style='font-size:2.9rem'>Kenapa kita harus donor darah?</h3>
                <p class='' style='font-size:1.3rem'>Donor darah adalah salah satu tindakan paling mulia yang dapat menyelamatkan nyawa. Dengan mendonorkan darah, Anda memberikan harapan hidup kepada mereka yang membutuhkan, baik itu pasien yang sedang menjalani operasi, penderita penyakit tertentu, atau korban kecelakaan. Setiap tetes darah yang Anda sumbangkan memiliki potensi untuk memberikan kesempatan hidup yang lebih baik bagi orang lain. Selain itu, donor darah juga memberikan manfaat kesehatan bagi pendonor, seperti meningkatkan produksi sel darah baru dan menjaga kesehatan jantung. </p>
            
            </div>
        </div>
    </section>
    <!-- end tentang -->

    <!-- tenttang 2 -->
    <section>
        <div class='container-sm gap-5 tentang2' >
            <div data-aos='fade-up' class='w-1/2 max-[640px]:w-full max-[768px]:w-full '>
                <h3 class='mb-4 fw-bold' style='font-size:2.9rem'>Manfaat donor darah</h3>
                <?php foreach($manfaat as $judul => $deskripsi): ?>
                    <ul class='list-disc pl-5'>
                        <li class='mb-4'>
                            <h4 class='fw-semibold mb-2' style='font-size:1.5rem'><?= $judul ?></h4>
                            <p class='' style='font-size:1.3rem;'><?= $deskripsi ?></p>
                        </li>
                    </ul>
                <?php endforeach ?>
            </div>
            <div data-aos='fade-left' class='w-1/2 max-[640px]:w-full max-[768px]:w-full d-flex justify-content-center align-items-center'>
                <img src='<?= base_url("img/bg-home-2.jpg")?>' style='w-[40em] h-[40em] max-[640px]:w-[20em] max-[640px]:h-[20em]' />
            </div>
        </div>
    </section>
    <!-- end tentang 2 -->

    <!-- syarat -->
    <section id='syarat'>
        <div class='bg-[#00b9ac]'>
            <div class='container-sm d-flex align-items-center flex-column syarat' >
                <h4 data-aos='fade-up' class='fs-2 fw-bold mb-5 text-white text-center'>Syarat untuk melakukan donor darah</h4>
                <div data-aos='zoom-in' class='border w-75 container-fluid rounded p-5 bg-white'>
                    <ul class='list-disc pl-5'>
                        <?php foreach($syarat as $judul): ?>
                            <li>
                                <p class='fw-semibold fs-5'>
                                    <?= $judul ?>
                                </p>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
    
            </div>
        </div>
    </section>
    <!-- end syarat -->

    <!-- Statistik -->
    <section id='testimoni'>
        <div class='container-sm testimoni' >
            <h3 class='fw-bold text-center mb-12' style='font-size:2.4rem'>Statistik Pendonor</h3>
            <div class='d-flex align-items-center flex-col   justify-content-between max-[640px]:flex-col max-[768px]:flex-col gap-5'>
                <div class='flex  justify-content-between w-full max-[640px]:flex-col max-[768px]:flex-col'>
                    <div data-aos='fade-right' class='d-flex justify-content-center align-items-center flex-column  p-5'>
                        <h3 class='fw-semibold fs-2 mb-3'>Jumlah Pendonor</h3>
                        <img src='<?= base_url('img/user.svg') ?>' class='w-36 h-36 mb-4'/>
                        <p class=' fs-3'>Sebanyak <span class='fw-semibold'><?= $jumlahdonor->total ?></span> orang</p>
                    </div>
                    <div data-aos='fade-left' class='d-flex justify-content-center align-items-center flex-column p-5 '>
                        <h3 class='fw-semibold fs-2 mb-3'>Jumlah Darah Keluar</h3>
                        <img src='<?= base_url('img/darah.svg') ?>' class='w-36 h-36 mb-4'/>
                        <p class=' fs-3'>Sebanyak <span class='fw-semibold'><?= $kantungdarah->total ?></span> kantung darah</p>
                    </div>
                </div>
                <div>
                    <div data-aos='fade-up' class='d-flex flex-column align-items-center rounded-lg   p-5 '>
                        <div class='mb-12'>
                            <h3 class='fw-semibold fs-1 mb-3'>Ketersediaan Stok</h3>
                        </div>

                        <div class='d-flex justify-content-center align-items-center flex-wrap' style='gap:4em'>
                        <?php 
                            $golonganDarah = ['A', 'B', 'O', 'AB'];
                            foreach ($golonganDarah as $golongan) {
                                $jumlah = 0;
                                foreach ($stok as $item) {
                                    if ($item->gol_darah == $golongan) {
                                        $jumlah = $item->jumlah;
                                        break;
                                    }
                                }
                        ?>
                        <div class='d-flex justify-content-center align-items-center flex-column'>
                            <img src='<?= base_url("img/{$golongan}.png") ?>' class='mb-4' style='width:120px; height:140px'/>
                            <p class='fs-3'><b><?= $jumlah ?></b> kantung darah</p>
                        </div>
                        <?php } ?>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--  end statistik -->

    <footer class='bg-primary h-[20vh] max-[640px]:h-[30vh]' >
        <div class='p-4 d-flex justify-content-between h-[70%]' >
            <div>
                <p class='text-white fw-bold fs-3'>siDORA</p>
            </div>
            <div class='text-white'>
                <h2 class='fw-semibold fs-4 mb-2'>Kontak Kami</h2>
                <div class='d-flex'>
                    <p>Email : </p>
                    <p>info@rspersahabatan.co.id</p>
                </div>
                <div class='d-flex'>
                    <p>Telepon : </p>
                    <p>(021)22392211</p>
                </div>
                <div class='d-flex'>
                    <p>Whatsapp : </p>
                    <p>087822345567</p>
                </div>
            </div>
        </div>
        <div class='d-flex justify-content-center align-items-end h-[20%]' >
            <p class='text-white'>Copyright 2024.All Right Reserved | siDORA</p>
        </div>
    </footer>

    <script>
  // Mendapatkan navbar
  const navbar = document.getElementById('navbar');
  const bar = document.getElementById("btn-bar")
  const menudropdown = document.getElementById("menu-dropdown")

  let isOpen = false;
  bar.addEventListener("click",() => {
    console.log(isOpen)

    if (!isOpen) {
        menudropdown.style.display = "flex";  // Menampilkan menu
         // Mengubah status menjadi terbuka
    } else {
        menudropdown.style.display = "none";  // Menyembunyikan menu
         // Mengubah status menjadi tertutup
    }

    isOpen = !isOpen;
  })

  // Fungsi untuk menangani scroll event
  /* window.onscroll = function() {
    if (window.scrollY > 0) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  }; */
</script>
<script>
  AOS.init();
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>