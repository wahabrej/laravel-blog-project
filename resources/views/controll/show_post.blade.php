<!DOCTYPE html>
<html>

<head>
    <!-- css add -->
    @include("controll.homecss");
    <style type="text/css">
    .post-page {
        text-align: center;
       
        font-weight: 30px;
    }

    label {
        display: inline-block;
        width: 200px;


    }
    img{
        width:100px;
        height:100px;
    }
    </style>
</head>

<body>
    @include("controll.header");
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include("controll.nav");
        <!-- Sidebar Navigation end-->

        <div class="post-page">

            <h1 class="post-title"> Show Post</h1>
            <table border="2px">
                <tr>
                    <th>Post Title</th>
                    <th>Description</th>
                    
                    <th>Post By</th>
                    <th>User Type</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                @foreach($data as $data)
                <tr>
                    <td>{{$data->title}}</td>
                    <td>{{$data->des}}</td>
                    <td>{{$data->usertype}}</td>
                    <td>{{$data->name}}</td>
                   
                    <td>
                        <img src="storeimg/{{$data->image}} ">
                    </td>
                    <td>
                    <a href="{{url("/delete",$data->id)}}" onclick="return confirm_delete()"  class="btn-btn-secondary" > Delete</a>

                    <a href="{{url("/edit",$data->id)}}"   class="btn-btn-secondary" > Update</a></td>
                </tr>
                @endforeach
                
            </table>

            <script type="text/javascript">
function confirm_delete() {
  return confirm('are you sure?');
}
</script>
        </div>


        @include("controll.footer");
</body>

</html>