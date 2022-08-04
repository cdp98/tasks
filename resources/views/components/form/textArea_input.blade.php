<div class="inputArea">
    <label for="{{$name}}">{{ $label ?? '' }}</label>
    <textarea name="{{ $name }}" id="{{$name}}"  placeholder="{{ $placeHolder ?? '' }}" {{ $required ? 'required' : '' }} cols="30" rows="10"></textarea>
</div>
