<?php
include_once('layout.php');
?>

<div class="content">

<div class="container-fluid" style="margin-top:80px;">
 <div class="col-md-12">

   <div class="card">
   <div class="card-header" style="background-color:#6495ED;">
     <h4 class="card-title" style="font-weight: bold;">PROFIL</h4>
   </div>
    <div class="card-body">
      <form id="info" action="valid.php" method="POST">
        <div class="row">
            <div class="col-md-3">
              <!-- <p>Particulier/Professionnel</p>  -->
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
          </div>
          </div>

          <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-6">
              <button  type="submit" id="subm" class="btn btn-success samba">Accéder</button>
              <div class="clearfix"></div>
            </div>

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

<script type="text/javascript">
$('document').ready(function(){
  $('.samba').hide();
  document.getElementById("pro").checked=false;
  document.getElementById("par").checked==false;
})
function checkValue(){
  var k = document.getElementById('par');
  console.log(k.value)
  if (document.getElementById("par").checked==true){
      document.getElementById("pro").checked=false;
      $('.samba').show();
  }else{
    document.getElementById("par").checked==false;
  }

}

function checkValue1(){
  var k = document.getElementById('pro');
  if (document.getElementById("pro").checked==true){
      document.getElementById("par").checked=false;
        $('.samba').show();
  }else{
    document.getElementById("pro").checked==false;
  }

}
</script>
