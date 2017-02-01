<?php
/**
 * Project: IT Instructor Evaluations
 * File: evaluation.php
 * Authors: James Staab and Craig Koch
 * Date: 03/31/2016
 * This page is meant for taking the evaluations, if there is not one in progress it will prompt
 * for a code
 */
?>

<include href="views/evaluationHeader.htm" with="info={{@headerInfo}}" xmlns="http://www.w3.org/1999/html"/>

{~ if(@alert): ~}
<div class="row">
  <div class="col-xs-12">
    <div class="alert alert-{{@alertType}}" role="alert">
      {{@alert}}
    </div>
  </div>
</div>
{~ endif ~}

<div class="row">
  <div class="col-xs-12">
    <repeat group="{{@evaluation}}" key="{{@questionNumber}}" value="{{@question}}">
      <div class="form-group row">
        {~ if(@question.error): ~}
        <div class="alert alert-danger" role="alert">{{@question.error}}</div>
        {~ endif ~}

        <div class="col-xs-12">
          <span><b>{{ (@questionNumber + 1)."." }}</b> {{ @question.questionText}}</span>
        </div>

        {~ if (@question.isFillIn) : ~}
        <include href="views/inputTemplate.htm" with="question={{@question}}"/>
        {~ else: ~}
        <include href="views/optionTemplate.php" with="question={{@question}}"/>
        {~ endif ~}
      </div>
    </repeat>
    <div class="text-center">
      <button class="btn btn-primary btn-lg" name="submitEval" type="submit">
      Submit Evaluation</button>
    </div>
  </div>
</div>
