document.addEventListener('DOMContentLoaded', function () {

	const intervalTime = 5 * 60 * 1000; //ИНТЕРВАЛ ПЕРЕЗАГРУЗКИ

	//ОБНОВЛЯЕМ ТАЙМЕР КАЖДЫЙ РАЗ КОГДА СРАБАТЫВАЕТ EVENT
	const resetTimer = () => {
		clearTimeout(window.inactivityTimeout);

		window.inactivityTimeout = setTimeout(() => {
			location.reload();
		}, intervalTime);
	};

	//ОБРАБОТЧИКИ АКТИВНОСТИ
	document.addEventListener('mousemove', resetTimer);
	document.addEventListener('keypress', resetTimer);
	document.addEventListener('touchstart', resetTimer);
	document.addEventListener('touchmove', resetTimer);
	document.addEventListener('touchend', resetTimer);

	//ЗАПУСК ТАЙМЕРА ПРИ ЗАГРУЗКЕ СТРАНИЦЫ
	resetTimer();

	function updateTime() {
		const currentTimeElement = document.getElementById('current-time');
		if (currentTimeElement) {
			const now = new Date();
			const options = {
				hour: 'numeric',
				minute: 'numeric',
				second: 'numeric',
				hour12: false,
			};
			const formattedTime = now.toLocaleString('ru-RU', options);
			currentTimeElement.textContent = formattedTime;
		}
	}

	updateTime(); //ИНИЦИАЛИЗИРУЕМ ВРЕМЯ ПРИ ЗАГРУЗКЕ СТРАНИЦЫ

	setInterval(updateTime, 1000); //ОБНОВЛЯЕМ ВРЕМЯ КАЖДУЮ СЕКУНДУ

	const airlineDepartureChoices = new Choices( "#departure .selections__airline", {
		shouldSort: true,
		searchEnabled: false,
		position: 'bottom',
	} );

	const directionDepartureChoices = new Choices( "#departure .selections__direction", {
		shouldSort: false,
		searchEnabled: false,
		position: 'bottom',
	} );

	const dateDepartureChoices = new Choices( "#departure .selections__date", {
		shouldSort: false,
		searchEnabled: false,
		position: 'bottom',
	} );

	// ЛОГИКА ФИЛЬТРАЦИИ ДЛЯ ПРИЛЕТОВ
	const selectDepartureAirline = document.querySelector('#departure .selections__airline');
	const selectDepartureDirection = document.querySelector('#departure .selections__direction');
	const selectDepartureDate = document.querySelector('#departure .selections__date');

	function applyDepartureFilters() {
		const selectedAirlineValue = selectDepartureAirline.value;
		const selectedDirectionValue = selectDepartureDirection.value;
		const selectedDateValue = selectDepartureDate.value;

		const items = document.querySelectorAll('#departure .table__content .content__items');

		const filteredItems = [];

		items.forEach((item, index) => {
			const itemAirline = item.getAttribute('data-airline');
			const itemDirection = item.getAttribute('data-direction');
			const itemTime = item.getAttribute('data-time');

			if (itemTime === selectedDateValue && (itemAirline === selectedAirlineValue || selectedAirlineValue === 'default') && (itemDirection === selectedDirectionValue || selectedDirectionValue === 'default')) {
				item.classList.remove('hidden');
				filteredItems.push(item);
			} else {
				item.classList.add('hidden');
			}
		});

		filteredItems.forEach((item, index) => {
			if (index % 2 === 0) {
				item.classList.remove('even');
				item.classList.add('odd');
			} else {
				item.classList.remove('odd');
				item.classList.add('even');
			}
		});
	}

	applyDepartureFilters();

	selectDepartureAirline.addEventListener('change', applyDepartureFilters);
	selectDepartureDirection.addEventListener('change', applyDepartureFilters);
	selectDepartureDate.addEventListener('change', applyDepartureFilters);

	const airlineArrivalChoices = new Choices( "#arrival .selections__airline", {
		shouldSort: true,
		searchEnabled: false,
		position: 'bottom',
	} );

	const directionArrivalChoices = new Choices( "#arrival .selections__direction", {
		shouldSort: false,
		searchEnabled: false,
		position: 'bottom',
	} );

	const dateArrivalChoices = new Choices( "#arrival .selections__date", {
		shouldSort: false,
		searchEnabled: false,
		position: 'bottom',
	} );

	// ЛОГИКА ФИЛЬТРАЦИИ ДЛЯ ПРИЛЕТОВ
	const selectArrivalAirline = document.querySelector('#arrival .selections__airline');
	const selectArrivalDirection = document.querySelector('#arrival .selections__direction');
	const selectArrivalDate = document.querySelector('#arrival .selections__date');

	function applyArrivalFilters() {
		const selectedAirlineValue = selectArrivalAirline.value;
		const selectedDirectionValue = selectArrivalDirection.value;
		const selectedDateValue = selectArrivalDate.value;

		const items = document.querySelectorAll('#arrival .table__content .content__items');

		const filteredItems = [];

		items.forEach((item, index) => {
			const itemAirline = item.getAttribute('data-airline');
			const itemDirection = item.getAttribute('data-direction');
			const itemTime = item.getAttribute('data-time');

			if (itemTime === selectedDateValue && (itemAirline === selectedAirlineValue || selectedAirlineValue === 'default') && (itemDirection === selectedDirectionValue || selectedDirectionValue === 'default')) {
				item.classList.remove('hidden');
				filteredItems.push(item);
			} else {
				item.classList.add('hidden');
			}
		});

		filteredItems.forEach((item, index) => {
			if (index % 2 === 0) {
				item.classList.remove('even');
				item.classList.add('odd');
			} else {
				item.classList.remove('odd');
				item.classList.add('even');
			}
		});
	}

	applyArrivalFilters();

	selectArrivalAirline.addEventListener('change', applyArrivalFilters);
	selectArrivalDirection.addEventListener('change', applyArrivalFilters);
	selectArrivalDate.addEventListener('change', applyArrivalFilters);

	//ЛОГИКА МЕНЮ
	const itemElements = document.querySelectorAll('.menu__items .items__item'),
		contentElements = document.querySelectorAll('.page__contents .contents__content');

	itemElements.forEach(item => {
		item.addEventListener('click', (e) => {
			e.preventDefault();

			airlineDepartureChoices.setChoiceByValue('default');
			directionDepartureChoices.setChoiceByValue('default');
			dateDepartureChoices.setChoiceByValue(new Date().getDate().toString().padStart(2, '0') + '.' + (new Date().getMonth() + 1).toString().padStart(2, '0') + '.' + new Date().getFullYear().toString());

			applyDepartureFilters();

			airlineArrivalChoices.setChoiceByValue('default');
			directionArrivalChoices.setChoiceByValue('default');
			dateArrivalChoices.setChoiceByValue(new Date().getDate().toString().padStart(2, '0') + '.' + (new Date().getMonth() + 1).toString().padStart(2, '0') + '.' + new Date().getFullYear().toString());

			applyArrivalFilters();

			//УДАЛЯЕМ ВСЕ КЛАССЫ ACTIVE С ПУНКТОВ МЕНЮ И ЭКРАНОВ
			itemElements.forEach(i => {
				i.classList.remove('active');
			});
			contentElements.forEach(content => {
				content.classList.remove('active');
			});

			//ПОЛУЧАЕМ ID ТЕКУЩЕГО ПУНКТА МЕНЮ И СТАВИМ НА НЕГО КЛАСС ACTIVE
			const itemId = item.id;
			item.classList.add('active');

			//ПОЛУЧАЕМ ID ЭКРАНА С ТАКИМ ЖЕ ID КАК У ПУНКТА МЕНЮ И СТАВИМ НА НЕГО КЛАСС ACTIVE
			const contentElement = document.querySelector('.page__contents .contents__content#' + itemId);
			contentElement.classList.add('active');

			const itemTextElements = document.querySelectorAll('#faq .items__item .item__text');

			itemTextElements.forEach(function(item) {
				if (item.clientHeight < 115) {
					const itemMoreElement = item.nextElementSibling;
					itemMoreElement.classList.add('hidden');
				} else {
					const itemMoreElement = item.nextElementSibling;
					itemMoreElement.classList.remove('hidden');
					item.style.maxHeight = '115px';
				}
			});
		});
	});

	//ЛОГИКА ПЕРЕКЛЮЧЕНИЯ ВЫЛЕТА И ПРИЛЕТА
	const itemSelections = document.querySelectorAll('.title__selections .selections__selection'),
		contentTable = document.querySelectorAll('.content__tables .tables__table');

	itemSelections.forEach(item => {
		item.addEventListener('click', (e) => {
			e.preventDefault();

			airlineDepartureChoices.setChoiceByValue('default');
			directionDepartureChoices.setChoiceByValue('default');
			dateDepartureChoices.setChoiceByValue(new Date().getDate().toString().padStart(2, '0') + '.' + (new Date().getMonth() + 1).toString().padStart(2, '0') + '.' + new Date().getFullYear().toString());

			applyDepartureFilters();

			airlineArrivalChoices.setChoiceByValue('default');
			directionArrivalChoices.setChoiceByValue('default');
			dateArrivalChoices.setChoiceByValue(new Date().getDate().toString().padStart(2, '0') + '.' + (new Date().getMonth() + 1).toString().padStart(2, '0') + '.' + new Date().getFullYear().toString());

			applyArrivalFilters();

			//УДАЛЯЕМ ВСЕ КЛАССЫ ACTIVE С СЕЛЕКТОРОВ И ТАБЛИЦ
			itemSelections.forEach(i => {
				i.classList.remove('active');
			});
			contentTable.forEach(content => {
				content.classList.remove('active');
			});

			//ПОЛУЧАЕМ ID ТЕКУЩЕГО ПУНКТА СЕЛЕКТОРА И СТАВИМ НА НЕГО КЛАСС ACTIVE
			const itemId = item.id;
			item.classList.add('active');

			//ПОЛУЧАЕМ ID ТАБЛИЦЫ С ТАКИМ ЖЕ ID КАК У ПУНКТА СЕЛЕКТОРА И СТАВИМ НА НЕГО КЛАСС ACTIVE
			const contentElement = document.querySelector('.content__tables .tables__table#' + itemId);
			contentElement.classList.add('active');
		});
	});

	//ЛОГИКА ПЕРЕКЛЮЧЕНИЯ СХЕМ
	const floorNames = document.querySelectorAll('.floor__name');

	floorNames.forEach(floorName => {
		floorName.addEventListener('click', function(e) {
			e.preventDefault();

			floorNames.forEach(item => {
				item.classList.remove('active')
			});

			const terminalData = this.getAttribute('data-terminal');
			const floorData = this.getAttribute('data-floor');
			this.classList.add('active');

			const terminalNames = document.querySelectorAll('.terminal__name'),
				schemeTitles = document.querySelectorAll('.scheme__title'),
				schemeFloors = document.querySelectorAll('.scheme__floor');

			terminalNames.forEach(terminalName => {
				terminalName.classList.remove('active');

				const terminalNameData = terminalName.getAttribute('data-terminal');

				if (terminalData === terminalNameData) {
					terminalName.classList.add('active');
				}
			});

			schemeTitles.forEach(schemeTitle => {
				schemeTitle.classList.remove('active');

				const schemeTitleData = schemeTitle.getAttribute('data-terminal');

				if (terminalData === schemeTitleData) {
					schemeTitle.classList.add('active');
				}
			});

			schemeFloors.forEach(schemeFloor => {
				schemeFloor.classList.remove('active');

				const schemeFloorsTerminalData = schemeFloor.getAttribute('data-terminal');
				const schemeFloorsFloorData = schemeFloor.getAttribute('data-floor');

				if (terminalData === schemeFloorsTerminalData && floorData === schemeFloorsFloorData) {
					schemeFloor.classList.add('active');
				}
			});
		});
	});

	//ЛОГИКА УСЛОВНЫХ ОБОЗНАЧЕНИЙ
	const descriptions = document.querySelector('.content__title .title__description');

	descriptions.addEventListener('click', function(e) {
		e.preventDefault();

		const floorNames = document.querySelector('.floor__name.active');

		const terminalData = floorNames.getAttribute('data-terminal');
		const floorData = floorNames.getAttribute('data-floor');

		const description = document.querySelectorAll('.schemes__descriptions .descriptions__description');

		description.forEach(item => {
			const itemTerminalData = item.getAttribute('data-terminal');
			const itemFloorData = item.getAttribute('data-floor');

			if(terminalData === itemTerminalData && floorData === itemFloorData) {
				item.classList.toggle('active');

				setTimeout(() => {
					item.classList.toggle('visible');
				} , 10 );
			}
		});
	});

	//ЛОГИКА ЗАКРЫТИЯ УСЛОВНЫХ ОБОЗНАЧЕНИЙ
	const closedDescriptions = document.querySelectorAll('.descriptions__description .description__closed');

	closedDescriptions.forEach(item => {
		item.addEventListener('click', function(e) {
			e.preventDefault();

			const descriptions = document.querySelectorAll('.schemes__descriptions .descriptions__description');

			descriptions.forEach(item => {
				item.classList.remove('active');
				item.classList.remove('visible');
			});
		});
	});

	const floorElements = document.querySelectorAll('.scheme__floor');

	const zoomIn = document.querySelector('.scheme__touch .touch__plus');
	const zoomOut = document.querySelector('.scheme__touch .touch__minus');

	floorElements.forEach((floorElement) => {
		const img = floorElement.querySelector('img');

		const panzoom = Panzoom(img, {
			contain: 'outside',
			startScale: 1,
			maxScale: 3,
		});

		zoomIn.addEventListener('click', function(e) {
			e.preventDefault();
			panzoom.zoomIn()
		});

		zoomOut.addEventListener('click', function(e) {
			e.preventDefault();
			panzoom.zoomOut()
		});

		floorNames.forEach(floorName => {
			floorName.addEventListener('click', function(e) {
				e.preventDefault();
				panzoom.reset()
			});
		});
	});

	const itemMoreElements = document.querySelectorAll('#faq .items__item .item__more');

	itemMoreElements.forEach(function(item) {
		item.addEventListener('click', function(e) {
			e.preventDefault();

			const itemGeneralElement = item.closest('.items__item');

			const itemTextElement = itemGeneralElement.querySelector('.item__text');

			const spanMoreElement = item.children[0];

			if (itemTextElement.style.maxHeight === '10000px') {

				itemTextElement.style.maxHeight = '115px';
				setTimeout(() => {
					spanMoreElement.textContent = 'Развернуть';
					item.classList.remove('active');
				} , 400 );
			} else {
				itemTextElement.style.maxHeight = '10000px';
				item.classList.add('active');
				spanMoreElement.textContent = 'Свернуть';
			}

		});
	});

	window.addEventListener('load', function () {
		const departurePopup = document.querySelectorAll('#departure .content__items');

		departurePopup.forEach(function(item) {
			item.addEventListener('click', function(e) {
				e.preventDefault();

				const airline = item.getAttribute('data-airline'),
					flight = item.getAttribute('data-flight'),
					ship = item.getAttribute('data-ship'),
					firstdirection = item.getAttribute('data-firstdirection'),
					direction = item.getAttribute('data-direction');

				document.getElementById('departureTitle').textContent = flight;
				document.getElementById('departureAirline').textContent = airline;
				document.getElementById('departureFlightNumber').textContent = flight;
				document.getElementById('departureShip').textContent = ship;
				document.getElementById('departureFirstDirection').textContent = firstdirection;
				document.getElementById('departureDirection').textContent = direction;

				$.magnificPopup.open({
					items: {
						src: '#departurePopup'
					},
					type: 'inline'
				});
			});
		});

		const arrivalPopup = document.querySelectorAll('#arrival .content__items');

		arrivalPopup.forEach(function(item) {
			item.addEventListener('click', function(e) {
				e.preventDefault();

				const airline = item.getAttribute('data-airline'),
					flight = item.getAttribute('data-flight'),
					ship = item.getAttribute('data-ship'),
					direction = item.getAttribute('data-direction'),
					lastdirection = item.getAttribute('data-lastdirection');

				document.getElementById('arrivalTitle').textContent = flight;
				document.getElementById('arrivalAirline').textContent = airline;
				document.getElementById('arrivalFlightNumber').textContent = flight;
				document.getElementById('arrivalShip').textContent = ship;
				document.getElementById('arrivalDirection').textContent = direction;
				document.getElementById('arrivalLastDirection').textContent = lastdirection;

				$.magnificPopup.open({
					items: {
						src: '#arrivalPopup'
					},
					type: 'inline'
				});
			});
		});
	});
});