


              <div class="title_left">
                <h3>Members <small>All Members info</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Member id ...........">
                    <span class="input-group-btn">

                      <!-- 
                      <button class="btn btn-default" type="button">Go!</button> -->
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">



              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Members Table <small> </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30"> 
                      <!-- Add Member Button -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddNewMember">
                        Add Member
                      </button>
                      <!-- Add Member Button -->
                      
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <!-- id="datatable-buttons" -->
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Image</th>
                          <th>Name</th>
                          <th>Father Name</th>
                          <th>Age</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                  <?php foreach ($member_info as $m_info) { ?>
                        <tr>
                          <td><?php echo $m_info->mbr_iid; ?></td>
                          <td><img class="img-circle" width="50px" height="50px" src="<?php echo $m_info->mbr_img; ?>"></td>
                          <td><?php echo $m_info->mbr_name; ?></td>
                          <td><?php echo $m_info->mbr_father; ?></td>
                          <td><?php echo $m_info->mbr_age; ?></td>
                          <td>
                            <button type="button" class="btn btn-round btn-info" data-toggle="modal" data-target="#editmodel"><i class="fa fa-edit"> </i>
                              Edit
                            </button>
                            <a class="btn btn-round btn-danger" title="Delete" href="member/delete_mbr?id=<?php echo $m_info->mbr_iid; ?>" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i> </a>
                          </td>
                        </tr>
                  <?php } ?>
                      </tbody>
                    </table>
                  </div>





<!-- Add Member Modal -->
<div class="modal fade" id="AddNewMember" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Member</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <div class="modal-body">        

        <form action="member/add_new_m" enctype="multipart/form-data" method="post">
          <div class="form-group">
            <label for="formGroupExampleInput">Member Name</label>
            <input type="text" required="required" class="form-control " name="mbr_name" id="" placeholder="Member Name">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Father Name</label>
            <input type="text" class="form-control " required="required" name="mbr_father" id="" placeholder="Father Name">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Mother Name</label>
            <input type="text" class="form-control " name="mbr_mother" required="required" id="" placeholder="Mother Name">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Husband or Wife Name</label>
            <input type="text" required="required" class="form-control " name="mbr_h_w_name" id="" placeholder="">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Age</label>
            <input type="text" class="form-control " required="required" name="mbr_age" id="" placeholder="Age">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Date of Birth</label>
            <input type="text" class="form-control dtpick " required="required" name="mbr_dob"  placeholder="Date of Birth">
          </div>

          <div style=" width: 100%;"> <p style="font-size: 14px;">Present Address</p>
            <div style="width: 80%; float: right;">
              <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Select Division</label>
              <select required="required" class="form-control form-control-lg prs_div_idid" name="prs_div_iid">
                <option value="">Select.............</option>
              <?php foreach ($div_query as $div_q) { ?>
                <option value="<?php echo $div_q->div_id; ?>"><?php echo $div_q->div_bn_name; ?></option>
              <?php } ?>
              </select>
              <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Select District</label>
              <select class="form-control form-control-lg prs_dist_idid" id="" name="prs_dist_iid" required="required">
                <option value="">Select.............</option>
              </select>
              <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Select Upazilla</label>
              <select class="form-control form-control-lg prs_up_idid" id="" name="prs_up_iid">
                <option value="">Select.............</option>
              </select>
              <div class="form-group">
                <label for="formGroupExampleInput2">Area</label>
                <input type="text" class="form-control " id="" placeholder="Present Address Area" name="prs_areas" required="required">
              </div>
            </div>
          </div>
          <br><br><br><br><br><br><br>
          <br><br><br><br><br><br><br>
          <br><br>


          <div style=" width: 100%;"><p style="font-size: 14px;"> Parmanent Address</p>
            <div style="width: 80%; float: right;">
              <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Select Division</label>
              <select class="form-control form-control-lg prm_div_idd" name="prm_div_idd" required="required">
                <option value="">Select.............</option>
              <?php foreach ($div_query as $div_q) { ?>
                <option value="<?php echo $div_q->div_id; ?>"><?php echo $div_q->div_bn_name; ?></option>
              <?php } ?>
              </select>
              <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Select District</label>
              <select class="form-control form-control-lg prm_dist_idd" id="" name="prm_dist_idd" required="required">
                <option value="">Select.............</option>
              </select>
              <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Select Upazilla</label>
              <select class="form-control form-control-lg prm_up_idd" id="" name="prm_up_idd" required="required">
                <option value="">Select.............</option>
              </select>
              <div class="form-group">
                <label for="formGroupExampleInput2">Area</label>
                <input type="text" class="form-control " id="" name="prm_areas" placeholder="Parmanent Address Area" required="required">
              </div>
            </div>
          </div>


          <div class="form-group">
            <label for="formGroupExampleInput2">Member Admission Date</label>
            <input type="text" class="form-control dtpick" id="" placeholder="" required="required" name="add_date">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Occupation</label>
            <input type="text" class="form-control " name="occupation" id="" placeholder="Occupation" required="required">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">National ID No</label>
            <input type="text" class="form-control " name="nid" id="" placeholder="National ID Or Birth Registration No" required="required">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Mobile Number</label>
            <input type="text" required="required" class="form-control " name="phone" id="" placeholder="Type Mobile Number">
          </div>
          <div class="form-group">
              <label for="exampleInputEmail1">Upload Image</label>
              <input style="float: left;" required="required" type="file" name="img_url" id="file" onchange="loadfile(event)">
              <img id="preimage" width="100px" height="100px" name="img_url" src="">
              
          </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>

      </form>     
    </div>
  </div>
