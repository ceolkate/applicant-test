
<h2>Directory list</h2>

<p>All currently active students in the directory.</p>

<a href="#">Printer-friendly version</a> [KA: no time to do this]</p>

<form action="?controller=newCustomer&action=insertCustomer" method="post">
<div class="formgroup">
<div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
    All students
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
    Currently active students
  </label>
  <p>[KA: this isn't actually working because I haven't added a query limited to only active students, but I would if it weren't 2 am]</p>
</div>
</div>
<div class="table-responsive">
<table id="customerTable" class="table table-striped table-bordered" cellspacing="0" width="100%" >
 <thead>
      <tr><th>Name</th>
      <th>Local address</th>
      <th>City</th>
      <th>State</th>
      <th>Email</th>
      <th>Home country</th>
	  <th>Status</th>
      <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($customers as $customer) { ?>
	<tr>
        <td><?php echo $customer->title ?>  <?php echo $customer->name ?></td>
        <td><?php echo $customer->address ?></td>
        <td><?php echo $customer->city ?></td>
        <td>
        <?php 
        $state = State::getStateByID($customer ->stateID);
              echo
               $state->name ?>
                 
               </td>
        <td><?php echo $customer->email ?></td>
        
        <td><?php 
        $country = Country::getCountryByID($customer ->countryID);
              echo
               $country->name ?></td>
			   <td><?php 
        $status = Status::getStatusByID($customer ->statusID);
              echo
               $status->name ?></td>
        <td>
        <form action="?controller=newCustomer&action=insertCustomer" method="post">
        <input type="hidden" name="CustomerID" value='<?php echo $customer->id ?>'>
        <input type="submit" name="delete" onclick="return confirm('Are you sure?')" value="delete"  class="btn btn-danger" >
        <input type="submit" name="edit" value="edit"  class="btn" >
        </form>
        </td>
    </tr>
    <?php }?>
    </tbody>

</table>
</div>

	
<script type="text/javascript">
  $(function(){
    $("#customerTable").dataTable();
  })
  </script>
</body>
</html>

