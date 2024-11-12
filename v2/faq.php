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

<body class="bg-gray-100 text-gray-900">
    <!-- Header Section -->
    <?php include("_partials/_nav.php"); ?>


    <!-- <div class="flex-grow container mx-auto px-6 py-8 bg-white rounded-lg shadow-lg"> -->
    <!-- <div class="text-center">
        <h2 class="text-3xl font-bold mb-2">Frequently Asked Questions</h2>
        <p class="text-lg text-gray-600">Here are answers to some common questions about using the ARDMS platform.</p>
    </div> -->
<!-- </div> -->
    

    <!-- questions -->
    <main class="flex-grow container mx-auto px-6 py-8 bg-white rounded-lg shadow-lg">
        <section class="text-center">
            <!-- <h2 class="text-3xl font-bold mb-2">Frequently Asked Questions</h2>
            <p class="text-lg text-gray-600">Here are answers to some common questions about using the ARDMS platform.</p> -->
            <div class="flex flex-col md:flex-row items-center justify-around">
            <div class="text-center">
        <h2 class="text-3xl font-bold mb-2">Frequently Asked Questions</h2>
        <p class="text-lg text-gray-600">Here are answers to some common questions about using the ARDMS platform.</p>
    </div>
                <div class="text-left p-6">
                    <!--  -->
                
                        <!-- Questions List -->
        <div class="space-y-4 max-w-2xl mx-auto">

        

            <!-- FAQ Item 1 -->
            <div class="bg-gray-100 p-4 rounded-lg shadow-sm">
                <button class="w-full text-left text-xl font-semibold flex justify-between items-center focus:outline-none">
                    <span>What is ARDMS and what does it offer?</span>
                    <span>+</span>
                </button>
                <div class="mt-2 text-gray-700 hidden">
                    ARDMS, the Academic Research Data Management System, is a data repository dedicated to social science research. It allows researchers to store, manage, and share datasets securely.
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="bg-gray-100 p-4 rounded-lg shadow-sm">
                <button class="w-full text-left text-xl font-semibold flex justify-between items-center focus:outline-none">
                    <span>How can I upload my research data to ARDMS?</span>
                    <span>+</span>
                </button>
                <div class="mt-2 text-gray-700 hidden">
                    Researchers can upload their data through the Data Upload section after logging in. Follow the guidelines provided to ensure proper formatting and compliance with repository standards.
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="bg-gray-100 p-4 rounded-lg shadow-sm">
                <button class="w-full text-left text-xl font-semibold flex justify-between items-center focus:outline-none">
                    <span>Are there any restrictions on data usage or access?</span>
                    <span>+</span>
                </button>
                <div class="mt-2 text-gray-700 hidden">
                    Data access is generally restricted to registered users and is subject to specific usage terms outlined in ARDMS's data policy. Researchers must agree to these terms when accessing or sharing data.
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="bg-gray-100 p-4 rounded-lg shadow-sm">
                <button class="w-full text-left text-xl font-semibold flex justify-between items-center focus:outline-none">
                    <span>Can I access statistical tools on the ARDMS platform?</span>
                    <span>+</span>
                </button>
                <div class="mt-2 text-gray-700 hidden">
                    Yes, ARDMS offers a range of statistical tools to help users analyze datasets effectively. These tools are accessible from the Statistics section after logging in.
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="bg-gray-100 p-4 rounded-lg shadow-sm">
                <button class="w-full text-left text-xl font-semibold flex justify-between items-center focus:outline-none">
                    <span>How can I contact ARDMS support for further assistance?</span>
                    <span>+</span>
                </button>
                <div class="mt-2 text-gray-700 hidden">
                    You can reach out to our support team via the Contact Us page or email us directly at support@ardms.org for any assistance.
                </div>
            </div>

            <!-- repeating questions -->

            <!-- FAQ Item 1 -->
            <div class="bg-gray-100 p-4 rounded-lg shadow-sm">
                <button class="w-full text-left text-xl font-semibold flex justify-between items-center focus:outline-none">
                    <span>What is ARDMS and what does it offer?</span>
                    <span>+</span>
                </button>
                <div class="mt-2 text-gray-700 hidden">
                    ARDMS, the Academic Research Data Management System, is a data repository dedicated to social science research. It allows researchers to store, manage, and share datasets securely.
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="bg-gray-100 p-4 rounded-lg shadow-sm">
                <button class="w-full text-left text-xl font-semibold flex justify-between items-center focus:outline-none">
                    <span>How can I upload my research data to ARDMS?</span>
                    <span>+</span>
                </button>
                <div class="mt-2 text-gray-700 hidden">
                    Researchers can upload their data through the Data Upload section after logging in. Follow the guidelines provided to ensure proper formatting and compliance with repository standards.
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="bg-gray-100 p-4 rounded-lg shadow-sm">
                <button class="w-full text-left text-xl font-semibold flex justify-between items-center focus:outline-none">
                    <span>Are there any restrictions on data usage or access?</span>
                    <span>+</span>
                </button>
                <div class="mt-2 text-gray-700 hidden">
                    Data access is generally restricted to registered users and is subject to specific usage terms outlined in ARDMS's data policy. Researchers must agree to these terms when accessing or sharing data.
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="bg-gray-100 p-4 rounded-lg shadow-sm">
                <button class="w-full text-left text-xl font-semibold flex justify-between items-center focus:outline-none">
                    <span>Can I access statistical tools on the ARDMS platform?</span>
                    <span>+</span>
                </button>
                <div class="mt-2 text-gray-700 hidden">
                    Yes, ARDMS offers a range of statistical tools to help users analyze datasets effectively. These tools are accessible from the Statistics section after logging in.
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="bg-gray-100 p-4 rounded-lg shadow-sm">
                <button class="w-full text-left text-xl font-semibold flex justify-between items-center focus:outline-none">
                    <span>How can I contact ARDMS support for further assistance?</span>
                    <span>+</span>
                </button>
                <div class="mt-2 text-gray-700 hidden">
                    You can reach out to our support team via the Contact Us page or email us directly at support@ardms.org for any assistance.
                </div>
            </div>
        </div>
                    <!--  -->
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

<script>
        document.querySelectorAll('.shadow-sm button').forEach(button => {
            button.addEventListener('click', () => {
                const answer = button.nextElementSibling;
                answer.classList.toggle('hidden');
                button.querySelector('span:last-child').textContent = answer.classList.contains('hidden') ? '+' : '-';
            });
        });
    </script>

</body>
</html>
