<?php

class __MyTemplates_4734adbdb8bfe71d182943165252e3a0 extends Mustache_Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="nk-content ">
';
        $buffer .= $indent . '    <div class="container-fluid">
';
        $buffer .= $indent . '        <div class="nk-content-inner">
';
        $buffer .= $indent . '            <div class="nk-content-body">
';
        $buffer .= $indent . '                <div class="nk-content-wrap">
';
        $buffer .= $indent . '                    <div class="nk-block-head nk-block-head-lg">
';
        $buffer .= $indent . '                        <div class="nk-block-between-md g-4">
';
        $buffer .= $indent . '                            <div class="nk-block-head-content">
';
        $buffer .= $indent . '                                <h2 class="nk-block-title fw-normal">Trades By Account Type</h2>
';
        $buffer .= $indent . '                                <div class="nk-block-des">
';
        $buffer .= $indent . '                                    <p> Below mentioned trade details will get reflected throughout the selected group members.</p>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="nk-block">
';
        $buffer .= $indent . '                        <div class="card card-bordered">
';
        $buffer .= $indent . '                            <div class="card-inner">
';
        $buffer .= $indent . '                                <div class="preview-block">
';
        // 'insertedTrade' section
        $value = $context->find('insertedTrade');
        $buffer .= $this->section3cfc8a442a7eb950c7ebd7abfd9c5814($context, $indent, $value);
        $buffer .= $indent . '                                    <form method="post" action="/adminTradesByAccountType" enctype="multipart/form-data" class="row gy-3">
';
        $buffer .= $indent . '                                        <div class="col-md-6">
';
        $buffer .= $indent . '                                            <div class="form-group">
';
        $buffer .= $indent . '                                                <div class="form-control-wrap">
';
        $buffer .= $indent . '                                                    <input type="text" id="tradeDate" name="tradeDate" class="date-picker form-control form-control-lg form-control-outlined" autocomplete="off" data-date-format="dd-mm-yyyy" required>
';
        $buffer .= $indent . '                                                    <label class="form-label-outlined" for="tradeDate">Trade Date</label>
';
        $buffer .= $indent . '                                                </div>
';
        $buffer .= $indent . '                                            </div>
';
        $buffer .= $indent . '                                        </div>
';
        $buffer .= $indent . '                                        <div class="col-md-6">
';
        $buffer .= $indent . '                                            <div class="form-group">
';
        $buffer .= $indent . '                                                <div class="form-control-wrap">
';
        $buffer .= $indent . '                                                    <select id="accountType" name="accountType" class="form-select form-control form-control-lg" data-ui="lg" required>
';
        $buffer .= $indent . '                                                        <option value="tc">60 Day Trial</option>
';
        $buffer .= $indent . '                                                        <option value="gd">Macro</option>
';
        $buffer .= $indent . '                                                        <option value="gd+">Advanced</option>
';
        $buffer .= $indent . '                                                        <option value="pt">Premium</option>
';
        $buffer .= $indent . '                                                    
';
        $buffer .= $indent . '                                                    </select>
';
        $buffer .= $indent . '                                                    <label class="form-label-outlined" for="accountType">Account Type</label>
';
        $buffer .= $indent . '                                                </div>
';
        $buffer .= $indent . '                                            </div>
';
        $buffer .= $indent . '                                        </div>
';
        $buffer .= $indent . '                                        <div class="col-md-6">
';
        $buffer .= $indent . '                                            <div class="form-group">
';
        $buffer .= $indent . '                                                <div class="form-control-wrap">
';
        $buffer .= $indent . '                                                    <select id="tradeType" name="tradeType" class="form-select form-control form-control-lg" data-ui="lg" required>
';
        $buffer .= $indent . '                                                        <option value="long">Long</option>
';
        $buffer .= $indent . '                                                        <option value="short">Short</option>
';
        $buffer .= $indent . '                                                    </select>
';
        $buffer .= $indent . '                                                    <label class="form-label-outlined" for="tradeType">Trade Type</label>
';
        $buffer .= $indent . '                                                </div>
';
        $buffer .= $indent . '                                            </div>
';
        $buffer .= $indent . '                                        </div>
';
        $buffer .= $indent . '                                        <div class="col-md-6">
';
        $buffer .= $indent . '                                            <div class="form-group market">
';
        $buffer .= $indent . '                                                <div class="form-control-wrap">
';
        $buffer .= $indent . '                                                    <select id="market" name="market" class="form-select form-control form-control-lg" data-ui="lg" required>
';
        $buffer .= $indent . '                                                       
';
        $buffer .= $indent . '                                                        <option value="BTC/USD">BTC/USD</option>
';
        $buffer .= $indent . '                                                        <option value="LTC/USD">LTC/USD</option>
';
        $buffer .= $indent . '                                                        <option value="ETH/USD">ETH/USD</option>
';
        $buffer .= $indent . '                                                        <option value="XRP/USD">XRP/USD</option>
';
        $buffer .= $indent . '                                                        <option value="LINK/USD">LINK/USD</option>
