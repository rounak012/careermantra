<html>
<body>
<form action="{{route('select1')}}" method="POST">

Select  id to be selected : 

<select name="id">
@foreach($blog as $key=>$blogs)
  <option value="{{$blogs->id}}" >{{$blogs->id}}</option>
@endforeach

</select> 

<input type="submit" value="print">

</html>
</body>