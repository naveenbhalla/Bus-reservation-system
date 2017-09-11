<ol>
	<li>
		<ol class="seats">
			<li class="seat">
	          <input type="checkbox" id="EXIT" value="EXIT" disabled/>
	          <label for="EXIT" style="background:green;height:19px;font-size:17px;margin-right:110px">EXIT</label>
	        </li>
	        <li class="seat">
	          <input type="checkbox" id="D" value="D" disabled/>
	          <label for="D" style="background:green;height:19px;font-size:17px;">D</label>
	        </li>
		</ol>
	</li>
	<?php for($i = 1; $i <=32; $i++) { ?>
		<li>
			<ol class="seats">
				<li class="seat">
		          <?php echo $checkArray[$i]; ?>
		          <label for="<?php echo $i ?>"><?php echo $i ?></label>
		        </li>
		        <?php $i++; ?>
		        <li class="seat" id="gap">
		          <?php echo $checkArray[$i]; ?>
		          <label for="<?php echo $i ?>"><?php echo $i ?></label>
		        </li>
		        <?php $i++; ?>
		        <li class="seat">
		          <?php echo $checkArray[$i]; ?>
		          <label for="<?php echo $i ?>"><?php echo $i ?></label>
		        </li>
		        <?php $i++; ?>
		        <li class="seat">
		          <?php echo $checkArray[$i]; ?>
		          <label for="<?php echo $i ?>"><?php echo $i ?></label>
		        </li>
		    </ol>
		</li>
	<?php }	?>
	

	
		<!-- <li>
			<ol class="seats">
				<li class="seat">
		          <input type="checkbox" id="<?php echo $i ?>" value="<?php echo $i ?>" name="seatNumber[]"/>
		          <label for="<?php echo $i ?>"><?php echo $i ?></label>
		        </li>
		        <?php $i++; ?>
				<li class="seat" id="gap">
		          <input type="checkbox" id="<?php echo $i ?>" value="<?php echo $i ?>" name="seatNumber[]"/>
		          <label for="<?php echo $i ?>"><?php echo $i ?></label>
		        </li>
		        <?php $i++; ?>
				<li class="seat">
		          <input type="checkbox" id="<?php echo $i ?>" value="<?php echo $i ?>" name="seatNumber[]"/>
		          <label for="<?php echo $i ?>"><?php echo $i ?></label>
		        </li>
		        <?php $i++; ?>
				<li class="seat">
		          <input type="checkbox" id="<?php echo $i ?>" value="<?php echo $i ?>" name="seatNumber[]"/>
		          <label for="<?php echo $i ?>"><?php echo $i ?></label>
		        </li>
			</ol>
		</li> -->

	
	
	<li>
		<ol class="seats">
			<li class="seat">
	          <?php echo $checkArray["33"]; ?>
	          <label for="33">33</label>
	        </li>
			<li class="seat">
	          <?php echo $checkArray["34"]; ?>
	          <label for="34">34</label>
	        </li>
			<li class="seat">
	          <?php echo $checkArray["35"]; ?>
	          <label for="35">35</label>
	        </li>
			<li class="seat">
	          <?php echo $checkArray["36"]; ?>
	          <label for="36">36</label>
	        </li>
	        <li class="seat">
	          <?php echo $checkArray["37"]; ?>
	          <label for="37">37</label>
	        </li>
		</ol>
	</li>
</ol>