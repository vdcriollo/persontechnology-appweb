<!-- Botón para abrir modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalContacto">
    Contáctanos
</button>

<!-- Modal -->
<div class="modal fade" id="modalContacto" tabindex="-1" aria-labelledby="modalContactoLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-3">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title" id="modalContactoLabel">Contáctanos</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body p-4">

                {{-- Alertas de Laravel (fallback sin JS) --}}
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>¡Gracias!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li><strong>{{ $error }}</strong></li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- Formulario --}}
                <form id="form-contacto" action="{{ route('contacto.enviar') }}" method="POST">
                    @csrf
                    <div class="row g-3">

                        <div class="col-md-6">
                            <input type="text" name="nombre_completo" class="form-control @error('nombre_completo') is-invalid @enderror" placeholder="Nombre completo" value="{{ old('nombre_completo') }}" required>
                            @error('nombre_completo') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="col-md-6">
                            <input type="tel" name="telefono_whatsapp" class="form-control @error('telefono_whatsapp') is-invalid @enderror" placeholder="Teléfono o WhatsApp" value="{{ old('telefono_whatsapp') }}" required>
                            @error('telefono_whatsapp') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="col-md-6">
                            <input type="email" name="correo_electronico" class="form-control @error('correo_electronico') is-invalid @enderror" placeholder="Correo electrónico" value="{{ old('correo_electronico') }}" required>
                            @error('correo_electronico') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="col-md-6">
                            <input type="text" name="asunto" class="form-control @error('asunto') is-invalid @enderror" placeholder="Asunto" value="{{ old('asunto') }}" required>
                            @error('asunto') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="col-12">
                            <select name="interes" class="form-select @error('interes') is-invalid @enderror" required>
                                <option value="" disabled selected>¿En qué servicio estás interesado?</option>
                                <option value="web" {{ old('interes') == 'web' ? 'selected' : '' }}>Desarrollo Web</option>
                                <option value="app" {{ old('interes') == 'app' ? 'selected' : '' }}>Aplicaciones Móviles</option>
                                <option value="iot" {{ old('interes') == 'iot' ? 'selected' : '' }}>Soluciones IoT</option>
                                <option value="fullstack" {{ old('interes') == 'fullstack' ? 'selected' : '' }}>Cursos Full Stack</option>
                                <option value="soporte" {{ old('interes') == 'soporte' ? 'selected' : '' }}>Soporte Técnico</option>
                                <option value="otros" {{ old('interes') == 'otros' ? 'selected' : '' }}>Otros</option>
                            </select>
                            @error('interes') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="col-12">
                            <textarea name="mensaje" rows="4" class="form-control @error('mensaje') is-invalid @enderror" placeholder="Escribe tu mensaje..." required>{{ old('mensaje') }}</textarea>
                            @error('mensaje') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">
                                Enviar mensaje <i class="ri-send-plane-line ms-1"></i>
                            </button>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
