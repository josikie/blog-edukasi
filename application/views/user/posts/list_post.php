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
    <?= $this->session->flashdata('message'); ?>
        <?php 
            $user_id = $user['id'];
            $query = $this->db->get_where('posts', array('user_id' => $user_id));
            $dataAllPosts = $query->result_array();
        ?>
         <div class="card recent-sales overflow-auto">
            <div class="card-body">
            <h5 class="card-title">Recent Post <span>| Today</span> <a href="<?= base_url('/post/add_post'); ?>" class="btn btn-outline-primary">New Post</a></h5>

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
                  <?php foreach($dataAllPosts as $dataPosts) : ?>
                    <tr>
                        <th scope="row"><a href="#"><?= $dataPosts['id'] ?></a></th>
                        <td><?= $dataPosts['date'] ?></td>
                        <td><a href="<?= base_url('detail_post/detail/' . $dataPosts['id']); ?>" class="text-primary"><?= $dataPosts['title'] ?></a></td>
                        <?php if($dataPosts['approval'] == 1) : ?>
                          <td><span class="badge bg-success">Approved</span></td>
                        <?php elseif($dataPosts['approval'] == 2) : ?>
                          <td><span class="badge bg-warning">Waiting for review</span></td>
                        <?php else : ?>
                          <td><span class="badge bg-danger">Rejected</span></td>
                        <?php endif; ?>
                        <td>
                          <a href="<?= base_url('/post/edit_post/'.$dataPosts['id']); ?>" class="btn btn-primary">Edit</a>
                          <a href="<?= base_url('/post/delete/'.$dataPosts['id']); ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
            </table>

            </div>
        </div>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php $this->load->view('admin/includes/footer-admin'); ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php $this->load->view('admin/includes/js-admin'); ?>

</body>

</html>

