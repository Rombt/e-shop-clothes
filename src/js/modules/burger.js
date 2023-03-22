export class Burger {

    /*

    burgerMenu={

            conteiner: '',
            menuList: '',
            classActive: '',
            burgerOpen: '',
            burgerClose: '',


    }


    */

    constructor(burgerMenu) {

        this.conteiner = '.' + burgerMenu.conteiner;
        this.classActive = burgerMenu.classActive;
        this.burgerOpen = '.' + burgerMenu.burgerOpen;
        this.burgerClose = burgerMenu.burgerClose;

    }


    init() {

        let conteinerMenu = document.querySelector(this.conteiner);

        let burgerOpen = document.querySelector(this.burgerOpen);

        burgerOpen.addEventListener("click", () => {
            conteinerMenu.classList.toggle(this.classActive);
            burgerOpen.classList.toggle(this.burgerClose);
        });

    }




}