<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add new client</title>
</head>
<body>

<form action="{{ route('client.store') }}" method="POST" style="text-align: center">
    @csrf
    <div class="form-group container" style="width:300px;" >
        <label for="field">Full name</label>
        <input name="full_name" type="text" class="form-control" id="field" placeholder="Write full name">
    </div>
    <br>
    <div class="form-group container" style="width:300px;" >
        <label for="field">Phone number</label>
        <input name="phone_number" type="number" class="form-control" id="field" placeholder="phone number
        " min="0">
    </div>
    <br>
    <div class="form-group container" style="width:300px;" >
        <label for="field">Email</label>
        <input name="email" type="email" class="form-control" id="field" placeholder="Email">
    </div>
    <br>
    <button type="submit" class="btn btn-primary container" style="width:100px" >Save</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
