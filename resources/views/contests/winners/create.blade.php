@extends('theme::layouts.app')

@section('content')

<div class="flex flex-col px-8 mx-auto my-6 lg:flex-row max-w-7xl xl:px-5">
<div class="flex flex-col justify-start">
    <h1 class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
        Add the winning entries
    </h1>
    <p class="mt-3 text-xl leading-7 text-gray-500 sm:mt-4">
        Just add jobs, the counter will indicate the number of added jobs.
    </p>
<ul class="flex self-start inline w-auto px-3 py-1 mt-3 text-xs font-medium text-gray-600 bg-blue-100 rounded-md">
        <li class="mr-4 font-bold text-blue-600 uppercase">Already added: 0</li>
    </ul>
</div>  
</div>

</br>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('contests.store') }}">
                        @csrf

                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Title <span class="text-red-500">*</span></label></br>
                            <input type="text" class="border-2 border-gray-300 p-2 w-full" name="title" id="title" value="" required>
                        </div>
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Rancing <span class="text-red-500">*</span></label></br>
                            <input type="text" class="border-2 border-gray-300 p-2 w-full" name="title" id="title" value="" required>
                        </div>
                        <div class="mb-8">
                            <label class="text-xl text-gray-600">Description <span class="text-red-500">*</span></label></br>
                            <textarea name="description" id="description" class="border-2 border-gray-500">     
                            </textarea>
                        </div>

                        <div class="mb-4">
                        <label class="text-xl text-gray-600">Total points</label></br>
                            <input type="text" class="border-2 border-gray-300 p-2 w-full" name="total_points" id="total_points" placeholder="(Optional)">
                        </div>

                        <div class="mb-4">
                            <label class="text-xl text-gray-600">avg_points</label></br>
                                <input type="text" class="border-2 border-gray-300 p-2 w-full" name="avg_points" id="avg_points" placeholder="(Optional)">
                        </div>
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">jurors_voted</label></br>
                                <input type="text" class="border-2 border-gray-300 p-2 w-full" name="jurors_voted" id="jurors_voted" placeholder="(Optional)">
                        </div>
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Total points</label></br>
                                <input type="text" class="border-2 border-gray-300 p-2 w-full" name="jury_comment" id="jury_comment" placeholder="(Optional)">
                        </div>
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">accepted</label></br>
                                <input type="text" class="border-2 border-gray-300 p-2 w-full" name="accepted" id="accepted" placeholder="(Optional)">
                        </div>
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Abstained</label></br>
                                <input type="text" class="border-2 border-gray-300 p-2 w-full" name="abstained" id="abstained" placeholder="(Optional)">
                        </div>
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">rejected</label></br>
                                <input type="text" class="border-2 border-gray-300 p-2 w-full" name="rejected" id="rejected" placeholder="(Optional)">
                        </div>
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">rejected</label></br>
                                <input type="text" class="border-2 border-gray-300 p-2 w-full" name="rejected" id="rejected" placeholder="(Optional)">
                        </div>
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">file</label></br>
                                <input type="text" class="border-2 border-gray-300 p-2 w-full" name="file" id="file" placeholder="(Optional)">
                        </div>
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">link</label></br>
                                <input type="text" class="border-2 border-gray-300 p-2 w-full" name="link" id="link" placeholder="(Optional)">
                        </div>
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">winner_name</label></br>
                                <input type="text" class="border-2 border-gray-300 p-2 w-full" name="winner_name" id="winner_name" placeholder="(Optional)">
                        </div>
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">source</label></br>
                                <input type="text" class="border-2 border-gray-300 p-2 w-full" name="source" id="source" placeholder="(Optional)">
                        </div>
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">contest_id</label></br>
                                <input type="text" class="border-2 border-gray-300 p-2 w-full" name="contest_id" id="contest_id" placeholder="(Optional)">
                        </div>
                        <div class="grid grid-cols-1 mt-5 mx-7">
                        <label class="text-xl text-gray-600">Upload Photo</label>
                            <div class='flex items-center justify-center w-full'>
                                <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                                    <div class='flex flex-col items-center justify-center pt-7'>
                                    <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    <p class='lowercase text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>Select a photo</p>
                                    </div>
                                <input type='file' id="image" name="image" class="hidden" />
                                </label>
                            </div>
                        </div>
                        <div class="flex p-1">
                            <button role="submit" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap transition duration-150 ease-in-out border border-transparent rounded-md bg-wave-500 hover:bg-wave-600 focus:outline-none focus:border-indigo-700 focus:shadow-outline-wave active:bg-wave-700" required>
                                Create new work
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
   

</div>

    </br>
    
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace( 'description' );
    </script>
@endsection