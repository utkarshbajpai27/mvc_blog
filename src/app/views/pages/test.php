<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
<form action="testresult" method="POST" enctype="multipart/form-data">
<label for="fileToUpload" class="form-label">Blog Image</label>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <div class="col-12 py-3">
          <button type="submit" name="postBlog" class="btn btn-primary">Post blog</button>
        </div>

        <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
          <h3 class="mb-0">Featured post</h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a 
            natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" 
          role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" 
          focusable="false"><title>Placeholder</title><rect width="100%" height="100%" 
          fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
</form>
</body>
</html>