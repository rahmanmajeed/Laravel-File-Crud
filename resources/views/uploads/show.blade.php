<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
    @foreach ($file as $files)
  <tr>
    <td><img style="width:10%" src="/storage/{{$files->name}}" alt="img"></td>
    <td><a href="{{route('file.edit',$files->id)}}">Edit</a></td>
    </tr>
    @endforeach
  </table>


  </body>
</html>
