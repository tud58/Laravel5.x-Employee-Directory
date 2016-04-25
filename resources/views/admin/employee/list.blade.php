@extends('admin.master')
@section('controller', 'Employee')
@section('action', 'List')
@section('content')
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Department</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        <tr class="odd gradeX" align="center">
            <td>1</td>
            <td>Nguyên Văn A</td>
            <td>a@gmail.com</td>
            <td>099999999</td>
            <td>BTC</td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
        </tr>
        <tr class="even gradeC" align="center">
            <td>2</td>
            <td>Nguyễn Thị B</td>
            <td>b@gmail.com</td>
            <td>09090909</td>
            <td>BBB</td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
        </tr>
    </tbody>
</table>
@endsection