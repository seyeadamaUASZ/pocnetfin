<head>
  <style>
    span{
      font-size: 14px;
      font-weight: bold;
      font-family: sans-serif;
    }
  </style>
</head>

<?php
include_once('layout.php');
?>

<div class="content">
<div class="container-fluid">
  <div class="row">
   <div class="col-lg-4  col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-default card-header-icon">
          <div class="card-icon">
            <i class="material-icons">folder</i>
          </div>
          <p class="card-category" style="color:black;">Nombre total de <br> requêtes reçues</p>
          <h3 class="card-title">10

          </h3>
        </div>
        <div class="card-footer">
          <div class="stats">
            <!-- <i class="material-icons text-danger">warning</i> -->
            <!-- <a href="javascript:;">Get More Space...</a> -->
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4  col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-success card-header-icon">
          <div class="card-icon">
            <i class="material-icons">folder</i>
          </div>
          <p class="card-category" style="color:black;">Nombre de requêtes <br> acceptées</p>
          <h3 class="card-title">3

          </h3>
        </div>
        <div class="card-footer">
          <div class="stats">
            <!-- <i class="material-icons text-danger">warning</i> -->
            <!-- <a href="javascript:;">Get More Space...</a> -->
          </div>
        </div>
      </div>
    </div>


    <div class="col-lg-4  col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-warning card-header-icon">
          <div class="card-icon">
            <i class="material-icons">folder</i>
          </div>
          <p class="card-category" style="color:black;">Nombre de requêtes  <br> à revoir</p>
          <h3 class="card-title">2

          </h3>
        </div>
        <div class="card-footer">
          <div class="stats">
            <!-- <i class="material-icons text-danger">warning</i> -->
            <!-- <a href="javascript:;">Get More Space...</a> -->
          </div>
        </div>
      </div>
    </div>

   <div class="col-lg-2  col-md-6 col-sm-6">

   </div>

    <div class="col-lg-4  col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-info card-header-icon">
          <div class="card-icon">
            <i class="material-icons">folder</i>
          </div>
          <p class="card-category" style="color:black;">Nombre de requêtes <br> en cours</p>
          <h3 class="card-title">5

          </h3>
        </div>
        <div class="card-footer">
          <div class="stats">
            <!-- <i class="material-icons text-danger">warning</i> -->
            <!-- <a href="javascript:;">Get More Space...</a> -->
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-danger card-header-icon">
          <div class="card-icon">
            <i class="material-icons">folder</i>
          </div>
          <p class="card-category" style="color:black;">Nombre de requêtes <br> rejetées</p>
          <h3 class="card-title">0

          </h3>
        </div>
        <div class="card-footer">
          <div class="stats">
            <!-- <i class="material-icons text-danger">warning</i> -->
            <!-- <a href="javascript:;">Get More Space...</a> -->
          </div>
        </div>
      </div>
    </div>

  </div>

