<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- SEO Meta -->
        <title>{{ config('app.name') }} | Soluciones digitales: Web, Apps e IoT a tu medida</title>
        <meta name="description" content="En {{ $empresa->nombre_empresa }} desarrollamos soluciones digitales a medida: plataformas web, apps móviles, sistemas IoT y Academia Full Stack. Transformamos tu entorno digital con innovación." />
        <meta name="keywords" content="desarrollo web, desarrollo de apps, soluciones IoT, desarrollo full stack, Academia Full Stack, tecnología a medida, software empresarial, transformación digital" />
        <meta name="author" content="{{ $empresa->nombre_empresa }}" />
        <meta name="robots" content="index, follow" />

        <!-- Open Graph (Facebook / LinkedIn) -->
        <meta property="og:title" content="{{ $empresa->nombre_empresa }} | Soluciones digitales innovadoras" />
        <meta property="og:description" content="Creamos plataformas web, apps, soluciones IoT y formación tech para transformar tu empresa con tecnología escalable." />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ url()->current() }}" />
        <meta property="og:image" content="{{ asset('assets/imgs/meta/og.png') }}" />
        <meta property="og:site_name" content="{{ $empresa->nombre_empresa }}" />

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="{{ $empresa->nombre_empresa }} | Web, Apps e IoT para tu empresa" />
        <meta name="twitter:description" content="Impulsa tu entorno digital con desarrollo web, apps móviles, IoT y Academia Full Stack personalizados." />
        <meta name="twitter:image" content="{{ asset('assets/imgs/meta/tw.png') }}" />

        <!-- Datos estructurados JSON-LD -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "{{ $empresa->nombre_empresa }}",
            "url": "{{ $empresa->sitio_web }}",
            "logo": "{{ asset('logo.png') }}",
            "description": "En {{ $empresa->nombre_empresa }} desarrollamos soluciones digitales como plataformas web, apps móviles, sistemas IoT y Academia Full Stack para transformar tu entorno digital.",
            "foundingDate": "2021",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "{{ $empresa->direccion }}",
                "addressCountry": "EC"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "{{ $empresa->telefono }}",
                "contactType": "Customer Service",
                "areaServed": "EC",
                "availableLanguage": ["Spanish", "English"]
            },
            "sameAs": [
                @if($empresa->enlace_whatsapp)"{{ $empresa->enlace_whatsapp }}",@endif
                @if($empresa->enlace_facebook)"{{ $empresa->enlace_facebook }}",@endif
                @if($empresa->enlace_instagram)"{{ $empresa->enlace_instagram }}",@endif
                @if($empresa->enlace_youtube)"{{ $empresa->enlace_youtube }}",@endif
                @if($empresa->enlace_github)"{{ $empresa->enlace_github }}",@endif
                @if($empresa->enlace_tiktok)"{{ $empresa->enlace_tiktok }}"@endif
            ]
        }
        </script>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('logo.svg') }}" />

        <!-- Libs CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/vendors/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/vendors/swiper-bundle.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/vendors/aos.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/vendors/odometer.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/vendors/carouselTicker.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/vendors/magnific-popup.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/fonts/remixicon/remixicon.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/fonts/satoshi/satoshi.css') }}" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@300;400;500&family=Playfair+Display:wght@400..900&family=Urbanist:wght@100..900&display=swap" rel="stylesheet" />

        <!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
        <link href="{{ asset('assets/fonts/bootstrpa-icons/bootstrap-icons.min.css') }}" rel="stylesheet">

        <!-- Color Mode Script -->
        <script src="{{ asset('assets/js/vendors/color-modes.js') }}"></script>
    </head>

    <body class="home-page-2">
    <!-- prettier-ignore -->
    <!--Preloader-->
    <div id="preloader">
        <div class="loader-cover">
            <div class="loader-container">
                <div class="loader-icon-2"></div>
            </div>
        </div>
    </div>
    <!--Preloader-end -->

    <!-- Navbar -->
    <header>
        <div class="container position-relative">
            {{-- menu desktop --}}
            <div class="position-relative">
                <nav class="navbar navbar-expand-lg navbar-home-2 flex-nowrap z-999 p-0 border border-1 rounded-3">
                    <a href="#" class="navbar-menu p-4 text-center square-100 menu-tigger icon_80 icon-shape d-none d-md-flex" data-bs-target=".offCanvas__info" aria-controls="offCanvas__info">
                        <i class="ri-menu-2-line"></i>
                    </a>
                    <div class="container py-3 px-4">
                        <a class="navbar-brand d-flex main-logo align-items-center" href="{{ route('welcome') }}">
                            <img src="{{ asset('assets/imgs/home-page-2/template/favicon.svg') }}" alt="Person Technology" />
                            
                            <span  class="fs-5 ms-0" >PersonTechnology</span>
                        </a>
                        <div class="d-none d-lg-flex">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                
                               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <!-- INICIO -->
                                    <li class="nav-item">
                                        <a class="nav-link {{ Route::is('welcome')?'active':'' }}" href="{{ route('welcome') }}">Inicio</a>
                                    </li>

                                    <!-- EMPRESA -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle {{ Route::is('empresa.*')?'active':'' }}" href="#" id="navbarDropdownEmpresa" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Empresa
                                        </a>
                                        <ul class="dropdown-menu " aria-labelledby="navbarDropdownEmpresa">
                                            <li><a class="dropdown-item {{ Route::is('empresa.quienes-somos')?'text-primary-2':'' }}" href="{{ route('empresa.quienes-somos') }}">Quiénes somos</a></li>
                                            <li><a class="dropdown-item {{ Route::is('empresa.mision-vision')?'text-primary-2':'' }}" href="{{ route('empresa.mision-vision') }}">Misión y visión</a></li>
                                            <li><a class="dropdown-item {{ Route::is('empresa.nuestro-equipo')?'text-primary-2':'' }}" href="{{ route('empresa.nuestro-equipo') }}">Equipo</a></li>
                                            <li><a class="dropdown-item {{ Route::is('empresa.nuestro-proceso-trabajo')?'text-primary-2':'' }}" href="{{ route('empresa.nuestro-proceso-trabajo') }}">Proceso de trabajo</a></li>
                                        </ul>
                                    </li>

                                    <!-- SOLUCIONES -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle {{ Route::is('servicios.*')?'active':'' }}" href="#" id="navbarDropdownSoluciones" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Servicios
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownSoluciones">
                                            <li><a class="dropdown-item {{ Route::is('servicios.desarrollo-web')?'text-primary-2':'' }}" href="{{ route('servicios.desarrollo-web') }}">Desarrollo Web</a></li>
                                            <li><a class="dropdown-item {{ Route::is('servicios.aplicaciones-mobiles')?'text-primary-2':'' }}" href="{{ route('servicios.aplicaciones-mobiles') }}">Aplicaciones Móviles</a></li>
                                            <li><a class="dropdown-item {{ Route::is('servicios.desarrollo-full-stack')?'text-primary-2':'' }}" href="{{ route('servicios.desarrollo-full-stack') }}">Desarrollo Full Stack</a></li>
                                            <li><a class="dropdown-item {{ Route::is('servicios.soluciones-iot')?'text-primary-2':'' }}" href="{{ route('servicios.soluciones-iot') }}">Soluciones IoT</a></li>
                                            
                                            <li><a class="dropdown-item {{ Route::is('servicios.academia-full-stack')?'text-primary-2':'' }}" href="{{ route('servicios.academia-full-stack') }}">Academia Full Stack</a></li>
                                            <li><a class="dropdown-item {{ Route::is('servicios.soporte-tecnico')?'text-primary-2':'' }}" href="{{ route('servicios.soporte-tecnico') }}">Soporte Técnico</a></li>
                                            
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ Route::is('contacto.index')?'active':'' }}" href="{{ route('contacto.index') }}">Contacto</a>
                                    </li>

                                    {{-- <!-- COMUNIDAD -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownComunidad" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Comunidad
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownComunidad">
                                            <li><a class="dropdown-item" href="#contacto">Contacto</a></li>
                                            <li><a class="dropdown-item" href="#noticias">Noticias</a></li>
                                            <li><a class="dropdown-item" href="#faq">Preguntas Frecuentes</a></li>
                                            <li><a class="dropdown-item" href="#soporte">Soporte Técnico</a></li>
                                        </ul>
                                    </li> --}}
                                </ul>




                            </div>
                        </div>
                        <div class="navbar-social d-flex align-items-center pe-5 pe-lg-0 me-5 me-lg-0">
                            <div class="d-md-flex d-none gap-2">
                                @if ($empresa?->enlace_whatsapp)
                                    <a href="{{ $empresa->enlace_whatsapp }}" target="_blank"  title="WhatsApp">
                                        <i class="ri-whatsapp-fill fs-18"></i>
                                    </a>
                                @endif

                                @if ($empresa?->enlace_facebook)
                                    <a href="{{ $empresa->enlace_facebook }}" target="_blank"  title="Facebook">
                                        <i class="ri-facebook-circle-fill fs-18"></i>
                                    </a>
                                @endif

                                @if ($empresa?->enlace_instagram)
                                    <a href="{{ $empresa->enlace_instagram }}" target="_blank"  title="Instagram">
                                        <i class="ri-instagram-fill fs-18"></i>
                                    </a>
                                @endif

                                @if ($empresa?->enlace_tiktok)
                                    <a href="{{ $empresa->enlace_tiktok }}" target="_blank"  title="TikTok">
                                        <i class="ri-tiktok-fill fs-18"></i>
                                    </a>
                                @endif
                            </div>

                            <div class="burger-icon burger-icon-white border rounded-3">
                                <span class="burger-icon-top"></span>
                                <span class="burger-icon-mid"></span>
                                <span class="burger-icon-bottom"></span>
                            </div>
                        </div>
                    </div>
                    <div class="dark-light-switcher pe-10 pe-lg-0 pe-0 ps-md-5 ps-0 ps-lg-4 pe-lg-4 d-flex justify-content-center align-items-center icon_80 @@classList">
                        <i class="ri-sun-fill text-warning"></i>
                        <i class="ri-contrast-2-line text-white"></i>
                    </div>

                </nav>
            </div>
            <!-- offCanvas-menu -->
            <div class="offCanvas__info style-2">
                <div class="offCanvas__close-icon menu-close">
                    <button><i class="ri-close-line"></i></button>
                </div>
                <div class="offCanvas__logo mb-5">
                    <h3 class="mb-0">Contáctanos</h3>
                </div>
                <div class="offCanvas__side-info mb-30">
                    <div class="contact-list mb-30">
                        <p class="fs-6 fw-medium text-200 mb-5">
                            En {{ $empresa->nombre_empresa }} estamos listos para ayudarte a transformar tu entorno digital con soluciones inteligentes y a medida.
                        </p>

                        <div class="mb-3">
                            <span class="text-400 fs-5 text-primary-2">
                                <i class="ri-phone-fill me-1"></i> Teléfono / WhatsApp
                            </span>
                            <p class="mb-0">
                                <a href="{{ $empresa->enlace_whatsapp }}" target="_blank">{{ $empresa->telefono }}</a>
                            </p>
                        </div>

                        <div class="mb-3">
                            <span class="text-400 fs-5 text-primary-2">
                                <i class="ri-mail-fill me-1"></i> Email
                            </span>
                            <p class="mb-0">
                                <a href="mailto:{{ $empresa->correo }}">{{ $empresa->correo }}</a>
                            </p>
                        </div>

                        <div class="mb-3">
                            <span class="text-400 fs-5 text-primary-2">
                                <i class="ri-global-line me-1"></i> Sitio web
                            </span>
                            <p class="mb-0">
                                <a href="{{ $empresa->sitio_web }}">{{ parse_url($empresa->sitio_web, PHP_URL_HOST) }}</a>
                            </p>
                        </div>

                        <div class="mb-3">
                            <span class="text-400 fs-5 text-primary-2">
                                <i class="ri-map-pin-line me-1"></i> Dirección
                            </span>
                            <p class="mb-0">{{ $empresa->direccion }}</p>
                        </div>
                    </div>

                    <div class="contact-list">
                        <p class="text-400 fs-5 mb-2">
                            <i class="ri-share-forward-fill me-1"></i> Redes sociales
                        </p>
                        <div class="d-md-flex d-none gap-3">
                            @if($empresa->enlace_whatsapp)
                                <a href="{{ $empresa->enlace_whatsapp }}" target="_blank" title="WhatsApp">
                                    <i class="ri-whatsapp-fill fs-18"></i>
                                </a>
                            @endif
                            @if($empresa->enlace_facebook)
                                <a href="{{ $empresa->enlace_facebook }}" target="_blank" title="Facebook">
                                    <i class="ri-facebook-circle-fill fs-18"></i>
                                </a>
                            @endif
                            @if($empresa->enlace_instagram)
                                <a href="{{ $empresa->enlace_instagram }}" target="_blank" title="Instagram">
                                    <i class="ri-instagram-fill fs-18"></i>
                                </a>
                            @endif
                            @if($empresa->enlace_youtube)
                                <a href="{{ $empresa->enlace_youtube }}" target="_blank" title="YouTube">
                                    <i class="ri-youtube-fill fs-18"></i>
                                </a>
                            @endif
                            @if($empresa->enlace_github)
                                <a href="{{ $empresa->enlace_github }}" target="_blank" title="GitHub">
                                    <i class="ri-github-fill fs-18"></i>
                                </a>
                            @endif
                            @if($empresa->enlace_tiktok)
                                <a href="{{ $empresa->enlace_tiktok }}" target="_blank" title="TikTok">
                                    <i class="ri-tiktok-fill fs-18"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>

            </div>

            <div class="offCanvas__overly"></div>
            {{-- menu mobile --}}
            <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar button-bg-2">
                <div class="mobile-header-wrapper-inner">
                    <div class="mobile-header-logo">
                        <a class="d-flex main-logo align-items-center d-inline-flex" href="index.html">
                            <img src="{{ asset('assets/imgs/home-page-2/template/favicon.svg') }}" alt="Person Technology" />
                            <span class="fs-4 ms-2 text-dark ">PersonTechnology</span>
                        </a>
                        <div class="burger-icon burger-icon-white border rounded-3">
                            <span class="burger-icon-top"></span>
                            <span class="burger-icon-mid"></span>
                            <span class="burger-icon-bottom"></span>
                        </div>
                    </div>
                    <div class="mobile-header-content-area">
                        <div class="perfect-scroll">
                            <div class="mobile-menu-wrap mobile-header-border">
                                <nav>
                                    <ul class="mobile-menu font-heading ps-0">
                                        <!-- INICIO -->
                                        <li class="nav-item">
                                            <a class="nav-link {{ Route::is('welcome') ? 'text-primary-2' : '' }}" href="{{ route('welcome') }}">Inicio</a>
                                        </li>

                                        <!-- EMPRESA -->
                                        <li class="nav-item has-children">
                                            <a class="nav-link {{ Route::is('empresa.*') ? 'active' : '' }}" href="#">
                                                Empresa
                                            </a>
                                            <ul class="sub-menu {{ Route::is('empresa.*') ? 'show' : '' }}">
                                                <li>
                                                    <a class="{{ Route::is('empresa.quienes-somos') ? 'text-primary-2' : '' }}" href="{{ route('empresa.quienes-somos') }}">
                                                        Quiénes somos
                                                    </a>
                                                </li>
                                                <li><a class="{{ Route::is('empresa.mision-vision') ? 'text-primary-2' : '' }}" href="{{ route('empresa.mision-vision') }}">Misión y visión</a></li>
                                                <li><a class="{{ Route::is('empresa.nuestro-equipo') ? 'text-primary-2' : '' }}" href="{{ route('empresa.nuestro-equipo') }}">Equipo</a></li>
                                            </ul>
                                        </li>


                                        <!-- SOLUCIONES -->
                                        <li class="nav-item has-children">
                                            <a class="nav-link" href="#">Soluciones</a>
                                            <ul class="sub-menu">
                                                <li><a href="#servicio-web">Desarrollo Web</a></li>
                                                <li><a href="#servicio-apps">Aplicaciones Móviles</a></li>
                                                <li><a href="#servicio-fullstack">Full Stack & Backend</a></li>
                                                <li><a href="#servicio-iot">Soluciones IoT</a></li>
                                                <li><a href="#curso-fullstack">Academia Full Stack</a></li>
                                                <li><a href="#servicio-soporte">Soporte Técnico</a></li>
                                            </ul>
                                        </li>

                                        <!-- COMUNIDAD -->
                                        <li class="nav-item has-children">
                                            <a class="nav-link" href="#">Comunidad</a>
                                            <ul class="sub-menu">
                                                <li><a href="#contacto">Contacto</a></li>
                                                <li><a href="#noticias">Noticias</a></li>
                                                <li><a href="#faq">Preguntas Frecuentes</a></li>
                                                <li><a href="#soporte">Soporte Técnico</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>

    <main>
        
        @yield('content')



    </main>
        <!-- prettier-ignore -->
    <!-- Footer -->
    <footer>
        <div class="section-footer-2 position-relative">
            <div class="container position-relative z-1 border-top border-1 pb-2 pt-4">
                <div class="text-center">
                    <a class="d-flex main-logo align-items-center justify-content-center mb-3" href="">
                        <img src="{{ asset('assets/imgs/home-page-2/template/favicon.svg') }}" alt="Person Technology" />
                        <span class="fs-4 ms-2">PersonTechnology</span>
                    </a>
                    <div class="d-flex justify-content-center gap-3">
                        @if ($empresa?->enlace_whatsapp)
                            <a href="{{ $empresa->enlace_whatsapp }}" target="_blank" title="WhatsApp">
                                <i class="ri-whatsapp-fill fs-18"></i>
                            </a>
                        @endif

                        @if ($empresa?->enlace_facebook)
                            <a href="{{ $empresa->enlace_facebook }}" target="_blank" title="Facebook">
                                <i class="ri-facebook-circle-fill fs-18"></i>
                            </a>
                        @endif

                        @if ($empresa?->enlace_instagram)
                            <a href="{{ $empresa->enlace_instagram }}" target="_blank" title="Instagram">
                                <i class="ri-instagram-fill fs-18"></i>
                            </a>
                        @endif

                        @if ($empresa?->enlace_youtube)
                            <a href="{{ $empresa->enlace_youtube }}" target="_blank" title="YouTube">
                                <i class="ri-youtube-fill fs-18"></i>
                            </a>
                        @endif

                        @if ($empresa?->enlace_github)
                            <a href="{{ $empresa->enlace_github }}" target="_blank" title="GitHub">
                                <i class="ri-github-fill fs-18"></i>
                            </a>
                        @endif

                        @if ($empresa?->enlace_tiktok)
                            <a href="{{ $empresa->enlace_tiktok }}" target="_blank" title="TikTok">
                                <i class="ri-tiktok-fill fs-18"></i>
                            </a>
                        @endif
                    </div>

                    <div class="navigation d-flex align-items-center justify-content-center flex-wrap gap-4 my-4">
                        <!-- Aquí el copyright -->
                    <div class="text-center text-300 small pb-4">
                        &copy; {{ date('Y') }} <strong>Person Technology</strong>. Todos los derechos reservados. Desarrollamos el futuro, hoy.
                    </div>
                    </div>

                    

                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll top -->
    <div class="btn-scroll-top style-btn-2">
        <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
            <path d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
        </svg>
    </div>

        <!-- Libs JS -->
    <script src="{{ asset('assets/js/vendors/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/aos.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/smart-stick-nav.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/jquery.carouselTicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/jquery.odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/gsap-custom.js') }}"></script>
    <script src="{{ asset('assets/js/imageRevealHover.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/aat.min.js') }}"></script>
    <!-- Theme JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @stack('scripts')

 
    </body>
</html>
