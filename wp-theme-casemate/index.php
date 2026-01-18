<?php get_header(); ?>

<!-- Hero Section -->
<section
    class="max-w-7xl mx-auto px-6 md:px-12 py-16 md:py-24 flex flex-col md:flex-row items-center gap-12 min-h-[85vh] relative overflow-hidden">
    <!-- Floating Bg Elements -->
    <div class="absolute top-20 right-20 w-32 h-32 bg-brand-teal/5 rounded-full blur-3xl parallax-bg" data-speed="0.2">
    </div>
    <div class="absolute bottom-20 left-20 w-48 h-48 bg-pink-500/5 rounded-full blur-3xl parallax-bg" data-speed="-0.1">
    </div>

    <div class="flex-1 text-center md:text-left z-10" data-aos="fade-right" data-aos-duration="1000">
        <h1
            class="font-outfit text-5xl md:text-7xl font-black leading-tight text-gray-900 mb-8 uppercase tracking-tighter">
            PROTECT YOUR STYLE.<br>
            <span class="text-brand-teal">FIND YOUR PERFECT CASE</span>
        </h1>
        <p class="text-xl md:text-2xl text-gray-500 mb-10 max-w-lg leading-relaxed">
            Explore our curated collection of durable & fashionable phone cases
        </p>
        <button
            class="magnetic bg-[#4FD1C5] text-white font-black text-2xl px-16 py-6 rounded-2xl hover:bg-[#3dbdb1] transition-all transform hover:scale-105 shadow-[0_20px_50px_rgba(79,189,177,0.4)] uppercase tracking-widest active:scale-95">
            SHOP NOW
        </button>
    </div>
    <div class="flex-1 relative z-10 parallax-container" data-aos="zoom-in-left" data-aos-duration="1200">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/hero_cases.png" alt="Featured Phone Cases"
            class="w-full h-auto drop-shadow-[0_45px_45px_rgba(0,0,0,0.18)] transform transition-transform duration-300 parallax-target"
            id="hero-image">
    </div>
</section>

<!-- Featured Collections -->
<section class="max-w-7xl mx-auto px-6 md:px-12 py-12 md:py-16">
    <h2 class="font-outfit text-3xl font-black mb-12 text-gray-900 uppercase tracking-widest" data-aos="fade-right">
        Featured Collections</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        <!-- Minimalist -->
        <div class="group cursor-pointer tilt-card" data-aos="fade-up" data-aos-delay="100">
            <div
                class="border-2 border-black rounded-[35px] p-12 flex flex-col items-center transition-all bg-white h-full hover:shadow-2xl">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/minimalist_case.png" alt="Minimalist"
                    class="w-56 h-auto mb-8 transform group-hover:scale-110 transition-transform duration-500 drop-shadow-2xl">
                <h3 class="font-outfit font-black text-3xl mb-1 uppercase tracking-tight">Minimalist</h3>
                <p class="text-gray-400 font-bold text-sm tracking-widest">(VIEW COLLECTION)</p>
            </div>
        </div>
        <!-- Artistic -->
        <div class="group cursor-pointer tilt-card" data-aos="fade-up" data-aos-delay="200">
            <div
                class="border-2 border-black rounded-[35px] p-12 flex flex-col items-center transition-all bg-white h-full hover:shadow-2xl">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/artistic_case.png" alt="Artistic"
                    class="w-56 h-auto mb-8 transform group-hover:scale-110 transition-transform duration-500 drop-shadow-2xl">
                <h3 class="font-outfit font-black text-3xl mb-1 uppercase tracking-tight">Artistic</h3>
                <p class="text-gray-400 font-bold text-sm tracking-widest">(VIEW COLLECTION)</p>
            </div>
        </div>
        <!-- Tough Armor -->
        <div class="group cursor-pointer tilt-card" data-aos="fade-up" data-aos-delay="300">
            <div
                class="border-2 border-black rounded-[35px] p-12 flex flex-col items-center transition-all bg-white h-full hover:shadow-2xl">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/tough_armor_case.png" alt="Tough Armor"
                    class="w-56 h-auto mb-8 transform group-hover:scale-110 transition-transform duration-500 drop-shadow-2xl">
                <h3 class="font-outfit font-black text-3xl mb-1 uppercase tracking-tight">Tough Armor</h3>
                <p class="text-gray-400 font-bold text-sm tracking-widest">(VIEW COLLECTION)</p>
            </div>
        </div>
    </div>
</section>

