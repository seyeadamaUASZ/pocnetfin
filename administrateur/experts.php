<?php
include_once('header.php');
?>
<div class="content">
  <div class="container-fluid">

    <div class="col-md-12">
      <div class="card" style="margin-top:5px;">
        <div class="card-header" style="background-color: #6495ED;">
          <h4 class="card-title" style="color: black;font-weight:bold;">Panel de recherche</h4>
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
                   <label class="bmd-label-floating" style="color:black;">Dénomination/Nom et prénom du prestataire</label>
                   <input type="text" class="form-control" name="" value="">
                 </div>
               </div>


               <div class="col-md-3">
                 <div class="form-group">
                   <label class="bmd-label-floating" style="color:black;">Adresse</label>
                   <input type="text" class="form-control" name="" value="">
                 </div>
               </div>

               <div class="col-md-3">
                 <div class="form-group">
                   <label class="bmd-label-floating" style="color:black;">Téléphone</label>
                   <input type="text" class="form-control" name="" value="">
                 </div>
               </div>

               <div class="col-md-3">
                 <div class="form-group">
                   <label class="bmd-label-floating" style="color:black;">Email</label>
                   <input type="email" class="form-control" name="" value="">
                 </div>
               </div>

             </div>
             <br>

            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label class="bmd-label-floating" style="color:black;">Pays</label>

                  <select class="form-control" name="">
                    <option value=""></option>
                    <option value="Bénin">Bénin</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Côte d'ivoire">Côte d'ivoire</option>
                    <option value="Guinée Bissau">Guinée Bissau</option>
                    <option value="Mali">Mali</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigéria">Nigéria</option>
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
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating" style="color:black;">Type prestataire</label>
                  <select id="mySelect1" type="text" class="form-control" onchange="mychoice1()">
                   <option value=""></option>
                   <option value="Compagnie assurance">Compagnie assurance</option>
                   <option value="Sociétés de courtage/Conseils en assurance">Sociétés de courtage / Conseils en assurance </option>
                   <option value="Facilitateurs (Consultants/Cabinets en accompagnement et montage de dossiers/Experts financiers)">Facilitateurs (Consultants/Cabinets en accompagnement et montage de dossiers/Experts financiers)</option>
                   <option value="Experts/Évaluateurs">Experts/Évaluateurs</option>
                   <option value="Notaires">Notaires</option>
                   <option value="Avocats">Avocats</option>
                   <option value="autre">Autre (précisez)</option>
                  </select>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating" style="color:black;">Catégorie prestataire</label>
                   <select class="form-control" name="">
                     <option value=""></option>
                     <option value="Facilitateurs">Facilitateurs</option>
                     <option value="Experts/Évaluateurs">Experts/Évaluateurs</option>
                     <option value="Sociétés expertises">Sociétés expertises</option>
                   </select>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating" style="color:black;">Domaine d'intervention</label>
                   <select class="form-control" name="">
                     <option value=""></option>
                     <option value="Montage dossier de financement">Montage dossier de financement</option>
                     <option value="Conseil en assurance">Conseil en assurance</option>
                     <option value="Réalisation plan d'affaire">Réalisation plan d'affaire</option>
                     <option value="Réalisation d'étude de marchés">Réalisation d'étude de marchés</option>
                   </select>
                </div>
              </div>
             </div>
             <br>

             <div class="row">
               <div class="col-md-3 prec">
               <div class="form-group">
                  <label class="bmd-label-floating" style="color:black;">Précisez le type</label>
                  <input type="text" class="form-control">
                </div>
               </div>
             </div>

            <button type="submit" class="btn pull-right" style="background-color: #6495ED;color:black;font-weight:bold;">rechercher</button>
            <div class="clearfix"></div>
              </div>

          </form>
        </div>

        <div class="card">
             <div class="card-header" style="background-color: #6495ED;">
               <h4 class="card-title" style="color: black; font-weight:bold;">Prestataires</h4>
               <button class="btn btn-warning nbtn pull-right" name="button"><i class="material-icons">add</i> Ajouter</button>
             </div>
           <div class="card-body">
               <div class="table-responsive">
                 <table class="table table-striped" id="dataTable">
                   <thead style="color: #87CEEB;font-weight:bold;">
                     <th>Sigle</th>
                     <th style="text-align:center;">Dénomination</th>
                     <th style="text-align:center;">Nom et prénom contact</th>
                     <th style="text-align:center;">Adresse</th>
                     <th style="text-align:center;">Téléphone</th>
                     <th style="text-align:center;">Email</th>
                     <th style="text-align:center;">Pays</th>
                     <th>Actions</th>
                   </thead>
                   <tbody>


                     <tr>
                       <td>AAF</td>
                       <td style="text-align:center;">Agence d’appui aux financement</td>
                       <td style="text-align:center;">FALL Cheikh</td>
                       <td style="text-align:center;">4ème étage immeuble Fayçal</td>
                       <td style="text-align:center;">33 857 56 87</td>
                       <td style="text-align:center;">contact@fall.sn</td>
                       <td style="text-align:center;">Sénégal</td>
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
                       <td>IDACO</td>
                       <td style="text-align:center;">IDACO SARL</td>
                       <td style="text-align:center;">Manga Dieudonne</td>
                       <td style="text-align:center;">4 blv independance</td>
                       <td style="text-align:center;">33 857 10 87</td>
                       <td style="text-align:center;">contact@Manga.sn</td>
                       <td style="text-align:center;">Sénégal</td>
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
                       <td>IDM</td>
                       <td style="text-align:center;">IDM</td>
                       <td style="text-align:center;">Diop Moustapha</td>
                       <td style="text-align:center;">12 Rue avenue Bourguiba tel:55O4OO33</td>
                       <td style="text-align:center;">33 657 56 87</td>
                       <td style="text-align:center;">contact@diop.sn</td>
                       <td style="text-align:center;">Sénégal</td>
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

