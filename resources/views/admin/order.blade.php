<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style type="text/css">

    .title_deg
    {
        text-align: center;
        padding-top: 40px;
        font-size: 25px;
        font-weight: bold;
        
    }
    .table_deg
    {
        margin:auto;
        width:85%;
        text-align: center;
        margin-top: 30px;
        border: 2px solid white;
    }
    .th_deg
    {
        background-color: rgb(80, 76, 76)

    }
    .img_size
    {
        width: 200px;
        height: 200px;
        padding: 3px;

    }
    

    </style> 
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
      
        <div class="main-panel">
        <div class="content-wrapper">

            <h1 class="title_deg">All Orders</h1>

            <table class="table_deg">
                <tr class ="th_deg">
                    {{-- <th>Order Id</th> --}}
                    <th>Customer Name</th>
                    <th>Customer Phone</th>
                    <th>Customer Email</th>
                    <th>Customer Address</th>
                    <th>Product</th>
                    <th>Qunatity</th>
                    <th>Price</th>
                    <th>Payment Status</th>
                    <th>Delivery Status</th>
                    <th>Image</th>
                    <th>Delivered</th>
                </tr>

                @foreach($order as $order)
                <tr>
                    {{-- <th>Order Id</th> --}}
                    <td>{{$order->name}}</td>
                    <td>{{$order->email}}</td>
                    <td>{{$order->address}}</td>
                    <td>{{$order->phone}}</td>
                    <td>{{$order->product_title}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->price}}</td>
                    <td>{{$order->payment_status}}</td>
                    <td>{{$order->delivery_status}}</td>
                    <td>
                        <img class= "img_size" src = "/product/{{$order->image}}">
                    </td>
                    <td>
                        @if($order->delivery_status == 'processing')
                        <a href="{{url('delivered',$order->id)}}" onclick="return confirm('Are you sure this product is delivered!!')" class="btn btn-primary">Deliver</a>
                        @else 

                        <p style="color : green;"> Delivered </p>

                        @endif
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        </div>
      
      @include('admin.script')
  </body>
</html>
