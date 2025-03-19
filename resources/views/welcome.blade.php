<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SENA - Gestión de Espacios y Recursos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            /* SENA Colors */
            :root {
                --sena-green: #39A900;
                --sena-orange: #FF6B00;
                --sena-light: #E8F5E9;
                --sena-dark: #006400;
                --sena-accent: #FBC02D;
            }
            .bg-sena-gradient {
                background: linear-gradient(135deg, var(--sena-green) 0%, var(--sena-dark) 100%);
            }
            .bg-sena-light {
                background-color: var(--sena-light);
            }
            .bg-sena-green {
                background-color: var(--sena-green);
            }
            .text-sena-green {
                color: var(--sena-green);
            }
            .text-sena-orange {
                color: var(--sena-orange);
            }
            .border-sena-green {
                border-color: var(--sena-green);
            }
            .btn-sena {
                background-color: var(--sena-green);
                color: white;
                padding: 0.5rem 1.5rem;
                border-radius: 0.375rem;
                font-weight: 600;
                transition: all 0.2s;
            }
            .btn-sena:hover {
                background-color: var(--sena-dark);
                transform: translateY(-2px);
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
            .navbar {
                background-color: white;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                padding: 0.75rem 1.5rem;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            .card-sena {
                border-radius: 0.5rem;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                transition: all 0.3s;
                border-top: 4px solid var(--sena-green);
            }
            .card-sena:hover {
                transform: translateY(-5px);
                box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            }
            .icon-circle {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 3rem;
                height: 3rem;
                border-radius: 50%;
                background-color: var(--sena-light);
                color: var(--sena-green);
            }
            .hero-section {
                background-image: url('https://www.sena.edu.co/es-co/Noticias/PublishingImages/default-source/noticias-mar-2023/lsm01-03-jove-sena.jpg?sfvrsn=0');
                background-size: cover;
                background-position: center;
                position: relative;
                color: white;
            }
            .hero-section::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.6);
            }
            .hero-content {
                position: relative;
                z-index: 1;
                padding: 4rem 2rem;
                text-align: center;
            }
            .footer {
                background-color: #333;
                color: white;
                padding: 1.5rem;
                margin-top: 2rem;
            }
            /* Mejoras para enlaces en tarjetas */
            .card-link {
                color: var(--sena-green);
                font-weight: 600;
                display: inline-flex;
                align-items: center;
                transition: all 0.2s;
            }
            .card-link:hover {
                color: var(--sena-dark);
                transform: translateX(4px);
            }
            .card-link i {
                margin-left: 0.5rem;
                font-size: 0.875rem;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative min-h-screen bg-gray-100 dark:bg-gray-900">
            @if (Route::has('login'))
                <div class="navbar">
                    <div class="flex items-center">
                        <img src="https://www.sena.edu.co/Style%20Library/alayout/images/logoSena.png" alt="Logo SENA" class="h-5">
                        <h1 class="ml-4 text-lg font-semibold text-sena-green">Sistema de Gestión de Espacios y Recursos</h1>
                    </div>
                    <div class="hidden sm:block">
                        @auth
                            <a href="{{ url('/home') }}" class="btn-sena">Mi Panel</a>
                        @else
                            <div class="flex space-x-4">
                                <a href="{{ route('login') }}" class="btn-sena">Iniciar Sesión</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn-sena" style="background-color: var(--sena-orange);">Registro</a>
                                @endif
                            </div>
                        @endauth
                    </div>
                </div>
            @endif

            <div class="hero-section">
                <div class="hero-content">
                    <h1 class="text-4xl font-bold mb-4">BIENVENIDOS</h1>
                    <p class="text-xl mb-8">Centro de Formación SENA - Solicita y administra espacios y recursos de manera eficiente</p>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}" class="btn-sena text-lg px-8 py-3">Ir a Mi Panel</a>
                        @else
                            <a href="{{ route('login') }}" class="btn-sena text-lg px-8 py-3">Comenzar Ahora</a>
                        @endauth
                    @endif
                </div>
            </div>

            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-sena-green">Gestión Eficiente de Recursos</h2>
                    <p class="mt-2 text-gray-600">Descubre las características de nuestro sistema de gestión para el SENA</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="p-6 bg-white dark:bg-gray-800 card-sena">
                        <div class="flex items-center">
                            <div class="icon-circle">
                                <i class="fas fa-calendar-alt fa-lg"></i>
                            </div>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <a href="https://laravel.com/docs" class="text-sena-green underline">Reserva de Espacios</a>
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Solicita y gestiona la reserva de espacios para tus actividades de formación. Nuestro sistema permite visualizar la disponibilidad en tiempo real, evitar conflictos de horarios y maximizar el uso de los recursos del centro.
                            </div>
                            <a href="https://laravel.com/docs" class="mt-3 card-link">
                                Conocer más <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="p-6 bg-white dark:bg-gray-800 card-sena">
                        <div class="flex items-center">
                            <div class="icon-circle">
                                <i class="fas fa-tools fa-lg"></i>
                            </div>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <a href="https://laracasts.com" class="text-sena-green underline">Gestión de Recursos</a>
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Administra equipos, herramientas y materiales necesarios para tus actividades. Controla préstamos, devoluciones y mantén un inventario actualizado de todos los recursos disponibles en el centro de formación.
                            </div>
                            <a href="https://laracasts.com" class="mt-3 card-link">
                                Explorar recursos <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="p-6 bg-white dark:bg-gray-800 card-sena">
                        <div class="flex items-center">
                            <div class="icon-circle">
                                <i class="fas fa-chart-bar fa-lg"></i>
                            </div>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <a href="https://laravel-news.com/" class="text-sena-green underline">Reportes y Estadísticas</a>
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Genera informes detallados sobre el uso de espacios y recursos. Visualiza estadísticas que te ayudarán a tomar decisiones basadas en datos para optimizar la asignación de recursos en el centro de formación.
                            </div>
                            <a href="https://laravel-news.com/" class="mt-3 card-link">
                                Ver reportes <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="p-6 bg-white dark:bg-gray-800 card-sena">
                        <div class="flex items-center">
                            <div class="icon-circle">
                                <i class="fas fa-user-check fa-lg"></i>
                            </div>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <span class="text-sena-green">Aprobaciones y Permisos</span>
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Sistema de flujo de trabajo para la aprobación de solicitudes. Gestiona permisos según roles de usuario (instructores, aprendices, administrativos) y mantén un registro completo de todas las solicitudes y aprobaciones.
                            </div>
                            <a href="#" class="mt-3 card-link">
                                Más información <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row bg-sena-light p-8 rounded-lg mt-12 shadow-lg">
                    <div class="md:w-2/3 pr-0 md:pr-8">
                        <h3 class="text-2xl font-bold text-sena-green mb-4">¿Por qué utilizar nuestro sistema?</h3>
                        <p class="text-gray-700 mb-6">
                            El Sistema de Gestión de Espacios y Recursos del SENA está diseñado específicamente para optimizar el uso de las instalaciones y recursos educativos, permitiendo una asignación eficiente y transparente que beneficia a todos los miembros de la comunidad educativa.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-sena-green mr-2"></i>
                                <span>Reduce tiempos de gestión</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-sena-green mr-2"></i>
                                <span>Evita conflictos de horarios</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-sena-green mr-2"></i>
                                <span>Maximiza el uso de recursos</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-sena-green mr-2"></i>
                                <span>Seguimiento en tiempo real</span>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/3 mt-6 md:mt-0 flex justify-center items-center">
                        <img src="https://www.sena.edu.co/es-co/formacion/PublishingImages/Paginas/buscadorProgramas/1-sena.jpg" alt="SENA Centro de Formación" class="rounded-lg shadow-lg max-w-full h-auto">
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <i class="fas fa-building text-gray-400 mr-2"></i>
                            <span>SENA - Centro de Formación</span>

                            <i class="fas fa-map-marker-alt text-gray-400 ml-4 mr-2"></i>
                            <span>Av. Caracas No. 13-88, Bogotá</span>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
            
            <footer class="footer text-center">
                <p>&copy; {{ date('Y') }} SENA - Sistema de Gestión de Espacios y Recursos. Todos los derechos reservados.</p>
                <div class="flex justify-center space-x-4 mt-2">
                    <a href="https://www.facebook.com/SENAComunica" target="_blank"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="https://twitter.com/SENAComunica" target="_blank"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="https://www.instagram.com/senacomunica/" target="_blank"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="https://www.youtube.com/user/SENATV" target="_blank"><i class="fab fa-youtube fa-lg"></i></a>
                </div>
            </footer>
        </div>
    </body>
</html>