<?php

class SeriesClass
{
    // property declaration
    public $series;
    
    public function __construct() {
        $this->series = array(
            array(
                "titulo"    => "House of Cards",
                "temas"     => array("Crimen", "Politica"),
                "imagen"    => "http://www.movistarplus.es/recorte/e/modulonoticia/e3e300af9bbcf17bd82bde929c4819ab",
                "texto"     => "Movistar Series emite en exclusiva la 4ª TEMPORADA COMPLETA de House of Cards",
                "url"       => "http://www.movistarplus.es/houseofcards",
                "actores"   => array("Kevin Spacey", "Robin Wright")
            ),
            array(
                "titulo"    => "Gotham",
                "temas"     => array("Crimen", "Comics"),
                "imagen"    => "http://www.movistarplus.es/recorte/e/modulonoticia/e418c6ca4b0886c07838246f21f10064",
                "texto"     => "Antes del Pingüino, antes de Catwoman, antes de Hiedra Venenosa, antes de Frío, antes de Sombrero Loco, antes de Enigma, antes de Joker, antes de Batman, antes de todos ellos estaba... Gotham.",
                "url"       => "http://www.movistarplus.es/gotham",
                "actores"   => array("Ben McKenzie", "Morena Baccarin")
            ),
            array(
                "titulo"    => "Mr Robot",
                "temas"     => array("Crimen", "Politica"),
                "imagen"    => "http://www.movistarplus.es/recorte/e/original/62ccbd4a06c118c3b9edd5cddcf0f580",
                "texto"     => "Nuestra democracia está siendo secuestrada. nuestra sociedad, manipulada. Nuestra libertad, amenazada. La revolución ya ha empezado. Ahora sólo te falta elegir en qué lado quieres estar.",
                "url"       => "http://www.movistarplus.es/mr-robot",
                "actores"   => array("Christian Slater", "Rami Malek")
            ),
             array(
                "titulo"    => "Silicon valley",
                "temas"     => array("Comedia"),
                "imagen"    => "http://www.movistarplus.es/recorte/e/original/18c3d7f68e5ab96e38ef921ed51d7efe",
                "texto"     => "Movistar Series emite en exclusiva la 3a temporada de 'Silicon Valley', la comedia de HBO ganadora de dos premios Emmy creada por Mike Judge, John Altschuler y Dave Krinsky, responsables de series de culto como 'King of the Hill' y 'Beavis &amp; Butthead', y producida por el ganador del Oscar Scott Rudin ('Las Horas') y Chrisann Verges.",
                "url"       => "http://www.movistarplus.es/siliconvalley",
                "actores"   => array("Thomas Middleditch", "T.J. Miller")
            ),
            array(
                "titulo"    => "Archer",
                "temas"     => array("Comedia", "Accion"),
                "imagen"    => "http://www.movistarplus.es/recorte/e/original/b36e6f438accc7d595a582faad98a496.jpg",
                "texto"     => "Movistar Series estrena en exclusiva la SÉPTIMA TEMPORADA de 'Archer', la comedia de animación para adultos más irreverente, disparatada, desvergonzada, políticamente incorrecta, original e inteligente de la televisión.",
                "url"       => "http://www.movistarplus.es/archer",
                "actores"   => array()
            ),
            //Scrubs, community, Veep
            array(
                "titulo"    => "Veep",
                "temas"     => array("Comedia", "Politica"),
                "imagen"    => "http://www.movistarplus.es/recorte/e/original/32aab4f15826bf465374cb6eec4a4182.jpg",
                "texto"     => "Movistar Series emite en exclusiva la quinta temporada de 'Veep', la comedia política ganadora de 12 Premios Emmy y protagonizada por la gran Julia Louis-Dreyfus, ganadora de cinco Emmys consecutivos a Mejor actriz en comedia por su papel en la serie de HBO.",
                "url"       => "http://www.movistarplus.es/veep",
                "actores"   => array()
            ),
            array(
                "titulo"    => "True Detective",
                "temas"     => array("Accion", "Crimenes"),
                "imagen"    => "http://www.movistarplus.es/recorte/e/original/8fe3fc525cd0461ec4b1f919b46b1cf4.jpg",
                "texto"     => "La nueva entrega de una de las sensaciónes televisivas de la temporada pasada está protagonizada por Colin Farrell, Vince Vaughn, Rachel McAdams y Taylor Kitsch, y dirigida, entre otros, por Dan Attias ('El Séquito', 'Ray Donovan'), Justin Lin ('Fast & Furious', 'Community') y Miguel Sapochnik ('Juego de Tronos', 'Banshee').",
                "url"       => "http://www.movistarplus.es/truedetective",
                "actores"   => array()
            ),
            array(
                "titulo"    => "Ray Donovan",
                "temas"     => array("Accion", "Crimenes"),
                "imagen"    => "http://www.movistarplus.es/recorte/e/original/09bd049d97c018e6449c7b5bd77dbd8f.jpg",
                "texto"     => "'Ray Donovan' está creada por Ann Biderman ('Southland') y cuenta en su reparto con varios secundarios de lujo como Paula Malcomson ('Deadwood'), Dash Mihok ('Felicity') y Eddie Marsan ('War Horse').",
                "url"       => "http://www.movistarplus.es/raydonovan",
                "actores"   => array()
            ),
            array(
                "titulo"    => "Penny Dreadful",
                "temas"     => array("Terror", "Accion", "Romantica", "Crimenes"),
                "imagen"    => "http://www.movistarplus.es/recorte/e/original/9f09ef82b80d4b87a8d10deb4960d657.jpg",
                "texto"     => "'Penny Dreadful', la serie creada por John Logan, producida por Sam Mendes y protagonizada por Eva Green y Josh Hartnett que se adentra en lo desconocido y sobrenatural de la mano de los personajes más icónicos de la literatura gótica del siglo XIX",
                "url"       => "http://www.movistarplus.es/pennydreadful",
                "actores"   => array()
            ),
            array(
                "titulo"    => "Outlander",
                "temas"     => array("Accion", "Romantica"),
                "imagen"    => "http://www.movistarplus.es/recorte/e/original/923dfef4dba44a6fde31e0576ead46ca.jpg",
                "texto"     => "Movistar Series emite en exclusiva la 2ª temporada de 'Outlander', adaptación del best seller de Diana Gabaldon que, en sólo una temporada, se ha convertido en uno de los fenómenos televisivos del año.",
                "url"       => "http://www.movistarplus.es/outlander",
                "actores"   => array()
            ),
            array(
                "titulo"    => "The Good Wife",
                "temas"     => array("Romantica", "Crimenes"),
                "imagen"    => "http://www.movistarplus.es/recorte/n/galeria/F3109629",
                "texto"     => "'The Good Wife' relata el día a día de Alicia Florrick, la esposa del fiscal general de Illinois, que da un giro a su vida personal y profesional cuando su marido es acusado e imputado por delitos de corrupción y otros escándalos.",
                "url"       => "http://www.movistarplus.es/thegoodwife",
                "actores"   => array()
            ),
            array(
                "titulo"    => "Billions",
                "temas"     => array("Politica", "Crimenes"),
                "imagen"    => "http://www.movistarplus.es/recorte/e/original/803aaae213f34e21191056b4229fb146.jpg",
                "texto"     => "'Billions' es una serie sobre la política del poder, la doble cara del ansiado sueño americano y el despiadado mundo de dos hombres poderosos, inteligentes y con problemas de ego en pleno Wall Street, un lugar donde el riesgo se mide en... miles de millones.",
                "url"       => "http://www.movistarplus.es/billions",
                "actores"   => array()
            ),
            array(
                "titulo"    => "Fargo",
                "temas"     => array("Comedia", "Accion", "Crimenes"),
                "imagen"    => "http://www.movistarplus.es/recorte/e/original/804e54980b50a58384441e01922cef5a.jpg",
                "texto"     => "'Fargo' sigue conservando ese toque Made in Coen que hizo de la película de 1996 un clásico del cine: humor negro, ironía, violencia extrema, surrealismo, personajes patéticos involucrados en crímenes absurdos...",
                "url"       => "http://www.movistarplus.es/fargo",
                "actores"   => array("Patrick Wilson","Ted Danson","Kirsten Dunst","Jesse Plemons")
            ),
            array(
                "titulo"    => "Girls",
                "temas"     => array("Comedia", "Romantica"),
                "imagen"    => "http://www.movistarplus.es/recorte/e/original/40ff32a9f265142eaa1bebdcfe126005.jpg",
                "texto"     => "Girls' cuenta con un particular sentido del humor la historia llena de humillaciones y pequeños triunfos de un grupo de chicas que comienzan a dar pasos importantes en el terreno amoroso y laboral.",
                "url"       => "http://www.movistarplus.es/girls",
                "actores"   => array()
            ),
            array(
                "titulo"    => "Juego de Tronos",
                "temas"     => array("Accion", "Fantasia", "Crimenes"),
                "imagen"    => "http://www.movistarplus.es/recorte/e/original/3d99b2476d794412b312cd19d1e8b814.jpg",
                "texto"     => "La serie más exitosa de la última de década ganadora de un Globo de Oro, tres Scream Awards, tres TCA Awards, tres AFI Awards y 38 Premios Emmy, convirtiéndose en la serie mas premiada de la Historia de la TV.",
                "url"       => "http://www.movistarplus.es/juegodetronos",
                "actores"   => array("Peter Dinklage", "Lena Headey", "Emilia Clarke", "Kit Harington", "Sophie Turner")
            ),
        );
    }

