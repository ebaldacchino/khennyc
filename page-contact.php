<?php get_header(); ?>
	<section class="row">
				<article>
					<div>
						<h2 class="no-margin-top">pricing</h2>
						<h3>Gold</h3>
						<p>$500 unlimited images taken</p>
						<p>6 edited images</p>
						<p>3 different looks</p>
						<p>1 hour shooting time including online viewing</p>
						<p>Unedited images available within 24 hours once chosen</p>
						<p>6 edited images available within another 24 hours</p>

						<h3>Platinum</h3>
						<p>$700 unlimited images taken</p>
						<p>10 edited images</p>
						<p>5 different looks</p>
						<p>1.5 hours shooting time including online viewing</p>
						<p>Unedited images available within 24 hours once chosen</p>
						<p>10 edited images available within another 24 hours</p>
					</div>
				</article> 
				<form
					
					method="POST"
					class="form"
					novalidate
				>
					<label for="name">name</label>
						<input type="text" name="name" id="name"  />
					<label for="email">email</label>
						<input type="email" name="email" id="email" />
					<label for="phone">phone</label>
						<input type="phone" name="phone" id="phone"  />
					<label for="date">preferred shoot date</label>
						<input type="date" name="date" id='date' />
					<label for="package">package chosen</label>
						<select name="package">
							<option value="Gold Package">gold</option>
							<option value="Platinum Package">platinum</option>
						</select>
					<label for="enquiry">enquiry</label>
						<textarea name="enquiry" name="enquiry" id='enquiry' rows="10"></textarea>
					<button class="btn" type="submit">send</button>
				</form> 
			</section>
			<section class="form-submitted-bg" onsubmit='toggleSubmittedForm()'>
				<article class="form form-submitted-container">
					<h2>success</h2>
					<i class="fas fa-check-circle"></i>
					<p>Thank you for reaching out. We'll be in touch soon!</p>
					<button class="submit-btn btn" onclick='toggleSubmittedForm()'>
					ok
					</button>
				</article>
			</section>
<?php get_footer(); ?>