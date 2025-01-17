<aside id="sidebar" class="sidebar">
    <?php if ($this->session->userdata('role_id') == 1): ?>
        <ul class="sidebar-nav" id="sidebar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('home'); ?>" target="_blank">
              <i class="bi bi-globe"></i><span>Lihat Web</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="<?= base_url('admin'); ?>">
              <i class="bi bi-plus-square"></i><span>Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-pencil-square"></i><span>Approval</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
                  <a href="<?= base_url('admin_post/waiting_for_review'); ?>">
                    <i class="bi bi-clock"></i><span>Waiting for Review</span>
                  </a>
              </li>
              <li>
                  <a href="<?= base_url('admin_post/approved_post'); ?>">
                    <i class="bi bi-check-lg"></i><span>Approved</span>
                  </a>
              </li>
              <li>
                <a href="<?= base_url('admin_post/rejected_post'); ?>">
                  <i class="bi bi-x-lg"></i><span>Rejected</span>
                </a>
              </li>
            </ul>
          </li><!-- End Components Nav -->
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/post') ?>">
              <i class="bi bi-pencil-square"></i><span>Post</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('manage/category-post');?>">
              <i class="bi bi-pencil-square"></i><span>Category Post</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav-2" data-bs-toggle="collapse" href="#">
              <i class="bi bi-pencil-square"></i><span>Management Post</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav-2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
                <a href="<?= base_url('admin/addpost');?>">
                  <i class="bi bi-plus-square"></i><span>List Post</span>
                </a>
              </li>
              
            </ul>
          </li> -->
          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#users-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-pencil-square"></i><span>Management user</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="users-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
                  <a href="<?= base_url('admin/users'); ?>">
                    <i class="bi bi-person"></i><span>List User</span>
                  </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="<?= base_url('admin/edit') ?>">
              <i class="bi bi-person-fill"></i><span>Profile</span>
            </a>
          </li>
          <!-- End Components Nav -->
        </ul>
    <?php elseif ($this->session->userdata('role_id') == 2): ?>
      <ul class="sidebar-nav" id="sidebar-nav">
          <li class="nav-item">
            <a class="nav-link"  href="<?= base_url('user'); ?>">
              <i class="bi bi-plus-square"></i><span>Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/post') ?>">
              <i class="bi bi-pencil-square"></i><span>Post</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="<?= base_url('user/edit') ?>">
              <i class="bi bi-person-fill"></i><span>Profile</span>
            </a>
          </li>
        </ul>
    <?php endif; ?>
  
</aside>