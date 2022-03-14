<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Blog Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/">
    <script src="<?php echo URLROOT?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <link href="<?php echo URLROOT?>node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    

    <!-- Bootstrap core CSS -->


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

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" 
    rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo URLROOT;?>css/style.css" rel="stylesheet">
  </head>
  <body>
    
<div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="link-secondary" href="writeBlog">Write Blog</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">Welcome User <?php //echo $_SESSION['user'];?></a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="link-secondary" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" 
          stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
          class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" 
          cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
      </div>
    </div>
  </header>
</div>

<main class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly 
        and efficiently about whats most interesting in this posts contents.</p>
      <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
    </div>
  </div>
  <div class="row mb-2">
    <?php echo '<div class="row mb-2">';
    foreach($data as $key=>$value) {
      $blogId=$data[$key]->BlogID;
      $blogTitle=$data[$key]->Blog_Title;
      $blogImage=$data[$key]->Blog_image;
      $blogCategory=$data[$key]->Blog_category;
      $blogTags=$data[$key]->Blog_tags;
      $blog_time=$data[$key]->Blog_time;
      $blog_description=$data[$key]->Blog_Description;

      echo '<div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">'.$blogTitle.'</strong>
          <h3 class="mb-0">Featured post</h3>
          <div class="mb-1 text-muted">'.$blog_time.'</div>
          <p class="card-text mb-auto">'.$blog_description.'</p>
        </div>
        </div>
        </div>';
      }
    echo "</div>";
?>
  
</main>

<footer class="blog-footer">
  <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by 
    <a href="https://twitter.com/mdo">@mdo</a>.</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>


    
  </body>
</html>