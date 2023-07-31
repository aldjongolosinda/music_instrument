<!DOCTYPE html>
<html>

<head>

    <title>Music Instrument</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;

            font-size: 10pt;
        }

        h1 {
            font-size: 22pt;
        }

        table {
            border-collapse: collapse;
        }

        table th,
        table td {
            border: 1px solid #777;
            padding: 2px;
        }
    </style>
</head>
<body>
    <p style="padding: 10px; border-radius: 10px; text-align: center; margin-bottom: 18pt; font-size: 20px;">

        <b>Music Instruments<br>


    </p> <br> <hr> <br>

    <h1 style="">Owner Details</h1>
    <h1 style="font-size: 20px;">Owner: {{$client->owner}}</h1>
    <h1 style="font-size: 20px;">Instrument: {{$client->instrument}}</h1>
    <h1 style="font-size: 20px;">Phone: {{$client->phone}}</h1>
    <h1 style="font-size: 20px;">Email: {{$client->email}}</h1>

</body>
</html>
