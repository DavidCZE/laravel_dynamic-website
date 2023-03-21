import Glide from '@glidejs/glide';

new Glide('.glide', {
  type: 'carousel',
  autoplay: 5000,
  animationDuration: 1000,
  animationTimingFunc: 'linear',
  perView: 1,
}).mount();
