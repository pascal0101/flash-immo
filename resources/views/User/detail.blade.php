
@extends('UserLayouts.index')

@section('content')
<div class="sub-banner overview-bgi">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Properties Detail</h1>
                <ul class="breadcrumbs">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Properties Detail</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Properties details page start -->
<div class="properties-details-page content-area">
    <div class="container">
        <div class="row mb-50">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <!-- Header -->
                <div class="heading-properties clearfix sidebar-widget">
                    <div class="pull-left">
                        <h3>Sweet Family Home</h3>
                        <p>
                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                        </p>
                    </div>
                    <div class="pull-right">
                        <h3><span>$362,100</span></h3>
                        <h5>
                            Per Manth
                        </h5>
                    </div>
                </div>
                <!-- Properties details section start -->
                <div class="sidebar-widget mb-40">
                    <!-- Properties detail slider start -->
                    <div class="properties-detail-slider simple-slider mb-40">
                        <div id="carousel-custom" class="carousel slide" data-ride="carousel">
                            <div class="carousel-outer">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item">
                                        <img src="TemplateUser/the-nest/img/properties/properties-1.jpg" class="thumb-preview" alt="Chevrolet Impala">
                                    </div>
                                    <div class="item">
                                        <img src="TemplateUser/the-nest/img/properties/properties-3.jpg" class="thumb-preview" alt="Chevrolet Impala">
                                    </div>
                                    <div class="item">
                                        <img src="TemplateUser/the-nest/img/properties/properties-4.jpg" class="thumb-preview" alt="Chevrolet Impala">
                                    </div>
                                    <div class="item">
                                        <img src="TemplateUser/the-nest/img/properties/properties-5.jpg" class="thumb-preview" alt="Chevrolet Impala">
                                    </div>
                                    <div class="item">
                                        <img src="TemplateUser/the-nest/img/properties/properties-6.jpg" class="thumb-preview" alt="Chevrolet Impala">
                                    </div>
                                    <div class="item">
                                        <img src="TemplateUser/the-nest/img/properties/properties-7.jpg" class="thumb-preview" alt="Chevrolet Impala">
                                    </div>
                                    <div class="item">
                                        <img src="TemplateUser/the-nest/img/properties/properties-8.jpg" class="thumb-preview" alt="Chevrolet Impala">
                                    </div>
                                    <div class="item active">
                                        <img src="TemplateUser/the-nest/img/properties/properties-2.jpg" class="thumb-preview" alt="Chevrolet Impala">
                                    </div>
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
                                    <span class="slider-mover-left no-bg t-slider-r pojison" aria-hidden="true">
                                        <i class="fa fa-angle-left"></i>
                                    </span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
                                    <span class="slider-mover-right no-bg t-slider-l pojison" aria-hidden="true">
                                        <i class="fa fa-angle-right"></i>
                                    </span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!-- Indicators -->
                            <ol class="carousel-indicators thumbs visible-lg visible-md">
                                <li data-target="#carousel-custom" data-slide-to="0" class=""><img src="TemplateUser/the-nest/img/properties/properties-small-1.jpg" alt="Chevrolet Impala"></li>
                                <li data-target="#carousel-custom" data-slide-to="1" class=""><img src="TemplateUser/the-nest/img/properties/properties-small-3.jpg" alt="Chevrolet Impala"></li>
                                <li data-target="#carousel-custom" data-slide-to="2" class=""><img src="TemplateUser/the-nest/img/properties/properties-small-4.jpg" alt="Chevrolet Impala"></li>
                                <li data-target="#carousel-custom" data-slide-to="3" class=""><img src="TemplateUser/the-nest/img/properties/properties-small-5.jpg" alt="Chevrolet Impala"></li>
                                <li data-target="#carousel-custom" data-slide-to="4" class=""><img src="TemplateUser/the-nest/img/properties/properties-small-6.jpg" alt="Chevrolet Impala"></li>
                                <li data-target="#carousel-custom" data-slide-to="5" class=""><img src="TemplateUser/the-nest/img/properties/properties-small-7.jpg" alt="Chevrolet Impala"></li>
                                <li data-target="#carousel-custom" data-slide-to="6" class=""><img src="TemplateUser/the-nest/img/properties/properties-small-8.jpg" alt="Chevrolet Impala"></li>
                                <li data-target="#carousel-custom" data-slide-to="7" class=""><img src="TemplateUser/the-nest/img/properties/properties-small-2.jpg" alt="Chevrolet Impala"></li>
                            </ol>
                        </div>
                    </div>
                    <!-- Properties detail slider end -->

                    <!-- Advanced search start -->
                    <div class="advabced-search hidden-lg hidden-md">
                        <div class="main-title-2">
                            <h1><span>Advanced</span> Search</h1>
                        </div>

                        <form method="GET">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="property-status" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option>Property Status</option>
                                    <option>For Sale</option>
                                    <option>For Rent</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="location" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option>Location</option>
                                    <option>United States</option>
                                    <option>United Kingdom</option>
                                    <option>American Samoa</option>
                                    <option>Belgium</option>
                                    <option>Cameroon</option>
                                    <option>Canada</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <select class="selectpicker search-fields" name="property-types" data-live-search="true" data-live-search-placeholder="Search value" >
                                    <option>Property Types</option>
                                    <option>Residential</option>
                                    <option>Commercial</option>
                                    <option>Land</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <select class="selectpicker search-fields" name="area-from" data-live-search="true" data-live-search-placeholder="Search value" >
                                    <option>Area From</option>
                                    <option>1000</option>
                                    <option>800</option>
                                    <option>600</option>
                                    <option>400</option>
                                    <option>200</option>
                                    <option>100</option>
                                </select>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="bedrooms">
                                            <option>Bedrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="bathroom">
                                            <option>Bathroom</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="balcony">
                                            <option>Balcony</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" data-live-search="true" name="garage">
                                            <option>Garage</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="range-slider">
                                <label>Area</label>
                                <div data-min="0" data-max="10000" data-unit="Sq ft" data-min-name="min_area" data-max-name="max_area" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="range-slider">
                                <label>Price</label>
                                <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="form-group">
                                <button class="search-button">Search</button>
                            </div>
                        </form>
                    </div>
                    <!-- Advanced search end -->

                    <!-- Properties description start -->
                    <div class="properties-description mb-40 ">
                        <div class="main-title-2">
                            <h1><span>Description</span></h1>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra</p>
                        <br>
                        <p>Nam mattis lobortis felis eu blandit. Morbi tellus ligula, interdum sit amet ipsum et, viverra hendrerit lectus. Nunc efficitur sem vel est laoreet, sed bibendum eros viverra. Vestibulum finibus, ligula sed euismod tincidunt, lacus libero lobortis ligula, sit amet molestie ipsum purus ut tortor. Nunc varius, dui et sollicitudin facilisis, erat felis imperdiet felis, et iaculis dui magna vitae diam. Donec mattis diam nisl, quis ullamcorper enim malesuada non. Curabitur lobortis eu mauris nec vestibulum. Nam efficitur, ex ac semper malesuada nisi odio consequat dui, hendrerit vulputate odio dui </p>
                    </div>
                    <!-- Properties description end -->

                    <!-- Properties condition start -->
                    <div class="properties-condition mb-40 ">
                        <div class="main-title-2">
                            <h1><span>Condition</span></h1>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <ul class="condition">
                                    <li>
                                        <i class="flaticon-bed"></i>3 Beds
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>Bathroom
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <ul class="condition">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>4800 sq ft
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i>TV
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <ul class="condition">
                                    <li>
                                        <i class="flaticon-vehicle"></i>1 Garage
                                    </li>
                                    <li>
                                        <i class="flaticon-building"></i>Balcony
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Properties condition end -->

                    <!-- Properties amenities start -->
                    <div class="properties-amenities">
                        <div class="main-title-2">
                            <h1><span>Amenities</span></h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <ul class="amenities">
                                    <li>
                                        <i class="flaticon-air-conditioner"></i>Air conditioning
                                    </li>
                                    <li>
                                        <i class="flaticon-bars"></i>Balcony
                                    </li>
                                    <li>
                                        <i class="flaticon-people-2"></i>Pool
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i>TV
                                    </li>
                                    <li>
                                        <i class="flaticon-weightlifting"></i>Gym
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <ul class="amenities">
                                    <li>
                                        <i class="flaticon-wifi"></i>Wifi
                                    </li>
                                    <li>
                                        <i class="flaticon-transport"></i>Parking
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>Double Bed
                                    </li>
                                    <li>
                                        <i class="flaticon-machine"></i>Iron
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <ul class="amenities">
                                    <li>
                                        <i class="flaticon-old-telephone-ringing"></i>Telephone
                                    </li>
                                    <li>
                                        <i class="flaticon-person-enjoying-jacuzzi-hot-water-bath"></i>Jacuzzi
                                    </li>
                                    <li>
                                        <i class="flaticon-clock"></i>Alarm
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>Garage
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Properties amenities end -->
                </div>
                <!-- Properties details section end -->

                <!-- Floor plans start -->
                <div class="floor-plans sidebar-widget">
                    <div class="main-title-2">
                        <h1><span>Floor Plans</span></h1>
                    </div>
                    <table>
                        <tbody><tr>
                            <td><strong>Size</strong></td>
                            <td><strong>Rooms</strong></td>
                            <td><strong>2 Bathrooms</strong></td>
                        </tr>
                        <tr>
                            <td>1600</td>
                            <td>3</td>
                            <td>2</td>
                        </tr>
                        </tbody>
                    </table>
                   
                </div>
                <!-- Floor plans end -->

                <!-- Location start -->
                <div class="location sidebar-widget">
                    <div class="map">
                        <div class="main-title-2">
                            <h1><span>Location</span></h1>
                        </div>
                        <div id="map" class="contact-map"></div>
                    </div>
                </div>
                <!-- Location end -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <!-- Sidebar start -->
                <div class="sidebar right">
                    <!-- Search contents sidebar start -->
                    <div class="sidebar-widget hidden-sm hidden-xs">
                        <div class="main-title-2">
                            <h1><span>Advanced</span> Search</h1>
                        </div>

                        <form method="GET">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="property-status" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option>Property Status</option>
                                    <option>For Sale</option>
                                    <option>For Rent</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="location" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option>Location</option>
                                    <option>United States</option>
                                    <option>United Kingdom</option>
                                    <option>American Samoa</option>
                                    <option>Belgium</option>
                                    <option>Cameroon</option>
                                    <option>Canada</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <select class="selectpicker search-fields" name="property-types" data-live-search="true" data-live-search-placeholder="Search value" >
                                    <option>Property Types</option>
                                    <option>Residential</option>
                                    <option>Commercial</option>
                                    <option>Land</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <select class="selectpicker search-fields" name="area-from" data-live-search="true" data-live-search-placeholder="Search value" >
                                    <option>Area From</option>
                                    <option>1000</option>
                                    <option>800</option>
                                    <option>600</option>
                                    <option>400</option>
                                    <option>200</option>
                                    <option>100</option>
                                </select>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="bedrooms">
                                            <option>Bedrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="bathroom">
                                            <option>Bathroom</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="balcony">
                                            <option>Balcony</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" data-live-search="true" name="garage">
                                            <option>Garage</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="range-slider">
                                <label>Area</label>
                                <div data-min="0" data-max="10000" data-unit="Sq ft" data-min-name="min_area" data-max-name="max_area" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="range-slider">
                                <label>Price</label>
                                <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="form-group mb-0">
                                <button class="search-button">Search</button>
                            </div>
                        </form>
                    </div>
                    <!-- Search contents sidebar end -->

                    <!-- Social media start -->
                    <div class="social-media sidebar-widget clearfix">
                        <!-- Main Title 2 -->
                        <div class="main-title-2">
                            <h1><span>Social</span> Media</h1>
                        </div>
                        <!-- Social list -->
                        <ul class="social-list">
                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="rss-bg"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>

                    <!-- Inside properties start  -->
                    <div class="inside-properties sidebar-widget">
                        <!-- Main Title 2 -->
                        <div class="main-title-2">
                            <h1><span>Property</span> Video</h1>
                        </div>
                        <iframe src="https://www.youtube.com/embed/5e0LxrLSzok" allowfullscreen=""></iframe>
                    </div>

                    <!-- Helping center start -->
                    <div class="sidebar-widget helping-box clearfix">
                        <div class="main-title-2">
                            <h1><span>Helping</span> Center</h1>
                        </div>
                        <div class="helping-center">
                            <div class="icon"><i class="fa fa-map-marker"></i></div>
                            <h4>Address</h4>
                            <span>123 Kathal St. Tampa City,</span>
                        </div>
                        <div class="helping-center">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <h4>Phone</h4>
                            <p><a href="tel:+55-417-634-7071">+55 417 634 7071</a> </p>
                        </div>
                    </div>

                    <!-- Mortgage calculator start -->
                    <div class="sidebar-widget contact-1 mortgage-calculator">
                        <div class="main-title-2">
                            <h1><span>Mortgage</span> Calculator</h1>
                        </div>
                        <div class="contact-form">
                            <form id="agent_form" action="https://storage.googleapis.com/themevessel-products/the-nest/index.html" method="GET" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Property Price</label>
                                            <input type="text" class="input-text" placeholder="$87.000">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Interest Rate (%)</label>
                                            <input type="text" class="input-text" placeholder="10%">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Period In Months</label>
                                            <input type="text" class="input-text" placeholder="10 Months">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Down Payment</label>
                                            <input type="text" class="input-text" placeholder="$36,300">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-0">
                                            <button class="search-button">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <!-- Latest tweet start -->
                    <div class="sidebar-widget latest-tweet">
                        <div class="main-title-2">
                            <h1><span>Latest</span> Tweet</h1>
                        </div>
                        <p><a href="#">@Lorem ipsum dolor</a> sit amet, consectetur adipiscing elit. Aenean id dignissim justo. Maecenas urna lacus, bibendum </p>
                        <p>@Lorem ipsum dolor<a href="#">sit amet, consectetur</a> adipiscing elit. Aenean id dignissim justo. Maecenas urna lacus, bibendum quis orci </p>
                    </div>
                </div>
                <!-- Sidebar end -->
            </div>
        </div>

        <div class="main-title-2">
            <h1><span>Related Properties</span></h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <!-- Property 2 start -->
                <div class="property-2">
                    <!-- Property img -->
                    <div class="property-img">
                        <div class="featured">
                            Featured
                        </div>
                        <div class="price-ratings">
                            <div class="price">$150,000</div>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                        <img src="TemplateUser/the-nest/img/properties/properties-4.jpg" alt="rp" class="img-responsive">
                        <div class="property-overlay">
                            <a href="properties-details.html" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Lexus GS F">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="TemplateUser/the-nest/img/properties/properties-4.jpg" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="TemplateUser/the-nest/img/properties/properties-2.jpg" class="hidden"></a>
                                <a href="TemplateUser/the-nest/img/properties/properties-3.jpg" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <!-- content -->
                    <div class="content">
                        <!-- title -->
                        <h4 class="title">
                            <a href="properties-details.html">Big Head House</a>
                        </h4>
                        <!-- Property address -->
                        <h3 class="property-address">
                            <a href="properties-details.html">
                                <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                            </a>
                        </h3>
                    </div>
                    <!-- Facilities List -->
                    <ul class="facilities-list clearfix">
                        <li>
                            <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                            <span>4800 sq ft</span>
                        </li>
                        <li>
                            <i class="flaticon-bed"></i>
                            <span>3</span>
                        </li>
                        <li>
                            <i class="flaticon-holidays"></i>
                            <span>2</span>
                        </li>
                        <li>
                            <i class="flaticon-vehicle"></i>
                            <span>1</span>
                        </li>
                    </ul>
                </div>
                <!-- Property 2 end -->
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <!-- Property 2 start -->
                <div class="property-2">
                    <!-- Property img -->
                    <div class="property-img">
                        <div class="featured">
                            Featured
                        </div>
                        <div class="price-ratings">
                            <div class="price">$150,000</div>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                        <img src="TemplateUser/the-nest/img/properties/properties-3.jpg" alt="rp" class="img-responsive">
                        <div class="property-overlay">
                            <a href="properties-details.html" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Lexus GS F">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="TemplateUser/the-nest/img/properties/properties-3.jpg" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="TemplateUser/the-nest/img/properties/properties-2.jpg" class="hidden"></a>
                                <a href="TemplateUser/the-nest/img/properties/properties-5.jpg" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <!-- content -->
                    <div class="content">
                        <!-- title -->
                        <h4 class="title">
                            <a href="properties-details.html">Beautiful Single Home</a>
                        </h4>
                        <!-- Property address -->
                        <h3 class="property-address">
                            <a href="properties-details.html">
                                <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                            </a>
                        </h3>
                    </div>
                    <!-- Facilities List -->
                    <ul class="facilities-list clearfix">
                        <li>
                            <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                            <span>4800 sq ft</span>
                        </li>
                        <li>
                            <i class="flaticon-bed"></i>
                            <span>3</span>
                        </li>
                        <li>
                            <i class="flaticon-holidays"></i>
                            <span>2</span>
                        </li>
                        <li>
                            <i class="flaticon-vehicle"></i>
                            <span>1</span>
                        </li>
                    </ul>
                </div>
                <!-- Property 2 end -->
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <!-- Property 2 start -->
                <div class="property-2">
                    <!-- Property img -->
                    <div class="property-img">
                        <div class="featured">
                            Featured
                        </div>
                        <div class="price-ratings">
                            <div class="price">$150,000</div>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                        <img src="TemplateUser/the-nest/img/properties/properties-2.jpg" alt="rp" class="img-responsive">
                        <div class="property-overlay">
                            <a href="properties-details.html" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Lexus GS F">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="TemplateUser/the-nest/img/properties/properties-2.jpg" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="TemplateUser/the-nest/img/properties/properties-1.jpg" class="hidden"></a>
                                <a href="TemplateUser/the-nest/img/properties/properties-5.jpg" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <!-- content -->
                    <div class="content">
                        <!-- title -->
                        <h4 class="title">
                            <a href="properties-details.html">Park Avenue</a>
                        </h4>
                        <!-- Property address -->
                        <h3 class="property-address">
                            <a href="properties-details.html">
                                <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                            </a>
                        </h3>
                    </div>
                    <!-- Facilities List -->
                    <ul class="facilities-list clearfix">
                        <li>
                            <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                            <span>4800 sq ft</span>
                        </li>
                        <li>
                            <i class="flaticon-bed"></i>
                            <span>3</span>
                        </li>
                        <li>
                            <i class="flaticon-holidays"></i>
                            <span>2</span>
                        </li>
                        <li>
                            <i class="flaticon-vehicle"></i>
                            <span>1</span>
                        </li>
                    </ul>
                </div>
                <!-- Property 2 end -->
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <!-- Property 2 start -->
                <div class="property-2">
                    <!-- Property img -->
                    <div class="property-img">
                        <div class="featured">
                            Featured
                        </div>
                        <div class="price-ratings">
                            <div class="price">$150,000</div>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                        <img src="TemplateUser/the-nest/img/properties/properties-1.jpg" alt="rp" class="img-responsive">
                        <div class="property-overlay">
                            <a href="properties-details.html" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Lexus GS F">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="TemplateUser/the-nest/img/properties/properties-1.jpg" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="TemplateUser/the-nest/img/properties/properties-2.jpg" class="hidden"></a>
                                <a href="TemplateUser/the-nest/img/properties/properties-5.jpg" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <!-- content -->
                    <div class="content">
                        <!-- title -->
                        <h4 class="title">
                            <a href="properties-details.html">Sweet Family Home</a>
                        </h4>
                        <!-- Property address -->
                        <h3 class="property-address">
                            <a href="properties-details.html">
                                <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                            </a>
                        </h3>
                    </div>
                    <!-- Facilities List -->
                    <ul class="facilities-list clearfix">
                        <li>
                            <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                            <span>4800 sq ft</span>
                        </li>
                        <li>
                            <i class="flaticon-bed"></i>
                            <span>3</span>
                        </li>
                        <li>
                            <i class="flaticon-holidays"></i>
                            <span>2</span>
                        </li>
                        <li>
                            <i class="flaticon-vehicle"></i>
                            <span>1</span>
                        </li>
                    </ul>
                </div>
                <!-- Property 2 end -->
            </div>
        </div>
    </div>
</div>
@endsection