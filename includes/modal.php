<script>
function depositFunds() {
    $('#btnDeposit').attr('disabled', 'disabled');
    $.ajax({
        url : "/depositWithdraw",
        type: 'POST',
        data: {
            type: 'deposit',
            depositMethod: $('#depositMethod').attr('data'),
            depositAmount: $('#depositAmount1').text(),
            depositCurrency: $('#depositCurrency1').val()
        },
        success:function(data)
        {
            $('#cancelDepositModal').click();
            $('#successDeposit').click();
        }
    });
}

function withdrawFunds() {
    $('#submitWithdraw').attr('disabled', 'disabled');
    $.ajax({
        url : "/depositWithdraw",
        type: 'POST',
        data: {
            type: 'withdraw',
            withdrawMethod: $('#withdrawMethod').attr('data'),
            withdrawAmount: $('#withdrawAmount1').text(),
            withdrawCurrency: $('#withdrawCurrency1').val()
        },
        success:function(data)
        {
            $('#cancelWithdrawModal').click();
            $('#successWithdraw').click();
            $('#submitWithdraw').removeAttr('disabled');
        }
    });
}

function updateProfile() {
    var firstName = $('#firstName').val();
    var lastName = $('#lastName').val();
    var phoneNumber = $('#phoneNumber').val();
    var dateOfBirth = $('#dateOfBirth').val();

    if (firstName == '')    $('#firstName').focus();
    else if (lastName == '')    $('#lastName').focus();
    else if (phoneNumber == '')    $('#phoneNumber').focus();
    else if (dateOfBirth == '')    $('#dateOfBirth').focus();
    else {
        $.ajax({
            url : "/personDetails",
            type: 'POST',
            data: {
                type: 'updateProfile',
                firstName: firstName,
                lastName: lastName,
                phoneNumber: phoneNumber,
                dateOfBirth: dateOfBirth
            },
            success:function(data)
            {
                $('#successUpdateProfile').click();
            }
        });
    }
}

function updateAddress() {
    var addressLine1 = $('#addressLine1').val();
    var addressLine2 = $('#addressLine2').val();
    var country = $('#country1').val();
    var county = $('#county').val();

    if (addressLine1 == '')    $('#addressLine1').focus();
    else if (addressLine2 == '')    $('#addressLine2').focus();
    else if (country == '')    $('#country1').focus();
    else if (county == '')    $('#county').focus();
    else {
        $.ajax({
            url : "/personDetails",
            type: 'POST',
            data: {
                type: 'updateAddress',
                addressLine1: addressLine1,
                addressLine2: addressLine2,
                country: country,
                county: county
            },
            success:function(data)
            {
                $('#successUpdateAddress').click();
            }
        });
    }
}

