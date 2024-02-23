

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
        <img src="img/cake17new.jpg" alt="Recipe 1">
        <p>
            <h4 style="color:palevioletred">Fruit Cake</h4>
           <ul
               <li>
                <h4 style="color:palevioletred">Recipe Description:</h4>
                <p> This fruit cake is a simple, easy, and effortless recipe that's perfect for the holiday season. It's a light and refreshing cake made with mixed dried fruit, applesauce, and warm spices. The best part is that it's a one-bowl recipe that takes just 10 minutes to prepare. So, you can have a cake in the oven in less than 15 minutes. The recipe is versatile and can be adapted to any dried fruit you have on hand. The cake is perfect on its own, but a dollop of whipped cream or a scoop of vanilla ice cream makes it a perfect dessert for any festive occasion.</p>
                
                <h4 style="color:palevioletred">Ingredients</h4>
                <p> 2 cups mixed dried fruit (such as raisins, currants, chopped dates, and chopped apricots)
                <p> 1 cup unsweetened applesauce </p>
                <p>    1 cup granulated sugar </p>
                 <p>   1/2 cup unsalted butter, melted</p>
                    <p>   2 cups all-purpose flour</p>
                        <p> 1 teaspoon baking soda</p>
                            <p>1 teaspoon ground cinnamon</p>
                                <p>    1/2 teaspoon ground nutmeg</p>
                                    <p>    1/2 teaspoon ground cloves</p>
                                        <p>    1/2 teaspoon salt</p>
                                            <p>    1/2 cup chopped nuts (optional)</p>
                <h4 style="color:palevioletred">Instructions</h4>
                <p>       Preheat your oven to 350°F (175°C). Grease and flour a 9x5-inch loaf pan.
                    In a large mixing bowl, combine the dried fruit, applesauce, sugar, and melted butter.
                    In a separate bowl, whisk together the flour, baking soda, cinnamon, nutmeg, cloves, and salt.
                    Gradually add the dry ingredients to the fruit mixture, stirring until well combined. Fold in the chopped nuts, if using.
                    Pour the batter into the prepared loaf pan.
                    Bake for 50-60 minutes, or until a toothpick inserted into the center comes out clean.
                    Let the cake cool in the pan for 10 minutes before transferring it to a wire rack to cool completely.</p>
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