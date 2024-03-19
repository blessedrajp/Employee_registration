<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" /> 
    <!-- <script src= 
"https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"> 
        </script> 
        <link rel="stylesheet" 
              href= 
"https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.min.css" />  -->
    <!-- icon -->
    <meta name="csrf-token" content="{{csrf_token()}}">
    <script src="https://kit.fontawesome.com/b331d0e423.js" crossorigin="anonymous"></script>
    <title>Registration</title>
    <style>
    input.error {
    border: 1px solid red;
    }

    /* Style for error messages */
    .error-message {
        color: red;
    }

    /* .toggle-password {
    position: relative;
    cursor: pointer;
    } */
    input:focus,input:active{
        border:none;
        outline:none
    }
    </style>
</head>
<body class="bg-light">
    
<!-- header -->
@include('Includes.header')

<!-- content -->
@yield('content')

<!-- footer -->
@include('Includes.footer')


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->
<!-- form validation -->
<!-- cdn -->
<!-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script> -->





</body>
</html>