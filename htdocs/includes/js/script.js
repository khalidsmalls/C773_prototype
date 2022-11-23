

let links = document.querySelectorAll('.nav-link');

let active_link = document.querySelector('.active');
if (active_link) {
	active_link.classList.remove('active');
}
document.querySelectorAll('.nav-link').forEach((link) => {
	if (link.href === window.location.href) {
		link.classList.add('active');
	}
})












