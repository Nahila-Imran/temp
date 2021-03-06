<?php 
	include('header.php'); 
	include('sidebar.php');
	include("config.php");
?>
		
		<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>
			
			<!-- Page Head -->
			<h2>Welcome !!!</h2>
			<p id="page-intro">What would you like to do?</p>
		
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Products</h3>
					
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Manage</a></li> <!-- href must be unique and match the id of target div -->
						<li><a href="#tab2">Add</a></li>
					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
						<div class="notification attention png_bg">
							<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div>
								This is a Content Box. You can put whatever you want in it. By the way, you can close this notification with the top-right cross.
							</div>
						</div>
						
						<table>
							
							<thead>
								<tr>
								   <th>P-Name</th>
								   <th>Image File</th>
								   <th>Price</th>
								   <th>Desciption</th>
								   <th>Colours</th>
								   <th>Tag Name</th>
								   <th>Action</th>
								</tr>
								
							</thead>
						 
							<tfoot>
								<tr>
									<td colspan="6">
										<div class="pagination">
											<a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
											<a href="#" class="number" title="1">1</a>
											<a href="#" class="number" title="2">2</a>
											<a href="#" class="number current" title="3">3</a>
											<a href="#" class="number" title="4">4</a>
											<a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
										</div> <!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
							<tbody>
							<?php 
								
								$sql = "SELECT * FROM products";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc()) {
							?>
										<tr>
											<td><?php echo $row['name'];?></td>
											<td><?php echo $row['image'];?></td>
											<td><?php echo $row['price'];?></td>
											<td><?php echo $row['description'];?></td>
											<td><?php echo $row['color'];?></td>
											<td><?php echo $row['tagname'];?></td>
											<td>
												<!-- Icons -->
												<a href="updates.php?id=<?php echo $row['id'];?>" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
												<a href="delete.php?id=<?php echo $row['id'];?>" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
											</td>
										</tr>
						<?php       }  
               				   }  	?>
								
							</tbody>
						</table>
						
					</div> <!-- End #tab1 -->
					
					<div class="tab-content" id="tab2">
					
						<form action="products.php" method="POST">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								<p>
									<label>Name</label>
										<input class="text-input medium-input datepicker" type="text" id="medium-input" name="pname" />  <!-- Classes for input-notification: success, error, information, attention -->
								</p>
								
								<p>
									<label>Price</label>
									<input class="text-input small-input" type="text" id="small-input" name="pprice" /> 
								</p>
								
								<p>
									<label>Image</label>
									<input class="text-input small-input" type="file" id="small-input" id="myFile"  name="filename"/>
								<!--	<input type="file" id="myFile" name="filename"> -->
								</p>
								<p>
									<label>Colour</label>
									<input class="text-input small-input" type="text" id="small-input" name="pcolor" /> 
								</p>

								<p>
									<label>Category</label>              
									<select name="category" class="small-input">
										<option value="Men">Men</option>
										<option value="Women">Women</option>
										<option value="Kids">Kids</option>
										<option value="Electronics">Electronics</option>
										<option value="Sports">Sports</option>
									</select>
								</p>
								
								<p>
									<label>Tags</label>
									<input type="checkbox" name="tags_name" value="Fashion"/> Fashion
									<input type="checkbox" name="tags_name" value="Ecommerce"/> Ecommerce
									<input type="checkbox" name="tags_name" value="Shop"/> Shop
									<input type="checkbox" name="tags_name" value="Hand Bag" /> Hand Bag
									<input type="checkbox" name="tags_name" value="Laptop" /> Laptop
									<input type="checkbox" name="tags_name" value="Headphone"/> Headphone
								</p>
								<p>
									<label>Description</label>
									<textarea class="text-input textarea wysiwyg" id="textarea" name="describe" cols="79" rows="15"></textarea>
								</p>
								
								<p>
									<input type="submit" name="submit" class="button" value="Submit" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			<div class="clear"></div>
			
			
			<!-- Start Notifications -->
			
	<!--		<div class="notification attention png_bg">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Attention notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero. 
				</div>
			</div>
			
			<div class="notification information png_bg">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Information notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
				</div>
			</div>
			
			<div class="notification success png_bg">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Success notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
				</div>
			</div>
			
			<div class="notification error png_bg">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Error notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
				</div>
			</div>    -->
			
			<!-- End Notifications -->
			<?php include('footer.php'); ?>
			
			