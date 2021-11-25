<div class="modal" id="ModalCreate" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="form_create" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title">Create Client</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert-danger alert d-none error-message">
                        <div></div>
                    </div>

                    <div class="row">
                            <div>
                                <label>Name <sup class="text-danger">(*)</sup></label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div>
                                <label>Email <sup class="text-danger">(*)</sup></label>
                                <input type="email" id="email" name="email" class="form-control">
                            </div>
                            <div>
                                <label>Phone <sup class="text-danger">(*)</sup></label>
                                <input type="text" id="phone" name="phone" class="form-control">
                            </div>
                            <div>
                                <label>Last Purchase <sup class="text-danger">(*)</sup></label>
                                <input type="text" id="last_purchase" name="last_purchase" class="form-control">
                            </div>
                            <div>
                                <label>	Total Purchases <sup class="text-danger">(*)</sup></label>
                                <input type="text" id="total_purchases" name="total_purchases" class="form-control">
                            </div>
                            <div>
                                <label>Tatal paid <sup class="text-danger">(*)</sup></label>
                                <input type="text" id="tatalpaid" name="tatal_paid" class="form-control">
                            </div>
                            <div>
                                <label>Balance<sup class="text-danger">(*)</sup></label>
                                <input type="text" id="balance" name="balance" class="form-control">
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btn_store"  data-href="{{ route('clients.store') }}"
                            class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
