@extends('admin.layouts.app')
@section('title','Contact Page')

@section('content')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
 <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Contact Information Submit</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item">option 1</a>
                                        <a class="dropdown-item">option 2</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form action="{{ route('admin.contacts.store') }}" method="post">
                                	@csrf
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Mobile</label>
                                            <input name="mobile" class="form-control" type="text" placeholder="Mobile">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Email</label>
                                            <input name="email" class="form-control" type="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input name="address" class="form-control" type="text" placeholder="Address">
                                    </div>
                                   
                                    <div class="form-group">
                                        <button class="btn btn-default" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-hover">
            	<thead>
            		<tr>
            			<th>Sl</th>
            			<th>MOBILE</th>
            			<th>EMAIL</th>
            			<th>ADDRESS</th>
            			<th>ACTION</th>
            		</tr>
            	</thead>
            	@foreach($contacts as $key=>$contact)
            	<tbody>
            		<tr>
            			<td>{{ $key +1 }}</td>
            			<td>{{ $contact->mobile }}</td>
            			<td>{{ $contact->email }}</td>
            			<td>{{ $contact->address }}</td>
            			<td><a href="#">Edit</a>
            				<a href="{{ route('admin.contacts.delete',$contact->id) }}">Delete</a></td>
            		</tr>
            	</tbody>
            	@endforeach
            </table>

<div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Contact Information Submit</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item">option 1</a>
                                        <a class="dropdown-item">option 2</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form action="{{ route('admin.contacts.update',$contact->id) }}" method="post">
                                	@csrf
                                	@method('PUT')
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Mobile</label>
                                            <input name="mobile" class="form-control" type="text" value="{{ $contact->mobile }}">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Email</label>
                                            <input name="email" class="form-control" type="email" value="{{ $contact->email }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input name="address" class="form-control" type="text" value="{{ $contact->address }}">
                                    </div>
                                   
                                    <div class="form-group">
                                        <button class="btn btn-default" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection