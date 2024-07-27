<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/includes/head-admin'); ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <?php $this->load->view('admin/includes/header-admin'); ?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php $this->load->view('admin/includes/sidebar-admin'); ?>
  <!-- End Sidebar-->

  <main id="main" class="main">
        <!-- Add Form -->
     <?= form_open_multipart();?>
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <img height="150w" src="<?= base_url('assets/img/posts/') . $user['posts']['image']?>" alt="Profile">
                        <div class="pt-2">
                            <div class="mb-3">
                                <input class="btn btn-primary btn-sm" type="file" id="image" name="image" for="image">
                            </div>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="title" class="col-md-4 col-lg-3 col-form-label">Title</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="title" type="text" class="form-control" id="title" value="<?= $user['posts']['title'] ?>">
                        <?= form_error('name', '<small class="text-danger ps-1">', '</small>'); ?>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="article" class="col-md-4 col-lg-3 col-form-label">Article</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="article" type="text" class="form-control" id="article" value="<?= $user['posts']['article'] ?>">
                      </div>
                    </div>

                    <div class="row mb-3 p-3">
                      <select class="form-select form-select-sm" name="category" aria-label="Category">
                        <option selected>Select Category</option>
                        <option value="1" 
                          <?php if($user['posts']['category_id'] == 1) : ?> #
                            selected
                          <?php endif; ?>
                        >English</option>
                        <option value="2"
                            <?php if($user['posts']['category_id'] == 2) : ?> #
                              selected
                            <?php endif; ?>
                        >Math</option>
                      </select>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php $this->load->view('admin/includes/footer-admin'); ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php $this->load->view('admin/includes/js-admin'); ?>

</body>

</html>
