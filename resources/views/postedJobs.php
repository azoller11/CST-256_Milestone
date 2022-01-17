
<h1>Jobs</h1>

<?php
use App\Http\Controllers\jobServices;
    $jobServices = new jobServices();

    $jobServices->getAllInformation();
?>
