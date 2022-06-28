<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
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
    <h2>REGISTRATION</h2>
    <form method="POST" action="/register">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">First Name:</label>
            <input type="text" name="FIrst Name" placeholder="What's your name?"><br>
        </div>

        <div class="form-group">
            <label for="name">Last Name:</label>
            <input type="text" name="Last Name" placeholder="What's your last name?"><br>
        </div>

        <div class="form-group">
            <label for="name">Birthday:</label>
            <input type="text" name="Birthday" placeholder="What's your birthday?"><br>
        </div>

        <div class="form-group">
            <label for="name">Age:</label>
            <input type="text" name="Age" placeholder="What's your age?"><br>
        </div>

        <div class="form-group">
            <label for="name">Gender:</label>
            <input type="text" name="Gender" placeholder="What's your gender?"><br>
        </div> 

        <div class="form-group">
            <label for="name">Email:</label>
            <input type="text" name="FIrst Name" placeholder="Type your email?"><br>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="text" name="Password" placeholder="Type your password"><br>
        </div>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Register</button>
        </div>




        
        Are you sure you want to logout?
        <a href = "{{ url('logout')}}">Logout</a>
    </form>
    <center> 

</body>
</html>