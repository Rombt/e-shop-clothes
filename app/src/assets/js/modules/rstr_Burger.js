export class Burger {
  constructor(burgerMenu) {
    this.container = '.' + burgerMenu.container;
    this.classActive = burgerMenu.classActive;
    this.burgerOpen = '.' + burgerMenu.burgerOpen; // icon which opening menu
    this.burgerClose = burgerMenu.burgerClose; // icon which closing menu
  }

  init() {
    let containerMenu = document.querySelector(this.container);
    let burgerOpen = document.querySelector(this.burgerOpen);

    if (containerMenu === null || burgerOpen === null) {
      return false;
    } else {
      burgerOpen.addEventListener('click', () => {
        try {
          containerMenu.classList.toggle(this.classActive);
          burgerOpen.classList.toggle(this.burgerClose);
        } catch (error) {
          return error;
        }
      });
    }
  }
}
