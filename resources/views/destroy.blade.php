<html>
<body>
<form action="{{route('destroy')}}" method="POST">

Select blog id to be deleted : 

<select name="title">
@foreach($blog as $key=>$blogs)
  <option value="{{$blogs->id}}" >{{$blogs->id}}</option>
@endforeach
</select> 
<input type="submit" value="delete">
<form action="{{route('destroy')}}" method="POST">
Select the blog to be deleted :
 <select name="title">
@foreach($blog as $key=>$blogs)
  <option value="{{$blogs->id}}" >{{$blogs->title}}</option>
@endforeach
</select> 
<input type="submit" value="delete">
</form>
</body>
</html>