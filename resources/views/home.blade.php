<x-layout page="home">
    <x-slot:btn>
        <a href="{{ route('task.create') }}" class="btn btn-primary">
            Criar tarefa
        </a>
    </x-slot:btn>
    <section class="graph">
        <div class="graph_header">
            <h2>Progresso do Dia</h2>
            <div class="graph_header-line"></div>
            <div class="graph_header-date">
                <img src="/assets/images/icon-prev.png" alt="">
                    13 de Dez
                <img src="/assets/images/icon-next.png" alt="">
            </div>
        </div>
        <div class="graph_header-sbtitle"> Tarefas: <b>3/6</b></div>
        <div class="graph-placeholder">

        </div>

        <div class="graph_header_footer">
            <img src="assets/images/icon-info.png" alt="">
            Restam 3 tarefas para serem realizadas
        </div>
    </section>
    <section class="list">
        <div class="list-header">
            <select name="" id="" class="list-select">
                <option value="1">Todas as tarefas</option>
            </select>
        </div>
        <div class="task-list">
            @foreach ($tasks as $task)
                <x-task :data=$task />
            @endforeach
        </div>
    </section>
</x-layout>
