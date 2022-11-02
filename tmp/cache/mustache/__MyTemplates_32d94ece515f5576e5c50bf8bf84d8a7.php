<?php

class __MyTemplates_32d94ece515f5576e5c50bf8bf84d8a7 extends Mustache_Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<div class="nk-wrap nk-wrap-nosidebar">
';
        $buffer .= $indent . '    <div class="nk-content ">
';
        $buffer .= $indent . '        <div class="nk-split nk-split-page nk-split-md">
';
        $buffer .= $indent . '            <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
';
        $buffer .= $indent . '                <div class="absolute-top-right d-lg-none p-3 p-sm-5">
';
        $buffer .= $indent . '                    <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="nk-block nk-block-middle nk-auth-body">
';
        $buffer .= $indent . '                    <div class="brand-logo pb-5">
';
        $buffer .= $indent . '                        <a href="/login" class="logo-link">
';
        $buffer .= $indent . '                            <img class="logo-light logo-img logo-img-lg" src="./assets/images/logo.png" srcset="./assets/images/logo2x.png 2x" alt="logo">
';
        $buffer .= $indent . '                            <img class="logo-dark logo-img logo-img-lg" src="./assets/images/logo-dark.png" srcset="./assets/images/logo-dark2x.png 2x" alt="logo-dark">
';
        $buffer .= $indent . '                        </a>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="nk-block-head">
';
        $buffer .= $indent . '                        <div class="nk-block-head-content">
';
        $buffer .= $indent . '                            <!--<h5 class="nk-block-title">Sign-In</h5>-->
';
        $buffer .= $indent . '                            <div class="nk-block-des">
';
        $buffer .= $indent . '                                <p>Access your Cointraderclient Account using your email and password</p>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <form id="login" action="/login" method="post">
';
        $buffer .= $indent . '                        <div class="form-group">
';
        $buffer .= $indent . '                            <div class="form-label-group">
';
        $buffer .= $indent . '                                <label class="form-label" for="email">Email</label>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <input type="text" class="form-control form-control-lg" name="email" id="email" placeholder="Enter your email address" required>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                        <div class="form-group">
';
        $buffer .= $indent . '                            <div class="form-label-group">
';
        $buffer .= $indent . '                                <label class="form-label" for="password">Password</label>
';
        $buffer .= $indent . '                                <a href="#" class="link link-primary link-sm" data-dismiss="modal" data-toggle="modal" data-target="#resetPasswordModal">Forgot Password?</a>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <div class="form-control-wrap">
';
        $buffer .= $indent . '                                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
';
        $buffer .= $indent . '                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
';
        $buffer .= $indent . '                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
';
        $buffer .= $indent . '                                </a>
';
        $buffer .= $indent . '                                <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Enter your passcode" required>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                        </div>
';
        // 'data.loginFailed' section
        $value = $context->findDot('data.loginFailed');
        $buffer .= $this->section907370a3109d595e59c0efe973286ea4($context, $indent, $value);
        // 'data.expireUser' section
        $value = $context->findDot('data.expireUser');
        $buffer .= $this->section02df88c35dcecc7990649de371667541($context, $indent, $value);
        $buffer .= $indent . '                        <div class="form-group">
';
        $buffer .= $indent . '                            <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </form>
';
        $buffer .= $indent . '                    <div class="form-note-s2 pt-4">
';
        $buffer .= $indent . '                        <a href="./register" class="btn btn-lg btn-info btn-block">Open Account</a>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="nk-block nk-auth-footer">
';
        $buffer .= $indent . '                    <div class="nk-block-between">
';
        $buffer .= $indent . '                        <ul class="nav nav-sm">
';
        $buffer .= $indent . '                            <li class="nav-item">
';
        $buffer .= $indent . '                                <a class="nav-link" href="https://cointraderclient.com/terms-of-service/"target="_blank">Terms of Service</a>
';
        $buffer .= $indent . '                            </li>
';
        $buffer .= $indent . '                            <li class="nav-item">
';
        $buffer .= $indent . '                                <a class="nav-link" href="https://cointraderclient.com/privacy-policy/"target="_blank">Privacy Policy</a>
';
        $buffer .= $indent . '                                  <li class="nav-item">
';
        $buffer .= $indent . '                                <a class="nav-link" href="https://cointraderclient.com/faq/"target="_blank">FAQ</a>
';
        $buffer .= $indent . '                            </li>
';
        $buffer .= $indent . '                            </li>
';
        $buffer .= $indent . '                        </ul>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="mt-3">
';
        $buffer .= $indent . '                        <p>&copy; 2022 Cointraderclient Group. All Rights Reserved.</p>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
';
        $buffer .= $indent . '                <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
';
        $buffer .= $indent . '                    <div class="slider-init">
';
        $buffer .= $indent . '                        <div class="slider-item">
';
        $buffer .= $indent . '                            <div class="nk-feature nk-feature-center">
';
        $buffer .= $indent . '                                <div class="nk-feature-img">
