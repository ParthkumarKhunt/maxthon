<?php
use App\Models\Details;
use App\Models\Banner;

function getdetails() {
    $objDetails = new Details();
    return $objDetails->getDetails();
}

function getBannerDetails($id) {
    $ojBanner = new Banner();
    return $ojBanner->getBannerDetails($id);
}

?>
