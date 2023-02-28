<!doctype html>
<html lang="en">
<head>



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        table{border:1px solid black;text-align: center}
        th{width:100px;border:2px solid black;}
        td{border:1px solid black;margin:1px}
        tr{margin:5px}
    </style>
    <title>BC's house page</title>
    <a href="{{ route('house.create') }}"><button style="position:relative;right:0;display:block">Add new Client</button></a><br>
</head>
<body>
<div style="display:inline">
    <table>
        <thead>
        <th>id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Date</th>
        <th>Flats</th>
        </thead>
@foreach($houses as $house)

       <tbody>

       <tr>
           <td><a href="{{ route('house.show',$house) }}">{{$house->id}}</td></a>
           <td><a href="{{ route('house.show',$house) }}">{{$house->house_name}}</a></td>
           <td>{{$house->price_for_1sqr_per_meter}}</td>
           <td>{{$house->construction_date}}</td>
           <td>{{$house->common_count_of_flats}}</td>
       </tr>
       </tbody>

@endforeach
    </table>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
