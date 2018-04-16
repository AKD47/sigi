<?php
/*contacts page form*/
add_action('wp_ajax_contact', 'contact');
add_action('wp_ajax_nopriv_contact', 'contact');

function contact()
{

    $to = fw_get_db_customizer_option('email');
    $subject = 'You have a message';
//    $message = 'User: ' . $_POST['name'] . ' Email - ' . $_POST['mail'] . ' Phone - ' . $_POST['phone'] . ' <br /> Text - ' . $_POST['message'];

    /* сообщение */
    $message = '
       <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
        <html>
            <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
                <title>You have a new massage!</title>
                <style type="text/css">
                ...
                </style>
            </head>
            <body>
            <!--[if (gte mso 9)|(IE)]>
            <table width="600" align="center">
                <tr>
                <td style="padding-top:0; 
                padding-bottom:0; 
                padding-right:0; 
                padding-left:0; 
                margin:0px;">
            <![endif]-->
                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <td align="center" 
                        style="padding-top:20px;
                        padding-bottom:20px;
                        padding-right:30px;
                        padding-left:30px;
                        text-align:center;
                        font-family: Arial, Helvetica, sans-serif;
                        font-size:24px; 
                        line-height:32px; 
                        color:#222222;"> New message from site</td>                        
                    </tr>
                    <tr>
                        <td 
                        style="padding-bottom:20px; 
                        background: rgba(53, 53, 52, 0.6);
                        text-align: center;
                        padding-top: 20px;">
                            <img src="https://dev.dimatech.org/wp_2/wp-content/themes/jehnevodak/assets/img/header-logo.png" width="600" alt="" 
                            style="width:100%; 
                            max-width: 190px;
                            height: 35px;">
                        </td>
                    </tr>
                    <tr>
                        <td dir="rtl" 
                        style="padding-top:0px;
                        padding-bottom:20px;
                        padding-right:0;
                        padding-left:0;
                        text-align:center;" >
                <!--[if (gte mso 9)|(IE)]>
                <table dir="rtl" width="100%">
                <tr>
                <td width="50%" valign="top" >
                <![endif]-->
                        <div dir="ltr" class="column" 
                        style="width:100%;
                        display:inline-block;
                        vertical-align:top;" >
                          <table width="100%" cellpadding="0" cellspacing="0" 
                          style="border-spacing:0;" >
                              <tr>
                                <td align="center" 
                                style="padding-top:10px;
                                padding-bottom:5px;
                                padding-right:5px;
                                padding-left:5px;
                                text-align:center;
                                font-family: Arial, Helvetica, sans-serif;
                                font-size:15px; 
                                line-height:18px; 
                                color:#222222;">User: ' . $_POST['name'] . '</td>
                              </tr>
                          </table>
                        </div>
                <!--[if (gte mso 9)|(IE)]>
                </td><td width="50%" valign="top" >
                <![endif]-->
                        <div dir="ltr" class="column" 
                        style="width:100%;
                        display:inline-block;
                        vertical-align:top;">
                          <table width="100%" cellpadding="0" cellspacing="0" 
                          style="border-spacing:0;" >
                              <tr>
                                <td align="center" 
                                style="padding-top:10px;
                                padding-bottom:5px;
                                padding-right:5px;
                                padding-left:5px;
                                text-align:center;
                                font-family: Arial, Helvetica, sans-serif;
                                font-size:15px; 
                                line-height:18px; color:#222222;">Email - ' . $_POST['mail'] . '</td>
                              </tr>
                          </table>
                        </div>
                        <!--[if (gte mso 9)|(IE)]>
                        </td><td width="50%" valign="top" >
                        <![endif]-->
                        <div dir="ltr" class="column" 
                        style="width:100%;
                        display:inline-block;
                        vertical-align:top;">
                          <table width="100%" cellpadding="0" cellspacing="0" 
                          style="border-spacing:0;" >
                              <tr>
                                <td align="center" 
                                style="padding-top:10px;
                                padding-bottom:5px;
                                padding-right:5px;
                                padding-left:5px;
                                text-align:center;
                                font-family: Arial, Helvetica, sans-serif;
                                font-size:15px; 
                                line-height:18px; color:#222222;">Phone - ' . $_POST['phone'] . '</td>
                              </tr>
                          </table>
                        </div>
                        <!--[if (gte mso 9)|(IE)]>
                        </td><td width="50%" valign="top" >
                        <![endif]-->
                        <div dir="ltr" class="column" 
                        style="width:100%;
                        display:inline-block;
                        vertical-align:top;">
                          <table width="100%" cellpadding="0" cellspacing="0" 
                          style="border-spacing:0;" >
                              <tr>
                                <td align="center" 
                                style="padding-top:10px;
                                padding-bottom:5px;
                                padding-right:5px;
                                padding-left:5px;
                                text-align:center;
                                font-family: Arial, Helvetica, sans-serif;
                                font-size:15px; 
                                line-height:18px; color:#222222;">Message - ' . $_POST['message'] . '</td>
                              </tr>
                          </table>
                        </div>
                <!--[if (gte mso 9)|(IE)]>
                </td>
                </tr>
                </table>
                <![endif]-->
            </td>
        </tr> 
                    
                </table>
                <!--[if (gte mso 9)|(IE)]>
                    </td></tr>
                    </table><![endif]-->
            </body>
        </html>
        ';


    $headers = 'Content-type: text/html';
    wp_mail($to, $subject, $message, $headers);
    wp_die();
}