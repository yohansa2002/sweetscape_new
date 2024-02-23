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

    <style type ="text/css">
    .center{
        margin: auto;
        width: 50%;
        padding: 30px;
        text-align: center
    }
    table,th,td{
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
    .img_deg
    {
        width:150px;
        height:250px;
    }
    
    .total_deg{
        font-size:28px;
        padding:40px;
        /* background:pink; */
        text-align: center;
    }
    </style>
</head>

<body>
     
    <!-- Topbar Start -->
    @include('home.header')

    @if (session()->has('message'))

            <div class ="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> x </button>
                {{session()->get('message')}}
            </div>
                
    @endif

    

    <div class="center">
        @php
        $totalprice=0; 
        @endphp

        @if(count($cart) > 0)
            <table>
                <tr>
                    <th class="th_deg"></th>
                    <th class="th_deg">Product </th>
                    <th class="th_deg">Quantity</th>
                    <th class="th_deg">Amount</th>
                   
                    <th class="th_deg">Action</th>
                </tr>
                
                @foreach ($cart as $cart)
                <tr>
                    <td><img class="img_deg" src="/product/{{$cart->image}}"></td>
                    <td>{{$cart-> product_title}}</td>
                    <td>{{$cart-> quantity}}</td>
                    <td>LKR {{$cart-> price}}.00  </td>
                    
                    <td><a class ="btn btn-danger" onclick="return confirm ('Are you sure to remove this product ?')" 
                        href ="{{url('remove_cart', $cart->id)}}"> Remove </a></td>
                </tr> 
                @php
                $totalprice = $totalprice+ $cart->price;
                @endphp
                @endforeach
            </table>

@else
<h2> No items in the cart </h2>

        @endif

        <div>
            <h1 class="total_deg"> Total Price: LKR {{$totalprice}}.00</h1>
        </div>
       

        <div>
            <h1 style = " padding-bottom: 15px;"> Procced to Checkout</h1>
            {{-- <a href="{{url('cash_order')}}" class = "btn btn-danger"> Cash On Delivery</a> --}}
            <a href="{{url('checkout')}}" class = "btn btn-danger"> Cash On Delivery</a>
            <a href="{{url('stripe',$totalprice)}}" class = "btn btn-danger"> Pay with Card </a>
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