@extends('layout.master')

@section('inhalt')

<div class="row">
    <div class="col-md-4">
        <h4>Aktenarchivierung</h4>
        <div class="image_container float_left" style="float:left;">
            <img src="assets/images/9/aktenarchiv02-88333059.jpg" width="94" height="80" alt="">
        </div>

        <p>Wir bieten Ihnen einen Komplettservice rund um die Akteneinlagerung,
            alles aus einer Hand. Die Auslagerung Ihres Archivs hat eine Vielzahl
            von großen Vorteilen für Sie und Ihr Unternehmen. </p>
    </div>
    <div class="col-md-4">
        <h4>Archivberatung</h4>
        <div class="image_container float_left" style="float:left;">
            <img src="assets/images/d/aktenarchiv03-8a6ae24d.jpg" width="94" height="80" alt="">
        </div>
        <p>Sie haben die Wahl zwischen vielfältigen Archivlösungen, die passgenau Ihren Wünschen und Ihrem Bedarf entsprechen. </p>
    </div>
    <div class="col-md-4">
        <h4>Kundenlogin</h4>
        <form class="form-horizontal" action="login" id="tl_login" method="post">
            <div class="form-group">
                <label for="username" class="control-label col-xs-2">Benutzername </label>
                <div class="col-xs-8 pull-right">
                    <input type="text" name="username" id="username" class="form-control" value="">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="control-label col-xs-2">Passwort </label>
                <div class="col-xs-8 pull-right">
                    <input type="password" name="password" id="password" class="form-control password" value="">
                </div>

            </div>
            <div class="form-group">
                <div class="col-xs-offset-2 col-xs-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" id="remember" value="1" class="checkbox"> Angemeldet bleiben
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                 <div class="col-xs-offset-2 col-xs-10">
                <button type="submit" class="btn btn-primary">anmelden</button>
            </div>
            </div>
        </form>
    </div>
</div>
<div class="mod_article first last block" id="home">


   <section class="ce_colsetStart spaltenset equalize subcolumns colcount_2 yaml3 col-50x50" style="margin-bottom:10px;">
       <!-- first Column //-->
       <div class="c50l col_1 first">
           <div class="subcl" style="padding-right:5px;">

               <div class="ce_text block">

                   <h4>Logistik und Warehousing</h4>


                   <figure class="image_container float_left" style="float:left;">


                       <img src="assets/images/0/kurier-66701e80.jpg" width="94" height="80" alt="">



                   </figure>

                   <p>Wir bieten Ihnen mehr als nur Lagerfläche und das unschlagbar günstigen Konditionen. Sie erhalten von uns individuell maßgeschneiderte Lagerflächen in allen Größen. </p>
               </div>
           </div>
       </div>
       <!-- second Column //-->
       <div class="ce_colsetPart c50r col_2 last">
           <div class="subcr" style="padding-left:5px;">

               <div class="ce_text block">

                   <h4>Datenträgeraufbewahrung</h4>


                   <figure class="image_container float_left" style="float:left;">


                       <img src="assets/images/b/datentraeger-b5f3b37b.jpg" width="94" height="80" alt="">



                   </figure>

                   <p>Sie haben die Wahl zwischen vielfältigen Archivlösungen für Datenträger aller Art. Ob im Hochsicherheitsbunker oder versiegelte Seecontainer, wir finden die passende Lösung. </p>
               </div>
           </div>
       </div>
   </section>
   <!-- Spaltenset End //-->

   <!-- Spaltenset Start //-->
   <section class="ce_colsetStart spaltenset equalize subcolumns colcount_2 yaml3 col-50x50">
       <!-- first Column //-->
       <div class="c50l col_1 first">
           <div class="subcl" style="padding-right:5px;">

               <div class="ce_text block">

                   <h4>Digitalisierung und Dokumenten Management</h4>


                   <figure class="image_container float_left" style="float:left;">


                       <img src="assets/images/6/digitalisierung_dms-1010e106.jpg" width="94" height="80" alt="">



                   </figure>

                   <p>Wir bieten zusammen mit unserem Scan-Dienstleister verschiedene Digitalisierungsdienste an, vom kosteneffizienten Scan-On-Demand bis Scan-Complete ist alles möglich. </p>
               </div>
           </div>
       </div>
       <!-- second Column //-->
       <div class="ce_colsetPart c50r col_2 last">
           <div class="subcr" style="padding-left:5px;">

               <div class="ce_text block">

                   <h4>Aktenvernichtung</h4>


                   <figure class="image_container float_left" style="float:left;">


                       <img src="assets/images/8/aktenvernichtung-00822ae8.jpg" width="94" height="80" alt="">



                   </figure>

                   <p>Wir vernichten Ihre Akten nach Bundesdatenschutzgesetz. Die Akten werden nach gewünschter Sicherheitsstufe bei uns oder vor Ort bei Ihnen zerkleinert. </p>
               </div>
           </div>
       </div>
   </section>
   <!-- Spaltenset End //-->

</div>


@endsection
