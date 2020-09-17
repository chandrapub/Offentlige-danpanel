<table class="table table-striped">
    <tbody>
    @if(!empty($order->product->checkoutLabel->sagsnummer))
        <tr>
            <td scope="col">{{$order->product->checkoutLabel->sagsnummer}}:</td>
            <td scope="col">:</td>
            <td scope="col">{{$order->orderInfo->sagsnummer}}</td>
        </tr>
    @endif

    @if(!empty($order->product->checkoutLabel->contact_person))
        <tr>
            <td scope="col">{{$order->product->checkoutLabel->contact_person}}:</td>
            <td scope="col">:</td>
            <td scope="col">{{$order->orderInfo->contact_person}}</td>
        </tr>
    @endif

    @if(!empty($order->product->checkoutLabel->quantity))
        <tr>
            <td scope="col">{{$order->product->checkoutLabel->quantity}}:</td>
            <td scope="col">:</td>
            <td scope="col">{{$order->orderInfo->quantity}}</td>
        </tr>
    @endif

    @if(!empty($order->product->checkoutLabel->machine_quantity))
        <tr>
            <td scope="col">{{$order->product->checkoutLabel->machine_quantity}}:</td>
            <td scope="col">:</td>
            <td scope="col">{{$order->orderInfo->machine_quantity}}</td>
        </tr>
    @endif
    @if(!empty($order->product->checkoutLabel->number_of_employees))
        <tr>
            <td scope="col">{{$order->product->checkoutLabel->number_of_employees}}:</td>
            <td scope="col">:</td>
            <td scope="col">{{$order->orderInfo->number_of_employees}}</td>
        </tr>
    @endif
    @if(!empty($order->product->checkoutLabel->no_of_cups))
        <tr>
            <td scope="col">{{$order->product->checkoutLabel->no_of_cups}}:</td>
            <td scope="col">:</td>
            <td scope="col">{{$order->orderInfo->no_of_cups}}</td>
        </tr>
    @endif
    @if(!empty($order->product->checkoutLabel->buy))
        <tr>
            <td scope="col">{{$order->product->checkoutLabel->buy}}:</td>
            <td scope="col">:</td>
            <td scope="col">{{$order->orderInfo->buy}}</td>
        </tr>
    @endif
    @if(!empty($order->product->checkoutLabel->rent))
        <tr>
            <td scope="col">{{$order->product->checkoutLabel->rent}}:</td>
            <td scope="col">:</td>
            <td scope="col">{{$order->orderInfo->rent}}</td>
        </tr>
    @endif
    @if(!empty($order->product->checkoutLabel->select_office))
        <tr>
            <td scope="col">{{$order->product->checkoutLabel->select_office}}:</td>
            <td scope="col">:</td>
            <td scope="col">{{ $order->orderInfo->select_office ? 'Ja' : 'Nej'}}</td>
        </tr>
    @endif

    @if(!empty($order->product->checkoutLabel->select_institution))
        <tr>
            <td scope="col">{{$order->product->checkoutLabel->select_institution}}:</td>
            <td scope="col">:</td>
            <td scope="col">{{$order->orderInfo->select_institution ? 'Ja' : 'Nej'}}</td>
        </tr>
    @endif

    @if(!empty($order->product->checkoutLabel->select_warehouse))
        <tr>
            <td scope="col">{{$order->product->checkoutLabel->select_warehouse}}:</td>
            <td scope="col">:</td>
            <td scope="col">{{$order->orderInfo->select_warehouse ? 'Ja' : 'Nej'}}</td>
        </tr>
    @endif

    @if(!empty($order->product->checkoutLabel->select_clinic))
        <tr>
            <td scope="col">{{$order->product->checkoutLabel->select_clinic}}:</td>
            <td scope="col">:</td>
            <td scope="col">{{$order->orderInfo->select_clinic ? 'Ja' : 'Nej'}}</td>
        </tr>
    @endif

    @if(!empty($order->product->checkoutLabel->select_construction))
        <tr>
            <td scope="col">{{$order->product->checkoutLabel->select_construction}}:</td>
            <td scope="col">:</td>
            <td scope="col">{{$order->orderInfo->select_construction ? 'Ja' : 'Nej'}}</td>
        </tr>
    @endif



    @if(!empty($order->product->checkoutLabel->select_shop))
        <tr>
            <td scope="col">{{$order->product->checkoutLabel->select_shop}}:</td>
            <td scope="col">:</td>
            <td scope="col">{{$order->orderInfo->select_shop ? 'Ja' : 'Nej'}}</td>
        </tr>
    @endif


    @if(!empty($order->product->checkoutLabel->question_1))
        <tr>
            <td scope="col">{{$order->product->checkoutLabel->question_1}}:</td>
            <td scope="col">:</td>
            <td scope="col">{{$order->orderInfo->question_1}}</td>
        </tr>
    @endif
    @if(!empty($order->product->checkoutLabel->question_2))
        <tr>
            <td scope="col">{{$order->product->checkoutLabel->question_2}}:</td>
            <td scope="col">:</td>
            <td scope="col">{{$order->orderInfo->question_2}}</td>
        </tr>
    @endif
    @if(!empty($order->product->checkoutLabel->question_3))
        <tr>
            <td scope="col">{{$order->product->checkoutLabel->question_3}}:</td>
            <td scope="col">:</td>
            <td scope="col">{{$order->orderInfo->question_3}}</td>
        </tr>
    @endif
    @if(!empty($order->product->checkoutLabel->question_4))
        <tr>
            <td scope="col">{{$order->product->checkoutLabel->question_4}}:</td>
            <td scope="col">:</td>
            <td scope="col">{{$order->orderInfo->question_4}}</td>
        </tr>
    @endif
    @if(!empty($order->product->checkoutLabel->question_5))
        <tr>
            <td scope="col">{{$order->product->checkoutLabel->question_5}}:</td>
            <td scope="col">:</td>
            <td scope="col">{{$order->orderInfo->question_5}}</td>
        </tr>
    @endif
    @if(!empty($order->product->checkoutLabel->question_6))
        <tr>
            <td scope="col">{{$order->product->checkoutLabel->question_6}}:</td>
            <td scope="col">:</td>
            <td scope="col">{{$order->orderInfo->question_6}}</td>
        </tr>
    @endif
    @if(!empty($order->product->checkoutLabel->question_7))
        <tr>
            <td scope="col">{{$order->product->checkoutLabel->question_7}}:</td>
            <td scope="col">:</td>
            <td scope="col">{{$order->orderInfo->question_7}}</td>
        </tr>
    @endif
    @if(!empty($order->product->checkoutLabel->question_8))
        <tr>
            <td scope="col">{{$order->product->checkoutLabel->question_8}}:</td>
            <td scope="col">:</td>
            <td scope="col">{{$order->orderInfo->question_8}}</td>
        </tr>
    @endif
    @if(!empty($order->product->checkoutLabel->question_9))
        <tr>
            <td scope="col">{{$order->product->checkoutLabel->question_9}}:</td>
            <td scope="col">:</td>
            <td scope="col">{{$order->orderInfo->question_9}}</td>
        </tr>
    @endif
    @if(!empty($order->product->checkoutLabel->question_10))
        <tr>
            <td scope="col">{{$order->product->checkoutLabel->question_10}}:</td>
            <td scope="col">:</td>
            <td scope="col">{{$order->orderInfo->question_10}}</td>
        </tr>
    @endif


    @if(!empty($order->product->checkoutLabel->budget_per_hour))
        <tr>
            <td scope="col">{{$order->product->checkoutLabel->budget_per_hour}}:</td>
            <td scope="col">:</td>
            <td scope="col">{{$order->orderInfo->budget_per_hour}}</td>
        </tr>
    @endif
    @if(!empty($order->product->checkoutLabel->budget_per_week))
        <tr>
            <td scope="col">{{$order->product->checkoutLabel->budget_per_week}}:</td>
            <td scope="col">:</td>
            <td scope="col">{{$order->orderInfo->budget_per_week}}</td>
        </tr>
    @endif
    @if(!empty($order->product->checkoutLabel->budget_per_month))
        <tr>
            <td scope="col">{{$order->product->checkoutLabel->budget_per_month}}:</td>
            <td scope="col">:</td>
            <td scope="col">{{$order->orderInfo->budget_per_month}}</td>
        </tr>
    @endif
    @if(!empty($order->product->checkoutLabel->budget))
        <tr>
            <td scope="col">{{$order->product->checkoutLabel->budget}}:</td>
            <td scope="col">:</td>
            <td scope="col">{{$order->orderInfo->budget}}</td>
        </tr>
    @endif
    @if(!empty($order->product->checkoutLabel->start_date_from_calender))
        <tr>
            <td scope="col">{{$order->product->checkoutLabel->start_date_from_calender}}:</td>
            <td scope="col">:</td>
            <td scope="col">{{$order->orderInfo->start_date_from_calender}}</td>
        </tr>
    @endif

    @if(!empty($order->product->checkoutLabel->end_date_from_calender))
        <tr>
            <td scope="col">{{$order->product->checkoutLabel->end_date_from_calender}}:</td>
            <td scope="col">:</td>
            <td scope="col">{{$order->orderInfo->end_date_from_calender}}</td>
        </tr>
    @endif

    @if(!empty($order->product->checkoutLabel->meeting_time_stamp))
        <tr>
            <td scope="col">{{$order->product->checkoutLabel->meeting_time_stamp}}:</td>
            <td scope="col">:</td>
            <td scope="col">{{$order->orderInfo->meeting_time_stamp}}</td>
        </tr>
    @endif

    @if(!empty($order->product->checkoutLabel->end_time_stamp))
        <tr>
            <td scope="col">{{$order->product->checkoutLabel->end_time_stamp}}:</td>
            <td scope="col">:</td>
            <td scope="col">{{$order->orderInfo->end_time_stamp}}</td>
        </tr>
    @endif

    @if(!empty($order->product->checkoutLabel->description))
        <tr>
            <td scope="col">{{$order->product->checkoutLabel->description}}:</td>
            <td scope="col">:</td>
            <td scope="col">{{$order->orderInfo->description}}</td>
        </tr>
    @endif


    </tbody>

</table>
