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
        .textarea-long {
    width: 60%;
    height: 150px; /* Adjust the height as needed */
    margin: 0 auto;
    display: block;
    margin-top: 10px;
    margin-bottom: 10px;
}

.content-wrapper {
    background-color: #3d3a3a; /* Light gray background color */
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
                <h1 class="font_size">Add Recipes</h1>
                <div>
                    <label>Recipe Name:</label>
                    <input type="text" name="recipe_name" class="text_color" placeholder="Recipe Name">
                </div>
    
                <div>
                    <label>Recipe Description:</label>
                    <textarea name="recipe_description" class="text_color textarea-long" placeholder="Recipe Description"></textarea>
                </div>
    
                <div>
                    <label>Recipe Ingredients:</label>
                    <textarea name="recipe_ingredients" class="text_color textarea-long" placeholder="Recipe Ingredients"></textarea>
                </div>
    
                <div>
                    <label>Recipe Instructions:</label>
                    <textarea name="recipe_instructions" class="text_color textarea-long" placeholder="Recipe Instructions"></textarea>
                </div>
                <div>
                <submit class="btn btn-primary btn-lg mt-3">Add Recipe</submit>
                </div>
            </div>
    
        </div>
    </div>
    
        <!-- partial -->
      
      
      @include('admin.script')
  </body>
</html>
