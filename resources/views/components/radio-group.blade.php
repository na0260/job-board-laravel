<div>
    <label for="{{$name}}" class="mb-1 flex items-center">
        <input type="radio" name="{{$name}}" value="" id="{{$name}}" class="mr-1" @checked(!request($name))/>
        <span class="ml- text-sm">All</span>
    </label>
    @foreach($options as $option)
        <label for="{{$name}}" class="mb-1 flex items-center">
            <input type="radio" name="{{$name}}" value="{{$option}}" id="{{$name}}" class="mr-1" @checked($option === request($name))/>
            <span class="ml- text-sm ">{{ Str::ucfirst($option)}}</span>
        </label>
    @endforeach
</div>
