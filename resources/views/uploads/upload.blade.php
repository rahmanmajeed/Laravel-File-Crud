<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>File Upload</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <br>
    <div class=".col-lg-offset-4 .col-lg-4">
      <center></center>
      <form class="" action="#" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" value="">
        <br>
        <input type="submit" name="" value="Upload">
      </form>
    </div>
  </body>
</html>
