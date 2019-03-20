@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-12">
        <form action="{{route('post.store')}}" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Post Title">
          </div>
          <div class="form-group">
            <label for="category">Category</label>
            <select name="category" id="" class="form-control">
              <option value="php">PHP</option>
              <option value="laravel">laravel</option>
            </select>
          </div>
          <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="editor" cols="30" rows="10"></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-success">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<textarea name="editor" class="form-control " id="editor" cols="30" rows="10"></textarea>
@endsection
@push('scripts')
<script src="{{ asset('ckeditor_4.11.2_standard/ckeditor/ckeditor.js') }}"></script>
<!-- <script src="{{ asset('ckfinder/ckfinder.js') }}"></script> -->

<script> CKEDITOR.replace('editor'); </script>
<!-- <script>CKFinder.setupCKEditor(editor)</script> -->
@endpush