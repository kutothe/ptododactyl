<html>
    <head>
        <title>Test Template View</title>
        <style type="text/css">
            body {font-family: Georgia;}
            h1 {font-style: italic;}
        </style>
    </head>
    <body>
        <h1><?php if (isset($message)) echo $message; ?></h1>
        <p><?php if (isset($derp)) echo $derp; ?></p>
    </body>
</html>
