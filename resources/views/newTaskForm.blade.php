<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Add A New Task</h1>
    <div class="mx-auto" style="width: 70%;">
        <form action="{{ url('/') }}/showTask" method="post">
            @csrf
            <x-input type="text" name="taskname" label="Enter Task Name" />
            <x-input type="date" name="duedate" label="Duedate" />
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Add Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
