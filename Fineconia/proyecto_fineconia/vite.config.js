import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                 'resources/css/login-registro.css', // Agrega aquí el CSS específico
                 'resources/css/veriCodigo.css',
                 'resources/css/VeriCorreo.css',
                 'resources/css/Bienvenida.css',
                 'resources/css/Secciones.css',
                 'resources/css/Home.css',
                'resources/css/GastosIngresos.css',
                 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
