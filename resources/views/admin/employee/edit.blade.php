@extends('admin.master')
@section('controller', 'Employee')
@section('action', 'Edit')
@section('content')
<div class="col-lg-7" style="padding-bottom:120px">
    <form action="" method="POST">
        <div class="form-group">
            <label>Employee Name</label>
            <input class="form-control" name="txtEmployeeName" placeholder="Please Enter Employee Name" />
        </div>
        <div class="form-group">
            <label>Employee Email</label>
            <input class="form-control" name="txtEmployeeEmail" placeholder="Please Enter Employee Email" />
        </div>
        <div class="form-group">
            <label>Employee Phone</label>
            <input class="form-control" name="txtEmployeePhone" placeholder="Please Enter Employee Phone" />
        </div>
        <div class="form-group">
            <label>Images</label>
            <input type="file" name="fImages">
        </div>
        <button type="submit" class="btn btn-default">Product Edit</button>
        <button type="reset" class="btn btn-default">Reset</button>
    <form>
</div>
@endsection