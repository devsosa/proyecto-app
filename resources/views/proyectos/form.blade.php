<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ $action }}" method="POST">
                        @csrf
                        @isset ($method)
                            @method($method)
                        @endif
                        <div class="mb-4">
                            <label for="nombreProyecto" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Nombre Proyecto') }}</label>
                            <input type="text" name="nombreProyecto" id="nombreProyecto" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('nombreProyecto', $proyecto->nombreProyecto) }}">
                            @error('nombreProyecto')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="fuenteFondos" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Fuente Fondos') }}</label>
                            <input type="text" name="fuenteFondos" id="fuenteFondos" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('fuenteFondos', $proyecto->fuenteFondos) }}">
                            @error('fuenteFondos')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="montoPlanificado" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Fondos Planificados') }}</label>
                            <textarea name="montoPlanificado" id="montoPlanificado" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('montoPlanificado', $proyecto->montoPlanificado) }}</textarea>
                            @error('montoPlanificado')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="montoPatrocinado" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Fondos Patrocinados') }}</label>
                            <textarea name="montoPatrocinado" id="montoPatrocinado" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('montoPatrocinado', $proyecto->montoPatrocinado) }}</textarea>
                            @error('montoPatrocinado')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="montoFondosPropios" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Fondos Propios') }}</label>
                            <textarea name="montoFondosPropios" id="montoFondosPropios" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('montoFondosPropios', $proyecto->montoFondosPropios) }}</textarea>
                            @error('montoFondosPropios')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex justify-end">
                            <a href="{{ route('proyectos.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">{{ __('Cancelar') }}</a>
                            <button type="submit" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded ml-2">{{ $buttonText }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>