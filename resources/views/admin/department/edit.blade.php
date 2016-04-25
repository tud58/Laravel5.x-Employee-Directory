@extends('admin.master')
@section('controller', 'Department')
@section('action', 'Edit')
@section('content')
<div class="col-lg-7" style="padding-bottom:120px">
    @include('admin.blocks.error')
    <form action="" method="POST">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}"></input>
        <div class="form-group">
            <label>Department Name</label>
            <input class="form-control" name="txtDepartmentName" placeholder="Please Enter Department Name" value="{!! old('txtDepartmentName', isset($data) ? $data['name'] : null) !!}" />
        </div>
        <div class="form-group">
            <label>Department Phone</label>
            <input class="form-control" name="txtDepartmentPhone" placeholder="Please Enter Department Phone" value="{!! old('txtDepartmentPhone', isset($data) ? $data['phone'] : null) !!}" />
        </div>
        
        <button type="submit" class="btn btn-default">Department Edit</button>
        <button type="reset" class="btn btn-default">Reset</button>
    <form>
</div>
@endsection