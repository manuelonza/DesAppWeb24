<?php

$js=1;


function script(){
// arriba está la varible:
//$js=false;
    global $js;

    if($js){
        echo '<script src="'.ESTRUCTURA['asset'].'/'.ESTRUCTURA['recursos']['js'].'"></script>';
    }
}




    const DATOS=[
        'titulo'=>'Pastelería dulce',
        'titulo_corto'=>'La Dulce',
        'titulo_largo'=>'Pastelería La Más Dulce',
        'metadescrip'=>'El pastel más rico para tu hocico, pa quedar calentico',
        'tlf1'=>'666666666',
        'tlf2'=>'777777777',
        'drc'=>'C/Jardín Botánico',
        'idioma'=>'es-ES',
        'mail'=>'pasteleriadulce@gmail.com',
        'redes'=>[
            'facebook'=>'https//www.facebook.com/pasteleriadulce',
            'instagram'=>'https//www.instagram.com/pasteleriadulce'
            ]

        ];

    //echo DATOS['titulo'];
    //foreach(DATOS['redes'] as $red => $url){
        //echo "<a href='$url'>$red</a>"; 
    //}

    const ESTRUCTURA=[
        'asset'=>'src',
        'recursos'=>[
            'css'=>'css/style.css',
            'js'=>'js/script.js',
            'img'=>'img',
            'font'=>'font',
        ],
        'includes'=>[
            'inc'=>'inc',
            'header'=>'header.php',
            'footer'=>'footer.php',
            'menu'=>'menu.php',
            'aside'=>'aside.php',
            'banner1'=>'banner1.php'
        ]
    ];

    // ESTRUCTURA['includes'].'/'.ESTRUCTURA[header];


    function img($file, $alt,$class){
        echo '<picture>
        <img class="image '.$class.'" src="'.ESTRUCTURA["asset"].'/'.ESTRUCTURA["recursos"]["img"].'/'.$file.'" alt="'.$alt.'">
        </picture>';
    }


    img('001.jpg','Hola Mundo','polaroid');
    img('fitur.jpg','Feria Turismo madrid','destacado');



    function btn($href,$class){
        echo '<a class="btn '.$class.'" src="'.$href.'">';
    }


    function h($etiqueta,$contenido,$class){
        $html="";

        switch ($etiqueta) {
            case 'p':
                    $html="<p class='".$class."'>".$contenido."</p>";
                break;

            case 'h1':
            case 'h2':
            case 'h3':
            case 'h4':
                    $html="<".$etiqueta." class='".$class."'>".$contenido."</".$etiqueta.">";
                    break;
            // Puedes tener más casos según sea necesario
            default:
            $html="<".$etiqueta." class='".$class."'>".$contenido."</".$etiqueta.">";
        }

        echo $html;
    }



    h('h1','Hola Mundo','miclase');
    h('h2','Adios Mundo','miotraclase');
    h('p','Lorem ipsum','parrafin');
    h('span','Soy un spam','alerta');



    function i($php){
        $html="";
        switch($php) {
            case 'header':
                include ESTRUCTURA['asset'].'/'.ESTRUCTURA['includes']['inc'].'/'.ESTRUCTURA['includes']['header'];
                break;
            case 'footer':
                include ESTRUCTURA['asset'].'/'.ESTRUCTURA['includes']['inc'].'/'.ESTRUCTURA['includes']['footer'];
                 break;
            default:
            include ESTRUCTURA['asset'].'/'.ESTRUCTURA['includes']['inc'].'/'.$etiqueta.'.php';
        }
        echo $html;
    }

