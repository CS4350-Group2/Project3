<?php

namespace Views;


class LoginForm extends View
{
    public function __construct()
    {
        $this->content = <<<LOGIN_FORM

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Example Login Form</title>
    </head>
    <body>
    <!--
        <div align="center">
            <form method="POST" action="/auth">
                Username: <input type="text" name="username" size="15" /><br />
                Password: <input type="password" name="password" size="15" /><br />
                mySQL: <input type="mySQL" name="mySQL" size="15" /><br />
                <p><input type="submit" value="Login" /></p>
            </form>
        </div> -->

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
    }
</script>

LOGIN_FORM;
    }
}
