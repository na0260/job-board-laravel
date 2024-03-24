<x-layout>
    <x-breadcrumbs
        class="mb-4"
        :links="[
    'jobs'=>route('jobs.index')
    ]"
    />
    <x-card class="mb-4 text-xs">
        <form action="{{route('jobs.index')}}" method="GET">
            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <div class="mb-1 font-semibold">Search</div>
                    <x-text-input name="search" value="{{request('search')}}" placeholder="Search for any text"/>
                </div>
                <div>
                    <div class="mb-1 font-semibold">Salary</div>
                    <div class="flex space-x-2">
                        <x-text-input name="min_salary" value="{{request('min_salary')}}" placeholder="From"/>
                        <x-text-input name="max_salary" value="{{request('max_salary')}}" placeholder="To"/>
                    </div>
                </div>
                <div>
                    <div class="mb-1 font-semibold">Experience</div>
                    <label for="experience" class="mb-1 flex items-center">
                        <input type="radio" name="experience" value="" id="experience" class="mr-1" @checked(!request('experience'))/>
                        <span class="ml- text-sm">All</span>
                    </label>
                    <label for="experience" class="mb-1 flex items-center">
                        <input type="radio" name="experience" value="entry" id="experience" class="mr-1" @checked('entry'=== request('experience'))/>
                        <span class="ml- text-sm">Entry</span>
                    </label>
                    <label for="experience" class="mb-1 flex items-center">
                        <input type="radio" name="experience" value="intermediate" id="experience" class="mr-1" @checked('intermediate'=== request('experience'))/>
                        <span class="ml- text-sm">Intermediate</span>
                    </label>
                    <label for="experience" class="mb-1 flex items-center">
                        <input type="radio" name="experience" value="senior" id="experience" class="mr-1" @checked('senior'=== request('experience'))/>
                        <span class="ml- text-sm">Senior</span>
                    </label>
                </div>
                <div>4</div>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white rounded-md py-1.5">
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