    public function getSerieTema($tema){
        $misSeries = array();
        foreach( $this->series as $s){            
            if(in_array($tema, $s["temas"])){
                $misSeries = array_merge($misSeries, array(array("titulo"=>$s["titulo"], "temas"=>$s["temas"], "imagen"=>$s["imagen"],"texto"=>$s["texto"],"url"=>$s["url"],"actores"=>$s["actores"])));
            }
        }
        return $misSeries;
    }

    public function getSerieNombre($nombre){
        $misSeries = array();
        foreach( $this->series as $s){
            if ($nombre == $s["titulo"]){
                foreach( $s["temas"] as $t){                    
                    $misSeries = $this->getSerieTema($t);
                }                
            }
        }
        return $misSeries;
    }

    public function getSerieActor($actor){
        $misSeries = array();
        foreach( $this->series as $s){
            $actors = $s["actores"];
            if (empty($actors)) {
                $json = file_get_contents("http://www.omdbapi.com/?y=&plot=short&r=json&t=".urlencode($s["titulo"]));
                $myData = json_decode($json);
                $actors = explode(",", $myData->Actors);
            }
            $similarActor = false;
            foreach($actors as $a){
                if (levenshtein($actor, $a) < 4 ) $similarActor = true;
            }
            if ($similarActor)
                $misSeries = array_merge($misSeries, array(array("titulo"=>$s["titulo"], "temas"=>$s["temas"], "imagen"=>empty($s["imagen"])?$myData->Poster:$s["imagen"], "texto"=>$s["texto"], "url"=>$s["url"], "actores"=>$actors)));
        }        
        return $misSeries;
    }

}

