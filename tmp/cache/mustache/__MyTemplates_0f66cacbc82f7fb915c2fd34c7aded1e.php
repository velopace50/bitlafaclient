<?php

class __MyTemplates_0f66cacbc82f7fb915c2fd34c7aded1e extends Mustache_Template
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
        $buffer .= $this->sectionC279add4aebb11073ae07ed7bb4f8c54($context, $indent, $value);

        return $buffer;
    }

    private function sectionD676c156b81fee77d31e75f5a1395c92(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                                                <img src=';
                $value = $this->resolveValue($context->find('userPhoto'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDc66a69cde5c5cbf31317ee0593581c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                                <div class="nk-ibx-item">
                                    <a href="#" id="{{id}}" class="messageItem nk-ibx-link"></a>
                                    <div class="nk-ibx-item-elem nk-ibx-item-user">
                                        <div class="user-card">
                                            <div class="user-avatar">
                                                {{#hasPhoto}}
                                                <img src={{userPhoto}}>
                                                {{/hasPhoto}}
                                                {{^hasPhoto}}
                                                <span>{{userPhoto}}</span>
                                                {{/hasPhoto}}
                                            </div>
                                            <div class="user-name">
                                                <div class="lead-text {{isNew}}">{{firstName}}&nbsp;{{lastName}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                        <div class="nk-ibx-context-group">
                                            <div class="nk-ibx-context">
                                                <span class="nk-ibx-context-text">
                                                    <span class="heading {{isNew}}">{{title}}</span>
												</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-ibx-item-elem">
                                        <div class="sub-text {{isNew}}">{{messageDate}}</div>
                                    </div>
                                    <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                        <div class="ibx-actions">
                                            <ul class="ibx-actions-hidden gx-1">
                                                <li><a href="#" id="{{id}}" data="receiver" class="deleteMessage btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete"><em class="icon ni ni-trash"></em></a></li>
                                            </ul>
                                        </div>
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
                
                $buffer .= $indent . '                                <div class="nk-ibx-item">
';
                $buffer .= $indent . '                                    <a href="#" id="';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="messageItem nk-ibx-link"></a>
';
                $buffer .= $indent . '                                    <div class="nk-ibx-item-elem nk-ibx-item-user">
';
                $buffer .= $indent . '                                        <div class="user-card">
';
                $buffer .= $indent . '                                            <div class="user-avatar">
';
                // 'hasPhoto' section
                $value = $context->find('hasPhoto');
                $buffer .= $this->sectionD676c156b81fee77d31e75f5a1395c92($context, $indent, $value);
                // 'hasPhoto' inverted section
                $value = $context->find('hasPhoto');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                                <span>';
                    $value = $this->resolveValue($context->find('userPhoto'), $context, $indent);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</span>
';
                }
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="user-name">
';
                $buffer .= $indent . '                                                <div class="lead-text ';
                $value = $this->resolveValue($context->find('isNew'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('firstName'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&nbsp;';
                $value = $this->resolveValue($context->find('lastName'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="nk-ibx-item-elem nk-ibx-item-fluid">
';
                $buffer .= $indent . '                                        <div class="nk-ibx-context-group">
';
                $buffer .= $indent . '                                            <div class="nk-ibx-context">
';
                $buffer .= $indent . '                                                <span class="nk-ibx-context-text">
';
                $buffer .= $indent . '                                                    <span class="heading ';
                $value = $this->resolveValue($context->find('isNew'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('title'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '												</span>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="nk-ibx-item-elem">
';
                $buffer .= $indent . '                                        <div class="sub-text ';
                $value = $this->resolveValue($context->find('isNew'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('messageDate'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="nk-ibx-item-elem nk-ibx-item-tools">
';
                $buffer .= $indent . '                                        <div class="ibx-actions">
';
                $buffer .= $indent . '                                            <ul class="ibx-actions-hidden gx-1">
';
                $buffer .= $indent . '                                                <li><a href="#" id="';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data="receiver" class="deleteMessage btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete"><em class="icon ni ni-trash"></em></a></li>
';
                $buffer .= $indent . '                                            </ul>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF5a470cb663ff8db7a8d6ff60b00313c(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                                                        <img src=';
                $value = $this->resolveValue($context->find('userPhoto'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2cdc04b0b71b2e603a1dc37ad2407e74(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                                        <div id="{{id}}" class="messageView nk-ibx-reply-item nk-reply-item">
                                            <div class="nk-reply-header nk-ibx-reply-header">
                                                <div class="nk-reply-desc">
                                                    <div class="nk-reply-avatar user-avatar bg-blue">
                                                        {{#hasPhoto}}
                                                        <img src={{userPhoto}}>
                                                        {{/hasPhoto}}
                                                        {{^hasPhoto}}
                                                        <span>{{userPhoto}}</span>
                                                        {{/hasPhoto}}
                                                    </div>
                                                    <div class="nk-reply-info">
                                                        <div class="nk-reply-author lead-text">{{firstName}}&nbsp;{{lastName}}<span class="date d-sm-none">{{messageDate}}</span></div>
                                                        <div class="nk-reply-msg-excerpt">{{{content}}}</div>
														<div class="dropdown nk-reply-msg-info">
															<span class="sub-text">to {{department}}</span>
														</div>
                                                    </div>
                                                </div>
                                                <ul class="nk-reply-tools g-1">
                                                    <li class="date-msg"><span class="date">{{messageDate}}</span></li>
                                                    <li class="replyto-msg"><a href="#" id="{{id}}" class="replyMessage btn btn-trigger btn-icon btn-tooltip" title="Reply"><em class="icon ni ni-curve-up-left"></em></a></li>
                                                    <li class="more-actions">
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle btn btn-trigger btn-icon" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a id="{{id}}" class="replyMessage dropdown-item" href="#"><em class="icon ni ni-reply-fill"></em><span>Reply to</span></a></li>
                                                                    <li><a id="{{id}}" data="receiver" class="deleteMessage dropdown-item" href="#"><em class="icon ni ni-trash-fill"></em><span>Delete this</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="nk-reply-body nk-ibx-reply-body">
                                                <div class="nk-reply-entry entry">
                                                    {{{content}}}
                                                </div>
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
                
                $buffer .= $indent . '                                        <div id="';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="messageView nk-ibx-reply-item nk-reply-item">
';
                $buffer .= $indent . '                                            <div class="nk-reply-header nk-ibx-reply-header">
';
                $buffer .= $indent . '                                                <div class="nk-reply-desc">
';
                $buffer .= $indent . '                                                    <div class="nk-reply-avatar user-avatar bg-blue">
';
                // 'hasPhoto' section
                $value = $context->find('hasPhoto');
                $buffer .= $this->sectionF5a470cb663ff8db7a8d6ff60b00313c($context, $indent, $value);
                // 'hasPhoto' inverted section
                $value = $context->find('hasPhoto');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                                        <span>';
                    $value = $this->resolveValue($context->find('userPhoto'), $context, $indent);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</span>
';
                }
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="nk-reply-info">
';
                $buffer .= $indent . '                                                        <div class="nk-reply-author lead-text">';
                $value = $this->resolveValue($context->find('firstName'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&nbsp;';
                $value = $this->resolveValue($context->find('lastName'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '<span class="date d-sm-none">';
                $value = $this->resolveValue($context->find('messageDate'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span></div>
';
                $buffer .= $indent . '                                                        <div class="nk-reply-msg-excerpt">';
                $value = $this->resolveValue($context->find('content'), $context, $indent);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '														<div class="dropdown nk-reply-msg-info">
';
                $buffer .= $indent . '															<span class="sub-text">to ';
                $value = $this->resolveValue($context->find('department'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '														</div>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                                <ul class="nk-reply-tools g-1">
';
                $buffer .= $indent . '                                                    <li class="date-msg"><span class="date">';
                $value = $this->resolveValue($context->find('messageDate'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span></li>
';
                $buffer .= $indent . '                                                    <li class="replyto-msg"><a href="#" id="';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="replyMessage btn btn-trigger btn-icon btn-tooltip" title="Reply"><em class="icon ni ni-curve-up-left"></em></a></li>
';
                $buffer .= $indent . '                                                    <li class="more-actions">
';
                $buffer .= $indent . '                                                        <div class="dropdown">
';
                $buffer .= $indent . '                                                            <a href="#" class="dropdown-toggle btn btn-trigger btn-icon" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
';
                $buffer .= $indent . '                                                            <div class="dropdown-menu dropdown-menu-right">
';
                $buffer .= $indent . '                                                                <ul class="link-list-opt no-bdr">
';
                $buffer .= $indent . '                                                                    <li><a id="';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="replyMessage dropdown-item" href="#"><em class="icon ni ni-reply-fill"></em><span>Reply to</span></a></li>
';
                $buffer .= $indent . '                                                                    <li><a id="';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data="receiver" class="deleteMessage dropdown-item" href="#"><em class="icon ni ni-trash-fill"></em><span>Delete this</span></a></li>
';
                $buffer .= $indent . '                                                                </ul>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </li>
';
                $buffer .= $indent . '                                                </ul>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="nk-reply-body nk-ibx-reply-body">
';
                $buffer .= $indent . '                                                <div class="nk-reply-entry entry">
';
                $buffer .= $indent . '                                                    ';
                $value = $this->resolveValue($context->find('content'), $context, $indent);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAe613838aeb5cfc2444f349467fbd9b6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                            <div class="nk-ibx-list" data-simplebar>
                                {{#inboxMessages}}
                                <div class="nk-ibx-item">
                                    <a href="#" id="{{id}}" class="messageItem nk-ibx-link"></a>
                                    <div class="nk-ibx-item-elem nk-ibx-item-user">
                                        <div class="user-card">
                                            <div class="user-avatar">
                                                {{#hasPhoto}}
                                                <img src={{userPhoto}}>
                                                {{/hasPhoto}}
                                                {{^hasPhoto}}
                                                <span>{{userPhoto}}</span>
                                                {{/hasPhoto}}
                                            </div>
                                            <div class="user-name">
                                                <div class="lead-text {{isNew}}">{{firstName}}&nbsp;{{lastName}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                        <div class="nk-ibx-context-group">
                                            <div class="nk-ibx-context">
                                                <span class="nk-ibx-context-text">
                                                    <span class="heading {{isNew}}">{{title}}</span>
												</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-ibx-item-elem">
                                        <div class="sub-text {{isNew}}">{{messageDate}}</div>
                                    </div>
                                    <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                        <div class="ibx-actions">
                                            <ul class="ibx-actions-hidden gx-1">
                                                <li><a href="#" id="{{id}}" data="receiver" class="deleteMessage btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete"><em class="icon ni ni-trash"></em></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                {{/inboxMessages}}
                            </div>
                            <div class="nk-ibx-view">
                                <div class="nk-ibx-head">
                                    <div class="nk-ibx-head-actions">
                                        <ul class="nk-ibx-head-tools g-1">
                                            <li class="ml-n2"><a href="#" class="btn btn-icon btn-trigger nk-ibx-hide"><em class="icon ni ni-arrow-left"></em></a></li>
                                            <li><a href="#" data="receiver" class="btnDelete deleteMessage btn btn-icon btn-trigger btn-tooltip" title="Delete"><em class="icon ni ni-trash"></em></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="nk-ibx-reply nk-reply" data-simplebar>
                                    <div class="nk-ibx-reply-group">
                                        {{#inboxMessages}}
                                        <div id="{{id}}" class="messageView nk-ibx-reply-item nk-reply-item">
                                            <div class="nk-reply-header nk-ibx-reply-header">
                                                <div class="nk-reply-desc">
                                                    <div class="nk-reply-avatar user-avatar bg-blue">
                                                        {{#hasPhoto}}
                                                        <img src={{userPhoto}}>
                                                        {{/hasPhoto}}
                                                        {{^hasPhoto}}
                                                        <span>{{userPhoto}}</span>
                                                        {{/hasPhoto}}
                                                    </div>
                                                    <div class="nk-reply-info">
                                                        <div class="nk-reply-author lead-text">{{firstName}}&nbsp;{{lastName}}<span class="date d-sm-none">{{messageDate}}</span></div>
                                                        <div class="nk-reply-msg-excerpt">{{{content}}}</div>
														<div class="dropdown nk-reply-msg-info">
															<span class="sub-text">to {{department}}</span>
														</div>
                                                    </div>
                                                </div>
                                                <ul class="nk-reply-tools g-1">
                                                    <li class="date-msg"><span class="date">{{messageDate}}</span></li>
                                                    <li class="replyto-msg"><a href="#" id="{{id}}" class="replyMessage btn btn-trigger btn-icon btn-tooltip" title="Reply"><em class="icon ni ni-curve-up-left"></em></a></li>
                                                    <li class="more-actions">
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle btn btn-trigger btn-icon" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a id="{{id}}" class="replyMessage dropdown-item" href="#"><em class="icon ni ni-reply-fill"></em><span>Reply to</span></a></li>
                                                                    <li><a id="{{id}}" data="receiver" class="deleteMessage dropdown-item" href="#"><em class="icon ni ni-trash-fill"></em><span>Delete this</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="nk-reply-body nk-ibx-reply-body">
                                                <div class="nk-reply-entry entry">
                                                    {{{content}}}
                                                </div>
                                            </div>
                                        </div>
                                        {{/inboxMessages}}
                                    </div>
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
                
                $buffer .= $indent . '                            <div class="nk-ibx-list" data-simplebar>
';
                // 'inboxMessages' section
                $value = $context->find('inboxMessages');
                $buffer .= $this->sectionDc66a69cde5c5cbf31317ee0593581c3($context, $indent, $value);
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="nk-ibx-view">
';
                $buffer .= $indent . '                                <div class="nk-ibx-head">
';
                $buffer .= $indent . '                                    <div class="nk-ibx-head-actions">
';
                $buffer .= $indent . '                                        <ul class="nk-ibx-head-tools g-1">
';
                $buffer .= $indent . '                                            <li class="ml-n2"><a href="#" class="btn btn-icon btn-trigger nk-ibx-hide"><em class="icon ni ni-arrow-left"></em></a></li>
';
                $buffer .= $indent . '                                            <li><a href="#" data="receiver" class="btnDelete deleteMessage btn btn-icon btn-trigger btn-tooltip" title="Delete"><em class="icon ni ni-trash"></em></a></li>
';
                $buffer .= $indent . '                                        </ul>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="nk-ibx-reply nk-reply" data-simplebar>
';
                $buffer .= $indent . '                                    <div class="nk-ibx-reply-group">
';
                // 'inboxMessages' section
                $value = $context->find('inboxMessages');
                $buffer .= $this->section2cdc04b0b71b2e603a1dc37ad2407e74($context, $indent, $value);
                $buffer .= $indent . '                                    </div>
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

    private function sectionCe5788fcbd65f1dd491431fd80bd81f8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                                <div class="nk-ibx-item">
                                    <a href="#" id="{{id}}" class="messageItem nk-ibx-link"></a>
                                    <div class="nk-ibx-item-elem nk-ibx-item-user">
                                        <div class="user-card">
                                            <div class="user-avatar">
                                                <span>A</span>
                                            </div>
                                            <div class="user-name">
                                                <div class="lead-text">{{department}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                        <div class="nk-ibx-context-group">
                                            <div class="nk-ibx-context">
                                                <span class="nk-ibx-context-text">
                                                    <span class="heading">{{title}}</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-ibx-item-elem">
                                        <div class="sub-text">{{messageDate}}</div>
                                    </div>
                                    <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                        <div class="ibx-actions">
                                            <ul class="ibx-actions-hidden gx-1">
                                                <li><a href="#" id="{{id}}" data="sender" class="deleteMessage btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete"><em class="icon ni ni-trash"></em></a></li>
                                            </ul>
                                        </div>
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
                
                $buffer .= $indent . '                                <div class="nk-ibx-item">
';
                $buffer .= $indent . '                                    <a href="#" id="';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="messageItem nk-ibx-link"></a>
';
                $buffer .= $indent . '                                    <div class="nk-ibx-item-elem nk-ibx-item-user">
';
                $buffer .= $indent . '                                        <div class="user-card">
';
                $buffer .= $indent . '                                            <div class="user-avatar">
';
                $buffer .= $indent . '                                                <span>A</span>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="user-name">
';
                $buffer .= $indent . '                                                <div class="lead-text">';
                $value = $this->resolveValue($context->find('department'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="nk-ibx-item-elem nk-ibx-item-fluid">
';
                $buffer .= $indent . '                                        <div class="nk-ibx-context-group">
';
                $buffer .= $indent . '                                            <div class="nk-ibx-context">
';
                $buffer .= $indent . '                                                <span class="nk-ibx-context-text">
';
                $buffer .= $indent . '                                                    <span class="heading">';
                $value = $this->resolveValue($context->find('title'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span></span>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="nk-ibx-item-elem">
';
                $buffer .= $indent . '                                        <div class="sub-text">';
                $value = $this->resolveValue($context->find('messageDate'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="nk-ibx-item-elem nk-ibx-item-tools">
';
                $buffer .= $indent . '                                        <div class="ibx-actions">
';
                $buffer .= $indent . '                                            <ul class="ibx-actions-hidden gx-1">
';
                $buffer .= $indent . '                                                <li><a href="#" id="';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data="sender" class="deleteMessage btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete"><em class="icon ni ni-trash"></em></a></li>
';
                $buffer .= $indent . '                                            </ul>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6eb02fd0a300e1553bd9e20a560b96d9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                                        <div id="{{id}}" class="messageView nk-ibx-reply-item nk-reply-item">
                                            <div class="nk-reply-header nk-ibx-reply-header">
                                                <div class="nk-reply-desc">
                                                    <div class="nk-reply-avatar user-avatar bg-blue">
                                                        <span>A</span>
                                                    </div>
                                                    <div class="nk-reply-info">
                                                        <div class="nk-reply-author lead-text">{{department}} <span class="date d-sm-none">{{messageDate}}</span></div>
                                                        <div class="nk-reply-msg-excerpt">{{{content}}}</div>
                                                        <div class="dropdown nk-reply-msg-info">
                                                            <span class="sub-text">to {{firstName}}&nbsp;{{lastName}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="nk-reply-tools g-1">
                                                    <li class="date-msg"><span class="date">{{messageDate}}</span></li>
                                                    <li class="replyto-msg"><a href="#" id="{{id}}" class="replyMessage btn btn-trigger btn-icon btn-tooltip" title="Reply"><em class="icon ni ni-curve-up-left"></em></a></li>
                                                    <li class="more-actions">
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle btn btn-trigger btn-icon" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a id="{{id}}" class="replyMessage dropdown-item" href="#"><em class="icon ni ni-reply-fill"></em><span>Reply to</span></a></li>
                                                                    <li><a id="{{id}}" data="sender" class="deleteMessage dropdown-item" href="#"><em class="icon ni ni-trash-fill"></em><span>Delete this</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="nk-reply-body nk-ibx-reply-body">
                                                <div class="nk-reply-entry entry">
                                                    {{{content}}}
                                                </div>
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
                
                $buffer .= $indent . '                                        <div id="';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="messageView nk-ibx-reply-item nk-reply-item">
';
                $buffer .= $indent . '                                            <div class="nk-reply-header nk-ibx-reply-header">
';
                $buffer .= $indent . '                                                <div class="nk-reply-desc">
';
                $buffer .= $indent . '                                                    <div class="nk-reply-avatar user-avatar bg-blue">
';
                $buffer .= $indent . '                                                        <span>A</span>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="nk-reply-info">
';
                $buffer .= $indent . '                                                        <div class="nk-reply-author lead-text">';
                $value = $this->resolveValue($context->find('department'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' <span class="date d-sm-none">';
                $value = $this->resolveValue($context->find('messageDate'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span></div>
';
                $buffer .= $indent . '                                                        <div class="nk-reply-msg-excerpt">';
                $value = $this->resolveValue($context->find('content'), $context, $indent);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '                                                        <div class="dropdown nk-reply-msg-info">
';
                $buffer .= $indent . '                                                            <span class="sub-text">to ';
                $value = $this->resolveValue($context->find('firstName'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&nbsp;';
                $value = $this->resolveValue($context->find('lastName'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                                <ul class="nk-reply-tools g-1">
';
                $buffer .= $indent . '                                                    <li class="date-msg"><span class="date">';
                $value = $this->resolveValue($context->find('messageDate'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span></li>
';
                $buffer .= $indent . '                                                    <li class="replyto-msg"><a href="#" id="';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="replyMessage btn btn-trigger btn-icon btn-tooltip" title="Reply"><em class="icon ni ni-curve-up-left"></em></a></li>
';
                $buffer .= $indent . '                                                    <li class="more-actions">
';
                $buffer .= $indent . '                                                        <div class="dropdown">
';
                $buffer .= $indent . '                                                            <a href="#" class="dropdown-toggle btn btn-trigger btn-icon" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
';
                $buffer .= $indent . '                                                            <div class="dropdown-menu dropdown-menu-right">
';
                $buffer .= $indent . '                                                                <ul class="link-list-opt no-bdr">
';
                $buffer .= $indent . '                                                                    <li><a id="';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="replyMessage dropdown-item" href="#"><em class="icon ni ni-reply-fill"></em><span>Reply to</span></a></li>
';
                $buffer .= $indent . '                                                                    <li><a id="';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data="sender" class="deleteMessage dropdown-item" href="#"><em class="icon ni ni-trash-fill"></em><span>Delete this</span></a></li>
';
                $buffer .= $indent . '                                                                </ul>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </li>
';
                $buffer .= $indent . '                                                </ul>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="nk-reply-body nk-ibx-reply-body">
';
                $buffer .= $indent . '                                                <div class="nk-reply-entry entry">
';
                $buffer .= $indent . '                                                    ';
                $value = $this->resolveValue($context->find('content'), $context, $indent);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8029293857f63ffbbb0876eec9a36ed1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                            <div class="nk-ibx-list" data-simplebar>
                                {{#draftMessages}}
                                <div class="nk-ibx-item">
                                    <a href="#" id="{{id}}" class="messageItem nk-ibx-link"></a>
                                    <div class="nk-ibx-item-elem nk-ibx-item-user">
                                        <div class="user-card">
                                            <div class="user-avatar">
                                                <span>A</span>
                                            </div>
                                            <div class="user-name">
                                                <div class="lead-text">{{department}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                        <div class="nk-ibx-context-group">
                                            <div class="nk-ibx-context">
                                                <span class="nk-ibx-context-text">
                                                    <span class="heading">{{title}}</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-ibx-item-elem">
                                        <div class="sub-text">{{messageDate}}</div>
                                    </div>
                                    <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                        <div class="ibx-actions">
                                            <ul class="ibx-actions-hidden gx-1">
                                                <li><a href="#" id="{{id}}" data="sender" class="deleteMessage btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete"><em class="icon ni ni-trash"></em></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                {{/draftMessages}}
                            </div>
                            <div class="nk-ibx-view">
                                <div class="nk-ibx-head">
                                    <div class="nk-ibx-head-actions">
                                        <ul class="nk-ibx-head-tools g-1">
                                            <li class="ml-n2"><a href="#" class="btn btn-icon btn-trigger nk-ibx-hide"><em class="icon ni ni-arrow-left"></em></a></li>
                                            <li><a href="#" data="sender" class="btnDelete deleteMessage btn btn-icon btn-trigger btn-tooltip" title="Delete"><em class="icon ni ni-trash"></em></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="nk-ibx-reply nk-reply" data-simplebar>
                                    <div class="nk-ibx-reply-group">
                                        {{#draftMessages}}
                                        <div id="{{id}}" class="messageView nk-ibx-reply-item nk-reply-item">
                                            <div class="nk-reply-header nk-ibx-reply-header">
                                                <div class="nk-reply-desc">
                                                    <div class="nk-reply-avatar user-avatar bg-blue">
                                                        <span>A</span>
                                                    </div>
                                                    <div class="nk-reply-info">
                                                        <div class="nk-reply-author lead-text">{{department}} <span class="date d-sm-none">{{messageDate}}</span></div>
                                                        <div class="nk-reply-msg-excerpt">{{{content}}}</div>
                                                        <div class="dropdown nk-reply-msg-info">
                                                            <span class="sub-text">to {{firstName}}&nbsp;{{lastName}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="nk-reply-tools g-1">
                                                    <li class="date-msg"><span class="date">{{messageDate}}</span></li>
                                                    <li class="replyto-msg"><a href="#" id="{{id}}" class="replyMessage btn btn-trigger btn-icon btn-tooltip" title="Reply"><em class="icon ni ni-curve-up-left"></em></a></li>
                                                    <li class="more-actions">
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle btn btn-trigger btn-icon" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a id="{{id}}" class="replyMessage dropdown-item" href="#"><em class="icon ni ni-reply-fill"></em><span>Reply to</span></a></li>
                                                                    <li><a id="{{id}}" data="sender" class="deleteMessage dropdown-item" href="#"><em class="icon ni ni-trash-fill"></em><span>Delete this</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="nk-reply-body nk-ibx-reply-body">
                                                <div class="nk-reply-entry entry">
                                                    {{{content}}}
                                                </div>
                                            </div>
                                        </div>
                                        {{/draftMessages}}
                                    </div>
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
                
                $buffer .= $indent . '                            <div class="nk-ibx-list" data-simplebar>
';
                // 'draftMessages' section
                $value = $context->find('draftMessages');
                $buffer .= $this->sectionCe5788fcbd65f1dd491431fd80bd81f8($context, $indent, $value);
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="nk-ibx-view">
';
                $buffer .= $indent . '                                <div class="nk-ibx-head">
';
                $buffer .= $indent . '                                    <div class="nk-ibx-head-actions">
';
                $buffer .= $indent . '                                        <ul class="nk-ibx-head-tools g-1">
';
                $buffer .= $indent . '                                            <li class="ml-n2"><a href="#" class="btn btn-icon btn-trigger nk-ibx-hide"><em class="icon ni ni-arrow-left"></em></a></li>
';
                $buffer .= $indent . '                                            <li><a href="#" data="sender" class="btnDelete deleteMessage btn btn-icon btn-trigger btn-tooltip" title="Delete"><em class="icon ni ni-trash"></em></a></li>
';
                $buffer .= $indent . '                                        </ul>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="nk-ibx-reply nk-reply" data-simplebar>
';
                $buffer .= $indent . '                                    <div class="nk-ibx-reply-group">
';
                // 'draftMessages' section
                $value = $context->find('draftMessages');
                $buffer .= $this->section6eb02fd0a300e1553bd9e20a560b96d9($context, $indent, $value);
                $buffer .= $indent . '                                    </div>
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

    private function section50afbafe51cbb3d2de5ac99b6469da5f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                                        <div id="{{id}}" class="messageView nk-ibx-reply-item nk-reply-item">
                                            <div class="nk-reply-header nk-ibx-reply-header">
                                                <div class="nk-reply-desc">
                                                    <div class="nk-reply-avatar user-avatar bg-blue">
                                                        <span>A</span>
                                                    </div>
                                                    <div class="nk-reply-info">
                                                        <div class="nk-reply-author lead-text">{{department}}<span class="date d-sm-none">{{messageDate}}</span></div>
                                                        <div class="nk-reply-msg-excerpt">{{{content}}}</div>
                                                        <div class="dropdown nk-reply-msg-info">
                                                            <span class="sub-text">to {{firstName}}&nbsp;{{lastName}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="nk-reply-tools g-1">
                                                    <li class="date-msg"><span class="date">{{messageDate}}</span></li>
                                                    <li class="replyto-msg"><a href="#" id="{{id}}" class="replyMessage btn btn-trigger btn-icon btn-tooltip" title="Reply"><em class="icon ni ni-curve-up-left"></em></a></li>
                                                    <li class="more-actions">
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle btn btn-trigger btn-icon" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a id="{{id}}" class="replyMessage dropdown-item" href="#"><em class="icon ni ni-reply-fill"></em><span>Reply to</span></a></li>
                                                                    <li><a id="{{id}}" data="sender" class="deleteMessage dropdown-item" href="#"><em class="icon ni ni-trash-fill"></em><span>Delete this</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="nk-reply-body nk-ibx-reply-body">
                                                <div class="nk-reply-entry entry">
                                                    {{{content}}}
                                                </div>
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
                
                $buffer .= $indent . '                                        <div id="';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="messageView nk-ibx-reply-item nk-reply-item">
';
                $buffer .= $indent . '                                            <div class="nk-reply-header nk-ibx-reply-header">
';
                $buffer .= $indent . '                                                <div class="nk-reply-desc">
';
                $buffer .= $indent . '                                                    <div class="nk-reply-avatar user-avatar bg-blue">
';
                $buffer .= $indent . '                                                        <span>A</span>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="nk-reply-info">
';
                $buffer .= $indent . '                                                        <div class="nk-reply-author lead-text">';
                $value = $this->resolveValue($context->find('department'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '<span class="date d-sm-none">';
                $value = $this->resolveValue($context->find('messageDate'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span></div>
';
                $buffer .= $indent . '                                                        <div class="nk-reply-msg-excerpt">';
                $value = $this->resolveValue($context->find('content'), $context, $indent);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '                                                        <div class="dropdown nk-reply-msg-info">
';
                $buffer .= $indent . '                                                            <span class="sub-text">to ';
                $value = $this->resolveValue($context->find('firstName'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&nbsp;';
                $value = $this->resolveValue($context->find('lastName'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                                <ul class="nk-reply-tools g-1">
';
                $buffer .= $indent . '                                                    <li class="date-msg"><span class="date">';
                $value = $this->resolveValue($context->find('messageDate'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span></li>
';
                $buffer .= $indent . '                                                    <li class="replyto-msg"><a href="#" id="';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="replyMessage btn btn-trigger btn-icon btn-tooltip" title="Reply"><em class="icon ni ni-curve-up-left"></em></a></li>
';
                $buffer .= $indent . '                                                    <li class="more-actions">
';
                $buffer .= $indent . '                                                        <div class="dropdown">
';
                $buffer .= $indent . '                                                            <a href="#" class="dropdown-toggle btn btn-trigger btn-icon" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
';
                $buffer .= $indent . '                                                            <div class="dropdown-menu dropdown-menu-right">
';
                $buffer .= $indent . '                                                                <ul class="link-list-opt no-bdr">
';
                $buffer .= $indent . '                                                                    <li><a id="';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="replyMessage dropdown-item" href="#"><em class="icon ni ni-reply-fill"></em><span>Reply to</span></a></li>
';
                $buffer .= $indent . '                                                                    <li><a id="';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data="sender" class="deleteMessage dropdown-item" href="#"><em class="icon ni ni-trash-fill"></em><span>Delete this</span></a></li>
';
                $buffer .= $indent . '                                                                </ul>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </li>
';
                $buffer .= $indent . '                                                </ul>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="nk-reply-body nk-ibx-reply-body">
';
                $buffer .= $indent . '                                                <div class="nk-reply-entry entry">
';
                $buffer .= $indent . '                                                    ';
                $value = $this->resolveValue($context->find('content'), $context, $indent);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section36320d2aba9064d106298064423348a7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                            <div class="nk-ibx-list" data-simplebar>
                                {{#sentMessages}}
                                <div class="nk-ibx-item">
                                    <a href="#" id="{{id}}" class="messageItem nk-ibx-link"></a>
                                    <div class="nk-ibx-item-elem nk-ibx-item-user">
                                        <div class="user-card">
                                            <div class="user-avatar">
                                                <span>A</span>
                                            </div>
                                            <div class="user-name">
                                                <div class="lead-text">{{department}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                        <div class="nk-ibx-context-group">
                                            <div class="nk-ibx-context">
                                                <span class="nk-ibx-context-text">
                                                    <span class="heading">{{title}}</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-ibx-item-elem">
                                        <div class="sub-text">{{messageDate}}</div>
                                    </div>
                                    <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                        <div class="ibx-actions">
                                            <ul class="ibx-actions-hidden gx-1">
                                                <li><a href="#" id="{{id}}" data="sender" class="deleteMessage btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete"><em class="icon ni ni-trash"></em></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                {{/sentMessages}}
                            </div>
                            <div class="nk-ibx-view">
                                <div class="nk-ibx-head">
                                    <div class="nk-ibx-head-actions">
                                        <ul class="nk-ibx-head-tools g-1">
                                            <li class="ml-n2"><a href="#" class="btn btn-icon btn-trigger nk-ibx-hide"><em class="icon ni ni-arrow-left"></em></a></li>
                                            <li><a href="#" data="sender" class="btnDelete deleteMessage btn btn-icon btn-trigger btn-tooltip" title="Delete"><em class="icon ni ni-trash"></em></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="nk-ibx-reply nk-reply" data-simplebar>
                                    <div class="nk-ibx-reply-group">
                                        {{#sentMessages}}
                                        <div id="{{id}}" class="messageView nk-ibx-reply-item nk-reply-item">
                                            <div class="nk-reply-header nk-ibx-reply-header">
                                                <div class="nk-reply-desc">
                                                    <div class="nk-reply-avatar user-avatar bg-blue">
                                                        <span>A</span>
                                                    </div>
                                                    <div class="nk-reply-info">
                                                        <div class="nk-reply-author lead-text">{{department}}<span class="date d-sm-none">{{messageDate}}</span></div>
                                                        <div class="nk-reply-msg-excerpt">{{{content}}}</div>
                                                        <div class="dropdown nk-reply-msg-info">
                                                            <span class="sub-text">to {{firstName}}&nbsp;{{lastName}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="nk-reply-tools g-1">
                                                    <li class="date-msg"><span class="date">{{messageDate}}</span></li>
                                                    <li class="replyto-msg"><a href="#" id="{{id}}" class="replyMessage btn btn-trigger btn-icon btn-tooltip" title="Reply"><em class="icon ni ni-curve-up-left"></em></a></li>
                                                    <li class="more-actions">
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle btn btn-trigger btn-icon" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a id="{{id}}" class="replyMessage dropdown-item" href="#"><em class="icon ni ni-reply-fill"></em><span>Reply to</span></a></li>
                                                                    <li><a id="{{id}}" data="sender" class="deleteMessage dropdown-item" href="#"><em class="icon ni ni-trash-fill"></em><span>Delete this</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="nk-reply-body nk-ibx-reply-body">
                                                <div class="nk-reply-entry entry">
                                                    {{{content}}}
                                                </div>
                                            </div>
                                        </div>
                                        {{/sentMessages}}
                                    </div>
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
                
                $buffer .= $indent . '                            <div class="nk-ibx-list" data-simplebar>
';
                // 'sentMessages' section
                $value = $context->find('sentMessages');
                $buffer .= $this->sectionCe5788fcbd65f1dd491431fd80bd81f8($context, $indent, $value);
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="nk-ibx-view">
';
                $buffer .= $indent . '                                <div class="nk-ibx-head">
';
                $buffer .= $indent . '                                    <div class="nk-ibx-head-actions">
';
                $buffer .= $indent . '                                        <ul class="nk-ibx-head-tools g-1">
';
                $buffer .= $indent . '                                            <li class="ml-n2"><a href="#" class="btn btn-icon btn-trigger nk-ibx-hide"><em class="icon ni ni-arrow-left"></em></a></li>
';
                $buffer .= $indent . '                                            <li><a href="#" data="sender" class="btnDelete deleteMessage btn btn-icon btn-trigger btn-tooltip" title="Delete"><em class="icon ni ni-trash"></em></a></li>
';
                $buffer .= $indent . '                                        </ul>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="nk-ibx-reply nk-reply" data-simplebar>
';
                $buffer .= $indent . '                                    <div class="nk-ibx-reply-group">
';
                // 'sentMessages' section
                $value = $context->find('sentMessages');
                $buffer .= $this->section50afbafe51cbb3d2de5ac99b6469da5f($context, $indent, $value);
                $buffer .= $indent . '                                    </div>
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

    private function section1a1b3c4c8441d582e654872b618f0e92(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                                <div class="nk-ibx-item">
                                    <a href="#" id="{{id}}" class="messageItem nk-ibx-link"></a>
                                    <div class="nk-ibx-item-elem nk-ibx-item-user">
                                        <div class="user-card">
                                            <div class="user-avatar">
                                                {{#hasPhoto}}
                                                <img src={{userPhoto}}>
                                                {{/hasPhoto}}
                                                {{^hasPhoto}}
                                                <span>{{userPhoto}}</span>
                                                {{/hasPhoto}}
                                            </div>
                                            <div class="user-name">
                                                <div class="lead-text">{{firstName}}&nbsp;{{lastName}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                        <div class="nk-ibx-context-group">
                                            <div class="nk-ibx-context">
                                                <span class="nk-ibx-context-text">
                                                    <span class="heading">{{title}}</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-ibx-item-elem">
                                        <div class="sub-text">{{messageDate}}</div>
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
                
                $buffer .= $indent . '                                <div class="nk-ibx-item">
';
                $buffer .= $indent . '                                    <a href="#" id="';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="messageItem nk-ibx-link"></a>
';
                $buffer .= $indent . '                                    <div class="nk-ibx-item-elem nk-ibx-item-user">
';
                $buffer .= $indent . '                                        <div class="user-card">
';
                $buffer .= $indent . '                                            <div class="user-avatar">
';
                // 'hasPhoto' section
                $value = $context->find('hasPhoto');
                $buffer .= $this->sectionD676c156b81fee77d31e75f5a1395c92($context, $indent, $value);
                // 'hasPhoto' inverted section
                $value = $context->find('hasPhoto');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                                <span>';
                    $value = $this->resolveValue($context->find('userPhoto'), $context, $indent);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</span>
';
                }
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="user-name">
';
                $buffer .= $indent . '                                                <div class="lead-text">';
                $value = $this->resolveValue($context->find('firstName'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&nbsp;';
                $value = $this->resolveValue($context->find('lastName'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="nk-ibx-item-elem nk-ibx-item-fluid">
';
                $buffer .= $indent . '                                        <div class="nk-ibx-context-group">
';
                $buffer .= $indent . '                                            <div class="nk-ibx-context">
';
                $buffer .= $indent . '                                                <span class="nk-ibx-context-text">
';
                $buffer .= $indent . '                                                    <span class="heading">';
                $value = $this->resolveValue($context->find('title'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span></span>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="nk-ibx-item-elem">
';
                $buffer .= $indent . '                                        <div class="sub-text">';
                $value = $this->resolveValue($context->find('messageDate'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section591af85dc3477c7ea175dd06448fcf5a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                                        <div id="{{id}}" class="messageView nk-ibx-reply-item nk-reply-item">
                                            <div class="nk-reply-header nk-ibx-reply-header">
                                                <div class="nk-reply-desc">
                                                    <div class="nk-reply-avatar user-avatar bg-blue">
                                                        {{#hasPhoto}}
                                                        <img src={{userPhoto}}>
                                                        {{/hasPhoto}}
                                                        {{^hasPhoto}}
                                                        <span>{{userPhoto}}</span>
                                                        {{/hasPhoto}}
                                                    </div>
                                                    <div class="nk-reply-info">
                                                        <div class="nk-reply-author lead-text">{{firstName}}&nbsp;{{lastName}} <span class="date d-sm-none">{{messageDate}}</span></div>
                                                        <div class="nk-reply-msg-excerpt">{{{content}}}</div>
                                                    </div>
                                                </div>
                                                <ul class="nk-reply-tools g-1">
                                                    <li class="date-msg"><span class="date">{{messageDate}}</span></li>
                                                </ul>
                                            </div>
                                            <div class="nk-reply-body nk-ibx-reply-body">
                                                <div class="nk-reply-entry entry">
                                                    {{{content}}}
                                                </div>
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
                
                $buffer .= $indent . '                                        <div id="';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="messageView nk-ibx-reply-item nk-reply-item">
';
                $buffer .= $indent . '                                            <div class="nk-reply-header nk-ibx-reply-header">
';
                $buffer .= $indent . '                                                <div class="nk-reply-desc">
';
                $buffer .= $indent . '                                                    <div class="nk-reply-avatar user-avatar bg-blue">
';
                // 'hasPhoto' section
                $value = $context->find('hasPhoto');
                $buffer .= $this->sectionF5a470cb663ff8db7a8d6ff60b00313c($context, $indent, $value);
                // 'hasPhoto' inverted section
                $value = $context->find('hasPhoto');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                                        <span>';
                    $value = $this->resolveValue($context->find('userPhoto'), $context, $indent);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</span>
';
                }
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="nk-reply-info">
';
                $buffer .= $indent . '                                                        <div class="nk-reply-author lead-text">';
                $value = $this->resolveValue($context->find('firstName'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&nbsp;';
                $value = $this->resolveValue($context->find('lastName'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' <span class="date d-sm-none">';
                $value = $this->resolveValue($context->find('messageDate'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span></div>
';
                $buffer .= $indent . '                                                        <div class="nk-reply-msg-excerpt">';
                $value = $this->resolveValue($context->find('content'), $context, $indent);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                                <ul class="nk-reply-tools g-1">
';
                $buffer .= $indent . '                                                    <li class="date-msg"><span class="date">';
                $value = $this->resolveValue($context->find('messageDate'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span></li>
';
                $buffer .= $indent . '                                                </ul>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="nk-reply-body nk-ibx-reply-body">
';
                $buffer .= $indent . '                                                <div class="nk-reply-entry entry">
';
                $buffer .= $indent . '                                                    ';
                $value = $this->resolveValue($context->find('content'), $context, $indent);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB4ca634be77e2728f0d2dc3308d9a181(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                            <div class="nk-ibx-list" data-simplebar>
                                {{#trashMessages}}
                                <div class="nk-ibx-item">
                                    <a href="#" id="{{id}}" class="messageItem nk-ibx-link"></a>
                                    <div class="nk-ibx-item-elem nk-ibx-item-user">
                                        <div class="user-card">
                                            <div class="user-avatar">
                                                {{#hasPhoto}}
                                                <img src={{userPhoto}}>
                                                {{/hasPhoto}}
                                                {{^hasPhoto}}
                                                <span>{{userPhoto}}</span>
                                                {{/hasPhoto}}
                                            </div>
                                            <div class="user-name">
                                                <div class="lead-text">{{firstName}}&nbsp;{{lastName}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                        <div class="nk-ibx-context-group">
                                            <div class="nk-ibx-context">
                                                <span class="nk-ibx-context-text">
                                                    <span class="heading">{{title}}</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-ibx-item-elem">
                                        <div class="sub-text">{{messageDate}}</div>
                                    </div>
                                </div>
                                {{/trashMessages}}
                            </div>
                            <div class="nk-ibx-view">
                                <div class="nk-ibx-head">
                                    <div class="nk-ibx-head-actions">
                                        <ul class="nk-ibx-head-tools g-1">
                                            <li class="ml-n2"><a href="#" class="btn btn-icon btn-trigger nk-ibx-hide"><em class="icon ni ni-arrow-left"></em></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="nk-ibx-reply nk-reply" data-simplebar>
                                    <div class="nk-ibx-reply-group">
                                        {{#trashMessages}}
                                        <div id="{{id}}" class="messageView nk-ibx-reply-item nk-reply-item">
                                            <div class="nk-reply-header nk-ibx-reply-header">
                                                <div class="nk-reply-desc">
                                                    <div class="nk-reply-avatar user-avatar bg-blue">
                                                        {{#hasPhoto}}
                                                        <img src={{userPhoto}}>
                                                        {{/hasPhoto}}
                                                        {{^hasPhoto}}
                                                        <span>{{userPhoto}}</span>
                                                        {{/hasPhoto}}
                                                    </div>
                                                    <div class="nk-reply-info">
                                                        <div class="nk-reply-author lead-text">{{firstName}}&nbsp;{{lastName}} <span class="date d-sm-none">{{messageDate}}</span></div>
                                                        <div class="nk-reply-msg-excerpt">{{{content}}}</div>
                                                    </div>
                                                </div>
                                                <ul class="nk-reply-tools g-1">
                                                    <li class="date-msg"><span class="date">{{messageDate}}</span></li>
                                                </ul>
                                            </div>
                                            <div class="nk-reply-body nk-ibx-reply-body">
                                                <div class="nk-reply-entry entry">
                                                    {{{content}}}
                                                </div>
                                            </div>
                                        </div>
                                        {{/trashMessages}}
                                    </div>
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
                
                $buffer .= $indent . '                            <div class="nk-ibx-list" data-simplebar>
';
                // 'trashMessages' section
                $value = $context->find('trashMessages');
                $buffer .= $this->section1a1b3c4c8441d582e654872b618f0e92($context, $indent, $value);
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="nk-ibx-view">
';
                $buffer .= $indent . '                                <div class="nk-ibx-head">
';
                $buffer .= $indent . '                                    <div class="nk-ibx-head-actions">
';
                $buffer .= $indent . '                                        <ul class="nk-ibx-head-tools g-1">
';
                $buffer .= $indent . '                                            <li class="ml-n2"><a href="#" class="btn btn-icon btn-trigger nk-ibx-hide"><em class="icon ni ni-arrow-left"></em></a></li>
';
                $buffer .= $indent . '                                        </ul>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="nk-ibx-reply nk-reply" data-simplebar>
';
                $buffer .= $indent . '                                    <div class="nk-ibx-reply-group">
';
                // 'trashMessages' section
                $value = $context->find('trashMessages');
                $buffer .= $this->section591af85dc3477c7ea175dd06448fcf5a($context, $indent, $value);
                $buffer .= $indent . '                                    </div>
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

    private function sectionFc045b4a49314c69044ae862dbc5874c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
		clientOptions += "<option value=\'{{id}}\'>{{userName}}</option>";
		i ++;
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
                
                $buffer .= $indent . '		clientOptions += "<option value=\'';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\'>';
                $value = $this->resolveValue($context->find('userName'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</option>";
';
                $buffer .= $indent . '		i ++;
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC279add4aebb11073ae07ed7bb4f8c54(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
<div class="nk-content ">
    <style>
        .messageView {
            padding: 2rem 2.5rem !important;
        }
        .red {
            color: #e85347 !important;
        }
    </style>
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-ibx">
                    <div class="nk-ibx-aside" data-content="inbox-aside" data-toggle-overlay="true" data-toggle-screen="lg">
                        <div class="nk-ibx-head">
                            <h5 class="mb-0">EMail</h5>
                            <a href="#" class="link link-primary" id="composeMessage" data-toggle="modal" data-target="#compose-admin-mail"><em class="icon ni ni-plus"></em> <span>Compose</span></a>
                        </div>
                        <div class="nk-ibx-nav" data-simplebar>
                            <ul class="messageType nk-ibx-menu">
                                <li class="active" data="inbox">
                                    <a class="nk-ibx-menu-item" href="#">
                                        <em class="icon ni ni-inbox"></em>
                                        <span class="nk-ibx-menu-text">Inbox</span>
                                        <span class="badge badge-pill badge-light">{{inboxCount}}</span>
                                    </a>
                                </li>
                                <li data="draft">
                                    <a class="nk-ibx-menu-item" href="#">
                                        <em class="icon ni ni-edit"></em>
                                        <span class="nk-ibx-menu-text">Draft</span>
                                        <span class="badge badge-pill badge-light">{{draftCount}}</span>
                                    </a>
                                </li>
                                <li data="sent">
                                    <a class="nk-ibx-menu-item" href="#">
                                        <em class="icon ni ni-send"></em>
                                        <span class="nk-ibx-menu-text">Sent</span>
                                        <span class="badge badge-pill badge-light">{{sentCount}}</span>
                                    </a>
                                </li>
                                <li data="spam">
                                    <a class="nk-ibx-menu-item" href="#">
                                        <em class="icon ni ni-report"></em>
                                        <span class="nk-ibx-menu-text">Spam</span>
                                    </a>
                                </li>
                                <li data="trash">
                                    <a class="nk-ibx-menu-item" href="#">
                                        <em class="icon ni ni-trash"></em>
                                        <span class="nk-ibx-menu-text">Trash</span>
                                        <span class="badge badge-pill badge-danger badge-dim">{{trashCount}}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="nk-ibx-body bg-white">
                        <div class="nk-ibx-head d-flex flex-row-reverse">
                            <ul class="nk-ibx-head-tools g-1">
                                <li class="mr-n1 d-lg-none"><a href="#" class="btn btn-trigger btn-icon toggle" data-target="inbox-aside"><em class="icon ni ni-menu-alt-r"></em></a></li>
                            </ul>
                        </div>
                        <div id="inbox">
                            {{#hasInbox}}
                            <div class="nk-ibx-list" data-simplebar>
                                {{#inboxMessages}}
                                <div class="nk-ibx-item">
                                    <a href="#" id="{{id}}" class="messageItem nk-ibx-link"></a>
                                    <div class="nk-ibx-item-elem nk-ibx-item-user">
                                        <div class="user-card">
                                            <div class="user-avatar">
                                                {{#hasPhoto}}
                                                <img src={{userPhoto}}>
                                                {{/hasPhoto}}
                                                {{^hasPhoto}}
                                                <span>{{userPhoto}}</span>
                                                {{/hasPhoto}}
                                            </div>
                                            <div class="user-name">
                                                <div class="lead-text {{isNew}}">{{firstName}}&nbsp;{{lastName}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                        <div class="nk-ibx-context-group">
                                            <div class="nk-ibx-context">
                                                <span class="nk-ibx-context-text">
                                                    <span class="heading {{isNew}}">{{title}}</span>
												</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-ibx-item-elem">
                                        <div class="sub-text {{isNew}}">{{messageDate}}</div>
                                    </div>
                                    <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                        <div class="ibx-actions">
                                            <ul class="ibx-actions-hidden gx-1">
                                                <li><a href="#" id="{{id}}" data="receiver" class="deleteMessage btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete"><em class="icon ni ni-trash"></em></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                {{/inboxMessages}}
                            </div>
                            <div class="nk-ibx-view">
                                <div class="nk-ibx-head">
                                    <div class="nk-ibx-head-actions">
                                        <ul class="nk-ibx-head-tools g-1">
                                            <li class="ml-n2"><a href="#" class="btn btn-icon btn-trigger nk-ibx-hide"><em class="icon ni ni-arrow-left"></em></a></li>
                                            <li><a href="#" data="receiver" class="btnDelete deleteMessage btn btn-icon btn-trigger btn-tooltip" title="Delete"><em class="icon ni ni-trash"></em></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="nk-ibx-reply nk-reply" data-simplebar>
                                    <div class="nk-ibx-reply-group">
                                        {{#inboxMessages}}
                                        <div id="{{id}}" class="messageView nk-ibx-reply-item nk-reply-item">
                                            <div class="nk-reply-header nk-ibx-reply-header">
                                                <div class="nk-reply-desc">
                                                    <div class="nk-reply-avatar user-avatar bg-blue">
                                                        {{#hasPhoto}}
                                                        <img src={{userPhoto}}>
                                                        {{/hasPhoto}}
                                                        {{^hasPhoto}}
                                                        <span>{{userPhoto}}</span>
                                                        {{/hasPhoto}}
                                                    </div>
                                                    <div class="nk-reply-info">
                                                        <div class="nk-reply-author lead-text">{{firstName}}&nbsp;{{lastName}}<span class="date d-sm-none">{{messageDate}}</span></div>
                                                        <div class="nk-reply-msg-excerpt">{{{content}}}</div>
														<div class="dropdown nk-reply-msg-info">
															<span class="sub-text">to {{department}}</span>
														</div>
                                                    </div>
                                                </div>
                                                <ul class="nk-reply-tools g-1">
                                                    <li class="date-msg"><span class="date">{{messageDate}}</span></li>
                                                    <li class="replyto-msg"><a href="#" id="{{id}}" class="replyMessage btn btn-trigger btn-icon btn-tooltip" title="Reply"><em class="icon ni ni-curve-up-left"></em></a></li>
                                                    <li class="more-actions">
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle btn btn-trigger btn-icon" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a id="{{id}}" class="replyMessage dropdown-item" href="#"><em class="icon ni ni-reply-fill"></em><span>Reply to</span></a></li>
                                                                    <li><a id="{{id}}" data="receiver" class="deleteMessage dropdown-item" href="#"><em class="icon ni ni-trash-fill"></em><span>Delete this</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="nk-reply-body nk-ibx-reply-body">
                                                <div class="nk-reply-entry entry">
                                                    {{{content}}}
                                                </div>
                                            </div>
                                        </div>
                                        {{/inboxMessages}}
                                    </div>
                                </div>
                            </div>
                            {{/hasInbox}}
                            {{^hasInbox}}
                            <p>There is no inbox message.</p>
                            {{/hasInbox}}
                        </div>
                        <div id="draft">
                            {{#hasDraft}}
                            <div class="nk-ibx-list" data-simplebar>
                                {{#draftMessages}}
                                <div class="nk-ibx-item">
                                    <a href="#" id="{{id}}" class="messageItem nk-ibx-link"></a>
                                    <div class="nk-ibx-item-elem nk-ibx-item-user">
                                        <div class="user-card">
                                            <div class="user-avatar">
                                                <span>A</span>
                                            </div>
                                            <div class="user-name">
                                                <div class="lead-text">{{department}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                        <div class="nk-ibx-context-group">
                                            <div class="nk-ibx-context">
                                                <span class="nk-ibx-context-text">
                                                    <span class="heading">{{title}}</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-ibx-item-elem">
                                        <div class="sub-text">{{messageDate}}</div>
                                    </div>
                                    <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                        <div class="ibx-actions">
                                            <ul class="ibx-actions-hidden gx-1">
                                                <li><a href="#" id="{{id}}" data="sender" class="deleteMessage btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete"><em class="icon ni ni-trash"></em></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                {{/draftMessages}}
                            </div>
                            <div class="nk-ibx-view">
                                <div class="nk-ibx-head">
                                    <div class="nk-ibx-head-actions">
                                        <ul class="nk-ibx-head-tools g-1">
                                            <li class="ml-n2"><a href="#" class="btn btn-icon btn-trigger nk-ibx-hide"><em class="icon ni ni-arrow-left"></em></a></li>
                                            <li><a href="#" data="sender" class="btnDelete deleteMessage btn btn-icon btn-trigger btn-tooltip" title="Delete"><em class="icon ni ni-trash"></em></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="nk-ibx-reply nk-reply" data-simplebar>
                                    <div class="nk-ibx-reply-group">
                                        {{#draftMessages}}
                                        <div id="{{id}}" class="messageView nk-ibx-reply-item nk-reply-item">
                                            <div class="nk-reply-header nk-ibx-reply-header">
                                                <div class="nk-reply-desc">
                                                    <div class="nk-reply-avatar user-avatar bg-blue">
                                                        <span>A</span>
                                                    </div>
                                                    <div class="nk-reply-info">
                                                        <div class="nk-reply-author lead-text">{{department}} <span class="date d-sm-none">{{messageDate}}</span></div>
                                                        <div class="nk-reply-msg-excerpt">{{{content}}}</div>
                                                        <div class="dropdown nk-reply-msg-info">
                                                            <span class="sub-text">to {{firstName}}&nbsp;{{lastName}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="nk-reply-tools g-1">
                                                    <li class="date-msg"><span class="date">{{messageDate}}</span></li>
                                                    <li class="replyto-msg"><a href="#" id="{{id}}" class="replyMessage btn btn-trigger btn-icon btn-tooltip" title="Reply"><em class="icon ni ni-curve-up-left"></em></a></li>
                                                    <li class="more-actions">
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle btn btn-trigger btn-icon" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a id="{{id}}" class="replyMessage dropdown-item" href="#"><em class="icon ni ni-reply-fill"></em><span>Reply to</span></a></li>
                                                                    <li><a id="{{id}}" data="sender" class="deleteMessage dropdown-item" href="#"><em class="icon ni ni-trash-fill"></em><span>Delete this</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="nk-reply-body nk-ibx-reply-body">
                                                <div class="nk-reply-entry entry">
                                                    {{{content}}}
                                                </div>
                                            </div>
                                        </div>
                                        {{/draftMessages}}
                                    </div>
                                </div>
                            </div>
                            {{/hasDraft}}
                            {{^hasDraft}}
                            <p>There is no draft message</p>
                            {{/hasDraft}}
                        </div>
                        <div id="sent">
                            {{#hasSent}}
                            <div class="nk-ibx-list" data-simplebar>
                                {{#sentMessages}}
                                <div class="nk-ibx-item">
                                    <a href="#" id="{{id}}" class="messageItem nk-ibx-link"></a>
                                    <div class="nk-ibx-item-elem nk-ibx-item-user">
                                        <div class="user-card">
                                            <div class="user-avatar">
                                                <span>A</span>
                                            </div>
                                            <div class="user-name">
                                                <div class="lead-text">{{department}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                        <div class="nk-ibx-context-group">
                                            <div class="nk-ibx-context">
                                                <span class="nk-ibx-context-text">
                                                    <span class="heading">{{title}}</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-ibx-item-elem">
                                        <div class="sub-text">{{messageDate}}</div>
                                    </div>
                                    <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                        <div class="ibx-actions">
                                            <ul class="ibx-actions-hidden gx-1">
                                                <li><a href="#" id="{{id}}" data="sender" class="deleteMessage btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete"><em class="icon ni ni-trash"></em></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                {{/sentMessages}}
                            </div>
                            <div class="nk-ibx-view">
                                <div class="nk-ibx-head">
                                    <div class="nk-ibx-head-actions">
                                        <ul class="nk-ibx-head-tools g-1">
                                            <li class="ml-n2"><a href="#" class="btn btn-icon btn-trigger nk-ibx-hide"><em class="icon ni ni-arrow-left"></em></a></li>
                                            <li><a href="#" data="sender" class="btnDelete deleteMessage btn btn-icon btn-trigger btn-tooltip" title="Delete"><em class="icon ni ni-trash"></em></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="nk-ibx-reply nk-reply" data-simplebar>
                                    <div class="nk-ibx-reply-group">
                                        {{#sentMessages}}
                                        <div id="{{id}}" class="messageView nk-ibx-reply-item nk-reply-item">
                                            <div class="nk-reply-header nk-ibx-reply-header">
                                                <div class="nk-reply-desc">
                                                    <div class="nk-reply-avatar user-avatar bg-blue">
                                                        <span>A</span>
                                                    </div>
                                                    <div class="nk-reply-info">
                                                        <div class="nk-reply-author lead-text">{{department}}<span class="date d-sm-none">{{messageDate}}</span></div>
                                                        <div class="nk-reply-msg-excerpt">{{{content}}}</div>
                                                        <div class="dropdown nk-reply-msg-info">
                                                            <span class="sub-text">to {{firstName}}&nbsp;{{lastName}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="nk-reply-tools g-1">
                                                    <li class="date-msg"><span class="date">{{messageDate}}</span></li>
                                                    <li class="replyto-msg"><a href="#" id="{{id}}" class="replyMessage btn btn-trigger btn-icon btn-tooltip" title="Reply"><em class="icon ni ni-curve-up-left"></em></a></li>
                                                    <li class="more-actions">
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle btn btn-trigger btn-icon" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a id="{{id}}" class="replyMessage dropdown-item" href="#"><em class="icon ni ni-reply-fill"></em><span>Reply to</span></a></li>
                                                                    <li><a id="{{id}}" data="sender" class="deleteMessage dropdown-item" href="#"><em class="icon ni ni-trash-fill"></em><span>Delete this</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="nk-reply-body nk-ibx-reply-body">
                                                <div class="nk-reply-entry entry">
                                                    {{{content}}}
                                                </div>
                                            </div>
                                        </div>
                                        {{/sentMessages}}
                                    </div>
                                </div>
                            </div>
                            {{/hasSent}}
                            {{^hasSent}}
                            <p>There is no sent message.</p>
                            {{/hasSent}}
                        </div>
                        <div id="spam">
                            <p>There is no spam message.</p>
                        </div>
                        <div id="trash">
                            {{#hasTrash}}
                            <div class="nk-ibx-list" data-simplebar>
                                {{#trashMessages}}
                                <div class="nk-ibx-item">
                                    <a href="#" id="{{id}}" class="messageItem nk-ibx-link"></a>
                                    <div class="nk-ibx-item-elem nk-ibx-item-user">
                                        <div class="user-card">
                                            <div class="user-avatar">
                                                {{#hasPhoto}}
                                                <img src={{userPhoto}}>
                                                {{/hasPhoto}}
                                                {{^hasPhoto}}
                                                <span>{{userPhoto}}</span>
                                                {{/hasPhoto}}
                                            </div>
                                            <div class="user-name">
                                                <div class="lead-text">{{firstName}}&nbsp;{{lastName}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                        <div class="nk-ibx-context-group">
                                            <div class="nk-ibx-context">
                                                <span class="nk-ibx-context-text">
                                                    <span class="heading">{{title}}</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-ibx-item-elem">
                                        <div class="sub-text">{{messageDate}}</div>
                                    </div>
                                </div>
                                {{/trashMessages}}
                            </div>
                            <div class="nk-ibx-view">
                                <div class="nk-ibx-head">
                                    <div class="nk-ibx-head-actions">
                                        <ul class="nk-ibx-head-tools g-1">
                                            <li class="ml-n2"><a href="#" class="btn btn-icon btn-trigger nk-ibx-hide"><em class="icon ni ni-arrow-left"></em></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="nk-ibx-reply nk-reply" data-simplebar>
                                    <div class="nk-ibx-reply-group">
                                        {{#trashMessages}}
                                        <div id="{{id}}" class="messageView nk-ibx-reply-item nk-reply-item">
                                            <div class="nk-reply-header nk-ibx-reply-header">
                                                <div class="nk-reply-desc">
                                                    <div class="nk-reply-avatar user-avatar bg-blue">
                                                        {{#hasPhoto}}
                                                        <img src={{userPhoto}}>
                                                        {{/hasPhoto}}
                                                        {{^hasPhoto}}
                                                        <span>{{userPhoto}}</span>
                                                        {{/hasPhoto}}
                                                    </div>
                                                    <div class="nk-reply-info">
                                                        <div class="nk-reply-author lead-text">{{firstName}}&nbsp;{{lastName}} <span class="date d-sm-none">{{messageDate}}</span></div>
                                                        <div class="nk-reply-msg-excerpt">{{{content}}}</div>
                                                    </div>
                                                </div>
                                                <ul class="nk-reply-tools g-1">
                                                    <li class="date-msg"><span class="date">{{messageDate}}</span></li>
                                                </ul>
                                            </div>
                                            <div class="nk-reply-body nk-ibx-reply-body">
                                                <div class="nk-reply-entry entry">
                                                    {{{content}}}
                                                </div>
                                            </div>
                                        </div>
                                        {{/trashMessages}}
                                    </div>
                                </div>
                            </div>
                            {{/hasTrash}}
                            {{^hasTrash}}
                            <p>There is no trash message.</p>
                            {{/hasTrash}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {

    $(\'#inbox\').show();
    $(\'#draft\').hide();
    $(\'#sent\').hide();
    $(\'#spam\').hide();
    $(\'#trash\').hide();

    $(\'.messageType li\').on(\'click\', function() {
        $(\'.messageType li\').each(function() {
            $(this).removeClass(\'active\');
            var id = $(this).attr(\'data\');
            $(\'#\'+ id).hide();
        });

        $(this).addClass(\'active\');
        var id = $(this).attr(\'data\');
        $(\'#\'+ id).show();
        $(\'#\'+ id +\' .nk-ibx-hide\').click();
    });

    $(\'.messageItem\').on(\'click\', function() {
        var messageId = $(this).attr(\'id\');
        $(\'.messageView\').each(function() {
            if ($(this).attr(\'id\') == messageId) {
                $(this).show();
                $(this).parents(\'.nk-ibx-view\').find(\'.btnDelete \').attr(\'id\', messageId);
            }
            else $(this).hide();
        });
    });

    $(\'.deleteMessage\').on(\'click\', function() {
        $.ajax({
                url: \'/messages\',
                type: \'POST\',
                data: {
                    type: \'delete\',
                    userType: $(this).attr(\'data\'),
                    id: $(this).attr(\'id\'),
                },
                success: function(data) {
                    location.reload();
                }
            });
    });

    $(\'.replyMessage\').on(\'click\', function() {
        $(\'#composeMessage\').click();
    });

    /*$(\'#checkAll\').on(\'click\', function() {
        var checked = $(this)[0].checked;
        $(\'.nk-ibx-item input[type="checkbox"]\').each(function() {
            $(this)[0].checked = checked;
        })
    });*/

	var clientOptions = "";
	var i = 0;
	{{#users}}
		clientOptions += "<option value=\'{{id}}\'>{{userName}}</option>";
		i ++;
	{{/users}}

	$(\'#adminMessageClient\').html(clientOptions);
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
                $buffer .= $indent . '    <style>
';
                $buffer .= $indent . '        .messageView {
';
                $buffer .= $indent . '            padding: 2rem 2.5rem !important;
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '        .red {
';
                $buffer .= $indent . '            color: #e85347 !important;
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    </style>
';
                $buffer .= $indent . '    <div class="container-fluid">
';
                $buffer .= $indent . '        <div class="nk-content-inner">
';
                $buffer .= $indent . '            <div class="nk-content-body">
';
                $buffer .= $indent . '                <div class="nk-ibx">
';
                $buffer .= $indent . '                    <div class="nk-ibx-aside" data-content="inbox-aside" data-toggle-overlay="true" data-toggle-screen="lg">
';
                $buffer .= $indent . '                        <div class="nk-ibx-head">
';
                $buffer .= $indent . '                            <h5 class="mb-0">EMail</h5>
';
                $buffer .= $indent . '                            <a href="#" class="link link-primary" id="composeMessage" data-toggle="modal" data-target="#compose-admin-mail"><em class="icon ni ni-plus"></em> <span>Compose</span></a>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="nk-ibx-nav" data-simplebar>
';
                $buffer .= $indent . '                            <ul class="messageType nk-ibx-menu">
';
                $buffer .= $indent . '                                <li class="active" data="inbox">
';
                $buffer .= $indent . '                                    <a class="nk-ibx-menu-item" href="#">
';
                $buffer .= $indent . '                                        <em class="icon ni ni-inbox"></em>
';
                $buffer .= $indent . '                                        <span class="nk-ibx-menu-text">Inbox</span>
';
                $buffer .= $indent . '                                        <span class="badge badge-pill badge-light">';
                $value = $this->resolveValue($context->find('inboxCount'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                    </a>
';
                $buffer .= $indent . '                                </li>
';
                $buffer .= $indent . '                                <li data="draft">
';
                $buffer .= $indent . '                                    <a class="nk-ibx-menu-item" href="#">
';
                $buffer .= $indent . '                                        <em class="icon ni ni-edit"></em>
';
                $buffer .= $indent . '                                        <span class="nk-ibx-menu-text">Draft</span>
';
                $buffer .= $indent . '                                        <span class="badge badge-pill badge-light">';
                $value = $this->resolveValue($context->find('draftCount'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                    </a>
';
                $buffer .= $indent . '                                </li>
';
                $buffer .= $indent . '                                <li data="sent">
';
                $buffer .= $indent . '                                    <a class="nk-ibx-menu-item" href="#">
';
                $buffer .= $indent . '                                        <em class="icon ni ni-send"></em>
';
                $buffer .= $indent . '                                        <span class="nk-ibx-menu-text">Sent</span>
';
                $buffer .= $indent . '                                        <span class="badge badge-pill badge-light">';
                $value = $this->resolveValue($context->find('sentCount'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                    </a>
';
                $buffer .= $indent . '                                </li>
';
                $buffer .= $indent . '                                <li data="spam">
';
                $buffer .= $indent . '                                    <a class="nk-ibx-menu-item" href="#">
';
                $buffer .= $indent . '                                        <em class="icon ni ni-report"></em>
';
                $buffer .= $indent . '                                        <span class="nk-ibx-menu-text">Spam</span>
';
                $buffer .= $indent . '                                    </a>
';
                $buffer .= $indent . '                                </li>
';
                $buffer .= $indent . '                                <li data="trash">
';
                $buffer .= $indent . '                                    <a class="nk-ibx-menu-item" href="#">
';
                $buffer .= $indent . '                                        <em class="icon ni ni-trash"></em>
';
                $buffer .= $indent . '                                        <span class="nk-ibx-menu-text">Trash</span>
';
                $buffer .= $indent . '                                        <span class="badge badge-pill badge-danger badge-dim">';
                $value = $this->resolveValue($context->find('trashCount'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                    </a>
';
                $buffer .= $indent . '                                </li>
';
                $buffer .= $indent . '                            </ul>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="nk-ibx-body bg-white">
';
                $buffer .= $indent . '                        <div class="nk-ibx-head d-flex flex-row-reverse">
';
                $buffer .= $indent . '                            <ul class="nk-ibx-head-tools g-1">
';
                $buffer .= $indent . '                                <li class="mr-n1 d-lg-none"><a href="#" class="btn btn-trigger btn-icon toggle" data-target="inbox-aside"><em class="icon ni ni-menu-alt-r"></em></a></li>
';
                $buffer .= $indent . '                            </ul>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div id="inbox">
';
                // 'hasInbox' section
                $value = $context->find('hasInbox');
                $buffer .= $this->sectionAe613838aeb5cfc2444f349467fbd9b6($context, $indent, $value);
                // 'hasInbox' inverted section
                $value = $context->find('hasInbox');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                            <p>There is no inbox message.</p>
';
                }
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div id="draft">
';
                // 'hasDraft' section
                $value = $context->find('hasDraft');
                $buffer .= $this->section8029293857f63ffbbb0876eec9a36ed1($context, $indent, $value);
                // 'hasDraft' inverted section
                $value = $context->find('hasDraft');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                            <p>There is no draft message</p>
';
                }
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div id="sent">
';
                // 'hasSent' section
                $value = $context->find('hasSent');
                $buffer .= $this->section36320d2aba9064d106298064423348a7($context, $indent, $value);
                // 'hasSent' inverted section
                $value = $context->find('hasSent');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                            <p>There is no sent message.</p>
';
                }
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div id="spam">
';
                $buffer .= $indent . '                            <p>There is no spam message.</p>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div id="trash">
';
                // 'hasTrash' section
                $value = $context->find('hasTrash');
                $buffer .= $this->sectionB4ca634be77e2728f0d2dc3308d9a181($context, $indent, $value);
                // 'hasTrash' inverted section
                $value = $context->find('hasTrash');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                            <p>There is no trash message.</p>
';
                }
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
                $buffer .= $indent . '<script>
';
                $buffer .= $indent . '$(document).ready(function() {
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'#inbox\').show();
';
                $buffer .= $indent . '    $(\'#draft\').hide();
';
                $buffer .= $indent . '    $(\'#sent\').hide();
';
                $buffer .= $indent . '    $(\'#spam\').hide();
';
                $buffer .= $indent . '    $(\'#trash\').hide();
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'.messageType li\').on(\'click\', function() {
';
                $buffer .= $indent . '        $(\'.messageType li\').each(function() {
';
                $buffer .= $indent . '            $(this).removeClass(\'active\');
';
                $buffer .= $indent . '            var id = $(this).attr(\'data\');
';
                $buffer .= $indent . '            $(\'#\'+ id).hide();
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        $(this).addClass(\'active\');
';
                $buffer .= $indent . '        var id = $(this).attr(\'data\');
';
                $buffer .= $indent . '        $(\'#\'+ id).show();
';
                $buffer .= $indent . '        $(\'#\'+ id +\' .nk-ibx-hide\').click();
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'.messageItem\').on(\'click\', function() {
';
                $buffer .= $indent . '        var messageId = $(this).attr(\'id\');
';
                $buffer .= $indent . '        $(\'.messageView\').each(function() {
';
                $buffer .= $indent . '            if ($(this).attr(\'id\') == messageId) {
';
                $buffer .= $indent . '                $(this).show();
';
                $buffer .= $indent . '                $(this).parents(\'.nk-ibx-view\').find(\'.btnDelete \').attr(\'id\', messageId);
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '            else $(this).hide();
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'.deleteMessage\').on(\'click\', function() {
';
                $buffer .= $indent . '        $.ajax({
';
                $buffer .= $indent . '                url: \'/messages\',
';
                $buffer .= $indent . '                type: \'POST\',
';
                $buffer .= $indent . '                data: {
';
                $buffer .= $indent . '                    type: \'delete\',
';
                $buffer .= $indent . '                    userType: $(this).attr(\'data\'),
';
                $buffer .= $indent . '                    id: $(this).attr(\'id\'),
';
                $buffer .= $indent . '                },
';
                $buffer .= $indent . '                success: function(data) {
';
                $buffer .= $indent . '                    location.reload();
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '            });
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'.replyMessage\').on(\'click\', function() {
';
                $buffer .= $indent . '        $(\'#composeMessage\').click();
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    /*$(\'#checkAll\').on(\'click\', function() {
';
                $buffer .= $indent . '        var checked = $(this)[0].checked;
';
                $buffer .= $indent . '        $(\'.nk-ibx-item input[type="checkbox"]\').each(function() {
';
                $buffer .= $indent . '            $(this)[0].checked = checked;
';
                $buffer .= $indent . '        })
';
                $buffer .= $indent . '    });*/
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '	var clientOptions = "";
';
                $buffer .= $indent . '	var i = 0;
';
                // 'users' section
                $value = $context->find('users');
                $buffer .= $this->sectionFc045b4a49314c69044ae862dbc5874c($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '	$(\'#adminMessageClient\').html(clientOptions);
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
