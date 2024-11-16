<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | ARDMS</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-900">
    <!-- Header Section -->
    <?php include("_partials/_nav.php"); ?>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-12 flex-grow container mx-auto px-6 py-8 bg-white rounded-lg shadow-lg">
        <!-- Title Section -->
        <section class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">About ARDMS</h2>
            <p class="text-lg text-gray-600">
                Academic Research Data Management System (ARDMS) is dedicated to the collection, management, and
                dissemination of social science data. Our platform enables researchers to collaborate, share data, and
                access valuable resources for social science research.
            </p>
        </section>

        <!-- Mission, Vision, and Image -->
        <section class="md:flex md:items-center md:justify-between gap-8 mb-12">
            <div class="md:w-3/4 p-4">
                <h3 class="text-2xl font-semibold mb-4">Mission & Vision</h3>
                <p class="text-gray-700 mb-6">
                    ARDMS provides a supportive platform to assist researchers in managing and sharing social science
                    data. Through our tools and resources, we empower academic collaboration and knowledge exchange,
                    particularly in social sciences.
                </p>
                <h3 class="text-2xl font-semibold mb-4">Our Process</h3>
                <p class="text-gray-700">
                    We facilitate a seamless research experience by offering data upload, storage, and sharing options.
                    Our platform also provides statistical tools, a subject-based repository, and various user guides to
                    support users in their research journey.
                </p>
            </div>
            <div class="md:w-1/4 p-4">
                <img src="assets/images/5881819337071905989.jpg" alt="About ARDMS" class="rounded-lg shadow-md">
            </div>
        </section>

        <!-- Core Values Section -->
        <section class="text-center mb-12">
            <h3 class="text-3xl font-semibold text-gray-800 mb-6">Our Core Values</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Collaboration" class="mx-auto mb-4">
                    <h4 class="text-xl font-semibold mb-2">Collaboration</h4>
                    <p class="text-gray-700">We foster partnerships and teamwork among researchers to achieve meaningful
                        results.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Innovation" class="mx-auto mb-4">
                    <h4 class="text-xl font-semibold mb-2">Innovation</h4>
                    <p class="text-gray-700">Our platform embraces cutting-edge technologies to support advanced
                        research.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Integrity" class="mx-auto mb-4">
                    <h4 class="text-xl font-semibold mb-2">Integrity</h4>
                    <p class="text-gray-700">We uphold ethical standards in data management and sharing practices.</p>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="md:flex md:items-center md:justify-between gap-8">
            <div class="md:w-1/4 p-4">
                <img src="assets/img/ivancik.jpg" alt="Our Team" class="rounded-lg shadow-md">
            </div>
            <div class="md:w-3/4 mb-8 md:mb-0 p-4">
                <h3 class="text-3xl font-semibold text-gray-800 mb-4">Meet Our Team</h3>
                <p class="text-gray-700">
                    Our dedicated team of professionals is committed to providing a robust platform for researchers
                    worldwide. With expertise in social sciences, technology, and data management, our team ensures
                    ARDMS continues to evolve and meet the needs of its users.
                </p>
                <a href="team.php" class="inline-block mt-4 text-blue-600 font-medium hover:underline">Learn More About
                    Our Team</a>
            </div>

        </section>
    </main>

    <!-- Footer Section -->
    <?php include("_partials/_footer.php"); ?>

    <!-- ScrollReveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        ScrollReveal({
            distance: '60px',
            duration: 2000,
            delay: 400
        });
        ScrollReveal().reveal('h2, h3', { origin: 'top' });
        ScrollReveal().reveal('p', { origin: 'bottom', interval: 200 });
        ScrollReveal().reveal('img', { origin: 'left' });
    </script>
</body>

</html>