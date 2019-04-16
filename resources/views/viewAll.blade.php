@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <a class="btn btn-dark float-left" href="{{ url('/home') }}">
                <b>View Questions Created by Me</b>
            </a>
            </div>
            <div class="container align-content-xl-between">
                <hr>
                <div class="float-left">
                    <button><a href="{{ url('/home/sort/all') }}">Sort by Recently Updated</a></button>
                </div>
                <form role="form" id="search-form" class="search-form" method="get" action="{{ url('/home/search') }}">
                    <div class="row float-lg-right">
                        <div class="form-group">
                            <input name="name" type="text" class="form-control" id="name" placeholder="Type Question Name">
                        </div>
                        <div>
                            <button class="btn btn-success" type="submit" id="search-form">Search</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><center><b><h3>Questions Created by Everyone</h3></b></>

                        <a class="btn btn-primary float-right" href="{{ route('questions.create') }}">
                            Create a Question
                        </a>


                        <div class="card-body">

                            <div class="card-deck">
                                @forelse($questions as $question)
                                    <div class="col-sm-4 d-flex align-items-stretch">
                                        <div class="card mb-3 ">
                                            <div class="card-header">
                                                <small class="text-muted">
                                                    Updated: {{ $question->created_at->diffForHumans() }}<br>
                                                    Answers: {{ $question->answer()->count() }}<br>
                                                    Owner: {{\App\User::find($question->user_id)->email}}

                                                </small>
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text">{{$question->body}}</p>
                                            </div>
                                            <div class="card-footer">
                                                <p class="card-text">

                                                    <a class="btn btn-primary float-right" href="{{ route('questions.show', ['id' => $question->id]) }}">
                                                        View
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    There are no questions to view, you can create a create a question.
                                @endforelse

                            </div>
                        </div>
{{--                        <div class="card-footer">
                            <div class="float-right">
                                {{ $questions->links() }}
                            </div>
                        </div>--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
