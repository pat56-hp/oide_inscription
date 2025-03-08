{{-- modal lieu touristique --}}
<style>
    .modal-body {
        max-height: 400px;
        overflow-y: auto;
    }
    
    #tourist-list li {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        margin-bottom: 10px;
    }
    
    #tourist-list img {
        width: 50px;
        height: 50px;
        margin-right: 10px;
    }
    
    @media (max-width: 576px) {
        .modal-header h4, .modal-footer img {
            text-align: center;
        }
    
        #tourist-list img {
            width: 40px;
            height: 40px;
        }
    }
    
    @media (max-width: 768px) {
        .modal-header h4, .modal-footer img {
            text-align: center;
        }
    
        #tourist-list img {
            width: 45px;
            height: 45px;
        }
    }
</style>
    
<div class="modal fade modal_conference" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title text-center text-primary">
            <strong>LISTE DES CONFERENCES CHOISIES PAR</strong>
        </h4>
        <h4 class="modal-title text-center">
            <strong class="card-title civiliteinscrit text-info"></strong>&nbsp;
            <strong class="card-title nominscrit text-warning"></strong>&nbsp;
            <strong class="card-title prenominscrit text-warning"></strong>
        </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <div class="container-fluid">
            <div class="row">
            <div class="col-12">
                <ul id="conference-list" class="list-group">
                <!-- Les conferences seront ajoutés ici -->
                </ul>
            </div>
            </div>
        </div>
        </div>
        <div class="modal-footer">
        <img src="{{ asset('images/logos/logo-oide.png') }}" alt="" class="img-fluid mx-auto d-block" width="250px">
        </div>
    </div>
    </div>
</div>
{{-- fin modal add doc --}}
    