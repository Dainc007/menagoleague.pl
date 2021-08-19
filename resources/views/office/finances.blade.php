<section class="office-finances">
    <h2 class="office-title">{{__('office.finances.title')}}</h2>
    <div class="finances">
        <div class="finances-details">
            <div class="details-info">
                <p>
                {{__('office.finances.budget')}} 100 000 000
                </p>
                <p>
                {{__('office.finances.costs')}} 120 000
                </p>
            </div>
        </div>
        <div class="finances-view">
            <div class="details-buttons">
                <li class="active" data-number="0">
                {{__('office.finances.tabs.all')}}
                </li>
                <li data-number="1">
                {{__('office.finances.tabs.income')}}
                </li>
                <li data-number="2">
                {{__('office.finances.tabs.outgo')}}
                </li>
            </div>
            <div id="all" class="active" data-number="0">
                <table>
                    <tr>
                        <th>{{__('office.finances.col.title')}}</th>
                        <th>{{__('office.finances.col.price')}}</th>
                        <th>{{__('office.finances.col.before')}}</th>
                        <th>{{__('office.finances.col.after')}}</th>
                        <th>{{__('office.finances.col.date')}}</th>
                    </tr>

                    @foreach($user->team->finances as $row)
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
            <div id="income" data-number="1">
                <table>
                <tr>
                        <th>{{__('office.finances.col.title')}}</th>
                        <th>{{__('office.finances.col.price')}}</th>
                        <th>{{__('office.finances.col.before')}}</th>
                        <th>{{__('office.finances.col.after')}}</th>
                        <th>{{__('office.finances.col.date')}}</th>
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
                        <th>{{__('office.finances.col.title')}}</th>
                        <th>{{__('office.finances.col.price')}}</th>
                        <th>{{__('office.finances.col.before')}}</th>
                        <th>{{__('office.finances.col.after')}}</th>
                        <th>{{__('office.finances.col.date')}}</th>
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