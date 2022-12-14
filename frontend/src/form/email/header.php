<?
$header = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--[if gte mso 6]>
    <style>
        table.mcnFollowContent {width:100% !important;}
        table.mcnShareContent {width:100% !important;}
    </style>
    <![endif]-->
    <style type="text/css">
        .mainimage{
            width: 600px;
        }
        .messageimage{
            width: 58px;
        }
        body,#bodyTable,#bodyCell{
            height:100% !important;
            margin:0;
            padding:0;
            width:100% !important;
        }
        table{
            border-collapse:collapse;
        }
        img,a img{
            border:0;
            outline:none;
            text-decoration:none;
        }
        h1,h2,h3,h4,h5,h6{
            margin:0;
            padding:0;
        }
        p{
            margin:1em 0;
            padding:0;
        }
        a{
            word-wrap:break-word;
        }
        .ReadMsgBody{
            width:100%;
        }
        .ExternalClass{
            width:100%;
        }
        .ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div{
            line-height:100%;
        }
        table,td{
            mso-table-lspace:0pt;
            mso-table-rspace:0pt;
        }
        #outlook a{
            padding:0;
        }
        img{
            -ms-interpolation-mode:bicubic;
        }
        body,table,td,p,a,li,blockquote{
            -ms-text-size-adjust:100%;
            -webkit-text-size-adjust:100%;
        }
        #bodyCell{
            padding:20px;
        }
        .mcnImage{
            vertical-align:bottom;
        }
        .mcnTextContent img{
            height:auto !important;
        }
        body,#bodyTable{
            background-color:#f1f1f1;
        }
        #bodyCell{
            border-top:0;
        }
        #templateContainer{
            border:0;
        }
        h1{
            color:#8b8b8b !important;
            display:block;
            font-family:Helvetica;
            font-size:20px;
            font-style:normal;
            font-weight:bold;
            line-height:100%;
            letter-spacing:-1px;
            margin:0;
            text-align:left;
        }
        h2{
            color:#404040 !important;
            display:block;
            font-family:Helvetica;
            font-size:26px;
            font-style:normal;
            font-weight:bold;
            line-height:125%;
            letter-spacing:-.75px;
            margin:0;
            text-align:left;
        }
        h3{
            color:#225685 !important;
            display:block;
            font-family:Helvetica;
            font-size:15px;
            font-style:normal;
            font-weight:normal;
            line-height:125%;
            letter-spacing:-.5px;
            margin:0;
            text-align:left;
        }
        h4{
            color:#808080 !important;
            display:block;
            font-family:Helvetica;
            font-size:16px;
            font-style:normal;
            font-weight:bold;
            line-height:125%;
            letter-spacing:normal;
            margin:0;
            text-align:left;
        }
        #templatePreheader{
            background-color:#FFFFFF;
            border-top:0;
            border-bottom:0;
        }
        .preheaderContainer .mcnTextContent,.preheaderContainer .mcnTextContent p{
            color:#000000;
            font-family:Helvetica;
            font-size:11px;
            line-height:125%;
            text-align:left;
        }
        .preheaderContainer .mcnTextContent a{
            color:#009fe3;
            font-weight:normal;
            text-decoration:underline;
        }
        #templateHeader{
            background-color:#FFFFFF;
            border-top:0;
            border-bottom:0;
        }
        .headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
            color:#000;
            font-family:Helvetica;
            font-size:15px;
            line-height:150%;
            text-align:left;
        }
        .headerContainer .mcnTextContent a{
            color:#009fe3;
            font-weight:normal;
            text-decoration:underline;
        }
        #templateSidebar{
            background-color:#FFFFFF;
        }
        #templateSidebarInner{
            border-right:0;
        }
        .sidebarContainer .mcnTextContent,.sidebarContainer .mcnTextContent p{
            color:#333;
            font-family:Helvetica;
            font-size:13px;
            line-height:125%;
            text-align:left;
        }
        .sidebarContainer .mcnTextContent a{
            color:#009fe3;
            font-weight:normal;
            text-decoration:underline;
        }
        #templateBody{
            background-color:#FFFFFF;
            border-top:0;
            border-bottom:0;
        }
        #templateSidebar{
            border-right:0;
        }
        .bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
            color:#333;
            font-family:Helvetica;
            font-size:13px;
            line-height:150%;
            text-align:left;
        }
        .bodyContainer .mcnTextContent,.bodyContainer .mcnTextContentFooter p{
            color:#333;
            font-family:Helvetica;
            font-size:11px;
            line-height:125%;
            text-align:left;
        }
        .bodyContainer .mcnTextContent a{
            color:#009fe3;
            font-weight:normal;
            text-decoration:underline;
        }
        .bodyContainer .mcnTextContentFooter a{
            color:#808080;
            font-weight:normal;
            text-decoration:underline;
        }
        #templateFooter{
            background-color:#FFFFFF;
            border-top:0;
            border-bottom:0;
        }
        .footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
            color:#333;
            font-family:Helvetica;
            font-size:11px;
            line-height:125%;
            text-align:left;
        }
        .footerContainer .mcnTextContent a{
            color:#606060;
            font-weight:normal;
            text-decoration:underline;
        }
        @media only screen and (max-width: 480px){
            body,table,td,p,a,li,blockquote{
                -webkit-text-size-adjust:none !important;
            }
        }	@media only screen and (max-width: 480px){
            body{
                width:100% !important;
                min-width:100% !important;
            }
        }	@media only screen and (max-width: 480px){
            td[id=bodyCell]{
                padding:10px !important;
            }
        }	@media only screen and (max-width: 480px){
            table[class=mcnTextContentContainer]{
                width:100% !important;
            }
        }	@media only screen and (max-width: 480px){
            table[class=mcnBoxedTextContentContainer]{
                width:100% !important;
            }
        }	@media only screen and (max-width: 480px){
            table[class=mcpreview-image-uploader]{
                width:100% !important;
                display:none !important;
            }
        }	@media only screen and (max-width: 480px){
            img[class=mcnImage]{
                width:100% !important;
            }
        }	@media only screen and (max-width: 480px){
            table[class=mcnImageGroupContentContainer]{
                width:100% !important;
            }
        }	@media only screen and (max-width: 480px){
            td[class=mcnImageGroupContent]{
                padding:9px !important;
            }
        }	@media only screen and (max-width: 480px){
            td[class=mcnImageGroupBlockInner]{
                padding-bottom:0 !important;
                padding-top:0 !important;
            }
        }	@media only screen and (max-width: 480px){
            tbody[class=mcnImageGroupBlockOuter]{
                padding-bottom:9px !important;
                padding-top:9px !important;
            }
        }	@media only screen and (max-width: 480px){
            table[class=mcnCaptionTopContent],table[class=mcnCaptionBottomContent]{
                width:100% !important;
            }
        }	@media only screen and (max-width: 480px){
            table[class=mcnCaptionLeftTextContentContainer],table[class=mcnCaptionRightTextContentContainer],table[class=mcnCaptionLeftImageContentContainer],table[class=mcnCaptionRightImageContentContainer],table[class=mcnImageCardLeftTextContentContainer],table[class=mcnImageCardRightTextContentContainer]{
                width:100% !important;
            }
        }	@media only screen and (max-width: 480px){
            td[class=mcnImageCardLeftImageContent],td[class=mcnImageCardRightImageContent]{
                padding-right:18px !important;
                padding-left:18px !important;
                padding-bottom:0 !important;
            }
        }	@media only screen and (max-width: 480px){
            td[class=mcnImageCardBottomImageContent]{
                padding-bottom:9px !important;
            }
        }	@media only screen and (max-width: 480px){
            td[class=mcnImageCardTopImageContent]{
                padding-top:18px !important;
            }
        }	@media only screen and (max-width: 480px){
            table[class=mcnCaptionLeftContentOuter] td[class=mcnTextContent],table[class=mcnCaptionRightContentOuter] td[class=mcnTextContent]{
                padding-top:9px !important;
            }
        }	@media only screen and (max-width: 480px){
            td[class=mcnCaptionBlockInner] table[class=mcnCaptionTopContent]:last-child td[class=mcnTextContent]{
                padding-top:18px !important;
            }
        }	@media only screen and (max-width: 480px){
            td[class=mcnBoxedTextContentColumn]{
                padding-left:18px !important;
                padding-right:18px !important;
            }
        }	@media only screen and (max-width: 480px){
            td[class=sectionContainer]{
                display:block !important;
                max-width:600px !important;
                width:100% !important;
            }
        }	@media only screen and (max-width: 480px){
            td[class=mcnTextContent]{
                padding-right:18px !important;
                padding-left:18px !important;
            }
        }	@media only screen and (max-width: 480px){
            table[id=templateContainer],table[id=templatePreheader],table[id=templateHeader],table[id=templateBody],table[id=templateBodyInner],table[id=templateSidebar],table[id=templateSidebarInner],table[id=templateFooter]{
                width:100% !important;
            }
        }	@media only screen and (max-width: 480px){
            h1{
                font-size:20px !important;
                line-height:125% !important;
            }
        }	@media only screen and (max-width: 480px){
            h2{
                font-size:20px !important;
                line-height:125% !important;
            }
        }	@media only screen and (max-width: 480px){
            h3{
                font-size:15px !important;
                line-height:125% !important;
            }
        }	@media only screen and (max-width: 480px){
            h4{
                font-size:16px !important;
                line-height:125% !important;
            }
        }	@media only screen and (max-width: 480px){
            table[class=mcnBoxedTextContentContainer] td[class=mcnTextContent],td[class=mcnBoxedTextContentContainer] td[class=mcnTextContent] p{
                font-size:18px !important;
                line-height:125% !important;
            }
        }	@media only screen and (max-width: 480px){
            table[id=templatePreheader]{
                display:block !important;
            }
        }
        @media only screen and (max-width: 480px){
            table[id=templateSidebar]{
                display:none !important;
            }
        }	@media only screen and (max-width: 480px){
            td[class=preheaderContainer] td[class=mcnTextContent],td[class=preheaderContainer] td[class=mcnTextContent] p{
                font-size:14px !important;
                line-height:115% !important;
            }
        }	@media only screen and (max-width: 480px){
            td[class=headerContainer] td[class=mcnTextContent],td[class=headerContainer] td[class=mcnTextContent] p{
                font-size:18px !important;
                line-height:125% !important;
            }
        }	@media only screen and (max-width: 480px){
            td[class=sidebarContainer] td[class=mcnTextContent],td[class=sidebarContainer] td[class=mcnTextContent] p{
                font-size:18px !important;
                line-height:125% !important;
            }
        }	@media only screen and (max-width: 480px){
            table[id=templateSidebar]{
                border-left:0 !important;
                border-right:0 !important;
            }
        }	@media only screen and (max-width: 480px){
            table[id=templateSidebarInner]{
                border-left:0 !important;
                border-right:0 !important;
            }
        }	@media only screen and (max-width: 480px){
            td[class=bodyContainer] td[class=mcnTextContent],td[class=bodyContainer] td[class=mcnTextContent] p{
                font-size:13px !important;
                line-height:125% !important;
            }
            td[class=bodyContainer] td[class=mcnTextContent],td[class=bodyContainer] td[class=mcnTextContentFooter] p{
                font-size:11px !important;
                line-height:125% !important;
            }
        }	@media only screen and (max-width: 480px){
            td[class=footerContainer] td[class=mcnTextContent],td[class=footerContainer] td[class=mcnTextContent] p{
                font-size:14px !important;
                line-height:115% !important;
            }
        }	@media only screen and (max-width: 480px){
            td[class=footerContainer] a[class=utilityLink]{
                display:block !important;
            }
        }</style></head>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
