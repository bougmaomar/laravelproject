<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
    </head>
    <body>
        <x-navbar></x-navbar>
        <div class="adminbarcontainer">
            <ul class="sidetabs">
                <li data-sidetab-target="#clients" class="sidetab">
                    Clients
                </li>
                <li data-sidetab-target="#hebergement" class="sidetab active">
                    Hebergement
                </li>
                <li data-sidetab-target="#activite" class="sidetab">
                    Activite
                </li>
            </ul>
        </div>
        <div class="sidetab-content">
            <div id="clients" data-sidetab-content class="active">
                
            </div>
            <div id="hebergement" data-sidetab-content>
                <x-hebergement />
            </div>
            <div id="activite" data-sidetab-content>
                <p>this is Activite</p>
            </div>
        </div>
    </body>
</html>
