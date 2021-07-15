@extends('section2base')
@section('title')
    Exercice 1
@endsection

@section('style')
    <link rel="stylesheet" href="{{asset('css/section2/exercice1/main.css')}}" />
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="row">
                    <div class="col h-auto d-inline-block">
                    <h2>Description de la partie:</h2>
                    </div>
                </div>
                </div>
                <div class="exercice-description">
                    <p class='descriptionContent'>
                        <i class="stop fas fa-exclamation-triangle mr-2"></i> Dans cette partie , vous allez choisir les adjectifs qui vous décrivent le mieux selon qu'ils sont
                        avantageux pour vous et pour votre entourage ou pas.  <br>
                        <button class="mt-2 mb-2 showPartieBtn" id="showPartieBtn">Afficher la partie</button> : <span>10 choix au minimum.</span>
                    </p>
              </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    <div class="description" id="descriptionBigBox">
        <div class="exercice-title">
        <div class="row">
            <div class="col h-auto d-inline-block">
            <h2>Description de la partie:</h2>
            </div>
        </div>
        </div>
        <div class="exercice-description">
         <p class='descriptionContent'>
            <i class="stop fas fa-exclamation-triangle mr-2"></i> Dans cette partie , vous allez à l'aide de vos choix ,determin votre dégré de créativité
              <br>
            <button class=" mt-2 mb-2 showPartieBtn" id="showPartieBtn">Commencer la partie</button> : <span>15 choix au minimum.</span>
         </p>
      </div>
    </div>
    <div class="container" id="contentBoxe">
        <div id="adjectifDiv" class="row mb-5" ></div>
        <div class="container mb-5">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 mb-2">
                    <div class="row">
                        <div class="col-12">
                            <p class="text-center"><u>Mes choix <i class="ok far fa-check-circle"></i></u></p>
                        </div>
                        <div class="col-12">
                            <div id="avantageux" class="row">
                                <div class="col-12 box">
                                    <div class="col-12 reponseBoxe" id = 'reponseBoxe'></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row mt-3">
                <div class="col-3"></div>
                <div class="col-6" id = 'validation'>
                    <button id='validationBtn'  class="" style="width:100%">Validez <i class='ml-2 fas fa-check'></i></button>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </div>
    <div class="container mt-3 statistiqueContent" id = "statistiqueContent">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 mb-1">
                <div class="row">
                    <div class="pl-2 pr-2 pt-2 pb-2 col-12 statistiquesContainer">
                        <h3 class="statistiques pl-3">Statistiques : </h3>
                        <p class="appreciation mt-1">
                            <span id='appreciation'>Vous avez passez cet exercice avec un score de</span> <span class="scoregame ml-2" id='scoregame'> 0 / 20</span>.
                        </p>
                        <p class="appreciationcontent mt-1" id='appreciationcontent'></p>
                        <div class="afair pl-1 row mb-3" id='afair'>
                            <button id ='redoBTN' class="ml-3 mr-3">Refaire la partie</button> <a class="ml-4" href="{{ route('s2_challenge',['id' => 2])}}"><button id='btnNext'>Passez le challenge</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
@section('script')
    <script defer type="module" src="{{asset('/js/section2/exercice1/main.js')}}"></script>
@endsection
