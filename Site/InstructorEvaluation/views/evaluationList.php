<div class="panel panel-default" id="view-evaluation-list">
  <div class="panel-body">
    <!--Title-->
    <h2>View Evaluations</h2>
    {~ if(count(@evaluation) > 0): ~}
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
        <tr>
          <th>Course</th>
          <th>Item #</th>
          <th>Quarter</th>
          <th>Year</th>
          <th>Taken</th>
          <th>Code</th>
          <th>Expires</th>
          <!--<th>Edit</th>-->
        </tr>
        </thead>
        <tbody>
        <!--Show evaluations-->
        <repeat group="{{@evaluation}}" value="{{ @evaluationInfo }}">
          <tr>
            <td>{{ @evaluationInfo.name }}</td>
            <td>{{ @evaluationInfo.section }}</td>
            <td>{{ @evaluationInfo.quarter }}</td>
            <td>{{ @evaluationInfo.year }}</td>
            <td>
              <!--Taken-->
              <a href="{{@siteRoot}}/report/{{@evaluationInfo.evaluationID}}" target="_blank">
                {{@evaluationInfo.taken}}
                <i class="fa fa-search" aria-hidden="true"></i>
              </a>
            </td>
            <td>
              <!--Code-->
              <a href="{{@siteRoot}}/evaluation/{{@evaluationInfo.code}}" target="_blank">
                {{@evaluationInfo.code}}
              </a>
            </td>
            <td>
              <!--Expiration - Lock/Unlock-->
              {{@evaluationInfo.expirationDate}}
              {~ if(@evaluationInfo.expirationDate > @date): ~}
              <i class="fa fa-unlock" aria-hidden="true"></i>
              {~ else: ~}
              <i class="fa fa-lock" aria-hidden="true"></i>
              {~ endif ~}
            </td>
            <td>
              <!--Edit-->
              <!--<i class="fa fa-pencil" aria-hidden="true"></i>-->
            </td>
          </tr>
        </repeat>
        </tbody>
      </table>
    </div>
    {~ else: ~}
    <!--No evaluations-->
    <div class="alert alert-info">
      <p>There are no evaluations for you to review. Please create one here,
        <a href="{{@siteRoot.'/makeEvaluation'}}">Create Evaluation</a></p>
    </div>
    {~ endif ~}
  </div>
</div>
