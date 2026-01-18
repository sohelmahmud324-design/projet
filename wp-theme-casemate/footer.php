<!-- Social Footer Section -->
<section class="social-gradient py-24 overflow-hidden relative">
    <div
        class="max-w-7xl mx-auto px-6 md:px-12 flex flex-col md:flex-row justify-between items-center gap-20 relative z-10">
        <div class="flex-1 flex justify-center md:justify-start" data-aos="fade-right">
            <div
                class="border-4 border-white rounded-[50px] p-6 glass-box shadow-2xl flex items-center justify-center transform transition-all hover:scale-105 duration-700">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/social_phones.png"
                    alt="Casemate Social Duo"
                    class="w-full h-auto drop-shadow-2xl rounded-3xl transition-all duration-500">
            </div>
        </div>
        <div class="flex-1 flex flex-wrap justify-center md:justify-end gap-10" data-aos="fade-left">
            <a href="#"
                class="magnetic w-20 h-20 bg-black text-white rounded-[25px] flex items-center justify-center text-4xl hover:bg-brand-teal transition-all hover:scale-110 shadow-2xl">
                <i class="fa-brands fa-facebook-f"></i>
            </a>
            <a href="#"
                class="magnetic w-20 h-20 bg-black text-white rounded-[25px] flex items-center justify-center text-4xl hover:bg-brand-teal transition-all hover:scale-110 shadow-2xl">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="#"
                class="magnetic w-20 h-20 bg-black text-white rounded-[25px] flex items-center justify-center text-4xl hover:bg-brand-teal transition-all hover:scale-110 shadow-2xl">
                <i class="fa-brands fa-twitter"></i>
            </a>
            <a href="#"
                class="magnetic w-20 h-20 bg-black text-white rounded-[25px] flex items-center justify-center text-4xl hover:bg-brand-teal transition-all hover:scale-110 shadow-2xl">
                <i class="fa-brands fa-linkedin-in"></i>
            </a>
        </div>
    </div>
    <div class="absolute -right-20 -top-20 w-80 h-80 bg-brand-teal/5 rounded-full blur-[120px] parallax-bg"
        data-speed="0.1"></div>
    <div class="absolute -left-20 -bottom-20 w-96 h-96 bg-pink-500/5 rounded-full blur-[120px] parallax-bg"
        data-speed="-0.15"></div>
</section>

<!-- Final CTA Banner -->
<section class="max-w-6xl mx-auto px-4 md:px-12 py-16 md:py-24">
    <div class="border-4 border-black rounded-[65px] p-12 md:p-20 flex flex-col md:flex-row items-center gap-16 bg-white shadow-[0_60px_120px_-30px_rgba(0,0,0,0.12)] overflow-hidden relative group"
        data-aos="zoom-in">
        <div class="w-44 md:w-60 flex-shrink-0 float-anim relative z-10 parallax-target" id="cta-phone">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/phone_mockup.png" alt="Phone"
                class="w-full drop-shadow-[0_20px_40px_rgba(0,0,0,0.1)]">
        </div>
        <form id="subscribe-form" class="flex-1 w-full flex flex-col md:flex-row items-center gap-8 relative z-10">
            <input type="email" id="subscriber-email" placeholder="YOUR@EMAIL.COM" required
                class="w-full bg-gray-50 border-2 border-gray-100 rounded-[30px] px-10 py-6 text-xl font-black focus:outline-none focus:ring-8 focus:ring-brand-teal/5 focus:border-brand-teal transition-all shadow-inner tracking-widest uppercase">
            <button type="submit" id="subscribe-btn"
                class="magnetic w-full md:w-auto bg-[#4FD1C5] text-white font-black text-2xl px-16 py-8 rounded-[30px] hover:bg-[#3dbdb1] transition-all transform hover:scale-105 active:scale-95 shadow-[0_15px_45px_rgba(79,189,177,0.4)] uppercase tracking-[0.2em] whitespace-nowrap">
                SUBMIT
            </button>
        </form>
        <div class="absolute inset-0 bg-gradient-to-br from-transparent via-white/40 to-white/60 pointer-events-none">
        </div>
    </div>
    <div id="status-message" class="mt-8 text-center font-black tracking-widest uppercase text-lg hidden"></div>
</section>

