<!-- Contenedor principal -->
<div class="flex items-center justify-center min-h-screen py-12 bg-gray-100 px-4 sm:px-6 lg:px-8">

    <!-- Contenido -->
    <div class="max-w-4xl w-full bg-white rounded-lg shadow-xl overflow-hidden">

        <!-- Encabezado -->
        <div class="bg-gray-800 py-6 px-8 text-white">
            <h1 class="text-4xl font-extrabold leading-tight">¡Bienvenido al Portal de Aprendizaje {{ auth()->user()->name }}!</h1>
            @if (auth()->user()->role === 'admin')
            <p class="mt-2 text-lg">Eres, Administrador! Tienes el poder total para administrar el sitio web.</p>
            @endif
            @if (auth()->user()->role === 'teacher')
            <p class="mt-2 text-lg">Eres, Profesor! Crea y administra cursos para compartir tus conocimientos con los estudiantes.</p>
            @endif
            @if (auth()->user()->role === 'student')
            <p class="mt-2 text-lg">Eres, Estudiante! Explora los cursos disponibles y comienza a aprender nuevas habilidades.</p>
            @endif
        </div>
        <!-- Crear un nuevo curso -->
        @if (auth()->user()->role === 'admin' || auth()->user()->role === 'teacher')
        <div class="p-8">
            <h2 class="text-2xl font-semibold mb-4">Crea un nuevo curso</h2>
            <form action="#" method="POST">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Título del curso</label>
                        <input type="text" name="title" id="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    </div>
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">Descripción del curso</label>
                        <textarea name="description" id="description" rows="3" class="mt-1 block
                        w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"></textarea>
                    </div>
                </div>
                <div class="mt-4">
                    <button type="submit" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-lg">Crear curso</button>
                </div>
            </form>
        </div>
        @endif

        <!-- Últimos cursos -->
        <div class="p-8">
            <h2 class="text-2xl font-semibold mb-4">Últimos cursos disponibles</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Curso 1 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-2">Introducción a la Programación</h3>
                    <p class="text-gray-700 leading-relaxed mb-4">Aprende los conceptos básicos de la programación y desarrolla habilidades fundamentales en el mundo digital.</p>
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Más información →</a>
                </div>
                <!-- Curso 2 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-2">Diseño de Interfaces de Usuario</h3>
                    <p class="text-gray-700 leading-relaxed mb-4">Descubre cómo diseñar interfaces de usuario efectivas y atractivas para mejorar la experiencia de los usuarios.</p>
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Más información →</a>
                </div>
                <!-- Curso 3 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-2">Inteligencia Artificial Aplicada</h3>
                    <p class="text-gray-700 leading-relaxed mb-4">Explora las aplicaciones prácticas de la inteligencia artificial en diversas industrias y sectores.</p>
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Más información →</a>
                </div>
            </div>
        </div>

        <!-- Llamado a la acción -->
        <div class="bg-gray-800 py-6 px-8 text-white">
            <h2 class="text-2xl font-semibold mb-2">¡Únete a nuestra comunidad educativa hoy mismo!</h2>
            <p class="text-lg">Descubre nuevas oportunidades de aprendizaje y desarrollo profesional.</p>
            <a href="{{ route('register') }}" class="mt-4 inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-lg">Regístrate ahora</a>
        </div>

    </div>
</div>
