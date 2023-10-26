@extends('layouts.main')

@section('content')
<div id="calendar"></div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth' // You can choose the default view
            // Add other configuration options as needed
        });

        calendar.render();
    });
</script>
@endpush
