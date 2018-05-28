<?
  $PAGE['meta_title'] = "¡Ay caramba!";
  $page = 'index';
  include($_SERVER['DOCUMENT_ROOT'] . "/templates/main/header.tpl.php");
?>

<form class="main-filter filter-form" action="" method="GET">
  <div class="layout-main-tablet">
    <div class="form-base">
      <div class="form-base__row">
        <div class="form-base__field">
          <label class="inp-base">
            <input type="text" name="name" class="inp-base__field js-inputField">
            <span class="inp-base__lbl">Название</span>
          </label>
        </div>

        <div class="form-base__row form-base__row_2col">
          <div class="form-base__field">
            <label class="inp-base">
              <input type="text" name="year" class="inp-base__field js-inputField">
              <span class="inp-base__lbl">Год</span>
            </label>
          </div>

          <div class="form-base__field">
            <label class="inp-base">
              <input type="text" name="price" class="inp-base__field js-inputField js-priceMask">
              <span class="inp-base__lbl">Цена</span>
            </label>
          </div>
        </div>
      </div>

      <div class="form-base__row">
        <div class="form-base__field">
          <label class="inp-base">
            <input type="text" name="description" class="inp-base__field js-inputField">
            <span class="inp-base__lbl">Описание</span>
          </label>
        </div>
      </div>

      <div class="form-base__row">
        <div class="form-base__field">
          <div class="color-filter">
            <div class="color-filter__ttl">Цвет</div>
            <div class="color-filter__list">
              <div class="color-filter__item">
                <label class="color-switch">
                  <input type="checkbox" name="color1" class="color-switch__inp" value="white">
                  <span class="color-switch__el color-switch__el_border" style="background-color: white;"></span>
                </label>
              </div>
              <div class="color-filter__item">
                <label class="color-switch">
                  <input type="checkbox" name="color2" class="color-switch__inp" value="black">
                  <span class="color-switch__el" style="background-color: black;"></span>
                </label>
              </div>
              <div class="color-filter__item">
                <label class="color-switch">
                  <input type="checkbox" name="color3" class="color-switch__inp" value="gray" checked>
                  <span class="color-switch__el" style="background-color: #cbcbcc;"></span>
                </label>
              </div>
              <div class="color-filter__item">
                <label class="color-switch">
                  <input type="checkbox" name="color4" class="color-switch__inp" value="pink">
                  <span class="color-switch__el" style="background-color: #d74345;"></span>
                </label>
              </div>
              <div class="color-filter__item">
                <label class="color-switch">
                  <input type="checkbox" name="color5" class="color-switch__inp" value="acid">
                  <span class="color-switch__el" style="background-color: #88c504;"></span>
                </label>
              </div>
            </div>
          </div>
        </div>

        <div class="form-base__row form-base__row_2col">
          <div class="form-base__field">
            <select name="status" class="select-base">
              <option value="">Статус</option>
              <option value="in-stock">В наличии</option>
              <option value="pending">Ожидается</option>
              <option value="out-of-stock">Нет в наличии</option>
            </select>
          </div>


          <div class="form-base__field">
            <button class="btn btn_primary btn_full-width" href="#">
              <span>Отправить</span>
              <svg class="svg-icon icon-arrow_small">
                <use xlink:href="/skin/images/svg-sprite.svg#arrow_small"></use>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

<div class="main-car-table">
  <div class="subttl-base tablet-hide">Автомобили в наличии</div>
  <div class="car-table">
    <div class="car-table__tbody">
      <div class="car-table__tr">
        <div class="car-table__cell car-table__cell_th car-table__cell_name">Название</div>
        <div class="car-table__cell car-table__cell_th car-table__cell_year">Год</div>
        <div class="car-table__cell car-table__cell_th car-table__cell_color">Цвет</div>
        <div class="car-table__cell car-table__cell_th car-table__cell_status">Статус</div>
        <div class="car-table__cell car-table__cell_th car-table__cell_price">Цена</div>
        <div class="car-table__cell car-table__cell_th car-table__cell_other"></div>
      </div>

      <?for ($i = 0; $i < 4; $i++) {?>
      <div class="car-table__tr">
        <div class="car-table__cell car-table__cell_name"><a href="#">1.6 MT Ambiente 85 л.с. МКПП</a><div class="car-table__desc">+ доп. опция «Радио-навигационная система Amundasen 2DIN, CD, MP3</div></div>
        <div class="car-table__cell car-table__cell_desc">+ доп. опция «Радио-навигационная система Amundasen 2DIN, CD, MP3</div>
        <div class="car-table__cell car-table__cell_year">2012</div>
        <div class="car-table__cell car-table__cell_color"><div class="car-table__color" style="background-color: black;"></div></div>
        <div class="car-table__cell car-table__cell_status">Ожидается</div>
        <div class="car-table__cell car-table__cell_price">1 689 000 руб.</div>
        <div class="car-table__cell car-table__cell_other"><a class="delete-btn" href="#">Удалить</a></div>
      </div>
      <?}?>
  </div>
</div>

<? include($_SERVER['DOCUMENT_ROOT'] . "/templates/main/footer.tpl.php"); ?>