<!--  <div class="col-md-12">
    <div class="card" style="margin-top:5px;">
      <div class="card-header" style="background-color: #6495ED;">
        <h4 class="card-title" style="color: black; font-weight:bold;">Panel de recherche</h4>
      </div>
      <div class="card-body">
        <form>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label class="bmd-label-floating">Secteur d'activité</label>
                <select type="text" class="form-control">
                <option value="pêche">Pêche</option>
                <option value="agriculture">Agriculture</option>
                <option value="elevage">Elevage</option>

                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="bmd-label-floating">Nature besoin</label>
                <select type="text" class="form-control">
                <option value="financement">Financement</option>
                <option value="Accompagnement expert">Accompagnement expert</option>

                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label class="bmd-label-floating">pays où se situe l'activité</label>
                <input type="text" class="form-control">
              </div>
            </div>
            </div>

          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label>Date de soumission</label>
                <input type="date" class="form-control">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Requêtes soumises entre</label>
                <input type="date" class="form-control">
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <label>et le</label>
                <input type="date" class="form-control">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label class="bmd-label-floating">Besoin recherché</label>
                  <select class="form-control" name="">
                    <option value="0-50">0-50</option>
                    <option value="3000000FCFA">3000000FCFA</option>
                    <option value="5000000FCFA">5000000FCFA</option>
                    <option value="7000000FCFA">7000000FCFA</option>
                  </select>
              </div>
            </div>
          </div>


          <button type="submit" class="btn pull-right" style="background-color: #6495ED;color:black;font-weight:bold;">rechercher</button>
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>-->

  <div class="card" style="margin-top:40px;">
       <div class="card-header" style="background-color: #6495ED;">
           <h5 class="pull-center" style="color: black;font-weight:bold;">Liste des requêtes</h5>
       </div>
     <div class="card-body">
         <div class="table-responsive">
           <a class="btn btn-warning btns  pull-center"><i class="material-icons" style="color:white;">search</i> <span style="color:white;">Rechercher</span></a>
          <!-- <a href="soumission.php" class="btn  btn-warning pull-right"><i class="material-icons">edit</i> Créer une nouvelle requête</a>-->
              <br>
           <table class="table table-striped" id="dataTable">
             <thead style="color:#87CEEB; font-weight:bold;">
               <th>
                 Date
               </th>
               <th style="text-align:center;">
                 Intitulé requête
               </th>
               <th style="text-align:center;">
                 Secteur d'activités
               </th>
               <th style="text-align:center;">
                Besoin
               </th>
               <th style="text-align:center;">
                 Montant
               </th>
               <th style="text-align:center;">
               Statut
               </th>
               <th style="text-align:center;">
               Requérant
               </th>
               <th style="text-align:center;">
               Pays requérant
               </th>
               <th style="text-align:center;">
               Pays activité
               </th>

               <th>
               Options
               </th>
             </thead>
             <tbody>
               <tr>
                 <td>
                   14/03/2020
                 </td>
                 <td style="text-align:center;">
                  Culture vente de poissons marins
                 </td>
                 <td style="text-align:center;">
                   Pêche maritime
                 </td>
                 <td style="text-align:center;">
                   Garantie
                 </td>
                 <td style="text-align:center;">
                   20 à 30
                 </td>
                 <td style="text-align:center;" class="rep">A revoir</td>
                 <td style="text-align:center;">
                   Fatou Sow
                 </td>
                 <td style="text-align:center;">
                   Sénégal
                 </td>
                 <td style="text-align:center;">
                   Sénégal
                 </td>

                 <td>
                   <button class="btn-primary btn-just-icon bdt">
                     <i class="material-icons">edit</i>
                   </button>
                 </td>
               </tr>


               <tr>
                 <td>
                   20/03/2020
                 </td>
                 <td style="text-align:center;">
                  Culture et vente de légumes et fruits
                 </td>
                 <td style="text-align:center;">
                   Maraîchage
                 </td>
                 <td style="text-align:center;">
                   placement
                 </td>
                 <td style="text-align:center;">
                  30 à 50
                 </td>
                 <td style="text-align:center;" class="rep">Accepté</td>
                 <td style="text-align:center;">
                  Fatou Sow
                 </td>
                 <td style="text-align:center;">
                   Sénégal
                 </td>
                 <td style="text-align:center;">
                   Sénégal
                 </td>

                 <td>
                   <button class="btn-primary btn-just-icon bdt">
                     <i class="material-icons">edit</i>
                   </button>
                 </td>
               </tr>

             </tbody>
           </table>
         </div>
       </div>


       <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLab" aria-hidden="true">
             <div class="modal-dialog modal-lg" role="document">
                 <div class="modal-content">
                     <div class="modal-header" style="background-color:#6495ED">
                         <!-- <img src="../static/images/logo.png" th:src="@{images/logo.png}" width="30" height="30"/> -->
                         <h5 class="modal-title" id="exampleModalCenterTitle" style="color: black;font-weight:bold;"><i class="material-icons">arrow_right_alt</i> Affectation de requête</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <div class="modal-body">
                   <form class=""  method="post">
                      <!--<div class="row" style="background-color:green;">
                          <div class="col-md-3">
                            <div class="form-group">
                                <input type="radio" value="oui" name=""> Accord
                            </div>
                          </div>

                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Affecté pour traitement à</label>
                                <input type="text" name="">
                            </div>
                          </div>

                      </div>-->

                      <table>
                        <tr style="background-color:#90EE90;">
                          <!--<td><div class="form-group">
                              <input type="radio" value="oui" name=""> <span>Accord</span>
                          </div></td>-->
                          <!--<td></td>-->
                         <td> <span>Requête affectée pour traitement à</span></td>
                          <td>
                            <div class="form-group">
                                <input type="email"  placeholder="adresse email" name="" size="70">
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>Saisie Statut</td>
                          <td>
                            <div class="form-group">
                              <select class="form-control" name="">
                                <option value=""></option>
                                <option value="Accepté">Accepté</option>
                                <option value="A revoir">A revoir</option>
                                <option value="Rejeté">Rejetée</option>
                              </select>
                          </div>
                        </td>
                  </tr>
                      <tr>
                          <td style="background-color:yellow;">
                            <div class="form-group">
                                    <input type="radio" value="" name=""> <span>Reprise de requête à revoir</span>
                                </div>
                              </td>
                        </tr>
                      </table>
                      <span>Annotations:</span>
                      <div class="form-group">
                      <textarea name="name" rows="8"  cols="100"></textarea>
                      </div>
                   </form>
                   </div>
                     <div class="modal-footer">
                         <input type="submit"  class="btn btn-primary" name="" value="Envoyer" style="background-color: #6495ED;">
                         <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                     </div>
                 </div>

             </div>

         </div>


