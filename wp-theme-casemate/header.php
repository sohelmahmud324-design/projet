<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@400;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            teal: '#4FD1C5',
                            dark: '#414141',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        outfit: ['Outfit', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        .hero-gradient {
            background: linear-gradient(135deg, #ffffff 0%, #f3f4f6 100%);
        }

        .social-gradient {
            background: linear-gradient(to right, #ffffff 0%, #FFF5ED 40%, #FFDDBB 100%);
        }

        @keyframes float {
            0% {
                transform: translateY(0px) rotate(12deg);
            }

            50% {
                transform: translateY(-15px) rotate(10deg);
            }

            100% {
                transform: translateY(0px) rotate(12deg);
            }
        }

        .float-anim {
            animation: float 4s ease-in-out infinite;
        }

        .hover-elevate {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            will-change: transform, box-shadow;
        }

        .hover-elevate:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
        }

        .glass-box {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .cursor-trail {
            width: 8px;
            height: 8px;
            background: #4FD1C5;
            border-radius: 50%;
            position: fixed;
            pointer-events: none;
            z-index: 10000;
            transition: transform 0.1s ease-out;
            mix-blend-mode: difference;
        }

        .tilt-card {
            transform-style: preserve-3d;
            perspective: 1000px;
        }

        .parallax-target {
            will-change: transform;
        }

        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #4FD1C5;
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #3dbdb1;
        }
    </style>
    <?php wp_head(); ?>
</head>

<body <?php body_class('font-sans text-gray-900 bg-white overflow-x-hidden'); ?>>
    <div class="cursor-trail hidden md:block" id="cursor"></div>

    <!-- Header -->
    <header
        class="bg-[#414141] text-white py-4 px-6 md:px-12 flex justify-between items-center sticky top-0 z-50 shadow-lg">
        <div class="flex items-center gap-4" data-aos="fade-down" data-aos-duration="600">
            <div class="w-12 h-12 border-2 border-white rounded-xl flex items-center justify-center p-1.5 shadow-inner">
                <div class="w-full h-full border-2 border-white rounded-lg flex items-center justify-center">
                    <div class="w-2 h-2 bg-white rounded-full animate-pulse"></div>
                </div>
            </div>
            <span class="font-outfit text-3xl font-black tracking-widest uppercase">
                <?php bloginfo('name'); ?>
            </span>
        </div>

        <nav class="hidden lg:flex gap-10 items-center text-sm font-medium" data-aos="fade-down" data-aos-duration="600"
            data-aos-delay="100">
            <a href="#" class="hover:text-brand-teal transition-all hover:scale-105">iPhone Cases</a>
            <a href="#" class="hover:text-brand-teal transition-all hover:scale-105">Custom</a>
            <a href="#" class="hover:text-brand-teal transition-all hover:scale-105">Accessories</a>
            <a href="#" class="hover:text-brand-teal transition-all hover:scale-105">Sale</a>
        </nav>

        <div class="flex items-center gap-6" data-aos="fade-down" data-aos-duration="600" data-aos-delay="200">
            <a href="#" class="hover:text-brand-teal transition-all hover:scale-125">
                <i class="fa-solid fa-cart-shopping text-xl"></i>
            </a>
            <a href="#" class="hover:text-brand-teal transition-all hover:scale-125">
                <i class="fa-solid fa-magnifying-glass text-xl"></i>
            </a>
            <button class="md:hidden">
                <i class="fa-solid fa-bars text-xl"></i>
            </button>
        </div>
    </header>