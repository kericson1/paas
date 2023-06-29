<!DOCTYPE html>
<html lang="fr">
<!-- header -->
@include('admin.partials._header')
<!-- /.header -->
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Navbar -->
    @include('admin.partials._navbar')
    <!-- /.navbar -->
    <!-- Navbar -->
    @include('admin.partials._adminsidebar')
    <!-- /.navbar -->
    @yield('content')
    <!-- footer -->
    @include('admin.partials._footer')
    <!-- /.footer -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
{{-- <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
--}}
<script>
    $(function () {
        var areaChartData = {
        labels  : ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
        datasets: [
            {
            label               : 'Bénéfice',
            backgroundColor     : 'rgba(60,141,188,0.9)',
            borderColor         : 'rgba(60,141,188,0.8)',
            pointRadius         : false,
            pointColor          : '#3b8bba',
            pointStrokeColor    : 'rgba(60,141,188,1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : [28, 48, 40, 19, 86, 27, 90, 80, 65, 59, 80, 81]
            },
            {
            label               : 'Dépense',
            backgroundColor     : 'rgba(210, 214, 222, 0.7)',
            borderColor         : 'rgba(210, 214, 222, 0.7)',
            pointRadius         : false,
            pointColor          : 'rgba(210, 214, 222, 0.7)',
            pointStrokeColor    : '#c1c7d1',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data                : [65, 59, 80, 81, 56, 55, 40, 35, 25, 35, 50, 70]
            },
        ]
        }

        var areaChartOptions = {
        maintainAspectRatio : false,
        responsive : true,
        legend: {
            display: false
        },
        scales: {
            xAxes: [{
            gridLines : {
                display : false,
            }
            }],
            yAxes: [{
            gridLines : {
                display : false,
            }
            }]
        },
        title: {
            display: true,
            text: 'Bénéfice et dépense mensuels'
        }
        }

        // This will get the first returned node in the jQuery collection.
        var areaChart = new Chart($('#line-chart').get(0).getContext('2d'), {
        type: 'bar',
        data: areaChartData,
        options: areaChartOptions
        })
    })
</script>

</body>
</html>
