<?php
use App\Models\Details;

function getdetails() {
    $objDetails = new Details();
    return $objDetails->getDetails();
}

?>
