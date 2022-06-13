<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<style>

.card .card-header {
    border-bottom: 1px solid #f1f1f1;
}
.card-header {
    padding: 20px 25px;
    margin-bottom: 0;
    background-color: rgba(0, 0, 0, 0);
}
    .img-radius {
    border-radius: 50%;
    margin-right: 20px;
}

.wid-80 {
    width: 80px;
}
.media{
    display:flex;
   
}
@media (min-width: 768px){
.col-md-6 {
    flex: 0 0 50%;
    max-width: 50%;
}
}
table {
    border-collapse: collapse;
    margin-top:20px;
}
.table thead th {
    border-bottom: 1px solid #f1f1f1;
    font-size: 13px;
    color: #060606;
    background: #f0f2f8;
    text-transform: uppercase;
   
}  
.table thead th {
    padding: 0.9rem 0.75rem;
}
.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col, .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm, .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md, .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg, .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl, .col-xl-auto {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
}
.btn-success {
    color: #fff;
    background-color: #17C666;
    border-color: #17C666;
}
.btn {
    display: inline-block;
    font-weight: 500;
    text-align: center;
    vertical-align: middle;
    user-select: none;
    border: 1.5px solid transparent;
    margin-top:15px;
    padding: 0.575rem 1.3rem;
    font-size: 0.875rem;
    line-height: 1.5;
    border-radius: 4px;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
input, button, select, optgroup, textarea {
    margin: 0;
    font-family: inherit;
}
</style>
<body>
    <div class="container">
        <div>
          <div class="card" id="printTable">
            <div class="card-header">
              <h5><img class="img-fluid" width="171" height="30" src="http://hrm.tectignis.in/public/uploads/logo/other/signin_logo_1553391482.png" alt=""></h5>
            </div>
            <div class="card-body pb-0">
              <div class="row invoive-info d-pdrint-inline-flex justify-content-md-center">
                <div class="col-md-6">
                  <div class="media user-about-block align-items-center mt-0">
                    <div class="position-relative d-inline-block"> <img class="img-radius img-fluid wid-80" src="http://hrm.tectignis.in/public/uploads/users/thumb/logo.jpg" alt="VEDANT NAIDU"> </div>
                    <div class="media-body ml-3">
                      <h6 class="mb-1">
                        VEDANT NAIDU                    </h6>
                      <p class="mb-0 text-muted">
                        MANAGER                    </p>
                      <p class="mb-0 text-muted">
                        vedantnaidu@tectignis.in                    </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <h5 class="m-b-10 text-primary text-uppercase">TASKS REPORT</h5>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12 col-md-12">
                  <div class="table-responsive">
                    <table class="table invoice-detail-table">
                      <thead>
                        <tr class="thead-default">
                          <th>TITLE</th>
                          <th>TEAM</th>
                          <th>	START DATE</th>
                          <th>	END DATE</th>
                          <th>	STATUS</th>
                          <th>	COMPLETED</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td width="150">CBA</td>
                          <td width="200">ABC</td>
                          <td><span class="text-warning">2022.06.04</span></td>
                          <td>	2022.06.07</td>
                          <td>Completed</td>
                          <td>	24%</td>
                        </tr>
                                                                    
                        <tr>
                          <td width="150">CBA</td>
                          <td width="200">ABC</td>
                          <td><span class="text-warning">2022.06.04</span></td>
                          <td>	2022.06.07</td>
                          <td>Not Completed</td>
                          <td>24%</td>
                        </tr>
                     </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row text-center d-print-none">
            <div class="col-sm-12 invoice-btn-group text-center">
              <button type="button" class="btn btn-print-invoice waves-effect waves-light btn-success m-b-10" onclick="window.print();return false;">
              Print            </button>
             </div>
          </div>
        </div>
      </div>
</body>
</html>