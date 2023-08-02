<?php
include_once('layout.php');
?>

<style>
.tab {
  display: none;
}

.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: green;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

/* Mark the active step: */
.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>

<div class="content">
  <div class="container-fluid">
    <div class="col-md-12">
      <div class="card" style="margin-top:5px;">
        <div class="card-header" style="background-color:#6495ED;">
          <h4 class="card-title" style="font-weight: bold;">PROFIL</h4>
          <a href="home.php" class="pull-right"> <span style="color:white;">Retour</span></a>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="pull-left">
                <a href="experts.php"><span style="color:blue;"><u>Prestataires</u></span></a>
              </div>
            </div>

            <div class="col-md-6">
              <div class="pull-right">
                <a href="institutions.php"><span style="color:blue;"><u>Institutions</u></span></a>
              </div>
            </div>

          </div>
          <br>
          <form id="info" action="valid.php" method="POST">

        <div class="tab">
            <!--<fieldset style="border:radius blue; margin:auto;">
              <legend style="font-size:16px; font-weight:bold;">Type de requérant</legend>
            </fieldset>-->

            <!--<div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-3">
                  <div class="form-group">
                      <input type="radio" id="par"  value="particulier" onclick="checkValue()" name="parti"> <label for=""> <span style="font-weight:bold; color:black;">Particulier</span> </label>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                      <input type="radio" id="pro"  value="professionnel" onclick="checkValue1()" name="profess"> <label for=""> <span style="font-weight:bold; color:black;">Professionnel</span> </label>
                  </div>
                </div>
              </div>-->
             <!--<hr style="background-color:#6495ED;">
              <br>-->
              <br>
           <div class="card-header mbi" style="background-color:#6495ED;"><span style="color:black; font-weight:bold;">Informations sur le requérant</span> </div>
            <br>
           <div class="professionnel">
             <div class="row">
               <div class="col-md-4">
                 <div class="form-group">
                   <label class="bmd-label-floating" style="color:black;">Nom et prénom de la personne introduisant la requête</label>
                   <input type="text" class="form-control">
                 </div>
               </div>

               <div class="col-md-4">
                 <div class="form-group">
                   <label class="bmd-label-floating" style="color:black;">Dénomination/Raison sociale</label>
                   <input type="text" class="form-control">
                 </div>
               </div>
               <!-- <div class="col-md-4">
                 <div class="form-group">
                   <label class="bmd-label-floating">Forme juridique</label>
                   <input type="text" class="form-control">
                 </div>
               </div> -->

               <div class="col-md-4">
                 <div class="form-group">
                   <label class="bmd-label-floating" style="color:black;">Nom et prénom du responsable</label>
                   <input type="text" class="form-control">
                 </div>
               </div>
             </div>

               <br>
             <div class="row">
               <div class="col-md-6">
                 <div class="form-group">
                 <label class="bmd-label-floating" style="color:black;">Forme Juridique</label>
                    <select  id="mySelect3" class="form-control" name="" onchange="mychoice3()">
                      <option value=""></option>
                      <option value="association">Association</option>
                      <option value="entreprise">Entreprise individuelle</option>
                      <option value="groupement">Groupement</option>
                      <option value="organisation">Organisation non gourvenementale</option>
                      <option value="sa">Societe anonyme</option>
                      <option value="sc">Societe en nom collectif</option>
                      <option value="societeR">Société à responsabilité limitée</option>
                      <option value="autre">Autre (precisez)</option>
                     </select>
                 </div>
               </div>
             </div>

             <div class="row prec3">
                <div class="col-md-5">
                   <div class="form-group">
                   <label class="bmd-label-floating" style="color:black;">Précisez le type d'entité(ici):</label>
                   <input type="text" class="form-control">
                   </div>
                </div>
             </div>

             <br>
             <div class="row">
             <div class="col-md-4">
                <div class="form-group">
                <label>Date de creation</label>
                  <input type="date" class="form-control" name="" value="31/03/2019">
                  </div>
             </div>
             </div>


             <div class="row">
               <div class="col-md-3">
                 <div class="form-group">
                   <label class="bmd-label-floating" style="color:black;">Pays</label>
                     <select class="form-control"  name="">
                       <option value=""></option>
                       <option value="Benin">Bénin</option>
                       <option value="Burkina Faso">Burkina Faso</option>
                       <option value="cote ivoire">Côte d'Ivoire</option>
                       <option value="Guinee Bissau">Guinee Bissau</option>
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
                       <option value="Kaolack">Kaolack</option>
                       <option value="Thies">Thies</option>
                       <option value="Tambacounda">Tambacounda</option>
                       <option value="Diourbel">Diourbel</option>
                       <option value="Louga">Louga</option>
                       <option value="Kaffrine">Kaffrine</option>
                       <option value="Kolda">Kolda</option>
                       <option value="Kedougou">Kedougou</option>
                       <option value="Sedhiou">Sedhiou</option>
                       <option value="Ziguinchor">Ziguinchor</option>
                     </select>
                 </div>
               </div>

               <div class="col-md-3">
                 <div class="form-group">
                   <label class="bmd-label-floating" style="color:black;">Département du requérant</label>

                     <select class="form-control" name="">
                       <option value=""></option>
                       <option value="Dakar">Dakar</option>
                       <option value="Tambacounda">Pikine</option>
                       <option value="Thies">Rufisque</option>
                       <option value="Thiès">Thiès</option>
                       <option value="Diourbel">Goree</option>
                       <option value="Louga">Guediawaye</option>
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
                 <div class="col-md-3">
                   <div class="form-group">
                     <label class="bmd-label-floating" style="color:black;">Adresse</label>
                     <input type="datetime" class="form-control">
                   </div>
                 </div>
                 <div class="col-md-3">
                   <div class="form-group">
                     <label class="bmd-label-floating" style="color:black;">Téléphone</label>
                     <input type="datetime" class="form-control">
                   </div>
                 </div>

                 <div class="col-md-3">
                   <div class="form-group">
                     <label class="bmd-label-floating" style="color:black;">Email</label>
                     <input type="email" class="form-control">
                   </div>
                 </div>
               </div>


              <!-- <fieldset style="border:radius blue; margin:auto;">
                 <legend style="font-size:16px; font-weight:bold;">Information sur l'activité</legend>
               </fieldset>-->
                <!--<div class="row">
                 <div class="col-md-7">
                   <div class="form-group">
                     <label class="bmd-label-floating">Quel est votre secteur d'activités ?</label>
                       <select class="form-control" name="" id="seca">
                         <option value="agriculture,elevage,sylviculture,peche">Agriculture,&nbsp;élevage,&nbsp;sylviculture et pêche</option>
                         <option value="activités extractives">Activités extractives</option>
                         <option value="activité de fabrication">Activité de fabrication</option>
                         <option value="Production et distribution d'électricité,de gaz,de vapeur et de climatisation">Production et distribution d'électricité,de gaz,de vapeur et de climatisation</option>
                         <option value="Distribution d’eau; réseau d’assainissement; gestion des déchets et remise en état">Distribution d’eau; réseau d’assainissement; gestion des déchets et remise en état</option>
                         <option value="construction">Construction</option>
                         <option value="commerce de gros et de détail, réparation de véhicules automobiles et de motocycles">Commerce de gros et de détail, réparation de véhicules automobiles et de motocycles</option>
                         <option value="transport et entreposage">Transport et entreposage</option>
                         <option value="activités d’hébergement et de restauration ">Activités d’hébergement et de restauration</option>
                         <option value="Information et communication">Information et communication</option>
                         <option value="Activités financières et d’assurances">Activités financières et d’assurances</option>
                         <option value="Activités immobilières">Activités immobilières</option>
                         <option value="Activités professionnelles, scientifiques et techniques ">Activités professionnelles, scientifiques et techniques</option>
                       </select>
                   </div>
                 </div>
               </div>-->

            </div>

      <!--les questions sectionnées selon le profil particulier-->


            <!-- <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="">Quelle est l'activité proposée</label>
                    <input type="text" class="form-control" id="activite" name="">

                </div>
              </div>
            </div> -->

            <div class="row">
              <!-- <div class="col-md-3">
                <div class="form-group">
                  <label class="bmd-label-floating">Pays de l'activité</label>
                    <select class="form-control" name="">
                      <option value="Sénégal">Sénégal</option>
                      <option value="Burkina Faso">Burkina Faso</option>
                      <option value="Niger">Niger</option>
                      <option value="Guinee Bissau">Guinee Bissau</option>
                      <option value="Mali">Mali</option>
                      <option value="Benin">Benin</option>
                      <option value="Togo">Togo</option>
                    </select>
                </div>
              </div> -->

              <!-- <div class="col-md-3">
                <div class="form-group">
                  <label class="bmd-label-floating">Région de l'activité</label>
                  <select class="form-control" name="">
                    <option value="Thiès">Thiès</option>
                    <option value="Kaolack">Kaolack</option>
                    <option value="Dakar">Dakar</option>
                    <option value="Tambacounda">Tambacounda</option>
                    <option value="Thies">Thies</option>
                    <option value="Diourbel">Diourbel</option>
                    <option value="Louga">Louga</option>
                    <option value="Kaffrine">Kaffrine</option>
                    <option value="Kolda">Kolda</option>
                    <option value="Kedougou">Kedougou</option>
                    <option value="Sedhiou">Sedhiou</option>
                    <option value="Ziguinchor">Ziguinchor</option>
                  </select>

                </div>
              </div> -->

              <!-- <div class="col-md-3">
                <div class="form-group">
                  <label class="bmd-label-floating">Département de l'activité</label>
                  <select class="form-control" name="">
                    <option value="Dakar">Dakar</option>
                    <option value="Tambacounda">Pikine</option>
                    <option value="Thies">Rufisque</option>
                    <option value="Diourbel">Goree</option>
                    <option value="Louga">Guediawaye</option>
                  </select>

                </div>
              </div> -->

              <!-- <div class="col-md-3">
                <div class="form-group">
                  <label class="bmd-label-floating">Commune de l'activité</label>

                    <select class="form-control" name="">
                      <option value="Dakar">Dakar</option>
                      <option value="Tambacounda">Pikine</option>
                      <option value="Thies">Rufisque</option>
                      <option value="Diourbel">Goree</option>
                      <option value="Louga">Guediawaye</option>
                    </select>
                </div>
              </div> -->
            </div>
            <div class="row">
              <!-- <div class="col-md-5">
                <div class="form-group">
                  <label class="">Adresse de l'activité</label>
                    <input type="text" class="form-control" name="">
                </div>
              </div> -->
            </div>

           </div>

           <div class="tab">
            <div class="card card-header" style="background-color:#6495ED;"><span style="color:black;font-weight:bold;">Informations sur l'activité</span></div>
             <div class="professionnel">

              <!-- <div class="row">
               <div class="col-md-4">
               <div class="form-group">
               <label>Date de creation</label>
                 <input type="date" class="form-control" name="">
                 </div>

               </div>

              </div>  -->

              <!-- <div class="row">
              <div class="col-md-4">
               <div class="form-group">
               <label class="bmd-label-floating">Type d'entité (forme d'organisation/forme juridique)</label>
                 <select name="" id="" class="form-control">
                    <option value="SARL">SARL</option>
                    <option value="SA">SA</option>
                    <option value="SUARL">SUARL</option>
                    <option value="GIE">GIE</option>
                 </select>
                 </div>

               </div>
              </div> -->

            <!-- <div class="card card-header" style="background-color:#6495ED;"><span style="color:black;font-weight:bold;">Information sur l'activité</span></div>-->
              <div class="row">
                <div class="col-md-7">
                  <div class="form-group">
                    <label class="bmd-label-floating" style="color:black;">Quel est votre secteur d'activités ?</label>
                      <select class="form-control" name="" id="seca">
                        <option value=""></option>
                        <option value="Agriculture,élevage,sylviculture,pêche">Agriculture,&nbsp;élevage,&nbsp;sylviculture et pêche</option>
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
                      </select>
                  </div>
                </div>
              </div>

              <div class="row">
               <div class="card">
                <div class="card-header" style="color:black;">Quels sont les produits et services que vous offrez ?</div>
                <div class="card-body">
                    i <input name="" id="" class="form-control">
                    ii <input name="" id="" class="form-control">
                    iii <input name="" id="" class="form-control">
                </div>
               </div>

              </div>


              <div class="row">
               <div class="card">
                <div class="card-header" style="color:black;">Qui sont vos principaux clients ?</div>
                <div class="card-body">
                    i <input name="" id="" class="form-control">
                    ii <input name="" id="" class="form-control">
                    iii <input name="" id="" class="form-control">
                </div>
               </div>

              </div>

              <div class="row">
               <div class="col-md-3">
                 <p style="color:black;"> Vos  clients sont il ?</p>
               </div>
               <div class="col-md-3">
                 <div class="form-group">
                     <input type="radio" value="oui" name=""> Locaux
                 </div>
               </div>

               <div class="col-md-3">
                 <div class="form-group">
                     <input type="radio" value="non" name=""> Régionaux
                 </div>
               </div>

               <div class="col-md-3">
                 <div class="form-group">
                     <input type="radio" value="non" name=""> Internationaux
                 </div>
               </div>

             </div>

             <div class="row">
               <div class="card">
                <div class="card-header" style="color:black;">Qui sont vos principaux fournisseurs ?</div>
                <div class="card-body">
                    i <input name="" id="" class="form-control">
                    ii <input name="" id="" class="form-control">
                    iii <input name="" id="" class="form-control">
                </div>
               </div>

              </div>

              <div class="row">
               <div class="col-md-3">
                 <p style="color:black;"> Vos fournisseurs sont il ?</p>
               </div>
               <div class="col-md-3">
                 <div class="form-group">
                     <input type="radio" value="oui" name=""> Locaux
                 </div>
               </div>

               <div class="col-md-3">
                 <div class="form-group">
                     <input type="radio" value="non" name=""> Régionaux
                 </div>
               </div>

               <div class="col-md-3">
                 <div class="form-group">
                     <input type="radio" value="non" name=""> Internationaux
                 </div>
               </div>

             </div>


             <div class="row">
               <div class="col-md-4">
               <div class="form-group">
               <label class="bmd-label-floating" style="color:black;">Quel est votre besoin ?</label>
                   <select class="form-control" id="mySelect1" name="" onchange="choice2()">
                     <option value=""></option>
                     <option value="Crédit bail">Crédit bail</option>
                     <option value="Crédit consommation">Crédit consommation</option>
                     <option value="Crédit immobilier">Crédit immobilier</option>
                     <option value="Crédit d'investissement">Crédit d'investissement</option>
                     <option value="Epargne">Epargne</option>
                     <option value="Fonds de roulement">Fonds de roulement</option>
                     <option value="Fonds propres">Fonds propres</option>
                     <option value="Garantie">Garantie</option>
                     <option value="Location longue durée">Location longue durée</option>
                     <option value="Ouverture compte placement">Ouverture compte placement</option>
                     <option value="Placement">Placement</option>
                     <option value="autre">Autres (précisez)</option>
                    </select>
                 </div>

               </div>

             <div class="col-md-4">
               <div class="form-group">
               <label class="bmd-label-floating" style="color:black;">Combien de personnes employez-vous ?</label>
                 <select name="" id="" class="form-control">
                   <option value=""></option>
                    <option value="1-10">1-10</option>
                    <option value="10-50">10-50</option>
                    <option value="50-250">50-250</option>
                    <option value="250-500">250-500</option>
                    <option value="500-1000">500-1000</option>
                    <option value="+1000">+1000</option>
                 </select>
                 </div>

               </div>



               <div class="col-md-4">
               <div class="form-group">
               <label class="bmd-label-floating" style="color:black;">De combien avez-vous besoin (millions)?</label>
                 <select name="" id="fourch" class="form-control">
                   <option value=""></option>
                    <option value="0-20">0-20</option>
                    <option value="20-50">20-50</option>
                    <option value="50-200">50-200</option>
                    <option value="200-500">200-500</option>
                    <option value="500-1000">500-1000</option>
                    <option value="1000-5000">1000-5000</option>
                    <option value="5000-20000">5000-20000</option>
                 </select>
                 </div>

               </div>

             </div>

             <br>

             <div class="row prec1">
               <div class="col-md-5">
                 <div class="form-group">
                 <label class="bmd-label-floating" style="color:black;">Précisez votre besoin </label>
                 <input type="text" class="form-control">
                 </div>
               </div>
             </div>

             <div class="row">
               <div class="col-md-6">
               <label class="bmd-label-floating" style="color:black;">Pourquoi avez-vous ce besoin ?</label>
               <input type="text" class="form-control" id="activite1">
               </div>
             </div>

             <br>
             <div class="row">
               <div class="col-md-3">
                 <p style="color:black;"> Avez-vous déjà pris contact avec une institution financière à cet effet ? <sup style="color:red; font-weight:bold;">*</sup></p>
               </div>
               <div class="col-md-3">
                 <div class="form-group">
                     <input type="radio" value="oui" name=""> oui
                 </div>
               </div>

               <div class="col-md-3">
                 <div class="form-group">
                     <input type="radio" value="non" name=""> non
                 </div>
               </div>

             </div>

             <div class="row">
               <div class="card">
                <div class="card-header" style="color:black;">Si oui lesquelles ? <sup style="color:red; font-weight:bold;">*</sup></div>
                <div class="card-body">
                    i <input name="" id="" class="form-control">
                    ii <input name="" id="" class="form-control">
                    iii <input name="" id="" class="form-control">
                </div>
               </div>

              </div>

              <div class="row">
              <div class="col-md-4">
               <div class="form-group">
               <label class="bmd-label-floating" style="color:black;">De quel ordre a été votre chiffre d’affaires l’an passé (en millions) ?</label>
                 <select name="" id="" class="form-control">
                   <option value=""></option>
                    <option value="0-50">0-50</option>
                    <option value="50-200">50-200</option>
                    <option value="200-500">200-500</option>
                    <option value="1000-5000">1000-5000</option>
                    <option value="5000-10000">5000-10000</option>
                    <option value="10000 et plus">10000 et plus</option>
                 </select>
                 </div>

               </div>
              </div>

              <div class="row">
              <div class="col-md-4">
               <p style="color:black;">Possèdez-vous les documents suivants ?</p>
              </div>
              </div>

              <div class="row">
               <div class="col-md-3">
                 <p style="color:black;">Pièce d'identité du responsable <sup style="color:red; font-weight:bold;">*</sup></p>
               </div>
               <div class="col-md-3">
                 <div class="form-group">
                     <input type="radio" value="oui" name="">
                 </div>
               </div>
               <!-- <div class="col-md-3">
                 <div class="form-group">
                     <input type="radio" value="non" name=""> non
                 </div>
               </div> -->

             </div>

             <div class="row">
               <div class="col-md-3">
                 <p style="color:black;"> Bons de commandes</p>
               </div>
               <div class="col-md-4">
                 <div class="form-group">
                     <input type="radio" value="oui" name="">
                 </div>
               </div>
               <!-- <div class="col-md-3">
                 <div class="form-group">
                     <input type="radio" value="non" name=""> non
                 </div>
               </div> -->

             </div>

             <div class="row">
               <div class="col-md-3">
                 <p style="color:black;"> Etats financiers des trois derniers exercices</p>
               </div>
               <div class="col-md-4">
                 <div class="form-group">
                     <input type="radio" value="oui" name="">
                 </div>
               </div>

               <!-- <div class="col-md-3">
                 <div class="form-group">
                     <input type="radio" value="non" name=""> non
                 </div>
               </div> -->

             </div>

             <div class="row">
               <div class="col-md-3">
                 <p style="color:black;">Identifiant fiscal unique <sup style="color:red; font-weight:bold;">*</sup></p>
               </div>
               <div class="col-md-4">
                 <div class="form-group">
                     <input type="radio" value="oui" name="">
                 </div>
               </div>

               <!-- <div class="col-md-3">
                 <div class="form-group">
                     <input type="radio" value="non" name=""> non
                 </div>
               </div> -->

             </div>

             <div class="row">
               <div class="col-md-3">
                 <p style="color:black;">Statuts</p>
               </div>
               <div class="col-md-4">
                 <div class="form-group">
                     <input type="radio" value="oui" name="">
                 </div>
               </div>

               <!-- <div class="col-md-3">
                 <div class="form-group">
                     <input type="radio" value="non" name=""> non
                 </div>
               </div> -->

             </div>

             <div class="row">
               <div class="col-md-3">
                 <p style="color:black;">Registre de commerce et crédit mobilier<sup style="color:red; font-weight:bold;">*</sup></p>
               </div>
               <div class="col-md-4">
                 <div class="form-group">
                     <input type="radio" value="oui" name="">
                 </div>
               </div>

               <!-- <div class="col-md-3">
                 <div class="form-group">
                     <input type="radio" value="non" name=""> non
                 </div>
               </div> -->

             </div>

             <div class="row">
               <div class="col-md-3">
                 <p style="color:black;">Relevé bancaire des six derniers mois</p>
               </div>
               <div class="col-md-4">
                 <div class="form-group">
                     <input type="radio" value="oui" name="">
                 </div>
               </div>

               <!-- <div class="col-md-3">
                 <div class="form-group">
                     <input type="radio" value="non" name=""> non
                 </div>
               </div> -->

             </div>

             <!-- <div class="pull-right"> <a href="experts.php">
                <u>prestataires</u></a>
                 <br>
              <a href="institutions.php">
               <p style="color:blue;"><u>Institutions</u> </p>
              </a>
            </div> -->

             </div>

           </div>

           <div class="tab">
             <div class="card">
               <div class="card-header" style="background-color:#6495ED;">
                  <h4 style="font-weight: bold;">Synthèse de votre requête</h4>
               </div>
               <div class="card-body">
                 <div class="row">

                   <div class="col-md-3">
                     <div class="form-group">
                       <label>Secteur d'activités</label>
                      <input type="text" class="form-control" id="seca1" name="" placeholder="secteur activite" value="">
                     </div>
                   </div>

                   <div class="col-md-2">

                   </div>

                   <div class="col-md-3">
                     <div class="form-group">
                       <label>Type de besoin</label>
                      <input type="text" class="form-control" id="typo" name="" value="">
                     </div>
                   </div>

                 </div>

                 <br>

              <div class="row">
                   <div class="col-md-3">
                     <div class="form-group">
                       <label>Montant</label>
                      <input type="text" class="form-control" id="fin" name="" value="">
                     </div>
                   </div>

                   <div class="col-md-2">
                      <br>
                      <p>millions</p>
                   </div>

                   <div class="col-md-3">
                     <div class="form-group">
                      <label class="">Pourquoi du besoin</label>
                      <input type="text" class="form-control" id="intitule" name="" value="">
                     </div>
                   </div>

                   </div>

                </div>
                <br>
                 <!--<hr style="background-color:#6495ED;">-->
                 <div class="card-header card-header-success"> <span style="color:black; font-weight:bold; font-size:16px;">INSTITUTIONS CORRESPONDANT À VOTRE PROFIL ET À VOTRE REQUÊTE</span> </div>
              <fieldset>

                <div class="col-md-4 pull-right fiche">
                   <div class="alert alert-warning">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <p>
                     Les documents exigés par l'institution :
                     <ol>
                       <li>Carte identité</li>
                       <li>Casier judiciaire</li>
                       <li>Relevé bancaire</li>
                     </ol>
                    </p>
                  </div>
                     </div>
              </fieldset>
               </div>

               <div class="table-responsive table-ins">
                 <table class="table table-striped">
                   <thead style="color: #0080ff;font-weight:bold;">
                     <th></th>
                     <th>Code</th>
                     <th style="text-align:center;">Nom institution</th>
                     <!-- <th>Nationalité</th>
                     <th>Nombre projets accompagnés</th> -->
                     <!-- <th>Volume</th> -->

                   </thead>
                   <tbody>
                     <tr>
                       <td><input type="checkbox" name="" id="fich" onclick="checkfiche()" value="BAD"></td>
                       <td>BIS</td>
                       <td style="text-align:center;">Banque Islamique du Sénégal</td>
                       <!-- <td>Sénégal</td>
                       <td>18</td> -->
                       <!-- <td>Africaine</td> -->

                     </tr>

                     <tr>
                       <td><input type="checkbox" name="" id="fich" onclick="checkfiche()" value="BNDE"></td>
                       <td>BNDE</td>
                       <td style="text-align:center;">Banque nationale de développement</td>
                       <!-- <td>Allemagne</td>
                       <td>14</td> -->
                       <!-- <td>Nationale</td> -->

                     </tr>

                     <tr>
                       <td><input type="checkbox" name="" id="fich" onclick="checkfiche()" value="BNDE"></td>
                       <td>CAURIE</td>
                       <td style="text-align:center;">Coopérative autonome pour le renforcement des initiatives économiques</td>
                       <!-- <td>Allemagne</td>
                       <td>14</td> -->
                       <!-- <td>Nationale</td> -->

                     </tr>

                     <tr>
                     <td><input type="checkbox" name="" id="fich" onclick="checkfiche()" value="BNDE"></td>
                     <td>UMECAS</td>
                     <td style="text-align:center;">Union des mutuelles d'Epargne et de crédit des Artisans du Sénégal</td>
                     </tr>

                     <tr>
                     <td><input type="checkbox" name="" id="fich" onclick="checkfiche()" value="BNDE"></td>
                     <td>MEC DOLJI</td>
                     <td style="text-align:center;">Mutuelle d'épargne et de crédit dooleel jigueen</td>
                     </tr>
                   </tbody>
                 </table>
               </div>

               <div class="table-responsive table-ins1">
                 <table class="table table-striped">
                 <thead style="color: #0080ff;font-weight:bold;">
                     <th></th>
                     <th>Code</th>
                     <th>Nom institution</th>
                     <th>Nationalité</th>
                     <th>Nombre projets accompagnés</th>
                     <!-- <th>Volume</th> -->

                   </thead>
                   <tbody>
                   <tr>
                       <td><input type="checkbox" name="" id="fich" onclick="checkfiche()" value="BNDE"></td>
                       <td>BNDE</td>
                       <td>Banque nationale de développement</td>
                       <td>Allemagne</td>
                       <td>14</td>
                       <!-- <td>Nationale</td> -->

                     </tr>

                     <tr>
                       <td><input type="checkbox" name="" id="fich" onclick="checkfiche()" value="BNDE"></td>
                       <td>CAURIE</td>
                       <td>Coopérative autonome pour le renforcement des initiatives économiques</td>
                       <td>Allemagne</td>
                       <td>14</td>
                       <!-- <td>Nationale</td> -->

                     </tr>
                   </tbody>
                 </table>
               </div>

               <div class="table-responsive table-ins2">
                 <table class="table table-striped">
                 <thead style="color: #0080ff;font-weight:bold;">
                     <th></th>
                     <th>Code</th>
                     <th>Nom institution</th>
                     <th>Nationalité</th>
                     <th>Nombre projets accompagnés</th>
                     <!-- <th>Volume</th> -->

                   </thead>
                   <tbody>
                   <tr>
                       <td><input type="checkbox" name="" id="fich" onclick="checkfiche()" value="BAD"></td>
                       <td>BIS</td>
                       <td>Banque Islamique du Sénégal</td>
                       <td>Sénégal</td>
                       <td>18</td>
                       <!-- <td>Africaine</td> -->

                     </tr>

                   </tbody>
                 </table>
               </div>


               <div class="table-responsive table-ins3">
                 <table class="table table-striped">
                 <thead style="color: #0080ff;font-weight:bold;">
                     <th></th>
                     <th>Code</th>
                     <th>Nom institution</th>
                     <th>Nationalité</th>
                     <th>Nombre projets accompagnés</th>
                     <!-- <th>Volume</th> -->

                   </thead>
                   <tbody>
                   <tr>
                       <td><input type="checkbox" name="" id="fich" onclick="checkfiche()" value="BAD"></td>
                       <td>BIS</td>
                       <td>Banque Islamique du Sénégal</td>
                       <td>Sénégal</td>
                       <td>18</td>
                       <!-- <td>Africaine</td> -->
                     </tr>

                     <tr>
                       <td><input type="checkbox" name="" id="fich" onclick="checkfiche()" value="BNDE"></td>
                       <td>BNDE</td>
                       <td>Banque nationale de développement</td>
                       <td>Allemagne</td>
                       <td>14</td>
                       <!-- <td>Nationale</td> -->
                     </tr>




                   </tbody>
                 </table>
               </div>

               <div class="table-responsive table-ins4">
                 <table class="table table-striped">
                 <thead style="color: #0080ff;font-weight:bold;">
                     <th></th>
                     <th>Code</th>
                     <th>Nom institution</th>
                     <th>Nationalité</th>
                     <th>Nombre projets accompagnés</th>
                     <!-- <th>Volume</th> -->

                   </thead>
                   <tbody>
                     <tr>
                       <td><input type="checkbox" name="" id="fich" onclick="checkfiche()" value="BRS"></td>
                       <td>BRS</td>
                       <td>Banque Régionale de Solidarité</td>
                       <td>France</td>
                       <td>9</td>
                       <!-- <td>Nationale</td> -->

                     </tr>
                     <tr>
                       <td><input type="checkbox" id="fich" onclick="checkfiche()" value="ICF"></td>
                       <td>ICF</td>
                       <td>Investment climate facility</td>
                       <td>USA</td>
                       <td>31</td>
                       <!-- <td>Mondiale</td> -->

                     </tr>
                     <tr>
                       <td><input type="checkbox" name="" id="fich" onclick="checkfiche()" value="BM"></td>
                       <td>BM</td>
                       <td>Banque Mondiale</td>
                       <td>Italie</td>
                       <td>44</td>
                       <!-- <td>Mondiale</td> -->

                     </tr>

                     <tr>
                       <td><input type="checkbox" name="" id="fich" onclick="checkfiche()" value="BNDE"></td>
                       <td>BNDE</td>
                       <td>Banque nationale de développement</td>
                       <td>Allemagne</td>
                       <td>14</td>
                       <!-- <td>Nationale</td> -->
                     </tr>

                     <tr>
                       <td><input type="checkbox" name="" id="fich" onclick="checkfiche()" value="BID"></td>
                       <td>BID</td>
                       <td>Banque Islamique de développement</td>
                       <td>Allemagne</td>
                       <td>21</td>
                       <!-- <td>Mondiale</td> -->

                     </tr>

                   </tbody>
                 </table>
               </div>

               <div class="table-responsive table-ins5">
                 <table class="table table-striped">
                 <thead style="color: #0080ff;font-weight:bold;">
                     <th></th>
                     <th>Code</th>
                     <th style="text-align:center;">Nom institution</th>

                     <!-- <th>Volume</th> -->

                   </thead>
                   <tbody>
                     <tr>
                       <td><input type="checkbox" name="" id="fich" onclick="checkfiche()" value="BNDE"></td>
                       <td>BICIS</td>
                       <td style="text-align:center;">Banque Internationale du Commerce et de l'Industrie du Sénégal</td>
                       <!-- <td>Nationale</td> -->
                     </tr>
                     <tr>
                       <td><input type="checkbox" name="" id="fich" onclick="checkfiche()" value="BNDE"></td>
                       <td>BHS</td>
                       <td style="text-align:center;">Banque de l'habitat du Sénégal</td>
                       <!-- <td>Nationale</td> -->
                     </tr>
                     <tr>
                         <td><input type="checkbox" name="" id="fich" onclick="checkfiche()" value="BNDE"></td>
                         <td>SG</td>
                         <td style="text-align:center;">Société Générale Sénégal</td>
                         <!-- <td>Nationale</td> -->
                       </tr>
                   </tbody>
                 </table>
               </div>

               <br>
              <!-- <div class="row upload">
                <div class="col-md-3">

                  <div class="form-group form-file-upload form-file-multiple">
                  <input type="file" multiple="" class="inputFileHidden">
                  <div class="input-group">
                      <input type="text" class="form-control inputFileVisible" placeholder="Joindre plusieurs fichiers" multiple>
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-fab btn-round btn-info">
                              <i class="material-icons">layers</i>
                          </button>
                      </span>
                  </div>

                 </div>
                </div>
              </div> -->

              <div class="row upload">
              <div class="col-md-3">
                <div>
                  <input type="file" name="" multiple="" id="" placeholder="joindre fichier">
                </div>
              </div>
              </div>

               <br>

               <p style="color:red; margin:auto; font-weight:bold;">Merci de choisir l'institution que vous souhaitez retenir et cliquer sur soumettre
               </p>

             </div>

           </div>

           <!-- <div class="result">
           <div class="table-responsive">
            <table class="table">
            <thead>
             <th>Dénomination</th> <th>Sigle</th>  <th>Info</th>
             </thead>
             <tbody>
             <tr>
             <td>Mutuelle d'épargne et de crédit dooleel jigueen </td>
             <td>MEC DOLJI</td>
             <td><p>Dixième Carrière sur la route de l'ISM Thiès
              <br>
              33 951 12 65/77 509 60 60
             </p></td>
             </tr>
             </tbody>
            </table>
           </div>
           </div> -->
           <div class="row">
             <div class="col-md-3">
               <button id="prevBtn" onclick="nextPrev(-1)" class="btn btn-info">Precedent</button>
               <div class="clearfix"></div>
             </div>

             <div class="col-md-3">
               <button id="nextBtn" onclick="nextPrev(1)" class="btn btn-default samba">Suivant</button>
               <div class="clearfix"></div>
             </div>

             <div class="col-md-3">
               <button  type="submit" id="subm" class="btn btn-success">Soumettre</button>
               <div class="clearfix"></div>
             </div>

            <!-- <div class="col-md-3">
               <button type="submit" class="btn btn-success">Suivant</button>
               <div class="clearfix"></div>
             </div>-->
           </div>

           <div style="text-align:center;margin-top:40px;">
              <span class="step"></span>
              <span class="step"></span>
              <span class="step"></span>
              <span class="step"></span>
              </div>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>


