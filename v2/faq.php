<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs | ARDMS</title>

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body,
        html {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        main {
            flex: 1;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-900">
    <!-- Header Section -->
    <?php include("_partials/_nav.php"); ?>

    <!-- FAQ Section -->
    <main class="container mx-auto px-6 py-12">
        <section class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-green-600 mb-4">Frequently Asked Questions</h1>
            <p class="text-lg text-gray-600">Find answers to commonly asked questions about ARDMS and its features.</p>
        </section>

        <!-- FAQ List -->
        <section class="max-w-4xl mx-auto space-y-6">
            <!-- FAQ Item -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <button
                    class="flex justify-between items-center w-full text-lg font-semibold text-gray-800 focus:outline-none">
                    <span>What is ARDMS and what does it offer?</span>
                    <span class="text-green-500 text-2xl transform transition-transform duration-200">+</span>
                </button>
                <div class="mt-4 text-gray-600 hidden">
                    ARDMS, the Academic Research Data Management System, is a data repository dedicated to social science
                    research. It allows researchers to store, manage, and share datasets securely.
                </div>
            </div>

            <!-- FAQ Item -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <button
                    class="flex justify-between items-center w-full text-lg font-semibold text-gray-800 focus:outline-none">
                    <span>How can I upload my research data to ARDMS?</span>
                    <span class="text-green-500 text-2xl transform transition-transform duration-200">+</span>
                </button>
                <div class="mt-4 text-gray-600 hidden">
                    Researchers can upload their data through the Data Upload section after logging in. Follow the
                    guidelines provided to ensure proper formatting and compliance with repository standards.
                </div>
            </div>

            <!-- FAQ Item -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <button
                    class="flex justify-between items-center w-full text-lg font-semibold text-gray-800 focus:outline-none">
                    <span>Are there any restrictions on data usage or access?</span>
                    <span class="text-green-500 text-2xl transform transition-transform duration-200">+</span>
                </button>
                <div class="mt-4 text-gray-600 hidden">
                    Data access is generally restricted to registegreen users and is subject to specific usage terms
                    outlined in ARDMS's data policy. Researchers must agree to these terms when accessing or sharing
                    data.
                </div>
            </div>

            <!-- FAQ Item -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <button
                    class="flex justify-between items-center w-full text-lg font-semibold text-gray-800 focus:outline-none">
                    <span>Can I access statistical tools on the ARDMS platform?</span>
                    <span class="text-green-500 text-2xl transform transition-transform duration-200">+</span>
                </button>
                <div class="mt-4 text-gray-600 hidden">
                    Yes, ARDMS offers a range of statistical tools to help users analyze datasets effectively. These
                    tools are accessible from the Statistics section after logging in.
                </div>
            </div>

            <!-- FAQ Item -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <button
                    class="flex justify-between items-center w-full text-lg font-semibold text-gray-800 focus:outline-none">
                    <span>How can I contact ARDMS support for further assistance?</span>
                    <span class="text-green-500 text-2xl transform transition-transform duration-200">+</span>
                </button>
                <div class="mt-4 text-gray-600 hidden">
                    You can reach out to our support team via the Contact Us page or email us directly at
                    support@ardms.org for any assistance.
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include("_partials/_footer.php"); ?>

    <!-- FAQ Toggle Script -->
    <script>
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('click', () => {
                const content = button.nextElementSibling;
                const icon = button.querySelector('span:last-child');

                content.classList.toggle('hidden');
                icon.textContent = content.classList.contains('hidden') ? '+' : '-';
                icon.classList.toggle('rotate-45');
            });
        });
    </script>
        <script src="../v2/assets/home/script.js"></script>
</body>

</html>
