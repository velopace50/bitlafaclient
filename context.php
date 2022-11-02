<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

$request = isset($_SERVER['REDIRECT_URL']) ? str_replace('/','',$_SERVER['REDIRECT_URL']) : '';
if(empty($request))
{
    $request = isset($_REQUEST['path']) ? $_REQUEST['path'] : '';
}



session_start();

$dd_front = '';

if (!$_SESSION['userId'] && $request != 'login' && $request != 'forgotPassword') {
    if ($request != 'register') {
        $request = 'login';
    }
}

if ($_SESSION['isAdmin']) {
    $pageData = (object) array(
        'action' => 'adminDashboard',
        'isAdmin' => $_SESSION['isAdmin'],
    );
} else {
    $pageData = (object) array(
        'action' => 'dashboard',
        'isAdmin' => $_SESSION['isAdmin'],
    );
}


$data = (object) array();


switch ($request) {

    case $dd_front . 'login':
        $pageData->action = 'login';
        if ($_POST) {
            $data->data = getData('login');
        }
    break;

    case $dd_front . 'register':
        $pageData->action = 'register';
        $data->data = getData('getRegister');
    break;

    case $dd_front . 'logout':
        session_destroy();
        header('Location: /login');
        exit;
    break;

    case $dd_front .'forgotPassword':
        $pageData->action = 'login';
        $data->data = getData('forgotPassword');
    break;

    case $dd_front .'changePasswordAdmin':
        $pageData->action = 'changePasswordAdmin';
        $data->data = getData('changePasswordAdmin');
    break;

    case $dd_front . 'adminUserDelete':
        $data->data = getData('deleteUser');

        if ($_GET && $_SESSION['isAdmin']) {
            header('Location: ' . $dd_front . 'adminDashboard');
        }
        exit;
    break;

    case $dd_front . 'adminDashboard':
        $pageData->action = 'adminDashboard';
        $data->data = getData('adminGetUsers');
    break;

    case $dd_front . 'agentusers':
        $pageData->action = 'agentusers';
        $data->data = getData('agentusers');
    break;
    
    case $dd_front . 'adminUserDetails':
        $pageData->action = 'adminUserDetails';
        $data->data = getData('adminUserDetails');
    break;
        
    case $dd_front . 'adminTradesByUser':
        $pageData->action = 'adminTradesByUser';
        $data->data = getData('adminTradesByUser');
    break;
     
    case $dd_front . 'adminTradesByAccountType':
        $pageData->action = 'adminTradesByAccountType';
        $data->data = getData('adminTradesByAccountType');
    break;
    
    case $dd_front . 'adminTokenByAllAccount':
        $pageData->action = 'adminTokenByAllAccount';
        $data->data = getData('adminTokenByAllAccount');
    break;
    
    case $dd_front . 'adminMessages':
        $pageData->action = 'adminMessages';
        $data->data = getData('adminMessages');
    break;

    case $dd_front . 'dashboard':
        $pageData->action = 'dashboard';
        $data->data = getData('getDashboard');
    break;

    case $dd_front . 'messages':
        $pageData->action = 'messages';
        $pageData->title = 'Secure Messages';
        $data->data = getData('messages');
    break;

    case $dd_front . 'personDetails':
        $pageData->action = 'personDetails';
        $data->data = getData('personDetails');
    break;
        
    case $dd_front . 'accountDetails':
        $pageData->action = 'accountDetails';
        $data->data = getData('accountDetails');
    break;

    case $dd_front . 'getModalTradeHistory':
        $data->data = getData('getModalTradeHistory');
        exit;
    break;

    case $dd_front . 'additionalPages':
        $pageData->action = 'additionalPages';
        $data->data = getData('additionalPages');
    break;

    case $dd_front . 'depositWithdraw':
        $pageData->action = 'depositWithdraw';
        $data->data			= getData('depositWithdraw');
    break;

    case $dd_front . 'accountSecurity':
        $pageData->action = 'accountSecurity';
        $data->data = getData('accountSecurity');
    break;

    case $dd_front . 'contact':
        $pageData->action = 'contact';
        $data->data = getData('contact');
    break;

    case $dd_front . 'termsPolicy':
        $pageData->action = 'termsPolicy';
    break;

    case $dd_front . 'faqs':
        $pageData->action = 'faqs';
    break;

    case $dd_front . 'support':
        $pageData->action = 'support';
    break;

    case $dd_front . 'supportTopics':
        $pageData->action = 'supportTopics';
    break;

    case $dd_front . 'supportTopicDetail':
        $pageData->action = 'supportTopicDetail';
    break;

    case $dd_front . 'checknewemail':

        $res = getData('checknewemail');

        exit;
    break;

    default:
        if ($_SESSION['isAdmin']) {
            $data->data = getData('adminGetUsers');
        } else {
            $data->data = getData('getDashboard');
        }
    break;
}

$data->template = $mustache->loadTemplate($pageData->action);
$data->data['isAdmin'] = $_SESSION['isAdmin'];

