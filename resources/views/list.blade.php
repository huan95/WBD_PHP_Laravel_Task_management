@extends('layout.masterList')
@section('content')
        <center><h1 >Task List</h1></center>

        <form method="GET" action="{{ route('search') }}" accept-charset="UTF-8">
            @csrf
            <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input  type="text" class="form-control " name="searchTask" placeholder="enter word" />
                    <span class="input-group-btn">
                        <button  class="btn btn-info btn-lg" type="submit">Submit
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
        </form>

        @if(Session::has('create-success'))
            <h5 class="text-primary">{{ Session::get('create-success')}}</h5>
        @endif

        @if(isset($message))
            <h5 class="text-primary">{{ $message }}</h5>
        @endif

        @if(!isset($tasks))
            <h5 class="text-primary">Data does not exist!</h5>
        @else
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col" >#</th>
                    <th scope="col" >Task title</th>
                    <th scope="col" >Content</th>
                    <th scope="col" >Created</th>
                    <th scope="col" >Due Date</th>
                    <th scope="col" >Image</th>
                    <th scope="col" >Manipulation</th>
                </tr>
                </thead>
                <tbody>

                <!-- Kiểm tra, nếu biến tasks có số lượng bằng 0 (Không có task nào) thì trả về thông báo -->
                @if(count($tasks) == 0)
                    <h5 class="text-primary">Hiện tại chưa có task nào được tạo!</h5>
                @else

                    <!-- Duyệt mảng $tasks, lấy ra từng trường của từng task để hiển thị ra bảng -->
                    @foreach($tasks as $key => $task)
                        <tr>
                            <th scope="row" >{{ ++$key }}</th>
                            <td > {{ $task->title }}</td>
                            <td > {{ $task->content }}</td>
                            <td > {{ $task->created_at }}</td>
                            <td > {{ $task->due_date }}</td>
                            <td>
                                <img src="{{ asset('storage/images/' . $task->image) }}" alt="" style="width: 150px">
                            </td>
                            <td style="text-align: center; color: black"><a id="{{$task->id}}"
                                        class="btn btn-info delete-task">Delete</a>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            {!! $tasks->appends(request()->query()) !!}
        @endif
        <a href="{{ route('home_list') }}" class="btn btn-info">BACK</a>
@endsection