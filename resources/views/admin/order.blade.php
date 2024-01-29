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
        width: 100px;
        height: 100px;
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

        <div style="padding: 30px; padding-left:600px; ">

            <form action="{{url('search')}}" method="get">

                @csrf

                <input type ="text" style="color: black" name="search" placeholder="Search for something">
                <input type="submit" value="Search" class="btn btn-outline-primary">
            </form>
        </div>

            <table class="table_deg">
                <tr class ="th_deg">
                    {{-- <th>Order Id</th> --}}
                    <th>Customer ID </th>
                    <th>Customer Name</th>
                    <th>Customer Email</th>
                    <th>Customer Address</th>
                    <th>Customer Phone</th>
                    <th>Product</th>
                    <th>Qunatity</th>
                    <th>Price</th>
                    <th>Payment Status</th>
                    <th>Delivery Status</th>
                    <th>Image</th>
                    <th>Delivered</th>
                    <th>Print PDF</th>
                    <th>Send Email</th>
                </tr>

                @forelse($order as $order)
                <tr>
                    {{-- <th>Order Id</th> --}}
                    <td>{{$order->user_id}}</td>
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
                    <td>
                        <a href="" class="btn btn-primary"> Print PDF</a>
                    </td>
                    <td>
                        <a href="{{url('send_email',$order->id)}}" class="btn btn-primary"> Send Email</a>
                    </td>
                </tr>

                @empty

                <tr>
                    <td colspan="16"> No Data Found </td> 
                </tr>

                @endforelse
            </table>
        </div>
        </div>
      
      @include('admin.script')
  </body>
</html>
