<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Client edit</title>
</head>
<body>
<div class="container">
    <form action="{{ route('client.edit',$client) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="field">Name</label>
            <input type="text" value="{{ $client->id }}" class="form-control" name="house_name" id="field" placeholder="Edit the ID">
        </div>
        <div class="form-group">
            <label for="field">Price</label>
            <input type="text" value="{{ $client->full_name }}" class="form-control" name="price_for_1sqr_per_meter" id="field" placeholder="Edit the name">
        </div>
        <div class="form-group">
            <label for="field">Date</label>
            <input type="text" value="{{ $client->phone_number }}" class="form-control" name="construction_date" id="field" placeholder="Edit the phone number">
        </div>
        <div class="form-group">
            <label for="field">Flats</label>
            <input type="text" value="{{ $client->email }}" class="form-control" name="common_count_of_flats" id="field" placeholder="Edit the email">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