function changePassword() {
    var currentPassword = $('#currentPassword').val();
    var newPassword = $('#newPassword').val();
    var confirmNewPassword = $('#confirmNewPassword').val();

    if (currentPassword == '')  $('#currentPassword').focus();
    else if (newPassword == '') $('#newPassword').focus();
    else if (confirmNewPassword == '')  $('#confirmNewPassword').focus();
    else if (newPassword != confirmNewPassword) {
        alert('New password is not matched!');
        $('#newPassword').focus();
    } else {
        $.ajax({
            url: '/accountSecurity',
            type: 'POST',
            data: {
                type: 'changePassword',
                currentPassword: currentPassword,
                newPassword: newPassword
            },
            success: function(data) {
                var result = data;
                if (result == '0') {
                    alert('Your Current password is incorrect!');
                    $('#currentPassword').focus();
                }
                if (result == '1') {
                    $('#closeChangePasswordModal').click();
                    $('#successPasswordChange').click();
                }
            }
        })
    }
}
$(document).ready(function() {
    $('#sendMessage').on('click', function() {
        $.ajax({
                url: '/messages',
                type: 'POST',
                data: {
                    type: 'sent',
                    department: $('#messageDepartment').val(),
                    title: $('#messageTitle').val(),
                    content: $('#messageContent').val().replace(/\n/g, "<br />"),
                },
                success: function(data) {
                    location.reload();
                }
            })
    });

    $('#saveMessage').on('click', function() {
        $.ajax({
                url: '/messages',
                type: 'POST',
                data: {
                    type: 'draft',
                    department: $('#messageDepartment').val(),
                    title: $('#messageTitle').val(),
                    content: $('#messageContent').val().replace(/\n/g, "<br />"),
                },
                success: function(data) {
                    location.reload();
                }
            })
    });

    $('#sendAdminMessage').on('click', function() {
        $.ajax({
                url: '/adminMessages',
                type: 'POST',
                data: {
                    type: 'adminSent',
                    userId: $('#adminMessageClient').val(),
                    title: $('#adminMessageTitle').val(),
                    content: $('#adminMessageContent').val().replace(/\n/g, "<br />"),
                },
                success: function(data) {
                    location.reload();
                }
            })
    });

    $('#saveAdminMessage').on('click', function() {
        $.ajax({
                url: '/adminMessages',
                type: 'POST',
                data: {
                    type: 'adminDraft',
                    userId: $('#adminMessageClient').val(),
                    title: $('#adminMessageTitle').val(),
                    content: $('#adminMessageContent').val().replace(/\n/g, "<br />"),
                },
                success: function(data) {
                    location.reload();
                }
            })
    });

    $('#btnSuccessUpdateAddress, #btnSuccessUpdateProfile').on('click', function() {
        location.reload();
    })
});
</script>
<div class="modal fade" tabindex="-1" id="modalTradeHistory">
    <div class="modal-dialog modal-lg" role="document" style="max-width: 1000px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Trade Snapshot</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="depositModal">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-lg">
                <div class="nk-block-head nk-block-head-xs text-center">
                    <h5 class="nk-block-title">Confirm Deposit Amount</h5>
                </div>
                <div class="nk-block">
                    <div class="buysell-overview">
                        <ul class="buysell-overview-list">
                            <li class="buysell-overview-item">
                                <span class="pm-title">Deposit Method</span>
                                <span id="depositMethod" data="bankTransfer" style="font-size: 15px; margin-right: 18px">Cryptocurrency</span>
                            </li>
                            <li class="buysell-overview-item">
                                <span class="pm-title">Deposit Amount (in fiat)</span>
                                <span id="depositAmount1" style="font-size: 15px; margin-right: 18px"></span>
                            </li>
                            <li class="buysell-overview-item">
                                <span class="pm-title">Deposit Currency</span>
                                <span id="depositCurrency1" style="font-size: 15px; margin-right: 18px">USD</span>
                            </li>
                        </ul>
                    </div>
                    <div class="buysell-field form-action text-center">
                        <a href="/uploads/documents/Bitlafa-USD-Remittance.pdf" id="downloadPayment" class="btn btn-info btn-lg mt-3" target="_blank">Download Payment Instructions</a>
                        <a href="#" id="viewWalletAddress" class="btn btn-primary btn-lg" data-dismiss="modal" data-toggle="modal" data-target="#walleteAddressModal">View Wallet Address</a>
                        <div class="pt-3">
                            <a href="#" id="cancelDepositModal" data-dismiss="modal" class="link link-danger">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<a href="#" id="successDeposit" data-dismiss="modal" data-toggle="modal" data-target="#successDepositModal" style="display:hidden;"></a>
