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
            <h1>Edit Profile</h1>
        </div><!-- End Page Title -->

        <!-- Profile Edit Form -->
        <?= form_open_multipart('admin/user_edit/' . $user['id']); ?>
        <div class="row mb-3">
            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
            <div class="col-md-8 col-lg-9">
                <img height="150w" src="<?= base_url('assets/img/') . $user['image'] ?>" alt="Profile">
                <div class="pt-2">
                    <div class="mb-3">
                        <input class="btn btn-primary btn-sm" type="file" id="image" name="image" for="image">
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
            <div class="col-md-8 col-lg-9">
                <input name="name" type="text" class="form-control" id="name" value="<?= $user['name']; ?>">
                <?= form_error('name', '<small class="text-danger ps-1">', '</small>'); ?>
            </div>
        </div>

        <div class="row mb-3">
            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email</label>
            <div class="col-md-8 col-lg-9">
                <input name="email" type="text" class="form-control" id="email" value="<?= $user['email']; ?>" readonly>
            </div>
        </div>

        <div class="row mb-3">
            <label for="role" class="col-md-4 col-lg-3 col-form-label">Role</label>
            <div class="col-md-8 col-lg-9">
                <select class="form-select form-select-sm" name="role_id" id="role_id" aria-label="Role">
                    <option value="1" <?= $user['role_id'] == 1 ? 'selected' : ''; ?>>Admin</option>
                    <option value="2" <?= $user['role_id'] == 2 ? 'selected' : ''; ?>>Member</option>
                </select>
            </div>
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
