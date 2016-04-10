<html>
<body>
<table>
@foreach($art as $key=>$arts)
<tr>

<td>
{{$arts->title}}
</td>
<td>
{{$arts->description}}
</td>
<br>
<td>
<img src="uploads\{{$arts->filePath}}">
</td>
</tr>
@endforeach
</body> 
</html>