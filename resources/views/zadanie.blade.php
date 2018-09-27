@extends('layouts.cleanblog')

@section('title','Zadanie')

@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url({{ asset('img/about-bg.jpg') }})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Zadanie</h1>
                        <span class="subheading">Vypracovanie zadania v Laravel 5.6.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="container">
        <h1 class="text-center">Zadanie</h1>

        <p>
                Zadaním je naprogramovať jednoduchý blog, ktorý by mal nasledovné funkcionality:
            </p>
        <ul>
            <li>vylistovanie zoznamu všetkých blogov</li>
            <li>detailné zobrazenie postu</li>
            <li>po kliknutí na autora vylistovať zoznam blogov daného autora</li>
        </ul>

        <h4>Základné vlastnosti</h4>
        <ul>
            <li>každý blogpost by mal mať:
                <ul>
                    <ol>
                        <li>title</li>
                        <li>perex (resp. description)</li>
                        <li>body</li>
                        <li>autora</li>
                    </ol>
                </ul>
            <br>
            <li>autor by mal mať:
                <ul>
                    <ol>
                        <li>meno</li>
                        <li>priezvisko</li>
                    </ol>
                </ul>
            </li>
        </ul>

        <h1 class="text-center">Riešenie</h1>
        <h4>FRONTEND</h4>
        <p>
            Ako základný Layout som použil Temlate na technológii <a href="https://getbootstrap.com">Bootsrtap v4.1</a>, ktorý sa nachádza na
            <a href="https://startbootstrap.com/template-categories/blogs/">Start Bootstrap</a>.
        </p>
        <h4>BACKEND</H4>
        <p>
            Zdrojové kódy su uložené na public repozitári: <a href="https://github.com/Lacike33/MyBlog">GITHUB</a><br>
        </p>
        <p>Aplikácia je nasadená na živý server za pomoci Heroku a automatického <strong>DEPLOY</strong> a aplikácia je dostupná na <a href="https://mojprvyblog.herokuapp.com">www.mojprvyblog.herokuapp.com</a></p>
        <p>Pri tvorbe Blogu sú použité <strong>Accessor</strong> a <strong>Mutator</strong>.</p>
        <p>Testovacie dáta sú generované cez pripravené Factory.</p>
        <p>Základná funkcionalita je rozšírená o Tags, čo užívateľovi umožňuje vylistovať príspevky podľa Tagu.</p>
        <p>V blogu je možné pridávať nové posty , len registrovaným užívateľom, a navyše Post je možné aj editovať užívateľom, ktorý Post vytvoril.</p>
    </div>

@endsection
