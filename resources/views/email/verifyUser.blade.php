<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>

<body>
<h2>Welcome to the site {{$user['name']}}</h2>
<br/>
Your registered email-id is {{$user['email']}} , Please click on the below link to verify your email account

Use your phone number ( {{ $user->phone_number }} to login
<br/>
<br>
<a href="{{ route('customer.verify' , $user->verifyUser->token) }}">Verify Email</a>
</body>

</html>