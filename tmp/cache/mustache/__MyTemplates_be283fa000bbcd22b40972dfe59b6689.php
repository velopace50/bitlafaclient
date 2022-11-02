<?php

class __MyTemplates_be283fa000bbcd22b40972dfe59b6689 extends Mustache_Template
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
        $buffer .= $this->section5a9fc0b7089689066590d2961695e077($context, $indent, $value);

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

    private function section14baf1fe1386a166fa544d93ac799cb0(Mustache_Context $context, $indent, $value)
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
                                            <span>{{accountType}}</span>
                                        </td>
                                        <td class="tb-member-role tb-col-md">
                                            <span>{{dateCreated}}</span>
                                        </td>
                                        <td class="tb-member-action">
                                            <div class="d-none d-md-inline">
                                                <a href="/adminTradesByUser?userId={{id}}" class="link link-sm"><span>Edit Trade</span></a>
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
                $value = $this->resolveValue($context->find('accountType'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                        </td>
';
                $buffer .= $indent . '                                        <td class="tb-member-role tb-col-md">
';
                $buffer .= $indent . '                                            <span>';
                $value = $this->resolveValue($context->find('dateCreated'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                        </td>
';
                $buffer .= $indent . '                                        <td class="tb-member-action">
';
                $buffer .= $indent . '                                            <div class="d-none d-md-inline">
';
                $buffer .= $indent . '                                                <a href="/adminTradesByUser?userId=';
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

    private function sectionC07baf602c3066f9d1c62fbaa896e7db(Mustache_Context $context, $indent, $value)
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
                                            <span class="overline-title">Account Type</span>
                                        </th>
                                        <th class="tb-member-role tb-col-md">
                                            <span class="overline-title">Date Joined</span>
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
                                            <span>{{accountType}}</span>
                                        </td>
                                        <td class="tb-member-role tb-col-md">
                                            <span>{{dateCreated}}</span>
                                        </td>
                                        <td class="tb-member-action">
                                            <div class="d-none d-md-inline">
                                                <a href="/adminTradesByUser?userId={{id}}" class="link link-sm"><span>Edit Trade</span></a>
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
                $buffer .= $indent . '                                            <span class="overline-title">Account Type</span>
';
                $buffer .= $indent . '                                        </th>
';
                $buffer .= $indent . '                                        <th class="tb-member-role tb-col-md">
';
                $buffer .= $indent . '                                            <span class="overline-title">Date Joined</span>
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
                $buffer .= $this->section14baf1fe1386a166fa544d93ac799cb0($context, $indent, $value);
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

    private function section7ccf3b0d0ba2caa18a0e95013d06a768(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                                    <tr class="tb-member-item">
                                        <td class="tb-member-info">
                                            <span>{{tradeDate}}</span>
                                        </td>
                                        <td class="tb-member-type tb-col-sm">
                                            <span>{{tradeType}}</span>
                                        </td>
                                        <td class="tb-member-role tb-col-md">
                                            <span>{{market}}</span>
                                        </td>
                                        <td class="tb-member-role tb-col-md">
                                            <span>{{profit}}</span>
                                        </td>
                                        <td class="tb-member-role tb-col-md">
                                            <span>{{currentBalance}}</span>
                                        </td>
                                        <td class="tb-member-action">
                                            <div class="d-none d-md-inline">
                                                <a href="/adminTradesByUser?id={{id}}&userId={{userId}}" class="link link-sm"><span>View Trade</span></a>
                                                <a href="/adminTradesByUser?id={{id}}&userId={{userId}}&delete=true" class="link link-sm link-danger"><span>Delete Trade</span></a>
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
                $buffer .= $indent . '                                            <span>';
                $value = $this->resolveValue($context->find('tradeDate'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                        </td>
';
                $buffer .= $indent . '                                        <td class="tb-member-type tb-col-sm">
';
                $buffer .= $indent . '                                            <span>';
                $value = $this->resolveValue($context->find('tradeType'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                        </td>
';
                $buffer .= $indent . '                                        <td class="tb-member-role tb-col-md">
';
                $buffer .= $indent . '                                            <span>';
                $value = $this->resolveValue($context->find('market'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                        </td>
';
                $buffer .= $indent . '                                        <td class="tb-member-role tb-col-md">
';
                $buffer .= $indent . '                                            <span>';
                $value = $this->resolveValue($context->find('profit'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                        </td>
';
                $buffer .= $indent . '                                        <td class="tb-member-role tb-col-md">
';
                $buffer .= $indent . '                                            <span>';
                $value = $this->resolveValue($context->find('currentBalance'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                        </td>
';
                $buffer .= $indent . '                                        <td class="tb-member-action">
';
                $buffer .= $indent . '                                            <div class="d-none d-md-inline">
';
                $buffer .= $indent . '                                                <a href="/adminTradesByUser?id=';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&userId=';
                $value = $this->resolveValue($context->find('userId'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="link link-sm"><span>View Trade</span></a>
';
                $buffer .= $indent . '                                                <a href="/adminTradesByUser?id=';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&userId=';
                $value = $this->resolveValue($context->find('userId'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&delete=true" class="link link-sm link-danger"><span>Delete Trade</span></a>
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

    private function section16534305160c07fb5a9b3c9cc0f5d856(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                            <table class="table table-member">
                                <thead class="tb-member-head thead-light">
                                    <tr class="tb-member-item">
                                        <th class="tb-member-info">
                                            <span class="overline-title">Trade Date</span>
                                        </th>
                                        <th class="tb-member-type tb-col-sm">
                                            <span class="overline-title">Trade Type</span>
                                        </th>
                                        <th class="tb-member-role tb-col-md">
                                            <span class="overline-title">Market</span>
                                        </th>
                                        <th class="tb-member-role tb-col-md">
                                            <span class="overline-title">Profit</span>
                                        </th>
                                        <th class="tb-member-role tb-col-md">
                                            <span class="overline-title">Total Balance</span>
                                        </th>
                                        <th class="tb-member-action">
                                            <span class="overline-title">Action</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="tb-member-body">
                                    {{#trades}}
                                    <tr class="tb-member-item">
                                        <td class="tb-member-info">
                                            <span>{{tradeDate}}</span>
                                        </td>
                                        <td class="tb-member-type tb-col-sm">
                                            <span>{{tradeType}}</span>
                                        </td>
                                        <td class="tb-member-role tb-col-md">
                                            <span>{{market}}</span>
                                        </td>
                                        <td class="tb-member-role tb-col-md">
                                            <span>{{profit}}</span>
                                        </td>
                                        <td class="tb-member-role tb-col-md">
                                            <span>{{currentBalance}}</span>
                                        </td>
                                        <td class="tb-member-action">
                                            <div class="d-none d-md-inline">
                                                <a href="/adminTradesByUser?id={{id}}&userId={{userId}}" class="link link-sm"><span>View Trade</span></a>
                                                <a href="/adminTradesByUser?id={{id}}&userId={{userId}}&delete=true" class="link link-sm link-danger"><span>Delete Trade</span></a>
                                            </div>
                                        </td>
                                    </tr>
                                    {{/trades}}
                                    {{^trades}}
                                    <tr class="tb-member-item">
                                        <td colspan=6 style="text-align: center">There is no trade for this user.</td>
                                    </tr>
                                    {{/trades}}
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
                $buffer .= $indent . '                                            <span class="overline-title">Trade Date</span>
';
                $buffer .= $indent . '                                        </th>
';
                $buffer .= $indent . '                                        <th class="tb-member-type tb-col-sm">
';
                $buffer .= $indent . '                                            <span class="overline-title">Trade Type</span>
';
                $buffer .= $indent . '                                        </th>
';
                $buffer .= $indent . '                                        <th class="tb-member-role tb-col-md">
';
                $buffer .= $indent . '                                            <span class="overline-title">Market</span>
';
                $buffer .= $indent . '                                        </th>
';
                $buffer .= $indent . '                                        <th class="tb-member-role tb-col-md">
';
                $buffer .= $indent . '                                            <span class="overline-title">Profit</span>
';
                $buffer .= $indent . '                                        </th>
';
                $buffer .= $indent . '                                        <th class="tb-member-role tb-col-md">
';
                $buffer .= $indent . '                                            <span class="overline-title">Total Balance</span>
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
                // 'trades' section
                $value = $context->find('trades');
                $buffer .= $this->section7ccf3b0d0ba2caa18a0e95013d06a768($context, $indent, $value);
                // 'trades' inverted section
                $value = $context->find('trades');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                    <tr class="tb-member-item">
';
                    $buffer .= $indent . '                                        <td colspan=6 style="text-align: center">There is no trade for this user.</td>
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

    private function section8a4fc161a42df6194b59ba846ae9eed0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '<input type="hidden" name="id" value="{{id}}">';
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
                
                $buffer .= '<input type="hidden" name="id" value="';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE9905a6297e26ef294e4bfe04e3b0ee9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '{{tradeDate}}';
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
                
                $value = $this->resolveValue($context->find('tradeDate'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD1f72f8d9029449f722a4900f9c40fa5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '{{tradeType}}';
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
                
                $value = $this->resolveValue($context->find('tradeType'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA97de315d678fb17c10756cae83840b2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '{{tradeNumber}}';
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
                
                $value = $this->resolveValue($context->find('tradeNumber'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB758274be5ece8cea35deec2d91ce8b6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '{{market}}';
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
                
                $value = $this->resolveValue($context->find('market'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9878a04ea2c2fc22d52ca41c64543d6f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '{{profit}}';
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
                
                $value = $this->resolveValue($context->find('profit'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section041974716e40eb23b87fd23daf4995fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '{{winlossTrade}}';
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
                
                $value = $this->resolveValue($context->find('winlossTrade'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section30663b56a57af94ef1ec7e6fcbe7171e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '{{currentBalance}}';
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
                
                $value = $this->resolveValue($context->find('currentBalance'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a2d70ec8bc6beb2561c7b254b61ba0f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = 'Update Trade';
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
                
                $buffer .= 'Update Trade';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6ac473c81e92b004c2143eb4606bcbbd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '<a href="/adminTradesByUser?delete=true&id={{id}}&userId={{tradeUserId}}" class="btn btn-danger"> Delete Trade Value </a>';
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
                
                $buffer .= '<a href="/adminTradesByUser?delete=true&id=';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&userId=';
                $value = $this->resolveValue($context->find('tradeUserId'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn btn-danger"> Delete Trade Value </a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6782614f67e377ffdde42c5f4d8d24af(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                            <div class="card-inner">
                                <div class="preview-block">
                                    <form method="post" action="/adminTradesByUser" enctype="multipart/form-data" class="row gy-3">
                                        {{#trade}}<input type="hidden" name="id" value="{{id}}">{{/trade}}
                                        <input type="hidden" name="userId" value="{{tradeUserId}}">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text" id="tradeDate" name="tradeDate" value="{{#trade}}{{tradeDate}}{{/trade}}" class="date-picker form-control form-control-lg form-control-outlined" data-date-format="dd-mm-yyyy" autocomplete="off" required>
                                                    <label class="form-label-outlined" for="tradeDate">Trade Date</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text" id="accountType" value="{{accountType}}" name="accountType" class="form-control form-control-lg form-control-outlined" readonly>
                                                    <label class="form-label-outlined" for="accountType">Account Type</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="hidden" id="tradeType1" value="{{#trade}}{{tradeType}}{{/trade}}">
                                                    <select id="tradeType" name="tradeType" class="form-select form-control form-control-lg" data-ui="lg" required>
                                                        <option value="long">Long</option>
                                                        <option value="short">Short</option>
                                                        <option value="deposit">Deposit</option>
                                                        <option value="withdrawal">Withdrawal</option>
                                                        <option value="bonusDeposit">Bonus Deposits</option>
                                                    </select>
                                                    <label class="form-label-outlined" for="tradeType">Trade Type</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group tradeNumber">
                                                <div class="form-control-wrap"> 
                                                    <input type="hidden" id="lastTradeNumber" value="{{lastTradeNumber}}">
                                                    <input type="text" id="tradeNumber" value="{{#trade}}{{tradeNumber}}{{/trade}}" name="tradeNumber" class="form-control form-control-lg form-control-outlined" readonly>
                                                    <label class="form-label-outlined" for="tradeNumber">Trade Number</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group market">
                                                <div class="form-control-wrap">
                                                    <input type="hidden" id="market1" value="{{#trade}}{{market}}{{/trade}}">
                                                    <select id="market" name="market" class="form-select form-control form-control-lg" data-ui="lg" required>
                                                        
                                                        <option value="BTC/USD">BTC/USD</option>
                                                        <option value="LTC/USD">LTC/USD</option>
                                                        <option value="ETH/USD">ETH/USD</option>
                                                        <option value="XRP/USD">XRP/USD</option>
                                                        <option value="LINK/USD">LINK/USD</option>
                                                        <option value="BNB/USD">BNB/USD</option>
                                                    </select>
                                                    <label class="form-label-outlined" for="market">Trading Pair</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap profit">
                                                    <input type="text" id="profit" value="{{#trade}}{{profit}}{{/trade}}" name="profit" class="form-control form-control-lg form-control-outlined"  autocomplete="off" required>
                                                    <label class="form-label-outlined" for="profit">Profit</label>
                                                </div>
                                                <div class="form-control-wrap amount">
                                                    <input type="text" id="amount" name="amount" class="form-control form-control-lg form-control-outlined"  autocomplete="off" required>
                                                    <label class="form-label-outlined" for="amount">Amount</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group winlossTrade">
                                                <div class="form-control-wrap">
                                                    <input type="hidden" id="winlossTrade1" value="{{#trade}}{{winlossTrade}}{{/trade}}">
                                                    <select id="winlossTrade" name="winlossTrade" class="form-select form-control form-control-lg" data-ui="lg" required>
                                                        <option value="win">Win</option>
                                                        <option value="loss">Loss</option>
                                                        <option value="deposit">Deposit</option>
                                                        <option value="withdrawal">Withdrawal</option>
                                                        <option value="bonusDeposit">Bonus Deposit</option>
                                                    </select>
                                                    <label class="form-label-outlined" for="winlossTrade">Winning or Losing Trade</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group totalBalance">
                                                <div class="form-control-wrap">
                                                    <input type="hidden" id="totalBalance" value="{{totalBalance}}">
                                                    <input type="text" id="currentBalance" value="{{#trade}}{{currentBalance}}{{/trade}}" name="currentBalance" class="form-control form-control-lg form-control-outlined" readonly>
                                                    <label class="form-label-outlined" for="currentBalance">Total Balance</label>
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
                                            <input type="submit" name="updateTrade" class="btn btn-primary"
                                            value="{{#trade}}Update Trade{{/trade}}{{^trade}}Add Trade{{/trade}}">

                                            {{#trade}}<a href="/adminTradesByUser?delete=true&id={{id}}&userId={{tradeUserId}}" class="btn btn-danger"> Delete Trade Value </a>{{/trade}}
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
                $buffer .= $indent . '                                    <form method="post" action="/adminTradesByUser" enctype="multipart/form-data" class="row gy-3">
';
                $buffer .= $indent . '                                        ';
                // 'trade' section
                $value = $context->find('trade');
                $buffer .= $this->section8a4fc161a42df6194b59ba846ae9eed0($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                        <input type="hidden" name="userId" value="';
                $value = $this->resolveValue($context->find('tradeUserId'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                        <div class="col-md-6">
';
                $buffer .= $indent . '                                            <div class="form-group">
';
                $buffer .= $indent . '                                                <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                    <input type="text" id="tradeDate" name="tradeDate" value="';
                // 'trade' section
                $value = $context->find('trade');
                $buffer .= $this->sectionE9905a6297e26ef294e4bfe04e3b0ee9($context, $indent, $value);
                $buffer .= '" class="date-picker form-control form-control-lg form-control-outlined" data-date-format="dd-mm-yyyy" autocomplete="off" required>
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
                $buffer .= $indent . '                                                    <input type="text" id="accountType" value="';
                $value = $this->resolveValue($context->find('accountType'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" name="accountType" class="form-control form-control-lg form-control-outlined" readonly>
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
                $buffer .= $indent . '                                                    <input type="hidden" id="tradeType1" value="';
                // 'trade' section
                $value = $context->find('trade');
                $buffer .= $this->sectionD1f72f8d9029449f722a4900f9c40fa5($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                    <select id="tradeType" name="tradeType" class="form-select form-control form-control-lg" data-ui="lg" required>
';
                $buffer .= $indent . '                                                        <option value="long">Long</option>
';
                $buffer .= $indent . '                                                        <option value="short">Short</option>
';
                $buffer .= $indent . '                                                        <option value="deposit">Deposit</option>
';
                $buffer .= $indent . '                                                        <option value="withdrawal">Withdrawal</option>
';
                $buffer .= $indent . '                                                        <option value="bonusDeposit">Bonus Deposits</option>
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
                $buffer .= $indent . '                                            <div class="form-group tradeNumber">
';
                $buffer .= $indent . '                                                <div class="form-control-wrap"> 
';
                $buffer .= $indent . '                                                    <input type="hidden" id="lastTradeNumber" value="';
                $value = $this->resolveValue($context->find('lastTradeNumber'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                    <input type="text" id="tradeNumber" value="';
                // 'trade' section
                $value = $context->find('trade');
                $buffer .= $this->sectionA97de315d678fb17c10756cae83840b2($context, $indent, $value);
                $buffer .= '" name="tradeNumber" class="form-control form-control-lg form-control-outlined" readonly>
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
                $buffer .= $indent . '                                            <div class="form-group market">
';
                $buffer .= $indent . '                                                <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                    <input type="hidden" id="market1" value="';
                // 'trade' section
                $value = $context->find('trade');
                $buffer .= $this->sectionB758274be5ece8cea35deec2d91ce8b6($context, $indent, $value);
                $buffer .= '">
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
                $buffer .= $indent . '                                            <div class="form-group">
';
                $buffer .= $indent . '                                                <div class="form-control-wrap profit">
';
                $buffer .= $indent . '                                                    <input type="text" id="profit" value="';
                // 'trade' section
                $value = $context->find('trade');
                $buffer .= $this->section9878a04ea2c2fc22d52ca41c64543d6f($context, $indent, $value);
                $buffer .= '" name="profit" class="form-control form-control-lg form-control-outlined"  autocomplete="off" required>
';
                $buffer .= $indent . '                                                    <label class="form-label-outlined" for="profit">Profit</label>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                                <div class="form-control-wrap amount">
';
                $buffer .= $indent . '                                                    <input type="text" id="amount" name="amount" class="form-control form-control-lg form-control-outlined"  autocomplete="off" required>
';
                $buffer .= $indent . '                                                    <label class="form-label-outlined" for="amount">Amount</label>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="col-md-6">
';
                $buffer .= $indent . '                                            <div class="form-group winlossTrade">
';
                $buffer .= $indent . '                                                <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                    <input type="hidden" id="winlossTrade1" value="';
                // 'trade' section
                $value = $context->find('trade');
                $buffer .= $this->section041974716e40eb23b87fd23daf4995fb($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                    <select id="winlossTrade" name="winlossTrade" class="form-select form-control form-control-lg" data-ui="lg" required>
';
                $buffer .= $indent . '                                                        <option value="win">Win</option>
';
                $buffer .= $indent . '                                                        <option value="loss">Loss</option>
';
                $buffer .= $indent . '                                                        <option value="deposit">Deposit</option>
';
                $buffer .= $indent . '                                                        <option value="withdrawal">Withdrawal</option>
';
                $buffer .= $indent . '                                                        <option value="bonusDeposit">Bonus Deposit</option>
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
                $buffer .= $indent . '                                            <div class="form-group totalBalance">
';
                $buffer .= $indent . '                                                <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                    <input type="hidden" id="totalBalance" value="';
                $value = $this->resolveValue($context->find('totalBalance'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                    <input type="text" id="currentBalance" value="';
                // 'trade' section
                $value = $context->find('trade');
                $buffer .= $this->section30663b56a57af94ef1ec7e6fcbe7171e($context, $indent, $value);
                $buffer .= '" name="currentBalance" class="form-control form-control-lg form-control-outlined" readonly>
';
                $buffer .= $indent . '                                                    <label class="form-label-outlined" for="currentBalance">Total Balance</label>
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
                $buffer .= $indent . '                                            <input type="submit" name="updateTrade" class="btn btn-primary"
';
                $buffer .= $indent . '                                            value="';
                // 'trade' section
                $value = $context->find('trade');
                $buffer .= $this->section8a2d70ec8bc6beb2561c7b254b61ba0f($context, $indent, $value);
                // 'trade' inverted section
                $value = $context->find('trade');
                if (empty($value)) {
                    
                    $buffer .= 'Add Trade';
                }
                $buffer .= '">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                            ';
                // 'trade' section
                $value = $context->find('trade');
                $buffer .= $this->section6ac473c81e92b004c2143eb4606bcbbd($context, $indent, $value);
                $buffer .= '
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

    private function section5a9fc0b7089689066590d2961695e077(Mustache_Context $context, $indent, $value)
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
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text" id="tokenDate" name="tokenDate" class="date-picker form-control form-control-lg form-control-outlined" autocomplete="off" data-date-format="dd-mm-yyyy" required>
                                                    <label class="form-label-outlined" for="tokenDate">Token Date</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <select id="tokenType" name="tokenType" class="form-select form-control form-control-lg" data-ui="lg" required>
                                                        <option value="bl">BITL</option>
                                                    </select>
                                                    <label class="form-label-outlined" for="tokenType">Token Type</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group tokenPrice">
                                                <div class="form-control-wrap">
                                                    <input type="number" min="0" id="tokenPrice" name="tokenPrice" class="form-control form-control-lg form-control-outlined" required>
                                                    <label class="form-label-outlined" for="tokenPrice">Token Price</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="submit" name="updateTrade" class="btn btn-primary">
                                                Update Token Price
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <br/>
                            <br/>
                            {{#isUserList}}
                            <table class="table table-member">
                                <thead class="tb-member-head thead-light">
                                    <tr class="tb-member-item">
                                        <th class="tb-member-info">
                                            <span class="overline-title">User</span>
                                        </th>
                                        <th class="tb-member-type tb-col-sm">
                                            <span class="overline-title">Account Type</span>
                                        </th>
                                        <th class="tb-member-role tb-col-md">
                                            <span class="overline-title">Date Joined</span>
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
                                            <span>{{accountType}}</span>
                                        </td>
                                        <td class="tb-member-role tb-col-md">
                                            <span>{{dateCreated}}</span>
                                        </td>
                                        <td class="tb-member-action">
                                            <div class="d-none d-md-inline">
                                                <a href="/adminTradesByUser?userId={{id}}" class="link link-sm"><span>Edit Trade</span></a>
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

                            {{#isTradeList}}
                            <table class="table table-member">
                                <thead class="tb-member-head thead-light">
                                    <tr class="tb-member-item">
                                        <th class="tb-member-info">
                                            <span class="overline-title">Trade Date</span>
                                        </th>
                                        <th class="tb-member-type tb-col-sm">
                                            <span class="overline-title">Trade Type</span>
                                        </th>
                                        <th class="tb-member-role tb-col-md">
                                            <span class="overline-title">Market</span>
                                        </th>
                                        <th class="tb-member-role tb-col-md">
                                            <span class="overline-title">Profit</span>
                                        </th>
                                        <th class="tb-member-role tb-col-md">
                                            <span class="overline-title">Total Balance</span>
                                        </th>
                                        <th class="tb-member-action">
                                            <span class="overline-title">Action</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="tb-member-body">
                                    {{#trades}}
                                    <tr class="tb-member-item">
                                        <td class="tb-member-info">
                                            <span>{{tradeDate}}</span>
                                        </td>
                                        <td class="tb-member-type tb-col-sm">
                                            <span>{{tradeType}}</span>
                                        </td>
                                        <td class="tb-member-role tb-col-md">
                                            <span>{{market}}</span>
                                        </td>
                                        <td class="tb-member-role tb-col-md">
                                            <span>{{profit}}</span>
                                        </td>
                                        <td class="tb-member-role tb-col-md">
                                            <span>{{currentBalance}}</span>
                                        </td>
                                        <td class="tb-member-action">
                                            <div class="d-none d-md-inline">
                                                <a href="/adminTradesByUser?id={{id}}&userId={{userId}}" class="link link-sm"><span>View Trade</span></a>
                                                <a href="/adminTradesByUser?id={{id}}&userId={{userId}}&delete=true" class="link link-sm link-danger"><span>Delete Trade</span></a>
                                            </div>
                                        </td>
                                    </tr>
                                    {{/trades}}
                                    {{^trades}}
                                    <tr class="tb-member-item">
                                        <td colspan=6 style="text-align: center">There is no trade for this user.</td>
                                    </tr>
                                    {{/trades}}
                                </tbody>
                            </table>
                            {{/isTradeList}}

                            {{#isTrade}}
                            <div class="card-inner">
                                <div class="preview-block">
                                    <form method="post" action="/adminTradesByUser" enctype="multipart/form-data" class="row gy-3">
                                        {{#trade}}<input type="hidden" name="id" value="{{id}}">{{/trade}}
                                        <input type="hidden" name="userId" value="{{tradeUserId}}">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text" id="tradeDate" name="tradeDate" value="{{#trade}}{{tradeDate}}{{/trade}}" class="date-picker form-control form-control-lg form-control-outlined" data-date-format="dd-mm-yyyy" autocomplete="off" required>
                                                    <label class="form-label-outlined" for="tradeDate">Trade Date</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text" id="accountType" value="{{accountType}}" name="accountType" class="form-control form-control-lg form-control-outlined" readonly>
                                                    <label class="form-label-outlined" for="accountType">Account Type</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="hidden" id="tradeType1" value="{{#trade}}{{tradeType}}{{/trade}}">
                                                    <select id="tradeType" name="tradeType" class="form-select form-control form-control-lg" data-ui="lg" required>
                                                        <option value="long">Long</option>
                                                        <option value="short">Short</option>
                                                        <option value="deposit">Deposit</option>
                                                        <option value="withdrawal">Withdrawal</option>
                                                        <option value="bonusDeposit">Bonus Deposits</option>
                                                    </select>
                                                    <label class="form-label-outlined" for="tradeType">Trade Type</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group tradeNumber">
                                                <div class="form-control-wrap"> 
                                                    <input type="hidden" id="lastTradeNumber" value="{{lastTradeNumber}}">
                                                    <input type="text" id="tradeNumber" value="{{#trade}}{{tradeNumber}}{{/trade}}" name="tradeNumber" class="form-control form-control-lg form-control-outlined" readonly>
                                                    <label class="form-label-outlined" for="tradeNumber">Trade Number</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group market">
                                                <div class="form-control-wrap">
                                                    <input type="hidden" id="market1" value="{{#trade}}{{market}}{{/trade}}">
                                                    <select id="market" name="market" class="form-select form-control form-control-lg" data-ui="lg" required>
                                                        
                                                        <option value="BTC/USD">BTC/USD</option>
                                                        <option value="LTC/USD">LTC/USD</option>
                                                        <option value="ETH/USD">ETH/USD</option>
                                                        <option value="XRP/USD">XRP/USD</option>
                                                        <option value="LINK/USD">LINK/USD</option>
                                                        <option value="BNB/USD">BNB/USD</option>
                                                    </select>
                                                    <label class="form-label-outlined" for="market">Trading Pair</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap profit">
                                                    <input type="text" id="profit" value="{{#trade}}{{profit}}{{/trade}}" name="profit" class="form-control form-control-lg form-control-outlined"  autocomplete="off" required>
                                                    <label class="form-label-outlined" for="profit">Profit</label>
                                                </div>
                                                <div class="form-control-wrap amount">
                                                    <input type="text" id="amount" name="amount" class="form-control form-control-lg form-control-outlined"  autocomplete="off" required>
                                                    <label class="form-label-outlined" for="amount">Amount</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group winlossTrade">
                                                <div class="form-control-wrap">
                                                    <input type="hidden" id="winlossTrade1" value="{{#trade}}{{winlossTrade}}{{/trade}}">
                                                    <select id="winlossTrade" name="winlossTrade" class="form-select form-control form-control-lg" data-ui="lg" required>
                                                        <option value="win">Win</option>
                                                        <option value="loss">Loss</option>
                                                        <option value="deposit">Deposit</option>
                                                        <option value="withdrawal">Withdrawal</option>
                                                        <option value="bonusDeposit">Bonus Deposit</option>
                                                    </select>
                                                    <label class="form-label-outlined" for="winlossTrade">Winning or Losing Trade</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group totalBalance">
                                                <div class="form-control-wrap">
                                                    <input type="hidden" id="totalBalance" value="{{totalBalance}}">
                                                    <input type="text" id="currentBalance" value="{{#trade}}{{currentBalance}}{{/trade}}" name="currentBalance" class="form-control form-control-lg form-control-outlined" readonly>
                                                    <label class="form-label-outlined" for="currentBalance">Total Balance</label>
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
                                            <input type="submit" name="updateTrade" class="btn btn-primary"
                                            value="{{#trade}}Update Trade{{/trade}}{{^trade}}Add Trade{{/trade}}">

                                            {{#trade}}<a href="/adminTradesByUser?delete=true&id={{id}}&userId={{tradeUserId}}" class="btn btn-danger"> Delete Trade Value </a>{{/trade}}
                                        </div>
                                    </form>
                                </div>
                            </div>
                            {{/isTrade}}
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
                $buffer .= $indent . '                                <div class="preview-block">
';
                // 'insertedTrade' section
                $value = $context->find('insertedTrade');
                $buffer .= $this->sectionE32eef1bdda32ae774a6a941d97ba954($context, $indent, $value);
                $buffer .= $indent . '                                    <form method="post" action="/adminTokenByAllAccount" enctype="multipart/form-data" class="row gy-3">
';
                $buffer .= $indent . '                                        <div class="col-md-6">
';
                $buffer .= $indent . '                                            <div class="form-group">
';
                $buffer .= $indent . '                                                <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                    <input type="text" id="tokenDate" name="tokenDate" class="date-picker form-control form-control-lg form-control-outlined" autocomplete="off" data-date-format="dd-mm-yyyy" required>
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
                $buffer .= $indent . '                                                        <option value="bl">BITL</option>
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
                $buffer .= $indent . '                                                    <input type="number" min="0" id="tokenPrice" name="tokenPrice" class="form-control form-control-lg form-control-outlined" required>
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
                $buffer .= $indent . '                                    </form>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                            <br/>
';
                $buffer .= $indent . '                            <br/>
';
                // 'isUserList' section
                $value = $context->find('isUserList');
                $buffer .= $this->sectionC07baf602c3066f9d1c62fbaa896e7db($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'isTradeList' section
                $value = $context->find('isTradeList');
                $buffer .= $this->section16534305160c07fb5a9b3c9cc0f5d856($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'isTrade' section
                $value = $context->find('isTrade');
                $buffer .= $this->section6782614f67e377ffdde42c5f4d8d24af($context, $indent, $value);
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
