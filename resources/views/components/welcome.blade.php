@section('title', 'Dashboard')
<div class="bg-app">
    <div class="container mx-auto">
        <div class="flex justify-center items-center h-screen">
            <div class="w-full max-w-lg bg-white shadow-md rounded px-8 pt-7 pb-8">
                <h1 class="text-2xl mb-4">Bienveido a EduNexus</h1>
                <h2 class="text-lg mb-4">¡Hola, {{ Auth::user()->name }}!</h2> 
                @if (auth()->user()->isAdmin())
                    <p class="text-gray-700 text-base">Eres un administrador, puedes crear, editar y eliminar cursos.</p>
                @elseif(auth()->user()->isTeacher())
                    <p class="text-gray-700 text-base">Eres un profesor, puedes crear, editar y eliminar lecciones.</p>
                    @elseif(auth()->user()->isStudent())
                    <p class="text-gray-700 text-base">Eres un estudiante, puedes inscribirte en los cursos que desees.</p>
                @endif
                <br>          
                <h3 class="text-gray-700 text-base">EduNexus es una plataforma de educación en línea que te permite aprender de manera gratuita y a tu propio ritmo</h3>
                <br>
                <p class="text-gray-700 text-base">Para comenzar, selecciona un curso de la lista de la izquierda.</p>
            </div>
        </div>
    </div>
</div>