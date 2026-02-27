<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Inquiry</title>
</head>
<body style="margin: 0; padding: 0; background-color: #ffffff; font-family: 'Segoe UI', sans-serif;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td style="padding: 20px 0;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="background-color: #FBFBFB; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                    <tr>
                        <td bgcolor="#0D0D0D" style="padding: 30px 20px; text-align: center;">
                            <h2 style="color: #ffffff; margin: 0; font-size: 24px; text-transform: uppercase; letter-spacing: 2px;">New Message</h2>
                        </td>
                    </tr>
                    
                    <tr>
                        <td style="padding: 40px 30px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td style="padding-bottom: 20px; border-bottom: 1px solid #eeeeee;">
                                        <p style="margin: 0 0 5px 0; color: #888888; font-size: 12px; text-transform: uppercase;">Sender Name</p>
                                        <p style="margin: 0; font-size: 16px; color: #333333; font-weight: bold;">{{ $details['name'] }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 20px 0; border-bottom: 1px solid #eeeeee;">
                                        <p style="margin: 0 0 5px 0; color: #888888; font-size: 12px; text-transform: uppercase;">Email Address</p>
                                        <p style="margin: 0; font-size: 16px; color: #F78522; font-weight: bold;">{{ $details['email'] }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 20px 0; border-bottom: 1px solid #eeeeee;">
                                        <p style="margin: 0 0 5px 0; color: #888888; font-size: 12px; text-transform: uppercase;">Subject</p>
                                        <p style="margin: 0; font-size: 16px; color: #333333;">{{ $details['subject'] }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-top: 20px;">
                                        <p style="margin: 0 0 10px 0; color: #888888; font-size: 12px; text-transform: uppercase;">Message Content</p>
                                        <div style="background-color: #f9f9f9; padding: 20px; border-radius: 5px; color: #555555; line-height: 1.6; font-style: italic;">
                                            "{{ $details['message'] }}"
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td bgcolor="#f8f9fa" style="padding: 20px; text-align: center; font-size: 12px; color: #999999;">
                            <p style="margin: 0;">This email was sent via your Portfolio Contact Form.</p>
                            <p style="margin: 5px 0 0 0;">&copy; {{ date('Y') }} Ahmad Husain. All rights reserved.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>