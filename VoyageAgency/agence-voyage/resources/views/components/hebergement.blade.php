<div class="hcontainer">
    <div class="hebergementcontainer">
        <div class="row g-0 text-center mb-3">
            <div data-htab-target="#list"  class="col-6 active htab bordcol">
                List hebergement
            </div>
            <div data-htab-target="#ajout" class=" col-6 htab bordcol">
                Ajout hebergement
            </div>
        </div>
       
    </div>
    <div class="htab-content">
        <div id="list" data-htab-content class="">
            <x-h-list />
        </div>
        <div id="ajout" data-htab-content class=" container active">
            <x-h-ajout />
        </div>
    </div>
</div>
