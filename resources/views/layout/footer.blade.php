<footer class="main-footer">
    <strong>Copyright &copy; ETHIO-Chickens  &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script><a href="https://ethio-chickens.org">ethio-chickens.org</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
  <!-- /////////////////////////////// -->
   <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-blue">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="adminlite/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="adminlite/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="adminlite/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="adminlite/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="adminlite/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="adminlite/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="adminlite/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="adminlite/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="adminlite/plugins/moment/moment.min.js"></script>
<script src="adminlite/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="adminlite/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="adminlite/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="adminlite/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="adminlite/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="adminlite/dist/js/pages/dashboard.js"></script>
<!-- DataTables  & Plugins -->
<script src="adminlite/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="adminlite/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="adminlite/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="adminlite/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="adminlite/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="adminlite/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="adminlite/plugins/jszip/jszip.min.js"></script>
<script src="adminlite/plugins/pdfmake/pdfmake.min.js"></script>
<script src="adminlite/plugins/pdfmake/vfs_fonts.js"></script>
<script src="adminlite/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="adminlite/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="adminlite/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Page specific script -->
<script>
   $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "paging": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  
</script>