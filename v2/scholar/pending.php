<?php
include 'includes/_header.php';
include 'includes/db.php';
$userEmail = $_SESSION['email'];
?>
<script>
    var exportFilename = 'Pending Works';
</script>

<div class="p-6">

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
        <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md lg:col-span-3">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
                <div class="flex justify-between mb-4 items-start">
                    <div class="font-medium">
                        <h2 class="text-xl">
                           Pending Works
                        </h2>
                    </div>
                </div>
                <div class="p-4 col-start-4">
                    <div class="flex space-x-4">
                        <a href="#">
                            <button type="submit" onclick="doit('xlsx');" class="bg-blue-300 hover:bg-blue-400 text-blue-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z" />
                                </svg>
                                <span>Download</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>

            <div style="overflow: auto;">




                <table class='items-center w-full bg-transparent border-collapse display' id='example'>
                    <thead>
                        <tr>
                            <th class='px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left'>S.No.</th>
                            <th class='px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left'>Research Area</th>
                            <th class='px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px'>Posted on</th>
                            <th class='px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px'>Comment Log</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql = "SELECT * FROM `datasets` where scholar_id = '$userEmail' and accepted != 1";
                        $result = mysqli_query($conn, $sql);
                        $sno = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id_paper = $row['_id'];
                            $created_at = $row['created_at'];
                            $date = new DateTime($created_at);
                            $sno += 1;
                            echo "
                            <tr class='text-gray-700 dark:text-gray-100'>
                                
                                <td class='border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4'>" . $sno . "</td>
                                
                                <th class='border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left'><a href='viewData.php?id=".$id_paper."'>" . $row['research_area'] . "</a></th>
                                
                                <td class='border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4'>
                                    " . $date->format('d-m-Y') . "
                                </td>
                                
                               
                                <td class='border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4'>
                                    <a href='commentsLog.php?id=" . $id_paper . "'>
                                        <button id=" . $row['_id'] . " class='edit bg-yellow-300 hover:bg-yellow-400 text-yellow-800 font-bold py-2 px-4 rounded inline-flex items-center'>
                                        
                                            <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' style='fill: rgba(0, 0, 0, 1);transform: ;msFilter:;'><path d='M20 2H4c-1.103 0-2 .897-2 2v18l5.333-4H20c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zm0 14H6.667L4 18V4h16v12z'></path><circle cx='15' cy='10' r='2'></circle><circle cx='9' cy='10' r='2'></circle></svg>
                                            <span class='ml-1'>Comment Log</span>
                                        </button>
                                    </a>
                                </td>
                                
                            </tr>
                            ";
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>

    </div>
</div>
<!-- End Content -->
<script>
    function sureDel() {
        alert("Are you sure you want to delete the item?");
    }
</script>

<?php include 'includes/_footer.php' ?>