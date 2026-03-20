import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', 'Outfit', ...defaultTheme.fontFamily.sans],
                outfit: ['Outfit', 'sans-serif'],
            },
            colors: {
                admin: {
                    primary: '#0ea5e9', // Sky-500
                    secondary: '#8b5cf6', // Violet-500
                    accent: '#10b981', // Emerald-500
                    glass: 'rgba(255, 255, 255, 0.4)',
                    'glass-border': 'rgba(255, 255, 255, 0.2)',
                }
            },
            backdropBlur: {
                xs: '2px',
            },
            borderRadius: {
                '2xl': '1rem',
                '3xl': '1.5rem',
            },
            boxShadow: {
                'soft-xl': '0 20px 25px -5px rgba(0, 0, 0, 0.05), 0 10px 10px -5px rgba(0, 0, 0, 0.02)',
            }
        },
    },

    plugins: [forms, typography],
};
