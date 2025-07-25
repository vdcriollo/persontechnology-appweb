<section id="blog" class="section-blog-2 position-relative pt-60 pb-60">
    <div class="container">
        <div class="text-center">
            <div class="d-flex align-items-center justify-content-center">
                <svg class="text-primary-2 me-2" xmlns="http://www.w3.org/2000/svg" width="5" height="6" viewBox="0 0 5 6" fill="none">
                    <circle cx="2.5" cy="3" r="2.5" fill="#A8FF53" />
                </svg>
                <span class="text-linear-4 d-flex align-items-center">Últimas Noticias</span>
            </div>
            <h3>Nuestro Blog</h3>
        </div>
        <div class="row mt-8">
            @foreach(App\Models\Noticia::latest()->take(3)->get() as $noticia)
            <!--prettier-ignore-->
            <div class="col-lg-4">
                <div class="blog-card rounded-top-2 mb-lg-3 mb-md-5 mb-3">
                    <div class="blog-card__image position-relative">
                        <div class="zoom-img rounded-2 overflow-hidden">
                            <img class="w-100" src="{{ Storage::url($noticia->imagen) }}" alt="{{ $noticia->titulo }}" />
                            <a class="position-absolute bottom-0 start-0 m-3 text-300 border border-white fw-medium px-3 py-1 fs-7 bg-white rounded-2 categoria" href="#">
                                {{ $noticia->categoria }}
                            </a>
                            <a href="#" class="blog-card__link position-absolute top-50 start-50 translate-middle icon-md icon-shape rounded-circle">
                                <i class="ri-arrow-right-up-line"></i>
                            </a>
                        </div>
                    </div>
                    <div class="blog-card__content position-relative text-center mt-4">
                        <span class="blog-card__date fs-7">
                            {{ $noticia->fecha_formateada }} • {{ $noticia->tiempo_lectura }} min
                        </span>
                        <h6 class="blog-card__title mt-2">{{ $noticia->titulo }}</h6>
                        <p class="blog-card__description fs-7">{{ $noticia->resumen }}</p>
                        <a href="#" class="link-overlay position-absolute top-0 start-0 w-100 h-100"></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>