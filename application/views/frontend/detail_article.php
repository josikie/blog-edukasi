<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <?php $this->load->view('frontend/includes/head'); ?>
  <link rel="stylesheet" href="<?= base_url('assets/frontend');?>/css/responsive.css">
</head>

<body>
   <?php $this->load->view('frontend/includes/header');?>
     
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="assets/img/blog/single_blog_1.png" alt="">
                  </div>
                  <div class="blog_details">
                     <h2><?= $post->title;?></h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="fa fa-user"></i> <?= $post->name;?></a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                     </ul>
                     <?= $post->article;?>
                  </div>
               </div>
               <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                     <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                        people like this</p>
                     <div class="col-sm-4 text-center my-2 my-sm-0">
                        <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                     </div>
                     <ul class="social-icons">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                     </ul>
                  </div>
                  <div class="navigation-area">
                     <div class="row">
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="assets/img/post/preview.png" alt="">
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p>Prev Post</p>
                              <?php
                              if(!empty($prev_post)) { ?>
                              <a href="<?= base_url('article/'.$prev_post->slug);?>">
                                 <h4><?= $prev_post->title;?></h4>
                              </a>
                              <?php } else {
                                echo "<a href='#'><h4>No Post</h4></a>";
                              } ?>
                           </div>
                        </div>
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">
                              <p>Next Post</p>
                              <?php
                              if(!empty($next_post)) { ?>
                              <a href="<?= base_url('article/'.$next_post->slug);?>">
                                 <h4><?= $next_post->title;?></h4>
                              </a>
                              <?php } else {
                                echo "<a href='#'><h4>No Post</h4></a>";
                              } ?>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="assets/img/post/next.png" alt="">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="blog-author">
                  <div class="media align-items-center">
                     <img src="<?= base_url('assets/frontend');?>/img/blog/author.png" alt="">
                     <div class="media-body">
                        <a href="#">
                           <h4><?= $post->author->name;?></h4>
                        </a>
                        <!-- <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
                           our dominion twon Second divided from</p> -->
                     </div>
                  </div>
               </div>
               <div class="comments-area">
                  <h4><?= number_format($post->count_comments,0);?> Comments</h4>
                  <?php
                  if(!empty($post->comments)) {
                     foreach($post->comments as $comment) {
                  ?>
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <?php
                              if(!empty($comment->image)) { ?>
                              <img src="<?= base_url('assets/img/'.$comment->image);?>" alt="">
                              <?php } else { ?>
                                 <img src="<?= base_url('assets/frontend');?>/img/comment/comment_1.png" alt="">
                              <?php } ?>
                           </div>
                           <div class="desc">
                              <p class="comment">
                                 <?= $comment->comment_body;?>
                              </p>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                       <a href="#"><?= $comment->name;?></a>
                                    </h5>
                                    <p class="date"><?= date('d-m-Y H:i a', strtotime($comment->comment_date));?> </p>
                                 </div>
                                 <div class="reply-btn">
                                    <?php
                                    if($this->session->userdata('email') && $comment->email == $this->session->userdata('email')) { ?>
                                    <a href="<?= base_url('comment/delete/'. $comment->id);?>" class="btn-reply text-danger text-uppercase">delete</a>
                                    <?php } ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php } } ?>
                  
               </div>
               <div class="comment-form">
                  <h4>Leave a Reply</h4>
                  <?php
                  if(!$this->session->userdata('email')){
                     echo "<div class='alert alert-danger'>Silakan login terlebih dahulu</div>";
                  } else {
                  ?>
                  <form class="form-contact comment_form" action="<?= base_url('comment/add_comment'); ?>" id="commentForm" method="POST">
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <input type="hidden" name="post_id" value="<?= $post->id;?>">
                              <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                 placeholder="Write Comment"></textarea>
                                 <?= form_error('comment', '<small class="text-danger ps-1">', '</small>'); ?>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                     </div>
                  </form>
                  <?php } ?>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <!-- <aside class="single_sidebar_widget search_widget">
                     <form action="#">
                        <div class="form-group">
                           <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder='Search Keyword'
                                 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                              <div class="input-group-append">
                                 <button class="btns" type="button"><i class="ti-search"></i></button>
                              </div>
                           </div>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                           type="submit">Search</button>
                     </form>
                  </aside> -->
                  <aside class="single_sidebar_widget post_category_widget">
                     <h4 class="widget_title">Category</h4>
                     <ul class="list cat-list">
                        <?php
                        if(!empty($categories)) {
                           foreach($categories as $category) {
                        ?>
                        <li>
                           <a href="#" class="d-flex">
                              <p><?= $category->name;?></p>
                              <p>(<?= number_format($category->count,0);?>)</p>
                           </a>
                        </li>
                        <?php
                           }
                        }
                        ?>
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget popular_post_widget">
                     <h3 class="widget_title">Recent Post</h3>
                     <?php
                     if(!empty($recent_posts)) {
                        foreach($recent_posts as $recent) {
                           $pathImgRecent = base_url('assets/frontend/img/post/post_1.png');
                           if(!empty($recent->image)) {
                              $pathImgRecent = base_url('assets/img/posts/'. $recent->image);
                           }
                     ?>
                     <div class="media post_item">
                        <img src="<?= $pathImgRecent;?>" class="rounded" style="object-fit: cover;" width="80px" height="80px" alt="post">
                        <div class="media-body">
                           <a href="<?= base_url('article/'.$recent->slug);?>">
                              <h3><?= $recent->title;?></h3>
                           </a>
                           <p><?= date('d M Y', strtotime($recent->date));?></p>
                        </div>
                     </div>
                     <?php }} ?>
                  </aside>
                  
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->

   <!-- Footer -->
   <?php $this->load->view('frontend/includes/footer'); ?>
   
   <!-- JS -->
   <?php $this->load->view('frontend/includes/js'); ?>
   
        
</body>

</html>