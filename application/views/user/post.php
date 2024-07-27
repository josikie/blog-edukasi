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
          <table class="table table-borderless datatable">
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
              <tr>
                <th scope="row"><a href="#">#2457</a></th>
                <td>June, 21 2023</td>
                <td><a href="#" class="text-primary">At praesentium minu</a></td>
                <td><a href="#" class="text-primary"><?= $user['name']; ?></a></td>
                <td>
                  <button type="button" class="btn btn-danger">Hapus</button>
                  <button type="button" class="btn btn-warning">Edit</button>
                </td>
              </tr>
              <tr>
                <th scope="row"><a href="#">#2147</a></th>
                <td>June, 21 2023</td>
                <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
                <td><span class="badge bg-warning">Pending</span></td>
              </tr>
              <tr>
                <th scope="row"><a href="#">#2049</a></th>
                <td>June, 21 2023</td>
                <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
                <td><span class="badge bg-success">Approved</span></td>
              </tr>
              <tr>
                <th scope="row"><a href="#">#2644</a></th>
                <td>June, 21 2023</td>
                <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
                <td><span class="badge bg-danger">Rejected</span></td>
              </tr>
              <tr>
                <th scope="row"><a href="#">#2644</a></th>
                <td>June, 21 2023</td>
                <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
                <td><span class="badge bg-success">Approved</span></td>
              </tr>
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

</body>

</html>