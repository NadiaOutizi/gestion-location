<x-perfect-scrollbar
    as="nav"
    aria-label="main"
    class="flex flex-col flex-1 gap-4 px-3"
>

    <x-sidebar.link
        title="Tableau De Bord"
        href="{{ route('dashboard') }}"
        :isActive="request()->routeIs('dashboard')"
    >
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.dropdown
        title="Clients"
        :active="Str::startsWith(request()->route()->uri(), 'buttons')"
    >
        <x-slot name="icon">
            <x-icons.client class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink
            title="Nouveau Client"
            href="{{ route('clients.create') }}"
            :active="request()->routeIs('clients.create')"
        />
        <x-sidebar.sublink
            title="Liste Clients"
            href="{{ route('clients.index') }}"
            :active="request()->routeIs('buttons.icon')"
        />
        <x-sidebar.sublink
            title="Nouveau Règlement "
            href="{{ route('reglements.create') }}"
            :active="request()->routeIs('reglements.create')"
        />
        <x-sidebar.sublink
            title="Listes Règlement"
            href="{{ route('reglements.index') }}"
            :active="request()->routeIs('reglements.index')"
        />
    </x-sidebar.dropdown>
    <x-sidebar.dropdown
        title="Véhicules"
        :active="Str::startsWith(request()->route()->uri(), 'buttons')"
    >
        <x-slot name="icon">
            <x-icons.vehi class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink
            title="Nouvelle Vehicule"
            href="{{ route('nouvellevehicules.create') }}"
            :active="request()->routeIs('nouvellevehicules.create')"
        />
        <x-sidebar.sublink
            title="Listes Vehicules"
            href="{{ route('nouvellevehicules.index') }}"
            :active="request()->routeIs('nouvellevehicules.index')"
        />
        <x-sidebar.sublink
            title="Nouvelle Visite technique"
            href="{{ route('visitetechniques.create') }}"
            :active="request()->routeIs('visitetechniques.create')"
        />
        <x-sidebar.sublink
            title="Liste Visites techniques"
            href="{{ route('visitetechniques.index') }}"
            :active="request()->routeIs('visitetechniques.index')"
        />
        <x-sidebar.sublink
            title="Nouvelle Assurance"
            href="{{ route('assurances.create') }}"
            :active="request()->routeIs('assurances.create')"
        />
        <x-sidebar.sublink
            title="Listes Assurances"
            href="{{ route('assurances.index') }}"
            :active="request()->routeIs('assurances.index')"
        />
    </x-sidebar.dropdown>
    <x-sidebar.dropdown
        title="Contrats"
        :active="Str::startsWith(request()->route()->uri(), 'buttons')"
    >
        <x-slot name="icon">
            <x-icons.contra class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink
            title="Nouveau Contrat"
            href="{{ route('contrats.create') }}"
            :active="request()->routeIs('contrats.create')"
        />
        <x-sidebar.sublink
            title="Liste Contrats"
            href="{{ route('contrats.index') }}"
            :active="request()->routeIs('contrats.index')"
        />
    
    </x-sidebar.dropdown>
    <x-sidebar.dropdown
        title="Reservations"
        :active="Str::startsWith(request()->route()->uri(), 'buttons')"
    >
        <x-slot name="icon">
            <x-icons.calndre class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink
            title="Nouvelle reservation"
            href="{{ route('reservations.create') }}"
            :active="request()->routeIs('reservations.create')"
        />
        <x-sidebar.sublink
            title="Liste reservations"
            href="{{ route('reservations.index') }}"
            :active="request()->routeIs('reservations.index')"
        />
     
    </x-sidebar.dropdown>
    <x-sidebar.dropdown
        title="Infractions"
        :active="Str::startsWith(request()->route()->uri(), 'buttons')"
    >
        <x-slot name="icon">
            <x-icons.infra class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink
            title="Nouvelle infraction"
            href="{{ route('infractions.create') }}"
            :active="request()->routeIs('infractions.create')"
        />
        <x-sidebar.sublink
            title="Liste infractions"
            href="{{ route('infractions.index') }}"
            :active="request()->routeIs('infractions.index')"
        />
       
    </x-sidebar.dropdown>
    <x-sidebar.dropdown
        title="Entretien"
        :active="Str::startsWith(request()->route()->uri(), 'buttons')"
    >
        <x-slot name="icon">
            <x-icons.entre class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink
            title="Nouvelle Entretien"
            href="{{ route('listeinterventions.create') }}"
            :active="request()->routeIs('listeinterventions.create')"
        />
        <x-sidebar.sublink
            title="Liste Entretien"
            href="{{ route('listeinterventions.index') }}"
            :active="request()->routeIs('listeinterventions.index')"
        />
        <x-sidebar.sublink
            title="Liste types Entretien"
            href="{{ route('typeinterventions.index') }}"
            :active="request()->routeIs('typeinterventions.index')"
        />
    </x-sidebar.dropdown>
    <x-sidebar.dropdown
        title="Charges"
        :active="Str::startsWith(request()->route()->uri(), 'buttons')"
    >
        <x-slot name="icon">
            <x-icons.charge class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink
            title="Nouvelle charge"
            href="{{ route('charges.create') }}"
            :active="request()->routeIs('charges.create')"
        />
        <x-sidebar.sublink
            title="Liste charges"
            href="{{ route('charges.index') }}"
            :active="request()->routeIs('charges.index')"
        />
      
    </x-sidebar.dropdown>
    <x-sidebar.dropdown
        title="Factures"
        :active="Str::startsWith(request()->route()->uri(), 'buttons')"
    >
        <x-slot name="icon">
            <x-icons.facture class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink
            title="Nouvelle Facture"
            href="{{ route('factures.create') }}"
            :active="request()->routeIs('factures.create')"
        />
        <x-sidebar.sublink
            title="Liste Factures"
            href="{{ route('factures.index') }}"
            :active="request()->routeIs('factures.index')"
        />
        <x-sidebar.sublink
            title="Nouvelle Devis"
            href="{{ route('buttons.text-icon') }}"
            :active="request()->routeIs('buttons.text-icon')"
        />
        <x-sidebar.sublink
            title="BON DE COMMANDE"
            href="{{ route('buttons.text-icon') }}"
            :active="request()->routeIs('buttons.text-icon')"
        />
        <x-sidebar.sublink
            title="BON DE LIVRAISON"
            href="{{ route('buttons.text-icon') }}"
            :active="request()->routeIs('buttons.text-icon')"
        />
      
      
    </x-sidebar.dropdown>
    <x-sidebar.dropdown
        title="Recettes"
        :active="Str::startsWith(request()->route()->uri(), 'buttons')"
    >
        <x-slot name="icon">
            <x-icons.recet class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink
            title="Nouvel Recette"
            href="{{ route('revenus.create') }}"
            :active="request()->routeIs('revenus.create')"
        />
        <x-sidebar.sublink
            title="Liste Recette"
            href="{{ route('revenus.index') }}"
            :active="request()->routeIs('revenus.index')"
        />

    </x-sidebar.dropdown>
    <x-sidebar.link
        title="Traites"
        href="{{ route('traites.create') }}"
        :isActive="request()->routeIs('traites.create')"
    >
        <x-slot name="icon">
            <x-icons.traite class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>
    <x-sidebar.dropdown
        title="Parametres"
        :active="Str::startsWith(request()->route()->uri(), 'buttons')"
    >
        <x-slot name="icon">
            <x-icons.setting class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink
            title="Agence"
            href="{{ route('agences.create') }}"
            :active="request()->routeIs('agences.create')"
        />
        <x-sidebar.sublink
            title="Parametre"
            href="{{ route('profile.edit') }}"
            :active="request()->routeIs('profile.edit')"
        />
       
    </x-sidebar.dropdown>
  
 

</x-perfect-scrollbar>
