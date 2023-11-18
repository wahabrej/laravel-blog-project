<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
  <base href="/public"/>>
    <!-- css part start -->
    @include("home.homecss");
</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        <!-- header section start -->

        @include("home.header");
      
    </div>
   
    <!-- blog section start -->
    <div class="services_section_2">
            <div class="row">
                
                <div class="col-md-4">
                    <div><img style="width:200px;height:200px" src="storeimg/{{$data->image}}" class="services_img"></div>
                  <div>
                  <p>{{$data->des}}</p>
                    <h4>Post By <b>{{$data->title}}</b></h4>
                  </div>
                   
                  
                  
                    <!-- <div class="btn_main"><a  href="{{url('postdetail',$data->id)}}">Read More</a></div> -->
                </div>
               
             
            </div>
        </div>
 
    
 
    @include("home.footer");
</body>

</html>