</div>
<!-- Add Member modal -->













<script type="text/javascript">
  // Upload Image Preview
  function loadfile(){
      var output=document.getElementById('preimage');
      output.src=URL.createObjectURL(event.target.files[0]);
  };

  // Get District for Present Addres 
  $('.prs_div_idid').change(function() {
    var div_id = $('.prs_div_idid').val();
        $.ajax({
        url: 'member/get_district_byjson?divid=' + div_id,
        data: '',
        dataType: 'json',
        success: function(dist_info) {
        var html;
        var n;
        for (n=0; n<dist_info.length; n++) {
           html += '<option value="'+dist_info[n].dis_id+'">'+dist_info[n].dis_bn_name+'</option>';
        }
        $('.prs_dist_idid').html('<option value="">Select..........................</option>'+html);
        }
      })
  })
  // Get Upazilla for Present Addres 
  $('.prs_dist_idid').change(function() {
    var dist_id = $('.prs_dist_idid').val();
        $.ajax({
        url: 'member/get_upazilla_byjson?dist_id=' + dist_id,
        data: '',
        dataType: 'json',
        success: function(up_info) {
        var html;
        var n;
        for (n=0; n<up_info.length; n++) {
           html += '<option value="'+up_info[n].up_id+'">'+up_info[n].up_bn_name+'</option>';
        }
        $('.prs_up_idid').html('<option value="">Select..........................</option>'+html);
        }
      })
  })







  // Get District for Permanent Addres
  $('.prm_div_idd').change(function() {
    var prmdiv_id = $('.prm_div_idd').val();
        $.ajax({
        url: 'member/get_district_byjson?divid=' + prmdiv_id,
        data: '',
        dataType: 'json',
        success: function(dist_info) {
        var html;
        var n;
        for (n=0; n<dist_info.length; n++) {
           html += '<option value="'+dist_info[n].dis_id+'">'+dist_info[n].dis_bn_name+'</option>';
        }
        $('.prm_dist_idd').html('<option value="">Select..........................</option>'+html);
        }
      })
  })
  // Get Upazilla for Permanent Addres
  $('.prm_dist_idd').change(function() {
    var prmdist_id = $('.prm_dist_idd').val();
        $.ajax({
        url: 'member/get_upazilla_byjson?dist_id=' + prmdist_id,
        data: '',
        dataType: 'json',
        success: function(up_info) {
        var html;
        var n;
        for (n=0; n<up_info.length; n++) {
           html += '<option value="'+up_info[n].up_id+'">'+up_info[n].up_bn_name+'</option>';
        }
        $('.prm_up_idd').html('<option value="">Select..........................</option>'+html);
        }
      })
  })
</script>











