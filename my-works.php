<?php include_once('works-handler.php') ?>

<style>
    /* .demo {
        height: 50px !important;
        clear: both !important;
        float: right;
    }

    .demo a {
        width: 100% !important;
        margin: 20px;
        clear: both !important;
        font-size: 12px !important;
        font-weight: bold;
    } */
</style>

<div id="works" class="work_wrapper">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <!-- section title -->
            <div class="text-center">
                <h2 class="section_title">My Works</h2>
            </div>
            
            <!-- work filter start -->
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="filter-buttons">
                        <button class="active" data-filter="*">Everything</button>
                        <button data-filter=".web">Web</button>
                        <button data-filter=".mobile">Mobile</button>
                        <button data-filter=".iot">IoT</button>
                    </div>
                </div>
            </div>
            <!-- work filter end -->
            
            <div class="row works">
            <?php
                /*
                    Project nilizofanya
                    1. kist website
                    2. doc manager [x]
                    3. bcrs
                    4. koas
                    5. home automation
                    6. zanisland car hire
                    7. student result system
                    8. plane parking detection
                    9. digital oil tank gauge
                    10. mwendokasi - abuusquare
                    11. ssims
                    12. smart dustbin
                    13. child tracking system
                    14. surveyed land information system
                    15. sand and pubble information system
                    16. leakage detection system

                */
                $yearArray = getDateAndPortfolioId();
                $yearArray_ = $yearArray;
                rsort($yearArray);

                foreach ($yearArray as $data) {
                    //echo (array_search($data, $yearArray, true));
                    $portfolio = getPortfolio(array_search($data, $yearArray_, true));
                    ?>

                    <!-- work single item  -->
                    <div class="col-lg-4 col-md-6 col-sm-6 <?= $portfolio['typefilter'] ?>">
                        <div class="work_single_item">
                            <img class="img-fluid" width="400" height="400" src="img/portfolio/<?= $portfolio['images'][0] ?>" alt="">
                            <div class="work_info">
                                <h6 title="<?= $portfolio['project_name'] ?>"><?= $portfolio['project_name'] ?></h6>
                                <p><?= $portfolio['year'] ?></p>
                                <!-- <a class="ajax-popup-link" href="work-details.php?<?= http_build_query($portfolio); ?>"><span class="ion-android-expand"></span></a> -->
                                <a class="ajax-popup-link" href="work-details.php?<?= http_build_query($portfolio); ?>">
                                    <span class="ion-android-expand"></span>&emsp;Click to View Description <?= $portfolio['demo_url'] != '#' ? ' and Demo' : '' ?> 
                                </a>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
                
                <!-- view all work button  -->
                <!-- <div class="col-lg-12">
                    <a class="button slide-vertical" data-splitting href="all-works.php">View All Works</a>
                </div> -->
            </div>
        </div>
    </div>
</div>