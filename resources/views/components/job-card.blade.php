@props(['job'])
<div class="p-4 bg-white/5 rounded-xl flex flex-col text-center border border-transparent group hover:border-blue-600 ">
    <div class="self-start text-sm">{{$job->employer->name}}</div>
    <div>
        <h3 class="group-hover:text-blue-600">{{$job->title}}</h3>
        <p>{{$job->schedual}} from {{$job->salary}}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach($job->tags as $tag)
           <x-tag>{{$tag->name}}</x-tag>
               @endforeach
        </div>
        <img src="http://picsum.photos/seed/{{rand(0,1000)}}/42/42" alt="" class="rounded-xl">
    </div>
</div>