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
                <p><input type="submit" value="Login" onclick="formSubmit()"/></p>
           </p>
        </div> 

</form>

</body>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>

<script>

    $(document).ready(function() {
    });

    function formSubmit() {
        var jsonRequestBody = $("loginForm").serialize();
        var responseData = $.post("/api", jsonRequestBody)
            .done(function( data ) {
                console.log( "Data Loaded: " + data );
                // Handle login success
                location.href = "/welcome";
            });

        responseData.fail(function() {
            // Handle login failure
            location.href = "/register";
        });
//        $.ajax({
//            type:"POST",
//            url:"/api",
//            data:$("loginForm").serialize(),
//            cache: false,
//            dataType: 'JSON',
//            statusCode:
//            {
//                200: function()
//                {
//                    alert('success');
//                    location.href= "/welcome"
//                },
//                401: function()
//                {
//                    alert('unauthorized user');
//                    location.href="/register"
//                }
//                //404: function()
//                //{
//                  //  alert( "page not found" );
//                //}
//            }
//        });
    }
</script>

</html>