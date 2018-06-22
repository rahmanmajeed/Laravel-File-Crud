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
    <td>
      <form  action="{{route('file.delete',$files->id)}}" method="post" style="display:inline-block" id="form2" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE" id="form1">
        <input class="btn label-danger" type="submit" value="Delete">
      </form>
    </td>

    </tr>
    @endforeach
  </table>


  </body>
</html>
