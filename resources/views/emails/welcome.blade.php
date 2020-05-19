<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Skrap</title>
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            min-width: 100% !important;
        }

        img {
            height: auto;
        }

        .content {
            width: 100%;
        }

        .header {
            padding: 40px 30px 20px 30px;
        }

        .innerpadding {
            padding: 30px 30px 30px 30px;
        }

        .borderbottom {
            border-bottom: 1px solid #f2eeed;
        }

        .subhead {
            font-size: 15px;
            color: #ffffff;
            font-family: sans-serif;
            letter-spacing: 10px;
        }

        .h1, .h2, .bodycopy {
            color: #153643;
            font-family: sans-serif;
        }

        .h1 {
            font-size: 33px;
            line-height: 38px;
            font-weight: bold;
        }

        .h2 {
            padding: 0 0 15px 0;
            font-size: 24px;
            line-height: 28px;
            font-weight: bold;
        }

        .bodycopy {
            font-size: 16px;
            line-height: 22px;
        }

        .button {
            text-align: center;
            font-size: 18px;
            font-family: sans-serif;
            font-weight: bold;
            padding: 0 30px 0 30px;
        }

        .button a {
            color: #ffffff;
            text-decoration: none;
        }

        .footer {
            padding: 20px 30px 15px 30px;
        }

        .footercopy {
            font-family: sans-serif;
            font-size: 14px;
            color: #ffffff;
        }

        .footercopy a {
            color: #ffffff;
            text-decoration: underline;
        }

        @media only screen and (max-width: 550px), screen and (max-device-width: 550px) {
            body[yahoo] .hide {
                display: none !important;
            }

            body[yahoo] .buttonwrapper {
                background-color: transparent !important;
            }

            body[yahoo] .button {
                padding: 0px !important;
            }

            body[yahoo] .button a {
                background-color: #e05443;
                padding: 15px 15px 13px !important;
            }

            body[yahoo] .unsubscribe {
                display: block;
                margin-top: 20px;
                padding: 10px 50px;
                background: #2f3942;
                border-radius: 5px;
                text-decoration: none !important;
                font-weight: bold;
            }
        }

        /*@media only screen and (min-device-width: 601px) {
          .content {width: 600px !important;}
          .col425 {width: 425px!important;}
          .col380 {width: 380px!important;}
          }*/

    </style>
</head>

<body yahoo bgcolor="#f4fbfd">
<table width="100%" bgcolor="#f4fbfd" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td>
            <table bgcolor="#ffffff" class="content" align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td bgcolor="#0099cc" class="header">
                        <img class="fix" src="https://skrap.thechecker.org/storage/images/logo_skrap_white.png"
                             width="170" height="70" border="0" alt=""/>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td class="innerpadding borderbottom">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td class="h2">
                        Welcome to Skrap!
                    </td>
                </tr>
                <tr>
                    <td class="bodycopy">

                        Hi {{$name}},
                        <br/>
                        <br/>
                        Thanks for signing up for Skrap!
                        <br/>
                        <br/>
                        Just to let you know your account's all set up and ready to go, so you can log in now.
                        <br/>
                        <br/>
                        To remind you:
                        <br/>
                        <br/>
                        Your login name is: {{$email}}
                        <br/>
                        <br/>
                        Your password is the one you chose when you registered with us
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <table class="buttonwrapper" bgcolor="#0099cc" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td class="button" height="45">
                                    <a href="https://skrap.thechecker.org/login">Check your Skrap account online</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td class="footer" bgcolor="#44525f">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="center" class="footercopy">
                        &reg; Skrap 2020<br/>
                        <a href="#" class="unsubscribe"><font color="#ffffff">Unsubscribe</font></a>
                    </td>
                </tr>
                <tr>
                    <td align="center" style="padding: 20px 0 0 0;">
                        <table border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="37" style="text-align: center; padding: 0 10px 0 10px;">
                                    <a href="http://www.facebook.com/">
                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/facebook.png"
                                             width="37" height="37" alt="Facebook" border="0"/>
                                    </a>
                                </td>
                                <td width="37" style="text-align: center; padding: 0 10px 0 10px;">
                                    <a href="http://www.twitter.com/">
                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/twitter.png"
                                             width="37" height="37" alt="Twitter" border="0"/>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
