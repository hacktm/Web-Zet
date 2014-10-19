$( document ).ready(function() {
	var a = Math.floor((Math.random() * 10) + 1);
	var b = Math.floor((Math.random() * 10) + 1); 
	var c = a+b;

	var save = '{"css":{"backgroundColor":"#ffffff","borderColor":"#262626","color":"#262626","borderStyle":"solid","borderWidth":"1px","borderRadius":"0px","padding":"0px"}}';
	var saveInfo =  jQuery.parseJSON( save );
	// console.log(saveInfo.css.backgroundColor);

	$('.saveData').click(function(){
		if($('.captcha').val() == c){
			$.ajax({
      url:  "src/z-input.php",
      data: {saveInfo:saveInfo},
      type: 'post',
      async: false,
      success: function(data){
        console.log(data);
        
        
      }
      
    });
		}else{
			alert('no no no')
		}
	})
	$( ".borderSlider" ).slider({
       range: "max",
       min:0,
       max:25,
       slide: function( event, ui ) {
          $( ".borderSliderVal" ).val( ui.value );
          $('.z-input-preview').css('border-width', ui.value+"px");
          $('.cssBorderWidth').text(ui.value+"px");
          saveInfo.css.borderWidth = ui.value+"px";
          // console.log(save);

       }	
    });

	$( ".radiusSlider" ).slider({
       range: "max",
       min:0,
       max:50,
       slide: function( event, ui ) {
          $( ".radiusSliderVal" ).val( ui.value );
          $('.z-input-preview').css('border-radius', ui.value+"px");
          $('.cssBorderRadius').text(ui.value+"px"); 
          saveInfo.css.borderRadius = ui.value+"px";
       }	
    });

    $( ".inputPadding" ).slider({
       range: "max",
       min:0,
       max:25,
       slide: function( event, ui ) {
          $( ".inputPaddingVal" ).val( ui.value );
          $('.z-input-preview').css('padding', ui.value+"px");
          $('.cssBorderPadding').text(ui.value+"px"); 
          saveInfo.css.padding = ui.value+"px";
       }	
    });

	$( document ).tooltip();


	$('.radio-button').click(function(){
		$('.radio-button').prop("checked", false);
		$(this).prop("checked", true);
		$('.z-input-preview').css('border-style',$(this).val());
		$('.cssBorderStyle').text($(this).val());
		saveInfo.css.borderStyle =  $(this).val(); 

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
		
    	$('.captcha').attr('placeholder', a +'+'+b);
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

 		$('.textColor').css('border-color',function(){
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
                saveInfo.css.backgroundColor =  '#'+hex;
                console.log(saveInfo);
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
                saveInfo.css.borderColor = '#'+hex;
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
                saveInfo.css.color = '#'+hex;
            }
        }).keyup(function(){
            $(this).colpickSetColor(this.value);
        });

});