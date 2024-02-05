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
        .text_color{
            color: black;
            padding-bottom:20px;
        }
      </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')

      <div class="main-panel">
        <div class="content-wrapper">

            <div class="div_center">
                
                    <h1 class="font_size"> Add Recipes</h1>
                    <div>

                    <label>Recipe Name: </label>
                    <input type="text" name="recipe_name" class="text_color" 
                     placeholder="Recipe Name" >
                    </div>


                       <div>
                     <label>Recipe Description: </label>
                     <input type="text" name="recipe_name" class="text_color" 
                      placeholder="Recipe Name" >
                      </div>

                      <div>
                      <label>Recipe Ingredients: </label>
                      <input type="text" name="recipe_name" class="text_color" 
                       placeholder="Recipe Name" >
                       <div>
                         
                       <div>
                       <label>Recipe Instructions: </label>
                       <input type="text" name="recipe_name" class="text_color" 
                        placeholder="Recipe Name" >
                       </div>

                       



                    


                </div>

        </div>
      </div>
        <!-- partial -->
      
      
      @include('admin.script')
  </body>
</html>
