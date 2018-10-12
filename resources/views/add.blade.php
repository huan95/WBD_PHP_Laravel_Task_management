@extends('layout.master')
@section('content')
    <center><h1 >Add New Task</h1></center>
    <form method="post" action="{{ route('add') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="inputTitle" >Task title</label>
            <input type="text"
                   class="form-control"
                   id="inputTitle"
                   name="inputTitle"
                   weight=""
                   required>
        </div>
        <div class="form-group">
            <label for="inputContent" >Task content</label>
            <textarea class="form-control"
                      id="inputContent"
                      name="inputContent"
                      rows="3"
                      required></textarea>
        </div>
        <div class="form-group">
            <label for="inputDueDate" >Due Date</label>
            <input type="date"
                   class="form-control"
                   id="inputDueDate"
                   name="inputDueDate"
                   required>
        </div>
        <div class="form-group">
            <label for="inputFileName" >File Name</label>
            <input type="text"
                   class="form-control"
                   id="inputFileName"
                   name="inputFileName">
            <input type="file"
                   class="form-control-file"
                   id="inputFile"
                   name="inputFile">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <hr>
    <a href="{{ route('home_list') }}" class="btn btn-info">BACK</a>

@endsection

