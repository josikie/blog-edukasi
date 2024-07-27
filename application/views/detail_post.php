<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/includes/head-admin'); ?>
    <style>
        .hidden-element {
            visibility: hidden; /* Hide the element */
        }
    </style>
</head>

<body>
  <main>
    <!-- Default Card -->
    <div class="card m-4">
        <div class="card-body mb-5">
            <img src="<?= base_url('assets/img/posts/') . $post['image']?>"   class="img-fluid rounded-start" alt="...">
            <h1 class="card-title"><?= $post['title']; ?></h1>
            <div>
                <span class="badge border-primary border-1 text-primary">
                    <?=
                        $this->db->get_where('category', ['id' => $post['category_id']])->row_array()['name'];
                    ?>
                </span>
                <?php if($post['approval'] == 1) : ?>
                    <span class="badge bg-primary">Approved</span>
                <?php elseif($post['approval'] == 2) : ?>
                    <span class="badge bg-warning">Waiting for review</span>
                <?php else : ?>
                    <span class="badge bg-danger">Rejected</span>
                <?php endif; ?>
            </div>

            <div class="m-2">
                <?= $post['article']; ?>
            </div>
          </div>
        <div class="card-body mt-5">
                <h5 class="card-title">Comments</h5>
                <div class="card p-5">
                    <div class="card-body">
                        <div class="col-md-8 col-lg-9">
                                <?php foreach($comments as $c) : ?>
                                    <?php 
                                        $user = $this->db->get_where('users', ['id' => $c['user_id']])->row_array();
                                        
                                    ?>
                                    <!-- Card with an image on left -->
                                    <div class="card mb-3" style="max-width: 540px;">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img class="img-fluid rounded-start"  src="<?= base_url('assets/img/') . $user['image']?>" alt="Profile">
                                            </div>
                                            <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title"><?= $user['name']; ?></h5>
                                                <p class="card-text"><?= $c['comment_body']; ?></p>
                                                <?php if($this->session->userdata('email') && $user['email'] == $this->session->userdata('email')) : ?>
                                                    <a href="<?= base_url('comment/delete/' . $c['id']) . '/' . $post['id']; ?>" class="btn btn-danger">Delete</a>
                                                <?php endif; ?>
            
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <form class="row g-3 needs-validation" method="post" action="<?= base_url('comment/add_comment'); ?>">
                                    <div class="mt-8">
                                        <div class="row mb-2">
                                            <div class="col-md-8 col-lg-9">
                                                <textarea name="comment" type="text" class="form-control" id="comment"></textarea>
                                                <?= form_error('comment', '<small class="text-danger ps-1">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <input type="text" name="post_id" id="post_id" class="hidden-element" value="<?= $post['id']; ?>">
                                        <div class="">
                                            <?php if(!$this->session->userdata('email')) : ?>
                                                <button type="submit" class="btn btn-primary" disabled>Save Changes</button>
                                            <?php else: ?>
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </form><!-- End Profile Edit Form -->
                      </div>
                    </div>
                </div>
        </div>
    </div><!-- End Default Card -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php $this->load->view('admin/includes/footer-admin'); ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php $this->load->view('admin/includes/js-admin'); ?>

</body>

</html>