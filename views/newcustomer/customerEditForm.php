
<script type="text/javascript">

    $(document).ready(function() {
        document.title = 'Edit customer | International Center, University of Missouri';
    });

</script>
<div class="container box body-content" >
<form action="?controller=newCustomer&action=updateCustomer" method="post">

<h2>Edit student information</h2>
<div class="form-horizontal">
<div class="form-group">
                <label for="custTtl" class="control-label col-sm-2 col-md-3">
                       Student title</label>
                  
               
                <div class="col-sm-10 col-md-6">
                    <small>Ms. / Mrs. / Mr.</small><br/><input type="text" id="custTtl" value="<?php echo $customer->title ?>" class="form-control" name="CustomerTitle">
                </div>
</div>

<div class="form-group">
                <label for="custName" class="control-label col-sm-2 col-md-3">
					Customer name</label>
                <div class="col-sm-10 col-md-6">
                    <input type="text" value ='<?php echo $customer->name ?>' required class="form-control"id="custName" name="CustomerName">
                </div>
            </div>
<div class="form-group">
                <label for="custAddr" class="control-label col-sm-2 col-md-3">
                       Local address
                    </label>
                <div class="col-sm-10 col-md-6">
                    <input type="text" id="custAddr" class="form-control" value ='<?php echo $customer->address ?>' name="Address">
                </div>
</div>
            <div class="form-group">
                <label for="custCity" class="control-label col-sm-2 col-md-3">
                       City
                    </label>
                
                <div class="col-sm-10 col-md-6">
                    <input type="text" id="custCity" class="form-control" value ='<?php echo $customer->city ?>' name="City">
                </div>
            </div>
            <div class="form-group">
               <label for="custState" class="control-label col-sm-2 col-md-3">
                       State
                    </label>
                
                <div class="col-sm-10 col-md-6">
                    <select id="custState" required value ='<?php echo $customer->stateID ?>' name=" state" class="form-control">
<option value="">--Select--</option>
	<?php foreach($states as $state) { ?>
        <option 

        value='<?php echo $state->id ?>' <?php if($customer->stateID == $state->id)  echo ' selected="selected"' ?> ><?php echo $state->name ?></option>
    <?php }?>
</select>
                </div>
            </div>
            <div class="form-group">
                <label for="custZIP" class="control-label col-sm-2 col-md-3">
                      ZIP code
                    </label>
                
                <div class="col-sm-9 col-md-6">
                    <input type="text" id="custZIP" class="form-control" name="PostalCode" value ='<?php echo $customer->postalCode ?>'>
                </div>
            </div>
            <div class="form-group">
                <label for="custCtry" class="control-label col-sm-2 col-md-3">
                       Student's home country
                    </label>
              
                <div class="col-sm-10 col-md-6">
                    <select required id="custCtry" name="country" class="form-control" value ='<?php echo $customer->countryID ?>'>
<option value="">--Select--</option>
    <?php foreach($countries as $country) { ?>
        <option value='<?php echo $country->id ?>' <?php if($customer->countryID == $country->id)  echo ' selected="selected"' ?>><?php echo $country->name ?>
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
                    <input type="text" id="custEmail" required class="form-control" value ='<?php echo $customer->email ?>' name="Email">
                </div>
            </div>
			            <div class="form-group">
                <label for="custStatus" class="control-label col-sm-2 col-md-3">
                       Student status
                    </label>
                <div class="col-sm-10 col-md-6">
                    <select required id="custStatus" name="StatusID" class="form-control" value ='<?php echo $customer->statusID ?>'>
<option value="">--Select--</option>
    <?php foreach($statuses as $status) { ?>
        <option value='<?php echo $status->id ?>' <?php if($customer->statusID == $status->id)  echo ' selected="selected"'?>>
		<?php echo $status->name ?>
        </option>
    <?php }?>
</select></div></div>
		
   
			
			
			
            <div class="form-group">
                <label for="custMod" class="control-label col-sm-2 col-md-3">
                       Modified by
                    </label>
                
                <div class="col-sm-10 col-md-6">
                    <input type="text" id="custMod" class="form-control" required name="ModifiedBy">
                </div>
  </div>

<input type="hidden" id="custID" name="CustomerID" value='<?php echo $customer->id ?>'>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10 col-md-offset-3 col-md-6">
<input type="submit" name="update" value="Update" class="btn btn-primary" text="Update"/> 
<a href="/index.php?controller=newCustomer&action=customerList">Cancel</a> 
</div></div>
</form>
 </div>
