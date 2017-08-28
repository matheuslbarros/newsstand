<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Verify your email address</h2>
        <div>
            Thanks for creating an account in Newsstand.
            Please follow the link below to verify your email address
            <a href="{{ URL::to('verify/' . $confirmation_code) }}">
                {{ URL::to('verify/' . $confirmation_code) }}
            </a>.
        </div>
    </body>
</html>