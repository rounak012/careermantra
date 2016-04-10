<html>
<body>
<form action="{{route('destroy')}}" method="POST">

Select  id to be deleted : 

<select name="id">
@foreach($blog as $key=>$blogs)
  <option value="{{$blogs->id}}" >{{$blogs->id}}</option>
@endforeach
</select> 
<input type="submit" value="delete">
</form>
<form action="{{route('destroy')}}" method="POST">
Select the image to be deleted :
 <select name="id">
@foreach($blog as $key=>$blogs)
  <option value="{{$blogs->id}}" >{{$blogs->title}}</option>
@endforeach
</select> 
<input type="submit" value="delete">
</form>
</body>
</html>