export class Burger {

    /*

      <div class="conteiner-menu-burger burger-open">
         <span></span>
      </div>
    <nav class="menu conteiner-menu _active">
        <ul class="conteiner-menu__list">
            <li class="food-menu__item"><a class="conteiner-menu__link" href="#">samething</a></li>
        </ul>
    </nav>


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