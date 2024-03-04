<?php $titulo="Esto es el Inicio correcto";?>

<?php require_once '_functions.php'?>
<?php include_once '_header.php'?>

    <p>El archivo .htaccess sirve para configurar ciertas rutas o comportamientos en las direcciones de nuestro servidor</p>
    
    <pre>
        <code>
        # Esto es un comentario
## Referencias: https://avancehost.com/cliente/knowledgebase/12/Codigos-utiles-htaccess-para-sitios-web-.html

# Activamos el modo reescribir direcciones
RewriteEngine On

# La siguiente línea redirige la página de inicio a un nuevo archivo
RewriteRule ^$ /inicio2.php [L]


# URLs limpias
RewriteEngine On

# Redirección específica para /contacto
RewriteRule ^inicio/?$      /inicio2.php [L]
RewriteRule ^home/?$        /inicio2.php [L]
RewriteRule ^empezar/?$     /inicio2.php [L]
RewriteRule ^start/?$       /inicio2.php [L]
RewriteRule ^inicio/?$      /inicio2.php [L]
RewriteRule ^asociacion-con-animo-de-lucro-de-gente-que-odia-a-java-script/?$    /inicio2.php [L]


RewriteRule ^contacto/?$   /contacto.php [L]
RewriteRule ^contact/?$    /contacto.php [L]
RewriteRule ^escribeme/?$  /contacto.php [L]



# Redirecciones através de Consultas a PHP
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^([^/]+)/?$ /pagina.php?url=$1 [L]





# Error 404
ErrorDocument 404 /404.php




        </code>
    </pre>


<?php
$sql ="SELECT * FROM paginas";
$datos = consulta($sql,true);


echo '<ul class="lista">';
// Recorrer y mostrar los datos de los alumnos
foreach ( $datos as $dato) {
       
    echo <<<HTML
    <li>
        <img src="img/{$dato['img']}">
        <h2>{$dato['nombre']}</h2>
        <!--<p>{$dato['texto']}</p>-->
        <a href="pagina.php?url={$dato['url']}">URL con get</a>
        <a href="{$dato['url']}">URL limpia</a>
    </li>
    HTML;

}
echo '</ul>';

?>

        
    <?php include_once '_footer.php'?>