<?php
include_once('header.php');
?>
<div class="content">
  <div class="container-fluid">

    <div class="col-md-12">
      <div class="card" style="margin-top:5px;">
        <div class="card-header" style="background-color:#6495ED;">
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
                  <label class="bmd-label-floating" style="color:black;">Dénomination</label>
                  <input type="text" class="form-control">
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label class="bmd-label-floating" style="color:black;">Adresse</label>
                  <input type="datetime" class="form-control">
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label class="bmd-label-floating" style="color:black;">Téléphone</label>
                  <input type="text" class="form-control">
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label class="bmd-label-floating" style="color:black;">Email</label>
                  <input type="email" class="form-control">
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
                     <option value="cote ivoire">Côte d'Ivoire</option>
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
                  <label class="bmd-label-floating" style="color:black;">Type</label>
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
              <div class="col-md-4 prec">
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
               <div class="col-md-4 prec1">
               <div class="form-group">
                  <label class="bmd-label-floating" style="color:black;">Précisez les produits/services</label>
                  <input type="text" class="form-control">
                </div>
               </div>

            </div>

            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating" style="color:black;">Profil Clients en portefeuille et prospects recherché</label>
                    <select id="mySelect3" type="text" class="form-control" onchange="mychoice3()">
                      <option value=""></option>
                      <option value="Particulier salarié">Particulier salarié</option>
                      <option value="Association">Association</option>
                      <option value="Groupement">Groupement</option>
                      <option value="Organisation non gouvernementale">Organisation non gouvernementale</option>
                      <option value="Entreprise individuelle">Entreprise individuelle</option>
                      <option value="Société à responsabilité limitée">Société à responsabilité limitée</option>
                      <option value="Société anonyme">Société anonyme</option>
                      <option value="Société en nom collectif">Société en nom collectif</option>
                      <option value="autre">Autres (précisez)</option>
                    </select>
                    </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating" style="color:black;">Type requérant</label>
                  <select type="text" class="form-control">
                    <option value=""></option>
                    <option value="Requérant particulier">Requérant particulier</option>
                    <option value="Requérant professionnel">Requérant professionnel</option>
                  </select>
                </div>
              </div>

            </div>
            <br>
            <div class="row">
              <div class="col-md-4 prec3">
              <div class="form-group">
                 <label class="bmd-label-floating" style="color:black;">Précisez le profil clients/prospects</label>
                 <input type="text" class="form-control">
               </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating" style="color:black;">Document de base requis du demandeur «particulier salarié»</label>
                  <select type="text" class="form-control">
                    <option value=""></option>
                    <option value="Pièce d'identité">Pièce d'identité</option>
                    <option value="Contrat de travail">Contrat de travail</option>
                    <option value="Bulletin de paie des six derniers mois">Bulletin de paie des six derniers mois</option>
                    <option value="Relevés bancaires des six derniers mois">Relevés bancaires des six derniers mois</option>
                  </select>
                  </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating" style="color:black;">Document de base requis du demandeur «professionnel»</label>
                  <select type="text" class="form-control">
                    <option value=""></option>
                    <option value="Pièce d'identité du responsable">Pièce d'identité du responsable</option>
                    <option value="Bons de commandes">Bons de commandes</option>
                    <option value="Contrat sur marché">Contrat sur marché</option>
                    <option value="Relevés bancaires des six derniers mois">Etats financiers des trois derniers exercices</option>
                    <option value="Identifiant fiscal unique">Identifiant fiscal unique</option>
                    <option value="Statuts">Statuts</option>
                    <option value="Registre de commerce et du crédit mobilier">Registre de commerce et du crédit mobilier</option>
                    <option value="Relevé bancaire des six derniers mois">Relevé bancaire des six derniers mois</option>
                  </select>
                  </div>
              </div>
            </div>
              <br>
            <button type="submit" class="btn pull-right" style="background-color:#6495ED;color:black; font-weight:bold;">rechercher</button>
            <div class="clearfix"></div>
              </div>

          </form>
        </div>

        <div class="card">
             <div class="card-header" style="background-color: #6495ED;">
               <h4 class="card-title" style="color: black; font-weight: bold;">Liste des institutions financières</h4>
               <button class="btn btn-warning nbtn pull-right" name="button"><i class="material-icons">add</i> Ajouter</button>
             </div>
           <div class="card-body">
               <div class="table-responsive">
                 <table class="table table-striped" id="dataTable">
                   <thead style="color: #87CEEB;">
                     <th>sigle</th>
                     <th style="text-align:center;">Dénomination</th>
                     <th style="text-align:center;">Pays</th>
                     <th style="text-align:center;">Ville</th>

                     <th>Actions</th>
                   </thead>
                   <tbody>
                     <tr>
                     <td>BIS</td>
                     <td style="text-align:center;">Banque Islamique du Sénégal</td>
                     <td style="text-align:center;">Sénégal</td>
                     <td style="text-align:center;">Thiès</td>
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
                     <td>BNDE</td>
                     <td style="text-align:center;">Banque nationale de développement</td>
                     <td style="text-align:center;">Sénégal</td>
                     <td style="text-align:center;">Thiès</td>
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
                     <td>CAURIE</td>
                     <td style="text-align:center;">Coopérative autonome pour le renforcement des initiatives économiques</td>
                     <td style="text-align:center;">Sénégal</td>
                     <td style="text-align:center;">Thiès</td>
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
                     <td>UMECAS</td>
                     <td style="text-align:center;">Union des mutuelles d'Epargne et de crédit des Artisans du Sénégal</td>
                     <td style="text-align:center;">Sénégal</td>
                     <td style="text-align:center;">Thiès</td>
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
                     <td>MEC DOLJI</td>
                     <td style="text-align:center;">Mutuelle d'épargne et de crédit dooleel jigueen</td>
                     <td style="text-align:center;">Sénégal</td>
                     <td style="text-align:center;">Thiès</td>
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


