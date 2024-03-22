export const ajax_scripts = jQuery(document).ready(function ($) {
  let typePage;

  let mainBlock;
  let TempBlock;

  let view_mod_0;
  let view_mod_1;
  let view_mod;

  let fullUrl = window.location.pathname.split('/');
  let currentPage = fullUrl[fullUrl.length - 2];

  let heightMainBlock;
  let animationParamsHide = {
    height: heightMainBlock + 'px',
    opacity: 0,
  };
  let animationParamsShow = {
    height: heightMainBlock + 'px',
    opacity: 1,
  };

  $('.select-view').on('click', function (e) {
    e.preventDefault();
    let typeView = $('.select-view').children().first().attr('class');

    if (typeView == 'select-view__recipes-page') {
      view_mod_0 = '2_columns';
      view_mod_1 = '3_columns';
      view_mod = $('.select-view__recipes-page>h3')
        .text()
        .toLowerCase()
        .replace(/ /g, '_');

      mainBlock = $('.recipes-page-container__row');
      TempBlock = $(
        '<div style="visibility: hidden;" class="recipes-page-container__row"></div>'
      );
    } else if (typeView == 'select-view__menu-page') {
      view_mod_0 = 'grid';
      view_mod_1 = 'list';
      view_mod = $('.select-view__menu-page>h3').text().toLowerCase();

      mainBlock = $('.menu-page-container__row');
      TempBlock = $(
        '<div style="visibility: hidden;" class="menu-page-container__row"></div>'
      );
    }

    console.log('window.location.pathname = ', window.location.pathname);
    if (window.location.pathname.includes('food-categories')) {
      typePage = 'taxonomy';
    } else if (
      window.location.pathname.includes('food-menu-items') ||
      window.location.pathname.includes('recipes')
    ) {
      typePage = 'custom_post_type';
    }

    $.ajax({
      url: rstrAppData.rstrAjaxURL,
      type: 'POST',
      data: {
        action: 'menu_page_view',
        nonce: rstrAppData.rstrAjaxNonceView,
        view_mod: view_mod,
        paged: currentPage,
        type_view: typeView,
        type_page: typePage,
      },
      success: function (response) {
        $(e.target).html(
          view_mod == view_mod_1
            ? view_mod_0.replace(/_/g, ' ')
            : view_mod_1.replace(/_/, ' ')
        );
        TempBlock.html(response);
        $('.menu-page-container__row').append(TempBlock);
        heightMainBlock = TempBlock.height();
        TempBlock.remove();

        mainBlock.animate(animationParamsHide, {
          duration: 500,
          complete: function () {
            mainBlock.empty();
          },
        });

        mainBlock.animate(animationParamsShow, {
          duration: 500,
          start: function () {
            mainBlock.html(response);
          },
        });
      },
      error: function (xhr, status, error) {
        // console.log('Ошибка при обновлении значения поля:', error);
      },
    });
  });
});
