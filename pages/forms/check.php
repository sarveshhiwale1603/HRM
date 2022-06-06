


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zing - Making H>R</title>
    <link type="text/css" rel="stylesheet" href="../../App_Themes/CSS/Custom/Zing.css?v=4" />
    <style type="text/css">
        .empEmailMobile {
            text-align: left;
            margin-bottom: 15px;
        }

            .empEmailMobile label {
                color: #999;
                font-size: 10px;
                top: 0px;
                visibility: visible;
            }

        .resendOTP {
            font-size: 12px;
            text-align: right;
        }

            .resendOTP a {
                color: #0066cc !important;
                cursor: pointer;
            }

        .whitebg {
            background-color: #fff;
        }
        @import url(CustomLogin.css?v=1);

body, html {
    overflow: hidden;
    color: #333333;
}

.clearfix, .clearfix:after, .modal-footer:after {
    clear: both
}

body, html {
    height: 100%
}

.user-loginPage .login-container > .login-content > .login-form input:focus, a, button, input {
    outline: 0
}

body {
    margin: 0;
    padding: 0;
    background-color: #fafafa
}

@media all and (max-width:768px) {
    .user-loginPage .login-container > .login-content {
        margin-top: 0;
        width: 300px
    }
}

.img-responsive {
    display: block;
    max-width: 100%;
    height: auto
}

.BannerImg, .heightfull, .loginPanelHeader, .user-loginPage {
    height: 100%;
    min-height: 100%
}

    .user-loginPage .bs-reset {
        margin: 0;
        padding: 0
    }

    .user-loginPage .text-right {
        text-align: right
    }

    .BannerCont, .footerCopyright, .user-loginPage .text-center {
        text-align: center
    }

.text-left {
    text-align: left;
}

.user-loginPage .login-bg {
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    min-height: 100%
}

.user-loginPage .login-logo {
    position: absolute;
    top: 2.5em;
    left: 2.5em
}

    .user-loginPage .login-logo.login-6 {
        top: 80px;
        left: 80px
    }

.user-loginPage .login-container {
    position: relative;
    height: 100%;
    min-height: 100%
}

    .user-loginPage .login-container > .login-content > h1 {
        font-size: 30px;
        font-weight: 300;
        color: #4e5a64
    }

    .user-loginPage .login-container > .login-content p {
        color: #a0a9b4;
        font-size: 15px;
        line-height: 22px
    }

    .user-loginPage .login-container > .login-content > .login-form {
        margin-top: 80px;
        color: #a4aab2;
        font-size: 13px
    }

        .user-loginPage .login-container > .login-content > .login-form input {
            width: 100%;
            padding: 10px;
            border: #a0a9b4;
            border-bottom: 1px solid;
            color: #868e97;
            font-size: 14px;
            margin-bottom: 30px
        }

        .user-loginPage .login-container > .login-content > .login-form .forgot-password, .user-loginPage .login-container > .login-content > .login-form .login-button {
            display: inline-block
        }

        .user-loginPage .login-container > .login-content > .login-form .rem-password {
            margin-top: 10px
        }

            .user-loginPage .login-container > .login-content > .login-form .rem-password > p {
                margin: 0
            }

            .user-loginPage .login-container > .login-content > .login-form .rem-password > .rem-checkbox {
                border-color: #a4aab2
            }

        .user-loginPage .login-container > .login-content > .login-form .forgot-password {
            margin-right: 1em
        }

            .user-loginPage .login-container > .login-content > .login-form .forgot-password > a {
                color: #a4aab2
            }

                .user-loginPage .login-container > .login-content > .login-form .forgot-password > a:hover {
                    color: #337ab7;
                    text-decoration: none
                }

.footerIcon {
    font-size: 20px;
    margin: 0 5px
}

.form-container, .formTextField {
    position: relative;
    box-sizing: border-box;
    padding: 15px 0;
    font-size: 13px
}

.form-container {
    width: 100%;
    margin: 0 auto;
    z-index: 2;
}

.formTextField {
    width: auto;
    display: block;
    max-width: 100%;
    margin: 0
}

.formTextField-input {
    border: none;
    border-bottom: 1px solid #d7d7d7;
    margin: 0;
    padding: 4px 0 4px 20px;
    background: 0 0
}

.formTextField-input, .formTextField-label {
    font-size: 13px;
    width: 100% !important;
    text-align: left;
    display: block;
    color: #999;
}

.formTextField-label {
    padding-left: 20px;
    top: 18px
}

.formTextField-labelIcon {
    font-size: 15px;
    color: #b3b3b3;
    top: 18px
}

.formTextField-label, .formTextField-labelIcon {
    bottom: 0;
    left: 0;
    right: 0;
    pointer-events: none;
    position: absolute;
    overflow: hidden;
    white-space: nowrap
}

.formTextField-floating-label.is-dirty .formTextField-label, .formTextField-floating-label.focused .formTextField-label, .formTextField-floating-label.is-focused .formTextField-label, .formTextField-floating-label.focused .formTextField-label {
    color: #999;
    font-size: 10px;
    top: 0px;
    visibility: visible
}

