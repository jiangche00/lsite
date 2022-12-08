@extends('students.layout')
 
@section('content')
    <div class="header2">
        <div class="">
            <div class="pull-left">
                <h2>Data From RDBMS</h2>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>UserName</th>
            <th>Class</th>
            <th>Department</th>
            <th>Telephone</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->userName }}</td>
            <td>{{ $student->class }}</td>
            <td>{{ $student->department }}</td>
            <td>{{ $student->telephone }}</td>
        </tr>
        @endforeach
    </table>
      
    <div class="header2">
        <div class="">
            <div class="pull-left">
                <h2>Data From NoSQL</h2>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>Key</th>
	    <th>Value</th>
        </tr>
	@foreach ($records as $record)
        <tr>
            <td>{{ $record['key'] }}</td>
            <td>{{ $record['value'] }}</td>
        </tr>
        @endforeach
    </table>
@endsection
