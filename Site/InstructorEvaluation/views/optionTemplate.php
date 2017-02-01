<div class="col-xs-12 center" name='{{@question.questionID}}_option'>
	<div class="row">
		<div class="col-xs-8 col-xs-offset-2 col-sm-offset-0 col-sm-2 text-left">
		  <label class="radio-inline">
			<input type="radio" name='{{@question.questionID}}_option' value="1" {~ if (@question.inputAnswer == 1): ~} checked="checked" {~ endif~}>Almost Always</input>
		  </label>
		</div>
		<div class="col-xs-8 col-xs-offset-2 col-sm-2 col-sm-offset-0  text-left">
		  <label class="radio-inline">
			<input type="radio" name='{{@question.questionID}}_option' value="2" {~ if (@question.inputAnswer == 2): ~} checked="checked" {~ endif~}>Often</input>
		  </label>
		</div>
		<div class="col-xs-8 col-xs-offset-2 col-sm-offset-0 col-sm-2 text-left">
		  <label class="radio-inline">
			<input type="radio" name='{{@question.questionID}}_option' value="3" {~ if (@question.inputAnswer == 3): ~} checked="checked" {~ endif~}>Sometimes</input>
		  </label>
		</div>
		<div class="col-xs-8 col-xs-offset-2 col-sm-offset-0 col-sm-2 text-left">
		  <label class="radio-inline">
			<input type="radio" name='{{@question.questionID}}_option' value="4" {~ if (@question.inputAnswer == 4): ~} checked="checked" {~ endif~}>Rarely</input>
		  </label>
	  </div>
		<div class="col-xs-8 col-xs-offset-2 col-sm-offset-0 col-sm-2 text-left">
		  <label class="radio-inline">
			<input type="radio" name='{{@question.questionID}}_option' value="5" {~ if (@question.inputAnswer == 5): ~} checked="checked" {~ endif~}>Almost Never</input>
		  </label>
	  </div>
		<div class="col-xs-8 col-xs-offset-2 col-sm-offset-0 col-sm-2 text-left">
		  <label class="radio-inline">
			<input type="radio" name='{{@question.questionID}}_option' value="6" {~ if (@question.inputAnswer == 6): ~} checked="checked" {~ endif~}>N/A</input>
		  </label>
	  </div>
	</div>
</div>
