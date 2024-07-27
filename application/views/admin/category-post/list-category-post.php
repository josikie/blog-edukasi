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
            <h1>Category Post</h1>
        </div><!-- End Page Title -->
        <?= $this->session->flashdata('message'); ?>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <div class="me-auto p-2">
                                    <h5 class="card-title">List Category</h5>
                                </div>
                                <div class="p-2"><button type="button" class="btn btn-success" onclick="addNew()">
                                        <i class="bi bi-plus-lg"></i>
                                        Add New</button></div>
                            </div>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Count Post</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $num = 1;
                                    foreach ($categories as $category):
                                    ?>
                                    <tr>
                                        <td><?= $num++;?></td>
                                        <td><?= $category->name;?></td>
                                        <td><?= $category->count;?></td>
                                        <td>
                                            <button type="button" class="btn btn-danger" onclick="dropCategory('<?= $category->id;?>')">Hapus</button>
                                            <button type="button" class="btn btn-warning" onclick="editCategory('<?= $category->id;?>')">Edit</button>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                    <!-- Begin::Modal -->
                    <div class="modal fade" id="modalCategory" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">New Post</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <?= form_open(base_url('manage/categorypost/save'), ['method' => 'POST']);?>
                                <div class="modal-body">
                                    <!-- TinyMCE Editor -->
                                    <textarea class="tinymce-editor">
                <p>Hello World!</p>
                <p>This is TinyMCE <strong>full</strong> editor</p>
              </textarea><!-- End TinyMCE Editor -->

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                                <?= form_close(); ?>
                            </div>
                        </div>
                    </div>
                    <!-- End::Modal -->

                </div>
            </div>
        </section>

    </main>
    <!-- End #main -->
    <!-- ======= Footer ======= -->
    <?php $this->load->view('admin/includes/footer-admin'); ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <?php $this->load->view('admin/includes/js-admin'); ?>

    <script>
        $(document).ready(function () {
            addNew = () => {
                $.ajax({
                    type: "post",
                    url: "<?= base_url('manage/categorypost/create');?>",
                    data: {},
                    dataType: "json",
                    success: function (response) {
                        if(response.status) {
                            $('#modalCategory .modal-title').text('New Category');
                            $('#modalCategory .modal-body').html(response.content);
                            $('#modalCategory').modal('show');
                        } else {
                            alert(response.message);
                        }
                    }
                });
            }
            
            editCategory = (id) => {
                $.ajax({
                    type: "post",
                    url: "<?= base_url('manage/categorypost/edit');?>",
                    data: {
                        id: id
                    },
                    dataType: "json",
                    success: function (response) {
                        if(response.status) {
                            $('#modalCategory .modal-title').text('Update Category');
                            $('#modalCategory .modal-body').html(response.content);
                            $('#modalCategory').modal('show');
                        } else {
                            alert(response.message);
                        }
                    }
                });
            }

            dropCategory = (id, status = false) => {
                if(!status) {
                    if(confirm('Will you delete it?')) {
                        dropCategory(id, true);
                    }
                    return false;
                } else {
                    $.ajax({
                        type: "post",
                        url: "<?= base_url('manage/categorypost/delete');?>",
                        data: {
                            id: id
                        },
                        dataType: "json",
                        success: function (response) {
                            location.reload();
                        }
                    });
                }
            }
        });
    </script>

</body>

</html>