var tl = gsap.timeline()

tl.from("h2",{
	 y:-20,
	 opacity:0,
	 duration:1,
	 delay:0.5
})

tl.from("h4",{
	y:-20,
	opacity:0,
	duration:1,
	stagger:0.3
})

tl.from("h1",{
	y:20,
	opacity:0,
	duration:0.5,
	scale:0.2
})

gsap.to("#im1",{
	rotation:"360", ease:Linear.easeNone, repeat:-2
})