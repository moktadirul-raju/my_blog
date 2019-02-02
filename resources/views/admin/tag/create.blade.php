@extends('admin.layouts.app')
@section('title','Create Tag')

@push('css')
	
@endpush

@section('content')
            <!-- START PAGE CONTENT-->
           <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Create a new Tag Here</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item">option 1</a>
                                        <a class="dropdown-item">option 2</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-body" style="height: 200px;">
                                <form action="{{ route('admin.tag.store') }}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>Tag Name</label>
                                        <input name= "name" class="form-control" type="text" placeholder="Type Tag Name">
                                    </div>
                                    
                                    <div class="form-group">
                                        <button class="pull-left btn btn-default" type="submit">Submit</button>
                                        <a href="{{ route('admin.tag.index') }}" class="pull-right btn btn-danger" type="submit">Back</a>
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