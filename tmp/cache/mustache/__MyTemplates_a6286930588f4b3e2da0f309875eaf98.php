<?php

class __MyTemplates_a6286930588f4b3e2da0f309875eaf98 extends Mustache_Template
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
        $buffer .= $this->section492e2a5ab90d38470c1f8d431938913d($context, $indent, $value);

        return $buffer;
    }

    private function section1601db7271536263d77c9bc35623b824(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                                    <div class="form-group example-alert">
                                        <div class="alert alert-success alert-icon alert-dismissible">
                                            <em class="icon ni ni-check-circle"></em> Personal Details and Account Details have been updated. <button class="close" data-dismiss="alert"></button>
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
                $buffer .= $indent . '                                            <em class="icon ni ni-check-circle"></em> Personal Details and Account Details have been updated. <button class="close" data-dismiss="alert"></button>
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

    private function section6faa0ad0977b9b3fc2dd927ae79ae4c5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                                                        <input type="hidden" value="{{userId}}" name="userId">
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
                
                $buffer .= $indent . '                                                        <input type="hidden" value="';
                $value = $this->resolveValue($context->find('userId'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" name="userId">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDefb37175d51b7f4abc7718a62568cf2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                                    <div class="form-group example-alert">
                                        <div class="alert alert-success alert-icon alert-dismissible">
                                            <em class="icon ni ni-check-circle"></em> Bank Details have been updated. <button class="close" data-dismiss="alert"></button>
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
                $buffer .= $indent . '                                            <em class="icon ni ni-check-circle"></em> Bank Details have been updated. <button class="close" data-dismiss="alert"></button>
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

    private function section91b3e1d75700a28153cf442aa98ed2e9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                                                <input type="hidden" value="{{userId}}" name="userId">
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
                
                $buffer .= $indent . '                                                <input type="hidden" value="';
                $value = $this->resolveValue($context->find('userId'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" name="userId">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3a1a4ec3c9b438a57cec5f60946b8317(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                                        <div class="row g-3 align-center">
                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        {{loginDate}}
                                                    </div>
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
                
                $buffer .= $indent . '                                        <div class="row g-3 align-center">
';
                $buffer .= $indent . '                                            <div class="col-lg-7">
';
                $buffer .= $indent . '                                                <div class="form-group">
';
                $buffer .= $indent . '                                                    <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                        ';
                $value = $this->resolveValue($context->find('loginDate'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                    </div>
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

    private function section66a35c2232222f972b8d93ea85237f07(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-content-wrap">
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h2 class="title nk-block-title fw-normal"><a href="/adminDashboard" style="font-size: 15px; letter-spacing: 1px;">User Manage / </a>User Details</h2>
                            </div>
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#personDetails"><em class="icon ni ni-user-list"></em><span>Person Details</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#bankDetails"><em class="icon ni ni-wallet-in"></em><span>Bank Details</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#recentLogin"><em class="icon ni ni-power"></em><span>Recent Logins</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="personDetails">
                                <div class="card">
                                    {{#updatePersonal}}
                                    <div class="form-group example-alert">
                                        <div class="alert alert-success alert-icon alert-dismissible">
                                            <em class="icon ni ni-check-circle"></em> Personal Details and Account Details have been updated. <button class="close" data-dismiss="alert"></button>
                                        </div>
                                    </div>
                                    {{/updatePersonal}}
                                    <form action="/adminUserDetails" method="post">
                                        <div class="card-inner row">
                                            <div class="col-md-6">
                                                <div class="card-head">
                                                    <h5 class="card-title">Person Details</h5>
                                                </div>
                                                <div class="gy-3">
                                                    {{#isAdmin}}
                                                        <input type="hidden" value="{{userId}}" name="userId">
                                                    {{/isAdmin}}
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label">First Name</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" name="firstName" value="{{firstName}}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label">Last Name</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" name="lastName" value="{{lastName}}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label">Email</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" name="email" value="{{email}}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label"> Phone Number</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" name="mainContactNumber" value="{{mainContactNumber}}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label"> Address Line 1</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" name="addressLine1" value="{{addressLine1}}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label"> Address Line 2</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" name="addressLine2" value="{{addressLine2}}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label"> City</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" name="city" value="{{city}}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label"> Post Code</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" name="postalCode" value="{{postalCode}}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label"> Country</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-group">
                                                                    <input type="hidden" id="country1" value="{{country}}">
                                                                    <select class="form-select" id="country" name="country" data-search="on" required>
                                                                        <option value="Afghanistan">Afghanistan</option>
                                                                        <option value="Albania">Albania</option>
                                                                        <option value="Algeria">Algeria</option>
                                                                        <option value="American Samoa">American Samoa</option>
                                                                        <option value="Andorra">Andorra</option>
                                                                        <option value="Angola">Angola</option>
                                                                        <option value="Anguilla">Anguilla</option>
                                                                        <option value="Antarctica">Antarctica</option>
                                                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                                        <option value="Argentina">Argentina</option>
                                                                        <option value="Armenia">Armenia</option>
                                                                        <option value="Aruba">Aruba</option>
                                                                        <option value="Australia">Australia</option>
                                                                        <option value="Austria">Austria</option>
                                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                                        <option value="Bahamas">Bahamas</option>
                                                                        <option value="Bahrain">Bahrain</option>
                                                                        <option value="Bangladesh">Bangladesh</option>
                                                                        <option value="Barbados">Barbados</option>
                                                                        <option value="Belarus">Belarus</option>
                                                                        <option value="Belgium">Belgium</option>
                                                                        <option value="Belize">Belize</option>
                                                                        <option value="Benin">Benin</option>
                                                                        <option value="Bermuda">Bermuda</option>
                                                                        <option value="Bhutan">Bhutan</option>
                                                                        <option value="Bolivia">Bolivia</option>
                                                                        <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                                                        <option value="Botswana">Botswana</option>
                                                                        <option value="Bouvet Island">Bouvet Island</option>
                                                                        <option value="Brazil">Brazil</option>
                                                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                                        <option value="Bulgaria">Bulgaria</option>
                                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                                        <option value="Burundi">Burundi</option>
                                                                        <option value="Cambodia">Cambodia</option>
                                                                        <option value="Cameroon">Cameroon</option>
                                                                        <option value="Canada">Canada</option>
                                                                        <option value="Cape Verde">Cape Verde</option>
                                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                                        <option value="Central African Republic">Central African Republic</option>
                                                                        <option value="Chad">Chad</option>
                                                                        <option value="Chile">Chile</option>
                                                                        <option value="China">China</option>
                                                                        <option value="Christmas Island">Christmas Island</option>
                                                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                                        <option value="Colombia">Colombia</option>
                                                                        <option value="Comoros">Comoros</option>
                                                                        <option value="Congo">Congo</option>
                                                                        <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                                                                        <option value="Cook Islands">Cook Islands</option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Cote d\'Ivoire">Cote d\'Ivoire</option>
                                                                        <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Cyprus">Cyprus</option>
                                                                        <option value="Czech Republic">Czech Republic</option>
                                                                        <option value="Denmark">Denmark</option>
                                                                        <option value="Djibouti">Djibouti</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                                        <option value="East Timor">East Timor</option>
                                                                        <option value="Ecuador">Ecuador</option>
                                                                        <option value="Egypt">Egypt</option>
                                                                        <option value="El Salvador">El Salvador</option>
                                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                        <option value="Eritrea">Eritrea</option>
                                                                        <option value="Estonia">Estonia</option>
                                                                        <option value="Ethiopia">Ethiopia</option>
                                                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                                        <option value="Fiji">Fiji</option>
                                                                        <option value="Finland">Finland</option>
                                                                        <option value="France">France</option>
                                                                        <option value="France Metropolitan">France Metropolitan</option>
                                                                        <option value="French Guiana">French Guiana</option>
                                                                        <option value="French Polynesia">French Polynesia</option>
                                                                        <option value="French Southern Territories">French Southern Territories</option>
                                                                        <option value="Gabon">Gabon</option>
                                                                        <option value="Gambia">Gambia</option>
                                                                        <option value="Georgia">Georgia</option>
                                                                        <option value="Germany">Germany</option>
                                                                        <option value="Ghana">Ghana</option>
                                                                        <option value="Gibraltar">Gibraltar</option>
                                                                        <option value="Greece">Greece</option>
                                                                        <option value="Greenland">Greenland</option>
                                                                        <option value="Grenada">Grenada</option>
                                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                                        <option value="Guam">Guam</option>
                                                                        <option value="Guatemala">Guatemala</option>
                                                                        <option value="Guinea">Guinea</option>
                                                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                        <option value="Guyana">Guyana</option>
                                                                        <option value="Haiti">Haiti</option>
                                                                        <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                                                                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                                        <option value="Honduras">Honduras</option>
                                                                        <option value="Hong Kong">Hong Kong</option>
                                                                        <option value="Hungary">Hungary</option>
                                                                        <option value="Iceland">Iceland</option>
                                                                        <option value="India">India</option>
                                                                        <option value="Indonesia">Indonesia</option>
                                                                        <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                                                                        <option value="Iraq">Iraq</option>
                                                                        <option value="Ireland">Ireland</option>
                                                                        <option value="Israel">Israel</option>
                                                                        <option value="Italy">Italy</option>
                                                                        <option value="Jamaica">Jamaica</option>
                                                                        <option value="Japan">Japan</option>
                                                                        <option value="Jordan">Jordan</option>
                                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                                        <option value="Kenya">Kenya</option>
                                                                        <option value="Kiribati">Kiribati</option>
                                                                        <option value="Korea, Democratic People\'s Republic of">Korea, Democratic People\'s Republic of</option>
                                                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                                                        <option value="Kuwait">Kuwait</option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                        <option value="Lao, People\'s Democratic Republic">Lao, People\'s Democratic Republic</option>
                                                                        <option value="Latvia">Latvia</option>
                                                                        <option value="Lebanon">Lebanon</option>
                                                                        <option value="Lesotho">Lesotho</option>
                                                                        <option value="Liberia">Liberia</option>
                                                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                                        <option value="Lithuania">Lithuania</option>
                                                                        <option value="Luxembourg">Luxembourg</option>
                                                                        <option value="Macau">Macau</option>
                                                                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                                        <option value="Madagascar">Madagascar</option>
                                                                        <option value="Malawi">Malawi</option>
                                                                        <option value="Malaysia">Malaysia</option>
                                                                        <option value="Maldives">Maldives</option>
                                                                        <option value="Mali">Mali</option>
                                                                        <option value="Malta">Malta</option>
                                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                                        <option value="Martinique">Martinique</option>
                                                                        <option value="Mauritania">Mauritania</option>
                                                                        <option value="Mauritius">Mauritius</option>
                                                                        <option value="Mayotte">Mayotte</option>
                                                                        <option value="Mexico">Mexico</option>
                                                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                                        <option value="Monaco">Monaco</option>
                                                                        <option value="Mongolia">Mongolia</option>
                                                                        <option value="Montserrat">Montserrat</option>
                                                                        <option value="Morocco">Morocco</option>
                                                                        <option value="Mozambique">Mozambique</option>
                                                                        <option value="Myanmar">Myanmar</option>
                                                                        <option value="Namibia">Namibia</option>
                                                                        <option value="Nauru">Nauru</option>
                                                                        <option value="Nepal">Nepal</option>
                                                                        <option value="Netherlands">Netherlands</option>
                                                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                                        <option value="New Caledonia">New Caledonia</option>
                                                                        <option value="New Zealand">New Zealand</option>
                                                                        <option value="Nicaragua">Nicaragua</option>
                                                                        <option value="Niger">Niger</option>
                                                                        <option value="Nigeria">Nigeria</option>
                                                                        <option value="Niue">Niue</option>
                                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                                        <option value="Norway">Norway</option>
                                                                        <option value="Oman">Oman</option>
                                                                        <option value="Pakistan">Pakistan</option>
                                                                        <option value="Palau">Palau</option>
                                                                        <option value="Panama">Panama</option>
                                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                                        <option value="Paraguay">Paraguay</option>
                                                                        <option value="Peru">Peru</option>
                                                                        <option value="Philippines">Philippines</option>
                                                                        <option value="Pitcairn">Pitcairn</option>
                                                                        <option value="Poland">Poland</option>
                                                                        <option value="Portugal">Portugal</option>
                                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                                        <option value="Qatar">Qatar</option>
                                                                        <option value="Reunion">Reunion</option>
                                                                        <option value="Romania">Romania</option>
                                                                        <option value="Russian Federation">Russian Federation</option>
                                                                        <option value="Rwanda">Rwanda</option>
                                                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                                        <option value="Samoa">Samoa</option>
                                                                        <option value="San Marino">San Marino</option>
                                                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                                        <option value="Senegal">Senegal</option>
                                                                        <option value="Seychelles">Seychelles</option>
                                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                                        <option value="Singapore">Singapore</option>
                                                                        <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
                                                                        <option value="Slovenia">Slovenia</option>
                                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                                        <option value="Somalia">Somalia</option>
                                                                        <option value="South Africa">South Africa</option>
                                                                        <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                                                        <option value="Spain">Spain</option>
                                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                                        <option value="St. Helena">St. Helena</option>
                                                                        <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                                                        <option value="Sudan">Sudan</option>
                                                                        <option value="Suriname">Suriname</option>
                                                                        <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                                                                        <option value="Swaziland">Swaziland</option>
                                                                        <option value="Sweden">Sweden</option>
                                                                        <option value="Switzerland">Switzerland</option>
                                                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                                        <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                                        <option value="Tajikistan">Tajikistan</option>
                                                                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                                        <option value="Thailand">Thailand</option>
                                                                        <option value="Togo">Togo</option>
                                                                        <option value="Tokelau">Tokelau</option>
                                                                        <option value="Tonga">Tonga</option>
                                                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                                        <option value="Tunisia">Tunisia</option>
                                                                        <option value="Turkey">Turkey</option>
                                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                                        <option value="Tuvalu">Tuvalu</option>
                                                                        <option value="Uganda">Uganda</option>
                                                                        <option value="Ukraine">Ukraine</option>
                                                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                                                        <option value="United Kingdom">United Kingdom</option>
                                                                        <option value="United States">United States</option>
                                                                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                                        <option value="Uruguay">Uruguay</option>
                                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                                        <option value="Vanuatu">Vanuatu</option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Vietnam">Vietnam</option>
                                                                        <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                                                        <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                                                        <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                                                        <option value="Western Sahara">Western Sahara</option>
                                                                        <option value="Yemen">Yemen</option>
                                                                        <option value="Yugoslavia">Yugoslavia</option>
                                                                        <option value="Zambia">Zambia</option>
                                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label"> Date Of Birth</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" name="dateOfBirth" value="{{dateOfBirth}}" data-date-format="dd-mm-yyyy" class="form-control date-picker-alt" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card-head">
                                                    <h5 class="card-title">Account Details</h5>
                                                </div>
                                                <div class="gy-3">
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label">Account Opening Date</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" name="accountOpening" value="{{accountOpening}}" data-date-format="dd-mm-yyyy" class="form-control date-picker-alt" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label">Initial Investment</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" name="initialInvestment" value="{{initialInvestment}}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label">Account Type</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="hidden" id="accountType1" value="{{accountType}}">
                                                                    <select class="form-select" id="accountType" name="accountType" required>
                                                                        <option value="tc">60 Day Trial</option>
                                                                        <option value="gd">Macro</option>
                                                                        <option value="gd+">Advanced</option>
                                                                        <option value="pt">Prime</option>
                                                                    
                                                                     
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label">Account Trader</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="hidden" id="accountManager1" value="{{accountManager}}">
                                                                    <select class="form-select" id="accountManager" name="accountManager" required>
                                                                        <option value="Paul Damiens">Paul Damiens</option>
                                                                            <option value="Alex Baumen">Alex Baumen</option>
                                                                        <option value="Marcus Lane">Marcus Lane</option>
                                                                        <option value="Mark Lawson">Mark Lawson</option>
                                                                        
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label">Account Manager</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="hidden" id="accountManagerAgent1" value="{{agent}}">
                                                                    <select class="form-select" id="accountManagerAgent" name="accountManagerAgent" required>
                                                                        <option value="">Select Agent</option>
                                                                        <option value="Alex Baumen">Alex Baumen</option>
                                                                        <option value="Roy Walker">Roy Walker</option>
                                                                         
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label">Account Currency</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="hidden" id="accountCurrency1" value="{{accountCurrency}}">
                                                                    <select class="form-select" id="accountCurrency" name="accountCurrency" required>
                                                                        <option value="USD">USD</option>
                                                                       <!-- <option value="USD">USD</option>
                                                                        <option value="GBP">GBP</option>
                                                                        <option value="CHF">CHF</option>
                                                                        <option value="JPY">JPY</option>
                                                                        <option value="AUD">AUD</option>-->
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label">Dividend Payment</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <ul class="custom-control-group g-3 align-center flex-wrap">
                                                                <input type="hidden" id="dividendPayment1" value="{{dividendPayment}}">
                                                                <li>
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" class="custom-control-input" name="dividendPayment" value="compounded" id="compounded">
                                                                        <label class="custom-control-label" for="compounded">Compounded </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" class="custom-control-input" name="dividendPayment" value="monthly" id="monthly">
                                                                        <label class="custom-control-label" for="monthly">Monthly </label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label">KYC/AML Approved</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <ul class="custom-control-group g-3 align-center flex-wrap">
                                                                <input type="hidden" id="kycAmlApprove1" value="{{kyc_aml_approve}}">
                                                                <li>
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" class="custom-control-input" name="kyc_aml_approve" value="yes" id="kycYes">
                                                                        <label class="custom-control-label" for="kycYes">Yes </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" class="custom-control-input" name="kyc_aml_approve" value="no" id="kycNo">
                                                                        <label class="custom-control-label" for="kycNo">No </label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label">Debit Card</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <ul class="custom-control-group g-3 align-center flex-wrap">
                                                                <input type="hidden" id="debitCard1" value="{{debitcard}}">
                                                                <li>
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" class="custom-control-input" name="debitcard" value="yes" id="debitYes">
                                                                        <label class="custom-control-label" for="debitYes">Yes </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" class="custom-control-input" name="debitcard" value="no" id="debitNo">
                                                                        <label class="custom-control-label" for="debitNo">No </label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3">
                                                        <div class="col-lg-7 offset-lg-5">
                                                            <div class="form-group mt-2">
                                                                <input type="hidden" name="personDetails" value="1">
                                                                <button type="submit" class="btn btn-lg btn-primary">Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane" id="bankDetails">
                                <div class="card">
                                    {{#updateBank}}
                                    <div class="form-group example-alert">
                                        <div class="alert alert-success alert-icon alert-dismissible">
                                            <em class="icon ni ni-check-circle"></em> Bank Details have been updated. <button class="close" data-dismiss="alert"></button>
                                        </div>
                                    </div>
                                    {{/updateBank}}
                                    <div class="card-inner">
                                        <div class="card-head">
                                            <h5 class="card-title">Bank Details</h5>
                                        </div>
                                        <form action="/adminUserDetails" method="post" class="gy-3">
                                            {{#isAdmin}}
                                                <input type="hidden" value="{{userId}}" name="userId">
                                            {{/isAdmin}}
                                            <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label">Bank Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="bankName" value="{{bankName}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label">Bank Address</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="bankAddress" value="{{bankAddress}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label">Account Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="bankAccountName" value="{{bankAccountName}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label">Account Number</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="bankAccountNumber" value="{{bankAccountNumber}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label">Swift/BIC Code/Sort Code</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="bankSwiftBicCode" value="{{bankSwiftBicCode}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label">IBAN Number</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="bankIbanNumber" value="{{bankIbanNumber}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row g-3">
                                                <div class="col-lg-7 offset-lg-5">
                                                    <div class="form-group mt-2">
                                                        <input type="hidden" name="bankDetails" value="1">
                                                        <button type="submit" class="btn btn-lg btn-primary">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="recentLogin">
                                <div class="card">
                                    <div class="card-inner">
                                        <div class="card-head">
                                            <h5 class="card-title">Recent Logins</h5>
                                        </div>
                                        {{#allLogins}}
                                        <div class="row g-3 align-center">
                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        {{loginDate}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{/allLogins}}
                                    </div>
                                </div>
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

    $(\'#country\').val($(\'#country1\').val()).change();
    $(\'#accountType\').val($(\'#accountType1\').val()).change();
    $(\'#accountManager\').val($(\'#accountManager1\').val()).change();
    $(\'#accountManagerAgent\').val($(\'#accountManagerAgent1\').val()).change();
    $(\'#accountCurrency\').val($(\'#accountCurrency1\').val()).change();
    $(\'input[name=dividendPayment][value="\'+ $(\'#dividendPayment1\').val() +\'"]\').attr(\'checked\', \'checked\');
    $(\'input[name=kyc_aml_approve][value="\'+ $(\'#kycAmlApprove1\').val() +\'"]\').attr(\'checked\', \'checked\');
    $(\'input[name=debitcard][value="\'+ $(\'#debitCard1\').val() + \'"]\').attr(\'checked\', \'checked\');
})
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
                $buffer .= $indent . '    <div class="container-fluid">
';
                $buffer .= $indent . '        <div class="nk-content-inner">
';
                $buffer .= $indent . '            <div class="nk-content-body">
';
                $buffer .= $indent . '                <div class="nk-content-wrap">
';
                $buffer .= $indent . '                    <div class="nk-block nk-block-lg">
';
                $buffer .= $indent . '                        <div class="nk-block-head">
';
                $buffer .= $indent . '                            <div class="nk-block-head-content">
';
                $buffer .= $indent . '                                <h2 class="title nk-block-title fw-normal"><a href="/adminDashboard" style="font-size: 15px; letter-spacing: 1px;">User Manage / </a>User Details</h2>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <ul class="nav nav-tabs">
';
                $buffer .= $indent . '                            <li class="nav-item">
';
                $buffer .= $indent . '                                <a class="nav-link active" data-toggle="tab" href="#personDetails"><em class="icon ni ni-user-list"></em><span>Person Details</span></a>
';
                $buffer .= $indent . '                            </li>
';
                $buffer .= $indent . '                            <li class="nav-item">
';
                $buffer .= $indent . '                                <a class="nav-link" data-toggle="tab" href="#bankDetails"><em class="icon ni ni-wallet-in"></em><span>Bank Details</span></a>
';
                $buffer .= $indent . '                            </li>
';
                $buffer .= $indent . '                            <li class="nav-item">
';
                $buffer .= $indent . '                                <a class="nav-link" data-toggle="tab" href="#recentLogin"><em class="icon ni ni-power"></em><span>Recent Logins</span></a>
';
                $buffer .= $indent . '                            </li>
';
                $buffer .= $indent . '                        </ul>
';
                $buffer .= $indent . '                        <div class="tab-content">
';
                $buffer .= $indent . '                            <div class="tab-pane active" id="personDetails">
';
                $buffer .= $indent . '                                <div class="card">
';
                // 'updatePersonal' section
                $value = $context->find('updatePersonal');
                $buffer .= $this->section1601db7271536263d77c9bc35623b824($context, $indent, $value);
                $buffer .= $indent . '                                    <form action="/adminUserDetails" method="post">
';
                $buffer .= $indent . '                                        <div class="card-inner row">
';
                $buffer .= $indent . '                                            <div class="col-md-6">
';
                $buffer .= $indent . '                                                <div class="card-head">
';
                $buffer .= $indent . '                                                    <h5 class="card-title">Person Details</h5>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                                <div class="gy-3">
';
                // 'isAdmin' section
                $value = $context->find('isAdmin');
                $buffer .= $this->section6faa0ad0977b9b3fc2dd927ae79ae4c5($context, $indent, $value);
                $buffer .= $indent . '                                                    <div class="row g-3 align-center">
';
                $buffer .= $indent . '                                                        <div class="col-lg-5">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <label class="form-label">First Name</label>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                        <div class="col-lg-7">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                                    <input type="text" class="form-control" name="firstName" value="';
                $value = $this->resolveValue($context->find('firstName'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" required>
';
                $buffer .= $indent . '                                                                </div>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="row g-3 align-center">
';
                $buffer .= $indent . '                                                        <div class="col-lg-5">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <label class="form-label">Last Name</label>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                        <div class="col-lg-7">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                                    <input type="text" class="form-control" name="lastName" value="';
                $value = $this->resolveValue($context->find('lastName'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" required>
';
                $buffer .= $indent . '                                                                </div>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="row g-3 align-center">
';
                $buffer .= $indent . '                                                        <div class="col-lg-5">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <label class="form-label">Email</label>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                        <div class="col-lg-7">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                                    <input type="text" class="form-control" name="email" value="';
                $value = $this->resolveValue($context->find('email'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" required>
';
                $buffer .= $indent . '                                                                </div>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="row g-3 align-center">
';
                $buffer .= $indent . '                                                        <div class="col-lg-5">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <label class="form-label"> Phone Number</label>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                        <div class="col-lg-7">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                                    <input type="text" class="form-control" name="mainContactNumber" value="';
                $value = $this->resolveValue($context->find('mainContactNumber'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" required>
';
                $buffer .= $indent . '                                                                </div>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="row g-3 align-center">
';
                $buffer .= $indent . '                                                        <div class="col-lg-5">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <label class="form-label"> Address Line 1</label>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                        <div class="col-lg-7">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                                    <input type="text" class="form-control" name="addressLine1" value="';
                $value = $this->resolveValue($context->find('addressLine1'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" required>
';
                $buffer .= $indent . '                                                                </div>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="row g-3 align-center">
';
                $buffer .= $indent . '                                                        <div class="col-lg-5">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <label class="form-label"> Address Line 2</label>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                        <div class="col-lg-7">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                                    <input type="text" class="form-control" name="addressLine2" value="';
                $value = $this->resolveValue($context->find('addressLine2'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" required>
';
                $buffer .= $indent . '                                                                </div>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="row g-3 align-center">
';
                $buffer .= $indent . '                                                        <div class="col-lg-5">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <label class="form-label"> City</label>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                        <div class="col-lg-7">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                                    <input type="text" class="form-control" name="city" value="';
                $value = $this->resolveValue($context->find('city'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" required>
';
                $buffer .= $indent . '                                                                </div>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="row g-3 align-center">
';
                $buffer .= $indent . '                                                        <div class="col-lg-5">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <label class="form-label"> Post Code</label>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                        <div class="col-lg-7">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                                    <input type="text" class="form-control" name="postalCode" value="';
                $value = $this->resolveValue($context->find('postalCode'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" required>
';
                $buffer .= $indent . '                                                                </div>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="row g-3 align-center">
';
                $buffer .= $indent . '                                                        <div class="col-lg-5">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <label class="form-label"> Country</label>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                        <div class="col-lg-7">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <div class="form-control-group">
';
                $buffer .= $indent . '                                                                    <input type="hidden" id="country1" value="';
                $value = $this->resolveValue($context->find('country'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                                    <select class="form-select" id="country" name="country" data-search="on" required>
';
                $buffer .= $indent . '                                                                        <option value="Afghanistan">Afghanistan</option>
';
                $buffer .= $indent . '                                                                        <option value="Albania">Albania</option>
';
                $buffer .= $indent . '                                                                        <option value="Algeria">Algeria</option>
';
                $buffer .= $indent . '                                                                        <option value="American Samoa">American Samoa</option>
';
                $buffer .= $indent . '                                                                        <option value="Andorra">Andorra</option>
';
                $buffer .= $indent . '                                                                        <option value="Angola">Angola</option>
';
                $buffer .= $indent . '                                                                        <option value="Anguilla">Anguilla</option>
';
                $buffer .= $indent . '                                                                        <option value="Antarctica">Antarctica</option>
';
                $buffer .= $indent . '                                                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
';
                $buffer .= $indent . '                                                                        <option value="Argentina">Argentina</option>
';
                $buffer .= $indent . '                                                                        <option value="Armenia">Armenia</option>
';
                $buffer .= $indent . '                                                                        <option value="Aruba">Aruba</option>
';
                $buffer .= $indent . '                                                                        <option value="Australia">Australia</option>
';
                $buffer .= $indent . '                                                                        <option value="Austria">Austria</option>
';
                $buffer .= $indent . '                                                                        <option value="Azerbaijan">Azerbaijan</option>
';
                $buffer .= $indent . '                                                                        <option value="Bahamas">Bahamas</option>
';
                $buffer .= $indent . '                                                                        <option value="Bahrain">Bahrain</option>
';
                $buffer .= $indent . '                                                                        <option value="Bangladesh">Bangladesh</option>
';
                $buffer .= $indent . '                                                                        <option value="Barbados">Barbados</option>
';
                $buffer .= $indent . '                                                                        <option value="Belarus">Belarus</option>
';
                $buffer .= $indent . '                                                                        <option value="Belgium">Belgium</option>
';
                $buffer .= $indent . '                                                                        <option value="Belize">Belize</option>
';
                $buffer .= $indent . '                                                                        <option value="Benin">Benin</option>
';
                $buffer .= $indent . '                                                                        <option value="Bermuda">Bermuda</option>
';
                $buffer .= $indent . '                                                                        <option value="Bhutan">Bhutan</option>
';
                $buffer .= $indent . '                                                                        <option value="Bolivia">Bolivia</option>
';
                $buffer .= $indent . '                                                                        <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
';
                $buffer .= $indent . '                                                                        <option value="Botswana">Botswana</option>
';
                $buffer .= $indent . '                                                                        <option value="Bouvet Island">Bouvet Island</option>
';
                $buffer .= $indent . '                                                                        <option value="Brazil">Brazil</option>
';
                $buffer .= $indent . '                                                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
';
                $buffer .= $indent . '                                                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
';
                $buffer .= $indent . '                                                                        <option value="Bulgaria">Bulgaria</option>
';
                $buffer .= $indent . '                                                                        <option value="Burkina Faso">Burkina Faso</option>
';
                $buffer .= $indent . '                                                                        <option value="Burundi">Burundi</option>
';
                $buffer .= $indent . '                                                                        <option value="Cambodia">Cambodia</option>
';
                $buffer .= $indent . '                                                                        <option value="Cameroon">Cameroon</option>
';
                $buffer .= $indent . '                                                                        <option value="Canada">Canada</option>
';
                $buffer .= $indent . '                                                                        <option value="Cape Verde">Cape Verde</option>
';
                $buffer .= $indent . '                                                                        <option value="Cayman Islands">Cayman Islands</option>
';
                $buffer .= $indent . '                                                                        <option value="Central African Republic">Central African Republic</option>
';
                $buffer .= $indent . '                                                                        <option value="Chad">Chad</option>
';
                $buffer .= $indent . '                                                                        <option value="Chile">Chile</option>
';
                $buffer .= $indent . '                                                                        <option value="China">China</option>
';
                $buffer .= $indent . '                                                                        <option value="Christmas Island">Christmas Island</option>
';
                $buffer .= $indent . '                                                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
';
                $buffer .= $indent . '                                                                        <option value="Colombia">Colombia</option>
';
                $buffer .= $indent . '                                                                        <option value="Comoros">Comoros</option>
';
                $buffer .= $indent . '                                                                        <option value="Congo">Congo</option>
';
                $buffer .= $indent . '                                                                        <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
';
                $buffer .= $indent . '                                                                        <option value="Cook Islands">Cook Islands</option>
';
                $buffer .= $indent . '                                                                        <option value="Costa Rica">Costa Rica</option>
';
                $buffer .= $indent . '                                                                        <option value="Cote d\'Ivoire">Cote d\'Ivoire</option>
';
                $buffer .= $indent . '                                                                        <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
';
                $buffer .= $indent . '                                                                        <option value="Cuba">Cuba</option>
';
                $buffer .= $indent . '                                                                        <option value="Cyprus">Cyprus</option>
';
                $buffer .= $indent . '                                                                        <option value="Czech Republic">Czech Republic</option>
';
                $buffer .= $indent . '                                                                        <option value="Denmark">Denmark</option>
';
                $buffer .= $indent . '                                                                        <option value="Djibouti">Djibouti</option>
';
                $buffer .= $indent . '                                                                        <option value="Dominica">Dominica</option>
';
                $buffer .= $indent . '                                                                        <option value="Dominican Republic">Dominican Republic</option>
';
                $buffer .= $indent . '                                                                        <option value="East Timor">East Timor</option>
';
                $buffer .= $indent . '                                                                        <option value="Ecuador">Ecuador</option>
';
                $buffer .= $indent . '                                                                        <option value="Egypt">Egypt</option>
';
                $buffer .= $indent . '                                                                        <option value="El Salvador">El Salvador</option>
';
                $buffer .= $indent . '                                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
';
                $buffer .= $indent . '                                                                        <option value="Eritrea">Eritrea</option>
';
                $buffer .= $indent . '                                                                        <option value="Estonia">Estonia</option>
';
                $buffer .= $indent . '                                                                        <option value="Ethiopia">Ethiopia</option>
';
                $buffer .= $indent . '                                                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
';
                $buffer .= $indent . '                                                                        <option value="Faroe Islands">Faroe Islands</option>
';
                $buffer .= $indent . '                                                                        <option value="Fiji">Fiji</option>
';
                $buffer .= $indent . '                                                                        <option value="Finland">Finland</option>
';
                $buffer .= $indent . '                                                                        <option value="France">France</option>
';
                $buffer .= $indent . '                                                                        <option value="France Metropolitan">France Metropolitan</option>
';
                $buffer .= $indent . '                                                                        <option value="French Guiana">French Guiana</option>
';
                $buffer .= $indent . '                                                                        <option value="French Polynesia">French Polynesia</option>
';
                $buffer .= $indent . '                                                                        <option value="French Southern Territories">French Southern Territories</option>
';
                $buffer .= $indent . '                                                                        <option value="Gabon">Gabon</option>
';
                $buffer .= $indent . '                                                                        <option value="Gambia">Gambia</option>
';
                $buffer .= $indent . '                                                                        <option value="Georgia">Georgia</option>
';
                $buffer .= $indent . '                                                                        <option value="Germany">Germany</option>
';
                $buffer .= $indent . '                                                                        <option value="Ghana">Ghana</option>
';
                $buffer .= $indent . '                                                                        <option value="Gibraltar">Gibraltar</option>
';
                $buffer .= $indent . '                                                                        <option value="Greece">Greece</option>
';
                $buffer .= $indent . '                                                                        <option value="Greenland">Greenland</option>
';
                $buffer .= $indent . '                                                                        <option value="Grenada">Grenada</option>
';
                $buffer .= $indent . '                                                                        <option value="Guadeloupe">Guadeloupe</option>
';
                $buffer .= $indent . '                                                                        <option value="Guam">Guam</option>
';
                $buffer .= $indent . '                                                                        <option value="Guatemala">Guatemala</option>
';
                $buffer .= $indent . '                                                                        <option value="Guinea">Guinea</option>
';
                $buffer .= $indent . '                                                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
';
                $buffer .= $indent . '                                                                        <option value="Guyana">Guyana</option>
';
                $buffer .= $indent . '                                                                        <option value="Haiti">Haiti</option>
';
                $buffer .= $indent . '                                                                        <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
';
                $buffer .= $indent . '                                                                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
';
                $buffer .= $indent . '                                                                        <option value="Honduras">Honduras</option>
';
                $buffer .= $indent . '                                                                        <option value="Hong Kong">Hong Kong</option>
';
                $buffer .= $indent . '                                                                        <option value="Hungary">Hungary</option>
';
                $buffer .= $indent . '                                                                        <option value="Iceland">Iceland</option>
';
                $buffer .= $indent . '                                                                        <option value="India">India</option>
';
                $buffer .= $indent . '                                                                        <option value="Indonesia">Indonesia</option>
';
                $buffer .= $indent . '                                                                        <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
';
                $buffer .= $indent . '                                                                        <option value="Iraq">Iraq</option>
';
                $buffer .= $indent . '                                                                        <option value="Ireland">Ireland</option>
';
                $buffer .= $indent . '                                                                        <option value="Israel">Israel</option>
';
                $buffer .= $indent . '                                                                        <option value="Italy">Italy</option>
';
                $buffer .= $indent . '                                                                        <option value="Jamaica">Jamaica</option>
';
                $buffer .= $indent . '                                                                        <option value="Japan">Japan</option>
';
                $buffer .= $indent . '                                                                        <option value="Jordan">Jordan</option>
';
                $buffer .= $indent . '                                                                        <option value="Kazakhstan">Kazakhstan</option>
';
                $buffer .= $indent . '                                                                        <option value="Kenya">Kenya</option>
';
                $buffer .= $indent . '                                                                        <option value="Kiribati">Kiribati</option>
';
                $buffer .= $indent . '                                                                        <option value="Korea, Democratic People\'s Republic of">Korea, Democratic People\'s Republic of</option>
';
                $buffer .= $indent . '                                                                        <option value="Korea, Republic of">Korea, Republic of</option>
';
                $buffer .= $indent . '                                                                        <option value="Kuwait">Kuwait</option>
';
                $buffer .= $indent . '                                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
';
                $buffer .= $indent . '                                                                        <option value="Lao, People\'s Democratic Republic">Lao, People\'s Democratic Republic</option>
';
                $buffer .= $indent . '                                                                        <option value="Latvia">Latvia</option>
';
                $buffer .= $indent . '                                                                        <option value="Lebanon">Lebanon</option>
';
                $buffer .= $indent . '                                                                        <option value="Lesotho">Lesotho</option>
';
                $buffer .= $indent . '                                                                        <option value="Liberia">Liberia</option>
';
                $buffer .= $indent . '                                                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
';
                $buffer .= $indent . '                                                                        <option value="Liechtenstein">Liechtenstein</option>
';
                $buffer .= $indent . '                                                                        <option value="Lithuania">Lithuania</option>
';
                $buffer .= $indent . '                                                                        <option value="Luxembourg">Luxembourg</option>
';
                $buffer .= $indent . '                                                                        <option value="Macau">Macau</option>
';
                $buffer .= $indent . '                                                                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
';
                $buffer .= $indent . '                                                                        <option value="Madagascar">Madagascar</option>
';
                $buffer .= $indent . '                                                                        <option value="Malawi">Malawi</option>
';
                $buffer .= $indent . '                                                                        <option value="Malaysia">Malaysia</option>
';
                $buffer .= $indent . '                                                                        <option value="Maldives">Maldives</option>
';
                $buffer .= $indent . '                                                                        <option value="Mali">Mali</option>
';
                $buffer .= $indent . '                                                                        <option value="Malta">Malta</option>
';
                $buffer .= $indent . '                                                                        <option value="Marshall Islands">Marshall Islands</option>
';
                $buffer .= $indent . '                                                                        <option value="Martinique">Martinique</option>
';
                $buffer .= $indent . '                                                                        <option value="Mauritania">Mauritania</option>
';
                $buffer .= $indent . '                                                                        <option value="Mauritius">Mauritius</option>
';
                $buffer .= $indent . '                                                                        <option value="Mayotte">Mayotte</option>
';
                $buffer .= $indent . '                                                                        <option value="Mexico">Mexico</option>
';
                $buffer .= $indent . '                                                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
';
                $buffer .= $indent . '                                                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
';
                $buffer .= $indent . '                                                                        <option value="Monaco">Monaco</option>
';
                $buffer .= $indent . '                                                                        <option value="Mongolia">Mongolia</option>
';
                $buffer .= $indent . '                                                                        <option value="Montserrat">Montserrat</option>
';
                $buffer .= $indent . '                                                                        <option value="Morocco">Morocco</option>
';
                $buffer .= $indent . '                                                                        <option value="Mozambique">Mozambique</option>
';
                $buffer .= $indent . '                                                                        <option value="Myanmar">Myanmar</option>
';
                $buffer .= $indent . '                                                                        <option value="Namibia">Namibia</option>
';
                $buffer .= $indent . '                                                                        <option value="Nauru">Nauru</option>
';
                $buffer .= $indent . '                                                                        <option value="Nepal">Nepal</option>
';
                $buffer .= $indent . '                                                                        <option value="Netherlands">Netherlands</option>
';
                $buffer .= $indent . '                                                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
';
                $buffer .= $indent . '                                                                        <option value="New Caledonia">New Caledonia</option>
';
                $buffer .= $indent . '                                                                        <option value="New Zealand">New Zealand</option>
';
                $buffer .= $indent . '                                                                        <option value="Nicaragua">Nicaragua</option>
';
                $buffer .= $indent . '                                                                        <option value="Niger">Niger</option>
';
                $buffer .= $indent . '                                                                        <option value="Nigeria">Nigeria</option>
';
                $buffer .= $indent . '                                                                        <option value="Niue">Niue</option>
';
                $buffer .= $indent . '                                                                        <option value="Norfolk Island">Norfolk Island</option>
';
                $buffer .= $indent . '                                                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
';
                $buffer .= $indent . '                                                                        <option value="Norway">Norway</option>
';
                $buffer .= $indent . '                                                                        <option value="Oman">Oman</option>
';
                $buffer .= $indent . '                                                                        <option value="Pakistan">Pakistan</option>
';
                $buffer .= $indent . '                                                                        <option value="Palau">Palau</option>
';
                $buffer .= $indent . '                                                                        <option value="Panama">Panama</option>
';
                $buffer .= $indent . '                                                                        <option value="Papua New Guinea">Papua New Guinea</option>
';
                $buffer .= $indent . '                                                                        <option value="Paraguay">Paraguay</option>
';
                $buffer .= $indent . '                                                                        <option value="Peru">Peru</option>
';
                $buffer .= $indent . '                                                                        <option value="Philippines">Philippines</option>
';
                $buffer .= $indent . '                                                                        <option value="Pitcairn">Pitcairn</option>
';
                $buffer .= $indent . '                                                                        <option value="Poland">Poland</option>
';
                $buffer .= $indent . '                                                                        <option value="Portugal">Portugal</option>
';
                $buffer .= $indent . '                                                                        <option value="Puerto Rico">Puerto Rico</option>
';
                $buffer .= $indent . '                                                                        <option value="Qatar">Qatar</option>
';
                $buffer .= $indent . '                                                                        <option value="Reunion">Reunion</option>
';
                $buffer .= $indent . '                                                                        <option value="Romania">Romania</option>
';
                $buffer .= $indent . '                                                                        <option value="Russian Federation">Russian Federation</option>
';
                $buffer .= $indent . '                                                                        <option value="Rwanda">Rwanda</option>
';
                $buffer .= $indent . '                                                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
';
                $buffer .= $indent . '                                                                        <option value="Saint Lucia">Saint Lucia</option>
';
                $buffer .= $indent . '                                                                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
';
                $buffer .= $indent . '                                                                        <option value="Samoa">Samoa</option>
';
                $buffer .= $indent . '                                                                        <option value="San Marino">San Marino</option>
';
                $buffer .= $indent . '                                                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
';
                $buffer .= $indent . '                                                                        <option value="Saudi Arabia">Saudi Arabia</option>
';
                $buffer .= $indent . '                                                                        <option value="Senegal">Senegal</option>
';
                $buffer .= $indent . '                                                                        <option value="Seychelles">Seychelles</option>
';
                $buffer .= $indent . '                                                                        <option value="Sierra Leone">Sierra Leone</option>
';
                $buffer .= $indent . '                                                                        <option value="Singapore">Singapore</option>
';
                $buffer .= $indent . '                                                                        <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
';
                $buffer .= $indent . '                                                                        <option value="Slovenia">Slovenia</option>
';
                $buffer .= $indent . '                                                                        <option value="Solomon Islands">Solomon Islands</option>
';
                $buffer .= $indent . '                                                                        <option value="Somalia">Somalia</option>
';
                $buffer .= $indent . '                                                                        <option value="South Africa">South Africa</option>
';
                $buffer .= $indent . '                                                                        <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
';
                $buffer .= $indent . '                                                                        <option value="Spain">Spain</option>
';
                $buffer .= $indent . '                                                                        <option value="Sri Lanka">Sri Lanka</option>
';
                $buffer .= $indent . '                                                                        <option value="St. Helena">St. Helena</option>
';
                $buffer .= $indent . '                                                                        <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
';
                $buffer .= $indent . '                                                                        <option value="Sudan">Sudan</option>
';
                $buffer .= $indent . '                                                                        <option value="Suriname">Suriname</option>
';
                $buffer .= $indent . '                                                                        <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
';
                $buffer .= $indent . '                                                                        <option value="Swaziland">Swaziland</option>
';
                $buffer .= $indent . '                                                                        <option value="Sweden">Sweden</option>
';
                $buffer .= $indent . '                                                                        <option value="Switzerland">Switzerland</option>
';
                $buffer .= $indent . '                                                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
';
                $buffer .= $indent . '                                                                        <option value="Taiwan, Province of China">Taiwan, Province of China</option>
';
                $buffer .= $indent . '                                                                        <option value="Tajikistan">Tajikistan</option>
';
                $buffer .= $indent . '                                                                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
';
                $buffer .= $indent . '                                                                        <option value="Thailand">Thailand</option>
';
                $buffer .= $indent . '                                                                        <option value="Togo">Togo</option>
';
                $buffer .= $indent . '                                                                        <option value="Tokelau">Tokelau</option>
';
                $buffer .= $indent . '                                                                        <option value="Tonga">Tonga</option>
';
                $buffer .= $indent . '                                                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
';
                $buffer .= $indent . '                                                                        <option value="Tunisia">Tunisia</option>
';
                $buffer .= $indent . '                                                                        <option value="Turkey">Turkey</option>
';
                $buffer .= $indent . '                                                                        <option value="Turkmenistan">Turkmenistan</option>
';
                $buffer .= $indent . '                                                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
';
                $buffer .= $indent . '                                                                        <option value="Tuvalu">Tuvalu</option>
';
                $buffer .= $indent . '                                                                        <option value="Uganda">Uganda</option>
';
                $buffer .= $indent . '                                                                        <option value="Ukraine">Ukraine</option>
';
                $buffer .= $indent . '                                                                        <option value="United Arab Emirates">United Arab Emirates</option>
';
                $buffer .= $indent . '                                                                        <option value="United Kingdom">United Kingdom</option>
';
                $buffer .= $indent . '                                                                        <option value="United States">United States</option>
';
                $buffer .= $indent . '                                                                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
';
                $buffer .= $indent . '                                                                        <option value="Uruguay">Uruguay</option>
';
                $buffer .= $indent . '                                                                        <option value="Uzbekistan">Uzbekistan</option>
';
                $buffer .= $indent . '                                                                        <option value="Vanuatu">Vanuatu</option>
';
                $buffer .= $indent . '                                                                        <option value="Venezuela">Venezuela</option>
';
                $buffer .= $indent . '                                                                        <option value="Vietnam">Vietnam</option>
';
                $buffer .= $indent . '                                                                        <option value="Virgin Islands (British)">Virgin Islands (British)</option>
';
                $buffer .= $indent . '                                                                        <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
';
                $buffer .= $indent . '                                                                        <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
';
                $buffer .= $indent . '                                                                        <option value="Western Sahara">Western Sahara</option>
';
                $buffer .= $indent . '                                                                        <option value="Yemen">Yemen</option>
';
                $buffer .= $indent . '                                                                        <option value="Yugoslavia">Yugoslavia</option>
';
                $buffer .= $indent . '                                                                        <option value="Zambia">Zambia</option>
';
                $buffer .= $indent . '                                                                        <option value="Zimbabwe">Zimbabwe</option>
';
                $buffer .= $indent . '                                                                    </select>
';
                $buffer .= $indent . '                                                                </div>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="row g-3 align-center">
';
                $buffer .= $indent . '                                                        <div class="col-lg-5">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <label class="form-label"> Date Of Birth</label>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                        <div class="col-lg-7">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                                    <input type="text" name="dateOfBirth" value="';
                $value = $this->resolveValue($context->find('dateOfBirth'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-date-format="dd-mm-yyyy" class="form-control date-picker-alt" required>
';
                $buffer .= $indent . '                                                                </div>
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
                $buffer .= $indent . '                                            <div class="col-md-6">
';
                $buffer .= $indent . '                                                <div class="card-head">
';
                $buffer .= $indent . '                                                    <h5 class="card-title">Account Details</h5>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                                <div class="gy-3">
';
                $buffer .= $indent . '                                                    <div class="row g-3 align-center">
';
                $buffer .= $indent . '                                                        <div class="col-lg-5">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <label class="form-label">Account Opening Date</label>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                        <div class="col-lg-7">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                                    <input type="text" name="accountOpening" value="';
                $value = $this->resolveValue($context->find('accountOpening'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-date-format="dd-mm-yyyy" class="form-control date-picker-alt" required>
';
                $buffer .= $indent . '                                                                </div>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="row g-3 align-center">
';
                $buffer .= $indent . '                                                        <div class="col-lg-5">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <label class="form-label">Initial Investment</label>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                        <div class="col-lg-7">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                                    <input type="text" class="form-control" name="initialInvestment" value="';
                $value = $this->resolveValue($context->find('initialInvestment'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" required>
';
                $buffer .= $indent . '                                                                </div>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="row g-3 align-center">
';
                $buffer .= $indent . '                                                        <div class="col-lg-5">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <label class="form-label">Account Type</label>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                        <div class="col-lg-7">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                                    <input type="hidden" id="accountType1" value="';
                $value = $this->resolveValue($context->find('accountType'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                                    <select class="form-select" id="accountType" name="accountType" required>
';
                $buffer .= $indent . '                                                                        <option value="tc">60 Day Trial</option>
';
                $buffer .= $indent . '                                                                        <option value="gd">Macro</option>
';
                $buffer .= $indent . '                                                                        <option value="gd+">Advanced</option>
';
                $buffer .= $indent . '                                                                        <option value="pt">Prime</option>
';
                $buffer .= $indent . '                                                                    
';
                $buffer .= $indent . '                                                                     
';
                $buffer .= $indent . '                                                                    </select>
';
                $buffer .= $indent . '                                                                </div>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="row g-3 align-center">
';
                $buffer .= $indent . '                                                        <div class="col-lg-5">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <label class="form-label">Account Trader</label>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                        <div class="col-lg-7">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                                    <input type="hidden" id="accountManager1" value="';
                $value = $this->resolveValue($context->find('accountManager'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                                    <select class="form-select" id="accountManager" name="accountManager" required>
';
                $buffer .= $indent . '                                                                        <option value="Paul Damiens">Paul Damiens</option>
';
                $buffer .= $indent . '                                                                            <option value="Alex Baumen">Alex Baumen</option>
';
                $buffer .= $indent . '                                                                        <option value="Marcus Lane">Marcus Lane</option>
';
                $buffer .= $indent . '                                                                        <option value="Mark Lawson">Mark Lawson</option>
';
                $buffer .= $indent . '                                                                        
';
                $buffer .= $indent . '                                                                    </select>
';
                $buffer .= $indent . '                                                                </div>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="row g-3 align-center">
';
                $buffer .= $indent . '                                                        <div class="col-lg-5">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <label class="form-label">Account Manager</label>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                        <div class="col-lg-7">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                                    <input type="hidden" id="accountManagerAgent1" value="';
                $value = $this->resolveValue($context->find('agent'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                                    <select class="form-select" id="accountManagerAgent" name="accountManagerAgent" required>
';
                $buffer .= $indent . '                                                                        <option value="">Select Agent</option>
';
                $buffer .= $indent . '                                                                        <option value="Alex Baumen">Alex Baumen</option>
';
                $buffer .= $indent . '                                                                        <option value="Roy Walker">Roy Walker</option>
';
                $buffer .= $indent . '                                                                         
';
                $buffer .= $indent . '                                                                    </select>
';
                $buffer .= $indent . '                                                                </div>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="row g-3 align-center">
';
                $buffer .= $indent . '                                                        <div class="col-lg-5">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <label class="form-label">Account Currency</label>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                        <div class="col-lg-7">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                                    <input type="hidden" id="accountCurrency1" value="';
                $value = $this->resolveValue($context->find('accountCurrency'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                                    <select class="form-select" id="accountCurrency" name="accountCurrency" required>
';
                $buffer .= $indent . '                                                                        <option value="USD">USD</option>
';
                $buffer .= $indent . '                                                                       <!-- <option value="USD">USD</option>
';
                $buffer .= $indent . '                                                                        <option value="GBP">GBP</option>
';
                $buffer .= $indent . '                                                                        <option value="CHF">CHF</option>
';
                $buffer .= $indent . '                                                                        <option value="JPY">JPY</option>
';
                $buffer .= $indent . '                                                                        <option value="AUD">AUD</option>-->
';
                $buffer .= $indent . '                                                                    </select>
';
                $buffer .= $indent . '                                                                </div>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="row g-3 align-center">
';
                $buffer .= $indent . '                                                        <div class="col-lg-5">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <label class="form-label">Dividend Payment</label>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                        <div class="col-lg-7">
';
                $buffer .= $indent . '                                                            <ul class="custom-control-group g-3 align-center flex-wrap">
';
                $buffer .= $indent . '                                                                <input type="hidden" id="dividendPayment1" value="';
                $value = $this->resolveValue($context->find('dividendPayment'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                                <li>
';
                $buffer .= $indent . '                                                                    <div class="custom-control custom-radio">
';
                $buffer .= $indent . '                                                                        <input type="radio" class="custom-control-input" name="dividendPayment" value="compounded" id="compounded">
';
                $buffer .= $indent . '                                                                        <label class="custom-control-label" for="compounded">Compounded </label>
';
                $buffer .= $indent . '                                                                    </div>
';
                $buffer .= $indent . '                                                                </li>
';
                $buffer .= $indent . '                                                                <li>
';
                $buffer .= $indent . '                                                                    <div class="custom-control custom-radio">
';
                $buffer .= $indent . '                                                                        <input type="radio" class="custom-control-input" name="dividendPayment" value="monthly" id="monthly">
';
                $buffer .= $indent . '                                                                        <label class="custom-control-label" for="monthly">Monthly </label>
';
                $buffer .= $indent . '                                                                    </div>
';
                $buffer .= $indent . '                                                                </li>
';
                $buffer .= $indent . '                                                            </ul>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="row g-3 align-center">
';
                $buffer .= $indent . '                                                        <div class="col-lg-5">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <label class="form-label">KYC/AML Approved</label>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                        <div class="col-lg-7">
';
                $buffer .= $indent . '                                                            <ul class="custom-control-group g-3 align-center flex-wrap">
';
                $buffer .= $indent . '                                                                <input type="hidden" id="kycAmlApprove1" value="';
                $value = $this->resolveValue($context->find('kyc_aml_approve'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                                <li>
';
                $buffer .= $indent . '                                                                    <div class="custom-control custom-radio">
';
                $buffer .= $indent . '                                                                        <input type="radio" class="custom-control-input" name="kyc_aml_approve" value="yes" id="kycYes">
';
                $buffer .= $indent . '                                                                        <label class="custom-control-label" for="kycYes">Yes </label>
';
                $buffer .= $indent . '                                                                    </div>
';
                $buffer .= $indent . '                                                                </li>
';
                $buffer .= $indent . '                                                                <li>
';
                $buffer .= $indent . '                                                                    <div class="custom-control custom-radio">
';
                $buffer .= $indent . '                                                                        <input type="radio" class="custom-control-input" name="kyc_aml_approve" value="no" id="kycNo">
';
                $buffer .= $indent . '                                                                        <label class="custom-control-label" for="kycNo">No </label>
';
                $buffer .= $indent . '                                                                    </div>
';
                $buffer .= $indent . '                                                                </li>
';
                $buffer .= $indent . '                                                            </ul>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="row g-3 align-center">
';
                $buffer .= $indent . '                                                        <div class="col-lg-5">
';
                $buffer .= $indent . '                                                            <div class="form-group">
';
                $buffer .= $indent . '                                                                <label class="form-label">Debit Card</label>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                        <div class="col-lg-7">
';
                $buffer .= $indent . '                                                            <ul class="custom-control-group g-3 align-center flex-wrap">
';
                $buffer .= $indent . '                                                                <input type="hidden" id="debitCard1" value="';
                $value = $this->resolveValue($context->find('debitcard'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                                <li>
';
                $buffer .= $indent . '                                                                    <div class="custom-control custom-radio">
';
                $buffer .= $indent . '                                                                        <input type="radio" class="custom-control-input" name="debitcard" value="yes" id="debitYes">
';
                $buffer .= $indent . '                                                                        <label class="custom-control-label" for="debitYes">Yes </label>
';
                $buffer .= $indent . '                                                                    </div>
';
                $buffer .= $indent . '                                                                </li>
';
                $buffer .= $indent . '                                                                <li>
';
                $buffer .= $indent . '                                                                    <div class="custom-control custom-radio">
';
                $buffer .= $indent . '                                                                        <input type="radio" class="custom-control-input" name="debitcard" value="no" id="debitNo">
';
                $buffer .= $indent . '                                                                        <label class="custom-control-label" for="debitNo">No </label>
';
                $buffer .= $indent . '                                                                    </div>
';
                $buffer .= $indent . '                                                                </li>
';
                $buffer .= $indent . '                                                            </ul>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="row g-3">
';
                $buffer .= $indent . '                                                        <div class="col-lg-7 offset-lg-5">
';
                $buffer .= $indent . '                                                            <div class="form-group mt-2">
';
                $buffer .= $indent . '                                                                <input type="hidden" name="personDetails" value="1">
';
                $buffer .= $indent . '                                                                <button type="submit" class="btn btn-lg btn-primary">Update</button>
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
                $buffer .= $indent . '                                    </form>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="tab-pane" id="bankDetails">
';
                $buffer .= $indent . '                                <div class="card">
';
                // 'updateBank' section
                $value = $context->find('updateBank');
                $buffer .= $this->sectionDefb37175d51b7f4abc7718a62568cf2($context, $indent, $value);
                $buffer .= $indent . '                                    <div class="card-inner">
';
                $buffer .= $indent . '                                        <div class="card-head">
';
                $buffer .= $indent . '                                            <h5 class="card-title">Bank Details</h5>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <form action="/adminUserDetails" method="post" class="gy-3">
';
                // 'isAdmin' section
                $value = $context->find('isAdmin');
                $buffer .= $this->section91b3e1d75700a28153cf442aa98ed2e9($context, $indent, $value);
                $buffer .= $indent . '                                            <div class="row g-3 align-center">
';
                $buffer .= $indent . '                                                <div class="col-lg-5">
';
                $buffer .= $indent . '                                                    <div class="form-group">
';
                $buffer .= $indent . '                                                        <label class="form-label">Bank Name</label>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                                <div class="col-lg-7">
';
                $buffer .= $indent . '                                                    <div class="form-group">
';
                $buffer .= $indent . '                                                        <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                            <input type="text" class="form-control" name="bankName" value="';
                $value = $this->resolveValue($context->find('bankName'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="row g-3 align-center">
';
                $buffer .= $indent . '                                                <div class="col-lg-5">
';
                $buffer .= $indent . '                                                    <div class="form-group">
';
                $buffer .= $indent . '                                                        <label class="form-label">Bank Address</label>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                                <div class="col-lg-7">
';
                $buffer .= $indent . '                                                    <div class="form-group">
';
                $buffer .= $indent . '                                                        <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                            <input type="text" class="form-control" name="bankAddress" value="';
                $value = $this->resolveValue($context->find('bankAddress'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="row g-3 align-center">
';
                $buffer .= $indent . '                                                <div class="col-lg-5">
';
                $buffer .= $indent . '                                                    <div class="form-group">
';
                $buffer .= $indent . '                                                        <label class="form-label">Account Name</label>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                                <div class="col-lg-7">
';
                $buffer .= $indent . '                                                    <div class="form-group">
';
                $buffer .= $indent . '                                                        <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                            <input type="text" class="form-control" name="bankAccountName" value="';
                $value = $this->resolveValue($context->find('bankAccountName'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="row g-3 align-center">
';
                $buffer .= $indent . '                                                <div class="col-lg-5">
';
                $buffer .= $indent . '                                                    <div class="form-group">
';
                $buffer .= $indent . '                                                        <label class="form-label">Account Number</label>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                                <div class="col-lg-7">
';
                $buffer .= $indent . '                                                    <div class="form-group">
';
                $buffer .= $indent . '                                                        <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                            <input type="text" class="form-control" name="bankAccountNumber" value="';
                $value = $this->resolveValue($context->find('bankAccountNumber'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="row g-3 align-center">
';
                $buffer .= $indent . '                                                <div class="col-lg-5">
';
                $buffer .= $indent . '                                                    <div class="form-group">
';
                $buffer .= $indent . '                                                        <label class="form-label">Swift/BIC Code/Sort Code</label>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                                <div class="col-lg-7">
';
                $buffer .= $indent . '                                                    <div class="form-group">
';
                $buffer .= $indent . '                                                        <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                            <input type="text" class="form-control" name="bankSwiftBicCode" value="';
                $value = $this->resolveValue($context->find('bankSwiftBicCode'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="row g-3 align-center">
';
                $buffer .= $indent . '                                                <div class="col-lg-5">
';
                $buffer .= $indent . '                                                    <div class="form-group">
';
                $buffer .= $indent . '                                                        <label class="form-label">IBAN Number</label>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                                <div class="col-lg-7">
';
                $buffer .= $indent . '                                                    <div class="form-group">
';
                $buffer .= $indent . '                                                        <div class="form-control-wrap">
';
                $buffer .= $indent . '                                                            <input type="text" class="form-control" name="bankIbanNumber" value="';
                $value = $this->resolveValue($context->find('bankIbanNumber'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                            <div class="row g-3">
';
                $buffer .= $indent . '                                                <div class="col-lg-7 offset-lg-5">
';
                $buffer .= $indent . '                                                    <div class="form-group mt-2">
';
                $buffer .= $indent . '                                                        <input type="hidden" name="bankDetails" value="1">
';
                $buffer .= $indent . '                                                        <button type="submit" class="btn btn-lg btn-primary">Update</button>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </form>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="tab-pane" id="recentLogin">
';
                $buffer .= $indent . '                                <div class="card">
';
                $buffer .= $indent . '                                    <div class="card-inner">
';
                $buffer .= $indent . '                                        <div class="card-head">
';
                $buffer .= $indent . '                                            <h5 class="card-title">Recent Logins</h5>
';
                $buffer .= $indent . '                                        </div>
';
                // 'allLogins' section
                $value = $context->find('allLogins');
                $buffer .= $this->section3a1a4ec3c9b438a57cec5f60946b8317($context, $indent, $value);
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
                $buffer .= $indent . '    $(\'#country\').val($(\'#country1\').val()).change();
';
                $buffer .= $indent . '    $(\'#accountType\').val($(\'#accountType1\').val()).change();
';
                $buffer .= $indent . '    $(\'#accountManager\').val($(\'#accountManager1\').val()).change();
';
                $buffer .= $indent . '    $(\'#accountManagerAgent\').val($(\'#accountManagerAgent1\').val()).change();
';
                $buffer .= $indent . '    $(\'#accountCurrency\').val($(\'#accountCurrency1\').val()).change();
';
                $buffer .= $indent . '    $(\'input[name=dividendPayment][value="\'+ $(\'#dividendPayment1\').val() +\'"]\').attr(\'checked\', \'checked\');
';
                $buffer .= $indent . '    $(\'input[name=kyc_aml_approve][value="\'+ $(\'#kycAmlApprove1\').val() +\'"]\').attr(\'checked\', \'checked\');
';
                $buffer .= $indent . '    $(\'input[name=debitcard][value="\'+ $(\'#debitCard1\').val() + \'"]\').attr(\'checked\', \'checked\');
';
                $buffer .= $indent . '})
';
                $buffer .= $indent . '</script>
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section492e2a5ab90d38470c1f8d431938913d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
{{#user}}
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-content-wrap">
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h2 class="title nk-block-title fw-normal"><a href="/adminDashboard" style="font-size: 15px; letter-spacing: 1px;">User Manage / </a>User Details</h2>
                            </div>
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#personDetails"><em class="icon ni ni-user-list"></em><span>Person Details</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#bankDetails"><em class="icon ni ni-wallet-in"></em><span>Bank Details</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#recentLogin"><em class="icon ni ni-power"></em><span>Recent Logins</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="personDetails">
                                <div class="card">
                                    {{#updatePersonal}}
                                    <div class="form-group example-alert">
                                        <div class="alert alert-success alert-icon alert-dismissible">
                                            <em class="icon ni ni-check-circle"></em> Personal Details and Account Details have been updated. <button class="close" data-dismiss="alert"></button>
                                        </div>
                                    </div>
                                    {{/updatePersonal}}
                                    <form action="/adminUserDetails" method="post">
                                        <div class="card-inner row">
                                            <div class="col-md-6">
                                                <div class="card-head">
                                                    <h5 class="card-title">Person Details</h5>
                                                </div>
                                                <div class="gy-3">
                                                    {{#isAdmin}}
                                                        <input type="hidden" value="{{userId}}" name="userId">
                                                    {{/isAdmin}}
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label">First Name</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" name="firstName" value="{{firstName}}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label">Last Name</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" name="lastName" value="{{lastName}}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label">Email</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" name="email" value="{{email}}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label"> Phone Number</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" name="mainContactNumber" value="{{mainContactNumber}}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label"> Address Line 1</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" name="addressLine1" value="{{addressLine1}}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label"> Address Line 2</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" name="addressLine2" value="{{addressLine2}}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label"> City</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" name="city" value="{{city}}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label"> Post Code</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" name="postalCode" value="{{postalCode}}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label"> Country</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-group">
                                                                    <input type="hidden" id="country1" value="{{country}}">
                                                                    <select class="form-select" id="country" name="country" data-search="on" required>
                                                                        <option value="Afghanistan">Afghanistan</option>
                                                                        <option value="Albania">Albania</option>
                                                                        <option value="Algeria">Algeria</option>
                                                                        <option value="American Samoa">American Samoa</option>
                                                                        <option value="Andorra">Andorra</option>
                                                                        <option value="Angola">Angola</option>
                                                                        <option value="Anguilla">Anguilla</option>
                                                                        <option value="Antarctica">Antarctica</option>
                                                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                                        <option value="Argentina">Argentina</option>
                                                                        <option value="Armenia">Armenia</option>
                                                                        <option value="Aruba">Aruba</option>
                                                                        <option value="Australia">Australia</option>
                                                                        <option value="Austria">Austria</option>
                                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                                        <option value="Bahamas">Bahamas</option>
                                                                        <option value="Bahrain">Bahrain</option>
                                                                        <option value="Bangladesh">Bangladesh</option>
                                                                        <option value="Barbados">Barbados</option>
                                                                        <option value="Belarus">Belarus</option>
                                                                        <option value="Belgium">Belgium</option>
                                                                        <option value="Belize">Belize</option>
                                                                        <option value="Benin">Benin</option>
                                                                        <option value="Bermuda">Bermuda</option>
                                                                        <option value="Bhutan">Bhutan</option>
                                                                        <option value="Bolivia">Bolivia</option>
                                                                        <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                                                        <option value="Botswana">Botswana</option>
                                                                        <option value="Bouvet Island">Bouvet Island</option>
                                                                        <option value="Brazil">Brazil</option>
                                                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                                        <option value="Bulgaria">Bulgaria</option>
                                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                                        <option value="Burundi">Burundi</option>
                                                                        <option value="Cambodia">Cambodia</option>
                                                                        <option value="Cameroon">Cameroon</option>
                                                                        <option value="Canada">Canada</option>
                                                                        <option value="Cape Verde">Cape Verde</option>
                                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                                        <option value="Central African Republic">Central African Republic</option>
                                                                        <option value="Chad">Chad</option>
                                                                        <option value="Chile">Chile</option>
                                                                        <option value="China">China</option>
                                                                        <option value="Christmas Island">Christmas Island</option>
                                                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                                        <option value="Colombia">Colombia</option>
                                                                        <option value="Comoros">Comoros</option>
                                                                        <option value="Congo">Congo</option>
                                                                        <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                                                                        <option value="Cook Islands">Cook Islands</option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Cote d\'Ivoire">Cote d\'Ivoire</option>
                                                                        <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Cyprus">Cyprus</option>
                                                                        <option value="Czech Republic">Czech Republic</option>
                                                                        <option value="Denmark">Denmark</option>
                                                                        <option value="Djibouti">Djibouti</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                                        <option value="East Timor">East Timor</option>
                                                                        <option value="Ecuador">Ecuador</option>
                                                                        <option value="Egypt">Egypt</option>
                                                                        <option value="El Salvador">El Salvador</option>
                                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                        <option value="Eritrea">Eritrea</option>
                                                                        <option value="Estonia">Estonia</option>
                                                                        <option value="Ethiopia">Ethiopia</option>
                                                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                                        <option value="Fiji">Fiji</option>
                                                                        <option value="Finland">Finland</option>
                                                                        <option value="France">France</option>
                                                                        <option value="France Metropolitan">France Metropolitan</option>
                                                                        <option value="French Guiana">French Guiana</option>
                                                                        <option value="French Polynesia">French Polynesia</option>
                                                                        <option value="French Southern Territories">French Southern Territories</option>
                                                                        <option value="Gabon">Gabon</option>
                                                                        <option value="Gambia">Gambia</option>
                                                                        <option value="Georgia">Georgia</option>
                                                                        <option value="Germany">Germany</option>
                                                                        <option value="Ghana">Ghana</option>
                                                                        <option value="Gibraltar">Gibraltar</option>
                                                                        <option value="Greece">Greece</option>
                                                                        <option value="Greenland">Greenland</option>
                                                                        <option value="Grenada">Grenada</option>
                                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                                        <option value="Guam">Guam</option>
                                                                        <option value="Guatemala">Guatemala</option>
                                                                        <option value="Guinea">Guinea</option>
                                                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                        <option value="Guyana">Guyana</option>
                                                                        <option value="Haiti">Haiti</option>
                                                                        <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                                                                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                                        <option value="Honduras">Honduras</option>
                                                                        <option value="Hong Kong">Hong Kong</option>
                                                                        <option value="Hungary">Hungary</option>
                                                                        <option value="Iceland">Iceland</option>
                                                                        <option value="India">India</option>
                                                                        <option value="Indonesia">Indonesia</option>
                                                                        <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                                                                        <option value="Iraq">Iraq</option>
                                                                        <option value="Ireland">Ireland</option>
                                                                        <option value="Israel">Israel</option>
                                                                        <option value="Italy">Italy</option>
                                                                        <option value="Jamaica">Jamaica</option>
                                                                        <option value="Japan">Japan</option>
                                                                        <option value="Jordan">Jordan</option>
                                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                                        <option value="Kenya">Kenya</option>
                                                                        <option value="Kiribati">Kiribati</option>
                                                                        <option value="Korea, Democratic People\'s Republic of">Korea, Democratic People\'s Republic of</option>
                                                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                                                        <option value="Kuwait">Kuwait</option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                        <option value="Lao, People\'s Democratic Republic">Lao, People\'s Democratic Republic</option>
                                                                        <option value="Latvia">Latvia</option>
                                                                        <option value="Lebanon">Lebanon</option>
                                                                        <option value="Lesotho">Lesotho</option>
                                                                        <option value="Liberia">Liberia</option>
                                                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                                        <option value="Lithuania">Lithuania</option>
                                                                        <option value="Luxembourg">Luxembourg</option>
                                                                        <option value="Macau">Macau</option>
                                                                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                                        <option value="Madagascar">Madagascar</option>
                                                                        <option value="Malawi">Malawi</option>
                                                                        <option value="Malaysia">Malaysia</option>
                                                                        <option value="Maldives">Maldives</option>
                                                                        <option value="Mali">Mali</option>
                                                                        <option value="Malta">Malta</option>
                                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                                        <option value="Martinique">Martinique</option>
                                                                        <option value="Mauritania">Mauritania</option>
                                                                        <option value="Mauritius">Mauritius</option>
                                                                        <option value="Mayotte">Mayotte</option>
                                                                        <option value="Mexico">Mexico</option>
                                                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                                        <option value="Monaco">Monaco</option>
                                                                        <option value="Mongolia">Mongolia</option>
                                                                        <option value="Montserrat">Montserrat</option>
                                                                        <option value="Morocco">Morocco</option>
                                                                        <option value="Mozambique">Mozambique</option>
                                                                        <option value="Myanmar">Myanmar</option>
                                                                        <option value="Namibia">Namibia</option>
                                                                        <option value="Nauru">Nauru</option>
                                                                        <option value="Nepal">Nepal</option>
                                                                        <option value="Netherlands">Netherlands</option>
                                                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                                        <option value="New Caledonia">New Caledonia</option>
                                                                        <option value="New Zealand">New Zealand</option>
                                                                        <option value="Nicaragua">Nicaragua</option>
                                                                        <option value="Niger">Niger</option>
                                                                        <option value="Nigeria">Nigeria</option>
                                                                        <option value="Niue">Niue</option>
                                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                                        <option value="Norway">Norway</option>
                                                                        <option value="Oman">Oman</option>
                                                                        <option value="Pakistan">Pakistan</option>
                                                                        <option value="Palau">Palau</option>
                                                                        <option value="Panama">Panama</option>
                                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                                        <option value="Paraguay">Paraguay</option>
                                                                        <option value="Peru">Peru</option>
                                                                        <option value="Philippines">Philippines</option>
                                                                        <option value="Pitcairn">Pitcairn</option>
                                                                        <option value="Poland">Poland</option>
                                                                        <option value="Portugal">Portugal</option>
                                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                                        <option value="Qatar">Qatar</option>
                                                                        <option value="Reunion">Reunion</option>
                                                                        <option value="Romania">Romania</option>
                                                                        <option value="Russian Federation">Russian Federation</option>
                                                                        <option value="Rwanda">Rwanda</option>
                                                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                                        <option value="Samoa">Samoa</option>
                                                                        <option value="San Marino">San Marino</option>
                                                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                                        <option value="Senegal">Senegal</option>
                                                                        <option value="Seychelles">Seychelles</option>
                                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                                        <option value="Singapore">Singapore</option>
                                                                        <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
                                                                        <option value="Slovenia">Slovenia</option>
                                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                                        <option value="Somalia">Somalia</option>
                                                                        <option value="South Africa">South Africa</option>
                                                                        <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                                                        <option value="Spain">Spain</option>
                                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                                        <option value="St. Helena">St. Helena</option>
                                                                        <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                                                        <option value="Sudan">Sudan</option>
                                                                        <option value="Suriname">Suriname</option>
                                                                        <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                                                                        <option value="Swaziland">Swaziland</option>
                                                                        <option value="Sweden">Sweden</option>
                                                                        <option value="Switzerland">Switzerland</option>
                                                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                                        <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                                        <option value="Tajikistan">Tajikistan</option>
                                                                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                                        <option value="Thailand">Thailand</option>
                                                                        <option value="Togo">Togo</option>
                                                                        <option value="Tokelau">Tokelau</option>
                                                                        <option value="Tonga">Tonga</option>
                                                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                                        <option value="Tunisia">Tunisia</option>
                                                                        <option value="Turkey">Turkey</option>
                                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                                        <option value="Tuvalu">Tuvalu</option>
                                                                        <option value="Uganda">Uganda</option>
                                                                        <option value="Ukraine">Ukraine</option>
                                                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                                                        <option value="United Kingdom">United Kingdom</option>
                                                                        <option value="United States">United States</option>
                                                                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                                        <option value="Uruguay">Uruguay</option>
                                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                                        <option value="Vanuatu">Vanuatu</option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Vietnam">Vietnam</option>
                                                                        <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                                                        <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                                                        <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                                                        <option value="Western Sahara">Western Sahara</option>
                                                                        <option value="Yemen">Yemen</option>
                                                                        <option value="Yugoslavia">Yugoslavia</option>
                                                                        <option value="Zambia">Zambia</option>
                                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label"> Date Of Birth</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" name="dateOfBirth" value="{{dateOfBirth}}" data-date-format="dd-mm-yyyy" class="form-control date-picker-alt" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card-head">
                                                    <h5 class="card-title">Account Details</h5>
                                                </div>
                                                <div class="gy-3">
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label">Account Opening Date</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" name="accountOpening" value="{{accountOpening}}" data-date-format="dd-mm-yyyy" class="form-control date-picker-alt" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label">Initial Investment</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" name="initialInvestment" value="{{initialInvestment}}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label">Account Type</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="hidden" id="accountType1" value="{{accountType}}">
                                                                    <select class="form-select" id="accountType" name="accountType" required>
                                                                        <option value="tc">60 Day Trial</option>
                                                                        <option value="gd">Macro</option>
                                                                        <option value="gd+">Advanced</option>
                                                                        <option value="pt">Prime</option>
                                                                    
                                                                     
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label">Account Trader</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="hidden" id="accountManager1" value="{{accountManager}}">
                                                                    <select class="form-select" id="accountManager" name="accountManager" required>
                                                                        <option value="Paul Damiens">Paul Damiens</option>
                                                                            <option value="Alex Baumen">Alex Baumen</option>
                                                                        <option value="Marcus Lane">Marcus Lane</option>
                                                                        <option value="Mark Lawson">Mark Lawson</option>
                                                                        
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label">Account Manager</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="hidden" id="accountManagerAgent1" value="{{agent}}">
                                                                    <select class="form-select" id="accountManagerAgent" name="accountManagerAgent" required>
                                                                        <option value="">Select Agent</option>
                                                                        <option value="Alex Baumen">Alex Baumen</option>
                                                                        <option value="Roy Walker">Roy Walker</option>
                                                                         
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label">Account Currency</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="hidden" id="accountCurrency1" value="{{accountCurrency}}">
                                                                    <select class="form-select" id="accountCurrency" name="accountCurrency" required>
                                                                        <option value="USD">USD</option>
                                                                       <!-- <option value="USD">USD</option>
                                                                        <option value="GBP">GBP</option>
                                                                        <option value="CHF">CHF</option>
                                                                        <option value="JPY">JPY</option>
                                                                        <option value="AUD">AUD</option>-->
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label">Dividend Payment</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <ul class="custom-control-group g-3 align-center flex-wrap">
                                                                <input type="hidden" id="dividendPayment1" value="{{dividendPayment}}">
                                                                <li>
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" class="custom-control-input" name="dividendPayment" value="compounded" id="compounded">
                                                                        <label class="custom-control-label" for="compounded">Compounded </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" class="custom-control-input" name="dividendPayment" value="monthly" id="monthly">
                                                                        <label class="custom-control-label" for="monthly">Monthly </label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label">KYC/AML Approved</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <ul class="custom-control-group g-3 align-center flex-wrap">
                                                                <input type="hidden" id="kycAmlApprove1" value="{{kyc_aml_approve}}">
                                                                <li>
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" class="custom-control-input" name="kyc_aml_approve" value="yes" id="kycYes">
                                                                        <label class="custom-control-label" for="kycYes">Yes </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" class="custom-control-input" name="kyc_aml_approve" value="no" id="kycNo">
                                                                        <label class="custom-control-label" for="kycNo">No </label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label">Debit Card</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <ul class="custom-control-group g-3 align-center flex-wrap">
                                                                <input type="hidden" id="debitCard1" value="{{debitcard}}">
                                                                <li>
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" class="custom-control-input" name="debitcard" value="yes" id="debitYes">
                                                                        <label class="custom-control-label" for="debitYes">Yes </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" class="custom-control-input" name="debitcard" value="no" id="debitNo">
                                                                        <label class="custom-control-label" for="debitNo">No </label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3">
                                                        <div class="col-lg-7 offset-lg-5">
                                                            <div class="form-group mt-2">
                                                                <input type="hidden" name="personDetails" value="1">
                                                                <button type="submit" class="btn btn-lg btn-primary">Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane" id="bankDetails">
                                <div class="card">
                                    {{#updateBank}}
                                    <div class="form-group example-alert">
                                        <div class="alert alert-success alert-icon alert-dismissible">
                                            <em class="icon ni ni-check-circle"></em> Bank Details have been updated. <button class="close" data-dismiss="alert"></button>
                                        </div>
                                    </div>
                                    {{/updateBank}}
                                    <div class="card-inner">
                                        <div class="card-head">
                                            <h5 class="card-title">Bank Details</h5>
                                        </div>
                                        <form action="/adminUserDetails" method="post" class="gy-3">
                                            {{#isAdmin}}
                                                <input type="hidden" value="{{userId}}" name="userId">
                                            {{/isAdmin}}
                                            <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label">Bank Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="bankName" value="{{bankName}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label">Bank Address</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="bankAddress" value="{{bankAddress}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label">Account Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="bankAccountName" value="{{bankAccountName}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label">Account Number</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="bankAccountNumber" value="{{bankAccountNumber}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label">Swift/BIC Code/Sort Code</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="bankSwiftBicCode" value="{{bankSwiftBicCode}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label">IBAN Number</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="bankIbanNumber" value="{{bankIbanNumber}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row g-3">
                                                <div class="col-lg-7 offset-lg-5">
                                                    <div class="form-group mt-2">
                                                        <input type="hidden" name="bankDetails" value="1">
                                                        <button type="submit" class="btn btn-lg btn-primary">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="recentLogin">
                                <div class="card">
                                    <div class="card-inner">
                                        <div class="card-head">
                                            <h5 class="card-title">Recent Logins</h5>
                                        </div>
                                        {{#allLogins}}
                                        <div class="row g-3 align-center">
                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        {{loginDate}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{/allLogins}}
                                    </div>
                                </div>
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

    $(\'#country\').val($(\'#country1\').val()).change();
    $(\'#accountType\').val($(\'#accountType1\').val()).change();
    $(\'#accountManager\').val($(\'#accountManager1\').val()).change();
    $(\'#accountManagerAgent\').val($(\'#accountManagerAgent1\').val()).change();
    $(\'#accountCurrency\').val($(\'#accountCurrency1\').val()).change();
    $(\'input[name=dividendPayment][value="\'+ $(\'#dividendPayment1\').val() +\'"]\').attr(\'checked\', \'checked\');
    $(\'input[name=kyc_aml_approve][value="\'+ $(\'#kycAmlApprove1\').val() +\'"]\').attr(\'checked\', \'checked\');
    $(\'input[name=debitcard][value="\'+ $(\'#debitCard1\').val() + \'"]\').attr(\'checked\', \'checked\');
})
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
                $buffer .= $this->section66a35c2232222f972b8d93ea85237f07($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
