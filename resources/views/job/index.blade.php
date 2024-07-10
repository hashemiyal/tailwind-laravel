<x-layout>
<div class="space-y-10">
    <section class="text-center pt-6">
        <h1 class="font-bold text-4xl ">Lets Find Your Next Job!!</h1>
        <x-forms.form action="/search" class="mt-6">
            <x-forms.input :label="false" name="q" placeholder="Web Developer..." />
        </x-forms.form>
    </section>
    <section class="pt-10">
        <x-heading>Featured Jobs</x-heading>
        <div class="grid lg:grid-cols-3 gap-8 mt-10">
            @foreach($jobs as $job)
        <x-job-card :job='$job'/>
        @endforeach
      
        </div> 
       
    </section>
        
    
    <section>
        <x-heading>Recent Jobs</x-heading>
        <div class="mt-6 space-y-6">
            @foreach($jobs as $job)
        <x-job-card-wide :job='$job'/>
        @endforeach
        </div>

    </section>
        
    
        
        
    <section>
        <x-heading>Tags </x-heading>
        <div class="mt-6 space-x-2">
            @foreach($tags as $tag)
            <x-tag>{{$tag->name}}</x-tag>
            @endforeach
           
        </div> 
       
    </section>
        
    
        
</div>  


    
       
    
    
    
    
    
    
    
    
    
</x-layout>