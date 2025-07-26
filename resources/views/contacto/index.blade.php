@extends('layouts.client')

@section('content')
    
<section id="about" class="section-hero-2 position-relative pt-130 pb-3">
</section>
@include('section.contacto')

@include('section.experiencia')

<div class="pt-5 pb-5">
    {{-- acerca de nosotros --}}
    @include('section.contador_estadistica')
</div>
@include('section.educacion')

        {{-- Mapa --}}
@endsection