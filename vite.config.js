import {defineConfig} from 'vite'
import laravel from 'laravel-vite-plugin'
import vue from '@vitejs/plugin-vue'

require('dotenv').config()

const extendedViteDevServerOptions = {}

// if (process.env.GITPOD_VITE_URL) {
//     extendedViteDevServerOptions.hmr = {
//         protocol: 'wss',
//         host: '0.0.0.0',
//         clientPort: 443
//     }
// }

export default defineConfig({
    // server: {
    //     ...extendedViteDevServerOptions
    // },
    plugins: [
        laravel({
            input: 'resources/js/app.js',
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
})
