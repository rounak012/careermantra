
<html>
<head>
<style>
form input[type=text] {
	
    width: 150px;
    display: block;
    margin-bottom: 10px;
    background-color: yellow;
}

form input[type=button] {
    width: 120px;
    margin-left: 35px;
    display: block;
}
body{
	float:center;
}
</style>
</head>
<body>

<form   action="{{route('registrationsaved')}}" method="post">
  name:<input type="text" name="name"  size="20">
  email id:<input type="text" name="email"  size="20">
  password:<input type="text" name="pwd" size="20"> 
  <input type="submit" value="Register">
</form>

</body>
</html>
