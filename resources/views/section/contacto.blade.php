<section id="contact" class="section-contact-2 position-relative pb-60 overflow-hidden">
        <div class="container position-relative z-1">
            <div class="row align-items-center">
                <div class="col-lg-7 pb-5 pb-lg-0">
                    <div class="position-relative">
                        <div class="position-relative z-2">
                            <h3 class="text-primary-2 mb-3">¿Listo para transformar tu entorno digital?</h3>
                            <p class="mb-4 text-300">
                                Cuéntanos tu idea o necesidad. En Person Technology respondemos en menos de 24h para ayudarte a crear soluciones inteligentes y personalizadas.
                            </p>
                            
                            {{-- se pone el id del contacto para renderisar al section, pilas --}}
                            @include('components.contact', ['sectionId' => 'contact'])


                            <p class="mt-3 small text-muted">
                                <i class="ri-lock-fill me-1"></i> Tu información está segura con nosotros.
                            </p>
                        </div>

                        <div class="z-0 bg-primary-dark rectangle-bg z-1 rounded-3"></div>
                    </div>

                </div>
                <div class="col-lg-5 d-flex flex-column ps-lg-8">
                    


                    {{-- Teléfono / WhatsApp --}}
                    @if($empresa?->telefono)
                    <div class="d-flex align-items-center mb-3 position-relative d-inline-flex">
                        <div class="d-inline-block">
                            <div class="icon-flip flex-nowrap icon-shape icon-xxl border border-1 rounded-3 bg-3">
                                <i class="ri-phone-fill text-primary-2 fs-26"></i>
                            </div>
                        </div>
                        <div class="ps-3 h-100">
                            <span class="text-400 fs-6">Teléfono / WhatsApp</span>
                            <h6 class="mb-0">{{ $empresa->telefono }}</h6>
                        </div>
                        <a href="tel:{{ preg_replace('/[^0-9+]/', '', $empresa->telefono) }}"
                        class="position-absolute top-0 start-0 w-100 h-100"></a>
                    </div>
                    @endif

                    {{-- Email --}}
                    @if($empresa?->correo)
                    <div class="d-flex align-items-center mb-3 position-relative d-inline-flex">
                        <div class="d-inline-block">
                            <div class="icon-flip flex-nowrap icon-shape icon-xxl border border-1 rounded-3 bg-3">
                                <i class="ri-mail-fill text-primary-2 fs-26"></i>
                            </div>
                        </div>
                        <div class="ps-3 h-100">
                            <span class="text-400 fs-6">Correo electrónico</span>
                            <h6 class="mb-0">{{ $empresa->correo }}</h6>
                        </div>
                        <a href="mailto:{{ $empresa->correo }}" class="position-absolute top-0 start-0 w-100 h-100"></a>
                    </div>
                    @endif

                    {{-- Dirección --}}
                    @if($empresa?->direccion)
                    <div class="d-flex align-items-center mb-3 position-relative d-inline-flex">
                        <div class="d-inline-block">
                            <div class="icon-flip flex-nowrap icon-shape icon-xxl border border-1 rounded-3 bg-3">
                                <i class="ri-map-2-fill text-primary-2 fs-26"></i>
                            </div>
                        </div>
                        <div class="ps-3 h-100">
                            <span class="text-400 fs-6">Dirección</span>
                            <h6 class="mb-0">{{ $empresa->direccion }}</h6>
                        </div>
                        <a href="https://maps.app.goo.gl/8zCSVboF4XASkA2WA"
                        class="position-absolute top-0 start-0 w-100 h-100"
                        target="_blank" rel="noopener noreferrer"></a>
                    </div>

                    @endif
                    <div class="border-top border-1 pt-4"></div>
                    
                    <div class="mb-4 ">
                        <div class="mx-auto" style="max-width: 500px;">
                            <div class="ratio ratio-4x3 rounded-3 shadow border">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.1552928130236!2d-78.59436782588611!3d-1.0445587354079147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d47d65d8fa200b%3A0x34733f08f4ed0469!2sPerson%20Technology!5e0!3m2!1ses!2sec!4v1752438329283!5m2!1ses!2sec"
                                    allowfullscreen
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"
                                    style="border:0;"
                                ></iframe>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>