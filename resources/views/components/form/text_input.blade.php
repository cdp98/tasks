<div class="inputArea">
    <label for="{{$name}}">{{ $label ?? '' }}</label>
    <input type="{{ isset($type) ? $type : 'text' }}" name="{{$name}}" id="{{ $name }}" placeholder="{{ $placeHolder ?? '' }}" {{ $required ? 'required' : '' }}>
</div>
