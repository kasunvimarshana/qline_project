<script>
$(function(){
    "use strict";
    //$.fn.select2.defaults.set( "theme", "bootstrap" );
    /*$('#id').select2({
        theme: "bootstrap"
    });*/
    var optionData = {};
    optionData.url = "{!! route('home', []) !!}";//company.selectAllCompanies
    optionData.id = "#company_id";
    
    $( optionData.id ).select2({
        //theme : 'bootstrap',
        //disabled : false,
        //scrollAfterSelect : true,
        closeOnSelect : true,
        //containerCssClass : ':all:',
        //dropdownCssClass : 'class',
        width : 'resolve',
        //allowClear : true,
        //formatResult : function(param){},
        //formatSelection : function(param){},
        //templateResult : function(data) {},
        //templateSelection : function(data) {},
        placeholder	: 'Select',
        minimumInputLength : 2,
        multiple : false,
        escapeMarkup : function (markup) { return markup; },
        data : [],
        ajax : {
            url : optionData.url,
            cache : true,
            // dataType: 'json',
            delay : 50,
            data : function (params) {
                var query = {
                    search : params.term, // $.trim(params.term)
                    active : 1,
                    page : params.page || 1,
                    length : 10
                }
                return query;
            },
            processResults : function (data, params) {
                //params.page = params.page || 1;
                return {
                    results : $.map(data.data, function (obj) {
                        return { 
                            id : obj.mail, 
                            text : obj.mail + ' | ' + ( obj.displayname || obj.employeenumber ) + ' | ' + obj.physicaldeliveryofficename, 
                            data: obj 
                        };
                    }),
                    pagination : {
                        //more: (params.page * data.length) < Number(data.recordsTotal)
                        more : data.pagination.more
                    }
                };
            }
        },
        initSelection_: function(element, callback) {
            // the input tag has a value attribute preloaded that points to a preselected repository's id
            // this function resolves that id attribute to an object that select2 can render
            // using its formatResult renderer - that way the repository name is shown preselected
            var element_value = $(element).val();
            if ( (element_value !== "") ) {
                $.ajax({
                    type : 'GET', // define the type of HTTP verb we want to use (POST for our form)
                    url : optionData.url, // the url where we want to POST
                    data : {}, // our data object
                    //dataType : 'json', // what type of data do we expect back from the server
                    //encode : true,
                    //processData : false,
                    //contentType : false,
                    //cache : false
                })
                // using the done promise callback
                .done(function(data) {
                    //console.log(data);
                    callback(data);
                })
                .fail(function() {
                    //console.log("error");
                })
                .always(function() {
                    //console.log("complete" );
                });
            }
        }
        
    });
    
});
</script>