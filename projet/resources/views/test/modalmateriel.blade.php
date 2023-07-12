

<div id="materiel" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-body">
          <div class="card">
                <div class="card-header">
                    <h4>ajouter du matériel</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('saryupload.setting') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="">Nom materiel</label>
                            <input type="text" name="nom" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">description</label>
                            <textarea class="form-control" name="description" id="" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="">choisir images</label>
                            <input type="file" name="image" required class="course form-control">
                        </div>
                        <div class="mb-3">
                            <label for="type">type</label>
                            <select name="type" class="form-control">
                                <option value="">type</option>
                                <option value="musculation">musculation</option>
                                <option value="culturisme">culturisme</option>
                                <option value="course">course</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="annuler">
                            <button type="submit" class="btn btn-primary">enregister</button>
                        </div>

                    </form>

                </div>
            </div>
          </div>
          <div class="modal-footer">
          </div>
      </div>
    </div>
  </div>