<!-- <div class="myForm">
        <form action="" method="post">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#6495ED">

                            <h5 class="modal-title" id="exampleModalLabel" style="color: black;font-weight:bold;"><i class="material-icons">money</i> Enregistrer une nouvelle institution</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                 <label class="bmd-label-floating">Sigle institution</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                 <label class="bmd-label-floating">Dénomination</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>
                          </div>

                          <div class="row">

                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="bmd-label-floating">Type institution</label>
                                <select id="mySelect2" type="text" class="form-control" onchange="mychoice2()">

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

                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="bmd-label-floating">Pays</label>
                                <select type="text" class="form-control">
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

                          </div>


                          <div class="row">
                            <div class="col-md-4 prec2">
                            <div class="form-group">
                               <label class="bmd-label-floating">Précisez le type</label>
                               <input type="text" class="form-control">
                             </div>
                            </div>
                          </div>

                          <div class="row">
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

                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="bmd-label-floating">Commune</label>
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
                                 <label class="bmd-label-floating">Nom et prénom personne ressource</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>


                            <div class="col-md-4">
                              <div class="form-group">
                                 <label class="bmd-label-floating">Téléphone personne ressource</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                 <label class="bmd-label-floating">Email personne ressource</label>
                                 <input type="email" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                 <label class="bmd-label-floating">Adresse</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                 <label class="bmd-label-floating">Site web</label>
                                 <input type="text" class="form-control" id="id" name="id" value="" required/>
                             </div>
                            </div>
                          </div>

                          <div class="row">
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
                          </div>

                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Secteurs activités</label>
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
                         <button>Ajouter</button>

                         <hr>


                         <div class="row">
                            <div class="card">
                              <div class="card-header">
                                <h4>Profils clients/prospects recherchés</h4>
                              </div>
                              <div class="card-body">
                                <div class="table-responsive">
                                  <table class="table">
                                    <thead style="color:#87CEEB;font-weight:bold;">
                                      <th>Id</th>
                                      <th>Profil de client ou prospect</th>
                                      <th>Actions</th>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>1</td>
                                        <td>Salarié</td>
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
                                        <td>Association</td>
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
                                        <td>Groupement</td>
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


                          <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Profil client</label>
                                <select type="text" class="form-control">
                                  <option value=""></option>
                                  <option value="salarie">Salarié</option>
                                  <option value="groupement">Groupement</option>
                                  <option value="association">Association</option>
                                  <option value="organisme">Organisme</option>
                                </select>
                              </div>
                            </div>

                         </div>
                         <button>Ajouter</button>

                         <hr>

                         <div class="row">
                            <div class="card">
                              <div class="card-header">
                                <h4>Documents exigés au requérant </h4>
                              </div>
                              <div class="card-body">
                                <div class="table-responsive">
                                  <table class="table">
                                    <thead style="color:#87CEEB;font-weight:bold;">
                                      <th>Id</th>
                                      <th>Type de requérant</th>
                                      <th>Document</th>
                                      <th>Actions</th>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>1</td>
                                        <td>Particulier</td>
                                        <td>Pièce d'identité</td>
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
                                        <td>Particulier</td>
                                        <td>Contrat de travail</td>
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
                                        <td>Particulier</td>
                                        <td>Bulletin de paie des six derniers mois</td>
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
                                        <td>Particulier</td>
                                        <td>Relevés bancaires des six derniers mois</td>
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
                                        <td>5</td>
                                        <td>Professionnel</td>
                                        <td>Pièce d’identité du responsable</td>
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
                                        <td>6</td>
                                        <td>Professionnel</td>
                                        <td>Bons de commandes</td>
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


                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Type de requérant</label>
                                <select type="text" class="form-control">
                                  <option value=""></option>
                                  <option value="particulier">Particulier</option>
                                  <option value="professionnel">Professionnel</option>

                                </select>
                              </div>
                            </div>

                         </div>

                         <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Document</label>
                                <select type="text" class="form-control">
                                  <option value=""></option>
                                  <option value="Pièce d'identité">Pièce d'identité</option>
                                  <option value="Contrat de travail">Contrat de travail</option>
                                  <option value="Bulletin de paie des six derniers mois">Bulletin de paie des six derniers mois</option>
                                  <option value="Relevé bancaire des six derniers mois">Relevé bancaire des six derniers mois</option>
                                  <option value="Pièce d’identité du responsable">Pièce d’identité du responsable</option>
                                  <option value="Bons de commandes">Bons de commandes</option>
                                  <option value="Contrats sur marchés">Contrats sur marchés</option>
                                  <option value="Etats financiers des trois derniers exercices">Etats financiers des trois derniers exercices</option>
                                  <option value="Identifiant Fiscal Unique">Identifiant Fiscal Unique</option>
                                  <option value="Statuts">Statuts</option>
                                  <option value="Registre de Commerce et du Crédit Mobilier">Registre de Commerce et du Crédit Mobilier</option>
                                  <option value="Relevés bancaires des six derniers mois">Relevés bancaires des six derniers mois</option>
                                </select>
                              </div>
                            </div>

                         </div>
                         <button>Ajouter</button>

                        <hr>

                         <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Fourchette montant</label>
                                <select type="text" class="form-control">
                                  <option value=""></option>
                                  <option value="0-50">0-50</option>
                                  <option value="50-100">50-100</option>
                                  <option value="100-200">100-200</option>
                                  <option value="200-500">200-500</option>
                                  <option value="500-1000">500-1000</option>
                                  <option value="1000-5000">1000-5000</option>
                                </select>
                              </div>
                            </div>

                         </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" value="Ajouter" class="btn btn-primary"  style="background-color: #6495ED;"/>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>-->

    <!-- l'autre div myform-->


    <div class="myForm">
            <form action="" method="post">
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color:#6495ED">
                                <!-- <img src="../static/images/logo.png" th:src="@{images/logo.png}" width="30" height="30"/> -->
                                <h5 class="modal-title" id="exampleModalLabel" style="color: black;font-weight:bold;"><i class="material-icons">money</i> Enregistrer une nouvelle institution</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label class="bmd-label-floating" style="color:black;">Sigle institution</label>
                                    <input type="text" class="form-control">
                                  </div>
                                </div>

                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label class="bmd-label-floating" style="color:black;">Dénomination</label>
                                    <input type="text" class="form-control">
                                  </div>
                                </div>

                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label class="bmd-label-floating" style="color:black;">Site web</label>
                                    <input type="text" class="form-control">
                                  </div>
                                </div>
                               </div>
                               <br>

                               <div class="row">

                                 <div class="col-md-6">
                                   <div class="form-group">
                                     <label class="bmd-label-floating" style="color:black;">Nom et prénom personne ressource</label>
                                     <input type="datetime" class="form-control">
                                   </div>
                                 </div>

                                 <div class="col-md-6">
                                   <div class="form-group">
                                     <label class="bmd-label-floating" style="color:black;">Email personne ressource</label>
                                     <input type="email" class="form-control">
                                   </div>
                                 </div>
                               </div>

                               <div class="row">
                                 <div class="col-md-6">
                                   <div class="form-group">
                                     <label class="bmd-label-floating" style="color:black;">Adresse</label>
                                     <input type="datetime" class="form-control">
                                   </div>
                                 </div>

                                 <div class="col-md-6">
                                   <div class="form-group">
                                     <label class="bmd-label-floating" style="color:black;">Téléphone personne ressource</label>
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
                                       <option value="cote ivoire">Côte d'Ivoire</option>
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
                                    <label class="bmd-label-floating" style="color:black;">Type</label>
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
                                <div class="col-md-4 prec">
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
                                 <div class="col-md-4 prec1">
                                 <div class="form-group">
                                    <label class="bmd-label-floating" style="color:black;">Précisez les produits/services</label>
                                    <input type="text" class="form-control">
                                  </div>
                                 </div>

                              </div>

                              <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating" style="color:black;">Profil Clients en portefeuille et prospects recherché</label>
                                      <select id="mySelect3" type="text" class="form-control" onchange="mychoice3()">
                                        <option value=""></option>
                                        <option value="Particulier salarié">Particulier salarié</option>
                                        <option value="Association">Association</option>
                                        <option value="Groupement">Groupement</option>
                                        <option value="Organisation non gouvernementale">Organisation non gouvernementale</option>
                                        <option value="Entreprise individuelle">Entreprise individuelle</option>
                                        <option value="Société à responsabilité limitée">Société à responsabilité limitée</option>
                                        <option value="Société anonyme">Société anonyme</option>
                                        <option value="Société en nom collectif">Société en nom collectif</option>
                                        <option value="autre">Autres (précisez)</option>
                                      </select>
                                      </div>
                                </div>

                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="bmd-label-floating" style="color:black;">Type requérant</label>
                                    <select type="text" class="form-control">
                                      <option value=""></option>
                                      <option value="Requérant particulier">Requérant particulier</option>
                                      <option value="Requérant professionnel">Requérant professionnel</option>
                                    </select>
                                  </div>
                                </div>

                              </div>
                              <br>
                              <div class="row">
                                <div class="col-md-4 prec3">
                                <div class="form-group">
                                   <label class="bmd-label-floating" style="color:black;">Précisez le profil clients/prospects</label>
                                   <input type="text" class="form-control">
                                 </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="bmd-label-floating" style="color:black;">Document de base requis du demandeur «particulier»</label>
                                    <select type="text" class="form-control">
                                      <option value=""></option>
                                      <option value="Pièce d'identité">Pièce d'identité</option>
                                      <option value="Contrat de travail">Contrat de travail</option>
                                      <option value="Bulletin de paie des six derniers mois">Bulletin de paie des six derniers mois</option>
                                      <option value="Relevés bancaires des six derniers mois">Relevés bancaires des six derniers mois</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="bmd-label-floating" style="color:black;">Document de base requis du demandeur «professionnel»</label>
                                    <select type="text" class="form-control">
                                      <option value=""></option>
                                      <option value="Pièce d'identité du responsable">Pièce d'identité du responsable</option>
                                      <option value="Bons de commandes">Bons de commandes</option>
                                      <option value="Contrat sur marché">Contrat sur marché</option>
                                      <option value="Relevés bancaires des six derniers mois">Etats financiers des trois derniers exercices</option>
                                      <option value="Identifiant fiscal unique">Identifiant fiscal unique</option>
                                      <option value="Statuts">Statuts</option>
                                      <option value="Registre de commerce et du crédit mobilier">Registre de commerce et du crédit mobilier</option>
                                      <option value="Relevé bancaire des six derniers mois">Relevé bancaire des six derniers mois</option>
                                    </select>
                                    </div>
                                </div>
                              </div>

                            </div>
                            <div class="modal-footer">
                                <input type="submit" value="Ajouter" class="btn btn-primary"  style="background-color: #6495ED;"/>
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

  console.log('hello')
  $('.prec').hide();
  $('.prec1').hide();
  $('.prec2').hide();
  $('.prec3').hide();
  $('.nbtn').on('click',function(event){
        event.preventDefault();
        $('.myForm #exampleModal').modal()
    });
})
var currentli = 2;

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

function mychoice3(){
var x = document.getElementById("mySelect3").value;
console.log(x);
if(x==='autre'){
  $('.prec3').show();
}
}
</script>
