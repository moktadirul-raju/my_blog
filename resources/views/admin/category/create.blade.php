@extends('admin.layouts.app')
@section('title','Create Post')

@push('css')
	
@endpush

@section('content')
            <!-- START PAGE CONTENT-->
           <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Create a new category Here</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item">option 1</a>
                                        <a class="dropdown-item">option 2</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-body" style="height: 250px;">
                                <form action="{{ route('admin.category.store') }}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>Category Name</label>
                                        <input name= "name" class="form-control" type="text" placeholder="Type Category Name">
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input name="image" class="form-control" type="file">
                                    </div>
                                    
                                    <div class="form-group">
                                        <button class="pull-left btn btn-default" type="submit">Submit</button>
                                        <a href="{{ route('admin.category.index') }}" class="pull-right btn btn-danger" type="submit">Back</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
   
   
@endsection

@push('js')
	
@endpush