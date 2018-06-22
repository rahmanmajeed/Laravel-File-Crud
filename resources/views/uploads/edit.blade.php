<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>File Upload</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style media="screen">
  .img1{
    width: 20%;
    height: 10%;
  }
</style>
  </head>
  <body>
    <br>
    <div class="col-lg-offset-4 col-lg-4">
      File Upload
      <form class="" action="{{route('file.update',$file->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <img style="width:20%;height:20%" src="/storage/{{$file->name}}" alt="">
        <input type="file" name="image" value="">
        <br>
        <input type="submit" name="" value="update">
      </form>
    </div>
  </body>
</html>
