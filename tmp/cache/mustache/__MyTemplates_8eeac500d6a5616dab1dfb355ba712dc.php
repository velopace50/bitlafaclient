<?php

class __MyTemplates_8eeac500d6a5616dab1dfb355ba712dc extends Mustache_Template
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
        $buffer .= $this->sectionB496f0a6b901b5737171f4197c3b697c($context, $indent, $value);

        return $buffer;
    }

    private function section1690c0a5e1053cf8b3617fa56cfaf189(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                            <tr>
                                <td>{{tradeNumber}}</td>
                                <td>{{dateFormatted}}</td>
                                <td>{{market}}</td>
                                <td>{{tradeType}}</td>
                                <td class="spl-td">{{{profit}}}</td>
                                <td>
                                    <a href="javascript:;" class="btn btn-primary" data-toggle="modal" data-target="#modalTradeHistory" onclick="getTradeHistory({{id}});">
                                        <span class="pl-4 pr-4">View</span>
                                    </a>
                                </td>
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
                
                $buffer .= $indent . '                            <tr>
';
                $buffer .= $indent . '                                <td>';
                $value = $this->resolveValue($context->find('tradeNumber'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                                <td>';
                $value = $this->resolveValue($context->find('dateFormatted'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                                <td>';
                $value = $this->resolveValue($context->find('market'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                                <td>';
                $value = $this->resolveValue($context->find('tradeType'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                                <td class="spl-td">';
                $value = $this->resolveValue($context->find('profit'), $context, $indent);
                $buffer .= $value;
                $buffer .= '</td>
';
                $buffer .= $indent . '                                <td>
';
                $buffer .= $indent . '                                    <a href="javascript:;" class="btn btn-primary" data-toggle="modal" data-target="#modalTradeHistory" onclick="getTradeHistory(';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ');">
';
                $buffer .= $indent . '                                        <span class="pl-4 pr-4">View</span>
';
                $buffer .= $indent . '                                    </a>
';
                $buffer .= $indent . '                                </td>
';
                $buffer .= $indent . '                            </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section641bf4ddbfcf5f70bf3db92588c4c601(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                            {{#trades}}
                            <tr>
                                <td>{{tradeNumber}}</td>
                                <td>{{dateFormatted}}</td>
                                <td>{{market}}</td>
                                <td>{{tradeType}}</td>
                                <td class="spl-td">{{{profit}}}</td>
                                <td>
                                    <a href="javascript:;" class="btn btn-primary" data-toggle="modal" data-target="#modalTradeHistory" onclick="getTradeHistory({{id}});">
                                        <span class="pl-4 pr-4">View</span>
                                    </a>
                                </td>
                            </tr>
                            {{/trades}}
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
                
                // 'trades' section
                $value = $context->find('trades');
                $buffer .= $this->section1690c0a5e1053cf8b3617fa56cfaf189($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB496f0a6b901b5737171f4197c3b697c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-block-head" style="margin-top: 30px;">
            <div class="nk-block-between-md g-4">
                <div class="nk-block-head-content">
                    <h5 class="nk-block-title">Your Account Overview</h5>
                </div>
                <div class="nk-block-head-content">
                    <ul class="nk-block-tools gx-3">
                        <li><a href="/depositWithdraw" class="btn btn-info pl-4 pr-4"><span>Deposit</span> <em class="icon ni ni-arrow-long-right d-none d-sm-inline-block"></em></a></li>
                        <li><a href="/depositWithdraw" class="btn btn-primary pl-3 pr-3"><span>Withdraw</span> <em class="icon ni ni-arrow-long-right d-none d-sm-inline-block"></em></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="nk-block">
            <div class="card card-bordered">
                <div class="card-inner-group">
                    <div class="card-inner">
                        <div class="row">
                            <div class="offset-lg-1 col-lg-5 col-sm-6">
                                <div class="nk-iv-wg3">
                                    <div class="nk-iv-wg3-title">Total Balance</div>
                                    <div class="nk-iv-wg3-group  flex-lg-nowrap gx-4">
                                        <div class="nk-iv-wg3-sub">
                                            <div class="nk-iv-wg3-amount">
                                                <div class="number">{{currency}}{{totalBalance}}</div>
                                            </div>
                                            <div class="nk-iv-wg3-subtitle">Total Balance</div>
                                        </div>
                                        <div class="nk-iv-wg3-sub">
                                            <div class="nk-iv-wg3-amount">
                                                <div class="number-sm">{{currency}}{{initialInvestment}}</div>
                                            </div>
                                            <div class="nk-iv-wg3-subtitle">Initial Investment <em class="icon ni ni-info-fill" data-toggle="tooltip" data-placement="right" title="You can\'t use"></em></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="offset-lg-1 col-lg-5 col-sm-6">
                                <div class="nk-iv-wg3">
                                    <div class="nk-iv-wg3-title">Performance This Month <em class="icon ni ni-info-fill" data-toggle="tooltip" data-placement="right" title="Current Month Profit"></em></div>
                                    <div class="nk-iv-wg3-group flex-md-nowrap g-4">
                                        <div class="nk-iv-wg3-sub-group gx-4">
                                            <div class="nk-iv-wg3-sub">
                                                <div class="nk-iv-wg3-amount">
                                                    <div class="number">{{currency}}{{monthTotalProfit}}</div>
                                                </div>
                                                <div class="nk-iv-wg3-subtitle">Total Profit/Loss</div>
                                            </div>
                                            <div class="nk-iv-wg3-sub">
                                                <span class="nk-iv-wg3-plus text-soft"><em class="icon ni ni-plus"></em></span>
                                                <div class="nk-iv-wg3-amount">
                                                    <div class="number-sm">{{currency}}{{todayProfit}}</div>
                                                </div>
                                                <div class="nk-iv-wg3-subtitle">Today Profit/Loss</div>
                                            </div>
                                        </div>
                                        <div class="nk-iv-wg3-sub flex-grow-1 ml-md-3">
                                            <div class="nk-iv-wg3-ck">
                                                <canvas class="chart-profit" id="profitCM"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <div class="card-inner">
                        <ul class="nk-iv-wg3-nav">
                            <li><a href="#"><em class="icon ni ni-notes-alt"></em> <span></span></a></li>
                            <li><a href="#"><em class="icon ni ni-growth"></em> <span></span></a></li>
                            <li><a href="#"><em class="icon ni ni-report-profit"></em> <span></span></a></li>
                            <li><a href="#"><em class="icon ni ni-help"></em> <span></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <div class="nk-block-head-content">
                    <h5 class="nk-block-title">Account Details</h5>
                </div>
            </div>
        </div>
        <div class="nk-block">
        {{firstday}}
            <div class="card card-bordered">
                <div id="schemeDetails" class="nk-iv-scheme-details">
                    <ul class="nk-iv-wg3-list">
                        <li>
                            <div class="sub-text">Account Trader</div>
                            <div class="lead-text">{{accountManager}}</div>
                        </li>
                        <li>
                            <div class="sub-text">Account Type</div>
                            <div class="lead-text">{{accountType}}</div>
                        </li>
                        <li>
                            <div class="sub-text">Account Opening Date</div>
                            <div class="lead-text">{{accountOpening}}</div>
                        </li>
                    </ul>
                    <ul class="nk-iv-wg3-list">
                        <li>
                            <div class="sub-text">Deposit Currency</div>
                            <div class="lead-text">{{accountCurrency}}</div>
                        </li>
                        <li>
                            <div class="sub-text">Dividend Payment</div>
                            <div class="lead-text">{{dividendPayment}}</div>
                        </li>
                        <li>
                            <div class="sub-text">Initial Investment</div>
                            <div class="lead-text">{{currency}}&nbsp;{{initialInvestment}}</div>
                        </li>
                    </ul>
                    <ul class="nk-iv-wg3-list">
                        <li>
                            <div class="sub-text">Commission Level</div>
                            <div class="lead-text" id="commission">
                            </div>
                        </li>
                        <li>
                            <div class="sub-text">Account Verified</div>
                            <div class="lead-text">{{accountVerified}}</div>
                        </li>
                        <li>
                            <div class="sub-text">Cointraderclient Debit Card</div>
                            <div class="lead-text">{{debitcard}}</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <div class="nk-block-head-content">
                    <h5 class="nk-block-title">Trade History</h5>
                </div>
            </div>
        </div>
        <div class="nk-block">
            <div class="card card-preview">
                <div class="card-inner">
                    <table class="datatable-init table">
                        <thead>
                            <tr>
                                <th style="width: 15%">Trade#</th>
                                <th style="width: 25%">Date</th>
                                <th style="width: 15%">Pair</th>
                                <th style="width: 15%">Long/Short</th>
                                <th style="width: 15%">P/L</th>
                                <th style="width: 15%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            {{#data}}
                            {{#trades}}
                            <tr>
                                <td>{{tradeNumber}}</td>
                                <td>{{dateFormatted}}</td>
                                <td>{{market}}</td>
                                <td>{{tradeType}}</td>
                                <td class="spl-td">{{{profit}}}</td>
                                <td>
                                    <a href="javascript:;" class="btn btn-primary" data-toggle="modal" data-target="#modalTradeHistory" onclick="getTradeHistory({{id}});">
                                        <span class="pl-4 pr-4">View</span>
                                    </a>
                                </td>
                            </tr>
                            {{/trades}}
                            {{/data}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="nk-block">
            <div class="card card-bordered">
                <div class="nk-refwg">
                    <div class="nk-refwg-invite card-inner">
                        <div class="nk-refwg-head g-3">
                            <div class="nk-refwg-title">
                                <h5 class="title">Refer Us & Earn</h5>
                                <div class="title-sub">Use the link to invite your friends.</div>
                            </div>
                            <div class="nk-refwg-action">
                                <a href="javascript:;" class="btn btn-primary">Invite</a>
                            </div>
                        </div>
                        <div class="nk-refwg-url">
                            <div class="form-control-wrap">
                                <div class="form-clip clipboard-init" data-clipboard-target="#refUrl" data-success="Copied" data-text="Copy Link"><em class="clipboard-icon icon ni ni-copy"></em> <span class="clipboard-text">Copy Link</span></div>
                                <div class="form-icon">
                                    <em class="icon ni ni-link-alt"></em>
                                </div>
                                <input type="text" class="form-control copy-text" id="refUrl" value="https://cointraderclient.com">
                            </div>
                        </div>
                    </div>
                    <div class="nk-refwg-stats card-inner bg-lighter">
                        <div class="nk-refwg-group g-3">
                            <div class="nk-refwg-name">
                                <h6 class="title">My Referrals <em class="icon ni ni-info" data-toggle="tooltip" data-placement="right" title="Referral Informations"></em></h6>
                            </div>
                            <div class="nk-refwg-info g-3">
                                <div class="nk-refwg-sub">
                                    <div class="title">0</div>
                                    <div class="sub-text">Total Joined</div>
                                </div>
                                <div class="nk-refwg-sub">
                                    <div class="title">0</div>
                                    <div class="sub-text">Referral Earnings</div>
                                </div>
                            </div>
                            <div class="nk-refwg-more dropdown mt-n1 mr-n1">
                                <a href="#" class="btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                                    <ul class="link-list-plain sm">
                                        <li><a href="javascript:;">7 days</a></li>
                                        <li><a href="javascript:;">15 Days</a></li>
                                        <li><a href="javascript:;">30 Days</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="nk-refwg-ck">
                            <canvas class="chart-refer-stats" id="refBarChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-block">
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
<script>
$(document).ready(function() {
    $(\'.datatable-init thead tr th:nth-Child(2)\').click();
    var commission = \'\';
    var accountType = "{{accountType}}";
    switch(accountType) {
        case \'60 Day Trial\': commission = \'0%\'; break;
        case \'Macro\': commission = \'0%\'; break;
        case \'Advanced\': commission = \'15%\'; break;
        case \'Digital\': commission = \'15%\'; break;
        case \'Prime\': commission = \'10%\'; break;
    }
    $(\'#commission\').html(commission);

});

function getTradeHistory(id) {
    $.ajax({
        url : "/getModalTradeHistory",
        type: \'POST\',
        data: {\'id\':id},
        success:function(data)
        {
            if(data){ 
                $(\'#modalTradeHistory .modal-body\').html(data); 
            }
        }
    });
}
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
                $buffer .= $indent . '        <div class="nk-block-head" style="margin-top: 30px;">
';
                $buffer .= $indent . '            <div class="nk-block-between-md g-4">
';
                $buffer .= $indent . '                <div class="nk-block-head-content">
';
                $buffer .= $indent . '                    <h5 class="nk-block-title">Your Account Overview</h5>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="nk-block-head-content">
';
                $buffer .= $indent . '                    <ul class="nk-block-tools gx-3">
';
                $buffer .= $indent . '                        <li><a href="/depositWithdraw" class="btn btn-info pl-4 pr-4"><span>Deposit</span> <em class="icon ni ni-arrow-long-right d-none d-sm-inline-block"></em></a></li>
';
                $buffer .= $indent . '                        <li><a href="/depositWithdraw" class="btn btn-primary pl-3 pr-3"><span>Withdraw</span> <em class="icon ni ni-arrow-long-right d-none d-sm-inline-block"></em></a></li>
';
                $buffer .= $indent . '                    </ul>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="nk-block">
';
                $buffer .= $indent . '            <div class="card card-bordered">
';
                $buffer .= $indent . '                <div class="card-inner-group">
';
                $buffer .= $indent . '                    <div class="card-inner">
';
                $buffer .= $indent . '                        <div class="row">
';
                $buffer .= $indent . '                            <div class="offset-lg-1 col-lg-5 col-sm-6">
';
                $buffer .= $indent . '                                <div class="nk-iv-wg3">
';
                $buffer .= $indent . '                                    <div class="nk-iv-wg3-title">Total Balance</div>
';
                $buffer .= $indent . '                                    <div class="nk-iv-wg3-group  flex-lg-nowrap gx-4">
';
                $buffer .= $indent . '                                        <div class="nk-iv-wg3-sub">
';
                $buffer .= $indent . '                                            <div class="nk-iv-wg3-amount">
';
                $buffer .= $indent . '                                                <div class="number">';
                $value = $this->resolveValue($context->find('currency'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $value = $this->resolveValue($context->find('totalBalance'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="nk-iv-wg3-subtitle">Total Balance</div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="nk-iv-wg3-sub">
';
                $buffer .= $indent . '                                            <div class="nk-iv-wg3-amount">
';
                $buffer .= $indent . '                                                <div class="number-sm">';
                $value = $this->resolveValue($context->find('currency'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $value = $this->resolveValue($context->find('initialInvestment'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="nk-iv-wg3-subtitle">Initial Investment <em class="icon ni ni-info-fill" data-toggle="tooltip" data-placement="right" title="You can\'t use"></em></div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="offset-lg-1 col-lg-5 col-sm-6">
';
                $buffer .= $indent . '                                <div class="nk-iv-wg3">
';
                $buffer .= $indent . '                                    <div class="nk-iv-wg3-title">Performance This Month <em class="icon ni ni-info-fill" data-toggle="tooltip" data-placement="right" title="Current Month Profit"></em></div>
';
                $buffer .= $indent . '                                    <div class="nk-iv-wg3-group flex-md-nowrap g-4">
';
                $buffer .= $indent . '                                        <div class="nk-iv-wg3-sub-group gx-4">
';
                $buffer .= $indent . '                                            <div class="nk-iv-wg3-sub">
';
                $buffer .= $indent . '                                                <div class="nk-iv-wg3-amount">
';
                $buffer .= $indent . '                                                    <div class="number">';
                $value = $this->resolveValue($context->find('currency'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $value = $this->resolveValue($context->find('monthTotalProfit'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                                <div class="nk-iv-wg3-subtitle">Total Profit/Loss</div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="nk-iv-wg3-sub">
';
                $buffer .= $indent . '                                                <span class="nk-iv-wg3-plus text-soft"><em class="icon ni ni-plus"></em></span>
';
                $buffer .= $indent . '                                                <div class="nk-iv-wg3-amount">
';
                $buffer .= $indent . '                                                    <div class="number-sm">';
                $value = $this->resolveValue($context->find('currency'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $value = $this->resolveValue($context->find('todayProfit'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                                <div class="nk-iv-wg3-subtitle">Today Profit/Loss</div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="nk-iv-wg3-sub flex-grow-1 ml-md-3">
';
                $buffer .= $indent . '                                            <div class="nk-iv-wg3-ck">
';
                $buffer .= $indent . '                                                <canvas class="chart-profit" id="profitCM"></canvas>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                   <div class="card-inner">
';
                $buffer .= $indent . '                        <ul class="nk-iv-wg3-nav">
';
                $buffer .= $indent . '                            <li><a href="#"><em class="icon ni ni-notes-alt"></em> <span></span></a></li>
';
                $buffer .= $indent . '                            <li><a href="#"><em class="icon ni ni-growth"></em> <span></span></a></li>
';
                $buffer .= $indent . '                            <li><a href="#"><em class="icon ni ni-report-profit"></em> <span></span></a></li>
';
                $buffer .= $indent . '                            <li><a href="#"><em class="icon ni ni-help"></em> <span></span></a></li>
';
                $buffer .= $indent . '                        </ul>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="nk-block-head">
';
                $buffer .= $indent . '            <div class="nk-block-head-content">
';
                $buffer .= $indent . '                <div class="nk-block-head-content">
';
                $buffer .= $indent . '                    <h5 class="nk-block-title">Account Details</h5>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="nk-block">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('firstday'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '            <div class="card card-bordered">
';
                $buffer .= $indent . '                <div id="schemeDetails" class="nk-iv-scheme-details">
';
                $buffer .= $indent . '                    <ul class="nk-iv-wg3-list">
';
                $buffer .= $indent . '                        <li>
';
                $buffer .= $indent . '                            <div class="sub-text">Account Trader</div>
';
                $buffer .= $indent . '                            <div class="lead-text">';
                $value = $this->resolveValue($context->find('accountManager'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                        </li>
';
                $buffer .= $indent . '                        <li>
';
                $buffer .= $indent . '                            <div class="sub-text">Account Type</div>
';
                $buffer .= $indent . '                            <div class="lead-text">';
                $value = $this->resolveValue($context->find('accountType'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                        </li>
';
                $buffer .= $indent . '                        <li>
';
                $buffer .= $indent . '                            <div class="sub-text">Account Opening Date</div>
';
                $buffer .= $indent . '                            <div class="lead-text">';
                $value = $this->resolveValue($context->find('accountOpening'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                        </li>
';
                $buffer .= $indent . '                    </ul>
';
                $buffer .= $indent . '                    <ul class="nk-iv-wg3-list">
';
                $buffer .= $indent . '                        <li>
';
                $buffer .= $indent . '                            <div class="sub-text">Deposit Currency</div>
';
                $buffer .= $indent . '                            <div class="lead-text">';
                $value = $this->resolveValue($context->find('accountCurrency'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                        </li>
';
                $buffer .= $indent . '                        <li>
';
                $buffer .= $indent . '                            <div class="sub-text">Dividend Payment</div>
';
                $buffer .= $indent . '                            <div class="lead-text">';
                $value = $this->resolveValue($context->find('dividendPayment'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                        </li>
';
                $buffer .= $indent . '                        <li>
';
                $buffer .= $indent . '                            <div class="sub-text">Initial Investment</div>
';
                $buffer .= $indent . '                            <div class="lead-text">';
                $value = $this->resolveValue($context->find('currency'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&nbsp;';
                $value = $this->resolveValue($context->find('initialInvestment'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                        </li>
';
                $buffer .= $indent . '                    </ul>
';
                $buffer .= $indent . '                    <ul class="nk-iv-wg3-list">
';
                $buffer .= $indent . '                        <li>
';
                $buffer .= $indent . '                            <div class="sub-text">Commission Level</div>
';
                $buffer .= $indent . '                            <div class="lead-text" id="commission">
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </li>
';
                $buffer .= $indent . '                        <li>
';
                $buffer .= $indent . '                            <div class="sub-text">Account Verified</div>
';
                $buffer .= $indent . '                            <div class="lead-text">';
                $value = $this->resolveValue($context->find('accountVerified'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                        </li>
';
                $buffer .= $indent . '                        <li>
';
                $buffer .= $indent . '                            <div class="sub-text">Cointraderclient Debit Card</div>
';
                $buffer .= $indent . '                            <div class="lead-text">';
                $value = $this->resolveValue($context->find('debitcard'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                        </li>
';
                $buffer .= $indent . '                    </ul>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="nk-block-head">
';
                $buffer .= $indent . '            <div class="nk-block-head-content">
';
                $buffer .= $indent . '                <div class="nk-block-head-content">
';
                $buffer .= $indent . '                    <h5 class="nk-block-title">Trade History</h5>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="nk-block">
';
                $buffer .= $indent . '            <div class="card card-preview">
';
                $buffer .= $indent . '                <div class="card-inner">
';
                $buffer .= $indent . '                    <table class="datatable-init table">
';
                $buffer .= $indent . '                        <thead>
';
                $buffer .= $indent . '                            <tr>
';
                $buffer .= $indent . '                                <th style="width: 15%">Trade#</th>
';
                $buffer .= $indent . '                                <th style="width: 25%">Date</th>
';
                $buffer .= $indent . '                                <th style="width: 15%">Pair</th>
';
                $buffer .= $indent . '                                <th style="width: 15%">Long/Short</th>
';
                $buffer .= $indent . '                                <th style="width: 15%">P/L</th>
';
                $buffer .= $indent . '                                <th style="width: 15%"></th>
';
                $buffer .= $indent . '                            </tr>
';
                $buffer .= $indent . '                        </thead>
';
                $buffer .= $indent . '                        <tbody>
';
                // 'data' section
                $value = $context->find('data');
                $buffer .= $this->section641bf4ddbfcf5f70bf3db92588c4c601($context, $indent, $value);
                $buffer .= $indent . '                        </tbody>
';
                $buffer .= $indent . '                    </table>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="nk-block">
';
                $buffer .= $indent . '            <div class="card card-bordered">
';
                $buffer .= $indent . '                <div class="nk-refwg">
';
                $buffer .= $indent . '                    <div class="nk-refwg-invite card-inner">
';
                $buffer .= $indent . '                        <div class="nk-refwg-head g-3">
';
                $buffer .= $indent . '                            <div class="nk-refwg-title">
';
                $buffer .= $indent . '                                <h5 class="title">Refer Us & Earn</h5>
';
                $buffer .= $indent . '                                <div class="title-sub">Use the link to invite your friends.</div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="nk-refwg-action">
';
                $buffer .= $indent . '                                <a href="javascript:;" class="btn btn-primary">Invite</a>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="nk-refwg-url">
';
                $buffer .= $indent . '                            <div class="form-control-wrap">
';
                $buffer .= $indent . '                                <div class="form-clip clipboard-init" data-clipboard-target="#refUrl" data-success="Copied" data-text="Copy Link"><em class="clipboard-icon icon ni ni-copy"></em> <span class="clipboard-text">Copy Link</span></div>
';
                $buffer .= $indent . '                                <div class="form-icon">
';
                $buffer .= $indent . '                                    <em class="icon ni ni-link-alt"></em>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <input type="text" class="form-control copy-text" id="refUrl" value="https://cointraderclient.com">
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="nk-refwg-stats card-inner bg-lighter">
';
                $buffer .= $indent . '                        <div class="nk-refwg-group g-3">
';
                $buffer .= $indent . '                            <div class="nk-refwg-name">
';
                $buffer .= $indent . '                                <h6 class="title">My Referrals <em class="icon ni ni-info" data-toggle="tooltip" data-placement="right" title="Referral Informations"></em></h6>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="nk-refwg-info g-3">
';
                $buffer .= $indent . '                                <div class="nk-refwg-sub">
';
                $buffer .= $indent . '                                    <div class="title">0</div>
';
                $buffer .= $indent . '                                    <div class="sub-text">Total Joined</div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="nk-refwg-sub">
';
                $buffer .= $indent . '                                    <div class="title">0</div>
';
                $buffer .= $indent . '                                    <div class="sub-text">Referral Earnings</div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="nk-refwg-more dropdown mt-n1 mr-n1">
';
                $buffer .= $indent . '                                <a href="#" class="btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
';
                $buffer .= $indent . '                                <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
';
                $buffer .= $indent . '                                    <ul class="link-list-plain sm">
';
                $buffer .= $indent . '                                        <li><a href="javascript:;">7 days</a></li>
';
                $buffer .= $indent . '                                        <li><a href="javascript:;">15 Days</a></li>
';
                $buffer .= $indent . '                                        <li><a href="javascript:;">30 Days</a></li>
';
                $buffer .= $indent . '                                    </ul>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="nk-refwg-ck">
';
                $buffer .= $indent . '                            <canvas class="chart-refer-stats" id="refBarChart"></canvas>
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
                $buffer .= $indent . '        <div class="nk-block">
';
                $buffer .= $indent . '            <div class="card card-bordered">
';
                $buffer .= $indent . '                <div class="card-inner card-inner-lg">
';
                $buffer .= $indent . '                    <div class="align-center flex-wrap flex-md-nowrap g-4">
';
                $buffer .= $indent . '                        <div class="nk-block-image w-120px flex-shrink-0">
';
                $buffer .= $indent . '                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 118">
';
                $buffer .= $indent . '                                <path d="M8.916,94.745C-.318,79.153-2.164,58.569,2.382,40.578,7.155,21.69,19.045,9.451,35.162,4.32,46.609.676,58.716.331,70.456,1.845,84.683,3.68,99.57,8.694,108.892,21.408c10.03,13.679,12.071,34.71,10.747,52.054-1.173,15.359-7.441,27.489-19.231,34.494-10.689,6.351-22.92,8.733-34.715,10.331-16.181,2.192-34.195-.336-47.6-12.281A47.243,47.243,0,0,1,8.916,94.745Z" transform="translate(0 -1)" fill="#f6faff" />
';
                $buffer .= $indent . '                                <rect x="18" y="32" width="84" height="50" rx="4" ry="4" fill="#fff" />
';
                $buffer .= $indent . '                                <rect x="26" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
';
                $buffer .= $indent . '                                <rect x="50" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
';
                $buffer .= $indent . '                                <rect x="74" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
';
                $buffer .= $indent . '                                <rect x="38" y="60" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
';
                $buffer .= $indent . '                                <rect x="62" y="60" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
';
                $buffer .= $indent . '                                <path d="M98,32H22a5.006,5.006,0,0,0-5,5V79a5.006,5.006,0,0,0,5,5H52v8H45a2,2,0,0,0-2,2v4a2,2,0,0,0,2,2H73a2,2,0,0,0,2-2V94a2,2,0,0,0-2-2H66V84H98a5.006,5.006,0,0,0,5-5V37A5.006,5.006,0,0,0,98,32ZM73,94v4H45V94Zm-9-2H54V84H64Zm37-13a3,3,0,0,1-3,3H22a3,3,0,0,1-3-3V37a3,3,0,0,1,3-3H98a3,3,0,0,1,3,3Z" transform="translate(0 -1)" fill="#798bff" />
';
                $buffer .= $indent . '                                <path d="M61.444,41H40.111L33,48.143V19.7A3.632,3.632,0,0,1,36.556,16H61.444A3.632,3.632,0,0,1,65,19.7V37.3A3.632,3.632,0,0,1,61.444,41Z" transform="translate(0 -1)" fill="#6576ff" />
';
                $buffer .= $indent . '                                <path d="M61.444,41H40.111L33,48.143V19.7A3.632,3.632,0,0,1,36.556,16H61.444A3.632,3.632,0,0,1,65,19.7V37.3A3.632,3.632,0,0,1,61.444,41Z" transform="translate(0 -1)" fill="none" stroke="#6576ff" stroke-miterlimit="10" stroke-width="2" />
';
                $buffer .= $indent . '                                <line x1="40" y1="22" x2="57" y2="22" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
';
                $buffer .= $indent . '                                <line x1="40" y1="27" x2="57" y2="27" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
';
                $buffer .= $indent . '                                <line x1="40" y1="32" x2="50" y2="32" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
';
                $buffer .= $indent . '                                <line x1="30.5" y1="87.5" x2="30.5" y2="91.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
';
                $buffer .= $indent . '                                <line x1="28.5" y1="89.5" x2="32.5" y2="89.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
';
                $buffer .= $indent . '                                <line x1="79.5" y1="22.5" x2="79.5" y2="26.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
';
                $buffer .= $indent . '                                <line x1="77.5" y1="24.5" x2="81.5" y2="24.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
';
                $buffer .= $indent . '                                <circle cx="90.5" cy="97.5" r="3" fill="none" stroke="#9cabff" stroke-miterlimit="10" />
';
                $buffer .= $indent . '                                <circle cx="24" cy="23" r="2.5" fill="none" stroke="#9cabff" stroke-miterlimit="10" />
';
                $buffer .= $indent . '                            </svg>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="nk-block-content">
';
                $buffer .= $indent . '                            <div class="nk-block-content-head px-lg-4">
';
                $buffer .= $indent . '                                <h5>We’re here to help you!</h5>
';
                $buffer .= $indent . '                                <p class="text-soft">Ask a question or file a support ticket, manage request, report an issues. Our team support team will get back to you by email.</p>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="nk-block-content flex-shrink-0">
';
                $buffer .= $indent . '                            <a href="/messages" class="btn btn-lg btn-outline-primary">Get Support Now</a>
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
                $buffer .= $indent . '    $(\'.datatable-init thead tr th:nth-Child(2)\').click();
';
                $buffer .= $indent . '    var commission = \'\';
';
                $buffer .= $indent . '    var accountType = "';
                $value = $this->resolveValue($context->find('accountType'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '";
';
                $buffer .= $indent . '    switch(accountType) {
';
                $buffer .= $indent . '        case \'60 Day Trial\': commission = \'0%\'; break;
';
                $buffer .= $indent . '        case \'Macro\': commission = \'0%\'; break;
';
                $buffer .= $indent . '        case \'Advanced\': commission = \'15%\'; break;
';
                $buffer .= $indent . '        case \'Digital\': commission = \'15%\'; break;
';
                $buffer .= $indent . '        case \'Prime\': commission = \'10%\'; break;
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '    $(\'#commission\').html(commission);
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '});
';
                $buffer .= $indent . '
';
                $buffer .= $indent . 'function getTradeHistory(id) {
';
                $buffer .= $indent . '    $.ajax({
';
                $buffer .= $indent . '        url : "/getModalTradeHistory",
';
                $buffer .= $indent . '        type: \'POST\',
';
                $buffer .= $indent . '        data: {\'id\':id},
';
                $buffer .= $indent . '        success:function(data)
';
                $buffer .= $indent . '        {
';
                $buffer .= $indent . '            if(data){ 
';
                $buffer .= $indent . '                $(\'#modalTradeHistory .modal-body\').html(data); 
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '}
';
                $buffer .= $indent . '</script>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
