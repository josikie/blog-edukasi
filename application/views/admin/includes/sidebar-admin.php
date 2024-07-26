<aside id="sidebar" class="sidebar">

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

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-pencil-square"></i><span>Approval</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="<?= base_url('admin/addpost');?>">
            <i class="bi bi-plus-square"></i><span>List Post</span>
          </a>
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
          <a href="<?= base_url('admin/category-post');?>">
            <i class="bi bi-pencil"></i><span>Category Post</span>
          <a href="#">
            <i class="bi bi-x-lg"></i><span>Waiting for Review</span>
          </a>
        </li>
      </ul>
    </li><!-- End Components Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person"></i><span>Manajement User</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="forms-elements.html">
            <i class="bi bi-circle"></i><span>Data User</span>
          </a>
        </li>
      </ul>
    </li><!-- End Forms Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-gear"></i><span>Manajement Sistem</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="tables-general.html">
            <i class="bi bi-circle"></i><span>General Tables</span>
          </a>
        </li>
        <li>
          <a href="tables-data.html">
            <i class="bi bi-circle"></i><span>Data Tables</span>
          </a>
        </li>
      </ul>
    </li><!-- End Tables Nav -->

    
    <!-- End Components Nav -->
  </ul>

</aside>