<?php include 'include/header.php';?>
<?php include 'include/demo.php';?>
<body>
	<div class="container">
	<div class="mx-auto col-sm-12 main-section" id="myTab" role="tablist">
		<?php include 'include/child-tab.php';?>
		<div class="tab-content" id="myTabContent">	
			<div role="tabpane">
				<div class="card">
					<div class="card-header">
						<h4>Add Product</h4>
					</div>
					<div class="card-body">
						<?php

							$query = "SELECT * FROM tbl_setting WHERE id = 1";

							$ms = mysqli_query($conn, $query);
							$result = mysqli_fetch_assoc($ms);
							
							// $query1 = "SELECT * FROM tbl_news";
							// $ms1 = mysqli_query($conn, $query1);
							// $result1 = mysqli_fetch_assoc($ms1);
							
							$query2 = "SELECT * FROM tbl_category";

							$ms2 = mysqli_query($conn, $query2);
							$result2 = mysqli_fetch_assoc($ms2);

						?>
						<form class="form" role="form" autocomplete="off" method="post" action="action/edit_setting.php">
							<ul class="list-group">
								<li class="list-group-item active" style="text-align: center; margin-bottom: 20px;">News / Category in Home</li>
								<div class="form-group row">
									<label class="col-lg-3 col-form-label form-control-label">Slider News Home</label>
									<div class="col-lg-9">
										<input class="form-control" type="number" name="slider" min="1" max="7" value="<?php echo $result['slider'];?>">
									</div>
								</div>
								<li class="list-group-item active" style="text-align: center; margin-bottom: 20px;">ADS SETUP</li>
								<div class="form-group row">
									<label class="col-lg-3 col-form-label form-control-label">Ads (Choose One to Enable Ads)</label>
									<div class="col-lg-9">
										<select name="ads" class="form-control">
											<?php if ($result['ads'] == 1) { ?>
												<option selected="<?php echo $result['ads'];?>" value="1">
													Admob
												</option>
												<option value="0">StartApp</option>
												<option value="2">Unity</option>
											<?php } else if($result['ads'] == 2) {?>
												<option selected="<?php echo $result['environment'];?>" value="2">Unity</option>
												<option value="1">Admob</option>
												<option value="0">Startapp</option>
											<?php } else { ?>
												<option selected="<?php echo $result['environment'];?>" value="0">Startapp</option>
												<option value="1">Admob</option>
												<option value="2">Unity</option>
											<?php } ?>
										</select>
									</div>
								</div>
								<hr>
								<div class="form-group row">
									<label class="col-lg-3 col-form-label form-control-label">StartApp Live Mode (Because StartApp don't have Ad Test)</label>
									<div class="col-lg-9">
										<div class="checkbox anim-checkbox">
											<input type="checkbox" id="ch3" name="startapplivemode[]" value="1" <?php if($result['startapplivemode']=="1"){ ?>checked<?php }?>/>
											<label for="ch3">Live (give your accountId, android and ios id for test this ad)</label>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-3 col-form-label form-control-label">StartApp Account Id</label>
									<div class="col-lg-9">
										<input class="form-control" type="text" name="startappaccountid" value="<?php echo $result['startappaccountid'];?>">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-3 col-form-label form-control-label">Android App Id</label>
									<div class="col-lg-9">
										<input class="form-control" type="text" name="androidappid" value="<?php echo $result['androidappid'];?>">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-3 col-form-label form-control-label">Ios App Id</label>
									<div class="col-lg-9">
										<input class="form-control" type="text" name="iosappid" value="<?php echo $result['iosappid'];?>">
									</div>
								</div>
								<hr>
								<div class="form-group row">
									<label class="col-lg-3 col-form-label form-control-label">Admob Banner</label>
									<div class="col-lg-9">
										<input class="form-control" type="text" name="banner" value="<?php echo $result['banner'];?>">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-3 col-form-label form-control-label">Admob Interstisial</label>
									<div class="col-lg-9">
										<input class="form-control" type="text" name="interstisial" value="<?php echo $result['interstisial'];?>">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-3 col-form-label form-control-label">Admob Reward</label>
									<div class="col-lg-9">
										<input class="form-control" type="text" name="admobreward" value="<?php echo $result['admobreward'];?>">
									</div>
								</div>
								<hr>
								<div class="form-group row">
									<label class="col-lg-3 col-form-label form-control-label">Unity Live Mode (Because Unity don't have Ad Test)</label>
									<div class="col-lg-9">
										<div class="checkbox anim-checkbox">
											<input type="checkbox" id="ch3" name="unitylivemode[]" value="1" <?php if($result['unitylivemode']=="1"){ ?>checked<?php }?>/>
											<label for="ch3">Live</label>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-3 col-form-label form-control-label">Unity Game Id (for test Unity Ads, please give your GameId here)</label>
									<div class="col-lg-9">
										<input class="form-control" type="text" name="unitygameid" value="<?php echo $result['unitygameid'];?>">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-3 col-form-label form-control-label">Unity Banner</label>
									<div class="col-lg-9">
										<input class="form-control" type="text" name="unitybanner" value="<?php echo $result['unitybanner'];?>">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-3 col-form-label form-control-label">Unity Interstisial</label>
									<div class="col-lg-9">
										<input class="form-control" type="text" name="unityinterstisial" value="<?php echo $result['unityinterstisial'];?>">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-3 col-form-label form-control-label">Unity Reward</label>
									<div class="col-lg-9">
										<input class="form-control" type="text" name="unityreward" value="<?php echo $result['unityreward'];?>">
									</div>
								</div>
							</ul>
							<div class="form-group row">
									<div class="col-lg-12 text-center">
										<input type="submit" name="submit" class="btn btn-primary" value="Save">
									</div>
								</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'include/footer.php';?>
</body>
</html>