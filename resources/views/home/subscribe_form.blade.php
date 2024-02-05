<!DOCTYPE html>
<html>
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

    .subs_form {
    
            /* margin:auto;
            width:60%; */
            text-align: left;
            margin-top: 30px;
            margin-top: 20px;
            text-align: center;
            background-color: rgb(238, 212, 216);
            padding: 20px;
            border-radius: 10px;
            max-width: 500px;
            height: 400px;/* Set a maximum width */
            margin-left: auto;
            margin-right: auto;
            /* white-space: pre-line;  */
            border: 3px solid white;
            /* border: 3px solid white; */
    
    }
    
    .subs_container {
            text-align: center;
            background-color: #f2f2f2; /* Set your preferred background color */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
        }
    
         
        .subs_btn {
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

        input {
    width: 100%; /* Make the input boxes take up the full width */
    padding: 10px;
    margin-bottom: 10px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 5px;
}
       




    </style>
</head>

<body>
    
        @include('home.header')
   

        <div class="subs_container">
            @if (session()->has('message'))
    
            <div class ="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> x </button>
                {{session()->get('message')}}
            </div>
        
        @endif

        <form action="{{ route('subscribe') }}" method="POST" class="subs_form">
            @csrf

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" placeholder="Enter your name">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="Enter your email">
            </div>

            <div class="form-group">
                <label for="country">Country:</label>
                <input type="text" name="country" placeholder="Enter your country">
            </div>

            <button type="submit" class="subs_btn">Send</button>
        </form>
    
</div>


    
        @include('home.footer')
    
</body>

</html>
