<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style type="text/css">

        .div_center
        {
            text-align: center;
            padding-top: 40px;
        }
        .font_size
        {
            font-size: 30px;
            padding-bottom: 40px;
        }
        .text_color
        {
            color: black;
            padding-bottom:20px;
        }
        label
        {
             display: inline-block;
             width:200px;
        }
        .div_design
        {
            padding-bottom: 15px;
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

            @if (session()->has('message'))

            <div class ="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> x </button>
                {{session()->get('message')}}
            </div>
                
            @endif

            <div class="div_center">
            <h1 class="font_size">Add Products</h1>

            <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">

                @csrf
             
            <div class="div_design">
            <label> Product title :</label>
            <input class="text_color" type="text" name="title" placeholder="title" required="">
            </div>

            <div class="div_design">
            <label> Product description :</label>
            <input class="text_color" type="text" name="description" placeholder="description" required="">
            </div>

            <div class="div_design">
            <label> Product price :</label>
            <input class="text_color" type="number" name="price" placeholder="price" required="">
            </div>

            <div class="div_design">
            <label> Discount price :</label>
            <input class="text_color" type="number" name="dis_price" placeholder="discount price">
            </div>

            <div class="div_design">
            <label> Product quantity:</label>
            <input class="text_color" type="number" name="quantity" min="0" placeholder="qunatity" required="">
            </div>

            <div class="div_design">
            <label> Product category :</label>
            <select class="text_color" name="category" required="">
                <option value="" selected="">Add a category here</option>

                @foreach ($category as $category)
                    
                
                <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                @endforeach
            </select>
            </div>

            <div class="div_design">
            <label> Product image here :</label>
            <input type="file" name="image" required="">
            </div>

            

            <div class="div_design">
                <input type="submit" value="Add product" class="btn btn-primary" >
            </div>


            </div>
        </form>

        </div> 
      </div>
    </div>
      
      @include('admin.script')
  </body>
</html>