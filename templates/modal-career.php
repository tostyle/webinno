<div id="careerModal" class="modal" role="dialog">
  <div class="modal-dialog modal-lg modal-background">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header modal-career">
        <strong>
          <span><?=$modalCareerData['head']?></span><span class="career-position"></span>
        </strong>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-body">
        <form id="registerForm" class="form-horizontal" role="form"  method="post" enctype="text/plain" accept-charset="utf-8">
            <div class="form-group">
              <label class="control-label col-sm-2" for="email"><?=$modalCareerData['name']?></label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="registerName" name="registerName" placeholder="Enter Name">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email"><?=$modalCareerData['address']?></label>
              <div class="col-sm-8">
                <textarea class="form-control" id="address" name="address" placeholder="Enter Address"></textarea>
              </div>
            </div>
             <div class="form-group">
              <label class="control-label col-sm-2" for="email"><?=$modalCareerData['tel']?></label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Phone">
              </div>
            </div>
             <div class="form-group">
              <label class="control-label col-sm-2" for="email"><?=$modalCareerData['mobile']?></label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Phone">
              </div>
            </div>
             <div class="form-group">
              <label class="control-label col-sm-2" for="email"><?=$modalCareerData['email']?></label>
              <div class="col-sm-4">
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
              </div>
            </div>
           
            <div class="form-group">
              <label class="control-label col-sm-2" for="position"><?=$modalCareerData['position']?></label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="position" name="position" placeholder="">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email"><?=$modalCareerData['education']?></label>
              <div class="col-sm-8">
                <textarea class="form-control" id="detail" name="detail"></textarea>
              </div>
            </div>
             <div class="form-group"> 
              <div class="col-sm-offset-2 col-sm-10">
                <button id="submitCareerForm" type="button" class="btn btn-success">Submit</button>
              </div>
              </div>
        </form>
      </div>
    </div>

  </div>
</div>