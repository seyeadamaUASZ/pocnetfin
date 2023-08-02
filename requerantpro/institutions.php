
<?php
include_once('layout.php');
?>


<div class="content">
  <div class="container-fluid">

    <div class="col-md-12">
      <div class="card" style="margin-top:5px; height:750px;">
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
                  <label class="bmd-label-floating" style="color:black;">Nom institution</label>
                  <input type="text" class="form-control">
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label class="bmd-label-floating" style="color:black;">Nom personne ressource</label>
                  <input type="text" class="form-control">
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label class="bmd-label-floating" style="color:black;">Prénom personne ressource</label>
                  <input type="text" class="form-control">
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label class="bmd-label-floating" style="color:black;">Adresse</label>
                  <input type="text" class="form-control">
                </div>
              </div>

             </div>

             <div class="row">
               <div class="col-md-6">
                 <div class="form-group">
                   <label class="bmd-label-floating" style="color:black;">Email</label>
                   <input type="email" class="form-control">
                 </div>
               </div>

               <div class="col-md-6">
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
                    <option value="Burkina Faso">Côte d'ivoire</option>
                    <option value="Guinee Bissau">Guinée Bissau</option>
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

                  <select class="form-control" name="">
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

                  <select class="form-control" name="">
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

                  <select class="form-control" name="">
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
                   <label class="bmd-label-floating" style="color:black;">Type institution</label>
                   <select id="mySelect1"  type="text" class="form-control" onchange="mychoice1()">
                   <option value=""></option>
                   <option value="financement">Banque Agricole</option>
                   <option value="accompagnement">Banque commerciale</option>
                   <option value="accompagnement">Banque de l'habitat</option>
                   <option value="accompagnement">Banque d'investissement</option>
                   <option value="accompagnement">Etablissement financier</option>
                   <option value="accompagnement">Fonds d'investissement</option>
                   <option value="accompagnement">Fonds/sociétés de garantie</option>
                   <option value="accompagnement">Institution de financement du développement</option>
                   <option value="accompagnement">Institution de microfinance</option>
                   <option value="accompagnement">Institution de mésofinance</option>
                   <option value="accompagnement">Société de gestion et d'intermédiation</option>
                   <option value="accompagnement">Société de patrimoine</option>
                   <option value="accompagnement">Organisme de placement collectif en valeurs mobilières</option>
                   <option value="autre">Autre (précisez)</option>
                   </select>
                 </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                      <label class="bmd-label-floating" style="color:black;">Secteurs activités</label>
                      <select type="text" class="form-control">
                        <option value=""></option>
                        <option value="Agriculture, élevage, sylviculture et pêche">Agriculture,&nbsp;élevage,&nbsp;sylviculture et pêche</option>
                        <option value="Activités extractives">Activités extractives</option>
                        <option value="Activité de fabrication">Activité de fabrication</option>
                        <option value="Production et distribution d'électricité,de gaz,de vapeur et de climatisation">Production et distribution d'électricité,de gaz,de vapeur et de climatisation</option>
                        <option value="Distribution d’eau; réseau d’assainissement; gestion des déchets et remise en état">Distribution d’eau; réseau d’assainissement; gestion des déchets et remise en état</option>
                        <option value="Construction">Construction</option>
                        <option value="Commerce de gros et de détail, réparation de véhicules automobiles et de motocycles">Commerce de gros et de détail, réparation de véhicules automobiles et de motocycles</option>
                        <option value="Transport et entreposage">Transport et entreposage</option>
                        <option value="Activités d’hébergement et de restauration ">Activités d’hébergement et de restauration</option>
                        <option value="Information et communication">Information et communication</option>
                        <option value="Activités financières et d’assurances">Activités financières et d’assurances</option>
                        <option value="Activités immobilières">Activités immobilières</option>
                        <option value="Activités professionnelles, scientifiques et techniques ">Activités professionnelles, scientifiques et techniques</option>
                        <option value="Activités de services administratifs et d’appui">Activités de services administratifs et d’appui</option>
                        <option value="Administration publique et défense; sécurité sociale et obligatoire">Administration publique et défense; sécurité sociale et obligatoire</option>
                        <option value="Éducation">Éducation</option>
                        <option value="Santé et action sociale">Santé et action sociale</option>
                        <option value="Arts, spectacles et loisirs">Arts, spectacles et loisirs</option>
                        <option value="Autres activités de services">Autres activités de services</option>
                        <option value="Activités des ménages privés employant du personnel domestique;activités non différenciées de production de">Activités des ménages privés employant du personnel domestique;  activités non différenciées de production de</option>
                        <option value="biens et de services  des ménages privés pour usage propre">biens et de services  des ménages privés pour usage propre</option>
                        <option value="Activités des organisations et organismes extraterritoriaux">Activités des organisations et organismes extraterritoriaux</option>
                      </select>
                    </div>
                  </div>
            </div>

            <div class="row">
              <div class="col-md-4 prec1">
              <div class="form-group">
                 <label class="bmd-label-floating" style="color:black;">Précisez le type d'institution</label>
                 <input type="text" class="form-control">
               </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating" style="color:black;">Produits et services offerts</label>
                  <select id="mySelect"  type="text" class="form-control" onchange="mychoice()">
                  <option value=""></option>
                  <option value="Affacturage">Affacturage</option>
                  <option value="financement">Crédit bail</option>
                  <option value="accompagnement">Crédit consommation</option>
                  <option value="accompagnement">Crédit immobilier</option>
                  <option value="accompagnement">Crédit d'investissement</option>
                  <option value="accompagnement">Epargne</option>
                  <option value="accompagnement">Garantie</option>
                  <option value="accompagnement">Fonds de roulement</option>
                  <option value="accompagnement">Fonds propres</option>
                  <option value="accompagnement">Locations longues durées</option>
                  <option value="accompagnement">Ouverture compte</option>
                  <option value="accompagnement">Placement</option>
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

            <div class="row">
               <div class="col-md-4 prec">
               <div class="form-group">
                  <label class="bmd-label-floating" style="color:black;">Précisez les produits/services</label>
                  <input type="text" class="form-control">
                </div>
               </div>
            </div>


            <button type="submit" class="btn pull-right" style="background-color: #6495ED; color:black;font-weight: bold;">rechercher</button>
            <div class="clearfix"></div>
              </div>

          </form>
        </div>

        <div class="card">
             <div class="card-header" style="background-color: #6495ED;">
               <h4 class="card-title" style="color: black; font-weight:bold">Liste des institutions financières</h4>
               <button class="btn btn-warning pull-right bdt" name="button">Liste des documents de base requis</button>
             </div>
           <div class="card-body">
               <div class="table-responsive">
               <table class="table table-striped" id="dataTable">
                   <thead style="color: #0080ff;font-weight:bold;">
                     <th></th>
                     <th>Sigle</th>
                     <th style="text-align:center;">Dénomination</th>
                     <th style="text-align:center;">Pays</th>
                     <th style="text-align:center;">Région</th>
                     <th style="text-align:center;">Ville</th>
                     <th style="text-align:center;">Commune</th>
                     <!-- <th>Volume</th> -->

                   </thead>
                   <tbody>
                     <tr>
                       <td><input type="checkbox" name="" id="fich" onclick="checkfiche()" value="BAD"></td>
                       <td>BIS</td>
                       <td style="text-align:center;">Banque Islamique du Sénégal</td>
                       <td style="text-align:center;">Sénégal</td>
                       <td style="text-align:center;">Thiès</td>
                       <td style="text-align:center;">Thiès</td>
                       <td style="text-align:center;">Thiès</td>
                       <!-- <td>Africaine</td> -->

                     </tr>

                     <tr>
                       <td><input type="checkbox" name="" id="fich" onclick="checkfiche()" value="BNDE"></td>
                       <td>BNDE</td>
                       <td style="text-align:center;">Banque nationale de développement</td>
                       <td style="text-align:center;">Sénégal</td>
                       <td style="text-align:center;">Thiès</td>
                       <td style="text-align:center;">Thiès</td>
                       <td style="text-align:center;">Thiès</td>
                     </tr>

                     <tr>
                       <td><input type="checkbox" name="" id="fich" onclick="checkfiche()" value="BNDE"></td>
                       <td>CAURIE</td>
                       <td style="text-align:center;">Coopérative autonome pour le renforcement des initiatives économiques</td>
                       <td style="text-align:center;">Sénégal</td>
                       <td style="text-align:center;">Thiès</td>
                       <td style="text-align:center;">Thiès</td>
                       <td style="text-align:center;">Thiès</td>

                     </tr>

                     <tr>
                     <td><input type="checkbox" name="" id="fich" onclick="checkfiche()" value="BNDE"></td>
                     <td>UMECAS</td>
                     <td style="text-align:center;">Union des mutuelles d'Epargne et de crédit des Artisans du Sénégal</td>
                     <td style="text-align:center;">Sénégal</td>
                     <td style="text-align:center;">Thiès</td>
                     <td style="text-align:center;">Thiès</td>
                     <td style="text-align:center;">Thiès</td>
                    </tr>

                     <tr>
                     <td><input type="checkbox" name="" id="fich" onclick="checkfiche()" value="BNDE"></td>
                     <td>MEC DOLJI</td>
                     <td style="text-align:center;">Mutuelle d'épargne et de crédit dooleel jigueen</td>
                     <td style="text-align:center;">Sénégal</td>
                     <td style="text-align:center;">Thiès</td>
                     <td style="text-align:center;">Thiès</td>
                     <td style="text-align:center;">Thiès</td>
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
                <div class="modal-header" style="background-color:#6495ED">
                    <!-- <img src="../static/images/logo.png" th:src="@{images/logo.png}" width="30" height="30"/> -->
                    <h5 class="modal-title" id="exampleModalCenterTitle" style="color: black;font-weight: bold;">Liste des documents requis</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  <table class="table table-striped">
                    <thead style="color:#87CEEB;">
                      <th>Documents de base requis du demandeur  (particulier salarié)</th>
                      <th>Documents de base requis du demandeur (professionnel)</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Pièce identité</td>
                        <td>Pièce identité du responsable</td>

                      </tr>
                      <tr>
                        <td>Contrat de travail</td>
                        <td>Bon de commandes</td>
                      </tr>
                      <tr>
                        <td>Bulletin de paie des six derniers mois</td>
                        <td>Contrat sur marché</td>
                      </tr>
                      <tr>
                        <td>Relevé bancaire des six derniers mois</td>
                        <td>Etats financiers des trois derniers exercices</td>

                      </tr>

                      <tr>
                        <td></td>
                        <td>Identifiant fiscal Unique</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Statuts</td>
                      </tr>

                      <tr>
                        <td></td>
                        <td>Registre de commerce et de crédits immobiliers</td>
                      </tr>

                      <tr>
                        <td></td>
                        <td>Relevé bancaire des six derniers mois</td>
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
    $('.prec1').hide();
    console.log('hello world');
    $('.bdt').on('click',function(event){
         event.preventDefault();
         var href = $(this).attr('href');
         $('#myModal #delRef').attr('href',href);
         $('#myModal').modal();
     });
  });
  var currentli = 2;

      showActivate(currentli);

      function showActivate(n){
        var x = document.getElementsByClassName("active1");
        console.log(x[n]);
        x[n].style.backgroundColor="#6495ED";
      }

  function mychoice(){
  var x = document.getElementById("mySelect").value;
  console.log(x);
  if(x==='autre'){
    $('.prec').show();
  }
  }

  function mychoice1(){
  var x = document.getElementById("mySelect1").value;
  console.log(x);
  if(x==='autre'){
    $('.prec1').show();
  }
}
</script>