.formTextField-floating-label.is-focused .formTextField-input {
    color: #555;
    padding-left: 20px
}

.btn, .btn:hover, .btn:focus, .btn:active {
    border-radius: 25px;
    padding: 6px 15px;
    font-size: 13px;
}

.PunchBtn, .loginBtn {
    color: #fff;
    padding: 6px 15px;
    cursor: pointer;
    font-size: 14px
}

.formTextField-floating-label .formTextField-label {
    transition-duration: .3s;
    -webkit-transition-duration: .3s;
    transition-timing-function: cubic-bezier(.4,0,.2,1);
    -webkit-transition-timing-function: cubic-bezier(.4,0,.2,1)
}

.formTextField-label:after {
    background-color: #73797c;
    bottom: 15px;
    content: '';
    height: 2px;
    left: 45%;
    position: absolute;
    transition-duration: .3s;
    -webkit-transition-duration: .3s;
    visibility: hidden;
    width: 10px
}

.formTextField.is-focused .formTextField-label:after {
    left: 0;
    visibility: visible;
    width: 100%
}

.pt10 {
    padding-top: 10px
}

.pt20 {
    padding-top: 20px
}

.mr15 {
    margin-right: 15px
}

.p0 {
    padding: 0
}

.pr5 {
    padding-right: 5px;
}

.clearfix:after, .clearfix:before {
    content: " ";
    display: table
}

.formInputSelection {
    position: relative
}

    .formInputSelection input {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
        cursor: pointer
    }

    .formInputSelection label {
        background-color: #fff;
        padding: 6px 10px;
        border: 2px solid #fff;
        display: block
    }

    .formInputSelection input:checked + label {
        border: 2px solid #2bbf32;
        background-color: #fff;
        display: block
    }

    .formInputSelection input:hover + label {
        background-color: #f5f6fa;
        border: 2px solid #2bbf32;
        display: block
    }

    .formInputSelection input:disabled + label {
        background-color: #dcdcdc;
        color: #b7b7b7;
        cursor: default;
        border: 2px solid #dcdcdc
    }

    .formInputSelection span.checkIcon {
        position: absolute;
        background-color: #2bbf32;
        color: #fff;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        text-align: center;
        right: -10px;
        top: -10px
    }

.requiredInput {
    border: 0 !important;
    border-bottom: 1px solid red !important
}

.socFbImg, .hide-pass, .showpass, .greenbtn, .socTwtImg, .socUTtImg, .socGplImg, .socLklImg, .zingHRLogo, .companyImg, .userImg, .passImg, .windows10, .AndrImg, .IOSImg, .chatChatImg, .chatArrDownImg, .chatArrUpImg, .loginIcon, .lockIcon {
    background-image: url(../../Images/Custom/ZingHR/ZingHR-Images.png?v=2.0);
    background-repeat: no-repeat;
}

.socFbImg {
    width: 18px;
    height: 18px;
    background-position: -5px -18px;
    display: inline-block;
}

.showpass {
    width: 18px;
    height: 18px;
    background-position: -194px -20px;
    display: inline-block;
}

.hide-pass {
    width: 18px;
    height: 18px;
    background-position: -163px -20px;
    display: inline-block;
}

.socTwtImg {
    width: 18px;
    height: 18px;
    background-position: -37px -18px;
    display: inline-block;
}

.socUTtImg {
    width: 18px;
    height: 18px;
    background-position: -68px -18px;
    display: inline-block;
}

.socGplImg {
    width: 20px;
    height: 18px;
    background-position: -101px -18px;
    display: inline-block;
}

.socLklImg {
    width: 20px;
    height: 18px;
    background-position: -129px -18px;
    display: inline-block;
}

.zingHRLogo {
    width: 53%;
    height: 80px;
    background-position: 0px -38px;
    display: inline-block;
}

.companyImg {
    width: 18px;
    height: 18px;
    background-position: -228px -6px;
    display: inline-block;
}

.userImg {
    width: 20px;
    height: 22px;
    background-position: -338px -45px;
    display: inline-block;
}

.passImg {
    width: 20px;
    height: 22px;
    background-position: -338px -76px;
    display: inline-block;
}

.AndrImg {
    width: 30px;
    height: 30px;
    background-position: -298px -85px;
    display: inline-block;
}

.IOSImg {
    width: 30px;
    height: 30px;
    background-position: -298px -44px;
    display: inline-block;
}

.windows10 {
    width: 75px;
    height: 85px;
    background-position: -13px -57px;
    display: inline-block;
}

.chatChatImg {
    width: 20px;
    height: 20px;
    background-position: -281px -34px;
    margin-right: 5px;
    display: inline-block;
}

.chatArrDownImg {
    width: 20px;
    height: 20px;
    background-position: -228px -20px;
    display: inline-block;
}

.chatArrUpImg {
    width: 20px;
    height: 20px;
    background-position: -228px -3px;
    display: inline-block;
}

.loginIcon {
    width: 20px;
    height: 20px;
    background-position: -338px -14px;
    display: inline-block;
}

.fieldsIconPos {
    position: absolute;
    top: 10px;
    left: 0;
}

.vAlignMid {
    vertical-align: middle;
}

