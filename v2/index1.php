<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quirkle</title>


    <!-- CHANGE STARTS HERE -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        
        .category-cards {
            display: none;
        }

        .category-cards.active {
            display: grid;
        }
    </style>

        <!-- CHange ends here -->


    <link rel="stylesheet" href="../v2/assets/home/styles.css">
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="container">
            <div class="navbar-brand">Quirkle</div>
            <a href="auth/login.php">
                <button class="navbar-signin">Sign In</button>
            </a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Level up with the largest community Dataset</h1>
                <p>Join over 20M+ quirks to share, stress test, and stay up-to-date on the latest techniques and data.</p>
                <!-- <button class="hero-btn register-btn">Register with Google</button> -->
                <a href="auth/login.php">
                    <button class="hero-btn register-btn">Register with Email</button>
                </a>
            </div>
            <div class="hero-image">
                <img src="../v2/assets/images/icon.png" alt="AI Community Image">
            </div>
        </div>
    </section>

    <!-- Who's on Quirkle Section -->
    <section class="kaggle-section">
        <div class="container">
            <h2>Who’s on Quirkle?</h2>
            <div class="kaggle-cards">
                <div class="kaggle-card">
                    <img src="../v2/assets/home/learner.png" alt="Learners">
                    <div class="card-content">
                        <h3>Learners</h3>
                        <p>Dive into Quirkle courses, competitions & forums.</p>
                    </div>
                </div>
                <div class="kaggle-card">
                    <img src="../v2/assets/home/developer.png" alt="Developers">
                    <div class="card-content">
                        <h3>Developers</h3>
                        <p>Leverage Quirkle's models, notebooks & datasets.</p>
                    </div>
                </div>
                <div class="kaggle-card">
                    <img src="../v2/assets/home/researcher.png" alt="Researchers">
                    <div class="card-content">
                        <h3>Researchers</h3>
                        <p>Advance data collector with our pre-trained model hub & competitions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>








<!-- HAMZA CHANGE STARTS HERE -->



    <section>
    <div class="max-w-7xl mx-auto mt-6 flex justify-between items-center text-center rounded-lg shadow-lg p-4 m-4" style="background-color: #f9f9f9;">
        <div>
            <img src="assets/images/analytic.png" alt="Analytics" class="w-16 h-16 mx-auto">
            <p class="font-bold text-lg text-gray-800">Analytics</p>
        </div>
        <div class="flex-1 grid grid-cols-6 gap-4 text-sm text-gray-600">
            <div>
                <p class="font-bold text-blue-600">504,093</p>
                <p>Resources</p>
            </div>
            <div>
                <p class="font-bold text-blue-600">12,735</p>
                <p>Catalog</p>
            </div>
            <div>
                <p class="font-bold text-blue-600">10.44M</p>
                <p>Times Downloaded</p>
            </div>
            <div>
                <p class="font-bold text-blue-600">3,275</p>
                <p>Visualizations</p>
            </div>
            <div>
                <p class="font-bold text-blue-600">36.23M</p>
                <p>Times Viewed</p>
            </div>
            <div>
                <p class="font-bold text-blue-600">572</p>
                <p>Reviewers</p>
            </div>
        </div>
    </div>
    </section>



    <section>
    <div class="max-w-7xl mx-auto py-10">
        <h2 class="text-2xl font-semibold text-center text-gray-800 mb-8">Discover Datasets By</h2>
        <div class="flex">
            <!-- Sidebar -->
            <div class="w-1/4 rounded-lg p-4 shadow-lg" style="background-color: #f9f9f9;">
                <ul class="space-y-4">
                    <li><a href="#" class="block font-bold text-blue-600 hover:text-gray-900" id="sector-link">Social Science</a></li>
                    <li><a href="#" class="block font-bold text-blue-600 hover:text-gray-900" id="groups-link">Humanities</a></li>
                    <li><a href="#" class="block font-bold text-blue-600 hover:text-gray-900" id="central-link">Education & Communication</a></li>
                    <li><a href="#" class="block font-bold text-blue-600 hover:text-gray-900" id="state-link">Management & Commerce</a></li>
                    <li><a href="#" class="block font-bold text-blue-600 hover:text-gray-900" id="apis-link">Environment & Physical Studies</a></li>
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




