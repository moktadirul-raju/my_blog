@extends('admin.layouts.app')
@section('title','Create Post')

@push('css')
	
@endpush

@section('content')
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Create New Post
                                    
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form action="{{ route('author.post.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                    <label class="form-label">Post Title</label>
                                        <input type="text" id="title" class="form-control" name="title">
                                    </div>
                                </div>
                                <div class="form-group">
                                     <div class="form-control-label {{ $errors->has('categories') ? 'focused error' : '' }}">
                                    <label class="form-control-label">Post Category</label>
                                    <select name="categories[]" id="category" class="form-control select2_demo_1">
                                        <optgroup label="category">
                                            @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                                <br>
                                <div class="form-group">
                                    <div class="form-control-label {{ $errors->has('tags') ? 'focused error' : '' }}">
                                    
                                    <label class="form-control-label">Post Tag</label>
                                    <select name="tags[]" id="tag" class="form-control select2_demo_1" multiple="">
                                        <optgroup label="tag">
                                            @foreach($tags as $tag)
                                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                        @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                                
                            </div>
                        </div>
                         <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Post Body Editor
                            <small>Edit Your Post Here</small>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <textarea name="body" id="summernote" data-plugin="summernote" data-air-mode="true"></textarea> 
                    </div>
                </div>
                <div class="form-group">
                <label for="image">Featured Image</label>
                <input type="file" name="image">
                <input type="checkbox" id="publish" class="filled-in" name="status" value="1">
                    <label for="publish">Publish</label>
                </div>

                
                    </div>
                        <button type="submit" class="pull-left btn btn-primary m-t-15 waves-effect">Publish</button>
                                                    </form>

                        <a  class="pull-right btn btn-danger m-t-15 waves-effect" href="{{ route('author.post.index') }}">BACK</a>
                </div>
        </div>
   
   
@endsection

@push('js')
	
@endpush