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

    <style>
        .grid-container {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 10;
            padding: 0;
            display: flex;
            /* grid-template-rows: repeat(3, 3fr);  */
            flex-wrap: wrap;
            gap: 5px;

        justify-content: center;
        align-items: center;
        height: 100%;
    }
            
        

        .recipe-card {
            /* background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden; */
            width: 300px; /* Adjust width as needed */
        height: 400px; /* Adjust height as needed */
        border: 1px solid #ccc; /* Add border for better visibility */
        border-radius: 10px; /* Optional: Add rounded corners */
        padding: 20px; 
        }

        .recipe-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .recipe-card h3 {
            text-align: center;
            margin: 10px 10px;
        }

        .read-more-btn a {
       
        background-color: pink; /* Set background color to pink */
        color: white; /* Set text color to white */
        padding: 10px 11px; /* Add padding to the button */
        /* text-decoration: none; Remove underline */
        border-radius: 5px; /* Optional: Add rounded corners */
        transition: background-color 0.3s ease; /* Add transition for smooth hover effect */
        
    }
    .read-more-btn a:hover {
        background-color: #ff66b3; /* Change background color on hover */
    }

    

        .banner1 {
            background-image: url('img/banner5.jpg');
            background-size: cover;
            background-position: center;
            margin-top: 30px;
            height: 300px; /* Fixed height for the banner */
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #363535;
            font-size: 24px;
            border-top: 1px solid #ccc; /* Add border at the top */
        }

        .banner1_btn {
            padding: 10px 20px;
            background-color: rgb(250, 143, 161);
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 40px;
        }

    </style>
</head>

<body>
     
    <!-- Topbar Start -->
    @include('home.header')


    
                
    <!-- resources/views/recipes/index.blade.php -->


     <div class="grid-container">
    
    <div class="recipe-card">
        <img src="img/cake15new.jpg" alt="Recipe 2">
        <h3>Butter Cake</h3>
        <div class="recipe-details">
           
        </div>
        <div class="read-more-btn" >
             <a href="{{url('recipe_details')}}" class="read-more-btn">Read More</div>
    </div>

    <div class="recipe-card">
        <img src="img/cake15.jpg" alt="Recipe 2">
        <h3>ButterCream Frosting</h3>
        <div class="recipe-details">
           
        </div>
        <div class="read-more-btn" >
             <a href="{{url('recipe_details')}}" class="read-more-btn">Read More</div>
    </div>
    
    <div class="recipe-card">
        <img src="img/cake25nw.jpg" alt="Recipe 2">
        <h3>How to make Fondant</h3>
        <div class="recipe-details">
        
        </div>
        <div class="read-more-btn" >
            <a href="{{url('recipe3')}}" class="read-more-btn">Read More</div>
    </div>

    <div class="recipe-card">
        <img src="img/cake26.jpg" alt="Recipe 2">
        <h3>Birthday Cake</h3>
        <div class="recipe-details">
        </div>
        <div class="read-more-btn" >
            <a href="{{url('recipe_details')}}" class="read-more-btn">Read More</div>
    </div>
    <div class="recipe-card">
        <img src="img/cake12.jpg" alt="Recipe 2">
        <h3>Chocolate Mug Cake</h3>
        <div class="recipe-details">
           
        </div>
        <div class="read-more-btn" >
            <a href="{{url('recipe_details')}}" class="read-more-btn">Read More</div>
    </div>
    <div class="recipe-card">
        <img src="img/cake13.jpg" alt="Recipe 2">
        <h3>Chocolate Lava Cake</h3>
        <div class="recipe-details">
           
        </div>
        <div class="read-more-btn" >
             <a href="{{url('recipe_details')}}" class="read-more-btn">Read More</div>
    </div>
    <div class="recipe-card">
        <img src="img/cake11.jpg" alt="Recipe 2">
        <h3>Butterscotch Cake</h3>
        <div class="recipe-details">
           
        </div>
        <div class="read-more-btn" >
            <a href="{{url('recipe_details')}}" class="read-more-btn">Read More</div>
    </div>
    <div class="recipe-card">
        <img src="img/cake10.jpg" alt="Recipe 2">
        <h3>Blueberry Muffin </h3>
        <div class="recipe-details">
        
        </div>
        <div class="read-more-btn" >
            <a href="{{url('recipe_details')}}" class="read-more-btn">Read More</div>
    </div>

    <div class="recipe-card">
        <img src="img/cake9.jpg" alt="Recipe 2">
        <h3>Blueberry Cake</h3>
        <div class="recipe-details">
        </div>
        <div class="read-more-btn" >
            <a href="{{url('recipe_details')}}" class="read-more-btn">Read More</div>
    </div>
    <div class="recipe-card">
        <img src="img/cake17new.jpg" alt="Recipe 2">
        <h3>Fruit Cake</h3>
        <div class="recipe-details">
           
        </div>
        <div class="read-more-btn" >
            <a href="{{url('recipe2')}}" class="read-more-btn">Read More</div>
    </div>
    <div class="recipe-card">
        <img src="img/cake16.jpg" alt="Recipe 2">
        <h3>Mini Cupcake</h3>
        <div class="recipe-details">
           
        </div>
        <div class="read-more-btn" >
            <a href="{{url('recipe_details')}}" class="read-more-btn">Read More</div>
    </div>
    <div class="recipe-card">
        <img src="img/cake29.jpg" alt="Recipe 2">
        <h3>Cookies</h3>
        <div class="recipe-details">
           
        </div>
        <div class="read-more-btn" >
            <a href="{{url('recipe_details')}}" class="read-more-btn">Read More</div>
    </div>
    <div class="recipe-card">
        <img src="img/cake31.jpg" alt="Recipe 2">
        <h3>Strawberry Milkshake</h3>
        <div class="recipe-details">
           
        </div>
        <div class="read-more-btn" >
            <a href="{{url('recipe_details')}}" class="read-more-btn">Read More</div>
    </div>
    <div class="recipe-card">
        <img src="img/cake32.jpg" alt="Recipe 2">
        <h3>Homemade Ice Cream</h3>
        <div class="recipe-details">
           
        </div>
        <div class="read-more-btn" >
            <a href="{{url('recipe_details')}}" class="read-more-btn">Read More</div>
    </div>
    <div class="recipe-card">
        <img src="img/cake33.jpg" alt="Recipe 2">
        <h3>Croissants</h3>
        <div class="recipe-details">
           
        </div>
        <div class="read-more-btn" >
            <a href="{{url('recipe_details')}}" class="read-more-btn">Read More</div>
    </div>
    
</div>
    <!-- Add more recipe cards as needed -->
    
    {{-- <script>
        function toggleDetails(recipeId) {
            const details = document.querySelector(`.recipe-details-${recipeId}`);
            details.style.display = details.style.display === 'none' ? 'block' : 'none';
        }
    </script> --}}

    <div class="banner1">
        <div>
            
            <h2 style="color:#4e4d4d">Enhance your knowledge from the experts,
                Check out more tutorials and guides..... </h2>
            <a href="https://www.youtube.com/@HowToCakeIt" target="_blank" class="banner1_btn">Watch Now</a>
        </div>
    </div>
   
            
          
  

    


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
