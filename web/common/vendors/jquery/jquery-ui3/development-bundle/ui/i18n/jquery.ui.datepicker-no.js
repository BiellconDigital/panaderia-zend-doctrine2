/* Norwegian initialisation for the jQuery UI date picker plugin. */
/* Written by Naimdjon Takhirov (naimdjon@gmail.com). */

jQuery(function($){
  $.datepicker.regional['no'] = {
    closeText: 'Lukk',
    prevText: '&laquo;Forrige',
    nextText: 'Neste&raquo;',
    currentText: 'I dag',
    monthNames: ['januar','februar','mars','april','mai','juni','juli','august','september','oktober','november','desember'],
    monthNamesShort: ['jan','feb','mar','apr','mai','jun','jul','aug','sep','okt','nov','des'],
    dayNamesShort: ['s��n','man','tir','ons','tor','fre','l��r'],
    dayNames: ['s��ndag','mandag','tirsdag','onsdag','torsdag','fredag','l��rdag'],
    dayNamesMin: ['s��','ma','ti','on','to','fr','l��'],
    weekHeader: 'Uke',
    dateFormat: 'dd.mm.yy',
    firstDay: 1,
    isRTL: false,
    showMonthAfterYear: false,
    yearSuffix: ''
  };
  $.datepicker.setDefaults($.datepicker.regional['no']);
});