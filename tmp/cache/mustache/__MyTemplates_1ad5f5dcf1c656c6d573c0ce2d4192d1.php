<?php

class __MyTemplates_1ad5f5dcf1c656c6d573c0ce2d4192d1 extends Mustache_Template
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
        $buffer .= $this->section2950fdef68ce5a8cd8924803d365fd69($context, $indent, $value);

        return $buffer;
    }

    private function section3d59ee9cd90a74cc0e0e04b8caea7a17(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                                                    <input class="buysell-pm-control" type="radio" name="bs-method" data="debitCard" id="debitCard"/>
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
                
                $buffer .= $indent . '                                                    <input class="buysell-pm-control" type="radio" name="bs-method" data="debitCard" id="debitCard"/>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2950fdef68ce5a8cd8924803d365fd69(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
<div class="nk-content ">
<style>
    .form-dropdown .select2-selection {
        border: none !important;
    }
</style>
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body row">
                <div class="buysell wide-xs m-auto">
                    <div class="buysell-nav text-center">
                        <ul class="nk-nav nav nav-tabs nav-tabs-s2">
                            <li class="nav-item">
                                <a href="#" class="btn btn-lg btn-info m-2" id="btnDeposit"><span class="pl-4 pr-4">Deposit</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="btn btn-lg btn-primary m-2" id="btnWithdraw"><span class="pl-4 pr-4">Withdraw</span></a>
                            </li>
                        </ul>
                    </div>
                     <div class="card card-bordered">
                        <div class="card-inner">
                            <div id="depositDiv" class="buysell-block">
                                <form action="#" class="buysell-form">
                                    <div class="buysell-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label">Choose which account you want to top up</label>
                                        </div>
                                        <div class="dropdown buysell-cc-dropdown">
                                            <a href="#" class="buysell-cc-choosen">
                                                <div class="coin-item coin-btc">
                                                    <div class="coin-icon">
                                                        <em class="icon ni ni-user-alt"></em>
                                                    </div>
                                                    <div class="coin-info">
                                                        <span class="coin-name">{{accountType}}</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="buysell-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label">Payment Method</label>
                                        </div>
                                        <div class="form-pm-group">
                                            <ul class="buysell-pm-list depositMethod">
                                               <!-- <li class="buysell-pm-item">
                                                    <input class="buysell-pm-control" type="radio" name="bs-method" id="creditCard" disabled/>
                                                    <label class="buysell-pm-label" for="creditCard">
                                                        <span class="pm-name">Credit Card</span>
                                                        <span class="pm-icon"><em class="icon ni ni-cc-alt2"></em></span>
                                                    </label>
                                                </li>-->
                                               <!-- <li class="buysell-pm-item">
                                                    <input class="buysell-pm-control" type="radio" name="bs-method" id="bankTransfer" disabled/>
                                                    <label class="buysell-pm-label" for="bankTransfer">
                                                        <span class="pm-name">Bank Transfer</span>
                                                        <span class="pm-icon"><em class="icon ni ni-building"></em></span>
                                                    </label>
                                                </li>-->
                                                <li class="buysell-pm-item">
                                                    <input class="buysell-pm-control" type="radio" name="bs-method" id="cryptoCurrency" />
                                                    <label class="buysell-pm-label" for="cryptoCurrency">
                                                        <span class="pm-name">Cryptocurrency</span>
                                                        <span class="pm-icon"><em class="icon ni ni-bitcoin"></em></span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="buysell-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="depositAmount">Deposit equivalent in fiat</label>
                                        </div>
                                        <div class="form-control-group">
                                            <input type="text" class="form-control form-control-lg form-control-number" id="depositAmount" autocomplete="off" name="depositAmount" min="250" placeholder="Min Amount is 250">
                                            <div class="form-dropdown">
                                                <select class="form-select" id="depositCurrency" data-ui="lg">
                                                    <option value="USD">USD</option>
                                                    <!--<option value="EUR">EUR</option>
                                                    <option value="GBP">GBP</option>-->
                                            
                                               
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="buysell-field form-action">
                                        <a href="#" id="continueDeposit" class="btn btn-lg btn-block btn-info" data-toggle="modal" data-target="#depositModal">Continue with Deposit</a>
                                    </div>
                                </form>
                            </div>
                            <div id="withdrawDiv" class="buysell-block">
                                <form action="#" class="buysell-form">
                                    <div class="buysell-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label">Choose which account to withdraw from</label>
                                        </div>
                                        <div class="dropdown buysell-cc-dropdown">
                                            <a href="#" class="buysell-cc-choosen">
                                                <div class="coin-item coin-btc">
                                                    <div class="coin-icon">
                                                        <em class="icon ni ni-user-alt"></em>
                                                    </div>
                                                    <div class="coin-info">
                                                        <span class="coin-name">{{accountType}}</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="buysell-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label">Payment Method</label>
                                        </div>
                                        <div class="form-pm-group">
                                            <ul class="buysell-pm-list withdrawMethod">
                                                <li class="buysell-pm-item">
                                                    {{#allowedDebitCard}}
                                                    <input class="buysell-pm-control" type="radio" name="bs-method" data="debitCard" id="debitCard"/>
                                                    {{/allowedDebitCard}}
                                                    {{^allowedDebitCard}}
                                                    <input class="buysell-pm-control" type="radio" name="bs-method" data="debitCard" id="debitCard" disabled/>
                                                    {{/allowedDebitCard}}
                                                    <label class="buysell-pm-label" for="debitCard">
                                                        <span class="pm-name">Cointraderclient Debit Card</span>
                                                        <span class="pm-icon"><em class="icon ni ni-cc-alt2"></em></span>
                                                    </label>
                                                </li>
                                                <li class="buysell-pm-item">
                                                    <input class="buysell-pm-control" type="radio" name="bs-method" data="bankTransfer" id="bankTransfer1" checked/>
                                                    <label class="buysell-pm-label" for="bankTransfer1">
                                                        <span class="pm-name">Bank Transfer</span>
                                                        <span class="pm-icon"><em class="icon ni ni-building"></em></span>
                                                    </label>
                                                </li>
                                                <li class="buysell-pm-item">
                                                    <input class="buysell-pm-control" type="radio" name="bs-method" data="cryptoCurrency" id="cryptoCurrency1" />
                                                    <label class="buysell-pm-label" for="cryptoCurrency1">
                                                        <span class="pm-name">Cryptocurrency</span>
                                                        <span class="pm-icon"><em class="icon ni ni-bitcoin"></em></span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="buysell-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="withdrawAmount">Withdrawal Amount</label>
                                        </div>
                                        <div class="form-control-group">
                                            <input type="text" class="form-control form-control-lg form-control-number" id="withdrawAmount" name="withdrawAmount" autocomplete="off" min="100" placeholder="Min Amount is 100">
                                            <div class="form-dropdown">
                                                <select class="form-select" id="withdrawCurrency" data-ui="lg">
                                                    <option value="USD">USD</option>
                                                    <!--<option value="EUR">EUR</option>
                                                    <option value="GBP">GBP</option>-->
                                                 
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="buysell-field form-action">
                                        <a href="#" id="continueWithdraw" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#withdrawModal">Confirm Withdraw</a>
                                    </div>
                                </form>
                            </div>  
                        </div>
                    </div>                                
                </div>                                    
            </div>
            <div class="nk-block" style="margin-top: 100px;">
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
            <div class="nk-block">
                <div class="card card-bordered">
                    <div class="nk-refwg">
                        <div class="nk-refwg-invite card-inner">
                            <div class="nk-refwg-head g-3">
                                <div class="nk-refwg-title">
                                    <h5 class="title">Refer Us & Earn</h5>
                                    <div class="title-sub">Use the link below to invite your friends.</div>
                                </div>
                                <div class="nk-refwg-action">
                                    <a href="#" class="btn btn-primary">Invite Now</a>
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
                                        <div class="sub-text">Amount Earned</div>
                                    </div>
                                </div>
                                <div class="nk-refwg-more dropdown mt-n1 mr-n1">
                                    <a href="#" class="btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                                        <ul class="link-list-plain sm">
                                            <li><a href="#">7 days</a></li>
                                            <li><a href="#">15 Days</a></li>
                                            <li><a href="#">30 Days</a></li>
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
        </div>
    </div>
</div>
<script>
$(document).ready(function() {

    $(\'#btnDeposit\').click(function() {
        $(\'#depositDiv\').show();
        $(\'#withdrawDiv\').hide();

        $(\'#walletQRCodeImage\').attr(\'src\', \'/uploads/documents/BTC-QR-CODE.png\');
        $(\'.walletAddressTitle\').text(\'BTC Deposit Address\');
        $(\'#walletAddress\').text(\'bc1qqqcfjvfxz5le7arrznw80ukxdt9kz9rx67s8ep\');
    });

    $(\'#btnDeposit\').click();

    $(\'#btnWithdraw\').click(function() {
        $(\'#depositDiv\').hide();
        $(\'#withdrawDiv\').show();

        $(\'#walletQRCodeImage\').attr(\'src\', \'/uploads/documents/BTC-QR-CODE.png\');
        $(\'.walletAddressTitle\').text(\'BTC Deposit Address\');
        $(\'#walletAddress\').text(\'bc1qqqcfjvfxz5le7arrznw80ukxdt9kz9rx67s8ep\');
    });

    $(\'#downloadPayment\').show();
    $(\'#viewWalletAddress\').hide();

    $(\'#bankTransfer\').on(\'click\', function() {
        $(\'#depositMethod\').attr(\'data\', \'bankTransfer\');
        $(\'#depositMethod\').html(\'Bank Transfer\');

        var currencyOption = `<option value="USD">USD</option>
                        <option value="EUR">EUR</option>
                        <option value="GBP">GBP</option>
                        <option value="CHF">CHF</option>
                        <option value="JPY">JPY</option>
                        <option value="AUD">AUD</option>`;
        $(\'#depositCurrency\').html(currencyOption);
        $(\'#depositCurrency1\').text(\'USD\');

        $(\'#downloadPayment\').show();
        $(\'#viewWalletAddress\').hide();
    });

    $(\'#cryptoCurrency\').on(\'click\', function() {
        $(\'#depositMethod\').attr(\'data\', \'cryptoCurrency\');
        $(\'#depositMethod\').html(\'Cryptocurrency\');

        var currencyOption = `<option value="USD">USD</option>
                        <option value="EUR">EUR</option>
                        <option value="GBP">GBP</option>
                  
                        <option value="BTC">BTC</option>
                        <option value="ETH">ETH</option>
                        <option value="LTC">LTC</option>
                        <option value="XRP">XRP</option>
                        <option value="LINK">LINK</option>
                        <option value="BCH">BCH</option>`;
        $(\'#depositCurrency\').html(currencyOption);
        $(\'#depositCurrency1\').text(\'BTC\');

        $(\'#walletQRCodeImage\').attr(\'src\', \'/uploads/documents/BTC-QR-CODE.png\');
        $(\'.walletAddressTitle\').text(\'BTC wallet address\');
        $(\'#walletAddress\').text(\'bc1qqqcfjvfxz5le7arrznw80ukxdt9kz9rx67s8ep\');

        $(\'#downloadPayment\').hide();
        $(\'#viewWalletAddress\').show();
    });

    $(\'#depositAmount\').on(\'blur\', function(e) {
        $(\'#continueDeposit\').attr(\'data-target\', \'#depositModal\');
        var minDeposit = parseInt($(this).attr(\'min\'));
        var depositAmount = parseInt($(this).val().replace(\',\', \'\'));
        if (isNaN(depositAmount)) {
            $(this).val(minDeposit.toLocaleString(undefined,{ minimumFractionDigits: 0}));
            $(\'#depositAmount1\').text($(this).val());
        } else {
            if (minDeposit > depositAmount) {
                $(this).val(minDeposit.toLocaleString(undefined,{ minimumFractionDigits: 0}));
                $(\'#depositAmount1\').text($(this).val());
            } else {
                $(this).val(depositAmount.toLocaleString(undefined,{ minimumFractionDigits: 0}));
                $(\'#depositAmount1\').text($(this).val());
            }
        }
    });

    $(\'#depositCurrency\').on(\'change\', function() {
        $(\'#depositCurrency1\').text($(this).val());
        $(\'#downloadPayment\').attr(\'href\', \'/uploads/documents/Cointraderclient-\'+ $(this).val() +\'-Remittance.pdf\');

        var currency = $(this).val();
        var walletAddressTitle = currency +\' wallet address \';
        var walletAddress = \'\';
        switch(currency) {
            case \'BTC\':
                walletAddress = \'bc1qqqcfjvfxz5le7arrznw80ukxdt9kz9rx67s8ep\';
            break;

            case \'ETH\':
                walletAddress = \'0x8540F0D6655e52FB9d68e2640b1e80120c803CF5\';
            break;

            case \'LTC\':
                walletAddress = \'LNYWvmSC2716dZVwxteYDCQ7BTe42Gpd2b\';
            break;

            case \'BCH\':
                walletAddress = \'qqu03jun3cmcexnkl8spq0h7525a05zsq56zzrgp3m\';
            break;

            case \'LINK\':
                walletAddress = \'0x8540F0D6655e52FB9d68e2640b1e80120c803CF5\';
            break;

            case \'XRP\':
                walletAddress = \'rnRghBiA4MZ9c7crVnQoWspMcM8ZBnXgfQ\';
            break;
        }

        $(\'#walletQRCodeImage\').attr(\'src\', \'/uploads/documents/\'+ currency +\'-QR-CODE.png\');
        $(\'.walletAddressTitle\').text(walletAddressTitle);
        $(\'#walletAddress\').text(walletAddress);
    });

    $(\'#continueDeposit\').on(\'click\', function() {  
        if ($(\'#depositAmount\').val() == \'\') {
            $(this).attr(\'data-target\', \' \');
            $(\'#depositAmount\').focus();
        }
    });


    $(\'#debitCard\').on(\'click\', function() {
        $(\'#withdrawMethod\').attr(\'data\', \'debitCard\');
        $(\'#withdrawMethod\').html(\'Cointraderclient Debit Card\');
        $(\'#withdrawCurrency1\').val(\'USD\');

        var currencyOption = `<option value="USD">USD</option>
                        <option value="EUR">EUR</option>
                        <option value="GBP">GBP</option>
                        <option value="CHF">CHF</option>
                        <option value="JPY">JPY</option>
                        <option value="AUD">AUD</option>`;
        $(\'#withdrawCurrency\').html(currencyOption);
    });

    $(\'#bankTransfer1\').on(\'click\', function() {
        $(\'#withdrawMethod\').attr(\'data\', \'bankTransfer\');
        $(\'#withdrawMethod\').html(\'Bank Transfer\');
        $(\'#withdrawCurrency1\').val(\'USD\');

        var currencyOption = `<option value="USD">USD</option>
                        <option value="EUR">EUR</option>
                        <option value="GBP">GBP</option>
                        <option value="CHF">CHF</option>
                        <option value="JPY">JPY</option>
                        <option value="AUD">AUD</option>`;
        $(\'#withdrawCurrency\').html(currencyOption);
    });

    $(\'#cryptoCurrency1\').on(\'click\', function() {
        $(\'#withdrawMethod\').attr(\'data\', \'cryptoCurrency\');
        $(\'#withdrawMethod\').html(\'Cryptocurrency\');
        $(\'#withdrawCurrency1\').val(\'BTC\');

        var currencyOption = `<option value="BTC">BTC</option>
                        <option value="ETH">ETH</option>
                        <option value="LTC">LTC</option>
                        <option value="XRP">XRP</option>
                        <option value="LINK">LINK</option>
                        <option value="BCH">BCH</option>`;
        $(\'#withdrawCurrency\').html(currencyOption);
    });

    $(\'#withdrawAmount\').on(\'blur\', function(e) {      
        $(\'#continueWithdraw\').attr(\'data-target\', \'#withdrawModal\');
        var minWithdraw = parseInt($(this).attr(\'min\'));
        var withdrawAmount = parseInt($(this).val().replace(\',\', \'\'));
        if (isNaN(withdrawAmount)) {
            $(this).val(minWithdraw.toLocaleString(undefined,{ minimumFractionDigits: 0}));
            $(\'#withdrawAmount1\').text($(this).val());
        } else {
            if (minWithdraw > withdrawAmount) {
                $(this).val(minWithdraw.toLocaleString(undefined,{ minimumFractionDigits: 0}));
                $(\'#withdrawAmount1\').text($(this).val());
            } else {
                $(this).val(withdrawAmount.toLocaleString(undefined,{ minimumFractionDigits: 0}));
                $(\'#withdrawAmount1\').text($(this).val());
            }
        }
    });

    $(\'#withdrawCurrency\').on(\'change\', function() {
        $(\'#withdrawCurrency1\').val($(this).val());
    });

    $(\'#continueWithdraw\').on(\'click\', function() {
        
        if ($(\'#withdrawAmount\').val() == \'\') {
            $(this).attr(\'data-target\', \' \');
            $(\'#withdrawAmount\').focus();
        }
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
                $buffer .= $indent . '<style>
';
                $buffer .= $indent . '    .form-dropdown .select2-selection {
';
                $buffer .= $indent . '        border: none !important;
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '</style>
';
                $buffer .= $indent . '    <div class="container-fluid">
';
                $buffer .= $indent . '        <div class="nk-content-inner">
';
                $buffer .= $indent . '            <div class="nk-content-body row">
';
                $buffer .= $indent . '                <div class="buysell wide-xs m-auto">
';
                $buffer .= $indent . '                    <div class="buysell-nav text-center">
';
                $buffer .= $indent . '                        <ul class="nk-nav nav nav-tabs nav-tabs-s2">
';
                $buffer .= $indent . '                            <li class="nav-item">
';
                $buffer .= $indent . '                                <a href="#" class="btn btn-lg btn-info m-2" id="btnDeposit"><span class="pl-4 pr-4">Deposit</span></a>
';
                $buffer .= $indent . '                            </li>
';
                $buffer .= $indent . '                            <li class="nav-item">
';
                $buffer .= $indent . '                                <a href="#" class="btn btn-lg btn-primary m-2" id="btnWithdraw"><span class="pl-4 pr-4">Withdraw</span></a>
';
                $buffer .= $indent . '                            </li>
';
                $buffer .= $indent . '                        </ul>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                     <div class="card card-bordered">
';
                $buffer .= $indent . '                        <div class="card-inner">
';
                $buffer .= $indent . '                            <div id="depositDiv" class="buysell-block">
';
                $buffer .= $indent . '                                <form action="#" class="buysell-form">
';
                $buffer .= $indent . '                                    <div class="buysell-field form-group">
';
                $buffer .= $indent . '                                        <div class="form-label-group">
';
                $buffer .= $indent . '                                            <label class="form-label">Choose which account you want to top up</label>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="dropdown buysell-cc-dropdown">
';
                $buffer .= $indent . '                                            <a href="#" class="buysell-cc-choosen">
';
                $buffer .= $indent . '                                                <div class="coin-item coin-btc">
';
                $buffer .= $indent . '                                                    <div class="coin-icon">
';
                $buffer .= $indent . '                                                        <em class="icon ni ni-user-alt"></em>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="coin-info">
';
                $buffer .= $indent . '                                                        <span class="coin-name">';
                $value = $this->resolveValue($context->find('accountType'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </a>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="buysell-field form-group">
';
                $buffer .= $indent . '                                        <div class="form-label-group">
';
                $buffer .= $indent . '                                            <label class="form-label">Payment Method</label>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="form-pm-group">
';
                $buffer .= $indent . '                                            <ul class="buysell-pm-list depositMethod">
';
                $buffer .= $indent . '                                               <!-- <li class="buysell-pm-item">
';
                $buffer .= $indent . '                                                    <input class="buysell-pm-control" type="radio" name="bs-method" id="creditCard" disabled/>
';
                $buffer .= $indent . '                                                    <label class="buysell-pm-label" for="creditCard">
';
                $buffer .= $indent . '                                                        <span class="pm-name">Credit Card</span>
';
                $buffer .= $indent . '                                                        <span class="pm-icon"><em class="icon ni ni-cc-alt2"></em></span>
';
                $buffer .= $indent . '                                                    </label>
';
                $buffer .= $indent . '                                                </li>-->
';
                $buffer .= $indent . '                                               <!-- <li class="buysell-pm-item">
';
                $buffer .= $indent . '                                                    <input class="buysell-pm-control" type="radio" name="bs-method" id="bankTransfer" disabled/>
';
                $buffer .= $indent . '                                                    <label class="buysell-pm-label" for="bankTransfer">
';
                $buffer .= $indent . '                                                        <span class="pm-name">Bank Transfer</span>
';
                $buffer .= $indent . '                                                        <span class="pm-icon"><em class="icon ni ni-building"></em></span>
';
                $buffer .= $indent . '                                                    </label>
';
                $buffer .= $indent . '                                                </li>-->
';
                $buffer .= $indent . '                                                <li class="buysell-pm-item">
';
                $buffer .= $indent . '                                                    <input class="buysell-pm-control" type="radio" name="bs-method" id="cryptoCurrency" />
';
                $buffer .= $indent . '                                                    <label class="buysell-pm-label" for="cryptoCurrency">
';
                $buffer .= $indent . '                                                        <span class="pm-name">Cryptocurrency</span>
';
                $buffer .= $indent . '                                                        <span class="pm-icon"><em class="icon ni ni-bitcoin"></em></span>
';
                $buffer .= $indent . '                                                    </label>
';
                $buffer .= $indent . '                                                </li>
';
                $buffer .= $indent . '                                            </ul>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="buysell-field form-group">
';
                $buffer .= $indent . '                                        <div class="form-label-group">
';
                $buffer .= $indent . '                                            <label class="form-label" for="depositAmount">Deposit equivalent in fiat</label>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="form-control-group">
';
                $buffer .= $indent . '                                            <input type="text" class="form-control form-control-lg form-control-number" id="depositAmount" autocomplete="off" name="depositAmount" min="250" placeholder="Min Amount is 250">
';
                $buffer .= $indent . '                                            <div class="form-dropdown">
';
                $buffer .= $indent . '                                                <select class="form-select" id="depositCurrency" data-ui="lg">
';
                $buffer .= $indent . '                                                    <option value="USD">USD</option>
';
                $buffer .= $indent . '                                                    <!--<option value="EUR">EUR</option>
';
                $buffer .= $indent . '                                                    <option value="GBP">GBP</option>-->
';
                $buffer .= $indent . '                                            
';
                $buffer .= $indent . '                                               
';
                $buffer .= $indent . '                                                </select>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="buysell-field form-action">
';
                $buffer .= $indent . '                                        <a href="#" id="continueDeposit" class="btn btn-lg btn-block btn-info" data-toggle="modal" data-target="#depositModal">Continue with Deposit</a>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </form>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div id="withdrawDiv" class="buysell-block">
';
                $buffer .= $indent . '                                <form action="#" class="buysell-form">
';
                $buffer .= $indent . '                                    <div class="buysell-field form-group">
';
                $buffer .= $indent . '                                        <div class="form-label-group">
';
                $buffer .= $indent . '                                            <label class="form-label">Choose which account to withdraw from</label>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="dropdown buysell-cc-dropdown">
';
                $buffer .= $indent . '                                            <a href="#" class="buysell-cc-choosen">
';
                $buffer .= $indent . '                                                <div class="coin-item coin-btc">
';
                $buffer .= $indent . '                                                    <div class="coin-icon">
';
                $buffer .= $indent . '                                                        <em class="icon ni ni-user-alt"></em>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="coin-info">
';
                $buffer .= $indent . '                                                        <span class="coin-name">';
                $value = $this->resolveValue($context->find('accountType'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </a>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="buysell-field form-group">
';
                $buffer .= $indent . '                                        <div class="form-label-group">
';
                $buffer .= $indent . '                                            <label class="form-label">Payment Method</label>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="form-pm-group">
';
                $buffer .= $indent . '                                            <ul class="buysell-pm-list withdrawMethod">
';
                $buffer .= $indent . '                                                <li class="buysell-pm-item">
';
                // 'allowedDebitCard' section
                $value = $context->find('allowedDebitCard');
                $buffer .= $this->section3d59ee9cd90a74cc0e0e04b8caea7a17($context, $indent, $value);
                // 'allowedDebitCard' inverted section
                $value = $context->find('allowedDebitCard');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                                    <input class="buysell-pm-control" type="radio" name="bs-method" data="debitCard" id="debitCard" disabled/>
';
                }
                $buffer .= $indent . '                                                    <label class="buysell-pm-label" for="debitCard">
';
                $buffer .= $indent . '                                                        <span class="pm-name">Cointraderclient Debit Card</span>
';
                $buffer .= $indent . '                                                        <span class="pm-icon"><em class="icon ni ni-cc-alt2"></em></span>
';
                $buffer .= $indent . '                                                    </label>
';
                $buffer .= $indent . '                                                </li>
';
                $buffer .= $indent . '                                                <li class="buysell-pm-item">
';
                $buffer .= $indent . '                                                    <input class="buysell-pm-control" type="radio" name="bs-method" data="bankTransfer" id="bankTransfer1" checked/>
';
                $buffer .= $indent . '                                                    <label class="buysell-pm-label" for="bankTransfer1">
';
                $buffer .= $indent . '                                                        <span class="pm-name">Bank Transfer</span>
';
                $buffer .= $indent . '                                                        <span class="pm-icon"><em class="icon ni ni-building"></em></span>
';
                $buffer .= $indent . '                                                    </label>
';
                $buffer .= $indent . '                                                </li>
';
                $buffer .= $indent . '                                                <li class="buysell-pm-item">
';
                $buffer .= $indent . '                                                    <input class="buysell-pm-control" type="radio" name="bs-method" data="cryptoCurrency" id="cryptoCurrency1" />
';
                $buffer .= $indent . '                                                    <label class="buysell-pm-label" for="cryptoCurrency1">
';
                $buffer .= $indent . '                                                        <span class="pm-name">Cryptocurrency</span>
';
                $buffer .= $indent . '                                                        <span class="pm-icon"><em class="icon ni ni-bitcoin"></em></span>
';
                $buffer .= $indent . '                                                    </label>
';
                $buffer .= $indent . '                                                </li>
';
                $buffer .= $indent . '                                            </ul>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="buysell-field form-group">
';
                $buffer .= $indent . '                                        <div class="form-label-group">
';
                $buffer .= $indent . '                                            <label class="form-label" for="withdrawAmount">Withdrawal Amount</label>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="form-control-group">
';
                $buffer .= $indent . '                                            <input type="text" class="form-control form-control-lg form-control-number" id="withdrawAmount" name="withdrawAmount" autocomplete="off" min="100" placeholder="Min Amount is 100">
';
                $buffer .= $indent . '                                            <div class="form-dropdown">
';
                $buffer .= $indent . '                                                <select class="form-select" id="withdrawCurrency" data-ui="lg">
';
                $buffer .= $indent . '                                                    <option value="USD">USD</option>
';
                $buffer .= $indent . '                                                    <!--<option value="EUR">EUR</option>
';
                $buffer .= $indent . '                                                    <option value="GBP">GBP</option>-->
';
                $buffer .= $indent . '                                                 
';
                $buffer .= $indent . '                                                </select>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="buysell-field form-action">
';
                $buffer .= $indent . '                                        <a href="#" id="continueWithdraw" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#withdrawModal">Confirm Withdraw</a>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </form>
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
                $buffer .= $indent . '            <div class="nk-block" style="margin-top: 100px;">
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
                $buffer .= $indent . '            <div class="nk-block">
';
                $buffer .= $indent . '                <div class="card card-bordered">
';
                $buffer .= $indent . '                    <div class="nk-refwg">
';
                $buffer .= $indent . '                        <div class="nk-refwg-invite card-inner">
';
                $buffer .= $indent . '                            <div class="nk-refwg-head g-3">
';
                $buffer .= $indent . '                                <div class="nk-refwg-title">
';
                $buffer .= $indent . '                                    <h5 class="title">Refer Us & Earn</h5>
';
                $buffer .= $indent . '                                    <div class="title-sub">Use the link below to invite your friends.</div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="nk-refwg-action">
';
                $buffer .= $indent . '                                    <a href="#" class="btn btn-primary">Invite Now</a>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="nk-refwg-url">
';
                $buffer .= $indent . '                                <div class="form-control-wrap">
';
                $buffer .= $indent . '                                    <div class="form-clip clipboard-init" data-clipboard-target="#refUrl" data-success="Copied" data-text="Copy Link"><em class="clipboard-icon icon ni ni-copy"></em> <span class="clipboard-text">Copy Link</span></div>
';
                $buffer .= $indent . '                                    <div class="form-icon">
';
                $buffer .= $indent . '                                        <em class="icon ni ni-link-alt"></em>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <input type="text" class="form-control copy-text" id="refUrl" value="https://cointraderclient.com">
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="nk-refwg-stats card-inner bg-lighter">
';
                $buffer .= $indent . '                            <div class="nk-refwg-group g-3">
';
                $buffer .= $indent . '                                <div class="nk-refwg-name">
';
                $buffer .= $indent . '                                    <h6 class="title">My Referrals <em class="icon ni ni-info" data-toggle="tooltip" data-placement="right" title="Referral Informations"></em></h6>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="nk-refwg-info g-3">
';
                $buffer .= $indent . '                                    <div class="nk-refwg-sub">
';
                $buffer .= $indent . '                                        <div class="title">0</div>
';
                $buffer .= $indent . '                                        <div class="sub-text">Total Joined</div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="nk-refwg-sub">
';
                $buffer .= $indent . '                                        <div class="title">0</div>
';
                $buffer .= $indent . '                                        <div class="sub-text">Amount Earned</div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="nk-refwg-more dropdown mt-n1 mr-n1">
';
                $buffer .= $indent . '                                    <a href="#" class="btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
';
                $buffer .= $indent . '                                    <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
';
                $buffer .= $indent . '                                        <ul class="link-list-plain sm">
';
                $buffer .= $indent . '                                            <li><a href="#">7 days</a></li>
';
                $buffer .= $indent . '                                            <li><a href="#">15 Days</a></li>
';
                $buffer .= $indent . '                                            <li><a href="#">30 Days</a></li>
';
                $buffer .= $indent . '                                        </ul>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="nk-refwg-ck">
';
                $buffer .= $indent . '                                <canvas class="chart-refer-stats" id="refBarChart"></canvas>
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
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#btnDeposit\').click(function() {
';
                $buffer .= $indent . '        $(\'#depositDiv\').show();
';
                $buffer .= $indent . '        $(\'#withdrawDiv\').hide();
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        $(\'#walletQRCodeImage\').attr(\'src\', \'/uploads/documents/BTC-QR-CODE.png\');
';
                $buffer .= $indent . '        $(\'.walletAddressTitle\').text(\'BTC Deposit Address\');
';
                $buffer .= $indent . '        $(\'#walletAddress\').text(\'bc1qqqcfjvfxz5le7arrznw80ukxdt9kz9rx67s8ep\');
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#btnDeposit\').click();
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#btnWithdraw\').click(function() {
';
                $buffer .= $indent . '        $(\'#depositDiv\').hide();
';
                $buffer .= $indent . '        $(\'#withdrawDiv\').show();
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        $(\'#walletQRCodeImage\').attr(\'src\', \'/uploads/documents/BTC-QR-CODE.png\');
';
                $buffer .= $indent . '        $(\'.walletAddressTitle\').text(\'BTC Deposit Address\');
';
                $buffer .= $indent . '        $(\'#walletAddress\').text(\'bc1qqqcfjvfxz5le7arrznw80ukxdt9kz9rx67s8ep\');
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#downloadPayment\').show();
';
                $buffer .= $indent . '    $(\'#viewWalletAddress\').hide();
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#bankTransfer\').on(\'click\', function() {
';
                $buffer .= $indent . '        $(\'#depositMethod\').attr(\'data\', \'bankTransfer\');
';
                $buffer .= $indent . '        $(\'#depositMethod\').html(\'Bank Transfer\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        var currencyOption = `<option value="USD">USD</option>
';
                $buffer .= $indent . '                        <option value="EUR">EUR</option>
';
                $buffer .= $indent . '                        <option value="GBP">GBP</option>
';
                $buffer .= $indent . '                        <option value="CHF">CHF</option>
';
                $buffer .= $indent . '                        <option value="JPY">JPY</option>
';
                $buffer .= $indent . '                        <option value="AUD">AUD</option>`;
';
                $buffer .= $indent . '        $(\'#depositCurrency\').html(currencyOption);
';
                $buffer .= $indent . '        $(\'#depositCurrency1\').text(\'USD\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        $(\'#downloadPayment\').show();
';
                $buffer .= $indent . '        $(\'#viewWalletAddress\').hide();
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#cryptoCurrency\').on(\'click\', function() {
';
                $buffer .= $indent . '        $(\'#depositMethod\').attr(\'data\', \'cryptoCurrency\');
';
                $buffer .= $indent . '        $(\'#depositMethod\').html(\'Cryptocurrency\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        var currencyOption = `<option value="USD">USD</option>
';
                $buffer .= $indent . '                        <option value="EUR">EUR</option>
';
                $buffer .= $indent . '                        <option value="GBP">GBP</option>
';
                $buffer .= $indent . '                  
';
                $buffer .= $indent . '                        <option value="BTC">BTC</option>
';
                $buffer .= $indent . '                        <option value="ETH">ETH</option>
';
                $buffer .= $indent . '                        <option value="LTC">LTC</option>
';
                $buffer .= $indent . '                        <option value="XRP">XRP</option>
';
                $buffer .= $indent . '                        <option value="LINK">LINK</option>
';
                $buffer .= $indent . '                        <option value="BCH">BCH</option>`;
';
                $buffer .= $indent . '        $(\'#depositCurrency\').html(currencyOption);
';
                $buffer .= $indent . '        $(\'#depositCurrency1\').text(\'BTC\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        $(\'#walletQRCodeImage\').attr(\'src\', \'/uploads/documents/BTC-QR-CODE.png\');
';
                $buffer .= $indent . '        $(\'.walletAddressTitle\').text(\'BTC wallet address\');
';
                $buffer .= $indent . '        $(\'#walletAddress\').text(\'bc1qqqcfjvfxz5le7arrznw80ukxdt9kz9rx67s8ep\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        $(\'#downloadPayment\').hide();
';
                $buffer .= $indent . '        $(\'#viewWalletAddress\').show();
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#depositAmount\').on(\'blur\', function(e) {
';
                $buffer .= $indent . '        $(\'#continueDeposit\').attr(\'data-target\', \'#depositModal\');
';
                $buffer .= $indent . '        var minDeposit = parseInt($(this).attr(\'min\'));
';
                $buffer .= $indent . '        var depositAmount = parseInt($(this).val().replace(\',\', \'\'));
';
                $buffer .= $indent . '        if (isNaN(depositAmount)) {
';
                $buffer .= $indent . '            $(this).val(minDeposit.toLocaleString(undefined,{ minimumFractionDigits: 0}));
';
                $buffer .= $indent . '            $(\'#depositAmount1\').text($(this).val());
';
                $buffer .= $indent . '        } else {
';
                $buffer .= $indent . '            if (minDeposit > depositAmount) {
';
                $buffer .= $indent . '                $(this).val(minDeposit.toLocaleString(undefined,{ minimumFractionDigits: 0}));
';
                $buffer .= $indent . '                $(\'#depositAmount1\').text($(this).val());
';
                $buffer .= $indent . '            } else {
';
                $buffer .= $indent . '                $(this).val(depositAmount.toLocaleString(undefined,{ minimumFractionDigits: 0}));
';
                $buffer .= $indent . '                $(\'#depositAmount1\').text($(this).val());
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#depositCurrency\').on(\'change\', function() {
';
                $buffer .= $indent . '        $(\'#depositCurrency1\').text($(this).val());
';
                $buffer .= $indent . '        $(\'#downloadPayment\').attr(\'href\', \'/uploads/documents/Cointraderclient-\'+ $(this).val() +\'-Remittance.pdf\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        var currency = $(this).val();
';
                $buffer .= $indent . '        var walletAddressTitle = currency +\' wallet address \';
';
                $buffer .= $indent . '        var walletAddress = \'\';
';
                $buffer .= $indent . '        switch(currency) {
';
                $buffer .= $indent . '            case \'BTC\':
';
                $buffer .= $indent . '                walletAddress = \'bc1qqqcfjvfxz5le7arrznw80ukxdt9kz9rx67s8ep\';
';
                $buffer .= $indent . '            break;
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            case \'ETH\':
';
                $buffer .= $indent . '                walletAddress = \'0x8540F0D6655e52FB9d68e2640b1e80120c803CF5\';
';
                $buffer .= $indent . '            break;
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            case \'LTC\':
';
                $buffer .= $indent . '                walletAddress = \'LNYWvmSC2716dZVwxteYDCQ7BTe42Gpd2b\';
';
                $buffer .= $indent . '            break;
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            case \'BCH\':
';
                $buffer .= $indent . '                walletAddress = \'qqu03jun3cmcexnkl8spq0h7525a05zsq56zzrgp3m\';
';
                $buffer .= $indent . '            break;
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            case \'LINK\':
';
                $buffer .= $indent . '                walletAddress = \'0x8540F0D6655e52FB9d68e2640b1e80120c803CF5\';
';
                $buffer .= $indent . '            break;
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            case \'XRP\':
';
                $buffer .= $indent . '                walletAddress = \'rnRghBiA4MZ9c7crVnQoWspMcM8ZBnXgfQ\';
';
                $buffer .= $indent . '            break;
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        $(\'#walletQRCodeImage\').attr(\'src\', \'/uploads/documents/\'+ currency +\'-QR-CODE.png\');
';
                $buffer .= $indent . '        $(\'.walletAddressTitle\').text(walletAddressTitle);
';
                $buffer .= $indent . '        $(\'#walletAddress\').text(walletAddress);
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#continueDeposit\').on(\'click\', function() {  
';
                $buffer .= $indent . '        if ($(\'#depositAmount\').val() == \'\') {
';
                $buffer .= $indent . '            $(this).attr(\'data-target\', \' \');
';
                $buffer .= $indent . '            $(\'#depositAmount\').focus();
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#debitCard\').on(\'click\', function() {
';
                $buffer .= $indent . '        $(\'#withdrawMethod\').attr(\'data\', \'debitCard\');
';
                $buffer .= $indent . '        $(\'#withdrawMethod\').html(\'Cointraderclient Debit Card\');
';
                $buffer .= $indent . '        $(\'#withdrawCurrency1\').val(\'USD\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        var currencyOption = `<option value="USD">USD</option>
';
                $buffer .= $indent . '                        <option value="EUR">EUR</option>
';
                $buffer .= $indent . '                        <option value="GBP">GBP</option>
';
                $buffer .= $indent . '                        <option value="CHF">CHF</option>
';
                $buffer .= $indent . '                        <option value="JPY">JPY</option>
';
                $buffer .= $indent . '                        <option value="AUD">AUD</option>`;
';
                $buffer .= $indent . '        $(\'#withdrawCurrency\').html(currencyOption);
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#bankTransfer1\').on(\'click\', function() {
';
                $buffer .= $indent . '        $(\'#withdrawMethod\').attr(\'data\', \'bankTransfer\');
';
                $buffer .= $indent . '        $(\'#withdrawMethod\').html(\'Bank Transfer\');
';
                $buffer .= $indent . '        $(\'#withdrawCurrency1\').val(\'USD\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        var currencyOption = `<option value="USD">USD</option>
';
                $buffer .= $indent . '                        <option value="EUR">EUR</option>
';
                $buffer .= $indent . '                        <option value="GBP">GBP</option>
';
                $buffer .= $indent . '                        <option value="CHF">CHF</option>
';
                $buffer .= $indent . '                        <option value="JPY">JPY</option>
';
                $buffer .= $indent . '                        <option value="AUD">AUD</option>`;
';
                $buffer .= $indent . '        $(\'#withdrawCurrency\').html(currencyOption);
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#cryptoCurrency1\').on(\'click\', function() {
';
                $buffer .= $indent . '        $(\'#withdrawMethod\').attr(\'data\', \'cryptoCurrency\');
';
                $buffer .= $indent . '        $(\'#withdrawMethod\').html(\'Cryptocurrency\');
';
                $buffer .= $indent . '        $(\'#withdrawCurrency1\').val(\'BTC\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        var currencyOption = `<option value="BTC">BTC</option>
';
                $buffer .= $indent . '                        <option value="ETH">ETH</option>
';
                $buffer .= $indent . '                        <option value="LTC">LTC</option>
';
                $buffer .= $indent . '                        <option value="XRP">XRP</option>
';
                $buffer .= $indent . '                        <option value="LINK">LINK</option>
';
                $buffer .= $indent . '                        <option value="BCH">BCH</option>`;
';
                $buffer .= $indent . '        $(\'#withdrawCurrency\').html(currencyOption);
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#withdrawAmount\').on(\'blur\', function(e) {      
';
                $buffer .= $indent . '        $(\'#continueWithdraw\').attr(\'data-target\', \'#withdrawModal\');
';
                $buffer .= $indent . '        var minWithdraw = parseInt($(this).attr(\'min\'));
';
                $buffer .= $indent . '        var withdrawAmount = parseInt($(this).val().replace(\',\', \'\'));
';
                $buffer .= $indent . '        if (isNaN(withdrawAmount)) {
';
                $buffer .= $indent . '            $(this).val(minWithdraw.toLocaleString(undefined,{ minimumFractionDigits: 0}));
';
                $buffer .= $indent . '            $(\'#withdrawAmount1\').text($(this).val());
';
                $buffer .= $indent . '        } else {
';
                $buffer .= $indent . '            if (minWithdraw > withdrawAmount) {
';
                $buffer .= $indent . '                $(this).val(minWithdraw.toLocaleString(undefined,{ minimumFractionDigits: 0}));
';
                $buffer .= $indent . '                $(\'#withdrawAmount1\').text($(this).val());
';
                $buffer .= $indent . '            } else {
';
                $buffer .= $indent . '                $(this).val(withdrawAmount.toLocaleString(undefined,{ minimumFractionDigits: 0}));
';
                $buffer .= $indent . '                $(\'#withdrawAmount1\').text($(this).val());
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#withdrawCurrency\').on(\'change\', function() {
';
                $buffer .= $indent . '        $(\'#withdrawCurrency1\').val($(this).val());
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#continueWithdraw\').on(\'click\', function() {
';
                $buffer .= $indent . '        
';
                $buffer .= $indent . '        if ($(\'#withdrawAmount\').val() == \'\') {
';
                $buffer .= $indent . '            $(this).attr(\'data-target\', \' \');
';
                $buffer .= $indent . '            $(\'#withdrawAmount\').focus();
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '</script>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
