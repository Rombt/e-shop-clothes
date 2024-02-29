export class Burger {

    constructor(burgerMenu) {
        this.conteiner = '.' + burgerMenu.conteiner;
        this.classActive = burgerMenu.classActive;
        this.burgerOpen = '.' + burgerMenu.burgerOpen;      // icon which opening menu
        this.burgerClose = burgerMenu.burgerClose;          // icon which closing menu
    }

    init() {
        let conteinerMenu = document.querySelector(this.conteiner);
        let burgerOpen = document.querySelector(this.burgerOpen);

        if (conteinerMenu === null || burgerOpen === null) {

            return false;
        } else {
            burgerOpen.addEventListener("click", () => {
                try {
                    conteinerMenu.classList.toggle(this.classActive);
                    burgerOpen.classList.toggle(this.burgerClose);

                } catch (error) {
                    return error;
                }
            })
        }
    }




}