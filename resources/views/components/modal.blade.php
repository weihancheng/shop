<div class="modal fade {{$id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"
     style="display: none;">
    <div class="modal-dialog {{isset($type) ?: 'modal-lg'}}">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myLargeModalLabel">{{$title}}</h4>
            </div>
            <div class="modal-body">
                <div>
                    <form role="form" action="{{$url}}" method="post">
                        @isset($method)
                            @method($method)
                        @endisset
                        {{$slot}}
                        <button type="submit" class="btn btn-blue">保存</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>