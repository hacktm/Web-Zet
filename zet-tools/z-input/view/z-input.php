<div class="container">
	<div class="preview">
		<div class="z-input-center">
			<input type="text" class = "z-input-preview" placeholder="John Doe" value="John Doe">
		</div>
		<div class="previewColorChange">
          <span>Background Color:   <input type="text" class='previewBackground' value="fff"></span>
        </div>
	</div>
	<div class="controls">
		<div class="z-colors">
			<div class="titleHead">
				&nbsp;&nbsp;&nbsp;Colors
			</div>
			<div class="colorsInput">
          		<span>Input Background:   <input type="text" class='InputBackground inputs' ></span>
        	</div>
        	<div class="colorsInput">
          		<span>Border Color:   <input type="text" class='borderColor inputs' ></span>
        	</div>

        	<div class="colorsInput">
          		<span>Text Color:   <input type="text" class='textColor inputs' ></span>
        	</div>
		</div>
		<div class="clear"></div><div class="space"></div>
		<div class="z-border">
			<div class="titleHead">
				&nbsp;&nbsp;&nbsp;Border
			</div>
			<div class="z-radio-container">
			<div class="z-radio">
				<input class = "radio-button" type="checkbox" value="none"> None
			</div>
			<div class="z-radio">
				<input class = "radio-button" type="checkbox" value="Hidden"> Hidden
			</div>
			<div class="z-radio">
				<input class = "radio-button" type="checkbox" value="solid"> Solid
			</div>
			<div class="z-radio">
				<input class = "radio-button" type="checkbox" value="dotted"> Dotted
			</div>
			<div class="z-radio">
				<input class = "radio-button" type="checkbox" value="dashed"> Dashed
			</div>
			<div class="z-radio">
				<input class = "radio-button" type="checkbox" value="double"> Double
			</div>
			<div class="z-radio">
				<input class = "radio-button" type="checkbox" value="groove"> Groove
			</div>
			<div class="z-radio">
				<input class = "radio-button" type="checkbox" value="ridge"> Ridge
			</div>
			<div class="z-radio">
				<input class = "radio-button" type="checkbox" value="inset"> Inset
			</div>
			<div class="z-radio">
				<input class = "radio-button" type="checkbox" value="outset"> Outset
			</div>
			<div class="z-radio">
				<input class = "radio-button" type="checkbox" value="initial"> Initial
			</div>
			<div class="z-radio">
				<input class = "radio-button" type="checkbox" value="inherit"> Inherit
			</div>
			</div>
		</div>
	</div>
	<div class="code-preview"></div>
</div>
<script type="text/javascript">
	$('.preview').stick_in_parent();
</script>