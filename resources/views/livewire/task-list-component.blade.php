<div class="tasklist__container">
    <div class="header">
        <h5>Tareas pendientes para hoy</h5>
    </div>
    {{-- {{count($tareas)}} --}}
    <div class="tasks">
        @if (count($tareas) == 0)
            <p class="text-center">No hay tareas pendientes para hoy</p>
        @else
        @foreach ($tareas as $tarea)
            <div class="task">
                <input type="checkbox" name="tarea_check" id="task-1" class="tarea_check d-none">
                <label for="task-1" class="tarea_check-label">
                    <div class="task-list-mark">
                        <i class="bi bi-check"></i>
                    </div>
                </label>
                <div class="task__info">
                    <p class="title">{{$tarea->titulo}}</p>
                    <div class="task__info-date">
                        <i class="bi bi-calendar"></i>
                        <span class="date">{{$tarea->fin}}</span>
                    </div>
                </div>
            </div>
        @endforeach
        @endif
    </div>
</div>
