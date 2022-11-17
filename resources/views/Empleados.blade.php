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
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Telefono</th>
                            <th>email</th>
                            <th>Acciones</th>
                        </tr>
                        

                        <tr>
                            <td>Maria </td>
                            <td>Ramos</td>
                            <td>98561231</td>
                            <td>@Maria.gmail.com</td>
                            <td>
                                <a href="#" class="btn btn-success">Editar</a>
                                <a href="#"class="btn btn-success">Eliminar</a>
                            </td>
                        </tr>

                        <tr>
                            <td>Juan</td>
                            <td>Lopes</td>
                            <td>956412345</td>
                            <td>@Juan.Hotmail.com</td>
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
