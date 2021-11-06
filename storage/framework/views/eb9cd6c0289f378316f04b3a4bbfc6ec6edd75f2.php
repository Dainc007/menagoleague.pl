

<?php $__env->startSection('content'); ?>
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
                <img src="<?php echo e(asset('storage/tutorial/tutorial1.png')); ?>">
            </div>
        </div>

        <div class="tutorial two">
            <div class="tutorial__img">
                <img src="<?php echo e(asset('storage/tutorial/tutorial2.png')); ?>">
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

                <img src="<?php echo e(asset('storage/tutorial/settings.png')); ?>">

                <p>
                    Jeśli w połączeniu z przeciwnikiem wystąpią jakieś trudności, upewnijcie się, że wasz tryb translacji
                    nat jest „otwarty” lub „umiarkowany”. Więcej na temat rozwiązywania problemów z NAT przeczytasz
                    <a href="#">TUTAJ</a>.
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

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.homeLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/help/tutorial.blade.php ENDPATH**/ ?>