<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cropper</title>
  <link rel="stylesheet" href="cropper.css">
  <script src="jquery.js"></script>
  <script src="cropper.js"></script>
  <script src="default.js"></script>
  <style>
    .container {
      max-width: 960px;
    }
    img {
      max-width: 100%;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1 class="page-header">Cropper with full crop box</h1>
    <div id="image-container">
    </div>

    <form method="post" action="crop.php" enctype="multipart/form-data">
        <input type="hidden" name="y" id="y" />
        <input type="hidden" name="x" id="x" />
        <input type="hidden" name="w" id="w" />
        <input type="hidden" name="h" id="h" />
        <input type="file" name="image" id="image-file" />

        <button type="submit">Salvar</button>
    </form>
  </div>

  <!-- Scripts -->

</body>
</html>