<center>
    <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
        <tr>
            <td align="center" valign="top" id="bodyCell">
                <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateContainer">
                    <tr>
                        <td align="center" valign="top">
                            <table border="0" cellpadding="0" cellspacing="0" width="600" id="templatePreheader">
                                <tr>
                                    <td valign="top" class="preheaderContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock">
                                            <tbody class="mcnImageBlockOuter">
                                            <tr>
                                                <td valign="top" style="padding:0px" class="mcnImageBlockInner">
                                                <td valign="top" style="padding:0px" class="mcnImageBlockInner">
                                                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer">
                                                        <tbody><tr>
                                                            <td class="mcnImageContent" valign="top" style="padding-right: 0px; padding-left: 0px; padding-top: 0; padding-bottom: 0; text-align:center;">
                                                                <img align="center" alt="" src="http://' . $_SERVER['HTTP_HOST']. dirname($_SERVER['PHP_SELF']) . '/e-mail-header.png" width="600" style="max-width:800px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage mainimage">
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" valign="top">
                            <!-- BEGIN BODY // -->
                            <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateBody">
                                    <td align="center" valign="top" width="481" class="sectionContainer">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateBodyInner">
                                            <tr>
                                                <td valign="top" class="bodyContainer">
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock">
                                                        <tbody class="mcnTextBlockOuter">
                                                        <tr>
                                                            <td valign="top" class="mcnTextBlockInner">

                                                                <table style="padding: 30px" align="left" border="0" cellpadding="0" cellspacing="0" width="488" class="mcnTextContentContainer">
                                                                    <tbody><tr>

                                                                        <td valign="top" class="mcnTextContent" style="padding-top:18px; padding-right: 18px; padding-bottom: 9px; padding-left: 18px;">
                                                                            <p style="font-size:24px;font-weight:600;">Kontaktanfrage</p>
                                                                            
                                                                            <p>Sie haben eine neue Nachricht ??ber das Kontaktformular erhalten.
                                                                            </p>';
?>