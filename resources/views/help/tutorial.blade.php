@extends('layouts.homeLayout')

@section('content')
    <div class="container">
        <div class="tutorial-header">
            <h1 class="col text-center"> Jak zdobyć licencję trenerską? </h1>
        </div>
        <div class="tutorial one">
            <div class="tutorial__text">
                <p>
                    Aby umożliwić Ci udział w naszych rozgrywkach, musimy mieć pewność, że rozumiesz
                    zasady panujące w Menago League.
                </p>
                <p>
                    W tym celu każdy gracz rozpoczyna swoją przygodę od rozegrania meczu towarzyskiego z innym
                    użytkownikiem.
                </p>
                <p>
                    Jeśli masz już sparing partnera możesz zaprosić go do meczu używając formularza zaznaczonego w poniższej
                    ilustracji na czerwono, wybierając przeciwnika z listy i klikając "zaproś".
                    Jeśli jeszcze nie masz sparing partnera, z pewnością znajdziesz go na naszym kanale Discord lub grupie
                    na Facebooku (linki zaznaczone na zielono i niebiesko).
                </p>
            </div>
            <div class="tutorial__img">
                <img src="{{ asset('storage/tutorial/tutorial1.png') }}">
            </div>
        </div>

        <div class="tutorial two">
            <div class="tutorial__img">
                <img src="{{ asset('storage/tutorial/tutorial2.png') }}">
            </div>
            <div class="tutorial__text">
                <p>
                    Teraz jesteś gotowy, by rozegrać mecz z przeciwnikiem. Skontaktuj
                    się z nim i dodaj go do swojej listy znajomych na
                    platformie, którą wykorzystujesz do gry (Xbox lub Playstation)
                    Następnie jeden z was powinien wysłać zaproszenie do meczu w grze FIFA.
                </p>
                <p>
                    Wazne, by wysyłać zaproszenie zachowując ponizsze ustawienia:
                </p>

                <img src="{{ asset('storage/tutorial/settings.png') }}">

                <p>
                    Jeśli w połączeniu z przeciwnikiem wystąpią jakieś trudności, upewnijcie się, że wasz tryb translacji
                    nat jest „otwarty” lub „umiarkowany”. Więcej na temat rozwiązywania problemów z NAT przeczytasz
                    <a target="_blank" href="https://support.xbox.com/pl-PL/help/hardware-network/connect-network/xbox-one-nat-error">TUTAJ</a>.
                </p>

                <div class="alert alert-danger" role="alert">
                    UWAGA! Zanim rozpoczniecie mecz zapoznaj się z poniższymi klipami. Są to przykładowe klipy, które
                    powinieneś nagrać w trakcie meczu z przeciwnikiem.
                </div>


                <ol>
                    <li>Pomeczowy raport statystyk (warto nagrać równiez w przerwie)</li>
                    <li>Dowód uczciwej gry.</li>
                </ol>
                <p>
                    Kiedy juz rozegrałeś mecz i nagrałeś odpowiednie klipy, mozesz złozyc aplikacje o przyznanie licencji
                    trenerskiej wypełniając ponizszy formularz.
                </p>
                <p>
                    Kiedy już wyślesz wniosek pozostaje Ci jedynie czekać na jego weryfikacje. Kiedy takowa nastąpi
                    otrzymasz
                    powiadomienie na ten temat. W międzyczasie zapoznaj się z poradnikami:
                <ul>
                    <li>Jak przejąć drużynę?</li>
                    <li>Jak przenieść mój skład Menago League do gry FIFA?</li>
                </ul>
                </p>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="tutorial-header">
            <h1 class="col text-center"> Rozgrywanie Meczu z przeciwnikiem </h1>
        </div>

        <div class="tutorial one">
            <div class="tutorial__text">
                <div class="alert alert-success" role="alert">
              Gospodarz spotkania wysyła przeciwnikowi zaproszenie do meczu. Jeśli wystąpią problemy z połączeniem,
                    zaproszenie może wysłać również gość.
                </div>
                <div class="alert alert-info" role="alert">
                    Aby mieć możliwość zaproszenia przeciwnika do meczu najpierw dodaj go do <b>listy znajomych</b> na swojej konsoli.
                </div>

                <div class="alert alert-danger" role="alert">
                    Zapraszając przeciwnika do meczu pamiętaj o właściwych ustawieniach:
                    <b>Składy: Własne</b> <br>
                    <b>Długość Połowy: 6 minut</b> <br>
                    <b>Tempo gry: Normalne</b>
                </div>

            </div>
            <div class="tutorial__img">
                <img class="img img-fluid" src="https://thumbs.gfycat.com/UniformSkinnyGhostshrimp-size_restricted.gif">
            </div>
        </div>

        <div class="tutorial two">
            <div class="tutorial__img">
                <img src="https://thumbs.gfycat.com/EnragedAccomplishedAtlanticridleyturtle-size_restricted.gif">
            </div>
            <div class="tutorial__text">
                <div class="alert alert-success" role="alert">
                    Po rozegraniu pierwszej połowy przejdź do odpowiedniej sekcji i nagraj statystyki spotkania.
                    Interesuje nas podsumowanie obu drużyn, oraz statystyki piłkarzy obu drużyn, którzy pojawili się już na boisku.
                </div>
                <div class="alert alert-danger" role="alert">
                    <b>UWAGA!</b> Statystyki po 1 połowie wrzucamy wraz z wynikiem meczu tylko i wyłacznie, jeśli wystąpił problem
                    z nagraniem statystyk po zakończeniu spotkania. Jest to dla nas dodatkowe zabezpieczenie, gdyż każdy brak statystyk
                    pomeczowych może być traktowany jako obustronny walkower, z którego Twoi piłkarze będą bardzo niezadowoleni!
                </div>
            </div>
        </div>


        <div class="tutorial two">
            <div class="tutorial__text">
                <div class="alert alert-info" role="alert">
                    Mecz uznaje się za zakończony, gdy po ostatnim gwizdku pominięte zostaną powtórki oraz obaj gracze
                    zaznaczą odpowiedź "NIE" w pytaniu, które pojawi się w menu: "Czy chcesz zagrać rewanż?" lub po upływie
                    15 sekund od pojawienia się pytania.
                </div>
                <div class="alert alert-danger" role="alert">
                    <b>UWAGA!</b> Wyjście z meczu przed zaznaczeniem odpowiedzi lub upływem czasu zostanie odebrane przez grę
                    jako wyjście z meczu co spowoduje niezapisanie wyniku. Taka praktyka jest surowo zabroniona w naszych rozgrywkach
                    i może skutkować walkowerem lub w ostateczności wykluczeniem z rozgrywek.
                </div>
            </div>

            <div class="tutorial__img">
                <img src="https://thumbs.gfycat.com/IdenticalIllegalKingbird-size_restricted.gif">
            </div>
        </div>


        <div class="tutorial two">
            <div class="tutorial__img">
                <img src="https://thumbs.gfycat.com/YawningIncompleteGharial-size_restricted.gif">
            </div>
            <div class="tutorial__text">

                <div class="alert alert-success" role="alert">
                    Nagranie Statystyk po zakończeniu spotkania jest bliźniaczo podobne do statystyk po pierwszej połowie.
                    Nagrywamy "Statystyki meczu" oraz indywidualne statystyki wszystkich piłkarzy, którzy wzieli udział w grze
                </div>
                <div class="alert alert-info" role="alert">
                    Każdy gracz, który nagrywa statystyki zarówno swoje jak i przeciwnika ma u nas wielkiego <b>+</b> !
                </div>
            </div>
        </div>

        <div class="tutorial two">
            <div class="tutorial__text">
                <div class="alert alert-info" role="alert">
                    Czasem może się zdarzyć (dotychczas 2 przypadki na kilkaset meczów) że przeciwnik poprosi Cię o dowód,
                    że grasz zgodnie z przepisami. W tym celu Twój przeciwnik prześle Ci wiadomość na Twojej konsoli
                    (lub innym komunikatorze, jeśli tak ustalicie przed spotkaniem) z prośbą o nagranie poniższych klipów.
                    Powinieneś na takim klipie zamieścić szczegółowe dane istotnych umiejętności wszystkich piłkarzy Twojej
                    drużyny, którzy wzięli udział w meczu.
                </div>
                <div class="alert alert-danger" role="alert">
                    Poprzez "istotne umiejętności" rozumiemy umiejętności bramkarskie w przypadku bramkarza i tym podobne.
                </div>

                <div class="alert alert-danger" role="alert">
                    <b>Uwaga!</b> Osoby przyłapane na oszukiwaniu lub niedostarczające notorycznie dowodów uczciwej gry zostają
                    permamentnie usunięte z rozgrywek.
                </div>
            </div>

            <div class="tutorial__img">
                <img class="mb-3" src="https://thumbs.gfycat.com/MatureSinfulBrownbear-size_restricted.gif">
                <img src="https://thumbs.gfycat.com/UniformFlatAndalusianhorse-size_restricted.gif">
            </div>
        </div>
    </div>


    <div class="container">
        <div class="tutorial-header">
            <h1 class="col text-center"> Przenoszenie składu Menago League do gry FIFA </h1>
        </div>

        <div class="tutorial one">
            <div class="tutorial__text">
                <div class="alert alert-success" role="alert">
                    W tej kwestii nie zmieniło się absolutnie nic. W związku z czym odsyłamy do naszego krótkiego
                    poradnika na Youtube jeszcze z gry FIFA18
                </div>


            </div>
            <div class="tutorial__img">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/skcLsskPkA8"
                        title="YouTube video player"
                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
        </div>

    </div>

    {{-- <p> budowanie druzyny w grze fifa <a href="https://www.youtube.com/watch?v=skcLsskPkA8&t=11s">Tutaj</a></p> --}}
@endsection
