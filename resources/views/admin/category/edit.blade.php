@extends('admin.layouts.app')
@section('title','Category Update')

@push('css')
	
@endpush

@section('content')
            <!-- START PAGE CONTENT-->
           <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Edit Your Category Name Here</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="{{ route('admin.category.index') }}" class="dropdown-item">Back</a>
                                        <a href="{{ route('admin.category.create') }}" class="dropdown-item">Create New Here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-body" style="height: 500px;">
                                <form action="{{ route('admin.category.update',$category->id) }}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                                    @method('PUT')

                                    <div class="form-group">
                                        <label>Category Name</label>
                                        <input name= "name" class="form-control" type="text" value={{ $category->name }}
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <img src="{{ asset('images/category/'.$category->image) }}" style="height: 300px; width: 800px; margin-top: 5px;">
                                        <input name="image" class="form-control" type="file">
                                    </div>
                                    
                                    <div class="form-group">
                                        <button class="pull-left btn btn-primary" type="submit">Submit</button>
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