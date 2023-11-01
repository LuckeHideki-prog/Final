@extends('layouts.main')

@section('title', 'Calendário')

@section('content')
<!doctype html>
<html lang="pt">

<head>
    <script src="resources\js\fullcalendar.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.7.2/main.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.7.2/main.min.js"></script>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.5.1/fullcalendar.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.5.1/fullcalendar.min.js"></script>
</head>
<body>
<div class="container"><p><h1> </h1></p>
    <div class="panel panel-primary">
        <div class="panel-heading">
        </div>
        <div class="panel-body" >
            <div id='calendar'></div>
        </div>
    </div>
</div>
</body>
<script>
    $(document).ready(function () {
        var calendar = $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,basicWeek,basicDay'
            },
            navLinks: true,
            editable: true,
            events: "getevent",
            displayEventTime: false,
            eventRender: function (event, element, view) {
                if (event.allDay === 'true') {
                    event.allDay = true;
                } else {
                    event.allDay = false;
                }
            },
        selectable: true,
        selectHelper: true,
        select: function (start, end, allDay) {
            var title = prompt('Event Title:');
            if (title) {
                var start = moment(start, 'DD.MM.YYYY').format('YYYY-MM-DD');
                var end = moment(end, 'DD.MM.YYYY').format('YYYY-MM-DD');
                $.ajax({
                    url: "{{ URL::to('createevent') }}",
                    data: 'title=' + title + '&start=' + start + '&end=' + end +'&_token=' +"{{ csrf_token() }}",
                    type: "post",
                    success: function (data) {
                        alert("Added Successfully");
                        $('#calendar').fullCalendar('refetchEvents');
                    }
                });
            }
        },
        eventClick: function (event) {
            var deleteMsg = confirm("Do you really want to delete?");
            if (deleteMsg) {
               $.ajax({
                    type: "POST",
                    url: "{{ URL::to('deleteevent') }}",
                    data: "&id=" + event.id+'&_token=' +"{{ csrf_token() }}",
                    success: function (response) {
                        if(parseInt(response) > 0) {
                            $('#calendar').fullCalendar('removeEvents', event.id);
                            alert("Deleted Successfully");
                        }
                    }
                });
            }
        }
        });
    });
</script>

</html>

@endsection
