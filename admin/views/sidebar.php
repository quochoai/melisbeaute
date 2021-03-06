<!-- Main Sidebar Container -->
  <?php
    if ($profile['nhomqt'] == 1)
        $text_role = "Admin";
        //$array_gallery = array($def['link_partner'], $def['link_gallery']);
  ?>
  <aside class="main-sidebar sidebar-dark-successs elevation-4">
    <!-- Brand Logo -->
    <a href="javascript:void(0);" class="brand-link">
      <span class="brand-text font-weight-light"><i class="fas fa-user-shield"></i> <?php echo $text_role; ?></span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column <?php echo $def['nav-flat']; ?>" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a class="nav-link category_product">
              <i class="nav-icon fas fa-cubes"></i>
              <p><?php echo $lang['category_product']; ?></p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link category_service">
              <i class="nav-icon fas fa-cubes"></i>
              <p><?php echo $lang['category_service']; ?></p>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0);" class="nav-link">
                <i class="nav-icon fas fa-photo-video"></i>
              <p><?php echo $lang['manage_gallery'] ?><i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a class="nav-link gallery_photo">
                  <i class="fas fa-images nav-icon"></i>
                  <p><?php echo $lang['gimage'] ?></p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link gallery_video">
                  <i class="fas fa-video nav-icon"></i>
                  <p><?php echo $lang['gvideo'] ?></p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="javascript:void(0);" class="nav-link">
                <i class="nav-icon fas fa-sliders-h"></i>
              <p><?php echo $lang['manage_slider'] ?><i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a class="nav-link slider_home">
                  <i class="fas fa-home nav-icon"></i>
                  <p><?php echo $lang['shome'] ?></p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link slider_about">
                  <i class="fas fa-address-card nav-icon"></i>
                  <p><?php echo $lang['slpabout'] ?></p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link slider_branch">
                  <i class="fas fa-code-branch nav-icon"></i>
                  <p><?php echo $lang['slpnhuongquyen'] ?></p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="javascript:void(0);" class="nav-link">
                <i class="nav-icon fas fa-comment"></i>
              <p><?php echo $lang['manage_review'] ?><i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a class="nav-link review_customer">
                  <i class="fas fa-user-friends nav-icon"></i>
                  <p><?php echo $lang['customer_review'] ?></p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link review_star">
                  <i class="fas fa-star nav-icon"></i>
                  <p><?php echo $lang['star_review'] ?></p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="javascript:void(0);" class="nav-link">
                <i class="nav-icon fas fa-newspaper"></i>
              <p><?php echo $lang['manage_news'] ?><i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a class="nav-link n_news">
                  <i class="fas fa-rss nav-icon"></i>
                  <p><?php echo $lang['n_news'] ?></p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link n_knowledge">
                  <i class="fas fa-snowflake nav-icon"></i>
                  <p><?php echo $lang['n_knowledge'] ?></p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link n_promotion">
                  <i class="fas fa-snowflake nav-icon"></i>
                  <p><?php echo $lang['n_promotion'] ?></p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="javascript:void(0);" class="nav-link">
                <i class="nav-icon fas fa-adjust"></i>
              <p><?php echo $lang['manage_landing'] ?><i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a class="nav-link landing_about">
                  <i class="fas fa-eject nav-icon"></i>
                  <p><?php echo $lang['landing_about'] ?></p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link landing_branch">
                  <i class="fas fa-peace nav-icon"></i>
                  <p><?php echo $lang['landing_branch'] ?></p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link partner">
              <i class="nav-icon fas fa-handshake"></i>
              <p><?php echo $lang['manage_partner']; ?></p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link information">
              <i class="nav-icon fas fa-info"></i>
              <p><?php echo $lang['manage_information']; ?></p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a class="nav-link logout">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p><?php echo $lang['logout']; ?></p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <div class="modal fade" id="loading">
    <div class="text-center">
      <div class="spinner-border text-success" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
  </div>
