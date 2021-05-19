
<? $title="Dashboard";?>
  @include('admin/app/header')
 <!-- Page Content -->
 <div id="page-wrapper" style="min-height: 549px;">
    <div class="container-fluid">
      <div class="row bg-title">
        <div class="col-lg-12">
          <h4 class="page-title">Welcome to My Admin</h4>
          <ol class="breadcrumb">
            <li><a href="https://wrappixel.com/demos/admin-templates/my-admin/myadmin-dark/index2.html#">Dashboard</a></li>
            <li class="active">Dashboard 2</li>
          </ol>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <!-- row -->
      <div class="row">
        <div class="col-md-3 col-xs-12 col-sm-6">
          <div class="white-box">
            <div class="text-left"><span class="badge badge-warning pull-right m-t-20">Daily</span>
              <h2 class="m-b-0 m-t-0 counter">150</h2>
              <p class="text-muted m-b-25">Increase Sales</p>
              <div class="chart-box">
                <div id="sparkline7"><canvas width="254" height="50" style="display: inline-block; width: 254px; height: 50px; vertical-align: top;"></canvas></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-6">
          <div class="white-box">
            <div class="text-left"><span class="badge badge-success pull-right m-t-20">Weekly</span>
              <h2 class="m-b-0 m-t-0 counter">200</h2>
              <p class="text-muted m-b-25">Increase Sales</p>
              <div class="chart-box">
                <div id="sparkline8"><canvas width="254" height="50" style="display: inline-block; width: 254px; height: 50px; vertical-align: top;"></canvas></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-6">
          <div class="white-box">
            <div class="text-left"><span class="badge badge-info pull-right m-t-20">Monthly</span>
              <h2 class="m-b-0 m-t-0 counter">220</h2>
              <p class="text-muted m-b-25">Increase Sales</p>
              <div class="chart-box">
                <div id="sparkline9"><canvas width="254" height="50" style="display: inline-block; width: 254px; height: 50px; vertical-align: top;"></canvas></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-6">
          <div class="white-box">
            <div class="text-left"><span class="badge badge-purple pull-right m-t-20">Yearly</span>
              <h2 class="m-b-0 m-t-0 counter">120</h2>
              <p class="text-muted m-b-25">Increase Sales</p>
              <div class="chart-box">
                <div id="sparkline10"><canvas width="254" height="50" style="display: inline-block; width: 254px; height: 50px; vertical-align: top;"></canvas></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <!-- row -->



      </div>
      <!-- /.row -->
      <!--row -->

      <!--/ row -->
    </div>
    <!-- /.container-fluid -->
  </div>

  @include('admin/app/footer')

