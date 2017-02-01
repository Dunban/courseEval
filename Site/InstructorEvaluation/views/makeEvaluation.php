<h2>Create New Evaluation</h2>

{~ if(@message.alert): ~}
<div class="alert alert-{{@message.alertType}}" role="alert">
	{~ if(!is_array(@message.alert)): ~}
		{{@message.alert}}
	{~ else: ~}
	<ul>
	<repeat group="{{@message.alert}}" value="{{@error}}">
		<li>{{@error}}</li>
	</repeat>
	</ul>
	{~ endif ~}
</div>
{~ endif ~}

<div class="row">
  <div class="col-xs-12 col-sm-4">
    <label for="make-eval-course-name">Course Name</label>
    <input class="form-control" id="make-eval-course-name" name="className" placeholder="Course Name" type="text" value="{{@info.className}}">
    <label for="make-eval-section-number">Item Number</label>
    <input class="form-control" id="make-eval-section-number" name="section" placeholder="Item Number" type="text" value="{{@info.section}}">
    <label for="make-eval-year">Year</label>
    <select class="form-control" id="make-eval-year" name="year">
      <option value="" disabled selected>Year</option>
      <option value="20162017"{~ if(@info.year == "20162017") : ~}selected {~endif~}>2016-2017</option>
      <option value="20172018"{~ if(@info.year == "20172018") : ~}selected {~endif~}>2017-2018</option>
      <option value="20182019"{~ if(@info.year == "20182019"): ~}selected {~endif~}>2018-2019</option>
      <option value="20192020"{~ if(@info.year == "20192020"): ~}selected {~endif~}>2019-2020</option>
      <option value="20202021"{~ if(@info.year == "20202021"): ~}selected {~endif~}>2020-2021</option>
    </select>
    <label for="make-eval-quarter">Quarter</label>
    <select class="form-control" id="make-eval-quarter" name="quarter" value="{{@info.quarter}}">
      <option value="" disabled selected>Quarter</option>
      <option value="1"{~if(@info.quarter == 1):~}selected {~endif~}>Fall</option>
      <option value="2"{~if(@info.quarter == 2):~}selected {~endif~}>Winter</option>
      <option value="3"{~if(@info.quarter == 3):~}selected {~endif~}>Spring</option>
      <option value="4"{~if(@info.quarter == 4):~}selected {~endif~}>Summer</option>
    </select>
    <label for="make-eval-expiration">Expiration Date <strong>(Optional)</strong></label>
    <input class="form-control" id="make-eval-expiration" name="endDate" type="date" value="{{@info.expirationDate}}">
  </div>
  <div class="col-xs-12 col-sm-8">
    <label for="make-eval-notes">Notes <strong>(Optional)</strong></label>
    <textarea class="form-control" id="make-eval-notes" placeholder="Notes about this evaluation" rows="10" name="notes">{{@info.notes}}</textarea>
    <div class="text-left">
      <button class="btn btn-primary btn-lg" id="submit-get-entry-code" type="submit">Get Entry Code</button>
    </div>
  </div>
</div>


<!-- Generate Code Section -->
<div class="row" id="generate-code">
  <div class="col-xs-12">
    <repeat group="{{ @div }}" key="{{ @ikey }}" value="{{ @idiv }}">
      {~ if(@previousEntry[0]): ~}
      <hr>
      <h4><strong>{{'Entry Code: ' . @previousEntry[1]}}</strong></h4>
        <!--<p>Evaluation ID: {{@previousEntry[0]}}</p>-->
        <p>Class Name: {{@previousEntry[2]}}</p>
        <p>Quarter: {{@previousEntry[3]}}</p>
        <p>Year: {{@previousEntry[4]}}</p>
        <p>Section Number: {{@previousEntry[5]}}</p>
        <p>Notes: {{@previousEntry[6]}}</p>
        <p>Expiration Date: {{@previousEntry[7]}}</p>
        <!--<p>Number of Test Available: {{@previousEntry[8]}}</p>-->
        <p>
          <a href="{{@siteAddress.'/Evaluation/'. @previousEntry[1]}}">
            {{@siteAddress.'/Evaluation/'. @previousEntry[1]}}
          </a>
        </p>
        {~ endif ~}
  </div>
</div>
<!-- END of Generated Code Section -->
