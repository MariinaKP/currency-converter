function convert() {
    let amount = $("#amount").val();
    let selectedOne = $('#currency__one--options').find(":selected").val();
    let selectedTwo = $('#currency__two--options').find(":selected").val();
    let result;

    $.ajax({
        url: 'https://v6.exchangerate-api.com/v6/26327dac634a5e3a936c5305/latest/' + selectedOne,
        dataType: 'json',
        success: function(content) {
            result = (content.conversion_rates[selectedTwo] * amount).toFixed(2) + " " + selectedTwo;
            $('#result').val(result);
        }
    });
}