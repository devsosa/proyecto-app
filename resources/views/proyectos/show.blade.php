<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Proyectos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-end">
                        <a href='{{ url("/reporte/$proyecto->id") }}' class="bg-stone-500 hover:bg-stone-700 text-white font-bold mx-4 py-2 px-4 rounded">Imprimir</a>
                        <a href="{{ route('proyectos.index') }}" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">Regresar</a>
                    </div>
                    <div class="flex justify-center">
                        <h1 class="text-3xl font-bold">Detalles del Proyecto</h1>
                    </div>
                    <div class="mt-4">
                        <h1 class="text-2xl font-bold">{{ __('Proyecto:') }} <span class="text-2xl font-bold text-sky-400 px-4">{{ $proyecto->nombreProyecto }}</span></h1>
                        <table class="table-auto">
                            <tbody>
                                <tr>
                                    <td class="font-bold py-2 px-4">Fecha:</td>
                                    <td class="py-2">{{ date('d m Y') }}</td>
                                </tr>
                                <tr>
                                    <td class="font-bold py-2 px-4">ID:</td>
                                    <td class="py-2">{{ $proyecto->id }}</td>
                                </tr>
                                <tr>
                                    <td class="font-bold py-2 px-4">Fuende de los Fondos:</td>
                                    <td class="py-2">{{ $proyecto->fuenteFondos }}</td>
                                </tr>
                                <tr>
                                    <td class="font-bold py-2 px-4">Fondos Planificado:</td>
                                    <td class="py-2">${{ $proyecto->montoPlanificado }}</td>
                                </tr>
                                <tr>
                                    <td class="font-bold py-2 px-4">Fondos Patrocinados:</td>
                                    <td class="py-2">${{ $proyecto->montoPatrocinado }}</td>
                                </tr>
                                <tr>
                                    <td class="font-bold py-2 px-4">Fondos Propios</td>
                                    <td class="py-2">${{ $proyecto->montoFondosPropios }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>