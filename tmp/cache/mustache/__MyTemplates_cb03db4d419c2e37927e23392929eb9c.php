<?php

class __MyTemplates_cb03db4d419c2e37927e23392929eb9c extends Mustache_Template
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
        $buffer .= $this->sectionB07642eaf6b21240f5bfce3e169ee402($context, $indent, $value);

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

    private function sectionB07642eaf6b21240f5bfce3e169ee402(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-content-wrap">
                    <div class="nk-block-head nk-block-head-lg">
                        <div class="nk-block-between-md g-4">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title fw-normal">Trades By Account Type</h2>
                                <div class="nk-block-des">
                                    <p> Below mentioned trade details will get reflected throughout the selected group members.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="preview-block">
                                    {{#insertedTrade}}
                                    <div class="form-group example-alert">
                                        <div class="alert alert-success alert-icon alert-dismissible">
                                            <em class="icon ni ni-check-circle"></em> Trades by account type have been inserted. <button class="close" data-dismiss="alert"></button>
                                        </div>
                                    </div>
                                    {{/insertedTrade}}
                                    <form method="post" action="/adminTradesByAccountType" enctype="multipart/form-data" class="row gy-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text" id="tradeDate" name="tradeDate" class="date-picker form-control form-control-lg form-control-outlined" autocomplete="off" data-date-format="dd-mm-yyyy" required>
                                                    <label class="form-label-outlined" for="tradeDate">Trade Date</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <select id="accountType" name="accountType" class="form-select form-control form-control-lg" data-ui="lg" required>
                                                        <option value="tc">60 Day Trial</option>
                                                        <option value="gd">Macro</option>
                                                        <option value="gd+">Advanced</option>
                                                        <option value="pt">Premium</option>
                                                    
                                                    </select>
                                                    <label class="form-label-outlined" for="accountType">Account Type</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <select id="tradeType" name="tradeType" class="form-select form-control form-control-lg" data-ui="lg" required>
                                                        <option value="long">Long</option>
                                                        <option value="short">Short</option>
                                                    </select>
                                                    <label class="form-label-outlined" for="tradeType">Trade Type</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group market">
                                                <div class="form-control-wrap">
                                                    <select id="market" name="market" class="form-select form-control form-control-lg" data-ui="lg" required>
                                                       
                                                        <option value="BTC/USD">BTC/USD</option>
                                                        <option value="LTC/USD">LTC/USD</option>
                                                        <option value="ETH/USD">ETH/USD</option>
                                                        <option value="XRP/USD">XRP/USD</option>
                                                        <option value="LINK/USD">LINK/USD</option>
                                                        <option value="BNB/USD">BNB/USD</option>
                                                        <option value="ADA/USD">ADA/USD</option>
                                                        <option value="DOT/USD">DOT/USD</option>
                                                        <option value="SOL/USD">SOL/USD</option>
                                                    </select>
                                                    <label class="form-label-outlined" for="market">Trading Pair</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group tradeNumber">
                                                <div class="form-control-wrap">
                                                    <input type="text" id="tradeNumber" name="tradeNumber" class="form-control form-control-lg form-control-outlined" required>
                                                    <label class="form-label-outlined" for="tradeNumber">Trade Number</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <select id="winlossTrade" name="winlossTrade" class="form-select form-control form-control-lg" data-ui="lg" required>
                                                        <option value="win">Win</option>
                                                        <option value="loss">Loss</option>
                                                    </select>
                                                    <label class="form-label-outlined" for="winlossTrade">Winning or Losing Trade</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row g-3 align-center">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-label">Screenshot: </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <div class="custom-file">
                                                                <input type="file" multiple class="custom-file-input" name="fileToUpload" id="fileToUpload">
                                                                <label class="custom-file-label" for="fileToUpload">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="submit" name="updateTrade" class="btn btn-primary">
                                                Add Trade
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.tb-member-action .d-md-inline a {
    font-size: 13px;
    margin-right: 10px;
}
</style>

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
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
