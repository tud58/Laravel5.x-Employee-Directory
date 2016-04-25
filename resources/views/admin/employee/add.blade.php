@extends('admin.master')
@section('controller', 'Employee')
@section('action', 'Add')
@section('content')
<div class="col-lg-7" style="padding-bottom:120px">
    @include('admin.blocks.error')
    <form action="{!! url('admin/employee/add') !!}" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{!! csrf_token() !!}"></input>
        <div class="form-group">
            <label>Department Name</label>
            <select class="form-control" name="txtDepartmentName">
                <option value="">Please Choose Department</option>
                @foreach($department as $item)
                <option value="">{!! $item["name"] !!}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Employee Name</label>
            <input class="form-control" name="txtEmployeeName" placeholder="Please Enter Employee Name" value="{!! old('txtEmployeeName') !!}" />
        </div>
        <div class="form-group">
            <label>Employee Email</label>
            <input class="form-control" name="txtEmployeeEmail" placeholder="Please Enter Employee Email" value="{!! old('txtEmployeeEmail') !!}" />
        </div>
        <div class="form-group">
            <label>Employee Phone</label>
            <input class="form-control" name="txtEmployeePhone" placeholder="Please Enter Employee Phone" value="{!! old('txtEmployeePhone') !!}" />
        </div>
        <div class="form-group">
            <label>Images</label>
            <input type="file" name="fImages">
        </div>
        <button type="submit" class="btn btn-default">Employee Add</button>
        <button type="reset" class="btn btn-default">Reset</button>
    <form>
</div>
@endsection
