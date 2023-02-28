<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>BC's main page</title>
    <h1 style="text-align:center">Main Page</h1>


</head>
<body>
<div>

    <div  style="display:flex;justify-content:center;justify-content:space-around;align-items:center;">

        <a href="{{ route('client.index') }}"><div style="width:70px;height:20px;border-radius:25px;max-height:40px;font-weight: bold;background-color: hotpink;text-align:center">Client</div></a>
        <a href="{{ route('house.index') }} "><div style="width:70px;height:20px;border-radius:25px;max-height:40px;font-weight: bold;background-color: greenyellow;text-align:center" >House</div></a>
        <a href="{{ route('flat.index') }}"><div style="width:70px;height:20px;border-radius:25px;max-height:40px;font-weight: bold;background-color: aquamarine;text-align:center" >Flat</div></a>
        <a href="#"><div style="width:70px;height:20px;border-radius:25px;max-height:40px;font-weight: bold;background-color: yellowgreen;text-align:center" >Sale</div></a>

    </div>
    <br>
    <br>
    <br>
    <span style="color:aqua;font-size:48px;font-weight: bold; text-align:center;">For now it's the all what main page have</span>

</div>


</body>
</html>
