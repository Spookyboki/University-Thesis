<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Email from website</title>
    </head>
    <body>
        You received a message from: <b>{{ $first_name }} {{ $last_name }}</b> ( {{ $email_address }} )

        <p>
        Country: <b>{{ $country }}</b>
        </p>

        <p>
        Subject: <b>{{ $subject }}</b>
        </p>
    </body>
</html>