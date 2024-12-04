import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/css/bootstrap-datepicker.min.css',
                'resources/css/font-awesome.min.css',
                'resources/css/materialdesignicons.css',
                'resources/css/styles.css',
                'resources/css/style.css',
                'resources/css/themify-icons.css',
                'resources/css/vendor.bundle.base.css',
                'resources/js/bootstrap-datepicker.min.js',
                'resources/js/chart.umd.js',
                'resources/js/dashboard.js',
                'resources/js/jquery.cockie.js',
                'resources/js/misc.js',
                'resources/js/off-canvas.js',
                'resources/js/settings.js',
                'resources/todolist.js',
                'resources/js/vendor.bundle.base.js',
            ],
            refresh: true,
        }),
    ],
});
