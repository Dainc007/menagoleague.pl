<section class="office-finances">
    <h2 class="office-title">Finanse</h2>
    <div class="finances">
        <div class="finances-details">
            <div class="details-info">
                <p>
                    Budżet klubu: 100 mln.
                </p>
                <p>
                    Tyg. koszta utrzymania klubu: 120 tys.
                </p>
            </div>
        </div>
        <div class="finances-view">
            <div class="details-buttons">
                <li class="active" data-number="0">
                    Wszystko
                </li>
                <li data-number="1">
                    Przychody
                </li>
                <li data-number="2">
                    Wydatki
                </li>
            </div>
            <div id="all" class="active" data-number="0">
                <table>
                    <tr>
                        <th>Tytuł transakcji</th>
                        <th>Kwota</th>
                        <th>Budżet przed transakcją</th>
                        <th>Budżet po transakcji</th>
                        <th>Data</th>
                    </tr>

                    @foreach($user->team->finances as $row)
                    <tr class="bg-{{$class}} text-white">
                        <td>{{$row->title}}</td>
                        <td>{{$row->price}}</td>
                        <td>{{$row->money_before}}</td>
                        <td>{{$row->money_after}}</td>
                        <td>{{$row->updated_at}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div id="income" data-number="1">
                <table>
                    <tr>
                        <th>Tytuł transakcji</th>
                        <th>Kwota</th>
                        <th>Budżet przed transakcją</th>
                        <th>Budżet po transakcji</th>
                        <td>Data</td>
                    </tr>

                    @foreach($user->team->finances->where('type', 'income') as $row)
                    <tr class="bg-success text-white">
                        <td>{{$row->title}}</td>
                        <td>{{$row->price}}</td>
                        <td>{{$row->money_before}}</td>
                        <td>{{$row->money_after}}</td>
                        <td>{{$row->updated_at}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div id="outgoing" data-number="2">
                <table>
                    <tr>
                        <th>Tytuł transakcji</th>
                        <th>Kwota</th>
                        <th>Budżet przed transakcją</th>
                        <th>Budżet po transakcji</th>
                        <th>Data</th>
                    </tr>
                    @foreach($user->team->finances->where('type', 'outgo') as $row)
                    <tr class="bg-danger text-white">
                        <td>{{$row->title}}</td>
                        <td>{{$row->price}}</td>
                        <td>{{$row->money_before}}</td>
                        <td>{{$row->money_after}}</td>
                        <td>{{$row->updated_at}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>