<div class="inputArea">
    <label for="{{$name}}">{{ $label ?? '' }}</label>
    <select name="{{ $name }}" id="{{ $name }}" {{ $required ? 'required' : '' }}>
        <option value="" disabled selected>Selecione uma opção</option>
        {{ $slot }}
    </select>
</div>
