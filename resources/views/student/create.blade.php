<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Client</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1>Create Student</h1>

        <form method='POST' action="{{route('student.store')}}" >
            <!-- ID
            name(string)
            surname(string)
            username(string)
            company_id(bigInt)
            image_url(string) -->

            <input class="form-control" type='text' name="student_name" value="Test" placeholder="Student Name"/>
            <input  class="form-control" type='text' name="student_surname" value="Test" placeholder="Student Surname"/>
            
            
            <select name="student_groupid" class="form-control">
               <!-- @for($i=1; $i<=250; $i++)
                    <option value="{{$i}}">{{$i}}</option>
                @endfor-->

                 
                @foreach ($select_values as $attendanceGroup)
                    <option value="{{$attendanceGroup->id}}">{{$attendanceGroup->name}}</option>
                @endforeach

            </select>


            <input class="form-control" type='text' name="student_imageurl" value="Test" placeholder="Student Image URL"/>
            @csrf

            <button class="btn btn-primary" type='submit'>Add</button>
            <a class="btn btn-secondary" href="{{route('student.index')}}">Back</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
           
</body>
</html>