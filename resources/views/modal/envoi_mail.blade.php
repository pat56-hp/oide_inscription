{{-- modal envoi mail --}}
<div class="modal fade addmail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" style="margin-left:100px;color:#3c8dbc">&nbsp;<strong>FORMULAIRE DE VALIDATION DE L'INSCRIPTION</strong></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
            <div class="row">
                <!-- Forms-1 -->
                <div class="outer-w3-agile col-xl mt-3 mr-xl-3">
                  <form role="form" action="{{route('envoi.mail')}}" method="post" enctype="multipart/form-data" id="edit-inscrit-form">
                    @csrf
                    <input type="hidden" name="cid">
                    <strong style="float: left"> Veuillez valider l'inscription de </strong>&nbsp;<strong class="card-title civiliteinscrit" style="color:#1e73be"></strong>&nbsp;<strong class="card-title nominscrit" style="color:#FFD700"></strong>&nbsp;<strong class="card-title prenominscrit" style="color:#FFD700"></strong>
                      <button type="submit" type="button" id="submitButton" class="btn btn-primary" style="float:right;">ENVOYEZ MAIL</button>
                      <div id="loadingIndicator" style="display:none;">
                          <!-- Vous pouvez utiliser une image, un gif ou un texte -->
                          <p><img src="{{asset('images/gif/loading-3692_256.gif')}}" alt=""> En cours d'envoi...</p>
                      </div>
                  </form>
                </div>
              </div>
            </div>

      <div class="modal-footer">
        <img src="{{asset('images/logos/logo-oide.png')}}" alt="" width="250px">
      </div>
      </div>
    </div>
  </div>
</div>
{{-- finmodal  add doc--}}