</div>


<div class="myForm">
        <form action="" method="post">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document" style="width:900px;">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#6495ED">
                            <!-- <img src="../static/images/logo.png" th:src="@{images/logo.png}" width="30" height="30"/> -->
                            <h5 class="modal-title" id="exampleModalLabel" style="color: black;font-weight:bold;"><i class="material-icons" style="color:white;">search</i>Panel de Recherche</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                      <div class="modal-body">
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
                          <div class="col-md-7">
                            <div class="form-group">
                              <label class="bmd-label-floating" style="color:black;">Secteur d'activité</label>
                              <select type="text" class="form-control">
                              <option value=""></option>
                              <option value="agriculture">Agriculture,&nbsp;élevage,&nbsp;sylviculture et pêche</option>
                              <option value="elevage">Activités extractives</option>
                              <option value="peche">Activité de fabrication</option>
                              <option value="biens et services">Production et distribution d'électricité,de gaz,de vapeur et de climatisation</option>
                              <option value="distribution">Distribution d’eau; réseau d’assainissement; gestion des déchets et remise en état</option>
                              <option value="construction">Construction</option>
                              <option value="commerce">Commerce de gros et de détail, réparation de véhicules automobiles et de motocycles</option>
                              <option value="transport">Transport et entreposage</option>
                              <option value="activite hebergement">Activités d’hébergement et de restauration </option>
                              <option value="information et com">Information et communication </option>
                              <option value="activite finan">Activités financières et d’assurances</option>
                              <option value="activite immo">Activités immobilières</option>
                              <option value="activite prof">Activités professionnelles, scientifiques et techniques </option>
                              </select>
                            </div>
                          </div>

                          <div class="col-md-5">
                            <div class="form-group">
                              <label class="bmd-label-floating" style="color:black;">Pays où se situe le besoin</label>
                               <select class="form-control" name="">
                                 <option value=""></option>
                                 <option value="Benin">Bénin</option>
                                 <option value="Burkina Faso">Burkina Faso</option>
                                 <option value="cote ivoire">Côte d'Ivoire</option>
                                 <option value="Guinee Bissau">Guinée Bissau</option>
                                 <option value="Mali">Mali</option>
                                 <option value="Niger">Niger</option>
                                 <option value="Nigeria">Nigéria</option>
                                 <option value="Sénégal">Sénégal</option>
                                 <option value="Togo">Togo</option>
                              </select>
                            </div>
                          </div>
                        <!--  <div class="col-md-4">
                            <div class="form-group">
                              <label class="bmd-label-floating">Nature besoin</label>
                              <select type="text" class="form-control">
                              <option value="fonds de roulement">Fonds de Roulement</option>
                              <option value="credit consommation">credit consommation</option>
                              <option value="credit immobilier">credit immobilier</option>
                              <option value="epargne">Epargne</option>
                              <option value="Garantie">Garantie</option>
                              <option value="Locationduree">Location longue durée</option>
                              <option value="ouverturecompte">Ouverture compte placement</option>
                              </select>
                            </div>
                          </div>-->

                        </div>

                        <br>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label style="color:black;">Date réception requête</label>
                              <input type="date" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label style="color:black;">Requêtes reçues entre</label>
                              <input type="date" class="form-control">
                            </div>
                          </div>

                          <div class="col-md-4">
                            <div class="form-group">
                              <label style="color:black;">Et le</label>
                              <input type="date" class="form-control">
                            </div>
                          </div>
                       </div>


                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="bmd-label-floating" style="color:black;">Type de besoin</label>
                              <select id="mySelect1" class="form-control" name="" onchange="choice2()">
                                <option value=""></option>
                                <option value="credit consommation">Crédit bail</option>
                                <option value="credit consommation">Crédit consommation</option>
                                <option value="credit immobilier">Crédit immobilier</option>
                                <option value="credit immobilier">Crédit d'investissement</option>
                                <option value="epargne">Epargne</option>
                                <option value="fonds de roulement">Fonds de roulement</option>
                                <option value="credit immobilier">Fonds propres</option>
                                <option value="Garantie">Garantie</option>
                                <option value="Locationduree">Location longue durée</option>
                                <option value="ouverturecompte">Ouverture compte placement</option>
                                <option value="credit immobilier">Placement</option>
                                <option value="autre">Autres (précisez)</option>
                              </select>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="bmd-label-floating" style="color:black;">Niveau d'intervention (millions)?</label>
                              <select type="text" class="form-control">
                              <option value=""></option>
                              <option value="0-20">0-20</option>
                              <option value="20-50">20-50</option>
                              <option value="50-200">50-200</option>
                              <option value="200-500">200-500</option>
                              <option value="500-1000">500-1000</option>
                              <option value="1000-5000">1000-5000</option>
                              <option value="5000-20000">5000-20000</option>
                              <option value="plus de 20000">plus de 20000</option>
                              </select>
                            </div>
                          </div>

                        </div>

                         <br>
                        <div class="row prec1">
                          <div class="col-md-6">
                            <div class="form-group">
                            <label class="bmd-label-floating" style="color:black;">Précisez le type </label>
                            <input type="text" class="form-control">
                            </div>
                          </div>
                        </div>
                </div>
              <div class="modal-footer">
                <input type="submit" value="Rechercher" class="btn btn-primary" style="background-color: #6495ED;"/>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
              </div>
          </div>
      </div>
      </div>
  </form>
