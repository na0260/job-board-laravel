<x-layout>
    @foreach($jobs as $job)
        <x-job-card class="mb-4" :$job>
            <div>
                <x-button :href="route('jobs.show', $job)">
                    Read more
                </x-button>
            </div>
        </x-job-card>
    @endforeach
</x-layout>
