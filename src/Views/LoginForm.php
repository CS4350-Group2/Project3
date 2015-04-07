<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Example Login Form</title>
    </head>
    <body>
    
        <div align="center" id="loginForm">
            <p>
                Username: <input type="text" name="username" size="15" /><br />
                Password: <input type="password" name="password" size="15" /><br />
                <p><input type="submit" value="Login" onclick="formSubmit"/></p>
           </p>
        </div> 

</form>
</body>
</html>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>

<script>
    function formSubmit() {
        $.post('/login/', $("#loginForm").serialize()).done(function (data) {
        
          alert(data);
        });
        $.ajax({
            type:"POST",
            url:"/api",
            data:data,
            cache: false,
            dataType: 'JSON',
            statusCode:
            {
                200: function()
                {
                    alert('success');
                    location.href= "/profile"
                },
                401: function()
                {
                    alert('unauthorized user');
                    location.href="/register", name, password
                }
            }
        });
    }
</script>

