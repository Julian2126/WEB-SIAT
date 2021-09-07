<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
        <br>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1>Ingreso roles</h1>
                <br>
                @can('menu Administrador')
                <a href="">Ver Menu Adiminstrador</a>
                @endcan
                <br>
                @can('menu Usuario')
                <a href="">Ver Menu Usuario</a>
                @endcan 
            </div>
        </div>
    </div>
</x-app-layout>
