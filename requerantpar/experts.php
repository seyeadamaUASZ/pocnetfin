<?php
include_once('layout.php');
?>
<div class="content">
  <div class="container-fluid">

    <div class="col-md-12">

      <div class="card" style="margin-top:5px;">
        <div class="card-header" style="background-color:#6495ED ;">
          <h4 class="card-title" style="color:black; font-weight:bold;">Panel de recherche</h4>
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
                  <label class="bmd-label-floating" style="color:black;">Dénomination/Nom et Prénom</label>
                  <input type="text" class="form-control">
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
                  <label class="bmd-label-floating" style="color:black;">Email</label>
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

                  <select class="form-control" name="">
                    <option value=""></option>
                    <option value="Bénin">Bénin</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Côte d'ivoire">Côte d'ivoire</option>
                    <option value="Guinee Bissau">Guinée Bissau</option>
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
                  <!-- <option value="evaluateurs">Evaluateurs</option>
                  <option value="société">Sociétés expertises</option> -->

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
                  <!-- <option value="evaluateurs">Evaluateurs</option>
                  <option value="société">Sociétés expertises</option> -->

                </div>
              </div>
            </div>

            <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                  <label class="bmd-label-floating" style="color:black;">Type prestataire</label>
                  <select id="mySelect1" type="text" class="form-control" onchange="mychoice1()">
                  <option value=""></option>
                  <option value="compagnie assurance">Compagnie d'assurance</option>
                  <option value="compagnie assurance">Société de courtage/conseil en assurance</option>
                  <option value="compagnie assurance">Facilitateurs(consultant/cabinet en accompagnement et montage de dossiers)/experts/évaluateurs</option>
                  <option value="compagnie assurance">Notaires</option>
                  <option value="compagnie assurance">Avocats</option>
                  <option value="autre">Autres(précisez)</option>
                  <!-- <option value="evaluateurs">Evaluateurs</option>
                  <option value="société">Sociétés expertises</option> -->
                  </select>
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label class="bmd-label-floating" style="color:black;">Catégorie de prestataire</label>
                  <select type="text" class="form-control">
                  <option value=""></option>
                  <option value="facilitateurs">Facilitateurs</option>
                  <option value="experts">Experts</option>
                  <option value="evaluateurs">Evaluateurs</option>
                  <option value="societe expertise">Société expertise</option>

                  <!-- <option value="evaluateurs">Evaluateurs</option>
                  <option value="société">Sociétés expertises</option> -->
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3 prec">
              <div class="form-group">
                 <label class="bmd-label-floating" style="color:black;">Précisez le type de prestataire</label>
                 <input type="text" class="form-control">
               </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3">

              </div>
              <div class="col-md-3">

              </div>
              <div class="col-md-3">

              </div>

            </div>
            <button type="submit" class="btn  pull-right search" style="background-color: #6495ED; color:black;font-weight:bold;">rechercher</button>
            <div class="clearfix"></div>
              </div>

          </form>
        </div>

        <div class="card">
             <div class="card-header"  style="background-color: #6495ED;">
               <h4 class="card-title" style="font-weight:bold; color:black;">Liste des prestataires correspondant à votre recherche</h4>
             </div>
           <div class="card-body">
               <div class="table-responsive presta">
                 <table class="table table-striped" id="dataTable">
                   <thead style="color: #0080ff;font-weight:bold;">
                    <th></th>
                     <th>Prestataire</th>
                     <th style="text-align:center;">Pays</th>
                     <th style="text-align:center;">Adresse</th>
                     <th style="text-align:center;">Nom et prénom Contact</th>
                     <th style="text-align:center;">Téléphone contact</th>
                     <th style="text-align:center;">Email</th>
                     <th>Détail</th>
                   </thead>
                   <tbody>
                    <tr>
                     <td><input type="checkbox" name="" id="fich"></td>
                       <td>IDM Conseils</td>
                       <td style="text-align:center;">Sénégal</td>
                       <td style="text-align:center;">12 rue point E près de orbus</td>
                       <td style="text-align:center;">Diop Moustapha</td>

                       <td style="text-align:center;">3389987890</td>
                       <td style="text-align:center;">contact@idm.com</td>
                       <!-- <td></td> -->
                       <td> <button class="btn btn-default btn-just-icon bdt">
                          <i class="material-icons">content_paste</i>
                        </button></td>
                     </tr>

                     <tr>
                       <td><input type="checkbox" name="" id="fich"></td>
                       <td>Agence d'appui au financement</td>
                       <td style="text-align:center;">Sénégal</td>
                       <td style="text-align:center;">Immeuble Mboup, Bureau 102, VDN, Dakar</td>
                       <td style="text-align:center;">Diop David</td>
                       <td style="text-align:center;">338789008</td>
                       <td style="text-align:center;">contact@appui.com</td>
                       <td> <button class="btn btn-default btn-just-icon bdt">
                          <i class="material-icons">content_paste</i>
                        </button></td>
                     </tr>


                     <tr>
                       <td><input type="checkbox" name="" id="fich"></td>
                       <td>Omar Niang</td>
                       <td style="text-align:center;">Sénégal</td>
                       <td style="text-align:center;">Km 16,rte de Rufisque,villa n°40,BP:7510</td>
                       <td style="text-align:center;">Niang Omar</td>
                       <td style="text-align:center;">338345290/776557005/338426933</td>
                       <td style="text-align:center;">cean@orange.sn</td>
                       <td> <button class="btn btn-default btn-just-icon bdt">
                          <i class="material-icons">content_paste</i>
                        </button></td>
                     </tr>


                   </tbody>
                 </table>
               </div>


               <div class="table-responsive presta2">
                 <table class="table table-striped" id="dataTable1">
                   <thead style="color: #0080ff;font-weight:bold; text-align:center;">
                     <th></th>
                     <th>Prestataire</th>
                     <th>Pays</th>
                     <th>Adresse</th>
                     <th>Nom et prénom Contact</th>
                     <th>Tel contact</th>
                     <th>Email</th>
                     <th>Site</th>
                    <th>Détail</th>
                   </thead>
                   <tbody>
                     <tr>
                       <td><input type="checkbox" name="" id="fich"></td>
                       <td>Allianze Sénégal Assurance</td>
                       <td>Sénégal</td>
                       <td>Immeuble Mboup, Bureau 102, VDN, Dakar</td>
                       <td>Diop Moustapha</td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td> <button class="btn btn-default btn-just-icon bdt">
                          <i class="material-icons">content_paste</i>
                        </button></td>
                     </tr>

                     <tr>
                       <td><input type="checkbox" name="" id="fich"></td>
                       <td>SONAM/société nationale d'assurances mutuelles</td>
                       <td>Sénégal</td>
                       <td>4ème étage immeuble Faye Sall</td>
                       <td>FALL Cheikh</td>

                       <td></td>
                       <td></td>
                       <td></td>
                       <td> <button class="btn btn-default btn-just-icon bdt">
                          <i class="material-icons">content_paste</i>
                        </button></td>
                     </tr>
                   </tbody>
                 </table>
               </div>



             </div>
           </div>

      </div>
    </div>


  </div>

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLab" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#6495ED;">
                    <!-- <img src="../static/images/logo.png" th:src="@{images/logo.png}" width="30" height="30"/> -->
                    <h5 class="modal-title" id="exampleModalCenterTitle" style="color: black; font-weight:bold;">Détail sur les domaines d'intervention</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                  <table class="table table-striped">
                    <thead style="color:#0080ff;font-weight:bold;">
                      <th>Domaine d'intervention</th>
                      <th>Depuis</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Montage dossier de financement</td>
                        <td>2000</td>
                      </tr>

                      <tr>
                        <td>Conseil en assurance</td>
                        <td>1995</td>
                      </tr>

                      <tr>
                        <td>Réalisation plan d’affaires</td>
                        <td>2010</td>
                      </tr>

                      <tr>
                        <td>Réalisation d’études de marchés</td>
                        <td>2010</td>
                      </tr>

                    </tbody>
                  </table>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                </div>
            </div>

        </div>

    </div>

</div>

<?php
include_once('footer.php');
?>
<script>
  $('document').ready(function(){
    $('.prec').hide();
    console.log('hello world');
    $('.presta2').hide();
    $('.bdt').on('click',function(event){
         event.preventDefault();
         var href = $(this).attr('href');
         $('#myModal #delRef').attr('href',href);
         $('#myModal').modal();
     });
     $('.search').on('click',function(event){
       event.preventDefault();
       console.log("presta 2")
       $('.presta2').show();
       $('.presta').hide();
       $('#dataTable1').DataTable();
     })
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
</script>
