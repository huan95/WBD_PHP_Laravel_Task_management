<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List Customer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- CSS -->
    <link href="{{asset('/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
</head>
<body class="fontnen">
<div class="flex-center position-ref full-height">
    <div class="content">
        <center><h1 style="color: white">Tast List</h1></center>
        @if(Session::has('create-success'))
            <h5 class="text-primary">{{ Session::get('create-success')}}</h5>
        @endif

        @if(isset($message))
            <h5 class="text-primary">{{ $message }}</h5>
        @endif

        @if(!isset($tasks))
            <h5 class="text-primary">Data does not exist!</h5>
        @else
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col" style="color: white">#</th>
                    <th scope="col" style="color: white">Task title</th>
                    <th scope="col" style="color: white">Content</th>
                    <th scope="col" style="color: white">Created</th>
                    <th scope="col" style="color: white">Due Date</th>
                    <th scope="col" style="color: white">Image</th>
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
                            <th scope="row" style="color: white">{{ ++$key }}</th>
                            <td style="color: white"> {{ $task->title }}</td>
                            <td style="color: white"> {{ $task->content }}</td>
                            <td style="color: white"> {{ $task->created_at }}</td>
                            <td style="color: white"> {{ $task->due_date }}</td>
                            <td>
                                <img src="{{ asset('storage/images/' . $task->image) }}" alt="" style="width: 150px">
                            </td>
                            <td style="color: white; text-align: center"><a
                                        href="{{ route('task_delete', $task->id) }}"
                                        onclick=" return confirm('Do you want to delete?')"
                                        class="btn btn-info">Delete</a>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        @endif
        <a href="{{ route('home_list') }}" class="btn btn-info">BACK</a>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>