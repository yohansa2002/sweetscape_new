

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
        

        .recipe-details {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 700px;
            margin: auto;
            padding: 20px;
            max-height: 600px; /* Adjust the max-height as needed */
            overflow-y: auto;
        }

        .recipe-details img {
            width: 100%;
        height: 300px; /* Fixed height for the image */
        object-fit: cover;
        border-radius: 8px 8px 0 0;
        }

        .recipe-details p {
            text-align: justify;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="detail">
     
    <!-- Topbar Start -->
    @include('home.header')
                
    <div class="recipe-details">
        <img src="img/cake15new.jpg" alt="Recipe 1">
        <p>
            <h4 style="color:palevioletred">Butter Cake</h4>
           <ul
               <li>
                <h4 style="color:palevioletred">Recipe Description:</h4>
                <p>Butter cake is a moist, delicious cake that's easy to make and great for any occasion. This simple recipe is the perfect place to start for a beginner baker. It's a great cake for a birthday, or any day!</p>
                <h4 style="color:palevioletred">Ingredients</h4>
                <p>1 cup unsalted butter, softened</p>
                <p>1 1/2 cups granulated sugar</p>
                <p>2 large eggs</p>
                <p>2 teaspoons vanilla extract</p>
                <p>2 1/4 cups all-purpose flour</p>
                <p>2 1/2 teaspoons baking powder</p>
                <p>1/2 teaspoon salt</p>
                <p>1 cup milk</p>
                <h4 style="color:palevioletred">Instructions</h4>
                <p>    Preheat your oven to 350°F (175°C). Grease and flour a 9x5-inch loaf pan.
                    In a large mixing bowl, cream together the butter and sugar until light and fluffy.
                    Add the eggs one at a time, beating well after each addition. Stir in the vanilla extract.
                    In a separate bowl, sift together the flour, baking powder, and salt.
                    Gradually add the dry ingredients to the butter mixture, alternating with the milk.
                    Pour the batter into the prepared loaf pan.
                    Bake for 50-60 minutes, or until a toothpick inserted into the center comes out clean.
                    Allow the cake to cool in the pan for 10 minutes before transferring it to a wire rack to cool completely.</p>
           </ul>
        </p>

        
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