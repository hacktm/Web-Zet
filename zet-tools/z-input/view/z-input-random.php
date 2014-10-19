<?php 
	require 'classes/processing.php';
	$process = new processing();
	$cssVals = $process->z_input_get_random(10);
	$i = 0;
	// print_r($cssVals);
	if($cssVals != false)
	foreach ($cssVals as $value) {
		
	 echo "<script> var cssvals = '".json_encode(unserialize($value['json']))."'</script>";
	 ?>
	 <div class="container">
	 <div class="randomContainer" style="float:left; margin-left:20px;">
	 	<div class="preview" style="width:440px; " data-clicked='<?php echo $i;  ?>'>
			<div class="z-input-center">
				<input type="text" class = "z-input-preview<?php echo $i;  ?>" placeholder="John Doe" value="John Doe">
			</div>
		</div>
		<div class="code-preview-3" data-show='<?php echo $i;  ?>'>
		<code>
<pre class="cssPreview">
<span class="className">.z-input</span><span class="breakets">{</span>
	<span class="attribute">background-color</span><span class="twoDots">:</span><span class="attributeValue bgColor<?php echo $i;  ?>">#ffffff</span><span class="twoDots">;</span>
	<span class="attribute">border-color</span><span class="twoDots">:</span><span class="attributeValue borderColor<?php echo $i;  ?>">#262626</span><span class="twoDots">;</span>
	<span class="attribute">color</span><span class="twoDots">:</span><span class="attributeValue cssTextColor<?php echo $i;  ?>">#262626</span><span class="twoDots">;</span>
	<span class="attribute">border-style</span><span class="twoDots">:</span><span class="attributeValue cssBorderStyle<?php echo $i;  ?>">solid</span><span class="twoDots">;</span>
	<span class="attribute">border-width</span><span class="twoDots">:</span><span class="attributeValue cssBorderWidth<?php echo $i;  ?>">1px</span><span class="twoDots">;</span>
	<span class="attribute">border-radius</span><span class="twoDots">:</span><span class="attributeValue cssBorderRadius<?php echo $i;  ?>">0px</span><span class="twoDots">;</span>
	<span class="attribute">padding</span><span class="twoDots">:</span><span class="attributeValue cssBorderPadding<?php echo $i;  ?>">0px</span><span class="twoDots">;</span>
<span class="breakets">}</span>
</pre>
		</code>
	</div>
	<script type="text/javascript">
 console.log(cssvals);
 var cssparse =  jQuery.parseJSON( cssvals );
 $('.z-input-preview<?php echo $i;  ?>').css('background-color',cssparse.css.backgroundColor);
 $('.z-input-preview<?php echo $i;  ?>').css('border-color',cssparse.css.borderColor);
 $('.z-input-preview<?php echo $i;  ?>').css('color',cssparse.css.color);
 $('.z-input-preview<?php echo $i;  ?>').css('border-style',cssparse.css.borderStyle);
 $('.z-input-preview<?php echo $i;  ?>').css('border-width',cssparse.css.borderWidth);
 $('.z-input-preview<?php echo $i;  ?>').css('border-radius',cssparse.css.borderRadius);
 $('.z-input-preview<?php echo $i;  ?>').css('padding',cssparse.css.padding);
 $('.bgColor<?php echo $i;  ?>').text(cssparse.css.backgroundColor);
 $('.borderColor<?php echo $i;  ?>').text(cssparse.css.borderColor);
 $('.cssTextColor<?php echo $i;  ?>').text(cssparse.css.color);
 $('.cssBorderStyle<?php echo $i;  ?>').text(cssparse.css.borderStyle);
 $('.cssBorderWidth<?php echo $i;  ?>').text(cssparse.css.borderWidth);
 $('.cssBorderRadius<?php echo $i;  ?>').text(cssparse.css.borderRadius);
 $('.cssBorderPadding<?php echo $i;  ?>').text(cssparse.css.padding);
 $('.saved').delay(3000).slideUp();
 </script>

	 </div>
	 </div>
	 <?php 
	 $i++;
	}
 ?>
 <script type="text/javascript">
 	$('.code-preview-3').hide();
 	$('.preview').click(function(){
 		var number = $(this).data('clicked');
 		$('.code-preview-3').each(function(){
 			var number2 = $(this).data('show');
 			if(number == number2){
 				$(this).slideToggle();
 			}
 		});
 	});
 </script>