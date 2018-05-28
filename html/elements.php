<?
$PAGE['meta_title'] = "Элементы";
include($_SERVER['DOCUMENT_ROOT'] . "/templates/main/header.tpl.php");
?>

<div class="layout-main">
  <div class="design-elements">
    <div class="design-elements__row">
      <div class="design-elements__item">
        <div class="ttl-base">Заголовки</div>
        <div class="content">
          <h1>Заголовок h1</h1>
          <h2>Заголовок h2</h2>
          <h3>Заголовок h3</h3>
          <h4>Заголовок h4</h4>
          <h5>Заголовок h5</h5>
          <h6>Заголовок h6</h6>
        </div>
      </div>
      <div class="design-elements__item">
        <div class="ttl-base">Элементы форм</div>
        <div class="grid">
          <div class="grid__cell">
            <div class="form-base">
              <div class="form-base__field">
                <label class="inp-base">
                  <input type="text" name="name" class="inp-base__field js-inputField">
                  <span class="inp-base__lbl">Название</span>
                </label>
              </div>
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
          <div class="grid__cell">
            <label class="inp-base">
              <textarea name="message" class="inp-base__field js-inputField"></textarea>
              <span class="inp-base__lbl">Ваше сообщение</span>
            </label>
          </div>
        </div>
        <div class="grid">
          <div class="grid__cell">
            <label class="switch"><input type="radio" name="radio" class="switch__inp" checked><span class="switch__el"></span> radio 1</label>
          </div>
          <div class="grid__cell">
            <label class="switch"><input type="radio" name="radio" class="switch__inp" checked><span class="switch__el"></span> radio 2</label>
          </div>
          <div class="grid__cell">
            <label class="switch"><input type="checkbox" name="checkbox" class="switch__inp" checked><span class="switch__el"></span> checkbox</label>
          </div>
        </div>
      </div>
    </div>

    <div class="design-elements__row">
      <div class="design-elements__item">
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
        </div>
      </div>
    </div>

    <div class="design-elements__row">
      <div class="design-elements__item">
        <div class="ttl-base">Кнопки</div>
        <a href="#dialog" class="btn btn_base">Открыть диалог</a>
        <button class="btn btn_primary">Кнопка</button>
      </div>
      <div class="design-elements__item">
        <div class="ttl-base">
          <div class="ttl-base__text">Иконки</div>
        </div>
        <div class="grid">
          <div class="grid__cell">
            <h4>svg</h4>
            <?
              $dir  = $_SERVER['DOCUMENT_ROOT'] . '/skin/images/svg-sprite/';
              $files = scandir($dir);

              foreach ($files as $file) {
                $file = substr($file, 0, -4);

                if ($file) {?>
                  <svg class="svg-icon icon-<?=$file?>">
                    <use xlink:href="/skin/images/svg-sprite.svg#<?=$file?>"></use>
                  </svg>
                <?}
              }?>
          </div>
          <div class="grid__cell">
            <h4>png</h4>
            <?
            $dir  = $_SERVER['DOCUMENT_ROOT'] . '/skin/images/png-sprite/';
            $files = scandir($dir);

            foreach ($files as $file) {
              $file = substr($file, 0, -4);

              if ($file) {?>
                <span class="icon icon-<?=$file?>"></span>
              <?}
            }?>
          </div>
        </div>
      </div>
    </div>

    <div class="design-elements__row">
      <div class="design-elements__item">
        <div class="ttl-base">Контент</div>
        <div class="content">
          <div class="grid">
            <div class="grid__cell">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolores, eos illo magnam officia provident quod quos sapiente tenetur vel?</p>
              <ul>
                <li>Item 0</li>
                <li>Item 1</li>
                <li>Item 2</li>
              </ul>
              <ol>
                <li>Item 0</li>
                <li>Item 1</li>
                <li>Item 2</li>
              </ol>
            </div>
            <div class="grid__cell">
              <table width="100%">
                <tr>
                  <th>th</th>
                  <th>th</th>
                  <th>th</th>
                </tr>
                <tr>
                  <td>td</td>
                  <td>td</td>
                  <td>td</td>
                </tr>
                <tr>
                  <td>td</td>
                  <td>td</td>
                  <td>td</td>
                </tr>
                <tr>
                  <td>td</td>
                  <td>td</td>
                  <td>td</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<? include($_SERVER['DOCUMENT_ROOT'] . "/templates/main/footer.tpl.php"); ?>