.appBox {
    border: 1px solid #606568;
    padding: 10px;
    border-radius: 5px;
    color: #606568;
}

@media all and (min-width:992px) and (max-width:1125px) {
    .col-md-3.login-container {
        width: 33.33333333%;
    }

    .col-md-9.bs-reset.heightfull {
        width: 66.66666667%;
    }
}

.formTextField-floating-label.is-focused .formTextField-input {
    color: black;
}

.formTextField-floating-label.focused .formTextField-input {
    color: black
}

.formTextField.focused .formTextField-label:after {
    left: 0;
    visibility: visible;
    width: 100%;
}

.formCheckbox input[type=checkbox] {
    margin: 0 0 0 5px;
    vertical-align: middle;
}

a.forgotPassword {
    color: #3F65D5;
    text-decoration: none;
}

    a.forgotPassword:hover {
        text-decoration: none;
        color: #23a7a7;
    }

.applinkCont {
    text-align: center;
    font-weight: 600;
    padding-top: 20px;
    font-size: 14px;
    color: #fff;
    padding-bottom: 5px;
}

input:-webkit-autofill, input:-webkit-autofill:hover, input:-webkit-autofill:focus, input:-webkit-autofill:active {
    transition: background-color 5000s ease-in-out 0s;
    -webkit-text-fill-color: #555 !important;
}

    input:-webkit-autofill, input:-webkit-autofill:hover, input:-webkit-autofill:focus, input:-webkit-autofill:active {
        -webkit-box-shadow: 0 0 0 30px white inset;
        z-index: auto;
    }

requiredInput {
    border: 0 !important;
    border-bottom: 1px solid red !important
}

.updateDetails {
    font-size: 12px;
    margin-top: 10px;
}
/*Forgot password*/
.BannerImgColor {
    background-color: #033973
}

.footerSocial {
    position: absolute;
    right: 10px;
    bottom: 10px;
    z-index: 1;
}

.footerSupport {
    position: absolute;
    left: 20px;
    bottom: 10px;
    font-weight: 500;
    font-size: 13px;
    color: white;
}

    .footerSupport a {
        color: white;
        text-decoration: none;
    }

