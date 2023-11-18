<!DOCTYPE html>
<html>

<head>
    <!-- css add -->
    <base href="/public" />>
    @include("controll.homecss");
    <style>
    img {
        width: 100px;
        height: 100px;
    }
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
        <div class="post-page">
            @if(session()->has("message"))

            <div class="alert alert-success">

                <button type="button" class="clode" data-dismiss="alert" aria-hidden="true">Success</button>
                {{session()->get("message")}}
            
            </div>
            @endif

            <form action="{{url('/update',$data->id)}}" method="POST" enctype='multipart/form-data'>
                @csrf
                <label for="fname">Post title:</label><br>
                <input type="text" name="title" value="{{$data->title}}"><br>
                <label for="lname">Post Des:</label><br>
                <input type="text" name="des" value="{{$data->des}}"><br><br>
                <label>Old Image:</label><br>
                <img src="/storeimg/{{$data->image}}" alt=""><br>
                <label for="fname">Choose Image:</label><br>
                <input type="file" name="image"><br>

                <input type="submit" value="Submit">
            </form>


        </div>
        @include("controll.footer");
</body>

</html>

<!-- Sidebar Navigation end-->