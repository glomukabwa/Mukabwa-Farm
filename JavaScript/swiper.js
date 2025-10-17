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
    delay: 8000,
    disableOnInteraction: false,/**This ensures that after a user stops interacting with the slides, the automatic sliding continues. If it was false, after interaction, the slides would not automatically move anymore*/
  },
  effect: "slide",
});
