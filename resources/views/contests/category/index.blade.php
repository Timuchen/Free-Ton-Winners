@extends('theme::layouts.app')

@section('content')

<div class="flex flex-col px-8 mx-auto my-6 lg:flex-row max-w-7xl xl:px-5">
<div class="flex flex-col justify-start">
			<h1 class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
				Free TON contests
			</h1>
			<p class="mt-3 text-xl leading-7 text-gray-500 sm:mt-4">
            {{ $category->description }}
			</p>
      <ul class="flex self-start inline w-auto px-3 py-1 mt-3 text-xs font-medium text-gray-600 bg-blue-100 rounded-md">
				<li class="mr-4 font-bold text-blue-600 uppercase">Category:</li>
        <li class="text-blue-700"><a href="/contests">Contests</a></li>
        <li class="mx-2">&middot;</li>
				<li class="">{{ $category->name }}</li>
			</ul>
		</div>  
        </div>
        <br>
        <div class="flex flex-col px-8 mx-auto my-6 lg:flex-row max-w-7xl xl:px-5">
        <div id="crossing" class="flex flex-col justify-start w-full lg:mr-3 lg:mb-0" style="max-width: 350px;">
			<ul class="flex flex-col w-full">
				<li class="my-px">
					<span class="flex font-medium text-sm text-gray-400 px-4 my-4 uppercase">Contests categories</span>

				</li>
                @foreach($categories as $cat)
					
					
                 <li class="my-px">
					<a href="/contests/category/{{$cat->id}}"
					   class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-600 hover:bg-gray-100">
                        @if($cat->image)
						<span class="flex items-center justify-center text-lg text-gray-400">
                        <img class="rounded-full h-8 w-8 object-cover" src="/{{ $cat->image }}" alt="">
						</span>
                        @else
                        <span class="flex items-center justify-center text-lg text-gray-400">
                        <svg fill="none"
								 stroke-linecap="round"
								 stroke-linejoin="round"
								 stroke-width="2"
								 viewBox="0 0 24 24"
								 stroke="currentColor"
								 class="h-6 w-6">
								<path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
							</svg>
						</span>
                        @endif
						<span class="ml-3">{{ $cat->name }}</span>
					</a>
				</li>
				
		        @endforeach

                
        <li id="control" class="flex items-center justify-center text-sm text-gray-500 font-semibold hover:bg-blue-100 h-6 px-2 rounded-full">↓ Show all categories...</li>
			</ul>
      </br>
      @if(auth()->user()->can('browse_admin'))
      <ul class="flex flex-col w-full">
      <li class="my-px">
					<span class="flex font-medium text-sm text-gray-400 px-4 my-4 ">Publisher menu</span>
				</li>
				<li class="my-px">
					<a href="/contests/create"
					   class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-600 hover:bg-gray-100">
						<span class="flex items-center justify-center text-lg text-green-400">
							<svg fill="none"
								 stroke-linecap="round"
								 stroke-linejoin="round"
								 stroke-width="2"
								 viewBox="0 0 24 24"
								 stroke="currentColor"
								 class="h-6 w-6">
								<path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
							</svg>
						</span>
						<span class="ml-3">Add new contest</span>
					</a>
				</li>
        <a href="/category/create"
					   class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-600 hover:bg-gray-100">
						<span class="flex items-center justify-center text-lg text-gray-400">
            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
								<path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
							</svg>
						</span>
						<span class="ml-3">Add new category</span>
					</a>
				</li>

			</ul>
            @endif
		</div>

    <div class="grid sm:grid-cols-2 col-span-4 gap-6 my-6 px-4 md:px-6 lg:px-8">    
    @if ($contests->count()>0)
    @foreach($contests as $contest)
        
    <div class="max-w-l mx-auto px-4 py-4 bg-white shadow-md rounded-lg">
      <div class="py-2 flex flex-row items-center justify-between">
        <div class="flex flex-row items-center">
          <a href="#" class="flex flex-row items-center focus:outline-none focus:shadow-outline rounded-lg">
            <img class="rounded-full h-8 w-8 object-cover" src="/{{$category->image}}" alt="">
            <p class="ml-2 text-base font-medium">{{$category->name}}</p>
          </a>
        </div>
        <div class="flex flex-row items-center">
          <p class="text-xs font-semibold text-gray-500">{{ Carbon\Carbon::parse($contest->created_at)->diffForHumans() }}</p>
        </div>
      </div>
      <div class="mt-2">
        <a href="/contests/show/{{$contest->id}}">
        <img class="object-cover w-full rounded-lg" src="/{{$contest->image}}" alt="" style="max-width: 1300px">
        </a>
        
        <div class="py-2 flex flex-row items-center">
          <button class="flex flex-row items-center focus:outline-none focus:shadow-outline rounded-lg">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-5 h-5"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
            <span class="ml-1">0</span>
          </button>
          <button class="flex flex-row items-center focus:outline-none focus:shadow-outline rounded-lg ml-3">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-5 h-5"><path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
            <span class="ml-1">0</span>
          </button>
          <span class="flex flex-row items-center focus:outline-none focus:shadow-outline rounded-lg ml-3">
          💎 <span class="ml-1">{{$contest->balance}}</span>
          </span>
        </div>
      </div>
      <div class="py-2">
      <a href="/contests/show/{{$contest->id}}">
        <p class="leading-snug">{{$contest->title}}</p>
      </a>  
      </div>
    </div>
      
	@endforeach
    @else
    <p class="mt-3 text-xl leading-7 text-gray-500 sm:mt-4">
    Content coming soon ...
    </p>
    @endif
    </div>
       
</div>
</br>

<style>
  #control{
    text-align:center;
  }
  #crossing ul li:nth-child(n+6) {
  display:none;
}

#crossing.expand ul li:nth-child(n+6) {
  display:list-item;
}

#crossing ul li#control {
  display:list-item;
  margin-top: 15px;
  cursor:pointer;
}
</style>
<script>
  document.getElementById('control').onclick = function(){
  document.getElementById("crossing").classList.toggle("expand");
  if (document.getElementById('control').innerHTML != '↑ Roll up'){
    document.getElementById('control').innerHTML = '↑ Roll up';
  }else{
    document.getElementById('control').innerHTML = '↓ Show all categories...';
  }
  
}
</script>


@endsection
