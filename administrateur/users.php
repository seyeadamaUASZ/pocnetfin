<?php
include_once('header.php');
?>
<div class="content">
  <div class="container-fluid">
     <div class="col-md-12">
       <div class="card" style="margin-top:5px;">
         <div class="card-header" style="background-color: #6495ED;">
           <h4 class="card-title" style="color:black;font-weight:bold;">Panel de recherche</h4>
         </div>
         <div class="card-body">
           <form>
             <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating" style="color:black;">Numéro requête</label>
                      <input type="text" class="form-control" name="" value="">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating" style="color:black;">Numéro tiers</label>
                      <input type="text" class="form-control" name="" value="">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating" style="color:black;">Sigle</label>
                      <input type="text" class="form-control" name="" value="">
                    </div>
                </div>
             </div>
             <br>
             <div class="row">
               <div class="col-md-3">
                 <div class="form-group">
                   <label class="bmd-label-floating" style="color:black;">Nom et prénom</label>
                   <input type="text" class="form-control">
                 </div>
               </div>

               <div class="col-md-3">
                 <div class="form-group">
                   <label class="bmd-label-floating" style="color:black;">Organisation</label>
                   <input type="datetime" class="form-control">
                 </div>
               </div>

               <div class="col-md-3">
                 <div class="form-group">
                   <label class="bmd-label-floating" style="color:black;">Adresse</label>
                   <input type="text" class="form-control">
                 </div>
               </div>

               <div class="col-md-3">
                 <div class="form-group">
                   <label class="bmd-label-floating" style="color:black;">Téléphone</label>
                   <input type="text" class="form-control">
                 </div>
               </div>

              </div>

             <div class="row">
               <div class="col-md-3">
                 <div class="form-group">
                   <label class="bmd-label-floating" style="color:black;">Pays</label>
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

               <!--<div class="col-md-4">
                 <div class="form-group">
                   <label class="bmd-label-floating">Profil</label>
                   <select type="text" class="form-control">
                     <option value="administrateur">Administrateur</option>
                     <option value="Institution">Institution</option>
                     <option value="Prestataire">Prestataire</option>
                     <option value="Requérant particulier">Requérant particulier</option>
                     <option value="Requérant professionnel">Requérant professionnel</option>
                   </select>
                 </div>
               </div>-->

               <div class="col-md-3">
                 <div class="form-group">
                   <label class="bmd-label-floating" style="color:black;">Région</label>
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

               <div class="col-md-3">
                 <div class="form-group">
                   <label class="bmd-label-floating" style="color:black;">Ville</label>
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

               <div class="col-md-3">
                 <div class="form-group">
                   <label class="bmd-label-floating" style="color:black;">Commune</label>
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

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating" style="color:black;">Profil</label>
                    <select type="text" class="form-control">
                      <option value=""></option>
                      <option value="administrateur">Administrateur</option>
                      <option value="Institution">Institution</option>
                      <option value="Prestataire">Prestataire</option>
                      <option value="Requérant particulier">Requérant particulier</option>
                      <option value="Requérant professionnel">Requérant professionnel</option>
                    </select>
                  </div>
                </div>

              </div>

             <button type="submit" class="btn pull-right" style="background-color: #6495ED; color:black; font-weight:bold;">rechercher</button>
             <div class="clearfix"></div>
               </div>

           </form>
         </div>

         <div class="card">
              <div class="card-header" style="background-color: #6495ED;">
                <h4 class="card-title" style="color: black;font-weight:bold;">Liste des utilisateurs</h4>
                <button class="btn btn-warning nbtn pull-right" name="button">Ajouter compte</button>
              </div>
            <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped" id="dataTable">
                    <thead style="color:#87CEEB;font-weight:bold;">
                      <th>Login</th>
                      <th style="text-align:center;">Nom et prénom</th>
                      <th style="text-align:center;">Profil</th>
                      <th style="text-align:center;">Actif</th>
                      <th>Actions</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>FatouSow11</td>
                        <td style="text-align:center;">Sow Fatou</td>
                        <td style="text-align:center;">Requérant particulier</td>
                        <td></td>
                        <td class="td-actions">
                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>

                      <tr>
                        <td>Admin</td>
                        <td style="text-align:center;">Ndiaye François</td>
                        <td style="text-align:center;">Administrateur</td>
                        <td></td>
                        <td class="td-actions">
                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>


                    </tbody>
                  </table>
                </div>
              </div>
            </div>

     </div>
  </div>
