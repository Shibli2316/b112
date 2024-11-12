<header class="bg-white text-black p-4 rounded-b-lg shadow-md">
    <div class="container mx-auto flex justify-between items-center">

        <!-- Leftmost Logo -->
        <div class="flex items-center space-x-2">
            <img src="assets/images/5881819337071905990.jpg" alt="Left Logo" class="h-8 w-8">
            <span class="text-xl font-bold">ARDMS</span>
        </div>

        <!-- Rightmost Logo and Login Button -->
        <div class="flex items-center space-x-4">
            <button class="bg-black text-white py-1 px-4 rounded-lg hover:bg-gray-300 hover:text-black"><a href="auth/login.php">Login</a></button>
            <img src="assets/images/5881819337071905989.jpg" alt="Right Logo" class="h-8 w-8">
        </div>

    </div>
</header>


    <!-- Centered and Wider Navigation Bar -->
    <nav class="w-3/4 lg:w-2/3 mx-auto mt-4 mb-6 p-4 bg-white shadow-md rounded-lg">
    <ul class="flex justify-between space-x-4">
        <li><a href="index.php" class="hover:text-blue-500">Home</a></li>
        <li><a href="scholar/addDatasets.php" class="hover:text-blue-500">Data Upload</a></li>
        <li class="relative group">
            <a href="#" class="hover:text-blue-500">Datasets</a>
            <ul class="absolute hidden group-hover:block bg-white shadow-lg mt-1 rounded-lg p-2">
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Social Science - 512</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Humanities - 20</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Education and Communities - 120</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Management and Commerce - 56</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Environment and physical studies - 78</a></li>
            </ul>
        </li>
        <li><a href="index.php#counter" class="hover:text-blue-500">Subjects</a></li>
        
        <li class="relative group">
            <a href="#" class="hover:text-blue-500">User Guide</a>
            <ul class="absolute hidden group-hover:block bg-white shadow-lg mt-1 rounded-lg p-2">
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Guide 1</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Guide 2</a></li>
            </ul>
        </li>
        
    </ul>
</nav>