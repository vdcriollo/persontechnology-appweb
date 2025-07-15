@php
    $sectionId = $sectionId ?? 'contact'; // valor por defecto si no se pasa ninguno
@endphp

@if ($errors->any())
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const contactoSection = document.getElementById("{{ $sectionId }}");
            if (contactoSection) {
                contactoSection.scrollIntoView({ behavior: "smooth" });
            }
        });
    </script>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        @foreach ($errors->all() as $error)
            <li><strong>{{ $error }}</strong></li>
        @endforeach
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session('success'))
    <div id="mensaje-exito" class="alert alert-success alert-dismissible fade show p-4 shadow rounded-3" role="alert">
        <h5 class="text-success"><i class="ri-checkbox-circle-fill me-2"></i> ¡Mensaje enviado con éxito!</h5>
        <p class="mb-2">{{ session('success') }}</p>
        <div class="d-flex justify-content-end">
            <button id="nuevo-mensaje-btn" class="btn btn-primary-2 rounded-2 btn-sm mt-2">
                <i class="ri-edit-line me-1"></i> Enviar otro mensaje
            </button>
        </div>
        <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const contactoSection = document.getElementById("{{ $sectionId }}");
            if (contactoSection) {
                contactoSection.scrollIntoView({ behavior: "smooth" });
            }
        });
    </script>
@endif

<div id="formulario-contacto" @if(session('success')) style="display: none;" @endif>
    <form id="form-contacto" action="{{ route('contacto.enviar') }}" method="POST">
        @csrf
        <div class="row g-3">
            
            {{-- Nombre completo --}}
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-floating">
                        <input 
                            type="text" 
                            name="nombre_completo" 
                            class="form-control bg-3 border border-1 rounded-3 @error('nombre_completo') is-invalid @enderror"
                            value="{{ old('nombre_completo') }}" 
                            required 
                            placeholder=" "
                            id="nombre_completo"
                            aria-required="true"
                        >
                        <label class="text-primary-2" for="nombre_completo"><i class="ri-user-line"></i> Nombre completo</label>
                        @error('nombre_completo')
                            <div class="invalid-feedback fw-bold">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            {{-- Teléfono / WhatsApp --}}
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-floating">
                        <input 
                            type="tel" 
                            name="telefono_whatsapp" 
                            class="form-control bg-3 border border-1 rounded-3 @error('telefono_whatsapp') is-invalid @enderror"
                            value="{{ old('telefono_whatsapp') }}" 
                            required 
                            placeholder=""
                            id="telefono_whatsapp"
                            aria-required="true"
                        >
                        <label class="text-primary-2" for="telefono_whatsapp"><i class="ri-whatsapp-line"></i> Teléfono o WhatsApp</label>
                        @error('telefono_whatsapp')
                            <div class="invalid-feedback fw-bold">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            {{-- Correo electrónico --}}
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-floating">
                        <input 
                            type="email" 
                            name="correo_electronico" 
                            class="form-control bg-3 border border-1 rounded-3 @error('correo_electronico') is-invalid @enderror"
                            value="{{ old('correo_electronico') }}" 
                            required 
                            placeholder=""
                            id="correo_electronico"
                            aria-required="true"
                        >
                        <label class="text-primary-2" for="correo_electronico"><i class="ri-mail-line"></i> Correo electrónico</label>
                        @error('correo_electronico')
                            <div class="invalid-feedback fw-bold">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            {{-- Asunto --}}
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-floating">
                        <input 
                            type="text" 
                            name="asunto" 
                            class="form-control bg-3 border border-1 rounded-3 @error('asunto') is-invalid @enderror"
                            value="{{ old('asunto') }}" 
                            required 
                            placeholder=""
                            id="asunto"
                            aria-required="true"
                        >
                        <label class="text-primary-2" for="asunto"><i class="ri-file-text-line"></i> Asunto</label>
                        @error('asunto')
                            <div class="invalid-feedback fw-bold">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            {{-- Interés --}}
            <div class="col-12">
                <div class="mb-3">
                    <div class="form-floating">
                        <select 
                            class="form-select bg-3 border border-1 rounded-3 @error('interes') is-invalid @enderror" 
                            id="interes" 
                            name="interes" 
                            required 
                            aria-required="true"
                        >
                            <option value="web" {{ old('interes') == 'web' ? 'selected' : '' }}>Desarrollo Web</option>
                            <option value="app" {{ old('interes') == 'app' ? 'selected' : '' }}>Aplicaciones Móviles</option>
                            <option value="iot" {{ old('interes') == 'iot' ? 'selected' : '' }}>Soluciones IoT</option>
                            <option value="fullstack" {{ old('interes') == 'fullstack' ? 'selected' : '' }}>Cursos Full Stack</option>
                            <option value="soporte" {{ old('interes') == 'soporte' ? 'selected' : '' }}>Soporte Técnico / Mantenimiento</option>
                            <option value="otros" {{ old('interes') == 'otros' ? 'selected' : '' }}>Otros</option>
                        </select>
                        <label for="interes" class="text-primary-2"><i class="ri-server-fill"></i> ¿En qué servicio estás interesado?</label>
                        @error('interes')
                            <div class="invalid-feedback fw-bold">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            {{-- Mensaje --}}
            <div class="col-md-12">
                <div class="mb-3">
                    <div class="form-floating">
                        <textarea 
                            class="form-control bg-3 border border-1 rounded-3 @error('mensaje') is-invalid @enderror" 
                            id="mensaje" 
                            name="mensaje" 
                            required 
                            placeholder="" 
                            aria-required="true"
                            style="height: 150px"
                        >{{ old('mensaje') }}</textarea>
                        <label class="text-primary-2" for="mensaje"><i class="ri-file-text-line"></i> Escribe tu mensaje...</label>
                        @error('mensaje')
                            <div class="invalid-feedback fw-bold">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            {{-- Botón --}}
            <div class="col-12">
                <button type="submit" class="btn btn-primary-2 rounded-2">
                    Enviar mensaje
                    <i class="ri-arrow-right-up-line"></i>
                </button>
            </div>
        </div>
    </form>
</div>
@push('scripts')
<script src="{{ asset('js/contacto.js') }}">
</script>
@endpush
