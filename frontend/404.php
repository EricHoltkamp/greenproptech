<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404</title>
    <style>
        body,
        html {
            position: relative;
            margin: 0;
            width: 100%;
            height: 100%;
        }
        #error {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            color: #fff;
            font-family: sans-serif;
            max-width: 340px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        #error .message {
            font-size: 16px;
            text-align: center;
        }

        #error .message h1 {
            margin: 0;
            color: lightgrey;
            padding: 0;
            font-size: 11em;
            transition: 0.4s ease-in-out all;
        }

        #error .message h3 {
            color: black;
            font-size: 0.9em;
            font-weight: lighter;
            line-height: 1.1;
        }

        #error .footer {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            width: 100%;
        }

        #error .footer a {
            position: relative;
            flex: 1;
            color: dodgerblue;
            text-decoration: none;
            border-radius: 3px;
            border: 1px solid dodgerblue;
            margin: 0 20px;
            font-weight: 300;
            text-align: center;
            padding: 15px 0 14px 0;
            overflow: hidden;
            transition: all 0.2s ease-in-out;
            z-index: 3;
        }

        #error .footer a:hover {
            border: 1px solid dodgerblue;
            color: white;
        }

        #error .footer a:hover span {
            width: 310px;
            height: 310px;
        }

        #error .footer a span {
            content: '';
            position: absolute;
            background: dodgerblue;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            width: 0;
            height: 0;
            border-radius: 50%;
            transition: all 0.5s ease;
            z-index: -1;
        }

        #error .footer a span:active {
            background: #c0dc67;
        }
    </style>
</head>

<body>
<div id="error">
    <div class="message">
        <h1>404</h1>
        <h2>Oops, leider konnte die Seite nicht gefunden werden!</h2>
    </div>
    <div class="footer">
        <a href="index.php" title="Zurück zur Startseite" target="_blank">Startseite
            <span></span>
        </a>
    </div>
</div>
</body>

</html>
