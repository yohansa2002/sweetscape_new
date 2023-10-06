<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Best Selling Products</span></h2>
    </div>
    <div class="row px-xl-5 pb-3">

        @foreach ($product as $products)
            
       

        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="product/{{$products->image}}" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">{{$products->title}}</h6>
                    <div class="d-flex justify-content-center">

                        @if ($products->discount_price!=null)
                            
                        <h6 style="white-space: nowrap; color:rgb(243, 47, 128)">Price <br>Rs.{{$products->discount_price}}</h6>

                        <h6 style="text-decoration:line-through; color:rgb(3, 3, 3)"> Price<br>
                            Rs.{{$products->price}}</h6>

                        @else

                        <h6 style="color:rgb(0, 0, 0) ">Price<br> Rs.{{$products->price}}</h6>


                        @endif

                        
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                    {{-- <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a> --}}
                    <form action="{{url('add_cart',$products->id)}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <input type="number" name="quantity" value="1" min="1" style="width: 100px">

                            </div>
                            <div class="col-md-4"><br><br>



                                <input type="submit" value="Add to cart" >

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        @endforeach
        <span style="padding-top: 20px">

        {!!$product->withQueryString()->links('pagination::bootstrap-5')!!} 
        
        </span>
    </div>
</div>