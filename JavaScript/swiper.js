const swiper = new Swiper(".productSwiper", {/**Specify the name of the swiper, remember we can have many different swippers */
  loop: true,/**true means that the loop is infinite. If u click next on the last slide, it takes u to the first slide. false does the opposite */
  navigation: {
    nextEl: ".swiper-button-next",/**Specify the arrow to the next page */
    prevEl: ".swiper-button-prev",/**Specify the arrow to the previous page */
    /**You don't have to put icons for the buttons or the pagination dots. The swiper library just puts them for u but then u can do and style them in css or u can change the icons to the ones u want*/
  },
  pagination: {
    el: ".swiper-pagination",/**Specify the dots */
    clickable: true,/**This ensures that you can move to the slides through precing the small buttons at the bottom */
  },
  autoplay: {
    delay: 5000,
    disableOnInteraction: true,/**disableOnInteraction checks what u want to happen after a user interacts with the slides. If it is true, after interaction, the slides would not automatically move anymore. If it is fasle, after interaction, they will continue automatically moving*/
  },
  effect: "fade",
  fadeEffect: {
    crossFade: true,
    /*If crossFade is true, both the outgoing slide and the incoming slide fade simultaneously.
    This creates a smooth crossfade effect where the old slide gradually disappears while the new one appears.
    If crossFade is false, the outgoing slide fades out first, and then the incoming slide fades in.
    The fade happens sequentially rather than overlapping.*/
  },
  speed:2000,/*This defines the speed of transition so in this case, the time it takes to fade old content to new content */
});
