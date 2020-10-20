@extends('layouts.app')
@section('content')

<section class="content-header">
        <h1>
          Discussions
          <small>Liste des discussions</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li class="active">Discussions</li>
        </ol>
</section>

<!-- Main content -->
<section class="content">
    @include('inc.messages')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            Discussions
                        </h3>
                        Page {{ $discussions->currentPage() }} of {{ $discussions->lastPage() }}
                    </div>
                        
                            <div class="box-body">
                                @foreach ($discussions as $discussion)
                                <li style="list-style-type:disc">
                                    <a href="{{ route('forum.show', $discussion->id ) }}"><b>{{ $discussion->title }}</b></a><br>
                                        <p class="teaser">
                                           {!!  str_limit($discussion->description, 100) !!} {{-- Limit teaser to 100 characters --}}
                                        </p>
                                    
                                </li>
                                @endforeach
                            </div>
                        
                    </div>
                    <div class="text-center">
                        {!! $discussions->links() !!}
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
