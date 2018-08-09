@extends('layouts.app')

@section('content')

    <div class="col-md-9 col-lg-9 col-sm-8 col-xs-12 comments-padding"> <!-- Comments Section Start -->
        <div class="row comments-section">
            <!-- panel post-->
            <div class="panel panel-default border-transparent">

                <form class="addPost share_post" action="{!! route('share_post') !!}" method="post">
                    {{csrf_field()}}

                    <div class="panel-body panel-b-post ">
                        <button type="button" id="SubmitPost" class="btn post-btn pull-right form_post"><img class="post-btn-img" src="/img/msg.png"> Post</button>
                    </div>

                </form>
            </div>

        </div>
    </div><!-- Comments Section End -->





@endsection