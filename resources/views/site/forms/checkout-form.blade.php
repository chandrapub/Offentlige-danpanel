<div class="checkout">
    <form class="w3-container w3-animate-opacity"
          action="{{route('order.store',$product->id)}}" method="post">

        {{csrf_field()}}
        <h4 class="w3-center">{{$product->name}}</h4>
        <br>
        @if(!empty($product->checkoutLabel->contact_person))
            <div class="form-group">
                <label>{{$product->checkoutLabel->contact_person}}</label>
                <input type="text" required name="checkout[contact_person]" class="w3-border w3-input">
            </div>
        @endif

        @if(!empty($product->checkoutLabel->sagsnummer))
            <div class="form-group">
                <label>{{$product->checkoutLabel->sagsnummer}}</label>
                <input type="text" required name="checkout[sagsnummer]" class="w3-border w3-input">
            </div>
        @endif

        @if(!empty($product->checkoutLabel->quantity))
            <div class="form-group">
                <label>{{$product->checkoutLabel->quantity}}</label>
                <input type="number" required name="checkout[quantity]" class="w3-border w3-input">
            </div>
        @endif

        @if(!empty($product->checkoutLabel->machine_quantity))
            <div class="form-group">
                <label>{{$product->checkoutLabel->machine_quantity}}</label>
                <input type="number" required name="checkout[machine_quantity]" class="w3-border w3-input">
            </div>
        @endif

        @if(!empty($product->checkoutLabel->number_of_employees))
            <div class="form-group">
                <label>{{$product->checkoutLabel->number_of_employees}}</label>
                <input type="number" required name="checkout[number_of_employees]" class="w3-border w3-input">
            </div>
        @endif



        @if(!empty($product->checkoutLabel->no_of_cups))
            <div class="form-group">
                <label>{{$product->checkoutLabel->no_of_cups}}</label>
                <input type="number" required name="checkout[no_of_cups]" class="w3-border w3-input">
            </div>
        @endif


        {{--        <div class="form-group">--}}
        {{--            <input type="radio" name="buy" id="buy"> <label for="buy">Buy</label>--}}
        {{--            <input type="radio" name="buy" id="rent"> <label for="rent">Rent</label>--}}
        {{--        </div>--}}


        <div class="form-group">
            @if(!empty($product->checkoutLabel->select_type_header))
                <h4>{{$product->checkoutLabel->select_type_header}}</h4>
            @endif
            @if(!empty($product->checkoutLabel->select_office))
                <div>
                    <input type="checkbox" value="{{$product->checkoutLabel->select_office}}"
                           name="checkout[select_office]">
                    <label for="office" class="mr-2">{{$product->checkoutLabel->select_office}}</label>
                </div>
            @endif

            @if(!empty($product->checkoutLabel->select_institution))
                <div>
                    <input type="checkbox" value="{{$product->checkoutLabel->select_institution}}"
                           name="checkout[select_institution]">
                    <label for="office" class="mr-2">{{$product->checkoutLabel->select_institution}}</label>
                </div>
            @endif

            @if(!empty($product->checkoutLabel->select_warehouse))
                <div>

                    <input type="checkbox" value="{{$product->checkoutLabel->select_warehouse}}"
                           name="checkout[select_warehouse]">
                    <label for="office" class="mr-2">{{$product->checkoutLabel->select_warehouse}}</label>
                </div>

            @endif

            @if(!empty($product->checkoutLabel->select_clinic))
                <div>
                    <input type="checkbox" value="{{$product->checkoutLabel->select_clinic}}"
                           name="checkout[select_clinic]">
                    <label for="office" class="mr-2">{{$product->checkoutLabel->select_clinic}}</label>
                </div>
            @endif

            @if(!empty($product->checkoutLabel->select_construction))
                <div>
                    <input type="checkbox" value="{{$product->checkoutLabel->select_construction}}"
                           name="checkout[select_construction]">
                    <label for="office" class="mr-2">{{$product->checkoutLabel->select_construction}}</label>
                </div>
            @endif

            @if(!empty($product->checkoutLabel->select_shop))
                <div>
                    <input type="checkbox" value="{{$product->checkoutLabel->select_shop}}"
                           name="checkout[select_shop]">
                    <label for="office" class="mr-2">{{$product->checkoutLabel->select_shop}}</label>
                </div>
            @endif

        </div>


        @if(!empty($product->checkoutLabel->question_1))
            <div class="form-group">
                <label>{{$product->checkoutLabel->question_1}}</label>
                <input type="email" required name="checkout[question_1]" class="w3-border w3-input">
            </div>
        @endif

        @if(!empty($product->checkoutLabel->question_2))
            <div class="form-group">
                <label>{{$product->checkoutLabel->question_2}}</label>
                <input type="text" required name="checkout[question_2]" class="w3-border w3-input">
            </div>
        @endif

        @if(!empty($product->checkoutLabel->question_3))
            <div class="form-group">
                <label>{{$product->checkoutLabel->question_3}}</label>
                <input type="text" required name="checkout[question_3]" class="w3-border w3-input">
            </div>
        @endif

        @if(!empty($product->checkoutLabel->question_4))
            <div class="form-group">
                <label>{{$product->checkoutLabel->question_4}}</label>
                <input type="text" required name="checkout[question_4]" class="w3-border w3-input">
            </div>
        @endif


        @if(!empty($product->checkoutLabel->question_5))
            <div class="form-group">
                <label>{{$product->checkoutLabel->question_5}}</label>
                <input type="text" required name="checkout[question_5]" class="w3-border w3-input">
            </div>
        @endif

        @if(!empty($product->checkoutLabel->question_6))
            <div class="form-group">
                <label>{{$product->checkoutLabel->question_1}}</label>
                <input type="text" required name="checkout[question_6]" class="w3-border w3-input">
            </div>
        @endif
        @if(!empty($product->checkoutLabel->question_7))
            <div class="form-group">
                <label>{{$product->checkoutLabel->question_7}}</label>
                <input type="text" required name="checkout[question_7]" class="w3-border w3-input">
            </div>
        @endif        @if(!empty($product->checkoutLabel->question_8))
            <div class="form-group">
                <label>{{$product->checkoutLabel->question_8}}</label>
                <input type="text" required name="checkout[question_8]" class="w3-border w3-input">
            </div>
        @endif

        @if(!empty($product->checkoutLabel->question_9))
            <div class="form-group">
                <label>{{$product->checkoutLabel->question_9}}</label>
                <input type="text" required name="checkout[question_9]" class="w3-border w3-input">
            </div>
        @endif

        @if(!empty($product->checkoutLabel->question_10))
            <div class="form-group">
                <label>{{$product->checkoutLabel->question_10}}</label>
                <input type="text" required name="checkout[question_10]" class="w3-border w3-input">
            </div>
        @endif

        @if(!empty($product->checkoutLabel->budget_per_hour))
            <div class="form-group">
                <label for="budget_per_hour">{{$product->checkoutLabel->budget_per_hour}}</label>
                <input type="number" required step="0.01" name="checkout[budget_per_hour]" class="w3-border w3-input">
            </div>
        @endif
        @if(!empty($product->checkoutLabel->budget_per_day))
            <div class="form-group">
                <label for="budget_per_hour">{{$product->checkoutLabel->budget_per_day}}</label>
                <input type="number" required step="0.01" id="checkout[budget_per_day]" class="w3-border w3-input">
            </div>
        @endif
        @if(!empty($product->checkoutLabel->budget_per_week))
            <div class="form-group">
                <label for="budget_per_hour">{{$product->checkoutLabel->budget_per_week}}</label>
                <input type="number" required step="0.01" id="checkout[budget_per_day]" class="w3-border w3-input">
            </div>
        @endif
        @if(!empty($product->checkoutLabel->budget_per_month))
            <div class="form-group">
                <label for="budget_per_month">{{$product->checkoutLabel->budget_per_month}}</label>
                <input type="number" required step="0.01" name="checkout[budget_per_month]" class="w3-border w3-input">
            </div>
        @endif
        @if(!empty($product->checkoutLabel->budget))
            <div class="form-group">
                <label for="budget">{{$product->checkoutLabel->budget}}</label>
                <input type="number" required step="0.01" name="checkout[budget]" class="w3-border w3-input">
            </div>
        @endif
        @if(!empty($product->checkoutLabel->start_date_from_calender))
            <div class="form-group">
                <label for="start_date_from_calender">{{$product->checkoutLabel->start_date_from_calender}}</label>
                <input data-provide="datepicker" type="text" required name="checkout[start_date_from_calender]"
                       class="w3-border datepicker w3-input">
            </div>
        @endif

        @if(!empty($product->checkoutLabel->end_date_from_calender))
            <div class="form-group">
                <label for="start_date_from_calender">{{$product->checkoutLabel->end_date_from_calender}}</label>
                <input type="text" required name="checkout[end_date_from_calender]"
                       class="w3-border datepicker w3-input">
            </div>
        @endif

        @if(!empty($product->checkoutLabel->meeting_time_stamp))
            <div class="form-group">
                <label for="start_date_from_calender">{{$product->checkoutLabel->meeting_time_stamp}}</label>
                <input type="text" required name="checkout[meeting_time_stamp]"
                       class="w3-border dateTimePicker w3-input">
            </div>
        @endif
        @if(!empty($product->checkoutLabel->end_time_stamp))
            <div class="form-group">
                <label for="start_date_from_calender">{{$product->checkoutLabel->end_time_stamp}}</label>
                <input type="text" required name="checkout[end_time_stamp]"
                       class="w3-border dateTimePicker w3-input">
            </div>
        @endif

        @if(!empty($product->checkoutLabel->description))
            <div class="form-group">
                <label for="start_date_from_calender">{{$product->checkoutLabel->description}}</label>
                <textarea name="checkout[description]" class="w3-border w3-input" id="" cols="30"
                          rows="10"></textarea>
            </div>
        @endif
        
        <!--<div class="form-group">-->
            
        <!--            <input type="checkbox" class="mr-5 form-check-input"-->
        <!--                   name="subscribeToNewsLetter">-->
        <!--            <label style="margin-left:18px" class="ml-18 form-check-label" for="exampleCheck1">Ja tak til special-->
        <!--                kampagner, rabatter og konkurrencer fra DanPanel.</label>-->
            
        <!--</div>-->
        
        <div class="form-group">
            <input required type="checkbox" class=" mr-5 form-check-input"
                   name="terms_and_condition">
            <label style="margin-left:18px" class="form-check-label" for="exampleCheck1">Jeg accepterer DanPanels <a
                    href="{{asset('assets/site/assets/OtherFiles/Handelsbetingelser-og-vilkar-Samlet.pdf')}}"
                    target="_blank">(handelsbetingelser og vilkår).</a></label>
        </div>

        @if(!empty($product->price) && ($product ->name))

            <button type="submit" class="btn btn-success btn-block rounded-0 mt-3">Kontakt os</button>
        @else
            <button type="submit" class="btn btn-success btn-block rounded-0 mt-3">Send</button>
        @endif
    </form>
    <!--<div class="emarkerInLogin" style="margin: 1rem 1.5rem 1rem; float:right;">-->
    <!--    <a href="https://certifikat.emaerket.dk/danpanel.dk?fbclid=IwAR2VDaxwELCwtxtC_xBNCEEf-V1JRRzknI1VgWITjoM3vFm7Cf1MZI_Xrh0" target = "_blank">-->
    <!--            <img src="{{asset('assets/site/assets/images/icons/e-market-04.png')}}"-->
    <!--                 height="40px" width="150px" alt="e-mærket">-->
    <!--    </a>-->
    <!--</div>-->
</div>


@include('layouts.site.modals.checkout-terms-and-condiction-modal')
