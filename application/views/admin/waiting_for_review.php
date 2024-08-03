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
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
    <div class="card recent-sales overflow-auto">
            <div class="card-body">
            <h5 class="card-title">Recent Post <span>| Today</span></h5>

            <table class="table table-borderless datatable">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Date Creation</th>
                    <th scope="col">Title</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach($posts as $dataPosts) : ?>
                    <tr>
                        <th scope="row"><a href="#"><?= $dataPosts['id'] ?></a></th>
                        <td><?= $dataPosts['date'] ?></td>
                        <td><a href="<?= base_url('article/' . $dataPosts['slug']); ?>" target="_blank" class="text-primary"><?= $dataPosts['title'] ?></a></td>
                        <?php if($dataPosts['approval'] == 1) : ?>
                          <td><span class="badge bg-success">Approved</span></td>
                        <?php elseif($dataPosts['approval'] == 2) : ?>
                          <td><span class="badge bg-warning">Waiting for review</span></td>
                        <?php else : ?>
                          <td><span class="badge bg-danger">Rejected</span></td>
                        <?php endif; ?>
                        <td>
                          <a href="<?= base_url('/Admin_Post/approved/'.$dataPosts['id']); ?>" class="btn btn-primary">Accept</a>
                          <a href="<?= base_url('/Admin_Post/rejected/'.$dataPosts['id']); ?>" class="btn btn-danger">Reject</a>
                        </td>
                    </tr>
                  <?php endforeach; ?>
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