<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Attendance Group</title>
</head>
<body>
    <div class="container">
    <h1>Attendance Group</h1>


@if (count($attendancegroup) == 0)
    <p>There is no students</p>
@endif


<a class="btn btn-primary" href="{{route('student.create')}}">Create new students</a>
<table class="table table-striped">
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Description</th>
    <th>Difficulty</th>
    <th>School</th>
    <th>Student count</th>
    <th>Actions</th>
</tr>


@foreach ($attendancegroup as $attendancegroup)
    <tr>
        <td>{{$attendancegroup->id}}</td>
        <td>{{$attendancegroup->name}}</td>
        <td>{{$attendancegroup->description}}</td>
        <td>{{$attendancegroup->difficulty}}</td>
        <td>{{$attendancegroup->attendanceGroupSchool->name}}</td>
        <td>{{count($attendancegroup->attendanceGroupStudents)}}</td>
        <td>
           
           
        </td>
    </tr>
@endforeach

</table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>