<?php
include_once('footer.php');
?>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
document.getElementById('subm').style.display='none'
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  console.log(x);
  console.log(x[n].style.display);
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    //document.getElementById("nextBtn").innerHTML = "Submit";
    document.getElementById('subm').style.display="inline";
    document.getElementById('nextBtn').style.display='none';
  } else {
    document.getElementById("nextBtn").innerHTML = "Suivant";
    document.getElementById('nextBtn').style.display='inline';
    document.getElementById('subm').style.display="none";
  }

  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function hidetab(n){
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "none";
  console.log(x);
}

  function nextPrev(n){
    event.preventDefault();

   var x = document.getElementsByClassName("tab");
   console.log(document.getElementsByClassName('ggg'));

   console.log(n);
  // Exit the function if any field in the current tab is invalid:
  //if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("info").submit();
    return false;
  }

  //pour l'affichage de l'institution

  //verif si il a cocher particulier ou professionnel

  var l= document.getElementById("seca").value;
  console.log(l);
  document.getElementById("seca1").value= l;
  var h = document.getElementById("fourch").value;
  document.getElementById("fin").value = h;
  var acc1 = document.getElementById("activite1").value;
  document.getElementById("intitule").value =acc1;
  var q = document.getElementById("mySelect1").value;
  document.getElementById("typo").value = q;
  /*
  var k = document.getElementById("mySelect").value;


  var acc = document.getElementById("activite").value;





  //condition
  document.getElementById("intitule").value =acc;
  console.log("evaluation true or false" + (acc==""))

  if(acc !=""){
    document.getElementById("intitule").value =acc;
  }

  if(acc1 !=""){

  }
    //document.getElementById("intitule").value =acc1;

*/

  //verif

  /*if((l==='agriculture') && (h==='0-50') && (k==='personne') && (q==='credit bail')){
    $('.table-ins').show();
    $('.table-ins1').hide();
    $('.table-ins2').hide();
    $('.table-ins3').hide();
    $('.table-ins4').hide();
  }

  if((l==='elevage') && (h==='0-50') && (k==='personne') && (q==='credit bail')){
    $('.table-ins').show();
    $('.table-ins1').hide();
    $('.table-ins2').hide();
    $('.table-ins3').hide();
    $('.table-ins4').hide();
  }

  if((l==='elevage') && (h==='0-50') && (k==='personne') && (q==='epargne')){
    $('.table-ins1').show();
    $('.table-ins').hide();
    $('.table-ins2').hide();
    $('.table-ins3').hide();
    $('.table-ins4').hide();
  }

  if((l==='agriculture') && (h==='50-200') && (k==='association') && (q==='Garantie')){
    $('.table-ins2').show();
    $('.table-ins1').hide();
    $('.table-ins').hide();
    $('.table-ins3').hide();
    $('.table-ins4').hide();
  }

  if((l==='biens et services') && (k==='association' || k==='Groupement') && (h==='200-500') &&(q==='credit consommation')){
    $('.table-ins4').show();
    $('.table-ins1').hide();
    $('.table-ins2').hide();
    $('.table-ins3').hide();
    $('.table-ins').hide();
  }

  if((l==='biens et services') && (k==='association' || k==='Groupement') && (h==='200-500') &&(q==='credit consommation')){
    $('.table-ins4').show();
    $('.table-ins1').hide();
    $('.table-ins2').hide();
    $('.table-ins3').hide();
    $('.table-ins').hide();
  }

  if((l==='peche') && (k==='personne' || k==='association') && (h==='0-50') &&(q==='epargne')){
    $('.table-ins4').hide();
    $('.table-ins1').hide();
    $('.table-ins2').hide();
    $('.table-ins3').show();
    $('.table-ins').hide();
  }
  */


  // Otherwise, display the correct tab:
  /*var partt = document.getElementById("par");

  var pro = document.getElementById("pro");

  console.log(partt.checked);

 if(partt.checked ===false && pro.checked===false){
   alert("Vous devez cocher sur une des options particulier ou professionnel, Revenez sur precedent");
   //showTab(0);
 }*/

 showTab(currentTab);

}


  function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
      // If a field is empty...
      if (y[i].value == "") {
        // add an "invalid" class to the field:
        y[i].className += " invalid";
        // and set the current valid status to false:
        valid = false;
      }
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
      document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
  }

  function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += "active";
}

