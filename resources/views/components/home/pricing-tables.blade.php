<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-md text-center lg:mb-12">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Nos offres</h2>
            <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">Découvrez nos offre flexibles qui vous donnent accès à une variété de cours, adaptés à vos besoins, que vous souhaitiez apprendre de nouvelles compétences ou approfondir vos connaissances.</p>
        </div>
        <div class="my-8 space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
            <!-- Pricing Card -->
            <x-pricing-card title="Basic" text="Commencez un module qui vous intéresse" price="29€" button="Souscrire" :listItems="[['', 'Ceci est un argument'], ['', 'Ceci est un argument']]"></x-pricing-card>
            <!-- Pricing Card -->
            <x-pricing-card title="Premium" text="Accédez à l'intégralité de nos modules" price="99€" button="Souscrire" :listItems="[['', 'Ceci est un argument'], ['', 'Ceci est un argument'], ['Ici :', 'Ceci est un argument']]"></x-pricing-card>
            <!-- Pricing Card -->
            <x-pricing-card title="Ecoles/Enterprises" text="Donnez accès à l'intégralité de nos modules à un groupe" price="$499" button="Souscrire" :listItems="[['', 'Ceci est un argument'], ['', 'Ceci est un argument'], ['Ici :', 'Ceci est un argument'], ['Ici :', 'Ceci est un argument'], ['Ici :', 'Ceci est un argument']]"></x-pricing-card>
        </div>
        <div class="flex justify-center w-full">
            <a href="{{ route('pages.offres')}}" class="text-white bg-primary-green hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white dark:focus:ring-primary-900">En savoir plus</a>
        </div>
    </div>
</section>
