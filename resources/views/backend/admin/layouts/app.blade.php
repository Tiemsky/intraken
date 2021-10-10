<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    @include('backend.admin.partials.header')
</head>
<body>
    <div id="admin" class="main-wrapper">
         <!-- include sideBar -->
         @include('backend.admin.partials.sideBar')
         <div class="page-wrapper">
             <!--include narbBar -->
             @include('backend.admin.partials.navBar')
             <div class="page-content">
                 @yield('content')
             </div>
         </div>
         
    </div>
    @include('backend.admin.partials.footer')
   
    @include('backend.admin.partials.script')
    
</body>
</html>