';
        $buffer .= $indent . '                                                        <option value="BNB/USD">BNB/USD</option>
';
        $buffer .= $indent . '                                                        <option value="ADA/USD">ADA/USD</option>
';
        $buffer .= $indent . '                                                        <option value="DOT/USD">DOT/USD</option>
';
        $buffer .= $indent . '                                                        <option value="SOL/USD">SOL/USD</option>
';
        $buffer .= $indent . '                                                    </select>
';
        $buffer .= $indent . '                                                    <label class="form-label-outlined" for="market">Trading Pair</label>
';
        $buffer .= $indent . '                                                </div>
';
        $buffer .= $indent . '                                            </div>
';
        $buffer .= $indent . '                                        </div>
';
        $buffer .= $indent . '                                        <div class="col-md-6">
';
        $buffer .= $indent . '                                            <div class="form-group tradeNumber">
';
        $buffer .= $indent . '                                                <div class="form-control-wrap">
';
        $buffer .= $indent . '                                                    <input type="text" id="tradeNumber" name="tradeNumber" class="form-control form-control-lg form-control-outlined" required>
';
        $buffer .= $indent . '                                                    <label class="form-label-outlined" for="tradeNumber">Trade Number</label>
';
        $buffer .= $indent . '                                                </div>
';
        $buffer .= $indent . '                                            </div>
';
        $buffer .= $indent . '                                        </div>
';
        $buffer .= $indent . '                                        <div class="col-md-6">
';
        $buffer .= $indent . '                                            <div class="form-group">
';
        $buffer .= $indent . '                                                <div class="form-control-wrap">
';
        $buffer .= $indent . '                                                    <select id="winlossTrade" name="winlossTrade" class="form-select form-control form-control-lg" data-ui="lg" required>
';
        $buffer .= $indent . '                                                        <option value="win">Win</option>
';
        $buffer .= $indent . '                                                        <option value="loss">Loss</option>
';
        $buffer .= $indent . '                                                    </select>
';
        $buffer .= $indent . '                                                    <label class="form-label-outlined" for="winlossTrade">Winning or Losing Trade</label>
';
        $buffer .= $indent . '                                                </div>
';
        $buffer .= $indent . '                                            </div>
';
        $buffer .= $indent . '                                        </div>
';
        $buffer .= $indent . '                                        <div class="col-md-6">
';
        $buffer .= $indent . '                                            <div class="row g-3 align-center">
';
        $buffer .= $indent . '                                                <div class="col-lg-3">
';
        $buffer .= $indent . '                                                    <div class="form-group">
';
        $buffer .= $indent . '                                                        <label class="form-label">Screenshot: </label>
';
        $buffer .= $indent . '                                                    </div>
';
        $buffer .= $indent . '                                                </div>
';
        $buffer .= $indent . '                                                <div class="col-lg-9">
';
        $buffer .= $indent . '                                                    <div class="form-group">
';
        $buffer .= $indent . '                                                        <div class="form-control-wrap">
';
        $buffer .= $indent . '                                                            <div class="custom-file">
';
        $buffer .= $indent . '                                                                <input type="file" multiple class="custom-file-input" name="fileToUpload" id="fileToUpload">
';
        $buffer .= $indent . '                                                                <label class="custom-file-label" for="fileToUpload">Choose file</label>
';
        $buffer .= $indent . '                                                            </div>
';
        $buffer .= $indent . '                                                        </div>
';
        $buffer .= $indent . '                                                    </div>
';
        $buffer .= $indent . '                                                </div>
';
        $buffer .= $indent . '                                            </div>
';
        $buffer .= $indent . '                                        </div>
';
        $buffer .= $indent . '                                        <div class="col-md-6">
';
        $buffer .= $indent . '                                            <button type="submit" name="updateTrade" class="btn btn-primary">
';
        $buffer .= $indent . '                                                Add Trade
';
        $buffer .= $indent . '                                            </button>
';
        $buffer .= $indent . '                                        </div>
';
        $buffer .= $indent . '                                    </form>
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
        $buffer .= $indent . '<style>
';
        $buffer .= $indent . '.tb-member-action .d-md-inline a {
';
        $buffer .= $indent . '    font-size: 13px;
';
        $buffer .= $indent . '    margin-right: 10px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '</style>
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section3cfc8a442a7eb950c7ebd7abfd9c5814(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                                    <div class="form-group example-alert">
                                        <div class="alert alert-success alert-icon alert-dismissible">
                                            <em class="icon ni ni-check-circle"></em> Trades by account type have been inserted. <button class="close" data-dismiss="alert"></button>
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
                
                $buffer .= $indent . '                                    <div class="form-group example-alert">
';
                $buffer .= $indent . '                                        <div class="alert alert-success alert-icon alert-dismissible">
';
                $buffer .= $indent . '                                            <em class="icon ni ni-check-circle"></em> Trades by account type have been inserted. <button class="close" data-dismiss="alert"></button>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
