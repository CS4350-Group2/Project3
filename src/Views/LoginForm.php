<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Example Login Form</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </head>

    <body>
    
        <!-- <div align="center" id="loginForm">
            <p>
                Username: <input type="text" name="username" size="15" /><br />
                Password: <input type="password" name="password" size="15" /><br />
                <p><input type="submit" value="Login" onclick="formSubmit()"/></p>
           </p>
        </div>  -->

        <form class="form-inline" id="loginForm">
          <div class="form-group">
            <label for="exampleInputName2">Username: </label>
            <input type="text" class="form-control" id="username" placeholder="username">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail2">Password: </label>
            <input type="email" class="form-control" id="password" placeholder="password">
          </div>
          <button type="submit" class="btn btn-default" onclick="formSubmit">Submit</button>
        </form>

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