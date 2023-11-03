<h1>user data</h1>
{{-- @php
echo "<pre>";
print_r($response);
@endphp --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <a href="/">
        <button>Re-generate</button>
    </a>
    {{-- show data  --}}
    <table class="table table-bordered data-table" id="example" border="">
        <thead>
            <tr>
                <th>Gender</th>
                <th>Full name</th>
                <th>Address</th>
                <th>Location</th>
                <th>Time</th>
                <th>Description</th>
                <th>Email</th>
                <th>Birth Of Date</th>
                <th>Age</th>
                <th>Registration Date</th>
                <th>Phone</th>
                <th>Call</th>
                <th>profile_pictures</th>
            </tr>
        </thead>
        <tbody>
            @foreach($response as $dt)
            <tr>

                        <td>{{$dt['gender']}}</td>
                        <td>{{$dt['name']['title']}} {{$dt['name']['first']}} {{$dt['name']['last']}}</td>
                        <td>{{$dt['address']['street']['number']}}, {{$dt['address']['street']['name']}}, {{$dt['address']['city']}}, {{$dt['address']['state']}}, {{$dt['address']['country']}},</td>
                        <td>{{$dt['address']['coordinates']['latitude']}}{{$dt['address']['coordinates']['longitude']}}</td>
                        <td>{{$dt['address']['timezone']['offset']}}</td>
                        <td>{{$dt['address']['timezone']['description']}}</td>
                        <td>{{$dt['email_id']}}</td>
                        <td>{{$dt['dob']}}</td>
                        <td>{{$dt['age']}}</td>
                        <td>{{$dt['registration_date']}}</td>
                        <td>{{$dt['phone']}}</td>
                        <td>{{$dt['cell']}}</td>
                        <td>
                            {{$dt['profile_pictures']['large']}}
                            {{$dt['profile_pictures']['medium']}}
                            {{$dt['profile_pictures']['thumbnail']}}
                        </td>
                    </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>