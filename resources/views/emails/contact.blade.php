@extends('layouts.email')

@section('emailContent')
<!-- <style> -->
<table class="body" data-made-with-foundation="">
    <tr>
        <td class="float-center" align="center" valign="top">
            <center data-parsed="">
                <style type="text/css" align="center" class="float-center">
                    body,
                    html,
                    .body {
                        background: #f3f3f3 !important;
                    }

                    .container.header {
                        background: #f3f3f3;
                    }

                    .body-drip {
                        border-top: 8px solid #D1FF47;
                    }
                </style>
                <table class="container body-drip float-center">
                    <tbody>
                    <tr>
                        <td>
                            <table class="spacer">
                                <tbody>
                                <tr>
                                    <td height="16px" style="font-size:16px;line-height:16px;">&#xA0;</td>
                                </tr>
                                </tbody>
                            </table>
                            <center data-parsed=""> <img src="http://offbroadwaykids.net/img/green-logo.png" height="300px" width="300px" alt="Off Broadway Logo" align="center" class="float-center"> </center>
                            <table class="spacer">
                                <tbody>
                                <tr>
                                    <td height="16px" style="font-size:16px;line-height:16px;">&#xA0;</td>
                                </tr>
                                </tbody>
                            </table>
                            <hr>
                            <table class="row">
                                <tbody>
                                <tr>
                                    <th class="small-12 large-12 columns first last">
                                        <table>
                                            <tr>
                                                <th>
                                                    <p class="text-center">Hey! Here is a new message from Off Broadway Children's Theatre</p><hr>
                                                    <p>Name: {{$name}}</p>
                                                    <p>Phone: {{$phone}}</p>
                                                    <p>Email: {{$email}}</p>
                                                    <p>Message: {{$emailMessage}}</p>
                                                    <hr>
                                                    <p>To respond to the email, <a href="mailto:{{$email}}?Subject=Hello From Off Broadway">Click here</a></p>

                                                </th>
                                                <th class="expander"></th>
                                            </tr>
                                        </table>
                                    </th>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </center>
        </td>
    </tr>
</table>
@endsection