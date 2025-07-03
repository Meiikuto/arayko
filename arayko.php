<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meme Central - Your Daily Dose of Laughter!</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom styles for the Inter font and any overrides */
        body {
            font-family: 'Inter', sans-serif;
            @apply bg-gray-100 text-gray-800;
        }
        /* Ensure images are responsive and have rounded corners */
        .meme-image {
            @apply w-full h-auto object-cover rounded-lg shadow-md;
        }
    </style>
</head>
<body class="flex flex-col min-h-screen">
    <!-- Header Section -->
    <header class="bg-gradient-to-r from-purple-600 to-blue-500 text-white p-6 shadow-lg">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-2 md:mb-0">
                😂 Meme Central 😂
            </h1>
            <p class="text-lg md:text-xl opacity-90">Your daily dose of internet humor!</p>
        </div>
    </header>

    <!-- Main Content Section -->
    <main class="flex-grow container mx-auto p-6 md:p-8">
        <section class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-bold text-purple-700 mb-4">Trending Memes Right Now!</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Dive into the funniest and most shareable memes from across the web. Get ready to laugh!
            </p>
        </section>

        <!-- Meme Grid Section -->
        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            // Array of example meme image URLs
            $memes = [
                'https://placehold.co/600x400/FF5733/FFFFFF?text=Meme+1',
                'https://placehold.co/600x400/33FF57/FFFFFF?text=Meme+2',
                'https://placehold.co/600x400/3357FF/FFFFFF?text=Meme+3',
                'https://placehold.co/600x400/FF33A1/FFFFFF?text=Meme+4',
                'https://placehold.co/600x400/A1FF33/FFFFFF?text=Meme+5',
                'https://placehold.co/600x400/5733FF/FFFFFF?text=Meme+6',
            ];

            // Loop through the memes and display them
            foreach ($memes as $index => $meme_url) {
                echo '<div class="bg-white p-4 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">';
                echo '    <img src="' . htmlspecialchars($meme_url) . '" alt="Meme ' . ($index + 1) . '" class="meme-image">';
                echo '    <p class="mt-4 text-center text-gray-700 font-medium">Funny Meme ' . ($index + 1) . '</p>';
                echo '</div>';
            }
            ?>
        </section>

        <section class="text-center mt-12 p-6 bg-blue-50 rounded-xl shadow-inner">
            <h3 class="text-2xl font-semibold text-blue-700 mb-3">Want more memes?</h3>
            <p class="text-md text-gray-600">
                Stay tuned for daily updates and new meme categories!
            </p>
            <button class="mt-6 px-8 py-3 bg-blue-600 text-white font-bold rounded-full shadow-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300">
                Explore More!
            </button>
        </section>
    </main>

    <!-- Footer Section -->
    <footer class="bg-gray-800 text-white p-4 text-center mt-auto">
        <p>&copy; <?php echo date("Y"); ?> Meme Central. All rights reserved. Made with 😂 and ❤️.</p>
    </footer>
</body>
</html>
