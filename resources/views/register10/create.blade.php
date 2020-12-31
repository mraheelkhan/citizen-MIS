@extends('layouts.mainlayout')
@section('content')
<div class="box">
  <div class="box-header">
    <h2 class="box-title">Enter record details</h2>
    <a href="{{ route('register10.index') }}" class="btn btn-info">Record List</a>
  </div>
  <!-- Replace with your content -->
  <div class="box-body">
      <div class="row">

            <div class="col-md-6">
                <form action="{{route('register10.store')}}" method="POST">
                  @csrf
                  <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                      <div class="grid grid-cols-6 gap-6">
                        <div class="form-group">
                          <label for="first_name" class="block text-sm font-medium text-gray-700">full name</label>
                          <input required type="text" name="full_name" id="full_name" autocomplete="given-name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nick_name" class="block text-sm font-medium text-gray-700">Nick Name</label>
                            <input type="text" name="nick_name" id="nick_name" autocomplete="email" class="form-control">
                          </div>
                        <div class="form-group">
                          <label for="last_name" class="block text-sm font-medium text-gray-700">father name</label>
                          <input required type="text" name="father_name" id="father_name" autocomplete="family-name" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="last_name" class="block text-sm font-medium text-gray-700">area name</label>
                          <input type="text" name="area_name" id="area_name" autocomplete="family-name" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="last_name" class="block text-sm font-medium text-gray-700">Record Number</label>
                          <input type="number" name="record_number" id="record_number" autocomplete="family-name" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="last_name" class="block text-sm font-medium text-gray-700">date</label>
                          <input type="date" name="date" id="date" autocomplete="family-name" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="last_name" class="block text-sm font-medium text-gray-700">Penalty</label>
                          <input type="text" name="penalty" id="penalty" autocomplete="family-name" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="last_name" class="block text-sm font-medium text-gray-700">station</label>
                          <input required type="text" name="station" id="station" autocomplete="family-name" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="last_name" class="block text-sm font-medium text-gray-700">Entry Date</label>
                          <input type="date" name="entry_date" id="entry_date" autocomplete="family-name" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="last_name" class="block text-sm font-medium text-gray-700">APO</label>
                          <input type="text" name="apo" id="apo" autocomplete="family-name" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="last_name" class="block text-sm font-medium text-gray-700">Status</label>
                          <input type="text" name="status" id="status" autocomplete="family-name" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                      <button type="submit" class="btn btn-primary">
                        Save
                      </button>
                    </div>
                  </div>
                </form>
              </div>
      </div>
    </div>
  </div>
  @endsection