<!-- Mainly scripts -->
<script src="resources/js/plugins/fullcalendar_1/moment.min.js"></script>
<script src="resources/js/jquery-3.1.1.min.js"></script>
<script src="resources/js/popper.min.js"></script>
<script src="resources/js/bootstrap.js"></script>
<script src="resources/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="resources/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="resources/js/inspinia.js"></script>
<script src="resources/js/plugins/pace/pace.min.js"></script>

<!-- jQuery UI  -->
<script src="resources/js/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- iCheck -->
<script src="resources/js/plugins/iCheck/icheck.min.js"></script>

<!-- Full Calendar -->
<script src="resources/js/plugins/fullcalendar_1/fullcalendar.min.js"></script>
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