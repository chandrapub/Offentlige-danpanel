$(document).ready(function () {
    $('#account_type').change(function () {
        let type = $(this).val();
        let business;
        let government;
        let private = '  <div class="form-group row">\n' +
            '                                <label for="role"\n' +
            '                                       class="col-md-4 col-form-label text-md-right">Fødselsdato</label>\n' +
            '                                <div class="col-md-6">\n' +
            '                                    <input required type="date" name="birth_date" class="form-control">\n' +
            '                                </div>\n' +
            '                            </div>';
        business = '  <div class="form-group row">\n' +
            '                                <label for="role"\n' +
            '                                       class="col-md-4 col-form-label text-md-right">Virksomhedsnavn</label>\n' +
            '                                <div class="col-md-6">\n' +
            '                                    <input  required type="text"  required type="text" name="business_name" class="form-control">\n' +
            '                                </div>\n' +
            '                            </div>';

        business += '  <div class="form-group row">\n' +
            '                                <label for="role"\n' +
            '                                       class="col-md-4 col-form-label text-md-right">CVR Nr.</label>\n' +
            '                                <div class="col-md-6">\n' +
            '                                    <input maxlength="8" minlength="8"  required type="text" name="cvr_number" class="form-control">\n' +
            '                                </div>\n' +
            '                            </div>';
        government = '  <div class="form-group row">\n' +
            '                                <label for="role"\n' +
            '                                       class="col-md-4 col-form-label text-md-right">EAN Nr.</label>\n' +
            '                                <div class="col-md-6">\n' +
            '                                    <input required type="text" name="ean_number" class="form-control">\n' +
            '                                </div>\n' +
            '                            </div>';

        if (type === 'private') {
            $(".selected-output-field").html(private);
        }
        if (type === 'business') {
            $(".selected-output-field").html(business);
        }
        if (type === 'government') {
            $(".selected-output-field").html(government);
        }

    });
})