<!-- Woman Feature Section -->
<section class="max-w-7xl mx-auto px-6 md:px-12 py-20" data-aos="zoom-in">
    <div class="bg-gradient-to-br from-[#F472B6] via-[#FBCFE8] to-[#FFF1F2] rounded-[50px] overflow-hidden flex flex-col md:flex-row items-center h-[500px] shadow-2xl relative transition-transform duration-700 hover:scale-[1.01]"
        id="woman-section">
        <div class="flex-1 p-10 md:p-20 w-full flex items-center justify-center md:justify-start z-10"
            data-aos="fade-right" data-aos-delay="400">
            <div
                class="glass-box rounded-[40px] p-12 w-full max-w-md flex flex-col items-center md:items-start gap-6 shadow-2xl border border-white/50 transform hover:rotate-2 transition-transform duration-500">
                <h3 class="font-outfit font-black text-3xl uppercase tracking-tighter leading-none">Season's Best
                    Sellers</h3>
                <p class="text-gray-600 font-medium">Explore the cases everyone is talking about this summer.</p>
                <button
                    class="bg-[#4FD1C5] text-white font-black text-lg px-8 py-4 rounded-xl hover:bg-[#3dbdb1] transition-all transform hover:scale-105 shadow-lg uppercase tracking-widest">Explore</button>
            </div>
        </div>
        <div class="flex-1 w-full h-full relative" data-aos="fade-left" data-aos-delay="600">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/woman_feature.jpg" alt="Woman"
                class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-1000">
            <div class="absolute inset-0 bg-black/5"></div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="max-w-7xl mx-auto px-6 md:px-12 py-12 md:py-20">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        <!-- Sarah Cook reviews -->
        <div class="border border-gray-100 rounded-[2.5rem] p-10 flex flex-col gap-6 bg-white shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 tilt-card"
            data-aos="fade-up" data-aos-delay="100">
            <div class="flex gap-5 items-center">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=150&auto=format"
                        alt="Sarah Cook"
                        class="w-16 h-16 rounded-full object-cover shadow-md ring-4 ring-gray-100 transition-all hover:ring-brand-teal">
                    <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500 border-4 border-white rounded-full">
                    </div>
                </div>
                <div>
                    <h4 class="font-black text-xl">Sarah Cook</h4>
                    <p class="text-[11px] text-gray-400 font-black uppercase tracking-[0.2em]">Verified Customer</p>
                </div>
            </div>
            <div class="flex text-[#FFD700] gap-1.5 text-lg">
                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
            </div>
            <p class="text-gray-600 leading-relaxed italic text-xl">"I absolutely love my new artistic case! The design
                is stunning and it feels very durable."</p>
            <div
                class="mt-auto pt-6 flex justify-between text-[11px] text-gray-400 border-t border-gray-50 uppercase font-black tracking-widest">
                <span>Shopper Badge</span>
                <span>2 days ago</span>
            </div>
        </div>
        <!-- Sarah Cook reviews 2 -->
        <div class="border border-gray-100 rounded-[2.5rem] p-10 flex flex-col gap-6 bg-white shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 tilt-card"
            data-aos="fade-up" data-aos-delay="200">
            <div class="flex gap-5 items-center">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=150&auto=format"
                        alt="Mike Ross"
                        class="w-16 h-16 rounded-full object-cover shadow-md ring-4 ring-gray-100 transition-all hover:ring-brand-teal">
                    <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500 border-4 border-white rounded-full">
                    </div>
                </div>
                <div>
                    <h4 class="font-black text-xl">Mike Ross</h4>
                    <p class="text-[11px] text-gray-400 font-black uppercase tracking-[0.2em]">Verified Customer</p>
                </div>
            </div>
            <div class="flex text-[#FFD700] gap-1.5 text-lg">
                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
            </div>
            <p class="text-gray-600 leading-relaxed italic text-xl">"The Tough Armor case gives me peace of mind. Not
                too bulky but powerful."</p>
            <div
                class="mt-auto pt-6 flex justify-between text-[11px] text-gray-400 border-t border-gray-50 uppercase font-black tracking-widest">
                <span>Power Buyer</span>
                <span>5 days ago</span>
            </div>
        </div>
        <!-- Sarah Cook reviews 3 -->
        <div class="border border-gray-100 rounded-[2.5rem] p-10 flex flex-col gap-6 bg-white shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 tilt-card"
            data-aos="fade-up" data-aos-delay="300">
            <div class="flex gap-5 items-center">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=150&auto=format"
                        alt="Elena V."
                        class="w-16 h-16 rounded-full object-cover shadow-md ring-4 ring-gray-100 transition-all hover:ring-brand-teal">
                    <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500 border-4 border-white rounded-full">
                    </div>
                </div>
                <div>
                    <h4 class="font-black text-xl">Elena V.</h4>
                    <p class="text-[11px] text-gray-400 font-black uppercase tracking-[0.2em]">Verified Customer</p>
                </div>
            </div>
            <div class="flex text-[#FFD700] gap-1.5 text-lg">
                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
            </div>
            <p class="text-gray-600 leading-relaxed italic text-xl">"Beautiful minimalist designs. This is hands down
                the best phone case brand."</p>
            <div
                class="mt-auto pt-6 flex justify-between text-[11px] text-gray-400 border-t border-gray-50 uppercase font-black tracking-widest">
                <span>Top Reviewer</span>
                <span>1 week ago</span>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>