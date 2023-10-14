@if (Auth::user()->role == 'Admin')
    <script>
        window.location.href = "/admin";
    </script>
@elseif (Auth::user()->role == 'Teacher')
    <script>
        window.location.href = "/teacher";
    </script>
@elseif (Auth::user()->role == 'Student')
    <script>
        window.location.href = "/student";
    </script>
@endif
