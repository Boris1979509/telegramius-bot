import { defineConfig, loadEnv } from 'vite'
import laravel from 'laravel-vite-plugin'

export default ({ mode }) => {
    process.env = { ...process.env, ...loadEnv(mode, process.cwd()) }
    return defineConfig({
        plugins: [
            laravel({
                input: ['resources/sass/app.scss', 'resources/js/app.js'],
                refresh: true
            })
        ],
        resolve: {
            alias: {
                '@': '/resources'
            }
        },
        server: {
            host: process.env.VITE_HOST
        }
    })
}