</div>

</div>

<?php
include_once('footer.php');
?>
<script>
$('document').ready(function(){
  $('.prec1').hide();
  $('.bdt').on('click',function(event){
       event.preventDefault();
       var href = $(this).attr('href');
       $('#myModal #delRef').attr('href',href);
       $('#myModal').modal();
   });

   $('.btns').on('click', function(event) {
       event.preventDefault();
       $('.myForm #exampleModal').modal()
   });

   $("tr").each(function(i) {
       var nada = $(this).find('.rep').text();
       //console.log(nada);
       console.log($(this).find('.rep').text())
       if ($(this).find('.rep').text() === 'A revoir') {
        $(this).find('.rep').css('background-color', '#FFA500');
       }
       if ($(this).find('.rep').text() === 'Accepté') {
       $(this).find('.rep').css('background-color', '#32CD32');
       }
       if ($(this).find('.rep').text() === 'Rejeté') {
       $(this).find('.rep').css('background-color', 'red');

       }
      $(this).find('.rep').css('color', 'black');
      $(this).find('.rep').css('font-weight', 'bold');
      $(this).find('.rep').css('font-size', '16px');
   });
})

var currentli = 0;

showActivate(currentli);

function showActivate(n){
  var x = document.getElementsByClassName("active1");
  console.log(x[n]);
  x[n].style.backgroundColor="#6495ED";
}

function choice2(){
  var x = document.getElementById("mySelect1").value;
  console.log(x);
  if(x==='autre'){
    $('.prec1').show();
  }
}

</script>
