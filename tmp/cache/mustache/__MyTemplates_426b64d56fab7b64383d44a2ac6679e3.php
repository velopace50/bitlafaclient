<?php

class __MyTemplates_426b64d56fab7b64383d44a2ac6679e3 extends Mustache_Template
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
        $buffer .= $this->sectionDc66b2fa1811f2d6cf05109338728d4f($context, $indent, $value);

        return $buffer;
    }

    private function sectionC3e165e74688d67002ef9a704095ea8b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                                        <div style="text-align:center; margin-top: 30px;">{{noWeekData}}</div>
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
                
                $buffer .= $indent . '                                        <div style="text-align:center; margin-top: 30px;">';
                $value = $this->resolveValue($context->find('noWeekData'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD1f18618d6a59212f193857fa7155203(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                                            <tr>
                                                <td>{{tradeNumber}}</td>
                                                <td>{{dateFormatted}}</td>
                                                <td>{{market}}</td>
                                                <td>{{tradeType}}</td>
                                                <td>{{accountCurrency}}{{profit}}</td>
                                                <td>
                                                    <a href="javascript:;" class="btn btn-primary" data-toggle="modal" data-target="#modalTradeHistory" onclick="getTradeHistory({{id}});">
                                                        <span class="pl-3 pr-3">View</span>
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
                
                $buffer .= $indent . '                                            <tr>
';
                $buffer .= $indent . '                                                <td>';
                $value = $this->resolveValue($context->find('tradeNumber'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                                                <td>';
                $value = $this->resolveValue($context->find('dateFormatted'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                                                <td>';
                $value = $this->resolveValue($context->find('market'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                                                <td>';
                $value = $this->resolveValue($context->find('tradeType'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                                                <td>';
                $value = $this->resolveValue($context->find('accountCurrency'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $value = $this->resolveValue($context->find('profit'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                                                <td>
';
                $buffer .= $indent . '                                                    <a href="javascript:;" class="btn btn-primary" data-toggle="modal" data-target="#modalTradeHistory" onclick="getTradeHistory(';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ');">
';
                $buffer .= $indent . '                                                        <span class="pl-3 pr-3">View</span>
';
                $buffer .= $indent . '                                                    </a>
';
                $buffer .= $indent . '                                                </td>
';
                $buffer .= $indent . '                                            </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC2e555cc6aa4e26f20ef631228b1842d(Mustache_Context $context, $indent, $value)
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
                                                <td>{{accountCurrency}}{{profit}}</td>
                                                <td>
                                                    <a href="javascript:;" class="btn btn-primary" data-toggle="modal" data-target="#modalTradeHistory" onclick="getTradeHistory({{id}});">
                                                        <span class="pl-3 pr-3">View</span>
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
                $buffer .= $this->sectionD1f18618d6a59212f193857fa7155203($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section90bbe9897578f4792290522071ae4658(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                                            <div style="text-align:center;">{{noChartTradeAllocation}}</div>
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
                
                $buffer .= $indent . '                                            <div style="text-align:center;">';
                $value = $this->resolveValue($context->find('noChartTradeAllocation'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDc66b2fa1811f2d6cf05109338728d4f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
<div class="nk-content ">
<style>
.nk-ecwg {
    border-bottom: 4px solid #668000;
}
.token_logo {
    position: absolute;
    top: -20px;
    left: -20px;
    width: 25px;
}
.card-token {
    max-width: 100%;
}
.card-token__item {
    display: flex;
    justify-content: space-between;
}
.card-token__item > span {
    font-size:16px;
}


</style>
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block">
                    <div class="row g-gs">
                        
                        <div class="col-xxl-12 col-sm-12">
                            <div class="alert alert-pro alert-primary">
                                <div class="alert-text">
                                    <div class="tradingview-widget-container">
                                        <div class="tradingview-widget-container__widget"></div>
                                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                                        {
                                        "symbols": [
                                        {
                                            "proName": "FOREXCOM:SPXUSD",
                                            "title": "S&P 500"
                                        },
                                        {
                                            "proName": "FOREXCOM:NSXUSD",
                                            "title": "Nasdaq 100"
                                        },
                                        {
                                            "proName": "FX_IDC:EURUSD",
                                            "title": "EUR/USD"
                                        },
                                        {
                                            "proName": "BITSTAMP:BTCUSD",
                                            "title": "BTC/USD"
                                        },
                                        {
                                            "proName": "BITSTAMP:ETHUSD",
                                            "title": "ETH/USD"
                                        }
                                        
                                        ],
                                        "showSymbolLogo": true,
                                        "colorTheme": "light",
                                        "isTransparent": true,
                                        "displayMode": "adaptive",
                                        "locale": "en"
                                    }
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        
                      <div class="token-card">
                        <div class="token-card__item">
                            <div class="card">
                                <div class="nk-ecwg nk-ecwg6">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">Total Balance</h6>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <div class="data-group">
                                                <div class="amount">{{{accountCurrency}}}{{totalBalance}}</div>
                                                <div class="nk-ecwg6-ck">
                                                    <canvas class="ecommerce-line-chart-s3" id="todayOrders"></canvas>
                                                </div>
                                            </div>
                                        <div class="info"><span class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>0.00%</span><span> vs. last week</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="token-card__item">
                            <div class="card">
                                <div class="nk-ecwg nk-ecwg6">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">Percentage Return</h6>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <div class="data-group">
                                                <div class="amount">{{percentageReturn}}%</div>
                                                <div class="nk-ecwg6-ck">
                                                    <canvas class="ecommerce-line-chart-s3" id="todayRevenue"></canvas>
                                                </div>
                                            </div>
                                            <div class="info"><span class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>0.00%</span><span> vs. last week</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="token-card__item">
                            <div class="card">
                                <div class="nk-ecwg nk-ecwg6">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">Total Profit</h6>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <div class="data-group">
                                                <div class="amount">{{accountCurrency}}{{totalProfilt}}</div>
                                                <div class="nk-ecwg6-ck">
                                                    <canvas class="ecommerce-line-chart-s3" id="todayCustomers"></canvas>
                                                </div>
                                            </div>
                                            <div class="info"><span class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>0.00%</span><span> vs. last week</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="token-card__item">
                            <div class="card">
                                <div class="nk-ecwg nk-ecwg6">
                                    <div class="card-inner">
                                        <div class="progress-list gy-3">
                                            <div class="progress-wrap">
                                                <div class="progress-text">
                                                    <h6>Winning Trades</h6>
                                                    <div class="progress-amount" style="font-size: 15px;">{{winCount}}</div>
                                                </div>
                                                <div class="progress progress-md">
                                                    <div class="progress-bar bg-orange" data-progress="{{winCount}}"></div>
                                                </div>
                                            </div>
                                            <div class="progress-wrap" style="margin-top: 13px;">
                                                <div class="progress-text">
                                                    <h6>Losing Trades</h6>
                                                    <div class="progress-amount" style="font-size: 15px;">{{lossCount}}</div>
                                                </div>
                                                <div class="progress progress-md">
                                                    <div class="progress-bar bg-azure" data-progress="{{lossCount}}"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="token-card__item">
                            <div class="card">
                                <div class="nk-ecwg nk-ecwg6">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            
                                            <div class="card-title">
                                                <h6 class="title">BITL ICO Tokens</h6>
                                            </div>
                                        </div>
                                        <div class="card-token mt-1">
                                            <div class="card-token__item">
                                                <span class="www">Amount:</span>
                                                <span>25000 BITL</span>
                                            </div>
                                            <div class="card-token__item">
                                                <span>Token price:</span>
                                                <span>$0.05</span>
                                            </div>
                                            <div class="card-token__item">
                                                <span>Current Value:</span>
                                                <span>$1250</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                      
                        
            
                        <div class="col-xxl-12 col-sm-12">
                            <div class="card card-preview">
                                <div class="card-inner">
                                    <div class="card-title-group mb-2">
                                        <div class="card-title">
                                            <h6 class="title">Trade Activity</h6>
                                        </div>
                                        <div class="card-tools">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="month" id="dateMonth" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="nk-ecwg8-ck" id="weeklyChartDiv">
                                        {{^noWeekData}}
                                            <div id="weeklyChart" style="height: 100%"></div>
                                        {{/noWeekData}}
                                        {{#noWeekData}}
                                        <div style="text-align:center; margin-top: 30px;">{{noWeekData}}</div>
                                        {{/noWeekData}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-8 col-sm-8">
                            <div class="card card-preview">
                                <div class="card-inner">
                                    <h6 class="title">Trade History</h6>
                                    <table class="datatable-init table" style="min-height: 290px;">
                                        <thead>
                                            <tr>
                                                <th style="width: 15%">Trade#</th>
                                                <th style="width: 25%">Trade Date</th>
                                                <th style="width: 15%">Trading Pair</th>
                                                <th style="width: 15%">Position</th>
                                                <th style="width: 15%">Profit/Loss</th>
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
                                                <td>{{accountCurrency}}{{profit}}</td>
                                                <td>
                                                    <a href="javascript:;" class="btn btn-primary" data-toggle="modal" data-target="#modalTradeHistory" onclick="getTradeHistory({{id}});">
                                                        <span class="pl-3 pr-3">View</span>
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
                        <div class="col-xxl-4 col-sm-4">
                            <div class="card h-100">
                                <div class="card-inner">
                                    <div class="card-title-group mb-2">
                                        <div class="card-title">
                                            <h6 class="title">Trade Allocation</h6>
                                        </div>
                                    </div>
                                    <div class="card-inner">
                                        <div class="nk-ck-sm">
                                            {{^noChartTradeAllocation}}
                                            <canvas class="ecommerce-doughnut-s1" id="orderStatistics"></canvas>
                                            {{/noChartTradeAllocation}}
                                            {{#noChartTradeAllocation}}
                                            <div style="text-align:center;">{{noChartTradeAllocation}}</div>
                                            {{/noChartTradeAllocation}}
                                            <style>
                                                @media(max-width: 1378px) {
                                                    #orderStatistics {
                                                        margin-top: -30px;
                                                    }

                                                    .tradeAllocation {
                                                        margin-top: 0px !important;
                                                    }
                                                }
                                            </style>
                                            <ul class="nk-ecwg7-legends tradeAllocation" style="margin-top: 20px">
                                                {{^noChartTradeAllocation}}
                                                <script>
                                                var str_li = \'\';
                                                    var currency = {{{chartTradeAllocation.currency}}};
                                                    var color = {{{chartTradeAllocation.color}}};

                                                    for (var i = 0; i < currency.length; i ++) {
                                                        
                                                        str_li += \'<li><div class="title"><span class="dot dot-lg sq" data-bg="\'+ color[i] +
                                                        \'"></span><span>\'+ currency[i] +\'</span></div></li>\';
                                                    }
                                                $(\'.tradeAllocation\').html(str_li);
                                                </script>
                                                {{/noChartTradeAllocation}}
                                            </ul>
                                        </div>
                                    </div>
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
                                        <h6 class="title">My Referrals <em class="icon ni ni-info" data-toggle="tooltip" data-placement="right" title="Referral Information"></em></h6>
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
                                                <li><a href="javascript:;">7 Days</a></li>
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
    </div>
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script>

$(document).ready(function() {
    $(\'.datatable-init thead tr th:nth-Child(2)\').click();
    
    var dateMonth = "{{dateMonth}}";
    jQuery("#dateMonth").val(dateMonth);

    jQuery("#dateMonth").change(function(){ 
        let month = $(this).val();
        document.location.href = \'/?dateMonth=\'+ month;
    });

    var charts = Highcharts.chart(\'weeklyChart\', {
        chart: {
            type: \'areaspline\',
            zoomType: \'x\',
        },
        title: {
            text: \'\'
        },
        credits: {
            enabled: false
        },
        navigation: {
            buttonOptions: {
                enabled: false
            }
        },
        xAxis: {
            categories: {{weekData.date}}
        },
        yAxis: [
            {
                title: \'\',
                maxPadding: 0,
                minPadding: 0,
                labels: {                
                    formatter: function () {
                        return \'{{accountCurrency}}\' + this.value.toLocaleString(undefined,{ minimumFractionDigits: 0});
                    }
                }
            }, 
            {
                min: 0,
                max: 1,
                tickPositions: [],
                title: \'\'
            }
        ],
        legend: {
            enabled: false
        },
        plotOptions: {
            areaspline: {
                fillColor: {
                    linearGradient: {
                        x1: 0,
                        y1: 0,
                        x2: 0,
                        y2: 0.7
                    },
                    stops: [
                        [0, Highcharts.getOptions().colors[0]],
                        [1, Highcharts.color(Highcharts.getOptions().colors[0]).setOpacity(0.05).get(\'rgba\')]
                    ]
                },
                marker: {
                    radius: 5
                },
                lineWidth: 3,
                states: {
                    hover: {
                        lineWidth: 4
                    }
                },
                threshold: null
            },
            series: {
                pointPlacement: \'on\'
            }
        },
        tooltip: {
            formatter: function () {
                return this.points.reduce(function (s, point) {
                    return s + \'<br/>\' + point.series.name + \': <b>{{accountCurrency}}\' 
                    + point.y.toLocaleString(undefined,{ minimumFractionDigits: 2 }); +\'</b>\';
                }, \'<b>\' + this.x + \'</b>\');
            },
            shared: true
        },
        series: [
            {
                name: \'Balance\',
                data: {{weekData.countBalance}},
            },
            {
                yAxis: 1,
                name: \'Profit\',
                data: {{weekData.totalProfit}},
            }]
    });

    var chartWidth = parseInt($(\'#weeklyChart\').css(\'width\'));
    var isFirst = 1;
    $(\'.d-xl-inline-flex\').on(\'click\', function() {
        if (isFirst == 1){
            setTimeout( function() {
                charts.update({
                    chart: {
                        width: parseInt($(\'#weeklyChart\').css(\'width\')),
                    }
                });
                isFirst = 0;
            }, 500);
            
        } else {
                charts.update({
                chart: {
                    width: chartWidth,
                }
            });
            chartWidth = parseInt($(\'#weeklyChart\').css(\'width\'));
        }
    });

});

var orderStatistics = {
    labels: {{{chartTradeAllocation.currency}}},
    dataUnit: \'Trades\',
    legend: false,
    datasets: [{
        borderColor: "#fff",
        background: {{{chartTradeAllocation.color}}},
        data: {{{chartTradeAllocation.visits}}}
    }]
};

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

let parseDates = (inp) => {
    let year = parseInt(inp.slice(0,4), 10);
    let week = parseInt(inp.slice(6), 10) + 1;
    let day = (1 + (week - 1) * 7);
    let dayOffset = new Date(year, 0, 1).getDay();
    dayOffset -= 2; 
    let days = [];
    days[\'first\'] = new Date(year, 0, day - dayOffset + 0);
    days[\'last\'] = new Date(year, 0, day - dayOffset + 6);
    return days;
}

function getWeekNumber(d) {
    d = new Date(d);
    d.setUTCDate(d.getUTCDate() + 4 - (d.getUTCDay()||7));
    var yearStart = new Date(Date.UTC(d.getUTCFullYear(),0,1));
    var weekNo = Math.ceil(( ( (d - yearStart) / 86400000) + 1)/7);
    return [d.getUTCFullYear(), weekNo];
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
                $buffer .= $indent . '<style>
';
                $buffer .= $indent . '.nk-ecwg {
';
                $buffer .= $indent . '    border-bottom: 4px solid #668000;
';
                $buffer .= $indent . '}
';
                $buffer .= $indent . '.token_logo {
';
                $buffer .= $indent . '    position: absolute;
';
                $buffer .= $indent . '    top: -20px;
';
                $buffer .= $indent . '    left: -20px;
';
                $buffer .= $indent . '    width: 25px;
';
                $buffer .= $indent . '}
';
                $buffer .= $indent . '.card-token {
';
                $buffer .= $indent . '    max-width: 100%;
';
                $buffer .= $indent . '}
';
                $buffer .= $indent . '.card-token__item {
';
                $buffer .= $indent . '    display: flex;
';
                $buffer .= $indent . '    justify-content: space-between;
';
                $buffer .= $indent . '}
';
                $buffer .= $indent . '.card-token__item > span {
';
                $buffer .= $indent . '    font-size:16px;
';
                $buffer .= $indent . '}
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '</style>
';
                $buffer .= $indent . '    <div class="container-fluid">
';
                $buffer .= $indent . '        <div class="nk-content-inner">
';
                $buffer .= $indent . '            <div class="nk-content-body">
';
                $buffer .= $indent . '                <div class="nk-block">
';
                $buffer .= $indent . '                    <div class="row g-gs">
';
                $buffer .= $indent . '                        
';
                $buffer .= $indent . '                        <div class="col-xxl-12 col-sm-12">
';
                $buffer .= $indent . '                            <div class="alert alert-pro alert-primary">
';
                $buffer .= $indent . '                                <div class="alert-text">
';
                $buffer .= $indent . '                                    <div class="tradingview-widget-container">
';
                $buffer .= $indent . '                                        <div class="tradingview-widget-container__widget"></div>
';
                $buffer .= $indent . '                                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
';
                $buffer .= $indent . '                                        {
';
                $buffer .= $indent . '                                        "symbols": [
';
                $buffer .= $indent . '                                        {
';
                $buffer .= $indent . '                                            "proName": "FOREXCOM:SPXUSD",
';
                $buffer .= $indent . '                                            "title": "S&P 500"
';
                $buffer .= $indent . '                                        },
';
                $buffer .= $indent . '                                        {
';
                $buffer .= $indent . '                                            "proName": "FOREXCOM:NSXUSD",
';
                $buffer .= $indent . '                                            "title": "Nasdaq 100"
';
                $buffer .= $indent . '                                        },
';
                $buffer .= $indent . '                                        {
';
                $buffer .= $indent . '                                            "proName": "FX_IDC:EURUSD",
';
                $buffer .= $indent . '                                            "title": "EUR/USD"
';
                $buffer .= $indent . '                                        },
';
                $buffer .= $indent . '                                        {
';
                $buffer .= $indent . '                                            "proName": "BITSTAMP:BTCUSD",
';
                $buffer .= $indent . '                                            "title": "BTC/USD"
';
                $buffer .= $indent . '                                        },
';
                $buffer .= $indent . '                                        {
';
                $buffer .= $indent . '                                            "proName": "BITSTAMP:ETHUSD",
';
                $buffer .= $indent . '                                            "title": "ETH/USD"
';
                $buffer .= $indent . '                                        }
';
                $buffer .= $indent . '                                        
';
                $buffer .= $indent . '                                        ],
';
                $buffer .= $indent . '                                        "showSymbolLogo": true,
';
                $buffer .= $indent . '                                        "colorTheme": "light",
';
                $buffer .= $indent . '                                        "isTransparent": true,
';
                $buffer .= $indent . '                                        "displayMode": "adaptive",
';
                $buffer .= $indent . '                                        "locale": "en"
';
                $buffer .= $indent . '                                    }
';
                $buffer .= $indent . '                                        </script>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                        
';
                $buffer .= $indent . '                        
';
                $buffer .= $indent . '                      <div class="token-card">
';
                $buffer .= $indent . '                        <div class="token-card__item">
';
                $buffer .= $indent . '                            <div class="card">
';
                $buffer .= $indent . '                                <div class="nk-ecwg nk-ecwg6">
';
                $buffer .= $indent . '                                    <div class="card-inner">
';
                $buffer .= $indent . '                                        <div class="card-title-group">
';
                $buffer .= $indent . '                                            <div class="card-title">
';
                $buffer .= $indent . '                                                <h6 class="title">Total Balance</h6>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="data">
';
                $buffer .= $indent . '                                            <div class="data-group">
';
                $buffer .= $indent . '                                                <div class="amount">';
                $value = $this->resolveValue($context->find('accountCurrency'), $context, $indent);
                $buffer .= $value;
                $value = $this->resolveValue($context->find('totalBalance'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                                                <div class="nk-ecwg6-ck">
';
                $buffer .= $indent . '                                                    <canvas class="ecommerce-line-chart-s3" id="todayOrders"></canvas>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        <div class="info"><span class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>0.00%</span><span> vs. last week</span></div>
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
                $buffer .= $indent . '                        <div class="token-card__item">
';
                $buffer .= $indent . '                            <div class="card">
';
                $buffer .= $indent . '                                <div class="nk-ecwg nk-ecwg6">
';
                $buffer .= $indent . '                                    <div class="card-inner">
';
                $buffer .= $indent . '                                        <div class="card-title-group">
';
                $buffer .= $indent . '                                            <div class="card-title">
';
                $buffer .= $indent . '                                                <h6 class="title">Percentage Return</h6>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="data">
';
                $buffer .= $indent . '                                            <div class="data-group">
';
                $buffer .= $indent . '                                                <div class="amount">';
                $value = $this->resolveValue($context->find('percentageReturn'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '%</div>
';
                $buffer .= $indent . '                                                <div class="nk-ecwg6-ck">
';
                $buffer .= $indent . '                                                    <canvas class="ecommerce-line-chart-s3" id="todayRevenue"></canvas>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="info"><span class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>0.00%</span><span> vs. last week</span></div>
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
                $buffer .= $indent . '                        <div class="token-card__item">
';
                $buffer .= $indent . '                            <div class="card">
';
                $buffer .= $indent . '                                <div class="nk-ecwg nk-ecwg6">
';
                $buffer .= $indent . '                                    <div class="card-inner">
';
                $buffer .= $indent . '                                        <div class="card-title-group">
';
                $buffer .= $indent . '                                            <div class="card-title">
';
                $buffer .= $indent . '                                                <h6 class="title">Total Profit</h6>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="data">
';
                $buffer .= $indent . '                                            <div class="data-group">
';
                $buffer .= $indent . '                                                <div class="amount">';
                $value = $this->resolveValue($context->find('accountCurrency'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $value = $this->resolveValue($context->find('totalProfilt'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                                                <div class="nk-ecwg6-ck">
';
                $buffer .= $indent . '                                                    <canvas class="ecommerce-line-chart-s3" id="todayCustomers"></canvas>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="info"><span class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>0.00%</span><span> vs. last week</span></div>
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
                $buffer .= $indent . '                        <div class="token-card__item">
';
                $buffer .= $indent . '                            <div class="card">
';
                $buffer .= $indent . '                                <div class="nk-ecwg nk-ecwg6">
';
                $buffer .= $indent . '                                    <div class="card-inner">
';
                $buffer .= $indent . '                                        <div class="progress-list gy-3">
';
                $buffer .= $indent . '                                            <div class="progress-wrap">
';
                $buffer .= $indent . '                                                <div class="progress-text">
';
                $buffer .= $indent . '                                                    <h6>Winning Trades</h6>
';
                $buffer .= $indent . '                                                    <div class="progress-amount" style="font-size: 15px;">';
                $value = $this->resolveValue($context->find('winCount'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                                <div class="progress progress-md">
';
                $buffer .= $indent . '                                                    <div class="progress-bar bg-orange" data-progress="';
                $value = $this->resolveValue($context->find('winCount'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="progress-wrap" style="margin-top: 13px;">
';
                $buffer .= $indent . '                                                <div class="progress-text">
';
                $buffer .= $indent . '                                                    <h6>Losing Trades</h6>
';
                $buffer .= $indent . '                                                    <div class="progress-amount" style="font-size: 15px;">';
                $value = $this->resolveValue($context->find('lossCount'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                                <div class="progress progress-md">
';
                $buffer .= $indent . '                                                    <div class="progress-bar bg-azure" data-progress="';
                $value = $this->resolveValue($context->find('lossCount'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></div>
';
                $buffer .= $indent . '                                                </div>
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
                $buffer .= $indent . '                        <div class="token-card__item">
';
                $buffer .= $indent . '                            <div class="card">
';
                $buffer .= $indent . '                                <div class="nk-ecwg nk-ecwg6">
';
                $buffer .= $indent . '                                    <div class="card-inner">
';
                $buffer .= $indent . '                                        <div class="card-title-group">
';
                $buffer .= $indent . '                                            
';
                $buffer .= $indent . '                                            <div class="card-title">
';
                $buffer .= $indent . '                                                <h6 class="title">BITL ICO Tokens</h6>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="card-token mt-1">
';
                $buffer .= $indent . '                                            <div class="card-token__item">
';
                $buffer .= $indent . '                                                <span class="www">Amount:</span>
';
                $buffer .= $indent . '                                                <span>25000 BITL</span>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="card-token__item">
';
                $buffer .= $indent . '                                                <span>Token price:</span>
';
                $buffer .= $indent . '                                                <span>$0.05</span>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="card-token__item">
';
                $buffer .= $indent . '                                                <span>Current Value:</span>
';
                $buffer .= $indent . '                                                <span>$1250</span>
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
                $buffer .= $indent . '                      
';
                $buffer .= $indent . '                        
';
                $buffer .= $indent . '            
';
                $buffer .= $indent . '                        <div class="col-xxl-12 col-sm-12">
';
                $buffer .= $indent . '                            <div class="card card-preview">
';
                $buffer .= $indent . '                                <div class="card-inner">
';
                $buffer .= $indent . '                                    <div class="card-title-group mb-2">
';
                $buffer .= $indent . '                                        <div class="card-title">
';
                $buffer .= $indent . '                                            <h6 class="title">Trade Activity</h6>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="card-tools">
';
                $buffer .= $indent . '                                            <div class="form-group">
';
                $buffer .= $indent . '                                                <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                    <input type="month" id="dateMonth" class="form-control">
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    
';
                $buffer .= $indent . '                                    <div class="nk-ecwg8-ck" id="weeklyChartDiv">
';
                // 'noWeekData' inverted section
                $value = $context->find('noWeekData');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                            <div id="weeklyChart" style="height: 100%"></div>
';
                }
                // 'noWeekData' section
                $value = $context->find('noWeekData');
                $buffer .= $this->sectionC3e165e74688d67002ef9a704095ea8b($context, $indent, $value);
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="col-xxl-8 col-sm-8">
';
                $buffer .= $indent . '                            <div class="card card-preview">
';
                $buffer .= $indent . '                                <div class="card-inner">
';
                $buffer .= $indent . '                                    <h6 class="title">Trade History</h6>
';
                $buffer .= $indent . '                                    <table class="datatable-init table" style="min-height: 290px;">
';
                $buffer .= $indent . '                                        <thead>
';
                $buffer .= $indent . '                                            <tr>
';
                $buffer .= $indent . '                                                <th style="width: 15%">Trade#</th>
';
                $buffer .= $indent . '                                                <th style="width: 25%">Trade Date</th>
';
                $buffer .= $indent . '                                                <th style="width: 15%">Trading Pair</th>
';
                $buffer .= $indent . '                                                <th style="width: 15%">Position</th>
';
                $buffer .= $indent . '                                                <th style="width: 15%">Profit/Loss</th>
';
                $buffer .= $indent . '                                                <th style="width: 15%"></th>
';
                $buffer .= $indent . '                                            </tr>
';
                $buffer .= $indent . '                                        </thead>
';
                $buffer .= $indent . '                                        <tbody>
';
                // 'data' section
                $value = $context->find('data');
                $buffer .= $this->sectionC2e555cc6aa4e26f20ef631228b1842d($context, $indent, $value);
                $buffer .= $indent . '                                        </tbody>
';
                $buffer .= $indent . '                                    </table>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="col-xxl-4 col-sm-4">
';
                $buffer .= $indent . '                            <div class="card h-100">
';
                $buffer .= $indent . '                                <div class="card-inner">
';
                $buffer .= $indent . '                                    <div class="card-title-group mb-2">
';
                $buffer .= $indent . '                                        <div class="card-title">
';
                $buffer .= $indent . '                                            <h6 class="title">Trade Allocation</h6>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="card-inner">
';
                $buffer .= $indent . '                                        <div class="nk-ck-sm">
';
                // 'noChartTradeAllocation' inverted section
                $value = $context->find('noChartTradeAllocation');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                            <canvas class="ecommerce-doughnut-s1" id="orderStatistics"></canvas>
';
                }
                // 'noChartTradeAllocation' section
                $value = $context->find('noChartTradeAllocation');
                $buffer .= $this->section90bbe9897578f4792290522071ae4658($context, $indent, $value);
                $buffer .= $indent . '                                            <style>
';
                $buffer .= $indent . '                                                @media(max-width: 1378px) {
';
                $buffer .= $indent . '                                                    #orderStatistics {
';
                $buffer .= $indent . '                                                        margin-top: -30px;
';
                $buffer .= $indent . '                                                    }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                                    .tradeAllocation {
';
                $buffer .= $indent . '                                                        margin-top: 0px !important;
';
                $buffer .= $indent . '                                                    }
';
                $buffer .= $indent . '                                                }
';
                $buffer .= $indent . '                                            </style>
';
                $buffer .= $indent . '                                            <ul class="nk-ecwg7-legends tradeAllocation" style="margin-top: 20px">
';
                // 'noChartTradeAllocation' inverted section
                $value = $context->find('noChartTradeAllocation');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                                <script>
';
                    $buffer .= $indent . '                                                var str_li = \'\';
';
                    $buffer .= $indent . '                                                    var currency = ';
                    $value = $this->resolveValue($context->findDot('chartTradeAllocation.currency'), $context, $indent);
                    $buffer .= $value;
                    $buffer .= ';
';
                    $buffer .= $indent . '                                                    var color = ';
                    $value = $this->resolveValue($context->findDot('chartTradeAllocation.color'), $context, $indent);
                    $buffer .= $value;
                    $buffer .= ';
';
                    $buffer .= $indent . '
';
                    $buffer .= $indent . '                                                    for (var i = 0; i < currency.length; i ++) {
';
                    $buffer .= $indent . '                                                        
';
                    $buffer .= $indent . '                                                        str_li += \'<li><div class="title"><span class="dot dot-lg sq" data-bg="\'+ color[i] +
';
                    $buffer .= $indent . '                                                        \'"></span><span>\'+ currency[i] +\'</span></div></li>\';
';
                    $buffer .= $indent . '                                                    }
';
                    $buffer .= $indent . '                                                $(\'.tradeAllocation\').html(str_li);
';
                    $buffer .= $indent . '                                                </script>
';
                }
                $buffer .= $indent . '                                            </ul>
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
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="nk-block">
';
                $buffer .= $indent . '                    <div class="card card-bordered">
';
                $buffer .= $indent . '                        <div class="nk-refwg">
';
                $buffer .= $indent . '                            <div class="nk-refwg-invite card-inner">
';
                $buffer .= $indent . '                                <div class="nk-refwg-head g-3">
';
                $buffer .= $indent . '                                    <div class="nk-refwg-title">
';
                $buffer .= $indent . '                                        <h5 class="title">Refer Us & Earn</h5>
';
                $buffer .= $indent . '                                        <div class="title-sub">Use the link below to invite your friends.</div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="nk-refwg-action">
';
                $buffer .= $indent . '                                        <a href="javascript:;" class="btn btn-primary">Invite</a>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="nk-refwg-url">
';
                $buffer .= $indent . '                                    <div class="form-control-wrap">
';
                $buffer .= $indent . '                                        <div class="form-clip clipboard-init" data-clipboard-target="#refUrl" data-success="Copied" data-text="Copy Link"><em class="clipboard-icon icon ni ni-copy"></em> <span class="clipboard-text">Copy Link</span></div>
';
                $buffer .= $indent . '                                        <div class="form-icon">
';
                $buffer .= $indent . '                                            <em class="icon ni ni-link-alt"></em>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <input type="text" class="form-control copy-text" id="refUrl" value="https://cointraderclient.com">
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="nk-refwg-stats card-inner bg-lighter">
';
                $buffer .= $indent . '                                <div class="nk-refwg-group g-3">
';
                $buffer .= $indent . '                                    <div class="nk-refwg-name">
';
                $buffer .= $indent . '                                        <h6 class="title">My Referrals <em class="icon ni ni-info" data-toggle="tooltip" data-placement="right" title="Referral Information"></em></h6>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="nk-refwg-info g-3">
';
                $buffer .= $indent . '                                        <div class="nk-refwg-sub">
';
                $buffer .= $indent . '                                            <div class="title">0</div>
';
                $buffer .= $indent . '                                            <div class="sub-text">Total Joined</div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="nk-refwg-sub">
';
                $buffer .= $indent . '                                            <div class="title">0</div>
';
                $buffer .= $indent . '                                            <div class="sub-text">Referral Earnings</div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="nk-refwg-more dropdown mt-n1 mr-n1">
';
                $buffer .= $indent . '                                        <a href="#" class="btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
';
                $buffer .= $indent . '                                        <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
';
                $buffer .= $indent . '                                            <ul class="link-list-plain sm">
';
                $buffer .= $indent . '                                                <li><a href="javascript:;">7 Days</a></li>
';
                $buffer .= $indent . '                                                <li><a href="javascript:;">15 Days</a></li>
';
                $buffer .= $indent . '                                                <li><a href="javascript:;">30 Days</a></li>
';
                $buffer .= $indent . '                                            </ul>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="nk-refwg-ck">
';
                $buffer .= $indent . '                                    <canvas class="chart-refer-stats" id="refBarChart"></canvas>
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
                $buffer .= $indent . '                <div class="nk-block">
';
                $buffer .= $indent . '                    <div class="card card-bordered">
';
                $buffer .= $indent . '                        <div class="card-inner card-inner-lg">
';
                $buffer .= $indent . '                            <div class="align-center flex-wrap flex-md-nowrap g-4">
';
                $buffer .= $indent . '                                <div class="nk-block-image w-120px flex-shrink-0">
';
                $buffer .= $indent . '                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 118">
';
                $buffer .= $indent . '                                        <path d="M8.916,94.745C-.318,79.153-2.164,58.569,2.382,40.578,7.155,21.69,19.045,9.451,35.162,4.32,46.609.676,58.716.331,70.456,1.845,84.683,3.68,99.57,8.694,108.892,21.408c10.03,13.679,12.071,34.71,10.747,52.054-1.173,15.359-7.441,27.489-19.231,34.494-10.689,6.351-22.92,8.733-34.715,10.331-16.181,2.192-34.195-.336-47.6-12.281A47.243,47.243,0,0,1,8.916,94.745Z" transform="translate(0 -1)" fill="#f6faff" />
';
                $buffer .= $indent . '                                        <rect x="18" y="32" width="84" height="50" rx="4" ry="4" fill="#fff" />
';
                $buffer .= $indent . '                                        <rect x="26" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
';
                $buffer .= $indent . '                                        <rect x="50" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
';
                $buffer .= $indent . '                                        <rect x="74" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
';
                $buffer .= $indent . '                                        <rect x="38" y="60" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
';
                $buffer .= $indent . '                                        <rect x="62" y="60" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
';
                $buffer .= $indent . '                                        <path d="M98,32H22a5.006,5.006,0,0,0-5,5V79a5.006,5.006,0,0,0,5,5H52v8H45a2,2,0,0,0-2,2v4a2,2,0,0,0,2,2H73a2,2,0,0,0,2-2V94a2,2,0,0,0-2-2H66V84H98a5.006,5.006,0,0,0,5-5V37A5.006,5.006,0,0,0,98,32ZM73,94v4H45V94Zm-9-2H54V84H64Zm37-13a3,3,0,0,1-3,3H22a3,3,0,0,1-3-3V37a3,3,0,0,1,3-3H98a3,3,0,0,1,3,3Z" transform="translate(0 -1)" fill="#798bff" />
';
                $buffer .= $indent . '                                        <path d="M61.444,41H40.111L33,48.143V19.7A3.632,3.632,0,0,1,36.556,16H61.444A3.632,3.632,0,0,1,65,19.7V37.3A3.632,3.632,0,0,1,61.444,41Z" transform="translate(0 -1)" fill="#6576ff" />
';
                $buffer .= $indent . '                                        <path d="M61.444,41H40.111L33,48.143V19.7A3.632,3.632,0,0,1,36.556,16H61.444A3.632,3.632,0,0,1,65,19.7V37.3A3.632,3.632,0,0,1,61.444,41Z" transform="translate(0 -1)" fill="none" stroke="#6576ff" stroke-miterlimit="10" stroke-width="2" />
';
                $buffer .= $indent . '                                        <line x1="40" y1="22" x2="57" y2="22" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
';
                $buffer .= $indent . '                                        <line x1="40" y1="27" x2="57" y2="27" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
';
                $buffer .= $indent . '                                        <line x1="40" y1="32" x2="50" y2="32" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
';
                $buffer .= $indent . '                                        <line x1="30.5" y1="87.5" x2="30.5" y2="91.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
';
                $buffer .= $indent . '                                        <line x1="28.5" y1="89.5" x2="32.5" y2="89.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
';
                $buffer .= $indent . '                                        <line x1="79.5" y1="22.5" x2="79.5" y2="26.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
';
                $buffer .= $indent . '                                        <line x1="77.5" y1="24.5" x2="81.5" y2="24.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
';
                $buffer .= $indent . '                                        <circle cx="90.5" cy="97.5" r="3" fill="none" stroke="#9cabff" stroke-miterlimit="10" />
';
                $buffer .= $indent . '                                        <circle cx="24" cy="23" r="2.5" fill="none" stroke="#9cabff" stroke-miterlimit="10" />
';
                $buffer .= $indent . '                                    </svg>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="nk-block-content">
';
                $buffer .= $indent . '                                    <div class="nk-block-content-head px-lg-4">
';
                $buffer .= $indent . '                                        <h5>We’re here to help you!</h5>
';
                $buffer .= $indent . '                                        <p class="text-soft">Ask a question or file a support ticket, manage request, report an issues. Our team support team will get back to you by email.</p>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="nk-block-content flex-shrink-0">
';
                $buffer .= $indent . '                                    <a href="/messages" class="btn btn-lg btn-outline-primary">Get Support Now</a>
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
                $buffer .= $indent . '
';
                $buffer .= $indent . '<script src="https://code.highcharts.com/highcharts.js"></script>
';
                $buffer .= $indent . '<script src="https://code.highcharts.com/modules/data.js"></script>
';
                $buffer .= $indent . '<script src="https://code.highcharts.com/modules/exporting.js"></script>
';
                $buffer .= $indent . '<script src="https://code.highcharts.com/modules/export-data.js"></script>
';
                $buffer .= $indent . '<script src="https://code.highcharts.com/modules/accessibility.js"></script>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '<script>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '$(document).ready(function() {
';
                $buffer .= $indent . '    $(\'.datatable-init thead tr th:nth-Child(2)\').click();
';
                $buffer .= $indent . '    
';
                $buffer .= $indent . '    var dateMonth = "';
                $value = $this->resolveValue($context->find('dateMonth'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '";
';
                $buffer .= $indent . '    jQuery("#dateMonth").val(dateMonth);
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    jQuery("#dateMonth").change(function(){ 
';
                $buffer .= $indent . '        let month = $(this).val();
';
                $buffer .= $indent . '        document.location.href = \'/?dateMonth=\'+ month;
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    var charts = Highcharts.chart(\'weeklyChart\', {
';
                $buffer .= $indent . '        chart: {
';
                $buffer .= $indent . '            type: \'areaspline\',
';
                $buffer .= $indent . '            zoomType: \'x\',
';
                $buffer .= $indent . '        },
';
                $buffer .= $indent . '        title: {
';
                $buffer .= $indent . '            text: \'\'
';
                $buffer .= $indent . '        },
';
                $buffer .= $indent . '        credits: {
';
                $buffer .= $indent . '            enabled: false
';
                $buffer .= $indent . '        },
';
                $buffer .= $indent . '        navigation: {
';
                $buffer .= $indent . '            buttonOptions: {
';
                $buffer .= $indent . '                enabled: false
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        },
';
                $buffer .= $indent . '        xAxis: {
';
                $buffer .= $indent . '            categories: ';
                $value = $this->resolveValue($context->findDot('weekData.date'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '        },
';
                $buffer .= $indent . '        yAxis: [
';
                $buffer .= $indent . '            {
';
                $buffer .= $indent . '                title: \'\',
';
                $buffer .= $indent . '                maxPadding: 0,
';
                $buffer .= $indent . '                minPadding: 0,
';
                $buffer .= $indent . '                labels: {                
';
                $buffer .= $indent . '                    formatter: function () {
';
                $buffer .= $indent . '                        return \'';
                $value = $this->resolveValue($context->find('accountCurrency'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\' + this.value.toLocaleString(undefined,{ minimumFractionDigits: 0});
';
                $buffer .= $indent . '                    }
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '            }, 
';
                $buffer .= $indent . '            {
';
                $buffer .= $indent . '                min: 0,
';
                $buffer .= $indent . '                max: 1,
';
                $buffer .= $indent . '                tickPositions: [],
';
                $buffer .= $indent . '                title: \'\'
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        ],
';
                $buffer .= $indent . '        legend: {
';
                $buffer .= $indent . '            enabled: false
';
                $buffer .= $indent . '        },
';
                $buffer .= $indent . '        plotOptions: {
';
                $buffer .= $indent . '            areaspline: {
';
                $buffer .= $indent . '                fillColor: {
';
                $buffer .= $indent . '                    linearGradient: {
';
                $buffer .= $indent . '                        x1: 0,
';
                $buffer .= $indent . '                        y1: 0,
';
                $buffer .= $indent . '                        x2: 0,
';
                $buffer .= $indent . '                        y2: 0.7
';
                $buffer .= $indent . '                    },
';
                $buffer .= $indent . '                    stops: [
';
                $buffer .= $indent . '                        [0, Highcharts.getOptions().colors[0]],
';
                $buffer .= $indent . '                        [1, Highcharts.color(Highcharts.getOptions().colors[0]).setOpacity(0.05).get(\'rgba\')]
';
                $buffer .= $indent . '                    ]
';
                $buffer .= $indent . '                },
';
                $buffer .= $indent . '                marker: {
';
                $buffer .= $indent . '                    radius: 5
';
                $buffer .= $indent . '                },
';
                $buffer .= $indent . '                lineWidth: 3,
';
                $buffer .= $indent . '                states: {
';
                $buffer .= $indent . '                    hover: {
';
                $buffer .= $indent . '                        lineWidth: 4
';
                $buffer .= $indent . '                    }
';
                $buffer .= $indent . '                },
';
                $buffer .= $indent . '                threshold: null
';
                $buffer .= $indent . '            },
';
                $buffer .= $indent . '            series: {
';
                $buffer .= $indent . '                pointPlacement: \'on\'
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        },
';
                $buffer .= $indent . '        tooltip: {
';
                $buffer .= $indent . '            formatter: function () {
';
                $buffer .= $indent . '                return this.points.reduce(function (s, point) {
';
                $buffer .= $indent . '                    return s + \'<br/>\' + point.series.name + \': <b>';
                $value = $this->resolveValue($context->find('accountCurrency'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\' 
';
                $buffer .= $indent . '                    + point.y.toLocaleString(undefined,{ minimumFractionDigits: 2 }); +\'</b>\';
';
                $buffer .= $indent . '                }, \'<b>\' + this.x + \'</b>\');
';
                $buffer .= $indent . '            },
';
                $buffer .= $indent . '            shared: true
';
                $buffer .= $indent . '        },
';
                $buffer .= $indent . '        series: [
';
                $buffer .= $indent . '            {
';
                $buffer .= $indent . '                name: \'Balance\',
';
                $buffer .= $indent . '                data: ';
                $value = $this->resolveValue($context->findDot('weekData.countBalance'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ',
';
                $buffer .= $indent . '            },
';
                $buffer .= $indent . '            {
';
                $buffer .= $indent . '                yAxis: 1,
';
                $buffer .= $indent . '                name: \'Profit\',
';
                $buffer .= $indent . '                data: ';
                $value = $this->resolveValue($context->findDot('weekData.totalProfit'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ',
';
                $buffer .= $indent . '            }]
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    var chartWidth = parseInt($(\'#weeklyChart\').css(\'width\'));
';
                $buffer .= $indent . '    var isFirst = 1;
';
                $buffer .= $indent . '    $(\'.d-xl-inline-flex\').on(\'click\', function() {
';
                $buffer .= $indent . '        if (isFirst == 1){
';
                $buffer .= $indent . '            setTimeout( function() {
';
                $buffer .= $indent . '                charts.update({
';
                $buffer .= $indent . '                    chart: {
';
                $buffer .= $indent . '                        width: parseInt($(\'#weeklyChart\').css(\'width\')),
';
                $buffer .= $indent . '                    }
';
                $buffer .= $indent . '                });
';
                $buffer .= $indent . '                isFirst = 0;
';
                $buffer .= $indent . '            }, 500);
';
                $buffer .= $indent . '            
';
                $buffer .= $indent . '        } else {
';
                $buffer .= $indent . '                charts.update({
';
                $buffer .= $indent . '                chart: {
';
                $buffer .= $indent . '                    width: chartWidth,
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '            });
';
                $buffer .= $indent . '            chartWidth = parseInt($(\'#weeklyChart\').css(\'width\'));
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '});
';
                $buffer .= $indent . '
';
                $buffer .= $indent . 'var orderStatistics = {
';
                $buffer .= $indent . '    labels: ';
                $value = $this->resolveValue($context->findDot('chartTradeAllocation.currency'), $context, $indent);
                $buffer .= $value;
                $buffer .= ',
';
                $buffer .= $indent . '    dataUnit: \'Trades\',
';
                $buffer .= $indent . '    legend: false,
';
                $buffer .= $indent . '    datasets: [{
';
                $buffer .= $indent . '        borderColor: "#fff",
';
                $buffer .= $indent . '        background: ';
                $value = $this->resolveValue($context->findDot('chartTradeAllocation.color'), $context, $indent);
                $buffer .= $value;
                $buffer .= ',
';
                $buffer .= $indent . '        data: ';
                $value = $this->resolveValue($context->findDot('chartTradeAllocation.visits'), $context, $indent);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '    }]
';
                $buffer .= $indent . '};
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
                $buffer .= $indent . '
';
                $buffer .= $indent . 'let parseDates = (inp) => {
';
                $buffer .= $indent . '    let year = parseInt(inp.slice(0,4), 10);
';
                $buffer .= $indent . '    let week = parseInt(inp.slice(6), 10) + 1;
';
                $buffer .= $indent . '    let day = (1 + (week - 1) * 7);
';
                $buffer .= $indent . '    let dayOffset = new Date(year, 0, 1).getDay();
';
                $buffer .= $indent . '    dayOffset -= 2; 
';
                $buffer .= $indent . '    let days = [];
';
                $buffer .= $indent . '    days[\'first\'] = new Date(year, 0, day - dayOffset + 0);
';
                $buffer .= $indent . '    days[\'last\'] = new Date(year, 0, day - dayOffset + 6);
';
                $buffer .= $indent . '    return days;
';
                $buffer .= $indent . '}
';
                $buffer .= $indent . '
';
                $buffer .= $indent . 'function getWeekNumber(d) {
';
                $buffer .= $indent . '    d = new Date(d);
';
                $buffer .= $indent . '    d.setUTCDate(d.getUTCDate() + 4 - (d.getUTCDay()||7));
';
                $buffer .= $indent . '    var yearStart = new Date(Date.UTC(d.getUTCFullYear(),0,1));
';
                $buffer .= $indent . '    var weekNo = Math.ceil(( ( (d - yearStart) / 86400000) + 1)/7);
';
                $buffer .= $indent . '    return [d.getUTCFullYear(), weekNo];
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
