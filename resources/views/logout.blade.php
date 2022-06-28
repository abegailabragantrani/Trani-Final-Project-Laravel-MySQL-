<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
</head>
<style>
		a{color:#fff;}
		a:hover{background-color:yellow; color:black;}
	</style>
</head>
<body bgcolor="lightpink">
<body>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<center> 
    <h2>LOGIN HERE</h2>
    <form method="POST" action="/register">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary"><a href = "{{ url('usermanagement')}}">login</a></button>
        </div>
        
    </form>
    Don't have account? 
    <a href = "{{ url('login')}}">Register here!</a>
</center> 

</body>
</html>