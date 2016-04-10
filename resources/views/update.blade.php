<html>
<body>
<form action="{{route('edit', $blog->id)}}" method="POST" enctype="multipart/form-data">
Select blog id to be updated : 

title <input type="text" name="title" value="{{$blog->title}}">
description <textarea name="content">{{$blog->description}}</textarea>
image <input type="file" name="file">
<input type="submit" value="update">
</form>

</body>
</html>