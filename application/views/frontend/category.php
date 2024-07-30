<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <?php $this->load->view('frontend/includes/head'); ?>
</head>

<body>
    <?php $this->load->view('frontend/includes/header'); ?>
    <main>
        <section class="whats-news-area pt-50 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-15">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-9 col-md-9">
                                <div class="properties__button">
                                    <!--Nav Button  -->
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                                            <?php foreach ($categories as $category): ?>
                                                <a class="nav-item nav-link" id="nav-<?= $category->id ?>-tab" data-toggle="tab" href="#nav-<?= $category->id ?>" role="tab" aria-controls="nav-<?= $category->id ?>" aria-selected="false"><?= $category->name ?></a>
                                            <?php endforeach; ?>
                                        </div>
                                    </nav>
                                    <!--End Nav Button  -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Nav Card -->
                            <div class="tab-content" id="nav-tabContent">
                                <!-- card one -->
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="whats-news-caption">
                                        <div class="row">
                                            <?php for ($i = 1; $i <= 4; $i++): ?>
                                                <div class="col-lg-3 col-md-4 mb-4">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="<?= base_url('assets/frontend'); ?>/img/news/whatNews<?= $i ?>.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card two -->
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div class="whats-news-caption">
                                        <div class="row">
                                            <?php for ($i = 1; $i <= 4; $i++): ?>
                                                <div class="col-lg-3 col-md-4 mb-4">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="<?= base_url('assets/frontend'); ?>/img/news/whatNews<?= $i ?>.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card three -->
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <div class="whats-news-caption">
                                        <div class="row">
                                            <?php for ($i = 1; $i <= 4; $i++): ?>
                                                <div class="col-lg-3 col-md-4 mb-4">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="<?= base_url('assets/frontend'); ?>/img/news/whatNews<?= $i ?>.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- card four -->
                                <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                                    <div class="whats-news-caption">
                                        <div class="row">
                                            <?php for ($i = 1; $i <= 4; $i++): ?>
                                                <div class="col-lg-3 col-md-4 mb-4">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="<?= base_url('assets/frontend'); ?>/img/news/whatNews<?= $i ?>.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- card five -->
                                <div class="tab-pane fade" id="nav-nav-Sport" role="tabpanel" aria-labelledby="nav-Sports">
                                    <div class="whats-news-caption">
                                        <div class="row">
                                            <?php for ($i = 1; $i <= 4; $i++): ?>
                                                <div class="col-lg-3 col-md-4 mb-4">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="<?= base_url('assets/frontend'); ?>/img/news/whatNews<?= $i ?>.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- card six -->
                                <div class="tab-pane fade" id="nav-techno" role="tabpanel" aria-labelledby="nav-technology">
                                    <div class="whats-news-caption">
                                        <div class="row">
                                            <?php for ($i = 1; $i <= 4; $i++): ?>
                                                <div class="col-lg-3 col-md-4 mb-4">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="<?= base_url('assets/frontend'); ?>/img/news/whatNews<?= $i ?>.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Nav Card -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php $this->load->view('frontend/includes/footer'); ?>

    <?php $this->load->view('frontend/includes/js'); ?>

</body>

</html>
