<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="utf-8">
        <title>SweetScape</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free HTML Templates" name="keywords">
        <meta content="Free HTML Templates" name="description">
    
        <!-- Favicon -->
        <link href="home/img/favicon.ico" rel="icon">
    
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
    
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    
        <!-- Libraries Stylesheet -->
        <link href="home/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    
        <!-- Customized Bootstrap Stylesheet -->
        <link href="home/css/style.css" rel="stylesheet">
    
        <style type="text/css">
            .center
            {
                margin:auto;
                width:50%;
                text-align: center;
                margin-top: 30px;
                border: 3px solid white;
            }

           .contact_main {
            text-align: center;
            background-color: #ecf5f5; /* Set your preferred background color */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
            margin-bottom: 20px;
        }
            .sub_container {
                text-align: center;
                background-color: #ecf5f5; /* Set your preferred background color */
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
            }

            .about_us
            {
                text-align: center;
                color:rgb(172, 134, 140);
                
            }

            .banner {
            background-image: url('img/banner7.jpg');
            background-size: cover;
            background-position: center;
            margin-top: 30px;
            margin-bottom: 30px;
            height: 300px; /* Fixed height for the banner */
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #4e4c4c;
            font-size: 24px;
            border-top: 1px solid #ccc; /* Add border at the top */
        }

        .banner button {
            padding: 10px 20px;
            background-color: rgb(250, 143, 161);
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .banner button:hover {
            background-color: #d6469a;
        }
            
            </style>
    </head>
    
    <body>

        @include('home.header')

            <!-- Page Header Start -->
    <div class="contact_main">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2" style="margin-bottom: 15px"> About us</span></h2>
            <div class="about_us">
                <h5 class="font-weight-semi-bold mb-3">About Sweetscape
                </h5>
                <p >
                    

                    Welcome to Sweetscape, where passion meets sweetness! Established in 2002, Sweetscape has been delighting taste buds since our inception.
                    Our Journey
                    
                    Sweetscape began its journey with a simple goal: to bring joy to every celebration through irresistible cakes, 
                    delectable sweets, and top-quality bakery equipment. Our founders, driven by a love for baking and a commitment
                    to quality, started this venture to create a haven for those who appreciate the artistry and taste of fine desserts. </p>
                    <p>At Sweetscape, we take pride in crafting a diverse range of cakes that cater to every occasion. From elegant wedding
                         cakes to whimsical birthday treats, each creation is a testament to our dedication to perfection. Our sweets 
                         collection extends beyond cakes, 
                        offering a variety of delightful confections that are sure to satisfy your sweet cravings. </p>
                   <p> We look forward 
                   to hearing from you and making your experience with Sweetscape as sweet as can be!</p>
                <div class="d-flex flex-column mb-3">
                    <h5 class="font-weight-semi-bold mb-3">Join Us in Celebration</h5>
                    <p>
                        

                  As we continue to grow, we invite you to join us in celebrating life's sweet moments. 
                  From our kitchen to your table, let Sweetscape be a part of your joyous occasions.
                   Explore our delectable offerings, and let the sweetness unfold! </p>

                  <p> Thank you for choosing Sweetscape, where every bite is a celebration!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="banner">
        <div>
            <h2>The Bake School Community</h2>
            <p>Join our community to get access to exclusive recipes, tips, and more!</p>
            <p>A space for bakers and baking enthusiasts to share and learn from each other.</p>
            <button disabled>Join Now</button> <!-- Disabled button -->
        </div>
    </div>

    <div class="contact_main">
            <div class="text-center mb-4">
                <h2 class="section-title px-5"><span class="px-2">Contact For Any Queries</span></h2>
            </div>
            <div class="row px-xl-5">
                <div class="col-lg-7 mb-5">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control" id="name" placeholder="Your Name"
                                    required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="email" placeholder="Your Email"
                                    required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject"
                                    required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" rows="6" id="message" placeholder="Message"
                                    required="required"
                                    data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button style=" background-color: rgb(250, 143, 161)" type="submit">Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 mb-5">
                    <h5 class="font-weight-semi-bold mb-3">Get in Touch
                    </h5>
                    <p>
                     At Sweetscape, we value the connections we build with our customers. Whether you have a question
                      about our delectable cakes, are seeking advice on choosing the perfect sweets for your event, 
                      or require assistance with bakery equipment, our dedicated team is here to help. Your feedback
                       matters to us, and we welcome any inquiries or suggestions you may have. </p>
                       <p> We look forward 
                       to hearing from you and making your experience with Sweetscape as sweet as can be!</p>
                    {{-- <div class="d-flex flex-column mb-3">
                        <h5 class="font-weight-semi-bold mb-3">Join Us in Celebration</h5>
                        <p>
                            

                      As we continue to grow, we invite you to join us in celebrating life's sweet moments. 
                      From our kitchen to your table, let Sweetscape be a part of your joyous occasions.
                       Explore our delectable offerings, and let the sweetness unfold! </p>

                      <p> Thank you for choosing Sweetscape, where every bite is a celebration!
                        </p>
                    </div>
                    <div class="d-flex flex-column"> --}}
                        <h5 class="font-weight-semi-bold mb-3">SweetScape</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>No 249 - 1/1, Cebel Avenue,Colombo 05. </p>
                        <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@sweetscapecakes.com</p>
                        <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    
    @include('home.location')
    
  
       
    
    
    
    
        <!-- Footer Start -->
        @include('home.footer')
        <!-- Footer End -->
    
    
        <!-- Back to Top -->
        <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    
    
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="home/lib/easing/easing.min.js"></script>
        <script src="home/lib/owlcarousel/owl.carousel.min.js"></script>
    
        <!-- Contact Javascript File -->
        <script src="home/mail/jqBootstrapValidation.min.js"></script>
        <script src="home/mail/contact.js"></script>
    
        <!-- Template Javascript -->
        <script src="home/js/main.js"></script>
    </body>
    
    </html>
   
    