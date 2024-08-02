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
    <div class="card recent-sales overflow-auto">
      <div class="card-body">
        <div class="d-flex mb-3">
          <div class="me-auto p-2">
            <h5 class="card-title">List Users</h5>
          </div>
        </div>

        <table class="table table-borderless datatable">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Role</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $num = 1;
            foreach ($users as $user) : ?>
              <tr>
                <th scope="row"><?= $num++; ?></th>
                <td><?= $user->name ?></td>
                <td><?= $user->email; ?></td>
                <?php if ($user->role_id == 1) : ?>
                  <td><span class="badge bg-danger">Admin</span></td>
                <?php else : ?>
                  <td><span class="badge bg-primary">User</span></td>
                <?php endif; ?>
                <td>
                  <a href="<?= base_url('/admin/user_edit/' . $user->id); ?>" class="btn btn-primary">Edit</a>
                  <a onclick="return dropUser('<?= $user->id; ?>')" class="btn btn-danger">Delete</a>
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

  <script>
    $(document).ready(function() {
      dropUser = (id, status = false) => {
        if (!status) {
          if (confirm('Will you delete it?')) {
            dropUser(id, true);
          }
          return false;
        } else {
          $.ajax({
            type: "post",
            url: "<?= base_url('admin/user_delete'); ?>",
            data: {
              id: id
            },
            dataType: "json",
            success: function(response) {
              location.reload();
            }
          });
        }
      }
    });
  </script>

</body>

</html>