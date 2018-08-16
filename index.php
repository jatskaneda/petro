<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="utf-8">
   <meta name="description" content="CALCULADORA INTERACTIVA DE PETRO SAREN">
   <meta name="keywords" content="calculadora petro crypto cryptomonedas euros bolivares fuertes">
   <meta name="author" content="Jonathan Tovar - jatskaneda@gmail.com">
   <title>PETRO SAREN</title>
   <!-- Bootstrap Core CSS -->
   <link href="css/bootstrap.css" rel="stylesheet">
   <!-- Custom CSS -->
   <link href="css/modern-business.css" rel="stylesheet">
   <!-- Custom Fonts -->
   <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   <!-- Site CSS -->
   <link href="assets/css/site.css" rel="stylesheet">

   <script type="text/javascript">

      
      
      var doc = function(id) {
        return document.getElementById(id);
      }
    
      function PetroValor() {
          //alert(doc('petro').value);
          
          var petro = doc('petro').value;

          valor = petro * valor_petro_eur();
          eurs = roundTo2Decimals(valor);
          doc('eur').value = eurs;

          valor_bsf = eurs * valor_euro_bsf();
          bsfs = roundTo2Decimals(valor_bsf);
          doc('bsf').value = bsfs;
          
      }//end function PetroValor

      function PetroValorBsf() {
          //alert(doc('petro').value);
          
          var bsfs = doc('bsf').value;

          valor_eurs = bsfs / valor_euro_bsf();
          eurs = roundTo2Decimals(valor_eurs);
          doc('eur').value = eurs;

          valor_petro = eurs / valor_petro_eur();
          petros = roundTo2Decimals(valor_petro);
          doc('petro').value = petros;

          
          
      }//end function PetroValorBsf

      function PetroValorEur() {
          //alert(doc('petro').value);
          
          var eurs = doc('eur').value;

          valor_petro = eurs / valor_petro_eur();
          petros = roundTo2Decimals(valor_petro);
          doc('petro').value = petros;

          valor_bsf = eurs * valor_euro_bsf();
          bsfs = roundTo2Decimals(valor_bsf);
          doc('bsf').value = bsfs;
          
      }//end function PetroValor

      function roundTo2Decimals(v) {
        return Math.round(v*100)/100;
      }

      function valor_petro_eur(){
        var valor_petro_euro = 50.77;
        return valor_petro_euro;
      }

      function valor_euro_bsf(){
        var valor_euro_bsf = 73315.90;
        return valor_euro_bsf;
      }

      //links de precios
      //http://www.minpet.gob.ve/index.php/es-es/
      //https://www.dicom.gob.ve/
      //http://sisref.saren.gob.ve/petro/

   </script>
</head>
<body>
<header>
   <div class="container">
      <div class="row">
         <div class="col-md-10 col-md-offset-1">
            <img class="img-responsive" src="img/cabecera.png">
         </div>
      </div>
   </div>
</header>
<nav>
	
</nav>
<br><br>
<article>
 	<div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
                <div class="form-group">
                  <div class="row">
                    <h4 style="text-align: center; color: #337ab7"><strong>CALCULADORA INTERACTIVA DE PETRO</strong></h4>
                  </div>
                </div>
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title">1 EUR = 73.315,90 BSF</h3>
                  </div>
                  <div class="panel-body">
                    <div class="row">
                      <div class="form-group">                        
                        <div class="col-md-6 col-md-offset-2">
                          <input id="petro" type="number" class="form-control" name="petro" value="1" min="0" onkeyup="PetroValor();" required="" autofocus=""/>
                        </div>
                        <h3>PETRO</h3>                  
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="form-group">                                  
                        <div class="col-md-6 col-md-offset-2">
                          <input id="bsf" type="number" class="form-control" name="bsf" value="0.0" min="0" onkeyup="PetroValorBsf();" required=""/>
                        </div>
                        <h3>BsF</h3>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="form-group">                                  
                        <div class="col-md-6 col-md-offset-2">
                            <input id="eur" type="number" class="form-control" name="eur" value="0.0" min="0" onkeyup="PetroValorEur();" required=""/>
                        </div>
                        <h3>EUR</h3>
                      </div>
                    </div>
                  </div>
                </div>          
        </div>        
      </div>
   </div>
</article>
</body>
</html>
