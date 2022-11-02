<?php
ini_set('error_reporting', 1);
ini_set('display_errors', true);
define('SMTP_HOST','mail.cointraderclient.com');
define('SMTP_USER','noreply@cointraderclient.com');
define('SMTP_PASSWORD','Uh;ErB48bm?M');
define('EMAIL_FROM','noreply@cointraderclient.com');
require 'Classes/Mustache/Autoloader.php';
Mustache_Autoloader::register();

$mustache = new Mustache_Engine(array(
    'template_class_prefix' => '__MyTemplates_',
    'cache' => dirname(__FILE__) . '/tmp/cache/mustache',
    'cache_file_mode' => 0666, // Please, configure your umask instead of doing this :)
    'cache_lambda_templates' => true,
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/templates'),
    'partials_loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/templates/partials'),
    'helpers' => array('i18n' => function ($text) {
        // do something translatey here...
    }),
    'escape' => function ($value) {
        return htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
    },
    'charset' => 'ISO-8859-1',
    'logger' => new Mustache_Logger_StreamLogger('php://stderr'),
    'strict_callables' => true,
    'pragmas' => [Mustache_Engine::PRAGMA_FILTERS],
));

include 'context.php';

?>

<!DOCTYPE html>
<html  lang="en-US">
<head>
    <?php
        include 'includes/head.php';
    ?>
</head>

<body class="nk-body bg-lighter npc-default has-sidebar">
    
    <div class="nk-main">

        <?php 

        if ($_SESSION['userId']) {
            if($pageData->isAdmin) {
                include 'includes/adminsidebar.php';
            } else {
                include 'includes/usersidebar.php';
            }
        ?>

            <div class="nk-wrap ">
                <?php

                if($pageData->isAdmin) {
                    include 'includes/adminheader.php';
                } else {
                    include 'includes/userheader.php';
                }

                //start usercontent
                $result = dbAction('trialday', (object) array('id' => $_SESSION['userId']));
                $regdate = $result[0]->dateCreated;
                $expdate = $result[0]->trialExpiryDate;

                $d1 = strtotime(date('Y-m-d'));
                $your_date = strtotime($expdate);
                $datediff = $your_date - $d1;
                $trial = floor($datediff / (60 * 60 * 24));



                echo $data->template->render((object) array('data' => $data->data));
                //end usercontent
                
                if($pageData->isAdmin) {
                    include 'includes/adminfooter.php';
                } else {
                    include 'includes/userfooter.php';
                }
                ?>
            </div>
        <?php
        } else {
            echo $data->template->render((object) array('data' => $data->data));
        }
        ?>
    </div>
    
    <?php include 'includes/modal.php'?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <div class="container">
        <div class="modal fade" id="myModalnotification" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header" style="display: unset; text-align: center">
                        <span class="modal-title"><span class="nk-menu-icon"><i class="icon bi bi-envelope-fill"></i></span></em></span>
                    </div>
                    <div class="modal-body">
                        <p style="text-align: center;">You have a new email</p>
                    </div>
                    <div class="modal-footer" style="text-align: center;display: unset">
                        <a type="button" href="./messages" class="btn btn-primary">Inbox</a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/js/scripts.js?ver=2.2.0"></script>
    
    <script src="./assets/js/charts/chart-crypto.js?ver=2.2.0"></script>
    <script src="./assets/js/charts/chart-ecommerce.js?ver=2.2.0"></script>
    <script src="./assets/js/example-chart.js?ver=2.2.0"></script>
    
    <script src="./assets/js/apps/inbox.js?ver=2.2.0"></script>
    <script src="./assets/js/libs/tagify.js?ver=2.2.0"></script>

    <script>
        setInterval(function(){
            var userId="<?php echo $_SESSION['userId'] ?>";
            $.ajax({
                type: "POST",
                url: '/checknewemail',
                data: {userId:userId},
                success: function(data) {
                    console.log(data);
                    if (data=='yes'){
                        $("#myModalnotification").modal('show');
                    }

                }
            });

        }, 5000);

    </script>

</body>
</html>