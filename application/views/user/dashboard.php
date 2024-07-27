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

<<<<<<< HEAD
    <div class="pagetitle">
      <h1>Dashboard</h1>
    </div><!-- End Page Title -->

    <div class="row">
        <div class="col-lg-g">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <section class="section dashboard">
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
                </tr>
                </thead>
                <tbody>
                  <?php foreach($dataAllPosts as $dataPosts) : ?>
                    <tr>
                        <th scope="row"><a href="#"><?= $dataPosts['id'] ?></a></th>
                        <td><?= $dataPosts['date'] ?></td>
                        <td><a href="<?= base_url('detail_post/detail/' . $dataPosts['id']); ?>" class="text-primary" class="text-primary"><?= $dataPosts['title'] ?></a></td>
                        <?php if($dataPosts['approval'] == 1) : ?>
                          <td><span class="badge bg-success">Approved</span></td>
                        <?php elseif($dataPosts['approval'] == 2) : ?>
                          <td><span class="badge bg-warning">Waiting for review</span></td>
                        <?php else : ?>
                          <td><span class="badge bg-danger">Rejected</span></td>
                        <?php endif; ?>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
            </table>
=======
        <div class="pagetitle">
            <h1>Dashboard</h1>
        </div><!-- End Page Title -->
>>>>>>> b433ea990bf337c0245a03b0b3e490d8811e82d0

        <div class="row">
            <div class="col-lg-g">
                <?= $this->session->flashdata('message'); ?>
            </div>
        </div>

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
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><a href="#">#2457</a></th>
                                <td>June, 21 2023</td>
                                <td><a href="#" class="text-primary">At praesentium minu</a></td>
                                <td><span class="badge bg-success">Approved</span></td>
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