

<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
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
</head>

<body>
     
    <!-- Topbar Start -->
    @include('home.header')

    {{-- {{$product->title}} --}}
    <div class="col-lg-3 col-md-6 col-sm-12 pb-1" style="margin: auto; width:50%; padding:30px">
        <div class="card product-item border-0 mb-4">
            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                <img class="img-fluid w-100" style= "padding 20px" src="product/{{$product->image}}" alt="">
            </div>
            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                <h6 class="text-truncate mb-3">{{$product->title}}</h6>
                <div class="d-flex justify-content-center">

                    @if ($product->discount_price!=null)
                        
                    <h6 style="white-space: nowrap; color:rgb(243, 47, 128)">Price <br>Rs.{{$product->discount_price}}</h6>

                    <h6 style="text-decoration:line-through; color:rgb(3, 3, 3)"> Price<br>
                        Rs.{{$product->price}}</h6>

                    @else

                    <h6 style="color:rgb(0, 0, 0) ">Price<br> Rs.{{$product->price}}</h6>


                    @endif
    
                </div>
                <h6 > Product Category : {{$product->category}}</h6>
                <h6 > Product Details : {{$product->descritpion}}</h6>
                <h6 > Available Quantity : {{$product->quantity}}</h6>

                {{-- <a href = "{{url('add_cart',$product->id)}}" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a> --}} 

                <form action="{{url('add_cart',$product->id)}}" method="Post">
                    @csrf
                    <div class="row">
                        <div class="">
                            
                            <input type="number" name="quantity" value="1" min="1" style="width: 100px">
                            {{-- <a href = "" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a> --}}

                        </div>
                        <div class="col-md-4"><br><br>
                            <input type="submit" value="Add to cart" >
                        </div>
                    </div> 
                </form>
            </div>
            <div class="card-footer d-flex justify-content-between bg-light border">
                {{-- <a href="{{url('product_details',$product->id)}}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a> --}}
                {{-- <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a> --}}
                
            </div>
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