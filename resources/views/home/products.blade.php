<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .shop_container {
            justify-content: center;
            background-color: #f2f2f2;
            align-items: center;
            height: auto;
            margin: 10px;
            padding-bottom: 10px;
             /* Set your background color */
        }

        
        label {
            color: #e83e8c; /* Set your label color */
            margin-bottom: 8px;
        }

        select {
            padding: 8px;
            margin-bottom: 16px;
        }

        button {
            padding: 10px 20px;
            background-color: #e83e8c; /* Set your button background color */
            color: #ffffff; /* Set your button text color */
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #d32f67; /* Set your button background color on hover */
        }
    </style>
</head>
<body>
<div class="shop_container">
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Best Selling Products</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
    
            @foreach ($product as $product)
                
           
    
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="product/{{$product->image}}" alt="">
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
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="{{url('product_details', $product->id)}}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Details</a>
                       
    
                        <form action="{{url('add_cart',$product->id)}}" method="Post">
                            @csrf
                            <div class="row">
                                <div class="">
                                    
                                    <input type="number" name="quantity" value="1" min="1" style="width: 100px">
                                    {{-- <a href = "" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a> --}}
    
                                </div>
                                <div class="col-md-4">
                                   <input type="submit" style=" background-color: rgb(218, 133, 147); color:#ffffff " value="Add to cart" >
                                </div>
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
            
            @endforeach
            <span style="padding-top: 20px">
    
            {{-- {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}  --}}
            
            </span>
        </div>
    </div>

<div>

</body>
</html>





