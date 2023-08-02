<?php
include_once('layout.php');
?>

<style media="screen">
   .card-header-yellow{
     background-color: yellow;
   }
</style>

<div class="content">
<div class="container-fluid">

  <div class="row">
   <div class="col-lg-4  col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-default card-header-icon">
          <div class="card-icon">
            <i class="material-icons">folder</i>
          </div>
          <p class="card-category" style="color:black;">Nombre total de <br> requêtes soumises</p>
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

    <div class="col-lg-4  col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-success card-header-icon">
          <div class="card-icon">
            <i class="material-icons">folder</i>
          </div>
          <p class="card-category" style="color:black;">Nombre de requêtes <br> acceptées</p>
          <h3 class="card-title">1

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
          <h3 class="card-title">1

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

  <!-- <div class="col-md-12">
    <div class="card" style="margin-top:5px; height:380px;">
      <div class="card-header" style="background-color: #6495ED;">
        <h4 class="card-title" style="font-weight: bold; color:black;">Panel de recherche</h4>
        <button class="btn btn-sm btn-primary bts"><i class="material-icons">search</i></button>
      </div>
      <div class="card-body search">
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
                <option value="accompagnement">Accompagnement</option>
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
                <label class="bmd-label-floating">Financement recherché</label>
                <input type="text" class="form-control">
              </div>
            </div>
          </div>
          <button type="submit" class="btn  pull-right" style="background-color: #6495ED; color:black; font-weight:bold">rechercher</button>
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div> -->

  <div class="card" style="margin-top:20px;">
       <div class="card-header" style="background-color:#6495ED;">
        <h5 class="pull-center" style="color: black;font-weight:bold;">Liste des requêtes</h5>
        </div>
     <div class="card-body">
          <br>
         <div class="table-responsive">
           <a class="btn btn-warning btns  pull-center"><i class="material-icons" style="color:white;">search</i> <span style="color:white;">Rechercher</span></a>
           <a href="soumissionpro.php" class="btn  btn-warning pull-right"><i class="material-icons">edit</i> Créer une nouvelle requête</a>
           <br>
           <table class="table table-striped" id="dataTable">
             <thead style="color: #0080ff;font-weight:bold;">
               <th>
                 Date création
               </th>
               <th style="text-align:center;">
                Intitulé de la requête
               </th>
               <th style="text-align:center;">
                 Statut
               </th>
               <th style="text-align:center;">
                Date de Statut
               </th>
               <th style="text-align:center;">
                Institution
               </th>
               <th style="text-align:center;">
                Contact
               </th>

             </thead>
             <tbody>
               <tr>
                 <td>
                   14/03/2020
                 </td>
                 <td style="text-align:center;">
                  Culture et vente de poisson marin
                 </td>
                 <td style="text-align:center;" class="rep">A revoir</td>
                 <td style="text-align:center;">
                   14/05/2020
                 </td>
                 <td style="text-align:center;">
                  BNDE
                 </td>
                 <td style="text-align:center;">
                  Ibrahima Dieye
                 </td>
               </tr>

               <tr>
                 <td>
                   20/03/2020
                 </td>
                 <td style="text-align:center;">
                  Culture et vente de fruits et légumes
                 </td>
                 <td style="text-align:center;" class="rep">Accepté</td>
                 <td style="text-align:center;">
                   29/05/2020
                 </td>
                 <td style="text-align:center;">
                  BNDE
                 </td>
                 <td style="text-align:center;">
                  Ibrahima Dieye
                 </td>
               </tr>

             </tbody>
           </table>
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
                            <h5 class="modal-title" id="exampleModalLabel" style="color: black;font-weight:bold;"><i class="material-icons" style="color:white;">search</i>Panel de Recherche</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="pull-left">
                            <a href="experts.php">
                                <span style="color:blue;"><u>Prestataires</u></span></a>
                             </div>
                          </div>

                          <div class="col-md-6">
                            <div class="pull-right">
                            <a href="institutions.php">
                                <span style="color:blue;"><u>Institutions</u></span></a>
                             </div>
                          </div>

                          </div>

                       <div class="row">
                          <div class="col-md-3">
                              <div class="form-group">
                                <label class="bmd-label-floating" style="color:black;">Numéro requête</label>
                                <input type="text" class="form-control" name="" value="">
                              </div>
                          </div>

                          <div class="col-md-3">
                              <div class="form-group">
                                <label class="bmd-label-floating" style="color:black;">Numéro tiers</label>
                                <input type="text" class="form-control" name="" value="">
                              </div>
                          </div>

                          <div class="col-md-3">
                              <div class="form-group">
                                <label class="bmd-label-floating" style="color:black;">Sigle</label>
                                <input type="text" class="form-control" name="" value="">
                              </div>
                          </div>

                          <div class="col-md-3">
                            <div class="form-group">
                              <label class="bmd-label-floating" style="color:black;">Téléphone</label>
                              <input type="text" class="form-control" name="" value="">
                            </div>
                          </div>

                       </div>
                       <br>

                        <div class="row">
                          <div class="col-md-3">
                            <div class="form-group">
                              <label class="bmd-label-floating" style="color:black;">Nom et prénom</label>
                              <input type="text" class="form-control" name="" value="">
                            </div>
                          </div>

                          <div class="col-md-3">
                            <div class="form-group">
                              <label class="bmd-label-floating" style="color:black;">Dénomination</label>
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
                              <label class="bmd-label-floating" style="color:black;">Email</label>
                              <input type="email" class="form-control" name="" value="">
                            </div>
                          </div>

                        </div>

                        <div class="row">
                          <div class="col-md-4">
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

                          <div class="col-md-4">
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

                          <div class="col-md-4">
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
                          <div class="col-md-10">
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

                        <div class="row">
                          <div class="col-md-4">
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

                          <div class="col-md-4">
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

                          <div class="col-md-4">
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
                          <div class="col-md-5">

                          </div>
                          <div class="col-md-5">
                            <div class="form-group">
                            <label class="bmd-label-floating" style="color:black;">Précisez le type </label>
                            <input type="text" class="form-control">
                            </div>
                          </div>
                        </div>
                        <br>

                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label style="color:black;">Date soumission requête</label>
                            <input type="date" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label style="color:black;">Requêtes soumises entre</label>
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

<?php
include_once('footer.php');
?>

<script>
$('document').ready(function() {
   console.log('hello wordl !!!');
   $('.prec1').hide();
   $('.btns').on('click', function(event) {
       event.preventDefault();
       $('.myForm #exampleModal').modal()
   });

 $("tr").each(function(i) {
     var nada = $(this).find('.rep').text();
     console.log(($(this).find('.rep').text() === 'En attente'));
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

});
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
