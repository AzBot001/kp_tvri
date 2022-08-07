<footer class="main-footer">

  <strong>Copyright &copy; <?= date('Y') ?> </strong> - <i class="fas fa-code"></i> With <i class="fas fa-coffee"></i> & <i class="fas fa-heart"></i> By Abid Amir
</footer>

<!-- Control Sidebar -->

<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script src="<?= $base_url ?>public/assets/dist/js/calendar/app.js"></script>

<!-- jQuery -->
<script src="<?= $base_url ?>public/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= $base_url ?>public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= $base_url ?>public/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= $base_url ?>public/assets/dist/js/demo.js"></script>
<!-- SummerNote js -->
<script src="<?= $base_url ?>public/assets/plugins/summernote/summernote.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/jszip/jszip.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/summernote/summernote-bs4.min.js"></script>
<script src="<?= $base_url ?>public/assets/plugins/select2/js/select2.full.min.js"></script>
<script>
  // $(function() {
  //     // Summernote
  //     $('#summernote_lead').summernote({
  //         height: 200
  //     })
  //     $('#summernote_narasi').summernote({
  //         height: 200
  //     })
  //     $('#summernote_narasi_su').summernote({
  //         height: 200
  //     })

  // })
</script>

<script type="text/javascript">
  $(function() {
    // Summernote
    $('#summernote_naskah_default').summernote({
      height: 200
    })
    $('.summernotee').summernote({
      height: 200
    })
  })
  $(document).ready(function() {
    $(".add-more").click(function() {
      var html = $(".copy").html();
      $(".after-add-more").after(html);
    });


    $("body").on("click", ".remove", function() {
      $(this).parents(".control-group").remove();
    });
  });
</script>
<script>
  $(document).ready(function() {
    setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
      });
    }, 2000);
  });

  //Initialize Select2 Elements
  $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

  $(document).ready(function() {
    $('#dataTable').DataTable();
  });

  $(document).ready(function() {
    $('#dataTable2').DataTable();
  });

  $(document).ready(function() {
    $('#dataTable3').DataTable();
  });

  $(document).ready(function() {
    $('#dataTable4').DataTable();
  });

  $(document).ready(function() {
    $('#dataTable5').DataTable();
  });
  $(document).ready(function() {
    $('#dataTable6').DataTable();
  }); 
</script>


</body>

</html>