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
         if (!empty($categories)) {
            foreach ($categories as $category) {
         ?>
               <li>
                  <a href="#" class="d-flex">
                     <p><?= $category->name; ?></p>
                     <p>(<?= number_format($category->count, 0); ?>)</p>
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
      if (!empty($recent_posts)) {
         foreach ($recent_posts as $recent) {
            $pathImgRecent = base_url('assets/frontend/img/post/post_1.png');
            if (!empty($recent->image)) {
               $pathImgRecent = base_url('assets/img/posts/' . $recent->image);
            }
      ?>
            <div class="media post_item">
               <img src="<?= $pathImgRecent; ?>" class="rounded" style="object-fit: cover;" width="80px" height="80px" alt="post">
               <div class="media-body">
                  <a href="<?= base_url('article/' . $recent->slug); ?>">
                     <h3><?= $recent->title; ?></h3>
                  </a>
                  <p><?= date('d M Y', strtotime($recent->date)); ?></p>
               </div>
            </div>
      <?php }
      } ?>
   </aside>

</div>