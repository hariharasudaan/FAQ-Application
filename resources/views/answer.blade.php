@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Answer</div>
                    <div class="card-body">
                        {{$answer->body}}

                        <div class="blockquote">
                            <a href="{{ route('answers.updateVotesIncrease',['question_id'=> $question, 'answer_id'=> $answer->id, ]) }}">Upvote </a>{{$answer->upvotes}}
                            <a href="{{ route('answers.updateVotesDecrease',['question_id'=> $question, 'answer_id'=> $answer->id, ]) }}">Downvote </a>{{$answer->downvotes}}
                        </div>


                    </div>
                    <div class="card-footer">
                        @if(Auth::user() == $answer->user)
                        {{ Form::open(['method'  => 'DELETE', 'route' => ['answers.destroy', $question, $answer->id]])}}
                        <button class="btn btn-danger float-right mr-2" value="submit" type="submit" id="submit">Delete
                        </button>
                        {!! Form::close() !!}
                        <a class="btn btn-primary float-right"
                           href="{{ route('answers.edit',['question_id'=> $question, 'answer_id'=> $answer->id, ])}}">
                            Edit Answer
                        </a>
                        @endif
                    </div>
                </div>


                <br>
                <div class="card">
                    <div class="card-header"><a class="btn btn-primary float-left"
                                                href="{{ route('comments.create', ['answer_id'=> $answer->id,'question_id'=> $question])}}">
                            Add Comments
                        </a></div>
                </div>


                {{--
                                display the list of comments
                --}}
                @foreach($comment as $comments)
                    <div class="card">
                        <div class="card-header">{{\App\User::find($comments->user_id)->email}}</div>
                        <div class="card-body">
                            {{$comments->body}}
                        </div>
                        <div class="card-footer">
                            {{ Form::open(['method'  => 'DELETE', 'route' => ['comments.destroy', $question, $answer, $comments->id]])}}
                            <button class="btn btn-outline-danger" value="submit" type="submit" id="submit">Delete Comment
                            </button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                @endforeach


            </div>

        </div>
    </div>
@endsection
