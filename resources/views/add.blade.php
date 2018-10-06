<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Tasks</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- CSS -->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css">
</head>
<body class="fontnen">
<div class="flex-center position-ref full-height">
    <div class="content">
        <center><h1 style="color: white">Add New Task</h1></center>
        <form method="post" action="{{ route('add') }}"  enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="inputTitle" style="color: white">Task title</label>
                <input type="text"
                       class="form-control"
                       id="inputTitle"
                       name="inputTitle"
                       required>
            </div>
            <div class="form-group">
                <label for="inputContent" style="color: white">Task content</label>
                <textarea class="form-control"
                          id="inputContent"
                          name="inputContent"
                          rows="3"
                          required></textarea>
            </div>
            <div class="form-group">
                <label for="inputDueDate" style="color: white">Due Date</label>
                <input type="date"
                       class="form-control"
                       id="inputDueDate"
                       name="inputDueDate"
                       required>
            </div>
            <div class="form-group">
                <label for="inputFileName" style="color: white">File Name</label>
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
    </div>
</div>
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>