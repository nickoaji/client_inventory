<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets\xtreme_admin_lite/assets/images/favicon.png') ?>">
  <title>Xtreme Admin Template - The Ultimate Multipurpose admin template</title>
  <!-- Custom CSS -->
  <link href="<?= base_url('assets\xtreme_admin_lite/css/style.min.css') ?>" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
  <!-- ============================================================== -->
  <!-- Page wrapper  -->
  <!-- ============================================================== -->
  <div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
      <!-- ============================================================== -->
      <!-- Start Page Content -->
      <!-- ============================================================== -->
      <!-- Row -->
      <div class="row">
        <!-- Column -->

        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7">
          <div class="card">
            <div class="card-body">
              <form class="form-horizontal form-material" id="formLogin">

                <div class="form-group">
                  <label for="example-email" class="col-md-12">Email</label>
                  <div class="col-md-12">
                    <input type="email" placeholder="johnathan@admin.com" class="form-user-input form-control form-control-line" name="email" id="example-email">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-12">Password</label>
                  <div class="col-md-12">
                    <input type="password" value="password" class="form-user-input form-control form-control-line" name="password">
                  </div>
                </div>



                <div class="form-group">
                  <div class="col-sm-12">
                    <button class="btn btn-success">LOGIN</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Column -->
      </div>
      <!-- Row -->
      <!-- ============================================================== -->
      <!-- End PAge Content -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Right sidebar -->
      <!-- ============================================================== -->
      <!-- .right-sidebar -->
      <!-- ============================================================== -->
      <!-- End Right sidebar -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- End Page wrapper  -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- All Jquery -->
  <!-- ============================================================== -->
  <script src="<?= base_url('assets/xtreme_admin_lite/') ?>assets/libs/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript">
    $("#formLogin").on('submit', function(e) {
      e.preventDefault();
      checkLogin();
    });

    function checkLogin() {
      var link = "http://localhost/backend_inventory/user/check_login";
      var dataForm = {};
      var allInput = $('.form-user-input');

      $.each(allInput, function(i, val) {
        dataForm[val['name']] = val['value'];
      });
      $.ajax(link, {
        type: 'POST',
        data: dataForm,
        success: function(data, status, xhr) {
          console.log(data);
          var data_str = JSON.parse(data);
          console.log(data_str);
          alert(data_str['pesan']);
          if (data_str['sukses'] == 'Ya') {
            location.replace('http://localhost/client_inventory/index.php/home');
          }
        },
        error: function(jqXHR, textStatus, errorMsg) {
          alert('Error: ' + errorMsg);
        }
      });
    }
  </script>

</body>

</html>