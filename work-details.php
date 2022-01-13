<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ixtheme.netlify.app/zuman/work-details-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Jan 2022 06:43:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <title><?= strtoupper($_GET['project_name']) ?></title>
</head>
<body>
    <div id="ajax-content" class="work-popup">
        <!-- start work-details wrapper -->
        <div class="container work-details-2">
            <div class="row justify-content-center text-center">
                <div class="col-md-8">
                    <div class="work-info">
                        <h4><?= strtoupper($_GET['project_name']) ?></h4>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-md-3">
                    <div class="work-info-card">
                        <h6>Client</h6>
                        <p><?= $_GET['client'] ?></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="work-info-card">
                        <h6>Link <?= $_GET['demo_url'] == '#' ? '(No link available)' : ''; ?></h6>
                        <p><a target="_blank" href="<?= $_GET['demo_url'] ?>"><span class="ion-android-attach"></span> View Project</a></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="work-info-card">
                        <h6>Date</h6>
                        <p><?= $_GET['year'] ?></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="work-info-card">
                        <h6>Design Lead</h6>
                        <p><?= $_GET['type'] ?></p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-md-8">
                    <div class="work-details">
                        <h4>About Project</h4>
                        <p><?= $_GET['description'] ?></p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <?php for ($i=0; $i<=2; $i++) { ?>
                    <div class="col-md-4">
                        <div class="work-image">
                            <img class="img-fluid" src="img//portfolio/<?= $_GET['images'][$i] ?>" alt="">
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <!-- end work-details wrapper -->
    </div>
</body>

<!-- Mirrored from ixtheme.netlify.app/zuman/work-details-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Jan 2022 06:43:27 GMT -->
</html>