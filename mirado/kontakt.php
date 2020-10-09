<!DOCTYPE HTML>
<html>
<head>
<?php include ('includes/head.php'); ?>
</head>

<?php include ('includes/navigacija.php'); ?>

  <div class="container py-5">
    <h1> KONTAKT </h1></br></br>	
    <div class="row">
      <div class="col-md-8">
         
          <form action="FormToEmail.php" method="POST">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name"><b>Ime</b></label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Unesite ime" required />
                </div>
                <div class="form-group">
                  <label for="email"><b>Email</b></label>
                  <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span> </span>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Unesite email" required />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name"><b>Poruka</b></label>
                  <textarea name="message" id="message" class="form-control" rows="12" cols="35" required
                   placeholder="Unesite poruku"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <button type="submit" name="submit" class="btn btn-primary float-right" id="btnContactUs"> Pošalji</button>
              </div>
            </div>
          </form>          

      </div>
      <div class="col-md-4">
        <h3> Mirado d.o.o </h3>
        <address>
        <p> Svete Milutinovića 17A, 11251 Železnik </span></p>
        <p> Tel: 069/2575 305</span></p>
        <p> Mob: 063/604 184 </span> </p>
        <p> <a href="mailto: mirado@hotmail.rs">mirado@hotmail.rs</a></span></p>
   
        </address>
        </form>
      </div>
    </div>
  </div>

<!-- Mapa -->
<div class="container">
<p>&nbsp;</p>
<div class="mapouter"><div class="gmap_canvas"><iframe width="1200" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=svete%20milutinovica%2017a&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com/nordvpn-coupon/"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:1200px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1200px;}</style></div>
<p>&nbsp;</p>
</div>
<!-- Mapa -->



<?php include ('includes/footer.php'); ?>
</body>
</html>