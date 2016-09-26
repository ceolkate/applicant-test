<script type="text/javascript">

    $(document).ready(function() {
        document.title = 'Add student | International Center, University of Missouri';
    });

</script>

<div class="container box body-content" >
<form action="?controller=newCustomer&action=insertCustomer" method="post">

<h2>Add a student</h2>
<div class="form-horizontal">
<div class="form-group">
                <label for="custTtl" class="control-label col-sm-2 col-md-3">
                       Student title
                    </label>
                
                <div class="col-sm-10 col-md-6">
                    <small>Ms. / Mrs. / Mr.</small><br/><input id="custTtl" type="text" class="form-control" name="CustomerTitle">
                </div>
</div>

<div class="form-group">
                <label for="custName" class="control-label col-sm-2 col-md-3">
                       Student name</label>
                <div class="col-sm-10 col-md-6">
                    <input type="text" id="custName" required class="form-control" name="CustomerName">
                </div>
            </div>
			
<div class="form-group">
                <label for="custAddr" class="control-label col-sm-2 col-md-3">
                       Local address
                    </label>
                <div class="col-sm-10 col-md-6">
                    <input type="text" id="custAddr" class="form-control"  name="Address">
                </div>
</div>
            <div class="form-group">
                <label for="custCity" class="control-label col-sm-2 col-md-3">
                       City
                    </label>
                <div class="col-sm-10 col-md-6">
                    <input type="text" id="custCity" class="form-control"  name="City">
                </div>
            </div>
            <div class="form-group">
                <label for="custState" class="control-label col-sm-2 col-md-3">
                       State
                    </label>
                <div class="col-sm-10 col-md-6">
                    <select required  id="custState" name="state" class="form-control">
<option value="">--Select--</option>
	<?php foreach($states as $state) { ?>
        <option 

        value='<?php echo $state->id ?>' ><?php echo $state->name ?></option>
    <?php }?>
</select>
                </div>
            </div>
            <div class="form-group">
                <label for="custZIP" class="control-label col-sm-2 col-md-3">
                      ZIP code
                    </label>
                <div class="col-sm-10 col-md-6">
                    <input type="text" id="custZIP" class="form-control" name="PostalCode" >
                </div>
            </div>
            <div class="form-group">
                <label for="custCtry" class="control-label col-sm-2 col-md-3">
                       Country
                    </label>
                <div class="col-sm-10 col-md-6">
                    <select required id="custCtry" name="country" class="form-control" >
<option value="">--Select--</option>
    <?php foreach($countries as $country) { ?>
        <option value='<?php echo $country->id ?>' ><?php echo $country->name ?>
        </option>
    <?php }?>
</select>
                </div>
            </div>
 <div class="form-group">
                <label for="custEmail" class="control-label col-sm-2 col-md-3">
                       Email
                    </label>
                <div class="col-sm-10 col-md-6">
                    <input type="text" id="custEmail" required class="form-control"  name="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="custStatus" class="control-label col-sm-2 col-md-3">
                       Student status
                    </label>
                <div class="col-sm-10 col-md-6">
                    <select required id="custStatus" name="status" class="form-control" >
<option value="">--Select--</option>
    <?php foreach($statuses as $status) { ?>
        <option value='<?php echo $status->id ?>' ><?php echo $status->name ?>
        </option>
    <?php }?>
</select>
                </div>
            </div>
            <div class="form-group">
                <label for="custEntry" class="control-label col-sm-2 col-md-3">
                       Entered by
                    </label>
                <div class="col-sm-10 col-md-6">
                    <input type="text" id="custEntry" class="form-control" required name="CreatedBy">
                </div>
  </div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-9 col-md-offset-3 col-md-6">
<input type="submit" name="insert" class="btn btn-primary" value="Add" text="Insert" /> 
<a href="http://52.90.88.180/index.php?controller=newCustomer&action=customerList">Cancel</a></div></div>
</div>
</form>
 </div>
