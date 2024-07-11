gsap.from("#home-content", {
    duration: 2,
    y: -50,
    opacity: 0,
    ease: "power2.out"
});

gsap.to(".phone-img", {
    duration: 0.75,
    x: 30,
    y: -30,
    ease: "power1.inOut",
    yoyo: true,
    repeat: 1,
    onComplete: function() {
        gsap.to(".phone-img", {x: 0, y: 0, duration: 0.5, ease: "power1.inOut"});
    }
});

gsap.registerPlugin(ScrollTrigger);

gsap.from("#computer-img", {
    x: '-100vw',
    scrollTrigger: {
        trigger: "#computer-img",
        start: "top 200%",
        end: "bottom 80%",
        scrub: true,
    }
});
