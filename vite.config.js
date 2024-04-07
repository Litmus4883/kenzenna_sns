import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/preview.js',
            ],
            refresh: true,
        }),
    ],
    server: {  
        port: 8081, 
        strictPort: true,
    },
});
