<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Información de la Empresa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Mensaje de éxito -->
                    @if(session('success'))
                        <div class="mb-4 px-4 py-3 bg-green-100 border border-green-400 text-green-700 rounded">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('empresa.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Columna Izquierda -->
                            <div class="space-y-6">
                                <!-- Nombre de la Empresa -->
                                <div>
                                    <x-input-label for="nombre_empresa" :value="__('Nombre de la Empresa')" />
                                    <x-text-input id="nombre_empresa" class="block mt-1 w-full" 
                                        type="text" 
                                        name="nombre_empresa" 
                                        :value="old('nombre_empresa', $empresa->nombre_empresa)" 
                                        required autofocus />
                                    <x-input-error :messages="$errors->get('nombre_empresa')" class="mt-2" />
                                </div>

                                <!-- Teléfono -->
                                <div>
                                    <x-input-label for="telefono" :value="__('Teléfono')" />
                                    <x-text-input id="telefono" class="block mt-1 w-full" 
                                        type="text" 
                                        name="telefono" 
                                        :value="old('telefono', $empresa->telefono)" 
                                        required />
                                    <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
                                </div>

                                <!-- Correo -->
                                <div>
                                    <x-input-label for="correo" :value="__('Correo Electrónico')" />
                                    <x-text-input id="correo" class="block mt-1 w-full" 
                                        type="email" 
                                        name="correo" 
                                        :value="old('correo', $empresa->correo)" 
                                        required />
                                    <x-input-error :messages="$errors->get('correo')" class="mt-2" />
                                </div>

                                <!-- Sitio Web -->
                                <div>
                                    <x-input-label for="sitio_web" :value="__('Sitio Web')" />
                                    <x-text-input id="sitio_web" class="block mt-1 w-full" 
                                        type="url" 
                                        name="sitio_web" 
                                        :value="old('sitio_web', $empresa->sitio_web)" />
                                    <x-input-error :messages="$errors->get('sitio_web')" class="mt-2" />
                                </div>

                                <!-- Dirección -->
                                <div>
                                    <x-input-label for="direccion" :value="__('Dirección')" />
                                    <textarea id="direccion" name="direccion" 
                                        class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                        rows="3">{{ old('direccion', $empresa->direccion) }}</textarea>
                                    <x-input-error :messages="$errors->get('direccion')" class="mt-2" />
                                </div>
                            </div>

                            <!-- Columna Derecha - Redes Sociales -->
                            <div class="space-y-6">
                                <!-- WhatsApp -->
                                <div>
                                    <x-input-label for="enlace_whatsapp" :value="__('Enlace WhatsApp')" />
                                    <x-text-input id="enlace_whatsapp" class="block mt-1 w-full" 
                                        type="url" 
                                        name="enlace_whatsapp" 
                                        :value="old('enlace_whatsapp', $empresa->enlace_whatsapp)" />
                                    <x-input-error :messages="$errors->get('enlace_whatsapp')" class="mt-2" />
                                </div>

                                <!-- Facebook -->
                                <div>
                                    <x-input-label for="enlace_facebook" :value="__('Enlace Facebook')" />
                                    <x-text-input id="enlace_facebook" class="block mt-1 w-full" 
                                        type="url" 
                                        name="enlace_facebook" 
                                        :value="old('enlace_facebook', $empresa->enlace_facebook)" />
                                    <x-input-error :messages="$errors->get('enlace_facebook')" class="mt-2" />
                                </div>

                                <!-- Instagram -->
                                <div>
                                    <x-input-label for="enlace_instagram" :value="__('Enlace Instagram')" />
                                    <x-text-input id="enlace_instagram" class="block mt-1 w-full" 
                                        type="url" 
                                        name="enlace_instagram" 
                                        :value="old('enlace_instagram', $empresa->enlace_instagram)" />
                                    <x-input-error :messages="$errors->get('enlace_instagram')" class="mt-2" />
                                </div>

                                <!-- YouTube -->
                                <div>
                                    <x-input-label for="enlace_youtube" :value="__('Enlace YouTube')" />
                                    <x-text-input id="enlace_youtube" class="block mt-1 w-full" 
                                        type="url" 
                                        name="enlace_youtube" 
                                        :value="old('enlace_youtube', $empresa->enlace_youtube)" />
                                    <x-input-error :messages="$errors->get('enlace_youtube')" class="mt-2" />
                                </div>

                                <!-- GitHub -->
                                <div>
                                    <x-input-label for="enlace_github" :value="__('Enlace GitHub')" />
                                    <x-text-input id="enlace_github" class="block mt-1 w-full" 
                                        type="url" 
                                        name="enlace_github" 
                                        :value="old('enlace_github', $empresa->enlace_github)" />
                                    <x-input-error :messages="$errors->get('enlace_github')" class="mt-2" />
                                </div>

                                <!-- TikTok -->
                                <div>
                                    <x-input-label for="enlace_tiktok" :value="__('Enlace TikTok')" />
                                    <x-text-input id="enlace_tiktok" class="block mt-1 w-full" 
                                        type="url" 
                                        name="enlace_tiktok" 
                                        :value="old('enlace_tiktok', $empresa->enlace_tiktok)" />
                                    <x-input-error :messages="$errors->get('enlace_tiktok')" class="mt-2" />
                                </div>
                            </div>
                        </div>

                        <!-- Botón de Guardar -->
                        <div class="flex items-center justify-end mt-6">
                            <x-primary-button>
                                {{ __('Guardar Cambios') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>