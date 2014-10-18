$( document ).ready(function() {

	$( ".borderSlider" ).slider({
       range: "max",
       min:0,
       max:25,
       slide: function( event, ui ) {
          $( ".borderSliderVal" ).val( ui.value );
          $('.z-input-preview').css('border-width', ui.value+"px");
          $('.cssBorderWidth').text(ui.value+"px"); 

       }	
    });

	$( ".radiusSlider" ).slider({
       range: "max",
       min:0,
       max:50,
       slide: function( event, ui ) {
          $( ".radiusSliderVal" ).val( ui.value );
          $('.z-input-preview').css('border-radius', ui.value+"px");
       }	
    });

    $( ".inputPadding" ).slider({
       range: "max",
       min:0,
       max:25,
       slide: function( event, ui ) {
          $( ".inputPaddingVal" ).val( ui.value );
          $('.z-input-preview').css('padding', ui.value+"px");
       }	
    });

	$( document ).tooltip();


	$('.radio-button').click(function(){
		$('.radio-button').prop("checked", false);
		$(this).prop("checked", true);
		$('.z-input-preview').css('border-style',$(this).val());
		$('.cssBorderStyle').text($(this).val());  

	});

	function rgb2hex(rgb) {
	     if (  rgb.search("rgb") == -1 ) {
	          return rgb;
	     } else {
	          rgb = rgb.match(/^rgba?\((\d+),\s*(\d+),\s*(\d+)(?:,\s*(\d+))?\)$/);
	          function hex(x) {
	               return ("0" + parseInt(x).toString(16)).slice(-2);
	          }
	          return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]); 
	     }
	}
	(function(){

		$('.radio-button-active').prop("checked", true);

		$('.previewBackground').css('border-color',function(){

 			return $('.preview').css('background');
 		});

 		$('.previewBackground').val(rgb2hex($('.preview').css('background-color')));

 		$('.InputBackground').css('border-color',function(){

 			return $('.z-input-preview').css('background');
 		});

 		$('.InputBackground').val(rgb2hex($('.z-input-preview').css('background-color')));

 		$('.borderColor').css('border-color',function(){
 			return $('.z-input-preview').css('border-color');
 		});

 		$('.borderColor').val(rgb2hex($('.z-input-preview').css('border-color'))); 	

 		$('.textColor').css('color',function(){
 			return $('.z-input-preview').css('color');
 		});

 		$('.textColor').val(rgb2hex($('.z-input-preview').css('color'))); 	

	})();

	 $('.previewBackground').colpick({
            layout:'hex',
            submit:0,
            colorScheme:'dark',
            onChange:function(hsb,hex,rgb,el,bySetColor) {
                $(el).css('border-color','#'+hex);
                $('.preview').css('background','#'+hex);                
                if(!bySetColor) $(el).val("#"+hex);
            }
        }).keyup(function(){
            $(this).colpickSetColor(this.value);
        });

        $('.InputBackground').colpick({
            layout:'hex',
            submit:0,
            colorScheme:'dark',
            onChange:function(hsb,hex,rgb,el,bySetColor) {
                $(el).css('border-color','#'+hex);
                $('.z-input-preview').css('background','#'+hex);
                $('.bgColor').text('#'+hex);               
                if(!bySetColor) $(el).val("#"+hex);
            }
        }).keyup(function(){
            $(this).colpickSetColor(this.value);
        });

        $('.borderColor').colpick({
            layout:'hex',
            submit:0,
            colorScheme:'dark',
            onChange:function(hsb,hex,rgb,el,bySetColor) {
                $(el).css('border-color','#'+hex);
                $('.z-input-preview').css('border-color','#'+hex);
                $('.borderColor').text('#'+hex);                 
                if(!bySetColor) $(el).val("#"+hex);
            }
        }).keyup(function(){
            $(this).colpickSetColor(this.value);
        });

        $('.textColor').colpick({
            layout:'hex',
            submit:0,
            colorScheme:'dark',
            onChange:function(hsb,hex,rgb,el,bySetColor) {
                $(el).css('border-color','#'+hex);
                $('.z-input-preview').css('color','#'+hex);  
                $('.cssTextColor').text('#'+hex);                
                if(!bySetColor) $(el).val("#"+hex);
            }
        }).keyup(function(){
            $(this).colpickSetColor(this.value);
        });
});