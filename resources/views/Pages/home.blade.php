@extends('layouts.index')

@section('content')
    
    <div class="mb-24 w-full md:w-1/2 flex flex-col gap-6 items-center text-center md:text-start md:items-start">
        <img src="/images/Logo_typo_Plan.svg" alt="">
        <h1 class="font-extrabold text-center md:text-start text-5xl">L'apprentissage pour prendre son envole</h1>
        <p class="">Découvrez notre plateforme d’apprentissage afin de prendre votre envole dans la vie active ! </p>
        <div class="flex gap-6 font-medium">
            <a class="py-2 px-4 rounded-full text-black bg-green-300" href="">S'inscrire</a>
            <a class="py-2 px-4 border rounded-full transparent" href="">Connectez-vous</a>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-6">
        <div class="text-center md:text-start flex flex-col gap-6">
            <h2 class="font-extrabold text-3xl">Une plateforme dédiée aux jeunes actifs</h2>
            <p class="">Grace à Conéo, vous pourrez rentrer dans la vie active avec toutes les connaissances nécessaires pour les besoins d’un adultes ! Logement, contrats, écoles, entreprises. Vous serez incollables ! </p>
        </div>
        <img class="w-1/2 rounded-xl" src="/images/man1.png" alt="">
    </div>
    

    <div class="container flex flex-col h-full items-center pt-20 gap-x-7">
        <h1 class="text-rose-600 font-extrabold text-center text-5xl">Envolez-vous vers la connaissance !</h1>
        <div class="flex flex-col md:flex-row mt-8 w-3/4 gap-4 md:gap-10">
            <p class="md:w-1/2">Une base de connaissances approfondie et...</p>
            <p class="md:w-1/2">Tout apprendre de manière divertissante, afin de ne jamais vous ennuyez ! C’est bien autre chose que de faire vos contrats de logement...</p>
        </div>
    </div>
@endsection