@foreach(['success', 'danger', 'info', 'warning'] as $t)
    @if(session()->has($t))
        <div class="alert alert-{{$t}} fade in">
            <button class="close" data-dismiss="alert">
                x
            </button>
            @if($t == 'danger')<i class="fa-fw fa fa-times"></i>
            @elseif($t == 'info')<i class="fa-fw fa fa-info"></i>
            @elseif($t == 'warning')<i class="fa-fw fa fa-warning"></i>
            @elseif($t == 'success')<i class="fa-fw fa fa-check"></i>
            @endif
            <strong>
                @if($t == 'danger')错误!
                @elseif($t == 'info')提示：
                @elseif($t == 'warning')警告!
                @elseif($t == 'success')成功!
                @endif
            </strong> {{session()->get($t)}}.
        </div>
    @endif
@endforeach