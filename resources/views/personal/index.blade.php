<!DOCTYPE html>
<html>
    <head>
        <title>Index</title>

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
                <button><a href="home">Back</a></button>
                <div class="title">Basic CRUD</div>
                <br><br>
                <button><a href="example/create">Add</a></button>
                <br><br>
                <div>
                    @if(session('success'))
                         <span class="alert alert-success" role="alert">
                             <strong style='color:green'>{{ session('success') }}</strong>
                         </span>
                    @endif
                    <table align='center'>
                        <thead>
                            <tr>
                                <th style="width: 10%;">#</th>
                                <th style="width: 60%;">NAME</th>
                                <th style="width: 30%;" colspan=2>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($products) > 0)
                                @foreach ($products as $key => $product)
                                    <tr>
                                        <th style="width: 10%;">{{ $key+1 }}</th>
                                        <th style="width: 60%;">{{ $product->name }}</th>
                                        <th style="width: 40%;">
                                            <button><a href="example/edit/{{ $product->id }}">Edit</a></button>
                                        </th>
                                        <th style="width: 40%;">
                                            <form action="{{ route('example-delete', [$product->id]) }}" method="POST">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input class="button" type="submit" name="submitdelete" value="Delete">
                                            </form>
                                        </th>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan=3 align='center'>No Record found</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
