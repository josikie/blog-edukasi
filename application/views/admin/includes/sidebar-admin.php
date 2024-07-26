<aside id="sidebar" class="sidebar">
    <?php if ($this->session->userdata('role_id') == 1): ?>
        <ul class="sidebar-nav" id="sidebar-nav">
          <li class="nav-item">
            <a class="nav-link"  href="#">
              <i class="bi bi-person-fill"></i><span>Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-pencil-square"></i><span>Approval</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
                  <a href="#">
                    <i class="bi bi-clock"></i><span>Waiting for Review</span>
                  </a>
              </li>
              <li>
                  <a href="#">
                    <i class="bi bi-check-lg"></i><span>Approved</span>
                  </a>
              </li>
              <li>
                <a href="#">
                  <i class="bi bi-x-lg"></i><span>Rejected</span>
                </a>
              </li>
            </ul>
          </li><!-- End Components Nav -->

          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav-2" data-bs-toggle="collapse" href="#">
              <i class="bi bi-pencil-square"></i><span>Management Post</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav-2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
                <a href="<?= base_url('admin/addpost');?>">
                  <i class="bi bi-plus-square"></i><span>List Post</span>
                </a>
              </li>
              <li>
                <a href="<?= base_url('admin/category-post');?>">
                  <i class="bi bi-pencil"></i><span>Category Post</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- End Components Nav -->
        </ul>
    <?php elseif ($this->session->userdata('role_id') == 2): ?>
      <ul class="sidebar-nav" id="sidebar-nav">
          <li class="nav-item">
            <a class="nav-link"  href="#">
              <i class="bi bi-person-fill"></i><span>Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="bi bi-pencil-square"></i><span>Post</span>
            </a>
          </li>
        </ul>
    <?php endif; ?>
  
</aside>