';
        $buffer .= $indent . '                                    <img class="round" src="./assets/images/slides/promo-a.png" srcset="./assets/images/slides/promo-a2x.png 2x" alt="">
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                                <div class="nk-feature-content py-4 p-sm-5">
';
        $buffer .= $indent . '                                    <h4>Cointraderclient Online</h4>
';
        $buffer .= $indent . '                                    <p>Your money works harder and smarter with <br>The Cointraderclient Group.</p>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div class="modal fade" tabindex="-1" id="DisplayPasswordSentConfirmation">
';
        $buffer .= $indent . '    <div class="modal-dialog" role="document">
';
        $buffer .= $indent . '        <div class="modal-content">
';
        $buffer .= $indent . '            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross"></em></a>
';
        $buffer .= $indent . '            <div class="modal-body modal-body-lg text-center">
';
        $buffer .= $indent . '                <div class="nk-modal">
';
        $buffer .= $indent . '                    <h4 class="nk-modal-title">Reset Your Password</h4>
';
        $buffer .= $indent . '                    <div class="nk-modal-text">
';
        $buffer .= $indent . '                        <div class="caption-text" id="successSendRequest">Your password reset email should arrive shortly.</div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div class="modal fade" tabindex="-1" id="DisplayPasswordChangedConfirmation">
';
        $buffer .= $indent . '    <div class="modal-dialog" role="document">
';
        $buffer .= $indent . '        <div class="modal-content">
';
        $buffer .= $indent . '            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross"></em></a>
';
        $buffer .= $indent . '            <div class="modal-body modal-body-lg text-center">
';
        $buffer .= $indent . '                <div class="nk-modal">
';
        $buffer .= $indent . '                    <h4 class="nk-modal-title">Reset Your Password</h4>
';
        $buffer .= $indent . '                    <div class="nk-modal-text">
';
        $buffer .= $indent . '                        <div class="caption-text" id="successSendRequest">Your password has been changed successfully.</div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="modal fade" tabindex="-1" id="resetPasswordModal">
';
        $buffer .= $indent . '    <div class="modal-dialog" role="document">
';
        $buffer .= $indent . '        <div class="modal-content">
';
        $buffer .= $indent . '            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross"></em></a>
';
        $buffer .= $indent . '            <div class="modal-body modal-body-lg text-center">
';
        $buffer .= $indent . '                <div class="nk-modal">
';
        $buffer .= $indent . '                    <h4 class="nk-modal-title">Reset Your Password</h4>
';
        $buffer .= $indent . '                    <div class="form-group" id="PassInp1">
';
        $buffer .= $indent . '                        <div class="form-label-group">
';
        $buffer .= $indent . '                            <label class="form-label" for="clientEmail">Email</label>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                        <input type="email" class="form-control form-control-lg" id="clientEmail" autocomplete="off" placeholder="Enter your email address" required>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="nk-modal-text">
';
        $buffer .= $indent . '                        <div class="caption-text" id="successSendRequest" style="display: none;">Your password reset email should arrive shortly.</div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="nk-modal-action">
';
        $buffer .= $indent . '                        <a href="#" id="sendResetPassword" class="btn btn-lg btn-mw btn-primary" data-dismiss="modal">Send Password Reset Email</a>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<a href="#" id="btnNewPassword" data-dismiss="modal" data-toggle="modal" data-target="#newPasswordModal"></a>
';
        $buffer .= $indent . '<div class="modal fade" tabindex="-1" id="newPasswordModal">
';
        $buffer .= $indent . '    <div class="modal-dialog" role="document">
';
        $buffer .= $indent . '        <div class="modal-content">
';
        $buffer .= $indent . '            <a href="#" class="close" id="closeNewPasswordModal" data-dismiss="modal"><em class="icon ni ni-cross"></em></a>
';
        $buffer .= $indent . '            <div class="modal-body modal-body-lg text-center">
';
        $buffer .= $indent . '                <div class="nk-modal">
';
        $buffer .= $indent . '                    <h4 class="nk-modal-title">Reset Password</h4>
';
        $buffer .= $indent . '                    <div class="form-group" id="PassInp">
';
        $buffer .= $indent . '                        <div class="form-label-group">
';
        $buffer .= $indent . '                            <label class="form-label" for="forgotNewPassword">New Password</label>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                        <input type="password" class="form-control form-control-lg" id="forgotNewPassword" autocomplete="off" placeholder="Enter your new password" required>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="nk-modal-text">
';
        $buffer .= $indent . '                        <div class="caption-text" id="successSaveNewPassword" style="display: none;">Your Email and new password should arrive shortly.</div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="nk-modal-action">
';
        $buffer .= $indent . '                        <a href="#" id="saveNewPassword"   class="btn btn-lg btn-mw btn-primary" >Save New Password</a>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script>
';
        $buffer .= $indent . 'function HideFirst()
';
        $buffer .= $indent . '{
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    jQuery(\'#successSaveNewPassword\').show();
';
        $buffer .= $indent . '    jQuery(\'#PassInp\').remove();
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    jQuery(\'#saveNewPassword1\').click();
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '$(document).ready(function() {
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    $(\'#sendResetPassword\').on(\'click\', function() {
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        if ($(\'#clientEmail\').val()) {
';
        $buffer .= $indent . '            $.ajax({
';
        $buffer .= $indent . '                url: \'/forgotPassword\',
';
        $buffer .= $indent . '                method: \'POST\',
';
        $buffer .= $indent . '                data: {
';
        $buffer .= $indent . '                    type: \'request\',
';
        $buffer .= $indent . '                    email: $(\'#clientEmail\').val(),
';
        $buffer .= $indent . '                },
';
        $buffer .= $indent . '                success: function(data) {
';
        $buffer .= $indent . '                    if (data == 0) alert(\'This account is not exits.\');
';
        $buffer .= $indent . '                    else if (data == 1) 
';
        $buffer .= $indent . '                    {
';
        $buffer .= $indent . '                    
';
        $buffer .= $indent . '                        $(\'#DisplayPasswordSentConfirmation\').modal(\'show\');
';
        $buffer .= $indent . '                        /*jQuery(\'#successSendRequest\').show();
';
        $buffer .= $indent . '                        jQuery(\'#PassInp1\').remove();
';
        $buffer .= $indent . '                        jQuery(\'#sendResetPassword\').remove();
';
        $buffer .= $indent . '                        $(\'#resetPasswordModal\').modal(\'show\');*/
';
        $buffer .= $indent . '                    }
';
        $buffer .= $indent . '                }
';
        $buffer .= $indent . '            })
';
        $buffer .= $indent . '        } else {
';
        $buffer .= $indent . '            alert(\'Please input your email address!\');
';
        $buffer .= $indent . '            $(\'#clientEmail\').focus();
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '    });
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    var bpg$1497 = "';
        // 'data' section
        $value = $context->find('data');
        $buffer .= $this->sectionA6fd0e1534210afb8dca1c8e726ac689($context, $indent, $value);
        $buffer .= '";
';
        $buffer .= $indent . '    $(\'#saveNewPassword\').on(\'click\', function() {
';
        $buffer .= $indent . '        if ($(\'#forgotNewPassword\').val()) {
';
        $buffer .= $indent . '            $.ajax({
';
        $buffer .= $indent . '                url: \'/forgotPassword\',
';
        $buffer .= $indent . '                method: \'POST\',
';
        $buffer .= $indent . '                data: {
';
        $buffer .= $indent . '                    type: \'newPassword\',
';
        $buffer .= $indent . '                    password: $(\'#forgotNewPassword\').val(),
';
        $buffer .= $indent . '                    bpg$1497: bpg$1497,
';
        $buffer .= $indent . '                },
';
        $buffer .= $indent . '                success: function(data) {
';
        $buffer .= $indent . '                    if (data == 0) alert(\'This account is not exits.\');
';
        $buffer .= $indent . '                    else if (data == 1) {
';
        $buffer .= $indent . '                        $(\'#newPasswordModal\').modal(\'hide\');
';
        $buffer .= $indent . '                        $(\'#DisplayPasswordChangedConfirmation\').modal(\'show\');
';
        $buffer .= $indent . '                    }
';
        $buffer .= $indent . '                }
';
        $buffer .= $indent . '            })
';
        $buffer .= $indent . '        } else {
';
        $buffer .= $indent . '            alert(\'Please input new password!\');
';
        $buffer .= $indent . '            $(\'#forgotNewPassword\').focus();
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    });
';
        $buffer .= $indent . '
';
        // 'data.newPassword' section
        $value = $context->findDot('data.newPassword');
        $buffer .= $this->sectionE5dcd76062a41dd4dc63317267493046($context, $indent, $value);
        $buffer .= $indent . '});
';
        $buffer .= $indent . '</script>';

        return $buffer;
    }

    private function section907370a3109d595e59c0efe973286ea4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                        <div class="form-group example-alert">
                            <div class="alert alert-danger alert-icon alert-dismissible">
                                <em class="icon ni ni-cross-circle"></em> Your email or password is incorrect. <button class="close" data-dismiss="alert"></button>
                            </div>
                        </div>
                        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="form-group example-alert">
';
                $buffer .= $indent . '                            <div class="alert alert-danger alert-icon alert-dismissible">
';
                $buffer .= $indent . '                                <em class="icon ni ni-cross-circle"></em> Your email or password is incorrect. <button class="close" data-dismiss="alert"></button>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section02df88c35dcecc7990649de371667541(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                        <div class="form-group example-alert">
                            <div class="alert alert-danger alert-icon alert-dismissible">
                                <em class="icon ni ni-cross-circle"></em> Your account has expired, please contact support. <button class="close" data-dismiss="alert"></button>
                            </div>
                        </div>
                        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="form-group example-alert">
';
                $buffer .= $indent . '                            <div class="alert alert-danger alert-icon alert-dismissible">
';
                $buffer .= $indent . '                                <em class="icon ni ni-cross-circle"></em> Your account has expired, please contact support. <button class="close" data-dismiss="alert"></button>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA6fd0e1534210afb8dca1c8e726ac689(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '{{email}}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('email'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE5dcd76062a41dd4dc63317267493046(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
    $(\'#btnNewPassword\').click();
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    $(\'#btnNewPassword\').click();
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
