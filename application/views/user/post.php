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

    <div class="pagetitle">
      <h1>Post</h1>
    </div><!-- End Page Title -->

    <div class="row">
      <div class="col-lg-g">
        <?= $this->session->flashdata('message'); ?>
      </div>
    </div>

    <section class="section dashboard">
      <div class="card recent-sales overflow-auto">
        <div class="card-body">
          <div class="p-2 position-absolute top-0 end-0">
            <?php $this->load->view('user/includes/modal'); ?>
            <button type="button" class="m-2 rounded-1 btn btn-success" data-bs-toggle="modal" data-bs-target="#largeModal">
              <i class="bi bi-plus"></i>New Post
            </button>
          </div>
          <h5 class="card-title">Recent Post <span>| Today</span></h5>
          <table class="table table-borderless datatable" id="postTable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Date Creation</th>
                <th scope="col">Title</th>
                <th scope="col">Authors</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <!-- Tempat menyimpan perasaan -->
            </tbody>
          </table>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php $this->load->view('admin/includes/footer-admin'); ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php $this->load->view('admin/includes/js-admin'); ?>

  <!-- Add the following script tag -->
  <script src="script.js"></script>

</body>

</html>