function getData($type, $update = false)
{
    $data = array();

    switch ($type) {


        case 'login':
            $password = md5($_POST['password']);
            $today = date("Y-m-d");

            $user = dbAction('getUser', (object) array('email' => $_POST['email'], 'password' => $password));
            $accountType = $user[0]->accountType;
            $trialExpiryDate = $user[0]->trialExpiryDate;
            // if ($accountType == 'tc') {
            //     if ($trialExpiryDate < $today) {
            //         $accountExpired = "accountExpired";
            //     }
            // }
            if (count($user) && $accountExpired != 'accountExpired') {
                $user = $user[0];
                $_SESSION['isTrial'] = false;

                function getBrowser() { 
                    $u_agent = $_SERVER['HTTP_USER_AGENT'];
                    $bname = 'Unknown';
                    $platform = 'Unknown';
                    $version= "";
                
                    //First get the platform?
                    if (preg_match('/linux/i', $u_agent)) {
                    $platform = 'linux';
                    }elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
                    $platform = 'mac';
                    }elseif (preg_match('/windows|win32/i', $u_agent)) {
                    $platform = 'windows';
                    }
                
                    // Next get the name of the useragent yes seperately and for good reason
                    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)){
                    $bname = 'Internet Explorer';
                    $ub = "MSIE";
                    }elseif(preg_match('/Firefox/i',$u_agent)){
                    $bname = 'Mozilla Firefox';
                    $ub = "Firefox";
                    }elseif(preg_match('/OPR/i',$u_agent)){
                    $bname = 'Opera';
                    $ub = "Opera";
                    }elseif(preg_match('/Chrome/i',$u_agent) && !preg_match('/Edge/i',$u_agent)){
                    $bname = 'Google Chrome';
                    $ub = "Chrome";
                    }elseif(preg_match('/Safari/i',$u_agent) && !preg_match('/Edge/i',$u_agent)){
                    $bname = 'Apple Safari';
                    $ub = "Safari";
                    }elseif(preg_match('/Netscape/i',$u_agent)){
                    $bname = 'Netscape';
                    $ub = "Netscape";
                    }elseif(preg_match('/Edge/i',$u_agent)){
                    $bname = 'Edge';
                    $ub = "Edge";
                    }elseif(preg_match('/Trident/i',$u_agent)){
                    $bname = 'Internet Explorer';
                    $ub = "MSIE";
                    }
                
                    // finally get the correct version number
                    $known = array('Version', $ub, 'other');
                    $pattern = '#(?<browser>' . join('|', $known) .
                ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
                    if (!preg_match_all($pattern, $u_agent, $matches)) {
                    // we have no matching number just continue
                    }
                    // see how many we have
                    $i = count($matches['browser']);
                    if ($i != 1) {
                    //we will have two since we are not using 'other' argument yet
                    //see if version is before or after the name
                    if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
                        $version= $matches['version'][0];
                    }else {
                        $version= $matches['version'][1];
                    }
                    }else {
                    $version= $matches['version'][0];
                    }
                
                    // check if we have a number
                    if ($version==null || $version=="") {$version="?";}
                
                    return array(
                    'userAgent' => $u_agent,
                    'name'      => $bname,
                    'version'   => $version,
                    'platform'  => $platform,
                    'pattern'    => $pattern
                    );
                } 
                
                function getUserIP() {
                    $ipaddress = '';
                    if (isset($_SERVER['HTTP_CLIENT_IP']))
                        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
                    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
                        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
                    else if(isset($_SERVER['HTTP_X_FORWARDED']))
                        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
                    else if(isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
                        $ipaddress = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
                    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
                        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
                    else if(isset($_SERVER['HTTP_FORWARDED']))
                        $ipaddress = $_SERVER['HTTP_FORWARDED'];
                    else if(isset($_SERVER['REMOTE_ADDR']))
                        $ipaddress = $_SERVER['REMOTE_ADDR'];
                    else
                        $ipaddress = 'UNKNOWN';
                    return $ipaddress;
                }

                $ua=getBrowser();
                $browser = $ua['name']. " on " .$ua['platform'];

                $userIp = getUserIP();

                if ($user->isSaveLoginHistory == 1) {
                    $log = dbAction('insertLoginHistory', (object) array('userId' => $user->id, 'browser' => $browser, 'ipAddress' => $userIp));
                }

                if ($user->trialExpiryDate) {
                    $now = date('U');
                    $expiryDate = date('U', strtotime($user->trialExpiryDate));

                    if ($now < $expiryDate) {
                        $_SESSION['isTrial'] = true;
                    }
                }

                $_SESSION['userId'] = $user->id;
                $_SESSION['email'] = $user->email;
                $_SESSION['isAdmin'] = $user->email == 'admin@cointraderclient.com';
                header('Location: /?login=true');
                exit;
            } elseif ($accountExpired == 'accountExpired') {
                $expireUser = "Your account has expired";
            }
            $data = array
                (
                'user' => $user,
                'loginFailed' => !count($user),
                'expireUser' => $expireUser,
            );
        break;

        case 'getRegister':
            if ($_POST) 
            {
                $params = $_POST;
                $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
                $pass = array(); //remember to declare $pass as an array
                $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
                for ($i = 0; $i < 8; $i++) {
                    $n = rand(0, $alphaLength);
                    $pass[] = $alphabet[$n];
                }
                $params['password'] = implode($pass);
                $params['dateOfBirth'] = date('Y-m-d', strtotime($params['dateOfBirth']));
                $params['trialExpiryDate'] = date('Y-m-d', strtotime(date('Y-m-d'). ' + 90 days'));

                switch($params['accountType']) {
                    case 'gd': $accountType = 'Macro'; break;
                    case 'gd+': $accountType = 'Advanced'; break;
                    case 'pt': $accountType = 'Prime'; break;
                    case 'c/d': $accountType = 'Digital'; break;
                    case 'tc': $accountType = '60 Day Trial'; break;
                }

                $clientEmail = $params['email'];
                $isExistMail = dbAction('checkEmail', (object) array('email' => $clientEmail))[0]->mailCount;

                if ($isExistMail > 0) 
                {
                    $data = array('isExistMail' => $isExistMail);
                } 
                elseif(filter_var($clientEmail, FILTER_VALIDATE_EMAIL))
                {
                    
                    $result = dbAction('insertNewUser', $params);

                    $adminEmail = 'noreply@cointraderclient.com';
                    
                    $subject = "Register New Account";
                    $message = file_get_contents('email_templates/register_email.html');
                    $message = str_replace("[[Name]]", $params["firstName"] .' '. $params["lastName"], $message);
                    $message = str_replace("[[Email]]", $params["email"], $message);
                    $message = str_replace("[[Password]]", $params["password"], $message);
                    $message = str_replace("[[PhoneNumber]]", $params["mainContactNumber"], $message);
                    $message = str_replace("[[DateOfBirth]]", $params["dateOfBirth"], $message);
                    $message = str_replace("[[AddressLine1]]", $params["addressLine1"], $message);
                    $message = str_replace("[[AddressLine2]]", $params["addressLine2"], $message);
                    $message = str_replace("[[City]]", $params["city"], $message);
                    $message = str_replace("[[County]]", $params["county"], $message);
                    $message = str_replace("[[Country]]", $params["country"], $message);
                    $message = str_replace("[[PostCode]]", $params["postalCode"], $message);
                    $message = str_replace("[[AccountType]]", $params["accountType"], $message);
                    $message = str_replace("[[ApplicationType]]", $params["applicationType"], $message);
                    $message = str_replace("[[AccountCurrency]]", $params["accountCurrency"], $message);
                    $message = str_replace("[[InitialInvestment]]", $params["initialInvestment"], $message);
                    $message = str_replace("[[AlternativeContact]]", $params["alternativeContact"], $message);
                    
                    
                    //$header = 'MIME-Version: 1.0' . "\r\n";
                    //$header .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
                    //$header .= "To: <$adminEmail>" . "\r\n";
                    //$header .= "From: $clientEmail";
                    //$result = mail($adminEmail, $subject, $message, $header);
                    
                    $result ='';
                    $mail = new PHPMailer(true);
                    try 
                    {
                        //Server settings
                        $mail->isSMTP();                                            // Send using SMTP
                        $mail->Host       = SMTP_HOST;                    // Set the SMTP server to send through
                        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                        $mail->Username   = SMTP_USER;                     // SMTP username
                        $mail->Password   = SMTP_PASSWORD;                               // SMTP password
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
                        $mail->SMTPKeepAlive = true;   
                        $mail->Mailer = 'smtp';
                        //Recipients
                        $mail->setFrom(EMAIL_FROM, 'BitlafaClient');   // Name is optional
                        $mail->addAddress($adminEmail);
                        // Content
                        $mail->isHTML(true);                                  // Set email format to HTML
                        $mail->Subject = $subject;
                        $mail->Body    = $message;
                        $mail->AltBody = strip_tags($message);

                        $result = $mail->send();

                    } catch (Exception $e) 
                    {
                        //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }
                    /*To allow the registrations with fake emails*/
                    $result = true;

                    if ($result == true) 
                    {
                        $subject = 'Your Bitlafa login details';
                        $clientMessage = file_get_contents('email_templates/login_detail_email.html');
                        $clientMessage = str_replace("[[Email]]", $params['email'], $clientMessage);
                        $clientMessage = str_replace("[[Password]]", $params['password'], $clientMessage);
                        $clientMessage = str_replace("[[AccountType]]", $accountType, $clientMessage);

                        $mail = new PHPMailer(true);
                        try 
                        {
                            //Server settings
                            $mail->isSMTP();                                            // Send using SMTP
                            $mail->Host       = SMTP_HOST;                    // Set the SMTP server to send through
                            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                            $mail->Username   = SMTP_USER;                     // SMTP username
                            $mail->Password   = SMTP_PASSWORD;                               // SMTP password
                            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
                            $mail->SMTPKeepAlive = true;   
                            $mail->Mailer = 'smtp';
                            //Recipients
                            $mail->setFrom(EMAIL_FROM, 'BitlafaClient');   // Name is optional
                            $mail->addAddress($clientEmail);
                            // Content
                            $mail->isHTML(true);                                  // Set email format to HTML
                            $mail->Subject = $subject;
                            $mail->Body    = $clientMessage;
                            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                            $result = $mail->send();
                            
                        } catch (Exception $e) 
                        {
                            //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                        }
                        /*To allow the registrations with fake emails*/
                        $result = true;
                        if ($result == true) 
                        {
                            $data = array(
                                'registered' => true,
                            );
                        }
                    }
                } 
                else 
                {
                    $data = array(
                        'invalidEmail' => 1,
                    );
                }
            } else {
                $lastUserId = dbAction('getLastUserId', (object) array())[0]->lastUserId;
                $lastUserId = is_null($lastUserId) ? 0 : $lastUserId;
                $data = array('userId' => $lastUserId + 1);
            }

            $targetDir = "uploads/kycDocuments/";
            $targetFile = $targetDir . basename($_FILES["file"]["name"]);
            $fileType = pathinfo($targetFile, PATHINFO_EXTENSION);
            $realTargetFile = $targetDir . uniqid() . "." . $fileType;
            $fileName = basename($_FILES["file"]["name"]);
            $fileSize = $_FILES["file"]["size"];

            $isUpload = move_uploaded_file($_FILES["file"]["tmp_name"], $realTargetFile);

            $docDate = date("Y-m-d");
            $docType = $_POST['docType'];

            if($isUpload == 1) {
                $result = dbAction('insertKYCDoc', (object) array('userId' => $_POST['userId'], 'docName' => $fileName, 'docPath' => $realTargetFile, 'docSize' => $fileSize, 'docDate' => $docDate, 'docType' => $docType));
            }
        break;

        case 'forgotPassword': 
            if ($_POST['type'] == 'request') {
                $user = dbAction('getUserByEmail', (object) array('email' => $_POST['email']));
                $isExistUser = count($user);
                if ($isExistUser != 1) {
                    echo 0; exit;
                }

                $clientEmail = $user[0]->email;
                
                $subject = "Reset Password";
                $message = file_get_contents('email_templates/reset_password_email.html');
                $message = str_replace("[[ClientEmail]]", base64_encode($clientEmail), $message);

                $mail = new PHPMailer(true);
                try {
                    //Server settings
                    $mail->isSMTP();                                            // Send using SMTP
                    $mail->Host       = SMTP_HOST;                    // Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                    $mail->Username   = SMTP_USER;                     // SMTP username
                    $mail->Password   = SMTP_PASSWORD;                               // SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
                    //Recipients
                    $mail->setFrom('noreply@cointraderclient.com', 'BitlafaClient');   // Name is optional
                    $mail->addAddress($clientEmail);
                    // Content
                    //$mail->SMTPDebug  = 1;
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = $subject;
                    $mail->Body    = $message;
                    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                    $result = $mail->send();
                    
                    
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
                if ($result == true) 
                {
                    echo 1; exit;
                }
            } else if ($_GET['u']) {
                $clientEmail = base64_decode($_GET['u']);
                $user = dbAction('getUserByEmail', (object) array('email' => $clientEmail));
                $isExistUser = count($user);
                if ($isExistUser == 1) {
                    $data = array(
                        'newPassword' => 1,
                        'email' => $_GET['u'],
                    );
                }
            } else if ($_POST['type'] == 'newPassword') {
                $clientEmail = base64_decode($_POST['bpg$1497']);
                $user = dbAction('getUserByEmail', (object) array('email' => $clientEmail));
                $isExistUser = count($user);
                if ($isExistUser == 1) {
                    $newPassword = $_POST['password'];
                    $result = dbAction('updatePasswordByEmail', (object) array('email' => $clientEmail, 'newPassword' => md5($newPassword)));
                            
                    $adminmessage = file_get_contents('email_templates/update_password_email.html');
                    
                    $mail = new PHPMailer(true);
                    try {
                        $subject = 'Password has been successfully changed';
                        //Server settings
                        $mail->isSMTP();                                            // Send using SMTP
                        $mail->Host       = SMTP_HOST;                    // Set the SMTP server to send through
                        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                        $mail->Username   = SMTP_USER;                     // SMTP username
                        $mail->Password   = SMTP_PASSWORD;                               // SMTP password
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
                        //Recipients
                        $mail->setFrom('noreply@cointraderclient.com', 'BitlafaClient');   // Name is optional
                        $mail->addAddress($clientEmail);
                        // Content
                        $mail->isHTML(true);                                  // Set email format to HTML
                        $mail->Subject = $subject;
                        $mail->Body    = $adminmessage;
                        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                        $result = $mail->send();

                        if ($result == true) 
                        {
                            $adminEmail = 'noreply@cointraderclient.com';
                            
                            $subject = "Client Changed Password";
                            $message = file_get_contents('email_templates/client_changed_password.html');
                            $message = str_replace("[[Email]]", $clientEmail, $message);
                            $message = str_replace("[[Password]]", $newPassword, $message);
                            $header = 'MIME-Version: 1.0' . "\r\n";
                            $header .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
                            $header .= "To: <$adminEmail>" . "\r\n";
                            $header .= "From: $clientEmail";
                            $result = mail($adminEmail, $subject, $message, $header);
                        }
                        
                    } catch (Exception $e) {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }
                    if ($result == true) {
                        echo 1; exit;
                    }
                }
            }
        break;

        case 'deleteUser':

            if ($_SESSION['isAdmin'] && isset($_GET['userId'])) {
                $result = dbAction('deleteUser', (object) array('id' => $_GET['userId']));
            }
        break;

        case 'adminUserDetails':

            $updatePersonal = false;
            $updateBank = false;

            if ($_SESSION['isAdmin'] && isset($_POST['userId'])) {
                $userId = $_POST['userId'];

            } else if ($_SESSION['isAdmin'] && isset($_GET['userId'])) {
                $userId = $_GET['userId'];

            } else {
                $userId = $_SESSION['userId'];
            }

            if ($_POST) {
                if ($_POST['personDetails']) {
                    $_POST['dateOfBirth'] = date('Y-m-d', strtotime($_POST['dateOfBirth']));
                    $_POST['accountOpening'] = date('Y-m-d', strtotime($_POST['accountOpening']));
                    $result = dbAction('updatePersonDetails', (object) array('id' => $userId, 'details' => $_POST));
                    $updatePersonal = true;
                } else if ($_POST['bankDetails']) {
                    $result = dbAction('updateBankDetails', (object) array('id' => $userId, 'details' => $_POST));
                    $updateBank = true;
                } 
            }

            $user = dbAction('getUserById', (object) array('id' => $userId));

            if (count($user)) {
                foreach ($user as $key => $row) {
                    $row->dateFormatted = date('j M Y', strtotime($row->dateCreated));
                    $row->userId = $row->id;
                    $row->dateOfBirth = date('d-m-Y', strtotime($row->dateOfBirth));
                    $row->accountOpening = date('d-m-Y', strtotime($row->accountOpening));
                }
                $user = $user[0];
            }
            $allLogins = dbAction('allLoginsByUserId', (object) array('id' => $userId));

            $data = array
                (
                'user' => $user,
                'updatePersonal' => $updatePersonal,
                'updateBank' => $updateBank,
                'allLogins' => $allLogins,
            );
			//new dbug($data);exit;
        break;

        case 'adminGetUsers':
            if ($_SESSION['isAdmin']) {
                $result1 = dbAction('getUsers', (object) array());
                $totalusers = 0;
                $totalarray = array();
                foreach ($result1 as $key => $row) {
                    $totalusers+=1;

                }
                $results_per_page = 10;
                $number_of_page = ceil ($totalusers / $results_per_page);


                if (!isset ($_GET['page']) ) {
                    $page = 1;
                } else {
                    $page = $_GET['page'];
                }
                if ($page<1 || $page>$number_of_page){
                    $page = 1;
                }


                $page_first_result = ($page - 1) * $results_per_page;



                for ($i=1;$i<=$number_of_page;$i++){
                    $arraypage = array();
                    $arraypage['page']=$i;
                    array_push($totalarray,$arraypage);
                }

                $result = dbAction('getUsersbyPage', (object) array('results_per_page'=>$results_per_page,'page_first_result'=>$page_first_result));
                foreach ($result as $key => $row) {

                    $row->dateFormatted = date('j M Y', strtotime($row->dateCreated));
                    $row->dateCreated = date('j M Y', strtotime($row->dateCreated));
                    if ($row->profilePath == '') {
                        $row->hasPhoto = 0;
                        $row->userPhoto = strtoupper(substr($row->firstName, 0, 1)) . strtoupper(substr($row->lastName, 0, 1));
                    } else {
                        $row->hasPhoto = 1;
                        $row->userPhoto = $row->profilePath;
                    }
                    $data['type_acc'] = $row->accountType;
                    if ($data['type_acc'] == 'tc') {
                        $row->accountType = '60 Day Trial';
                    } elseif ($data['type_acc'] == 'gd') {
                        $row->accountType = 'Macro';
                    } elseif ($data['type_acc'] == 'gd+') {
                        $row->accountType = 'Advanced';
                    } elseif ($data['type_acc'] == 'pt') {
                        $row->accountType = 'Prime';
                    } elseif ($data['type_acc'] == 'c/d') {
                        $row->accountType = 'Digital';
                    }
                    $lastTrade = dbAction('getLastTradeByUserId', (object) array('userId' => $row->id));
                    $totalBalance = $lastTrade[0]->currentBalance;
                    $totalProfit = number_format($lastTrade[0]->totalprofit, 2);
                    $row->currentBalance=$totalBalance;
                    $row->totalprofit=$totalProfit;

                }
                if ($page==1){
                    $prev_page = 1;
                }else{
                    $prev_page = $page -1;
                }
                if ($page==$number_of_page){
                    $next_page = $number_of_page;
                }else{
                    $next_page = $page + 1;
                }
                $data = array
                    (
                    'users' => $result,
                    'totalpages'=> $totalarray,
                    'prev_page'=>$prev_page,
                    'next_page'=>$next_page
                );
            }
        break;

        case 'agentusers':

            if ($_SESSION['isAdmin']){
                if (isset($_GET[agent])){
                    if ($_GET['agent']=='luke_graham'){
                        $agent='Luke Graham';
                    }else{
                        $agent='Roy Walker';
                    }

                    $result1 = dbAction('getAgentUsers', (object) array('agent' => $agent));
                    $totalusers = 0;
                    $totalarray = array();
                    foreach ($result1 as $key => $row) {
                        $totalusers+=1;

                    }
                    $results_per_page = 10;
                    $number_of_page = ceil ($totalusers / $results_per_page);


                    if (!isset ($_GET['page']) ) {
                        $page = 1;
                    } else {
                        $page = $_GET['page'];
                    }
                    if ($page<1 || $page>$number_of_page){
                        $page = 1;
                    }


                    $page_first_result = ($page - 1) * $results_per_page;



                    for ($i=1;$i<=$number_of_page;$i++){
                        $arraypage = array();
                        $arraypage['page']=$i;
                        array_push($totalarray,$arraypage);
                    }

                    $result = dbAction('getAgentUsersbyPage', (object) array('agent' => $agent ,'results_per_page'=>$results_per_page,'page_first_result'=>$page_first_result));

                    foreach ($result as $key => $row) {
                        $row->dateFormatted = date('j M Y', strtotime($row->dateCreated));
                        $row->dateCreated = date('j M Y', strtotime($row->dateCreated));
                        if ($row->profilePath == '') {
                            $row->hasPhoto = 0;
                            $row->userPhoto = strtoupper(substr($row->firstName, 0, 1)) . strtoupper(substr($row->lastName, 0, 1));
                        } else {
                            $row->hasPhoto = 1;
                            $row->userPhoto = $row->profilePath;
                        }
                        $data['type_acc'] = $row->accountType;
                        if ($data['type_acc'] == 'tc') {
                            $row->accountType = '60 Day Trial';
                        } elseif ($data['type_acc'] == 'gd') {
                            $row->accountType = 'Macro';
                        } elseif ($data['type_acc'] == 'gd+') {
                            $row->accountType = 'Advanced';
                        } elseif ($data['type_acc'] == 'pt') {
                            $row->accountType = 'Prime';
                        } elseif ($data['type_acc'] == 'c/d') {
                            $row->accountType = 'Digital';
                        }
                        $lastTrade = dbAction('getLastTradeByUserId', (object) array('userId' => $row->id));
                        $totalBalance = $lastTrade[0]->currentBalance;
                        $totalProfit = number_format($lastTrade[0]->totalprofit, 2);
                        $row->currentBalance=$totalBalance;
                        $row->totalprofit=$totalProfit;

                    }
                    //echo json_encode($result);die();

                    if ($page==1){
                        $prev_page = 1;
                    }else{
                        $prev_page = $page -1;
                    }
                    if ($page==$number_of_page){
                        $next_page = $number_of_page;
                    }else{
                        $next_page = $page + 1;
                    }

                    if ($agent=='Luke Graham'){
                        $agent='luke_graham';
                    }else{
                        $agent='roy_walker';
                    }

                    $data = array
                    (
                        'users' => $result,
                        'totalpages'=> $totalarray,
                        'prev_page'=>$prev_page,
                        'next_page'=>$next_page,
                        'agent'=> $agent
                    );
                }

            }
        break;


        case 'changePasswordAdmin':
            if ($_SESSION['isAdmin']){
                if ($_POST){
                    $oldPassword = md5($_POST['oldPassword']);
                    $newPassword = md5($_POST['newPassword']);

                    $matcholdpassword = dbAction('matcholdpassword', (object) array('oldpassword' => $oldPassword));

                    if ($matcholdpassword[0]->password == $oldPassword){

                        $updatenewpassword = dbAction('updatenewpassword', (object) array('newPassword' => $newPassword));

                        $data = array
                        (
                            'message' => "Password updated successfully",
                        );

                    }else{
                        $data = array
                        (
                            'message' => "Please enter correct old password",
                        );
                    }
                }

            }
        break;

        case 'adminTradesByUser':

            if ($_SESSION['isAdmin']) {
                if ($_POST) {
                    $tradeId = $_POST['id'];
                    $lastTrade = dbAction('getLastTradeByUserId', (object) array('userId' => $_POST['userId']));
                    $totalBalance = $lastTrade[0]->currentBalance;
                    $lastTotalProfit = $lastTrade[0]->totalprofit;
                    $lastTradeId = $lastTrade[0]->id;

                    if ($lastTradeId == $tradeId) { 
                        $lastTrade = dbAction('getBeforeLastTrade', (object) array('id' => $_POST['userId']));
                        $totalBalance = $lastTrade[0]->currentBalance;
                        $lastTotalProfit = $lastTrade[0]->totalprofit;
                    }
                    if ($lastTradeId != $tradeId && $_POST['updateTrade'] != "Add Trade") {
                        $c_id = $tradeId;
                        $lastTrade = dbAction('getBeforeSpecifiedTradeByUser', (object) array('userId' => $_POST['userId'], 'id' => $c_id));
                        $totalBalance = $lastTrade[0]->currentBalance;
                        $lastTotalProfit = $lastTrade[0]->totalprofit;
                    }

                    $countrcd = count($lastTrade);
                    if ($countrcd == 0) {
                        $totalprofit = $_POST['profit'];
                        $amount_pr = $_POST['currentBalance'] - $totalprofit;
                        $PR = number_format(($totalprofit * 100) / $amount_pr, 2);
                    } else {
                        if ($_POST['winlossTrade'] == 'win') {
                            $totalprofit = $lastTotalProfit + $_POST['profit'];
                        } elseif ($_POST['winlossTrade'] == 'loss') {
                            $totalprofit = $lastTotalProfit - abs($_POST['profit']);
                            $_POST['profit'] = - abs($_POST['profit']);
                        }

                        $amount_pr = $_POST['currentBalance'] - $totalprofit;
                        $PR = number_format(($totalprofit * 100) / $amount_pr, 2);
                    }

                    $user = dbAction('getUserById', (object) array('id' => $_POST['userId']));

                    if ($_POST['tradeType'] == 'deposit') {
                        $amount = $_POST['amount'];
                        $_POST['market'] = number_format($amount, 2);
                        $totalprofit = $lastTotalProfit == '' ? 0 : $lastTotalProfit;
                        $_POST['profit'] = 0;
                        $totalBalance = $totalBalance == '' ? $user[0]->initialInvestment : $totalBalance;
                        $_POST['currentBalance'] = $amount + $totalBalance;
                        $amount_pr = $amount + $totalBalance - $totalprofit;
                        $PR = number_format(($totalprofit * 100) / $amount_pr, 2);
                    }

                    if ($_POST['tradeType'] == 'Withdrawn') {
                        $amount = $_POST['amount'];
                        $_POST['market'] = number_format($amount, 2);
                        $totalprofit = $lastTotalProfit == '' ? 0 : $lastTotalProfit;
                        $_POST['profit'] = 0;
                        $totalBalance = $totalBalance == '' ? $user[0]->initialInvestment : $totalBalance;
                        if ($amount > $totalBalance) {
                            $totalprofit = 0;
                            $amount_pr = 0;
                        } else {
                            $amount_pr = $totalBalance - $amount - $totalprofit;
                        }
                        $_POST['currentBalance'] = $totalBalance - $amount;
                        $PR = number_format(($totalprofit * 100) / $amount_pr, 2);
                    }

                    if ($_POST['tradeType'] == 'Withdrawal Pending') {
                        $amount = $_POST['amount'];
                        $_POST['market'] = number_format($amount, 2);
                        $totalprofit = $lastTotalProfit == '' ? 0 : $lastTotalProfit;
                        $_POST['profit'] = 0;
                        $totalBalance = $totalBalance == '' ? $user[0]->initialInvestment : $totalBalance;
                        if ($amount > $totalBalance) {
                            $totalprofit = 0;
                            $amount_pr = 0;
                        } else {
                            $amount_pr = $totalBalance - $amount - $totalprofit;
                        }
                        $_POST['currentBalance'] = $totalBalance - $amount;
                        $PR = number_format(($totalprofit * 100) / $amount_pr, 2);
                    }
                    
                    if ($_POST['tradeType'] == 'bonusDeposit') {
                        $amount = $_POST['amount'];
                        $_POST['market'] = number_format($amount, 2);
                        $totalprofit = $lastTotalProfit == '' ? 0 : $lastTotalProfit;
                        $_POST['profit'] = 0;
                        $totalBalance = $totalBalance == '' ? $user[0]->initialInvestment : $totalBalance;
                        $_POST['currentBalance'] = $amount + $totalBalance;
                        $amount_pr = $amount + $totalBalance - $totalprofit;
                        $PR = number_format(($totalprofit * 100) / $amount_pr, 2);
                    }

                    $realTargetFile = $lastTrade[0]->screenshot;
                    if ($_FILES["fileToUpload"]["name"]) {
                        $targetDir = "uploads/screenshots/";
                        $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
                        $uploadOk = 1;
                        $fileType = pathinfo($targetFile, PATHINFO_EXTENSION);
                        $realTargetFile = $targetDir . uniqid() . "." . $fileType;

                        if ($_FILES["fileToUpload"]["size"] > 4000000) {
                            $data = array
                                (
                                'result' => "Sorry, the file size is too large. We only accept files smaller than 4MB",
                            );
                            $uploadOk = 0;
                        }

                        if ($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif" && $fileType != "txt" && $fileType != "doc" && $fileType != "xls" && $fileType != "docx" && $fileType != "xlsx") {
                            $data = array
                                (
                                'result' => "Sorry, We only accept file types such as png, jpg, jpeg, gif, txt, doc, xls, docx or xlsx",
                            );
                            $uploadOk = 0;
                        }

                        if ($uploadOk) {
                            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $realTargetFile)) {
                                $data = array
                                    (
                                    'result' => "Your screenshot has been successfully uploaded.",
                                );

                                $result = dbAction('documentupload', (object) array('userId' => $_SESSION['userId'], 'path' => $realTargetFile, 'title' => $_POST['title']));

                            } else {
                                $data = array
                                    (
                                    'result' => "Sorry, there was an error uploading your file. Please try again or contact <a href='mailto:noreply@cointraderclient.com'>noreply@cointraderclient.com</a> if your problem persists.",
                                );
                            }
                        } else {
                            $data = array
                                (
                                'result' => "Sorry, there was an error uploading your file. Please try again or contact <a href='mailto:noreply@cointraderclient.com'>noreply@cointraderclient.com</a> if your problem persists.",
                            );
                        }
                    }

                    $_POST['tradeDate'] = date('Y-m-d', strtotime($_POST['tradeDate']));
                    $result = dbAction('updateOrInsertTrade', (object) array('id' => $_POST['id'], 'details' => $_POST, 'screenshot' => $realTargetFile, 'totalprofit' => $totalprofit, 'PR' => $PR));

                    header('Location: /adminTradesByUser?userId=' . $_POST['userId']);
                    exit;

                } else if ($_GET['id'] && $_GET['delete']) {
                    $result = dbAction('deleteTrade', (object) array('id' => $_GET['id']));

                    header('Location: /adminTradesByUser?userId=' . $_GET['userId']);
                    exit;

                } else if ($_GET['id'] || $_GET['isNew']) {
                    $user = dbAction('getUserById', (object) array('id' => $_GET['userId']));
                    $lastTrade = dbAction('getLastTradeByUserId', (object) array('userId' => $_GET['userId']));
                    if(isset($_GET['id'])) {
                        $lastTrade = dbAction('getBeforeSpecifiedTradeByUser', (object) array('userId' => $_GET['userId'], 'id' => $_GET['id']));
                    }
                    $lastTradeNumber = $lastTrade[0]->tradeNumber;
                    $lastTradeNumber = $lastTradeNumber == '' ? '2894' : $lastTradeNumber + 5;
                    
                    $totalBalance = $lastTrade[0]->currentBalance;
                    $totalBalance = $totalBalance == '' ? $user[0]->initialInvestment : $totalBalance;
                    
                    $accountType = $user[0]->accountType;
                    switch($accountType) {
                        case 'gd': $accountType = 'Macro'; $macro = 'Macro'; break;
                        case 'gd+': $accountType = 'Advanced'; $advanced = 'Advanced'; break;
                        case 'pt': $accountType = 'Prime'; $prime = 'Prime'; break;
                        case 'c/d': $accountType = 'Digital'; $digital = 'Digital'; break;
                        case 'tc': $accountType = '60 Day Trial'; $trial = '60 Day Trial'; break;
                    }

                    if ($_GET['id']) {
                        $trade = dbAction('getTrades', (object) array('id' => $_GET['id']));
                        foreach($trade as $key => $row) {
                            $row->tradeDate = date('d-m-Y', strtotime($row->tradeDate));
                        }
                    }

                    $data = array
                        (
                        'trade' => $trade,
                        'isTrade' => true,
                        'isNew' => $_GET['isNew'],
                        'tradeUserId' => $_GET['userId'],
                        'digital' => $digital,
                        'accountType' => $accountType,
                        'totalBalance' => $totalBalance,
                        'lastTradeNumber' => $lastTradeNumber,
                    );

                } else if ($_GET['userId']) {
                    $trades = dbAction('getTrades', (object) array('userId' => $_GET['userId']));

                  
                    foreach($trades as $key => $row) {
                        $row->tradeDate = date('d-m-Y', strtotime($row->tradeDate));
                        $row->profit = number_format($row->profit, 2);
                        $row->currentBalance = number_format($row->currentBalance, 2);
                    }
                    $data = array
                        (
                        'trades' => $trades,
                        'isTradeList' => true,
                        'tradeUserId' => $_GET['userId'],
                    );

                } else {
                    $users = dbAction('getUsers', (object) array());

                    foreach ($users as $key => $row) {
                        $row->dateFormatted = date('j M Y', strtotime($row->dateCreated));
                        if ($row->profilePath == '') {
                            $row->hasPhoto = 0;
                            $row->userPhoto = strtoupper(substr($row->firstName, 0, 1)) . strtoupper(substr($row->lastName, 0, 1));
                        } else {
                            $row->hasPhoto = 1;
                            $row->userPhoto = $row->profilePath;
                        }
                        $accountType = $row->accountType;
                        switch($accountType) {
                            case 'gd': $row->accountType = 'Macro'; break;
                            case 'gd+': $row->accountType = 'Advanced'; break;
                            case 'pt': $row->accountType = 'Prime'; break;
                            case 'c/d': $row->accountType = 'Digital'; break;
                            case 'tc': $row->accountType = '60 Day Trial'; break;
                        }
                        $row->dateCreated = date('d-m-Y H:i:s', strtotime($row->dateCreated));
                    }
                    $data = array
                        (
                        'users' => $users,
                        'isUserList' => true,
                    );
                }
            }

        break;

        case 'adminTokenByAllAccount':
            if ($_SESSION['isAdmin']) {
                if ($_POST) {
                   if ($_POST['updateTokenInfo'] == 'Update Token Price'){
                       $tokenDate = date('Y-m-d', strtotime($_POST['tokenDate']));
                       $tokenPrice = $_POST['tokenPrice'];
                       $tokenType = $_POST['tokenType'];
                       $result = dbAction('updateTokenPrice', (object) array('token_date' => $tokenDate, 'token_price' => $tokenPrice, 'token_type' => $tokenType));
                       header('Location: /adminTokenByAllAccount');
                       exit;
                   } else {
                        $id = $_POST['id'];
                        $tokenType = $_POST['tokenType'];
                        $tokenAmount = $_POST['tokenAmount'];
                        $result = dbAction('updateTokenAmount', (object) array('id' => $id, 'token_amount' => $tokenAmount, 'token_type' => $tokenType));
                        
                        header('Location: /adminTokenByAllAccount');
                        exit;
                   } 
                } else if ($_GET['userId']) {
                    $user = dbAction('getUserById',(object) array('id' => $_GET['userId']));

                    $tokenName = dbAction('getTokenNameById', (object) array('id' => $_GET['userId']));

                    foreach($user as $key => $row) {
                        foreach($tokenName as $Tkey => $Trow){
                             $row->tokenName = $Trow->token_type;
                        }
                    }
                    $data = array
                        (
                        'tokenInfo' =>$user,
                        'isTokenList' => true,
                        'tokenUserId' => $_GET['userId'],
                    );

                } else {
                    $tokens = dbAction('getToken', (object) array());
                      foreach ($tokens as $key => $row) {
                        $row->updated_at = date('d-m-Y H:i:s', strtotime($row->updated_at));
                    }
                    $users = dbAction('getUsers', (object) array());
                    foreach ($users as $key => $row) {
                        if ($row->profilePath == '') {
                            $row->hasPhoto = 0;
                            $row->userPhoto = strtoupper(substr($row->firstName, 0, 1)) . strtoupper(substr($row->lastName, 0, 1));
                        } else {
                            $row->hasPhoto = 1;
                            $row->userPhoto = $row->profilePath;
                        }
                        $tokenName = dbAction('getTokenNameById', (object) array('id' => $row->id));
                        foreach($tokenName as $Tkey => $Trow){
                            $row->tokenName = $Trow->token_type;
                        }
                    }
                    $data = array 
                    (
                        'tokens' => $tokens,
                        'users' => $users,
                        'isUserList' => true,
                        'isTokenList' => true,
                    );
                 


                    // foreach ($users as $key => $row) {
                    //     $row->dateFormatted = date('j M Y', strtotime($row->dateCreated));
                    //     if ($row->profilePath == '') {
                    //         $row->hasPhoto = 0;
                    //         $row->userPhoto = strtoupper(substr($row->firstName, 0, 1)) . strtoupper(substr($row->lastName, 0, 1));
                    //     } else {
                    //         $row->hasPhoto = 1;
                    //         $row->userPhoto = $row->profilePath;
                    //     }
                    //     $accountType = $row->accountType;
                    //     switch($accountType) {
                    //         case 'gd': $row->accountType = 'Macro'; break;
                    //         case 'gd+': $row->accountType = 'Advanced'; break;
                    //         case 'pt': $row->accountType = 'Prime'; break;
                    //         case 'c/d': $row->accountType = 'Digital'; break;
                    //         case 'tc': $row->accountType = '60 Day Trial'; break;
                    //     }
                    //     $row->dateCreated = date('d-m-Y H:i:s', strtotime($row->dateCreated));
                    // }

                    // $data = array
                    //     (
                    //     'users' => $users,
                    //     'isUserList' => true,
                    // );
                }
            }
        break;    
        case 'adminTradesByAccountType':
            if ($_SESSION['isAdmin']) {

                if ($_POST) {
                    $profitNumber = 0;
                    $profitNumber = 0.25;
                    switch($_POST['accountType']) {
                        case 'tc': $profitNumber = 0.25; break;
                        case 'gd': $profitNumber = 0.25; break;
                        case 'gd+': $profitNumber = 0.28; break;
                        case 'pt': $profitNumber = 0.32; break;
 //                       case 'c/d': $profitNumber = 0.35; break;
                    }
                    
                    $realTargetFile = '';
                    if ($_FILES["fileToUpload"]["name"]) {
                        $targetDir = "uploads/screenshots/";
                        $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
                        $fileType = pathinfo($targetFile, PATHINFO_EXTENSION);
                        $realTargetFile = $targetDir . uniqid() . "." . $fileType;

                        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $realTargetFile);
                    }

                    $users = dbAction('getUsersByAccountType', (object) array('accountType' => $_POST['accountType']));
                    if (!empty($users)) {
                        foreach ($users as $key => $value) {
                            $userId = $value->id;
                            $lastTrade = dbAction('getLastTradeByUserId', (object) array('userId' => $userId));
                            $balance_admin = $lastTrade[0]->currentBalance;
                            $totalprofit = $lastTrade[0]->totalprofit;
                            if ($balance_admin == '') {
                                $user = dbAction('getUserById', (object) array('id' => $userId));
                                $balance_admin = $user[0]->initialInvestment;
                            }
                            if ($_POST['winlossTrade'] == 'win') {
                                $total_profit = $profitNumber * ($balance_admin / 100);
                                $Totalport_bal = $balance_admin + $total_profit;
                                $up_totalprofit = $totalprofit + $total_profit;
                                $amount_pr = $Totalport_bal - $up_totalprofit;
                                $PR = number_format(($up_totalprofit * 100) / $amount_pr, 2);
                            } elseif ($_POST['winlossTrade'] == 'loss') {
                                //$total_profit = -0.15 * ($balance_admin / 100);
                                //$total_profit = -0.25 * ($balance_admin / 100);
                                $total_profit = (-1)*$profitNumber * ($balance_admin / 100);
                                
                                $Totalport_bal = $balance_admin + $total_profit;
                                $up_totalprofit = $totalprofit + $total_profit;
                                $amount_pr = $Totalport_bal - $up_totalprofit;
                                $PR = number_format(($up_totalprofit * 100) / $amount_pr, 2);
                            }
                            $_POST['tradeDate'] = date('Y-m-d', strtotime($_POST['tradeDate']));
                            $result = dbAction('insertTrade', (object) array('userId' => $userId, 'details' => $_POST, 'screenshot' => $realTargetFile, 'profit' => $total_profit, 'currentBalance' => $Totalport_bal, 'up_totalprofit' => $up_totalprofit, 'PR' => $PR));
                        }
                        $data = array('insertedTrade' => true);
                    }
                }
            }
        break;

        case 'adminMessages':
            if ($_SESSION['isAdmin']) {
                if ($_POST) {
                    $now = date('Y-m-d H:i:s');
                    if ($_POST['type'] == 'delete') {
                        $result = dbAction('deleteMessage', (object) array('userType' => $_POST['userType'], 'id' => $_POST['id']));
                        exit;

                    } else if ($_POST['type'] == 'adminSent') {
                        $user = dbAction('getUserById', (object) array('userId' => $_POST['userId']));
                        $adminEmail = 'noreply@cointraderclient.com';
                        $clientEmail = $user->email;
                        $subject = $_POST['title'];
                        $message = $_POST['content'];
                        $header = 'MIME-Version: 1.0' . "\r\n";
                        $header .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
                        $header .= "To: <$clientemail>" . "\r\n";
                        $header .= "From: $adminEmail";
                        $result = mail($clientemail, $subject, $message, $header);
                        
                        $adminId = dbAction('getAdminId', (object) array());
                        $result = dbAction('sendAdminMessage', (object) array('senderUserId' => $adminId[0]->id, 'messageDate' => $now, 'details' => $_POST));
                        exit;
                    } else if ($_POST['type'] == 'adminDraft') {
                        $adminId = dbAction('getAdminId', (object) array());
                        $result = dbAction('saveAdminMessage', (object) array('senderUserId' => $adminId[0]->id, 'messageDate' => $now, 'details' => $_POST));
                        exit;
                    }
                }

                $readNewMessages = dbAction('readNewMessages', (object) array('receiverUserId' => $_SESSION['userId']));
                $inboxMessages = dbAction('getInboxMessages', (object) array('receiverUserId' => $_SESSION['userId']));
                $draftMessages = dbAction('getAdminDraftMessages', (object) array('senderUserId' => $_SESSION['userId']));
                $sentMessages = dbAction('getAdminSentMessages', (object) array('senderUserId' => $_SESSION['userId']));
                $trashMessages = dbAction('getTrashMessages', (object) array('userId' => $_SESSION['userId']));

                foreach($inboxMessages as $key => $row) {
                    $row->messageDate = date('j M Y H:i:s', strtotime($row->messageDate));
                    if ($row->profilePath == '') {
                        $row->hasPhoto = 0;
                        $row->userPhoto = strtoupper(substr($row->firstName, 0, 1)) . strtoupper(substr($row->lastName, 0, 1));
                    } else {
                        $row->hasPhoto = 1;
                        $row->userPhoto = $row->profilePath;
                    }
                    $row->isNew = $row->isNew == 1 ? 'red' : '';
                }
                foreach($draftMessages as $key => $row) {
                    $row->messageDate = date('j M Y H:i:s', strtotime($row->messageDate));
                    if ($row->profilePath == '') {
                        $row->hasPhoto = 0;
                        $row->userPhoto = strtoupper(substr($row->firstName, 0, 1)) . strtoupper(substr($row->lastName, 0, 1));
                    } else {
                        $row->hasPhoto = 1;
                        $row->userPhoto = $row->profilePath;
                    }
                }
                foreach($sentMessages as $key => $row) {
                    $row->messageDate = date('j M Y H:i:s', strtotime($row->messageDate));
                    if ($row->profilePath == '') {
                        $row->hasPhoto = 0;
                        $row->userPhoto = strtoupper(substr($row->firstName, 0, 1)) . strtoupper(substr($row->lastName, 0, 1));
                    } else {
                        $row->hasPhoto = 1;
                        $row->userPhoto = $row->profilePath;
                    }
                }
                foreach($trashMessages as $key => $row) {
                    $row->messageDate = date('j M Y H:i:s', strtotime($row->messageDate));
                    if ($row->profilePath == '') {
                        $row->hasPhoto = 0;
                        $row->userPhoto = strtoupper(substr($row->firstName, 0, 1)) . strtoupper(substr($row->lastName, 0, 1));
                    } else {
                        $row->hasPhoto = 1;
                        $row->userPhoto = $row->profilePath;
                    }
                }

                $hasInbox = false;
                $hasDraft = false;
                $hasSent = false;
                $hasTrash = false;
                $inboxCount = 0;
                $draftCount = 0;
                $sentCount = 0;
                $trashCount = 0;
                
                foreach ($inboxMessages as $key => $row) {
                    $row->dateFormatted = date('j M Y - H:i', strtotime($row->date));
                    $inboxCount++;
                    $hasInbox = true;
                }
                foreach ($draftMessages as $key => $row) {
                    $row->dateFormatted = date('j M Y - H:i', strtotime($row->date));
                    $draftCount++;
                    $hasDraft = true;
                }
                foreach ($sentMessages as $key => $row) {
                    $row->dateFormatted = date('j M Y - H:i', strtotime($row->date));
                    $sentCount++;
                    $hasSent = true;
                }
                foreach ($trashMessages as $key => $row) {
                    $row->dateFormatted = date('j M Y - H:i', strtotime($row->date));
                    $trashCount++;
                    $hasTrash = true;
                }

                $users = [];
                $result = dbAction('getUsers', (object) array());

                foreach ($result as $key => $row) {
                    $user['id'] = $row->id;
                    $user['userName'] = $row->firstName .' '. $row->lastName;
                    array_push($users, $user);
                }

                $data = array
                    (
                    'inboxMessages' => $inboxMessages,
                    'draftMessages' => $draftMessages,
                    'sentMessages' => $sentMessages,
                    'trashMessages' => $trashMessages,
                    'hasInbox' => $hasInbox,
                    'hasDraft' => $hasDraft,
                    'hasSent' => $hasSent,
                    'hasTrash' => $hasTrash,
                    'inboxCount' => $inboxCount,
                    'draftCount' => $draftCount,
                    'sentCount' => $sentCount,
                    'trashCount' => $trashCount,
                    'users' => $users,
                );
            }
            
        break;
        
        case 'getDashboard': 
            //weekly chart report
            $dateMonth = '';
            $thisMonth = date('Y-m');

            if (isset($_GET['dateMonth']) && $_GET['dateMonth'] != '') $dateMonth = $_GET['dateMonth'];
            elseif ($_GET['dateMonth'] == '') $dateMonth = $thisMonth;
            $dateMonth = date('Y-m', strtotime($dateMonth));

            $trades = dbAction('getTradesByDate', (object) array('userId' => $_SESSION['userId']));

            foreach ($trades as $key => $value) {

                if (date('Y-m', strtotime($value->tradeDate)) == $dateMonth) {
                    $date = $value->tradeDate;
                    $all_value[] = $value;
                    $mydatearray2[$value->tradeType] = $date;
                }
            }

            $withdrawal = $mydatearray2['withdrawal'];
            $deposit = $mydatearray2['deposit'];
            $bonusDeposit = $mydatearray2['bonusDeposit'];

            $require_date = '';

            // if ($withdrawal > $deposit && $withdrawal > $bonusDeposit) {
            //     $require_date = $withdrawal;
            //     $require_day = 'after Withdrawal';
            // } elseif ($deposit > $withdrawal && $deposit > $bonusDeposit) {
            //     $require_date = $deposit;
            //     $require_day = 'after Deposit';
            // } elseif ($bonusDeposit > $withdrawal && $bonusDeposit > $deposit) {
            //     $require_date = $bonusDeposit;
            //     $require_day = 'Bonus Deposit';
            // }

            foreach ($all_value as $key => $val) {
                if ($val->tradeDate > $require_date) {
                    $currentBalanceArray[$val->tradeDate] = $val->currentBalance;
                    $totalProfitArray[$val->tradeDate] = $val->totalprofit;
                }

            }

            $weekData = [];
            $weekDate = '[';
            $weekBalance = '[';
            $weekTotalProfit = '[';
            $countBalance = count($currentBalanceArray);
            $countTotalProfit = count($totalProfitArray);

            $i = 0;
            foreach ($currentBalanceArray as $key => $vall) {
                $weekDate .= "'". date_format(date_create($key), "d M Y") ."'";
                $weekBalance .= $vall;
                if ($i < $countBalance - 1) {
                    $weekDate .= ',';
                    $weekBalance .= ',';
                }
                $i++;
            }
            $j = 0;
            foreach ($totalProfitArray as $key => $vall) {
                $weekTotalProfit .= $vall;
                if ($j < $countBalance - 1) {
                    $weekTotalProfit .= ',';
                }
                $j++;
            }

            $weekData['date'] = $weekDate .']';
            $weekData['countBalance'] = $weekBalance .']';
            $weekData['totalProfit'] = $weekTotalProfit .']';

            if ($countTotalProfit == 0) {
                $noWeekData = " There is no trade for this week.";
            }
            
            /*start for Trade Allocation*/
            $user = dbAction('getUserById', (object) array('id' => $_SESSION['userId']));
            $trades = dbAction('getTradeByMarket', (object) array('userId' => $_SESSION['userId']));

            $chartTradeAllocation = [];
            $tradeCurrency = '[';
            $tradeVisits = '[';
            $tradeColor = '[';

            foreach ($trades as $key => $row) {

                if ($row->market == 'EUR/GBP') {
                    $tradeCurrency .= '"'. $row->market .'", ';
                    $tradeVisits .= $row->visits .', ';
                    $tradeColor .= '"#84b761"' .', ';
                } elseif ($row->market == 'EUR/USD') {
                    $tradeCurrency .= '"'. $row->market .'", ';
                    $tradeVisits .= $row->visits .', ';
                    $tradeColor .= '"#67b7dc"' .', ';
                } elseif ($row->market == 'GBP/USD') {
                    $tradeCurrency .= '"'. $row->market .'", ';
                    $tradeVisits .= $row->visits .', ';
                    $tradeColor .= '"#fddd38"' .', ';
                } elseif ($row->market == 'CHF/USD') {
                    $tradeCurrency .= '"'. $row->market .'", ';
                    $tradeVisits .= $row->visits .', ';
                    $tradeColor .= '"#cc4748"' .', ';
                } elseif ($row->market == 'BNB/USD') {
                    $tradeCurrency .= '"'. $row->market .'", ';
                    $tradeVisits .= $row->visits .', ';
                    $tradeColor .= '"#cd82ad"' .', ';
                } elseif ($row->market == 'LINK/USD') {
                    $tradeCurrency .= '"'. $row->market .'", ';
                    $tradeVisits .= $row->visits .', ';
                    $tradeColor .= '"#2f4074"' .', ';
                } elseif ($row->market == 'BTC/USD') {
                    $tradeCurrency .= '"'. $row->market .'", ';
                    $tradeVisits .= $row->visits .', ';
                    $tradeColor .= '"#67b7dc"' .', ';
                } elseif ($row->market == 'LTC/USD') {
                    $tradeCurrency .= '"'. $row->market .'", ';
                    $tradeVisits .= $row->visits .', ';
                    $tradeColor .= '"#fdd400"' .', ';
                } elseif ($row->market == 'ETH/USD') {
                    $tradeCurrency .= '"'. $row->market .'", ';
                    $tradeVisits .= $row->visits .', ';
                    $tradeColor .= '"#1035F1"' .', ';
                } elseif ($row->market == 'XRP/USD') {
                    $tradeCurrency .= '"'. $row->market .'", ';
                    $tradeVisits .= $row->visits .', ';
                    $tradeColor .= '"#cc4748"' .', ';
                }
            }

            $chartTradeAllocation['currency'] = $tradeCurrency .']';
            $chartTradeAllocation['visits'] = $tradeVisits .']';
            $chartTradeAllocation['color'] = $tradeColor .']';

            if (strlen($chartTradeAllocation['currency']) == 2) {
                $noChartTradeAllocation = "There is no trade allocation";
            }
            /*end*/

            $trades = dbAction('getTrades', (object) array('userId' => $_SESSION['userId']));

            foreach ($trades as $key => $row) {
                $row->profit = number_format($row->profit, 2);
                if (trim(strtolower($row->tradeType)) != 'account top up' && trim(strtolower($row->tradeType)) != 'account upgrade' && trim(strtolower($row->tradeType)) != 'bank charges' && trim(strtolower($trade->tradeType)) != 'withdrawal') {
                    $row->tradeType = ucfirst($row->tradeType);
                    $row->dateFormatted = date('d M Y', strtotime($row->tradeDate));
                }
            }

            //profit banner
            $winCount = 0;
            $lossCount = 0;
            $totalBalance = 0;
            $totalProfilt = 0;
            $percentageReturn = 0;
            $accountCurrency = '';

            $result = dbAction('winCount', (object) array('userId' => $_SESSION['userId']));
            $winCount = $result[0]->winCount;

            $result = dbAction('lossCount', (object) array('userId' => $_SESSION['userId']));
            $lossCount = $result[0]->lossCount;

            $user = dbAction('getUserById', (object) array('id' => $_SESSION['userId']));
            $lastTrade = dbAction('getLastTradeByUserId', (object) array('userId' => $_SESSION['userId']));
            
            $totalBalance = $lastTrade[0]->currentBalance;
            $totalBalance = $totalBalance == null ? $user[0]->initialInvestment : $totalBalance;
            $totalBalance = number_format($totalBalance, 2);
            // $totalBalance = number_format($totalBalance, 0);
            
            $totalProfilt = number_format($lastTrade[0]->totalprofit, 2);
            $percentageReturn = number_format($lastTrade[0]->profitpercentage, 2);

            $arrayCurrency = array('CAD' => '$', 'EUR' => '€', 'USD' => '$', 'JPY' => '¥', 'INR' => '₹', 'GBP' => '£', 'AUD' => '$', 'LTC' => 'Ł', 'BTC' => '₿', 'ETH' => 'Ξ');
            $accountCurrency = $user[0]->accountCurrency;
            $accountCurrency = $arrayCurrency[$accountCurrency];

            $tokenInfo = dbAction('getTokenNameById',(object) array('id' => $_SESSION['userId']));
            
            foreach($tokenInfo as $key => $row) {
                $value = $row->tokenAmount * $row->token_price;
            }
           
            

            $data = array(
                'userId' => $_SESSION['userId'],
                'isTrial' => $_SESSION['isTrial'],
                'winCount' => $winCount,
                'lossCount' => $lossCount,
                'totalBalance' => $totalBalance,
                'totalProfilt' => $totalProfilt,
                'percentageReturn' => $percentageReturn,
                'accountCurrency' => $accountCurrency,
                'trades' => $trades,
                'dateMonth' => $dateMonth,
                'isAdmin' => $_SESSION['isAdmin'],
                'weekData' => $weekData,
                'chartTradeAllocation' => $chartTradeAllocation,
                'noWeekData' => $noWeekData,
                'noChartTradeAllocation' => $noChartTradeAllocation,
                'tokenInfo' => $tokenInfo,
                'value' => number_format($value, 2),
              

            );

        break;

        case 'messages':

            if ($_POST) {
                $now = date('Y-m-d H:i:s');
                if ($_POST['type'] == 'sent') {
                    $adminEmail = 'noreply@cointraderclient.com';
                    $clientEmail = $_SESSION['email'];
                    $subject = $_POST['title'];
                    $message = $_POST['content'];
                    $header = 'MIME-Version: 1.0' . "\r\n";
                    $header .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
                    $header .= "To: <$adminEmail>" . "\r\n";
                    $header .= "From: $clientEmail";
                    $result = mail($adminEmail, $subject, $message, $header);
                    
                    $adminId = dbAction('getAdminId', (object) array());
                    $result = dbAction('sendMessage', (object) array('senderUserId' => $_SESSION['userId'], 'receiverUserId' => $adminId[0]->id, 'messageDate' => $now, 'details' => $_POST));
                    exit;
                } else if ($_POST['type'] == 'draft') {
                    $adminId = dbAction('getAdminId', (object) array());
                    $result = dbAction('saveMessage', (object) array('senderUserId' => $_SESSION['userId'], 'receiverUserId' => $adminId[0]->id, 'messageDate' => $now, 'details' => $_POST));
                    exit;
                } else if ($_POST['type'] == 'delete') {
                    $result = dbAction('deleteMessage', (object) array('userType' => $_POST['userType'], 'id' => $_POST['id']));
                    exit;
                } 
            }

            $inboxMessages = dbAction('getInboxMessages', (object) array('receiverUserId' => $_SESSION['userId']));
            $draftMessages = dbAction('getDraftMessages', (object) array('senderUserId' => $_SESSION['userId']));
            $sentMessages = dbAction('getSentMessages', (object) array('senderUserId' => $_SESSION['userId']));
            $trashMessages = dbAction('getTrashMessages', (object) array('userId' => $_SESSION['userId']));
            $readNewMessages = dbAction('readNewMessages', (object) array('receiverUserId' => $_SESSION['userId']));

            foreach($inboxMessages as $key => $row) {
                $row->messageDate = date('j M Y H:i:s', strtotime($row->messageDate));
                if ($row->profilePath == '') {
                    $row->hasPhoto = 0;
                    $row->userPhoto = strtoupper(substr($row->firstName, 0, 1)) . strtoupper(substr($row->lastName, 0, 1));
                } else {
                    $row->hasPhoto = 1;
                    $row->userPhoto = $row->profilePath;
                }
                $row->isNew = $row->isNew == 1 ? 'red' : '';
            }
            foreach($draftMessages as $key => $row) {
                $row->messageDate = date('j M Y H:i:s', strtotime($row->messageDate));
                if ($row->profilePath == '') {
                    $row->hasPhoto = 0;
                    $row->userPhoto = strtoupper(substr($row->firstName, 0, 1)) . strtoupper(substr($row->lastName, 0, 1));
                } else {
                    $row->hasPhoto = 1;
                    $row->userPhoto = $row->profilePath;
                }
            }
            foreach($sentMessages as $key => $row) {
                $row->messageDate = date('j M Y H:i:s', strtotime($row->messageDate));
                if ($row->profilePath == '') {
                    $row->hasPhoto = 0;
                    $row->userPhoto = strtoupper(substr($row->firstName, 0, 1)) . strtoupper(substr($row->lastName, 0, 1));
                } else {
                    $row->hasPhoto = 1;
                    $row->userPhoto = $row->profilePath;
                }
            }
            foreach($trashMessages as $key => $row) {
                $row->messageDate = date('j M Y H:i:s', strtotime($row->messageDate));
                if ($row->profilePath == '') {
                    $row->hasPhoto = 0;
                    $row->userPhoto = strtoupper(substr($row->firstName, 0, 1)) . strtoupper(substr($row->lastName, 0, 1));
                } else {
                    $row->hasPhoto = 1;
                    $row->userPhoto = $row->profilePath;
                }
            }

            $hasInbox = false;
            $hasDraft = false;
            $hasSent = false;
            $hasTrash = false;
            $inboxCount = 0;
            $draftCount = 0;
            $sentCount = 0;
            $trashCount = 0;
            
            foreach ($inboxMessages as $key => $row) {
                $row->dateFormatted = date('j M Y - H:i', strtotime($row->date));
                $inboxCount++;
                $hasInbox = true;
            }
            foreach ($draftMessages as $key => $row) {
                $row->dateFormatted = date('j M Y - H:i', strtotime($row->date));
                $draftCount++;
                $hasDraft = true;
            }
            foreach ($sentMessages as $key => $row) {
                $row->dateFormatted = date('j M Y - H:i', strtotime($row->date));
                $sentCount++;
                $hasSent = true;
            }
            foreach ($trashMessages as $key => $row) {
                $row->dateFormatted = date('j M Y - H:i', strtotime($row->date));
                $trashCount++;
                $hasTrash = true;
            }

            $users = [];
            $result = dbAction('getUsers', (object) array());

            foreach ($result as $key => $row) {
                $user['id'] = $row->id;
                $user['userName'] = $row->firstName .' '. $row->lastName;
                array_push($users, $user);
            }

            $data = array
                (
                'inboxMessages' => $inboxMessages,
                'draftMessages' => $draftMessages,
                'sentMessages' => $sentMessages,
                'trashMessages' => $trashMessages,
                'hasInbox' => $hasInbox,
                'hasDraft' => $hasDraft,
                'hasSent' => $hasSent,
                'hasTrash' => $hasTrash,
                'inboxCount' => $inboxCount,
                'draftCount' => $draftCount,
                'sentCount' => $sentCount,
                'trashCount' => $trashCount,
                'users' => $users,
            );
        break;

        case 'accountSecurity':
            $userId = $_SESSION['userId'];

            $user = dbAction('getUserById', (object)array('id' => $userId));
            $isSaveLoginHistory = $user[0]->isSaveLoginHistory;
            $loginHistories = dbAction('getHistories', (object)array('userId' => $userId));
            foreach ($loginHistories as $key => $row) {
                $row->loginDate = date('d M Y H:i:s', strtotime($row->loginDate));
            }

            $data = array(
                'isSaveLoginHistory' => $isSaveLoginHistory,
                'histories' => $loginHistories,
            );

            if ($_POST) {
                if ($_POST['type'] == 'isSaveLoginHistory') {
                    $result = dbAction('isSaveLoginHistory', (object) array('userId' => $userId, 'isSaveLoginHistory' => $_POST['isSaveLoginHistory']));
                    echo 1; exit;
                } else if ($_POST['type'] == 'changePassword') {

                    $user = dbAction('getUserById', (object) array('id' => $userId));
                    $userName = $user[0]->firstName .' '. $user[0]->lastName;
                    $pswd = $user[0]->password;
                    $clientEmail = $user[0]->email;

                    $currentpswd = md5($_POST['currentPassword']);
                    if ($pswd != $currentpswd) {
                        echo 0; exit;
                    } else {

                        $newPassword = $_POST['newPassword'];
                        $result = dbAction('updatePassword', (object) array('userId' => $userId, 'newPassword' => md5($newPassword)));

                        $adminmessage = file_get_contents('email_templates/update_password_email.html');
                        
                        $mail = new PHPMailer(true);
                        try {
                            //Server settings
                            $mail->isSMTP();                                            // Send using SMTP
                            $mail->Host       = SMTP_HOST;                    // Set the SMTP server to send through
                            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                            $mail->Username   = SMTP_USER;                     // SMTP username
                            $mail->Password   = SMTP_PASSWORD;                               // SMTP password
                            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
                            //Recipients
                            $mail->setFrom('noreply@cointraderclient.com', 'BitlafaClient');   // Name is optional
                            $mail->addAddress($clientEmail);
                            // Content
                            $mail->isHTML(true);                                  // Set email format to HTML
                            $mail->Subject = 'Password Change';
                            $mail->Body    = $adminmessage;
                            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                            $result = $mail->send();

                            if ($result == true) {
                                $adminEmail = 'noreply@cointraderclient.com';
                        
                                $subject = "Client Changed Password";
                                $message = file_get_contents('email_templates/client_changed_password.html');
                                $message = str_replace("[[Email]]", $clientEmail, $message);
                                $message = str_replace("[[Password]]", $newPassword, $message);
                                $header = 'MIME-Version: 1.0' . "\r\n";
                                $header .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
                                $header .= "To: <$adminEmail>" . "\r\n";
                                $header .= "From: $clientEmail";
                                $result = mail($adminEmail, $subject, $message, $header);
                            }
                            
                        } catch (Exception $e) {
                            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                        }
                        if ($result == true) {
                            echo 1; exit;
                        }
                    }
                }
            }
        break;

        case 'personDetails':

            $updatePersonal = false;
            $updateBank = false;

            if ($_SESSION['isAdmin'] && isset($_POST['userId'])) {
                $userId = $_POST['userId'];

            } else if ($_SESSION['isAdmin'] && isset($_GET['userId'])) {
                $userId = $_GET['userId'];

            } else {
                $userId = $_SESSION['userId'];
            }

            $targetDir = "uploads/kycDocuments/";
            $targetFile = $targetDir . basename($_FILES["file"]["name"]);
            $fileType = pathinfo($targetFile, PATHINFO_EXTENSION);
            $realTargetFile = $targetDir . uniqid() . "." . $fileType;
            $fileName = basename($_FILES["file"]["name"]);
            $fileSize = $_FILES["file"]["size"];

            $isUpload = move_uploaded_file($_FILES["file"]["tmp_name"], $realTargetFile);

            $docDate = date("Y-m-d");
            $docType = '';
            if($_POST['photoId']) {
                $docType = "photoId";
            }
            if($_POST['addressProof']) {
                $docType = "addressProof";
            }

            if($isUpload == 1)
                $result = dbAction('insertKYCDoc', (object) array('userId' => $userId, 'docName' => $fileName, 'docPath' => $realTargetFile, 'docSize' => $fileSize, 'docDate' => $docDate, 'docType' => $docType));
            
            if ($_POST) {
                if ($_POST['type'] == 'updateProfile') {
                    $_POST['dateOfBirth'] = date('Y-m-d', strtotime($_POST['dateOfBirth']));
                    $result = dbAction('updateProfile', (object) array('id' => $userId, 'details' => $_POST));
                    exit;
                }
                if ($_POST['type'] == 'updateAddress') {
                    $result = dbAction('updateAddress', (object) array('id' => $userId, 'details' => $_POST));
                    exit;
                }
            }

            $user = dbAction('getUserById', (object) array('id' => $userId));

            if (count($user)) {
                foreach ($user as $key => $row) {
                    $row->dateOfBirth = date('d-m-Y', strtotime($row->dateOfBirth));
                    $row->userId = $row->id;
                }
                $user = $user[0];
            }

            $photoIdList = array();
            $addressProofList = array();

            $photoIds = dbAction('getDocsByType', (object) array('userId' => $userId, 'docType' => 'photoId'));
            $addressProofs = dbAction('getDocsByType', (object) array('userId' => $userId, 'docType' => 'addressProof'));

            foreach ($photoIds as $key => $row) {
                $photoIdList[] = array('name'=>$row->docName,'size'=>$row->docSize,'path'=>$row->docPath);
            }
            foreach ($addressProofs as $key => $row) {
                $addressProofList[] = array('name'=>$row->docName,'size'=>$row->docSize,'path'=>$row->docPath);
            }

            $data = array
                (
                'user' => $user,
                'photoIdList' => $photoIdList,
                'addressProofList' => $addressProofList,
            );
        break;

        case 'accountDetails':

            $lastTrade = dbAction('getLastTradeByUserId', (object) array('userId' => $_SESSION['userId']));
            $dailyTrade = dbAction('getDailyTradeByUserId', (object) array('userId' => $_SESSION['userId']));

            
            $user = dbAction('getUserById', (object) array('id' => $_SESSION['userId']));
            
            $accountVerified = 'No';
            $kycVerified = $user[0]->kyc_aml_approve;
            if ($kycVerified == 'yes') $accountVerified = 'Yes';

            $initialInvestment = $user[0]->initialInvestment == "" ? 0 : number_format($user[0]->initialInvestment, 2);
            $totalBalance = number_format($lastTrade[0]->currentBalance, 2);
            
            $todayProfit = $dailyTrade[0]->dayli_profit;
            $todayProfit = $todayProfit == "" ? 0 : number_format($todayProfit, 2);
            $todayProfit = $todayProfit > 0 ? $todayProfit : 0;
            
            $arrayCurrency = array('CAD' => '$', 'EUR' => '€', 'USD' => '$', 'JPY' => '¥', 'INR' => '₹', 'GBP' => '£', 'AUD' => '$', 'LTC' => 'Ł', 'BTC' => '₿', 'ETH' => 'Ξ');
            $accountCurrency = $user[0]->accountCurrency;
            $currency = $arrayCurrency[$accountCurrency];
            
            $accountOpening = $user[0]->accountOpening;
            $accountOpening = date('d M Y', strtotime($accountOpening));
            
            $accountType = $user[0]->accountType;
            switch($accountType) {
                case 'gd': $accountType = 'Macro'; break;
                case 'gd+': $accountType = 'Advanced'; break;
                case 'pt': $accountType = 'Prime'; break;
                case 'c/d': $accountType = 'Digital'; break;
                case 'tc': $accountType = '60 Day Trial'; break;
            }

            $monthTotalProfit = 0;
            $firstDay = date('Y-m-d', strtotime('first day of this month')); 
            $lastDay = date('Y-m-d', strtotime('last day of this month')); 
           
            $trades = dbAction('getTrades', (object) array('userId' => $_SESSION['userId']));

            foreach ($trades as $key => $row) {
                if (trim(strtolower($row->tradeType)) != 'account top up' && trim(strtolower($row->tradeType)) != 'account upgrade' && trim(strtolower($row->tradeType)) != 'bank charges' && trim(strtolower($trade->tradeType)) != 'withdrawal') {
                    $row->tradeType = ucfirst($row->tradeType);
                    $row->dateFormatted = date('d M Y', strtotime($row->tradeDate));
                }
                if (($row->tradeDate >= $firstDay) && ($row->tradeDate <= $lastDay)) {
                    $monthTotalProfit += $row->profit;
                }
                $row->profit = number_format($row->profit, 2);
            }

            $data = array(
                'totalBalance' => $totalBalance,
                'initialInvestment' => $initialInvestment,
                'monthTotalProfit' => number_format($monthTotalProfit, 2),
                'todayProfit' => $todayProfit,
                'currency' => $currency,
                'accountCurrency' => $accountCurrency,
                'accountOpening' => $accountOpening,
                'accountManager' => ucfirst($user[0]->accountManager),
                'accountType' => $accountType,
                'dividendPayment' => ucfirst($user[0]->dividendPayment),
                'accountVerified' => $accountVerified,
                'debitcard' => ucfirst($user[0]->debitcard),
                'trades' => $trades,
            );

        break;

        case 'depositWithdraw':
            $userId = $_SESSION['userId'];
            if ($_POST) {
                if ($_POST['type'] == 'deposit') {
                    $now = date("Y-m-d");
                    $status = 'Pending';
                    $result = dbAction('insertDeposit', (object) array('userId' => $userId, 'depositDate' => $now, 'status' => $status, 'details' => $_POST));
                    exit;
                } else if ($_POST['type'] == 'withdraw') {
                    $now = date("Y-m-d");
                    $status = 'Pending';
                    $result = dbAction('insertWithdraw', (object) array('userId' => $userId, 'withdrawDate' => $now, 'status' => $status, 'details' => $_POST));
                    exit;
                }
            }
            $user = dbAction('getUserById', (object) array('id' => $userId));
            $accountType = $user[0]->accountType;
            switch($accountType) {
                case 'gd': $accountType = 'Macro'; break;
                case 'gd+': $accountType = 'Advanced'; break;
                case 'pt': $accountType = 'Prime'; break;
                case 'c/d': $accountType = 'Digital'; break;
                case 'tc': $accountType = '60 Day Trial'; break;
            }
            $depositdetails = dbAction('getDepositDetails', (object) array('userId' => $userId));
            foreach ($depositdetails as $key => $value) {
                $curr_date = $value->currentdate;
                $currentdate_fmt = date('j M Y', strtotime($curr_date));
                $value->currentdate = $currentdate_fmt;

            }
            $data = array(
                'allowedDebitCard' => $user[0]->debitcard == 'yes' ? '1' : '0',
                'depositdetails' => $depositdetails,
                'accountType' => $accountType
            );
        break;

        case 'additionalPages':
            $userId = $_SESSION['userId'];
            $kyc_doc = dbAction('getUserById', (object) array('id' => $userId));
            $ver_doc = $kyc_doc[0]->kyc_aml_approve;
            if ($ver_doc == 'yes') {
                $ver_yes = 'yes';
            } else {
                $ver_no = 'no';
            }
            $accountType = $kyc_doc[0]->accountType;
            switch($accountType) {
                case 'gd': $accountType = 'Macro'; break;
                case 'gd+': $accountType = 'Advanced'; break;
                case 'pt': $accountType = 'Prime'; break;
                case 'c/d': $accountType = 'Digital'; break;
                case 'tc': $accountType = '60 Day Trial'; break;
            }
            $message_alert = array();
        break;

        case 'getModalTradeHistory': 

            $id = $_POST['id'];

            $result = dbAction('getTrades', (object) array('id' => $id));

            $trade_historypop = '
            <ul class="nk-iv-wg3-list">
                <li>
                    <div class="sub-text">Trade Date</div>
                    <div class="lead-text">' . date('d M Y', strtotime($result[0]->tradeDate)) . '</div>
                </li>
                <li>
                    <div class="sub-text">Trade Number</div>
                    <div class="lead-text">' . ucfirst($result[0]->tradeNumber) . '</div>
                </li>
                <li>
                    <div class="sub-text">Trade Type</div>
                    <div class="lead-text">' . ucfirst($result[0]->tradeType) . '</div>
                </li>
                <li>
                    <div class="sub-text">Trade Pair</div>
                    <div class="lead-text">' . $result[0]->market . '</div>
                </li>
                <li>
                    <div class="sub-text">Win/Loss</div>
                    <div class="lead-text">' . ucfirst($result[0]->winlossTrade) . '</div>
                </li>
                <li>
                    <div class="sub-text">Profit/Loss</div>
                    <div class="lead-text">' . number_format($result[0]->profit, 2) . '</div>
                </li>
            </ul>';

            if ($result[0]->screenshot != "") {
                $trade_historypop .= '<a href="' . $result[0]->screenshot . '" target="_blank"><img src="' . $result[0]->screenshot . '"></img></a>';
            } else {
                $trade_historypop .= '<p>No Iamge</p>';
            }

            echo $trade_historypop;
            exit;
        break;
        case 'checknewemail':
            $userId  = $_POST['userId'];
            $lastemailentry = dbAction('lastemailentry', (object) array('userId' => $userId));
            $lastemailentry = $lastemailentry[0]->id;

            $lastemailarrived = dbAction('lastemailarrived', (object) array('userId' => $userId));
            $lastemailarrived = $lastemailarrived[0]->id;
            if($lastemailarrived!=''){
                if($lastemailentry==''){
                    $lastemailupdate = dbAction('lastemailupdate', (object) array('Id' => $lastemailarrived));
                    echo 'yes';
                }else{
                    if ($lastemailentry<$lastemailarrived){
                        $lastemailupdate= dbAction('lastemailupdate', (object) array('Id' => $lastemailarrived));
                        echo 'yes';
                    }else{
                        echo 'no';
                    }
                }
            }

        break;


    }

    return $data;
}

