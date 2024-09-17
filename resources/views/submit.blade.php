<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submitted Successfully</title>
    
    <!-- SweetAlert2 Script -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <style>
        .custom-swal {
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    @if (session('success'))
        <script>
            Swal.fire({
                title: 'Success!',
                text: "{{ session('success') }}",
                icon: 'success',
                customClass: {
                    popup: 'custom-swal',  
                },
                confirmButtonText: 'Okay'
            });
        </script>
    @endif
    <h1>form submitted</h1>
</body>
</html>
