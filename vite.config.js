import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
import tailwindcss from '@tailwindcss/vite';
>>>>>>> e3104d0cc82be6935792b089fb27d42c43e8b9b3
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
<<<<<<< HEAD
=======
=======
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
>>>>>>> e3104d0cc82be6935792b089fb27d42c43e8b9b3
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
    ],
});
