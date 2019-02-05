<?php include('header.php'); ?>
   
    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(img/page-banner-6.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Enrollment</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="seminars.php">Course</a></li>
                                <li class="breadcrumb-item"><a href="seminars-single.php">Campus clean workshop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Enroll</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
    
    <!--====== CONTACT PART START ======-->
    
    <section id="contact-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="contact-from mt-30">
                        <div class="section-title">
                            <h5>Enrollment Details</h5>
                            <!--<h2>Keep in touch</h2>-->
                        </div> <!-- section title -->
                        <div class="main-form">
                            <form id="info-form" action="" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <input name="nameofcourse" type="text" placeholder="Campus clean workshop" disabled>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <input name="batch" type="text" placeholder="Batch">
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <select name="batch" class="form-control">
                                                <option value="" selected disabled>Select</option>
                                                <option value="1">Batch 1</option>
                                                <option value="2">Batch 2</option>
                                                <option value="3">Batch 3</option>
                                                <option value="4">Batch 4</option>
                                            </select>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <input name="name" type="text" placeholder="Your name">
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <input name="email" type="email" placeholder="Email">
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <input name="phone" type="text" placeholder="Phone">
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <input name="address" type="text" placeholder="Address">
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <input name="city" type="text" placeholder="City">
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <input name="state" type="text" placeholder="State">
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <input name="country" type="text" placeholder="Country">
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <input name="zipcode" type="text" placeholder="Zipcode">
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form">
                                            <button type="submit" class="main-btn">Submit</button>
                                        </div> <!-- singel form -->
                                    </div> 
                                </div> <!-- row -->
                            </form>
                        </div> <!-- main form -->
                    </div> <!--  contact from -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== CONTACT PART ENDS ======-->
   
<?php include('footer.php'); ?>