<!-- CHANGE ENDS HERE -->






















    <!-- Datasets Section -->
    <section class="datasets-section">
        <div class="container">
            <!-- Info Section -->
            <div class="info-section">
                <h2>Tackle your next project with Quirkle</h2>
                <p>On Quirkle you'll find all the resources and knowledge needed for your next real-world data building project.</p>
                <div class="stats">
                    <div class="stat-item">
                        <h3>380K</h3>
                        <p>Datasets</p>
                    </div>
                    <div class="stat-item">
                        <h3>1.2M</h3>
                        <p>Quirks</p>
                    </div>
                    <div class="stat-item">
                        <h3>8,100</h3>
                        <p>Models</p>
                    </div>
                </div>
            </div>

            <!-- Dataset Display Section -->
            <div class="dataset-display">
                <div class="dataset-header">
                    <h2>Datasets</h2>
                    <button class="new-dataset-btn">+ New Dataset</button>
                </div>
                <div class="search-bar">
                    <input type="text" placeholder="Search datasets" id="search-input">
                </div>
                <div class="dataset-list">
                    <div class="dataset-item" onclick="showDatasetDetails('dataset1')">
                        <img src="../v2/assets/home/d1.png" alt="Dataset 1">
                        <div class="dataset-info">
                            <h3>Village Historical Data</h3>
                            <p>Usability 8.4 | 1 File (CSV) | 2 KB</p>
                        </div>
                    </div>
                    <div class="dataset-item" onclick="showDatasetDetails('dataset2')">
                        <img src="../v2/assets/home/d1.png" alt="Dataset 2">
                        <div class="dataset-info">
                            <h3>Fruits 360 Dataset</h3>
                            <p>Usability 10.0 | 1 File (CSV) | 7 KB</p>
                        </div>
                    </div>
                    <div class="dataset-item" onclick="showDatasetDetails('dataset3')">
                        <img src="../v2/assets/home/d1.png" alt="Dataset 3">
                        <div class="dataset-info">
                            <h3>International Football Results</h3>
                            <p>Usability 10.0 | 1 File (CSV) | 5 MB</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    




    <!-- Who are Kagglers Section -->
    <section class="kagglers-section">
        <div class="container">
            <h2>Who are Quirks?</h2>
            <p>Quirks come from all walks of life: students, professionals, and researchers. They use Quirkle to learn social science & data building, stay up-to-date on the latest techniques, and collaborate.</p>

            <!-- Avatars Section -->
            <div class="kagglers-avatars">







<!-- HAMZA CHANGE -->







                <img src="../v2/assets/home/icon.png" alt="Kaggler 1" style="height: 53.86474px; width: 93.86474px;">
            
            
            
            
            
            
            <!-- CHANGE ENDS -->
            
            
            
            
            
            
            
            
            
            
            
            
            
            
                <!-- Add more avatar images as needed -->
            </div>
        </div>

        <!-- Information Boxes -->
        <div class="kagglers-info-container">
            <div class="kagglers-info">
                <a href="global-community.html" class="info-box">
                    <h3>A global community</h3>
                    <p>Over 20 million users from over 190 countries are here.</p>
                </a>

                <a href="kagglex.html" class="info-box">
                    <h3>A home for everyone</h3>
                    <p>The QuirkleX Mentorship Program is committed to creating a more inclusive data science community.</p>
                </a>

                <a href="ml-discussions.html" class="info-box">
                    <h3>A place to discuss data building</h3>
                    <p>Find answers to your data building questions and connect with enthusiasts on Quirkle's forums.</p>
                    <div class="tags">
                        <span>Data Visualization</span>
                        <span>Neural Networks</span>
                        <span>Computer Vision</span>
                        <span>NLP</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="footer-container">


            <div style="margin: auto;">Developed by pandora</div>
        </div>
    </footer>


    <script src="../v2/assets/home/script.js"></script>




    <!-- Change starts here HAMZA -->


    <script>


        
        // JavaScript to toggle card sets
        const categories = ['sector', 'groups', 'central', 'state', 'apis'];
        categories.forEach(category => {
            document.getElementById(`${category}-link`).addEventListener('click', function() {

                event.preventDefault();
                // Hide all card sets
                document.querySelectorAll('.category-cards').forEach(section => section.classList.remove('active'));
                
                // Show the selected card set
                document.getElementById(`${category}-cards`).classList.add('active');
            });
        });
    </script>


        <!-- CHANGE ENDS HERE -->




</body>

</html>