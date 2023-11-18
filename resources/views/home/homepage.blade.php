<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->

    <!-- css part start -->
    @include("home.homecss");
</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        <!-- header section start -->

        @include("home.header");
        <!-- banner section start -->
        <!-- banner section end -->
        @include("home.banner");
    </div>
    <!-- header section end -->
    <!-- services section start -->
    @include("home.services");

    <!-- services section end -->
    <!-- about section start -->
    
    <!-- about section end -->
    <!-- blog section start -->
    
    <!-- blog section end -->
    @include("home.about");
    
    <!-- choose section start -->
    <div class="choose_section layout_padding">
        <div class="container">
            <h1 class="choose_taital">Why You Choose Us</h1>
            <p class="choose_text">There are many variations of passages of Lorem Ipsum available, but the majority have
                suffered alteration in some form, by injected humour, or randomised words which don't look even slightly
                believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                embarrassing hidden in the middle of text. All </p>
            <div class="read_bt_1"><a href="#">Read More</a></div>
            <div class="newsletter_box">
                <h1 class="let_text">Let Start Talk with Us</h1>
                <div class="getquote_bt"><a href="#">Get A Quote</a></div>
            </div>
        </div>
    </div>
    <!-- choose section end -->
    <!-- footer section start -->
    @include("home.footer");
</body>

</html>