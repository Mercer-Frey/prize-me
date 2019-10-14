<section class="blank-section" id="blank">
	<div class="container">
        <div class="row">
			<div class="blank-section__blank-container col-md-10 offset-md-1">
				<div class="blank-section__blank" id="blank-section">
					<h4>Бланк на доставку виграшу</h4>
					
					<div class="blank-section__blank__main-check d-flex">
						<input type="checkbox" id="main-winner" checked data-winner="1">
						<label for="main-winner" class="noselect">
							Я, <?php echo $user['name']?> <br>
							як Головний переможець Акції погоджуюсь отримати свій виграш – 317 000,00 гривень – готівкою.
						</label>
					</div>
					<!-- /.blank-section__blank__main-check -->

					<div class="blank-section__blank__waiting">
						<p>Я очікую доставку грошового Призу:</p>

						<div class="blank-section__blank__waiting-radio-group">
							<div class="blank-section__blank__waiting-radio-item">
							  <input type="radio" name="waiting-radio" id="waiting-radio-1" value="1" checked>
							  <label class="noselect" for="waiting-radio-1">
							    Першого тижня виплат (01–05.05)
							  </label>
							</div>
							<div class="blank-section__blank__waiting-radio-item">
							  <input type="radio" name="waiting-radio" id="waiting-radio-2" value="2">
							  <label class="noselect" for="waiting-radio-2">
							    Другого тижня виплат (06–12.05)
							  </label>
							</div>
							<div class="blank-section__blank__waiting-radio-item">
							  <input type="radio" name="waiting-radio" id="waiting-radio-3" value="2">
							  <label class="noselect" for="waiting-radio-3">
							    Третього тижня виплат (13–19.05)
							  </label>
							</div>
							<div class="blank-section__blank__waiting-radio-item">
							  <input type="radio" name="waiting-radio" id="waiting-radio-4" value="2">
							  <label class="noselect" for="waiting-radio-4">
							    Четвертого тижня виплат (20–26.05)
							  </label>
							</div>
							<div class="blank-section__blank__waiting-radio-item">
							  <input type="radio" name="waiting-radio" id="waiting-radio-5" value="2">
							  <label class="noselect" for="waiting-radio-5">
							    П’ятого тижня виплат (27.05–31.05).
							  </label>
							</div>
						</div>
						<!-- /.blank-section__blank__waiting-radio-group -->

						<div class="blank-section__blank__waiting-input-group">

							<div class="blank-section__blank__waiting-input-item d-flex	flex-column justify-content-between" tabindex="0">
								
								<label class="noselect" for="waiting-input-day">
						    		В зручний для мене день тижня:
						  		</label>
								<select name="waiting-input-day" id="waiting-input-day">
									<option>Понедельник</option>
									<option>Вторник</option>
									<option>Среда</option>
									<option>Четверг</option>
									<option>Пятница</option>
									<option>Суббота</option>
									<option>Воскресенье</option>
								</select>
							</div>

							<div class="blank-section__blank__waiting-input-item d-flex flex-column">
								<label class="noselect" for="waiting-input-number">
						    		Номер телефону для зв’язку <span class="d-none d-sm-block">з Вами та уточнення адреси доставки:</span> 
						  		</label>
							  	<input type="phone" name="waiting-input-number" id="waiting-input-number" value="+38 011 222-33-34" data-number="1">
							</div>
							<div class="blank-section__blank__waiting-input-item d-flex	flex-column">
								<label class="noselect" for="waiting-input-adress">
						    		Адреса доставки: 
						  		</label>
							  	<input type="input" name="waiting-input-adress" id="waiting-input-adress" placeholder="Область/Район/Населений пункт/Вулиця/Номер будинку/Номер квартири" data-adress="1">
							</div>

						</div>
						<!-- /.blank-section__blank__waiting-input-group -->

						<div class="blank-section__blank__waiting-checkbox-group">
							<div class="blank-section__blank__waiting-checkbox-item d-flex">
								<input type="checkbox" id="waiting-checkbox-refuse">
								<label for="waiting-checkbox-refuse" class="noselect">
									Я відмовляюсь від БЕЗКОШТОВНОЇ доставки мені виграшу. Прошу вислати мені 317 000,00 гривень поштовим переказом.
								</label>
							</div>
							<div class="blank-section__blank__waiting-checkbox-item d-flex">
								<input type="checkbox" id="waiting-checkbox-order" data-order='1'>
								<label for="waiting-checkbox-order" class="noselect">
									Я заповнюю цей документ і роблю обов’язкове замовлення товарів.
								</label>
							</div>
						</div>
						<!-- /.blank-section__blank__waiting-checkbox-group -->
					</div>
					<!-- /.blank-section__blank__waiting -->

				</div>
				<!-- /.blank-section__blank -->
			</div>
			<!-- /.blank-section__blank-container -->
			<div class="blank-section__button col-12 d-flex justify-content-center">
				<p id="send-blank" data-href="#last">НАДІСЛАТИ</p>		 		
			</div>
			<!-- /.blank-section__button -->
			<div class="blank-section__service-verify col-md-10 offset-md-1 center">
				<p>Щоб Служба автоматичної верифікації не відбракувала Ваш БЛАНК НА ДОСТАВКУ ВИГРАШУ, зробіть обов’язкове замовлення товарів із <span>акційної пропозиції.</span></p>
			</div>
			<!-- /.blank-section__service-verify -->
			<div class="blank-section__rules-of-stock col-md-10 offset-md-1 d-md-block d-none">
				<p>*Із правилами Акції "Золотий Фонд" можна ознайомитися за посиланням: https://prizeme.com.ua/</p>
				<p>obshchiye-pravila-i-polozheniya-provedeniya-aktsii-i-opredeleniya-pobediteley-prayz-mi.pdf </p>
				<p>*Саме таке ім'я можуть мати співробітники компанії, якщо будуть обіймати відповідні посади на момент виплати Призу</p>
			</div>
			<!-- /.blank-section__rules-of-stock -->
		</div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.blank-section -->
