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
                    <div class="flex justify-between">
                        <h1 class="text-2xl font-bold">{{ __('Proyectos') }}</h1>
                        <a href="{{ route('proyectos.create') }}" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">Crear proyecto</a>
                    </div>
                    <div class="mt-4">
                        <table class="table-auto w-full">
                            <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                <tr>
                                    <th class="px-4 py-2">{{ __('Nombre Proyecto') }}</th>
                                    <th class="px-4 py-2">{{ __('Fuente Fondos') }}</th>
                                    <th class="px-4 py-2">{{ __('Fondos Planificados') }}</th>
                                    <th class="px-4 py-2">{{ __('Fondos Patrocinados') }}</th>
                                    <th class="px-4 py-2">{{ __('Fondos Propios') }}</th>
                                    <th class="px-4 py-2">{{ __('Acciones') }}</th>
                                </tr>
                            </thead>
                            <tbody class="text-sm divide-y divide-gray-100">
                                @forelse ($proyectos as $proyecto)
                                    <tr>
                                        <td class="border px-4 py-2">{{ $proyecto->nombreProyecto }}</td>
                                        <td class="border px-4 py-2">{{ $proyecto->fuenteFondos }}</td>
                                        <td class="border px-4 py-2">{{ $proyecto->montoPlanificado }}</td>
                                        <td class="border px-4 py-2">{{ $proyecto->montoPatrocinado }}</td>
                                        <td class="border px-4 py-2">{{ $proyecto->montoFondosPropios }}</td>
                                        <td class="border px-4 py-2" style="width: 260px">
                                            <a href="{{ route('proyectos.show', $proyecto) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">{{ __('Ver') }}</a>
                                            <a href="{{ route('proyectos.edit', $proyecto) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">{{ __('Editar') }}</a>
                                            <form action="{{ route('proyectos.destroy', $proyecto) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">{{ __('Eliminar') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr class="bg-red-400 text-white text-center">
                                        <td colspan="6" class="border px-4 py-2">{{ __('No hay proyectos para mostrar') }}</td>
                                    </tr>
                                @endforelse
                            </tbody>
                            @if ($proyectos->hasPages())
                                <tfoot class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                    <tr>
                                        <td colspan="6" class="border px-4 py-2">
                                            {{ $proyectos->links() }}
                                        </td>
                                    </tr>
                                </tfoot>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>