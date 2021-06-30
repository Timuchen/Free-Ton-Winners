@extends('theme::layouts.app')

@section('content')

<div class="max-w-4xl px-5 mx-auto mt-10 lg:px-0">
        <a href="{{ route('contests') }}" class="flex items-center mb-6 font-mono text-sm font-bold cursor-pointer text-wave-500">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            back to section
        </a>
    </div>
    <article id="post-{{ $contest->id }}" class="max-w-4xl px-5 mx-auto prose prose-xl lg:prose-2xl lg:px-0">
    <meta property="name" content="{{ $contest->title }}">
        <meta property="author" typeof="Person" content="admin">
        <meta property="dateModified" content="{{ Carbon\Carbon::parse($contest->updated_at)->toIso8601String() }}">
        <meta class="uk-margin-remove-adjacent" property="datePublished" content="{{ Carbon\Carbon::parse($contest->created_at)->toIso8601String() }}">

        <div class="max-w-4xl mx-auto mt-6">

        <h1 class="flex flex-col leading-none">
            <span>{{ $contest->title }}</span>
            <span class="mt-0 mt-10 text-base font-normal">Written on 
            <time datetime="{{ Carbon\Carbon::parse($contest->created_at)->toIso8601String() }}">{{ Carbon\Carbon::parse($contest->created_at)->toFormattedDateString() }}</time>. 
            Posted in <a href="/contests/category/{{$category->id}}">{{$category->name}}</a>.</span>
        </h1>
       
        </div>
        <div class="relative">
            <img class="w-full h-auto rounded-lg" src="/{{ $contest->image }}" alt="{{ $contest->title }}">
        </div>
        

 

        <div class="max-w-4xl mx-auto">
        <span class="mt-0 mt-10 text-base font-normal">Submission start 
            <time datetime="{{ Carbon\Carbon::parse($contest->submission_start)->toIso8601String() }}">{{ Carbon\Carbon::parse($contest->submission_start)->diffForHumans() }}</time>. 
        </span>
        &middot;
        <span class="mt-0 mt-10 text-base font-normal">Submission end 
            <time datetime="{{ Carbon\Carbon::parse($contest->submission_start)->toIso8601String() }}">{{ Carbon\Carbon::parse($contest->submission_start)->diffForHumans() }}</time>. 
        </span>
        </div>
        <div class="max-w-4xl mx-auto">
        <span class="mt-0 mt-10 text-base font-normal">Judging start 
            <time datetime="{{ Carbon\Carbon::parse($contest->submission_start)->toIso8601String() }}">{{ Carbon\Carbon::parse($contest->judging_start)->diffForHumans() }}</time>. 
        </span>
        &middot;
        <span class="mt-0 mt-10 text-base font-normal">Judging end 
            <time datetime="{{ Carbon\Carbon::parse($contest->submission_start)->toIso8601String() }}">{{ Carbon\Carbon::parse($contest->judging_end)->diffForHumans() }}</time>. 
        </span>
        </div>
        <p class="text-base font-normal">
        {!! $contest->description !!}
        </p>
        <div class="max-w-4xl mx-auto">
        Balance: {{ $contest->balance }}
        </div>
        <div class="max-w-4xl mx-auto">
        To disquse {{ $contest->to_disquse }}
        </div>
        <div class="max-w-4xl mx-auto">
        total_votes {!! $contest->total_votes !!}
        </div>
        <div class="max-w-4xl mx-auto">
        avg_score {!! $contest->avg_score !!}
        </div>
    </article>  
  <div class="max-w-4xl px-5 mx-auto mt-10 lg:px-0">
  <h3 class="text-4xl font-medium leading-9 text-grey-500">Winners works</h3>  
  </div>
  <div class="max-w-4xl px-5 mx-auto mt-10 lg:px-0">
 {{$i=0}}
  @foreach($winners as $winner)

    <div class="py-3 sm:max-w-xl sm:mx-auto">
      <div class="bg-white shadow-lg border-gray-100 max-h-80	 border sm:rounded-3xl p-8 flex space-x-8">
        @if ($i < 3)
        {{ $i++}}
        <div class="w-full lg:w-1/3 lg:p-4">
            <img class="h-64 lg:h-full object-cover object-center w-full" src="https://romdom.com.ua/image/catalog/icons/grnt.png" alt="">
        </div>
        @endif
        <div class="flex flex-col w-1/2 space-y-4">
          <div class="flex justify-between items-start">
            <h2 class="text-3xl font-bold">{{ $winner->title }}</h2>
            <div class="bg-yellow-400 font-bold rounded-xl p-2">{{$winner->total_points}}</div>
          </div>
          <div>
            <div class="text-sm text-gray-400">Series</div>
            <div class="text-lg text-gray-800">2019</div>
          </div>
            <p class=" text-gray-400 max-h-40 overflow-y-hidden">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <div class="flex text-2xl font-bold text-a">83.90</div>
        </div>
  
      </div>
    </div> 

  @endforeach
