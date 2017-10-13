<div class="row">
    <form class="col s12" id="form_confige">
      <div class="row">
        <div class="input-field col s12">
          <input placeholder='{{Lang::get("config.confige_name")}}' id="confige_name" type="text" class="validate">
          <label for="confige_name">{{Lang::get("config.confige_name")}}</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="confige_descri" class="materialize-textarea validate"></textarea>
          <label for="confige_descri">{{Lang::get("config.confige_descri")}}</label>
        </div>
      </div>
      <div class="row">
          <div class="col s12 right-align">
            <button class="btn waves-effect waves-light" type="submit">{{Lang::get("config.confige_save")}}
              <i class="fa fa-floppy-o" aria-hidden="true"></i>
            </button>
          </div>
      </div>
    </form>
</div>
