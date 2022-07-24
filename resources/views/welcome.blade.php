<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Grayscale - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('grayscale/dist/') }}/assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('grayscale/dist/') }}/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">SIDAKEDES</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                    {{-- <li class="nav-item"><a class="nav-link" href="#projects">Libureng</a></li> --}}
                    {{-- <li class="nav-item"><a class="nav-link" href="#signup">Libureng</a></li> --}}
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Masuk</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">SIDAKEDES</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Sistem Informasi Data Kependudukan Desa.</h2>
                    {{-- <a class="btn btn-primary" href="{{ route('login') }}">MASUK</a> --}}
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="about-section text-center" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-white mb-4">Desa Libureng</h2>
                    <p class="text-white-50">
                        Desa Libureng Merupakan kawasan agropolitan (pertanian, perikanan air tawar, perkebunan, hasil
                        hutan dan peternakan sapi) dan Wisata alam dan merupakan desa pra sejahtera yang memiliki 5
                        (Lima) Dusun Yaitu: Dusun Cempae, Dusun Ulo, Dusun Panincong, Dusun Watu, Dusun Pacciro.
                        Desa Libureng

                    </p>
                </div>
            </div>
            <img class="img-fluid" src="{{ asset('grayscale/dist/') }}/assets/img/ipad.png" alt="..." />
        </div>
    </section>
    <!-- Projects-->
    <section class="projects-section bg-light" id="projects">
        <div class="container px-4 px-lg-5">
            <!-- Featured Project Row-->
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                {{-- <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0"
                        src="{{ asset('grayscale/dist/') }}/assets/img/bg-masthead.jpg" alt="..." /></div> --}}
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0"
                        src="{{ asset('web/') }}/kantordesa.jpg" alt="..." /></div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>Kantor Desa Libureng</h4>
                        <p class="text-black-50 mb-0">Kantor Desa Libureng merupakan salah satu pusat pemerintahan dan
                            Pelayanan Publik Desa yang berada di kecamatan Tanete Riaja tepatnya di Jl. Poros soppeng,
                            Dusun Panincong, Desa Libureng, kabupaten Barru. Provinsi Sulawesi selatan, Indonesia. Kode
                            pos 90762. !</p>
                    </div>
                </div>
            </div>
            <!-- Project One Row-->
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid"
                        src="{{ asset('grayscale/dist/') }}/assets/img/demo-image-01.jpg" alt="..." />
                </div>
                <div class="col-lg-6">
                    <div class="bg-black  h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto  text-lg-left">
                                <h5 class="text-white">Visi</h5>
                                <p class="mb-1 text-white-50">1. Optimalisasi Pelayanan berarti
                                    Mewujudkan harmonisasi
                                    antar kelembagaan yang ada di desa libureng sehingga terjalin sinergitas kinerja
                                    yang optimal
                                </p>
                                <p class="mb-1 text-white-50">2. Maju berarti: Meningkatkan dan
                                    Pengembangan kecakapan
                                    hidup dan keterampilan masyarakat agar tumbuh kemandirian menuju kemajuan kehidupan
                                    dan peningkatan kesejatraan Masyarakat di Desa.
                                </p>
                                <p class="mb-1 text-white-50">3. Mandiri berarti: mampu dan
                                    siap serta bertanggung jawab
                                    dalam melaksanakan tata kelola Pemerintahan desa dengan melibatkan seluruh elemen
                                    dan unsur masyarakat desa secara, swadaya,swakelola, dan swasembada
                                </p>
                                <p class="mb-1 text-white-50">4. Sejarah berarti: Tercukupinya
                                    kebutuhan pokok material
                                    dan spiritual bagi masyarakat, yang ditandai dengan meningkatnya kualitas kehidupan
                                    perekonimian, derajat kesehatan dan kualitas sumberdaya manusia bagi seluruh
                                    masyarakat yang di dukung oleh kepastian hukum dan Hak Azasi manusia.
                                </p>
                                {{-- <hr class="d-none d-lg-block mb-0 ms-0" /> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project Two Row-->
            <div class="row gx-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid"
                        src="{{ asset('grayscale/dist/') }}/assets/img/demo-image-02.jpg" alt="..." />
                </div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-black h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto  text-lg-right">
                                <h4 class="text-white">Misi</h4>
                                <p class="mb-1 text-white-50">1. Meningkatkan Pelanyanan aparatur desa bag pemenuhan
                                    pelayanan public Meningkatkan Pembangunan Infrastruktur yang mendukung perekonomian
                                    desa
                                </p>
                                <p class="mb-1 text-white-50"> 2. Meningkatkan Pembangunan di bidang Ilmu Pengetahuan
                                    untuk mendorong peningkatan
                                    kualitas sumber daya manusia agar memliki kecerdasan dan daya sain yang lebi baik
                                </p>
                                <p class="mb-1 text-white-50">3. Meningkatkan Pembangunan Ekonomi dengan mendorong
                                    semakin tumbuh dan
                                    berkembangnya pembangunan di Bidang Pertanian, Usaha Kecil dan Parawisata yang ada
                                    di Desa
                                </p>
                                <p class="mb-1 text-white-50">
                                    4. Mewujutkan SDM yang sehat,cerdas, produktif dan berdaya sain Menciptakan
                                    masyarakat yang memiliki kearifan budaya local kondisi social yang baik menhadapi
                                    tantangan arus gelobalisasi dengan berlandaskan ketuhanan yang Maha Esa
                                </p>
                                {{-- <hr class="d-none d-lg-block mb-0 me-0" /> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Signup-->
    <section class="signup-section" id="signup">
        <div class="row text-center">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5923.340551702791!2d119.7152588069018!3d-4.51618178412376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbe23140207fcc9%3A0x477fb62bdc54dcaa!2sMasjid%20Nurul%20Amin!5e0!3m2!1sen!2sid!4v1657871041407!5m2!1sen!2sid"
                width="100" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </section>

    <!-- Contact-->
    <section class="contact-section bg-black">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Address</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">Jl. Poros soppeng, Dusun Panincong, Desa Libureng,
                                kabupaten Barru. Provinsi Sulawesi selatan, Indonesia.</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50"><a href="#!">hello@yourdomain.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Phone</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">0858 – 2323 - 4704</div>
                            <div class="small text-black-50">0877 - 7909 - 8453</div>
                            <div class="small text-black-50">0823 – 9308 - 8112</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-flex justify-content-center">
                <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; Your Website 2022</div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('grayscale/dist/') }}/js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>

</html>
