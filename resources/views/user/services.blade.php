<div class="services_section layout_padding">
    <div class="container">
        <h1 class="services_taital">Post Here </h1>
        <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have
            suffered alteration</p>
        <div class="services_section_2">
            <div class="row">
            @foreach($data as $data)
                <div class="col-md-4">
                    <div><img style="width:200px;height:200px" src="storeimg/{{$data->image}}" class="services_img"></div>
                  <div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quos dolore, molestias impedit itaque est aliquid aut quibusdam eius commodi.</p>
                    <h4>Post By <b>{{$data->title}}</b></h4>
                  </div>
                   
                  
                  
                    <div class="btn_main"><a href="{{url('postdetail',$data->id)}}">Read More</a></div>
                </div>
                @endforeach
             
            </div>
        </div>
    </div>
</div>