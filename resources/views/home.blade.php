@extends('template.base')

@section('judul', 'Home')

@section('content')
    <section id="home">
        <div class="slider-block style-two">
            <div class="slider-main">
                <div class="container flex-center h-100">
                    <div class="row flex-center w-100">
                        <div class="col-lg-9 text-center">
                            <div class="heading2 text-center text-scroll-bottom-to-top1">Selesaikan <span
                                    class="text-scroll-bottom-to-top2">Semua </span><span
                                    class="text-scroll-bottom-to-top3">Dengan </span><span
                                    class="text-scroll-bottom-to-top4">Website</span><span
                                    class="text-scroll-bottom-to-top5">To
                                    do list </span><span class="text-scroll-bottom-to-top6">Simple </span><span
                                    class="text-scroll-bottom-to-top7">Yang Mudah </span><span
                                    class="text-scroll-bottom-to-top8">Digunakan </span></div>
                        </div>
                        <div class="col-lg-8 text-center">
                            <div class="body2 text-placehover mt-24">Gunakan Website ini untuk data tugas dengan todolist
                                agar
                                mudah membuat daftar tugas.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="service">
        <div class="services-block style-two bg-white pt-100 pb-100">
            <div class="container">
                <div class="heading row flex-between row-gap-16">
                    <div class="col-lg-8">
                        <div class="text-subtitle pt-8 pb-8 pl-20 pr-20 bg-green display-inline-block bora-99">Todolist
                            Project
                        </div>
                        <div class="heading3 text-on-surface mt-24">Buat Aktifitas Mudah dengan To Do List</div>
                    </div>
                    <div class="col-lg-4 pr-40 pr-col-lg-0">
                        <div class="body1 text-secondary">Permudah semua pekerjaan dan aktifitas dengan membuat semua jadwal
                            di
                            todolist ini.</div>
                    </div>
                </div>
                <div class="list row row-gap-32 mt-40">
                    <div class="col-xl-3 col-sm-6 scroll-bottom-to-top1">
                        <div class="service-item hover-box-shadow pl-24 pr-24 pt-40 pb-32 bora-32 border-line h-100"><a
                                class="service-item-main" href="services-detail.html">
                                <div class="heading"><i class="icon-chart-box fs-60"></i></div>
                                <div class="desc mt-24">
                                    <div class="heading6 text-on-surface">Mudah Digunakan</div>
                                    <div class="text-secondary mt-12">Todolist ini mudah digunakan karena berbasis website
                                        dan
                                        bisa akses kapan saja.</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 scroll-bottom-to-top2">
                        <div class="service-item hover-box-shadow pl-24 pr-24 pt-40 pb-32 bora-32 border-line h-100"><a
                                class="service-item-main" href="services-detail.html">
                                <div class="heading"><i class="icon-classify fs-60"></i></div>
                                <div class="desc mt-24">
                                    <div class="heading6 text-on-surface">Mudah di Kostumisasi</div>
                                    <div class="text-secondary mt-12">Todolist ini mudah di kostum seperti ubah jadwal
                                        deadline
                                        dan lain lain.</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 scroll-bottom-to-top3">
                        <div class="service-item hover-box-shadow pl-24 pr-24 pt-40 pb-32 bora-32 border-line h-100"><a
                                class="service-item-main" href="services-detail.html">
                                <div class="heading"><i class="icon-infinite fs-60"></i></div>
                                <div class="desc mt-24">
                                    <div class="heading6 text-on-surface">Akses Mudah dan Aman</div>
                                    <div class="text-secondary mt-12">Akses todolist dengan mudah dan aman karena memakai
                                        system
                                        authentikasi dengan password yang di hash jadi admin tidak bisa melihat password
                                        user.
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 scroll-bottom-to-top4">
                        <div class="service-item hover-box-shadow pl-24 pr-24 pt-40 pb-32 bora-32 border-line h-100"><a
                                class="service-item-main" href="services-detail.html">
                                <div class="heading"><i class="icon-share fs-60"></i></div>
                                <div class="desc mt-24">
                                    <div class="heading6 text-on-surface">User Friendly</div>
                                    <div class="text-secondary mt-12">Todolist ini user Friendly karena jika ada bug atau
                                        kebingungan kalian bisa contact developer untuk meminta dokumentasi.</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="counter bg-surface pt-80 pb-80">
        <div class="container">
            <div class="row flex-between row-gap-40">
                <div class="col-lg-5 pr-16 pr-col-lg-0">
                    <div class="heading3 text-on-surface">Todolist based dengan website</div>
                    <div class="body2 text-secondary mt-24">Mudah di gunakan dan bisa di kostumisasi berdasarkan kreatifitas
                        dengan data yang di hash dan encypt dengan aman.</div>
                </div>
                <div class="col-lg-6 pl-0 pl-col-lg-0 flex-between gap-16">
                    <div class="item">
                        <div class="icon flex-center w-60 h-60 bg-green bora-50 d-inline-flex"> <i
                                class="ph-bold ph-check fs-24 text-white"></i></div>
                        <div class="count-number heading2 text-on-surface mt-20">350</div>
                        <div class="body1 text-secondary mt-8">Total Pengguna</div>
                    </div>
                    <div class="item">
                        <div class="icon flex-center w-60 h-60 bg-green bora-50 d-inline-flex"> <i
                                class="ph-bold ph-check fs-24 text-white"></i></div>
                        <div class="count-number heading2 text-on-surface mt-20">2500</div>
                        <div class="body1 text-secondary mt-8">Total Task</div>
                    </div>
                    <div class="item">
                        <div class="icon flex-center w-60 h-60 bg-green bora-50 d-inline-flex"><i
                                class="ph-bold ph-check fs-24 text-white"></i></div>
                        <div class="flex-item-center mt-20">
                            <div class="count-number heading2 text-on-surface">99</div><span
                                class="heading2 text-on-surface">%</span>
                        </div>
                        <div class="body1 text-secondary mt-8">Uptime Server</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-block style-two bg-white pt-100 pb-100">
        <div class="container">
            <div class="row flex-between row-gap-40">
                <div class="col-lg-5 pr-0 pr-col-lg-0"><img class="w-100 bora-24"
                        src="{{ asset('assets/images/todolist-img.png') }}" alt="" />
                    <div class="infor bg-white p-24 bora-12 scroll-bottom-to-top5">
                        <div class="heading5 text-on-surface">technology <br>Gen Z</div>
                    </div>
                </div>
                <div class="col-lg-6 pl-0 pl-col-lg-0">
                    <div
                        class="text-subtitle pt-8 pb-8 pl-20 pr-20 bg-green display-inline-block bora-99 scroll-right-to-left1">
                        Tentang Kami</div>
                    <div class="heading3 text-on-surface mt-32 scroll-right-to-left2">Buat Planning Bisnis dan penugasan
                        dengan mudah dengan kami</div>
                    <div class="body2 text-secondary mt-32 scroll-right-to-left3">Data dijaga aman dan task tidak akan
                        bocor karena semua user di hash dan di encypt. Selain itu mudah digunakan dan di kostumisasi</div>
                    <div class="list-service mt-24 scroll-right-to-left4">
                        <div class="service-item flex-item-center"><i class="ph-bold ph-check text-green fs-24"></i>
                            <div class="heading7 text-on-surface pl-12">Gratis konsultasi Ke Developer</div>
                        </div>
                        <div class="service-item flex-item-center mt-12"><i class="ph-bold ph-check text-green fs-24"></i>
                            <div class="heading7 text-on-surface pl-12">Server Teroptimalisasi</div>
                        </div>
                        <div class="service-item flex-item-center mt-12"><i class="ph-bold ph-check text-green fs-24"></i>
                            <div class="heading7 text-on-surface pl-12">Bisa digunakan untuk Planning dengan deadline</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="team">
        <div class="testimonial-block style-two pt-100 pb-100 bg-surface">
            <div class="container">
                <div class="row flex-between row-gap-40">
                    <div class="col-lg-5 pr-0 pr-col-lg-0"><img class="w-100 bora-24"
                            src="{{ asset('assets/images/teamwork.jpg') }}" alt="" />
                    </div>
                    <div class="col-lg-6 pl-0 pl-col-lg-0">
                        <div class="heading3 text-on-surface">Team Project Kelompok!</div>
                        <div class="swiper list-comment-two mt-40">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="main-content bora-24">
                                        <div
                                            class="infor flex-item-center item-start gap-20 mt-24 pb-24 border-bottom-line">
                                            <div class="avatar flex-center"><img class="w-60 h-60"
                                                    src="{{ asset('assets/images/avatar/icon-user.png') }}"
                                                    alt="" /></div>
                                            <div class="desc">
                                                <div class="heading7 text-on-surface">Rasya Dika Pratama</div>
                                                <div class="text-secondary text-subtitle mt-12">Full Stack Developer</div>
                                            </div>
                                        </div>
                                        <div class="heading6 fw-500 text-on-surface mt-24">“Membuat Semua Feature Website
                                            dengan laravel untuk tech stacknya dan juga untuk FE nya memakai Tailwind dan
                                            Bootstrap”</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="main-content bora-24">
                                        <div
                                            class="infor flex-item-center item-start gap-20 mt-24 pb-24 border-bottom-line">
                                            <div class="avatar flex-center"><img class="w-60 h-60"
                                                    src="{{ asset('assets/images/avatar/icon-user.png') }}"
                                                    alt="" /></div>
                                            <div class="desc">
                                                <div class="heading7 text-on-surface">Zulfania Zafira Choerunnisa</div>
                                                <div class="text-secondary text-subtitle mt-12">Dokumenter</div>
                                            </div>
                                        </div>
                                        <div class="heading6 fw-500 text-on-surface mt-24">“Menyusun laporan website to do
                                            list
                                            untuk memenuhi tugas PAS.”</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="main-content bora-24">
                                        <div
                                            class="infor flex-item-center item-start gap-20 mt-24 pb-24 border-bottom-line">
                                            <div class="avatar flex-center"><img class="w-60 h-60"
                                                    src="{{ asset('assets/images/avatar/icon-user.png') }}"
                                                    alt="" /></div>
                                            <div class="desc">
                                                <div class="heading7 text-on-surface">Diva Salsabila</div>
                                                <div class="text-secondary text-subtitle mt-12">Dokumenter</div>
                                            </div>
                                        </div>
                                        <div class="heading6 fw-500 text-on-surface mt-24">“Menyusun laporan website to do
                                            list untuk memenuhi tugas PAS.”</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="main-content bora-24">
                                        <div
                                            class="infor flex-item-center item-start gap-20 mt-24 pb-24 border-bottom-line">
                                            <div class="avatar flex-center"><img class="w-60 h-60"
                                                    src="{{ asset('assets/images/avatar/icon-user.png') }}"
                                                    alt="" /></div>
                                            <div class="desc">
                                                <div class="heading7 text-on-surface">Rafi Oktarino</div>
                                                <div class="text-secondary text-subtitle mt-12">Dokumenter</div>
                                            </div>
                                        </div>
                                        <div class="heading6 fw-500 text-on-surface mt-24">“Menyusun laporan website to do list untuk memenuhi tugas PAS.”</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="main-content bora-24">
                                        <div
                                            class="infor flex-item-center item-start gap-20 mt-24 pb-24 border-bottom-line">
                                            <div class="avatar flex-center"><img class="w-60 h-60"
                                                    src="{{ asset('assets/images/avatar/icon-user.png') }}"
                                                    alt="" /></div>
                                            <div class="desc">
                                                <div class="heading7 text-on-surface">Eko rifki setyawan</div>
                                                <div class="text-secondary text-subtitle mt-12">Desainer</div>
                                            </div>
                                        </div>
                                        <div class="heading6 fw-500 text-on-surface mt-24">“Mendesign logo to do list dan
                                            membantu sedikit tentang laporan.”</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="main-content bora-24">
                                        <div
                                            class="infor flex-item-center item-start gap-20 mt-24 pb-24 border-bottom-line">
                                            <div class="avatar flex-center"><img class="w-60 h-60"
                                                    src="{{ asset('assets/images/avatar/icon-user.png') }}"
                                                    alt="" /></div>
                                            <div class="desc">
                                                <div class="heading7 text-on-surface">Rifki Prasetyo</div>
                                                <div class="text-secondary text-subtitle mt-12">Desainer</div>
                                            </div>
                                        </div>
                                        <div class="heading6 fw-500 text-on-surface mt-24">“Mendesign logo to do list dan
                                            membantu sedikit tentang laporan.”</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="banner-block style-two bg-green pt-80 pb-80">
        <div class="container">
            <div class="content">
                <div class="heading3 text-center"><i class="icon-star text-white fs-40 pl-8"></i><span
                        class="pl-8">Todolist Dengan Website, Lebih mudah digunakan dan di akses dimanampun dan kapanpun
                        dengan system user login yang memberikan proteksi agar lebih aman<i
                            class="icon-star text-white fs-40"></i></div>
            </div>
        </div>
    </div>
    <div class="style-green">
        <div id="preload">
            <div class="main-content flex-center">
                <div class="circle flex-center"><span></span>
                    <div class="circle-child"></div>
                </div>
                <div class="circle flex-center"></div>
            </div>
        </div>
    </div>
    <div class="style-two"><a class="scroll-to-top-btn" href="#header"><i class="ph-bold ph-caret-up"></i></a></div>

@endsection
