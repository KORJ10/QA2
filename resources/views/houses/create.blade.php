<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add new house</title>
</head>
<body>

<form action="{{ route('house.store') }}" method="POST" style="text-align: center">
    @csrf
    <div class="form-group container" style="width:300px;" >
        <label for="field">House name</label>
        <input name="house_name" type="text" class="form-control" id="field" placeholder="Write house name">
    </div>
    <br>
    <div class="form-group container" style="width:300px;" >
        <label for="field">Price for 1sqr/m</label>
        <input name="price_for_1sqr_per_meter" type="number" class="form-control" id="field" placeholder="price" min="0">
    </div>
    <br>
    <div class="form-group container" style="width:300px;" >
        <label for="field">Construction date</label>
        <input name="construction_date" type="date" class="form-control" id="field" placeholder="when it was build">
    </div>
    <br>
    <div class="form-group container" style="width:300px;" >
        <label for="field">Common count of flats</label>
        <input name="common_count_of_flats" type="number" class="form-control" id="field" placeholder="how many flats there" min="0">
    </div>
    <br>
    <button type="submit" class="btn btn-primary container" style="width:100px" >Save</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
