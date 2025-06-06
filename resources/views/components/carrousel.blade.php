<div x-data="{
    slides: [{
            imgSrc: '{{ asset('images/banners/banner-1.png') }}',
            imgAlt: 'New collection - ride the wave of excitement.',
        },
        {
            imgSrc: '{{ asset('images/banners/banner-2.png') }}',
            imgAlt: 'Up to 30% discount, gear up for adventure.',
        },

        {
            imgSrc: '{{ asset('images/banners/banner-3.png') }}',
            imgAlt: '30% off all surfing essentials, ride like a pro.',
        },
    ],
    currentSlideIndex: 1,
    previous() {
        if (this.currentSlideIndex > 1) {
            this.currentSlideIndex = this.currentSlideIndex - 1
        } else {
            // Si se esta en la primera diapositiva, ir a la última diapositiva          
            this.currentSlideIndex = this.slides.length
        }
    },
    next() {
        if (this.currentSlideIndex < this.slides.length) {
            this.currentSlideIndex = this.currentSlideIndex + 1
        } else {
            // Si se esta en la última diapositiva, ir a la primera diapositiva 
            this.currentSlideIndex = 1
        }
    },
}" class="relative w-full overflow-hidden rounded-lg shadow-lg">

    <!-- Boton de regresar -->
    <button type="button"
        class="absolute left-5 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-white/40 p-2 text-neutral-600 transition hover:bg-white/60 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:outline-offset-0 dark:bg-neutral-950/40 dark:text-neutral-300 dark:hover:bg-neutral-950/60 dark:focus-visible:outline-white"
        aria-label="previous slide" x-on:click="previous()">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="3"
            class="size-5 md:size-6 pr-0.5" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
        </svg>
    </button>

    <!-- Boton de avanzar -->
    <button type="button"
        class="absolute right-5 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-white/40 p-2 text-neutral-600 transition hover:bg-white/60  focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:outline-offset-0 dark:bg-neutral-950/40 dark:text-neutral-300 dark:hover:bg-neutral-950/60 dark:focus-visible:outline-white"
        aria-label="next slide" x-on:click="next()">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none"
            stroke-width="3" class="size-5 md:size-6 pl-0.5" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
    </button>

    <!-- slides -->
    <!-- Cambio del aspecto 3/1 para que coincida con la relación de aspecto de sus imágenes-->
    <div class="relative aspect-3/1 w-full">
        <template x-for="(slide, index) in slides">
            <div x-cloak x-show="currentSlideIndex == index + 1" class="absolute inset-0"
                x-transition.opacity.duration.700ms>
                <img class="absolute w-full h-full inset-0 object-cover text-neutral-600 dark:text-neutral-300"
                    x-bind:src="slide.imgSrc" x-bind:alt="slide.imgAlt" />
            </div>
        </template>
    </div>

    <!-- indicadores -->
    <div class="absolute rounded-sm bottom-3 md:bottom-5 left-1/2 z-20 flex -translate-x-1/2 gap-4 md:gap-3 bg-white/75 px-1.5 py-1 md:px-2 dark:bg-neutral-950/75"
        role="group" aria-label="slides">
        <template x-for="(slide, index) in slides">
            <button class="size-2 rounded-full transition bg-neutral-600 dark:bg-neutral-300"
                x-on:click="currentSlideIndex = index + 1"
                x-bind:class="[currentSlideIndex === index + 1 ? 'bg-neutral-600 dark:bg-neutral-300' :
                    'bg-neutral-600/50 dark:bg-neutral-300/50'
                ]"
                x-bind:aria-label="'slide ' + (index + 1)"></button>
        </template>
    </div>
</div>
