<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/random">
       @csrf
        <div class="buttons">
            <input type="number" value="0" placeholder="From" name="from">
            <input type="number" value="500" placeholder="To" name="to">
        </div>

        <div class="counts">
            <h1>
                {{$randomNumber}}
            </h1>
        </div>
        <div class="buttons">
            <button>Random</button>
        </div>

    </form>
</body>
</html>