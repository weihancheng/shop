@if (count($errors) > 0)
    <div class="alert alert-warning fade in">
        <button class="close" data-dismiss="alert">
            ×
        </button>
        @foreach ($errors->all() as $k => $error)
        <i class="fa-fw fa fa-warning"></i>
            <strong>警告</strong> {{ $k + 1}}: {{ $error }}.<br>
        @endforeach
    </div>
@endif