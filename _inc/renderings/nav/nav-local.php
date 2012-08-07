<?php include ('../../../config.php'); ?>
			<ul id="nav-local">
				<li><a href="#">Page_01</a></li>
				<li><a href="#">Page_02</a></li>
				<li<?php if($level > 2){ ?> class="active"<?php } ?>><a href="#">Page_03</a><?php if ( $level > 2 ) { // Level 3 ?>

					<ul>
						<li<?php if($level > 3){ ?> class="active"<?php } ?>><a href="#">Subpage 01</a><?php if ( $level > 3 ) { // Level 4 ?>

							<ul>
								<li><a href="#">Level_04_Page_01</a></li>
								<li><a href="#">Level_04_Page_02</a></li>
								<li><a href="#">Level_04_Page_03</a></li>
								<li<?php if($level > 4){ ?> class="active"<?php } ?>><a href="#">Level_04_Page_04</a><?php if ( $level > 4 ) { // Level 5 ?>

									<ul>
										<li><a href="#">Level_05_Page_01</a></li>
										<li<?php if($level > 5){ ?> class="active"<?php } ?>><a href="#">Level_05_Page_02</a><?php if ( $level > 5 ) { // Level 6 ?>

											<ul>
												<li<?php if($level > 6){ ?> class="active"<?php } ?>><a href="#">Level_Six_Page_01</a><?php if ( $level > 6 ) { // Level 7 ?>

													<ul>
														<li<?php if($level > 7){ ?> class="active"<?php } ?>><a href="#">Level_Seven_Page_01</a></li>
													</ul>
												<?php } // End level 7 ?></li>
												<li><a href="#">Level_Six_Page_02</a></li>
											</ul>
										<?php } // End level 6 ?></li>
										<li><a href="#">Level_05_Page_03</a></li>
										<li><a href="#">Level_05_Page_04</a></li>
									</ul>
								<?php } // End level 5 ?></li>
							</ul>
						<?php } // End level 4 ?></li>
						<li><a href="#">Subpage_02</a></li>
						<li><a href="#">Subpage_03</a></li>
						<li><a href="#">Subpage_04</a></li>
						<li><a href="#">Subpage_05</a></li>
					</ul>
				<?php } // End level 3 ?></li>
				<li><a href="#">Page_04</a></li>
				<li><a href="#">Page_05</a></li>
				<li><a href="#">Page_06</a></li>
				<li><a href="#">Page_07</a></li>
				<li><a href="#">Page_08</a></li>
				<li><a href="#">Page_09</a></li>
				<li><a href="#">Page_10</a></li>
			</ul><!-- /nav-local -->