
<html>
<head>
<style>
form {

  padding : 2px;
  color : 00FF66;
  
  
  
} 

    .myButton {
	-moz-box-shadow: 3px 4px 0px 0px #8a2a21;
	-webkit-box-shadow: 3px 4px 0px 0px #8a2a21;
	box-shadow: 3px 4px 0px 0px #8a2a21;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #c62d1f), color-stop(1, #f24437));
	background:-moz-linear-gradient(top, #c62d1f 5%, #f24437 100%);
	background:-webkit-linear-gradient(top, #c62d1f 5%, #f24437 100%);
	background:-o-linear-gradient(top, #c62d1f 5%, #f24437 100%);
	background:-ms-linear-gradient(top, #c62d1f 5%, #f24437 100%);
	background:linear-gradient(to bottom, #c62d1f 5%, #f24437 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#c62d1f', endColorstr='#f24437',GradientType=0);
	background-color:#c62d1f;
	-moz-border-radius:18px;
	-webkit-border-radius:18px;
	border-radius:18px;
	border:1px solid #d02718;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:17px;
	padding:3px 12px;
	text-decoration:none;
	text-shadow:0px 1px 0px #810e05;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f24437), color-stop(1, #c62d1f));
	background:-moz-linear-gradient(top, #f24437 5%, #c62d1f 100%);
	background:-webkit-linear-gradient(top, #f24437 5%, #c62d1f 100%);
	background:-o-linear-gradient(top, #f24437 5%, #c62d1f 100%);
	background:-ms-linear-gradient(top, #f24437 5%, #c62d1f 100%);
	background:linear-gradient(to bottom, #f24437 5%, #c62d1f 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f24437', endColorstr='#c62d1f',GradientType=0);
	background-color:#f24437;
}
.myButton:active {
	position:relative;
	top:1px;
}

.form1{
	
	width:5%;
	
	
	margin: auto;
	padding-top: 6px;
    padding-right: 3px;
    padding-bottom: 6px;
    padding-left: 10px;
	margin-right: 50px;
	margin-top: 80px;
    margin-left: -1080px;
}
.form3{
	float:left;
	margin-right: -750px;
	margin-top: 100px;
    margin-left: 80px;
}
.form6{
	float:right;
	margin-right: -1050px;
	margin-top: -60px;
    margin-left: 80px;
}
.form4{
	
	
	margin-top: 100px;
	margin-right: -1250px;
    margin-left: 0px;
}
 #form5{
	background:none;
	border:none;
	width:20%;
	
	margin-top: -50px;
margin-left: -100px;
margin-right: -720px;
}
#form12{
	float:right;
	cursor:pointer;
	padding : 2px;
}
#form13{
	float:right;
	margin:auto;
}
body{
	
	 margin-top: 100px;
    margin-bottom: 100px;
    margin-right: 150px;
    margin-left: 80px;
}
h3{
	
	color:red;
}
label{
	
	color:white;
}
.login1{
float:right;

background:transparent;
margin-top: -50px;
margin-left: -250px;
margin-right: -120px;

}

.login{
float:right;

background:transparent;
margin-top: -80px;
margin-left: -200px;
margin-right: -120px;

}

.table{
float:left;
background-color:  #000066;

margin-top: -100px;
margin-left: -50px;
margin-right: -120px;
border-radius:20px;

}
h2{
	background:  #000066;
	color:white;
	padding:20px;
	margin-top: -100px;
margin-left: -980px;
margin-right: -682px;
border-radius:20px;
}
.logout{
	float:right;


margin-top: -3px;
margin-left: -100px;
margin-right: -120px;

}
</style>

<center>


<a href="http://localhost:8000/fileuploadform"> <h2>MySharePics</h2></a>




<body>
   

  <form class="login" action="{{route('login_check')}}" method="POST">
  <label>Username:</label><input type="text" name="username" >
  <label>Password:</label><input type="text" name="password">
  <input type="submit" name="submit" value="login">
  
  </form>
  <form class="logout" action="{{route('login_out')}}" method="POST">
 
  <input type="submit" name="submit" value="logout">
  
  </form>
  
  <form class="login1" action="{{route('registration')}} "method="POST"> 
 
 
  <input type="submit" name="submit" value="New Registration">
  
  </form>
  
  
 <form class="form1" action="{{route('add1')}} " method="POST" enctype="multipart/form-data">
     @if($ctr==1)
	 {{"Welcome Mr ".$var->name}}
	 @endif
 
  <h3>Title:</h3><input type="text" name="title">
  <h3>Description:</h3><input type="text" name="description">
  
  <h3>File<h3><input type="file" name="myFile">
  <input type="hidden" @if($ctr==1) value="{{$var->userid}}" @endif name="id">
  <br>
  <input type="submit" name="submit"  class="myButton">
  <img src='p.jpg' style='position:fixed;top:90px;left:390px;width:70%;height:70%;z-index:-1;'>
  </form>
  
 
 <form class="form3" action="{{route('update1')}}" >
<input type="submit" value="update" class="myButton" />
</form> 
 <form class="form4" action = "{{route('destroy1')}}">
<input type="submit" value= "delete" class="myButton" />
</form> 
<form id="form5"  action="{{route('show')}}" >
<input type="submit" value="showall" class="myButton" />
</form>
<form class="form6" action="{{route('select')}}" >
<input type="submit" value="select only one" class="myButton" />
</form> 


</body>
</html>

  
   
  
  
