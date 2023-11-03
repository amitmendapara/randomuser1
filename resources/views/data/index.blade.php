<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body align="center">
    {{-- form through get data --}}
    <form action={{ route('get.data') }} method="post" >
        @CSRF
        <label for="fname">how many data get</label><br>
        <input type="text" id="result" name="result" placeholder="Enter Number" required><br><br>

        <label for="nation">Nationalities</label><br>
        <select name="nation" id="" required>
            <option selected disabled>--- Select Nationalities ---</option>
            <option value="AU">AU</option>
            <option value="BR">BR</option>
            <option value="CA">CA</option>
            <option value="CH">CH</option>
            <option value="DE">DE</option>
            <option value="DK">DK</option>
            <option value="ES">ES</option>
            <option value="FI">FI</option>
            <option value="FR">FR</option>
            <option value="GB">GB</option>
            <option value="IE">IE</option>
            <option value="IR">IR</option>
            <option value="NL">NL</option>
            <option value="NZ">NZ</option>
            <option value="TR">TR</option>
            <option value="US">US</option>
        </select>
        <br><br>
        <label for="seeds">Uniq identyfy</label><br>
        <input type="text" id="seeds" name="seeds" placeholder="Uniq Identyfy" required><br>

        <br>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>
