@extends('layouts.main-layout')

@section('content')
    <main>
        <h1>Employees Tasks</h1>

        <ul>
            @foreach ($employees as $employee)
                <li>
                    <span class="emp-name">
                        {{ $employee -> firstname}}
                        {{ $employee -> lastname}}
                    </span>
                    <ul>
                        @foreach ($employee -> tasks as $task)
                            <li>
                                - {{ $task -> title }}:
                                <i>{{ $task -> description }}</i>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </main>
@endsection