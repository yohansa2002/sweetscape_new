

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
            max-width: 600px;
            margin: auto;
            padding: 20px;
        }

        .recipe-details img {
            width: 100%;
            height: auto;
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
        <img src="img/sweet4.jpg" alt="Recipe 1">
        <p>
            Sift together the almond flour and powdered sugar into a bowl. Discard any larger almond pieces that remain in the sieve.
            In a separate mixing bowl, beat the egg whites with an electric mixer on medium speed until foamy.
            Gradually add the granulated sugar to the egg whites while continuing to beat. Increase the mixer speed to high and beat until stiff peaks form. Add food coloring, if desired, and continue mixing until evenly colored.
            Gently fold the sifted almond flour and powdered sugar mixture into the beaten egg whites using a spatula. Be careful not to deflate the mixture, but ensure it is well combined.
            Transfer the batter to a piping bag fitted with a round tip. Pipe small circles onto parchment-lined baking sheets, leaving space between each circle for spreading.
            Tap the baking sheets gently on the counter to release any air bubbles from the batter. Let the piped macarons sit at room temperature for 30-60 minutes, or until a skin forms on the surface and they are no longer sticky to the touch.
            Preheat the oven to 300°F (150°C). Bake the macarons for 15-18 minutes, or until the shells are set and no longer wobbly when gently touched.
            Remove the macarons from the oven and let them cool completely on the baking sheets before carefully removing them.
            2. Prepare the filling:
            
            In a mixing bowl, beat the softened butter until creamy.
            Gradually add the powdered sugar to the butter, mixing until smooth and well combined.
            Add the heavy cream and vanilla extract to the butter mixture, and beat until light and fluffy. Adjust the consistency with more cream if needed.
            3. Assemble the macarons:
            
            Match up the cooled macaron shells in pairs of similar size.
            Transfer the filling to a piping bag fitted with a round tip. Pipe a small amount of filling onto the flat side of one macaron shell, then gently sandwich it with another shell.
            Repeat with the remaining macaron shells and filling.
            Store the assembled macarons in an airtight container in the refrigerator for 24 hours to mature before serving. Bring them to room temperature before serving for the best texture and flavor.
            Enjoy your homemade macarons!
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