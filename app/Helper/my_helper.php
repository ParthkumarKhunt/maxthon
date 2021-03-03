<?php
use App\Models\Details;
use App\Models\Banner;

function getdetails() {
    $objDetails = new Details();
    return $objDetails->getDetails();
}

function getBannerList() {
    $ojBanner = new Banner();
    return $ojBanner->getBannerList();
}

?>
