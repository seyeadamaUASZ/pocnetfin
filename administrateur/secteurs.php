<?php
include_once('header.php');
?>

<div class="content">
  <div class="container-fluid">

    <div class="card" style="margin-top:5px;">
      <div class="card-header" style="background-color: #6495ED;">
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
                <label class="bmd-label-floating" style="color:black;">Dénomination/Nom et prénom</label>
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
                <input type="text" class="form-control" name="" value="">
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

            <div class="col-md-6">
               <div class="form-group">
                 <label class="bmd-label-floating" style="color:black;">Type institution</label>
                 <select id="mySelect1" type="text" class="form-control" onchange="mychoice1()">
                   <option value=""></option>
                   <option value="Banque agricole">Banque agricole</option>
                   <option value="Banque commerciale">Banque commerciale</option>
                   <option value="Banque de l'habitat">Banque de l'habitat</option>
                   <option value="Banque d'investissement">Banque d'investissement</option>
                   <option value="Banque de développement">Banque de développement</option>
                   <option value="Etablissement financier">Etablissement financier</option>
                   <option value="Fonds d'investissement">Fonds d'investissement</option>
                   <option value="Fonds/société de garantie">Fonds d'investissement</option>
                   <option value="Institution de financement du développement">Institution de financement du développement</option>
                   <option value="Institution de microfinance">Institution de microfinance</option>
                   <option value="Institution de mésofinance">Institution de mésofinance</option>
                   <option value="Société de gestion et d'intermédiation">Société de gestion et d'intermédiation</option>
                   <option value="Société de patrimoine">Société de patrimoine</option>
                   <option value="Organisme de placements collectifs en valeurs mobilières">Organisme de placements collectifs en valeurs mobilières</option>
                   <option value="autre">Autre (précisez)</option>
                 </select>

               </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating" style="color:black;">Secteur d'activités</label>
                <select class="form-control" name="">
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
             <div class="col-md-6 prec">
             <div class="form-group">
                <label class="bmd-label-floating" style="color:black;">Précisez le type d'institution</label>
                <input type="text" class="form-control">
              </div>
             </div>
           </div>

           <div class="row">
             <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating" style="color:black;">Produits et services</label>
                    <select id="mySelect" type="text" class="form-control" onchange="mychoice()">
                      <option value=""></option>
                      <option value="Affacturage">Affacturage</option>
                      <option value="Crédit bail">Crédit bail</option>
                      <option value="Crédit consommation">Crédit consommation</option>
                      <option value="Crédit immobilier">Crédit immobilier</option>
                      <option value="Crédit d'investissement">Crédit d'investissement</option>
                      <option value="Epargne">Epargne</option>
                      <option value="Garantie">Garantie</option>
                      <option value="Fonds de roulement">Fonds de roulement</option>
                      <option value="Fonds propres">Fonds propres</option>
                      <option value="Location longue durée">Location longues durées</option>
                      <option value="Ouverture compte">Ouverture compte</option>
                      <option value="Placement">Placement</option>
                      <option value="autre">Autre (précisez)</option>
                    </select>

                    </div>
             </div>
           </div>

           <div class="row">
             <div class="col-md-6 prec1">
             <div class="form-group">
                <label class="bmd-label-floating" style="color:black;">Précisez les produits/services</label>
                <input type="text" class="form-control">
              </div>
             </div>
           </div>
           <br>
          <button type="submit" class="btn pull-right" style="background-color: #6495ED;color:black;font-weight:bold;">rechercher</button>
          <div class="clearfix"></div>
            </div>

        </form>
      </div>

    <div class="card" style="margin-top:100px;">
         <div class="card-header" style="background-color: #6495ED;">
           <h4 class="card-title" style="color: black;font-weight:bold;">Liste des critères</h4>
           <button class="btn btn-warning nbtn pull-right" name="button"><i class="material-icons">add</i> Ajouter</button>
         </div>
       <div class="card-body">
           <div class="table-responsive">
             <table class="table table-striped" id="dataTable">
               <thead style="color:#87CEEB; font-weight:bold;">
                 <th>Code critère</th>
                 <th style="text-align:center;">Nom critère</th>
                 <th>Actions</th>
               </thead>
               <tbody>
                 <tr>
                   <td>SEC1</td>
                   <td style="text-align:center;">Activités extractives</td>
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
                   <td>SEC2</td>
                   <td style="text-align:center;">Activité de fabrication</td>

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
                   <td>SEC3</td>
                   <td style="text-align:center;">Construction</td>

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


<div class="myForm">
        <form action="" method="post">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#6495ED">
                            <!-- <img src="../static/images/logo.png" th:src="@{images/logo.png}" width="30" height="30"/> -->
                            <h5 class="modal-title" id="exampleModalLabel" style="color: black;font-weight:bold;"><i class="material-icons">folder</i> Enregistrer un nouveau critère </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                 <label class="bmd-label-floating" style="color:black;">Code critère</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                 <label class="bmd-label-floating" style="color:black;">Nom critère</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-7 prec2">
                            <div class="form-group">
                               <label class="bmd-label-floating" style="color:black;">Précisez le type</label>
                               <input type="text" class="form-control">
                             </div>
                            </div>
                          </div>

                        </div>
                        <div class="modal-footer">
                            <input type="submit" value="Ajouter" class="btn btn-primary" style="background-color: #6495ED"/>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

<?php
include_once('footer.php')
?>
<script>
$('document').ready(function(){
  $('.prec').hide();
  $('.prec1').hide();
  $('.prec2').hide();
  $('.nbtn').on('click',function(event){
        event.preventDefault();
        $('.myForm #exampleModal').modal()
    });
})

var currentli = 4;

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

function mychoice(){
var x = document.getElementById("mySelect").value;
console.log(x);
if(x==='autre'){
  $('.prec1').show();
}
}

function mychoice2(){
var x = document.getElementById("mySelect2").value;
console.log(x);
if(x==='autre'){
  $('.prec2').show();
}
}

</script>
