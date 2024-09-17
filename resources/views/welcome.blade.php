<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
           
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa; 
        }
        .custom-form {
            background-color: pink;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); 
        }
        .custom-btn {
            display: flex;
            justify-content: center;
        }
        .form-control-custom:focus {
    outline: none; 
    border-color: #ccc; 
}

        .form-control-custom {
            width: 100%;
            background-color: #ffe6f2; 
            color: #333; 
            padding: 10px; 
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .form-label {
            font-size: 1.2rem; 
            font-weight: bold;
            color: #333;
        }
        .btn {
            background-color: #FF647F;
            font-size: 20px; 
            font-weight: bold; 
            padding: 10px 50px; 
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #FF92A5;
        }
        @media (max-width: 768px) {
            .custom-form {
                padding: 20px;
            }
            .btn {
                font-size: 16px;
                padding: 8px 40px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="custom-form">
                    <h1 class="text-center">Form Validation</h1>
                    <form action="{{ route('addUser') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input class="form-control-custom @error('username') is-invalid @enderror" placeholder="Enter your name" name="username" value="{{ old('username') }}">
                            <span class="text-danger">
                                @error('username')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input class="form-control-custom @error('useremail') is-invalid @enderror" placeholder="Enter your email" name="useremail" value="{{ old('useremail') }}">
                            <span class="text-danger">
                                @error('useremail')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control-custom @error('password') is-invalid @enderror" placeholder="Enter your password" name="password" value="{{ old('password') }}">
                            <span class="text-danger">
                                @error('password')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input class="form-control-custom @error('phonenumber') is-invalid @enderror" placeholder="Enter your phone number" name="phonenumber" value="{{ old('phonenumber') }}">
                            <span class="text-danger">
                                @error('phonenumber')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Age</label>
                            <input class="form-control-custom @error('userage') is-invalid @enderror" placeholder="Enter your age" name="userage" value="{{ old('userage') }}">
                            <span class="text-danger">
                                @error('userage')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">City</label>
                            <select class="form-control-custom" name="usercity">
                                <option selected>Delhi</option>
                                <option value="mumbai">Mumbai</option>
                                <option value="pune">Pune</option>
                                <option value="dehradun">Dehradun</option>
                            </select>
                        </div>
                        <div class="mb-3">
                        <label  class="form-label">Add your image</label>
                        <input class="form-control-custom @error('imageupload') is-invalid @enderror" type="file"  name="imageupload" value="{{ old('imageupload') }}">
                        <span class="text-danger">
                                @error('imageupload')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="custom-btn">
                            <button type="submit" class="btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
   
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>