</div>


<div class="myForm">
        <form action="" method="post">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#6495ED">
                            <!-- <img src="../static/images/logo.png" th:src="@{images/logo.png}" width="30" height="30"/> -->
                            <h5 class="modal-title" id="exampleModalLabel" style="color: black;font-weight:bold;"><i class="material-icons">supervisor_account</i> Enregistrer un nouveau prestataire</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                 <label class="bmd-label-floating" style="color:black;">Sigle</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                 <label class="bmd-label-floating" style="color:black;">Dénomination</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                 <label class="bmd-label-floating" style="color:black;">Site web</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>
                          </div>
                          <br>

                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                 <label class="bmd-label-floating" style="color:black;">Nom et prénom contact</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                 <label class="bmd-label-floating" style="color:black;">Adresse</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                 <label class="bmd-label-floating" style="color:black;">Tel contact</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                 <label class="bmd-label-floating" style="color:black;">Email contact</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
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
                                  <option value="Nigéria">Nigéria</option>
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

                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="bmd-label-floating" style="color:black;">Type prestataire</label>
                                <select id="mySelect3" type="text" class="form-control" onchange="mychoice3()">
                                 <option value=""></option>
                                 <option value="Compagnie assurance">Compagnie assurance</option>
                                 <option value="Sociétés de courtage/Conseils en assurance">Sociétés de courtage / Conseils en assurance </option>
                                 <option value="Facilitateurs (Consultants/Cabinets en accompagnement et montage de dossiers/Experts financiers)">Facilitateurs (Consultants/Cabinets en accompagnement et montage de dossiers/Experts financiers)</option>
                                 <option value="Experts/Évaluateurs">Experts/Évaluateurs</option>
                                 <option value="Notaires">Notaires</option>
                                 <option value="Avocats">Avocats</option>
                                 <option value="autre">Autre (précisez)</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="bmd-label-floating" style="color:black;">Catégorie prestataire</label>
                                 <select class="form-control" name="">
                                   <option value=""></option>
                                   <option value="Facilitateurs">Facilitateurs</option>
                                   <option value="Experts/Évaluateurs">Experts/Évaluateurs</option>
                                   <option value="Sociétés expertises">Sociétés expertises</option>
                                 </select>
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="bmd-label-floating" style="color:black;">Domaine d'intervention</label>
                                <select type="text" class="form-control">
                                  <option value=""></option>
                                  <option value="Montage dossier de financement">Montage dossier de financement</option>
                                  <option value="Conseil en assurance">Conseil en assurance</option>
                                  <option value="Réalisation plan d'affaire">Réalisation plan d'affaire</option>
                                  <option value="Réalisation d'étude de marchés">Réalisation d'étude de marchés</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 prec3">
                            <div class="form-group">
                               <label class="bmd-label-floating" style="color:black;">Précisez le type</label>
                               <input type="text" class="form-control">
                             </div>
                            </div>
                          </div>



                        <div class="modal-footer">
                            <input type="submit" value="Ajouter" class="btn btn-primary" style="background-color:#6495ED"/>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!--<div class="row">
      <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead style="color:#87CEEB;font-weight:bold;">
                <th>Domaine d’intervention</th>
                <th>Depuis</th>
                <th>Actions</th>
              </thead>
              <tbody>
                <tr>
                  <td>Montage dossier de financement</td>
                  <td>2000</td>
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
                  <td>Conseil en assurance</td>
                  <td>1995</td>
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
                  <td>Réalisation plan d’affaires</td>
                  <td>2010</td>
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
                  <td>Réalisation d’études de marchés</td>
                  <td>2010</td>
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

<?php
include_once('footer.php');
?>
<script>
$('document').ready(function(){
  $('.prec').hide();
  $('.prec3').hide();
  $('.nbtn').on('click',function(event){
        event.preventDefault();
        $('.myForm #exampleModal').modal()
    });
})

var currentli = 3;

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
function mychoice3(){
  var x = document.getElementById("mySelect3").value;
  console.log(x);
  if(x==='autre'){
    $('.prec3').show();
  }
}
</script>
