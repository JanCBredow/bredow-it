<html lang="de">

<head>
    <style>
        #label {
            width: 18cm;
            height: 4cm;
        }

        #label h2 {
            text-decoration: underline;
        }

        table {
            text-align: left;
        }
    </style>
</head>
<body>

<div id="label">
    <h2>PCR-Schnelltest</h2>

    <table>
        <tr>
            <th>Vorname</th>
            <td>{{ $firstName }}</td>
            <th>Nachname</th>
            <td>{{ $lastName }}</td>
            <th>Sample</th>
            <td>{{ $sampleId }}</td>
        </tr>
        <tr>
        </tr>
        <tr>
            <th>Geburt</th>
            <td>{{ $birthday }}</td>
            <th>Datum</th>
            <td>{{ \Carbon\Carbon::now() }}</td>
        </tr>
    </table>
</div>

</body>
</html>
