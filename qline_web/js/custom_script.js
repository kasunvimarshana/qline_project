//set select2's default theme
//$.fn.select2.defaults.set( "theme", "bootstrap4" );
//$.fn.select2.defaults.set( "theme", "bootstrap" );
/*select2 plugin for set options' data attribute */
(function($) {
    $.fn.setSelect2OptionDataAttribute = function(newData) {
        //newData = [];
        try{
            var origOptions = this.data("select2").options.options;
            origOptions.data = [];
            var newOptions = $.extend(origOptions, {data: newData});
            this.empty().select2(newOptions);
        }catch(e){
            console.log("error");
        }
        return this;
    };
})(jQuery);