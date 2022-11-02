<?php

class __MyTemplates_186f2156416fcf4e25af179349260bbd extends Mustache_Template
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
        $buffer .= $this->sectionAc2985b8730b278f337f702b6db8dbac($context, $indent, $value);

        return $buffer;
    }

    private function section2ff84307df7ee577d9c6256370d10228(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                                                            <img src=';
                $value = $this->resolveValue($context->find('userPhoto'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF8581600f6bc31931ee4cf12d58b7d93(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <div class="user-card">
                                                    <div class="user-avatar xs bg-primary">
                                                        {{#hasPhoto}}
                                                            <img src={{userPhoto}}>
                                                        {{/hasPhoto}}
                                                        {{^hasPhoto}}
                                                            <span>{{userPhoto}}</span>
                                                        {{/hasPhoto}}
                                                    </div>
                                                    <div class="user-name">
                                                        <span class="lead-text">{{firstName}} &nbsp; {{lastName}}</span>
                                                        <span class="sub-text">{{email}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span>{{initialInvestment}}</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <span>{{currentBalance}}</span>
                                            </div>

                                            <div class="nk-tb-col tb-col-lg">
                                                <span>{{totalprofit}}</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span>{{accountType}}</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <span>{{dateCreated}}</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <span>{{agent}}</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <div class="d-none d-md-inline">
                                                    <a href="/adminUserDetails?userId={{id}}" class="link link-sm"><span>Edit</span></a>
                                                    <a href="#" id="{{id}}" class="removeUser link link-sm link-danger"><span>Remove</span></a>
                                                </div>
                                            </div>
                                        </div><!-- .nk-tb-item -->

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
                
                $buffer .= $indent . '                                        <div class="nk-tb-item">
';
                $buffer .= $indent . '                                            <div class="nk-tb-col">
';
                $buffer .= $indent . '                                                <div class="user-card">
';
                $buffer .= $indent . '                                                    <div class="user-avatar xs bg-primary">
';
                // 'hasPhoto' section
                $value = $context->find('hasPhoto');
                $buffer .= $this->section2ff84307df7ee577d9c6256370d10228($context, $indent, $value);
                // 'hasPhoto' inverted section
                $value = $context->find('hasPhoto');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                                            <span>';
                    $value = $this->resolveValue($context->find('userPhoto'), $context, $indent);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</span>
';
                }
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="user-name">
';
                $buffer .= $indent . '                                                        <span class="lead-text">';
                $value = $this->resolveValue($context->find('firstName'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' &nbsp; ';
                $value = $this->resolveValue($context->find('lastName'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                                        <span class="sub-text">';
                $value = $this->resolveValue($context->find('email'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="nk-tb-col tb-col-md">
';
                $buffer .= $indent . '                                                <span>';
                $value = $this->resolveValue($context->find('initialInvestment'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="nk-tb-col tb-col-sm">
';
                $buffer .= $indent . '                                                <span>';
                $value = $this->resolveValue($context->find('currentBalance'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                            <div class="nk-tb-col tb-col-lg">
';
                $buffer .= $indent . '                                                <span>';
                $value = $this->resolveValue($context->find('totalprofit'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="nk-tb-col tb-col-md">
';
                $buffer .= $indent . '                                                <span>';
                $value = $this->resolveValue($context->find('accountType'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="nk-tb-col tb-col-lg">
';
                $buffer .= $indent . '                                                <span>';
                $value = $this->resolveValue($context->find('dateCreated'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="nk-tb-col tb-col-lg">
';
                $buffer .= $indent . '                                                <span>';
                $value = $this->resolveValue($context->find('agent'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="nk-tb-col">
';
                $buffer .= $indent . '                                                <div class="d-none d-md-inline">
';
                $buffer .= $indent . '                                                    <a href="/adminUserDetails?userId=';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="link link-sm"><span>Edit</span></a>
';
                $buffer .= $indent . '                                                    <a href="#" id="';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="removeUser link link-sm link-danger"><span>Remove</span></a>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div><!-- .nk-tb-item -->
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6080b613ba8b1224de2c6ba0ae11f229(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                                        <li class="page-item"><a class="page-link" href="./agentusers?agent={{agent}}&page={{page}}">{{page}}</a></li>
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
                
                $buffer .= $indent . '                                        <li class="page-item"><a class="page-link" href="./agentusers?agent=';
                $value = $this->resolveValue($context->find('agent'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&page=';
                $value = $this->resolveValue($context->find('page'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('page'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAc2985b8730b278f337f702b6db8dbac(Mustache_Context $context, $indent, $value)
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
                                    <h2 class="nk-tle fw-normal">Client Accounts</h2>
                                    <div class="nk-block-des">
                                        <p>You can add and remove users as you want.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-block">
                            <div class="card-inner p-0">
                                <div class="nk-tb-list nk-tb-ulist is-compact">
                                    <div class="nk-tb-item nk-tb-head">
                                        <div class="nk-tb-col"><span class="sub-text">User</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Deposit</span></div>
                                        <div class="nk-tb-col tb-col-sm"><span class="sub-text">Balance</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Return</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Account Type</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Date Joined</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Agent</span></div>
                                        <div class="nk-tb-col"><span class="sub-text">Action</span></div>
                                    </div><!-- .nk-tb-item -->
                                    {{#users}}
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <div class="user-card">
                                                    <div class="user-avatar xs bg-primary">
                                                        {{#hasPhoto}}
                                                            <img src={{userPhoto}}>
                                                        {{/hasPhoto}}
                                                        {{^hasPhoto}}
                                                            <span>{{userPhoto}}</span>
                                                        {{/hasPhoto}}
                                                    </div>
                                                    <div class="user-name">
                                                        <span class="lead-text">{{firstName}} &nbsp; {{lastName}}</span>
                                                        <span class="sub-text">{{email}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span>{{initialInvestment}}</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <span>{{currentBalance}}</span>
                                            </div>

                                            <div class="nk-tb-col tb-col-lg">
                                                <span>{{totalprofit}}</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span>{{accountType}}</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <span>{{dateCreated}}</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <span>{{agent}}</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <div class="d-none d-md-inline">
                                                    <a href="/adminUserDetails?userId={{id}}" class="link link-sm"><span>Edit</span></a>
                                                    <a href="#" id="{{id}}" class="removeUser link link-sm link-danger"><span>Remove</span></a>
                                                </div>
                                            </div>
                                        </div><!-- .nk-tb-item -->

                                    {{/users}}
                                </div><!-- .nk-tb-list -->
                            </div><!-- .card-inner -->
                            <div class="card-inner">
                                <ul class="pagination justify-content-center justify-content-md-start">
                                    <li class="page-item"><a class="page-link" href="./agentusers?agent={{agent}}&page={{prev_page}}">Prev</a></li>
                                    {{#totalpages}}
                                        <li class="page-item"><a class="page-link" href="./agentusers?agent={{agent}}&page={{page}}">{{page}}</a></li>
                                    {{/totalpages}}
                                    <li class="page-item"><a class="page-link" href="./agentusers?agent={{agent}}&page={{next_page}}">Next</a></li>
                                </ul><!-- .pagination -->
                            </div><!-- .card-inner -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="modal fade" id="myModaldeleteuser" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-body">
                        <p style="text-align: center;">Do you want to remove this user?</p>
                    </div>
                    <div class="modal-footer" style="text-align: center;display: unset">
                        <a class="deleteuserurl btn btn-primary" type="button" href="">Delete</a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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

    <script>
        $(document).ready(function() {

            $(\'.removeUser\').on(\'click\', function(){
                $(".deleteuserurl").attr("href", "./adminUserDelete?userId="+ $(this).attr(\'id\'));
                $("#myModaldeleteuser").modal(\'show\');
                //     if (confirm(\'Do you want to remove this user?\')) {
                //         location.href = "/adminUserDelete?userId="+ $(this).attr(\'id\');
                //     }
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
                
                $buffer .= $indent . '    <div class="nk-content ">
';
                $buffer .= $indent . '        <div class="container-fluid">
';
                $buffer .= $indent . '            <div class="nk-content-inner">
';
                $buffer .= $indent . '                <div class="nk-content-body">
';
                $buffer .= $indent . '                    <div class="nk-content-wrap">
';
                $buffer .= $indent . '                        <div class="nk-block-head nk-block-head-lg">
';
                $buffer .= $indent . '                            <div class="nk-block-between-md g-4">
';
                $buffer .= $indent . '                                <div class="nk-block-head-content">
';
                $buffer .= $indent . '                                    <h2 class="nk-tle fw-normal">Client Accounts</h2>
';
                $buffer .= $indent . '                                    <div class="nk-block-des">
';
                $buffer .= $indent . '                                        <p>You can add and remove users as you want.</p>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="nk-block">
';
                $buffer .= $indent . '                            <div class="card-inner p-0">
';
                $buffer .= $indent . '                                <div class="nk-tb-list nk-tb-ulist is-compact">
';
                $buffer .= $indent . '                                    <div class="nk-tb-item nk-tb-head">
';
                $buffer .= $indent . '                                        <div class="nk-tb-col"><span class="sub-text">User</span></div>
';
                $buffer .= $indent . '                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Deposit</span></div>
';
                $buffer .= $indent . '                                        <div class="nk-tb-col tb-col-sm"><span class="sub-text">Balance</span></div>
';
                $buffer .= $indent . '                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Return</span></div>
';
                $buffer .= $indent . '                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Account Type</span></div>
';
                $buffer .= $indent . '                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Date Joined</span></div>
';
                $buffer .= $indent . '                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Agent</span></div>
';
                $buffer .= $indent . '                                        <div class="nk-tb-col"><span class="sub-text">Action</span></div>
';
                $buffer .= $indent . '                                    </div><!-- .nk-tb-item -->
';
                // 'users' section
                $value = $context->find('users');
                $buffer .= $this->sectionF8581600f6bc31931ee4cf12d58b7d93($context, $indent, $value);
                $buffer .= $indent . '                                </div><!-- .nk-tb-list -->
';
                $buffer .= $indent . '                            </div><!-- .card-inner -->
';
                $buffer .= $indent . '                            <div class="card-inner">
';
                $buffer .= $indent . '                                <ul class="pagination justify-content-center justify-content-md-start">
';
                $buffer .= $indent . '                                    <li class="page-item"><a class="page-link" href="./agentusers?agent=';
                $value = $this->resolveValue($context->find('agent'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&page=';
                $value = $this->resolveValue($context->find('prev_page'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">Prev</a></li>
';
                // 'totalpages' section
                $value = $context->find('totalpages');
                $buffer .= $this->section6080b613ba8b1224de2c6ba0ae11f229($context, $indent, $value);
                $buffer .= $indent . '                                    <li class="page-item"><a class="page-link" href="./agentusers?agent=';
                $value = $this->resolveValue($context->find('agent'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&page=';
                $value = $this->resolveValue($context->find('next_page'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">Next</a></li>
';
                $buffer .= $indent . '                                </ul><!-- .pagination -->
';
                $buffer .= $indent . '                            </div><!-- .card-inner -->
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
                $buffer .= $indent . '    <div class="container">
';
                $buffer .= $indent . '        <div class="modal fade" id="myModaldeleteuser" role="dialog">
';
                $buffer .= $indent . '            <div class="modal-dialog modal-sm">
';
                $buffer .= $indent . '                <div class="modal-content">
';
                $buffer .= $indent . '                    <div class="modal-body">
';
                $buffer .= $indent . '                        <p style="text-align: center;">Do you want to remove this user?</p>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="modal-footer" style="text-align: center;display: unset">
';
                $buffer .= $indent . '                        <a class="deleteuserurl btn btn-primary" type="button" href="">Delete</a>
';
                $buffer .= $indent . '                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <style>
';
                $buffer .= $indent . '        .tb-member-action .d-md-inline a {
';
                $buffer .= $indent . '            font-size: 13px;
';
                $buffer .= $indent . '            margin-right: 10px;
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    </style>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <script>
';
                $buffer .= $indent . '        $(document).ready(function() {
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            $(\'.removeUser\').on(\'click\', function(){
';
                $buffer .= $indent . '                $(".deleteuserurl").attr("href", "./adminUserDelete?userId="+ $(this).attr(\'id\'));
';
                $buffer .= $indent . '                $("#myModaldeleteuser").modal(\'show\');
';
                $buffer .= $indent . '                //     if (confirm(\'Do you want to remove this user?\')) {
';
                $buffer .= $indent . '                //         location.href = "/adminUserDelete?userId="+ $(this).attr(\'id\');
';
                $buffer .= $indent . '                //     }
';
                $buffer .= $indent . '            });
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '    </script>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
