<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmer La suppression</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                {!! Form::open([
                            'method'=>'post',
                            'url' => ['carousel/delete/' .$item->id ],
                            'style' => 'display:inline'
                        ]) !!}

                <button class="btn btn-danger" type="submit">Supprimer</button>
                <button class="btn btn-success" data-dismiss="modal">Annuler</button>
                {!! Form::close() !!}

            </div>

        </div>
    </div>
</div>