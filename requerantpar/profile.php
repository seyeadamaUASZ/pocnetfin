<?php
include('layout.php');
?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header" style="background-color: #6495ED;">
            <h4 class="card-title">Editer mes informations</h4>

          </div>
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                     <label class="bmd-label-floating">Nom et prénom</label>
                     <input type="text" class="form-control" id="id" name="id" value="Momar NDIAYE" required/>
                 </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                     <label class="bmd-label-floating">Login</label>
                     <input type="text" class="form-control" id="id" name="id" value="momar123" required/>
                 </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                     <label class="bmd-label-floating">Adresse</label>
                     <input type="text" class="form-control" id="id" name="id" value="Thiès" required/>
                  </div>
                </div>

              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                      <label class="bmd-label-floating">Profil</label>
                      <select class="form-control" name="">
                        <option value="Requérant particulier">Requérant particulier</option>
                      </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                     <label class="bmd-label-floating">Téléphone</label>
                     <input type="text" class="form-control" id="id" name="id" value="778098989" required/>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                     <label class="bmd-label-floating">Email</label>
                     <input type="email" class="form-control" id="id" name="id" value="momarndiaye@gmail.com" required/>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Pays</label>
                    <select type="text" class="form-control">
                      <option value=""></option>
                      <option value="Bénin">Bénin</option>
                      <option value="Burkina Faso">Burkina Faso</option>
                      <option value="Côte d'ivoire">Côte d'ivoire</option>
                      <option value="Guinée Bissau">Guinée Bissau</option>
                      <option value="Mali">Mali</option>
                      <option value="Niger">Niger</option>
                      <option value="Nigeria">Nigéria</option>
                      <option value="Sénégal">Sénégal</option>
                      <option value="Togo">Togo</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Région</label>
                    <select type="text" class="form-control">
                      <option value=""></option>
                      <option value="Dakar">Dakar</option>
                      <option value="Diourbel">Diourbel</option>
                      <option value="Fatick">Fatick</option>
                      <option value="Kaolack">Kaolack</option>
                      <option value="Kaffrine">Kaffrine</option>
                      <option value="Kédougou">Kédougou</option>
                      <option value="Kolda">Kolda</option>
                      <option value="Louga">Louga</option>
                      <option value="Matam">Matam</option>
                      <option value="Sédhiou">Sédhiou</option>
                      <option value="Saint Louis">Saint Louis</option>
                      <option value="Tambacounda">Tambacounda</option>
                      <option value="Thiès">Thiès</option>
                      <option value="Ziguinchor">Ziguinchor</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Ville</label>
                    <select type="text" class="form-control">
                      <option value=""></option>
                      <option value="Dakar">Dakar</option>
                      <option value="Diourbel">Diourbel</option>
                      <option value="Fatick">Fatick</option>
                      <option value="Kaolack">Kaolack</option>
                      <option value="Kaffrine">Kaffrine</option>
                      <option value="Kédougou">Kédougou</option>
                      <option value="Kolda">Kolda</option>
                      <option value="Louga">Louga</option>
                      <option value="Matam">Matam</option>
                      <option value="Sédhiou">Sédhiou</option>
                      <option value="Saint Louis">Saint Louis</option>
                      <option value="Tambacounda">Tambacounda</option>
                      <option value="Thiès">Thiès</option>
                      <option value="Ziguinchor">Ziguinchor</option>
                    </select>
                  </div>
                </div>
              </div>

              <button type="submit" class="btn btn-primary pull-right" style="background-color: #6495ED;">Modifier</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-avatar">
            <a href="javascript:;">
              <img class="img" src="../assets/images/user.png" />
            </a>
          </div>
          <div class="card-body">
            <h6 class="card-category text-gray">Numéro: RQ001PART1</h6>
            <h4 class="card-title">Momar NDIAYE</h4>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include('footer.php')
?>

<script type="text/javascript">
var currentli = 1;

  showActivate(currentli);

  function showActivate(n){
    var x = document.getElementsByClassName("active1");
    console.log(x[n]);
    x[n].style.backgroundColor="#6495ED";
  }
</script>
