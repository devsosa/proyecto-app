<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="flex justify-center">
                    <img style="width: 250px;" src="{{ asset('gob_minsal2.png') }}" alt="">
                </div>
                <div class="mt-4">
                    <h3 class="text-2xl font-bold">Proyecto: <span class="text-2xl font-bold text-sky-400 px-4">{{ $proyecto->nombreProyecto }}</span></h3>
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