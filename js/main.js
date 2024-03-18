	//Header navigation scroll blur
	const bgHeader = () =>{
		const header = document.getElementById('header')

		this.scrollY >=50 ? header.classList.add('header-scroll')
		: header.classList.remove('header-scroll')
	}
	window.addEventListener('scroll', bgHeader)