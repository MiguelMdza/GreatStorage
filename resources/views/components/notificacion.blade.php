<div>
    @if (session('notificacion'))
        <div class="alert alert-success" role="notificaciom">
            <strong>{{ session('notificacion') }}</strong>
        </div>
    @endif
</div>
