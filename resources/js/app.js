/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$(".dial").knob();

$('#deleted').on('change', function(){
   if($(this).is(':checked'))
   {
       $('.deleted').show();
   }
   else
   {
       $('.deleted').hide();
   }

});
