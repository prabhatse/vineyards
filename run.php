<?php

// Run the script as php cli
require_once "Vineyards.php";

$wine = new Vineyards();
echo "Script Execution started at : ".date('Y-m-d H:i:s')."\n";
$wine->generateWineList("person_wine_3.txt");
$wine->generateWineAllotmentList();
echo "Script Execution stoped at : ".date('Y-m-d H:i:s')."\n";
$wine->exportWineAllotmentList('final_sales.txt');

?>