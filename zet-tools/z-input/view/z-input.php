<div class="container">
	<div class="preview">
		<div class="z-input-center">
			<input type="text" class = "z-input-preview" placeholder="John Doe" value="John Doe">
		</div>
	</div>
	<div class="controls">
		<div class="z-colors">
			<div class="titleHead">
				&nbsp;&nbsp;&nbsp;Colors
			</div>
			<div class="colorsInput">
	            <span><span class="colorLabel">Preview Background: </span>  <input type="text" class='previewBackground inputs' ></span>
	        </div>
			<div class="colorsInput">
          		<span><span class="colorLabel">Input Background:</span>   <input type="text" class='InputBackground inputs' ></span>
        	</div>
        	<div class="colorsInput">
          		<span><span class="colorLabel">Border Color:</span>   <input type="text" class='borderColor inputs' ></span>
        	</div>

        	<div class="colorsInput">
          		<span><span class="colorLabel">Text Color:</span>   <input type="text" class='textColor inputs' ></span>
        	</div>
		</div>
		<div class="clear"></div><div class="space"></div>
		<div class="z-border">
			<div class="titleHead">
				&nbsp;&nbsp;&nbsp;Border
			</div>
			<div class="z-radio-container">
			<div class="z-radio">
				<input class = "radio-button" title="Default value. Specifies no border" type="radio" value="none"> None
			</div>
			<div class="z-radio">
				<input class = "radio-button" title = "The same as 'none', except in border conflict resolution for table elements" type="radio" value="Hidden"> Hidden
			</div>
			<div class="z-radio">
				<input class = "radio-button radio-button-active" title = "Specifies a dotted border" type="radio" value="solid"> Solid
			</div>
			<div class="z-radio">
				<input class = "radio-button" title = "Specifies a dashed border" type="radio" value="dotted"> Dotted
			</div>
			<div class="z-radio">
				<input class = "radio-button" title = "Specifies a solid border" type="radio" value="dashed"> Dashed
			</div>
			<div class="z-radio">
				<input class = "radio-button" title = "Specifies a double border" type="radio" value="double"> Double
			</div>
			<div class="z-radio">
				<input class = "radio-button" title = "Specifies a 3D grooved border. The effect depends on the border-color value" type="radio" value="groove"> Groove
			</div>
			<div class="z-radio">
				<input class = "radio-button" title = "Specifies a 3D ridged border. The effect depends on the border-color value" type="radio" value="ridge"> Ridge
			</div>
			<div class="z-radio">
				<input class = "radio-button" title = "Specifies a 3D inset border. The effect depends on the border-color value" type="radio" value="inset"> Inset
			</div>
			<div class="z-radio">
				<input class = "radio-button" title = "Specifies a 3D outset border. The effect depends on the border-color value" type="radio" value="outset"> Outset
			</div>
			<div class="z-radio">
				<input class = "radio-button" title = "Sets this property to its default value." type="radio" value="initial"> Initial
			</div>
			<div class="z-radio">
				<input class = "radio-button" title = "Inherits this property from its parent element." type="radio" value="inherit"> Inherit
			</div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="borderSliders">
			<div class="sliderContainer">
				<span class="sliderText">Border Width</span>
				<div class="borderSlider slider"></div>
				<input type="text" class="borderSliderVal sliderVal"></input>
			</div>
			<div class="sliderContainer">
				<span class="sliderText">Border Radius</span>
				<div class="radiusSlider slider"></div>
				<input type="text" class="radiusSliderVal sliderVal"></input>
			</div>
			<div class="sliderContainer">
				<span class="sliderText">Padding</span>
				<div class="inputPadding slider"></div>
				<input type="text" class="inputPaddingVal sliderVal"></input>
			</div>
		</div>	
	</div>
	<div class="code-preview">
		<code>
<pre class="cssPreview">
<span class="className">.z-input</span><span class="breakets">{</span>
	<span class="attribute">background-color</span><span class="twoDots">:</span><span class="attributeValue bgColor">#ffffff</span><span class="twoDots">;</span>
	<span class="attribute">border-color</span><span class="twoDots">:</span><span class="attributeValue borderColor">#262626</span><span class="twoDots">;</span>
	<span class="attribute">color</span><span class="twoDots">:</span><span class="attributeValue cssTextColor">#262626</span><span class="twoDots">;</span>
	<span class="attribute">border-style</span><span class="twoDots">:</span><span class="attributeValue cssBorderStyle">solid</span><span class="twoDots">;</span>
	<span class="attribute">border-width</span><span class="twoDots">:</span><span class="attributeValue cssBorderWidth">1px</span><span class="twoDots">;</span>
<span class="breakets">}</span>
</pre>
		</code>
	</div>
</div>
<script type="text/javascript">
	$('.preview').stick_in_parent();
</script>