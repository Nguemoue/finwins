@extends('layouts.classic.classic')

@section('content')
    <section class="team-section bg-grey bd-bottom circle  padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Declaration de Fondation</h2>
                <span class="heading-border"></span>
            </div>

            <div class="presentation-container h2">

                <!-- Texte de présentation -->
                <div class="presentation-text">
                    <p>
                        La situation et la condition de la femme dans la société constituent un sujet constant de
                        préoccupations des politiques, des décideurs, des promoteurs de développement, des acteurs
                        de la société civile, tant du Nord que du Sud.
                    </p>
                    <p>
                        Car, le dénominateur commun de ces femmes, <span
                            class="highlight">voire la discrimination</span> de celles-ci dans les champs politique,
                        économique, social et culturel est la prédominance de l’ordre masculin qui détermine leur
                        statut, leur rôle et place dans les sociétés. Cela a pour corollaire la sous-estimation,
                        voire la marginalisation de celles-ci dans les champs social, économique et politique.
                    </p>
                    <p>
                        Si dans les pays du Nord des progrès tangibles sont observables en termes d’amélioration de
                        la condition de la femme dans ces domaines, c’est moins le cas des femmes du Sud. Au Sud, la
                        condition féminine n’est guère reluisante. Elle est déterminée, d’une part par un système de
                        valeurs, des contraintes socioculturelles et de multiples résistances; et, d’autre part, par
                        le contexte du sous-développement.
                    </p>
                    <p>
                        Pourtant, qu’elles soient du Nord ou du Sud, les femmes sont toutes confrontées aux
                        contraintes, enjeux et défis de la mondialisation.
                    </p>
                    <p>
                        Ce phénomène, en même temps qu’il génère des externalités négatives (<span
                            class="highlight">détérioration des termes de l’échange, exclusion, inégalités, pauvreté, conflits</span>,
                        etc.) offre des opportunités d’amélioration du statut de la femme et de son intégration au
                        processus global de développement humain harmonieux. Pour faire face aux problèmes et défis
                        communs résultant d’un tel contexte, de nombreuses associations féminines se créent au Nord
                        comme au Sud.
                    </p>
                    <p>
                        En dépit de la pluralité de ces associations, de la diversité de leur champ ou domaines
                        d’intervention ainsi que des moyens mobilisés, l’impact des actions en faveur de la
                        condition féminine reste faible.
                    </p>
                    <p>
                        C'est dans ce contexte que l'<span class="highlight">ASBL FINS-WINS</span> a été fondée.
                        Elle a pour but essentiel de positionner la femme comme citoyenne du monde, sujet de son
                        histoire et actante des mutations sociaux-économiques et politico-culturelles.
                    </p>
                    <p>
                        L’équipe de l’ASBL FINS-WINS, composée de femmes et d’hommes de nationalités, de cultures
                        différentes et de profils transdisciplinaires, encadre les réflexions et pilote des actions
                        de terrains.
                    </p>
                    <p>
                        La stratégie globale de l’ASBL FINS-WINS est la <span
                            class="highlight">Recherche-Action</span>. Celle-ci se fonde sur une démarche
                        scientifique combinant la théorie et la pratique. Sa finalité consiste, d’une part, à mettre
                        en exergue le « plafond de verre »; et, d’autre part, à identifier les logiques d’actions et
                        les stratégies lui permettant d’être actrice incontournable du développement.
                    </p>
                </div>

                <!-- Section fondatrice -->
                <div class="founder-section">
                    <div class="separator"></div>
                    <p class="founder-name">La fondatrice</p>
                    <p class="founder-name">Martine-Cécile Ngo Nyemb-Wisman</p>
                </div>
            </div>
            <div class="presentation-container">
                <div class="row">
                    <div class="col-md-6 image-container">
                        <!-- Image de Martine-Cécile Ngo Nyemb-Wisman -->
                        <img src="{{asset('assets/img/wiseman-logo.gif')}}" alt="logo">
                        <p>
                            Dr Martine-Cécile
                            NGO NYEMB-WISMAN

                            Martine Cécile Wisman - Ngo Nyemb est détentrice d’un doctorat en Sciences politiques et sociales de l’UCL en Belgique. Sa réflexion et ses actions portent essentiellement sur la thématique du genre et développement.

                            Ses travaux sont consacrés aux pratiques d’autonomisation des acteurs de l’économie populaire et solidaire, spécialement au rôle des commerçantes des denrées alimentaires dans le progrès socio-économique et politique en Afrique subsaharienne.

                            Fondatrice de l’Asbl FINS-WINS en Belgique et de la Coopérative Agropastorale des Femmes Bayam-Sellam du Cameroun (CAFBS), elle est lauréate du Prix de l’Action féminine de l’Union des Femmes Africaines (UFA) à Bruxelles en 2009.

                            Elle est à ce jour, Directrice Générale de Marena Trading Consulting & Financing S.A et PCA de la CAFBS.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection
