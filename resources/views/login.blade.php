<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistema Académico</title>

    @vite('resources/css/app.css')
</head>

<body class="min-h-screen bg-slate-100">

    <main class="min-h-screen flex">

        <!-- ============================= -->
        <!-- PANEL IZQUIERDO -->
        <!-- ============================= -->

        <section
            class="hidden lg:flex lg:w-1/2
                   relative overflow-hidden
                   bg-gradient-to-br from-blue-950
                   via-blue-800 to-blue-500">

            <!-- Círculos decorativos -->

            <div
                class="absolute -top-40 -left-40
                       w-[500px] h-[500px]
                       rounded-full
                       bg-blue-400/20
                       blur-3xl">
            </div>

            <div
                class="absolute -bottom-40 -right-40
                       w-[500px] h-[500px]
                       rounded-full
                       bg-cyan-400/20
                       blur-3xl">
            </div>


            <div
                class="relative z-10
                       w-full
                       p-12 xl:p-16
                       flex flex-col
                       justify-between">


                <!-- ============================= -->
                <!-- LOGO -->
                <!-- ============================= -->

                <div class="flex items-center gap-4">

                    <div
                        class="w-20 h-20
                               rounded-2xl
                               bg-white
                               flex items-center
                               justify-center
                               shadow-xl">

                        <span
                            class="text-4xl
                                   font-black
                                   text-blue-700">

                            I

                        </span>

                    </div>


                    <div class="text-white">

                        <p class="text-sm font-medium">
                            INSTITUTO DE EDUCACIÓN
                        </p>

                        <p class="text-sm font-medium">
                            SUPERIOR TECNOLÓGICO PÚBLICO
                        </p>

                        <h1
                            class="text-3xl
                                   font-black
                                   tracking-tight">

                            HUANCAVELICA

                        </h1>

                        <span
                            class="inline-block
                                   mt-2
                                   px-4 py-1
                                   rounded-full
                                   bg-blue-500
                                   text-sm">

                            Rumbo a un mejor futuro

                        </span>

                    </div>

                </div>


                <!-- ============================= -->
                <!-- TEXTO PRINCIPAL -->
                <!-- ============================= -->

                <div class="max-w-xl">

                    <p
                        class="text-blue-200
                               uppercase
                               tracking-[0.25em]
                               text-sm
                               font-semibold
                               mb-5">

                        Plataforma institucional

                    </p>


                    <h2
                        class="text-6xl
                               font-black
                               text-white
                               leading-none">

                        SISTEMA

                        <span
                            class="block
                                   text-blue-300
                                   mt-2">

                            ACADÉMICO

                        </span>

                    </h2>


                    <p
                        class="mt-7
                               text-xl
                               text-blue-100
                               leading-relaxed
                               max-w-lg">

                        Una plataforma moderna para gestionar
                        tu información académica de manera
                        rápida, segura y sencilla.

                    </p>


                    <!-- ============================= -->
                    <!-- BENEFICIOS -->
                    <!-- ============================= -->

                    <div
                        class="grid
                               grid-cols-2
                               gap-x-10
                               gap-y-7
                               mt-10">


                        <!-- Matrícula -->

                        <div
                            class="flex
                                   items-center
                                   gap-4">

                            <div
                                class="w-12 h-12
                                       rounded-xl
                                       bg-white/15
                                       border
                                       border-white/20
                                       flex items-center
                                       justify-center
                                       text-2xl">

                                🎓

                            </div>

                            <div>

                                <p
                                    class="font-bold
                                           text-white">

                                    Matrícula

                                </p>

                                <p
                                    class="text-blue-200
                                           text-sm">

                                    Gestiona tus datos

                                </p>

                            </div>

                        </div>


                        <!-- Notas -->

                        <div
                            class="flex
                                   items-center
                                   gap-4">

                            <div
                                class="w-12 h-12
                                       rounded-xl
                                       bg-white/15
                                       border
                                       border-white/20
                                       flex items-center
                                       justify-center
                                       text-2xl">

                                📊

                            </div>

                            <div>

                                <p
                                    class="font-bold
                                           text-white">

                                    Calificaciones

                                </p>

                                <p
                                    class="text-blue-200
                                           text-sm">

                                    Consulta tus notas

                                </p>

                            </div>

                        </div>


                        <!-- Horarios -->

                        <div
                            class="flex
                                   items-center
                                   gap-4">

                            <div
                                class="w-12 h-12
                                       rounded-xl
                                       bg-white/15
                                       border
                                       border-white/20
                                       flex items-center
                                       justify-center
                                       text-2xl">

                                📅

                            </div>

                            <div>

                                <p
                                    class="font-bold
                                           text-white">

                                    Horarios

                                </p>

                                <p
                                    class="text-blue-200
                                           text-sm">

                                    Consulta tus horarios

                                </p>

                            </div>

                        </div>


                        <!-- Trámites -->

                        <div
                            class="flex
                                   items-center
                                   gap-4">

                            <div
                                class="w-12 h-12
                                       rounded-xl
                                       bg-white/15
                                       border
                                       border-white/20
                                       flex items-center
                                       justify-center
                                       text-2xl">

                                📄

                            </div>

                            <div>

                                <p
                                    class="font-bold
                                           text-white">

                                    Trámites

                                </p>

                                <p
                                    class="text-blue-200
                                           text-sm">

                                    Gestiona tus trámites

                                </p>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- ============================= -->
                <!-- FRASE -->
                <!-- ============================= -->

                <div>

                    <p
                        class="text-2xl
                               text-white
                               italic
                               font-light">

                        Formación técnica

                    </p>

                    <p
                        class="text-2xl
                               text-blue-200
                               italic
                               font-light">

                        para un mejor mañana

                    </p>

                </div>

            </div>

        </section>


        <!-- ============================= -->
        <!-- PANEL DERECHO -->
        <!-- ============================= -->

        <section
            class="w-full lg:w-1/2
                   min-h-screen
                   flex items-center
                   justify-center
                   p-6 sm:p-10">

            <div class="w-full max-w-lg">


                <!-- ============================= -->
                <!-- TARJETA LOGIN -->
                <!-- ============================= -->

                <div
                    class="bg-white
                           rounded-3xl
                           shadow-2xl
                           border border-slate-200
                           p-8 sm:p-10">


                    <!-- ============================= -->
                    <!-- LOGO -->
                    <!-- ============================= -->

                    <div class="flex justify-center">

                        <div
                            class="w-20 h-20
                                   rounded-2xl
                                   bg-blue-50
                                   border
                                   border-blue-100
                                   flex items-center
                                   justify-center">

                            <span
                                class="text-4xl
                                       font-black
                                       text-blue-700">

                                I

                            </span>

                        </div>

                    </div>


                    <!-- ============================= -->
                    <!-- TÍTULO -->
                    <!-- ============================= -->

                    <div
                        class="text-center
                               mt-5 mb-8">

                        <h2
                            class="text-3xl
                                   font-black
                                   text-slate-900">

                            SISTEMA

                            <span
                                class="text-blue-600">

                                ACADÉMICO

                            </span>

                        </h2>


                        <p
                            class="mt-2
                                   text-slate-500
                                   text-sm
                                   leading-relaxed">

                            Instituto de Educación Superior
                            Tecnológico Público Huancavelica

                        </p>

                    </div>


                    <!-- ============================= -->
                    <!-- TIPO DE USUARIO -->
                    <!-- ============================= -->

                    <div
                        class="grid
                               grid-cols-3
                               gap-3
                               mb-7">


                        <!-- ESTUDIANTE -->

                        <button
                            type="button"
                            class="p-4
                                   rounded-xl
                                   bg-blue-600
                                   text-white
                                   shadow-lg
                                   shadow-blue-600/20
                                   transition
                                   hover:bg-blue-700">

                            <div class="text-2xl mb-2">
                                🎓
                            </div>

                            <span
                                class="text-xs
                                       sm:text-sm
                                       font-semibold">

                                Estudiante

                            </span>

                        </button>


                        <!-- DOCENTE -->

                        <button
                            type="button"
                            class="p-4
                                   rounded-xl
                                   bg-slate-100
                                   text-slate-600
                                   transition
                                   hover:bg-slate-200">

                            <div class="text-2xl mb-2">
                                👨‍🏫
                            </div>

                            <span
                                class="text-xs
                                       sm:text-sm
                                       font-semibold">

                                Docente

                            </span>

                        </button>


                        <!-- ADMINISTRADOR -->

                        <button
                            type="button"
                            class="p-4
                                   rounded-xl
                                   bg-slate-100
                                   text-slate-600
                                   transition
                                   hover:bg-slate-200">

                            <div class="text-2xl mb-2">
                                ⚙️
                            </div>

                            <span
                                class="text-xs
                                       sm:text-sm
                                       font-semibold">

                                Administrador

                            </span>

                        </button>

                    </div>


                    <!-- ============================= -->
                    <!-- USUARIO -->
                    <!-- ============================= -->

                    <div class="mb-5">

                        <label
                            class="block
                                   text-sm
                                   font-semibold
                                   text-slate-700
                                   mb-2">

                            Usuario / DNI / Código

                        </label>


                        <div class="relative">

                            <span
                                class="absolute
                                       left-4
                                       top-1/2
                                       -translate-y-1/2
                                       text-slate-400
                                       text-xl">

                                👤

                            </span>


                            <input
                                type="text"
                                placeholder="Ingrese su usuario"
                                class="w-full
                                       pl-12
                                       pr-4
                                       py-4
                                       rounded-xl
                                       border
                                       border-slate-300
                                       bg-white
                                       text-slate-800
                                       outline-none
                                       transition

                                       focus:border-blue-500
                                       focus:ring-4
                                       focus:ring-blue-100">

                        </div>

                    </div>


                    <!-- ============================= -->
                    <!-- CONTRASEÑA -->
                    <!-- ============================= -->

                    <div class="mb-5">

                        <label
                            class="block
                                   text-sm
                                   font-semibold
                                   text-slate-700
                                   mb-2">

                            Contraseña

                        </label>


                        <div class="relative">

                            <span
                                class="absolute
                                       left-4
                                       top-1/2
                                       -translate-y-1/2
                                       text-slate-400
                                       text-xl">

                                🔒

                            </span>


                            <input
                                type="password"
                                placeholder="Ingrese su contraseña"
                                class="w-full
                                       pl-12
                                       pr-12
                                       py-4
                                       rounded-xl
                                       border
                                       border-slate-300
                                       bg-white
                                       text-slate-800
                                       outline-none
                                       transition

                                       focus:border-blue-500
                                       focus:ring-4
                                       focus:ring-blue-100">


                            <button
                                type="button"
                                class="absolute
                                       right-4
                                       top-1/2
                                       -translate-y-1/2
                                       text-slate-400
                                       hover:text-blue-600">

                                👁️

                            </button>

                        </div>

                    </div>


                    <!-- ============================= -->
                    <!-- RECORDAR / RECUPERAR -->
                    <!-- ============================= -->

                    <div
                        class="flex
                               items-center
                               justify-between
                               gap-3
                               mb-7">


                        <label
                            class="flex
                                   items-center
                                   gap-2
                                   text-sm
                                   text-slate-600">

                            <input
                                type="checkbox"
                                class="w-4 h-4
                                       accent-blue-600">

                            Recordarme

                        </label>


                        <a
                            href="#"
                            class="text-sm
                                   font-semibold
                                   text-blue-600
                                   hover:text-blue-800">

                            ¿Olvidaste tu contraseña?

                        </a>

                    </div>


                    <!-- ============================= -->
                    <!-- BOTÓN LOGIN -->
                    <!-- ============================= -->

                    <button
                        type="button"
                        class="w-full
                               py-4
                               rounded-xl
                               bg-blue-600
                               hover:bg-blue-700
                               text-white
                               font-bold
                               text-lg
                               shadow-lg
                               shadow-blue-600/30
                               transition
                               flex
                               items-center
                               justify-center
                               gap-3">

                        <span class="text-xl">
                            ➜
                        </span>

                        INGRESAR

                    </button>


                    <!-- ============================= -->
                    <!-- SEPARADOR -->
                    <!-- ============================= -->

                    <div
                        class="flex
                               items-center
                               gap-4
                               my-7">

                        <div
                            class="h-px
                                   bg-slate-200
                                   flex-1">
                        </div>

                        <span
                            class="text-xs
                                   text-slate-400">

                            O CONTINÚA CON

                        </span>

                        <div
                            class="h-px
                                   bg-slate-200
                                   flex-1">
                        </div>

                    </div>


                    <!-- ============================= -->
                    <!-- GOOGLE / MICROSOFT -->
                    <!-- ============================= -->

                    <div
                        class="grid
                               grid-cols-2
                               gap-4">


                        <button
                            type="button"
                            class="py-3
                                   rounded-xl
                                   border
                                   border-slate-300
                                   bg-white
                                   hover:bg-slate-50
                                   transition
                                   font-semibold
                                   text-slate-700">

                            <span
                                class="text-red-500
                                       font-bold
                                       mr-2">

                                G

                            </span>

                            Google

                        </button>


                        <button
                            type="button"
                            class="py-3
                                   rounded-xl
                                   border
                                   border-slate-300
                                   bg-white
                                   hover:bg-slate-50
                                   transition
                                   font-semibold
                                   text-slate-700">

                            <span
                                class="text-blue-600
                                       font-bold
                                       mr-2">

                                ⊞

                            </span>

                            Microsoft

                        </button>

                    </div>


                    <!-- ============================= -->
                    <!-- FOOTER -->
                    <!-- ============================= -->

                    <div
                        class="text-center
                               mt-8
                               pt-6
                               border-t
                               border-slate-100">

                        <p
                            class="text-xs
                                   text-slate-400">

                            © 2026 Instituto de Educación
                            Superior Tecnológico Público
                            Huancavelica

                        </p>

                        <p
                            class="text-xs
                                   text-slate-400
                                   mt-1">

                            Todos los derechos reservados.

                        </p>

                    </div>


                </div>

            </div>

        </section>

    </main>

</body>

</html>