function createCard($data){
    /*type	Number	Equals to 1 for the Card message type.
    "title":"Welcome to Peter\'s Hats",
    "item_url":"https://petersfancybrownhats.com",
    "image_url":"https://petersfancybrownhats.com/company_image.png",
    "subtitle":"We\'ve got the right hat for everyone.",
    "buttons":[
        {
            "type":"web_url",
            "url":"https://petersfancybrownhats.com",
            "title":"View Website"
        },
        {
            "type":"postback",
            "title":"Start Chatting",
            "payload":"DEVELOPER_DEFINED_PAYLOAD"
        }              
    ]*/        
    $json = file_get_contents("http://www.omdbapi.com/?y=&plot=short&r=json&t=".urlencode($data["titulo"]));
    $myData = json_decode($json);
    $card = array(
        "title"         => $data["titulo"],
        "image_url"     => empty($data["imagen"])?$myData->Poster:$data["imagen"],
        "subtitle"      => $data["texto"],//$myData->Plot,
        //"item_url"      => $data["url"],        
        "buttons"       => array(array(   
                                    "type"      => "web_url",
                                    "url"       => $data["url"],
                                    "title"     => "Ver mas"                                    
                        ))
    );
    return (object)$card;
}
function createCards($data){
    $cards = array();
    foreach($data as $datum){
        $cards[] = createCard($datum);
    }
    //https://developers.facebook.com/docs/messenger-platform/send-api-reference/generic-template
    /*
     "data" : {
        "facebook" : {
            "attachment" : {
                "type" : "template",
                "payload" : {
                    "template_type" : "generic",
                    "elements" : [ 
                        {
                            "title":"Welcome to Peter\'s Hats",
                            "item_url":"https://petersfancybrownhats.com",
                            "image_url":"https://petersfancybrownhats.com/company_image.png",
                            "subtitle":"We\'ve got the right hat for everyone.",
                            "buttons":[
                                {
                                    "type":"web_url",
                                    "url":"https://petersfancybrownhats.com",
                                    "title":"View Website"
                                },
                                {
                                    "type":"postback",
                                    "title":"Start Chatting",
                                    "payload":"DEVELOPER_DEFINED_PAYLOAD"
                                }              
                            ]
                        }
                    ]
                }
            }
        }
    }
    */
    if (count($cards)) {
        $myCards = array(
            "facebook"  => array(  
                "attachment"    =>    array(
                    "type"      =>  "template",
                    "payload"   =>  array(
                        "template_type"     =>  "generic",
                        "elements"          => $cards
                    )
                )                
             ) 
        );
    } else $myCards = null;
    return $myCards;
}

