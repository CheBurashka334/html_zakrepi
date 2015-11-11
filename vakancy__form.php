<?php include('header.php');?>
<div class="workarea">
	<div class="page-title">Откликнуться на вакансию</div>
	<div class="row">
		<div class="col l9">
		<div class="base-card register-form">
				<div class="card-content big-g-padding">
					<div class="table-field top-tf">
						<div class="label">Вакансия *</div>
						<div class="field">
							<input type="text" required />
							<span class="error-text error-required">Укажите свое имя</span>
						</div>
					</div>
					<div class="table-field top-tf">
						<div class="label">Имя *</div>
						<div class="field">
							<input type="text" required />
							<span class="error-text error-required">Укажите свое имя</span>
						</div>
					</div>
					<div class="table-field">
						<label class="label">Номер телефона *</label>
						<div class="field">
							<input type="tel" required />
						</div>
					</div>
					<div class="table-field top-tf">
						<div class="label">Электронная почта</div>
						<div class="field">
							<input type="email" />
							<span class="error-text error-required error-pattern">Укажите электронную почту в формате mymail@mail.ru</span>
						</div>
					</div>
					<div class="table-field top-tf">
						<div class="label">Сообщение</div>
						<div class="field"><textarea></textarea></div>
					</div>
					<div class="table-field top-tf">
						<div class="label">Ваше резюме *</div>
						<div class="field inputfile-box">
							<div class="inputfile">
								<input type="file" accept="image/png,image/jpeg,application/pdf,application/excel,application/msword,application/powerpoint,application/vnd.oasis.opendocument.text,application/vnd.sun.xml.writer,application/vnd.oasis.opendocument.presentation,application/vnd.sun.xml.calc,text/plane" />
								<div class="inputfile-value">
									<span class="item-text"></span>
									<button class="btn btn-icon btn-delete"><svg class="icon"><use xlink:href="#cross"/></svg></button>
								</div>
								<button class="btn-inputfile btn standart-color">Загрузить файл</button>
							</div>
							<div class="note-text color-text text-light small-text">
								Размер файла: не более 10 Мб. <br/>
								Тип файла: *ppt, *pptx, *doc, *docx, *xls, *xlsx, *txt, *pdf, *png, *jpg.
							</div>
						</div>
					</div>
					<p class="color-text text-light">Нажимая кнопку «Отправить», я даю свое согласие на обработку персональных данных в соответствии с <a href="#" class="text-primary">Политикой конфеденциальности</a></p>
				</div>
			</div>
			<a href="#" class="btn primary big fullwidth">Отправить</a>
		</div>
	</div>
	</br></br></br></br></br>
</div> <!-- /.workarea -->
<?php include('footer.php');?>