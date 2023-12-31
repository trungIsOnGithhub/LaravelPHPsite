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
        <h5>{{$msg}}</h5>
        @if( $can_write_thought )
            <form action="{{ route('thought.store') }}" method="POST">
                <label for="content">What's on your mind?</label>
                <textarea id="thought" name="content" rows="5" cols="10"></textarea>
                <label for="name">And who you are?(Optional):</label>
                <input type="text" id="name" name="name">
                @csrf
                <button type="submit">Submit</button>
            </form>
        @endif
        @php
            $i = 1;
            echo "Vui Ve Qua Di";
        @endphp
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Details</th>
                <th width="280px">Action</th>
            </tr>
            @foreach($thoughts as $thought)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $thought->name }}</td>
                <td>{{ $thought->content }}</td>
                <td>
                    <form action="{{ route('thought.destroy',$thought->id) }}" method="POST">
        
                        <a class="btn btn-primary" href="{{ route('thought.edit',$thought->id) }}">Edit</a>
    
                        @csrf
                        @method('DELETE')
        
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </section>

    <!-- <section class="container  justify-content-center">
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
    </section> -->
<body>
</html>