<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | ARDMS</title>

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .group:hover .group-hover\:block {
            display: block;
        }
        body, html {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        main {
            flex: 1;
        }
    </style>
    <link rel="stylesheet" href="../v2/assets/home/styles.css">
</head>

< class="bg-gray-100 text-gray-900">
    <!-- Header Section -->
    <?php include("_partials/_nav.php"); ?>

    <!-- About Section -->
    <main class="flex-grow container mx-auto px-6 py-8 bg-white rounded-lg shadow-lg">
        <section class="text-center">
            <h2 class="text-3xl font-bold mb-4">About ARDMS</h2>
            <p class="text-lg text-gray-600 mb-8">Academic Research Data Management System (ARDMS) is dedicated to the collection, management, and dissemination of social science data. Our platform enables researchers to collaborate, share data, and access valuable resources for social science research.</p>
            <div class="flex flex-col md:flex-row items-center justify-around">
                
                <div class="text-left p-6">
                    <h3 class="text-2xl font-semibold mb-4">Mission & Vision</h3>
                    <p class="text-gray-700 mb-4">ARDMS provides a supportive platform to assist researchers in managing and sharing social science data. Through our tools and resources, we empower academic collaboration and knowledge exchange, particularly in social sciences.</p>
                    <h3 class="text-2xl font-semibold mb-4">Our Process</h3>
                    <p class="text-gray-700">At ARDMS, we facilitate a seamless research experience by offering data upload, storage, and sharing options. Our platform also offers statistical tools, a subject-based repository, and various user guides to support users in their research journey.</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include("_partials/_footer.php"); ?>

    <!-- ScrollReveal Script -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        ScrollReveal({
            distance: '60px',
            duration: 2500,
            delay: 400
        });
        ScrollReveal().reveal('h2, h3', { origin: 'top' });
        ScrollReveal().reveal('p', { origin: 'bottom', interval: 200 });
        ScrollReveal().reveal('.flex', { origin: 'left' });
    </script>
</body>
</html>
