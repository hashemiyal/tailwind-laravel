@props(['job'])
<div class="p-4 bg-white/5 rounded-xl flex gap-x-6 border border-transparent hover:border-blue-600 group">
    <div>
        <img src="http://picsum.photos/seed/{{rand(0,1000)}}/100/100" alt="" class="rounded-xl ">
    </div>
        <div class="flex-1 flex flex-col">
        <div class="self-start text-sm text-gray-400">{{$job->employer->name}}</div>
        
            <h3 class="text-xl mt-3 group-hover:text-blue-600">{{$job->title}}</h3>
            <p class="text-gray-400 text-sm mt-auto">{{$job->schedual}} from {{$job->salary}}</p>
        </div>
        
            <div>
                @foreach($job->tags as $tag)
               <x-tag>{{$tag->name}}</x-tag>
               @endforeach
            </div>
           
       
    
 
</div>