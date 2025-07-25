@extends('layouts.client') 

@section('content')

<section id="mision" class="section-skills-2 pt-130 pb-3">
    <div class="container">
        <div class="rounded-3 bg-3 border border-1 position-relative overflow-hidden">
            <div class="position-relative z-1 py-60">
                <div class="position-relative z-1">
                    <div class="text-center">
                        <div class="d-flex align-items-center justify-content-center">
                            <svg class="text-primary-2 me-2" xmlns="http://www.w3.org/2000/svg" width="5" height="6" viewBox="0 0 5 6" fill="none">
                                <circle cx="2.5" cy="3" r="2.5" fill="#A8FF53" />
                            </svg>
                            <span class="text-linear-4 d-flex align-items-center"> Misión y Visión </span>
                        </div>
                        <h3>Acercamos la tecnología a las personas para transformar su calidad de vida</h3>
                    </div>
                    <div class="container mt-8">
                        <div class="row">
                            <!-- Misión -->
                            <div class="col-lg-6">
                                <h5 class="fw-semibold mb-3 text-primary-2">Nuestra Misión</h5>
                                <p class="text-300">
                                    Lograr que la mayor cantidad de personas tengan acceso a la tecnología
                                    y puedan implementarla en su hogar o empresa. Diseñamos soluciones digitales útiles,
                                    accesibles y personalizadas que impulsan la transformación tecnológica de nuestros clientes.
                                </p>
                            </div>

                            <!-- Visión -->
                            <div class="col-lg-6 border-start-md mt-lg-0 mt-5">
                                <h5 class="fw-semibold mb-3 text-primary-2">Nuestra Visión</h5>
                                <p class="text-300">
                                    Mejorar la calidad de vida de las personas a través de la innovación tecnológica,
                                    siendo reconocidos como la empresa ecuatoriana líder en tecnologías aplicadas
                                    para el desarrollo social, industrial y educativo en los próximos 5 a 10 años.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Decoración giratoria -->
            <div class="position-absolute d-none d-md-block decorate">
                <div class="rotateme">
                    <div class="circle-1-1"></div>
                    <div class="circle-1-2 position-absolute top-50 start-50 translate-middle">
                        <svg class="mb-5 position-absolute bottom-0 start-0" xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none">
                            <circle cx="4.5" cy="4.5" r="4.5" fill="#636366" />
                        </svg>
                    </div>
                    <div class="circle-1-3 position-absolute top-50 start-50 translate-middle ">
                        <svg class="mb-3 position-absolute bottom-0 end-0" xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none">
                            <circle cx="4.5" cy="4.5" r="4.5" fill="#636366" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- nuestros valores --}}

@include('empresa.valores')

{{-- contador estadistico --}}
@include('section.contador_estadistica')

{{-- stack tecnologico --}}
@include('section.stack_tecnologico')
@endsection
