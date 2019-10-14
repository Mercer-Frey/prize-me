;(function(){

	preloader(1500);

	const html = document.querySelector('html');
	const preload = document.querySelector("#page-preloader");
	const backTop = document.querySelector("#back-top");

	const mainButton = document.querySelector('#main-button');
	const blankSampleButton = document.querySelector('#blank-sample-button');

	const diplomaPicture = document.querySelector('#diploma-listener');
	const diplomaButton = document.querySelector('#diploma-download');
	const sliderZoom = document.querySelector('#slider-listener');
	const blankSamplePicture = document.querySelector('#blank-sample-listener');

	const sendBlank = document.querySelector('#send-blank');
	const fullBlank = document.querySelector('.blank-section__blank');
	const allInput = document.querySelectorAll('input');

	const adressInput = document.querySelector('#waiting-input-adress');
	const numberInput = document.querySelector('#waiting-input-number');

		window.addEventListener('scroll', showButtonTop);

		mainButton.addEventListener('click', scrollToAnchor);
		blankSampleButton.addEventListener('click', scrollToAnchor);

		diplomaPicture.addEventListener('click', debounce(pictureZoom, 100));
		sliderZoom.addEventListener('click', debounce(pictureZoom, 100));
		blankSamplePicture.addEventListener('click', debounce(pictureZoom, 100));

		diplomaButton.addEventListener('click', debounce(downloadDiploma, 1000));

		sendBlank.addEventListener('click', debounce(checkForm, 200));

		adressInput.addEventListener('input', checkInputLength.bind(adressInput, 1000));
		numberInput.addEventListener('input', checkInputLength.bind(numberInput, 17));

		backTop.addEventListener('mouseenter', function(){
			html.style.scrollBehavior = 'smooth';
		});
		backTop.addEventListener('mouseleave', function(){
			html.style.scrollBehavior = 'unset';
		});
		
	function preloader(ms){
		setTimeout(function(){
			if( !preload.classList.contains("done")){
				preload.classList.add("done");
				html.style.overflowY = "scroll";
			}
		},ms);
	};

	function pictureZoom(){
		const originalPicture = this.lastElementChild;

		if(originalPicture.classList.contains('zoom-off')){
			originalPicture.classList.remove('zoom-off');
			originalPicture.classList.add('zoom-on');
			html.style.overflowY = 'hidden'
		}else{
			originalPicture.classList.remove('zoom-on');
			originalPicture.classList.add('zoom-off');
			html.style.overflowY = 'scroll'
		}
	}

	function downloadDiploma(){
		location.href = "core/download.php";
		chips('скачивание', 'success', 3000);
	}

	function checkForm(){
		let count = 0;
		for (var i = 0; i < allInput.length; i++) {
			if(allInput[i].getAttribute('data-winner') && allInput[i].checked==false){
				chips('согласитесь на получение выиграша', 'error', 3000);
				break;
			}else if(allInput[i].getAttribute('data-adress') && (allInput[i].value == "" || allInput[i].value.length == 0)){
				chips('заполните адресс', 'warning', 3000);
				break;
			}else if(allInput[i].getAttribute('data-number') && (allInput[i].value == "" || allInput[i].value.length == 0)){
				chips('заполните телефон', 'error', 3000);
				break;
			}else if(allInput[i].getAttribute('data-number') && !checkNumber(allInput[i].value)){
				chips('номер введен не корректно', 'warning', 3000);
				break;
			}else if(allInput[i].getAttribute('data-order') && allInput[i].checked==false){
				chips('согласитесь с обязательным заказом', 'error', 3000);
				break;
			}
			count = i;
		}
		if(count == allInput.length - 1){
			chips('данные успешно отправлены', 'success', 3000);
			scrollToAnchor.call(sendBlank);
		}
	}

	function showButtonTop() {
		if(this.pageYOffset > 150){
			backTop.style.transform = 'translateY(0)';
			backTop.style.display = 'block';
		}else{
			backTop.style.transform = 'translateY(250px)';
			backTop.style.display = 'none';
		}
	}

	function scrollToAnchor(animationTime = 500, framesCount = 500){
		const anchor = this;
	    
	    let coordY = document.querySelector(anchor.getAttribute('data-href')).getBoundingClientRect().top + window.pageYOffset;
	    let scroller = setInterval(function() {
			let scrollTact = coordY / framesCount;
			if((scrollTact > window.pageYOffset - coordY) && 
				(window.innerHeight + window.pageYOffset < getDocumentHeight()-10)) {
				window.scrollBy(0, scrollTact);
			} else {
				window.scrollTo(0, coordY);
				clearInterval(scroller);
			}
	    }, animationTime / framesCount);
	};

})();
