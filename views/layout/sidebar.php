  <!-- Main Sidebar Container -->

  <aside class="main-sidebar elevation-4" style="background-color: #6DAFFE;">
      <!-- Brand Logo -->
      <div class="sidebar-head" style="background-color: #3ebdc6;">
          <a href="" class="brand-link">
              <img src="<?= $base_url ?>public/assets/dist/img/logojadi.png" alt="AdminLTE Logo" class="brand-image">
              <p class="text-white mt-1"style="font-family: 'montserrat'; font-size:medium; color:#fffff;">&nbsp;&nbsp;&nbsp;Stasiun Gorontalo</p>
          </a>
      </div>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="<?= $base_url ?>public/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                <a href="#" class="d-block text-white">
                <?php
                if ( $_SESSION['type_user'] == 'reporter'){
                  echo "Reporter";  
                } else if ( $_SESSION['type_user'] == 'admin'){
                    echo "Admin";  
                } else if ( $_SESSION['type_user'] == 'editor'){
                    echo "Editor";  
                } else if ( $_SESSION['type_user'] == 'eic'){
                    echo "Desk";  
                } else {
                    echo "User";  
                }   
                ?>
                </a>
              </div>
          </div>

          <!-- SidebarSearch Form -->

          <!-- Sidebar Menu -->
          <?php
            if ($_SESSION['type_user'] == 'admin') {
            ?>
              <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                      <li class="nav-item">
                          <a href="<?= $base_url ?>beranda_admin" class="nav-link <?php if ($_GET['t_admin'] == 'beranda_admin') {
                                                                                        echo "active";
                                                                        } ?>">
                              <i class="nav-icon fas fa-tv text-white"></i>
                              <p class="text-white">
                                  Beranda
                              </p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="<?= $base_url ?>user" class="nav-link <?php if ($_GET['t_admin'] == 'user') {
                                                                                echo "active";
                                                                            } ?>">
                              <i class="nav-icon fas fa-user text-white"></i>
                              <p class="text-white">
                                  User
                              </p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="<?= $base_url ?>formatTimredaksi_admin" class="nav-link  <?php if ($_GET['t_admin'] == 'formatTimredaksi_admin') {
                                                                                                echo "active";
                                                                                            } ?>">
                              <i class="nav-icon fas fa-users text-white"></i>
                              <p class="text-white">
                                  Format Tim Redaksi
                              </p>
                          </a>
                      </li>

                      <li class="nav-item has-treeview">
                          <a href="" class="nav-link">
                              <i class="nav-icon fas fa-cog"></i>
                              <p>
                                  Data Master
                                  <i class="fas fa-angle-left right"></i>
                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>naskahDefault_admin" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Data Naskah Default</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>kategori_admin" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Data Kategori</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>sumber_admin" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Data Sumber Berita</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>cu_admin" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Program Current Affairs</p>
                                  </a>
                              </li>
                          </ul>
                      </li>

                      <li class="nav-item has-treeview">
                          <a href="" class="nav-link">
                              <i class="nav-icon fas fa-newspaper"></i>
                              <p>
                                  Data Berita
                                  <i class="fas fa-angle-left right"></i>
                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>dataBeritaNaskah_admin" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Data Naskah</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>dataBeritaRundown" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Data Rundown</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>dataBeritaLead" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Data Lead</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>buatpaket_adm" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Data Paket</p>
                                  </a>
                              </li>
                          </ul>
                      </li>
                  </ul>

              </nav>
          <?php
            }
            ?>

          <?php
            if ($_SESSION['type_user'] == 'reporter') {
            ?>
              <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                      <li class="nav-item">
                          <a href="<?= $base_url ?>beranda_reporter" class="nav-link active">
                              <i class="nav-icon fas fa-tv text-white"></i>
                              <p class="text-white">
                                  Beranda
                              </p>
                          </a>
                      </li>
                      <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-edit"></i>
                              <p>
                                  Buat Naskah
                                  <i class="fas fa-angle-left right"></i>
                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>buatNaskahGhi_reporter" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Naskah GHI</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>buatNaskahGns_reporter" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Naskah GNS</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>buatNaskahHabari_reporter" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Naskah Habari</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>buatNaskahSulampa_reporter" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Naskah Sulampa</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>buatNaskahDialog_reporter" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Naskah Dialog</p>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-newspaper"></i>
                              <p>
                                  Data Berita
                                  <i class="fas fa-angle-left right"></i>
                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>dataBeritaNaskah_reporter" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Data Naskah</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>dataBeritaRundown_reporter" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Data Rundown</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>dataBeritaLead_reporter" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Data Lead</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>buatpaket_rep" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Data Paket</p>
                                  </a>
                              </li>
                          </ul>
                      </li>
                  </ul>

              </nav>
          <?php
            }
            ?>

          <?php
            if ($_SESSION['type_user'] == 'editor') {
            ?>
              <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                      <li class="nav-item">
                          <a href="<?= $base_url ?>beranda_editor" class="nav-link active">
                              <i class="nav-icon fas fa-tv text-white"></i>
                              <p class="text-white">
                                  Beranda
                              </p>
                          </a>
                      </li>
                      <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-newspaper"></i>
                              <p>
                                  Data Berita
                                  <i class="fas fa-angle-left right"></i>
                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>dataBeritaNaskah_editor" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Data Naskah</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>dataBeritaRundown_editor" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Data Rundown</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>dataBeritaLead_editor" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Data Lead</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>buatpaket_editor" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Data Paket</p>
                                  </a>
                              </li>
                          </ul>
                      </li>
                  </ul>

              </nav>
          <?php
            }
            ?>

          <?php
            if ($_SESSION['type_user'] == 'eic') {
            ?>
              <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                      <li class="nav-item">
                          <a href="<?= $base_url ?>beranda_eic" class="nav-link active">
                              <i class="nav-icon fas fa-tv text-white"></i>
                              <p class="text-white">
                                  Beranda
                              </p>
                          </a>
                      </li>
                      <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-edit"></i>
                              <p>
                                  Buat Naskah
                                  <i class="fas fa-angle-left right"></i>
                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>buatNaskahGhi_eic" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Naskah GHI</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>buatNaskahGns_eic" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Naskah GNS</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>buatNaskahHabari_eic" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Naskah Habari</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>buatNaskahSulampa_eic" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Naskah Sulampa</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>buatNaskahDialog_eic" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Naskah Dialog</p>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      
                      <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-list"></i>
                              <p>
                                  Buat Rundown
                                  <i class="fas fa-angle-left right"></i>
                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>dataBeritaRundown_eic" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Buat Rundown GHI</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>dataBeritaRundowngns_eic" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Buat Rundown GNS</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>dataBeritaRundownhabari_eic" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Buat Rundown HABARI</p>
                                  </a>
                              </li>
                          </ul>
                      </li>

                      <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-newspaper"></i>
                              <p>
                                  Data Berita
                                  <i class="fas fa-angle-left right"></i>
                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>dataBeritaNaskah_eic" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Data Naskah</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>data_rundown" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Data Rundown</p>
                                  </a>
                              </li>
                          </ul>
                      </li>
                  </ul>

              </nav>
          <?php
            }
            ?>

<?php
            if ($_SESSION['type_user'] == 'user') {
            ?>
              <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                      <li class="nav-item">
                          <a href="<?= $base_url ?>beranda_user" class="nav-link active">
                              <i class="nav-icon fas fa-tv text-white"></i>
                              <p class="text-white">
                                  Beranda
                              </p>
                          </a>
                      </li>
                      <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-newspaper"></i>
                              <p>
                                  Data Berita
                                  <i class="fas fa-angle-left right"></i>
                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>dataBeritaNaskah_user" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Data Naskah</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>dataBeritaRundown_user" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Data Rundown</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>dataBeritaLead_user" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Data Lead</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= $base_url ?>buatpaket_user" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Data Paket</p>
                                  </a>
                              </li>
                          </ul>
                      </li>
                  </ul>

              </nav>
          <?php
            }
            ?>





          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>