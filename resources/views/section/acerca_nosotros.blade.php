<section id="about" class="section-hero-2 position-relative pt-130 pb-3">
    <div class="container hero-2">
        <div class="border border-1 rounded-3">
            <div class="box-linear-animation position-relative z-1">
                <div class="row align-items-end py-60">
                    <div class="col-lg-5 ps-lg-5 text-lg-start text-center">
                        <div class="position-relative mb-lg-0 mb-5">
                            <video 
                                src="{{ asset('assets/video/inicio.mp4') }}" 
                                autoplay 
                                muted 
                                loop 
                                playsinline 
                                poster="{{ asset('assets/video/inicio.png') }}" 
                                class="img-fluid rounded w-100"
                            >
                                Tu navegador no admite la etiqueta de video.
                            </video>
                            <div class="position-absolute end-0 top-100 translate-middle-y icon-decorate">
                                <img src="{{ asset('assets/imgs/home-page-2/hero-1/icon.svg') }}" alt="Icono decorativo" />
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mx-lg-auto col-md-12">
                        <div class="p-lg-0 p-md-8 p-3">
                            <div class="text-secondary-2 d-flex align-items-center">
                                &lt;span&gt;
                                <div class="text-dark">
                                    <div class="typewriter"><h1 class="fs-6 fw-medium">Desarrollamos el futuro, hoy</h1></div>
                                </div>
                                &lt;/span&gt;
                            </div>
                            <h1 class="fs-50 my-3">Desarrollamos <span class="text-linear-4">{Web, Apps e IoT}</span> escalables<span class="flicker">_</span></h1>
                            <p class="mb-6 text-secondary-2">&lt;p&gt;<span class="text-dark">Creamos soluciones digitales a la medida como</span> <span class="text-secondary-2">plataformas web</span>, <span class="text-secondary-2">apps móviles</span>, <span class="text-secondary-2">sistemas IoT</span> y <span class="text-secondary-2">cursos full stack</span><span class="text-dark">... todo para transformar el entorno digital de tu empresa con tecnología innovadora.</span>&lt;/p&gt;</p>

                            <div class="row">
                                <div class="col-7">
                                    <!-- Carousel Scroll -->
                                    <div class="carouselTicker carouselTicker-left position-relative z-1 mt-lg-0 mt-8">
                                        <ul class="carouselTicker__list">
                                            <li class="carouselTicker__item">
                                                <a href="#" class="brand-logo icon_60 icon-shape rounded-3">
                                                    <img src="{{ asset('assets/imgs/home-page-2/hero-1/icon-1.svg') }}" alt="Web" />
                                                </a>
                                            </li>
                                            <li class="carouselTicker__item">
                                                <a href="#" class="brand-logo icon_60 icon-shape rounded-3">
                                                    <img src="{{ asset('assets/imgs/home-page-2/hero-1/icon-2.svg') }}" alt="Apps" />
                                                </a>
                                            </li>
                                            <li class="carouselTicker__item">
                                                <a href="#" class="brand-logo icon_60 icon-shape rounded-3">
                                                    <img src="{{ asset('assets/imgs/home-page-2/hero-1/icon-3.svg') }}" alt="Full Stack" />
                                                </a>
                                            </li>
                                            <li class="carouselTicker__item">
                                                <a href="#" class="brand-logo icon_60 icon-shape rounded-3">
                                                    <img src="{{ asset('assets/imgs/home-page-2/hero-1/icon-4.svg') }}" alt="IoT" />
                                                </a>
                                            </li>
                                            <li class="carouselTicker__item">
                                                <a href="#" class="brand-logo icon_60 icon-shape rounded-3">
                                                    <img src="{{ asset('assets/imgs/home-page-2/hero-1/icon-5.svg') }}" alt="Soporte" />
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-5 d-flex align-items-end">
                                    <span class="fs-6 text-300 mb-2">...y pronto: Cursos Full Stack</span>
                                </div>
                            </div>
                            <a href="{{ asset('info/Person Technology.pdf') }}" target="_blank" class="btn me-2 text-300 ps-0 mt-4">
                                <i class="ri-file-list-3-line text-primary-2"></i>
                                [ Mira nuestra presentación empresarial ]
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="background position-absolute top-0 start-0 w-100 h-100">
        <img class="bg-w" src="{{ asset('assets/imgs/home-page-2/hero-1/bg.png') }}" alt="Fondo claro" />
        <img class="bg-d" src="{{ asset('assets/imgs/home-page-2/hero-1/bg-dark.png') }}" alt="Fondo oscuro" />
    </div>
</section>