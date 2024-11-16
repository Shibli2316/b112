<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | ARDMS</title>

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body class="bg-gray-50 text-gray-800">
    <!-- Header Section -->
    <?php include("_partials/_nav.php"); ?>

    <!-- Contact Us Section -->
    <main class="flex-grow">
        <section class="bg-gradient-to-r from-blue-500 to-blue-700 text-white py-16">
            <div class="container mx-auto text-center">
                <h1 class="text-4xl font-bold mb-4">Get in Touch</h1>
                <p class="text-lg">We are here to help. Feel free to reach out for any inquiries or feedback.</p>
            </div>
        </section>

        <section class="container mx-auto px-6 py-12 bg-white rounded-lg shadow-lg -mt-16 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-gray-50 p-8 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold mb-4 text-blue-600">Send Us a Message</h2>
                    <form action="submit_contact.php" method="POST" class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                            <input type="text" id="name" name="name" 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                   placeholder="Your Name" required>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" id="email" name="email" 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                   placeholder="Your Email" required>
                        </div>
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                            <input type="text" id="subject" name="subject" 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                   placeholder="Subject" required>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                            <textarea id="message" name="message" rows="4" 
                                      class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                      placeholder="Your Message" required></textarea>
                        </div>
                        <div>
                            <button type="submit" 
                                    class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg font-medium hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="bg-gray-50 p-8 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold mb-4 text-blue-600">Contact Information</h2>
                    <p class="text-gray-600 mb-6">We are always open to discuss your ideas or answer your questions.</p>
                    <ul class="space-y-4">
                        <li class="flex items-center">
                        <i class="fa-solid fa-envelope"></i>
                            <span class="p-4">Email: <a href="mailto:contact@ardms.org" class="text-blue-500 hover:underline">contact@ardms.org</a></span>
                        </li>
                        <li class="flex items-center">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                            <span class="p-4">Phone: +91 (555) 123-4567</span>
                        </li>
                        <li class="flex items-center">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span class="p-4">Address: 123 University AMU, Research City, RC 12345</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include("_partials/_footer.php"); ?>
</body>
</html>
