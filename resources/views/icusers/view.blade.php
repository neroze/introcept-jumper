<!-- Modal -->
<div class="modal fade" id="viewICUser" tabindex="-1" role="dialog" aria-labelledby="viewICUser">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">IC User Details</h4>
      </div>
      <div class="modal-body">
        <div class="row bg-info">
          <div class="col-md-9 col-md-push-3">@{{ user.name }}</div>
          <div class="col-md-3 col-md-pull-9">Name</div>
        </div>
        <div class="row bg-info">
          <div class="col-md-9 col-md-push-3">@{{ user.gender }}</div>
          <div class="col-md-3 col-md-pull-9">Gender</div>
        </div>
        <div class="row bg-info">
          <div class="col-md-9 col-md-push-3">@{{ user.email }}</div>
          <div class="col-md-3 col-md-pull-9">Email</div>        
        </div>
        <div class="row bg-info">
          <div class="col-md-9 col-md-push-3">@{{ user.phone }}</div>
          <div class="col-md-3 col-md-pull-9">Phone</div>
        </div>
        <div class="row bg-info">
          <div class="col-md-9 col-md-push-3">@{{ user.address }}</div>
          <div class="col-md-3 col-md-pull-9">Address</div>
        </div>
        <div class="row bg-info">
          <div class="col-md-9 col-md-push-3">@{{ user.nationality }}</div>
          <div class="col-md-3 col-md-pull-9">Nationality</div>        
        </div>
        <div class="row bg-info">
          <div class="col-md-9 col-md-push-3">@{{ user.dob }}</div>
          <div class="col-md-3 col-md-pull-9">DOB</div>
        </div>
        <div class="row bg-info">
          <div class="col-md-9 col-md-push-3">@{{ user.mode_of_contact }}</div>
          <div class="col-md-3 col-md-pull-9">Mode of Contact</div>
        </div>
        <div class="row bg-info">
          <div class="col-md-9 col-md-push-3">@{{ user.education_background }}</div>
          <div class="col-md-3 col-md-pull-9">Education Background</div>        
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Done</button>
      </div>
    </div>
  </div>
</div>