<x-layout page="Login">
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>
    <section id="create_task_section">
        <h1>Criar tarefa</h1>
        <form action="{{ route('task.store') }}" method="POST">
            @csrf
            <x-form.text_input name="title" label="Titulo: " required="true" placeHolder="Digite o titulo... "/>
            <x-form.text_input name="date" label="Data de realização: " required="true" type="date"/>
            <x-form.select_input name="category" label="Categoria: " required="true">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{$category->title}}</option>
                @endforeach
            </x-form.select_input>
            <x-form.textArea_input name="description" label="Descrição: " placeHolder="Digite a descrição..." required="false"/>
            <x-form.form-btn resetTxt="Resetar" submitTxt="Salvar" />
        </form>
    </section>
</x-layout>
