<?php

$servername = "localhost";
$dbname = "cointrad_coin";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password, $dbname);

$user_id = $_SESSION['userId'];
$query = mysqli_query($conn, "select * from users where id='" . $user_id . "'");
$query1 = mysqli_fetch_array($query);

$today = date("Y-m-d");
$today1 = date("j M Y");
$account_created = date('j M Y', strtotime($query1['accountOpening']));

$accountType = $query1['accountType'];

if ($accountType == 'tc') {
    $expiry = $query1['trialExpiryDate'];
    // echo $expiry; echo "</br>";
    $date1 = date_create($expiry);
    $date2 = date_create($today);
    $diff = date_diff($date1, $date2);
    $trialdays = $diff->format("%a days");
}

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$check_page = explode('/', $actual_link);

foreach ($check_page as $value) {
    //echo "<pre>";print_r($value);
    if ($value == 'bankaccount_details') {
        $value1 = 'bankaccount_details';
    }
}
if ($accountType == 'tc') {
    $pairs = '["EURGBP","EURUSD","GBPUSD"]';
    //$api_value=file_get_contents("https://forex.1forge.com/1.0.3/quotes?pairs=EURGBP,EURUSD,GBPUSD&api_key=x1K2nIJetXYAKChzGlKLSAdO5NWDkkGi");
    $api_value = file_get_contents("https://currencydatafeed.com/api/data.php?token=njwyvh9hi724a3a05a7p&currency=EUR/GBP+EUR/USD+GBP/USD");

    $test = json_decode($api_value);
}
if ($accountType == 'gd') {
    $pairs = '["EURGBP","EURUSD","GBPUSD"]';
    //$api_value1=file_get_contents("https://forex.1forge.com/1.0.3/quotes?pairs=EURGBP,EURUSD,GBPUSD&api_key=x1K2nIJetXYAKChzGlKLSAdO5NWDkkGi");
    $api_value1 = file_get_contents("https://currencydatafeed.com/api/data.php?token=njwyvh9hi724a3a05a7p&currency=EUR/GBP+EUR/USD+GBP/USD");

    $test = json_decode($api_value1);
}
if ($accountType == 'gd+') {
    $pairs = '["EURGBP","EURUSD","GBPUSD","CHFUSD","USDJPY"]';
    //$api_value2=file_get_contents("https://forex.1forge.com/1.0.3/quotes?pairs=EURGBP,EURUSD,GBPUSD,CHFUSD,USDJPY&api_key=x1K2nIJetXYAKChzGlKLSAdO5NWDkkGi");
    $api_value2 = file_get_contents("https://currencydatafeed.com/api/data.php?token=njwyvh9hi724a3a05a7p&currency=EUR/GBP+EUR/USD+GBP/USD+CHF/USD+USD/JPY");
    $test = json_decode($api_value2);

}
if ($accountType == 'pt') {
    $pairs = '["AUDUSD","CHFUSD","EURGBP","EURUSD","GBPUSD","USDJPY"]';
    //$api_value3=file_get_contents("https://forex.1forge.com/1.0.3/quotes?pairs=AUDUSD,CHFUSD,EURGBP,EURUSD,GBPUSD,USDJPY&api_key=x1K2nIJetXYAKChzGlKLSAdO5NWDkkGi");
    $api_value3 = file_get_contents("https://currencydatafeed.com/api/data.php?token=njwyvh9hi724a3a05a7p&currency=AUD/USD+CHF/USD+EUR/GBP+EUR/USD+GBP/USD+USD/JPY");
    $test = json_decode($api_value3);

}
if ($accountType == 'c/d') {
    $pairs = json_encode("BTCUSD", "LTCUSD", "ETHUSD", "XRPUSD");
    //$api_value4=file_get_contents("https://forex.1forge.com/1.0.3/quotes?pairs=BTCUSD,LTCUSD,ETHUSD,XRPUSD&api_key=x1K2nIJetXYAKChzGlKLSAdO5NWDkkGi");
    $api_value4 = file_get_contents("https://currencydatafeed.com/api/data.php?token=njwyvh9hi724a3a05a7p&currency=BTC/USD+LTC/USD+ETH/USD+XRP/USD");
    $test = json_decode($api_value4);

}
/*$api_value5=file_get_contents("https://forex.1forge.com/1.0.3/quota?api_key=x1K2nIJetXYAKChzGlKLSAdO5NWDkkGi");
$test1=json_decode($api_value5);
$quota_remaining=$test1->quota_remaining;*/
//$quota_remaining=0;

?>

<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="/dashboard" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="./assets/images/logo.png" srcset="./assets/images/logo2x.png 2x" alt="logo">
                <img class="logo-dark logo-img" src="./assets/images/logo-dark.png" srcset="./assets/images/logo-dark2x.png 2x" alt="logo-dark">
                <!--<img class="logo-small logo-img logo-img-small" src="./assets/images/logo-small.png" srcset="./assets/images/logo-small2x.png 2x" alt="logo-small">-->
            </a>
        </div>
        <div class="nk-menu-trigger mr-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
    </div>
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="/dashboard" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-home"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="/personDetails" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-list"></em></span>
                            <span class="nk-menu-text">My Profile</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="/accountDetails" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-account-setting"></em></span>
                            <span class="nk-menu-text">My Account</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="/depositWithdraw" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-wallet-in"></em></span>
                            <span class="nk-menu-text">Deposit/Withdraw</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="/accountSecurity" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-lock"></em></span>
                            <span class="nk-menu-text">Account Security</span>
                        </a>
                    </li>
                    <!---<li class="nk-menu-item">
                        <a href="/additionalPages" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span>
                            <span class="nk-menu-text">Additional Information</span>
                        </a>
                    </li>-->
                    <li class="nk-menu-item">
                        <a href="/messages" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-contact"></em></span>
                            <span class="nk-menu-text">Contact Us</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="/logout" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-signout"></em></span>
                            <span class="nk-menu-text">Sign out</span>
                        </a>
                    </li>
                </ul>
               <!-- <ul class="nk-menu nk-menu-sm">
                    <li class="nk-menu-heading">
                        <span>Help Center</span>
                    </li>
                    <li class="nk-menu-item">
                        <a href="/faqs" class="nk-menu-link">
                            <span class="nav-link" href="https://cointraderclient.com/faq/"target="_blank">FAQs</span>
                        </a>
                    </li>
               <li class="nk-menu-item">
                        <a href="/support" class="nk-menu-link">
                            <span class="nk-menu-text">Support</span>-->
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>