<div class="modal fade" tabindex="-1" role="dialog" id="successDepositModal">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-lg text-center">
                <div class="nk-modal">
                    <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-check bg-success"></em>
                    <h4 class="nk-modal-title">Success!</h4>
                    <div class="nk-modal-action-lg">
                        <ul class="btn-group gx-4">
                            <li><a href="#" data-dismiss="modal" class="link link-danger">Return</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="withdrawModal">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-lg">
                <div class="nk-block-head nk-block-head-xs text-center">
                    <h5 class="nk-block-title">Confirm Withdraw</h5>
                </div>
                <div class="nk-block">
                    <div class="buysell-overview">
                        <ul class="buysell-overview-list">
                            <li class="buysell-overview-item">
                                <span class="pm-title">Withdraw Via</span>
                                <span id="withdrawMethod" data="bankTransfer" style="font-size: 15px">Bank Transfer</span>
                            </li>
                            <li class="buysell-overview-item">
                                <span class="pm-title">Withdrawal Amount</span>
                                <span id="withdrawAmount1" style="font-size: 15px"></span>
                            </li>
                            <input type="hidden" id="withdrawCurrency1" value="USD">
                        </ul>
                        <div class="sub-text-sm">* Our transaction fee are included. <a href="#">See transaction fee</a></div>
                    </div>
                    <div class="buysell-field form-action text-center">
                        <button type="button" id="submitWithdraw" onClick="withdrawFunds()" class="btn btn-primary btn-lg">Submit Withdrawal Request</button>
                        <div class="pt-3">
                            <a href="#" id="cancelWithdrawModal" data-dismiss="modal" class="link link-danger">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="walleteAddressModal">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-lg text-center">
                <div class="nk-block-head nk-block-head-xs text-center">
                    <h4 class="walletAddressTitle nk-block-title">BTC Deposit Address</h4>
                    <p>Please ensure to check the wallet address before sending funds</p>
                </div>
                <div class="nk-modal">
                    <div class="nk-modal-action-lg">
                        <img id="walletQRCodeImage" src="/uploads/documents/BTC-QR-CODE.png" alt="BTC QR code" style="width: 50%">
                        <p class="nk-modal-title" style="font-size: 18px;">
                            <span class="walletAddressTitle">BTC Wallet Address</span>:
                            <span id='walletAddress'>bc1qqqcfjvfxz5le7arrznw80ukxdt9kz9rx67s8ep</span>
                        </p>
                        <div class="buysell-field form-action text-center">
                            <button class="btn btn-primary btn-lg clipboard-init" title="Copy to clipboard" data-clipboard-target="#walletAddress" data-clip-success="Copied Wallet Address" data-clip-text="Copy Wallet Address">
                                <span class="clipboard-text pl-5 pr-5" style="font-size: 0.9375rem">Copy Wallet Address</span>
                            </button>
                            <div class="pt-3">
                                <a href="#" data-dismiss="modal" class="link link-danger">Cancel</a>
                            </div>
                        </div>
                        <div class="sub-text-sm">** payments are manually processed, this can take up to 24 hours.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<a href="#" id="successWithdraw" data-dismiss="modal" data-toggle="modal" data-target="#successWithdrawModal" style="display:hidden;"></a>
