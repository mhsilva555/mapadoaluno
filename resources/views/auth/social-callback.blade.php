<!DOCTYPE html>
<html>
<head>
    <title>Authentication Complete</title>
    <script>
        window.opener.location.href = "{{ route('dashboard') }}";
        window.close();
    </script>
</head>
<body>
    <p>Authentication complete. Closing window...</p>
</body>
</html>
