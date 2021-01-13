//Activate dark mod on click:

function toggleDark() {
	let content = document.getElementById('content');
	let cardAdmin = document.getElementById('cardAdmin');
	
	let element = document.body;
	element.classList.toggle("dark-mode");
	content.classList.toggle("dark-mode");
	cardAdmin.classList.toggle("dark-mode");
}