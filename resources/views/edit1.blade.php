<html>
<body>
<form action="{{route('edit')}}" method="POST" enctype="multipart/form-data">
Select blog id to be updated : 
<select name="id">
@foreach($blog as $key=>$blogs)
  <option value="{{$blogs->id}}" >{{$blogs->id}}</option>
@endforeach
</select> 
title <input type="text" name="title" >
description <textarea name="content"></textarea>
image <input type="file" name="file">
<input type="submit" value="update">
</form>

</body>
</html>