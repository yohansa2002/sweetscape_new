

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
        <img src="img/cake25nw.jpg" alt="Recipe 1">
        <p>
            <h4 style="color:palevioletred">Butter Cake</h4>
           <ul
               <li>
                <h4 style="color:palevioletred">Recipe Description:</h4>
                <p> Fondant is a versatile sugar dough that can be used to cover cakes, create decorations, and mold figures and shapes. It has a smooth, pliable texture that can be rolled out and shaped to create a variety of cake designs. This homemade fondant recipe is made with just a few simple ingredients and is easy to work with, making it perfect for both beginner and experienced bakers. </p>
                
                <h4 style="color:palevioletred">Ingredients</h4>
                <p>    1 package (about 16 ounces) mini marshmallows </p>
                <p>    2 tablespoons water </p>
                <p>    2 pounds (about 8 cups) powdered sugar (also known as confectioners' sugar), sifted </p>
                <p>    Vegetable shortening or powdered sugar for dusting </p>
                <h4 style="color:palevioletred">Instructions</h4>
                <p>       In a microwave-safe bowl, combine the mini marshmallows and water.
                    Microwave the marshmallows in 30-second intervals, stirring in between each interval, until the marshmallows are completely melted and smooth. Be careful not to overheat the marshmallows.
                    Once the marshmallows are melted, gradually add sifted powdered sugar to the bowl, stirring with a spatula or wooden spoon. Continue adding powdered sugar until the mixture becomes too stiff to stir.
                    Turn the mixture out onto a clean work surface dusted with powdered sugar or coated with vegetable shortening to prevent sticking.
                    Knead the fondant mixture like you would knead dough, incorporating more powdered sugar as needed to achieve a smooth, pliable consistency. Keep kneading until the fondant is no longer sticky and has a smooth texture.
                    Once the fondant is smooth and pliable, shape it into a ball and wrap it tightly in plastic wrap. Let the fondant rest at room temperature for at least 30 minutes before using it to cover cakes or create decorations.
                    When ready to use, roll out the fondant on a clean, powdered sugar-dusted surface to the desired thickness and size needed for covering your cake or creating decorations.</p>
                
                    <h4 style="color:palevioletred">Tips to work with Fondant</h4>
                    <p>
                        Keep your work surface and rolling pin dusted with powdered sugar to prevent sticking.
    If the fondant becomes too dry while working with it, you can knead in a small amount of vegetable shortening to soften it.
    To add color to fondant, knead in gel or paste food coloring until the desired shade is achieved. Liquid food coloring can affect the consistency of the fondant.
    Fondant decorations can be made in advance and stored in an airtight container at room temperature until ready to use.</p>
           
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