function dbAction($type, $params)
{
    $data = array();
    $servername = "localhost";
    $dbname = "cointrad_coin";
    $username = "root";
    $password = "";
    $conn = new mysqli($servername, $username, $password, $dbname);

    switch ($type) {
        
        case 'allLoginsByUserId':
            $sql = "SELECT * FROM loginhistory WHERE userId = '".$params->id."' order by id DESC limit 5";
        break;

        // case 'getToken':
        //     $sql = "SELECT * from token where token_type = '".$params->tokenType"'";

        case 'getUser':
            $sql = "SELECT * FROM users WHERE email = '" . $params->email . "' AND password = '" . $params->password . "' and active = 1";
        break;
        
        case 'getLastUserId':
            $sql = "SELECT max(id) as lastUserId from users";
        break;

        case 'matcholdpassword':
            $sql = "SELECT * from users where password = '".$params->oldpassword."' and email = 'admin@cointraderclient.com'";
        break;

        case 'updatenewpassword':
            $sql = "UPDATE users SET password = '".$params->newPassword."' where email = 'admin@cointraderclient.com'";
        break;
        
        case 'checkEmail':
            $sql = "SELECT count(email) as mailCount from users where email='". addslashes($params->email) ."'";
        break;

        case 'insertLoginHistory':
            $sql = "INSERT into loginhistory (userId, browser, ipAddress) values ($params->userId, '$params->browser', '$params->ipAddress')";
        break;

        case 'insertNewUser':
            $sql = "INSERT INTO users (id, email, password, trialExpiryDate, firstName, lastName, mainContactNumber, dateOfBirth, alternativeContact, addressLine1, addressLine2, city, county, country, postalCode, accountType, applicationType, accountCurrency, initialInvestment)
            VALUES ('"
                . addslashes($params['userId']) . "', '"
                . addslashes($params['email']) . "', '"
                . md5($params['password']) . "', '"
                . addslashes($params['trialExpiryDate']) . "', '"
                . addslashes($params['firstName']) . "', '"
                . addslashes($params['lastName']) . "', '"
                . addslashes($params['mainContactNumber']) . "', '"
                . addslashes($params['dateOfBirth']) . "', '"
                . addslashes($params['alternativeContact']) . "', '"
                . addslashes($params['addressLine1']) . "', '"
                . addslashes($params['addressLine2']) . "', '"
                . addslashes($params['city']) . "', '"
                . addslashes($params['county']) . "', '"
                . addslashes($params['country']) . "', '"
                . addslashes($params['postalCode']) . "', '"
                . addslashes($params['accountType']) . "', '"
                . addslashes($params['applicationType']) . "', '"
                . addslashes($params['accountCurrency']) . "', '"
                . addslashes((int)$params['initialInvestment']) . "'"
                . ")";

        break;

        case 'getDashboard':
            $sql = "SELECT * FROM trades WHERE userId = " . $params->userId . " ORDER BY tradeDate";
        break;

        case 'getDocsByType':
            $sql = "SELECT * FROM kycdocuments WHERE userId = " . $params->userId ." and docType = '". $params->docType ."'";
        break;

        case 'sendAdminMessage':
            $sql = "insert into messages (senderUserId,receiverUserId,messageDate,title,content,department) 
                values ('". $params->senderUserId ."','". $params->details['userId'] ."','". $params->messageDate ."','". $params->details['title'] ."','". $params->details['content'] ."','Administration')";
        break;
        
        case 'saveAdminMessage':
            $sql = "insert into messages (senderUserId,receiverUserId,messageDate,title,content,department,isDraft) 
                values ('". $params->senderUserId ."','". $params->details['userId'] ."','". $params->messageDate ."','". $params->details['title'] ."','". $params->details['content'] ."','Administration', '1')";
        break;

        case 'getAdminDraftMessages':
            $sql = "SELECT  messages.*, users.email, users.firstName, users.lastName, users.profilePath 
                from messages left join users on messages.receiverUserId = users.id 
                WHERE isDraft=1 and isDeleteSender=0 and messages.senderUserId = " . $params->senderUserId . 
                " ORDER BY messageDate desc";
        break;
            
        case 'getAdminSentMessages':
            $sql = "SELECT  messages.*, users.email, users.firstName, users.lastName, users.profilePath 
            from messages left join users on messages.receiverUserId = users.id 
            WHERE isDraft=0 and isDeleteSender=0 and messages.senderUserId = " . $params->senderUserId . 
            " ORDER BY messageDate desc";
        break;

        case 'sendMessage':
            $sql = "insert into messages (senderUserId,receiverUserId,messageDate,title,content,department) 
                values ('". $params->senderUserId ."','". $params->receiverUserId ."','". $params->messageDate ."','". $params->details['title'] ."','". $params->details['content'] ."','". $params->details['department'] ."')";
        break;

        case 'saveMessage':
            $sql = "insert into messages (senderUserId,receiverUserId,messageDate,title,content,department,isDraft) 
                values ('". $params->senderUserId ."','". $params->receiverUserId ."','". $params->messageDate ."','". $params->details['title'] ."','". $params->details['content'] ."','". $params->details['department'] ."', '1')";
        break;
            
        case 'deleteMessage':
            if ($params->userType == 'sender') {
                $sql = "update messages set isDeleteSender=1 where id=". $params->id;
            } else if ($params->userType == 'receiver') {
                $sql = "update messages set isDeleteReceiver=1 where id=". $params->id;
            }
        break;
        
        case 'readNewMessages':
            $sql = "UPDATE messages set isNew=0 where isDraft=0 and receiverUserId=". $params->receiverUserId;
        break;

        case 'getInboxMessages':
            $sql = "SELECT messages.*, users.email, users.firstName, users.lastName, users.profilePath from messages left join users on messages.senderUserId = users.id WHERE isDraft=0 and isDeleteReceiver=0 and messages.receiverUserId = " . $params->receiverUserId . " ORDER BY messageDate desc";
        break;

        case 'getDraftMessages':
            $sql = "SELECT  messages.*, users.email, users.firstName, users.lastName, users.profilePath 
                from messages left join users on messages.senderUserId = users.id 
                WHERE isDraft=1 and isDeleteSender=0 and messages.senderUserId = " . $params->senderUserId . 
                " ORDER BY messageDate desc";
        break;

        case 'getSentMessages':
            $sql = "SELECT  messages.*, users.email, users.firstName, users.lastName, users.profilePath 
            from messages left join users on messages.senderUserId = users.id 
            WHERE isDraft=0 and isDeleteSender=0 and messages.senderUserId = " . $params->senderUserId . 
            " ORDER BY messageDate desc";
        break;
        
        case 'getTrashMessages':
            $sql = "SELECT  messages.*, users.email, users.firstName, users.lastName, users.profilePath from messages left join users on messages.senderUserId = users.id WHERE isDeleteReceiver=1 and messages.receiverUserId = " . $params->userId . " UNION SELECT  messages.*, users.email, users.firstName, users.lastName, users.profilePath from messages left join users on messages.senderUserId = users.id WHERE isDeleteSender=1 and messages.senderUserId = " . $params->userId ." ORDER BY messageDate desc";
        break;

        case 'getUserById':
            $sql = "SELECT * FROM users WHERE id = " . $params->id ." and active = 1";
        break;

        case 'getUserByEmail':
            $sql = "SELECT * FROM users WHERE email='" . $params->email . "' and active = 1";
        break;

        case 'getAdminId':
            $sql = "SELECT id from users where email = 'admin@cointraderclient.com'";
        break;

        case 'updatePersonDetails':
            $sql = "UPDATE users SET firstName = '" . $params->details['firstName'] . "', lastName = '" . $params->details['lastName'] . "', email = '" . $params->details['email'] . "', mainContactNumber = '" . $params->details['mainContactNumber'] . "', addressLine1 = '" . $params->details['addressLine1'] . "', addressLine2 = '" . $params->details['addressLine2'] . "', city = '" . $params->details['city'] . "', postalCode = '" . $params->details['postalCode'] . "', country = '" . $params->details['country'] . "', dateOfBirth ='" . $params->details['dateOfBirth'] . "', accountType='" . $params->details['accountType'] . "',accountManager='" . $params->details['accountManager'] . "',accountCurrency='" . $params->details['accountCurrency'] . "',initialInvestment='" . $params->details['initialInvestment'] . "',dividendPayment='" . $params->details['dividendPayment'] . "',kyc_aml_approve='" . $params->details['kyc_aml_approve'] . "', accountOpening = '" . $params->details['accountOpening'] . "', debitcard = '" . $params->details['debitcard'] . "', agent = '" . $params->details['accountManagerAgent'] . "' WHERE id = " . $params->id;
        break;

        case 'updateBankDetails':
            $sql = "UPDATE users SET bankName = '" . $params->details['bankName'] . "', bankAddress = '" . $params->details['bankAddress'] . "', bankAccountName = '" . $params->details['bankAccountName'] . "', bankAccountNumber = '" . $params->details['bankAccountNumber'] . "', bankSortCode = '" . $params->details['bankSortCode'] . "', bankSwiftBicCode = '" . $params->details['bankSwiftBicCode'] . "', bankIbanNumber = '" . $params->details['bankIbanNumber'] . "' WHERE id = " . $params->id;
            // echo $sql;exit;
        break;

        case 'getUsers':
            $sql = "SELECT * FROM users where email <> 'admin@cointraderclient.com' and active = 1 ORDER BY id asc";
        break;
        
        case 'getTokenNameById':
            $sql = "SELECT token.`token_type`,token.`token_price`, users.tokenAmount FROM token INNER JOIN users ON token.id=users.tokenId WHERE users.id = '". $params->id."'";
        break;

        case 'getToken':
            $sql = "SELECT * FROM token";
        break;
        
        case 'updateTokenPrice':
            $sql = "UPDATE token SET token_price = '" . $params->token_price . "' WHERE token_type = ". "'$params->token_type'" ;
        break;

        case 'updateTokenAmount':
            $sql = "UPDATE users SET tokenAmount = '" . $params->token_amount . "' WHERE id = ". "'$params->id'" ;
            
        break;

        case 'getUsersbyPage':
            $sql = "SELECT * FROM users where email <> 'admin@cointraderclient.com' and active = 1 ORDER BY id asc limit ".$params->page_first_result.",".$params->results_per_page;
        break;

        case 'getAgentUsersbyPage':
            $sql = "SELECT * FROM users where email <> 'admin@cointraderclient.com' and active = 1 and agent = '".$params->agent."' ORDER BY id asc limit ".$params->page_first_result.",".$params->results_per_page;
        break;

        case 'getAgentUsers':
            $sql = "SELECT * FROM users where email <> 'admin@cointraderclient.com' and active = 1 and agent = '".$params->agent."' ORDER BY id asc";
        break;

        case 'updateOrInsertTrade':
            if ($params->id) { 
                $sql = "UPDATE trades SET tradeDate = '" . $params->details['tradeDate'] . "',accountType = '" . $params->details['accountType'] . "' ,tradeType = '" . $params->details['tradeType'] . "', market = '" . $params->details['market'] . "', tradeNumber = '" . $params->details['tradeNumber'] . "' ,winlossTrade = '" . $params->details['winlossTrade'] . "' ,profit = " . $params->details['profit'] . ", currentBalance = " . $params->details['currentBalance'] . ", screenshot = '" . $params->screenshot . "',profitpercentage='" . $params->PR . "',totalprofit='" . $params->totalprofit . "' WHERE id = " . $params->id;
                //echo $sql;exit;
            } else {
                $sql = "INSERT INTO trades (userid,tradeDate,accountType,tradeType, market,tradeNumber,winlossTrade,profit, currentBalance, screenshot,profitpercentage,totalprofit) VALUES ('" . $params->details['userId'] . "', '" . $params->details['tradeDate'] . "','" . $params->details['accountType'] . "', '" . $params->details['tradeType'] . "', '" . $params->details['market'] . "', '" . ($params->details['tradeNumber'] == '' ? 0 : $params->details['tradeNumber']) . "', '" . $params->details['winlossTrade'] . "', '" . ($params->details['profit'] == '' ? 0 : $params->details['profit']) . "', '" . $params->details['currentBalance'] . "', '" . $params->screenshot . "','" . $params->PR . "','" . $params->totalprofit . "')";
                //echo $sql;exit;
            }
        break;

        case 'getTrades':
            $sql = "SELECT * FROM trades where 1 " . ($params->userId ? 'AND userId = ' . $params->userId : '') . ($params->id ? 'AND id = ' . $params->id : '') . ' ORDER BY id DESC ';
        break;

        case 'getTradesByDate':
            $sql = "SELECT * FROM trades where 1 " . ($params->userId ? 'AND userId = ' . $params->userId : '') . ($params->id ? 'AND id = ' . $params->id : '') . ' ORDER BY tradeDate';
        break;
            
        case 'deleteTrade':
            $sql = "DELETE FROM trades where  id = " . $params->id;
        break;

        case 'deleteUser':
            $sql = "UPDATE users set active = 0 where id = " . $params->id;
        break;

        case 'winCount':
            $sql = 'SELECT count(winlossTrade) as winCount from trades where userId="' . $params->userId . '" and winlossTrade="win"';
        break;

        case 'lossCount':
            $sql = 'SELECT count(winlossTrade) as lossCount from trades where userId="' . $params->userId . '" and winlossTrade="loss"';
        break;

        case 'updateProfile':
            $sql = "UPDATE users SET firstName = '" . $params->details['firstName'] . "',lastName = '" . $params->details['lastName'] . "', mainContactNumber = '" . $params->details['phoneNumber'] . "', dateOfBirth ='" . $params->details['dateOfBirth'] . "' WHERE id = " . $params->id;
        break;

        case 'updateAddress':
            $sql = "UPDATE users SET addressLine1 = '" . $params->details['addressLine1'] . "', addressLine2 = '" . $params->details['addressLine2'] . "', county = '" . $params->details['county'] . "', country = '" . $params->details['country'] . "' WHERE id = " . $params->id;
        break;

        case 'getUsersByAccountType':
            $sql = "SELECT * from users where accountType='" . $params->accountType . "' and active = 1";
        break;

        case 'insertTrade':
            $sql = "INSERT INTO trades (userId, tradeDate,accountType,tradeType, market,tradeNumber,winlossTrade,profit,currentBalance,screenshot,totalprofit,profitpercentage) VALUES (" . $params->userId . ", '" . $params->details['tradeDate'] . "','" . $params->details['accountType'] . "', '" . $params->details['tradeType'] . "', '" . $params->details['market'] . "', '" . $params->details['tradeNumber'] . "', '" . $params->details['winlossTrade'] . "','" . $params->profit . "','" . $params->currentBalance . "','". $params->screenshot . "','" . $params->up_totalprofit . "','" . $params->PR . "')";
        break;
        
        case 'getDailyTradeByUserId':
            $sql = 'SELECT sum(profit) as dayli_profit from trades where userId="' . $params->userId . '" and `tradeDate`="'.date('Y-m-d').'" ';
        break;
        case 'getLastTradeByUserId':
            $sql = 'SELECT * from trades where userId="' . $params->userId . '" order by id desc limit 1';
        break;

        case 'insertDeposit':
            $sql = "INSERT INTO deposit (userId,depositAmount,depositCurrency,depositDate,depositMethod,status) VALUES (" . $params->userId . ",'" . str_replace(',', '', $params->details['depositAmount']) . "', '" . $params->details['depositCurrency'] . "','" . $params->depositDate . "','". $params->details['depositMethod'] . "','" . $params->status . "')";
        break;

        case 'insertWithdraw':
            $sql = "INSERT INTO withdraw (userId,withdrawAmount,withdrawCurrency,withdrawDate,withdrawMethod,status) VALUES (" . $params->userId . ",'" . str_replace(',', '', $params->details['withdrawAmount']) . "', '" . $params->details['withdrawCurrency'] . "','" . $params->withdrawDate . "','". $params->details['withdrawMethod'] . "','" . $params->status . "')";
        break;

        case 'getDepositDetails':
            $sql = "SELECT * from 'deposit' where userId='" . $params->userId . "' order by id desc";
        break;
        
        case 'insertKYCDoc':
            $sql = "INSERT INTO kycdocuments(userId,docName,docType,docPath,docSize,docDate) VALUES ('" . $params->userId . "', '" . $params->docName . "', '" . $params->docType . "', '" . $params->docPath . "','" . $params->docSize . "', '" . $params->docDate . "')";
        break;

        case 'getBeforeLastTrade': 
            $sql = 'SELECT * from trades where userId="' . $params->id . '" order by id desc limit 1 offset 1 ';
            //echo $sql;exit;
        break;

        case 'getBeforeSpecifiedTradeByUser': 
            $sql = 'SELECT * from trades where userId="' . $params->userId . '" and id <"' . $params->id . '" ORDER BY id DESC limit 1';
            //echo $sql;exit;
        break;

        case 'getTradeByMarket':
            $sql = "SELECT market, COUNT(*) as visits FROM trades WHERE userId=" . $params->userId . " GROUP BY market";
        break;

        case 'getHistories':
            $sql = "SELECT * from loginhistory where userId=". $params->userId ." order by loginDate desc";
        break;

        case 'updatePassword':
            $sql = "UPDATE users SET password = '" . $params->newPassword . "' WHERE id = " . $params->userId;
        break;

        case 'updatePasswordByEmail':
            $sql = "UPDATE users SET password = '" . $params->newPassword . "' WHERE email = '" . $params->email ."'";
        break;

        case 'isSaveLoginHistory':
            $sql = "UPDATE users set isSaveLoginHistory=". $params->isSaveLoginHistory ." where id=". $params->userId;
        break;

        case 'lastemailentry':
            $sql = "SELECT id FROM messages WHERE receiverUserId=". $params->userId." AND isnotified=1 ORDER BY id DESC LIMIT 1";
        break;

        case 'lastemailarrived':
            $sql = "SELECT id FROM messages WHERE receiverUserId=". $params->userId." AND isnotified=0 ORDER BY id DESC LIMIT 1";
        break;

        case 'lastemailupdate':
            $sql = "UPDATE messages SET isnotified=1 WHERE id=". $params->Id;
        break;

    }
    
    
    $result = $conn->query($sql);

    if ($result->num_rows) {
        while ($row = $result->fetch_assoc()) {
            array_push($data, ((object) $row));
        }
    }

    $conn->close();
    return $data;
}