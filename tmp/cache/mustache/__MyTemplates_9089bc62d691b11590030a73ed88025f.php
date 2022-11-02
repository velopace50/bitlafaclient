<?php

class __MyTemplates_9089bc62d691b11590030a73ed88025f extends Mustache_Template
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
        $buffer .= $this->section01c19963422b94f665586ff90df49d92($context, $indent, $value);

        return $buffer;
    }

    private function sectionE32eef1bdda32ae774a6a941d97ba954(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                                    <div class="form-group example-alert">
                                        <div class="alert alert-success alert-icon alert-dismissible">
                                            <em class="icon ni ni-check-circle"></em> Token price across all accounts have been update. <button class="close" data-dismiss="alert"></button>
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
                $buffer .= $indent . '                                            <em class="icon ni ni-check-circle"></em> Token price across all accounts have been update. <button class="close" data-dismiss="alert"></button>
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

    private function sectionC6f434a965b75eb1ba9420e4caae6478(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text"  id="tokenDate" value={{updated_at}} name="tokenDate" class="date-picker form-control form-control-lg form-control-outlined" autocomplete="off" data-date-format="dd-mm-yyyy" required>
                                                    <label class="form-label-outlined" for="tokenDate">Token Date</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <select id="tokenType" name="tokenType" class="form-select form-control form-control-lg" data-ui="lg" required>
                                                        <option value={{token_type}}>{{token_type}}</option>
                                                    </select>
                                                    <label class="form-label-outlined" for="tokenType">Token Type</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group tokenPrice">
                                                <div class="form-control-wrap">
                                                    <input type="text" min="0" id="tokenPrice" value={{token_price}} name="tokenPrice" class="form-control form-control-lg form-control-outlined" required>
                                                    <label class="form-label-outlined" for="tokenPrice">Token Price</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="submit" name="updateTrade" class="btn btn-primary">
                                                Update Token Price
                                            </button>
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
                
                $buffer .= $indent . '                                        <div class="col-md-6">
';
                $buffer .= $indent . '                                            <div class="form-group">
';
                $buffer .= $indent . '                                                <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                    <input type="text"  id="tokenDate" value=';
                $value = $this->resolveValue($context->find('updated_at'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' name="tokenDate" class="date-picker form-control form-control-lg form-control-outlined" autocomplete="off" data-date-format="dd-mm-yyyy" required>
';
                $buffer .= $indent . '                                                    <label class="form-label-outlined" for="tokenDate">Token Date</label>
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
                $buffer .= $indent . '                                                    <select id="tokenType" name="tokenType" class="form-select form-control form-control-lg" data-ui="lg" required>
';
                $buffer .= $indent . '                                                        <option value=';
                $value = $this->resolveValue($context->find('token_type'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('token_type'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</option>
';
                $buffer .= $indent . '                                                    </select>
';
                $buffer .= $indent . '                                                    <label class="form-label-outlined" for="tokenType">Token Type</label>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="col-md-6">
';
                $buffer .= $indent . '                                            <div class="form-group tokenPrice">
';
                $buffer .= $indent . '                                                <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                    <input type="text" min="0" id="tokenPrice" value=';
                $value = $this->resolveValue($context->find('token_price'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' name="tokenPrice" class="form-control form-control-lg form-control-outlined" required>
';
                $buffer .= $indent . '                                                    <label class="form-label-outlined" for="tokenPrice">Token Price</label>
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
                $buffer .= $indent . '                                                Update Token Price
';
                $buffer .= $indent . '                                            </button>
';
                $buffer .= $indent . '                                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section01c19963422b94f665586ff90df49d92(Mustache_Context $context, $indent, $value)
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
                                <h2 class="nk-block-title fw-normal">Setting Token Amount  &&  Token Price</h2>
                                <div class="nk-block-des">
                                    <p>You can edit token price across all accounts and edit token amounts on individual accounts as you want.</p>
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
                                            <em class="icon ni ni-check-circle"></em> Token price across all accounts have been update. <button class="close" data-dismiss="alert"></button>
                                        </div>
                                    </div>
                                    {{/insertedTrade}}
                                    <form method="post" action="/adminTokenByAllAccount" enctype="multipart/form-data" class="row gy-3">
                                        {{#tokens}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text"  id="tokenDate" value={{updated_at}} name="tokenDate" class="date-picker form-control form-control-lg form-control-outlined" autocomplete="off" data-date-format="dd-mm-yyyy" required>
                                                    <label class="form-label-outlined" for="tokenDate">Token Date</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <select id="tokenType" name="tokenType" class="form-select form-control form-control-lg" data-ui="lg" required>
                                                        <option value={{token_type}}>{{token_type}}</option>
                                                    </select>
                                                    <label class="form-label-outlined" for="tokenType">Token Type</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group tokenPrice">
                                                <div class="form-control-wrap">
                                                    <input type="text" min="0" id="tokenPrice" value={{token_price}} name="tokenPrice" class="form-control form-control-lg form-control-outlined" required>
                                                    <label class="form-label-outlined" for="tokenPrice">Token Price</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="submit" name="updateTrade" class="btn btn-primary">
                                                Update Token Price
                                            </button>
                                        </div>
                                        {{/tokens}}
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
                $buffer .= $indent . '                                <h2 class="nk-block-title fw-normal">Setting Token Amount  &&  Token Price</h2>
';
                $buffer .= $indent . '                                <div class="nk-block-des">
';
                $buffer .= $indent . '                                    <p>You can edit token price across all accounts and edit token amounts on individual accounts as you want.</p>
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
                $buffer .= $indent . '                            
';
                $buffer .= $indent . '                                <div class="preview-block">
';
                // 'insertedTrade' section
                $value = $context->find('insertedTrade');
                $buffer .= $this->sectionE32eef1bdda32ae774a6a941d97ba954($context, $indent, $value);
                $buffer .= $indent . '                                    <form method="post" action="/adminTokenByAllAccount" enctype="multipart/form-data" class="row gy-3">
';
                // 'tokens' section
                $value = $context->find('tokens');
                $buffer .= $this->sectionC6f434a965b75eb1ba9420e4caae6478($context, $indent, $value);
                $buffer .= $indent . '                                    </form>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                          </div>  
';
                $buffer .= $indent . '
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
