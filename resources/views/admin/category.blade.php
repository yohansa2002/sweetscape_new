<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <Style type="text/css">
    .div_center
    {
        text-align: center;
        padding-top: 40px;
    }
    .h_font
    {
        font-size: 30px;
        padding-bottom: 40px;
    }
    .input_color
    {
        color: black;
    }
    .center
    {
        margin:auto;
        width:50%;
        text-align: center;
        margin-top: 30px;
        border: 3px solid white;
        
    }

    .content-wrapper {
    background-color:  #3d3a3a; /* Light gray background color */
  }
    </Style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
      <div class="main-panel">
         <div class="content-wrapper">

            @if (session()->has('message'))

            <div class ="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> x </button>
                {{session()->get('message')}}
            </div>
                
            @endif

            <div class="div_center">
                <h2 class="h_font">Add category</h2>

                <form action="{{url('/add_category')}}" method="POST">

                    @csrf

                    <input class="input_color" type="text" name="category" placeholder="write category name">
                    <input type="submit" class="btn btn-primary"  name="submit" value="Add category">
                </form>
            </div>

            <table class="center">
     
                <tr>

                    <td>Category name</td>
                    <td>Action</td>
                </tr>

                @foreach ($data as $data )

                <tr>
                    <td>{{$data->category_name}}</td>
                    <td>
                        <a onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger" 
                        href="{{url('delete_category', $data->id)}}">Delete</a>
                    </td>
                </tr>

                @endforeach
            </table>

         </div>
      </div>
        <!-- partial -->
      {{-- @include('admin.body') --}}

      
      @include('admin.script')
  </body>
</html>