<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family:sans-serif;
        }
        #cookies-modal{
            font-size:14px;
            position:absolute;
            bottom:0;
            left:0;
            max-width:450px;
            header:560px;
            outline: solid 1px black;
            margin:20px;
            padding: 20px;
        }
    </style>
</head>
<body>
    
<div id="cookies-modal">
<h2>Cookies en este sitio web</h2>
<p>Las cookies en este sitio web pueden ser utilizadas para mejorar la navegación y el rendimiento del sitio, analizar su uso y posibilitar la creación de contenido publicitario dirigido y de redes sociales. Por defecto, solo las cookies estrictamente necesarias están activas. Puede aceptar o rechazar todas las cookies en los botones a continuación o gestionar o desactivar algunas de estas cookies haciendo clic en "Ajustes de cookies".</p>
<form action="apartado.php">
<details>
<summary>
    <label>Cookies estrictamente necesarias
        <input type="checkbox" name="necesarias" checked disabled>
    </label>
</summary>
    <p>Cuando son necesarias para asegurar el funcionamiento del sitio web y/o para asegurar la disponibilidad de funcionalidades que sean solicitadas por el usuario, o aún para guardar sus preferencias en relación a la navegación en el mismo, siempre que utilice el mismo dispositivo y así lo solicite.</p>
    </details>


    <details>
<summary>
    <label>Cookies Analytics <input type="checkbox" name="analytics" checked>
    </summary>
    <p>Recopilan información estadística con el objetivo de ayudar a los propietarios de sitios web a analizar el uso de los mismos y a entender mejor la participación de sus visitantes con los sitios web. Otra de las funciones para las que pueden ser utilizados estos cookies, junto con algunas cookies de publicidad, es la de permitir medir las interacciones con los anuncios que se presentan. Algunos de estos cookies pueden transferir datos fuera del Espacio Económico Europeo.
    </label>
</details>
<details>
    <summary>
    <label>
        Cookies Marketing
        <input type="checkbox" name="marketing" checked>
    </label>
</summary>
<p>Tienen como objetivo hacer la publicidad más atractiva para usuarios y anunciantes, a través de la selección de publicidad basada en lo que es relevante para el usuario, de forma a mejorar los informes sobre el rendimiento de las campañas y evitar mostrar anuncios que el usuario ya haya visto o señalado como no relevantes. Algunos de estos cookies pueden transferir datos fuera del Espacio Económico Europeo.</p>
</details>
    <input type="submit" value="Aceptar" id="aceptar">
    <input type="button" value="Rechazar todos" id="rechazar">
</form>
</div>

</body>
</html>