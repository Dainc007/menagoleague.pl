<div class="season-topAsists">
    <h2>TOP ASISTS</h2>

    <div class="topsAndCards-info">
        <div class="legend">
            <img src="{{ url('/images/asist-icon.svg') }}" alt="">
        </div>
    </div>

    <div class="topsAndCards-container">
        @for ($i = 1; $i <= 10; $i++)
            <div class="topAndCards-item">
                <p class="id">{{ $i }}</p>
                <div class="name">
                    <div style="display: none">Icons made by <a href="" title="photo3idea_studio">photo3idea_studio</a>
                        from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
                    <img src="/images/shields/{{ rand(1, 8) }}.png" alt="">
                    <p>Nazwa piłkarza</p>
                </div>
                <p class="score">{{ rand(1, 100) }}</p>
            </div>
        @endfor
    </div>
</div>