</div>  


</br>

<div class="max-w-4xl px-5 mx-auto mt-10 lg:px-0">
  <div class="antialiased mx-auto max-w-screen-sm">
  <h3  id="comments" class="mb-4 text-lg font-semibold text-gray-900">Comments</h3>

  <div class="space-y-4">

    <div class="flex">
      <div class="flex-shrink-0 mr-3">
        <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10" src="https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80" alt="">
      </div>
      <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
        <strong>Sarah</strong> <span class="text-xs text-gray-400">3:34 PM</span>
        <p class="text-sm">
          Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
          sed diam nonumy eirmod tempor invidunt ut labore et dolore
          magna aliquyam erat, sed diam voluptua.
        </p>
        <div class="mt-4 flex items-center">
          <div class="flex -space-x-2 mr-2">
            <img class="rounded-full w-6 h-6 border border-white" src="https://images.unsplash.com/photo-1554151228-14d9def656e4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100&q=80" alt="">
            <img class="rounded-full w-6 h-6 border border-white" src="https://images.unsplash.com/photo-1513956589380-bad6acb9b9d4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100&q=80" alt="">
          </div>
          <div class="text-sm text-gray-500 font-semibold">
            5 Replies
          </div>
        </div>
      </div>
    </div>

    <div class="flex">
      <div class="flex-shrink-0 mr-3">
        <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10" src="https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80" alt="">
      </div>
      <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
        <strong>Sarah</strong> <span class="text-xs text-gray-400">3:34 PM</span>
        <p class="text-sm">
          Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
          sed diam nonumy eirmod tempor invidunt ut labore et dolore
          magna aliquyam erat, sed diam voluptua.
        </p>
        
        <h4 class="my-5 uppercase tracking-wide text-gray-400 font-bold text-xs">Replies</h4>

        <div class="space-y-4">
          <div class="flex">
            <div class="flex-shrink-0 mr-3">
              <img class="mt-3 rounded-full w-6 h-6 sm:w-8 sm:h-8" src="https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80" alt="">
            </div>
            <div class="flex-1 bg-gray-100 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
              <strong>Sarah</strong> <span class="text-xs text-gray-400">3:34 PM</span>
              <p class="text-xs sm:text-sm">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                sed diam nonumy eirmod tempor invidunt ut labore et dolore
                magna aliquyam erat, sed diam voluptua.
              </p>
            </div>
          </div>
          <div class="flex">
            <div class="flex-shrink-0 mr-3">
              <img class="mt-3 rounded-full w-6 h-6 sm:w-8 sm:h-8" src="https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80" alt="">
            </div>
            <div class="flex-1 bg-gray-100 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
              <strong>Sarah</strong> <span class="text-xs text-gray-400">3:34 PM</span>
              <p class="text-xs sm:text-sm">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                sed diam nonumy eirmod tempor invidunt ut labore et dolore
                magna aliquyam erat, sed diam voluptua.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<br>
@endsection