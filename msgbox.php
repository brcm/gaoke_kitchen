<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <link href="asset/style.css" rel="stylesheet" type="text/css"/>
    <link href="asset/cascade.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div id="bodydiv" style="overflow-x:auto;">
        <table id="maincontainer" cellspacing="13">
            <tr id="maintr">
                <td style=" WORD-BREAK:BREAK-ALL;" valign="top">
                    <div class="maincontent">
                        <fieldset class="xtabstyle">
                            <ul class="cbi-xtabmenu">
                                <li class="cbi-xtab"><a href="#"><span><?php echo $msgbox['title']; ?></span></a></li>
                            </ul>
                        </fieldset>
                        <fieldset class="cbi-section" style="padding:50px 20px;">
                            <?php echo $msgbox['content']; ?>
                        </fieldset>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>