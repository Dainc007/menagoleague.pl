<div class="teamInfo">
    <div class="r-content">
        <div class="trophies">
            <?php
                $how = rand(1, 8);
            ?>
            <?php for($i = 1; $i <= $how; $i++): ?>
                <div class="trophy" data-toggle="tooltip" data-placement="top"
                    title='Gets <?php echo e(rand(1, 10)); ?> trophies!'>
                    <img src="/images/trophy.svg" alt="">
                    <p class="number"><?php echo e(rand(1, 10)); ?></p>
                </div>
            <?php endfor; ?>
        </div>
        <div class="player">
            <img src="/images/placeholder-person.svg" alt="">
            <div class="info">
                <p class="name"><?php echo e($team->name); ?></p>
                <div>
                    <table>
                        <tr>
                            <td>Lista zawodników: <span><?php echo e(rand(11, 20)); ?></span>
                        </tr>
                        <tr>
                            <td>Reprezentanci: <span><?php echo e(rand(11, 20)); ?></span></td>
                        </tr>
                        <tr>
                            <td>Średnia wieku: <span><?php echo e(rand(11, 20)); ?></span></td>
                        </tr>
                        <tr>
                            <td>Stadion: <span>Emirates Stadium </span><small>60.704 miejsc</small></td>
                        </tr>
                        <tr>
                            <td colspan="2">Aktualny bilans transferowy: <span>-134,70 mln €</span></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="player">
            <img src="/images/placeholder-person.svg" alt="">
            <div class="info">
                <div class="trophies">
                    <?php for($i = 1; $i <= $how; $i++): ?>
                        <div class="trophy" data-toggle="tooltip" data-placement="top"
                            title='Gets <?php echo e(rand(1, 10)); ?> trophies!'>
                            <img src="/images/trophy.svg" alt="">
                            <p class="number"><?php echo e(rand(1, 10)); ?></p>
                        </div>
                    <?php endfor; ?>
                </div>
                <p class="name"><?php echo e($team->name); ?></p>
                <div>
                    <table>
                        <tr>
                            <td>Lista zawodników: <span><?php echo e(rand(11, 20)); ?></span>
                            <td>Reprezentanci: <span><?php echo e(rand(11, 20)); ?></span></td>
                        </tr>
                        <tr>
                            <td>Średnia wieku: <span><?php echo e(rand(11, 20)); ?></span></td>
                            <td>Stadion: <span>Emirates Stadium </span><small>60.704 miejsc</small></td>
                        </tr>
                        <tr>
                            <td colspan="2">Aktualny bilans transferowy: <span>-134,70 mln €</span></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="team">
        <div class="cost">
            <p class="price"><span>10,00</span> <small>mln €</small></p>
            <p class="last-change"><small>Ostatnia zmiana: 26 maj 2021</small></p>
        </div>
        <div class="info">
            <div>
                <p>Premier League</p>
                <p>Szczebel ligi: <span>1. Liga</span></p>
                <p>Miejsce w tabeli: <span><?php echo e(rand(0, 100)); ?></span></p>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Bartek\Desktop\KURS\Menagoleague.pl\resources\views/team/inc/teamInfo.blade.php ENDPATH**/ ?>