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
            
        }

        .recipe-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .recipe-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .recipe-card h3 {
            text-align: center;
            margin: 10px 0;
        }
    </style>
</head>

<body>
     
    <!-- Topbar Start -->
    @include('home.header')
                
    <!-- resources/views/recipes/index.blade.php -->


     <div class="grid-container">
       {{-- <div class="grid-item">
            <img src="path/to/recipe1.jpg" alt="Recipe 1">
            <h3>Recipe 1</h3>
        </div>
        <div class="read-more-btn" >
            <a href="" class="read-more-btn">Read More</div>
    </div> --}}
    
    <div class="recipe-card">
        <img src="img/sweet2.jpg" alt="Recipe 2">
        <h3>Chocolate Mug Cake</h3>
        <div class="recipe-details">
           
        </div>
        <div class="read-more-btn" >
             <a href="{{url('recipe_details')}}" class="read-more-btn">Read More</div>
    </div>
    <div class="recipe-card">
        <img src="img/sweet7.jpg" alt="Recipe 2">
        <h3>Chocolate Lava Cake</h3>
        <div class="recipe-details">
           
        </div>
        <div class="read-more-btn" >
             <a href="" class="read-more-btn">Read More</div>
    </div>
    <div class="recipe-card">
        <img src="img/sweet6.jpg" alt="Recipe 2">
        <h3>Blueberry Muffin Pie</h3>
        <div class="recipe-details">
        
        </div>
        <div class="read-more-btn" >
             <a href="" class="read-more-btn">Read More</div>
    </div>

    <div class="recipe-card">
        <img src="img/sweet10.jpg" alt="Recipe 2">
        <h3>Butterscotch Cake</h3>
        <div class="recipe-details">
        </div>
        <div class="read-more-btn" >
             <a href="" class="read-more-btn">Read More</div>
    </div>
    <div class="recipe-card">
        <img src="img/sweet4.jpg" alt="Recipe 2">
        <h3>How to make Macroons</h3>
        <div class="recipe-details">
           
        </div>
        <div class="read-more-btn" >
             <a href="" class="read-more-btn">Read More</div>
    </div>
    
</div>
    <!-- Add more recipe cards as needed -->
    
    {{-- <script>
        function toggleDetails(recipeId) {
            const details = document.querySelector(`.recipe-details-${recipeId}`);
            details.style.display = details.style.display === 'none' ? 'block' : 'none';
        }
    </script> --}}

            
          
  

    


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
