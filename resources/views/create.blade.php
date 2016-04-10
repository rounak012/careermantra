@extends('app')
@section('content')
 <form action="{{route('insert')}} " method="POST">
  First name:<br><input type="text" name="firstname"><br>
  Last name:<br><input type="text" name="lastname">
  <input type="submit" name="submit" value="save">
  
</form> 