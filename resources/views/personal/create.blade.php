<!DOCTYPE html>
<html>
    <head>
        <title>Create</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <button><a href="{{ route('personal') }}">Back</a></button>
                <div class="title">Add New</div>
                <br><br><br><br>
                <form action="{{ route('personal-store') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div>
                        <table >
                            <thead>
                                <tr>
                                <th style="width: 20%;">NAME</th>
                                <th style="width: 20%;">email</th>
                                <th style="width: 20%;">phone</th>
                                <th style="width: 20%;">address</th>
                                <th style="width: 10%;" colspan=2>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th style="width: 20%;">
                                        <input type='text' id='name' name='name'></input>
                                    </th>
                                    <th style="width: 20%;">
                                        <input type='text' id='email' name='email'></input>
                                    </th>
                                    <th style="width: 20%;">
                                        <input type='text' id='phone_no' name='phone_no'></input>
                                    </th>
                                    <th style="width: 20%;">
                                        <input type='text' id='address' name='address'></input>
                                    </th>
                                    <th style="width: 10%;">
                                        <button type='submit'>Submit</button>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
