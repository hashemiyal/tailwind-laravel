<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl ">Your Results..</h1>
            <div class="mt-6 space-y-6">
                @foreach($jobs as $job)
            <x-job-card-wide :job='$job'/>
            @endforeach
            </div>
    
        </section>
  
        
        
        
        
    </x-layout>