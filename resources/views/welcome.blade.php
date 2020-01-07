<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>

</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            <a href="/?new_ward=1">
                <button type="button" class="btn btn-secondary">ดำเนินการสุ่มรางวัล</button>
            </a>

            <form action="/">
                <input type="text" name="number" lang="5"  value="{{ $number }}">
                <button type="submit" class="btn btn btn-success">ตรวจรางวัล</button>
            </form>
        </div>

        <div>
            @if (isset($award[0]))

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">รางวัล</th>
                        <th scope="col">ตัวเลข</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($award as $key => $row)
                        <tr>
                            <th scope="col">{{$key}}</th>
                            <th scope="row">{{$row['details']}}</th>
                            <td>{{$row['number']}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>

            @endif
        </div>

        <div>
            @if (isset($checkData[0]))
                คูณถูกรางวัล
                @foreach ($checkData as $key => $row)
                    {{$row['details']}}
                @endforeach
            @else
                คูณไม่ถูกราลวังอะไรเลย
            @endif

        </div>
    </div>
</div>
</body>
</html>
