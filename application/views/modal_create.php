<div  >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create New</h4>
            </div>
            <div class="modal-body text-center m-t-30">
                <div class="col-md-6">
                    <i class="zmdi zmdi-developer-board ico-lg"></i>
                    <h4>Create New Company</h4>
                    <button ng-click="$ctrl.create_company()" type="button" class="btn btn-primary bgm-orange waves-effect m-30" data-dismiss="modal">Choose
                    </button>
                </div>
                <div class="col-md-6">
                    <i class="zmdi zmdi-account-box-o ico-lg"></i>
                    <h4>Create New Card</h4>
                    <button ng-click="$ctrl.create_card()"  ng-disabled="$ctrl.disableCreateCard" type="button" class="btn btn-primary bgm-orange waves-effect m-30" data-dismiss="modal">Choose
                    </button>
                </div>
            </div>
            <div class="modal-footer m-t-30">
                <!-- <button type="button" class="btn btn-link waves-effect">Next</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Cancel
                </button> -->
            </div>
        </div>
    </div>
</div>

