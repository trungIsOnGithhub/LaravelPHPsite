<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo("abcd") ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="card-header">Dashboard</div>

    <section class="container justify-content-center">
        <h5>qhudalw87319</h5>
        <form action="/thought" method="POST">
            <label for="thought">What's on your mind?</label>
            <textarea id="thought" name="thought" rows="5" cols="10"></textarea>
            <label for="name">And who you are?(Optional):</label>
            <input type="text" id="name" name="name">
            <button type="submit">Submit</button>
        </form>
    </section>

    <section class="container  justify-content-center">
        <h4>Photo Gallery</h4>
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <img src="meotom.jpeg" alt="Meo Tom" width="200" height="300">
            </div>
            <div class="col-xs-12 col-md-4">
                <img src="meotom.jpeg" alt="Meo Tom" width="200" height="300">
            </div>
            <div class="col-xs-12 col-md-4">
                <img src="meotom.jpeg" alt="Meo Tom" width="200" height="300">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <img src="meotom.jpeg" alt="Meo Tom" width="200" height="300">
            </div>
            <div class="col-xs-12 col-md-4">
                <img src="meotom.jpeg" alt="Meo Tom" width="200" height="300">
            </div>
            <div class="col-xs-12 col-md-4">
                <img src="meotom.jpeg" alt="Meo Tom" width="200" height="300">
            </div>
        </div>
    </section>
<body>
</html>