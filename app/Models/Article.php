<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'content', 'img', 'device'
    ];

    public const ARTICLES = [
        [
            'title'     =>  'Menago League Ruszy już w październiku?',
            'content'   =>  'Wiele wskazuje na to, że po ponad rocznej przerwie w rozgrywkach fani wreszcie doczekają się sezonu 4.„Projekt jest na zaawansowanym etapie, zwłaszcza pod kątem graficznym” - przyznał jeden z autorów.W przeszłości premiera sezonu 4 była wielokrotnie zapowiadana jak i przekładana. Miejmy nadzieję, że tym razem nie dojdzie do kolejnych opóźnień.',
            'img'       => '5',

            'device'    => 1
        ],

        [
            'title'     =>  'Menago League z nagrodami rzeczowymi już od FIFY 2022?',
            'content'   =>  'Wiele wskazuje na to, że po ponad rocznej przerwie w rozgrywkach fani wreszcie doczekają się sezonu 4.„Projekt jest na zaawansowanym etapie, zwłaszcza pod kątem graficznym” - przyznał jeden z autorów.W przeszłości premiera sezonu 4 była wielokrotnie zapowiadana jak i przekładana. Miejmy nadzieję, że tym razem nie dojdzie do kolejnych opóźnień.',
            'img'       => '5',

            'device'    => 1
        ],

        [
            'title'     =>  'Co nowego w rozgrywkach?',
            'content'   =>  'Zarówno Nowa odsłona gry z serii FIFA jak i premiera nowego sezonu zbliżają się wielkimi krokami. Przyjrzyjmy się ponownie plotkom odnośnie nowości jakie zapowiadają twórcy projektu:Przełomową zmianą ma być dodanie możliwości wchodzenia w interakcje z piłkarzami oraz podpisywanie ograniczonych czasowo kontraktów. Celem takiego zabiegu jest ułatwienie najlepszym graczom pozyskiwania piłkarzy od swoich mniej usprawnionych w grze kolegów, a także zwiększenie realizmu rozgrywki. Jest to również dodatkowy atut dla graczy, którzy przegapili start sezonu czwartego, lecz będą dołączać do rozgrywek z biegiem czasu.Drugą istotną zmianą będzie poszerzenie dostępności Menago League o kolejne urządzenia: Playstation i PC.Autorzy liczą, że dzięki zwiększonej ogólnej liczbie graczy, powiększy się zasób możliwości oferowanych użytkownikom, przede wszystkim w kwestii poziomu rywalizacji i nagród rzeczowych.No właśnie, jeśli mówimy o nadchodzących zmianach nie możemy przemilczeć powrotu nagród rzeczowych. Choć wciąż brakuje oficjalnego potwierdzenia wielu ekspertów podejrzewa, że zagoszczą one na dobre w rozgrywkach. W internecie można natrafić na plotki które sugerują, że pierwsze nagrody będą przyznawane za uczestnictwo i grę Fair Play, a dopiero w drugiej kolejności za osiągnięcia w rozgrywkach.Sporo mówi się również o nowym systemie finansowym. Ma on być przede wszystkim wolniejszy niż w poprzednich sezonach (przez co na hitowe transfery w wysokości 300 milionów euro będziemy musieli jeszcze poczekać) i bardziej złożony. Już teraz w niedostępnych zakładkach możemy zobaczyć prześwit systemu rozbudowy stadionu i zwiększaniu zasięgów wśród kibiców. Oprócz tego na jednej z konferencji główny prowadzący projektu powiedział, że „z chęcią zaimplementowałby system sponsorów” co miałoby być nawiązaniem do FIFA 06.',
            'img'       => '5',

            'device'    => 1
        ],

        [
            'title'     =>  'Menago League bez taryfy ulgowej dla niedzielnych graczy!',
            'content'   =>  'Oficjalnie: Polska Ekstraklasa przestaje być ligą zarezerwowaną dla graczy określających siebie jako „słabszych”.  W nadchodzącym sezonie wszystkie ligi mają ponownie startować z równej pozycji. Tym razemby uniknąć częstych wyników „8:0” graczom zostanie przedstawiona możliwość udziału na niższych szczeblach ligowych w danym kraju (Championship, Serie B, 2. Bundesliga, Lique 2).',
            'img'       => '5',

            'device'    => 1
        ]
    ];
}