var currentli = 1;

//showActivate(currentli);

function showActivate(n){
  var x = document.getElementsByClassName("active1");
  console.log(x[n].style);
  x[n].style.backgroundColor="#6495ED";
  x[n].style.color="white";
  //x[n].style.fontWeight="bold";
  x[n].style.fontSize="14px";
}

/*function checkValue(){
  var k = document.getElementById('par');
  console.log(k.value)
  if (document.getElementById("par").checked==true){
     document.getElementById("pro").checked=false;
     $('.particulier').show();
     $('.table-ins5').show();
     $('.table-ins').hide();
      $('.samba').show();
     $('.mbi').show();
     $('.professionnel').hide();
  }else{
    document.getElementById("par").checked==false;
  }

}*/

function soumettre(){
 event.preventDefault();
 hidetab(2);
 $('.result').show();

}

function checkfiche(){
  var k = document.getElementById('fich');
  console.log(k.value)
  //document.getElementById("code").innerHTML = k.value;
  $('.fiche').show();
  $('.upload').show();
}

/*function checkValue1(){
  var k = document.getElementById('pro');
  if (document.getElementById("pro").checked==true){
     document.getElementById("par").checked=false;
     $('.professionnel').show();
     $('.mbi').show();
     $('.samba').show();
     $('.particulier').hide();
  }else{
    document.getElementById("pro").checked==false;
  }

}*/

$('document').ready(function(){
  //$('.professionnel').hide();
  $('.particulier').hide();
  $('.mbi').hide();
  //$('.samba').hide();
  $('.prec').hide();
  $('.prec1').hide();
  $('.table-ins').show();
  $('.table-ins1').hide();
  $('.table-ins2').hide();
  $('.table-ins3').hide();
  $('.table-ins4').hide();
  $('.table-ins5').hide();
  $('.fiche').hide();
  $('.upload').hide();
  $('.result').hide();
  $('.prec3').hide();

  console.log(document.getElementById("seca").value);
})

function mychoice(){
  var x = document.getElementById("mySelect").value;
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

function choice2(){
  var x = document.getElementById("mySelect1").value;
  console.log(x);
  if(x==='autre'){
    $('.prec1').show();
  }else{
      $('.prec1').hide();
  }
}


</script>
