<section class="relative overflow-hidden">
    <!-- Imagen de fondo -->
    <div class="h-[300px] sm:h-[400px] lg:h-screen bg-[url('../../public/images/banners/wix.png')] bg-cover bg-center bg-no-repeat lg:absolute lg:inset-0 z-0"></div>

    <!-- Contenido -->
    <div class="relative z-10 flex items-center justify-center lg:justify-end px-4 py-10 lg:min-h-screen">
        <div class="w-full max-w-md sm:max-w-lg lg:max-w-xl p-6 sm:p-10 bg-white border border-gray-200 shadow-sm text-center">
            <h5 class="mb-4 text-2xl sm:text-3xl font-bold tracking-tight text-gray-900">
                Tus artículos a la puerta de tu casa
            </h5>
            <p class="mb-6 font-normal text-gray-700">
                En nuestra farmacia nos preocupamos por tu salud y comodidad.
            </p>
            <a href="#"
                class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-[var(--primary)] rounded-lg hover:bg-[var(--hover-primary)] focus:ring-4 focus:outline-none focus:ring-blue-300 mx-auto">
                Productos
                <svg class="rtl:rotate-180 w-4 h-4 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
    </div>
</section>

<script>
    //--- Funcion para que la imagen se mueva mas lento respecto al demas contenido ---
    document.addEventListener('DOMContentLoaded', () => {
        const backgroundElement = document.getElementById('presentation-background');
        
            // --- Efecto Parallax (tu código existente) ---
            const parallaxFactor = 0.6;

            window.addEventListener('scroll', () => {
                const scrollPosition = window.pageYOffset;
                if (backgroundElement.offsetParent !== null) {
                    backgroundElement.style.backgroundPositionY = (scrollPosition * parallaxFactor) +
                        'px';
                }
            });
    });
</script>
