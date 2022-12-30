@extends('app')

@section('content')

<div class="container border p-4">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Què és un filtre anti-xss?</h5>
                    <p class="card-text">És una protecció que se situa entre un formulari web i el servidor d'aquest. És una eina que elimina els caràcters necessaris per evitar una execució fraudulenta que pugui modificar o extreure dades confidencials.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">De què em pot protegir?</h5>
                    <p class="card-text">Aquesta protecció evita qualsevol ciber-atac de tipus injecció de codi per a llenguatge JavaScript. És una gran multitud els atacs darrere aquesta pràctica i, per tant, és important una bona protecció per ganarir la confidencialitat, integritat i disponibilitat de les dades i el servei.</p>
                </div>
            </div>
        </div>
    </div><br>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Quina particularitat té el nostre filtre?</h5>
                    <p class="card-text">A diferència de moltes altres eines de filtrat, en ser un servei al núvol, es pot centralitzar la protecció de totes els entrades a la mateixa eina, independentment del framework o llenguatge utilitzat. Disposa de múltiples avantatges:</p>
                </div>
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Extracció de solucions
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                El futur del desenvolupament web es desplaça cap a la modularització del codi, i l'extracció d'una eina de protecció segueix al peu de la lletra aquesta filosofia. Elimina la duplicació de codi i facilita la seva gestió, d'aquesta manera es pot centralitzar i extreure volum del nucli de la pàgina.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                Rapidesa d'actualització
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                En tenir totes les entrades centralitzades a una mateixa API, davant una vulnerabilitat de tipus "Zero Day", una petita actualització al filtre modificarà el comportament del filtre de totes les entrades. És un procés molt més àgil que la comprovació de cada una de les eines utilitzades segons la tecnologia i la substitució i/o actualització d'aquestes.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                Independència de tecnologia
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                                És un punt molt important sobretot per aquelles empreses que disposen de múltiples portals desenvolupats amb diferents tecnologies. Els temps evolucionen i els llenguatges i frameworks també, és per això que moltes empreses s'actualitzen i desenvolupen noves tecnologies amb diferents eines de desenvolupament per adequar al màxim el rendiment, la seguretat o la rapidesa de desenvolupament. Aquest filtre petmet ser utilitzat per qualsevol tecnologia.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
    <div class="row mx-auto">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Com funciona?</h5>
                    <p class="card-text">És una eina desenvolupada en Python que treballa sobre un servidor cloud en forma d'API REST. Cada vegada que es rebi un formulari web, les dades s'enviaran xifrades a aquesta API que les retornarà amb els caràcters maliciosos eliminats. D'aquesta manera les dades sempre viatjaran segures i el desenvolupador només ha de fer una crida per a cada camp d'entrada que l'usuari ha pogut modificar amb caràcters.</p>
                </div>
            </div>
        </div>
    </div><br>
    <div class="row mx-auto">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Hi ha més eines per afegir seguretat?</h5>
                    <p class="card-text">S'està treballant amb el desenvolupament d'una eina similar, basada en filtratge de llista negra, que encodeja els caràcters maliciosos abans de la sortida de les dades. És fàcil tenir dades a la base de dades que executin un malware al servidor i resten esperant a una execució, com per exemple la petició per part d'un client d'aquestes dades. Un atac d'aquest tipus podria extreure les dades del navegador del client. És per això que com a mesura de protecció addicional plantejem una solució semblant que se situa cada vegada que enviem dades a un altre component, servidor, API o senzillament les imprimim a la pantalla del client. És un filtrat menys restrictiu que el d'entrada ja que conserva tots els caràcters perillosos (però encodejats) i només actua en condicions concretes de possibilitat de malware. Aquesta eina es troba en desenvolupament i molt aviat estarà disponible.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