<div class="modal fade" tabindex="-1" role="dialog" id="successWithdrawModal">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-lg text-center">
                <div class="nk-modal">
                    <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-check bg-success"></em>
                    <h4 class="nk-modal-title">Thank you!</h4>
                    <div class="text-center" style="font-size: 16px;">As a security precaution someone from our accounts team will call you within the next 24 hours to confirm with you.</div>
                    <div class="nk-modal-action-lg">
                        <ul class="btn-group gx-4">
                            <li><a href="#" data-dismiss="modal" class="link link-danger" style="font-size: 20px;">Return</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" id="modalAlert">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross"></em></a>
            <div class="modal-body modal-body-lg text-center">
                <div class="nk-modal">
                    <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-check bg-success"></em>
                    <h4 class="nk-modal-title">Welcome to CoinTrader24 Online!</h4>
                    <div class="nk-modal-text">
                        <div class="caption-text">Your login details have been sent to your email.</div>
                    </div>
                    <div class="nk-modal-action">
                        <a href="#" onClick="window.location.href='/login'" class="btn btn-lg btn-mw btn-primary" data-dismiss="modal">OK</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="profile-edit">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-lg">
                <h5 class="title">Update Profile</h5>
                <ul class="nk-nav nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#personal">Personal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#address">Address</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="personal">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="firstName">First Name</label>
                                    <input type="text" class="form-control form-control-lg" id="firstName" placeholder="Enter first name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="lastName">Last Name</label>
                                    <input type="text" class="form-control form-control-lg" id="lastName" placeholder="Enter last name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phoneNumber">Phone Number</label>
                                    <input type="text" class="form-control form-control-lg" id="phoneNumber" placeholder="Enter phone number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="dateOfBirth">Date of Birth</label>
                                    <input type="text" class="form-control form-control-lg date-picker" id="dateOfBirth" data-date-format="dd-mm-yyyy" placeholder="Enter date of birth">
                                </div>
                            </div>
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <a href="javascript:;" onClick="updateProfile()" class="btn btn-lg btn-primary">Update Profile</a>
                                    </li>
                                    <li>
                                        <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="address">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="addressLine1">Address Line 1</label>
                                    <input type="text" class="form-control form-control-lg" id="addressLine1" placeholder="Enter address line 1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="addressLine2">Address Line 2</label>
                                    <input type="text" class="form-control form-control-lg" id="addressLine2" placeholder="Enter address line 2">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="country">Country</label>
                                    <select class="form-select" id="country1" data-search="on" data-ui="lg" required>
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
                                        <option value="Cote d'Ivoire">Cote d'Ivoire</option>
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
                                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Lao, People's Democratic Republic">Lao, People's Democratic Republic</option>
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="county">County</label>
                                    <input type="text" class="form-control form-control-lg" id="county" placeholder="Enter county">
                                </div>
                            </div>
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <a href="javascript:;" onClick="updateAddress()" class="btn btn-lg btn-primary">Update Address</a>
                                    </li>
                                    <li>
                                        <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade zoom" tabindex="-1" id="changePasswordModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Change Password</h5>
                <a href="#" id="closeChangePasswordModal" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="form-label-group">
                        <label class="form-label">Current Password <span class="text-danger">*</span></label>
                    </div>
                    <div class="form-control-group">
                        <input type="password" id="currentPassword" autocomplete="off" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label class="form-label">New Password <span class="text-danger">*</span></label>
                    </div>
                    <div class="form-control-group">
                        <input type="password" id="newPassword" autocomplete="off" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label class="form-label">Confirm New Password <span class="text-danger">*</span></label>
                    </div>
                    <div class="form-control-group">
                        <input type="password" id="confirmNewPassword" autocomplete="off" class="form-control form-control-lg">
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-light">
                <button type="submit" onClick="changePassword()" class="btn btn-primary">Change Password</button>
            </div>
        </div>
    </div>
</div>

<a href="#" id="successPasswordChange" data-dismiss="modal" data-toggle="modal" data-target="#passwordChangedModal" style="display:hidden;"></a>
<div class="modal fade" tabindex="-1" id="passwordChangedModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross"></em></a>
            <div class="modal-body modal-body-lg text-center">
                <div class="nk-modal">
                    <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-check bg-success"></em>
                    <h4 class="nk-modal-title">Congratulations!</h4>
                    <div class="nk-modal-text">
                        <div class="caption-text">Your password has been reset and sent to your email.</div>
                    </div>
                    <div class="nk-modal-action">
                        <a href="#" class="btn btn-lg btn-mw btn-primary" data-dismiss="modal">OK</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<a href="#" id="successUpdateProfile" data-dismiss="modal" data-toggle="modal" data-target="#updateProfileModal" style="display:hidden;"></a>
