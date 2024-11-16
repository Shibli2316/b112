<?php

include("_partials/_dbconn.php");


// eco count
$countEconomics = "select COUNT(`research_area`) from datasets where research_area = 'economics';";
$resEconomics = mysqli_query($conn, $countEconomics);
$rowEconomics = mysqli_fetch_array($resEconomics);


// politicl sci count
$countPoliticalSci = "select COUNT(`research_area`) from datasets where research_area = 'political sci';";
$resPoliticalSci = mysqli_query($conn, $countPoliticalSci);
$rowPoliticalSci = mysqli_fetch_array($resPoliticalSci);



// sociology count
$countSociology = "select COUNT(`research_area`) from datasets where research_area = 'sociology';";
$resSociology = mysqli_query($conn, $countSociology);
$rowSociology = mysqli_fetch_array($resSociology);



// psycology count
$countPsycology = "select COUNT(`research_area`) from datasets where research_area = 'psycology';";
$resPsycology = mysqli_query($conn, $countPsycology);
$rowPsycology = mysqli_fetch_array($resPsycology);


// SocialWork count
$countSocialWork = "select COUNT(`research_area`) from datasets where research_area = 'social work';";
$resSocialWork = mysqli_query($conn, $countSocialWork);
$rowSocialWork = mysqli_fetch_array($resSocialWork);



// WomenStudies count
$countWomenStudies = "select COUNT(`research_area`) from datasets where research_area = 'women studies';";
$resWomenStudies = mysqli_query($conn, $countWomenStudies);
$rowWomenStudies = mysqli_fetch_array($resWomenStudies);


// History count
$countHistory = "select COUNT(`research_area`) from datasets where research_area = 'history';";
$resHistory = mysqli_query($conn, $countHistory);
$rowHistory = mysqli_fetch_array($resHistory);


// Philosophy count
$countPhilosophy = "select COUNT(`research_area`) from datasets where research_area = 'philosophy';";
$resPhilosophy = mysqli_query($conn, $countPhilosophy);
$rowPhilosophy = mysqli_fetch_array($resPhilosophy);


// Education count
$countEducation = "select COUNT(`research_area`) from datasets where research_area = 'education';";
$resEducation = mysqli_query($conn, $countEducation);
$rowEducation = mysqli_fetch_array($resEducation);



// MassCommunication count
$countMassCommunication = "select COUNT(`research_area`) from datasets where research_area = 'mass communication';";
$resMassCommunication = mysqli_query($conn, $countMassCommunication);
$rowMassCommunication = mysqli_fetch_array($resMassCommunication);



// LibrarySci count
$countLibrarySci = "select COUNT(`research_area`) from datasets where research_area = 'library and information science';";
$resLibrarySci = mysqli_query($conn, $countLibrarySci);
$rowLibrarySci = mysqli_fetch_array($resLibrarySci);


// Management count
$countManagement = "select COUNT(`research_area`) from datasets where research_area = 'management';";
$resManagement = mysqli_query($conn, $countManagement);
$rowManagement = mysqli_fetch_array($resManagement);



// Commerce count
$countCommerce = "select COUNT(`research_area`) from datasets where research_area = 'commerce';";
$resCommerce = mysqli_query($conn, $countCommerce);
$rowCommerce = mysqli_fetch_array($resCommerce);



// EVS count
$countEVS = "select COUNT(`research_area`) from datasets where research_area = 'EVS';";
$resEVS = mysqli_query($conn, $countEVS);
$rowEVS = mysqli_fetch_array($resEVS);



// PHE count
$countPHE = "select COUNT(`research_area`) from datasets where research_area = 'PHE';";
$resPHE = mysqli_query($conn, $countPHE);
$rowPHE = mysqli_fetch_array($resPHE);



// user count
$countUser = "select COUNT(`email`) from auth";
$resUser = mysqli_query($conn, $countUser);
$rowUser = mysqli_fetch_array($resUser);


// Datasets count
$countDatasets = "select COUNT(`research_area`) from datasets;";
$resDatasets = mysqli_query($conn, $countDatasets);
$rowDatasets = mysqli_fetch_array($resDatasets);




$sql = "SELECT author FROM `datasets` where accepted = 1 LIMIT 3";
$result = mysqli_query($conn, $sql);
$sno = 0;
$authors = [];
while ($row = mysqli_fetch_assoc($result)) {
    $authors[] = $row["author"];
}


$authorsJson = json_encode($authors);



$sumSS = $rowEconomics[0] + $rowPoliticalSci[0] + $rowSociology[0] + $rowPsycology[0] + $rowSocialWork[0] + $rowWomenStudies[0];
$sumH = $rowHistory[0] + $rowPhilosophy[0];
$sumEnC = $rowEducation[0] + $rowMassCommunication[0] + $rowLibrarySci[0];
$sumMnC = $rowManagement[0] + $rowCommerce[0];
$sumEnP = $rowEVS[0] + $rowPHE[0];