</div>


<div class="myForm">
        <form action="" method="post">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#6495ED">
                            <!-- <img src="../static/images/logo.png" th:src="@{images/logo.png}" width="30" height="30"/> -->
                            <h5 class="modal-title" id="exampleModalLabel" style="color: black;font-weight:bold;"><i class="material-icons">person</i> Enregistrer un nouvel utilisateur </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                 <label class="bmd-label-floating" style="color:black;">Nom</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                 <label class="bmd-label-floating" style="color:black;">Prénom</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                 <label class="bmd-label-floating" style="color:black;">Organisation</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                 <label class="bmd-label-floating" style="color:black;">Login</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                 <label class="bmd-label-floating" style="color:black;">Adresse</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                 <label class="bmd-label-floating" style="color:black;">Téléphone</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                 <label class="bmd-label-floating" style="color:black;">Email</label>
                                 <input type="email" class="form-control" id="id" name="id" value="" required/>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label class="bmd-label-floating" style="color:black;">Profil</label>
                                  <select class="form-control" name="">
                                    <option value=""></option>
                                    <option value="administrateur">Administrateur</option>
                                    <option value="Institution">Institution</option>
                                    <option value="Prestataire">Prestataire</option>
                                    <option value="Requérant particulier">Requérant particulier</option>
                                    <option value="Requérant professionnel">Requérant professionnel</option>
                                  </select>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="bmd-label-floating" style="color:black;">Pays</label>
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

                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="bmd-label-floating" style="color:black;">Région</label>
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

                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="bmd-label-floating" style="color:black;">Ville</label>
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

                            <!--<div class="col-md-4">
                              <div class="form-group">
                                <label class="bmd-label-floating">Institutions</label> <sup>*</sup>
                                 <select class="form-control" name="" id="">

                                  <option value="BNDE">BNDE</option>
                                  <option value="CAURIE">CAURIE</option>
                                  <option value="BHS">BHS</option>
                                  <option value="ICF">ICF</option>

                                 </select>
                              </div>
                            </div>-->

                          </div>

                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="bmd-label-floating" style="color:black;">Commune</label>
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

                        <!--  <div class="row">
                            <div class="card">
                              <div class="card-header">
                                <h4>Les secteurs d'activité d'intervention</h4>
                              </div>
                              <div class="card-body">
                                <div class="table-responsive">
                                  <table class="table">
                                    <thead style="color:#87CEEB;font-weight:bold;">
                                      <th>Id</th>
                                      <th>Secteur d'activité</th>
                                      <th>Actions</th>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>1</td>
                                        <td>Agriculture, élevage, sylviculture et pêche</td>
                                        <td class="td-actions">
                                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                            <i class="material-icons">edit</i>
                                          </button>
                                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                            <i class="material-icons">close</i>
                                          </button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>2</td>
                                        <td>Activités extractives</td>
                                        <td class="td-actions">
                                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                            <i class="material-icons">edit</i>
                                          </button>
                                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                            <i class="material-icons">close</i>
                                          </button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>3</td>
                                        <td>Activité de fabrication</td>
                                        <td class="td-actions">
                                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                            <i class="material-icons">edit</i>
                                          </button>
                                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                            <i class="material-icons">close</i>
                                          </button>
                                        </td>
                                      </tr>

                                      <tr>
                                        <td>4</td>
                                        <td>Production et distribution d'électricité,de gaz,de vapeur et de climatisation</td>
                                        <td class="td-actions">
                                          <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                            <i class="material-icons">edit</i>
                                          </button>
                                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                            <i class="material-icons">close</i>
                                          </button>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>-->

                        </div>

                        <div class="modal-footer">
                            <input type="submit" value="Ajouter" class="btn btn-primary" style="background-color:#6495ED;"/>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

<?php
include_once('footer.php');
?>
<script>
$('document').ready(function(){
  $('.prec').hide();
  $('.nbtn').on('click',function(event){
        event.preventDefault();
        $('.myForm #exampleModal').modal()
    });
})

var currentli = 1;

showActivate(currentli);

function showActivate(n){
  var x = document.getElementsByClassName("active1");
  console.log(x[n]);
  x[n].style.backgroundColor="#6495ED";
}

function mychoice1(){
var x = document.getElementById("mySelect1").value;
console.log(x);
if(x==='autre'){
  $('.prec').show();
}
}
</script>
