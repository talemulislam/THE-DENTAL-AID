function appointment_time_slot_load() {

    var service_id = document.getElementById('service_id').value;
    var date = document.getElementById('appointment_date').value;
   // alert('sad');

    $.ajax({
        url: "/api/appointment/appointment_time_slot_load",
        method: "POST",
        data: {service_id: service_id, date: date},
        success: function (data) {
           // console.log(data);
            $("#appointment_date").empty();
            data.forEach(function (item) {
              //  console.log(item);
                $("#appointment_date").append("<option value='" + item.text + "'>" + item.text + "</option>");
            });
            $('#appointment_date').fadeIn();
           // $('#appointment_time_slot').html(data);

        }
    });

}

$(document).ready(function () {
    // $(document).on('click', 'li', function () {
    //     $('#country_name').val($(this).text());
    //     $('#countryList').fadeOut();
    // });
  //  alert('test');
});
