<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Empleados') }}
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
                            <th>extension</th>
                            <th>email</th>
                            <th>Codigo de Oficina</th>
                            <th>Acciones</th>
                        </tr>
                        @foreach($listado as $empleados)

                        <tr>
                            <td>{{$empleados->firstName}}</td>
                            <td>{{$empleados->lastName}}</td>
                            <td>{{$empleados->extension}}</td>
                            <td>{{$empleados->email}}</td>
                            <td>{{$empleados->officeCode}}</td>
                            <td>
                                <a href="#" class="btn btn-success">Editar</a>
                                <a href="#"class="btn btn-success">Eliminar</a>
                            </td>
                        </tr>
                        @endforeach

                    </table>






                </div>
            </div>
        </div>
    </div>
</x-app-layout>
