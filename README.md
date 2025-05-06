<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentación de FarmaPro</title>
    <!-- Enlace a Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900">

    <div class="max-w-7xl mx-auto px-6 py-12">

        <!-- Título del Proyecto -->
        <header class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-gray-900 mb-4">Documentación del Proyecto: <span class="text-blue-600">FarmaPro</span></h1>
            <p class="text-xl text-gray-600">Una aplicación web de muestra de productos farmacéuticos utilizando Laravel, Tailwind CSS y Alpine.js.</p>
        </header>

        <!-- Descripción del Proyecto -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Descripción del Proyecto</h2>
            <p class="text-lg text-gray-700">FarmaPro es una aplicación web cuyo objetivo principal es proporcionar una página de muestra de productos farmacéuticos, permitiendo a los usuarios explorar una variedad de productos de salud y bienestar. La plataforma está diseñada para ofrecer una experiencia de usuario fluida, atractiva y dinámica, utilizando tecnologías modernas y eficientes.</p>

            <p class="text-lg text-gray-700 mt-4">El proyecto se desarrolla con las siguientes tecnologías:</p>
            <ul class="list-disc pl-5 mt-2">
                <li><strong>Laravel</strong> para el backend, proporcionando una arquitectura robusta y escalable.</li>
                <li><strong>Tailwind CSS</strong> para la creación de interfaces modernas y responsivas de manera eficiente.</li>
                <li><strong>Alpine.js</strong> para la interacción dinámica en el frontend, permitiendo una experiencia rápida sin la necesidad de frameworks JavaScript pesados.</li>
            </ul>
        </section>

        <!-- Tecnologías Utilizadas -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Tecnologías Utilizadas</h2>

            <div class="mb-8">
                <h3 class="text-2xl font-semibold text-gray-800">Backend: Laravel</h3>
                <p class="text-lg text-gray-700 mt-2">Laravel es un framework PHP que ofrece una base sólida para el desarrollo de aplicaciones web. En este proyecto, Laravel es utilizado para:</p>
                <ul class="list-disc pl-5 mt-2">
                    <li>Definir rutas y manejar la lógica del backend.</li>
                    <li>Gestionar la autenticación y el registro de usuarios.</li>
                    <li>Gestionar la base de datos a través de Eloquent ORM.</li>
                    <li>Enviar correos electrónicos relacionados con las compras o suscripciones.</li>
                </ul>
            </div>

            <div class="mb-8">
                <h3 class="text-2xl font-semibold text-gray-800">Frontend: Tailwind CSS</h3>
                <p class="text-lg text-gray-700 mt-2">Tailwind CSS es un framework de utilidades CSS que permite crear interfaces altamente personalizadas y responsivas rápidamente. En FarmaPro, se utiliza para:</p>
                <ul class="list-disc pl-5 mt-2">
                    <li>Diseños responsivos para adaptarse a diferentes dispositivos.</li>
                    <li>Crear componentes como botones, formularios y tarjetas de productos.</li>
                    <li>Optimizar el rendimiento, cargando solo las clases CSS necesarias.</li>
                </ul>
            </div>

            <div class="mb-8">
                <h3 class="text-2xl font-semibold text-gray-800">Interactividad: Alpine.js</h3>
                <p class="text-lg text-gray-700 mt-2">Alpine.js es una pequeña biblioteca JavaScript para manejar interacciones dinámicas en el frontend. En FarmaPro, se utiliza para:</p>
                <ul class="list-disc pl-5 mt-2">
                    <li>Menús desplegables para la navegación entre categorías de productos.</li>
                    <li>Modales para mostrar información adicional o confirmar acciones.</li>
                    <li>Interacciones en tiempo real, como notificaciones de actualizaciones.</li>
                </ul>
            </div>
        </section>

        <!-- Objetivos del Proyecto -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Objetivos del Proyecto</h2>
            <p class="text-lg text-gray-700">Los principales objetivos de <strong>FarmaPro</strong> son:</p>
            <ul class="list-decimal pl-5 mt-2">
                <li>Mostrar productos farmacéuticos con descripciones, imágenes y precios.</li>
                <li>Facilitar la navegación entre categorías y productos con filtros para mejorar la experiencia de compra.</li>
                <li>Crear una interfaz atractiva y moderna utilizando Tailwind CSS y Alpine.js para una experiencia fluida.</li>
                <li>Asegurar que la página sea accesible y responsiva en diferentes dispositivos.</li>
            </ul>
        </section>

        <!-- Estructura del Proyecto -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Estructura del Proyecto</h2>
            <pre class="bg-gray-800 text-white p-4 rounded-lg overflow-auto">
/FarmaPro
├── /app
│   ├── /Http
│   │   └── /Controllers
│   └── /Models
├── /resources
│   ├── /views
│   │   ├── /products
│   │   └── /layouts
│   ├── /css
│   │   └── tailwind.css
│   └── /js
│       ├── app.js
│       └── alpine.js
├── /routes
│   └── web.php
└── /public
    ├── /images
    └── /css
            </pre>
            <p class="text-lg text-gray-700 mt-4">La estructura del proyecto está organizada en carpetas que contienen los controladores, vistas, archivos de estilo y scripts necesarios para su funcionamiento.</p>
        </section>

        <!-- Instalación y Configuración -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Instalación y Configuración</h2>
            <h3 class="text-2xl font-semibold text-gray-800">Requisitos Previos</h3>
            <ul class="list-disc pl-5 mt-2">
                <li>PHP >= 7.4</li>
                <li>Composer</li>
                <li>Node.js y npm</li>
                <li>MySQL o base de datos compatible con Laravel</li>
            </ul>

            <h3 class="text-2xl font-semibold text-gray-800 mt-4">Pasos para Configuración</h3>
            <ol class="list-decimal pl-5 mt-2">
                <li><strong>Clonar el Repositorio:</strong> 
                    <pre class="bg-gray-200 text-gray-800 p-2 rounded-md">git clone https://github.com/usuario/farmapro.git</pre>
                </li>
                <li><strong>Instalar Dependencias de Composer:</strong>
                    <pre class="bg-gray-200 text-gray-800 p-2 rounded-md">composer install</pre>
                </li>
                <li><strong>Instalar Dependencias de npm:</strong>
                    <pre class="bg-gray-200 text-gray-800 p-2 rounded-md">npm install</pre>
                </li>
                <li><strong>Configurar el Archivo `.env`:</strong> Copia el archivo `.env.example` a `.env` y configura los parámetros necesarios.</li>
                <li><strong>Realizar las Migraciones de Base de Datos:</strong>
                    <pre class="bg-gray-200 text-gray-800 p-2 rounded-md">php artisan migrate</pre>
                </li>
                <li><strong>Compilar los Assets:</strong>
                    <pre class="bg-gray-200 text-gray-800 p-2 rounded-md">npm run dev</pre>
                </li>
                <li><strong>Iniciar el Servidor de Desarrollo:</strong>
                    <pre class="bg-gray-200 text-gray-800 p-2 rounded-md">php artisan serve</pre>
                </li>
            </ol>
        </section>

    </div>
</body>
</html>
