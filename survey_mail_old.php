<?php


require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/php/PHPMailer.php';
require __DIR__ . '/php/SMTP.php';
require __DIR__ . '/php/Exception.php';

use Google\Client;
use Google\Service\Sheets;
use Google\Service\Sheets\ValueRange;

// Определяем путь и имя файла для логов
$logFile = __DIR__ . '/logs/log.txt';

// Функция для записи логов
function writeLog($message)
{
    global $logFile;
    $logMessage = "[" . date("Y-m-d H:i:s") . "] " . $message . PHP_EOL;
    file_put_contents($logFile, $logMessage, FILE_APPEND | LOCK_EX);
}

function writeResponseLog($response)
{
    global $logFile;
    $logMessage = "[" . date("Y-m-d H:i:s") . " form_by_form] Response: " . $response . PHP_EOL;
    file_put_contents($logFile, $logMessage, FILE_APPEND | LOCK_EX);
}


// // Функция для проверки reCAPTCHA
// function checkRecaptcha($response)
// {
//     define('SECRET_KEY', '6LeU7TYoAAAAAFNUC3UkadeuZ2SJOy94NGxbbcpV');
//     $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
//     $recaptcha_data = [
//         'secret' => SECRET_KEY,
//         'response' => $response
//     ];

//     $recaptcha_options = [
//         'http' => [
//             'header' => "Content-type: application/x-www-form-urlencoded\r\n",
//             'method' => 'POST',
//             'content' => http_build_query($recaptcha_data)
//         ]
//     ];

//     $recaptcha_context = stream_context_create($recaptcha_options);
//     $recaptcha_result = file_get_contents($recaptcha_url, false, $recaptcha_context);
//     $recaptcha_json = json_decode($recaptcha_result);

//     return $recaptcha_json;

// }

// #Проверка reCAPTCHA
// if (isset($_POST['g-recaptcha-response'])) {
//     $recaptcha_response = $_POST['g-recaptcha-response'];
//     $recaptcha_json = checkRecaptcha($recaptcha_response);
//     $data['info_captcha'] = $recaptcha_json;

//     if (!$recaptcha_json->success || $recaptcha_json->score < 0.6) {
//         $data['result'] = "error";
//         $data['errorType'] = "captcha";
//         $data['info'] = "Ошибка проверки reCAPTCHA";
//         $data['desc'] = "Вы являетесь роботом!";
//         // Отправка результата
//         header('Content-Type: application/json');
//         echo json_encode($data);
//         writeLog("Ошибка отправки письма: {$data['desc']}");
//         writeResponseLog(json_encode($data));
//         exit();
//     }

// } else {
//     $data['result'] = "error";
//     $data['errorType'] = "captcha";
//     $data['info'] = "Ошибка проверки reCAPTCHA";
//     $data['desc'] = "Код reCAPTCHA не был отправлен";
//     // Отправка результата
//     header('Content-Type: application/json');
//     echo json_encode($data);
//     exit();
// }

putenv('GOOGLE_APPLICATION_CREDENTIALS=' . __DIR__ . '/secret_new.json');

$client = new Client();
$client->useApplicationDefaultCredentials();
$client->setApplicationName("marryme");
$client->setScopes([
    'https://www.googleapis.com/auth/spreadsheets'
]);

try {
    $service = new Sheets($client);
    $spreadsheetId = '1cuE7xHtSGLDqehJaoQ3MTW-BhUwX7TaU4qr5P_0uxxY'; // Ваш ID таблицы
    $date_time = date("Y-m-d H:i:s");

    // Данные для добавления
    $values = new ValueRange([
        'values' => [
            [$_POST['form-visit'], $_POST['form-name'], $date_time]
        ]
    ]);

    // Параметры добавления данных
    $params = [
        'valueInputOption' => 'RAW'
    ];

    $range = 'A2'; // Допустим, вы хотите начать добавление с A1
    $service->spreadsheets_values->append($spreadsheetId, $range, $values, $params);
} catch (Exception $e) {
    // Обработка ошибки
    $data['result'] = "error";
    $data['info'] = "Произошла ошибка при добавлении данных в Google Sheets: " . $e->getMessage();
    writeLog("Ошибка Google Sheets: " . $e->getMessage());
    writeResponseLog(json_encode($data));
} 



# проверка, что ошибки нет и переменные
if (!error_get_last()) {

    $husband = $_POST['fio_husband'];
    $number_w = $_POST['tel_wife'];
    $email = $_POST['mail'];
    $date = $_POST['merry_date'];
    $promo = $_POST['promocode'];

    // Формирование самого письма
    $headers = "Content-Type: text/html; charset=UTF-8";
    $title = "Запрос на создание свадебного сайта";
    $body = "
    <h1>Новая заявка от $husband</h1>
    <b>Имя жениха:</b> $husband<br>
    <b>Телефон жениха:</b> $number_w <br>
    <b>Почта:</b> $email<br>
    <b>Дата свадьбы:</b> $date<br>
    ";

    if (!empty($promo)) {
        $body .= "<b>Промокод:</b> $promo <br>";
    }


    // Настройки PHPMailer
    $mail = new PHPMailer\PHPMailer\PHPMailer();

    $mail->isSMTP();
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth = true;
    //$mail->SMTPDebug = 2;
    $mail->Debugoutput = function ($str, $level) {
        $GLOBALS['data']['debug'][] = $str;
    };

    // Настройки вашей почты
    $mail->Host = 'mail.marryme-invites.ru'; // SMTP сервера вашей почты
    $mail->Username = 'noreply@marryme-invites.ru'; // Логин на почте
    $mail->Password = '4638743aA'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('noreply@marryme-invites.ru', 'Свадебные сайты'); // Адрес самой почты и имя отправителя


    // Получатель письма
    $mail->addAddress('loko419@yandex.ru');


    // Отправка сообщения
    $mail->isHTML(true);
    $mail->Subject = $title;
    $mail->Body = $body;

    // Проверяем отправленность сообщения
    if ($mail->send()) {
        $data['result'] = "success";
        $data['info'] = "Сообщение успешно отправлено!";
        writeLog("Сообщение успешно отправлено!");
        writeResponseLog(json_encode($data));
    } else {
        $data['result'] = "error";
        $data['info'] = "Сообщение не было отправлено. Ошибка при отправке письма";
        $data['desc'] = "Причина ошибки: {$mail->ErrorInfo}";
        writeLog("Ошибка отправки письма: {$mail->ErrorInfo}");
        writeResponseLog(json_encode($data));
    }

} else {
    $data['result'] = "error";
    $data['info'] = "В коде присутствует ошибка";
    $data['desc'] = error_get_last();
}

// Отправка результата
header('Content-Type: application/json');
echo json_encode($data);

?>