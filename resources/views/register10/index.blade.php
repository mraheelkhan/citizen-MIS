@extends('layouts.mainlayout')
@section('content')

<div class="box">
    <div class="box-header">
        <div class="">
            <a href="{{route('register10.create')}}" class="btn btn-primary">Add new record</a>
        </div>
    </div>
    <!-- Replace with your content -->
    <div class="box-body">
        <div class="">
        <table class="table w-full">
            <thead>
                <tr>
                    <td>Full Name</td>
                    <td>Nick Name</td>
                    <td>Father Name</td>
                    <td>Area Name</td>
                    <td>Record Number</td>
                    <td>Date</td>
                    <td>Penality</td>
                    <td>Station</td>
                    <td>Entry Date</td>
                    <td>APO</td>
                    <td>Status</td>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $record)
                <tr>
                    <td>{{ $record->full_name }}</td>
                    <td>{{ $record->nick_name }}</td>
                    <td>{{ $record->father_name }}</td>
                    <td>{{ $record->area_name }}</td>
                    <td>{{ $record->record_number }}</td>
                    <td>{{ $record->date }}</td>
                    <td>{{ $record->penalty }}</td>
                    <td>{{ $record->station}}</td>
                    <td>{{ $record->entry_date }}</td>
                    <td>{{ $record->apo }}</td>
                    <td>{{ $record->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
    <!-- /End replace -->
    </div>
@endsection