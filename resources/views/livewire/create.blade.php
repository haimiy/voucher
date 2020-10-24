<div align="right">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createModal">Create</button>
</div>

<div wire:ignore.self id="createModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                    <form>
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel">Add Data</h4>
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">

                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name <span">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="first-name" wire:model="name" class="form-control ">
                         @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>

                     <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email <span>*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="first-name" wire:model="email" class="form-control ">
                         @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Password<span">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="last-name" wire:model="password" class="form-control">
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                  
                        </div>
                        <div class="modal-footer">
                    <button wire:click.prevent="store()" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                        </div>

                      </div>
                    </form>
                    </div>
</div>