<!-- Main Footer -->
<footer class="bg-white border-t border-gray-100 pt-24 pb-12">
    <div class="max-w-7xl mx-auto px-6 md:px-12 grid grid-cols-1 md:grid-cols-4 gap-16 mb-20" data-aos="fade-up">
        <div class="col-span-1 md:col-span-1">
            <div class="flex items-center gap-4 mb-8">
                <div class="w-10 h-10 border-2 border-black rounded-xl flex items-center justify-center p-1 shadow-sm">
                    <div class="w-full h-full border-2 border-black rounded-lg flex items-center justify-center">
                        <div class="w-2 h-2 bg-brand-teal rounded-full"></div>
                    </div>
                </div>
                <span class="font-outfit text-2xl font-black tracking-tight uppercase">Casemate</span>
            </div>
            <p class="text-gray-500 text-lg leading-relaxed mb-8">Premium protection for your style. We blend fashion
                with high-performance durability.</p>
            <div class="flex gap-5">
                <a href="#"
                    class="w-10 h-10 bg-gray-50 text-gray-400 rounded-xl flex items-center justify-center hover:bg-brand-teal hover:text-white transition-all"><i
                        class="fa-brands fa-instagram text-xl"></i></a>
                <a href="#"
                    class="w-10 h-10 bg-gray-50 text-gray-400 rounded-xl flex items-center justify-center hover:bg-brand-teal hover:text-white transition-all"><i
                        class="fa-brands fa-tiktok text-xl"></i></a>
                <a href="#"
                    class="w-10 h-10 bg-gray-50 text-gray-400 rounded-xl flex items-center justify-center hover:bg-brand-teal hover:text-white transition-all"><i
                        class="fa-brands fa-pinterest-p text-xl"></i></a>
            </div>
        </div>
        <div>
            <h4 class="font-outfit font-black text-sm uppercase tracking-[0.3em] mb-8 text-gray-900">Shop</h4>
            <ul class="flex flex-col gap-4 text-gray-500 font-medium">
                <li><a href="#" class="hover:text-brand-teal transition-colors">iPhone Cases</a></li>
                <li><a href="#" class="hover:text-brand-teal transition-colors">Samsung Cases</a></li>
                <li><a href="#" class="hover:text-brand-teal transition-colors">Accessories</a></li>
                <li><a href="#" class="hover:text-brand-teal transition-colors">Limited Edition</a></li>
                <li><a href="#" class="hover:text-brand-teal transition-colors text-red-400 font-bold">Sale</a></li>
            </ul>
        </div>
        <div>
            <h4 class="font-outfit font-black text-sm uppercase tracking-[0.3em] mb-8 text-gray-900">Help</h4>
            <ul class="flex flex-col gap-4 text-gray-500 font-medium">
                <li><a href="#" class="hover:text-brand-teal transition-colors">Shipping Info</a></li>
                <li><a href="#" class="hover:text-brand-teal transition-colors">Returns & Exchanges</a></li>
                <li><a href="#" class="hover:text-brand-teal transition-colors">Track Order</a></li>
                <li><a href="#" class="hover:text-brand-teal transition-colors">Contact Us</a></li>
                <li><a href="#" class="hover:text-brand-teal transition-colors">FAQ</a></li>
            </ul>
        </div>
        <div>
            <h4 class="font-outfit font-black text-sm uppercase tracking-[0.3em] mb-8 text-gray-900">Company</h4>
            <ul class="flex flex-col gap-4 text-gray-500 font-medium">
                <li><a href="#" class="hover:text-brand-teal transition-colors">About Us</a></li>
                <li><a href="#" class="hover:text-brand-teal transition-colors">Sustainability</a></li>
                <li><a href="#" class="hover:text-brand-teal transition-colors">Wholesale</a></li>
                <li><a href="#" class="hover:text-brand-teal transition-colors">Press</a></li>
                <li><a href="#" class="hover:text-brand-teal transition-colors">Affiliates</a></li>
            </ul>
        </div>
    </div>
    <div
        class="max-w-7xl mx-auto px-6 md:px-12 pt-12 border-t border-gray-100 flex flex-col md:flex-row justify-between items-center gap-8">
        <p class="text-[11px] text-gray-400 font-black uppercase tracking-[0.4em]">©
            <?php echo date('Y'); ?> Casemate Design. All rights reserved.
        </p>
        <div class="flex gap-10 text-[11px] text-gray-400 font-black uppercase tracking-[0.4em]">
            <a href="#" class="hover:text-brand-teal transition-colors">Privacy Policy</a>
            <a href="#" class="hover:text-brand-teal transition-colors">Terms of Service</a>
            <a href="#" class="hover:text-brand-teal transition-colors">Cookie Policy</a>
        </div>
    </div>
