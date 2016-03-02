{{--
Generic modal dialog

Expects:

@type bool $closable If true, an "X" will be shown in the upper right
@type string $modalTitle The title of the dialog
@type string $modalBody The dialog body
@type bool $modalClose If true, a close button will be shown in the footer
@type string $modalButtonText The text to display on the modal's "OK" button. Defaults to "OK"

--}}
<div class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                @if($closable)
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>@endif
                @if($modalTitle)<h4 class="modal-title">{{ $modalTitle }}</h4>@endif
            </div>
            <div class="modal-body">
                @if($modalBody){!! $modalBody !!}@endif
            </div>
            <div class="modal-footer">
                @if($modalClose)
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>@endif
                <button type="button" class="btn btn-primary">{{ $modalButtonText or 'OK' }}</button>
            </div>
        </div>
    </div>
</div>
