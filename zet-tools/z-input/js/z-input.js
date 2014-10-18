$( document ).ready(function() {

	$('.radio-button').click(function(){
		$(this).siblings().prop("checked", false);
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
                if(!bySetColor) $(el).val("#"+hex);
            }
        }).keyup(function(){
            $(this).colpickSetColor(this.value);
        });
});