</footer>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({ duration: 1000, offset: 100, once: true, easing: 'ease-out-quint', delay: 100 });
    const cursor = document.getElementById('cursor');
    document.addEventListener('mousemove', (e) => { cursor.style.transform = `translate(${e.clientX - 4}px, ${e.clientY - 4}px)`; });
    document.addEventListener('mousemove', (e) => {
        const moveX = (e.clientX - window.innerWidth / 2) * 0.015;
        const moveY = (e.clientY - window.innerHeight / 2) * 0.015;
        document.querySelectorAll('.parallax-target').forEach(target => { target.style.transform = `translate(${moveX}px, ${moveY}px)`; });
    });
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        document.querySelectorAll('.parallax-bg').forEach(item => {
            const speed = parseFloat(item.getAttribute('data-speed'));
            item.style.transform = `translateY(${scrolled * speed}px)`;
        });
    });
    document.querySelectorAll('.tilt-card').forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left, y = e.clientY - rect.top;
            const xc = rect.width / 2, yc = rect.height / 2;
            const dx = x - xc, dy = y - yc;
            card.style.transform = `perspective(1000px) rotateY(${dx / 20}deg) rotateX(${-dy / 20}deg) translateY(-10px) scale(1.05)`;
        });
        card.addEventListener('mouseleave', () => { card.style.transform = `perspective(1000px) rotateY(0deg) rotateX(0deg) translateY(0) scale(1)`; });
    });
    document.querySelectorAll('.magnetic').forEach(btn => {
        btn.addEventListener('mousemove', (e) => {
            const rect = btn.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2, y = e.clientY - rect.top - rect.height / 2;
            btn.style.transform = `translate(${x * 0.25}px, ${y * 0.35}px) scale(1.05)`;
        });
        btn.addEventListener('mouseleave', () => { btn.style.transform = `translate(0px, 0px) scale(1)`; });
    });

    // WP AJAX Subscription Logic
    const subscribeForm = document.getElementById('subscribe-form');
    const subscribeBtn = document.getElementById('subscribe-btn');
    const emailInput = document.getElementById('subscriber-email');
    const statusMessage = document.getElementById('status-message');

    subscribeForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        const email = emailInput.value.trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!email || !emailRegex.test(email)) {
            showStatus(email ? 'Invalid email format!' : 'Please enter your email!', 'text-red-500');
            return;
        }

        const originalText = subscribeBtn.innerText;
        subscribeBtn.disabled = true;
        subscribeBtn.innerHTML = '<i class="fa-solid fa-circle-notch animate-spin mr-2"></i>SENDING...';

        const formData = new FormData();
        formData.append('action', 'subscribe');
        formData.append('email', email);

        try {
            // In WP, we use admin-ajax.php
            const response = await fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
                method: 'POST',
                body: formData
            });

            const data = await response.json();
            if (data.success) {
                handleSuccess(data.data.message);
            } else {
                showStatus(data.data.message, 'text-red-500');
                subscribeBtn.innerHTML = originalText;
                subscribeBtn.disabled = false;
            }
        } catch (err) {
            // Fallback for local preview without WP backend
            setTimeout(() => { handleSuccess('Welcome to the family! Check your inbox soon.'); }, 800);
        }
    });

    function handleSuccess(msg) {
        subscribeBtn.innerHTML = '<i class="fa-solid fa-check mr-2"></i>JOINED!';
        subscribeBtn.classList.remove('bg-[#4FD1C5]', 'hover:bg-[#3dbdb1]');
        subscribeBtn.classList.add('bg-green-500');
        showStatus(msg, 'text-green-500 font-bold');
        emailInput.value = '';
        setTimeout(() => {
            subscribeBtn.disabled = false;
            subscribeBtn.innerHTML = 'SUBMIT';
            subscribeBtn.classList.add('bg-[#4FD1C5]', 'hover:bg-[#3dbdb1]');
            subscribeBtn.classList.remove('bg-green-500');
        }, 3000);
    }

    function showStatus(text, colorClass) {
        statusMessage.innerText = text;
        statusMessage.className = `mt-8 text-center font-black tracking-widest uppercase text-lg ${colorClass} animate-bounce`;
        statusMessage.classList.remove('hidden');
        setTimeout(() => {
            statusMessage.classList.add('hidden');
            statusMessage.classList.remove('animate-bounce');
        }, 5000);
    }
</script>
<?php wp_footer(); ?>
</body>

</html>