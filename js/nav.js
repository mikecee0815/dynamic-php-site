function classToggle() {
  const navs = document.querySelectorAll('.Navbar__Items')
  navs.forEach(nav => nav.classList.toggle('Navbar__ToggleShow'));
  console.log('yes')
}


document.querySelector('.Navbar__Link-toggle')
  .addEventListener('click', classToggle);