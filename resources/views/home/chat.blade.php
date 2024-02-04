

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

    .chat_msg {
            margin-top: 20px;
            text-align: center;
            background-color: pink;
            padding: 20px;
            border-radius: 10px;
            max-width: 800px; /* Set a maximum width */
            margin-left: auto;
            margin-right: auto;
            white-space: pre-line; 
            border: 3px solid white;
        }

    .chat_form {
    
            margin:auto;
            width:60%;
            text-align: center;
            margin-top: 30px;
            border: 3px solid white;
    
    }
    
    .chat_main {
            text-align: center;
            background-color: #f2f2f2; /* Set your preferred background color */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
        }
    
         
        .chat_btn {
            padding: 10px;
            background-color: pink;
            color: rgb(92, 91, 91);
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .chat_box{
            padding: 10px;
            width: 80%; /* Adjust the width as needed */
            margin: 10px 0; /* Adjust the margin as needed */
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .chat_h{
            color: rgb(78, 78, 78)
        }
        
        
        


    </style>

</head>

<body>
     
    <!-- Topbar Start -->
    @include('home.header')
                
                
          
   <div class="chat_main">

    <h2 class="chat_h">Have a Question? Ask Now!</h2>

       <form action="/chat" method="POST" class="chat_form">
           @csrf
          <input type="text" name="message" class="chat_box">
          <button type="submit" class="chat_btn">Send</button>
       </form>
       <div class="chat_msg">
           {{  $message }}
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