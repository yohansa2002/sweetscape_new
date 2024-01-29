

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
        table,th,td
        {
            border: 2px solid pink;
            border-collapse: collapse;
            padding:5px;
            
        }
        .th_deg
        {
            font-size:20px;
            padding:5px;
            background:pink;

        }
        </style>
</head>

<body>
     
    <!-- Topbar Start -->
    @include('home.header')

    @if (session()->has('message'))

            <div class ="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> x </button>
                {{session()->get('message')}}
            </div>
                
    @endif
                       
   <div class="center">
    <table>
        <tr>
            <th class="th_deg">Product</th>
            <th class="th_deg">Quantity</th>
            <th class="th_deg">Price</th>
            <th class="th_deg">Payment Status</th>
            <th class="th_deg">Delivery Status</th>
            <th class="th_deg">Cancel</th>

        </tr>
        @foreach ($order as $order )
            
        
        <tr>
            <td>{{$order->product_title}}</td>
            <td>{{$order->quantity}}</td>
            <td>{{$order->price}}</td>
            <td>{{$order->payment_status}}</td>
            <td>{{$order->delivery_status}}</td>
            <td>

               @if ($order->delivery_status == 'processing')
                   
               

                <a onclick="return confirm('Are you sure to caancel this order !!!')" 
                href="{{url('cancel_order', $order->id)}}"  class="btn btn-sm btn-primary">
                <i class="fa fa-times"></a></i></button>

              @else

              <p style="color:red">Not Allowed</p>

              @endif
            </td>
        </tr>
        @endforeach
    </table>


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