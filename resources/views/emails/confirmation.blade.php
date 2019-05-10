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
                <td>Please click on the link below to activate your account.<br>
                Your account information is as below</td>
            </tr>
            <tr>
                <td><a href="{{ url('confirm/' .$code) }}">Confirm Account</a></td>
            </tr>
            
            <tr><td>Thanks and Regards,</td></tr>
            <tr><td>E-Com Website</td></tr>
        </table>
    </body>
</html>