function elTiempo($city){
     $speech = "El tiempo en $city : Soleado con probabilidades de chubascos.";
     return  array(
        "speech" => $speech,
        "displayText" => $speech,
        // "data" => data,
        // "contextOut" => [{"name":"weather", "lifespan":2, "parameters":{"city":"Rome"}}],
        "source" => "apiai-weather-webhook-sample"
     );
}

function serieTema($tema){

    $series = new SeriesClass();
    $s = $series->getSerieTema($tema);
    $cards = createCards($s);

    $speeches =array(
        "Como te gustan las series del tema '$tema', te recomiendo '".$s[0]["titulo"]."'.",
        "Conozco algunas series así, ¿Qué te parece '".$s[0]["titulo"]."'?",
        "¡'$tema'!, ¡Me encanta!, ¡Tienes que ver '".$s[0]["titulo"]."'!",
    );
    $index = rand(0, count($speeches)-1);


    $speech = $speeches[$index];//"como te gustan las series del tema '$tema', te recomiendo ".$s[0]["titulo"].".";
    return  array(
        "speech" => $speech,
        "displayText" => $speech,
        "data" => $cards,
        // "contextOut" => [{"name":"weather", "lifespan":2, "parameters":{"city":"Rome"}}],
        "source" => "apiai-series-webhook"
     );
}

function serieActor($actor){
    $series = new SeriesClass();
    $s = $series->getSerieActor($actor);    
    $cards = createCards($s);

    $speech = "Perdón, pero no te entiendo...";
    if(count($cards) > 0)
        $speech = "A mí también me encanta $actor, creo que participa en la serie: ".$s[0]["titulo"].".";
    return  array(
        "speech" => $speech,
        "displayText" => $speech,
        "data" => $cards,
        // "contextOut" => [{"name":"weather", "lifespan":2, "parameters":{"city":"Rome"}}],
        "source" => "apiai-series-webhook"
     );

}

function porDefecto($val){
     return  array(
        "speech" => "Hmmm, cuentame más $val",
        "displayText" => "Hmmm, cuentame más $val",
        "source" => "apiai-series-webhook"
     );
}


$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, TRUE); //convert JSON into array
$data = serieActor("Juan Menganito");//serieTema("Crimen");//porDefecto(1);

if (isset($input["result"])){
    $action = $input["result"]["action"];

    switch($action){
        case "yahooWeatherForecast": 
            $city = $input["result"]["parameters"]["geo-city"];
            $data = elTiempo($city);
            break;

        case "dar-serie-tematica": 
            $tema = $input["result"]["parameters"]["Tematicas"];
            $data = serieTema($tema);
            break;

        case "dar-serie-actor":
            $actor = $input["result"]["parameters"]["name"];
            $data = serieActor($actor);
            break;
        default: $data = porDefecto(2);
    }
}

header('Content-Type: application/json');
echo json_encode($data);//,  JSON_FORCE_OBJECT);
/*echo('{  
   "speech":"como te gustan las series del tema Crimen, te recomiendo House of Cards.",
   "displayText":"como te gustan las series del tema Crimen, te recomiendo House of Cards.",
   "data":{  
      "facebook":{  
         "attachment":{  
            "type":"template",
            "payload":{  
               "template_type":"generic",
               "elements":[
                    {
                    "title":"House of cards",
                    "item_url":"http:\/\/www.movistarplus.es\/houseofcards?_ga=1.232013848.682702273.1483978629",
                    "image_url":"http:\/\/www.movistarplus.es\/recorte\/e\/modulonoticia\/e3e300af9bbcf17bd82bde929c4819ab",
                    "subtitle":"Movistar Series emite en exclusiva la 4\u00aa TEMPORADA COMPLETA de \'House of Cards\'",
                    "buttons":[
                    {
                        "type":"web_url",
                        "url":"http:\/\/www.movistarplus.es\/houseofcards?_ga=1.232013848.682702273.1483978629",
                        "title":"Ver más"
                    } 
                    ]
                    }
                ]
            }
         }
      }
   },
   "source":"apiai-series-webhook"
}');
*/
