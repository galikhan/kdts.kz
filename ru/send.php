<?


@session_start();

if (isset($_GET["do"]) && $_GET["do"]=='visit'){
    $_SESSION["visit"] = 1;
}

function connect($url, $post=0, $data = [])
{
    $ch = curl_init();
    $headers = array(
        'Content-Type: application/json',
        'token: 1cee86a9-0d90-4560-9280-91f828cd18f5'

    );
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_HEADER, 0);

    if ($post==1){
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    }

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    $result = curl_exec($ch);
    return $result;
}


if ((isset($_SERVER['HTTP_X_REQUESTED_WITH'])) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {

    if (isset($_GET['do']) && $_GET["do"] == 'station') {
        $json = json_decode(connect('https://crm.kdts.kz/api/Site/search/RailwayStations?type=name&text=' . urlencode($_GET["q"])),1);

        $data = @$json['data'];

        usort($data, function ($item1, $item2) {
            if ($item1['nameRu'] == $item2['nameRu']) return 0;
            return $item1['nameRu'] < $item2['nameRu'] ? -1 : 1;
        });
        echo $_GET["callback"] . '(' . json_encode(['result' => $data]) . ')';

        exit;
    }

    if (isset($_GET['do']) && $_GET["do"] == 'cargo1') {
        $json = json_decode(connect('https://crm.kdts.kz/api/Site/search/ETSNGs?type=name&text=' . urlencode($_GET["q"])),1);
        $data = @$json['data'];

        usort($data, function ($item1, $item2) {
         if ($item1['nameRu'] == $item2['nameRu']) return 0;
         return $item1['nameRu'] < $item2['nameRu'] ? -1 : 1;
     });
        echo $_GET["callback"] . '(' . json_encode(['result' => $data]) . ')';

        exit;
    }

    if (isset($_GET['do']) && $_GET["do"] == 'cargo2') {
        $json = json_decode(connect('https://crm.kdts.kz/api/Site/search/ETSNGs?type=name&text=' . urlencode($_GET["q"])),1);
        //$json = json_decode(connect('https://crm.kdts.kz/api/Site/dropdowns'),1);

        $data = @$json['data'];

        usort($data, function ($item1, $item2) {
         if ($item1['nameRu'] == $item2['nameRu']) return 0;
         return $item1['nameRu'] < $item2['nameRu'] ? -1 : 1;
     });
        echo $_GET["callback"] . '(' . json_encode(['result' => $data]) . ')';

        exit;
    }

}

$error = "";
$success = 0;
if ((isset($_SERVER['HTTP_X_REQUESTED_WITH'])) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')){


   if (isset($_POST['do']) && ($_POST['do'] == 'phone')) {
       $data = [
           'firstName' => $_POST["name"],
           'phoneNumber' => $_POST["phone"],
           'email' => $_POST["email"],
       ];

       //print_r($data);

       $send = json_decode(connect('https://crm.kdts.kz/api/site/appeal',1, $data), 1);

       //print_r($send);

       $success = 1;
       echo json_encode(
           array(
               'success' => $success,
               'error' => $error,
               'msg' => '<p align="center" style="color:#fff;">Ваша заявка принята, пожалуйста ожидайте звонка</p>',
           )
       );
   }


    if (isset($_POST['do']) && ($_POST['do'] == 'order')) {

        $headers="Content-type: text/html; charset=utf-8\n";
        $configFrom = 'no-reply@site.kz';
        $headers.="From: " .  $configFrom . " <" . $configFrom  . ">\n";

        $message='<html>
        <body>
        Отправлено: ' . date('d.m.Y') . ' в ' . date('h:i') . ' с IP ' . $_SERVER['REMOTE_ADDR'] . '<br/>
        <br/>
        <h2>Форма заявки на сайте ' . $_SERVER['HTTP_HOST'] . '.</h2>
        <p><b>БИН:</b> '.$_POST["bin"].'</p>
        <p><b>Клиент:</b> '.$_POST["name"].'</p>
        <p><b>Телефон:</b> '.$_POST["phone"].'</p>
        <p><b>E-mail:</b> '.$_POST["email"].'</p>
        <p><b>Станция отправления:</b> '.$_POST["from"].'</p>
        <p><b>Станция назначения:</b> '.$_POST["to"].'</p>
        <p><b>Тип отправки:</b> '.$_POST["type"].'</p>
        <p><b>Тип контейнера:</b> '.$_POST["typec"].'</p>
        <p><b>Груз ЕТСНГ:</b> '.$_POST["gruz1"].'</p>
        <p><b>Груз ГНГ:</b> '.$_POST["gruz2"].'</p>
        <p><b>Тип расчета:</b> '.$_POST["typecalc"].'</p>
        <p><b>Дополнительная информация по запросу:</b> <br>'.nl2br($_POST["info"]).'</p>
        <p><b>Экспедируемые территории:</b> <br>'.@join(', ', @$_POST["country"]).'</p>
        <p><b>Принадлежность вагонов/контейнеров*:</b> '.$_POST["vagon"].'</p>
        </body>
        </html>';
        $mail_to   =  Array();
        $mail_to[] = 'wagon@kdts.kz';
        $mail_to[] = 'kdtsinfo@yandex.kz';
        $mail_to[] = 'Ekarataev@kdts.kz';
        //$mail_to[] = 'karataevernar@gmail.com';


        $type = [
            'Экспедирование' => 'EXPEDITING',
            'Комплексная ставка' => 'COMPLEX_RATE',
            'Оперирование' => 'OPERATING'
        ];

        $sended = [
            'Одиночная' => 'SINGLE',
            'Групповая' => 'GROUP',
            'Контейнерный поезд' => 'CONTAINER_TRAIN'
        ];

        $chei = [
            'Собственный' => 'OWN',
            'Инвентарный' => 'INVENTORY',
        ];

        $area = [
            'Азербайджан' => 'AZ',
            'Белоруссия' => 'BCH',
            'Казахстан' => 'KZH',
            'Киргизстан' => 'KRG',
            'Латвия' => 'LDZ',
            'Литва' => 'LG',
            'Молдова' => 'CHFM',
            'Россия' => 'RZD',
            'Таджикистан' => 'TDZ',
            'Украина' => 'UTI',
            'Узбекистан' => 'UZ',
            'Эстония' => 'EVR',
            'Китай' => 'KZD',
            'Туркменистан' => 'TRK',
        ];

        $weight = [
            '20 фут (24)' => 'CONT_2020',
            '20 фут (30)' => 'CONT_3020',
            '40 фут' => 'CONT_3040',
        ];

        $country = [];

        foreach($_POST["country"] as $v){
            $country[] = $area[$v];
        }

        $data = [
            'bin' => $_POST["bin"],
            'companyName' => $_POST["name"],
            'phoneNumber' => $_POST["phone"],
            'email' => $_POST["email"],
            'departureCode' => $_POST["state_from_id"],
            'arrivalCode' => $_POST["state_to_id"],
            'ETSNGcode' => $_POST["cargo_id1"],
            'GNGcode' => $_POST["cargo_id2"],
            'calculationTypeCode' => $type[$_POST["typecalc"]],
            'expeditionAreaCodes' => $country,
            'dispatchTypeCode' => $sended[$_POST["type"]],
            'containerWeightCode' => $weight[$_POST["typec"]],
            'affilationCode' => $chei[$_POST["vagon"]],
            'description' => $_POST["info"],
        ];

        $send = json_decode(connect('https://crm.kdts.kz/api/Site/deal',1, $data), 1);


        for($i=0; $i<sizeof($mail_to); $i++){
            $send = mail($mail_to[$i], ('Заявка с сайта '.$_SERVER['HTTP_HOST']), $message, $headers);
        }

        if ($send){
            $success = 1;
            echo json_encode(
                array(
                    'success' => $success,
                    'error' => $error,
                    'msg' => '<p align="center" style="color:#fff;">Здравствуйте, уважаемый клиент!</p><p>&nbsp;</p><p align="center" style="color:#fff;">Спасибо за ваше обращение. Ваша заявка успешно принята. На указанный адрес будет предоставлено наше коммерческое предложение. В случае возникновения дополнительных вопросов, Вы можете обратиться в Call-center: +7&nbsp;717 2 94 26 26.</p>',
                )
            );
        }else{
            $error = 'Ошибка отправки';
            echo json_encode(
                array(
                    'success' => $success,
                    'msg' => $error,
                )
            );
        }

        exit;
    }
}




if (isset($_GET["test"])){

    $type = [
        'Экспедирование' => 'EXPEDITING',
        'Комплексная ставка' => 'COMPLEX_RATE',
        'Оперирование' => 'OPERATING'
    ];

    $sended = [
        'Одиночная' => 'SINGLE',
        'Групповая' => 'GROUP',
        'Контейнерный поезд' => 'CONTAINER_TRAIN'
    ];

    $chei = [
        'Собственный' => 'OWN',
        'Инвентарный' => 'INVENTORY',
    ];

    $area = [
        'Азербайджан' => 'AZ',
        'Белоруссия' => 'BCH',
        'Казахстан' => 'KZH',
        'Киргизстан' => 'KRG',
        'Латвия' => 'LDZ',
        'Литва' => 'LG',
        'Молдова' => 'CHFM',
        'Россия' => 'RZD',
        'Таджикистан' => 'TDZ',
        'Украина' => 'UTI',
        'Узбекистан' => 'UZ',
        'Эстония' => 'EVR',
        'Китай' => 'KZD',
        'Туркменистан' => 'TRK',
    ];

    $country = [];

    foreach($_GET["country"] as $v){
        $country[] = $area[$v];
    }

    $data = [
        'entityForm' => $_GET["form"],
        'clientName' => $_GET["name"],
        'phoneNumber' => $_GET["phone"],
        'email' => $_GET["email"],
        'departureCode' => $_GET["state_from_id"],
        'arrivalCode' => $_GET["state_to_id"],
        'ETSNGcode' => $_GET["cargo_id1"],
        'GNGcode' => $_GET["cargo_id2"],
        'calculationTypeCode' => $type[$_GET["typecalc"]],
        'expeditionAreaCodes' => $country,
        'dispatchTypeCode' => $sended[$_GET["type"]],
        'containerTypeCode' => $_GET["typec"],
        'affilationCode' => $chei[$_GET["vagon"]],
        'description' => $_GET["info"],
    ];

    print_r($data);

    $json = json_decode(connect('https://crm.kdts.kz/api/Site/dropdowns'),1);

    print_r($json);



    $send = json_decode(connect('https://crm.kdts.kz/api/Site/deal',1, $data), 1);

    print_r($send);
}