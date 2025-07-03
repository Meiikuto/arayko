<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InnovateTech - Powering Your Digital Future</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Custom styles for darker gradients and enhanced shadows for a 'mirror-like' feel */
        .hero-gradient {
            /* Darker, richer gradient for the hero section */
            background: linear-gradient(135deg, #1a202c 0%, #2d3748 100%); /* Dark blue-gray to slightly lighter dark blue-gray */
        }
        .btn-gradient {
            /* Darker, more subdued gradient for buttons */
            background: linear-gradient(90deg, #4c51bf 0%, #6b46c1 100%); /* Deep indigo to deep purple */
            transition: all 0.3s ease;
            /* Subtle shadow for a lifted, polished look */
            box-shadow: 0 4px 10px rgba(76, 81, 191, 0.4);
        }
        .btn-gradient:hover {
            transform: translateY(-2px);
            /* More pronounced shadow on hover for a 'pop' effect */
            box-shadow: 0 8px 20px rgba(76, 81, 191, 0.6);
        }
        .feature-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
            /* Dark card background with subtle border for definition */
            background-color: #2d3748; /* Dark gray */
            border: 1px solid #4a5568; /* Slightly lighter gray border */
            /* Initial shadow for depth */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }
        .feature-card:hover {
            transform: translateY(-5px);
            /* Enhanced shadow on hover for a glossy, lifted effect */
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            border-color: #667eea; /* Highlight border on hover */
        }
        /* General dark theme adjustments */
        .text-gray-800 { @apply text-gray-100; } /* Default text color for body */
        .text-gray-900 { @apply text-white; }   /* Headings and strong text */
        .text-gray-600 { @apply text-gray-300; } /* Paragraphs and secondary text */
        .text-purple-700 { @apply text-purple-400; } /* Original purple text, adjusted for dark background */
    </style>
</head>
<body class="bg-gray-950 text-gray-100 antialiased">

    <!-- Header & Navigation -->
    <header class="bg-gray-900 shadow-lg py-4">
        <nav class="container mx-auto flex justify-between items-center px-4">
            <a href="#" class="text-2xl font-bold text-white rounded-lg p-2 hover:bg-gray-800 transition-colors">InnovateTech</a>
            <div class="space-x-6 hidden md:flex">
                <a href="#features" class="text-gray-300 hover:text-purple-400 font-medium rounded-lg p-2 hover:bg-gray-800 transition-colors">Features</a>
                <a href="#about" class="text-gray-300 hover:text-purple-400 font-medium rounded-lg p-2 hover:bg-gray-800 transition-colors">About Us</a>
                <a href="#services" class="text-gray-300 hover:text-purple-400 font-medium rounded-lg p-2 hover:bg-gray-800 transition-colors">Services</a>
                <a href="#contact" class="text-gray-300 hover:text-purple-400 font-medium rounded-lg p-2 hover:bg-gray-800 transition-colors">Contact</a>
            </div>
            <a href="#" class="md:hidden text-gray-300 hover:text-purple-400">
                <!-- Hamburger Icon (SVG for simplicity, can use a library like Lucide React) -->
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero-gradient text-white py-20 md:py-32 text-center rounded-b-3xl shadow-2xl">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-6">
                Innovate. Create. Elevate.
            </h1>
            <p class="text-lg md:text-xl max-w-3xl mx-auto mb-10 opacity-90">
                We provide cutting-edge technology solutions to transform your business and drive unparalleled growth.
            </p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="#services" class="btn-gradient text-white font-bold py-3 px-8 rounded-full focus:outline-none focus:ring-4 focus:ring-purple-600">
                    Explore Our Services
                </a>
                <a href="#contact" class="bg-gray-700 text-purple-300 font-bold py-3 px-8 rounded-full shadow-lg hover:bg-gray-600 focus:outline-none focus:ring-4 focus:ring-gray-500">
                    Get a Free Consultation
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-16 md:py-24 bg-gray-900">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-white mb-12">
                Solutions Designed for Your Success
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature Card 1 -->
                <div class="feature-card p-8 rounded-xl text-center">
                    <img src="https://placehold.co/100x100/4c51bf/FFFFFF?text=AI" alt="AI Solutions Icon" class="mx-auto mb-6 rounded-full shadow-md">
                    <h3 class="text-xl font-semibold text-white mb-3">AI & Machine Learning</h3>
                    <p class="text-gray-300">
                        Harness the power of artificial intelligence to automate processes, gain insights, and innovate faster.
                    </p>
                </div>
                <!-- Feature Card 2 -->
                <div class="feature-card p-8 rounded-xl text-center">
                    <img src="https://placehold.co/100x100/6b46c1/FFFFFF?text=Cloud" alt="Cloud Solutions Icon" class="mx-auto mb-6 rounded-full shadow-md">
                    <h3 class="text-xl font-semibold text-white mb-3">Cloud Computing</h3>
                    <p class="text-gray-300">
                        Scalable and secure cloud infrastructure solutions for seamless operations and global reach.
                    </p>
                </div>
                <!-- Feature Card 3 -->
                <div class="feature-card p-8 rounded-xl text-center">
                    <img src="https://placehold.co/100x100/4c51bf/FFFFFF?text=Web" alt="Web Development Icon" class="mx-auto mb-6 rounded-full shadow-md">
                    <h3 class="text-xl font-semibold text-white mb-3">Web & Mobile Development</h3>
                    <p class="text-gray-300">
                        Crafting intuitive and high-performance web and mobile applications tailored to your needs.
                    </p>
                </div>
                <!-- Feature Card 4 -->
                <div class="feature-card p-8 rounded-xl text-center">
                    <img src="https://placehold.co/100x100/6b46c1/FFFFFF?text=Cyber" alt="Cybersecurity Icon" class="mx-auto mb-6 rounded-full shadow-md">
                    <h3 class="text-xl font-semibold text-white mb-3">Cybersecurity</h3>
                    <p class="text-gray-300">
                        Protecting your digital assets with robust security measures and proactive threat detection.
                    </p>
                </div>
                <!-- Feature Card 5 -->
                <div class="feature-card p-8 rounded-xl text-center">
                    <img src="https://placehold.co/100x100/4c51bf/FFFFFF?text=Data" alt="Data Analytics Icon" class="mx-auto mb-6 rounded-full shadow-md">
                    <h3 class="text-xl font-semibold text-white mb-3">Data Analytics</h3>
                    <p class="text-gray-300">
                        Unlocking valuable insights from your data to drive informed business decisions.
                    </p>
                </div>
                <!-- Feature Card 6 -->
                <div class="feature-card p-8 rounded-xl text-center">
                    <img src="https://placehold.co/100x100/6b46c1/FFFFFF?text=Consult" alt="IT Consulting Icon" class="mx-auto mb-6 rounded-full shadow-md">
                    <h3 class="text-xl font-semibold text-white mb-3">IT Consulting</h3>
                    <p class="text-gray-300">
                        Expert guidance and strategic planning to navigate complex technological landscapes.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="py-16 md:py-24 bg-gray-950">
        <div class="container mx-auto px-4 flex flex-col lg:flex-row items-center lg:space-x-12">
            <div class="lg:w-1/2 mb-10 lg:mb-0">
                <img src="https://placehold.co/600x400/2d3748/FFFFFF?text=Our+Team" alt="About Us Image" class="rounded-xl shadow-xl w-full h-auto object-cover">
            </div>
            <div class="lg:w-1/2 text-center lg:text-left">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                    Who We Are
                </h2>
                <p class="text-lg text-gray-300 mb-6">
                    InnovateTech is a team of passionate technologists dedicated to building innovative solutions that empower businesses. With years of experience and a deep understanding of emerging technologies, we partner with our clients to solve their toughest challenges and achieve their digital aspirations.
                </p>
                <p class="text-lg text-gray-300">
                    Our commitment to excellence, client satisfaction, and continuous learning drives us to deliver exceptional results every time. We believe in technology's power to create a better future.
                </p>
            </div>
        </div>
    </section>

    <!-- Call to Action / Services Highlight -->
    <section id="services" class="py-16 md:py-24 bg-gray-900 text-center">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Ready to Transform Your Business?
            </h2>
            <p class="text-lg text-gray-300 max-w-3xl mx-auto mb-10">
                Whether you need a new application, cloud migration, or strategic IT consulting, InnovateTech has the expertise to guide you.
            </p>
            <a href="#contact" class="btn-gradient text-white font-bold py-3 px-8 rounded-full focus:outline-none focus:ring-4 focus:ring-purple-600">
                Get Started Today
            </a>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 md:py-24 bg-black text-white rounded-t-3xl shadow-inner">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                Let's Connect
            </h2>
            <p class="text-lg opacity-80 max-w-2xl mx-auto mb-10">
                Have a project in mind or just want to chat about technology? Reach out to us!
            </p>
            <div class="flex flex-col md:flex-row justify-center items-center space-y-6 md:space-y-0 md:space-x-12">
                <div class="flex items-center space-x-4">
                    <svg class="w-8 h-8 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    <span class="text-lg">info@innovatetech.com</span>
                </div>
                <div class="flex items-center space-x-4">
                    <svg class="w-8 h-8 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    <span class="text-lg">+1 (555) 123-4567</span>
                </div>
            </div>
            <p class="mt-8 text-sm opacity-70">
                123 Tech Avenue, Innovation City, CA 90210
            </p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 py-6 text-center">
        <div class="container mx-auto px-4">
            <p>&copy; 2025 InnovateTech. All rights reserved.</p>
            <div class="flex justify-center space-x-4 mt-3">
                <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                <span class="text-gray-500">|</span>
                <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
            </div>
        </div>
    </footer>

</body>
</html>
