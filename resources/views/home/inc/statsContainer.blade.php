<div class="content content-mobile">
    <aside class="discord">
        <iframe src="https://discord.com/widget?id=785081091710517268&theme=dark" width="100%" height="100%"
            allowtransparency="true" frameborder="0"
            sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
    </aside>

    <div class="menagoleague-stats">
        <img src="/images/tshirt-menago.png" alt="" class="stats-image-mobile">

        <h2>{{ __('home.stats.title') }}</h2>

        <div>
            <div class="menagoleague-stats-container">

                <div class="menagoleague-stats-content-item">
                    <p class="menagoleague-stats-content-item-number">{{ $numOfTeams ?? '0' }}</p>
                    <p class="menagoleague-stats-content-item-desc">{{ __('home.stats.teams') }}</p>
                </div>

                <div class="menagoleague-stats-content-item">
                    <p class="menagoleague-stats-content-item-number">{{ $numOfUsers ?? '0' }}</p>
                    <p class="menagoleague-stats-content-item-desc">{{ __('home.stats.users') }}</p>
                </div>

                <div class="menagoleague-stats-content-item">
                    <p class="menagoleague-stats-content-item-number">{{ $numOfGames ?? '0' }}</p>
                    <p class="menagoleague-stats-content-item-desc">{{ __('home.stats.games') }}</p>
                </div>

                <div class="menagoleague-stats-content-item">
                    <p class="menagoleague-stats-content-item-number">{{ $numOfGoals ?? '0' }}</p>
                    <p class="menagoleague-stats-content-item-desc">{{ __('home.stats.goals') }}</p>
                </div>

                <div class="menagoleague-stats-content-item menagoleague-stats-content-item-large">
                    <p class="menagoleague-stats-content-item-number">{{ $sumOfTransferFees ?? '0' }} M$</p>
                    <p class="menagoleague-stats-content-item-desc">{{ __('home.stats.transfers') }}</p>
                </div>

                <p class="menagoleague-stats-p">{{ __('home.stats.since') }} <b>2018</b></p>
            </div>

            <img src="/images/tshirt-menago.png" alt="" class="stats-image">
        </div>

    </div>

    <aside class="discord">
        <iframe src="https://discord.com/widget?id=785081091710517268&theme=dark" width="100%" height="100%"
            allowtransparency="true" frameborder="0"
            sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
    </aside>
</div>
