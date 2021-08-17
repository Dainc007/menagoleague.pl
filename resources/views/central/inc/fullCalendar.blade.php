<div class="container">
    <div class="full-calendar">
        <div class="calendar-display">
            <h2>Calendar</h2>
            <h3>Month, 08/08/2021</h3>
            <div class="calendar">
                <div class="month-container">
                    <div class="month-item">Pon</div>
                    <div class="month-item">Wt</div>
                    <div class="month-item">Sr</div>
                    <div class="month-item">Czw</div>
                    <div class="month-item">Pt</div>
                    <div class="month-item">Sb</div>
                    <div class="month-item">Ndz</div>
                </div>

                <div class="day-container">
                    @for ($h = 25; $h <= 30; $h++)
                        <div class="day-item day-item-disabled">
                            <p>{{ $h }}</p>
                        </div>
                    @endfor

                    @for ($i = 1; $i <= 31; $i++)
                        <div class="day-item">
                            <p>{{ $i }}</p>
                            <img src="/images/shields/5.png" alt="" />
                        </div>
                    @endfor

                    @for ($j = 1; $j <= 5; $j++)
                        <div class="day-item day-item-disabled">
                            <p>{{ $j }}</p>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
        <div class="calendar-forms">
            <div>Form1</div>
            <div>Form2</div>
            <div>Form3</div>
        </div>
    </div>
</div>
