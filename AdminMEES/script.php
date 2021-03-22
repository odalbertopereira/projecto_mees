<script src="resources/js/plugins/fullcalendar_1/moment.min.js"></script>
<script src="resources/js/jquery-3.1.1.min.js"></script>
<script src="resources/js/popper.min.js"></script>
<script src="resources/js/bootstrap.js"></script>
<script src="resources/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="resources/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!--data tbales js-->
<script src="resources/js/plugins/dataTables/datatables.min.js"></script>
<script src="resources/js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>
<!-- Flot -->
<script src="resources/js/plugins/flot/jquery.flot.js"></script>
<script src="resources/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="resources/js/plugins/flot/jquery.flot.spline.js"></script>
<script src="resources/js/plugins/flot/jquery.flot.resize.js"></script>
<script src="resources/js/plugins/flot/jquery.flot.pie.js"></script>
<!-- Peity -->
<script src="resources/js/plugins/peity/jquery.peity.min.js"></script>
<script src="resources/js/demo/peity-demo.js"></script>
<!-- Custom and plugin javascript -->
<script src="resources/js/inspinia.js"></script>
<script src="resources/js/plugins/pace/pace.min.js"></script>
<!-- jQuery UI -->
<script src="resources/js/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- GITTER -->
<script src="resources/js/plugins/gritter/jquery.gritter.min.js"></script>
<!-- Sparkline -->
<script src="resources/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- Sparkline demo data  -->
<script src="resources/js/demo/sparkline-demo.js"></script>
<!-- ChartJS-->
<script src="resources/js/plugins/chartJs/Chart.min.js"></script>
<!-- Toastr -->
<script src="resources/js/plugins/toastr/toastr.min.js"></script>

<!--<script src="resources/js/plugins/fullcalendar/dist/fullcalendar.min.js"></script>-->
<script src="resources/js/plugins/fullcalendar_1/fullcalendar.min.js"></script>
<script src="resources/js/plugins/fullcalendar_1/moment.min.js"></script>
<!-- Custom and plugin javascript -->
<!-- SUMMERNOTE -->
<script src="resources/js/plugins/summernote/summernote-bs4.js"></script>
<script src="resources/js/funcoes_app/funcoes_v0.1.js"></script>
<script src="resources/js/funcoes_app/funcoes_list_v0.1.js"></script>
<script src="resources/js/funcoes_app/funcoes_delete_v0.1.js"></script>
<script type="text/javascript" src="resources/css/alertifyjs/alertify.js"></script>

<script>
    $(document).ready(function () {

        $('#summernote').summernote();

    });
</script>

<script>
    $(document).ready(function () {
//        setTimeout(function () {
//            toastr.options = {
//                closeButton: true,
//                progressBar: true,
//                showMethod: 'slideDown',
//                timeOut: 4000
//            };
//            toastr.success('MP+', 'Bem Vindo a Administração do site Ministerio Público');
//
//        }, 1300);


        var data1 = [
            [0, 4], [1, 8], [2, 5], [3, 10], [4, 4], [5, 16], [6, 5], [7, 11], [8, 6], [9, 11], [10, 30], [11, 10], [12, 13], [13, 4], [14, 3], [15, 3], [16, 6]
        ];
        var data2 = [
            [0, 1], [1, 0], [2, 2], [3, 0], [4, 1], [5, 3], [6, 1], [7, 5], [8, 2], [9, 3], [10, 2], [11, 1], [12, 0], [13, 2], [14, 8], [15, 0], [16, 0]
        ];
        $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
            data1, data2
        ],
                {
                    series: {
                        lines: {
                            show: false,
                            fill: true
                        },
                        splines: {
                            show: true,
                            tension: 0.4,
                            lineWidth: 1,
                            fill: 0.4
                        },
                        points: {
                            radius: 0,
                            show: true
                        },
                        shadowSize: 2
                    },
                    grid: {
                        hoverable: true,
                        clickable: true,
                        tickColor: "#d5d5d5",
                        borderWidth: 1,
                        color: '#d5d5d5'
                    },
                    colors: ["#1ab394", "#1C84C6"],
                    xaxis: {
                    },
                    yaxis: {
                        ticks: 4
                    },
                    tooltip: false
                }
        );

        var doughnutData = {
            labels: ["App", "Software", "Laptop"],
            datasets: [{
                    data: [300, 50, 100],
                    backgroundColor: ["#a3e1d4", "#dedede", "#9CC3DA"]
                }]
        };


        var doughnutOptions = {
            responsive: false,
            legend: {
                display: false
            }
        };


        var ctx4 = document.getElementById("doughnutChart").getContext("2d");
        new Chart(ctx4, {type: 'doughnut', data: doughnutData, options: doughnutOptions});

        var doughnutData = {
            labels: ["App", "Software", "Laptop"],
            datasets: [{
                    data: [70, 27, 85],
                    backgroundColor: ["#a3e1d4", "#dedede", "#9CC3DA"]
                }]
        };


        var doughnutOptions = {
            responsive: false,
            legend: {
                display: false
            }
        };


        var ctx4 = document.getElementById("doughnutChart2").getContext("2d");
        new Chart(ctx4, {type: 'doughnut', data: doughnutData, options: doughnutOptions});

    });
</script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-4625583-2', 'webapplayers.com');
    ga('send', 'pageview');

</script>
<script>
    $(document).ready(function () {
        $('.dataTables-example').DataTable({
            pageLength: 10,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
//                {extend: ''},
//                {extend: ''},
//                {extend: '', title: ''},
//                {extend: '', title: ''},
//                {extend: '',
//                    customize: function (win) {
//                        $(win.document.body).addClass('white-bg');
//                        $(win.document.body).css('font-size', '10px');
//
//                        $(win.document.body).find('table')
//                                .addClass('compact')
//                                .css('font-size', 'inherit');
//                    }
//                }
            ]

        });

    });

</script>
<script>
    $(document).ready(function () {
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,basicWeek,basicDay'
            },
            defaultDate: new Date($.now()),
            editable: true,
            events: './calendario/loadEvent.php',
            eventLimit: true, // allow "more" link when too many events
            selectable: true,
            selectHelper: true,
            select: function (start, end) {
                $('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
                $('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
                $('#ModalAdd').modal('show');
            },
            eventRender: function (event, element) {
                element.bind('dblclick', function () {
                    $('#ModalEdit #id').val(event.id);
                    $('#ModalEdit #title').val(event.title);
                    $('#ModalEdit #color').val(event.color);
                    $('#ModalEdit').modal('show');
                });
            },
            eventDrop: function (event, delta, revertFunc) { // si changement de position
                edit(event);
            },
            eventResize: function (event, dayDelta, minuteDelta, revertFunc) { // si changement de longueur
                edit(event);
            }
        });
        function edit(event) {
            var start = event.start.format('YYYY-MM-DD HH:mm:ss');
            if (event.end) {
                var end = event.end.format('YYYY-MM-DD HH:mm:ss');
            } else {
                end = start;
            }
            var id = event.id;
            var Event = [];
            Event[0] = id;
            Event[1] = start;
            Event[2] = end;
            $.ajax({
                url: './calendario/editEventDate.php',
                type: "POST",
                data: {Event: Event},
                success: function (rep) {
                    if (rep == 'OK') {
                        alert('Guardado');
                    } else {
                        alert('Não Tens permição para alterar!');
                    }
                }
            });
        }
    });
</script>