#footerCopy.footerapp {
    position: absolute;
    bottom: -250px;
    font-size: 11px;
    left: 50%;
    font-weight: 600;
    margin-left: -160px;
    width: 340px;
    height: 340px;
    border-radius: 100%;
    background-image: -webkit-gradient(linear, to right, #33cccc,#6fc067) !important;
    background-image: -webkit-linear-gradient(to right, #33cccc, #6fc067) !important;
    background-image: -moz-linear-gradient(to right, #33cccc,#6fc067) !important;
    background-image: -o-linear-gradient(to right, #33cccc, #6fc067) !important;
    background-image: linear-gradient(to right, #33cccc,#6fc067) !important;
}

.footerCopyright {
    width: 90%;
    padding: 10px 0;
    margin: 0;
    position: absolute;
    left: 5%;
    bottom: 10px;
    font-size: 12px;
    color: #fff;
}

.displayNone {
    display: none
}

.isVisible {
    -webkit-transition: visibility 0s .6s;
    -moz-transition: visibility 0s .6s;
    transition: visibility 0s .6s
}

    .isVisible .isActive {
        -webkit-transition-property: -webkit-transform;
        -moz-transition-property: -moz-transform;
        transition-property: transform;
        -webkit-transition-duration: 3s;
        -moz-transition-duration: 3s;
        transition-duration: 3s;
        -webkit-transition-delay: 3s;
        -moz-transition-delay: 3s;
        transition-delay: 3s
    }

.FPcontainer {
    width: 60%;
    position: absolute;
    left: 50%;
    margin-left: -30%;
    background-color: #fff;
    padding: 10px;
    top: 15%
}

.pageHeader {
    color: #205996;
    font-size: 20px;
    margin: 5px;
    font-weight: 400
}

.secHeader {
    color: #2b2b2b;
    padding-left: 20px;
    margin-bottom: 5px
}

.selectOption {
    font-size: 11px;
    color: #737373
}

div.resetOptionSelected.resetText, div.updateOptionSelectedcheck.resetText {
    font-size: 13px;
    color: #333;
    line-height: 20px
}

#ForgotPasswordDiv .PunchBtn {
    background-color: #205996;
    border: 1px solid #1a4a7e;
    color: #fff;
    display: inline-block;
    width: auto !important;
    border-radius: 0 !important;
}

    #ForgotPasswordDiv .PunchBtn:hover {
        background-color: #184b81;
        border: 1px solid #113a67;
        width: auto;
        border-radius: 0;
    }

@media all and (min-width:780px) and (max-width:1024px) {
    .FPcontainer {
        width: 80%;
        position: absolute;
        left: 50%;
        margin-left: -40%;
        background-color: #fff;
        padding: 10px;
        top: 2%
    }

    .updateOptionSelectedcheck {
        width: 50px;
        margin: 0 10px 0 0;
        float: left;
        text-align: center
    }

    .answerQuestion.col-md-3 {
        width: 42% !important;
        float: left
    }

    .otpResize {
        width: 60% !important
    }

    .verfiyBtn {
        margin: 10px 25px 16px !important
    }
}

@media all and (min-width:400px) and (max-width:779px) {
    .FPcontainer {
        width: 80%;
        position: absolute;
        left: 50%;
        margin-left: -40%;
        background-color: #fff;
        padding: 10px;
        top: 2%
    }

    .answerQuestion.col-md-3 {
        width: 96% !important;
        float: left
    }

    .otpResize {
        width: 60% !important
    }

    .verfiyBtn {
        margin: 10px 25px 16px !important
    }
}

@media all and (max-width:399px) {
    .FPcontainer {
        width: 80%;
        position: absolute;
        left: 50%;
        margin-left: -40%;
        background-color: #fff;
        padding: 10px;
        top: 2%
    }

    .answerQuestion.col-md-3 {
        width: 96% !important
    }

    .otpResize {
        width: 100% !important
    }

    .verfiyBtn {
        margin: 0 !important
    }
}
/*ChatBot*/
.box.border.primary {
    border: 1px solid #8ed968;
}

.box.border, .box.solid {
    border: 1px solid #c4c4c4;
    border-radius: 4px;
}

    .box.border > .box-title h4, .box.solid > .box-title h4 {
        display: inline-block;
        font-size: 13px;
        font-weight: normal;
        margin: 0 0 3px;
        padding: 0;
    }

    .box.border.primary > .box-title h4, .box.border.primary > .box-title h4 i {
        color: #FFF !important;
    }

    .box.border > .box-title h4 i, .box.solid > .box-title h4 i {
        margin-right: 10px;
    }

    .box.border > .box-title .tools, .box.solid > .box-title .tools {
        display: inline-block;
        padding: 0;
        margin-bottom: 3px;
        float: right;
        clear: both;
        min-height: 20px;
    }

        .box.border > .box-title .tools > a, .box.solid > .box-title .tools > a {
            display: inline-block;
            font-size: 14px;
            line-height: 24px;
            text-decoration: none;
            color: #ababab;
            margin-right: 5px;
        }

    .box.border.primary > .box-title .tools > a {
        color: #f4f4f4 !important;
    }

.box {
    clear: both;
    margin-top: 0;
    margin-bottom: 0;
    padding: 0;
}

    .box.border.primary > .box-title {
        color: #FFF !important;
        background-color: #8ed968;
        border-bottom: 1px solid #8ed968;
    }

    .box.border > .box-title, .box.solid > .box-title {
        padding: 8px 10px 2px;
        border-bottom: 1px solid #c4c4c4;
        min-height: 25px;
        background-color: #dbdbdb;
        margin-bottom: 0;
    }

    .box.border .box-body.big, .box.solid .box-body.big {
        padding: 30px;
    }

    .box.border .box-body, .box.solid .box-body {
        border-radius: 0 0 4px 4px;
        padding: 10px;
        background-color: #FFF;
    }

.blink {
    color: #0e365f;
    font-size: 12px;
    text-align: center;
    animation: blinker 3s ease-in infinite;
}

@keyframes blinker {
    50% {
        opacity: 0;
    }
}

.botHighlightColor {
    background-color: #06b73e;
}

.chatboat-container {
    width: 270px;
    position: fixed;
    bottom: 32px;
    left: 20px;
    z-index: 3
}
/***************************Custom CSS for the structure*********************************************/
.bg {
    background-image: url("../../Images/Custom/ZingHR/ZingHR-BG.jpg?v=1.0");
    height: 100%;
    background-position: top left;
    background-repeat: no-repeat;
    background-size: cover;
}

.pt15 {
    padding-top: 15px;
}

.mt20 {
    margin-top: 20px;
}

.form-container {
    width: 100%;
}

.user-loginPage .login-container {
    height: 100%;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.logo {
    width: 115px;
    margin: 0px auto;
}

.login-content {
    margin: 0 auto 0 auto;
}

.PunchBtn {
    width: 96%;
}

.head-div {
    margin-top: 18%;
}

.loginPanelHeader { /*width: 300px;*/
    width: 343px;
    height: 570px;
}

.loginBtn {
    border-radius: 25px;
    width: 100%;
    border: none;
    background-color: #3F65D5; /*background-image: -webkit-gradient(linear, to right, #33cccc ,#6fc067)!important;background-image: -webkit-linear-gradient(to right, #33cccc , #6fc067)!important;background-image: -moz-linear-gradient(to right, #33cccc ,#6fc067)!important;background-image: -o-linear-gradient(to right, #33cccc , #6fc067)!important;background-image: linear-gradient(to right, #33cccc ,#6fc067)!important;*/
    border: 1px solid #fff;
}

    .loginBtn:hover {
        background-color: #3F65D5; /*background-image: -webkit-gradient(linear, to right, #33cccc ,#33cccc)!important;background-image: -webkit-linear-gradient(to right, #33cccc , #33cccc)!important;background-image: -moz-linear-gradient(to right, #33cccc ,#33cccc)!important;background-image: -o-linear-gradient(to right, #33cccc , #33cccc)!important;background-image: linear-gradient(to right, #33cccc ,#33cccc)!important;*/
        border-radius: 25px;
        border: 1px solid #fff;
        width: 100%;
    }

.PunchBtn {
    background-color: #fff;
    border: 1px solid #3F65D5;
    color: #3F65D5;
    border-radius: 25px;
}

    .PunchBtn:hover {
        background-color: #3F65D5;
        border: 1px solid #3F65D5;
        color: #fff;
        border-radius: 25px;
        font-size: 13px;
        padding: 6px 15px;
    }

.Header {
    font-weight: 900;
    font-size: 34px;
    position: relative;
    text-align: center;
    text-shadow: 0 0 70px rgba(244, 218, 194, 1);
}

.download-link {
    width: 80%;
    cursor: pointer;
    margin: 0px auto;
}

.formTextField-input {
    border: none;
    border-bottom: 1px solid #d7d7d7;
    margin: 0;
    padding: 10px 0px 3px 0px;
    background: 0 0;
}

.form-container, .formTextField {
    padding: 5px 0;
}

.formTextField-label {
    padding-left: 20px;
    top: 10px;
}

    .formTextField-label:after {
        background-color: #666;
        bottom: 5px;
        height: 1px;
    }

.lockIcon {
    padding-left: 25px;
    background-repeat: no-repeat;
    background-position: -247px -109px;
    display: inline-block;
    height: 140px;
    width: 140px;
    padding: 0px;
    margin: 0px 0px 5px;
    background-color: white;
    border-radius: 50%;
    border: 15px 10px 5px 10px solid white;
    border-top: 10px solid white;
    border-bottom: 10px solid white;
    border-left: 11px solid white;
    border-right: 5px solid white;
    margin-bottom: -60px;
}

    .lockIcon:after {
        position: relative;
        content: '';
        display: block;
        width: 150px;
        height: 140px;
        top: -27px;
        left: -8px;
        z-index: -1;
        border-radius: 100%; /*box-shadow: 0 -5px 16px 0px;*/
        -webkit-box-shadow: 0px 0px 15px 0px rgba(153,204,153,0.7);
        -moz-box-shadow: 0px 0px 15px 0px rgba(153,204,153,0.7);
        box-shadow: 0px 0px 15px 0px rgba(153,204,153,0.7);
    }

.login-text {
    font-size: 16px;
    margin: 0px auto;
    color: #000;
    font-weight: 700;
}

.login-section {
    background-color: white;
    margin-top: 15px;
    padding: 10px 20px 20px;
    border-radius: 8px; /*-webkit-box-shadow: 0px 0px 15px 0px rgba(153,204,153,0.7);-moz-box-shadow: 0px 0px 15px 0px rgba(153,204,153,0.7);box-shadow: 0px 0px 15px 0px rgba(153,204,153,0.7);*/
    color: #999
}

.formTextField-label {
    padding-left: 0px;
}

.formTextField-floating-label.is-focused .formTextField-input {
    padding-left: 0px
}

.bottom-div {
    padding: 8px;
    font-size: 13px;
    background-color: #01b7ff;
    color: white;
    position: fixed;
    bottom: 0px;
    left: 0px;
    z-index: 999;
}

.PunchBtn, .loginBtn {
    font-size: 13px;
}

.social-icon {
    color: white;
    font-size: 13px;
    margin: 0px 5px;
}

.loginBtn:hover {
    font-size: 13px;
}

.support {
    text-align: left;
}

.email {
    text-align: center
}

.social {
    text-align: right
}

.ml0 {
    margin-left: 0px;
}

.ml5 {
    margin-left: 5px;
}

.showpass {
    bottom: 10px;
    right: 2px;
    font-size: 13px;
    pointer-events: none;
    position: absolute;
    overflow: hidden;
    white-space: nowrap;
    cursor: pointer;
    pointer-events: auto;
    color: #959799;
}

.formTextField-label {
    font-size: 13px;
}

@media screen and (min-width: 1370px) {
    .header {
        margin-top: 335px
    }

    .head-div {
        margin-top: 25%
    }
}

@media screen and (max-width: 1285px) {
    .chatboat-container {
        bottom: 55px;
    }

    .head-div {
        margin-top: 25%
    }
}

@media screen and (max-width: 990px) {
    .head-div {
        margin-top: 30%;
    }
}

@media screen and (max-width: 767px) {
    body {
        background-color: #01b7ff;
    }

    .form-container {
        width: 100%;
        top: -15px;
    }

    .loginPanelHeader {
        width: 100%;
    }

    .loginPanelHeader {
        background: none;
        margin-top: 5px;
    }

    .minResHide {
        display: none;
    }

    .chatboat-container {
        bottom: 70px;
        left: 50%;
        margin-left: -135px;
    }

    .support {
        text-align: center;
    }

    .email {
        text-align: center
    }

    .social {
        text-align: center
    }

    .login-content {
        margin: 0 auto 0;
    }

    .footerCopyright {
        width: 100%;
        text-align: center;
        left: unset;
    }
}

@media screen and (max-width: 535px) {
    .chatboat-container, .footerSupport, .footerSocial {
        display: none
    }

    .login-content {
        margin: 0 auto 0;
    }

    .footerCopyright {
        width: 100%;
        text-align: center;
        left: unset;
    }
}

@media screen and (max-width: 428px) {
    .chatboat-container, .footerSupport, .footerSocial {
        display: none
    }

    .login-content {
        margin: 0 auto 0;
    }

    .footerCopyright {
        width: 100%;
        text-align: center;
        left: unset;
    }
}

.mb15 {
    margin-bottom: 15px;
}

.w50 {
    width: 50%;
    float: left;
}

.flyRight {
    float: right;
}

.pt5 {
    padding-top: 5px;
}
/*Language dropdown*/
.language-select {
    cursor: pointer;
    color: #555555;
    background-color: #fff;
    border-color: #ccc;
    border-radius: 4px;
    padding: 6px;
    position: absolute;
    right: 10px;
    top: 10px;
    z-index: 1;
    font-size: 12px !important;
}

    .language-select:focus {
        outline: -webkit-focus-ring-color auto 0px;
    }
/*26-Sep-2019*/
.captchaInputField {
    width: 100px;
    float: left;
    padding-right: 15px;
}

    .captchaInputField input[type=text] {
        height: 30px;
    }

.captchaRefreshBtn {
    margin-top: 15px;
    width: 18px;
    height: 18px;
    padding: 4px;
    display: inline-block;
    float: right;
    cursor: pointer;
}

    .captchaRefreshBtn img {
        width: 100%;
        filter: contrast(0.4);
    }
    </style>
</head>
<body>
    <div class="user-loginPage bg">
        <div id="ProgressBarParent">
        </div>
        <div class="heightfull bs-reset">
            <div class="footerSupport">For support email us at <a href="mailto:support@zinghr.com">support@zinghr.com</a></div>
            <select id="drpLanguageList" class="language-select" style="display: none;">
                <option value="English">English</option>
                <option value='Hindi'>Hindi</option>
                <option value='Bangla'>Bangla</option>
                <option value='Sinhala'>Sinhala</option>
                <option value='Arabic'>Arabic</option>
            </select>


            <div class="col-md-4 col-sm-5 col-xs-12 col-lg-4 pull-right login-container whitebg bs-reset" id="login-box">
                <div class="login-content">
                    <div class="loginPanelHeader">
                        <div class="form-container">
                            <div class="text-center">
                                <span class="zingHRLogo"></span>
                            </div>
                            
                            <div class="login-section text-center clearfix CredentialsDiv">
                                <div class="mb15">
                                    <label class="login-text">Login</label>
                                </div>
                                <div class="formTextField formTextField-floating-label is-upgraded">
                                    <input class="formTextField-input required" id="txtCompanyCode" tabindex="1" maxlength="30" />
                                    <label class="formTextField-label multilingual_h" for="sample2" data-languagetext="company code">Company Code</label>
                                </div>
                                <div class="formTextField formTextField-floating-label is-upgraded">
                                    <input class="formTextField-input required" id="txtEmpCode" tabindex="2" maxlength="15" />
                                    <label class="formTextField-label multilingual_h" for="sample2" data-languagetext="employee code">Employee Code</label>
                                </div>
                                <div class="formTextField formTextField-floating-label is-upgraded">
                                    <input class="formTextField-input required" type="password" id="txtPassword" tabindex="3" maxlength="24" />
                                    <span toggle="#password-field" class="showpass"></span>
                                    <label class="formTextField-label multilingual_h" for="sample2" data-languagetext="password">Password</label>
                                </div>
                                <form method="post" action="./login.aspx" onsubmit="javascript:return WebForm_OnSubmit();" id="form1">
<div class="aspNetHidden">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="pDmhwp6B7Y9z6vfteVHXHHiFwv1RKKF+lrOmDpf4Ay2f0GvzUds3HhjGwwvTELl0/W8u59CnItu7aN7KRLQSghIMzjtKv2qOB2c5Mz5Jy5E=" />
</div>


<script src="/2015/WebResource.axd?d=L8EutVy-26iGKWzzLyelzqPIDNBmWeXHUEk4UnmECq62IgFd2_t3dfUpXUwNMb987LYDDI6gwrDi4t4DGJV8ljakV1cZsmxDbCQGcFpNMwA1&amp;t=637811927229275428" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
function WebForm_OnSubmit() {
if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
return true;
}
//]]>
</script>

<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="11E3B93E" />
	<input type="hidden" name="__VIEWSTATEENCRYPTED" id="__VIEWSTATEENCRYPTED" value="" />
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="bo0YkewTl8B1Cgd5cduGpVKnn9+0+tesMAEWAIUuIinNERsjButCEkhCk6RLy3yRpTS14MyEF+uIHVOaCaXXpsW3KzFGHsLugyQOYMxWwX7K3ip896mJhW3so3VRULK41ts0fzXuFWYAvNywOeKQXA==" />
</div>
                                    <div id="dvgoogle">
                                        <div id="dvCaptcha" class="pt10">
                                        </div>
                                        <input name="txtCaptcha" type="text" id="txtCaptcha" style="display: none" />
                                        <span id="rfvCaptcha" style="color:Red;display:none;">Captcha validation is required.</span>
                                    </div>
                                    <div id="dvCustom" style="display: none;">
                                        <div class="clearfix">
                                            <div class="captchaInputField">
                                                <input class="formTextField-input" type="text" id="txtnumber" tabindex="4" maxlength="6" />
                                            </div>
                                            <iframe id="miniBrowser" frameborder="0" scrolling="no" height="60" width="140" style="float: left;"></iframe>
                                            <a class="captchaRefreshBtn" id="btnReCap" aria-hidden="true">
                                                <img src="../../App_Themes/Images/Custom/ZingHR/refresh.png" /></a>
                                        </div>


                                    </div>
                                
<script type="text/javascript">
//<![CDATA[
var Page_Validators =  new Array(document.getElementById("rfvCaptcha"));
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
var rfvCaptcha = document.all ? document.all["rfvCaptcha"] : document.getElementById("rfvCaptcha");
rfvCaptcha.controltovalidate = "txtCaptcha";
rfvCaptcha.errormessage = "Captcha validation is required.";
rfvCaptcha.display = "Dynamic";
rfvCaptcha.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
rfvCaptcha.initialvalue = "";
//]]>
</script>


<script type="text/javascript">
//<![CDATA[

var Page_ValidationActive = false;
if (typeof(ValidatorOnLoad) == "function") {
    ValidatorOnLoad();
}

function ValidatorOnSubmit() {
    if (Page_ValidationActive) {
        return ValidatorCommonOnSubmit();
    }
    else {
        return true;
    }
}
        //]]>
</script>
<input type="hidden" name="__ncforminfo" value="OyuXNo3aPYj5Msw2zOZlYuWJR6TgZ5LZkhNZyhwKWwr9vCsj_29YO_rGH1BrFp2OcMjkS5hSwJFeQxLh5EuQ58j1oYxChkuVGwUPDjtLyfnKDQ--N7bD0k6hnnuVvURalIJpmXS9f14="/></form>
                                <div>
                                    <div class="clearfix pt10">
                                        <div class="col-md-6 col-sm-6 col-xs-6 p0">
                                            <label class="formCheckbox">
                                                <input type="checkbox" id="chkRemember" tabindex="4" />
                                                <span class="multilingual_h" data-languagetext="remember me">Remember Me</span>
                                            </label>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 p0 text-right"><a href="#" class="forgotPassword multilingual_h" id="btnForgot" data-languagetext="forgot password?" tabindex="8">Forgot Password?</a></div>
                                    </div>
                                </div>
                                <br />
                                <div class="text-center clearfix">
                                    <input type="hidden" id="Latitude" />
                                    <input type="hidden" id="Longitude" />
                                    <button class="btn loginBtn multilingual_h" id="btnLogin" tabindex="6" data-languagetext="submit">Login</button>
                                </div>

                                <div class="pt10 w50 text-left">
                                    <button class="btn PunchBtn PunchButton ml0  multilingual_h" data-status="PUNCHIN" tabindex="6" data-languagetext="punch in">Punch In</button>
                                </div>
                                <div class="pt10 w50 text-right">
                                    <button class="btn PunchBtn PunchButton  multilingual_h" data-status="PUNCHOUT" tabindex="7" data-languagetext="punch out">Punch Out</button>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a class="IOSImg vAlignMid" href="https://itunes.apple.com/in/app/zinghr/id967984663?mt=8" target="_blank"></a><a class="AndrImg vAlignMid ml5" href="https://play.google.com/store/apps/details?id=com.zinghr.app&hl=en" target="_blank"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- OTP -->
            <div id="Otp-div" class="col-md-4 col-sm-5 col-xs-12 col-lg-4 pull-right login-container whitebg bs-reset" style="display: none">
                <div class="login-content">
                    <div class="loginPanelHeader">
                        <div class="form-container">
                            <div class="text-center">
                                <span class="zingHRLogo"></span>
                            </div>
                           
                            <div class="login-section text-center clearfix CredentialsDiv">
                                <div class="mb15">
                                    <label class="login-text">OTP</label>
                                </div>
                                <span id="MobileEmailField"></span>
                                <div class="Otp-div formTextField formTextField-floating-label is-upgraded">
                                    <input class="formTextField-input required" />
                                    <label class="formTextField-label multilingual_h" data-languagetext="OTP">OTP</label>
                                </div>
                                <div class="text-center pt15 clearfix">
                                    <button class="btn loginBtn multilingual_h" id="SubmitOTP" data-languagetext="submit">Submit</button>
                                </div>
                                <div class="resendOTP pt15 clearfix">
                                    <a href="#" id="otp-back" class="pull-left">&lt; Back</a>
                                    <a id="Counter">Resend OTP</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End OTP-->

            <!--************************ Chatboat widget Start*******************************-->
            <div class="chatboat-container">
                <div class="box border primary chat-window">
                    <div class="box-title">
                        <h4 class="multilingual_h" data-languagetext="chat with zingbot"><span class="chatChatImg vAlignMid"></span>Chat with ZingBot</h4>
                        <div class="tools">
                            <a href="javascript:;" class="expand">
                                <span class="chatArrDownImg vAlignMid"></span>
                            </a>
                        </div>
                    </div>
                    <div class="box-body big" style="padding: 0; display: none;">
                        <div class="clearfix">
                            <iframe id="botIframe" src="" width="100%" frameborder="0" height="500px"></iframe>
                        </div>
                        <div class="divide-20"></div>
                    </div>
                </div>
            </div>
            <!--************************ Chatboat widget End*******************************-->
        </div>
    </div>
    <div id="OTPModal" class="modal fade" role="dialog" data-backdrop="static">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" width="500px">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <center>
                        <div style="display:inline-flex">
                            <div class="formTextField formTextField-floating-label is-upgraded" style="width:175px">
                                <input type="text" class="formTextField-input required numeric" id="OTP" maxlength=6 />
                                <label class="formTextField-label multilingual_h" for="sample2" data-languagetext="otp">OTP</label>
                            </div>   
                            <div style="padding:11px 0px 0px 30px;">
                                <button type="button" class="btn btn-default multilingual_h" id="VerifyOTP" data-languagetext="submit">Submit</button>
                                <button type="button" class="btn btn-default multilingual_h" id="ResendOTP" data-languagetext="resed otp">Resend OTP</button>
                            </div>                         
                        </div>
                        <div style="font-size:13px">
                            Enter OTP sent on your registered mobile number.
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>

    <script src="../../JQuery/Authentication/Login/LoginBundle.js?v=5"></script>
     <script>
         var isCustomCaptcha = 0;
         var generateval = '6LdEClUaAAAAAB0YhxJoxHhDYQQGoIKooO2R0DFl';
         if (isCustomCaptcha == undefined || isCustomCaptcha == null) {
             isCustomCaptcha = 0;

         }
         if (isCustomCaptcha == 1) {
             $('#dvCustom').show();
             $('#dvgoogle').hide();
             grecaptcha = undefined;
             console.log("google is blocked !!!!");
         } else {
             document.write("<script src='https://www.google.com/recaptcha/api.js?render=" + '6LdEClUaAAAAAB0YhxJoxHhDYQQGoIKooO2R0DFl' + "'> <\/script>");
         }
     </script>
     <script>document.write("<script src='../../JQuery/Authentication/Login/Login.js?v=" + $.now() + "' id='LoginScript'> <\/script>"); </script>
     <script src="../../JQuery/Multilingual/Common.js?v=5"></script>
     <script type="text/javascript">
         var onloadCallback = function () {
             if (isCustomCaptcha == 0) {
                 loadcap('6LdEClUaAAAAAB0YhxJoxHhDYQQGoIKooO2R0DFl');
             }
         };
     </script>
    
    <script type="text/javascript">
        var Subsallowed = 'encqa|nonencqa|enc1000|test20';
        jQuery(document).ready(function ($) {
            if (document.domain.split('.').pop() == "au") {
                $('#dvEmailId').html("support@zinghr.com.au");
                $('.footerCopyright').html("ZingHR is brought to you by Cnergyis Australia Pvt. Ltd. (www.cnergyis.com)® Copyright © 2021");
            }
            if (document.domain == "localhost" || document.domain == "portal.zinghr.ae" || document.domain == "dev.zinghr.com" || document.domain == "preprod.zinghr.com" || document.domain == "qa.zinghr.com") {
                var sel = getCookie("language");
                $('select').find('option[value=' + sel + ']').attr('selected', 'selected');
                $('#drpLanguageList').css('display', 'block');
            }
            translateOptions();
            GetSetLanguage();
            setTimeout(function () { CheckCpt(); }, 500);
            setTimeout(function () { $("#btnReCap").click(); }, 500);
        });
        function CheckCpt() {
            if (typeof (grecaptcha) == "undefined" || typeof (grecaptcha.render) == "undefined") {
                $('#dvCustom').show();
                $('#dvgoogle').hide();
                console.log("google is blocked !!!!");
            }
        }

        jQuery('.box .tools .collapse, .box .tools .expand').click(function () {
            var el = jQuery(this).parents(".box").children(".box-body");
            if (jQuery(this).hasClass("collapse")) {
                jQuery(this).removeClass("collapse").addClass("expand");
                var i = jQuery(this).children(".chatArrUpImg");
                i.removeClass("chatArrUpImg").addClass("chatArrDownImg");
                el.slideUp(500);
            } else {
                $("#botIframe").attr("src", "https://webchat.botframework.com/embed/zinghr?s=JuoC5SCriW4.cwA.1ck.lGEempJdj-o0-iabxsBMnNb8yImtNbJLmGj49P0LXuM");
                jQuery(this).removeClass("expand").addClass("collapse");
                var i = jQuery(this).children(".chatArrDownImg");
                i.removeClass("chatArrDownImg").addClass("chatArrUpImg");
                el.slideDown(500);
            }
        });

        $("#btnReCap").click(function () {
            $('#miniBrowser').attr('src', 'Captcha.aspx');
            return false;
        });

        $(".showpass").click(function () {
            $(this).toggleClass("hide-pass");
            var input = $('#txtPassword');
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>
</body>
</html>
