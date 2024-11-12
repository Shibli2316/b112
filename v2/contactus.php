<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | ARDMS</title>

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
    <!-- Contact Us Section -->
    <main class="flex-grow container mx-auto px-6 py-8 bg-white rounded-lg shadow-lg">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold">Contact Us</h2>
            <p class="text-lg text-gray-600">We'd love to hear from you. Reach out with any questions or feedback.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Contact Form -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                <form action="submit_contact.php" method="POST" class="space-y-4">
                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-700">Full Name</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="subject" class="block text-sm font-semibold text-gray-700">Subject</label>
                        <input type="text" id="subject" name="subject" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-semibold text-gray-700">Message</label>
                        <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Send Message</button>
                    </div>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-4">Get in Touch</h3>
                <p class="text-gray-700 mb-4">If you have any questions about the ARDMS platform, feel free to contact us. Our team is here to assist you with any inquiries you may have.</p>
                <div class="space-y-4">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-blue-500 mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M2.3 4.8A15.8 15.8 0 0110 3.1a15.8 15.8 0 017.7 1.7l1.4-1.4A18.5 18.5 0 0010 .5C4.9.5.7 3.2.3 7.7l2-1.3zM10 16.9a16 16 0 01-7.5-1.9l-2 2c.4.9 1.5 2.1 3.3 2.1h.1C5.6 20.1 7 19.5 10 18c3.1 1.5 4.5 2.1 6.1 2.1h.1c1.8 0 2.9-1.2 3.3-2.1l-2-2a16 16 0 01-7.5 1.9zM17.5 5.5A18.7 18.7 0 0010 6.8c-1.3 0-2.6-.2-3.9-.6l-1.3 2a16.7 16.7 0 005.2 1.1 16.7 16.7 0 005.2-1.1l-1.3-2z"/>
                        </svg>
                        <span class="text-gray-700">Email: contact@ardms.org</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-blue-500 mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9 12V6h1V5h-1V4h1V3H7v1h1v1H7v1h1v6H7v1h4v-1H9zm4.5-9c-.3 0-.6.1-.9.3L10 5l-.4.5c-.3.3-.5.7-.6 1.1-.4 1-.1 2.2.9 2.9 1 1 2.1.8 2.8.3 1.6-1.1 1.4-2.6.4-3.6-.3-.3-.7-.6-1-.8l-.3-.3c-.1-.1-.2-.1-.3-.1z"/>
                        </svg>
                        <span class="text-gray-700">Phone: +1 (555) 123-4567</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-blue-500 mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M10 20C4.5 20 0 15.5 0 10S4.5 0 10 0s10 4.5 10 10-4.5 10-10 10zm0-18a8 8 0 100 16 8 8 0 000-16zm3 6h-6v1h6V8zm-6 3h4v1H7v-1z"/>
                        </svg>
                        <span class="text-gray-700">Address: 123 University Ave, Research City, RC 12345</span>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php include("_partials/_footer.php"); ?>
</body>
</html>
