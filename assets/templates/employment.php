

<div class="container text-center wrapper">
    <div class="row mt-4">
        <div class="col-12">
            <h1 class="main-title">Créer une offre</h1>
        </div>
    </div>

  <form action="/forms/addOffer.php" method="POST">
        <div class="row col-12 mt-4">
            <div class="col-lg-6">
                <select class="form-select" name="position" id="position" required="required">
                    <option value="" disabled selected>Poste proposé</option>
                    <option value="0">Préparateur en pharmacie</option>
                    <option value="1">Pharmacien</option>
                    <option value="2">Rayonniste</option>
                    <option value="3">Vendeur - Conseiller</option>
                </select>
            </div>

            <div class="col-lg-6">
                <input class="form-control" type="text" name="entitled" id="entitled" placeholder="Intitulé de l'offre" required="required">
            </div>
        </div>



        <div class="row col-12 mt-3">

            <div class="col-lg-2 mt-2">
                Disponible à partir du :
            </div>
            <div class="col-lg-4">
                <input class="form-control" type="date" name="dateStart" id="dateStart" required="required">
            </div>
            <div class="col-lg-3">
                <select class="form-select" name="contract" id="contract">
                    <option value="" disabled selected>Type de contrat proposé</option>
                    <option value="0">CDI</option>
                    <option value="1">CDD</option>
                    <option value="2">Remplacement</option>
                </select>
            </div>
            <div class="col-lg-3">
                <input class="form-control" type="number" name="salary" id="salary" required="required" placeholder="Salaire (brut)">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-12">
                <textarea class="form-control" name="description" id="jobDescription" rows="3" placeholder="Description de l'offre (min. 150 caratères)" onkeyup="checkLength()"></textarea>    
            </div>
            <label id="charCount"></label>
        </div>
        <div class="row mt-3">
            <div class="col-lg-12">
                <input class="btn btn-primary" type="submit" value="Publier l'annonce">
            </div>
        </div>
    </form>
</div>