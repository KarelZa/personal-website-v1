const bar = document.querySelector('.bar');
const navbar = document.querySelector('.nav');
const hamburger = document.querySelector('.hamburger-icon');
const links = document.querySelectorAll('.nav ul li');
const body = document.querySelector('body');
const faders = document.querySelectorAll('.fade-in');

// Actions done after mobile hamburger icon is clicked -- on Mobile
hamburger.addEventListener('click', () => {
	body.classList.toggle('stopScroll');
	navbar.classList.toggle('appear');
});

// Script to close side navbar after the press of navbar item --on Mobile
links.forEach((link) => {
	link.addEventListener('click', () => {
		if (window.innerWidth < 768) {
			document.getElementById('hamburger-checkbox').checked = false;
			body.classList.toggle('stopScroll');
			navbar.classList.toggle('appear');
		}
	});
});

document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
	anchor.addEventListener('click', function (e) {
		e.preventDefault();
		document.querySelector(this.getAttribute('href')).scrollIntoView({
			behavior: 'smooth',
		});
	});
});

// script to add transparent background to navbar when user scroll 100pts from top
window.onscroll = function () {
	let top = window.scrollY;
	if (top >= 50) {
		navbar.classList.add('active');
	} else {
		navbar.classList.remove('active');
	}
};

// Ripple effect on buttons
function createRipple(event) {
	const button = event.currentTarget;

	const circle = document.createElement('span'); //Creates a circle for ripple
	const diameter = Math.max(button.clientWidth, button.clientHeight); //set max diameter based on the btn
	const radius = diameter / 2;
	circle.style.width = circle.style.height = `${diameter}px`;
	circle.style.left = `${event.offsetX - radius}px`;
	circle.style.top = `${event.offsetY - radius}px`;
	circle.classList.add('ripple'); //add CSS class on the circle
	const ripple = button.getElementsByClassName('ripple')[0];
	if (ripple) {
		ripple.remove();
	}
	button.appendChild(circle);
}

const buttons = document.getElementsByTagName('button');
for (const button of buttons) {
	button.addEventListener('click', createRipple);
}

// Typing animation in header through Typed.js plugin
const typed = new Typed('#typed', {
	strings: ['Karel Zamazal', 'Junior SW Developer'],
	typeSpeed: 80,
	startDelay: 0,
	backSpeed: 80,
	backDelay: 1000,
	loop: true,
	cursorChar: '|',
	contentType: 'html',
});

// Small to Medium Sized Tablets - Flip animation of projects
const cards = document.querySelectorAll('.project-container');
for (let card of cards) {
	card.addEventListener('click', toggleToFlip);
}
function toggleToFlip() {
	this.classList.toggle('is-flipped');
}

// Animated Tag cloud
const tagCloud = function () {
	try {
		TagCanvas.textColour = '#111';
		TagCanvas.outlineColour = '#FE0853';
		TagCanvas.textFont = 'Impact, sans-serif';
		TagCanvas.textHeight = 30;
		TagCanvas.maxSpeed = 0.06;
		TagCanvas.freezeActive = true;
		TagCanvas.shuffleTags = true;
		TagCanvas.zoom = 0.8;
		TagCanvas.noSelect = true;
		TagCanvas.pinchZoom = true;
		TagCanvas.wheelZoom = false;
		TagCanvas.freezeDecel = true;
		TagCanvas.fadeIn = 3000;
		TagCanvas.initial = [0.3, -0.1];
		TagCanvas.depth = 1.1;
		TagCanvas.Start('myCanvas');
	} catch (e) {
		// something went wrong, hide the canvas container
		document.querySelector('.myCanvasContainer').style.display = 'none';
	}
};

// breakpoint where swiper will be destroyed
// and switches to a dual-column layout
const breakpoint = window.matchMedia('(min-width:36rem)');
// keep track of swiper instances to destroy later
let mySwiper;
//////////////////////////////////////////////////////////////////
const breakpointChecker = function () {
	// if larger viewport and multi-row layout needed
	if (breakpoint.matches === true) {
		// clean up old instances and inline styles when available
		if (mySwiper !== undefined) mySwiper.destroy(true, true);
		// or/and do nothing
		return;
		// else if a small viewport and single column layout needed
	} else if (breakpoint.matches === false) {
		// fire small viewport version of swiper
		return enableSwiper();
	}
};
//////////////////////////////////////////////////////////////////
const enableSwiper = function () {
	mySwiper = new Swiper('.mySwiper', {
		effect: 'coverflow',
		observer: true,
		observeParents: true,
		grabCursor: true,
		autoHeight: true,
		centeredSlides: true,
		slidesPerView: 'auto',
		coverflowEffect: {
			rotate: 3,
			stretch: 0,
			depth: 70,
			modifier: 3,
			slideShadows: false,
		},
		loop: true,
	});
};

// keep an eye on viewport size changes
breakpoint.addEventListener('change', breakpointChecker);
// Load - Reload script when webpage is refreshed
window.addEventListener('load', function () {
	breakpointChecker();
	tagCloud();
});

// Options for IntersectionObservers
const appearOptions = {
	threshold: 1,
	rootMargin: '0px 0px 0px 0px',
};

// IntersectionObserver for fadeIn effect
const appearOnScroll = new IntersectionObserver(function (entries, appearOnScroll) {
	entries.forEach((entry) => {
		//if it's not intersecting with the page return nothing
		if (!entry.isIntersecting) {
			return;
			// else if it's intersecting add class .showUp to fade-in
		} else {
			entry.target.classList.add('showUp');
			appearOnScroll.unobserve(entry.target); // once it is over stop observing that target
		}
	});
}, appearOptions);

faders.forEach((fader) => {
	//for each fader run the observer --> a.k.a. add a class to it
	appearOnScroll.observe(fader);
});

$(document).ready(function () {
	$('form').submit(function (event) {
		// prevent default page refresh behaviour
		event.preventDefault();
		let nameInput = $('#name').val();
		let emailInput = $('#email').val();
		let subjectInput = $('#subject').val();
		let messageInput = $('#message').val();
		let submit = $('#submit').val();
		$('.form-message').load('sendMail.php', {
			// left side is POST name and right is a value from inputs
			name: nameInput,
			email: emailInput,
			subject: subjectInput,
			message: messageInput,
			submit: submit,
		});
		$('.form-message').fadeIn('fast').delay(2000).fadeOut();
	});
});
