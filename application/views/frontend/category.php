<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('frontend/includes/head'); ?>
</head>

<body>
    <?php $this->load->view('frontend/includes/header'); ?>
    <main>
        <section class="whats-news-area pt-50 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-9 col-md-9">
                                <div class="properties__button">
                                    <!--Nav Button  -->
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                                            <?php foreach ($categories as $category) : ?>
                                                <a class="nav-item nav-link" id="nav-<?= $category->id ?>-tab" data-toggle="tab" href="#nav-<?= $category->id ?>" role="tab" aria-controls="nav-<?= $category->id ?>" aria-selected="false"><?= $category->name ?></a>
                                            <?php endforeach; ?>
                                        </div>
                                    </nav>
                                    <!--End Nav Button  -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="nav-tabContent">
                            <!-- All Articles Tab -->
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="whats-news-caption">
                                    <div class="row">
                                        <?php if (!empty($articles)) : ?>
                                            <?php foreach ($articles as $article) : ?>
                                                <div class="col-lg-3 col-md-4 mb-4">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img style="width: 200px;" src="<?= base_url('assets/img/posts/') . $article->image ?>" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1"><?= $article->name ?></span>
                                                            <h4><a href="<?= base_url('article/' . $article->slug); ?>"><?= $article->title ?></a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            <p>No articles found.</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <!-- Category Tabs -->
                            <?php foreach ($categories as $category) : ?>
                                <div class="tab-pane fade" id="nav-<?= $category->id ?>" role="tabpanel" aria-labelledby="nav-<?= $category->id ?>-tab">
                                    <div class="whats-news-caption">
                                        <div class="row">
                                            <?php foreach ($articles as $article) : ?>
                                                <?php if ($article->category_id == $category->id) : ?>
                                                    <div class="col-lg-3 col-md-4 mb-4">
                                                        <div class="single-what-news mb-100">
                                                            <div class="what-img">
                                                                <img style="width: 200px;" src="<?= base_url('assets/img/posts/') . $article->image ?>" alt="">
                                                            </div>
                                                            <div class="what-cap">
                                                                <span class="color1"><?= $article->name ?></span>
                                                                <h4><a href="<?= base_url('article/' . $article->slug); ?>"><?= $article->title ?></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- End Nav Card -->
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php $this->load->view('frontend/includes/footer'); ?>

    <?php $this->load->view('frontend/includes/js'); ?>

</body>

</html>