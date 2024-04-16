  <!-- jQuery -->

  <script type="text/javascript" src="{{URL::asset('/assets/plugins/jquery/jquery.min.js')}}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script type="text/javascript" src="{{URL::asset('/assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
      $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script type="text/javascript" src="{{URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- ChartJS -->
  <script type="text/javascript" src="{{URL::asset('assets/plugins/chart.js/Chart.min.js')}}"></script>
  <!-- Sparkline -->
  <script type="text/javascript" src="{{URL::asset('assets/plugins/sparklines/sparkline.js')}}"></script>
  <!-- JQVMap -->
  <script type="text/javascript" src="{{URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
  <!-- jQuery Knob Chart -->
  <script type="text/javascript" src="{{URL::asset('assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
  <!-- daterangepicker -->
  <script type="text/javascript" src="{{URL::asset('assets/plugins/moment/moment.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script type="text/javascript" src="{{URL::asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
  <!-- Summernote -->
  <script type="text/javascript" src="{{URL::asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
  <!-- overlayScrollbars -->
  <script type="text/javascript" src="{{URL::asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script type="text/javascript" src="{{URL::asset('assets/js/adminlte.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script type="text/javascript" src="{{URL::asset('assets/js/demo.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script type="text/javascript" src="{{URL::asset('assets/js/pages/dashboard.js')}}"></script>
  
  <script type="text/javascript" src="{{URL::asset('assets/js/bootstrap.js')}}"></script>

  <script type="text/javascript" src="{{URL::asset('assets/js/cdn.datatables.net_1.13.4_js_jquery.dataTables.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('assets/js/cdn.datatables.net_1.13.4_js_dataTables.bootstrap5.min.js')}}"></script>

  <script type="text/javascript" src="{{URL::asset('assets/js/code.jquery.com_jquery-3.7.0.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('assets/js/cdnjs.cloudflare.com_ajax_libs_popper.js_1.11.0_umd_popper.min.js')}}"></script>

  <script type="text/javascript" src="{{URL::asset('assets/js/select2.min.js')}}"></script>

   <script type="text/javascript" src="{{asset('')}}/dropify.js"></script>
   <!-- <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

      <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>-->

      <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script> 

@stack('javascripts')
<script>
$('.dropify').dropify();
</script>
<!-- <script>
$(document).ready(function() {
  $('#example').DataTable();
});
</script>

<script>

$(document).ready(function(){
  $('#table_id').DataTable({
    processing:true,
  });
});
</script> -->