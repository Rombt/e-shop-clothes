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
        this.menuList = burgerMenu.menuList;
        this.classActive = burgerMenu.classActive;
        this.burgerOpen = '.' + burgerMenu.burgerOpen;
        this.burgerClose = burgerMenu.burgerClose;

    }


    run() {

        let conteinerMenu = document.querySelector(this.conteiner);
        let burgerMenu = document.querySelector(this.menuList);

        conteinerMenu.addEventListener("click", () => {
            conteinerMenu.classList.toggle(this.classActive);
            burgerMenu.classList.toggle(this.burgerClose);
        });

    }



}