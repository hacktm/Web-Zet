<?php 
	if(isset($_GET['id'])){
		// require 'config/config.php';
		// require 'classes/db.php';
		require 'classes/processing.php';
		$id = $_GET['id'];
		$process = new processing();
		echo "<script> var cssvals = '".json_encode(unserialize($process->z_input_get_by_id($id)))."'</script>";

	}
	if (isset($_GET['saved'])) {
		echo "<div class='saved'>Style saved successfully !</div>";
	}
 ?>

 <div class="preview" style="margin:10px auto 0 auto !important;">
	<div class="z-input-center">
		<input type="text" class = "z-input-preview" placeholder="John Doe" value="John Doe">
	</div>
</div>
<div class="code-preview-2">
		<code>
<pre class="cssPreview">
<span class="className">.z-input</span><span class="breakets">{</span>
	<span class="attribute">background-color</span><span class="twoDots">:</span><span class="attributeValue bgColor">#ffffff</span><span class="twoDots">;</span>
	<span class="attribute">border-color</span><span class="twoDots">:</span><span class="attributeValue borderColor">#262626</span><span class="twoDots">;</span>
	<span class="attribute">color</span><span class="twoDots">:</span><span class="attributeValue cssTextColor">#262626</span><span class="twoDots">;</span>
	<span class="attribute">border-style</span><span class="twoDots">:</span><span class="attributeValue cssBorderStyle">solid</span><span class="twoDots">;</span>
	<span class="attribute">border-width</span><span class="twoDots">:</span><span class="attributeValue cssBorderWidth">1px</span><span class="twoDots">;</span>
	<span class="attribute">border-radius</span><span class="twoDots">:</span><span class="attributeValue cssBorderRadius">0px</span><span class="twoDots">;</span>
	<span class="attribute">padding</span><span class="twoDots">:</span><span class="attributeValue cssBorderPadding">0px</span><span class="twoDots">;</span>
<span class="breakets">}</span>
</pre>
		</code>
	</div>
 <script type="text/javascript">
 console.log(cssvals);
 var cssparse =  jQuery.parseJSON( cssvals );
 $('.z-input-preview').css('background-color',cssparse.css.backgroundColor);
 $('.z-input-preview').css('border-color',cssparse.css.borderColor);
 $('.z-input-preview').css('color',cssparse.css.color);
 $('.z-input-preview').css('border-style',cssparse.css.borderStyle);
 $('.z-input-preview').css('border-width',cssparse.css.borderWidth);
 $('.z-input-preview').css('border-radius',cssparse.css.borderRadius);
 $('.z-input-preview').css('padding',cssparse.css.padding);
 $('.bgColor').text(cssparse.css.backgroundColor);
 $('.borderColor').text(cssparse.css.borderColor);
 $('.cssTextColor').text(cssparse.css.color);
 $('.cssBorderStyle').text(cssparse.css.borderStyle);
 $('.cssBorderWidth').text(cssparse.css.borderWidth);
 $('.cssBorderRadius').text(cssparse.css.borderRadius);
 $('.cssBorderPadding').text(cssparse.css.padding);
 $('.saved').delay(3000).slideUp();
 </script>