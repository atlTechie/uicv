gsap.fromTo("#home-title", {opacity: 0, y: -200, ease: "elastic"}, {opacity: 1, y:0, duration: .7,  } );
gsap.to("#home-byline", {opacity: 1, delay: 1});
gsap.fromTo("#home-message", {scale: 0, ease: "elastic"},{scale: 1, delay: 1.2, duration: .3})