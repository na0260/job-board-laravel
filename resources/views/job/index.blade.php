<x-layout>
    <x-breadcrumbs
        class="mb-4"
        :links="[
    'jobs'=>route('jobs.index')
    ]"
    />
    <x-card class="mb-4 text-xs" x-data="">
        <form x-ref="filters" id="filtering-form" action="{{route('jobs.index')}}" method="GET">
            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <div class="mb-1 font-semibold">Search</div>
                    <x-text-input name="search" form-ref="filters" value="{{request('search')}}" placeholder="Search for any text"/>
                </div>
                <div>
                    <div class="mb-1 font-semibold">Salary</div>
                    <div class="flex space-x-2">
                        <x-text-input name="min_salary" form-ref="filters" value="{{request('min_salary')}}" placeholder="From"/>
                        <x-text-input name="max_salary" form-ref="filters" value="{{request('max_salary')}}" placeholder="To"/>
                    </div>
                </div>
                <div>
                    <div class="mb-1 font-semibold">Experience</div>
                    <x-radio-group name="experience" :options="\App\Models\Job::$experience"/>
                </div>
                <div>
                    <div class="mb-1 font-semibold">Category</div>
                    <x-radio-group name="category" :options="\App\Models\Job::$category"/>
                </div>
            </div>
            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-400 hover:text-slate-200 text-white text-sm font-semibold rounded-md py-1.5">
                Filter
            </button>
        </form>
    </x-card>
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
