<div class="groupStage">

    @php
        $groups = ['A', 'B', 'C', 'D'];
    @endphp

    @foreach ($groups as $group)
        <div class="groupStage-item {{ $group === 'A' ? 'active' : '' }}">
            <div class="groupStage-item-header">GROUP {{ $group }}</div>
            <div class="groupStage-item-table">
                <div class="groupStage-item-table-legend">
                    <div class="P">P</div>
                    <div class="W">W</div>
                    <div class="O">O</div>
                    <div class="L">L</div>
                    <div class="GF">GF</div>
                    <div class="GA">GA</div>
                    <div class="GD">GD</div>
                    <div class="PTS">PTS</div>
                </div>
                <div class="groupStage-item-table-content">
                    @for ($a = 1; $a <= 4; $a++)
                        <div class="groupStage-item-table-content-item">
                            <div class="id">{{ $a }}.</div>
                            <div class="team">Manchester City</div>
                            <div class="P">{{ rand(0, 20) }}</div>
                            <div class="W">{{ rand(0, 20) }}</div>
                            <div class="O">{{ rand(0, 20) }}</div>
                            <div class="L">{{ rand(0, 20) }}</div>
                            <div class="GF">{{ rand(0, 20) }}</div>
                            <div class="GA">{{ rand(0, 20) }}</div>
                            <div class="GD">{{ rand(0, 20) }}</div>
                            <div class="PTS">{{ rand(0, 20) }}</div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    @endforeach
</div>
