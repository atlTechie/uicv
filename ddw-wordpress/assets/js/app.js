gsap.fromTo("#home-title", {opacity: 0, y: -200, ease: "elastic"}, {opacity: 1, y:0, duration: .7,  } );
gsap.to("#home-byline", {opacity: 1, delay: .6});
gsap.fromTo("#home-message", {scale: 0, ease: "elastic"},{scale: 1, delay: .8, duration: .3});
gsap.fromTo("#instructions", {scale: 0,}, {scale: 1, delay: 1, duration: .3});
gsap.fromTo("#view-work", {opacity: 0, y: 300}, {opacity: 1, y: 0, delay: 1.2, duration: .3});

// Page Transitions
// barba.init({
//   transitions: [{
//     name: 'opacity-transition',
//     leave(data) {
//       return gsap.to(data.current.container, {
//         opacity: 1, background: "#ba181b"
//       });
//     },
//     enter(data) {
//       return gsap.from(data.next.container, {
//         opacity: 0
//       });
//     }
//   }]
// });