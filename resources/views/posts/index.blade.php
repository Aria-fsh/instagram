@extends('layouts.app')

@section('content')

   @foreach($posts as $post)

       <div class="container">

        <div class="row">
            <div class="col-8 offset-2 pt-4">
                <img src="/storage/{{ $post->image }}" class="w-50">
            </div>
        </div>

        <div class="row">
            <div class="col-8 offset-2 pt-4 ">
                <div>

                    <div class="d-flex align-items-center ">
                        <div>
                            <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width: 40px">
                        </div>
                        <div class="pl-2">
                            <div class="font-weight-bold">
                                <a href="/profile/{{ $post->user->id }}">
                                    <span class="text-dark">{{ $post->user->username }}</span>
                                </a>

                            </div>
                        </div>
                    </div>

                    <hr>

                    <p>
                    <span class="font-weight-bold pr-1">
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </span>{{ $post->caption }}
                    </p>

                    <div class="pt-5"><hr></div>
                </div>
            </div>
        </div>
       @endforeach

       <div class="row">
           <div class="col-12 d-flex justify-content-center">
               {{ $posts->links() }}
           </div>
       </div>
           <div class="row col-4 ">
               <button class="btn btn-primary">
                   <a href="/profile/{{ auth()->user()->id }}" style="color: #e0d1d1">Profile</a>
               </button>
           </div>

@endsection
