<?php

class __MyTemplates_40363d048565988d6bd0be7c3ddecfa5 extends Mustache_Template
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
        $buffer .= $this->sectionB9badb26cf1fb76483de160185f32666($context, $indent, $value);

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

    private function sectionE6080d22349a7dcb2bf644c3f8260ce8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                                                    <img src={{userPhoto}}>
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
                
                $buffer .= $indent . '                                                    <img src=';
                $value = $this->resolveValue($context->find('userPhoto'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5d6b401de1fca972fa78703286b2281e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                                    <tr class="tb-member-item">
                                        <td class="tb-member-info">
                                            <div class="user-card">
                                                <div class="user-avatar bg-primary">
                                                    {{#hasPhoto}}
                                                    <img src={{userPhoto}}>
                                                    {{/hasPhoto}}
                                                    {{^hasPhoto}}
                                                    <span>{{userPhoto}}</span>
                                                    {{/hasPhoto}}
                                                </div>
                                                <div class="user-info">
                                                    <span class="lead-text">{{firstName}} &nbsp; {{lastName}}</span>
                                                    <span class="sub-text">{{email}}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="tb-member-type tb-col-sm">
                                            <span>{{tokenName}}</span>
                                        </td>
                                        <td class="tb-member-role tb-col-md">
                                            <span>{{tokenAmount}}</span>
                                        </td>
                                        <td class="tb-member-action">
                                            <div class="d-none d-md-inline">
                                                <a href="/adminTokenByAllAccount?userId={{id}}" class="link link-sm"><span>Edit Trade</span></a>
                                            </div>
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
                
                $buffer .= $indent . '                                    <tr class="tb-member-item">
';
                $buffer .= $indent . '                                        <td class="tb-member-info">
';
                $buffer .= $indent . '                                            <div class="user-card">
';
                $buffer .= $indent . '                                                <div class="user-avatar bg-primary">
';
                // 'hasPhoto' section
                $value = $context->find('hasPhoto');
                $buffer .= $this->sectionE6080d22349a7dcb2bf644c3f8260ce8($context, $indent, $value);
                // 'hasPhoto' inverted section
                $value = $context->find('hasPhoto');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                                    <span>';
                    $value = $this->resolveValue($context->find('userPhoto'), $context, $indent);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</span>
';
                }
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                                <div class="user-info">
';
                $buffer .= $indent . '                                                    <span class="lead-text">';
                $value = $this->resolveValue($context->find('firstName'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' &nbsp; ';
                $value = $this->resolveValue($context->find('lastName'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                                    <span class="sub-text">';
                $value = $this->resolveValue($context->find('email'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </td>
';
                $buffer .= $indent . '                                        <td class="tb-member-type tb-col-sm">
';
                $buffer .= $indent . '                                            <span>';
                $value = $this->resolveValue($context->find('tokenName'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                        </td>
';
                $buffer .= $indent . '                                        <td class="tb-member-role tb-col-md">
';
                $buffer .= $indent . '                                            <span>';
                $value = $this->resolveValue($context->find('tokenAmount'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                        </td>
';
                $buffer .= $indent . '                                        <td class="tb-member-action">
';
                $buffer .= $indent . '                                            <div class="d-none d-md-inline">
';
                $buffer .= $indent . '                                                <a href="/adminTokenByAllAccount?userId=';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="link link-sm"><span>Edit Trade</span></a>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </td>
';
                $buffer .= $indent . '                                    </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9c77d2965ad579c8ebbca3567ba866b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                            <table class="table table-member">
                                <thead class="tb-member-head thead-light">
                                    <tr class="tb-member-item">
                                        <th class="tb-member-info">
                                            <span class="overline-title">User</span>
                                        </th>
                                        <th class="tb-member-type tb-col-sm">
                                            <span class="overline-title">Token Name</span>
                                        </th>
                                        <th class="tb-member-role tb-col-md">
                                            <span class="overline-title">Token Amount</span>
                                        </th>
                                        <th class="tb-member-action">
                                            <span class="overline-title">Action</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="tb-member-body">
                                    {{#users}}
                                    <tr class="tb-member-item">
                                        <td class="tb-member-info">
                                            <div class="user-card">
                                                <div class="user-avatar bg-primary">
                                                    {{#hasPhoto}}
                                                    <img src={{userPhoto}}>
                                                    {{/hasPhoto}}
                                                    {{^hasPhoto}}
                                                    <span>{{userPhoto}}</span>
                                                    {{/hasPhoto}}
                                                </div>
                                                <div class="user-info">
                                                    <span class="lead-text">{{firstName}} &nbsp; {{lastName}}</span>
                                                    <span class="sub-text">{{email}}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="tb-member-type tb-col-sm">
                                            <span>{{tokenName}}</span>
                                        </td>
                                        <td class="tb-member-role tb-col-md">
                                            <span>{{tokenAmount}}</span>
                                        </td>
                                        <td class="tb-member-action">
                                            <div class="d-none d-md-inline">
                                                <a href="/adminTokenByAllAccount?userId={{id}}" class="link link-sm"><span>Edit Trade</span></a>
                                            </div>
                                        </td>
                                    </tr>
                                    {{/users}}
                                    {{^users}}
                                    <tr class="tb-member-item">
                                        <td colspan=4 style="text-align: center">There is no user.</td>
                                    </tr>
                                    {{/users}}
                                </tbody>
                            </table>
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
                
                $buffer .= $indent . '                            <table class="table table-member">
';
                $buffer .= $indent . '                                <thead class="tb-member-head thead-light">
';
                $buffer .= $indent . '                                    <tr class="tb-member-item">
';
                $buffer .= $indent . '                                        <th class="tb-member-info">
';
                $buffer .= $indent . '                                            <span class="overline-title">User</span>
';
                $buffer .= $indent . '                                        </th>
';
                $buffer .= $indent . '                                        <th class="tb-member-type tb-col-sm">
';
                $buffer .= $indent . '                                            <span class="overline-title">Token Name</span>
';
                $buffer .= $indent . '                                        </th>
';
                $buffer .= $indent . '                                        <th class="tb-member-role tb-col-md">
';
                $buffer .= $indent . '                                            <span class="overline-title">Token Amount</span>
';
                $buffer .= $indent . '                                        </th>
';
                $buffer .= $indent . '                                        <th class="tb-member-action">
';
                $buffer .= $indent . '                                            <span class="overline-title">Action</span>
';
                $buffer .= $indent . '                                        </th>
';
                $buffer .= $indent . '                                    </tr>
';
                $buffer .= $indent . '                                </thead>
';
                $buffer .= $indent . '                                <tbody class="tb-member-body">
';
                // 'users' section
                $value = $context->find('users');
                $buffer .= $this->section5d6b401de1fca972fa78703286b2281e($context, $indent, $value);
                // 'users' inverted section
                $value = $context->find('users');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                    <tr class="tb-member-item">
';
                    $buffer .= $indent . '                                        <td colspan=4 style="text-align: center">There is no user.</td>
';
                    $buffer .= $indent . '                                    </tr>
';
                }
                $buffer .= $indent . '                                </tbody>
';
                $buffer .= $indent . '                            </table>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB5a61525910ff7961404ae2246758d52(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                            <div class="card-inner">
                                <div class="preview-block">
                                    <form method="post" action="/adminTokenByAllAccount" enctype="multipart/form-data" class="row gy-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <select id="tokenType" name="tokenType" class="form-select form-control form-control-lg" data-ui="lg" required>
                                                        <option value={{tokenName}}>{{tokenName}}</option>
                                                    </select>
                                                    <label class="form-label-outlined" for="tokenType">Token Type</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text" id="accountType" value="{{tokenAmount}}" name="accountType" class="form-control form-control-lg form-control-outlined">
                                                    <label class="form-label-outlined" for="accountType">Account Type</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="submit" name="updateTrade" class="btn btn-primary"
                                            value="Update Token Info">
                                        </div>
                                    </form>
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
                
                $buffer .= $indent . '                            <div class="card-inner">
';
                $buffer .= $indent . '                                <div class="preview-block">
';
                $buffer .= $indent . '                                    <form method="post" action="/adminTokenByAllAccount" enctype="multipart/form-data" class="row gy-3">
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
                $value = $this->resolveValue($context->find('tokenName'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('tokenName'), $context, $indent);
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
                $buffer .= $indent . '                                            <div class="form-group">
';
                $buffer .= $indent . '                                                <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                    <input type="text" id="accountType" value="';
                $value = $this->resolveValue($context->find('tokenAmount'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" name="accountType" class="form-control form-control-lg form-control-outlined">
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
                $buffer .= $indent . '                                            <input type="submit" name="updateTrade" class="btn btn-primary"
';
                $buffer .= $indent . '                                            value="Update Token Info">
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </form>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB9badb26cf1fb76483de160185f32666(Mustache_Context $context, $indent, $value)
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



                        
                        <div class="card card-bordered">
                            {{#isUserList}}
                            <table class="table table-member">
                                <thead class="tb-member-head thead-light">
                                    <tr class="tb-member-item">
                                        <th class="tb-member-info">
                                            <span class="overline-title">User</span>
                                        </th>
                                        <th class="tb-member-type tb-col-sm">
                                            <span class="overline-title">Token Name</span>
                                        </th>
                                        <th class="tb-member-role tb-col-md">
                                            <span class="overline-title">Token Amount</span>
                                        </th>
                                        <th class="tb-member-action">
                                            <span class="overline-title">Action</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="tb-member-body">
                                    {{#users}}
                                    <tr class="tb-member-item">
                                        <td class="tb-member-info">
                                            <div class="user-card">
                                                <div class="user-avatar bg-primary">
                                                    {{#hasPhoto}}
                                                    <img src={{userPhoto}}>
                                                    {{/hasPhoto}}
                                                    {{^hasPhoto}}
                                                    <span>{{userPhoto}}</span>
                                                    {{/hasPhoto}}
                                                </div>
                                                <div class="user-info">
                                                    <span class="lead-text">{{firstName}} &nbsp; {{lastName}}</span>
                                                    <span class="sub-text">{{email}}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="tb-member-type tb-col-sm">
                                            <span>{{tokenName}}</span>
                                        </td>
                                        <td class="tb-member-role tb-col-md">
                                            <span>{{tokenAmount}}</span>
                                        </td>
                                        <td class="tb-member-action">
                                            <div class="d-none d-md-inline">
                                                <a href="/adminTokenByAllAccount?userId={{id}}" class="link link-sm"><span>Edit Trade</span></a>
                                            </div>
                                        </td>
                                    </tr>
                                    {{/users}}
                                    {{^users}}
                                    <tr class="tb-member-item">
                                        <td colspan=4 style="text-align: center">There is no user.</td>
                                    </tr>
                                    {{/users}}
                                </tbody>
                            </table>
                            {{/isUserList}}

                           

                            {{#tokenInfo}}
                            <div class="card-inner">
                                <div class="preview-block">
                                    <form method="post" action="/adminTokenByAllAccount" enctype="multipart/form-data" class="row gy-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <select id="tokenType" name="tokenType" class="form-select form-control form-control-lg" data-ui="lg" required>
                                                        <option value={{tokenName}}>{{tokenName}}</option>
                                                    </select>
                                                    <label class="form-label-outlined" for="tokenType">Token Type</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text" id="accountType" value="{{tokenAmount}}" name="accountType" class="form-control form-control-lg form-control-outlined">
                                                    <label class="form-label-outlined" for="accountType">Account Type</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="submit" name="updateTrade" class="btn btn-primary"
                                            value="Update Token Info">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            {{/tokenInfo}}
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
                $buffer .= $indent . '
';
                $buffer .= $indent . '                        
';
                $buffer .= $indent . '                        <div class="card card-bordered">
';
                // 'isUserList' section
                $value = $context->find('isUserList');
                $buffer .= $this->section9c77d2965ad579c8ebbca3567ba866b7($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '                           
';
                $buffer .= $indent . '
';
                // 'tokenInfo' section
                $value = $context->find('tokenInfo');
                $buffer .= $this->sectionB5a61525910ff7961404ae2246758d52($context, $indent, $value);
                $buffer .= $indent . '                        </div>   
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
