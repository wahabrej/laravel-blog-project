<!DOCTYPE html>
<html>

<head>
    <!-- css add -->
    @include("controll.homecss");
    <style>

    </style>
</head>

<body>
    @include("controll.header");
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
       @include("controll.nav");
        <!-- Sidebar Navigation end-->
        <!-- body start  -->


        <!-- body end -->
   @include("controll.body");
        @include("controll.footer");
</body>

</html>