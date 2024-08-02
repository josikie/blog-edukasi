<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <?php $this->load->view('frontend/includes/head'); ?>
  <link rel="stylesheet" href="<?= base_url('assets/frontend');?>/css/responsive.css">
</head>

<body>
   <?php $this->load->view('frontend/includes/header');?>
     
   <!--================Blog Area =================-->
   <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">

                    <?php
                    if(!empty($posts)) {
                        foreach($posts as $post) {

                    ?>
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="<?= base_url('assets/img/posts/'.$post->image);?>" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3><?= date('d', strtotime($post->date));?></h3>
                                    <p><?= date('M', strtotime($post->date));?></p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="<?= base_url('article/'.$post->slug);?>">
                                    <h2><?= $post->title;?></h2>
                                </a>
                                <p><?= strip_tags(substr($post->article,0,200));?>...</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> <?= $post->name;?></a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>
                        <?php } } ?>

                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <?= $links; ?>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <?php $this->load->view('frontend/includes/blog_right_sidebar'); ?>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

   <!-- Footer -->
   <?php $this->load->view('frontend/includes/footer'); ?>
   
   <!-- JS -->
   <?php $this->load->view('frontend/includes/js'); ?>
   
        
</body>

</html>