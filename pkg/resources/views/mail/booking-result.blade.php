<!doctype html>
<html lang="{{ App::currentLocale() }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Buchungsbestätigung</title>
    <style>

        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }

        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        table {
            border-collapse: separate;
            mso-table-lspace: 0;
            mso-table-rspace: 0;
            width: 100%;
        }

        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }

        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */

        .body {
            background-color: #f6f6f6;
            width: 100%;
        }

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }

        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }

        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }

        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }

        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }

        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }

        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 30px;
        }

        h1 {
            font-size: 35px;
            font-weight: 300;
            text-align: center;
            text-transform: capitalize;
        }

        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }

        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }

        a {
            color: #3498db;
            text-decoration: underline;
        }

        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }

        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }

        .btn table {
            width: auto;
        }

        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }

        .btn a {
            background-color: #ffffff;
            border: solid 1px #3498db;
            border-radius: 5px;
            box-sizing: border-box;
            color: #3498db;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
            text-transform: capitalize;
        }

        .btn-primary table td {
            background-color: #3498db;
        }

        .btn-primary a {
            background-color: #3498db;
            border-color: #3498db;
            color: #ffffff;
        }

        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }

        .first {
            margin-top: 0;
        }

        .align-center {
            text-align: center;
        }

        .align-right {
            text-align: right;
        }

        .align-left {
            text-align: left;
        }

        .clear {
            clear: both;
        }

        .mt0 {
            margin-top: 0;
        }

        .mb0 {
            margin-bottom: 0;
        }

        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }

        .powered-by a {
            text-decoration: none;
        }

        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }

        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }

            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }

            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }

            table.body .content {
                padding: 0 !important;
            }

            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }

            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }

            table.body .btn table {
                width: 100% !important;
            }

            table.body .btn a {
                width: 100% !important;
            }

            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }

        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }

            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }

            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }

            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }

            .btn-primary table td:hover {
                background-color: #34495e !important;
            }

            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }

    </style>
