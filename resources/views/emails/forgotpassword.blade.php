<html>
    <head>
        <title>Register Email</title>
    </head>
    <body>
        <table>
            <tr>
                <td>Dear {{ $name}}!</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>Your account has been successfully updated.<br>
                Your account information is as below</td>
            </tr>
            <tr>
                <td>email: {{$email}}</td>
            </tr>
            <tr>
                <td>Password: {{$password}} (as choosen by you)</td>
            </tr>
            <tr>Thanks and Regards,</tr>
        </table>
    </body>
</html>