<div class="modal fade" tabindex="-1" id="updateProfileModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross"></em></a>
            <div class="modal-body modal-body-lg text-center">
                <div class="nk-modal">
                    <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-check bg-success"></em>
                    <h4 class="nk-modal-title">Congratulations!</h4>
                    <div class="nk-modal-text">
                        <div class="caption-text">Your personal data has been successfully updated.</div>
                    </div>
                    <div class="nk-modal-action">
                        <a href="#" id="btnSuccessUpdateProfile" class="btn btn-lg btn-mw btn-primary" data-dismiss="modal">OK</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<a href="#" id="successUpdateAddress" data-dismiss="modal" data-toggle="modal" data-target="#updateAddressModal" style="display:hidden;"></a>
<div class="modal fade" tabindex="-1" id="updateAddressModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross"></em></a>
            <div class="modal-body modal-body-lg text-center">
                <div class="nk-modal">
                    <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-check bg-success"></em>
                    <h4 class="nk-modal-title">Congratulations!</h4>
                    <div class="nk-modal-text">
                        <div class="caption-text">Your address has been successfully updated.</div>
                    </div>
                    <div class="nk-modal-action">
                        <a href="#" id="btnSuccessUpdateAddress" class="btn btn-lg btn-mw btn-primary" data-dismiss="modal">OK</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="compose-mail">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Compose Message</h6>
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            </div>
            <div class="modal-body p-0">
                <div class="nk-reply-form-header">
                    <div class="nk-reply-form-group">
                        <div class="nk-reply-form-input-group">
                            <div class="nk-reply-form-input nk-reply-form-input-to">
                                <label class="label">To</label>
                                <select class="form-control" id="messageDepartment" name="department">
                                    <option value="Accounts Department">Accounts Department</option>
                                    <option value="Administration">Administration</option>
                                    <option value="My Account Manager">My Account Manager</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-reply-form-editor">
                    <div class="nk-reply-form-field">
                        <input type="text" id="messageTitle" name="title" class="form-control form-control-simple" placeholder="Subject">
                    </div>
                    <div class="nk-reply-form-field">
                        <textarea id="messageContent" name="content" class="form-control form-control-simple no-resize ex-large" placeholder="Hello"></textarea>
                    </div>
                </div>
                <div class="nk-reply-form-tools">
                    <ul class="nk-reply-form-actions g-1">
                        <li class="mr-2"><button id="sendMessage" type="submit" class="btn btn-primary pl-3 pr-3">Send Message</button></li>
                        <li class="mr-2"><button id="saveMessage" type="submit" class="btn btn-info pl-3 pr-3">Save as Draft</button></li>
                    </ul>
                    <ul class="nk-reply-form-actions g-1">
                        <li>
                            <a href="#" class="btn-trigger btn btn-icon mr-n2"><em class="icon ni ni-trash"></em></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="compose-admin-mail">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Compose Message</h6>
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            </div>
            <div class="modal-body p-0">
                <div class="nk-reply-form-header">
                    <div class="nk-reply-form-group">
                        <div class="nk-reply-form-input-group">
                            <div class="nk-reply-form-input nk-reply-form-input-to">
                                <label class="label">To</label>
                                <select class="form-control" id="adminMessageClient" name="client">
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-reply-form-editor">
                    <div class="nk-reply-form-field">
                        <input type="text" id="adminMessageTitle" name="title" class="form-control form-control-simple" placeholder="Subject">
                    </div>
                    <div class="nk-reply-form-field">
                        <textarea id="adminMessageContent" name="content" class="form-control form-control-simple no-resize ex-large" placeholder="Hello"></textarea>
                    </div>
                </div>
                <div class="nk-reply-form-tools">
                    <ul class="nk-reply-form-actions g-1">
                        <li class="mr-2"><button id="sendAdminMessage" type="submit" class="btn btn-primary pl-3 pr-3">Send Message</button></li>
                        <li class="mr-2"><button id="saveAdminMessage" type="submit" class="btn btn-info pl-3 pr-3">Save as Draft</button></li>
                    </ul>
                    <ul class="nk-reply-form-actions g-1">
                        <li>
                            <a href="#" class="btn-trigger btn btn-icon mr-n2"><em class="icon ni ni-trash"></em></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>