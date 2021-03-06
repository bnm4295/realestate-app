if(document.getElementById("submit-property") != null){
  document.getElementById("submit-property").onkeypress = function(e) {
    var key = e.charCode || e.keyCode || 0;
    if (key == 13) {
      e.preventDefault();
    }
  }
}
else if(document.getElementById("submit-edit") != null){
  document.getElementById("submit-edit").onkeypress = function(e) {
    var key = e.charCode || e.keyCode || 0;
    if (key == 13) {
      e.preventDefault();
    }
  }
}
var rangeSlider = function(){
  var slider = $('.range-slider'),
      range = $('.range-slider__range'),
      value = $('.range-slider__value');

  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(commafy(value));
    });

    range.on('input', function(){
      $(this).next(value).html(commafy(this.value));
    });
  });
};
rangeSlider();

function commafy( num ) {
    var str = num.toString().split('.');
    if (str[0].length >= 5) {
        str[0] = str[0].replace(/(\d)(?=(\d{3})+$)/g, '$1,');
    }
    if (str[1] && str[1].length >= 5) {
        str[1] = str[1].replace(/(\d{3})/g, '$1 ');
    }
    return str.join('.');
}

$(document).ready(function () {

    jQuery.fn.extend({
        size: function() {
            return $(this).length;
        }
    });
    jQuery.fn.load = function(callback){ $(window).on("load", callback) };
    jQuery.fn.exists = function(){ return this.length > 0; }
    $('form').submit(function(){
      if($('input[name=price_left]').exists()){
        $('input[name=price_left]').val($('input[name=price_left]').val().replace('$', ''));
        $('input[name=price_right]').val($('input[name=price_right]').val().replace('$', ''));
      }
    })
    $(document).on('click', '#advsearch .dropdown-menu', function (e) {
      e.stopPropagation();
    });
    if (document.getElementById('pricenum') == ""){
      //var pricenum = parseFloat(document.getElementById("pricenum").innerHTML);
      //document.getElementById('pricenum').innerHTML = '$' + commafy(pricenum);
    }
    setTimeout(function(){
      $(".alert-success").fadeOut().empty();
      $(".danger-notification").fadeOut().empty();
      $(".loginattempt").fadeOut().empty();
    },4000);

    window.onscroll = function() {sticknav()};
    //var sticky = header.offsetTop;
    //header.classList.add("sticky");
    function sticknav() {
      if (window.pageYOffset > 10) {
        //remove before add
        $(".stickynav").removeClass("fadeInUp animated");

        //add
        $(".stickynav").addClass("sticky");
        $(".stickynav").addClass("fadeInDown animated");
        $(".stickysecond").appendTo($(".stickynav"));
      } else {
        //remove before add
        $(".stickynav").removeClass("sticky");
        $(".stickynav").removeClass("fadeInDown animated");

        //add
        $(".stickynav").addClass("fadeInUp animated");
      }
    }
    $(function () {
      /*
      if(document.getElementById('#openfirstdate') != null){
        curr = moment($('#openfirstdate').data("date"), 'MM/DD/YYYY HH:mm');
        currsecond =  moment($('#openseconddate').data("date"), 'MM/DD/YYYY HH:mm');
        //console.log( moment($('#openfirstdate').data("date"), 'MM/DD/YYYY HH:mm').format('HH:mm'))
        $('#openfirstdate').datetimepicker({
          inline: true,
          sideBySide: true,
          defaultDate: curr,
          enabledDates: [curr],
        });
        $('#openfirstdate').data("DateTimePicker").minDate(curr).maxDate(curr).disabledTimeIntervals([curr]);
        $('#openfirstdate .timepicker-minute').removeAttr('data-action');
        $('#openfirstdate .timepicker-hour').removeAttr('data-action');
        //$('#openfirstdate').data("DateTimePicker").enabledDates([$('#openfirstdate').data("date")]);
        $('#openseconddate').datetimepicker({
          inline: true,
          sideBySide: true,
          defaultDate: moment(currsecond, 'MM/DD/YYYY HH:mm'),
          enabledDates: [moment(currsecond, 'MM/DD/YYYY HH:mm')],
        });
        $('#openseconddate').data("DateTimePicker").minDate(currsecond).maxDate(currsecond).disabledTimeIntervals([currsecond]);
        $('#openseconddate .timepicker-minute').removeAttr('data-action');
        $('#openseconddate .timepicker-hour').removeAttr('data-action');
      }
      */
      $('#closingtime').datetimepicker({
        format: 'MM/DD/YYYY HH:mm',
        ignoreReadonly: true,
        defaultDate: moment(),
        minDate: moment()-1,
      });
      $('#firstdate').datetimepicker({
        format: 'MM/DD/YYYY HH:mm',
        ignoreReadonly: true,
        useCurrent: false,
      });
      $('#seconddate').datetimepicker({
        format: 'MM/DD/YYYY HH:mm',
        ignoreReadonly: true,
        useCurrent: false,
      });
      $('#thirddate').datetimepicker({
        format: 'MM/DD/YYYY HH:mm',
        ignoreReadonly: true,
        useCurrent: false,
      });
      $('#fourthdate').datetimepicker({
        format: 'MM/DD/YYYY HH:mm',
        ignoreReadonly: true,
        useCurrent: false,
      });
      if($("#firstdate").exists() && $("#seconddate").exists() ){
        $("#firstdate").on("dp.change", function (e) {
          $('#seconddate').data("DateTimePicker").minDate(e.date);
        });
        $("#seconddate").on("dp.change", function (e) {
          $('#firstdate').data("DateTimePicker").maxDate(e.date);
        });
      }
      if($("#thirddate").exists() && $("#fourthdate").exists()){
        $("#thirddate").on("dp.change", function (e) {
          $('#fourthdate').data("DateTimePicker").minDate(e.date);
        });
        $("#fourthdate").on("dp.change", function (e) {
          $('#thirddate').data("DateTimePicker").maxDate(e.date);
        });
      }
      $('#openfirst').datetimepicker({
        format: 'MM/DD/YYYY HH:mm',
        ignoreReadonly: true,
        useCurrent: false,
      });
      $('#opensecond').datetimepicker({
        format: 'MM/DD/YYYY HH:mm',
        ignoreReadonly: true,
        useCurrent: false,
      });
      if($("#openfirst").exists() && $("#opensecond").exists()){
        $("#openfirst").on("dp.change", function (e) {
          $('#opensecond').data("DateTimePicker").minDate(e.date);
        });
        $("#opensecond").on("dp.change", function (e) {
          $('#openfirst').data("DateTimePicker").maxDate(e.date);
        });
      }
    });
    $('[data-countdown]').each(function() {
      var $this = $(this), finalDate = $(this).data('countdown');
      $this.countdown(finalDate, function(event) {
        $this.html(event.strftime('%D days %H:%M:%S'));
        if(event.strftime('%D days %H:%M:%S') == "00 days 00:00:00"){
          $this.html("Bidding is Over. <br>");
        }
      });
      $this.on('finish.countdown', function(event){
        $this.html('Bidding is finished!');
        //year/month/day hour:minute:seconds
        //make $post['user_id'] equate to $post['currentbidderid']
      });
    });
    $('body').on('click', '.properties .pagination a', function(e){

         e.preventDefault();
         var url = $(this).attr('href');
        // var url = "/paginateprop"

         //$.get(url, function(data){
          //   $('.properties').html(data);
         //});
         $.ajax({
              type: "GET",
              url: url,
              dataType: 'html',
              success: function(data) {
                  $('.properties').html(
                      $('<div />').html(data).find('.properties').html()
                  );
              }
          });

     });
     $('body').on('click', '.offers .pagination a', function(e){

          e.preventDefault();
          var url = $(this).attr('href');
  
          $.ajax({
              type: "GET",
              url: url,
              dataType: 'html',
              success: function(data) {
                  $('.offers').html(
                      $('<div />').html(data).find('.offers').html()
                  );
              }
          });

      });
 /*
     $(window).scroll(fetchProperties);

     function fetchProperties() {

         var page = $('.endless-pagination').data('next-page');

         if(page !== null) {

             clearTimeout( $.data( this, "scrollCheck" ) );

             $.data( this, "scrollCheck", setTimeout(function() {
                 var scroll_position_for_prop_load = $(window).height() + $(window).scrollTop() + 100;

                 if(scroll_position_for_prop_load >= $(document).height()) {
                     $.get(page, function(data){
                         $('.properties').append(data.properties);
                         $('.endless-pagination').data('next-page', data.next_page);
                     });
                 }
             }, 350))

         }
     }
 */
    //$('#datepicker').datepicker({
      //  startDate: '-180d',
        //endDate: '+1d',
        //autoclose: true
    //});
    if($('#submit-property').exists()){
      document.querySelector('#submit-property').addEventListener('submit', function(e) {
          var form = this;
          e.preventDefault();
          swal({
              title: "Are you sure?",
              text: 'Your form will be submitted. We will be sending an electronic Property disclosure statement for you to sign within 24hours after your submission. Would you like to submit your property?',
              type: "warning",
              showCancelButton: true,
              confirmButtonClass: 'btn-info',
              confirmButtonText: 'Yes',
              cancelButtonText: "No",
              closeOnConfirm: false,
              closeOnCancel: false
              },
           function (isConfirm) {
              if (isConfirm) {
                swal("Confirmed!", "Your form has been submitted.", "success");
                form.submit();
              } else {
                swal("Cancelled", "Your form has not been submitted.", "error");
              }
              });
      });
    }
    if($('#addcomments').exists()){
      document.querySelector('#addcomments').addEventListener('submit', function(e) {
          var form = this;
          e.preventDefault();
          swal({
              title: "Are you sure?",
              text: 'Your form will be submitted.',
              type: "warning",
              showCancelButton: true,
              confirmButtonClass: 'btn-info',
              confirmButtonText: 'Yes',
              cancelButtonText: "No",
              closeOnConfirm: false,
              closeOnCancel: false
              },
           function (isConfirm) {
              if (isConfirm) {
                swal("Confirmed!", "Your form has been submitted.", "success");
                form.submit();
              } else {
                swal("Cancelled", "Your form has not been submitted.", "error");
              }
              });
      });
    }
    if($('#serviceform').exists()){
      document.querySelector('#serviceform').addEventListener('submit', function(e) {
          var form = this;
          e.preventDefault();
          swal({
              title: "Are you sure?",
              text: 'Your form will be submitted.',
              type: "warning",
              showCancelButton: true,
              confirmButtonClass: 'btn-info',
              confirmButtonText: 'Yes',
              cancelButtonText: "No",
              closeOnConfirm: false,
              closeOnCancel: false
              },
           function (isConfirm) {
              if (isConfirm) {
                swal("Confirmed!", "Your form has been submitted.", "success");
                form.submit();
              } else {
                swal("Cancelled", "Your form has not been submitted.", "error");
              }
              });
      });
    }
    if($('#contact-form').exists()){
      document.querySelector('#contact-form').addEventListener('submit', function(e) {
          var form = this;
          e.preventDefault();
          swal({
              title: "Are you sure?",
              text: 'Your form will be submitted.',
              type: "warning",
              showCancelButton: true,
              confirmButtonClass: 'btn-info',
              confirmButtonText: 'Yes',
              cancelButtonText: "No",
              closeOnConfirm: false,
              closeOnCancel: false
              },
           function (isConfirm) {
              if (isConfirm) {
                swal("Confirmed!", "Your form has been submitted.", "success");
                form.submit();
              } else {
                swal("Cancelled", "Your form has not been submitted.", "error");
              }
              });
      });
    }
    if($('#request-time').exists()){
      document.querySelector('#request-time').addEventListener('submit', function(e) {
          var form = this;
          e.preventDefault();
          swal({
              title: "Are you sure?",
              text: 'Your request will be submitted with the following time.',
              type: "warning",
              showCancelButton: true,
              confirmButtonClass: 'btn-info',
              confirmButtonText: 'Yes',
              cancelButtonText: "No",
              closeOnConfirm: false,
              closeOnCancel: false
              },
           function (isConfirm) {
              if (isConfirm) {
                swal("Confirmed!", "Your request has been submitted.", "success");
                form.submit();
              } else {
                swal("Cancelled", "Your request has not been submitted.", "error");
              }
              });
      });
    }
    if($('#offer-property').exists()){
      document.querySelector('#offer-property').addEventListener('submit', function(e) {
          var form = this;
          e.preventDefault();
          swal({
              title: "Are you sure?",
              text: 'Your offer will be submitted. We are sending you an email that allows you to confirm this offer and send offer documents to the seller.',
              type: "warning",
              showCancelButton: true,
              confirmButtonClass: 'btn-info',
              confirmButtonText: 'Yes',
              cancelButtonText: "No",
              closeOnConfirm: false,
              closeOnCancel: false
              },
           function (isConfirm) {
              if (isConfirm) {
                swal("Confirmed!", "Your offer has been submitted.", "success", function () {
                });
                form.submit();
              } else {
                swal("Cancelled", "Your offer has not been submitted.", "error");
              }
            });
      });
    }
    if($("#message-form").exists()){
      document.querySelector('#message-form').addEventListener('submit', function(e) {
          var form = this;
          e.preventDefault();
          swal({
              title: "Are you sure?",
              text: 'Message will be submitted. Check your message box for further conversation.',
              type: "warning",
              showCancelButton: true,
              confirmButtonClass: 'btn-info',
              confirmButtonText: 'Yes',
              cancelButtonText: "No",
              closeOnConfirm: false,
              closeOnCancel: false
              },
           function (isConfirm) {
              if (isConfirm) {
                swal("Confirmed!", "Your message has been submitted.", "success", function () {
                });
                form.submit();
              } else {
                  swal("Cancelled", "Your message has not been submitted.", "error");
              }
              });
          });
    }
    $('.image-link').magnificPopup({
      type: 'image',
       mainClass: 'mfp-with-zoom', // this class is for CSS animation below
       gallery: {
         enabled: true
       },
       zoom: {
         enabled: true, // By default it's false, so don't forget to enable it

         duration: 300, // duration of the effect, in milliseconds
         easing: 'ease-in-out', // CSS transition easing function

         // The "opener" function should return the element from which popup will be zoomed in
         // and to which popup will be scaled down
         // By defailt it looks for an image tag:
         opener: function(openerElement) {
           // openerElement is the element on which popup was initialized, in this case its <a> tag
           // you don't need to add "opener" option if this code matches your needs, it's defailt one.
           return openerElement.is('img') ? openerElement : openerElement.find('img');
         }
       }
    });
});
$(window).on('load', function() {
    $(".wrap").fadeOut();
    $("body").css("overflow-x","initial");
    $("body").css("overflow-y","initial");
    //var linkNode = document.querySelector('link[href*="widget.css"]');
    //var stylesheet = linkNode.sheet || linkNode.styleSheet || linkNode.styleDeclaration;
    //stylesheet.disabled = false;
    //console.log($("#mylogin .fade .in"));
    //$(".fade.in").css('opacity', '0')
});
function Anim(x) {
  $('.modal .modal-dialog').attr('class', 'modal-dialog  ' + x + '  animated');
};
$('#mylogin').on('show.bs.modal', function (e) {
  var anim = 'bounceinDown';
      Anim(anim);
});
$('#mylogin').on('hide.bs.modal', function (e) {
  var anim = 'flipOutX';
      Anim(anim);
});
$('#myreg').on('show.bs.modal', function (e) {
  var anim = 'bounceinDown';
      Anim(anim);
});
$('#myreg').on('hide.bs.modal', function (e) {
  var anim = 'flipOutX';
      Anim(anim);
});

//stylesheet.disabled = true;
