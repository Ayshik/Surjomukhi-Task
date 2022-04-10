<html>
    <head>
    <meta charset="utf-8" />
        <title>Pet World-BD Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="images/logo.png">

    
    </head>
    <body class="authentication-bg authentication-bg-pattern d-flex align-items-center">

   
    @include('header.login_header') 
     
            @yield('content')
       

 <!-- news feed js from here -->
    <!-- Vendor js -->
        <script src="panel_assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="panel_assets/js/app.min.js"></script>
    </body>
   
</html>