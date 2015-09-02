@extends('pages.layoutAdmin')

@section('content')

    <h1 class="page-heading">Surveys</h1>

    <hr>

    <table class="table table-striped table-bordered">
        <head>
            <th>Name</th>
            <th>email</th>
            <th>website</th>
            <th>message</th>
            <th>survey sent</th>
        </head>

        <body>
        @foreach ($surveys as $survey)
            <tr>
                <td>{{ $survey->name }}</td>
                <td>{{ $survey->email }}</td>
                <td>{{ $survey->website }}</td>
                <td>{{ $survey->message }}</td>
                <td>{{ $survey->created_at->diffForHumans() }}</td>
            </tr>
        @endforeach
        </body>
    </table>

    @unless(count($surveys))
        <p class="text-center">No surveys have been added as yet</p>
    @endunless

@stop