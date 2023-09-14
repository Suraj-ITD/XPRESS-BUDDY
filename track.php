<?php include("include/header_script.php"); ?>
<?php include("include/header_nav.php"); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white animated slideInRight">Contact</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb animated slideInRight mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">

        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="fw-medium text-uppercase text-primary mb-2">Tracking</p>
                <h1 class="display-5 mb-4">TRACK YOUR SHIPMENT</h1>
            </div>

                <div class="row">
                    <div class="col-lg-8 wow fadeInUp mb-3 formBg" data-wow-delay="0.1s">
                        <div class="row">
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-3">
                                        <div class="form-floating">
                                            <select name="searchSelected" id="searchSelected" class="form-control">
                                                <option value="1" selected="selected">AWB No.</option>
                                                <option value="6">Forwarding No.</option>
                                                <option value="2">Reference No.</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" name="tracking_no" id="myInput" class="form-control" placeholder="Enter Your Tracking No..." required="">
                                            <label for="email">Enter Your Tracking No...</label>
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <button type="submit" id="submit_tracking" class="btn btn-primary py-3 px-5">Track Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>    
            </div>

        </div>


        <div class="row g-5 justify-content-center mb-5 track-result">
            <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-light text-center h-100 p-2">
                    <div class="col-lg-12 col-md-12 col-sm-12 mt-2 track-result track-block" style="display: none;">
                        <div class="accordion tracking-data"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- Contact End -->

<?php include("include/footer.php"); ?>
<?php include("include/footer_script.php"); ?>