<?php

class __MyTemplates_df3906c398a385ce4c0af70e90b3dbd0 extends Mustache_Template
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
        $buffer .= $this->section1b50a2ea57f4dc8e528380e9b183ae8c($context, $indent, $value);

        return $buffer;
    }

    private function sectionA2349b8bd287c2ca34f47958b8cedc45(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                var mockFile = { name: "{{name}}", size: {{size}} };
                myDropzone.emit("addedfile", mockFile);
                myDropzone.emit("thumbnail", mockFile, "{{path}}");
                myDropzone.emit("complete", mockFile);
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
                
                $buffer .= $indent . '                var mockFile = { name: "';
                $value = $this->resolveValue($context->find('name'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '", size: ';
                $value = $this->resolveValue($context->find('size'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' };
';
                $buffer .= $indent . '                myDropzone.emit("addedfile", mockFile);
';
                $buffer .= $indent . '                myDropzone.emit("thumbnail", mockFile, "';
                $value = $this->resolveValue($context->find('path'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '");
';
                $buffer .= $indent . '                myDropzone.emit("complete", mockFile);
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section772daf8fbad38749aa6ddcd31a56ed1b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
    Dropzone.options.photoIdUpload = {
        maxFilesize: 2,
        acceptedFiles: "image/*,application/pdf,.doc,.docx,",
        init: function() { 
            var myDropzone = this;
            {{#photoIdList}}
                var mockFile = { name: "{{name}}", size: {{size}} };
                myDropzone.emit("addedfile", mockFile);
                myDropzone.emit("thumbnail", mockFile, "{{path}}");
                myDropzone.emit("complete", mockFile);
            {{/photoIdList}}
        }
    }

    Dropzone.options.addressProofUpload = {
        maxFilesize: 2,
        acceptedFiles: "image/*,application/pdf,.doc,.docx,",
        init: function() { 
            var myDropzone = this;
            {{#addressProofList}}
                var mockFile = { name: "{{name}}", size: {{size}} };
                myDropzone.emit("addedfile", mockFile);
                myDropzone.emit("thumbnail", mockFile, "{{path}}");
                myDropzone.emit("complete", mockFile);
            {{/addressProofList}}
        }
    }
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
                
                $buffer .= $indent . '    Dropzone.options.photoIdUpload = {
';
                $buffer .= $indent . '        maxFilesize: 2,
';
                $buffer .= $indent . '        acceptedFiles: "image/*,application/pdf,.doc,.docx,",
';
                $buffer .= $indent . '        init: function() { 
';
                $buffer .= $indent . '            var myDropzone = this;
';
                // 'photoIdList' section
                $value = $context->find('photoIdList');
                $buffer .= $this->sectionA2349b8bd287c2ca34f47958b8cedc45($context, $indent, $value);
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    Dropzone.options.addressProofUpload = {
';
                $buffer .= $indent . '        maxFilesize: 2,
';
                $buffer .= $indent . '        acceptedFiles: "image/*,application/pdf,.doc,.docx,",
';
                $buffer .= $indent . '        init: function() { 
';
                $buffer .= $indent . '            var myDropzone = this;
';
                // 'addressProofList' section
                $value = $context->find('addressProofList');
                $buffer .= $this->sectionA2349b8bd287c2ca34f47958b8cedc45($context, $indent, $value);
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    }
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4eec5fde0e68ba8f9521db7fc033b0e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
<div class="nk-content">
    <div class="container-fluid">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <div class="nk-block-head-sub"><span>My Profile</span></div>
                <h2 class="nk-block-title fw-normal">Account Info</h2>      
            </div>
            <hr>
        </div>
        <div class="nk-block">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h5 class="nk-block-title">Personal Details</h5>
                    <div class="nk-block-des">
                    <p>Edit your personal details. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
                </div>
                </div>
            </div>
            <div class="card card-bordered">
                <div class="nk-data data-list">
                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                        <div class="data-col">
                            <span class="data-label">Full Name</span>
                            <span class="data-value">{{firstName}}&nbsp;{{lastName}}</span>
                        </div>
                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                    </div>
                    <div class="data-item">
                        <div class="data-col">
                            <span class="data-label">Email</span>
                            <span class="data-value">{{email}}</span>
                        </div>
                        <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                    </div>
                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                        <div class="data-col">
                            <span class="data-label">Phone Number</span>
                            <span class="data-value">{{mainContactNumber}}</span>
                        </div>
                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                    </div>
                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                        <div class="data-col">
                            <span class="data-label">Date of Birth</span>
                            <span class="data-value">{{dateOfBirth}}</span>
                        </div>
                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                    </div>
                    <div class="data-item" data-toggle="modal" data-target="#profile-edit" data-tab-target="#address">
                        <div class="data-col">
                            <span class="data-label">Address</span>
                            <span class="data-value">{{addressLine1}}</span>
                        </div>
                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                    </div>
                </div>
            </div>
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h5 class="nk-block-title">Account Preferences</h5>
                    <div class="nk-block-des">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="card card-bordered">
                <div class="nk-data data-list">
                    <div class="data-item">
                        <div class="data-col">
                            <span class="data-label">Language</span>
                            <span class="data-value">English (United Kingdom)</span>
                        </div>
                        <div class="data-col data-col-end"></div>
                    </div>
                    <div class="data-item">
                        <div class="data-col">
                            <span class="data-label">Date Format</span>
                            <span class="data-value">DD MM YY</span>
                        </div>
                        <div class="data-col data-col-end"><a href="#" data-toggle="modal" data-target="#profile-language" class="link link-primary">Change</a></div>
                    </div>
                    <div class="data-item">
                        <div class="data-col">
                            <span class="data-label">Timezone</span>
                            <span class="data-value">London GMT</span>
                        </div>
                        <div class="data-col data-col-end"><a href="#" data-toggle="modal" data-target="#profile-language" class="link link-primary">Change</a></div>
                    </div>
                    <div class="data-item">
                        <div class="data-col">
                            <span class="data-label">Password</span>
                            <span class="data-value">**********</span>
                        </div>
                        <div class="data-col data-col-end"><a href="/accountSecurity" class="link link-primary">Change</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-block">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h5 class="nk-block-title"> KYC AML Documents</h5>
                    <div class="nk-block-des">
                        <p>In order to comply with international <b>KYC & Anti Money Laundering Regulations</b> we require all clients to upload a current Photographic ID & a Proof of Address.</p>
                    </div>
                </div>
            </div>
            <div class="container row">
                <div class="nk-kycfm-upload col-lg-6">
                    <p class="title nk-kycfm-upload-title"><b>PHOTOGRAPHIC ID</b> i.e Passport or driving licence</p>
                    <div class="row align-items-center">
                        <div class="col-sm-8">
                            <div class="nk-kycfm-upload-box">
                                <form action="/personDetails" class="dropzone needsclick dz-clickable" id="photoIdUpload">
                                    <input type="hidden" name="photoId" value="1">
                                    <div class="dz-message needsclick">
                                        <span class="note needsclick">Drag and drop file</span>
                                        <span class="dz-message-or">or</span>
                                        <span class="note needsclick btn btn-primary" style="width: 50%; color: white; margin: auto;">SELECT</span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-4 d-none d-sm-block">
                            <div class="mx-md-4">
                                <img src="./assets/images/icons/id-front.svg" alt="ID Front">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-kycfm-upload col-lg-6" style="margin-top: 0">
                    <p class="title nk-kycfm-upload-title"><b>PROOF OF ADDRESS</b> i.e Utility bill no older than 3 months</p>
                    <div class="row align-items-center">
                        <div class="col-sm-8">
                            <div class="nk-kycfm-upload-box">
                                <form action="/personDetails" class="dropzone needsclick dz-clickable" id="addressProofUpload">
                                    <input type="hidden" name="addressProof" value="1">
                                    <div class="dz-message needsclick">
                                        <span class="note needsclick">Drag and drop file</span>
                                        <span class="dz-message-or">or</span>
                                        <span class="note needsclick btn btn-primary" style="width: 50%; color: white; margin: auto;">SELECT</span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-4 d-none d-sm-block">
                            <div class="mx-md-4">
                                <img src="./assets/images/icons/id-back.svg" alt="ID Back">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-block">
            <div class="nk-block-head">
                <div class="nk-block-between-md g-4">
                    <div class="nk-block">
                        <h5 class="nk-block-title">My Referrals</h5>
                        <div class="nk-block-des">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-bordered">
                <table class="table table-tranx table-billing">
                    <thead>
                        <tr class="tb-tnx-head">
                            <th class="tb-tnx-id"><span class="">#</span></th>
                            <th class="tb-tnx-info">
                                <span class="tb-tnx-desc d-none d-sm-inline-block">
                                    <span>Referral Name</span>
                                </span>
                                <span class="tb-tnx-date d-md-inline-block d-none">
                                    <span class="d-md-none">Date</span>
                                    <span class="d-none d-md-block">
                                        <span>Email Address</span>
                                        <span>Sign Up Date</span>
                                    </span>
                                </span>
                            </th>
                            <th class="tb-tnx-amount">
                                <span class="tb-tnx-total">Initial Deposit</span>
                                <span class="tb-tnx-status d-none d-md-inline-block">Status</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="tb-tnx-item">
                            <td class="tb-tnx-id">
                                <a href="#"><span></span></a>
                            </td>
                            <td class="tb-tnx-info">
                                <div class="tb-tnx-desc">
                                    <span class="title"> </span>
                                </div>
                                <div class="tb-tnx-date">
                                    <span class="date"></span>
                                    <span class="date"></span>
                                </div>
                            </td>
                            <td class="tb-tnx-amount">
                                <div class="tb-tnx-total">
                                    <span class="amount"></span>
                                </div>
                                <div class="tb-tnx-status">
                                    <span class="badge badge-dot badge-success"></span>
                                </div>
                            </td>
                        </tr>
                        <tr class="tb-tnx-item">
                            <td class="tb-tnx-id">
                                <a href="#"><span></span></a>
                            </td>
                            <td class="tb-tnx-info">
                                <div class="tb-tnx-desc">
                                    <span class="title"></span>
                                </div>
                                <div class="tb-tnx-date">
                                    <span class="date"></span>
                                    <span class="date"></span>
                                </div>
                            </td>
                            <td class="tb-tnx-amount">
                                <div class="tb-tnx-total">
                                    <span class="amount"></span>
                                </div>
                                <div class="tb-tnx-status"><span class="badge badge-dot badge-success"></span></div>
                            </td>
                        </tr>
                        <tr class="tb-tnx-item">
                            <td class="tb-tnx-id">
                                <a href="#"><span></span></a>
                            </td>
                            <td class="tb-tnx-info">
                                <div class="tb-tnx-desc">
                                    <span class="title"></span>
                                </div>
                                <div class="tb-tnx-date">
                                    <span class="date"></span>
                                    <span class="date"></span>
                                </div>
                            </td>
                            <td class="tb-tnx-amount">
                                <div class="tb-tnx-total">
                                    <span class="amount"></span>
                                </div>
                                <div class="tb-tnx-status"><span class="badge badge-dot badge-warning"></span></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="nk-block mt-5">
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

    {{#data}}
    Dropzone.options.photoIdUpload = {
        maxFilesize: 2,
        acceptedFiles: "image/*,application/pdf,.doc,.docx,",
        init: function() { 
            var myDropzone = this;
            {{#photoIdList}}
                var mockFile = { name: "{{name}}", size: {{size}} };
                myDropzone.emit("addedfile", mockFile);
                myDropzone.emit("thumbnail", mockFile, "{{path}}");
                myDropzone.emit("complete", mockFile);
            {{/photoIdList}}
        }
    }

    Dropzone.options.addressProofUpload = {
        maxFilesize: 2,
        acceptedFiles: "image/*,application/pdf,.doc,.docx,",
        init: function() { 
            var myDropzone = this;
            {{#addressProofList}}
                var mockFile = { name: "{{name}}", size: {{size}} };
                myDropzone.emit("addedfile", mockFile);
                myDropzone.emit("thumbnail", mockFile, "{{path}}");
                myDropzone.emit("complete", mockFile);
            {{/addressProofList}}
        }
    }
    {{/data}}

    $(document).ready(function() {
        var firstName = "{{{firstName}}}";
        var lastName = "{{{lastName}}}";
        var phoneNumber = "{{{mainContactNumber}}}";
        var dateOfBirth = "{{{dateOfBirth}}}";
        var addressLine1 = "{{{addressLine1}}}";
        var addressLine2 = "{{{addressLine2}}}";
        var country = "{{{country}}}";
        var county = "{{{county}}}";

        $(\'#firstName\').val(firstName);
        $(\'#lastName\').val(lastName);
        $(\'#phoneNumber\').val(phoneNumber);
        $(\'#dateOfBirth\').val(dateOfBirth);
        $(\'#addressLine1\').val(addressLine1);
        $(\'#addressLine2\').val(addressLine2);
        $(\'#country1\').val(country).change();
        $(\'#county\').val(county);

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
                
                $buffer .= $indent . '<div class="nk-content">
';
                $buffer .= $indent . '    <div class="container-fluid">
';
                $buffer .= $indent . '        <div class="nk-block-head">
';
                $buffer .= $indent . '            <div class="nk-block-head-content">
';
                $buffer .= $indent . '                <div class="nk-block-head-sub"><span>My Profile</span></div>
';
                $buffer .= $indent . '                <h2 class="nk-block-title fw-normal">Account Info</h2>      
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <hr>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="nk-block">
';
                $buffer .= $indent . '            <div class="nk-block-head">
';
                $buffer .= $indent . '                <div class="nk-block-head-content">
';
                $buffer .= $indent . '                    <h5 class="nk-block-title">Personal Details</h5>
';
                $buffer .= $indent . '                    <div class="nk-block-des">
';
                $buffer .= $indent . '                    <p>Edit your personal details. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="card card-bordered">
';
                $buffer .= $indent . '                <div class="nk-data data-list">
';
                $buffer .= $indent . '                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
';
                $buffer .= $indent . '                        <div class="data-col">
';
                $buffer .= $indent . '                            <span class="data-label">Full Name</span>
';
                $buffer .= $indent . '                            <span class="data-value">';
                $value = $this->resolveValue($context->find('firstName'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&nbsp;';
                $value = $this->resolveValue($context->find('lastName'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="data-item">
';
                $buffer .= $indent . '                        <div class="data-col">
';
                $buffer .= $indent . '                            <span class="data-label">Email</span>
';
                $buffer .= $indent . '                            <span class="data-value">';
                $value = $this->resolveValue($context->find('email'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
';
                $buffer .= $indent . '                        <div class="data-col">
';
                $buffer .= $indent . '                            <span class="data-label">Phone Number</span>
';
                $buffer .= $indent . '                            <span class="data-value">';
                $value = $this->resolveValue($context->find('mainContactNumber'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
';
                $buffer .= $indent . '                        <div class="data-col">
';
                $buffer .= $indent . '                            <span class="data-label">Date of Birth</span>
';
                $buffer .= $indent . '                            <span class="data-value">';
                $value = $this->resolveValue($context->find('dateOfBirth'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="data-item" data-toggle="modal" data-target="#profile-edit" data-tab-target="#address">
';
                $buffer .= $indent . '                        <div class="data-col">
';
                $buffer .= $indent . '                            <span class="data-label">Address</span>
';
                $buffer .= $indent . '                            <span class="data-value">';
                $value = $this->resolveValue($context->find('addressLine1'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="nk-block-head">
';
                $buffer .= $indent . '                <div class="nk-block-head-content">
';
                $buffer .= $indent . '                    <h5 class="nk-block-title">Account Preferences</h5>
';
                $buffer .= $indent . '                    <div class="nk-block-des">
';
                $buffer .= $indent . '                        <p></p>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="card card-bordered">
';
                $buffer .= $indent . '                <div class="nk-data data-list">
';
                $buffer .= $indent . '                    <div class="data-item">
';
                $buffer .= $indent . '                        <div class="data-col">
';
                $buffer .= $indent . '                            <span class="data-label">Language</span>
';
                $buffer .= $indent . '                            <span class="data-value">English (United Kingdom)</span>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="data-col data-col-end"></div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="data-item">
';
                $buffer .= $indent . '                        <div class="data-col">
';
                $buffer .= $indent . '                            <span class="data-label">Date Format</span>
';
                $buffer .= $indent . '                            <span class="data-value">DD MM YY</span>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="data-col data-col-end"><a href="#" data-toggle="modal" data-target="#profile-language" class="link link-primary">Change</a></div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="data-item">
';
                $buffer .= $indent . '                        <div class="data-col">
';
                $buffer .= $indent . '                            <span class="data-label">Timezone</span>
';
                $buffer .= $indent . '                            <span class="data-value">London GMT</span>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="data-col data-col-end"><a href="#" data-toggle="modal" data-target="#profile-language" class="link link-primary">Change</a></div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="data-item">
';
                $buffer .= $indent . '                        <div class="data-col">
';
                $buffer .= $indent . '                            <span class="data-label">Password</span>
';
                $buffer .= $indent . '                            <span class="data-value">**********</span>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="data-col data-col-end"><a href="/accountSecurity" class="link link-primary">Change</a></div>
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
                $buffer .= $indent . '            <div class="nk-block-head">
';
                $buffer .= $indent . '                <div class="nk-block-head-content">
';
                $buffer .= $indent . '                    <h5 class="nk-block-title"> KYC AML Documents</h5>
';
                $buffer .= $indent . '                    <div class="nk-block-des">
';
                $buffer .= $indent . '                        <p>In order to comply with international <b>KYC & Anti Money Laundering Regulations</b> we require all clients to upload a current Photographic ID & a Proof of Address.</p>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="container row">
';
                $buffer .= $indent . '                <div class="nk-kycfm-upload col-lg-6">
';
                $buffer .= $indent . '                    <p class="title nk-kycfm-upload-title"><b>PHOTOGRAPHIC ID</b> i.e Passport or driving licence</p>
';
                $buffer .= $indent . '                    <div class="row align-items-center">
';
                $buffer .= $indent . '                        <div class="col-sm-8">
';
                $buffer .= $indent . '                            <div class="nk-kycfm-upload-box">
';
                $buffer .= $indent . '                                <form action="/personDetails" class="dropzone needsclick dz-clickable" id="photoIdUpload">
';
                $buffer .= $indent . '                                    <input type="hidden" name="photoId" value="1">
';
                $buffer .= $indent . '                                    <div class="dz-message needsclick">
';
                $buffer .= $indent . '                                        <span class="note needsclick">Drag and drop file</span>
';
                $buffer .= $indent . '                                        <span class="dz-message-or">or</span>
';
                $buffer .= $indent . '                                        <span class="note needsclick btn btn-primary" style="width: 50%; color: white; margin: auto;">SELECT</span>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </form>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="col-sm-4 d-none d-sm-block">
';
                $buffer .= $indent . '                            <div class="mx-md-4">
';
                $buffer .= $indent . '                                <img src="./assets/images/icons/id-front.svg" alt="ID Front">
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="nk-kycfm-upload col-lg-6" style="margin-top: 0">
';
                $buffer .= $indent . '                    <p class="title nk-kycfm-upload-title"><b>PROOF OF ADDRESS</b> i.e Utility bill no older than 3 months</p>
';
                $buffer .= $indent . '                    <div class="row align-items-center">
';
                $buffer .= $indent . '                        <div class="col-sm-8">
';
                $buffer .= $indent . '                            <div class="nk-kycfm-upload-box">
';
                $buffer .= $indent . '                                <form action="/personDetails" class="dropzone needsclick dz-clickable" id="addressProofUpload">
';
                $buffer .= $indent . '                                    <input type="hidden" name="addressProof" value="1">
';
                $buffer .= $indent . '                                    <div class="dz-message needsclick">
';
                $buffer .= $indent . '                                        <span class="note needsclick">Drag and drop file</span>
';
                $buffer .= $indent . '                                        <span class="dz-message-or">or</span>
';
                $buffer .= $indent . '                                        <span class="note needsclick btn btn-primary" style="width: 50%; color: white; margin: auto;">SELECT</span>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </form>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="col-sm-4 d-none d-sm-block">
';
                $buffer .= $indent . '                            <div class="mx-md-4">
';
                $buffer .= $indent . '                                <img src="./assets/images/icons/id-back.svg" alt="ID Back">
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
                $buffer .= $indent . '        <div class="nk-block">
';
                $buffer .= $indent . '            <div class="nk-block-head">
';
                $buffer .= $indent . '                <div class="nk-block-between-md g-4">
';
                $buffer .= $indent . '                    <div class="nk-block">
';
                $buffer .= $indent . '                        <h5 class="nk-block-title">My Referrals</h5>
';
                $buffer .= $indent . '                        <div class="nk-block-des">
';
                $buffer .= $indent . '                            <p></p>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="card card-bordered">
';
                $buffer .= $indent . '                <table class="table table-tranx table-billing">
';
                $buffer .= $indent . '                    <thead>
';
                $buffer .= $indent . '                        <tr class="tb-tnx-head">
';
                $buffer .= $indent . '                            <th class="tb-tnx-id"><span class="">#</span></th>
';
                $buffer .= $indent . '                            <th class="tb-tnx-info">
';
                $buffer .= $indent . '                                <span class="tb-tnx-desc d-none d-sm-inline-block">
';
                $buffer .= $indent . '                                    <span>Referral Name</span>
';
                $buffer .= $indent . '                                </span>
';
                $buffer .= $indent . '                                <span class="tb-tnx-date d-md-inline-block d-none">
';
                $buffer .= $indent . '                                    <span class="d-md-none">Date</span>
';
                $buffer .= $indent . '                                    <span class="d-none d-md-block">
';
                $buffer .= $indent . '                                        <span>Email Address</span>
';
                $buffer .= $indent . '                                        <span>Sign Up Date</span>
';
                $buffer .= $indent . '                                    </span>
';
                $buffer .= $indent . '                                </span>
';
                $buffer .= $indent . '                            </th>
';
                $buffer .= $indent . '                            <th class="tb-tnx-amount">
';
                $buffer .= $indent . '                                <span class="tb-tnx-total">Initial Deposit</span>
';
                $buffer .= $indent . '                                <span class="tb-tnx-status d-none d-md-inline-block">Status</span>
';
                $buffer .= $indent . '                            </th>
';
                $buffer .= $indent . '                        </tr>
';
                $buffer .= $indent . '                    </thead>
';
                $buffer .= $indent . '                    <tbody>
';
                $buffer .= $indent . '                        <tr class="tb-tnx-item">
';
                $buffer .= $indent . '                            <td class="tb-tnx-id">
';
                $buffer .= $indent . '                                <a href="#"><span></span></a>
';
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                            <td class="tb-tnx-info">
';
                $buffer .= $indent . '                                <div class="tb-tnx-desc">
';
                $buffer .= $indent . '                                    <span class="title"> </span>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="tb-tnx-date">
';
                $buffer .= $indent . '                                    <span class="date"></span>
';
                $buffer .= $indent . '                                    <span class="date"></span>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                            <td class="tb-tnx-amount">
';
                $buffer .= $indent . '                                <div class="tb-tnx-total">
';
                $buffer .= $indent . '                                    <span class="amount"></span>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="tb-tnx-status">
';
                $buffer .= $indent . '                                    <span class="badge badge-dot badge-success"></span>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                        </tr>
';
                $buffer .= $indent . '                        <tr class="tb-tnx-item">
';
                $buffer .= $indent . '                            <td class="tb-tnx-id">
';
                $buffer .= $indent . '                                <a href="#"><span></span></a>
';
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                            <td class="tb-tnx-info">
';
                $buffer .= $indent . '                                <div class="tb-tnx-desc">
';
                $buffer .= $indent . '                                    <span class="title"></span>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="tb-tnx-date">
';
                $buffer .= $indent . '                                    <span class="date"></span>
';
                $buffer .= $indent . '                                    <span class="date"></span>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                            <td class="tb-tnx-amount">
';
                $buffer .= $indent . '                                <div class="tb-tnx-total">
';
                $buffer .= $indent . '                                    <span class="amount"></span>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="tb-tnx-status"><span class="badge badge-dot badge-success"></span></div>
';
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                        </tr>
';
                $buffer .= $indent . '                        <tr class="tb-tnx-item">
';
                $buffer .= $indent . '                            <td class="tb-tnx-id">
';
                $buffer .= $indent . '                                <a href="#"><span></span></a>
';
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                            <td class="tb-tnx-info">
';
                $buffer .= $indent . '                                <div class="tb-tnx-desc">
';
                $buffer .= $indent . '                                    <span class="title"></span>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="tb-tnx-date">
';
                $buffer .= $indent . '                                    <span class="date"></span>
';
                $buffer .= $indent . '                                    <span class="date"></span>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                            <td class="tb-tnx-amount">
';
                $buffer .= $indent . '                                <div class="tb-tnx-total">
';
                $buffer .= $indent . '                                    <span class="amount"></span>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="tb-tnx-status"><span class="badge badge-dot badge-warning"></span></div>
';
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                        </tr>
';
                $buffer .= $indent . '                    </tbody>
';
                $buffer .= $indent . '                </table>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="nk-block mt-5">
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
                $buffer .= $indent . '
';
                // 'data' section
                $value = $context->find('data');
                $buffer .= $this->section772daf8fbad38749aa6ddcd31a56ed1b($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(document).ready(function() {
';
                $buffer .= $indent . '        var firstName = "';
                $value = $this->resolveValue($context->find('firstName'), $context, $indent);
                $buffer .= $value;
                $buffer .= '";
';
                $buffer .= $indent . '        var lastName = "';
                $value = $this->resolveValue($context->find('lastName'), $context, $indent);
                $buffer .= $value;
                $buffer .= '";
';
                $buffer .= $indent . '        var phoneNumber = "';
                $value = $this->resolveValue($context->find('mainContactNumber'), $context, $indent);
                $buffer .= $value;
                $buffer .= '";
';
                $buffer .= $indent . '        var dateOfBirth = "';
                $value = $this->resolveValue($context->find('dateOfBirth'), $context, $indent);
                $buffer .= $value;
                $buffer .= '";
';
                $buffer .= $indent . '        var addressLine1 = "';
                $value = $this->resolveValue($context->find('addressLine1'), $context, $indent);
                $buffer .= $value;
                $buffer .= '";
';
                $buffer .= $indent . '        var addressLine2 = "';
                $value = $this->resolveValue($context->find('addressLine2'), $context, $indent);
                $buffer .= $value;
                $buffer .= '";
';
                $buffer .= $indent . '        var country = "';
                $value = $this->resolveValue($context->find('country'), $context, $indent);
                $buffer .= $value;
                $buffer .= '";
';
                $buffer .= $indent . '        var county = "';
                $value = $this->resolveValue($context->find('county'), $context, $indent);
                $buffer .= $value;
                $buffer .= '";
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        $(\'#firstName\').val(firstName);
';
                $buffer .= $indent . '        $(\'#lastName\').val(lastName);
';
                $buffer .= $indent . '        $(\'#phoneNumber\').val(phoneNumber);
';
                $buffer .= $indent . '        $(\'#dateOfBirth\').val(dateOfBirth);
';
                $buffer .= $indent . '        $(\'#addressLine1\').val(addressLine1);
';
                $buffer .= $indent . '        $(\'#addressLine2\').val(addressLine2);
';
                $buffer .= $indent . '        $(\'#country1\').val(country).change();
';
                $buffer .= $indent . '        $(\'#county\').val(county);
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '</script>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1b50a2ea57f4dc8e528380e9b183ae8c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
{{#user}}
<div class="nk-content">
    <div class="container-fluid">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <div class="nk-block-head-sub"><span>My Profile</span></div>
                <h2 class="nk-block-title fw-normal">Account Info</h2>      
            </div>
            <hr>
        </div>
        <div class="nk-block">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h5 class="nk-block-title">Personal Details</h5>
                    <div class="nk-block-des">
                    <p>Edit your personal details. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
                </div>
                </div>
            </div>
            <div class="card card-bordered">
                <div class="nk-data data-list">
                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                        <div class="data-col">
                            <span class="data-label">Full Name</span>
                            <span class="data-value">{{firstName}}&nbsp;{{lastName}}</span>
                        </div>
                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                    </div>
                    <div class="data-item">
                        <div class="data-col">
                            <span class="data-label">Email</span>
                            <span class="data-value">{{email}}</span>
                        </div>
                        <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                    </div>
                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                        <div class="data-col">
                            <span class="data-label">Phone Number</span>
                            <span class="data-value">{{mainContactNumber}}</span>
                        </div>
                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                    </div>
                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                        <div class="data-col">
                            <span class="data-label">Date of Birth</span>
                            <span class="data-value">{{dateOfBirth}}</span>
                        </div>
                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                    </div>
                    <div class="data-item" data-toggle="modal" data-target="#profile-edit" data-tab-target="#address">
                        <div class="data-col">
                            <span class="data-label">Address</span>
                            <span class="data-value">{{addressLine1}}</span>
                        </div>
                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                    </div>
                </div>
            </div>
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h5 class="nk-block-title">Account Preferences</h5>
                    <div class="nk-block-des">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="card card-bordered">
                <div class="nk-data data-list">
                    <div class="data-item">
                        <div class="data-col">
                            <span class="data-label">Language</span>
                            <span class="data-value">English (United Kingdom)</span>
                        </div>
                        <div class="data-col data-col-end"></div>
                    </div>
                    <div class="data-item">
                        <div class="data-col">
                            <span class="data-label">Date Format</span>
                            <span class="data-value">DD MM YY</span>
                        </div>
                        <div class="data-col data-col-end"><a href="#" data-toggle="modal" data-target="#profile-language" class="link link-primary">Change</a></div>
                    </div>
                    <div class="data-item">
                        <div class="data-col">
                            <span class="data-label">Timezone</span>
                            <span class="data-value">London GMT</span>
                        </div>
                        <div class="data-col data-col-end"><a href="#" data-toggle="modal" data-target="#profile-language" class="link link-primary">Change</a></div>
                    </div>
                    <div class="data-item">
                        <div class="data-col">
                            <span class="data-label">Password</span>
                            <span class="data-value">**********</span>
                        </div>
                        <div class="data-col data-col-end"><a href="/accountSecurity" class="link link-primary">Change</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-block">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h5 class="nk-block-title"> KYC AML Documents</h5>
                    <div class="nk-block-des">
                        <p>In order to comply with international <b>KYC & Anti Money Laundering Regulations</b> we require all clients to upload a current Photographic ID & a Proof of Address.</p>
                    </div>
                </div>
            </div>
            <div class="container row">
                <div class="nk-kycfm-upload col-lg-6">
                    <p class="title nk-kycfm-upload-title"><b>PHOTOGRAPHIC ID</b> i.e Passport or driving licence</p>
                    <div class="row align-items-center">
                        <div class="col-sm-8">
                            <div class="nk-kycfm-upload-box">
                                <form action="/personDetails" class="dropzone needsclick dz-clickable" id="photoIdUpload">
                                    <input type="hidden" name="photoId" value="1">
                                    <div class="dz-message needsclick">
                                        <span class="note needsclick">Drag and drop file</span>
                                        <span class="dz-message-or">or</span>
                                        <span class="note needsclick btn btn-primary" style="width: 50%; color: white; margin: auto;">SELECT</span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-4 d-none d-sm-block">
                            <div class="mx-md-4">
                                <img src="./assets/images/icons/id-front.svg" alt="ID Front">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-kycfm-upload col-lg-6" style="margin-top: 0">
                    <p class="title nk-kycfm-upload-title"><b>PROOF OF ADDRESS</b> i.e Utility bill no older than 3 months</p>
                    <div class="row align-items-center">
                        <div class="col-sm-8">
                            <div class="nk-kycfm-upload-box">
                                <form action="/personDetails" class="dropzone needsclick dz-clickable" id="addressProofUpload">
                                    <input type="hidden" name="addressProof" value="1">
                                    <div class="dz-message needsclick">
                                        <span class="note needsclick">Drag and drop file</span>
                                        <span class="dz-message-or">or</span>
                                        <span class="note needsclick btn btn-primary" style="width: 50%; color: white; margin: auto;">SELECT</span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-4 d-none d-sm-block">
                            <div class="mx-md-4">
                                <img src="./assets/images/icons/id-back.svg" alt="ID Back">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-block">
            <div class="nk-block-head">
                <div class="nk-block-between-md g-4">
                    <div class="nk-block">
                        <h5 class="nk-block-title">My Referrals</h5>
                        <div class="nk-block-des">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-bordered">
                <table class="table table-tranx table-billing">
                    <thead>
                        <tr class="tb-tnx-head">
                            <th class="tb-tnx-id"><span class="">#</span></th>
                            <th class="tb-tnx-info">
                                <span class="tb-tnx-desc d-none d-sm-inline-block">
                                    <span>Referral Name</span>
                                </span>
                                <span class="tb-tnx-date d-md-inline-block d-none">
                                    <span class="d-md-none">Date</span>
                                    <span class="d-none d-md-block">
                                        <span>Email Address</span>
                                        <span>Sign Up Date</span>
                                    </span>
                                </span>
                            </th>
                            <th class="tb-tnx-amount">
                                <span class="tb-tnx-total">Initial Deposit</span>
                                <span class="tb-tnx-status d-none d-md-inline-block">Status</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="tb-tnx-item">
                            <td class="tb-tnx-id">
                                <a href="#"><span></span></a>
                            </td>
                            <td class="tb-tnx-info">
                                <div class="tb-tnx-desc">
                                    <span class="title"> </span>
                                </div>
                                <div class="tb-tnx-date">
                                    <span class="date"></span>
                                    <span class="date"></span>
                                </div>
                            </td>
                            <td class="tb-tnx-amount">
                                <div class="tb-tnx-total">
                                    <span class="amount"></span>
                                </div>
                                <div class="tb-tnx-status">
                                    <span class="badge badge-dot badge-success"></span>
                                </div>
                            </td>
                        </tr>
                        <tr class="tb-tnx-item">
                            <td class="tb-tnx-id">
                                <a href="#"><span></span></a>
                            </td>
                            <td class="tb-tnx-info">
                                <div class="tb-tnx-desc">
                                    <span class="title"></span>
                                </div>
                                <div class="tb-tnx-date">
                                    <span class="date"></span>
                                    <span class="date"></span>
                                </div>
                            </td>
                            <td class="tb-tnx-amount">
                                <div class="tb-tnx-total">
                                    <span class="amount"></span>
                                </div>
                                <div class="tb-tnx-status"><span class="badge badge-dot badge-success"></span></div>
                            </td>
                        </tr>
                        <tr class="tb-tnx-item">
                            <td class="tb-tnx-id">
                                <a href="#"><span></span></a>
                            </td>
                            <td class="tb-tnx-info">
                                <div class="tb-tnx-desc">
                                    <span class="title"></span>
                                </div>
                                <div class="tb-tnx-date">
                                    <span class="date"></span>
                                    <span class="date"></span>
                                </div>
                            </td>
                            <td class="tb-tnx-amount">
                                <div class="tb-tnx-total">
                                    <span class="amount"></span>
                                </div>
                                <div class="tb-tnx-status"><span class="badge badge-dot badge-warning"></span></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="nk-block mt-5">
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

    {{#data}}
    Dropzone.options.photoIdUpload = {
        maxFilesize: 2,
        acceptedFiles: "image/*,application/pdf,.doc,.docx,",
        init: function() { 
            var myDropzone = this;
            {{#photoIdList}}
                var mockFile = { name: "{{name}}", size: {{size}} };
                myDropzone.emit("addedfile", mockFile);
                myDropzone.emit("thumbnail", mockFile, "{{path}}");
                myDropzone.emit("complete", mockFile);
            {{/photoIdList}}
        }
    }

    Dropzone.options.addressProofUpload = {
        maxFilesize: 2,
        acceptedFiles: "image/*,application/pdf,.doc,.docx,",
        init: function() { 
            var myDropzone = this;
            {{#addressProofList}}
                var mockFile = { name: "{{name}}", size: {{size}} };
                myDropzone.emit("addedfile", mockFile);
                myDropzone.emit("thumbnail", mockFile, "{{path}}");
                myDropzone.emit("complete", mockFile);
            {{/addressProofList}}
        }
    }
    {{/data}}

    $(document).ready(function() {
        var firstName = "{{{firstName}}}";
        var lastName = "{{{lastName}}}";
        var phoneNumber = "{{{mainContactNumber}}}";
        var dateOfBirth = "{{{dateOfBirth}}}";
        var addressLine1 = "{{{addressLine1}}}";
        var addressLine2 = "{{{addressLine2}}}";
        var country = "{{{country}}}";
        var county = "{{{county}}}";

        $(\'#firstName\').val(firstName);
        $(\'#lastName\').val(lastName);
        $(\'#phoneNumber\').val(phoneNumber);
        $(\'#dateOfBirth\').val(dateOfBirth);
        $(\'#addressLine1\').val(addressLine1);
        $(\'#addressLine2\').val(addressLine2);
        $(\'#country1\').val(country).change();
        $(\'#county\').val(county);

    });
</script>
{{/user}}
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
                
                // 'user' section
                $value = $context->find('user');
                $buffer .= $this->section4eec5fde0e68ba8f9521db7fc033b0e7($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
