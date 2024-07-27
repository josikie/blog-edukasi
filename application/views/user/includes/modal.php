<form>
  <!-- Large Modal -->
  <div class="modal fade" id="largeModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">New Post</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="p-3">
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="title">
            </div>
          </div>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-8">
              <select id="category" class="rounded-1" name="category">
                <option value="Makanan">Makanan</option>
                <option value="Minuman">Minuman</option>
                <option value="Camilan">Camilan</option>
              </select>
            </div>
          </div>
        </div>
        <div class="modal-body">
          <!-- TinyMCE Editor -->
          <textarea class="tinymce-editor">
                <p>Hello World!</p>
                <p>This is TinyMCE <strong>full</strong> editor</p>
              </textarea><!-- End TinyMCE Editor -->

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</form>
<!-- End Large Modal-->