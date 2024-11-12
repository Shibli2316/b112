<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Team | ARDMS</title>

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

    <!-- Project Team Section -->
    <main class="flex-grow container mx-auto px-6 py-8 bg-white rounded-lg shadow-lg">
        

        <!-- Team Members Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

        <div></div>
        <div></div>
        <div></div>
        <div></div>

        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold">Our Project Team</h2>
            <p class="text-lg text-gray-600">Meet the team behind the Academic Research Data Management System.</p>
        </div>

        <div></div>


            <!-- Team Member 1 -->
            <div class="text-center">
                <img src="https://via.placeholder.com/150" alt="Team Member 1" class="w-32 h-32 rounded-full mx-auto">
                <h3 class="text-xl font-semibold mt-4">Dr. Alice Morgan</h3>
                <p class="text-gray-500 italic">Lead Data Scientist</p>
            </div>
            <!-- Team Member 2 -->
            <div class="text-center">
                <img src="https://via.placeholder.com/150" alt="Team Member 2" class="w-32 h-32 rounded-full mx-auto">
                <h3 class="text-xl font-semibold mt-4">Raj Patel</h3>
                <p class="text-gray-500 italic">Backend Developer</p>
            </div>
            <!-- Team Member 3 -->
            <div class="text-center">
                <img src="https://via.placeholder.com/150" alt="Team Member 3" class="w-32 h-32 rounded-full mx-auto">
                <h3 class="text-xl font-semibold mt-4">Lily Roberts</h3>
                <p class="text-gray-500 italic">Frontend Engineer</p>
            </div>
            <!-- Team Member 4 -->
            <div class="text-center">
                <img src="https://via.placeholder.com/150" alt="Team Member 4" class="w-32 h-32 rounded-full mx-auto">
                <h3 class="text-xl font-semibold mt-4">Evan Chen</h3>
                <p class="text-gray-500 italic">Data Analyst</p>
            </div>
            <!-- Team Member 5 -->
            <div class="text-center">
                <img src="https://via.placeholder.com/150" alt="Team Member 5" class="w-32 h-32 rounded-full mx-auto">
                <h3 class="text-xl font-semibold mt-4">Maria Gomez</h3>
                <p class="text-gray-500 italic">UX/UI Designer</p>
            </div>
            <!-- Team Member 6 -->
            <div class="text-center">
                <img src="https://via.placeholder.com/150" alt="Team Member 6" class="w-32 h-32 rounded-full mx-auto">
                <h3 class="text-xl font-semibold mt-4">Omar Fahd</h3>
                <p class="text-gray-500 italic">Project Coordinator</p>
            </div>
            <!-- Team Member 7 -->
            <div class="text-center">
                <img src="https://via.placeholder.com/150" alt="Team Member 7" class="w-32 h-32 rounded-full mx-auto">
                <h3 class="text-xl font-semibold mt-4">Isabella Nguyen</h3>
                <p class="text-gray-500 italic">Quality Assurance</p>
            </div>
            <!-- Team Member 8 -->
            <div class="text-center">
                <img src="https://via.placeholder.com/150" alt="Team Member 8" class="w-32 h-32 rounded-full mx-auto">
                <h3 class="text-xl font-semibold mt-4">Ethan Kim</h3>
                <p class="text-gray-500 italic">Database Manager</p>
            </div>
            <!-- Team Member 9 -->
            <div class="text-center">
                <img src="https://via.placeholder.com/150" alt="Team Member 9" class="w-32 h-32 rounded-full mx-auto">
                <h3 class="text-xl font-semibold mt-4">Nina Shah</h3>
                <p class="text-gray-500 italic">Research Advisor</p>
            </div>
            <div></div>
        </div>
    </main>

    <!-- Footer -->
    <?php include("_partials/_footer.php"); ?>
</body>
</html>
