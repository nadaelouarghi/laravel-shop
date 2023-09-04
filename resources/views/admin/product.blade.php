<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add New Product</title>
    <!-- plugins:css -->
    @include('admin.css');
    <style type="text/css">
    .div_center{
        text-align: center;
        padding-top:40px;
    }
    .font_size{
        font-size :20px;
        padding-bottom: 10px;

    }
    .text-color{
        color:black;
        padding-bottom: 20px
    }
    </style>
    </head>
  <body>
       <div class="container-fluid page-body-wrapper">
        @include('admin.header');
      <div class="main-panel">
            <div class="div_center">
                <h1 class="font_size" >add new product</h1>
                <div>
                    <label for="title"> Product Name </label>
                     <input class="text-color" id="title" type="text" name="title" placeholder="Product Name">
                </div>
                <div>
                    <label for="description"> Product Description </label>
                     <input class="text-color" id="description" type="text" name="description" placeholder="Product Description">
                </div>
                <div>
                    <label for="price"> Product Price </label>
                     <input class="text-color" id="price" type="number" name="price" placeholder="Product Price">
                </div>
                <div>
                    <label for="quantity"> Product Quantity </label>
                     <input class="text-color" id="quantity" type="number" name="qte_stock" placeholder="Quantity in Stock">
                </div>



            </div>
      </div>
       </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.js');
    <!-- End custom js for this page -->
  </body>
</html>

