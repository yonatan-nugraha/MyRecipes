
    <div class="container" style="min-height: 650px">

      <div class="row login">
        <div class="col-xs-12" align="center">
          <h1 id="login-title"><span class="glyphicon glyphicon-cutlery"></span> MyRecipes</h1>
          <div style="width: 250px">
            <form method="post" accept-charset="utf-8" action="signin" />
              <div class="form-group">
                  <input type="email" class="form-control" name="inputEmail" placeholder="Email" data-toggle="popover" required autofocus>
              </div>
              <div class="form-group">
                  <input type="password" class="form-control" name="inputPassword" placeholder="Password" required data-toggle="popover">
              </div>
              <button type="submit" id="signin" class="btn btn-primary btn-md btn-block" name="signin" data-toggle="popover" data-loading-text="Loading...">Sign in</button>
              <div class="form-group" style="margin-top: 10px">
                  <small>or</small> <a data-toggle="modal" href="#signupmodal">Sign up</a>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="modal fade" id="signupmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h1 class="modal-title">Sign up</h1>
            </div>
            <div class="modal-body">
              <form method="post" accept-charset="utf-8" action="signup" />
                <div class="form-group">
                  <input type="text" class="form-control" name="name" placeholder="Full Name" required autofocus>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="Email address" required >
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password" required >
                </div>
                <button type="submit" id="signup" class="btn btn-lg btn-primary btn-block" data-toggle="popover" data-loading-text="Loading...">Sign up</button>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
