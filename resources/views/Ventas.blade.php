<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table">
                        <tr>
                            <th>Objeto</th>
                            <th>Precio</th>
                            <th>Marca</th>
                            <th>Stock</th>
                            <th>Acciones</th>
                        </tr>
                        
                        <tr>
                            <td>Abrigo</td>
                            <td>55</td>
                            <td>Naik</td>
                            <td>50</td>
                            <td>
                                <a href="#" class="btn btn-success">Editar</a>
                                <a href="#"class="btn btn-success">Eliminar</a>
                            </td>
                        </tr>

                        <tr>
                            <td>Zapatillas</td>
                            <td>120</td>
                            <td>Adidas</td>
                            <td>42</td>
                            <td>
                                <a href="#" class="btn btn-success">Editar</a>
                                <a href="#"class="btn btn-success">Eliminar</a>
                            </td>
                        </tr>

                    </table>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>