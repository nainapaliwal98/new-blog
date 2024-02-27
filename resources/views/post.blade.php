<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Post Page</title>
  <style>
    /* CSS for styling */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f0f0f0;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    .post {
      background-color: #fff;
      border-radius: 5px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .post img {
      max-width: 100%;
      height: auto;
    }

    .post-content {
      margin-top: 20px;
    }

    @media only screen and (max-width: 600px) {
      /* CSS for responsiveness */
      .container {
        padding: 10px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>post {{$id}}</h1>
    <div class="post">
      <h2>Another Post Title</h2>
      <img src="https://via.placeholder.com/800x400" alt="Post Image">
      <div class="post-content">
        <p>This is another sample post content. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et enim sit amet metus consectetur convallis. Donec feugiat leo nec justo placerat, et tempus libero facilisis. Integer sodales tincidunt tellus, et euismod dui.</p>
      </div>
    </div>
  </div>

  <script>
    // JavaScript (if needed)
    // This is just a placeholder for any JavaScript functionality you might need
    // No specific functionality is implemented in this example
  </script>
</body>
</html>