</head>
<body>
<span class="preheader">Ihr Testergebnis ist angekommen.</span>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
    <tr>
        <td>&nbsp;</td>
        <td class="container">
            <div class="content">

                <!-- START CENTERED WHITE CONTAINER -->
                <table role="presentation" class="main">

                    <div  class="center; text-center">
                        <p>Hallo {{ $covidTest->patient->name }} {{ $covidTest->patient->surename }},</p>

                        <p>das Ergebnis Ihrer Testung liegt vor. Sie können das Testzertifikat jetzt herunterladen. </p>

                        <div class="btn btn-primary" style="margin-bottom: 10px;">
                            <a href="{{ asset("storage/$testCertificate->path") }}">Testzertifikat herunterladen</a>
                        </div>

                        <p>Testdatum/Uhrzeit:: {{ $covidTest->appointment->date->format('d.m.Y') }}</p>
                        <p>Standort: {{ $covidTest->appointment->testCenter->location->name }}</p>
                        <p>Service: {{ $covidTest->service->name }}</p>

                        @if($covidTest->cwaQrCode)
                            <p>Qr Code für Corona Warn App:</p>
                            {!! $covidTest->cwaQrCode !!}
                        @endif

                        <p>Sie haben die Information erhalten, dass Sie auf eine Infektion mit SARS-CoV2 getestet wurden.</p>

                        <p>Hieraus ergeben sich für Sie unmittelbare Konsequenzen und Pflichten.</p>

                        <p>Ihre Pflichten:</p>
                        <p>Folgendes gilt sowohl für einen positiven PCR-, als auch einen positiven AntigenTest zur professionellen Anwendung.</p>
                        <p>  - Begeben Sie sich ohne gesonderte Anordnung durch das Gesundheitsamt sofort und ohne Umwege nach Hause oder in eine andere geeignete Unterkunft.</p>
                        <p>  - Dort müssen Sie sich für 14 Tage absondern, das heißt ständig dort aufhalten, Kontakt zu anderen Personen, auch im Haushalt, möglichst vermeiden und keinen Besuch empfangen. Die Frist von 14 Tagen beginnt mit dem Zeitpunkt der Vornahme des Abstrichs.</p>
                        <p>  - Sie müssen umgehend das für Sie zuständige Gesundheitsamt informieren. Kontaktdaten ihres jeweiligen Gesundheitsamt finden Sie hier: http://tools.rki.de</p>
                        <p>  - Am besten informieren Sie ebenfalls Ihre Kontaktpersonen und Ihren Arbeitgeber über den Erhalt eines positiven Testergebnisses.</p>
                        <p>  - Sollten Sie innerhalb von 14 Tagen nach Erhalt des Testergebnisses typische Symptome einer SARS-CoV-2 Infektion bemerken (Fieber, trockener Husten, Verlust des Geruchs-und Geschmackssinns, etc.), melden Sie sich umgehend bei dem für Sie zuständigen Gesundheitsamt und kontaktieren telefonisch Ihren Arzt.</p>
                        <p>  - Auch alle anderen Personen, die in Ihrem Haushalt leben, müssen sich gleichermaßen absondern.</p>
                        <p>  - Diese Haushaltsquarantäne gilt nicht für Personen, die in den letzten drei Monaten bereits selbst positiv auf SARS-CoV-2 getestet wurden.</p>

                        <p>Weitere Informationen finden Sie hier: https://soziales.hessen.de/gesundheit/coronahessen/selbst-und-haushaltsquarantaene</p>


                        <p>Ihre Rechte:</p>
                        <p>  - Wenn Sie Arbeitnehmer oder Selbständiger sind, erhalten Sie eine Verdienstausfallentschädigung. Bei Arbeitnehmern wird diese durch den Arbeitgeber in Höhe Ihres Netto-Verdienstes ausgezahlt. Ihr Arbeitgeber erhält seine Aufwendungen nach § 56 IfSG ersetzt. Selbständige erhalten eine Direktzahlung. Entsprechende Anträge sind auf ifsg-online.de zu stellen.</p>
                        <p>  - Sie können sich nach einem positiven Antigen-Test noch einmal durch PCRTest auf eine Infektion testen lassen.</p>
                        <p>  - Fällt der nach einem Antigen-Test durchgeführte PCR-Test negativ aus, so sind Sie mit Erhalt des Testergebnisses automatisch aus der Quarantäne entlassen.</p>

                        <p>Pflichtinformationen gemäß Artikel 13 DSGVO</p>

                        <p>Im Falle des Erstkontakts sind wir gemäß Art. 12, 13 DSGVO verpflichtet, Ihnen folgende datenschutzrechtliche Pflichtinformationen zur Verfügung zu stellen: Wenn Sie uns per E-Mail kontaktieren, verarbeiten wir Ihre personenbezogenen Daten nur, soweit an der Verarbeitung ein berechtigtes Interesse besteht (Art. 6 Abs. 1 lit. f DSGVO), Sie in die Datenverarbeitung eingewilligt haben (Art. 6 Abs. 1 lit. a DSGVO), die Verarbeitung für die Anbahnung, Begründung, inhaltliche Ausgestaltung oder Änderung eines Rechtsverhältnisses zwischen Ihnen und uns erforderlich sind (Art. 6 Abs. 1 lit. b DSGVO) oder eine sonstige Rechtsnorm die Verarbeitung gestattet. Ihre personenbezogenen Daten verbleiben bei uns, bis Sie uns zur Löschung auffordern, Ihre Einwilligung zur Speicherung widerrufen oder der Zweck für die Datenspeicherung entfällt (z. B. nach abgeschlossener Bearbeitung Ihres Anliegens). Zwingende gesetzliche Bestimmungen – insbesondere steuer- und handelsrechtliche Aufbewahrungsfristen – bleiben unberührt. Sie haben jederzeit das Recht, unentgeltlich Auskunft über Herkunft, Empfänger und Zweck Ihrer gespeicherten personenbezogenen Daten zu erhalten. Ihnen steht außerdem ein Recht auf Widerspruch, auf Datenübertragbarkeit und ein Beschwerderecht bei der zuständigen Aufsichtsbehörde zu. Ferner können Sie die Berichtigung, die Löschung und unter bestimmten Umständen die Einschränkung der Verarbeitung Ihrer
                            personenbezogenen Daten verlangen. Details entnehmen Sie unserer Datenschutzerklärung. </p>

                        <p>Mit freundlichen Grüßen</p>

                    </div>

                    <!-- END MAIN CONTENT AREA -->
                </table>
                <!-- END CENTERED WHITE CONTAINER -->


            </div>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>
