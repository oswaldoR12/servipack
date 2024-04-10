<!DOCTYPE html>
<html>

<head>
    <title>Envíos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            color: #007BFF;
        }

        p {
            margin: 10px 0;
        }

        b {
            color: #333;
        }

    </style>
</head>

<body>


    <p>Fecha y hora:
        <b>
            {{ $date }}
        </b>
    </p>
    
    <p>Email:
        <b>
            {{ $email }}
        </b>
    </p>
    <p>Teléfono:
        <b>
            {{ $phone }}
        </b>
    </p>
    <p>Comentarios:
        <b>
            {{ $comments }}
        </b>
    </p>
    <p>Condiciones de uso:
        <b>
         {{ $condicionesUso == 1 ? "Si" : "No" }}
        </b>
    </p>
    <p>Condiciones de envíos comerciales:
        <b>
            {{ $condicionesEnvios == 1 ? "Si" : "No" }}
        </b>
    </p>
</body>

</html>
