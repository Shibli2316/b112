<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARDMS</title>

    <!-- CHANGE STARTS HERE -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <style>
        .group:hover .group-hover\:block {
            display: block;
        }

        .category-cards {
            display: none;
        }

        .category-cards.active {
            display: grid;
        }

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

        /* Marquee container */
        .marquee {
            width: 100%;
            overflow: hidden;
            background-color: #4CAF50;
            /* Green background */
            padding: 10px 0;
            position: relative;
            border-radius: 8px;
            /* Optional: Rounded corners */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
            /* Shadow effect to pop out */
        }

        /* Marquee text */
        .marquee p {
            display: inline-block;
            white-space: nowrap;
            font-size: 1.2rem;
            font-weight: bold;
            color: #ffffff;
            animation: scroll 10s linear infinite;
            /* Adjust time to control speed */
            margin: 0;
            width: 100%;
        }

        /* Animation for scrolling */
        @keyframes scroll {
            0% {
                transform: translateX(100%);
                /* Start from the right edge */
            }

            100% {
                transform: translateX(-100%);
                /* Move to the left edge */
            }
        }
    </style>

    <!-- CHange ends here -->

    <link rel="stylesheet" href="../v2/assets/home/styles.css">
</head>

<body>
    <!-- Navigation Bar -->
    <?php include("_partials/_nav.php"); ?>



    <!-- Search Section -->
    <div class="w-3/4 lg:w-2/3 mx-auto bg-white p-4 rounded-lg shadow-md mb-6">
        <span class="text-gray-600 font-semibold mr-2"><a href="#discoverByDataset">Browse</a></span>
        <input type="text" placeholder="Search here" id="searchInput"
            class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-200"
            oninput="performSearch()">
        <div id="searchResults" class="mt-2"></div>
    </div>

    <!-- Image Carousel Section -->
    <div class="w-3/4 lg:w-4/5 mx-auto bg-white p-4 rounded-lg shadow-md mb-6">
        <div class="relative bg-blue-100 h-80 rounded-lg overflow-hidden mb-6">
            <div id="carousel" class="h-full flex transition-all duration-700 ease-in-out">
                <div class="w-full flex-shrink-0 flex items-center justify-center">Image 1</div>
                <div class="w-full flex-shrink-0 flex items-center justify-center">Image 2</div>
                <div class="w-full flex-shrink-0 flex items-center justify-center">Image 3</div>
            </div>
            <button onclick="prevSlide()"
                class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-700 text-white p-2 rounded-full">❮</button>
            <button onclick="nextSlide()"
                class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-700 text-white p-2 rounded-full">❯</button>
        </div>
    </div>

    <div class="marquee">
        <p>This text will scroll from right to left</p>
    </div>


    <!-- About Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Level up with the largest community Dataset</h1>
                <p>Join over 20M+ users to share, stress test, and stay up-to-date on the latest data on Society.</p>

                <a href="auth/login.php">
                    <button class="hero-btn register-btn">Register with Email</button>
                </a>
            </div>
            <div class="hero-image">
                <img src="../v2/assets/images/icon.png" alt="AI Community Image">
            </div>
        </div>
    </section>


    <!-- Who's on ARDMS Section -->
    <section class="kaggle-section">
        <div class="container">
            <h1 class="text-xl">Who’s on ARDMS?</h1>
            <div class="kaggle-cards">
                <div class="kaggle-card">
                    <img src="../v2/assets/home/learner.png" alt="Learners">
                    <div class="card-content">
                        <h3>Learners</h3>
                        <p>Dive into ARDMS's Dataset.</p>
                    </div>
                </div>
                <div class="kaggle-card">
                    <img src="../v2/assets/home/developer.png" alt="Developers">
                    <div class="card-content">
                        <h3>Scholar</h3>
                        <p>Upload Dataset to ARDMS.</p>
                    </div>
                </div>
                <div class="kaggle-card">
                    <img src="../v2/assets/home/researcher.png" alt="Researchers">
                    <div class="card-content">
                        <h3>Reviewer</h3>
                        <p>Review dataset to perfection for ARDMS.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recently Added Datasets Section -->
    <div class="w-3/4 lg:w-2/3 mx-auto bg-white p-4 rounded-lg shadow-md mb-6">
        <div class="p-4 rounded-lg mb-6">
            <h2 class="text-center text-lg font-semibold text-gray-700 mb-4">Recently Added Datasets</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <h3 class="font-bold text-gray-700">Dataset Name 1</h3>
                    <p class="text-sm text-gray-500">by Author 1</p>
                    <p class="text-gray-600 mt-2">A brief description about Dataset 1, covering the purpose and
                        relevance in around 50-80 words.</p>
                </div>
                <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <h3 class="font-bold text-gray-700">Dataset Name 2</h3>
                    <p class="text-sm text-gray-500">by Author 2</p>
                    <p class="text-gray-600 mt-2">A brief description about Dataset 2, covering the purpose and
                        relevance in around 50-80 words.</p>
                </div>
                <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <h3 class="font-bold text-gray-700">Dataset Name 3</h3>
                    <p class="text-sm text-gray-500">by Author 3</p>
                    <p class="text-gray-600 mt-2">A brief description about Dataset 3, covering the purpose and
                        relevance in around 50-80 words.</p>
                </div>
            </div>
        </div>

        <!-- Counters Section -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6" id="counter">
            <div class="bg-gradient-to-r from-green-400 to-green-600 text-white p-4 rounded-lg shadow-md text-center">
                <h3 class="text-xl font-semibold">Total Registered Users</h3>
                <p class="text-2xl mt-2 counter" data-count="1000">0</p>
            </div>
            <div class="bg-gradient-to-r from-indigo-400 to-indigo-600 text-white p-4 rounded-lg shadow-md text-center">
                <h3 class="text-xl font-semibold">Total Datasets</h3>
                <p class="text-2xl mt-2 counter" data-count="500">0</p>
            </div>
            <div class="bg-gradient-to-r from-purple-400 to-purple-600 text-white p-4 rounded-lg shadow-md text-center">
                <h3 class="text-xl font-semibold">Total Downloads</h3>
                <p class="text-2xl mt-2 counter" data-count="3000">0</p>
            </div>
            <div class="bg-gradient-to-r from-pink-400 to-pink-600 text-white p-4 rounded-lg shadow-md text-center">
                <h3 class="text-xl font-semibold">Total Hits</h3>
                <p class="text-2xl mt-2 counter" data-count="7000">0</p>
            </div>
        </div>
    </div>


    <!-- Individual subject card section -->
    <section id="discoverByDataset">
        <div class="max-w-7xl mx-auto py-10">
            <h2 class="text-2xl font-semibold text-center text-gray-800 mb-8">Discover Datasets By</h2>
            <div class="flex">
                <!-- Sidebar -->
                <div class="w-1/4 rounded-lg p-4 shadow-lg" style="background-color: #f9f9f9;">
                    <ul class="space-y-4">
                        <li><a href="#" class="block font-bold text-blue-600 hover:text-gray-900"
                                id="sector-link">Social Science</a></li>
                        <li><a href="#" class="block font-bold text-blue-600 hover:text-gray-900"
                                id="groups-link">Humanities</a></li>
                        <li><a href="#" class="block font-bold text-blue-600 hover:text-gray-900"
                                id="central-link">Education & Communication</a></li>
                        <li><a href="#" class="block font-bold text-blue-600 hover:text-gray-900"
                                id="state-link">Management & Commerce</a></li>
                        <li><a href="#" class="block font-bold text-blue-600 hover:text-gray-900"
                                id="apis-link">Environment & Physical Studies</a></li>
                    </ul>
                </div>

                <!-- Categories Grid (content will change dynamically) -->
                <div class="w-3/4 px-8">

                    <!-- Social Studies Cards -->
                    <div class="category-cards active grid grid-cols-3 gap-6" id="sector-cards">
                        <div class="bg-white border border-gray-200 rounded-lg shadow-lg p-6 text-center">
                            <img src="assets/images/eco.png" alt="Economy" class="w-12 h-12 mx-auto mb-4">
                            <p>5</p>
                            <p class="font-bold text-lg text-gray-800">Economics</p>
                        </div>
                        <div class="bg-white border border-gray-200 rounded-lg shadow-lg p-6 text-center">
                            <img src="assets/images/ps.jfif" alt="Education" class="w-12 h-12 mx-auto mb-4">
                            <p>8</p>
                            <p class="font-bold text-lg text-gray-800">Political Science</p>
                        </div>
                        <div class="bg-white border border-gray-200 rounded-lg shadow-lg p-6 text-center">
                            <img src="assets/images/soc.png" alt="Environment" class="w-12 h-12 mx-auto mb-4">
                            <p>12</p>
                            <p class="font-bold text-lg text-gray-800">Sociology</p>
                        </div>
                        <div class="bg-white border border-gray-200 rounded-lg shadow-lg p-6 text-center">
                            <img src="assets/images/pso.jfif" alt="Environment" class="w-12 h-12 mx-auto mb-4">
                            <p>91</p>
                            <p class="font-bold text-lg text-gray-800">Psycology</p>
                        </div>
                        <div class="bg-white border border-gray-200 rounded-lg shadow-lg p-6 text-center">
                            <img src="assets/images/sw.jfif" alt="Environment" class="w-12 h-12 mx-auto mb-4">
                            <p>53</p>
                            <p class="font-bold text-lg text-gray-800">Social Work</p>
                        </div>
                        <div class="bg-white border border-gray-200 rounded-lg shadow-lg p-6 text-center">
                            <img src="assets/images/ws.jfif" alt="Environment" class="w-12 h-12 mx-auto mb-4">
                            <p>38</p>
                            <p class="font-bold text-lg text-gray-800">Women Studies</p>
                        </div>
                    </div>

                    <!-- Humanities Cards -->
                    <div class="category-cards grid grid-cols-3 gap-6" id="groups-cards">
                        <div class="bg-white border border-gray-200 rounded-lg shadow-lg p-6 text-center">
                            <img src="assets/images/his.jfif" alt="Health" class="w-12 h-12 mx-auto mb-4">
                            <p>97</p>
                            <p class="font-bold text-lg text-gray-800">History</p>
                        </div>
                        <div class="bg-white border border-gray-200 rounded-lg shadow-lg p-6 text-center">
                            <img src="assets/images/philo.jfif" alt="Science" class="w-12 h-12 mx-auto mb-4">
                            <p>81</p>
                            <p class="font-bold text-lg text-gray-800">Philosophy</p>
                        </div>

                    </div>

                    <!-- Education and communication Cards -->
                    <div class="category-cards grid grid-cols-3 gap-6" id="central-cards">
                        <div class="bg-white border border-gray-200 rounded-lg shadow-lg p-6 text-center">
                            <img src="assets/images/edu.png" alt="Economy" class="w-12 h-12 mx-auto mb-4">
                            <p>75</p>
                            <p class="font-bold text-lg text-gray-800">Education</p>
                        </div>
                        <div class="bg-white border border-gray-200 rounded-lg shadow-lg p-6 text-center">
                            <img src="assets/images/mc.jfif" alt="Education" class="w-12 h-12 mx-auto mb-4">
                            <p>96</p>
                            <p class="font-bold text-lg text-gray-800">Mass Communication</p>
                        </div>
                        <div class="bg-white border border-gray-200 rounded-lg shadow-lg p-6 text-center">
                            <img src="assets/images/liso.jfif" alt="Science" class="w-12 h-12 mx-auto mb-4">
                            <p>97</p>
                            <p class="font-bold text-lg text-gray-800">Library and information Science</p>
                        </div>
                    </div>

                    <!-- Management and commerce Cards -->
                    <div class="category-cards grid grid-cols-3 gap-6" id="state-cards">
                        <div class="bg-white border border-gray-200 rounded-lg shadow-lg p-6 text-center">
                            <img src="assets/images/manage.png" alt="Labour" class="w-12 h-12 mx-auto mb-4">
                            <p>96</p>
                            <p class="font-bold text-lg text-gray-800">Management</p>
                        </div>
                        <div class="bg-white border border-gray-200 rounded-lg shadow-lg p-6 text-center">
                            <img src="assets/images/commer.png" alt="Health" class="w-12 h-12 mx-auto mb-4">
                            <p>19</p>
                            <p class="font-bold text-lg text-gray-800">Commerce</p>
                        </div>

                    </div>

                    <!-- Environmental and physical studies Cards -->
                    <div class="category-cards grid grid-cols-3 gap-6" id="apis-cards">
                        <div class="bg-white border border-gray-200 rounded-lg shadow-lg p-6 text-center">
                            <img src="assets/images/evs.png" alt="Health" class="w-12 h-12 mx-auto mb-4">
                            <p>13</p>
                            <p class="font-bold text-lg text-gray-800">Environmental Studies</p>
                        </div>
                        <div class="bg-white border border-gray-200 rounded-lg shadow-lg p-6 text-center">
                            <img src="assets/images/phe.jfif" alt="Science" class="w-12 h-12 mx-auto mb-4">
                            <p>41</p>
                            <p class="font-bold text-lg text-gray-800">Physical Education</p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Who are Kagglers Section -->
    <section class="kagglers-section">
        <div class="container">
            <h2>What We Offer?</h2>
            <p>We are a dynamic community of social scientists, professionals, and researchers, providing access to a
                wide range of innovative datasets, models, and expert insights in the field of social science.</p>

            <!-- Avatars Section -->
            <div class="kagglers-avatars">
                <img src="../v2/assets/home/icon.png" alt="Kaggler 1">
                <img src="../v2/assets/home/icon.png" alt="Kaggler 2">
                <img src="../v2/assets/home/icon.png" alt="Kaggler 3">
                <!-- Add more avatar images as needed -->
            </div>
        </div>

    </section>


    <!-- Feed back form -->

    <!-- Feedback Form Section -->
    <section class="bg-gray-100 py-10">
        <div class="w-3/4 lg:w-2/3 mx-auto bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-center text-2xl font-semibold text-gray-800 mb-4">We Value Your Feedback!</h2>
            <p class="text-center text-gray-600 mb-6">Let us know what you think about ARDMS and how we can improve.</p>

            <form action="submit_feedback.php" method="POST" class="space-y-4">
                <div>
                    <label for="name" class="block text-gray-700">Name</label>
                    <input type="text" id="name" name="name" placeholder="Your Name"
                        class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-200">
                </div>

                <div>
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" placeholder="Your Email"
                        class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-200">
                </div>

                <div>
                    <label for="rating" class="block text-gray-700">Rating</label>
                    <select id="rating" name="rating"
                        class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-200">
                        <option value="" disabled selected>Select a rating</option>
                        <option value="5">Excellent</option>
                        <option value="4">Very Good</option>
                        <option value="3">Good</option>
                        <option value="2">Fair</option>
                        <option value="1">Poor</option>
                    </select>
                </div>

                <div>
                    <label for="comments" class="block text-gray-700">Comments</label>
                    <textarea id="comments" name="comments" placeholder="Your Feedback" rows="4"
                        class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-200"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit"
                        class="px-6 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">
                        Submit Feedback
                    </button>
                </div>
            </form>
        </div>
    </section>


    <!-- Footer Section -->
    <?php include("_partials/_footer.php"); ?>


    <script src="../v2/assets/home/script.js"></script>
    <script>
        // JavaScript to toggle card sets
        const categories = ['sector', 'groups', 'central', 'state', 'apis'];
        categories.forEach(category => {
            document.getElementById(`${category}-link`).addEventListener('click', function () {

                event.preventDefault();
                // Hide all card sets
                document.querySelectorAll('.category-cards').forEach(section => section.classList.remove('active'));

                // Show the selected card set
                document.getElementById(`${category}-cards`).classList.add('active');
            });
        });

        // Carousel functionality
        let currentSlide = 0;
        const slides = document.querySelectorAll("#carousel > div");

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.style.transform = `translateX(${(i - index) * 100}%)`;
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        setInterval(nextSlide, 3000);

        // Search functionality
        const searchData = ["Dataset 1", "Dataset 2", "Dataset 3"];

        function performSearch() {
            const query = document.getElementById('searchInput').value.toLowerCase();
            const results = searchData.filter(item => item.toLowerCase().includes(query));
            document.getElementById('searchResults').innerHTML = results.map(result => `<p>${result}</p>`).join('');
        }

        // Counter animation
        document.addEventListener("DOMContentLoaded", () => {
            const counters = document.querySelectorAll('.counter');
            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute('data-count');
                    const count = +counter.innerText;
                    const increment = target / 100;

                    if (count < target) {
                        counter.innerText = Math.ceil(count + increment);
                        setTimeout(updateCount, 30);
                    } else {
                        counter.innerText = target;
                    }
                };
                updateCount();
            });
        });
    </script>
</body>

</html>