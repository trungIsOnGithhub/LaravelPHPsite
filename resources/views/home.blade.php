@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                <section class="container">
                    <h5>{{ thoughtStatus }}</h5>
                    <form action="" method="POST">
                        <label for="thought">What's on your mind?</label>
                        <textarea id="thought" name="thought" rows="5" cols="10"></textarea>
                        <label for="name">And who you are?(Optional):</label>
                        <input type="text" id="name" name="name">
                    </form>
                </section>

                <section class="container">
                    <h4>Photo Gallery</h4>
                    <div class="row">
                        <div class="col">
                            Hehehe
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection
