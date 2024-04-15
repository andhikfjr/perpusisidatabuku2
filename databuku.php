<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perpustakaan</title>

    <!-- bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />

    <!-- font -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />

    <!-- Font Awesome Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- overlayScrollbars -->
    <link
      rel="stylesheet"
      href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css"
    />
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css" />


  </head>

  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    </nav>
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index.php" class="brand-link">
          <span class="brand-text font-weight-bold">SISTEM PERPUSTAKAAN </span>
        </a>

        <ul
          class="nav nav-pills nav-sidebar flex-column"
          data-widget="treeview"
          role="menu"
          data-accordion="false"
        >
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- Dashboard -->
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>  
                <p>Dashboard</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- input buku -->
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./tambah.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                  <p>Input Data Buku</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- data Buku -->
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./databuku.php" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Buku</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </aside>
      <div class="content-wrapper">
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Data Buku</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">
                    <a href="databuku.php">Data Buku</a>
                  </li>
                  <li class="breadcrumb-item active">Dashboard</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <!-- searchbox -->
            <div class="col-3 offset-md-4">
              <input
                class="form-control mb-3 mt-3"
                type="text"
                id="searchInput"
                placeholder="Cari Judul...."
              />
            </div>
              <table id="myTable" class="table table-hover">
                <thead>
                  <tr>
                    <th>No Buku</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <?php
                  include 'tampildata.php';
                  
                  while($result = mysqli_fetch_assoc($sql)){
                ?>
                <tbody>
                  <tr>
                    <td>
                      <?php echo ++$no; ?>.
                    </td>
                    <td>
                      <?php echo $result['judul']; ?>
                    </td>
                    <td>
                      <?php echo $result['penulis']; ?>
                    </td>
                    <td>
                      <a href="kelola.php?ubah=<?php echo $result['no_buku']; ?>" type="button" class="btn btn-warning">
                        <i class="fa-solid fa-pen-to-square"></i>
                      </a>
                      <a href="proses.php?hapus=<?php echo $result['no_buku']; ?>" type="button" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus?')">
                        <i class="fa-solid fa-trash"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>
                <?php
                  }
                ?>
              </table>
            </div>
          </div>
        </section>
      </div>
    </div>
    
    <!-- main js -->
    <script src="js/caridata.js"></script>
    <script src="js/main.js"></script>
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js"></script>
  </body>
</html>
