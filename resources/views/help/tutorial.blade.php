@extends('layouts.homeLayout')

@section('content')
    <div class="container">
        <div class="row mb-3 shadow p-3 rounded">
            <h1 class="col text-center"> Jak zdobyć licencję trenerską? </h1>
        </div>
        <div class="row mb-3 shadow  p-3 rounded">
            <div class="col">
                <p class="text-justify font-weight-bold"> Aby umożliwić Ci udział w naszych rozgrywkach, musimy mieć pewność,
                    że rozumiesz
                    zasady panujące w Menago League.<br>
                    tym celu każdy gracz rozpoczyna swoją przygodę od rozegrania meczu towarzyskiego z innym
                    użytkownikiem.<br>
                    Jeśli masz już sparing partnera możesz zaprosić go do meczu używając formularza zaznaczonego w poniższej
                    ilustracji
                    na czerwono, wybierając przeciwnika z listy i klikając "zaproś".
                    Jeśli jeszcze nie masz sparing partnera, z pewnością znajdziesz go na naszym kanale Discord lub grupie
                    na
                    Facebooku
                    (linki zaznaczone na zielono i niebiesko).</p>
            </div>
            <div class="col">
                <img class="img img-fluid" src="{{ asset('storage/tutorial/tutorial1.png') }}">
            </div>
        </div>

        <div class="row mb-3 shadow rounded p-3">
            <div class="col-4">
                <img class="img img-fluid" src="{{ asset('storage/tutorial/tutorial2.png') }}">
            </div>
            <div class="col-8">
                <p class="text-justify font-weight-bold">Teraz jesteś gotowy, by rozegrać mecz z przeciwnikiem. Skontaktuj
                    się z nim i
                    dodaj go do swojej listy znajomych na
                    platformie, którą wykorzystujesz do gry (Xbox lub Playstation)
                    Następnie jeden z was powinien wysłać zaproszenie do meczu w grze FIFA. Wazne, by wysyłać zaproszenie
                    zachowując
                    ponizsze ustawienia:</p>
                <img class="img img-fluid mt-3" src="{{ asset('storage/tutorial/settings.png') }}">

                <p class="text-justify font-weight-bold my-3">
                    Jeśli w połączeniu z przeciwnikiem wystąpią jakieś trudności, upewnijcie się, że wasz tryb translacji
                    nat jest
                    „otwarty” lub „umiarkowany”.Więcej na temat rozwiązywania problemów z NAT przeczytasz <a>TUTAJ</a>.
                </p>

                <div class="alert alert-danger" role="alert">
                    UWAGA! Zanim rozpoczniecie mecz zapoznaj się z poniższymi klipami.Są to przykładowe klipy, które
                    powinieneś
                    nagrać w trakcie
                    meczu z przeciwnikiem.
                </div>
                <p class="text-justify font-weight-bold">
                    1. pomeczowy raport statystyk (warto nagrać równiez w przerwie)<br>
                    2. dowód uczciwej gry.<br>
                    Kiedy juz rozegrałeś mecz i nagrałeś odpowiednie klipy, mozesz złozyc aplikacje o przyznanie licencji
                    trenerskiej
                    wypełniając ponizszy formularz.

                    Kiedy już wyślesz wniosek pozostaje Ci jedynie czekać na jego weryfikacje.Kiedy takowa nastąpi otrzymasz
                    powiadomienie na ten temat.W międzyczasie zapoznaj się z poradnikami:- Jak przejąć drużynę?- Jak
                    przenieść mój skład
                    Menago League do gry FIFA?
                </p>
            </div>
        </div>
    </div>

    <p> budowanie druzyny w grze fifa <a href="https://www.youtube.com/watch?v=skcLsskPkA8&t=11s">Tutaj</a></p>
@endsection
