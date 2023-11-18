<!DOCTYPE html>
<html>

<head>
    <!-- css add -->
    @include("controll.homecss");
    <style type="text/css" >
        .post-page{
            text-align:center;
            font-size:30px;
            font-weight:30px;
        }
  label{
    display:inline-block;
    width:200px;
   

  }
    </style>
</head>

<body>
    @include("controll.header");
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include("controll.nav");
        <!-- Sidebar Navigation end-->
     
        <div  class="post-page">
        
            <!-- <h1 class="post-title"> Add Pos</h1> -->
            <form action="{{url('addpost')}}" method="POST" enctype='multipart/form-data' >
                @csrf
                <label  for="fname">Post title:</label><br>
                <input type="text"  name="title"><br>
                <label for="lname">Post Des:</label><br>
                <input type="text"  name="des"><br><br>
                <label for="fname">Image:</label><br>
                <input type="file"  name="image"><br>
                <input type="submit" value="Submit">
            </form>
        

        </div>
        

        @include("controll.footer");
</body>

</html>