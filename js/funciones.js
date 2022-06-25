// Sin usar timelines solo tweens con delay
// gsap.to("#page", { y: 500, duration: 1 });
// gsap.to("#page", { y: 0, duration: 1, delay: 1 });
// gsap.to("#page", { opacity: 0, duration: 1, delay: 2 });
// gsap.to("#page", { opacity: 1, duration: 1, delay: 4 });

//animando con timelines
var lineaDeTiempo = gsap.timeline({ repeat: 0, repeatDelay: 0.5 });
lineaDeTiempo.to(".site-title", {
  opacity: 1,
  duration: 0.5,
  ease: Sine.easeIn,
});
lineaDeTiempo.to(".site-description", {
  opacity: 1,
  duration: 0.5,
  ease: Sine.easeIn,
});
lineaDeTiempo.to("#site-navigation", {
  opacity: 1,
  duration: 0.5,
  ease: Sine.easeIn,
});

lineaDeTiempo.to(".site-main", {
  opacity: 1,
  duration: 0.5,
  ease: Sine.easeIn,
});
lineaDeTiempo.to(".site-footer", {
  opacity: 1,
  duration: 0.5,
  ease: Sine.easeIn,
});

//propiedades de una linea de tiempo
// lineaDeTiempo.pause();
// lineaDeTiempo.resume();
// lineaDeTiempo.seek(1.5);
// lineaDeTiempo.reverse();
