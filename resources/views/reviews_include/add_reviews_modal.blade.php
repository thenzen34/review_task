<div class="modal fade" tabindex="-1" role="dialog" id="add_reviews_form">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Оставить отзыв</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('add') }}" enctype="multipart/form-data" class="form-horizontal" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="id_add_review_form-name">Ваше имя</label>
                        <input type="text" name="name" class="form-control" value="" placeholder="Ваше имя" title="" id="id_add_review_form-name" required="true">
                    </div>
                    <div class="form-group">
                        <label for="id_add_review_form-email">E-mail </label>
                        <input type="email" name="email" class="form-control" value="" placeholder="E-mail" title="" id="id_add_review_form-email" required="true">
                    </div>
                    <div class="form-group">
                        <label for="id_add_review_form-review">Ваш отзыв</label>
                        <textarea name="review" class="form-control" placeholder="Ваш отзыв" title="" id="add_review_form-review" required="true"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>

                    <button name="action" type="submit" class="btn btn-primary " data-bind="" value="add_reviews">Оставить отзыв</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
