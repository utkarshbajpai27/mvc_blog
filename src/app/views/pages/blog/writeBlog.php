<?php
session_start();
if (!isset($_SESSION['userId'])) {
    header("location:login");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Write a Blog</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    <link href="<?php echo URLROOT;?>css/style.css" rel="stylesheet">

    

    <!-- Bootstrap core CSS -->
    <link href="<?php echo URLROOT?>node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>
<div class="container-fluid">
    <div class="content" id="blog-content">
    <form action="postBlog" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center display-6 py-3 ">
                Add New POST
            </div>
            <div class="col-md-3 col-sm-3">
                <label for="blogTitle" class="form-label">Blog Title</label>
                <input type="text" name="blogTitle" placeholder="Blog Title" class="form-control" id="blogTitle">
            </div>
            <div class="col-md-3 col-sm-3 py-1 px-5">
                <label for="fileToUpload" class="form-label">Blog Image</label>
                <input type="file" name="fileToUpload" id="fileToUpload">
            </div>
            <div class="col-md-3 col-sm-3">
                <label for="category" class="form-label">Category</label>
                    <select id="inputState" name="category" class="form-select">
                        <option>Electronics</option>
                        <option>Clothing</option>
                    </select>
            </div>
            <div class="col-md-3 col-sm-3">
                <label for="availability" class="form-label">Tag</label>
                <input type="text" name="tags" class="form-control" id="tags">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <label for="blogTitle" class="form-label">Blog Description</label>
                <textarea type="text" name="blogDescription" class="form-control" id="blogDescription"></textarea>
            </div>
        </div>
        <div class="col-12 py-3">
          <button type="submit" name="postBlog" class="btn btn-primary">Post blog</button>
        </div>
    </form>
    </div>
</div>



    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js" 
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
      crossorigin="anonymous">
    </script>
  </body>
</html>