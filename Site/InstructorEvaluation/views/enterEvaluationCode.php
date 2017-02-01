<?php
/**
 * Project: IT Instructor Evaluations
 * File: enterEvaluationCode.php
 * Authors: James Staab and Craig Koch
 * Date: 05/01/2016
 * This page is meant for taking in the evaluation code and submitting it to the router for
 * verification
 */
?>

<!--Title-->
<h2 class="text-center">Instructor Evaluation Form</h2>
<!--Entry code label and input-->
<div class="form-group row">
  <div class="col-xs-12 col-md-8 col-md-offset-2 text-center">
    <label for="evaluationCodeEntry">Please enter the code provided by your Instructor</label>
    <input class="form-control" type="text" name="evaluationCode" id="evaluationCodeEntry"/>
  </div>
</div>
<!--Alert and Button-->
<div class="row">
  <div class="col-xs-12 col-md-8 col-md-offset-2 text-center">
    {~ if(@alert): ~}
    <button class="btn btn-danger btn-lg" id="submit-evaluation-code-error" type="submit">
      Start Evaluation!
    </button>
    <div class="alert alert-{{@alertType}} col-xs-12" role="alert">
      {{@alert}}
    </div>
    {~ else: ~}
    <button class="btn btn-primary btn-lg" id="submit-evaluation-code" type="submit">
      Start Evaluation!
    </button>
    {~ endif ~}
  </div>
</div>