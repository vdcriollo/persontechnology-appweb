<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ isset($noticia) ? __('Editar Noticia') : __('Crear Noticia') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ isset($noticia) ? route('noticias.update', $noticia) : route('noticias.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($noticia))
                            @method('PUT')
                        @endif

                        <div class="grid grid-cols-1 gap-6">
                            <!-- Título -->
                            <div>
                                <x-input-label for="titulo" :value="__('Título')" />
                                <x-text-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" :value="old('titulo', $noticia->titulo ?? '')" required />
                                <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
                            </div>

                            <!-- Resumen -->
                            <div>
                                <x-input-label for="resumen" :value="__('Resumen')" />
                                <textarea id="resumen" name="resumen" rows="3" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>{{ old('resumen', $noticia->resumen ?? '') }}</textarea>
                                <x-input-error :messages="$errors->get('resumen')" class="mt-2" />
                            </div>

                            <!-- Contenido -->
                            <div>
                                <x-input-label for="contenido" :value="__('Contenido')" />
                                <textarea id="contenido" name="contenido" rows="6" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>{{ old('contenido', $noticia->contenido ?? '') }}</textarea>
                                <x-input-error :messages="$errors->get('contenido')" class="mt-2" />
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <!-- Categoría -->
                                <div>
                                    <x-input-label for="categoria" :value="__('Categoría')" />
                                    <select id="categoria" name="categoria" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                                        <option value="">Seleccione...</option>
                                        <option value="Tecnología" @selected(old('categoria', $noticia->categoria ?? '') == 'Tecnología')>Tecnología</option>
                                        <option value="Desarrollo" @selected(old('categoria', $noticia->categoria ?? '') == 'Desarrollo')>Desarrollo</option>
                                        <option value="Diseño" @selected(old('categoria', $noticia->categoria ?? '') == 'Diseño')>Diseño</option>
                                        <option value="Tendencias" @selected(old('categoria', $noticia->categoria ?? '') == 'Tendencias')>Tendencias</option>
                                    </select>
                                    <x-input-error :messages="$errors->get('categoria')" class="mt-2" />
                                </div>

                                <!-- Tiempo de lectura -->
                                <div>
                                    <x-input-label for="tiempo_lectura" :value="__('Tiempo de lectura (min)')" />
                                    <x-text-input id="tiempo_lectura" class="block mt-1 w-full" type="number" name="tiempo_lectura" :value="old('tiempo_lectura', $noticia->tiempo_lectura ?? 3)" min="1" required />
                                    <x-input-error :messages="$errors->get('tiempo_lectura')" class="mt-2" />
                                </div>

                                <!-- Fecha de publicación -->
                                <div>
                                    <x-input-label for="fecha_publicacion" :value="__('Fecha de publicación')" />
                                    <x-text-input id="fecha_publicacion" class="block mt-1 w-full" type="date" name="fecha_publicacion" :value="old('fecha_publicacion', isset($noticia) ? $noticia->fecha_publicacion : now()->format('Y-m-d'))" required />
                                    <x-input-error :messages="$errors->get('fecha_publicacion')" class="mt-2" />
                                </div>
                            </div>

                            <!-- Imagen -->
                            <div>
                                <x-input-label for="imagen" :value="__('Imagen (580x410 px)')" />
                                @if(isset($noticia) && $noticia->imagen)
                                    <img src="{{ asset('storage/'.$noticia->imagen) }}" alt="Imagen actual" class="h-32 mb-2">
                                @endif
                                <input id="imagen" class="block mt-1 w-full" type="file" name="imagen" {{ !isset($noticia) ? 'required' : '' }} accept="image/*">
                                <x-input-error :messages="$errors->get('imagen')" class="mt-2" />
                            </div>

                            <!-- Destacada -->
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="destacada" value="1" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" {{ old('destacada', $noticia->destacada ?? false) ? 'checked' : '' }}>
                                    <span class="ml-2 text-sm text-gray-600">Marcar como destacada</span>
                                </label>
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            <x-primary-button>
                                {{ isset($noticia) ? __('Actualizar Noticia') : __('Crear Noticia') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>