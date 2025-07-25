@extends('layouts.client')

@section('content')
    
        {{-- acerca de nosotros --}}
        @include('section.acerca_nosotros')

       {{-- contador estadisticas de la empresa --}}
        @include('section.contador_estadistica')

        {{-- colaboracion con empresa --}}
        @include('section.colaboracion')
        
        {{-- servicios --}}
        @include('section.servicios')

        {{-- experiencia --}}
        @include('section.experiencia')

        {{-- educacion --}}
        
        @include('section.educacion')

        {{-- proyectos --}}

        @include('section.proyectos')

        {{-- stack tecnologico --}}
        @include('section.stack_tecnologico')


        
        {{-- 3 ultimas noticias --}}
        @include('section.3noticias')
        {{-- boorrar el hr cuando se active la section de noticias --}}
        {{-- <hr class="my-5"> --}}

        
        {{-- contacto --}}
        @include('section.contacto')
@endsection