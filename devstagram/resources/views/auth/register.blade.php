<!-- Extender el diseño de la aplicación principal -->
@extends('layouts.app')

<!-- Definir el título de la página -->
@section('titulo')
    Registrate Devstagram
@endsection

<!-- Sección de contenido que se envía al contenedor (yield) -->
@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <!-- Imagen de registro de usuarios -->
        <div class="md:w-6/12 p-5">
            <img src="{{asset ('img/registrar.jpg')}}" alt="Imagen registro de usuarios">
        </div>
        
        <!-- Formulario de registro -->
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form>
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input id="name" name="name" type="text" placeholder="Tu nombre" class="border p-3 w-full rounded-lg">
                </div>

                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Username
                    </label>
                    <input id="username" name="username" type="text" placeholder="Tu Username" class="border p-3 w-full rounded-lg">
                </div>

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Password
                    </label>
                    <input id="password" name="password" type="password" placeholder="Tu Password" class="border p-3 w-full rounded-lg">
                </div>

                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                        Repetir Password
                    </label>
                    <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Repetir Password" class="border p-3 w-full rounded-lg">
                </div>

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input id="email" name="email" type="email" placeholder="Tu Email" class="border p-3 w-full rounded-lg">
                </div>

                <input type="submit" value="Crear cuenta" class="bg-sky-500 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection
