<?php

class __MyTemplates_ee471fe194af95c2575fa972e1551fc6 extends Mustache_Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        // 'data' section
        $value = $context->find('data');
        $buffer .= $this->sectionE05306d867e3988f0cec0809899dca75($context, $indent, $value);

        return $buffer;
    }

    private function section51d7c9c652ced0161cb587bacd669266(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = 'checked';
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
                
                $buffer .= 'checked';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section431c1c0c49154cac88caa9b40fd98d30(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                        <tr>
                            <td class="tb-col-os">{{browser}}</td>
                            <td class="tb-col-ip"><span class="sub-text">{{ipAddress}}</span></td>
                            <td class="tb-col-time"><span class="sub-text">{{loginDate}}</span></td>
                        </tr>
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
                
                $buffer .= $indent . '                        <tr>
';
                $buffer .= $indent . '                            <td class="tb-col-os">';
                $value = $this->resolveValue($context->find('browser'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                            <td class="tb-col-ip"><span class="sub-text">';
                $value = $this->resolveValue($context->find('ipAddress'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span></td>
';
                $buffer .= $indent . '                            <td class="tb-col-time"><span class="sub-text">';
                $value = $this->resolveValue($context->find('loginDate'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span></td>
';
                $buffer .= $indent . '                        </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE05306d867e3988f0cec0809899dca75(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-block" style="margin-top: 30px;">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h5 class="nk-block-title">Security Settings</h5>
                    <div class="nk-block-des">
                        <p>These settings are to help you keep your account secure.</p>
                    </div>
                </div>
            </div>
            <div class="card card-bordered">
                <div class="card-inner-group">
                    <div class="card-inner">
                        <div class="between-center flex-wrap flex-md-nowrap g-3">
                            <div class="nk-block-text">
                                <h6>Save my Activity Logs</h6>
                                <p>You can save your all activity logs including unusual activity detected.</p>
                            </div>
                            <div class="nk-block-actions">
                                <ul class="align-center gx-3">
                                    <li class="order-md-last">
                                        <div class="custom-control custom-switch mr-n2">
                                            <input type="checkbox" class="custom-control-input" id="isSaveLoginHistory" {{#isSaveLoginHistory}}checked{{/isSaveLoginHistory}}>
                                            <label class="custom-control-label" for="isSaveLoginHistory"></label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-inner">
                        <div class="between-center flex-wrap flex-md-nowrap g-3">
                            <div class="nk-block-text">
                                <h6>Change Your Password</h6>
                                <p>Set a unique password to protect your account.</p>
                            </div>
                            <div class="nk-block-actions flex-shrink-sm-0">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-3 gy-2">
                                    <li class="order-md-last">
                                        <a href="javascript:;" class="btn btn-primary" data-toggle="modal" data-target="#changePasswordModal">Change Password</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <div class="nk-block-title-group">
                        <h5 class="nk-block-title title">Recent Logins</h5>
                    </div>
                    <div class="nk-block-des">
                        <p>This information about the last login activity on your account.</p>
                    </div>
                </div>
            </div>
            <div class="card card-bordered" style="height: 200px; overflow-y: scroll;">
                <table class="table table-ulogs">
                    <thead class="thead-light">
                        <tr>
                            <th class="tb-col-os"><span class="overline-title">Browser <span class="d-sm-none">/ IP</span></span></th>
                            <th class="tb-col-ip"><span class="overline-title">IP</span></th>
                            <th class="tb-col-time"><span class="overline-title">Time</span></th>
                            <th class="tb-col-action"><span class="overline-title">&nbsp;</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        {{#histories}}
                        <tr>
                            <td class="tb-col-os">{{browser}}</td>
                            <td class="tb-col-ip"><span class="sub-text">{{ipAddress}}</span></td>
                            <td class="tb-col-time"><span class="sub-text">{{loginDate}}</span></td>
                        </tr>
                        {{/histories}}
                    </tbody>
                </table>
            </div>
            <div class="nk-block mt-5">
                <div class="card card-bordered">
                    <div class="card-inner card-inner-lg">
                        <div class="align-center flex-wrap flex-md-nowrap g-4">
                            <div class="nk-block-image w-120px flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 118">
                                    <path d="M8.916,94.745C-.318,79.153-2.164,58.569,2.382,40.578,7.155,21.69,19.045,9.451,35.162,4.32,46.609.676,58.716.331,70.456,1.845,84.683,3.68,99.57,8.694,108.892,21.408c10.03,13.679,12.071,34.71,10.747,52.054-1.173,15.359-7.441,27.489-19.231,34.494-10.689,6.351-22.92,8.733-34.715,10.331-16.181,2.192-34.195-.336-47.6-12.281A47.243,47.243,0,0,1,8.916,94.745Z" transform="translate(0 -1)" fill="#f6faff" />
                                    <rect x="18" y="32" width="84" height="50" rx="4" ry="4" fill="#fff" />
                                    <rect x="26" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                    <rect x="50" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                    <rect x="74" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                    <rect x="38" y="60" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                    <rect x="62" y="60" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                    <path d="M98,32H22a5.006,5.006,0,0,0-5,5V79a5.006,5.006,0,0,0,5,5H52v8H45a2,2,0,0,0-2,2v4a2,2,0,0,0,2,2H73a2,2,0,0,0,2-2V94a2,2,0,0,0-2-2H66V84H98a5.006,5.006,0,0,0,5-5V37A5.006,5.006,0,0,0,98,32ZM73,94v4H45V94Zm-9-2H54V84H64Zm37-13a3,3,0,0,1-3,3H22a3,3,0,0,1-3-3V37a3,3,0,0,1,3-3H98a3,3,0,0,1,3,3Z" transform="translate(0 -1)" fill="#798bff" />
                                    <path d="M61.444,41H40.111L33,48.143V19.7A3.632,3.632,0,0,1,36.556,16H61.444A3.632,3.632,0,0,1,65,19.7V37.3A3.632,3.632,0,0,1,61.444,41Z" transform="translate(0 -1)" fill="#6576ff" />
                                    <path d="M61.444,41H40.111L33,48.143V19.7A3.632,3.632,0,0,1,36.556,16H61.444A3.632,3.632,0,0,1,65,19.7V37.3A3.632,3.632,0,0,1,61.444,41Z" transform="translate(0 -1)" fill="none" stroke="#6576ff" stroke-miterlimit="10" stroke-width="2" />
                                    <line x1="40" y1="22" x2="57" y2="22" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                    <line x1="40" y1="27" x2="57" y2="27" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                    <line x1="40" y1="32" x2="50" y2="32" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                    <line x1="30.5" y1="87.5" x2="30.5" y2="91.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                    <line x1="28.5" y1="89.5" x2="32.5" y2="89.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                    <line x1="79.5" y1="22.5" x2="79.5" y2="26.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                    <line x1="77.5" y1="24.5" x2="81.5" y2="24.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                    <circle cx="90.5" cy="97.5" r="3" fill="none" stroke="#9cabff" stroke-miterlimit="10" />
                                    <circle cx="24" cy="23" r="2.5" fill="none" stroke="#9cabff" stroke-miterlimit="10" />
                                </svg>
                            </div>
                            <div class="nk-block-content">
                                <div class="nk-block-content-head px-lg-4">
                                    <h5>We’re here to help you!</h5>
                                    <p class="text-soft">Ask a question or file a support ticket, manage request, report an issues. Our team support team will get back to you by email.</p>
                                </div>
                            </div>
                            <div class="nk-block-content flex-shrink-0">
                                <a href="/messages" class="btn btn-lg btn-outline-primary">Get Support Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $(\'#isSaveLoginHistory\').on(\'click\', function() {
        var checked = $(this)[0].checked;
        checked = checked == true ? 1 : 0;
        $.ajax({
            url : "/accountSecurity",
            type: \'POST\',
            data: {
                type: \'isSaveLoginHistory\',
                isSaveLoginHistory: checked
            },
            success:function(data)
            {
                
            }
        });
    });
});
</script>
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
                
                $buffer .= $indent . '<div class="nk-content ">
';
                $buffer .= $indent . '    <div class="container-fluid">
';
                $buffer .= $indent . '        <div class="nk-block" style="margin-top: 30px;">
';
                $buffer .= $indent . '            <div class="nk-block-head">
';
                $buffer .= $indent . '                <div class="nk-block-head-content">
';
                $buffer .= $indent . '                    <h5 class="nk-block-title">Security Settings</h5>
';
                $buffer .= $indent . '                    <div class="nk-block-des">
';
                $buffer .= $indent . '                        <p>These settings are to help you keep your account secure.</p>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="card card-bordered">
';
                $buffer .= $indent . '                <div class="card-inner-group">
';
                $buffer .= $indent . '                    <div class="card-inner">
';
                $buffer .= $indent . '                        <div class="between-center flex-wrap flex-md-nowrap g-3">
';
                $buffer .= $indent . '                            <div class="nk-block-text">
';
                $buffer .= $indent . '                                <h6>Save my Activity Logs</h6>
';
                $buffer .= $indent . '                                <p>You can save your all activity logs including unusual activity detected.</p>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="nk-block-actions">
';
                $buffer .= $indent . '                                <ul class="align-center gx-3">
';
                $buffer .= $indent . '                                    <li class="order-md-last">
';
                $buffer .= $indent . '                                        <div class="custom-control custom-switch mr-n2">
';
                $buffer .= $indent . '                                            <input type="checkbox" class="custom-control-input" id="isSaveLoginHistory" ';
                // 'isSaveLoginHistory' section
                $value = $context->find('isSaveLoginHistory');
                $buffer .= $this->section51d7c9c652ced0161cb587bacd669266($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                                            <label class="custom-control-label" for="isSaveLoginHistory"></label>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </li>
';
                $buffer .= $indent . '                                </ul>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="card-inner">
';
                $buffer .= $indent . '                        <div class="between-center flex-wrap flex-md-nowrap g-3">
';
                $buffer .= $indent . '                            <div class="nk-block-text">
';
                $buffer .= $indent . '                                <h6>Change Your Password</h6>
';
                $buffer .= $indent . '                                <p>Set a unique password to protect your account.</p>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="nk-block-actions flex-shrink-sm-0">
';
                $buffer .= $indent . '                                <ul class="align-center flex-wrap flex-sm-nowrap gx-3 gy-2">
';
                $buffer .= $indent . '                                    <li class="order-md-last">
';
                $buffer .= $indent . '                                        <a href="javascript:;" class="btn btn-primary" data-toggle="modal" data-target="#changePasswordModal">Change Password</a>
';
                $buffer .= $indent . '                                    </li>
';
                $buffer .= $indent . '                                </ul>
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
                $buffer .= $indent . '            <div class="nk-block-head">
';
                $buffer .= $indent . '                <div class="nk-block-head-content">
';
                $buffer .= $indent . '                    <div class="nk-block-title-group">
';
                $buffer .= $indent . '                        <h5 class="nk-block-title title">Recent Logins</h5>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="nk-block-des">
';
                $buffer .= $indent . '                        <p>This information about the last login activity on your account.</p>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="card card-bordered" style="height: 200px; overflow-y: scroll;">
';
                $buffer .= $indent . '                <table class="table table-ulogs">
';
                $buffer .= $indent . '                    <thead class="thead-light">
';
                $buffer .= $indent . '                        <tr>
';
                $buffer .= $indent . '                            <th class="tb-col-os"><span class="overline-title">Browser <span class="d-sm-none">/ IP</span></span></th>
';
                $buffer .= $indent . '                            <th class="tb-col-ip"><span class="overline-title">IP</span></th>
';
                $buffer .= $indent . '                            <th class="tb-col-time"><span class="overline-title">Time</span></th>
';
                $buffer .= $indent . '                            <th class="tb-col-action"><span class="overline-title">&nbsp;</span></th>
';
                $buffer .= $indent . '                        </tr>
';
                $buffer .= $indent . '                    </thead>
';
                $buffer .= $indent . '                    <tbody>
';
                // 'histories' section
                $value = $context->find('histories');
                $buffer .= $this->section431c1c0c49154cac88caa9b40fd98d30($context, $indent, $value);
                $buffer .= $indent . '                    </tbody>
';
                $buffer .= $indent . '                </table>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="nk-block mt-5">
';
                $buffer .= $indent . '                <div class="card card-bordered">
';
                $buffer .= $indent . '                    <div class="card-inner card-inner-lg">
';
                $buffer .= $indent . '                        <div class="align-center flex-wrap flex-md-nowrap g-4">
';
                $buffer .= $indent . '                            <div class="nk-block-image w-120px flex-shrink-0">
';
                $buffer .= $indent . '                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 118">
';
                $buffer .= $indent . '                                    <path d="M8.916,94.745C-.318,79.153-2.164,58.569,2.382,40.578,7.155,21.69,19.045,9.451,35.162,4.32,46.609.676,58.716.331,70.456,1.845,84.683,3.68,99.57,8.694,108.892,21.408c10.03,13.679,12.071,34.71,10.747,52.054-1.173,15.359-7.441,27.489-19.231,34.494-10.689,6.351-22.92,8.733-34.715,10.331-16.181,2.192-34.195-.336-47.6-12.281A47.243,47.243,0,0,1,8.916,94.745Z" transform="translate(0 -1)" fill="#f6faff" />
';
                $buffer .= $indent . '                                    <rect x="18" y="32" width="84" height="50" rx="4" ry="4" fill="#fff" />
';
                $buffer .= $indent . '                                    <rect x="26" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
';
                $buffer .= $indent . '                                    <rect x="50" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
';
                $buffer .= $indent . '                                    <rect x="74" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
';
                $buffer .= $indent . '                                    <rect x="38" y="60" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
';
                $buffer .= $indent . '                                    <rect x="62" y="60" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
';
                $buffer .= $indent . '                                    <path d="M98,32H22a5.006,5.006,0,0,0-5,5V79a5.006,5.006,0,0,0,5,5H52v8H45a2,2,0,0,0-2,2v4a2,2,0,0,0,2,2H73a2,2,0,0,0,2-2V94a2,2,0,0,0-2-2H66V84H98a5.006,5.006,0,0,0,5-5V37A5.006,5.006,0,0,0,98,32ZM73,94v4H45V94Zm-9-2H54V84H64Zm37-13a3,3,0,0,1-3,3H22a3,3,0,0,1-3-3V37a3,3,0,0,1,3-3H98a3,3,0,0,1,3,3Z" transform="translate(0 -1)" fill="#798bff" />
';
                $buffer .= $indent . '                                    <path d="M61.444,41H40.111L33,48.143V19.7A3.632,3.632,0,0,1,36.556,16H61.444A3.632,3.632,0,0,1,65,19.7V37.3A3.632,3.632,0,0,1,61.444,41Z" transform="translate(0 -1)" fill="#6576ff" />
';
                $buffer .= $indent . '                                    <path d="M61.444,41H40.111L33,48.143V19.7A3.632,3.632,0,0,1,36.556,16H61.444A3.632,3.632,0,0,1,65,19.7V37.3A3.632,3.632,0,0,1,61.444,41Z" transform="translate(0 -1)" fill="none" stroke="#6576ff" stroke-miterlimit="10" stroke-width="2" />
';
                $buffer .= $indent . '                                    <line x1="40" y1="22" x2="57" y2="22" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
';
                $buffer .= $indent . '                                    <line x1="40" y1="27" x2="57" y2="27" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
';
                $buffer .= $indent . '                                    <line x1="40" y1="32" x2="50" y2="32" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
';
                $buffer .= $indent . '                                    <line x1="30.5" y1="87.5" x2="30.5" y2="91.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
';
                $buffer .= $indent . '                                    <line x1="28.5" y1="89.5" x2="32.5" y2="89.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
';
                $buffer .= $indent . '                                    <line x1="79.5" y1="22.5" x2="79.5" y2="26.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
';
                $buffer .= $indent . '                                    <line x1="77.5" y1="24.5" x2="81.5" y2="24.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
';
                $buffer .= $indent . '                                    <circle cx="90.5" cy="97.5" r="3" fill="none" stroke="#9cabff" stroke-miterlimit="10" />
';
                $buffer .= $indent . '                                    <circle cx="24" cy="23" r="2.5" fill="none" stroke="#9cabff" stroke-miterlimit="10" />
';
                $buffer .= $indent . '                                </svg>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="nk-block-content">
';
                $buffer .= $indent . '                                <div class="nk-block-content-head px-lg-4">
';
                $buffer .= $indent . '                                    <h5>We’re here to help you!</h5>
';
                $buffer .= $indent . '                                    <p class="text-soft">Ask a question or file a support ticket, manage request, report an issues. Our team support team will get back to you by email.</p>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="nk-block-content flex-shrink-0">
';
                $buffer .= $indent . '                                <a href="/messages" class="btn btn-lg btn-outline-primary">Get Support Now</a>
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
                $buffer .= $indent . '<script>
';
                $buffer .= $indent . '$(document).ready(function() {
';
                $buffer .= $indent . '    $(\'#isSaveLoginHistory\').on(\'click\', function() {
';
                $buffer .= $indent . '        var checked = $(this)[0].checked;
';
                $buffer .= $indent . '        checked = checked == true ? 1 : 0;
';
                $buffer .= $indent . '        $.ajax({
';
                $buffer .= $indent . '            url : "/accountSecurity",
';
                $buffer .= $indent . '            type: \'POST\',
';
                $buffer .= $indent . '            data: {
';
                $buffer .= $indent . '                type: \'isSaveLoginHistory\',
';
                $buffer .= $indent . '                isSaveLoginHistory: checked
';
                $buffer .= $indent . '            },
';
                $buffer .= $indent . '            success:function(data)
';
                $buffer .= $indent . '            {
';
                $buffer .= $indent . '                
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $buffer .= $indent . '</script>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
