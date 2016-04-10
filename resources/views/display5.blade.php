<html>
<body>
<table>
@foreach($art as $key=>$arts)
<tr>

<td>
{{$arts->email}}
</td>
<td>
{{$arts->pwd}}
</td>
<br>

@endforeach
</body> 
</html>