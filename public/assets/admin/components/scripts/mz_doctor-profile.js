var d_doctorProfile = function () {


    return {
        /* main function to initiate the module */
        init: function () {
            d_doctorProfile.initDoctorProfile();
        },

        initDoctorProfile: function () 
        {
            function mapMarker()
            {
                var map = new GMaps({
                    div: '#hospital_marker',
                    lat: 14.555084,
                    lng: 121.047669,
                    color: 'blue',
                    zoom: 11,
                });
                <?php foreach($doctor->hospitals as $hospital){ ?>
                    map.addMarker({
                        lat: '<?php echo $hospital->latitude; ?>',
                        lng: '<?php echo $hospital->longitude; ?>',
                        color: 'blue',
                        title: '<?php echo $hospital->hospital_name; ?>',
                        infoWindow: {
                            content: '<span style="color:#000">' + '<?php echo $hospital->hospital_name; ?>' + '</span>'
                        }
                    });
                <?php } ?>
            }
        
            function validateForm() {
                var newPassword = document.forms["changepassword"]["new_password"].value;
                var rePassword = document.forms["changepassword"]["confirm_password"].value;
                if (newPassword == rePassword) {
                    document.getElementById("change_password_button").disabled=false;
                }
                else
                {
                    document.getElementById("change_password_button").disabled=true;
                }
            }

            var country     = '{{ $doctor->address5 }}';
            var province    = '{{ $doctor->address4 }}';
            var city        = '{{ $doctor->address3 }}';
        
            if(country != '')
            {
                loadProvince('{{$doctor->address5}}');
            }
            if(province != '')
            {
                loadCity('{{$doctor->address4}}');
            }
            
            $('#specializationList').multiSelect({ 
                keepOrder: true
            });
        
            $('#hospitalList').multiSelect({ 
                keepOrder: true
            });
        
            function loadProvince(value)
            {
                var url = "{{ URL::route('loadProvince') }}";
        
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {
                        "countryCode": value
                    },
                    dataType: 'json',
                    success : function(data)
                    {
                        var sel = $("#province_list");
                        document.getElementById('province_list').options.length = 0;
                        for (var i=0; i<data.length; i++) 
                        {
                            if (province == data[i].id )
                            {
                                sel.append('<option value="' + data[i].id + '" selected>' + data[i].province + '</option>');
                            }
                            else
                            {
                                sel.append('<option value="' + data[i].id + '">' + data[i].province + '</option>');
                            }
                            
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) 
                    {
                        window.alert(xhr.status);
                        window.alert(thrownError);
                        console.log(thrownError);
                    }
                    
                });
            }
        
            function loadCity(value)
            {
                var url = "{{ URL::route('loadCity') }}";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {
                        "provinceCode": value
                    },
                    dataType: 'json',
                    success : function(data)
                    {
                        var sel = $("#city_list");
                        document.getElementById('city_list').options.length = 0;
                        for (var i=0; i<data.length; i++) 
                        {
                            if (city == data[i].id )
                            {
                                sel.append('<option value="' + data[i].id + '" selected>' + data[i].City + '</option>');
                            }
                            else
                            {
                                sel.append('<option value="' + data[i].id + '">' + data[i].City + '</option>');
                            }
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) 
                    {
                        window.alert(xhr.status);
                        window.alert(thrownError);
                        console.log(thrownError);
                    }
                    
                });
            }
        }

    };

}();